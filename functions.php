<?php

add_action('wp_enqueue_scripts', function () {
  $theme = wp_get_theme();

  wp_enqueue_style(
    'vt-theme',
    get_theme_file_uri('/dist/theme.css'),
    [],
    $theme->get('Version')
  );

  // Optional JS bundle if you add one later
  if (file_exists(get_theme_file_path('/dist/theme.js'))) {
    wp_enqueue_script(
      'vt-theme',
      get_theme_file_uri('/dist/theme.js'),
      [],
      $theme->get('Version'),
      true
    );
  }
});

add_action('enqueue_block_editor_assets', function () {
  $theme = wp_get_theme();
  wp_enqueue_style(
    'vt-theme-editor',
    get_theme_file_uri('/dist/theme.css'),
    [],
    $theme->get('Version')
  );
});