<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$cozy_block_var = 'cozyAccordion_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--accordion--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--accordion--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockAccordionInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$container_color = array(
	'bg'     => isset( $attributes['containerStyles']['bgColor'] ) ? $attributes['containerStyles']['bgColor'] : '',
	'border' => isset( $attributes['containerStyles']['border']['color'] ) ? $attributes['containerStyles']['border']['color'] : '',
);

$item_color = array(
	'bg'     => isset( $attributes['accordionStyles']['bgColor'] ) ? $attributes['accordionStyles']['bgColor'] : '',
	'border' => isset( $attributes['accordionStyles']['border']['color'] ) ? $attributes['accordionStyles']['border']['color'] : '',
);

$title_color = array(
	'text' => isset( $attributes['titleTypography']['color'] ) ? $attributes['titleTypography']['color'] : '',
);

$content_color = array(
	'text' => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
);

$icon_styles = array(
	'gap' => isset( $attributes['icon']['gap'] ) ? $attributes['icon']['gap'] : '6px',
);
$icon_color  = array(
	'bg'           => isset( $attributes['iconBoxStyles']['bgColor'] ) ? $attributes['iconBoxStyles']['bgColor'] : '',
	'border'       => isset( $attributes['iconBoxStyles']['borderColor'] ) ? $attributes['iconBoxStyles']['borderColor'] : '',
	'bg_hover'     => isset( $attributes['iconBoxStyles']['bgColorHover'] ) ? $attributes['iconBoxStyles']['bgColorHover'] : '',
	'border_hover' => isset( $attributes['iconBoxStyles']['borderColorHover'] ) ? $attributes['iconBoxStyles']['borderColorHover'] : '',
	'icon'         => isset( $attributes['icon']['color'] ) ? $attributes['icon']['color'] : '',
	'icon_hover'   => isset( $attributes['icon']['colorHover'] ) ? $attributes['icon']['colorHover'] : '',
);

$block_styles = "
#$block_id {
    padding: {$attributes['containerStyles']['padding']['top']}px {$attributes['containerStyles']['padding']['right']}px {$attributes['containerStyles']['padding']['bottom']}px {$attributes['containerStyles']['padding']['left']}px;
    border-style: {$attributes['containerStyles']['border']['type']};
    border-width: {$attributes['containerStyles']['border']['width']['top']}px {$attributes['containerStyles']['border']['width']['right']}px {$attributes['containerStyles']['border']['width']['bottom']}px {$attributes['containerStyles']['border']['width']['left']}px;
    border-color: {$container_color['border']};
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    background-color: {$container_color['bg']};
}

#$block_id .cozy-accordion-wrapper {
    row-gap: {$attributes['rowGap']}px;
}

#$block_id .cozy-block-accordion-item {
    padding: {$attributes['accordionStyles']['padding']['top']}px {$attributes['accordionStyles']['padding']['right']}px {$attributes['accordionStyles']['padding']['bottom']}px {$attributes['accordionStyles']['padding']['left']}px;
    border-style: {$attributes['accordionStyles']['border']['type']};
    border-width: {$attributes['accordionStyles']['border']['width']['top']}px {$attributes['accordionStyles']['border']['width']['right']}px {$attributes['accordionStyles']['border']['width']['bottom']}px {$attributes['accordionStyles']['border']['width']['left']}px;
    border-color: {$item_color['border']};
    border-radius: {$attributes['accordionStyles']['borderRadius']['top']}px {$attributes['accordionStyles']['borderRadius']['right']}px {$attributes['accordionStyles']['borderRadius']['bottom']}px {$attributes['accordionStyles']['borderRadius']['left']}px;
    background-color: {$item_color['bg']};
}

#$block_id .cozy-block-accordion-item .cozy-accordion-title {
	gap: {$icon_styles['gap']};
}
#$block_id .cozy-block-accordion-item .cozy-accordion-title * {
    font-weight: {$attributes['titleTypography']['fontWeight']};
    font-size: {$attributes['titleTypography']['fontSize']}px;
    font-family: {$attributes['titleTypography']['fontFamily']};
    color: {$title_color['text']};
}

#$block_id .cozy-block-accordion-item .cozy-accordion-content {
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    color: {$content_color['text']};
}

#$block_id .cozy-accordion-title .accordion-icon-wrapper svg {
    width: {$attributes['icon']['size']}px;
    height: {$attributes['icon']['size']}px;
    opacity: {$attributes['icon']['opacity']};
    rotate: {$attributes['icon']['rotate']}deg;
}

#$block_id.icon-view-stacked .cozy-accordion-title .accordion-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$icon_color['border']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$icon_color['bg']};
}

#$block_id.icon-view-stacked .cozy-accordion-title.active .accordion-icon-wrapper {
    background-color: {$icon_color['bg_hover']};
    border-color: {$icon_color['border_hover']};
}

#$block_id.icon-layout-fill .cozy-accordion-title .accordion-icon-wrapper svg {
    fill: {$icon_color['icon']};
}

#$block_id.icon-layout-outline .cozy-accordion-title .accordion-icon-wrapper svg {
    stroke: {$icon_color['icon']};
    fill: none;
}

#$block_id.icon-layout-fill .cozy-accordion-title.active .accordion-icon-wrapper svg {
    fill: {$icon_color['icon_hover']};
    rotate: {$attributes['icon']['rotateActive']}deg;
}

#$block_id.icon-layout-outline .cozy-accordion-title.active .accordion-icon-wrapper svg {
    stroke: {$icon_color['icon_hover']};
    fill: none;
    transform: rotate({$attributes['icon']['rotateActive']}deg);
}
";

$output = '<div class="cozy-block-wrapper">';

$font_families = array();

if ( isset( $attributes['titleTypography']['fontFamily'] ) && ! empty( $attributes['titleTypography']['fontFamily'] ) ) {
	$font_families[] = $attributes['titleTypography']['fontFamily'];
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
		// wp_add_inline_style( 'cozy-block--accordion--style', esc_html( $block_styles ) );
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$output .= $content;

$output .= '</div>';

echo $output;
