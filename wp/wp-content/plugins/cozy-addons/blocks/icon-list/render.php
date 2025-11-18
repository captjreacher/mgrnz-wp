<?php
$client_id = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$color                   = isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '';
$color_hover             = isset( $attributes['typography']['colorHover'] ) ? $attributes['typography']['colorHover'] : '';
$item_padding_top        = isset( $attributes['containerStyles']['padding']['top'] ) ? $attributes['containerStyles']['padding']['top'] : '';
$item_padding_right      = isset( $attributes['containerStyles']['padding']['right'] ) ? $attributes['containerStyles']['padding']['right'] : '';
$item_padding_bottom     = isset( $attributes['containerStyles']['padding']['bottom'] ) ? $attributes['containerStyles']['padding']['bottom'] : '';
$item_padding_left       = isset( $attributes['containerStyles']['padding']['left'] ) ? $attributes['containerStyles']['padding']['left'] : '';
$item_border_width       = isset( $attributes['containerStyles']['borderWidth'] ) ? $attributes['containerStyles']['borderWidth'] : '';
$item_border_type        = isset( $attributes['containerStyles']['borderType'] ) ? $attributes['containerStyles']['borderType'] : '';
$item_border_color       = isset( $attributes['containerStyles']['borderColor'] ) ? $attributes['containerStyles']['borderColor'] : '';
$item_border_color_hover = isset( $attributes['containerStyles']['borderColorHover'] ) ? $attributes['containerStyles']['borderColorHover'] : '';
$item_bg_color           = isset( $attributes['containerStyles']['bgColor'] ) ? $attributes['containerStyles']['bgColor'] : '';
$item_bg_color_hover     = isset( $attributes['containerStyles']['bgColorHover'] ) ? $attributes['containerStyles']['bgColorHover'] : '';

$icon_box_bg_color_hover = isset( $attributes['iconBoxStyles']['bgColorHover'] ) ? $attributes['iconBoxStyles']['bgColorHover'] : '';

$icon_color = array(
	'default'        => isset( $attributes['iconColor'] ) ? $attributes['iconColor'] : '',
	'default_bg'     => isset( $attributes['iconBoxStyles']['bgColor'] ) ? $attributes['iconBoxStyles']['bgColor'] : '',
	'default_border' => isset( $attributes['iconBoxStyles']['borderColor'] ) ? $attributes['iconBoxStyles']['borderColor'] : '',
	'hover'          => isset( $attributes['iconColorHover'] ) ? $attributes['iconColorHover'] : '',
	'hover_border'   => isset( $attributes['iconBoxStyles']['borderColorHover'] ) ? $attributes['iconBoxStyles']['borderColorHover'] : '',
);

$typography_styles = array(
	'letter_case'    => isset( $attributes['typography']['letterCase'] ) ? $attributes['typography']['letterCase'] : '',
	'decoration'     => isset( $attributes['typography']['decoration'] ) ? $attributes['typography']['decoration'] : '',
	'line_height'    => isset( $attributes['typography']['lineHeight'] ) ? $attributes['typography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['typography']['letterSpacing'] ) ? $attributes['typography']['letterSpacing'] : '',
);

$block_styles = "
#$block_id .cozy-block-list-item {
    width: {$attributes['containerStyles']['width']}px;
    height: {$attributes['containerStyles']['height']}px;
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    background-color: {$item_bg_color};
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    text-transform: {$typography_styles['letter_case']};
    text-decoration: {$typography_styles['decoration']};
	line-height: {$typography_styles['line_height']};
	letter-spacing: {$typography_styles['letter_spacing']};
    color: {$color};
    text-align: {$attributes['textAlign']};
    padding: {$item_padding_top}px {$item_padding_right}px {$item_padding_bottom}px {$item_padding_left}px;
    border-width: {$item_border_width}px;
    border-style: {$item_border_type};
    border-color: {$item_border_color};
    gap: {$attributes['iconGap']}px;
}

#$block_id .cozy-block-list-item:hover {
    background-color: {$item_bg_color_hover};
    color: {$color_hover};
    border-color: {$item_border_color_hover};
}

#$block_id.vertical .list-inline-block {
    margin-bottom: {$attributes['containerStyles']['gap']}px;
}

#$block_id.horizontal .list-inline-block {
    margin-right: {$attributes['containerStyles']['gap']}px;
}

#$block_id svg {
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
    rotate: {$attributes['iconRotate']}deg;
    opacity: {$attributes['iconOpacity']};
}

#$block_id.fill svg {
    fill: {$icon_color['default']};
}

#$block_id.outline svg {
    stroke: {$icon_color['default']};
    fill: none;
}

#$block_id.fill .cozy-block-list-item:hover svg {
    fill: {$icon_color['hover']};
}

#$block_id.outline .cozy-block-list-item:hover svg {
    stroke: {$icon_color['hover']};
    fill: none;
}

#$block_id.stacked .list-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$icon_color['default_border']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$icon_color['default_bg']};
}

#$block_id.stacked .cozy-block-list-item:hover .list-icon-wrapper {
    background-color: {$icon_box_bg_color_hover};
    border-color: {$icon_color['hover_border']};
}
";

$output = '<div class="cozy-block-wrapper">';

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

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$output .= $content;
$output .= '</div>';

echo $output;
