<?php

namespace Drupal\file_upload\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements a File Upload form.
 */
class File_uploadForm extends FormBase {
    /*NOTE: Cette fonction doit créer le formulaire d'envoi du fichier */
    /**
     * {@inheritdoc}.
     */
    public function getFormID() {
    }

   public function buildForm(array $form, FormStateInterface $form_state) {
    }

    /**
     * @param array $form
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     * @return \Drupal\Core\Ajax\AjaxResponse
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {

    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {

    }

}
