<?php

namespace Drupal\email_contact\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Mail\MailManagerInterface;


class ContactForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'email_contact_mail_page_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $type = NULL, $id = NULL, $field_name = NULL, $settings = NULL) {
    $user = \Drupal::currentUser();
    $emails = email_contact_get_emails_from_field($type, $id, $field_name);
    $form['emails'] = array(
      '#type' => 'value',
      '#value' => serialize($emails),
    );
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Your name'),
      '#maxlength' => 255,
      '#default_value' => $user->id() ? $user->getUsername() : '',
      '#required' => TRUE,
    );
    $form['mail'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Your e-mail address'),
      '#maxlength' => 255,
      '#default_value' => $user->id() ? $user->getEmail() : '',
      '#required' => TRUE,
    );
    $form['subject'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Subject'),
      '#maxlength' => 255,
      '#required' => TRUE,
    );
    $form['message'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Message'),
      '#required' => TRUE,
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Send e-mail'),
    );

    if (!$form_state->get('settings')) {
      $form_state->set('settings', $settings);
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (!valid_email_address($form_state->getValue('mail'))) {
      $form_state->setErrorByName('mail', $this->t('You must enter a valid e-mail address.'));
    }
    if (preg_match("/\r|\n/", $form_state->getValue('subject'))) {
      $form_state->setErrorByName('subject', $this->t('The subject cannot contain linebreaks.'));
      $msg = 'Email injection exploit attempted in email form subject: ' . check_plain($form_state['values']['subject']);
      watchdog('mail', $msg, WATCHDOG_NOTICE);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $emails = unserialize($form_state->getValue('emails'));

    // E-mail address of the sender: as the form field is a text field,
    // all instances of \r and \n have been automatically stripped from it.
    $from = $form_state->getValue('mail');

    $params['subject'] = $form_state->getValue('subject');
    $params['name'] = $form_state->getValue('name');
    $params['default_message'] = $form_state->getValue('default_message');
    $params['message'] = $form_state->getValue('message');

    // Send the e-mail to the recipients.
    $mailManager = \Drupal::service('plugin.manager.mail');
    $to = implode(', ', $emails);
    $module = 'email_contact';
    $key = 'contact';
    $langcode = \Drupal::currentUser()->getPreferredLangcode();
    $send = true;
    $result = $mailManager->mail($module, $key, $to, $langcode, $params, $from, $send);
    if ($result['result'] !== true) {
      drupal_set_message($this->t('There was a problem sending your message and it was not sent.'), 'error');
    }
    else {
      drupal_set_message($this->t('Your message has been sent.'));
    }

    $redirect = '<front>';
    $settings = $form_state->get('settings');
    if (!empty($settings['redirection_to'])) {
      switch ($settings['redirection_to']) {
        case 'current':
          $redirect = NULL;
          break;

        case 'custom':
          $redirect = $settings['custom_path'];
          break;

        default:
          // TODO: $form_state['redirect'] = $path.
          break;

      }
    }
    if ($redirect) {
      $form_state->setRedirect($redirect);
    }
  }

}
