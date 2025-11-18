<?php
/**
 * Plugin Name: MGRNZ Core (CORS + Webhooks)
 * Description: CORS for REST; send post_publish/post_update/post_delete webhooks to Supabase.
 * Version: 0.3.0
 * Author: MGRNZ
 * 
 * Environment Configuration:
 * This plugin uses environment variables for configuration, allowing it to work
 * seamlessly in both local and production environments without code changes.
 * 
 * Required Environment Variables:
 * - MGRNZ_WEBHOOK_URL: Supabase edge function URL (e.g., http://localhost:54321/functions/v1/wp-sync)
 * - MGRNZ_WEBHOOK_SECRET: Secret key for webhook authentication
 * - MGRNZ_ALLOWED_ORIGINS: Comma-separated list of allowed CORS origins
 * 
 * Local Development:
 * Set these in .env.local to point to your local Supabase instance.
 * See supabase/LOCAL_DEVELOPMENT.md for setup instructions.
 * 
 * Production:
 * Set these in .env.production or server environment variables.
 */

add_action('rest_api_init', function () {
  remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
  add_filter('rest_pre_serve_request', function ($value) {
    $origin  = isset($_SERVER['HTTP_ORIGIN']) ? trim($_SERVER['HTTP_ORIGIN']) : '';
    $allowed = array_map('trim', explode(',', getenv('MGRNZ_ALLOWED_ORIGINS') ?: 'https://maximisedai.com,https://www.maximisedai.com'));
    if ($origin && in_array($origin, $allowed, true)) {
      header('Access-Control-Allow-Origin: ' . $origin);
      header('Vary: Origin');
    }
    header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Authorization, Content-Type, X-Requested-With');
    header('Access-Control-Allow-Credentials: true');
    header('X-MGRNZ-Core', 'active'); // debug header so you can see it's loaded
    return $value;
  });
}, 15);

function mgrnz__webhook_url()    { return getenv('MGRNZ_WEBHOOK_URL') ?: ''; }
function mgrnz__webhook_secret() { return getenv('MGRNZ_WEBHOOK_SECRET') ?: ''; }

function mgrnz__featured_media_payload($post_id) {
  $id = get_post_thumbnail_id($post_id);
  if (!$id) return null;
  return ['id'=>$id,'url'=>wp_get_attachment_url($id),'alt'=>get_post_meta($id, '_wp_attachment_image_alt', true)];
}
function mgrnz__acf_payload($post_id) {
  if (!function_exists('get_fields')) return null;
  return get_fields($post_id) ?: new stdClass();
}
function mgrnz__send_webhook($event, $post_id, $status, $slug = null) {
  $endpoint = mgrnz__webhook_url();
  if (!$endpoint) return;
  $post = get_post($post_id);
  $payload = [
    'event'=>$event,
    'post_id'=>$post_id,
    'slug'=>$slug ?: ($post ? $post->post_name : null),
    'status'=>$status,
    'origin_site'=>parse_url(home_url(), PHP_URL_HOST) ?: 'mgrnz.com',
    'sync_origin'=>'mgrnz.com',
    'modified_gmt'=>$post ? get_post_modified_time('c', true, $post) : gmdate('c'),
    'acf'=>$post ? mgrnz__acf_payload($post_id) : null,
    'featured_media'=>$post ? mgrnz__featured_media_payload($post_id) : null,
  ];
  wp_remote_post($endpoint, [
    'method'=>'POST','timeout'=>12,
    'headers'=>['Content-Type'=>'application/json','X-Webhook-Secret'=>mgrnz__webhook_secret()],
    'body'=>wp_json_encode($payload),
  ]);
}

add_action('transition_post_status', function ($new, $old, $post) {
  if ($post->post_type !== 'post') return;
  $event = ($old === 'new' || $old === 'auto-draft' || $old === 'draft') && ($new === 'publish') ? 'post_publish' : 'post_update';
  mgrnz__send_webhook($event, $post->ID, $new, $post->post_name);
}, 10, 3);

add_action('before_delete_post', function ($post_id) {
  $post = get_post($post_id);
  if (!$post || $post->post_type !== 'post') return;
  mgrnz__send_webhook('post_delete', $post_id, 'deleted', $post->post_name);
}, 10, 1);
