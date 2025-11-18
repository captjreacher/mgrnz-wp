<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozySidebarPanel_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--sidebar-panel--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--sidebar-panel--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockSidebarPanelInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$container_color = array(
	'bg'         => isset( $attributes['bgColor'] ) ? $attributes['bgColor'] : '',
	'text'       => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
	'text_hover' => isset( $attributes['typography']['colorHover'] ) ? $attributes['typography']['colorHover'] : '',
);

$icon_color = array(
	'default'        => isset( $attributes['iconColor'] ) ? $attributes['iconColor'] : '',
	'border_default' => isset( $attributes['iconBoxStyles']['borderColor'] ) ? $attributes['iconBoxStyles']['borderColor'] : '',
	'bg_default'     => isset( $attributes['iconBoxStyles']['bgColor'] ) ? $attributes['iconBoxStyles']['bgColor'] : '',
	'hover'          => isset( $attributes['iconColorHover'] ) ? $attributes['iconColorHover'] : '',
	'border_hover'   => isset( $attributes['iconBoxStyles']['borderColorHover'] ) ? $attributes['iconBoxStyles']['borderColorHover'] : '',
	'bg_hover'       => isset( $attributes['iconBoxStyles']['bgColorHover'] ) ? $attributes['iconBoxStyles']['bgColorHover'] : '',
);

$open_icon = array(
	'color' => array(
		'icon'       => isset( $attributes['openIcon']['color']['icon'] ) ? $attributes['openIcon']['color']['icon'] : '',
		'icon_hover' => isset( $attributes['openIcon']['color']['iconHover'] ) ? $attributes['openIcon']['color']['iconHover'] : '',
		'bg'         => isset( $attributes['openIcon']['color']['bg'] ) ? $attributes['openIcon']['color']['bg'] : '',
		'bg_hover'   => isset( $attributes['openIcon']['color']['bgHover'] ) ? $attributes['openIcon']['color']['bgHover'] : '',
	),
);

$overlay_styles = array(
	'z_index' => isset( $attributes['overlayZIndex'] ) ? $attributes['overlayZIndex'] : '999',
	'color'   => array(
		'bg' => isset( $attributes['overlayBgColor'] ) ? $attributes['overlayBgColor'] : '',
	),
);

$typography = array(
	'letter_case'    => isset( $attributes['typography']['letterCase'] ) ? $attributes['typography']['letterCase'] : '',
	'decoration'     => isset( $attributes['typography']['decoration'] ) ? $attributes['typography']['decoration'] : '',
	'line_height'    => isset( $attributes['typography']['lineHeight'] ) ? $attributes['typography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['typography']['letterSpacing'] ) ? $attributes['typography']['letterSpacing'] : '',
);

$block_styles = "
#$block_id .cozy-sidebar-panel-wrapper{
    padding: {$attributes['sidebarPadding']['top']}px {$attributes['sidebarPadding']['right']}px {$attributes['sidebarPadding']['bottom']}px {$attributes['sidebarPadding']['left']}px;
    background-color: {$container_color['bg']};
    z-index: {$attributes['zIndex']};
}
#$block_id.layout-custom .cozy-sidebar-panel-wrapper {
    width: {$attributes['width']}px;
}
#$block_id .sidebar-icon-wrapper:not(.close-icon-wrapper) svg {
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
    rotate: {$attributes['iconRotate']}deg;
    opacity: {$attributes['iconOpacity']};
}
#$block_id.icon-layout-fill .sidebar-icon-wrapper svg {
    fill: {$icon_color['default']};
}
#$block_id.icon-layout-outline .sidebar-icon-wrapper svg {
    stroke: {$icon_color['default']};
    fill: none;
}
#$block_id.icon-layout-fill .sidebar-icon-wrapper:hover svg, #$block_id.icon-layout-fill .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    fill: {$icon_color['hover']};
}
#$block_id.icon-layout-outline .sidebar-icon-wrapper:hover svg, #$block_id.icon-layout-outline .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    stroke: {$icon_color['hover']};
    fill: none;
}
#$block_id.icon-view-stacked .sidebar-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$icon_color['border_default']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$icon_color['bg_default']};
}
#$block_id.icon-view-stacked .sidebar-icon-wrapper:hover, #$block_id.icon-view-stacked .open-icon-wrapper:hover .sidebar-icon-wrapper {
    border-color: {$icon_color['border_hover']};
    background-color: {$icon_color['bg_hover']};
}
#$block_id .relative {
    padding: {$attributes['closeIcon']['verticalSpacing']}px 0;
    margin: 0 {$attributes['closeIcon']['horizontalSpacing']}px;
}
#$block_id .open-icon-wrapper {
    gap: {$attributes['openIcon']['gap']}px;
    font-size: {$attributes['typography']['fontSize']}px;
    font-weight: {$attributes['typography']['fontWeight']};
    font-family: {$attributes['typography']['fontFamily']};
    text-transform: {$typography['letter_case']};
    text-decoration: {$typography['decoration']};
    line-height: {$typography['line_height']};
    letter-spacing: {$typography['letter_spacing']};
    color: {$container_color['text']};
}
#$block_id .open-icon-wrapper:hover {
    color: {$container_color['text_hover']};
}
#$block_id.icon-layout-fill .open-icon-wrapper .sidebar-icon-wrapper svg {
    fill: {$open_icon['color']['icon']};
}
#$block_id.icon-layout-outline .open-icon-wrapper .sidebar-icon-wrapper svg {
    stroke: {$open_icon['color']['icon']};
    fill: none;
}
#$block_id.icon-layout-fill .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    fill: {$open_icon['color']['icon_hover']};
}
#$block_id.icon-layout-outline .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    stroke: {$open_icon['color']['icon_hover']};
    fill: none;
}
#$block_id.icon-view-stacked .open-icon-wrapper .sidebar-icon-wrapper {
    background-color: {$open_icon['color']['bg']};
}
#$block_id.icon-view-stacked .open-icon-wrapper:hover .sidebar-icon-wrapper {
    background-color: {$open_icon['color']['bg_hover']};
}

#$block_id.has-overlay:before {
    z-index: {$overlay_styles['z_index']};
    background-color: {$overlay_styles['color']['bg']};
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
