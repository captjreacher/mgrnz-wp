<?php
/**
 * Plugin Name: MU Test
 * Description: Minimal mu-plugin to verify loading.
 */
add_action('rest_api_init', function () {
  header('X-MU-Test', 'active');
});
