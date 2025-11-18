<?php
$client_id = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$cozy_block_var = 'cozyDateTime_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--current-time--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--current-time--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockDateTimeInit( "' . esc_html( $client_id ) . '" ) }) ' );

$typography_styles = array(
	'letter_case'    => isset( $attributes['layout']['styles']['letterCase'] ) ? $attributes['layout']['styles']['letterCase'] : '',
	'decoration'     => isset( $attributes['layout']['styles']['decoration'] ) ? $attributes['layout']['styles']['decoration'] : '',
	'line_height'    => isset( $attributes['layout']['styles']['lineHeight'] ) ? $attributes['layout']['styles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['layout']['styles']['letterSpacing'] ) ? $attributes['layout']['styles']['letterSpacing'] : '',
);

$time_styles = array(
	'font_family'    => isset( $attributes['time']['styles']['fontFamily'] ) ? $attributes['time']['styles']['fontFamily'] : '',
	'letter_case'    => isset( $attributes['time']['styles']['letterCase'] ) ? $attributes['time']['styles']['letterCase'] : '',
	'decoration'     => isset( $attributes['time']['styles']['decoration'] ) ? $attributes['time']['styles']['decoration'] : '',
	'line_height'    => isset( $attributes['time']['styles']['lineHeight'] ) ? $attributes['time']['styles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['time']['styles']['letterSpacing'] ) ? $attributes['time']['styles']['letterSpacing'] : '',
);

$block_styles = "
#$block_id {
    text-transform: {$typography_styles['letter_case']};
    text-decoration: {$typography_styles['decoration']};
    line-height: {$typography_styles['line_height']};
    letter-spacing: {$typography_styles['letter_spacing']};
}

#$block_id .cozy-time {
	font-family: {$time_styles['font_family']};
	text-transform: {$time_styles['letter_case']};
	text-decoration: {$time_styles['decoration']};
	line-height: {$time_styles['line_height']};
	letter-spacing: {$time_styles['letter_spacing']};
}
";

$output = '<div class="cozy-block-wrapper">';

$font_families = array();

if ( isset( $attributes['layout']['styles']['fontFamily'] ) && ! empty( $attributes['layout']['styles']['fontFamily'] ) ) {
	$font_families[] = $attributes['layout']['styles']['fontFamily'];
}

if ( isset( $attributes['time']['styles']['fontFamily'] ) && ! empty( $attributes['time']['styles']['fontFamily'] ) ) {
	$font_families[] = $attributes['time']['styles']['fontFamily'];
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
