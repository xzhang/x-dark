<?php
/**
 * Modify search box for theme.
 */
function xdark_search_theme_form($form) {
  unset($form['search_theme_form']['#title']);
  return '<div id="search" class="container-inline">' . drupal_render($form) . '</div>';
}

function xdark_preprocess_node(&$vars) {
  $vars['submitted'] = $vars['name'] . ' - ' . $vars['date'];
  
  // Remove user's blog link in node links.
  unset($vars['node']->links['blog_usernames_blog']);
  $vars['links'] = theme('links', $vars['node']->links);
}

function xdark_preprocess_comment(&$vars) {
  if ($vars['comment']->picture) {
    $vars['picture'] = theme('image', $vars['comment']->picture);
  }
}