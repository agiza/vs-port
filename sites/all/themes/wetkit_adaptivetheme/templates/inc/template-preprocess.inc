<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal,
 * often used as an alternative to directly editing or adding code to templates.
 * Its worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE:
 * http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "wetkit_adaptivetheme" to match
 *    your subthemes name, for example, if your theme name is "footheme" then
 *    the function name will be "footheme_preprocess_hook". Tip - you can
 *    search/replace on "wetkit_adaptivetheme".
 * 2. Uncomment the required function to use.
 */

/**
 * Override or insert variables into the maintenance page template.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
function wetkit_adaptivetheme_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  wetkit_adaptivetheme_preprocess_html($variables, $hook);
  wetkit_adaptivetheme_preprocess_page($variables, $hook);
}

/**
 * Override or insert variables into the html templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("html" in this case.)
 */
function wetkit_adaptivetheme_preprocess_html(&$variables, $hook) {
  global $theme_key;

  // Modify html attributes for WET.
  //$variables['html_attributes_array']['class'][] = 'no-js';
  unset($variables['html_attributes_array']['dir']);

  // Add the default body id needed for WET.
  // This will be dynamically replaced by the wetkit_layouts module.
  if (empty($variables['wetkit_col_array'])) {
    $variables['wetkit_col_array'] = 'wb-body';
  }

  // Add a body class for the active theme name.
  $variables['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome
  // etc.
  $variables['classes_array'][] = css_browser_selector();

  // Assign skip link variables.
  $variables['skip_link_content_anchor'] = at_get_setting('skip_link_content_anchor');
  $variables['skip_link_text'] = t('Skip to main content');
  $variables['skip_link_nav_anchor'] = at_get_setting('skip_link_nav_anchor');
  $variables['skip_link2_text'] = t('Skip to footer');

  // Remove Classes.
  $variables['classes_array'] = array_diff($variables['classes_array'], array('site-name-web-experience-toolkit'));

  // Add Viewport for WET Mobile.
  $element = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1',
    ),
  );
  drupal_add_html_head($element, 'viewport');
}

/**
 * Override or insert variables into the page templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function wetkit_adaptivetheme_preprocess_page(&$variables, $hook) {

  if (module_exists('page_manager')) {
    // Page template suggestions for Panels pages.
    $panel_page = page_manager_get_current_page();
    if (!empty($panel_page)) {
      if (variable_get('wetkit_wetboew_theme', 0) == 1) {
        $suggestions[] = 'page__panels__internet';
      }
      elseif (variable_get('wetkit_wetboew_theme', 0) == 2) {
        $suggestions[] = 'page__panels__intranet';
      }
      elseif (variable_get('wetkit_wetboew_theme', 0) == 3) {
        $suggestions[] = 'page__panels__base';
      }
      else {
        $suggestions[] = 'page__panels__wet';
      }
      // Add the panel page machine name to the template suggestions.
      $suggestions[] = 'page__' . $panel_page['name'];
      // Merge the suggestions in to the existing suggestions
      // (as more specific than the existing suggestions).
      $variables['theme_hook_suggestions'] = array_merge($variables['theme_hook_suggestions'], $suggestions);
    }
    // Page template suggestions for normal pages.
    else {
      if (variable_get('wetkit_wetboew_theme', 0) == 1) {
        $suggestions[] = 'page__internet';
      }
      elseif (variable_get('wetkit_wetboew_theme', 0) == 2) {
        $suggestions[] = 'page__intranet';
      }
      elseif (variable_get('wetkit_wetboew_theme', 0) == 3) {
        $suggestions[] = 'page__base';
      }
      else {
        $suggestions[] = 'page__wet';
      }
      // Merge the suggestions in to the existing suggestions (as more specific
      // than the existing suggestions).
      $variables['theme_hook_suggestions'] = array_merge($variables['theme_hook_suggestions'], $suggestions);
    }
  }

  // Custom Logic Based on Theme Selection.
  if (variable_get('wetkit_wetboew_theme', 0) == 1) {
    $theme_prefix = 'gcwu';
  }
  elseif (variable_get('wetkit_wetboew_theme', 0) == 2) {
    $theme_prefix = 'gcwu';
  }
  elseif (variable_get('wetkit_wetboew_theme', 0) == 3) {
    $theme_prefix = 'base';
  }
  else {
    $theme_prefix = 'wet';
    $variables['site_name_frontpage'] = '/' . variable_get('site_frontpage', 'node');
    $variables['site_name'] = $variables['site_name_title'];
  }

  // Custom Logic Based on Theme Selection.
  if (variable_get('wetkit_wetboew_theme', 0) == 1) {
    $theme_menu_prefix = 'gcwu-gcnb';
  }
  elseif (variable_get('wetkit_wetboew_theme', 0) == 2) {
    $theme_menu_prefix = 'gcwu-gcnb';
  }
  elseif (variable_get('wetkit_wetboew_theme', 0) == 3) {
    $theme_menu_prefix = 'base-gcnb';
  }
  else {
    $theme_menu_prefix = 'wet-fullhd';
  }

  // Internationalization Check.
  $is_multilingual = 0;
  if (module_exists('i18n_menu') && drupal_multilingual()) {
    $is_multilingual = 1;
  }

  // Assign an alternate Site URL.
  $alternate_site_url = at_get_setting('alternate_site_url');
  if (!empty($alternate_site_url)) {
    $variables['site_name_title'] = variable_get('site_name', 'Drupal');
    $variables['site_name'] = l($variables['site_name_title'], $alternate_site_url, array('attributes' => array('title' => t('Home page'))));
  }

  // Assign the search indexing settings.
  $search_indexing_start = at_get_setting('search_indexing_start');
  $search_indexing_stop = at_get_setting('search_indexing_stop');
  if ((!empty($search_indexing_start) && !empty($search_indexing_stop))) {
    $variables['search_indexing_start'] = $search_indexing_start;
    $variables['search_indexing_stop'] = $search_indexing_stop;
  }

  // Set Sub Site Name.
  $variables['wetkit_sub_site'] = at_get_setting('wetkit_sub_site');

  // Header Navigation + Language Switcher.
  $menu = ($is_multilingual) ? i18n_menu_navigation_links('menu-wet-header') : menu_navigation_links('menu-wet-header');
  $nav_bar_markup = theme('links__menu_nav_bar', array(
    'links' => $menu,
    'attributes' => array(
      'id' => 'menu',
      'class' => array('links', 'clearfix'),
    ),
  ));
  $nav_bar_markup = strip_tags($nav_bar_markup, '<li><a>');
  if (module_exists('wetkit_language')) {
    $language_link_markup = '<li id="' . $theme_menu_prefix . '-lang">' . strip_tags($variables['menu_lang_bar'], '<a><span>') . '</li>';
    if (module_exists('edit')) {
      $quick_edit = edit_trigger_link();
      $variables['menu_bar'] = '<ul>' . $nav_bar_markup . $language_link_markup . '<li>' . drupal_render($quick_edit) . '</li>' . '</ul>';
    }
    else {
      $variables['menu_bar'] = '<ul>' . $nav_bar_markup . $language_link_markup . '</ul>';
    }
  }
  else {
    $variables['menu_bar'] = '<ul>' . $nav_bar_markup . '</ul>';
  }

  // Search Region.
  if (module_exists('custom_search')) {
    // Custom Search.
    $variables['custom_search'] = drupal_get_form('custom_search_blocks_form_1');
    $variables['custom_search']['#id'] = 'search-form';
    $variables['custom_search']['#prefix'] = '<div id="gcwu-srchbx-in">';
    $variables['custom_search']['custom_search_blocks_form_1']['#id'] = $theme_prefix . '-srch';
    $variables['custom_search']['#suffix'] = '</div>';
    $variables['custom_search']['actions']['submit']['#id'] = $theme_prefix . '-srch-submit';
    $variables['custom_search']['actions']['submit']['#attributes']['data-icon'] = 'search';
    $variables['search_box'] = render($variables['custom_search']);
    $variables['search_box'] = str_replace('type="text"', 'type="search"', $variables['search_box']);
  }

  // Mega Menu Region.
  if (module_exists('menu_block') && empty($variables['page']['mega_menu'])) {
    $config = menu_block_get_config('wetkit_menu_blocks-1');
    $data = menu_tree_build($config);
    $variables['page']['mega_menu'] = $data['content'];
  }

  // Terms Navigation.
  $menu = ($is_multilingual) ? i18n_menu_navigation_links('menu-wet-terms') : menu_navigation_links('menu-wet-terms');
  $terms_bar_markup = theme('links__menu_terms_bar', array(
    'links' => $menu,
    'attributes' => array(
      'class' => array('links', 'clearfix'),
    ),
  ));
  $variables['menu_terms_bar'] = $terms_bar_markup;

  // Mid Footer Region.
  if (module_exists('menu_block')) {
    $config = menu_block_get_config('wetkit_menu_blocks-2');
    $data = menu_tree_build($config);
    $variables['page']['footer'] = $data['content'];
  }

  // Footer Navigation.
  $menu = ($is_multilingual) ? i18n_menu_navigation_links('menu-wet-footer') : menu_navigation_links('menu-wet-footer');
  $footer_bar_markup = theme('links__menu_footer_bar', array(
    'links' => $menu,
    'attributes' => array(
      'class' => array('links', 'clearfix'),
    ),
  ));
  $variables['menu_footer_bar'] = $footer_bar_markup;
}

/**
 * Override or insert variables into the node templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function wetkit_adaptivetheme_preprocess_node(&$variables, $hook) {
  // Optionally, run node-type-specific preprocess functions, like
  // wetkit_adaptivetheme_preprocess_node_page() or
  // wetkit_adaptivetheme_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
  // Date Support for different themes.
  if (variable_get('wetkit_wetboew_theme', 0) == 1) {
    $variables['date_mod'] = 'gcwu-date-mod';
  }
  elseif (variable_get('wetkit_wetboew_theme', 0) == 2) {
    $variables['date_mod'] = 'gcwu-date-mod';
  }
  elseif (variable_get('wetkit_wetboew_theme', 0) == 3) {
    $variables['date_mod'] = 'base-date-mod';
  }
  else {
    $variables['date_mod'] = 'wet-date-mod';
  }
  $node = $variables['node'];
  $variables['date'] = format_date($node->changed, 'custom', 'Y-m-d');
}

/**
 * Override or insert variables into the comment templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
function wetkit_adaptivetheme_preprocess_comment(&$variables, $hook) {

}

/**
 * Override or insert variables into the region templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("region" in this case.)
 */
function wetkit_adaptivetheme_preprocess_region(&$variables, $hook) {

}

/**
 * Override or insert variables into the block templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function wetkit_adaptivetheme_preprocess_block(&$variables, $hook) {
  // Add support for css classes and ids from panels
  // Add classes
  if (!empty($variables['elements']['#block']->css_class)) {
    $classes = explode(' ', $variables['elements']['#block']->css_class);
    $variables['classes_array'] = array_merge($variables['classes_array'], $classes);
  }
}

/**
 * Theme a panels pane.
 *
 * @param array $vars
 *   The array used to modify the panels ipe placeholder pane.
 */
function wetkit_adaptivetheme_preprocess_panels_pane(&$variables) {
  if ($variables['pane']->type == 'node_updated') { 
    // Date Support for different themes.
    if (variable_get('wetkit_wetboew_theme', 0) == 1) {
      $variables['date_mod'] = 'gcwu-date-mod';
    }
    elseif (variable_get('wetkit_wetboew_theme', 0) == 2) {
      $variables['date_mod'] = 'gcwu-date-mod';
    }
    elseif (variable_get('wetkit_wetboew_theme', 0) == 3) {
      $variables['date_mod'] = 'base-date-mod';
    }
    else {
      $variables['date_mod'] = 'wet-date-mod';
    }
  }
}

/**
 * Theme the 'placeholder' pane, which is shown on an active IPE.
 *
 * @param array $vars
 *   The array used to modify the panels ipe placeholder pane.
 */
function wetkit_adaptivetheme_panels_ipe_placeholder_pane($variables) {
  $region_id = $variables['region_id'];
  $region_title = $variables['region_title'];

  $output = '<div class="panels-ipe-placeholder-content">';
  $output .= "<h4>$region_title</h4>";
  $output .= '</div>';
  return $output;
}

/**
 * Theme the 'feed icon'.
 *
 * @param array $vars
 *   The array used to modify the panels ipe placeholder pane.
 */
function wetkit_adaptivetheme_feed_icon($variables) {
  $text = t('Subscribe to !feed-title', array('!feed-title' => $variables['title']));
  if ($image = theme('image', array('path' => 'misc/feed.png', 'attributes' => array('class' => 'image-actual'), 'width' => 16, 'height' => 16, 'alt' => $text))) {
    return l($image, $variables['url'], array('html' => TRUE, 'attributes' => array('class' => array('feed-icon'), 'title' => $text)));
  }
}

/**
 * Alter the forms.
 *
 * @param array $vars
 *   The array used to modify the panels ipe placeholder pane.
 */
function wetkit_adaptivetheme_form_alter(&$form, &$form_state, $form_id) {
  if (!empty($form['actions']) && isset($form['actions']['submit'])) {
    $form['actions']['submit']['#attributes']['class'][] = 'gcwu-srch-submit button';
  }
}

/**
 * Theme the webform element.
 *
 * @param array $vars
 *   The array used to modify the panels ipe placeholder pane.
 */
function wetkit_adaptivetheme_webform_element($variables) {
  // Ensure defaults.
  $variables['element'] += array(
    '#title_display' => 'before',
  );

  $element = $variables['element'];

  // Accessibility Hack.
  // TODO Implement Drupal 7 backport for: https://drupal.org/node/504962
  $variables['#composite'] = FALSE;
  if ((strpos($element['#id'], 'edit-submitted-date-published') === 0) || 
     (strpos($element['#id'], 'edit-submitted-date-modified') === 0) ||
      (strpos($element['#id'], 'edit-submitted-homepage-screenshot') === 0) || 
      (strpos($element['#id'], 'edit-submitted-results-page-screenshot') === 0)) {
    $variables['#composite'] = TRUE;
  }

  // All elements using this for display only are given the "display" type.
  if (isset($element['#format']) && $element['#format'] == 'html') {
    $type = 'display';
  }
  else {
    $type = (isset($element['#type']) && !in_array($element['#type'], array('markup', 'textfield', 'webform_email', 'webform_number'))) ? $element['#type'] : $element['#webform_component']['type'];
  }

  // Convert the parents array into a string, excluding the "submitted" wrapper.
  $nested_level = $element['#parents'][0] == 'submitted' ? 1 : 0;
  $parents = str_replace('_', '-', implode('--', array_slice($element['#parents'], $nested_level)));

  $wrapper_classes = array(
    'form-item',
    'webform-component',
    'webform-component-' . $type,
  );
  if (isset($element['#title_display']) && strcmp($element['#title_display'], 'inline') === 0) {
    $wrapper_classes[] = 'webform-container-inline';
  }
  $output = '<div class="' . implode(' ', $wrapper_classes) . '" id="webform-component-' . $parents . '">' . "\n";

  // If #title is not set, we don't display any label or required marker.
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }
  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . _webform_filter_xss($element['#field_prefix']) . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . _webform_filter_xss($element['#field_suffix']) . '</span>' : '';

  switch ($element['#title_display']) {
    case 'inline':
    case 'before':
    case 'invisible':
      $output .= ' ' . theme('form_element_label', $variables);
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;

    case 'after':
      $output .= ' ' . $prefix . $element['#children'] . $suffix;
      $output .= ' ' . theme('form_element_label', $variables) . "\n";
      break;

    case 'none':
    case 'attribute':
      // Output no label and no required marker, only the children.
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
  }

  if (!empty($element['#description'])) {
    $output .= ' <div class="description">' . $element['#description'] . "</div>\n";
  }

  $output .= "</div>\n";

  return $output;
}

/**
 * Theme the 'form label'.
 *
 * @param array $vars
 *   The array used to modify the panels ipe placeholder pane.
 */
function wetkit_adaptivetheme_form_element_label($variables) {
  $element = $variables['element'];
  // This is also used in the installer, pre-database setup.
  $t = get_t();

  // If title and required marker are both empty, output no label.
  if ((!isset($element['#title']) || $element['#title'] === '') && empty($element['#required'])) {
    return '';
  }

  // If the element is required, a required marker is appended to the label.
  $required = !empty($element['#required']) ? theme('form_required_marker', array('element' => $element)) : '';

  $title = filter_xss_admin($element['#title']);

  $attributes = array();
  // Style the label as class option to display inline with the element.
  if ($element['#title_display'] == 'after') {
    $attributes['class'] = 'option';
  }
  // Show label only to screen readers to avoid disruption in visual flows.
  elseif ($element['#title_display'] == 'invisible') {
    $attributes['class'] = 'element-invisible';
  }

  if (!empty($element['#id'])) {
    $attributes['for'] = $element['#id'];
  }

  // The leading whitespace helps visually separate fields from inline labels.
  if (isset($variables['#composite']) && $variables['#composite'] == TRUE) {
    return ' <span class="webform-composite">' . $t('!title !required', array('!title' => $title, '!required' => $required)) . "</span>\n";    
  }
  else {
    return ' <label' . drupal_attributes($attributes) . '>' . $t('!title !required', array('!title' => $title, '!required' => $required)) . "</label>\n";    
  }
}

/**
 * Implements hook_current_search_text().
 *
 * @param array $variables
 * @return string
 */
function wetkit_adaptivetheme_current_search_text(array $variables) {
  // Initializes output, sanitizes text if necessary.
  $sanitize = empty($variables['options']['html']);
  $output = ($sanitize) ? check_plain($variables['text']) : $variables['text'];

  // Adds wrapper markup and CSS classes.
  if ($variables['wrapper'] && $variables['element']) {
    $attributes = array('class' => $variables['class']);
    $element = check_plain($variables['element']);
    $output = '<' . $element . drupal_attributes($attributes) . '>' . $output . '</' . $element . '>';
  }

  return '<ul><li>' . $output . '</li></ul>';
}

/**
 * Implements hook_current_search_group_title().
 *
 * @param array $variables
 * @return string
 */
function wetkit_adaptivetheme_current_search_group_title(array $variables) {
  return '<h3 class="background-light current-search-group-title">' . $variables['title'] . '</h3>';
}

/**
 * Implements hook_current_search_link_active().
 *
 * @param array $variables
 * @return string
 */
function wetkit_adaptivetheme_current_search_link_active($variables) {
  // Builds accessible markup.
  // @see http://drupal.org/node/1316580
  $accessible_vars = array(
    'text' => $variables['text'],
    'active' => TRUE,
  );
  $accessible_markup = theme('facetapi_accessible_markup', $accessible_vars);

  // Sanitizes the link text if necessary.
  $sanitize = empty($variables['options']['html']);
  $variables['text'] = ($sanitize) ? check_plain($variables['text']) : $variables['text'];

  // Adds the deactivation widget.
  $temp = theme('current_search_deactivate_widget') . $variables['text'];
  $variables['text'] = '';
  $variables['text'] = $temp;

  // Resets link text, sets to options to HTML since we already sanitized the
  // link text and are providing additional markup for accessibility.
  $variables['text'] .= ' ' . $accessible_markup;
  $variables['options']['html'] = TRUE;
  return theme_link($variables);
}

/**
 * Implements hook_current_search_deactivate_widget().
 *
 * @param array $variables
 * @return string
 */
function wetkit_adaptivetheme_current_search_deactivate_widget($variables) {
  return '(-) ';
}

/**
 * Implements hook_views_data_export_feed_icon().
 *
 * @param array $variables
 * @return string
 */
function wetkit_adaptivetheme_views_data_export_feed_icon($variables) {
  extract($variables, EXTR_SKIP);
  $url_options = array('html' => TRUE);
  if ($query) {
    $url_options['query'] = $query;
  }
  //$image = theme('image', array('path' => $image_path, 'alt' => $text, 'title' => $text));
  //return l($image, $url, $url_options);
  $actions = array(
    array(
      'title' => $text,
      'href' => $url,
      'attributes' => array(
        'alt' => $text,
        'class' => 'button button-accent'
      ),
    ));
  return '<div class="cse-button">' . theme('links', array('links' => $actions, 'attributes' => array('class' => ''))) . '</div>';
}

/**
 * Implements theme_preprocess_views_exposed_form().
 *
 * @param array $vars
 * @param type $hook
 */
function wetkit_adaptivetheme_preprocess_views_exposed_form(&$vars, $hook) {
  $vars['form']['textfield']['#placeholder'] = t('Search');
}
