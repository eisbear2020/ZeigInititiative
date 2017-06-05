<?php

/**
 * @file
 * Contains \Drupal\demo\Form\DemoForm.
 */

namespace Drupal\hello_world\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloForm extends FormBase {
  public function getFormId() {
    // Unique ID of the form.
    return 'hello_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    // Create a $form API array.
    $form['phone_number'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Your phone number'),
    );

    $form['test'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Test'),
    );

    $form['save'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    );
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate submitted form data.
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Handle submitted form data.
  }
}
