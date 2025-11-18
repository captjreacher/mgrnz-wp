<?php

$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$cozy_block_var = 'cozyCounter_' . str_replace( '-', '_', $client_id );

wp_localize_script( 'cozy-block--counter--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--counter--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockCounterInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$color = isset( $attributes['styles']['color'] ) ? $attributes['styles']['color'] : '';

$block_styles = "
#$block_id {
    text-align: {$attributes['textAlign']};
    font-size: {$attributes['styles']['fontSize']};
    font-weight: {$attributes['styles']['fontWeight']};
    font-family: {$attributes['styles']['fontFamily']};
    color: {$color};
}
";

$output = '<div class="cozy-block-wrapper">';

$font_families = array();

if ( isset( $attributes['styles']['fontFamily'] ) && ! empty( $attributes['styles']['fontFamily'] ) ) {
	$font_families[] = $attributes['styles']['fontFamily'];
}

// Remove duplicate font families.
$font_families = array_unique( $font_families );

$font_query = '';

// Add other fonts.
if ( ! empty( $font_families ) ) {
	foreach ( $font_families as $key => $family ) {
		if ( 0 === $key ) {
			$font_query .= 'family=' . $family . ':wght@100;200;300;400;500;600;700;800;900';
		} else {
			$font_query .= '&family=' . $family . ':wght@100;200;300;400;500;600;700;800;900';
		}
	}
}

if ( ! empty( $font_query ) ) {
	// Generate the inline style for the Google Fonts link.
	$google_fonts_url = 'https://fonts.googleapis.com/css2?' . $font_query;

	// Add the Google Fonts URL as an inline style.
	$font_url = '@import url("' . $google_fonts_url . '");';
	echo '<style> ' . $font_url . '  </style>';
}

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$output .= $content;
$output .= '</div>';

echo $output;
