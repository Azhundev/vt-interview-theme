<?php

add_action('wp_enqueue_scripts', function () {
  $theme = wp_get_theme();

  $css_path = get_theme_file_path('/dist/theme.css');
  wp_enqueue_style(
    'vt-theme',
    get_theme_file_uri('/dist/theme.css'),
    [],
    file_exists($css_path) ? filemtime($css_path) : $theme->get('Version')
  );

  // JS bundle
  $js_path = get_theme_file_path('/dist/theme.js');
  if (file_exists($js_path)) {
    wp_enqueue_script(
      'vt-theme',
      get_theme_file_uri('/dist/theme.js'),
      [],
      file_exists($js_path) ? filemtime($js_path) : $theme->get('Version'),
      true
    );
  }
});

add_action('enqueue_block_editor_assets', function () {
  $theme = wp_get_theme();

  $css_path = get_theme_file_path('/dist/theme.css');
  wp_enqueue_style(
    'vt-theme-editor',
    get_theme_file_uri('/dist/theme.css'),
    [],
    file_exists($css_path) ? filemtime($css_path) : $theme->get('Version')
  );
});