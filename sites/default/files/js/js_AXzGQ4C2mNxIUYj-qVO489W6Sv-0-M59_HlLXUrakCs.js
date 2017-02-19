/**
 * @file
 * Dialog API inspired by HTML5 dialog element.
 *
 * @see http://www.whatwg.org/specs/web-apps/current-work/multipage/commands.html#the-dialog-element
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Default dialog options.
   *
   * @type {object}
   *
   * @prop {bool} [autoOpen=true]
   * @prop {string} [dialogClass='']
   * @prop {string} [buttonClass='button']
   * @prop {string} [buttonPrimaryClass='button--primary']
   * @prop {function} close
   */
  drupalSettings.dialog = {
    autoOpen: true,
    dialogClass: '',
    // Drupal-specific extensions: see dialog.jquery-ui.js.
    buttonClass: 'button',
    buttonPrimaryClass: 'button--primary',
    // When using this API directly (when generating dialogs on the client
    // side), you may want to override this method and do
    // `jQuery(event.target).remove()` as well, to remove the dialog on
    // closing.
    close: function (event) {
      Drupal.detachBehaviors(event.target, null, 'unload');
    }
  };

  /**
   * @typedef {object} Drupal.dialog~dialogDefinition
   *
   * @prop {boolean} open
   *   Is the dialog open or not.
   * @prop {*} returnValue
   *   Return value of the dialog.
   * @prop {function} show
   *   Method to display the dialog on the page.
   * @prop {function} showModal
   *   Method to display the dialog as a modal on the page.
   * @prop {function} close
   *   Method to hide the dialog from the page.
   */

  /**
   * Polyfill HTML5 dialog element with jQueryUI.
   *
   * @param {HTMLElement} element
   * @param {object} options
   *   jQuery UI options to be passed to the dialog.
   *
   * @return {Drupal.dialog~dialogDefinition}
   */
  Drupal.dialog = function (element, options) {
    var $element = $(element);

    function openDialog(settings) {
      settings = $.extend({}, drupalSettings.dialog, options, settings);
      // Trigger a global event to allow scripts to bind events to the dialog.
      $(window).trigger('dialog:beforecreate', [dialog, $element, settings]);
      $element
        .modal(settings)
        .on('shown.bs.modal.drupal', function () {
          dialog.open = true;
          $(window).trigger('dialog:aftercreate', [dialog, $element, settings]);
        })
      ;
    }

    function closeDialog(value) {
      $(window).trigger('dialog:beforeclose', [dialog, $element]);
      $element
        .on('hidden.bs.modal.drupal', function () {
          dialog.returnValue = value;
          dialog.open = false;
          $(window).trigger('dialog:afterclose', [dialog, $element]);
        })
        .modal('hide');
    }

    var dialog = {
      open: false,
      returnValue: void(0),
      show: function () {
        openDialog({show: false});
      },
      showModal: function () {
        openDialog({show: true});
      },
      close: closeDialog
    };

    return dialog;
  };

})(jQuery, Drupal, drupalSettings);
;
/**
 * @file
 * Extends the Drupal AJAX functionality to integrate the dialog API.
 */

(function ($, Drupal) {
  'use strict';

  /**
   * Initialize dialogs for Ajax purposes.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.dialog = {
    attach: function (context, settings) {
      var $context = $(context);

      // Provide a known 'drupal-modal' DOM element for Drupal-based modal
      // dialogs. Non-modal dialogs are responsible for creating their own
      // elements, since there can be multiple non-modal dialogs at a time.
      if (!$('#drupal-modal').length) {
        $(Drupal.theme.bootstrapModal()).appendTo('body');
      }

      // Special behaviors specific when attaching content within a dialog.
      // These behaviors usually fire after a validation error inside a dialog.
      var $dialog = $context.closest('.modal');
      if ($dialog.length) {
        // Remove and replace the dialog buttons with those from the new form.
        if ($dialog.modal('option', 'drupalAutoButtons')) {
          // Trigger an event to detect/sync changes to buttons.
          $dialog.trigger('dialogButtonsChange');
        }

        // Attempt to force focus on the first visible input (not :input) in
        // the modal body when the behavior is run.
        Drupal.behaviors.dialog.focus($dialog);
      }

      var originalClose = settings.dialog.close;
      // Overwrite the close method to remove the dialog on closing.
      settings.dialog.close = function (event) {
        originalClose.apply(settings.dialog, arguments);
        $(event.target).remove();
      };
    },

    /**
     * Attempt to focus the first visible input (not :input) in the modal body.
     *
     * @param {jQuery} $dialog
     *   An jQuery object containing the element that is the dialog target.
     */
    focus: function ($dialog) {
      $dialog.find('.modal-body input:visible:first').trigger('focus');
    },

    /**
     * Scan a dialog for any primary buttons and move them to the button area.
     *
     * @param {jQuery} $dialog
     *   An jQuery object containing the element that is the dialog target.
     *
     * @return {Array}
     *   An array of buttons that need to be added to the button area.
     */
    prepareDialogButtons: function ($dialog) {
      var buttons = [];
      var $buttons = $dialog.find('.form-actions :input[type=submit]');
      $buttons.each(function () {
        // Hidden form buttons need special attention. For browser consistency,
        // the button needs to be "visible" in order to have the enter key fire
        // the form submit event. So instead of a simple "hide" or
        // "display: none", we set its dimensions to zero.
        // See http://mattsnider.com/how-forms-submit-when-pressing-enter/
        var $originalButton = $(this).css({
          display: 'block',
          width: 0,
          height: 0,
          padding: 0,
          border: 0
        });
        buttons.push({
          text: $originalButton.html() || $originalButton.attr('value'),
          class: $originalButton.attr('class'),
          click: function (e) {
            $originalButton.trigger('mousedown').trigger('mouseup').trigger('click');
            e.preventDefault();
          }
        });
      });
      return buttons;
    }
  };

  /**
   * Command to open a dialog.
   *
   * @param {Drupal.Ajax} ajax
   * @param {object} response
   * @param {number} [status]
   *
   * @return {bool|undefined}
   */
  Drupal.AjaxCommands.prototype.openDialog = function (ajax, response, status) {
    if (!response.selector) {
      return false;
    }

    var $dialog = $(response.selector);
    if (!$dialog.length) {
      // Create the element if needed.
      $dialog = $(Drupal.theme.bootstrapModal({ id: response.selector.replace(/^#/, '') })).appendTo('body');
    }
    // Set up the wrapper, if there isn't one.
    var id = $dialog.attr('id');
    if (response.selector === '#' + id) {
      response.selector = '#' + id + '--body';
    }
    else if (!ajax.wrapper) {
      ajax.wrapper = id + '--body';
    }

    // Use the ajax.js insert command to populate the dialog contents.
    response.command = 'insert';
    response.method = 'html';
    ajax.commands.insert(ajax, response, status);

    // Move the buttons to the jQuery UI dialog buttons area.
    if (!response.dialogOptions.buttons) {
      response.dialogOptions.drupalAutoButtons = true;
      response.dialogOptions.buttons = Drupal.behaviors.dialog.prepareDialogButtons($dialog);
    }

    // Bind dialogButtonsChange.
    $dialog.on('dialogButtonsChange', function () {
      var buttons = Drupal.behaviors.dialog.prepareDialogButtons($dialog);
      $dialog.modal('option', 'buttons', buttons);
    });

    // Open the dialog itself.
    response.dialogOptions = response.dialogOptions || {};
    var dialog = Drupal.dialog($dialog.get(0), response.dialogOptions);
    if (response.dialogOptions.modal) {
      dialog.showModal();
    }
    else {
      dialog.show();
    }

    // Add the standard Drupal class for buttons for style consistency.
    $dialog.parent().find('.ui-dialog-buttonset').addClass('form-actions');
  };

  /**
   * Command to close a dialog.
   *
   * If no selector is given, it defaults to trying to close the modal.
   *
   * @param {Drupal.Ajax} [ajax]
   * @param {object} response
   * @param {string} response.selector
   * @param {bool} response.persist
   * @param {number} [status]
   */
  Drupal.AjaxCommands.prototype.closeDialog = function (ajax, response, status) {
    var $dialog = $(response.selector);
    if ($dialog.length) {
      Drupal.dialog($dialog.get(0)).close();
      if (!response.persist) {
        // Wrap this in a timer so animations can finish.
        setTimeout(function() {
          $dialog.remove();
        }, 1000);
      }
    }

    // Unbind dialogButtonsChange.
    $dialog.off('dialogButtonsChange');
  };

  /**
   * Command to set a dialog property.
   *
   * JQuery UI specific way of setting dialog options.
   *
   * @param {Drupal.Ajax} [ajax]
   * @param {object} response
   * @param {string} response.selector
   * @param {string} response.optionsName
   * @param {string} response.optionValue
   * @param {number} [status]
   */
  Drupal.AjaxCommands.prototype.setDialogOption = function (ajax, response, status) {
    var $dialog = $(response.selector);
    if ($dialog.length) {
      $dialog.modal('option', response.optionName, response.optionValue);
    }
  };

  /**
   * Binds a listener on dialog before creation to setup title and buttons.
   *
   * @param {jQuery.Event} e
   * @param {Drupal.dialog} dialog
   * @param {jQuery} $element
   * @param {object} settings
   */
  $(window).on('dialog:beforecreate', function (e, dialog, $element, settings) {
    // Replace title.
    if (settings.title) {
      var $header = $element.find('.modal-header');
      if (!$header[0]) {
        $header = $(Drupal.theme.bootstrapModalHeader()).prependTo($element.find('.modal-content'));
      }
      $header.find('.modal-title').text(Drupal.checkPlain(settings.title));
    }

    // Remove any existing buttons.
    $element.find('.modal-footer').remove();

    // Add new buttons.
    if (settings.buttons && settings.buttons.length) {
      var $footer = $(Drupal.theme.bootstrapModalFooter('', true)).appendTo($element.find('.modal-content'));
      for (var i in settings.buttons) {
        if (!settings.buttons.hasOwnProperty(i)) continue;
        var button = settings.buttons[i];
        $('<button class="' + button.class + '">' + button.text + '</button>')
          .appendTo($footer)
          .on('click', button.click);
      }
    }
  });

  /**
   * Binds a listener on dialog creation to handle the cancel link.
   *
   * @param {jQuery.Event} e
   * @param {Drupal.dialog} dialog
   * @param {jQuery} $element
   * @param {object} settings
   */
  $(window).on('dialog:aftercreate', function (e, dialog, $element, settings) {
    Drupal.behaviors.dialog.focus($element);
    $element.on('click.dialog', '.dialog-cancel', function (e) {
      dialog.close('cancel');
      e.preventDefault();
      e.stopPropagation();
    });
  });

  /**
   * Removes all 'dialog' listeners.
   *
   * @param {jQuery.Event} e
   * @param {Drupal.dialog} dialog
   * @param {jQuery} $element
   */
  $(window).on('dialog:beforeclose', function (e, dialog, $element) {
    $element.off('.modal.drupal');
  });

})(jQuery, Drupal);
;
/**
 * @file
 * Block admin behaviors.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Filters the block list by a text input search string.
   *
   * The text input will have the selector `input.block-filter-text`.
   *
   * The target element to do searching in will be in the selector
   * `input.block-filter-text[data-element]`
   *
   * The text source where the text should be found will have the selector
   * `.block-filter-text-source`
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches the behavior for the block filtering.
   */
  Drupal.behaviors.blockFilterByText = {
    attach: function (context, settings) {
      var $input = $('input.block-filter-text').once('block-filter-text');
      var $table = $($input.attr('data-element'));
      var $filter_rows;

      /**
       * Filters the block list.
       *
       * @param {jQuery.Event} e
       *   The jQuery event for the keyup event that triggered the filter.
       */
      function filterBlockList(e) {
        var query = $(e.target).val().toLowerCase();

        /**
         * Shows or hides the block entry based on the query.
         *
         * @param {number} index
         *   The index in the loop, as provided by `jQuery.each`
         * @param {HTMLElement} label
         *   The label of the block.
         */
        function toggleBlockEntry(index, label) {
          var $label = $(label);
          var $row = $label.parent().parent();
          var textMatch = $label.text().toLowerCase().indexOf(query) !== -1;
          $row.toggle(textMatch);
        }

        // Filter if the length of the query is at least 2 characters.
        if (query.length >= 2) {
          $filter_rows.each(toggleBlockEntry);
        }
        else {
          $filter_rows.each(function (index) {
            $(this).parent().parent().show();
          });
        }
      }

      if ($table.length) {
        $filter_rows = $table.find('div.block-filter-text-source');
        $input.on('keyup', filterBlockList);
      }
    }
  };

  /**
   * Highlights the block that was just placed into the block listing.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches the behavior for the block placement highlighting.
   */
  Drupal.behaviors.blockHighlightPlacement = {
    attach: function (context, settings) {
      if (settings.blockPlacement) {
        $(context).find('[data-drupal-selector="edit-blocks"]').once('block-highlight').each(function () {
          var $container = $(this);
          // Just scrolling the document.body will not work in Firefox. The html
          // element is needed as well.
          $('html, body').animate({
            scrollTop: $('.js-block-placed').offset().top - $container.offset().top + $container.scrollTop()
          }, 500);
        });
      }
    }
  };

}(jQuery, Drupal));
;
/**
 * @file
 * Responsive table functionality.
 */

(function ($, Drupal, window) {

  'use strict';

  /**
   * Attach the tableResponsive function to {@link Drupal.behaviors}.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches tableResponsive functionality.
   */
  Drupal.behaviors.tableResponsive = {
    attach: function (context, settings) {
      var $tables = $(context).find('table.responsive-enabled').once('tableresponsive');
      if ($tables.length) {
        var il = $tables.length;
        for (var i = 0; i < il; i++) {
          TableResponsive.tables.push(new TableResponsive($tables[i]));
        }
      }
    }
  };

  /**
   * The TableResponsive object optimizes table presentation for screen size.
   *
   * A responsive table hides columns at small screen sizes, leaving the most
   * important columns visible to the end user. Users should not be prevented
   * from accessing all columns, however. This class adds a toggle to a table
   * with hidden columns that exposes the columns. Exposing the columns will
   * likely break layouts, but it provides the user with a means to access
   * data, which is a guiding principle of responsive design.
   *
   * @constructor Drupal.TableResponsive
   *
   * @param {HTMLElement} table
   *   The table element to initialize the responsive table on.
   */
  function TableResponsive(table) {
    this.table = table;
    this.$table = $(table);
    this.showText = Drupal.t('Show all columns');
    this.hideText = Drupal.t('Hide lower priority columns');
    // Store a reference to the header elements of the table so that the DOM is
    // traversed only once to find them.
    this.$headers = this.$table.find('th');
    // Add a link before the table for users to show or hide weight columns.
    this.$link = $('<button type="button" class="link tableresponsive-toggle"></button>')
      .attr('title', Drupal.t('Show table cells that were hidden to make the table fit within a small screen.'))
      .on('click', $.proxy(this, 'eventhandlerToggleColumns'));

    this.$table.before($('<div class="tableresponsive-toggle-columns"></div>').append(this.$link));

    // Attach a resize handler to the window.
    $(window)
      .on('resize.tableresponsive', $.proxy(this, 'eventhandlerEvaluateColumnVisibility'))
      .trigger('resize.tableresponsive');
  }

  /**
   * Extend the TableResponsive function with a list of managed tables.
   */
  $.extend(TableResponsive, /** @lends Drupal.TableResponsive */{

    /**
     * Store all created instances.
     *
     * @type {Array.<Drupal.TableResponsive>}
     */
    tables: []
  });

  /**
   * Associates an action link with the table that will show hidden columns.
   *
   * Columns are assumed to be hidden if their header has the class priority-low
   * or priority-medium.
   */
  $.extend(TableResponsive.prototype, /** @lends Drupal.TableResponsive# */{

    /**
     * @param {jQuery.Event} e
     *   The event triggered.
     */
    eventhandlerEvaluateColumnVisibility: function (e) {
      var pegged = parseInt(this.$link.data('pegged'), 10);
      var hiddenLength = this.$headers.filter('.priority-medium:hidden, .priority-low:hidden').length;
      // If the table has hidden columns, associate an action link with the
      // table to show the columns.
      if (hiddenLength > 0) {
        this.$link.show().text(this.showText);
      }
      // When the toggle is pegged, its presence is maintained because the user
      // has interacted with it. This is necessary to keep the link visible if
      // the user adjusts screen size and changes the visibility of columns.
      if (!pegged && hiddenLength === 0) {
        this.$link.hide().text(this.hideText);
      }
    },

    /**
     * Toggle the visibility of columns based on their priority.
     *
     * Columns are classed with either 'priority-low' or 'priority-medium'.
     *
     * @param {jQuery.Event} e
     *   The event triggered.
     */
    eventhandlerToggleColumns: function (e) {
      e.preventDefault();
      var self = this;
      var $hiddenHeaders = this.$headers.filter('.priority-medium:hidden, .priority-low:hidden');
      this.$revealedCells = this.$revealedCells || $();
      // Reveal hidden columns.
      if ($hiddenHeaders.length > 0) {
        $hiddenHeaders.each(function (index, element) {
          var $header = $(this);
          var position = $header.prevAll('th').length;
          self.$table.find('tbody tr').each(function () {
            var $cells = $(this).find('td').eq(position);
            $cells.show();
            // Keep track of the revealed cells, so they can be hidden later.
            self.$revealedCells = $().add(self.$revealedCells).add($cells);
          });
          $header.show();
          // Keep track of the revealed headers, so they can be hidden later.
          self.$revealedCells = $().add(self.$revealedCells).add($header);
        });
        this.$link.text(this.hideText).data('pegged', 1);
      }
      // Hide revealed columns.
      else {
        this.$revealedCells.hide();
        // Strip the 'display:none' declaration from the style attributes of
        // the table cells that .hide() added.
        this.$revealedCells.each(function (index, element) {
          var $cell = $(this);
          var properties = $cell.attr('style').split(';');
          var newProps = [];
          // The hide method adds display none to the element. The element
          // should be returned to the same state it was in before the columns
          // were revealed, so it is necessary to remove the display none value
          // from the style attribute.
          var match = /^display\s*\:\s*none$/;
          for (var i = 0; i < properties.length; i++) {
            var prop = properties[i];
            prop.trim();
            // Find the display:none property and remove it.
            var isDisplayNone = match.exec(prop);
            if (isDisplayNone) {
              continue;
            }
            newProps.push(prop);
          }
          // Return the rest of the style attribute values to the element.
          $cell.attr('style', newProps.join(';'));
        });
        this.$link.text(this.showText).data('pegged', 0);
        // Refresh the toggle link.
        $(window).trigger('resize.tableresponsive');
      }
    }
  });

  // Make the TableResponsive object available in the Drupal namespace.
  Drupal.TableResponsive = TableResponsive;

})(jQuery, Drupal, window);
;
/**
 * @file
 * Provides a click handler for buttons in dropdown menus.
 */

(function ($) {
  "use strict";

  // Delegates links that are really "actions" (buttons) in the dropdown menu
  // to the actual button so it can actually submit the form.
  $(document).on('click', 'a[data-target="dropdown-button"]', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).parent().find('button').trigger('click');
  });

  // Handle buttons that used to be dropbutton links.
  // @see \Drupal\bootstrap\Plugin\Preprocess\BootstrapDropdown::preprocessLinks
  $(document).on('click', '.btn-group button[data-url], .dropdown button[data-url]', function (e) {
    var url = $(this).data('url');
    if (url) {
      e.preventDefault();
      e.stopPropagation();
      window.location = url;
    }
  });

})(jQuery);
;
