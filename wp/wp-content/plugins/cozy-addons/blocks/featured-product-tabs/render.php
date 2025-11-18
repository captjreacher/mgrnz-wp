<?php
$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['clientId'] ) ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['isUserLoggedIn'] = is_user_logged_in();
$attributes['cartNonce']      = wp_create_nonce( 'cozy_block_wishlist_add_to_cart' );
$attributes['wishlistNonce']  = wp_create_nonce( 'cozy_block_wishlist_update_user_wishlist' );
$attributes['ajaxUrl']        = admin_url( 'admin-ajax.php' );
$attributes['userID']         = get_current_user_id();
$attributes['sidebarNonce']   = wp_create_nonce( 'cozy_block_wishlist_render_data_sidebar' );
$attributes['quickViewNonce'] = wp_create_nonce( 'cozy_block_quick_view_render_data_lightbox' );

wp_localize_script( 'cozy-block--featured-product-tabs--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--featured-product-tabs--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockFeaturedProductTabs( "' . esc_html( $client_id ) . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$heading_color = array(
	'text' => isset( $attributes['tabHeading']['color'] ) ? $attributes['tabHeading']['color'] : '',
);
$tab_heading   = array(
	'letter_case'    => isset( $attributes['tabHeading']['letterCase'] ) ? $attributes['tabHeading']['letterCase'] : '',
	'decoration'     => isset( $attributes['tabHeading']['decoration'] ) ? $attributes['tabHeading']['decoration'] : '',
	'line_height'    => isset( $attributes['tabHeading']['lineHeight'] ) ? $attributes['tabHeading']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['tabHeading']['letterSpacing'] ) ? $attributes['tabHeading']['letterSpacing'] : '',
);

$separator_padding = cozy_render_TRBL( 'padding', $attributes['separatorStyles']['padding'] );
$separator_border  = isset( $attributes['separatorStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['separatorStyles']['border'] ) : '';
$separator_radius  = isset( $attributes['separatorStyles']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['separatorStyles']['radius'] ) : '';
$separator_styles  = array(
	'bg_color' => isset( $attributes['separatorStyles']['bgColor'] ) ? $attributes['separatorStyles']['bgColor'] : '',
);

$tab_padding        = cozy_render_TRBL( 'padding', $attributes['tabStyles']['padding'] );
$tab_border_radius  = cozy_render_TRBL( 'border-radius', $attributes['tabStyles']['radius'] );
$default_tab_border = isset( $attributes['tabStyles']['default']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['default']['border'] ) : '';
$active_tab_border  = isset( $attributes['tabStyles']['active']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['active']['border'] ) : '';
$tab_styles         = array(
	'default_color'    => isset( $attributes['tabStyles']['default']['color'] ) ? $attributes['tabStyles']['default']['color'] : '',
	'default_bg_color' => isset( $attributes['tabStyles']['default']['bgColor'] ) ? $attributes['tabStyles']['default']['bgColor'] : '',
	'active_color'     => isset( $attributes['tabStyles']['active']['color'] ) ? $attributes['tabStyles']['active']['color'] : '',
	'active_bg_color'  => isset( $attributes['tabStyles']['active']['bgColor'] ) ? $attributes['tabStyles']['active']['bgColor'] : '',
	'letter_case'      => isset( $attributes['tabStyles']['letterCase'] ) ? $attributes['tabStyles']['letterCase'] : '',
	'decoration'       => isset( $attributes['tabStyles']['decoration'] ) ? $attributes['tabStyles']['decoration'] : '',
	'line_height'      => isset( $attributes['tabStyles']['lineHeight'] ) ? $attributes['tabStyles']['lineHeight'] : '',
	'letter_spacing'   => isset( $attributes['tabStyles']['letterSpacing'] ) ? $attributes['tabStyles']['letterSpacing'] : '',
);

$active_tab_overlay = isset( $attributes['separatorStyles']['border']['bottom']['width'] ) ? $attributes['separatorStyles']['border']['bottom']['width'] : '';

$item_padding    = cozy_render_TRBL( 'padding', $attributes['itemStyles']['padding'] );
$item_border     = isset( $attributes['itemStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['itemStyles']['border'] ) : '';
$item_text_align = isset( $attributes['itemStyles']['textAlignment'] ) ? $attributes['itemStyles']['textAlignment'] : 'left';
$item_color      = array(
	'shadow'       => isset( $attributes['itemStyles']['shadow']['color'] ) ? $attributes['itemStyles']['shadow']['color'] : '',
	'bg'           => isset( $attributes['itemStyles']['bgColor'] ) ? $attributes['itemStyles']['bgColor'] : '',
	'bg_hover'     => isset( $attributes['itemStyles']['bgColorHover'] ) ? $attributes['itemStyles']['bgColorHover'] : '',
	'border_hover' => isset( $attributes['itemStyles']['borderColorHover'] ) ? $attributes['itemStyles']['borderColorHover'] : '',
);

$icon_box_padding = cozy_render_TRBL( 'padding', $attributes['iconBox']['padding'] );
$icon_box_border  = isset( $attributes['iconBox']['border'] ) ? cozy_render_TRBL( 'border', $attributes['iconBox']['border'] ) : '';
$icon_box_styles  = array(
	'bg_color'            => isset( $attributes['iconBox']['bgColor'] ) ? $attributes['iconBox']['bgColor'] : '',
	'bg_color_active'     => isset( $attributes['iconBox']['bgColorActive'] ) ? $attributes['iconBox']['bgColorActive'] : '',
	'border_color_active' => isset( $attributes['iconBox']['borderColorActive'] ) ? $attributes['iconBox']['borderColorActive'] : '',
);
$icon_opacity     = number_format( ( floatval( $attributes['icon']['opacity'] ) / 100 ), 2 );
$icon_styles      = array(
	'stroke_width'   => 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['strokeWidth'] : '',
	'stroke_opacity' => 'outline' === $attributes['icon']['layout'] ? number_format( floatval( $attributes['icon']['opacity'] / 100 ), 2 ) : '',
);

$img_radius    = cozy_render_TRBL( 'border-radius', $attributes['imageStyles']['radius'] );
$product_image = array(
	'margin'   => array(
		'top'    => isset( $attributes['imageStyles']['margin']['top'] ) ? $attributes['imageStyles']['margin']['top'] : '0px',
		'bottom' => isset( $attributes['imageStyles']['margin']['bottom'] ) ? $attributes['imageStyles']['margin']['bottom'] : '0px',
	),
	'fit'      => isset( $attributes['imageStyles']['objectFit'] ) ? $attributes['imageStyles']['objectFit'] : '',
	'position' => isset( $attributes['imageStyles']['objectPosition'] ) ? $attributes['imageStyles']['objectPosition'] : '',
	'color'    => array(
		'overlay' => isset( $attributes['imageStyles']['overlay'] ) ? $attributes['imageStyles']['overlay'] : '',
	),
);

$sale_badge_padding = cozy_render_TRBL( 'padding', $attributes['saleBadge']['padding'] );
$sale_badge_border  = isset( $attributes['saleBadge']['border'] ) ? cozy_render_TRBL( 'border', $attributes['saleBadge']['border'] ) : '';
$sale_badge_color   = array(
	'text' => isset( $attributes['saleBadge']['color'] ) ? $attributes['saleBadge']['color'] : '',
	'bg'   => isset( $attributes['saleBadge']['bgColor'] ) ? $attributes['saleBadge']['bgColor'] : '',
);
$sale_badge_styles  = array(
	'letter_case'    => isset( $attributes['saleBadge']['letterCase'] ) ? $attributes['saleBadge']['letterCase'] : '',
	'decoration'     => isset( $attributes['saleBadge']['decoration'] ) ? $attributes['saleBadge']['decoration'] : '',
	'line_height'    => isset( $attributes['saleBadge']['lineHeight'] ) ? $attributes['saleBadge']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['saleBadge']['letterSpacing'] ) ? $attributes['saleBadge']['letterSpacing'] : '',
);

$util_icon = array(
	'size'       => isset( $attributes['utilIcon']['size'] ) ? $attributes['utilIcon']['size'] : '',
	'gap'        => isset( $attributes['utilIcon']['gap'] ) ? $attributes['utilIcon']['gap'] : '',
	'margin'     => array(
		'top'    => 'top' === $attributes['utilIcon']['align']['vertical'] ? $attributes['utilIcon']['margin']['top'] . 'px' : '',
		'right'  => 'right' === $attributes['utilIcon']['align']['horizontal'] ? $attributes['utilIcon']['margin']['right'] : '',
		'bottom' => 'bottom' === $attributes['utilIcon']['align']['vertical'] ? $attributes['utilIcon']['margin']['top'] . 'px' : '',
		'left'   => 'left' === $attributes['utilIcon']['align']['horizontal'] ? $attributes['utilIcon']['margin']['left'] : '',
	),
	'box_width'  => isset( $attributes['utilIcon']['box']['width'] ) ? $attributes['utilIcon']['box']['width'] : '',
	'box_height' => isset( $attributes['utilIcon']['box']['height'] ) ? $attributes['utilIcon']['box']['height'] : '',
	'border'     => isset( $attributes['utilIcon']['box']['border'] ) ? cozy_render_TRBL( 'border', $attributes['utilIcon']['box']['border'] ) : '',
	'radius'     => isset( $attributes['utilIcon']['box']['radius'] ) ? $attributes['utilIcon']['box']['radius'] : '',
	'color'      => array(
		'text'          => isset( $attributes['utilIcon']['color']['text'] ) ? $attributes['utilIcon']['color']['text'] : '',
		'text_hover'    => isset( $attributes['utilIcon']['color']['textHover'] ) ? $attributes['utilIcon']['color']['textHover'] : '',
		'text_active'   => isset( $attributes['utilIcon']['color']['textActive'] ) ? $attributes['utilIcon']['color']['textActive'] : '',
		'bg'            => isset( $attributes['utilIcon']['color']['bg'] ) ? $attributes['utilIcon']['color']['bg'] : '',
		'bg_hover'      => isset( $attributes['utilIcon']['color']['bgHover'] ) ? $attributes['utilIcon']['color']['bgHover'] : '',
		'bg_active'     => isset( $attributes['utilIcon']['color']['bgActive'] ) ? $attributes['utilIcon']['color']['bgActive'] : '',
		'border_hover'  => isset( $attributes['utilIcon']['color']['borderHover'] ) ? $attributes['utilIcon']['color']['borderHover'] : '',
		'border_active' => isset( $attributes['utilIcon']['color']['borderActive'] ) ? $attributes['utilIcon']['color']['borderActive'] : '',
	),
);

$cat_padding = cozy_render_TRBL( 'padding', $attributes['categoryStyles']['padding'] );
$cat_border  = isset( $attributes['categoryStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['categoryStyles']['border'] ) : '';
$cat_styles  = array(
	'color'              => isset( $attributes['categoryStyles']['color'] ) ? $attributes['categoryStyles']['color'] : '',
	'color_hover'        => isset( $attributes['categoryStyles']['colorHover'] ) ? $attributes['categoryStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['categoryStyles']['bgColor'] ) ? $attributes['categoryStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['categoryStyles']['bgColorHover'] ) ? $attributes['categoryStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['categoryStyles']['borderColorHover'] ) ? $attributes['categoryStyles']['borderColorHover'] : '',
	'letter_case'        => isset( $attributes['categoryStyles']['letterCase'] ) ? $attributes['categoryStyles']['letterCase'] : '',
	'decoration'         => isset( $attributes['categoryStyles']['decoration'] ) ? $attributes['categoryStyles']['decoration'] : '',
	'line_height'        => isset( $attributes['categoryStyles']['lineHeight'] ) ? $attributes['categoryStyles']['lineHeight'] : '',
	'letter_spacing'     => isset( $attributes['categoryStyles']['letterSpacing'] ) ? $attributes['categoryStyles']['letterSpacing'] : '',
);

$title_color  = array(
	'text'       => isset( $attributes['title']['color'] ) ? $attributes['title']['color'] : '',
	'text_hover' => isset( $attributes['title']['colorHover'] ) ? $attributes['title']['colorHover'] : '',
);
$title_styles = array(
	'letter_case'    => isset( $attributes['title']['letterCase'] ) ? $attributes['title']['letterCase'] : '',
	'decoration'     => isset( $attributes['title']['decoration'] ) ? $attributes['title']['decoration'] : '',
	'line_height'    => isset( $attributes['title']['lineHeight'] ) ? $attributes['title']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['title']['letterSpacing'] ) ? $attributes['title']['letterSpacing'] : '',
);

$price_color  = array(
	'text' => isset( $attributes['price']['color'] ) ? $attributes['price']['color'] : '',
);
$price_styles = array(
	'letter_case'    => isset( $attributes['price']['letterCase'] ) ? $attributes['price']['letterCase'] : '',
	'decoration'     => isset( $attributes['price']['decoration'] ) ? $attributes['price']['decoration'] : '',
	'line_height'    => isset( $attributes['price']['lineHeight'] ) ? $attributes['price']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['price']['letterSpacing'] ) ? $attributes['price']['letterSpacing'] : '',
);

$rating_color  = array(
	'text' => isset( $attributes['rating']['color'] ) ? $attributes['rating']['color'] : '',
);
$rating_styles = array(
	'letter_case'    => isset( $attributes['rating']['letterCase'] ) ? $attributes['rating']['letterCase'] : '',
	'decoration'     => isset( $attributes['rating']['decoration'] ) ? $attributes['rating']['decoration'] : '',
	'line_height'    => isset( $attributes['rating']['lineHeight'] ) ? $attributes['rating']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['rating']['letterSpacing'] ) ? $attributes['rating']['letterSpacing'] : '',
);

$cart_button = array(
	'width'          => isset( $attributes['cartButton']['width'] ) ? $attributes['cartButton']['width'] : '',
	'margin'         => array(
		'top'    => isset( $attributes['cartButton']['margin']['top'] ) ? $attributes['cartButton']['margin']['top'] : '',
		'bottom' => isset( $attributes['cartButton']['margin']['bottom'] ) ? $attributes['cartButton']['margin']['bottom'] : '',
	),
	'padding'        => isset( $attributes['cartButton']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['cartButton']['padding'] ) : '',
	'border'         => isset( $attributes['cartButton']['border'] ) ? cozy_render_TRBL( 'border', $attributes['cartButton']['border'] ) : '',
	'radius'         => isset( $attributes['cartButton']['radius'] ) ? $attributes['cartButton']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['cartButton']['font']['size'] ) ? $attributes['cartButton']['font']['size'] : '',
		'weight' => isset( $attributes['cartButton']['font']['weight'] ) ? $attributes['cartButton']['font']['weight'] : '',
		'family' => isset( $attributes['cartButton']['font']['family'] ) ? $attributes['cartButton']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['cartButton']['letterCase'] ) ? $attributes['cartButton']['letterCase'] : '',
	'decoration'     => isset( $attributes['cartButton']['decoration'] ) ? $attributes['cartButton']['decoration'] : '',
	'line_height'    => isset( $attributes['cartButton']['lineHeight'] ) ? $attributes['cartButton']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['cartButton']['letterSpacing'] ) ? $attributes['cartButton']['letterSpacing'] : '',
	'color'          => array(
		'text'         => isset( $attributes['cartButton']['color']['text'] ) ? $attributes['cartButton']['color']['text'] : '',
		'text_hover'   => isset( $attributes['cartButton']['color']['textHover'] ) ? $attributes['cartButton']['color']['textHover'] : '',
		'bg'           => isset( $attributes['cartButton']['color']['bg'] ) ? $attributes['cartButton']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['cartButton']['color']['bgHover'] ) ? $attributes['cartButton']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['cartButton']['color']['borderHover'] ) ? $attributes['cartButton']['color']['borderHover'] : '',
	),
);

$nav_border = isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '';
$nav_styles = array(
	'color'              => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'color_hover'        => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_color'           => isset( $attributes['navigation']['bgColor'] ) ? $attributes['navigation']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['navigation']['bgColorHover'] ) ? $attributes['navigation']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['navigation']['borderColorHover'] ) ? $attributes['navigation']['borderColorHover'] : '',
);

$bullet_outline = isset( $attributes['pagination']['active']['border'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['active']['border'] ) : '';
$bullet_styles  = array(
	'default_color'       => isset( $attributes['pagination']['default']['color'] ) ? $attributes['pagination']['default']['color'] : '',
	'default_color_hover' => isset( $attributes['pagination']['default']['colorHover'] ) ? $attributes['pagination']['default']['colorHover'] : '',
	'active_color'        => isset( $attributes['pagination']['active']['color'] ) ? $attributes['pagination']['active']['color'] : '',
	'active_color_hover'  => isset( $attributes['pagination']['active']['colorHover'] ) ? $attributes['pagination']['active']['colorHover'] : '',
	'align'               => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'left'                => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? $attributes['pagination']['left'] : '',
	'right'               => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? $attributes['pagination']['right'] : '',
);

$column1 = $attributes['gridOptions']['columnCount'] <= 3 ? $attributes['gridOptions']['columnCount'] : 3;
$column2 = $attributes['gridOptions']['columnCount'] <= 2 ? $attributes['gridOptions']['columnCount'] : 2;

$block_styles = "
#$block_id .cozy-block-featured-product-tabs__tab-heading {
	font-size: clamp(18px, calc(3vw + 4px), {$attributes['tabHeading']['fontSize']});
	font-weight: {$attributes['tabHeading']['fontWeight']};
	font-family: {$attributes['tabHeading']['fontFamily']};
	text-transform: {$tab_heading['letter_case']};
	text-decoration: {$tab_heading['decoration']};
	line-height: {$tab_heading['line_height']};
	letter-spacing: {$tab_heading['letter_spacing']};
	color: {$heading_color['text']};
}

#$block_id .cozy-block-featured-product-tabs__header-wrap {
	{$separator_padding}
	{$separator_border}
	{$separator_radius}
	margin-top: {$attributes['tabStyles']['marginTop']};
	margin-bottom: {$attributes['tabStyles']['marginBottom']};
}
	
#$block_id .cozy-block-featured-product-tabs__tabs {
	gap: {$attributes['tabGap']};
	background-color: {$separator_styles['bg_color']};
}

#$block_id .cozy-block-featured-product-tabs__tab {
    {$tab_padding}
    {$tab_border_radius}
    {$default_tab_border}
    background-color: {$tab_styles['default_bg_color']};
    color: {$tab_styles['default_color']};
	font-size: clamp(16px, calc(3vw + 4px), {$attributes['tabStyles']['fontSize']});
    font-family: {$attributes['tabStyles']['fontFamily']};
    font-weight: {$attributes['tabStyles']['fontWeight']};
	text-transform: {$tab_styles['letter_case']};
	text-decoration: {$tab_styles['decoration']};
	line-height: {$tab_styles['line_height']};
	letter-spacing: {$tab_styles['letter_spacing']};
}
#$block_id .cozy-block-featured-product-tabs__tab.active-tab {
    {$active_tab_border}
    background-color: {$tab_styles['active_bg_color']};
    color: {$tab_styles['active_color']};
}
#$block_id.has-tab-overlay .cozy-block-featured-product-tabs__tab.active-tab {
    margin-bottom: -{$active_tab_overlay};
}

#$block_id .cozy-block-featured-product-tabs__icon-wrapper.view-stacked {
	{$icon_box_padding}
	{$icon_box_border}
    border-radius: {$attributes['iconBox']['radius']};
    background-color: {$icon_box_styles['bg_color']};
}
#$block_id .active-tab .cozy-block-featured-product-tabs__icon-wrapper.view-stacked {
    background-color: {$icon_box_styles['bg_color_active']};
    border-color: {$icon_box_styles['border_color_active']};
}
#$block_id .cozy-block-featured-product-tabs__icon {
    width: {$attributes['icon']['size']};
    height: {$attributes['icon']['size']};
}
#$block_id .layout-fill .cozy-block-featured-product-tabs__icon {
    opacity: {$icon_opacity};
    fill: {$tab_styles['default_color']};
    stroke: none;
}
#$block_id .layout-outline .cozy-block-featured-product-tabs__icon {
    stroke: {$tab_styles['default_color']};
    fill: none;
}
#$block_id .active-tab .layout-fill .cozy-block-featured-product-tabs__icon {
    fill: {$tab_styles['active_color']};
    stroke: none;
}
#$block_id .active-tab .layout-outline .cozy-block-featured-product-tabs__icon {
    stroke: {$tab_styles['active_color']};
    fill: none;
}

#$block_id .cozy-block-featured-product-tabs__grid-wrapper {
    grid-template-columns: repeat({$attributes['gridOptions']['columnCount']}, 1fr);
    column-gap: {$attributes['gridOptions']['gap']};
    row-gap: {$attributes['gridOptions']['gap']};
}
@media screen and (max-width: 1024px) { 
    #$block_id .cozy-block-featured-product-tabs__grid-wrapper {
        grid-template-columns: repeat({$column1}, 1fr) !important;
    }
}
@media screen and (max-width: 768px) { 
    #$block_id .cozy-block-featured-product-tabs__grid-wrapper {
        grid-template-columns: repeat({$column2}, 1fr) !important;
    }
}
@media screen and (max-width: 400px) { 
    #$block_id .cozy-block-featured-product-tabs__grid-wrapper {
        grid-template-columns: repeat(1, 1fr) !important;
    }
}

#$block_id .cozy-block-featured-product-tabs__list-wrapper .cozy-block-featured-product-tabs__item {
    margin-bottom: {$attributes['listOptions']['gap']};
}

#$block_id.swiper-vertical .swiper-wrapper {
    height: {$attributes['sliderOptions']['height']};
}

#$block_id .cozy-block-featured-product-tabs__item {
	{$item_padding}
	{$item_border}
	border-radius: {$attributes['itemStyles']['radius']};
	background-color: {$item_color['bg']};
	text-align: {$item_text_align};
}
#$block_id.item-has-shadow .cozy-block-featured-product-tabs__item {
	box-shadow: {$attributes['itemStyles']['shadow']['horizontal']}px {$attributes['itemStyles']['shadow']['vertical']}px {$attributes['itemStyles']['shadow']['blur']}px {$attributes['itemStyles']['shadow']['spread']}px {$item_color['shadow']} {$attributes['itemStyles']['shadow']['position']};
}
#$block_id.item-has-shadow .cozy-block-featured-product-tabs__item:hover {
	border-color: {$item_color['border_hover']};
	background-color: {$item_color['bg_hover']};
}

#$block_id .cozy-block-featured-product-tabs__featured-image {
    max-height: {$attributes['imageStyles']['height']};
	margin-top: {$product_image['margin']['top']};
	margin-bottom: {$product_image['margin']['bottom']};
}
#$block_id:not(.display-list) .cozy-block-featured-product-tabs__featured-image {
    max-width: {$attributes['imageStyles']['width']};
}
#$block_id.display-list .cozy-block-featured-product-tabs__featured-image {
    min-width: {$attributes['imageStyles']['width']};
}
#$block_id .cozy-block-featured-product-tabs__featured-image img {
    height: {$attributes['imageStyles']['height']};
    {$img_radius}
	object-fit: {$product_image['fit']};
	object-position: {$product_image['position']};
}
@media only screen and (max-width: 1024px) {
	#$block_id.display-list .cozy-block-featured-product-tabs__featured-image {
    	max-width: 100%;
	}

	#$block_id .cozy-block-featured-product-tabs__featured-image img {
    	max-height: {$attributes['imageStyles']['height']};
	}
}

#$block_id .post__image-background {
    {$img_radius}
	background-color: {$product_image['color']['overlay']};
}

#$block_id .cozy-block-featured-product-tabs__sale-badge {
    {$sale_badge_padding}
    {$sale_badge_border}
    border-radius: {$attributes['saleBadge']['radius']};
    color: {$sale_badge_color['text']};
    background-color: {$sale_badge_color['bg']};
    font-size: {$attributes['saleBadge']['fontSize']};
    font-weight: {$attributes['saleBadge']['fontWeight']};
    font-family: {$attributes['saleBadge']['fontFamily']};
	text-transform: {$sale_badge_styles['letter_case']};
	text-decoration: {$sale_badge_styles['decoration']};
	line-height: {$sale_badge_styles['line_height']};
	letter-spacing: {$sale_badge_styles['letter_spacing']};
    top: {$attributes['saleBadge']['top']}px;
    transform: rotate({$attributes['saleBadge']['rotate']}deg);
}
#$block_id .cozy-block-featured-product-tabs__sale-badge.position-left {
    left: {$attributes['saleBadge']['left']}px;
}
#$block_id .cozy-block-featured-product-tabs__sale-badge.position-right {
    right: {$attributes['saleBadge']['right']}px;
}

#$block_id .cozy-block-featured-product-tabs__icon-container {
    margin-top: {$util_icon['margin']['top']};
    margin-right: {$util_icon['margin']['right']};
    margin-bottom: {$util_icon['margin']['bottom']};
    margin-left: {$util_icon['margin']['left']};
    gap: {$util_icon['gap']};
}
#$block_id .cozy-block-featured-product-tabs__util-icon-wrapper {
    width: {$util_icon['box_width']};
    height: {$util_icon['box_height']};
    {$util_icon['border']}
    border-radius: {$util_icon['radius']};
    background-color: {$util_icon['color']['bg']};
}
#$block_id .cozy-block-featured-product-tabs__util-icon-wrapper:hover {
    background-color: {$util_icon['color']['bg_hover']};
    border-color: {$util_icon['color']['border_hover']};
}
#$block_id .cozy-block-featured-product-tabs__util-icon-wrapper.is-active {
    background-color: {$util_icon['color']['bg_active']};
    border-color: {$util_icon['color']['border_active']};
}
#$block_id .cozy-block-featured-product-tabs__util-icon-wrapper svg {
    width: {$util_icon['size']};
    height: {$util_icon['size']};
    fill: {$util_icon['color']['text']};
}
#$block_id .cozy-block-featured-product-tabs__util-icon-wrapper:hover svg {
    fill: {$util_icon['color']['text_hover']};
}
#$block_id .cozy-block-featured-product-tabs__util-icon-wrapper.is-active svg {
    fill: {$util_icon['color']['text_active']};
}

#$block_id .cozy-block-featured-product-tabs__product-categories {
	gap: {$attributes['categoryStyles']['gap']};
	font-size: {$attributes['categoryStyles']['fontSize']};
	font-family: {$attributes['categoryStyles']['fontFamily']};
	font-weight: {$attributes['categoryStyles']['fontWeight']};
	margin-top: {$attributes['categoryStyles']['marginTop']};
	margin-bottom: {$attributes['categoryStyles']['marginBottom']};
	text-transform: {$cat_styles['letter_case']};
	line-height: {$cat_styles['line_height']};
	letter-spacing: {$cat_styles['letter_spacing']};
}
#$block_id .cozy-block-featured-product-tabs__product-categories a {
	{$cat_padding}
	{$cat_border}
	border-radius: {$attributes['categoryStyles']['radius']};
	text-decoration: {$cat_styles['decoration']};
	color: {$cat_styles['color']};
	background-color: {$cat_styles['bg_color']};
}
#$block_id .cozy-block-featured-product-tabs__product-categories a:hover {
	color: {$cat_styles['color_hover']};
	background-color: {$cat_styles['bg_color_hover']};
	border-color: {$cat_styles['border_color_hover']};
}

#$block_id .cozy-block-featured-product-tabs__product-title, #$block_id .post__title {
	margin-top: {$attributes['title']['marginTop']};
	margin-bottom: {$attributes['title']['marginBottom']};
    font-size: clamp(16px, calc(3vw + 4px), {$attributes['title']['fontSize']});
    font-family: {$attributes['title']['fontFamily']};
    font-weight: {$attributes['title']['fontWeight']};
	text-transform: {$title_styles['letter_case']};
	line-height: {$title_styles['line_height']};
	letter-spacing: {$title_styles['letter_spacing']};
}
#$block_id .cozy-block-featured-product-tabs__product-title a, #$block_id .post__title a {
	text-decoration: {$title_styles['decoration']};
	color: {$title_color['text']};
}
#$block_id .cozy-block-featured-product-tabs__product-title a:hover, #$block_id .post__title a:hover {
	color: {$title_color['text_hover']};
}

#$block_id .cozy-block-featured-product-tabs__product-price, #$block_id .post__price {
    margin-top: {$attributes['price']['marginTop']};
    margin-bottom: {$attributes['price']['marginBottom']};
    font-size: {$attributes['price']['fontSize']};
    font-weight: {$attributes['price']['fontWeight']};
    font-family: {$attributes['price']['fontFamily']};
	text-transform: {$price_styles['letter_case']};
	text-decoration: {$price_styles['decoration']};
	line-height: {$price_styles['line_height']};
	letter-spacing: {$price_styles['letter_spacing']};
    color: {$price_color['text']};
}

#$block_id .cozy-block-featured-product-tabs__product-rating, #$block_id .post__rating {
    margin-top: {$attributes['rating']['marginTop']};
    margin-bottom: {$attributes['rating']['marginBottom']};
    font-size: {$attributes['rating']['fontSize']};
    font-weight: {$attributes['rating']['fontWeight']};
    font-family: {$attributes['rating']['fontFamily']};
	text-transform: {$rating_styles['letter_case']};
	text-decoration: {$rating_styles['decoration']};
	line-height: {$rating_styles['line_height']};
	letter-spacing: {$rating_styles['letter_spacing']};
    color: {$rating_color['text']};
}

#$block_id .post__cart-button {
	width: {$cart_button['width']};
    margin-top: {$cart_button['margin']['top']};
    margin-bottom: {$cart_button['margin']['bottom']};
    {$cart_button['padding']}
    {$cart_button['border']}
    border-radius: {$cart_button['radius']};
    font-size: {$cart_button['font']['size']};
    font-weight: {$cart_button['font']['weight']};
    font-family: {$cart_button['font']['family']};
	text-transform: {$cart_button['letter_case']};
	text-decoration: {$cart_button['decoration']};
	line-height: {$cart_button['line_height']};
	letter-spacing: {$cart_button['letter_spacing']};
    color: {$cart_button['color']['text']};
    background-color: {$cart_button['color']['bg']};
}
#$block_id .post__cart-button:hover {
    color: {$cart_button['color']['text_hover']};
    background-color: {$cart_button['color']['bg_hover']};
    border-color: {$cart_button['color']['border_hover']};
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
	font-size: {$attributes['navigation']['size']};
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
	width: {$attributes['navigation']['boxWidth']};
	height: {$attributes['navigation']['boxHeight']};
	{$nav_border}
	border-radius: {$attributes['navigation']['radius']};
	color: {$nav_styles['color']};
	background-color: {$nav_styles['bg_color']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
	color: {$nav_styles['color_hover']};
	background-color: {$nav_styles['bg_color_hover']};
	border-color: {$nav_styles['border_color_hover']};
}

#$block_id .swiper-pagination {
	bottom: {$attributes['pagination']['verticalPosition']}px;
    text-align: {$bullet_styles['align']};
    padding-left: {$bullet_styles['left']};
    padding-right: {$bullet_styles['right']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
	width: {$attributes['pagination']['default']['width']};
	height: {$attributes['pagination']['default']['height']};
	border-radius: {$attributes['pagination']['default']['radius']};
	background-color: {$bullet_styles['default_color']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
	width: {$attributes['pagination']['active']['width']};
	height: {$attributes['pagination']['active']['height']};
	border-radius: {$attributes['pagination']['active']['radius']};
	background-color: {$bullet_styles['active_color']};
	{$bullet_outline}
	outline-offset: {$attributes['pagination']['active']['offset']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
	background-color: {$bullet_styles['default_color_hover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
	background-color: {$bullet_styles['active_color_hover']};
}
#$block_id:has(.swiper-horizontal) .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$attributes['pagination']['gap']});
}
#$block_id:has(.swiper-vertical) .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: var(--swiper-pagination-bullet-vertical-gap, {$attributes['pagination']['gap']}) 0;
}
";

$classes   = array();
$classes[] = 'cozy-block-featured-product-tabs';
$classes[] = 'display-' . $attributes['display'];
$classes[] = $attributes['navigation']['hoverShow'] ? 'nav-hover-show' : '';
$classes[] = $attributes['tabStyles']['active']['tabOverlay'] ? 'has-tab-overlay' : '';
$classes[] = $attributes['itemStyles']['shadow']['enabled'] ? 'item-has-shadow' : '';
$output    = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';

// Tabs.
$inline_styles   = array();
$inline_styles[] = 'display:flex';
$inline_styles[] = 'flex-wrap:wrap';
$inline_styles[] = 'align-items:center';
$inline_styles[] = 'justify-content:' . $attributes['tabJustification'];
$inline_styles[] = 'gap:' . $attributes['tabHeading']['gap'];

$output .= '<div class="cozy-block-featured-product-tabs__header-wrap" style="' . implode( ';', $inline_styles ) . '">';
if ( $attributes['tabHeading']['enabled'] ) {
	$heading_content = esc_html( $attributes['tabHeading']['content'] );
	$output         .= sprintf( '<%1$s class="cozy-block-featured-product-tabs__tab-heading">%2$s</%1$s>', $attributes['tabHeading']['tag'], $heading_content );
}

$output .= '<article class="cozy-block-featured-product-tabs__tabs">';

$cozy_featured_product_tabs = array(
	'latest' => esc_html__( 'Latest', 'cozy-addons' ),
	'seller' => esc_html__( 'Best Seller', 'cozy-addons' ),
	'rated'  => esc_html__( 'Top Rated', 'cozy-addons' ),
	'sale'   => esc_html__( 'On Sale', 'cozy-addons' ),
);

$set_first_tab = false;
$first_tab     = '';

$index = 0;
foreach ( $cozy_featured_product_tabs as $key => $label ) {
	if ( $attributes['enableOptions'][ $key ] ) {
		$active_class = ! $set_first_tab ? ' active-tab' : '';
		if ( ! $set_first_tab ) {
			$first_tab = $key;
		}
		$set_first_tab = true;
		$output       .= '<div class="cozy-block-featured-product-tabs__tab' . $active_class . '" id="' . esc_attr( $key ) . '" data-index="' . $index . '">';
		++$index;
		if ( $attributes['icon']['enabled'] ) {
			$output .= '<div style="display:flex;flex-wrap:wrap;gap:' . $attributes['icon']['gap'] . ';align-items:center;">';
			if ( 'icon-only' === $attributes['icon']['position'] ) {
				$output .= '<div class="cozy-block-featured-product-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-product-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
				$output .= '<path d="' . $attributes['icon'][ $key ]['path'] . '"></path>';
				$output .= '</svg>';
				$output .= '</div>';
			} elseif ( 'before' === $attributes['icon']['position'] ) {
				$output .= '<div class="cozy-block-featured-product-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-product-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
				$output .= '<path d="' . $attributes['icon'][ $key ]['path'] . '"></path>';
				$output .= '</svg>';
				$output .= '</div>';
				$output .= '<p>' . $label . '</p>';
			} else {
				$output .= '<p>' . $label . '</p>';
				$output .= '<div class="cozy-block-featured-product-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-product-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
				$output .= '<path d="' . $attributes['icon'][ $key ]['path'] . '"></path>';
				$output .= '</svg>';
				$output .= '</div>';
			}
			$output .= '</div>';
		} else {
			$output .= esc_html( $label );
		}
		$output .= '</div>';
	}
}
$output .= '</article>';
$output .= '</div>';
// End Tabs.

// Content.
if ( ! function_exists( 'render_cozy_block_featured_product_tab_data' ) ) {
	function render_cozy_block_featured_product_tab_data( $type, $attributes, &$output ) {
		$per_page = $attributes['perPage'][ $type ] ?? 3;

		$args = array();

		switch ( $type ) {
			case 'seller':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'meta_key'       => 'total_sales',
					'orderby'        => 'total_sales',
					'meta_query'     => array(
						'relation' => 'AND',
						array(
							'key'     => 'total_sales',
							'compare' => 'EXISTS',
						),
						array(
							'key'     => 'total_sales',
							'value'   => '0',
							'compare' => '>',
						),
					),
				);
				break;

			case 'rated':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'meta_key'       => '_wc_average_rating',
					'orderby'        => '_wc_average_rating',
					'meta_query'     => array(
						'relation' => 'AND',
						array(
							'key'     => '_wc_average_rating',
							'compare' => 'EXISTS',
						),
						array(
							'key'     => '_wc_average_rating',
							'value'   => '0',
							'compare' => '>',
						),
						array(
							'key'     => '_wc_review_count',
							'value'   => '0',
							'compare' => '>',
						),
					),
				);
				break;

			case 'sale':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'orderby'        => 'date',
					'meta_query'     => array(
						array(
							'key'     => '_sale_price',
							'value'   => 0,
							'compare' => '>',
							'type'    => 'NUMERIC',
						),
					),
				);
				break;

			default:
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'orderby'        => 'date',
				);
		}

		$query = new WP_Query( $args );

		if ( ! $query->have_posts() ) {
			return '';
		}

		$products = array();

		while ( $query->have_posts() ) {
			$query->the_post();
			// Get the product object.
			$product = wc_get_product( get_the_ID() );

			$price               = '';
			$discount_amt        = '';
			$discount_percentage = '';
			// Check if the product has a sale price.
			if ( $product->is_on_sale() ) {
				$price         = wc_format_sale_price( $product->get_regular_price(), $product->get_sale_price() );
				$regular_price = $product->get_regular_price();
				$sale_price    = $product->get_sale_price();

				// Check if both regular and sale prices are numeric before calculating discount amount
				if ( is_numeric( $regular_price ) && is_numeric( $sale_price ) ) {
					$discount_amt        = wc_price( $regular_price - $sale_price );
					$discount_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
					$discount_percentage = number_format( $discount_percentage, 1 );
					$discount_percentage = preg_replace( '/\.0+$/', '', $discount_percentage ) . '%';
				}
			} else {
				$price = wc_price( $product->get_regular_price() );
			}

			// Get categories and their links.
			$categories         = get_the_terms(
				get_the_ID(),
				'product_cat'
			);
			$product_categories = array();
			foreach ( $categories as $category ) {
				$product_categories[] = array(
					'name'        => $category->name,
					'link'        => get_category_link( $category->term_id ),
					'count'       => $category->count,
					'description' => $category->description,
					'slug'        => $category->slug,
					'taxonomy'    => $category->taxonomy,
					'parent'      => $category->parent,
				);
			}

			// Check if the product is valid
			if ( $product ) {
				$products[] = array(
					'id'                  => get_the_ID(),
					'image_url'           => get_the_post_thumbnail_url( get_the_ID() ),
					'title'               => get_the_title(),
					'content'             => get_the_content(),
					'link'                => get_permalink(),
					'price'               => $price, // Get the product price.
					'discount_amt'        => $discount_amt,
					'discount_percentage' => $discount_percentage,
					'on_sale'             => $product->is_on_sale(),
					'rating'              => $product->get_average_rating(), // Get the product rating.
					'review_count'        => $product->get_rating_count(), // Get the product rating.
					'categories'          => $product_categories,
				);
			}
		}

		wp_reset_postdata();

		// Render Product Data.
		foreach ( $products as $product_data ) {
			$classes   = array();
			$classes[] = 'cozy-block-featured-product-tabs__item';
			$classes[] = 'carousel' === $attributes['display'] ? 'swiper-slide' : '';
			$output   .= '<li class="' . implode( ' ', $classes ) . '" data-product-id="' . $product_data['id'] . '">';

			// Toast
			$output .= '<div class="post__toast visibility-hidden">';
			$output .= '<div id="tick-icon" style="display:none;">';
			$output .= '<svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">';
			$output .= '<path d="M6.66668 10.1133L12.7947 3.986L13.7373 4.92867L6.66668 11.9993L2.42401 7.75667L3.36668 6.814L6.66668 10.1133Z" />';
			$output .= '</svg>';
			$output .= '</div>';
			$output .= '<div id="cross-icon" style="display:none;">';
			$output .= '<svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">';
			$output .= '<path d="M7.99999 7.058L11.3 3.758L12.2427 4.70067L8.94266 8.00067L12.2427 11.3007L11.2993 12.2433L7.99932 8.94334L4.69999 12.2433L3.75732 11.3L7.05732 8L3.75732 4.7L4.69999 3.75867L7.99999 7.058Z" />';
			$output .= '</svg>';
			$output .= '</div>';
			$output .= '<div class="toast__message"></div>';
			$output .= '</div>';

			if ( $attributes['productOptions']['image'] && ! empty( $product_data['image_url'] ) ) {
				$classes   = array();
				$classes[] = 'cozy-block-featured-product-tabs__featured-image';
				$classes[] = $attributes['imageStyles']['hoverEffect'] ? 'has-hover-effect' : '';
				$output   .= '<figure class="' . implode( ' ', $classes ) . '">';
				$output   .= '<img src="' . esc_url( $product_data['image_url'] ) . '" />';

				$has_post_link = isset( $attributes['productOptions']['imgLinkPost'] ) && $attributes['productOptions']['imgLinkPost'] ? 'href="' . esc_url( $product_data['link'] ) . '"' : '';
				$open_new_tab  = isset( $attributes['productOptions']['imgLinkPost'], $attributes['productOptions']['imgLinkNewTab'] ) && $attributes['productOptions']['imgLinkPost'] && $attributes['productOptions']['imgLinkNewTab'] ? '_blank' : '';
				$output       .= '<a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">';
				$output       .= '<span class="post__image-background">';
				$output       .= '</span>';
				$output       .= '</a>';

				if ( $attributes['productOptions']['saleBadge'] && $product_data['on_sale'] ) {
					$classes   = array();
					$classes[] = 'cozy-block-featured-product-tabs__sale-badge';
					$classes[] = 'position-' . $attributes['saleBadge']['position'];
					switch ( $attributes['saleBadge']['contentType'] ) {
						case 'amount':
							if ( isset( $product_data['discount_amt'] ) && ! empty( $product_data['discount_amt'] ) ) {
								$output .= '<span class="' . implode( ' ', $classes ) . '">';
								$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
								$output .= '<span>' . $product_data['discount_amt'] . '</span>';
								$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
								$output .= '</span>';
							}
							break;

						case 'percentage':
							if ( isset( $product_data['discount_percentage'] ) && ! empty( $product_data['discount_percentage'] ) ) {
								$output .= '<span class="' . implode( ' ', $classes ) . '">';
								$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
								$output .= $product_data['discount_percentage'];
								$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
								$output .= '</span>';
							}
							break;

						default:
							$output .= '<span class="' . implode( ' ', $classes ) . '">';
							$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
							$output .= esc_html__( 'Sale', 'cozy-addons' );
							$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
							$output .= '</span>';
					}
				}

				if ( ( isset( $attributes['productOptions']['cart'] ) && $attributes['productOptions']['cart'] ) || ( isset( $attributes['productOptions']['wishlist'] ) && $attributes['productOptions']['wishlist'] ) || ( isset( $attributes['productOptions']['quickView'] ) && $attributes['productOptions']['quickView'] ) ) {
					$classes   = array();
					$classes[] = 'cozy-block-featured-product-tabs__icon-container';
					$classes[] = 'direction-' . ( isset( $attributes['utilIcon']['direction'] ) && ! empty( $attributes['utilIcon']['direction'] ) ? $attributes['utilIcon']['direction'] : 'vertical' );
					$classes[] = 'align-vertical-' . ( isset( $attributes['utilIcon']['align']['vertical'] ) && ! empty( $attributes['utilIcon']['align']['vertical'] ) ? $attributes['utilIcon']['align']['vertical'] : 'top' );
					$classes[] = 'align-horizontal-' . ( isset( $attributes['utilIcon']['align']['horizontal'] ) && ! empty( $attributes['utilIcon']['align']['horizontal'] ) ? $attributes['utilIcon']['align']['horizontal'] : 'right' );
					$classes[] = $attributes['utilIcon']['hoverShow'] ? 'has-hover-show' : '';
					$output   .= '<div class="' . implode( ' ', $classes ) . '">';
					if ( isset( $attributes['productOptions']['cart'] ) && $attributes['productOptions']['cart'] ) {
						$output .= '<div class="cozy-block-featured-product-tabs__util-icon-wrapper cart__icon-wrapper" data-product-id="' . $product_data['id'] . '">';
						$output .= '<svg viewBox="0 0 12 15" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
						$output .= '<path d="M4 3.99999C4 3.46956 4.21071 2.96085 4.58579 2.58578C4.96086 2.2107 5.46957 1.99999 6 1.99999C6.53043 1.99999 7.03914 2.2107 7.41421 2.58578C7.78929 2.96085 8 3.46956 8 3.99999H4ZM2.66667 3.99999H0.666667C0.489856 3.99999 0.320286 4.07023 0.195262 4.19525C0.0702379 4.32028 0 4.48985 0 4.66666V14C0 14.1768 0.0702379 14.3464 0.195262 14.4714C0.320286 14.5964 0.489856 14.6667 0.666667 14.6667H11.3333C11.5101 14.6667 11.6797 14.5964 11.8047 14.4714C11.9298 14.3464 12 14.1768 12 14V4.66666C12 4.48985 11.9298 4.32028 11.8047 4.19525C11.6797 4.07023 11.5101 3.99999 11.3333 3.99999H9.33333C9.33333 3.11593 8.98214 2.26809 8.35702 1.64297C7.7319 1.01785 6.88406 0.666656 6 0.666656C5.11595 0.666656 4.2681 1.01785 3.64298 1.64297C3.01786 2.26809 2.66667 3.11593 2.66667 3.99999ZM4 6.66666C4 7.19709 4.21071 7.7058 4.58579 8.08087C4.96086 8.45594 5.46957 8.66666 6 8.66666C6.53043 8.66666 7.03914 8.45594 7.41421 8.08087C7.78929 7.7058 8 7.19709 8 6.66666H9.33333C9.33333 7.55071 8.98214 8.39856 8.35702 9.02368C7.7319 9.6488 6.88406 9.99999 6 9.99999C5.11595 9.99999 4.2681 9.6488 3.64298 9.02368C3.01786 8.39856 2.66667 7.55071 2.66667 6.66666H4Z" />';
						$output .= '</svg>';
						$output .= '</div>';
					}

					if ( isset( $attributes['productOptions']['wishlist'] ) && $attributes['productOptions']['wishlist'] ) {
						$wishlist_user_meta = get_user_meta( $attributes['userID'], 'cozy_block_wishlist_data', true );
						$classes            = array();
						$classes[]          = 'cozy-block-featured-product-tabs__util-icon-wrapper';
						$classes[]          = 'wishlist__icon-wrapper';
						$classes[]          = is_array( $wishlist_user_meta ) && is_user_logged_in() && in_array( intval( $product_data['id'] ), $wishlist_user_meta ) ? 'is-active' : '';
						$output            .= '<div class="' . implode( ' ', $classes ) . '" data-product-id="' . $product_data['id'] . '">';
						$output            .= '<svg viewBox="0 0 14 12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
						$output            .= '<path d="M12.6411 0.820517C11.1427 -0.430353 8.91423 -0.205357 7.53886 1.1848L7.0002 1.72854L6.46154 1.1848C5.08891 -0.205357 2.8577 -0.430353 1.35929 0.820517C-0.357861 2.25621 -0.448093 4.83294 1.0886 6.38917L6.37951 11.7409C6.7213 12.0864 7.27637 12.0864 7.61816 11.7409L12.9091 6.38917C14.4485 4.83294 14.3583 2.25621 12.6411 0.820517Z" />';
						$output            .= '</svg>';
						$output            .= '</div>';
					}

					if ( isset( $attributes['productOptions']['quickView'] ) && $attributes['productOptions']['quickView'] ) {
						$output .= '<div class="cozy-block-featured-product-tabs__util-icon-wrapper quick-view__icon-wrapper" data-product-id="' . $product_data['id'] . '">';
						$output .= '<svg viewBox="0 0 18 12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
						$output .= '<path d="M17.8913 5.54375C16.1966 2.23719 12.8416 0 9 0C5.15843 0 1.80249 2.23875 0.108733 5.54406C0.0372461 5.68547 0 5.8417 0 6.00016C0 6.15861 0.0372461 6.31484 0.108733 6.45625C1.80342 9.76281 5.15843 12 9 12C12.8416 12 16.1975 9.76125 17.8913 6.45594C17.9628 6.31453 18 6.1583 18 5.99984C18 5.84139 17.9628 5.68516 17.8913 5.54375ZM9 10.5C8.10998 10.5 7.23995 10.2361 6.49993 9.74161C5.75991 9.24715 5.18313 8.54434 4.84253 7.72208C4.50194 6.89981 4.41282 5.99501 4.58646 5.12209C4.76009 4.24918 5.18868 3.44736 5.81801 2.81802C6.44735 2.18868 7.24918 1.7601 8.12209 1.58647C8.99501 1.41283 9.89981 1.50195 10.7221 1.84254C11.5443 2.18314 12.2472 2.75991 12.7416 3.49993C13.2361 4.23995 13.5 5.10998 13.5 6C13.5003 6.59103 13.3841 7.17632 13.1581 7.72242C12.932 8.26851 12.6005 8.7647 12.1826 9.18262C11.7647 9.60054 11.2685 9.932 10.7224 10.158C10.1763 10.3841 9.59103 10.5003 9 10.5ZM9 3C8.73223 3.00374 8.46618 3.04358 8.20906 3.11844C8.42101 3.40646 8.52271 3.7609 8.49574 4.11748C8.46876 4.47406 8.31489 4.80917 8.06203 5.06203C7.80917 5.31489 7.47406 5.46876 7.11748 5.49574C6.7609 5.52271 6.40646 5.42101 6.11843 5.20906C5.95442 5.81331 5.98403 6.45377 6.20308 7.04031C6.42214 7.62685 6.81961 8.12993 7.33956 8.47874C7.85951 8.82754 8.47575 9.00452 9.10155 8.98475C9.72735 8.96498 10.3312 8.74946 10.8281 8.36853C11.325 7.9876 11.6899 7.46044 11.8715 6.86125C12.0531 6.26205 12.0422 5.62099 11.8404 5.0283C11.6386 4.43561 11.256 3.92114 10.7465 3.55728C10.2369 3.19343 9.62611 2.99853 9 3Z" />';
						$output .= '</svg>';
						$output .= '</div>';
					}
					$output .= '</div>';
				}

				$output .= '</figure>';
			}

			$output .= '<div class="cozy-block-featured-product-tabs__product-detail">';

			if ( $attributes['productOptions']['categories'] && ! empty( $product_data['categories'] ) ) {
				$classes      = array();
				$classes[]    = 'cozy-block-featured-product-tabs__product-categories';
				$classes[]    = $attributes['categoryStyles']['hoverEffect'] ? 'has-hover-effect' : '';
				$output      .= '<div class="' . implode( ' ', $classes ) . '">';
				$open_new_tab = isset( $attributes['productOptions']['linkCat'], $attributes['productOptions']['catNewTab'] ) && $attributes['productOptions']['linkCat'] && $attributes['productOptions']['catNewTab'] ? '_blank' : '';
				foreach ( $product_data['categories'] as $cat_data ) {
					$has_cat_link = isset( $attributes['productOptions']['linkCat'] ) && $attributes['productOptions']['linkCat'] ? 'href="' . esc_url( $cat_data['link'] ) . '"' : '';
					$output      .= '<a ' . $has_cat_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $cat_data['name'] ) . '</a>';
				}
				$output .= '</div>';
			}

			if ( $attributes['productOptions']['title'] ) {
				$output       .= '<h4 class="cozy-block-featured-product-tabs__product-title">';
				$has_post_link = isset( $attributes['productOptions']['titleLinkPost'] ) && $attributes['productOptions']['titleLinkPost'] ? 'href="' . esc_url( $product_data['link'] ) . '"' : '';
				$open_new_tab  = isset( $attributes['productOptions']['titleLinkPost'], $attributes['productOptions']['titleLinkNewTab'] ) && $attributes['productOptions']['titleLinkPost'] && $attributes['productOptions']['titleLinkNewTab'] ? '_blank' : '';
				$output       .= '<a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $product_data['title'] ) . '</a>';
				$output       .= '</h4>';
			}

			if ( $attributes['productOptions']['content'] ) {
				$output .= '<p>' . cozy_create_excerpt( $product_data['content'], $attributes['productOptions']['excerpt'] ) . '</p>';
			}

			$price_rating_display = isset( $attributes['priceRatingWrapper']['display'] ) ? $attributes['priceRatingWrapper']['display'] : 'flex';

			$inline_styles   = array();
			$inline_styles[] = 'display:' . $price_rating_display . ';';
			$inline_styles[] = 'align-items:center';
			$inline_styles[] = 'flex-wrap:wrap';
			$inline_styles[] = 'justify-content:' . $attributes['priceRatingWrapper']['justifyContent'];
			$inline_styles[] = 'gap:' . $attributes['priceRatingWrapper']['gap'];
			$output         .= '<div style="' . implode( ';', $inline_styles ) . '">';
			if ( $attributes['productOptions']['price'] ) {
				$output .= '<p class="cozy-block-featured-product-tabs__product-price">' . $product_data['price'] . '</p>';
			}
			if ( $attributes['productOptions']['rating'] && $product_data['review_count'] > 0 ) {
				$rating_percent = ( $product_data['rating'] / 5 * 100 ) . '%';
				$output        .= '<div class="cozy-block-featured-product-tabs__product-rating" style="font-size:14px;">';
				$output        .= '<div class="post__rating" style="display:inline;background: linear-gradient(90deg, #fcb900 ' . $rating_percent . ', rgba(0, 0, 0, 0.2) ' . $rating_percent . ')">';
				$output        .= '★★★★★';
				$output        .= '</div>';
				$output        .= '<span style="display:block;">(' . number_format( floatval( $product_data['rating'] ), 1 ) . ' out of ' . $product_data['review_count'] . ' ' . _n( 'review', 'reviews', $product_data['review_count'], 'cozy-addons' ) . '.)</span>';
				$output        .= '</div>';
			}
			$output .= '</div>';

			if ( isset( $attributes['productOptions']['cartButton'] ) && $attributes['productOptions']['cartButton'] ) {
				$output    .= '<div class="post__cart-button" data-product-id="' . $product_data['id'] . '">';
				$output    .= '<svg class="loader-icon display-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.99998 2.66666C9.72665 2.66666 11.2626 3.48666 12.238 4.762L10.6666 6.33333H14.6666V2.33333L13.1873 3.81266C12.5631 3.03781 11.773 2.41284 10.8753 1.98376C9.97754 1.55467 8.99499 1.33241 7.99998 1.33333C4.31798 1.33333 1.33331 4.318 1.33331 8H2.66665C2.66665 6.58551 3.22855 5.22896 4.22874 4.22876C5.22894 3.22857 6.58549 2.66666 7.99998 2.66666ZM13.3333 8C13.3333 9.11533 12.9837 10.2026 12.3336 11.1089C11.6835 12.0151 10.7656 12.6948 9.7091 13.0522C8.65259 13.4096 7.51062 13.4268 6.44382 13.1014C5.37703 12.776 4.4391 12.1243 3.76198 11.238L5.33331 9.66666H1.33331V13.6667L2.81265 12.1873C3.43687 12.9622 4.22694 13.5872 5.12468 14.0162C6.02242 14.4453 7.00497 14.6676 7.99998 14.6667C11.682 14.6667 14.6666 11.682 14.6666 8H13.3333Z" />
				</svg>';
				$cart_label = isset( $attributes['cartButton']['label'] ) ? $attributes['cartButton']['label'] : '';
				$output    .= '<span class="cart-button__label">' . esc_html( $cart_label ) . '</span>';
				$output    .= '</div>';
			}

			$output .= '</div>';

			$output .= '</li>';
		}
	}
}

$index = 0;
foreach ( $cozy_featured_product_tabs as $key => $label ) {
	if ( $attributes['enableOptions'][ $key ] ) {
		$classes   = array();
		$classes[] = 'cozy-block-featured-product-tabs__body';
		$classes[] = 0 === $index ? 'active-content' : '';

		$output   .= '<div class="' . implode( ' ', $classes ) . '">';
		$classes   = array();
		$classes[] = 'cozy-block-featured-product-tabs__' . $attributes['display'] . '-wrapper';
		$classes[] = 'carousel' === $attributes['display'] ? 'swiper-wrapper' : '';
		$output   .= '<ul class="' . implode( ' ', $classes ) . '">';
		// $output   .= $cozy_featured_product_tabs[ $key ];
		$output .= render_cozy_block_featured_product_tab_data( $key, $attributes, $output );
		$output .= '</ul>';
		$output .= '</div>';

		++$index;
	}
}
// End Content.

if ( 'carousel' === $attributes['display'] ) {
	if ( $attributes['navigation']['enabled'] ) {
		$output .= '<div class="swiper-button-prev"></div><div class="swiper-button-next"></div>';
	}
	if ( $attributes['pagination']['enabled'] ) {
		$output .= '<div class="swiper-pagination"></div>';
	}
}

/* Toast */
$output .= '<div class="cozy-block-featured-product-tabs__toast visibility-hidden"></div>';

if ( isset( $attributes['productOptions']['quickView'] ) && $attributes['productOptions']['quickView'] ) {
	/* Lightbox Wrapper*/
	$output .= '<div class="quick-view__lightbox-wrapper visibility-hidden">';
	$output .= '<div class="quick-view__lightbox">';
	$output .= '<div class="quick-view__lightbox-body-wrapper">';

	$output .= '<div class="spinner visibility-hidden"></div>';

	/* Lightbox Body */
	$output .= '<div class="quick-view__lightbox-body">';
	$output .= '</div>';

	$output .= '</div>';
	/* End Lightbox Body */

	$output .= '</div>';

	$output .= '</div>';
	/* End Lightbox Wrapper */
}

$output .= '</div>';

$font_families = array();

if ( isset( $attributes['tabHeading']['fontFamily'] ) && ! empty( $attributes['tabHeading']['fontFamily'] ) ) {
	$font_families[] = $attributes['tabHeading']['fontFamily'];
}
if ( isset( $attributes['tabStyles']['fontFamily'] ) && ! empty( $attributes['tabStyles']['fontFamily'] ) ) {
	$font_families[] = $attributes['tabStyles']['fontFamily'];
}
if ( isset( $attributes['saleBadge']['fontFamily'] ) && ! empty( $attributes['saleBadge']['fontFamily'] ) ) {
	$font_families[] = $attributes['saleBadge']['fontFamily'];
}
if ( isset( $attributes['categoryStyles']['fontFamily'] ) && ! empty( $attributes['categoryStyles']['fontFamily'] ) ) {
	$font_families[] = $attributes['categoryStyles']['fontFamily'];
}
if ( isset( $attributes['title']['fontFamily'] ) && ! empty( $attributes['title']['fontFamily'] ) ) {
	$font_families[] = $attributes['title']['fontFamily'];
}
if ( isset( $attributes['price']['fontFamily'] ) && ! empty( $attributes['price']['fontFamily'] ) ) {
	$font_families[] = $attributes['price']['fontFamily'];
}
if ( isset( $attributes['rating']['fontFamily'] ) && ! empty( $attributes['rating']['fontFamily'] ) ) {
	$font_families[] = $attributes['rating']['fontFamily'];
}
if ( isset( $attributes['cartButton']['fontFamily'] ) && ! empty( $attributes['cartButton']['fontFamily'] ) ) {
	$font_families[] = $attributes['cartButton']['fontFamily'];
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

$render = sprintf( '<div class="cozy-block-wrapper cozy-block-featured-product-tabs-wrapper"><div %1$s>%2$s</div></div>', $wrapper_attributes, $output );
echo $render;
