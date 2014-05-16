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
 * Override or insert variables into the theme links templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 */
function wetkit_adaptivetheme_links__menu_terms_bar($variables) {
  $links = $variables['links'];
  $attributes = $variables['attributes'];
  $heading = $variables['heading'];
  global $language_url;
  $output = '';

  // Custom Logic Based on Theme Selection (Internet, Intranet or Base).
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
  }

  if (count($links) > 0) {
    $output = '';

    // Treat the heading first if it is present to prepend it to the
    // list of links.
    if (!empty($heading)) {
      if (is_string($heading)) {
        // Prepare the array that will be used when the passed heading
        // is a string.
        $heading = array(
          'text' => $heading,
          // Set the default level of the heading.
          'level' => 'h2',
        );
      }
      $output .= '<' . $heading['level'];
      if (!empty($heading['class'])) {
        $output .= drupal_attributes(array('class' => $heading['class']));
      }
      $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
    }

    $output .= '<ul' . drupal_attributes($attributes) . '>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = array($key);

      // Add first, last and active classes to the list of links to help out
      // themers.
      if ($i == 1) {
        $class[] = 'first';
        $class[] = $theme_prefix . '-tc';
      }
      if ($i == $num_links) {
        $class[] = 'last';
        $class[] = $theme_prefix . '-tr';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page())) && (empty($link['language']) || $link['language']->language == $language_url->language)) {
        $class[] = 'active';
      }
      $output .= '<li' . drupal_attributes(array('class' => $class)) . '>';
      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        $output .= l($link['title'], $link['href'], $link);
      }
      elseif (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for
        // adding title and class attributes.
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span' . $span_attributes . '>' . $link['title'] . '</span>';
      }

      $i++;
      $output .= "</li>\n";
    }

    $output .= '</ul>';
  }

  return $output;
}

/**
 * Override or insert variables into the theme links templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 */
function wetkit_adaptivetheme_links__menu_footer_bar($variables) {
  $links = $variables['links'];
  $attributes = $variables['attributes'];
  $heading = $variables['heading'];
  global $language_url;
  $output = '';

  // Custom Logic Based on Theme Selection (Internet, Intranet or Base).
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
  }

  if (count($links) > 0) {
    $output = '';

    // Treat the heading first if it is present to prepend it to the
    // list of links.
    if (!empty($heading)) {
      if (is_string($heading)) {
        // Prepare the array that will be used when the passed heading
        // is a string.
        $heading = array(
          'text' => $heading,
          'level' => 'h2',
        );
      }
      $output .= '<' . $heading['level'];
      if (!empty($heading['class'])) {
        $output .= drupal_attributes(array('class' => $heading['class']));
      }
      $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
    }

    $output .= '<ul' . drupal_attributes($attributes) . '>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = array($key);
      // Add first, last and active classes to the list of links to help out
      // themers.
      if ($i == 1) {
        $class[] = 'first';
      }
      if ($i == $num_links) {
        $class[] = 'last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page())) && (empty($link['language']) || $link['language']->language == $language_url->language)) {
        $class[] = 'active';
      }
      // Custom Override is here for last link.
      if ($i == $num_links) {
        $output .= '<li id="' . $theme_prefix . '-gcft-ca"' . drupal_attributes(array('class' => $class)) . '><div>';
      }
      else {
        $output .= '<li' . drupal_attributes(array('class' => $class)) . '>';
      }
      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        // Custom Override is here.
        if (isset($link['attributes']['title']) && $i != $num_links) {
          $link['html'] = TRUE;
          $link['attributes']['rel'] = 'external';
          $output .= l('<span>' . $link['title'] . '</span>' . '<br />' . $link['attributes']['title'], $link['href'], $link);
        }
        else {
          $output .= l($link['title'], $link['href'], $link);
        }
      }
      elseif (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for
        // adding title and class attributes.
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span' . $span_attributes . '>' . $link['title'] . '</span>';
      }

      if ($i == $num_links) {
        $output .= "</div></li>\n";
      }
      else {
        $output .= "</li>\n";
      }
      $i++;
    }

    $output .= '</ul>';
  }
  return $output;
}

/**
 * Override or insert variables into the theme links templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 */
function wetkit_adaptivetheme_links__menu_nav_bar($variables) {
  $links = $variables['links'];
  $attributes = $variables['attributes'];
  $heading = $variables['heading'];
  global $language_url;
  $output = '';

  // Custom Logic Based on Theme Selection (Internet, Intranet or Base).
  if (variable_get('wetkit_wetboew_theme', 0) == 1) {
    $theme_prefix = 'gcwu-gcnb';
  }
  elseif (variable_get('wetkit_wetboew_theme', 0) == 2) {
    $theme_prefix = 'gcwu-gcnb';
  }
  elseif (variable_get('wetkit_wetboew_theme', 0) == 3) {
    $theme_prefix = 'base-gcnb';
  }
  else {
    $theme_prefix = 'wet-fullhd-lang-';
  }

  if (count($links) > 0) {
    $output = '';

    // Treat the heading first if it is present to prepend it to the
    // list of links.
    if (!empty($heading)) {
      if (is_string($heading)) {
        // Prepare the array that will be used when the passed heading
        // is a string.
        $heading = array(
          'text' => $heading,
          'level' => 'h2',
        );
      }
      $output .= '<' . $heading['level'];
      if (!empty($heading['class'])) {
        $output .= drupal_attributes(array('class' => $heading['class']));
      }
      $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
    }

    $output .= '<ul' . drupal_attributes($attributes) . '>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = array($key);

      // Add first, last and active classes to the list of links to help out
      // themers.
      if ($i == 1) {
        $class[] = 'first';
      }
      if ($i == $num_links) {
        $class[] = 'last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page())) && (empty($link['language']) || $link['language']->language == $language_url->language)) {
        $class[] = 'active';
      }
      $output .= '<li id="' . $theme_prefix . $i . '"' . drupal_attributes(array('class' => $class)) . '>';

      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        $output .= l($link['title'], $link['href'], $link);
      }
      elseif (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for
        // adding title and class attributes.
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span' . $span_attributes . '>' . $link['title'] . '</span>';
      }

      $i++;
      $output .= "</li>\n";
    }

    $output .= '</ul>';
  }

  return $output;
}

/**
 * Override or insert variables into the theme links templates.
 *
 * @param array $variables
 *   An array of variables to pass to the theme template.
 */
function wetkit_adaptivetheme_views_mini_pager($vars) {
  global $pager_page_array, $pager_total;

  $tags = $vars['tags'];
  $element = $vars['element'];
  $parameters = $vars['parameters'];

  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.

  if ($pager_total[$element] > 1) {

    $li_previous = theme('pager_previous', 
      array(
      'text' => (isset($tags[1]) ? $tags[1] : t('‹‹')), 
      'element' => $element, 
      'interval' => 1, 
      'parameters' => $parameters,
      'attributes' => array('class' => 'button button-accent ui-link'),
    )
    );
    if (empty($li_previous)) {
      $li_previous = '&lt;&lt;';
      $li_previous_class = array('button button-disabled pager-previous');
    } else {
      $li_previous_class = array('pager-previous');
    }

    $li_next = theme('pager_next', 
      array(
      'text' => (isset($tags[3]) ? $tags[3] : t('››')), 
      'element' => $element, 
      'interval' => 1, 
      'parameters' => $parameters,
      'attributes' => array('class' => 'button button-accent ui-link'),
    )
    );
    
    if (empty($li_next)) {
      $li_next = '&gt;&gt;';
      $li_next_class = array('button button-disabled pager-next');
    } else {
      $li_next_class = array('pager-next');
    }

    $items[] = array(
      'class' => $li_previous_class, 
      'data' => $li_previous,
    );
    $items[] = array(
      'class' => array('button button-disabled pager-current'), 
      'data' => t('@current of @max', array('@current' => $pager_current, '@max' => $pager_max)),
    );
    $items[] = array(
      'class' => $li_next_class, 
      'data' => $li_next,
    );

    return theme('item_list', 
      array(
      'items' => $items, 
      'title' => NULL, 
      'type' => 'ul', 
      'attributes' => array('class' => array('pager')),
    )
    );
  }
}

function wetkit_adaptivetheme_pager($variables) {
  $tags = $variables['tags'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  $quantity = $variables['quantity'];
  global $pager_page_array, $pager_total;

  // Calculate various markers within this pager piece:
  // Middle is used to "center" pages around the current page.
  $pager_middle = ceil($quantity / 2);
  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // first is the first page listed by this pager piece (re quantity)
  $pager_first = $pager_current - $pager_middle + 1;
  // last is the last page listed by this pager piece (re quantity)
  $pager_last = $pager_current + $quantity - $pager_middle;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.

  // Prepare for generation loop.
  $i = $pager_first;
  if ($pager_last > $pager_max) {
    // Adjust "center" if at end of query.
    $i = $i + ($pager_max - $pager_last);
    $pager_last = $pager_max;
  }
  if ($i <= 0) {
    // Adjust "center" if at start of query.
    $pager_last = $pager_last + (1 - $i);
    $i = 1;
  }
  // End of generation loop preparation.
  $attributes = array(
    'first' => array('class' => 'button button-small button-accent ui-link'),
    'previous' => array('class' => 'button button-small button-accent ui-link'),
    'next' => array('class' => 'button button-small button-accent ui-link'),
    'last' => array('class' => 'button button-small button-accent ui-link'),
    'normal' => array('class' => 'button button-small ui-link'),
  );
  
  $li_first = theme('pager_first', array('text' => (isset($tags[0]) ? $tags[0] : t('« first')), 'element' => $element, 'parameters' => $parameters, 'attributes' => $attributes['first']));
  $li_previous = theme('pager_previous', array('text' => (isset($tags[1]) ? $tags[1] : t('‹ previous')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters, 'attributes' => $attributes['previous']));
  $li_next = theme('pager_next', array('text' => (isset($tags[3]) ? $tags[3] : t('next ›')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters, 'attributes' => $attributes['next']));
  $li_last = theme('pager_last', array('text' => (isset($tags[4]) ? $tags[4] : t('last »')), 'element' => $element, 'parameters' => $parameters, 'attributes' => $attributes['last']));

  if ($pager_total[$element] > 1) {
    if ($li_first) {
      $items[] = array(
        'class' => array('pager-first'), 
        'data' => $li_first,
      );
    }
    if ($li_previous) {
      $items[] = array(
        'class' => array('pager-previous'), 
        'data' => $li_previous,
      );
    }

    // When there is more than one page, create the pager list.
    if ($i != $pager_max) {
      if ($i > 1) {
        $items[] = array(
          'class' => array('pager-ellipsis'), 
          'data' => 'â€¦',
        );
      }
      // Now generate the actual pager piece.
      for (; $i <= $pager_last && $i <= $pager_max; $i++) {
        if ($i < $pager_current) {
          $items[] = array(
            'class' => array('pager-item'), 
            'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters, 'attributes' => $attributes['normal'])),
          );
        }
        if ($i == $pager_current) {
          $items[] = array(
            'class' => array('pager-current button button-small button-attention button-disabled'), 
            'data' => $i,
          );
        }
        if ($i > $pager_current) {
          $items[] = array(
            'class' => array('pager-item'), 
            'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters, 'attributes' => $attributes['normal'])),
          );
        }
      }
      if ($i < $pager_max) {
        $items[] = array(
          'class' => array('pager-ellipsis'), 
          'data' => '…',
        );
      }
    }
    // End generation.
    if ($li_next) {
      $items[] = array(
        'class' => array('pager-next'), 
        'data' => $li_next,
      );
    }
    if ($li_last) {
      $items[] = array(
        'class' => array('pager-last'), 
        'data' => $li_last,
      );
    }
    return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . theme('item_list', array(
      'items' => $items, 
      'attributes' => array('class' => array('pager')),
    ));
  }
}

/**
 * @defgroup pagerpieces Pager pieces
 * @{
 * Theme functions for customizing pager elements.
 *
 * Note that you should NOT modify this file to customize your pager.
 */

/**
 * Returns HTML for the "first page" link in a query pager.
 *
 * @param $variables
 *   An associative array containing:
 *   - text: The name (or image) of the link.
 *   - element: An optional integer to distinguish between multiple pagers on
 *     one page.
 *   - parameters: An associative array of query string parameters to append to
 *     the pager links.
 *
 * @ingroup themeable
 */
function wetkit_adaptivetheme_pager_first($variables) {
  $text = $variables['text'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  if (!isset($variables['attributes'])){
    $variables['attributes'] = array();
  }
  $attributes = $variables['attributes'];
  global $pager_page_array;
  $output = '';

  // If we are anywhere but the first page
  if ($pager_page_array[$element] > 0) {
    $output = theme('pager_link', array('text' => $text, 'page_new' => pager_load_array(0, $element, $pager_page_array), 'element' => $element, 'parameters' => $parameters, 'attributes' => $attributes));
  }

  return $output;
}

/**
 * Returns HTML for the "previous page" link in a query pager.
 *
 * @param $variables
 *   An associative array containing:
 *   - text: The name (or image) of the link.
 *   - element: An optional integer to distinguish between multiple pagers on
 *     one page.
 *   - interval: The number of pages to move backward when the link is clicked.
 *   - parameters: An associative array of query string parameters to append to
 *     the pager links.
 *
 * @ingroup themeable
 */
function wetkit_adaptivetheme_pager_previous($variables) {
  $text = $variables['text'];
  $element = $variables['element'];
  $interval = $variables['interval'];
  $parameters = $variables['parameters'];
    if (!isset($variables['attributes'])){
    $variables['attributes'] = array();
  }
  $attributes = $variables['attributes'];
  global $pager_page_array;
  $output = '';

  // If we are anywhere but the first page
  if ($pager_page_array[$element] > 0) {
    $page_new = pager_load_array($pager_page_array[$element] - $interval, $element, $pager_page_array);

    // If the previous page is the first page, mark the link as such.
    if ($page_new[$element] == 0) {
      $output = theme('pager_first', array('text' => $text, 'element' => $element, 'parameters' => $parameters, 'attributes' => $attributes));
    }
    // The previous page is not the first page.
    else {
      $output = theme('pager_link', array('text' => $text, 'page_new' => $page_new, 'element' => $element, 'parameters' => $parameters, 'attributes' => $attributes));
    }
  }

  return $output;
}

/**
 * Returns HTML for the "next page" link in a query pager.
 *
 * @param $variables
 *   An associative array containing:
 *   - text: The name (or image) of the link.
 *   - element: An optional integer to distinguish between multiple pagers on
 *     one page.
 *   - interval: The number of pages to move forward when the link is clicked.
 *   - parameters: An associative array of query string parameters to append to
 *     the pager links.
 *
 * @ingroup themeable
 */
function wetkit_adaptivetheme_pager_next($variables) {
  $text = $variables['text'];
  $element = $variables['element'];
  $interval = $variables['interval'];
  $parameters = $variables['parameters'];
  if (!isset($variables['attributes'])){
    $variables['attributes'] = array();
  }
  $attributes = $variables['attributes'];
  global $pager_page_array, $pager_total;
  $output = '';

  // If we are anywhere but the last page
  if ($pager_page_array[$element] < ($pager_total[$element] - 1)) {
    $page_new = pager_load_array($pager_page_array[$element] + $interval, $element, $pager_page_array);
    // If the next page is the last page, mark the link as such.
    if ($page_new[$element] == ($pager_total[$element] - 1)) {
      $output = theme('pager_last', array('text' => $text, 'element' => $element, 'parameters' => $parameters, 'attributes' => $attributes));
    }
    // The next page is not the last page.
    else {
      $output = theme('pager_link', array('text' => $text, 'page_new' => $page_new, 'element' => $element, 'parameters' => $parameters, 'attributes' => $attributes));
    }
  }

  return $output;
}

function wetkit_adaptivetheme_pager_last($variables) {
  $text = $variables['text'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  if (!isset($variables['attributes'])){
    $variables['attributes'] = array();
  }
  $attributes = $variables['attributes'];
  global $pager_page_array, $pager_total;
  $output = '';

  // If we are anywhere but the last page
  if ($pager_page_array[$element] < ($pager_total[$element] - 1)) {
    $output = theme('pager_link', array('text' => $text, 'page_new' => pager_load_array($pager_total[$element] - 1, $element, $pager_page_array), 'element' => $element, 'parameters' => $parameters, 'attributes' => $attributes));
  } 
  return $output;
}