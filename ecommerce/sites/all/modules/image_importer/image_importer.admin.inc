<?php
/**
 * @file
 * Implementing module settings form.
 */

/**
 * Module configuration settings form callback.
 */
function image_importer_settings_form() {
  // Source image directory.
  $form['image_importer_base_directory'] = array(
    '#type' => 'textfield',
    '#title' => t('Source directory'),
    '#default_value' => variable_get('image_importer_base_directory', '/sites/default/files/image_importer/'),
    '#description' => t('Image import source folder.'),
  );
  // Afected content types or entities.
  $system_image_fields_query = db_select('field_config', 'fc')
    ->fields('fc', array('id'))
    ->condition('fc.type', 'image', '=')
    ->condition('fc.cardinality', -1, '=')
    ->execute();
  $system_image_ids = array();
  foreach ($system_image_fields_query as $img_field) {
    $system_image_ids[] = $img_field->id;
  }
  if (count($system_image_ids) > 0) {
    $field_array = array(
      'id',
      'field_id',
      'field_name',
      'entity_type',
      'bundle',
    );
    $image_fields_instances_query = db_select('field_config_instance', 'fci')
      ->fields('fci', $field_array)
      ->condition('fci.field_id', $system_image_ids, 'IN')
      ->condition('deleted', 0, '=')
      ->execute();
    $options = array();
    foreach ($image_fields_instances_query as $img_instance) {
      $option_name = $img_instance->field_name . " - " . $img_instance->entity_type . " (" . $img_instance->bundle . ")";
      $options[$img_instance->id] = $option_name;
    }
    $form['image_importer_affected_fields'] = array(
      '#type' => 'checkboxes',
      '#options' => $options,
      '#title' => t('Affected fields'),
      '#default_value' => variable_get('image_importer_affected_fields', array()),
      '#description' => t('Indicates the fields where images will be imported. The list show all system image fields with unlimited values.'),
    );
  }
  else {
    $form['image_importer_affected_fields_message'] = array(
      '#markup' => '<label>' . t('Affected fields') . '</label><p>' . t('Not available unlimited values image fields.') . '</p>',
    );
  }
  $form['image_importer_horizontal_rule'] = array(
    '#markup' => '<hr/>',
  );
  // Checkbox to indicate if import executes with cron.
  $form['image_importer_execute_with_cron'] = array(
    '#type' => 'checkbox',
    '#title' => t('Cron execute'),
    '#default_value' => variable_get('image_importer_execute_with_cron', FALSE),
    '#description' => t('Indicates if image import action will be launched with cron task run.'),
  );
  $form = system_settings_form($form);
  $form['#validate'][] = '_image_importer_settings_form_validate';
  return $form;
}

/**
 * Image importer settings form validate.
 */
function _image_importer_settings_form_validate($form, &$form_state) {
  $base_path = $form_state['values']['image_importer_base_directory'];
  // Check if base_path have initial and final slashes, if not add it.
  if (strlen($base_path)) {
    $first_char = substr($base_path, 0, 1);
    $last_char = substr($base_path, -1);
    if ($first_char != '/') {
      $base_path = '/' . $base_path;
    }
    if ($last_char != '/') {
      $base_path .= '/';
    }
  }
  // Check if the enetered path is valid.
  $directory_path = DRUPAL_ROOT . $base_path;
  $valid_path = file_prepare_directory($directory_path, FILE_CREATE_DIRECTORY);
  // $valid_path = is_dir($directory_path);
  if ($valid_path) {
    $form_state['values']['image_importer_base_directory'] = $base_path;
    // Check if the specified folder is writtable.
    file_prepare_directory($directory_path, FILE_MODIFY_PERMISSIONS);
  }
  else {
    form_set_error('image_importer_base_directory', t('Please enter a valid path'));
  }
}
