<?php
function mgrnz_enqueue_assets() {
  $css = get_template_directory() . '/assets/css/style.css';
  wp_enqueue_style(
    'mgrnz-style',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    file_exists($css) ? filemtime($css) : null
  );
}
add_action('wp_enqueue_scripts', 'mgrnz_enqueue_assets');
