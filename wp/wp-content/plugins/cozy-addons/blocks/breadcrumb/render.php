<?php
$client_id = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$output     = '<div class="cozy-block-wrapper">';
$typography = $attributes['typography'];
$style      = '--cozyFontSize: ' . $typography['fontSize'] . 'px;';
$style     .= ' --cozyFontWeight: ' . $typography['fontWeight'] . ';';
$style     .= ' --cozyFontFamily: ' . str_replace( '"', '', $typography['fontFamily'] ) . ';';
$style     .= ' --cozyColor: ' . $typography['color'] . ';';
$style     .= ' --cozyLinkColor: ' . $typography['linkColor'] . ';';
$style     .= ' --cozyHoverColor: ' . $typography['hoverColor'] . ';';

$typography_styles = array(
	'letter_case'    => isset( $attributes['typography']['letterCase'] ) ? $attributes['typography']['letterCase'] : '',
	'decoration'     => isset( $attributes['typography']['decoration'] ) ? $attributes['typography']['decoration'] : '',
	'line_height'    => isset( $attributes['typography']['lineHeight'] ) ? $attributes['typography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['typography']['letterSpacing'] ) ? $attributes['typography']['letterSpacing'] : '',
);

$block_styles = "
#$block_id {
	text-transform: {$typography_styles['letter_case']};
	line-height: {$typography_styles['line_height']};
	letter-spacing: {$typography_styles['letter_spacing']};
}

#$block_id a {
	text-decoration: {$typography_styles['decoration']} !important;
}
";

$font_families = array();

if ( isset( $attributes['typography']['fontFamily'] ) && ! empty( $attributes['typography']['fontFamily'] ) ) {
	$font_families[] = $attributes['typography']['fontFamily'];
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

if ( ! is_home() ) {
	add_action(
		'wp_enqueue_scripts',
		function () use ( $block_styles ) {
			wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
		}
	);

	$output .= '<p class="cozy-block-breadcrumb" id="' . $block_id . '" style=" ' . $style . '">';
	$output .= '<a href="' . home_url( '/' ) . '">Home</a> / ';
	if ( is_category() ) {
		$category = single_cat_title( '', false );
		$output  .= $category;
	} elseif ( is_single() ) {
		$categories = get_the_category();
		if ( is_single() && $categories ) {
			$output .= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a> / ';
		}
		$output .= get_the_title();
	} elseif ( is_page() ) {
		$output .= the_title( '', '', false );
	}

	$output .= '</p>';
}

$output .= '</div>';

echo $output;
