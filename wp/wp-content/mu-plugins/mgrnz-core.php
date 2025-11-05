<?php
/**
 * Plugin Name: MGRNZ Core (CORS + Media + Webhooks)
 * Description: Core bootstrap for headless integration: CORS for REST, featured image size, optional webhook sender.
 * Author: MGRNZ
 * Version: 0.1.0
 */

/**
 * CORS for WP REST API – allow your Spaceship front-end.
 * Adjust origins as needed.
 */
add_action('rest_api_init', function () {
  remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
  add_filter('rest_pre_serve_request', function ($value) {
    $origin = isset($_SERVER['HTTP_ORIGIN']) ? trim($_SERVER['HTTP_ORIGIN']) : '';
    $allowed = [
      'https://maximisedai.com',
      'https://www.maximisedai.com',
      // add local dev hosts below as needed:
      // 'http://localhost:3000',
      // 'http://127.0.0.1:3000',
    ];
    if (in_array($origin, $allowed, true)) {
      header('Access-Control-Allow-Origin: ' . $origin);
      header('Vary: Origin');
    }
    header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Authorization, Content-Type, X-Requested-With');
    header('Access-Control-Allow-Credentials: true');
    return $value;
  });
}, 15);

/**
 * Featured image policy – ensure 1280x720 hard crop exists.
 */
add_action('after_setup_theme', function () {
  add_theme_support('post-thumbnails');
  add_image_size('featured_1280x720', 1280, 720, true);
});

/**
 * OPTIONAL: Minimal webhook sender on post status transitions.
 * Comment out if you’ll use WP Webhooks Pro instead.
 */
add_action('transition_post_status', function ($new_status, $old_status, $post) {
  if ($post->post_type !== 'post') return;

  $secret = getenv('MGRNZ_WEBHOOK_SECRET') ?: ''; // set in wp-config.php as putenv or define and use constant
  $endpoint = getenv('MGRNZ_WEBHOOK_URL') ?: '';  // e.g., https://<SUPABASE>.functions.supabase.co/wp-sync
  if (empty($endpoint)) return;

  $payload = [
    'id'           => $post->ID,
    'slug'         => $post->post_name,
    'status'       => $new_status,
    'modified_gmt' => get_post_modified_time('c', true, $post),
    'origin_site'  => 'mgrnz.com',
    'sync_origin'  => 'mgrnz.com',
  ];

  wp_remote_post($endpoint, [
    'method'      => 'POST',
    'headers'     => [
      'Content-Type'     => 'application/json',
      'X-Webhook-Secret' => $secret,
    ],
    'body'        => wp_json_encode($payload),
    'timeout'     => 10,
  ]);
}, 10, 3);
