<?php

/**
 * Define this Export UI plugin.
 */

$plugin = array(
  'schema' => 'jwplayer_preset',
  'access' => 'administer JW Player presets',
  'menu' => array(
    'menu item' => 'jw_player',
    'menu title' => 'JW Player presets',
    'menu prefix' => 'admin/config/media',
    'menu description' => 'Administer JW Player presets.',
  ),

  'title singular' => t('preset'),
  'title plural' => t('presets'),
  'title singular proper' => t('JW Player preset'),
  'title plural proper' => t('JW Player presets'),

  // - Abbreviated. - //

  'form' => array(
    'settings' => 'jw_player_ctools_export_ui_form',
    'validate' => 'jw_player_ctools_export_ui_form_validate',
  ),
);

/**
 *Implements hook_ctools_export_ui_form
 */
function jw_player_ctools_export_ui_form(&$form, &$form_state) {
  $preset = $form_state['item'];
  $settings = $preset->settings;

  /**
   * This is a Hack, CTools adds a hierarchy for export_key in form of
   * $form['info][$export_key]
   * see Line no: 1007 of ctools/plugins/export_ui/ctools_export_ui.class.php
   *
   * FAPI machine names object doesn't seem to work well with fields present in
   * differnt levels of hierarchy, Hence we move the fields over to
   * same hierarchical level.
   */
  // $form['preset_name'] = $form['info']['preset_name'];
  unset($form['info']);
  $form['preset_name'] = array(
    '#type' => 'textfield',
    '#size' => 20,
    '#maxlength' => 255,
    '#title' => t('Preset name'),
    '#description' => t('Enter name for the preet.'),
    '#default_value' =>  $preset->preset_name,
    '#required' => true,
    '#weight' => 0
  );

  $form['info']['machine_name'] = array(
    '#title' => t('Machine name'),
    '#type' => 'machine_name',
    '#default_value' => $preset->machine_name,
    '#machine_name' => array(
      'exists' => 'jw_player_preset_load',
      'source' => array('preset_name'),
    ),
    '#weight' => 1,
    '#description' => t('Enter the name to the new page It must be unique and contain only alphanumeric characters and underscores.'),
  );

  $form['settings'] = array(
    '#tree' => true,
    '#weight' => 2,
   );

  $form['settings']['width'] = array(
    '#type' => 'textfield',
    '#size' => 10,
    '#title' => t('width'),
    '#description' => t('Enter width for player.'),
    '#field_suffix' => ' ' . t('pixels'),
    '#default_value' => $settings['width'],
    '#required' => true,
    '#weight' => 5
  );

  $form['settings']['height'] = array(
    '#type' => 'textfield',
    '#size' => 10,
    '#title' => t('Height'),
    '#description' => t('Enter height for player'),
    '#field_suffix' => ' ' . t('pixels'),
    '#default_value' => $settings['height'],
    '#required' => true,
    '#weight' => 6
  );

  $skin_options = array();
  foreach (jw_player_skins() as $skin) {
    $skin_options[$skin->name] = ucfirst($skin->name);
  }

  $form['settings']['skin'] = array(
    '#title' => t('Skin'),
    '#type' => 'select',
    '#default_value' => !empty($settings['skin']) ? $settings['skin']: FALSE,
    '#empty_option' => t('None (default skin)'),
    '#options' => $skin_options,
  );

  $form['description'] = array(
    '#type' => 'textarea',
    '#size' => 10,
    '#title' => t('decription'),
    '#description' => t('Summary for preset'),
    '#default_value' => $preset->description,

    '#weight' => 4
  );
}

/**
 * Valdiator for jw_player_ctools_export_ui_form
 */
function jw_player_ctools_export_ui_form_validate($form, &$form_state) {
  $vals = $form_state['values'];
  if (!is_numeric($vals['settings']['width'])) {
    form_set_error('width', 'Only numeric values allowed for width' );
  }
  if (!is_numeric($vals['settings']['height'])) {
    form_set_error('width', 'Only numeric values allowed for height' );
  }
}