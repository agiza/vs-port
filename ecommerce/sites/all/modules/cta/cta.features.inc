<?php
/*
/**
 * Implementation of hook_features_export_options()
 */
function cta_selector_features_export_options() {
  $options = array();
  $selectors = (array) cta_selectors();
  foreach ($selectors as $name => $selector) {
    $options[$name] = $selector['description'];
  }
  return $options;
}

/**
 * Implementation of hook_features_export()
 */
function cta_selector_features_export($data, &$export, $module_name = '') {
  $pipe = array();

  $export['dependencies'][] = 'bean';

  foreach ((array) $data as $name) {
    $selector = cta_selector_load($name);
    if (is_string($selector['data'])) {
      $selector['data'] = unserialize($selector['data']);
    }
    if (!empty($selector)) {
      $export['features']['cta_selector'][$name] = $name;
      if (isset($selector['module']) && !in_array($selector['module'], $export['dependencies'])) {
        $export['dependencies'][] = $selector['module'];
      }
    }
  }

  return $pipe;
}

/**
 * Implementation of hook_features_export_render()
 */
function cta_selector_features_export_render($module_name, $data) {
  $selectors = array();

  foreach ($data as $name) {
    $selector = cta_selector_load($name);

    if (!empty($selector)) {
      if (!is_array($selector['data'])) {
        $selector['data'] = unserialize($selector['data']);
      }
      // remove local id
      unset($selector['sid']);
      $selectors[$name] = $selector;
    }
  }
  $code = '  $data = ' . features_var_export($selectors, '  ') . ';' . PHP_EOL;
  $code .= '  return $data;';

  return array('cta_selector_defaults' => $code);
}

/**
 * Implementation of hook_features_rebuild()
 */
function cta_selector_features_rebuild($module) {
  cta_selector_features_revert($module);
}

/**
 * Implementation of hook_features_revert()
 */
function cta_selector_features_revert($module) {
  if ($data = features_get_default('cta_selector', $module)) {
    foreach ($data as $name => $selector) {
      cta_selector_save($selector);
    }
  }
}
