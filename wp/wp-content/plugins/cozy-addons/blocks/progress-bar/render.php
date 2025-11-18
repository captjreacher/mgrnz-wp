<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyProgressBar_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--progress-bar--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--progress-bar--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProgressBarInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$container_color = array(
	'text'   => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
	'border' => isset( $attributes['containerStyles']['border']['color'] ) ? $attributes['containerStyles']['border']['color'] : '',
	'bg'     => isset( $attributes['containerStyles']['bgColor'] ) ? $attributes['containerStyles']['bgColor'] : '',
);

$label_wrapper_circum = $attributes['layoutCircle']['circumference'] - $attributes['layoutCircle']['width'];
$label_color          = array(
	'text' => isset( $attributes['labelTypography']['color'] ) ? $attributes['labelTypography']['color'] : '',
);

$bar_color = array(
	'bg' => isset( $attributes['bgColor'] ) ? $attributes['bgColor'] : '',
);

$block_styles = "
#$block_id, #$block_id .label-wrapper.display-flex.justify-spread {
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    color: {$container_color['text']};
}
#$block_id .before-progress, #$block_id .after-progress, #$block_id .label-wrapper.display-flex.justify-spread .before-progress, #$block_id .label-wrapper.display-flex.justify-spread .after-progress {
    font-weight: {$attributes['labelTypography']['fontWeight']};
    font-size: {$attributes['labelTypography']['fontSize']}px;
    font-family: {$attributes['labelTypography']['fontFamily']};
    color: {$label_color['text']};
}
.cozy-block-wrapper.$block_id .label-wrapper.display-flex.justify-spread {
    margin-bottom: {$attributes['label']['marginBottom']}px;
}
#$block_id {
    border-style: {$attributes['containerStyles']['border']['type']};
    border-width: {$attributes['containerStyles']['border']['width']['top']}px {$attributes['containerStyles']['border']['width']['right']}px {$attributes['containerStyles']['border']['width']['bottom']}px {$attributes['containerStyles']['border']['width']['left']}px;
    border-color: {$container_color['border']};
}
#$block_id:not(.layout-circle) {
    padding: {$attributes['containerStyles']['padding']['top']}px {$attributes['containerStyles']['padding']['right']}px {$attributes['containerStyles']['padding']['bottom']}px {$attributes['containerStyles']['padding']['left']}px;
    background-color: {$container_color['bg']};
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
}
#$block_id:not(.layout-circle) .cozy-progress-bar {
    background-color: {$bar_color['bg']};
    border-radius: {$attributes['borderRadius']['top']}px {$attributes['borderRadius']['right']}px {$attributes['borderRadius']['bottom']}px {$attributes['borderRadius']['left']}px;
}
#$block_id.layout-default .cozy-progress-bar {
    height: {$attributes['height']}px;
}
#$block_id.layout-default:not(.label-align-spread) .label-wrapper{
    gap: {$attributes['label']['gap']}px;
}
#$block_id.layout-vertical {
    height: {$attributes['height']}px;
}
#$block_id.layout-vertical .cozy-progress-bar {
    width: {$attributes['width']}px;
}
#$block_id.layout-circle {
    width: {$attributes['layoutCircle']['circumference']}px;
    height: {$attributes['layoutCircle']['circumference']}px;
}
#$block_id.layout-circle .cozy-progress-bar {
    background: conic-gradient({$attributes['layoutCircle']['primaryColor']} 0%, {$attributes['layoutCircle']['secondaryColor']} {$attributes['progress']}%);
    padding: {$attributes['containerStyles']['padding']['top']}px {$attributes['containerStyles']['padding']['right']}px {$attributes['containerStyles']['padding']['bottom']}px {$attributes['containerStyles']['padding']['left']}px;
}
#$block_id.layout-circle .cozy-progress-bar .label-wrapper {
    width: {$label_wrapper_circum}px;
    height: {$label_wrapper_circum}px;
    background-color: {$container_color['bg']};
}
";

$output = '';
if ( 'circle' === $attributes['layout'] ) {
	$output = '<div class="cozy-block-wrapper ' . $block_id . ' wp-block-cozy-block-progress-bar display-flex block-align-' . $attributes['layoutCircle']['alignment'] . '">';
} else {
	$output = '<div class="cozy-block-wrapper ' . $block_id . ' ">';
}

$font_families = array();

if ( isset( $attributes['labelTypography']['fontFamily'] ) && ! empty( $attributes['labelTypography']['fontFamily'] ) ) {
	$font_families[] = $attributes['labelTypography']['fontFamily'];
}
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

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$output .= $content;
$output .= '</div>';

echo $output;
