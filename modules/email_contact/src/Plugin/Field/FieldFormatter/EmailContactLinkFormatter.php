<?php

namespace Drupal\email_contact\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\FieldItemListInterface;
// Entityinterface.
use Drupal\Core\Entity\EntityInterface;
// Fieldinterface.
use Drupal\Core\Entity\Field\FieldInterface;
use Drupal\Core\Url;

/**
 * Plugin implementation of the 'email_contact_link' formatter.
 *
 * @FieldFormatter(
 *   id = "email_contact_link",
 *   label = @Translation("Email contact link"),
 *   field_types = {
 *     "email",
 *   },
 *   settings = {
 *     "link_text" = "Contact person by email"
 *   }
 * )
 */
class EmailContactLinkFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $element = array();

    $element['link_text'] = array(
      '#title' => t('Link text'),
      '#type' => 'textfield',
      '#default_value' => $this->getSettings()['link_text'],
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
      'link_text' => t('Contact person by email'),
    ) + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = array();
    $summary[] = t('Displays a link to a contact form.');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array();
    foreach ($items as $delta => $item) {
      $entity = $item->getEntity();
      $elements[$delta]['#markup'] = \Drupal::l(
        $this->getSetting('link_text'),
        new Url('email_contact.form', array(
          'type' => $entity->getType(),
          'id' => $entity->id(),
          'field_name' => $items->getName()
        ))
      );
      break;
    }

    return $elements;
  }

}
