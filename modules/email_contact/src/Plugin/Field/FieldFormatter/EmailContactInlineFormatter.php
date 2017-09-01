<?php

namespace Drupal\email_contact\Plugin\Field\FieldFormatter;

// FormatterBase class.
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\FieldItemListInterface;
// Entityinterface.
use Drupal\Core\Entity\EntityInterface;
// Fieldinterface.
use Drupal\Core\Entity\Field\FieldInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Plugin implementation of the 'email_contact_inline' formatter.
 *
 * @FieldFormatter(
 *   id = "email_contact_inline",
 *   label = @Translation("Email contact inline"),
 *   field_types = {
 *     "email",
 *   },
 *   settings = {
 *     "redirection_to" = "front",
 *     "custom_path" = "",
 *     "default_message" = "[current-user:name] sent a message using the
 *     contact form at [current-page:url]."
 *   }
 * )
 */
class EmailContactInlineFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $element = array();

    $element['redirection_to'] = array(
      '#title' => t('Redirection after form submit'),
      '#type' => 'radios',
      '#options' => array(
        'front' => t('To the frontpage'),
        'current' => t('To the current page'),
        'custom' => t('To a custom path'),
      ),
      '#default_value' => $this->getSetting('redirection_to'),
      '#required' => TRUE,
    );

    $element['custom_path'] = array(
      '#title' => t('Redirection path'),
      '#type' => 'textfield',
      '#states' => array(
        'visible' => array(
          'input[name="redirection_to"]' => array('value' => 'custom'),
        ),
      ),
      '#default_value' => $this->getSetting('custom_path'),
      '#element_validate' => [[$this, 'validateCustomPath']],
    );

    $element['default_message'] = array(
      '#title' => t('Additional message in email body'),
      '#type' => 'textfield',
      '#default_value' => $this->getSetting('default_message'),
    );

    if (\Drupal::moduleHandler()->moduleExists('token')) {
      $element['token_help'] = array(
        '#theme' => 'token_tree',
        '#token_types' => array('node'),
      );
    }
    return $element;
  }

  public static function defaultSettings() {
    return array(
      'redirection_to' => 'front',
      'custom_path' => '',
      'default_message' => '',
    ) + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = array();
    $summary[] = t('Displays a contact form for this email.');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array();
    foreach ($items as $delta => $item) {
      $entity = $item->getEntity();
      $name = 'field_email';
      $elements[$delta]['form'] = \Drupal::formBuilder()->getForm(
        'Drupal\email_contact\Form\ContactForm',
        $entity->getType(), $entity->id(), $items->getName(), $this->getSettings()
      );
      break;
    }

    return $elements;
  }

  public function validateCustomPath($element, FormStateInterface $form_state) {
    $settings = $this->getSettings();
    if ('custom' == $settings['redirection_to']) {
      if (empty($element['#value'])) {
        $form_state->setError($element, $this->t('The custom path is required!'));
      }
      if (!UrlHelper::isValid($element['#value'])) {
        $form_state->setError($element, $this->t('The given url is not valid!'));
      }
    }
  }
}
