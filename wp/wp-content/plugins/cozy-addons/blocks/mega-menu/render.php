<?php

$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyMegaMenu_' . str_replace( '-', '_', $client_id );

$attributes['megaMenuTemplates'] = \CozyAddons\Helpers\Utils::get_instance()->get_cozy_mega_menu_templates();

wp_localize_script( 'cozy-block--mega-menu--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--mega-menu--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockMegaMenuInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$content_gap_top = $attributes['contentGap'] + 40;

$container_color = array(
	'border'        => isset( $attributes['menuStyles']['borderColor'] ) ? $attributes['menuStyles']['borderColor'] : '',
	'bg'            => isset( $attributes['menuStyles']['bgColor'] ) ? $attributes['menuStyles']['bgColor'] : '',
	'bg_fullscreen' => isset( $attributes['responsive']['bgColor'] ) ? $attributes['responsive']['bgColor'] : '',
);

$mega_menu = array(
	'dropdown_gap' => isset( $attributes['megaMenuContentGap'] ) ? $attributes['megaMenuContentGap'] : '26',
);

$item_color = array(
	'bg_hover'   => isset( $attributes['menuStyles']['itemHoverColor'] ) ? $attributes['menuStyles']['itemHoverColor'] : '',
	'text_hover' => isset( $attributes['menuStyles']['textHoverColor'] ) ? $attributes['menuStyles']['textHoverColor'] : '',
);

$sub_item_color = array(
	'border'        => isset( $attributes['submenuStyles']['borderColor'] ) ? $attributes['submenuStyles']['borderColor'] : '',
	'bg'            => isset( $attributes['submenuStyles']['bgColor'] ) ? $attributes['submenuStyles']['bgColor'] : '',
	'shadow'        => isset( $attributes['submenuStyles']['boxShadow']['color'] ) ? $attributes['submenuStyles']['boxShadow']['color'] : '',
	'item_bg_hover' => isset( $attributes['submenuStyles']['itemHoverColor'] ) ? $attributes['submenuStyles']['itemHoverColor'] : '',
	'text_hover'    => isset( $attributes['submenuStyles']['textHoverColor'] ) ? $attributes['submenuStyles']['textHoverColor'] : '',
);

$icon_styles = array(
	'box_width'  => isset( $attributes['iconBoxStyles']['width'] ) ? $attributes['iconBoxStyles']['width'] : '30px',
	'box_height' => isset( $attributes['iconBoxStyles']['height'] ) ? $attributes['iconBoxStyles']['height'] : '30px',
	'color'      => array(
		'icon'         => isset( $attributes['icon']['color'] ) ? $attributes['icon']['color'] : '',
		'border'       => isset( $attributes['iconBoxStyles']['borderColor'] ) ? $attributes['iconBoxStyles']['borderColor'] : '',
		'bg'           => isset( $attributes['iconBoxStyles']['bgColor'] ) ? $attributes['iconBoxStyles']['bgColor'] : '',
		'bg_hover'     => isset( $attributes['iconBoxStyles']['bgColorHover'] ) ? $attributes['iconBoxStyles']['bgColorHover'] : '',
		'border_hover' => isset( $attributes['iconBoxStyles']['borderColorHover'] ) ? $attributes['iconBoxStyles']['borderColorHover'] : '',
	),
);

$responsive_styles = array(
	'open_icon'  => array(
		'box_width'  => isset( $attributes['responsive']['openIcon']['boxWidth'] ) ? $attributes['responsive']['openIcon']['boxWidth'] : '30px',
		'box_height' => isset( $attributes['responsive']['openIcon']['boxHeight'] ) ? $attributes['responsive']['openIcon']['boxHeight'] : '30px',
		'border'     => isset( $attributes['responsive']['openIcon']['border'] ) ? cozy_render_TRBL( 'border', $attributes['responsive']['openIcon']['border'] ) : '',
		'radius'     => isset( $attributes['responsive']['openIcon']['radius'] ) ? $attributes['responsive']['openIcon']['radius'] : '',
		'size'       => isset( $attributes['responsive']['openIcon']['size'] ) ? $attributes['responsive']['openIcon']['size'] : '',
		'color'      => array(
			'icon'         => isset( $attributes['responsive']['openIcon']['color']['icon'] ) ? $attributes['responsive']['openIcon']['color']['icon'] : '',
			'icon_hover'   => isset( $attributes['responsive']['openIcon']['color']['iconHover'] ) ? $attributes['responsive']['openIcon']['color']['iconHover'] : '',
			'bg'           => isset( $attributes['responsive']['openIcon']['color']['bg'] ) ? $attributes['responsive']['openIcon']['color']['bg'] : '',
			'bg_hover'     => isset( $attributes['responsive']['openIcon']['color']['bgHover'] ) ? $attributes['responsive']['openIcon']['color']['bgHover'] : '',
			'border_hover' => isset( $attributes['responsive']['openIcon']['color']['borderHover'] ) ? $attributes['responsive']['openIcon']['color']['borderHover'] : '',
		),
	),
	'close_icon' => array(
		'hgap'       => isset( $attributes['responsive']['closeIcon']['horizontalSpacing'] ) ? $attributes['responsive']['closeIcon']['horizontalSpacing'] : '',
		'box_width'  => isset( $attributes['responsive']['closeIcon']['boxWidth'] ) ? $attributes['responsive']['closeIcon']['boxWidth'] : '30px',
		'box_height' => isset( $attributes['responsive']['closeIcon']['boxHeight'] ) ? $attributes['responsive']['closeIcon']['boxHeight'] : '30px',
		'border'     => isset( $attributes['responsive']['closeIcon']['border'] ) ? cozy_render_TRBL( 'border', $attributes['responsive']['closeIcon']['border'] ) : '',
		'radius'     => isset( $attributes['responsive']['closeIcon']['radius'] ) ? $attributes['responsive']['closeIcon']['radius'] : '',
		'size'       => isset( $attributes['responsive']['closeIcon']['size'] ) ? $attributes['responsive']['closeIcon']['size'] : '',
		'color'      => array(
			'icon'         => isset( $attributes['responsive']['closeIcon']['color']['icon'] ) ? $attributes['responsive']['closeIcon']['color']['icon'] : '',
			'icon_hover'   => isset( $attributes['responsive']['closeIcon']['color']['iconHover'] ) ? $attributes['responsive']['closeIcon']['color']['iconHover'] : '',
			'bg'           => isset( $attributes['responsive']['closeIcon']['color']['bg'] ) ? $attributes['responsive']['closeIcon']['color']['bg'] : '',
			'bg_hover'     => isset( $attributes['responsive']['closeIcon']['color']['bgHover'] ) ? $attributes['responsive']['closeIcon']['color']['bgHover'] : '',
			'border_hover' => isset( $attributes['responsive']['closeIcon']['color']['borderHover'] ) ? $attributes['responsive']['closeIcon']['color']['borderHover'] : '',
		),
	),
);

$color = array(
	'text'        => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
	'active_text' => isset( $attributes['typography']['colorActive'] ) ? $attributes['typography']['colorActive'] : '',
	'active_bg'   => isset( $attributes['typography']['bgColorActive'] ) ? $attributes['typography']['bgColorActive'] : '',
);

$typography = array(
	'font_family'    => isset( $attributes['typography']['fontFamily'] ) ? $attributes['typography']['fontFamily'] : '',
	'letter_case'    => isset( $attributes['typography']['letterCase'] ) ? $attributes['typography']['letterCase'] : '',
	'decoration'     => isset( $attributes['typography']['decoration'] ) ? $attributes['typography']['decoration'] : '',
	'line_height'    => isset( $attributes['typography']['lineHeight'] ) ? $attributes['typography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['typography']['letterSpacing'] ) ? $attributes['typography']['letterSpacing'] : '',
);

$block_styles = "
#$block_id.display-horizontal .cozy-menu-wrapper {
    gap: {$attributes['menuGap']}px;
}

#$block_id .cozy-menu-wrapper {
    padding: {$attributes['menuStyles']['padding']['top']}px {$attributes['menuStyles']['padding']['right']}px {$attributes['menuStyles']['padding']['bottom']}px {$attributes['menuStyles']['padding']['left']}px;
    border-width: {$attributes['menuStyles']['borderWidth']}px;
    border-style: {$attributes['menuStyles']['borderType']};
    border-color: {$container_color['border']};
    border-radius: {$attributes['menuStyles']['borderRadius']}px;
    background-color: {$container_color['bg']};
}

#$block_id .cozy-menu-wrapper > .wp-block-navigation-item {
    padding: {$attributes['menuStyles']['itemPadding']['top']}px {$attributes['menuStyles']['itemPadding']['right']}px {$attributes['menuStyles']['itemPadding']['bottom']}px {$attributes['menuStyles']['itemPadding']['left']}px;
    border-radius: {$attributes['menuStyles']['itemBorderRadius']}px;
}
#$block_id .cozy-menu-wrapper > .wp-block-navigation-item:hover {
    background-color: {$item_color['bg_hover']};
}
#$block_id .cozy-menu-wrapper > .wp-block-navigation-item:hover > .wp-block-navigation-item__content {
    color: {$item_color['text_hover']};
}
#$block_id .wp-block-navigation-item li.wp-block-navigation-item:not(:last-child) {
    margin-bottom: {$attributes['submenuStyles']['itemSpacing']}px;
}
#$block_id .cozy-block-navigation-menu.full-screen li.wp-block-navigation-item:not(:last-child) {
    margin-bottom: {$attributes['responsive']['gap']}px;
}
#$block_id.display-vertical .cozy-block-navigation-menu:not(.full-screen) .cozy-menu-wrapper > .wp-block-navigation-item {
    width: {$attributes['menuWidth']}px;
}
#$block_id.display-vertical .cozy-block-navigation-menu:not(.full-screen) .cozy-mega-menu__item .cozy-block-mega-menu__dropdown {
    left: {$attributes['menuWidth']}px;
    min-width: {$attributes['dropdownWidth']}px;
}
#$block_id .wp-block-navigation__submenu-container {
    min-width: {$attributes['submenuStyles']['minWidth']}px;
    border-width: {$attributes['submenuStyles']['borderWidth']}px;
    border-style: {$attributes['submenuStyles']['borderType']};
    border-color: {$sub_item_color['border']};
    border-radius: {$attributes['submenuStyles']['borderRadius']}px;
    background-color: {$sub_item_color['bg']};
}
#$block_id .wp-block-navigation__submenu-container .wp-block-navigation-item {
    padding: {$attributes['submenuStyles']['padding']['top']}px {$attributes['submenuStyles']['padding']['right']}px {$attributes['submenuStyles']['padding']['bottom']}px {$attributes['submenuStyles']['padding']['left']}px;
}
#$block_id.submenu-has-box-shadow .wp-block-navigation__submenu-container {
    box-shadow: {$attributes['submenuStyles']['boxShadow']['horizontal']}px {$attributes['submenuStyles']['boxShadow']['vertical']}px {$attributes['submenuStyles']['boxShadow']['blur']}px {$attributes['submenuStyles']['boxShadow']['spread']}px {$sub_item_color['shadow']} {$attributes['submenuStyles']['boxShadow']['position']};
}
#$block_id .wp-block-navigation__submenu-container .wp-block-navigation-item:hover {
    background-color: {$sub_item_color['item_bg_hover']};
}
#$block_id .wp-block-navigation__submenu-container > .wp-block-navigation-item:hover .wp-block-navigation-item__content {
    color: {$sub_item_color['text_hover']};
}
#$block_id.display-vertical .cozy-menu-wrapper > .wp-block-navigation-item.has-child > .wp-block-navigation__submenu-container {
    left: {$attributes['menuWidth']}px;
}
#$block_id.display-horizontal .cozy-menu-wrapper .wp-block-navigation__submenu-container {
    top: {$attributes['contentGap']}px;
}
#$block_id.display-horizontal.event-hover .cozy-mega-menu__item .cozy-block-mega-menu__dropdown, #$block_id .full-screen .cozy-mega-menu__item .cozy-block-mega-menu__dropdown {
    padding-top: {$mega_menu['dropdown_gap']}px;
}
#$block_id.display-horizontal.event-hover .wp-block-navigation-item.has-child:hover .wp-block-navigation__submenu-container, #$block_id.display-horizontal .cozy-block-navigation-menu:not(.full-screen) .cozy-menu-wrapper > .wp-block-navigation-item.has-child > .wp-block-navigation__submenu-container.show-cozy-dropdown-content {
    top: {$attributes['contentGap']}px;
}
#$block_id .full-screen .wp-block-navigation__submenu-container {
    margin-top: {$attributes['contentGap']}px !important;
}

#$block_id .cozy-menu-wrapper > .wp-block-navigation-item.has-child > .cozy-dropdown-icon-wrapper,
#$block_id .cozy-menu-wrapper > .cozy-mega-menu__item > .cozy-dropdown-icon-wrapper {
    margin-left: {$attributes['icon']['gap']}px;
}
#$block_id .cozy-dropdown-icon-wrapper {
    width: {$icon_styles['box_width']};
    height: {$icon_styles['box_height']};
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$icon_styles['color']['border']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$icon_styles['color']['bg']};
    margin-right: {$attributes['submenuStyles']['padding']['right']}px;
}
#$block_id .cozy-dropdown-icon-wrapper .cozy-dropdown-icon {
    width: {$attributes['icon']['size']}px;
    height: {$attributes['icon']['size']}px;
    opacity: {$attributes['icon']['opacity']};
    rotate: {$attributes['icon']['rotate']}deg;
    fill: {$icon_styles['color']['icon']};
}
#$block_id .cozy-menu-wrapper > .wp-block-navigation-item:hover .cozy-dropdown-icon-wrapper {
    background-color: {$icon_styles['color']['bg_hover']};
    border-color: {$icon_styles['color']['border_hover']};

}
#$block_id .cozy-menu-wrapper > .wp-block-navigation-item:hover .cozy-dropdown-icon-wrapper .cozy-dropdown-icon {
    fill: {$item_color['text_hover']};
}

#$block_id.event-hover .wp-block-navigation__submenu-container .wp-block-navigation-item.has-child:hover .cozy-dropdown-icon, #$block_id.event-hover .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container .wp-block-navigation-item.has-child:hover .cozy-dropdown-icon {
    rotate: {$attributes['icon']['rotateActive']}deg;
}
#$block_id.event-hover .wp-block-navigation-item:hover .wp-block-navigation__submenu-container .cozy-dropdown-icon, #$block_id.event-hover .wp-block-navigation__submenu-container .wp-block-navigation-item:hover .wp-block-navigation__submenu-container .cozy-dropdown-icon {
    rotate: {$attributes['icon']['rotate']}deg;
}

#$block_id .open-icon-wrapper {
    width: {$responsive_styles['open_icon']['box_width']};
    height: {$responsive_styles['open_icon']['box_height']};
    {$responsive_styles['open_icon']['border']}
    border-radius: {$responsive_styles['open_icon']['radius']};
    background-color: {$responsive_styles['open_icon']['color']['bg']};
}
#$block_id .open-icon-wrapper .cozy-responsive-icon__open {
    width: {$responsive_styles['open_icon']['size']};
    height: {$responsive_styles['open_icon']['size']};
    fill: {$responsive_styles['open_icon']['color']['icon']};
}

#$block_id .open-icon-wrapper:hover {
    background-color: {$responsive_styles['open_icon']['color']['bg_hover']};
    border-color: {$responsive_styles['open_icon']['color']['border_hover']};
}

#$block_id .open-icon-wrapper:hover .cozy-responsive-icon__open {
    fill: {$responsive_styles['open_icon']['color']['icon_hover']};
}

#$block_id .cozy-block-navigation-menu.full-screen {
    padding: {$attributes['responsive']['padding']['top']}px {$attributes['responsive']['padding']['right']}px {$attributes['responsive']['padding']['bottom']}px {$attributes['responsive']['padding']['left']}px;
    background-color: {$container_color['bg_fullscreen']};

}
#$block_id .cozy-block-navigation-menu.full-screen .cozy-menu-wrapper {
    margin-top: calc({$responsive_styles['close_icon']['box_width']} + 6px) !important;
}

#$block_id .cozy-block-navigation-menu.full-screen .close-icon-wrapper {
    width: {$responsive_styles['close_icon']['box_width']};
    height: {$responsive_styles['close_icon']['box_height']};
    {$responsive_styles['close_icon']['border']}
    border-radius: {$responsive_styles['close_icon']['radius']};
    top: {$attributes['responsive']['iconTop']}px;
    background-color: {$responsive_styles['close_icon']['color']['bg']};
}
#$block_id .cozy-block-navigation-menu.full-screen .close-icon-wrapper .cozy-responsive-icon__close {
    width: {$responsive_styles['close_icon']['size']};
    height: {$responsive_styles['close_icon']['size']};
    fill: {$responsive_styles['close_icon']['color']['icon']};
}

#$block_id .cozy-block-navigation-menu.full-screen .close-icon-wrapper:hover {
    background-color: {$responsive_styles['close_icon']['color']['bg_hover']};
    border-color: {$responsive_styles['close_icon']['color']['border_hover']};
}

#$block_id .cozy-block-navigation-menu.full-screen .close-icon-wrapper:hover .cozy-responsive-icon__close {
    fill: {$responsive_styles['close_icon']['color']['icon_hover']};
}
#$block_id .cozy-block-navigation-menu.full-screen.responsive-icon-position-left .close-icon-wrapper {
    left: 0;
    margin-left: {$responsive_styles['close_icon']['hgap']}px;
}
#$block_id .cozy-block-navigation-menu.full-screen.responsive-icon-position-right .close-icon-wrapper {
    right: 0;
    margin-right: {$responsive_styles['close_icon']['hgap']}px;
}

#$block_id .wp-block-navigation-item__content {
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$typography['font_family']};
    text-transform: {$typography['letter_case']};
    text-decoration: {$typography['decoration']};
    line-height: {$typography['line_height']};
    letter-spacing: {$typography['letter_spacing']};
    color: {$color['text']};
}
#$block_id .cozy-menu-wrapper > .wp-block-navigation-item.current-menu-item > .wp-block-navigation-item__content {
    color: {$color['active_text']};
}
#$block_id .cozy-block-navigation-menu:not(.full-screen) .cozy-menu-wrapper > .wp-block-navigation-item:hover, #$block_id .cozy-block-navigation-menu:not(.full-screen) .cozy-menu-wrapper > .wp-block-navigation-item.current-menu-item {
    background-color: {$color['active_bg']};
}
";

$output = '<div class="cozy-block-wrapper cozy-block-mega-menu-wrapper">';

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
		wp_add_inline_style( 'cozy-block--global-block-styles', $block_styles );
	}
);

$output .= $content;
$output .= '</div>';

echo $output;
