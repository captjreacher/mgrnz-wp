<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyRelatedPosts_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--related-post--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--related-post--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockRelatedPostsInit( "' . esc_html( $client_id ) . '" ) }) ' );

$output  = '<div class="cozy-block-wrapper">';
$output .= $content;
$output .= '</div>';

echo $output;
