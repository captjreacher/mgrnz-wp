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

$tab_header = array(
	'gap'     => isset( $attributes['titleGap'] ) ? $attributes['titleGap'] : '',
	'padding' => isset( $attributes['separatorStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['separatorStyles']['padding'] ) : '',
	'margin'  => isset( $attributes['separatorStyles']['margin'] ) ? cozy_render_TRBL( 'margin', $attributes['separatorStyles']['margin'] ) : '',
	'border'  => isset( $attributes['separatorStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['separatorStyles']['border'] ) : '',
	'radius'  => isset( $attributes['separatorStyles']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['separatorStyles']['radius'] ) : '',
	'color'   => array(
		'bg' => isset( $attributes['separatorStyles']['bgColor'] ) ? $attributes['separatorStyles']['bgColor'] : '',
	),
);

$tab_padding        = cozy_render_TRBL( 'padding', $attributes['tabStyles']['padding'] );
$tab_border_radius  = cozy_render_TRBL( 'border-radius', $attributes['tabStyles']['borderRadius'] );
$default_tab_border = isset( $attributes['tabStyles']['default']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['default']['border'] ) : '';
$active_tab_border  = isset( $attributes['tabStyles']['active']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['active']['border'] ) : '';
$tab_color          = array(
	'title'       => isset( $attributes['tabStyles']['titleColor'] ) ? $attributes['tabStyles']['titleColor'] : '',
	'text'        => isset( $attributes['tabStyles']['default']['color'] ) ? $attributes['tabStyles']['default']['color'] : '',
	'bg'          => isset( $attributes['tabStyles']['default']['bgColor'] ) ? $attributes['tabStyles']['default']['bgColor'] : '',
	'active_text' => isset( $attributes['tabStyles']['active']['color'] ) ? $attributes['tabStyles']['active']['color'] : '',
	'active_bg'   => isset( $attributes['tabStyles']['active']['bgColor'] ) ? $attributes['tabStyles']['active']['bgColor'] : '',
);
$tab_styles         = array(
	'letter_case'          => isset( $attributes['tabStyles']['letterCase'] ) ? $attributes['tabStyles']['letterCase'] : '',
	'decoration'           => isset( $attributes['tabStyles']['decoration'] ) ? $attributes['tabStyles']['decoration'] : '',
	'line_height'          => isset( $attributes['tabStyles']['lineHeight'] ) ? $attributes['tabStyles']['lineHeight'] : '',
	'letter_spacing'       => isset( $attributes['tabStyles']['letterSpacing'] ) ? $attributes['tabStyles']['letterSpacing'] : '',
	'title_letter_case'    => isset( $attributes['tabStyles']['titleLetterCase'] ) ? $attributes['tabStyles']['titleLetterCase'] : '',
	'title_decoration'     => isset( $attributes['tabStyles']['titleDecoration'] ) ? $attributes['tabStyles']['titleDecoration'] : '',
	'title_line_height'    => isset( $attributes['tabStyles']['lineHeight'] ) ? $attributes['tabStyles']['lineHeight'] : '',
	'title_letter_spacing' => isset( $attributes['tabStyles']['letterSpacing'] ) ? $attributes['tabStyles']['letterSpacing'] : '',
);

$active_tab_overlay = isset( $attributes['separatorStyles']['border']['bottom']['width'], $attributes['separatorStyles']['border']['bottom']['style'] ) ? $attributes['separatorStyles']['border']['bottom']['width'] : '';

$item_box = array(
	'padding'      => isset( $attributes['itemBoxStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['itemBoxStyles']['padding'] ) : '',
	'margin'       => array(
		'top'    => isset( $attributes['itemBoxStyles']['margin']['top'] ) ? $attributes['itemBoxStyles']['margin']['top'] : '',
		'bottom' => isset( $attributes['itemBoxStyles']['margin']['bottom'] ) ? $attributes['itemBoxStyles']['margin']['bottom'] : '',
	),
	'border'       => isset( $attributes['itemBoxStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['itemBoxStyles']['border'] ) : '',
	'radius'       => isset( $attributes['itemBoxStyles']['radius'] ) ? $attributes['itemBoxStyles']['radius'] : '',
	'bg'           => isset( $attributes['itemBoxStyles']['color']['bg'] ) ? $attributes['itemBoxStyles']['color']['bg'] : '',
	'bg_hover'     => isset( $attributes['itemBoxStyles']['color']['bgHover'] ) ? $attributes['itemBoxStyles']['color']['bgHover'] : '',
	'border_hover' => isset( $attributes['itemBoxStyles']['color']['borderHover'] ) ? $attributes['itemBoxStyles']['color']['borderHover'] : '',
	'shadow'       => array(
		'horizontal' => isset( $attributes['itemBoxStyles']['shadow']['horizontal'] ) ? $attributes['itemBoxStyles']['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['itemBoxStyles']['shadow']['vertical'] ) ? $attributes['itemBoxStyles']['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['itemBoxStyles']['shadow']['blur'] ) ? $attributes['itemBoxStyles']['shadow']['blur'] : '',
		'spread'     => isset( $attributes['itemBoxStyles']['shadow']['spread'] ) ? $attributes['itemBoxStyles']['shadow']['spread'] : '',
		'color'      => isset( $attributes['itemBoxStyles']['shadow']['color'] ) ? $attributes['itemBoxStyles']['shadow']['color'] : '',
		'position'   => isset( $attributes['itemBoxStyles']['shadow']['position'] ) ? $attributes['itemBoxStyles']['shadow']['position'] : '',
	),
	'shadow_hover' => array(
		'horizontal' => isset( $attributes['itemBoxStyles']['shadowHover']['horizontal'] ) ? $attributes['itemBoxStyles']['shadowHover']['horizontal'] : '',
		'vertical'   => isset( $attributes['itemBoxStyles']['shadowHover']['vertical'] ) ? $attributes['itemBoxStyles']['shadowHover']['vertical'] : '',
		'blur'       => isset( $attributes['itemBoxStyles']['shadowHover']['blur'] ) ? $attributes['itemBoxStyles']['shadowHover']['blur'] : '',
		'spread'     => isset( $attributes['itemBoxStyles']['shadowHover']['spread'] ) ? $attributes['itemBoxStyles']['shadowHover']['spread'] : '',
		'color'      => isset( $attributes['itemBoxStyles']['shadowHover']['color'] ) ? $attributes['itemBoxStyles']['shadowHover']['color'] : '',
		'position'   => isset( $attributes['itemBoxStyles']['shadowHover']['position'] ) ? $attributes['itemBoxStyles']['shadowHover']['position'] : '',
	),
);

$post_image = array(
	'margin'          => array(
		'top'    => isset( $attributes['imageStyles']['margin']['top'] ) ? $attributes['imageStyles']['margin']['top'] : '0px',
		'bottom' => isset( $attributes['imageStyles']['margin']['bottom'] ) ? $attributes['imageStyles']['margin']['bottom'] : '0px',
	),
	'object_fit'      => isset( $attributes['imageStyles']['objectFit'] ) ? $attributes['imageStyles']['objectFit'] : '',
	'object_position' => isset( $attributes['imageStyles']['objectPosition'] ) ? $attributes['imageStyles']['objectPosition'] : 'center',
	'radius'          => isset( $attributes['imageStyles']['radius'] ) ? $attributes['imageStyles']['radius'] : '',
	'color'           => array(
		'overlay' => isset( $attributes['imageStyles']['overlay'] ) ? $attributes['imageStyles']['overlay'] : '',
	),
);

$sale_badge_padding = cozy_render_TRBL( 'padding', $attributes['saleBadge']['padding'] );
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

$product_title_color  = array(
	'text'       => isset( $attributes['productName']['color'] ) ? $attributes['productName']['color'] : '',
	'text_hover' => isset( $attributes['productName']['colorHover'] ) ? $attributes['productName']['colorHover'] : '',
);
$product_title_styles = array(
	'letter_case'    => isset( $attributes['productName']['letterCase'] ) ? $attributes['productName']['letterCase'] : '',
	'decoration'     => isset( $attributes['productName']['decoration'] ) ? $attributes['productName']['decoration'] : '',
	'line_height'    => isset( $attributes['productName']['lineHeight'] ) ? $attributes['productName']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['productName']['letterSpacing'] ) ? $attributes['productName']['letterSpacing'] : '',
);

$price_color          = array(
	'text' => isset( $attributes['productPrice']['color'] ) ? $attributes['productPrice']['color'] : '',
);
$product_price_styles = array(
	'letter_case'    => isset( $attributes['productPrice']['letterCase'] ) ? $attributes['productPrice']['letterCase'] : '',
	'decoration'     => isset( $attributes['productPrice']['decoration'] ) ? $attributes['productPrice']['decoration'] : '',
	'line_height'    => isset( $attributes['productPrice']['lineHeight'] ) ? $attributes['productPrice']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['productPrice']['letterSpacing'] ) ? $attributes['productPrice']['letterSpacing'] : '',
);

$rating_color          = array(
	'text' => isset( $attributes['productRating']['color'] ) ? $attributes['productRating']['color'] : '',
);
$product_rating_styles = array(
	'letter_case'    => isset( $attributes['productRating']['letterCase'] ) ? $attributes['productRating']['letterCase'] : '',
	'decoration'     => isset( $attributes['productRating']['decoration'] ) ? $attributes['productRating']['decoration'] : '',
	'line_height'    => isset( $attributes['productRating']['lineHeight'] ) ? $attributes['productRating']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['productRating']['letterSpacing'] ) ? $attributes['productRating']['letterSpacing'] : '',
);

$cart_button = array(
	'margin'         => array(
		'top'    => isset( $attributes['cartButton']['margin']['top'] ) ? $attributes['cartButton']['margin']['top'] : '',
		'bottom' => isset( $attributes['cartButton']['margin']['bottom'] ) ? $attributes['cartButton']['margin']['bottom'] : '',
	),
	'padding'        => isset( $attributes['cartButton']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['cartButton']['padding'] ) : '',
	'border'         => isset( $attributes['cartButton']['border'] ) ? cozy_render_TRBL( 'border', $attributes['cartButton']['border'] ) : '',
	'radius'         => isset( $attributes['cartButton']['radius'] ) ? $attributes['cartButton']['radius'] : '',
	'width'          => isset( $attributes['cartButton']['width'] ) ? $attributes['cartButton']['width'] : '',
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

$bullets = array(
	'default' => array(
		'width'  => isset( $attributes['pagination']['width'] ) ? $attributes['pagination']['width'] : '',
		'height' => isset( $attributes['pagination']['height'] ) ? $attributes['pagination']['height'] : '',
		'radius' => isset( $attributes['pagination']['radius'] ) ? $attributes['pagination']['radius'] : '',
	),
	'active'  => array(
		'width'   => isset( $attributes['pagination']['active']['width'] ) ? $attributes['pagination']['active']['width'] : '',
		'height'  => isset( $attributes['pagination']['active']['height'] ) ? $attributes['pagination']['active']['height'] : '',
		'radius'  => isset( $attributes['pagination']['active']['radius'] ) ? $attributes['pagination']['active']['radius'] : '',
		'outline' => isset( $attributes['pagination']['active']['border'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['active']['border'] ) : '',
		'offset'  => isset( $attributes['pagination']['active']['offset'] ) ? $attributes['pagination']['active']['offset'] : '',
	),
	'gap'     => isset( $attributes['pagination']['gap'] ) ? $attributes['pagination']['gap'] : '',
	'bottom'  => isset( $attributes['pagination']['bottom'] ) ? $attributes['pagination']['bottom'] : '',
	'color'   => array(
		'default'       => isset( $attributes['pagination']['color']['default'] ) ? $attributes['pagination']['color']['default'] : '',
		'default_hover' => isset( $attributes['pagination']['color']['defaultHover'] ) ? $attributes['pagination']['color']['defaultHover'] : '',
		'active'        => isset( $attributes['pagination']['color']['active'] ) ? $attributes['pagination']['color']['active'] : '',
		'active_hover'  => isset( $attributes['pagination']['color']['activeHover'] ) ? $attributes['pagination']['color']['activeHover'] : '',
	),
);

$column1 = $attributes['gridOptions']['columnCount'] <= 3 ? $attributes['gridOptions']['columnCount'] : 3;
$column2 = $attributes['gridOptions']['columnCount'] <= 2 ? $attributes['gridOptions']['columnCount'] : 2;

$block_styles = "
#$block_id .cozy-block__product-tabs {
    gap: {$attributes['tabGap']};
    font-size: {$attributes['tabStyles']['fontSize']};
    font-family: {$attributes['tabStyles']['fontFamily']};
    font-weight: {$attributes['tabStyles']['fontWeight']};
	text-transform: {$tab_styles['letter_case']};
	text-decoration: {$tab_styles['decoration']};
	line-height: {$tab_styles['line_height']};
	letter-spacing: {$tab_styles['letter_spacing']};
}

#$block_id .cozy-block-product-tab__header {
	justify-content: {$attributes['titleJustify']};
	gap: {$tab_header['gap']};
    {$tab_header['padding']}
    {$tab_header['margin']}
    {$tab_header['border']}
    {$tab_header['radius']}
    background-color: {$tab_header['color']['bg']};
}

#$block_id .cozy-block-product-tab__title {
    font-size: {$attributes['tabStyles']['titleFontSize']};
    font-weight: {$attributes['tabStyles']['titleFontWeight']};
    font-family: {$attributes['tabStyles']['titleFontFamily']};
	text-transform: {$tab_styles['title_letter_case']};
	text-decoration: {$tab_styles['title_decoration']};
	line-height: {$tab_styles['title_line_height']};
	letter-spacing: {$tab_styles['title_letter_spacing']};
    color: {$tab_color['title']};
}

#$block_id .cozy-block__product-tab {
    {$tab_padding}
    {$tab_border_radius}
    {$default_tab_border}
    color: {$tab_color['text']};
    background-color: {$tab_color['bg']};
}
#$block_id .cozy-block__product-tab.active-tab {
    {$active_tab_border}
    color: {$tab_color['active_text']};
    background-color: {$tab_color['active_bg']};
}
#$block_id.has-tab-overlay .cozy-block__product-tab.active-tab {
    margin-bottom: -{$active_tab_overlay};
}

#$block_id:not(.has-masonry) .cozy-block__product-tab-content {
    grid-template-columns: repeat({$attributes['gridOptions']['columnCount']}, 1fr);
    grid-gap: {$attributes['gridOptions']['gap']};
}
#$block_id.has-masonry .cozy-block__product-tab-content {
    column-count: {$attributes['gridOptions']['columnCount']};
    column-gap: {$attributes['gridOptions']['gap']};
}
#$block_id.has-masonry .cozy-block__product-tab-content .cozy-block-product {
    margin-bottom: {$attributes['gridOptions']['gap']};
}
@media screen and (max-width: 1024px) {
    #$block_id:not(.has-masonry) .cozy-block__product-tab-content {
        grid-template-columns: repeat(
            $column1,
            1fr
        ) !important;
    }
    #$block_id.has-masonry .cozy-block__product-tab-content {
        column-count: $column1 !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id:not(.has-masonry) .cozy-block__product-tab-content {
        grid-template-columns: repeat(
            $column2,
            1fr
        ) !important;
    }
    #$block_id.has-masonry .cozy-block__product-tab-content {
        column-count: $column2 !important;
    }
}

@media screen and (max-width: 400px) {
    #$block_id:not(.has-masonry) .cozy-block__product-tab-content {
        grid-template-columns: repeat(
            1,
            1fr
        ) !important;
    }
    #$block_id.has-masonry .cozy-block__product-tab-content {
        column-count: 1 !important;
    }
}

#$block_id .cozy-block__product-tab-content .cozy-block-product {
    text-align: {$attributes['textAlign']};
	{$item_box['padding']}
	margin-top: {$item_box['margin']['top']};
	margin-bottom: {$item_box['margin']['bottom']};
	{$item_box['border']}
	border-radius: {$item_box['radius']};
	background-color: {$item_box['bg']};
}
#$block_id .cozy-block__product-tab-content.has-box-shadow .cozy-block-product {
	box-shadow: {$item_box['shadow']['horizontal']}px {$item_box['shadow']['vertical']}px {$item_box['shadow']['blur']}px {$item_box['shadow']['spread']}px {$item_box['shadow']['color']} {$item_box['shadow']['position']};
}
#$block_id .cozy-block__product-tab-content .cozy-block-product:hover {
	background-color: {$item_box['bg_hover']};
	border-color: {$item_box['border_hover']};
}
#$block_id .cozy-block__product-tab-content.has-hover-box-shadow .cozy-block-product:hover {
	box-shadow: {$item_box['shadow_hover']['horizontal']}px {$item_box['shadow_hover']['vertical']}px {$item_box['shadow_hover']['blur']}px {$item_box['shadow_hover']['spread']}px {$item_box['shadow_hover']['color']} {$item_box['shadow_hover']['position']};
}

#$block_id .cozy-block-product-tab__product-image {
    max-width: {$attributes['imageStyles']['width']};
    max-height: {$attributes['imageStyles']['height']};
	border-radius: {$post_image['radius']};
	margin-top: {$post_image['margin']['top']};
	margin-bottom: {$post_image['margin']['bottom']};
}
#$block_id .cozy-block-product-tab__product-image img {
    height: {$attributes['imageStyles']['height']};
	border-radius: {$post_image['radius']};
	object-fit: {$post_image['object_fit']};
	object-position: {$post_image['object_position']};
}

#$block_id .post__image-background {
	background-color: {$post_image['color']['overlay']};
	border-radius: {$post_image['radius']};
}

#$block_id .cozy-block__product-tab-content .cozy-block-product-tab__product-image .cozy-sale-badge {
    {$sale_badge_padding}
    top: {$attributes['saleBadge']['top']}px;
    border-width: {$attributes['saleBadge']['border']['width']};
    border-style: {$attributes['saleBadge']['border']['style']};
    border-color: {$attributes['saleBadge']['border']['color']};
    border-radius: {$attributes['saleBadge']['borderRadius']};
    transform: rotate({$attributes['saleBadge']['rotate']}deg);
    color: {$sale_badge_color['text']};
    background-color: {$sale_badge_color['bg']};
    font-size: {$attributes['saleBadge']['fontSize']};
    font-family: {$attributes['saleBadge']['fontFamily']};
    font-weight: {$attributes['saleBadge']['fontWeight']};
	text-transform: {$sale_badge_styles['letter_case']};
	text-decoration: {$sale_badge_styles['decoration']};
	line-height: {$sale_badge_styles['line_height']};
	letter-spacing: {$sale_badge_styles['letter_spacing']};
}
#$block_id .cozy-block__product-tab-content .cozy-block-product-tab__product-image .cozy-sale-badge.position-left {
    left: {$attributes['saleBadge']['left']}px;
}
#$block_id .cozy-block__product-tab-content .cozy-block-product-tab__product-image .cozy-sale-badge.position-right {
    right: {$attributes['saleBadge']['right']}px;
}

#$block_id .cozy-block-product-tab__icon-container {
    margin-top: {$util_icon['margin']['top']};
    margin-right: {$util_icon['margin']['right']};
    margin-bottom: {$util_icon['margin']['bottom']};
    margin-left: {$util_icon['margin']['left']};
    gap: {$util_icon['gap']};
}
#$block_id .cozy-block-product-tab__icon-wrapper {
	width: {$util_icon['box_width']};
    height: {$util_icon['box_height']};
    {$util_icon['border']}
    border-radius: {$util_icon['radius']};
    background-color: {$util_icon['color']['bg']};
}
#$block_id .cozy-block-product-tab__icon-wrapper:hover {
    background-color: {$util_icon['color']['bg_hover']};
    border-color: {$util_icon['color']['border_hover']};
}
#$block_id .cozy-block-product-tab__icon-wrapper.is-active {
    background-color: {$util_icon['color']['bg_active']};
    border-color: {$util_icon['color']['border_active']};
}
#$block_id .cozy-block-product-tab__icon-wrapper svg {
    width: {$util_icon['size']};
    height: {$util_icon['size']};
    fill: {$util_icon['color']['text']};
}
#$block_id .cozy-block-product-tab__icon-wrapper:hover svg {
    fill: {$util_icon['color']['text_hover']};
}
#$block_id .cozy-block-product-tab__icon-wrapper.is-active svg {
    fill: {$util_icon['color']['text_active']};
}


#$block_id .cozy-block-product-tab__product-title {
    margin-top: {$attributes['productName']['marginTop']} !important;
    margin-bottom: {$attributes['productName']['marginBottom']} !important;
}
#$block_id .cozy-block-product-tab__product-title a, #$block_id .quick-view__product-detail .post__title a {
    font-size: {$attributes['productName']['fontSize']};
    font-weight: {$attributes['productName']['fontWeight']};
    font-family: {$attributes['productName']['fontFamily']};
	text-transform: {$product_title_styles['letter_case']};
	text-decoration: {$product_title_styles['decoration']};
	line-height: {$product_title_styles['line_height']};
	letter-spacing: {$product_title_styles['letter_spacing']};
    color: {$product_title_color['text']};
}
#$block_id .cozy-block-product-tab__product-title a:hover, #$block_id .quick-view__product-detail .post__title a:hover {
    color: {$product_title_color['text_hover']};
}

#$block_id .cozy-block-product-tab__product-price, #$block_id .quick-view__product-detail .post__price {
    margin-top: {$attributes['productPrice']['marginTop']};
    margin-bottom: {$attributes['productPrice']['marginBottom']};
    font-size: {$attributes['productPrice']['fontSize']};
    font-weight: {$attributes['productPrice']['fontWeight']};
    font-family: {$attributes['productPrice']['fontFamily']};
	text-transform: {$product_price_styles['letter_case']};
	text-decoration: {$product_price_styles['decoration']};
	line-height: {$product_price_styles['line_height']};
	letter-spacing: {$product_price_styles['letter_spacing']};
    color: {$price_color['text']};
}

#$block_id .cozy-block-product-tab__product-rating {
    margin-top: {$attributes['productRating']['marginTop']};
    margin-bottom: {$attributes['productRating']['marginBottom']};
    font-size: {$attributes['productRating']['fontSize']};
    font-weight: {$attributes['productRating']['fontWeight']};
    font-family: {$attributes['productRating']['fontFamily']};
	text-transform: {$product_rating_styles['letter_case']};
	text-decoration: {$product_rating_styles['decoration']};
	line-height: {$product_rating_styles['line_height']};
	letter-spacing: {$product_rating_styles['letter_spacing']};
    color: {$rating_color['text']};
}

#$block_id .post__cart-button {
    margin-top: {$cart_button['margin']['top']};
    margin-bottom: {$cart_button['margin']['bottom']};
    {$cart_button['padding']}
    {$cart_button['border']}
    border-radius: {$cart_button['radius']};
    width: {$cart_button['width']};
    font-size: {$cart_button['font']['size']};
    font-weight: {$cart_button['font']['weight']};
    font-family: {$cart_button['font']['family']};
	text-transform: {$cart_button['letter_case']};
	text-decoration: {$cart_button['decoration']};
	line-height: {$cart_button['line_height']};
	letter-spacing: {$cart_button['letter_spacing']};
    text-transform: {$cart_button['letter_case']};
    color: {$cart_button['color']['text']};
    background-color: {$cart_button['color']['bg']};
}
#$block_id .post__cart-button:hover {
    color: {$cart_button['color']['text_hover']};
    background-color: {$cart_button['color']['bg_hover']};
    border-color: {$cart_button['color']['border_hover']};
}

#$block_id .quick-view__lightbox-body .swiper-pagination {
    bottom: {$bullets['bottom']}px;
}
#$block_id .swiper-pagination-bullet {
    width: {$bullets['default']['width']};
    height: {$bullets['default']['height']};
    border-radius: {$bullets['default']['radius']};
    background-color: {$bullets['color']['default']};
}
#$block_id .quick-view__lightbox-body .swiper-pagination-horizontal .swiper-pagination-bullet {
    margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullets['gap']});
}
#$block_id .quick-view__lightbox-body .swiper-pagination-bullet:hover {
    background-color: {$bullets['color']['default_hover']};
}
#$block_id .quick-view__lightbox-body .swiper-pagination-bullet-active {
    width: {$bullets['active']['width']};
    height: {$bullets['active']['height']};
    border-radius: {$bullets['active']['radius']};
    {$bullets['active']['outline']}
    outline-offset: {$bullets['active']['offset']};
    background-color: {$bullets['color']['active']};
}
#$block_id .quick-view__lightbox-body .swiper-pagination-bullet-active:hover {
    background-color: {$bullets['color']['active_hover']};
}
";

$classes   = array();
$classes[] = 'cozy-block-product-tab';
$classes[] = $attributes['tabStyles']['active']['tabOverlay'] ? 'has-tab-overlay' : '';
$classes[] = $attributes['gridOptions']['masonry'] ? 'has-masonry' : '';
$output    = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';

$output .= '<article class="cozy-block-product-tab__header">';
if ( $attributes['enableTitle'] ) {
	$output .= '<' . $attributes['titleTag'] . ' class="cozy-block-product-tab__title">' . esc_html( $attributes['title'] ) . '</' . $attributes['titleTag'] . '>';
}
$output .= '<ul class="cozy-block__product-tabs">';
foreach ( (array) $attributes['tabs'] as $key => $tab_data ) {
	$active_tab_class = '';
	if ( 0 === $key ) {
		$active_tab_class = ' active-tab';
	}
	$output .= '<li class="cozy-block__product-tab' . $active_tab_class . '" id="' . $tab_data['id'] . '" data-index="' . $key . '">';
	$output .= esc_html( $tab_data['title'] );
	$output .= '</li>';
}
$output .= '</ul>';
$output .= '</article>';

// Tab Content.
if ( ! function_exists( 'render_cozy_block_product_tab_data' ) ) {
	function render_cozy_block_product_tab_data( $attributes, $products, &$output ) {
		$classes   = array();
		$classes[] = 'cozy-block__product-tab-content';
		$classes[] = isset( $attributes['itemBoxStyles']['shadow']['enabled'] ) && filter_var( $attributes['itemBoxStyles']['shadow']['enabled'], FILTER_VALIDATE_BOOLEAN ) ? 'has-box-shadow' : '';
		$classes[] = isset( $attributes['itemBoxStyles']['shadowHover']['enabled'] ) && filter_var( $attributes['itemBoxStyles']['shadowHover']['enabled'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-box-shadow' : '';
		$classes[] = isset( $attributes['itemBoxStyles']['hoverEffect'] ) && $attributes['itemBoxStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$output   .= '<li class="' . implode( ' ', $classes ) . '">';

		foreach ( $products as $product_data ) {
			$output .= '<div class="cozy-block-product" data-product-id="' . $product_data['id'] . '">';

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

			if ( $attributes['enableOptions']['productImage'] && ! empty( $product_data['image_url'] ) ) {
				$figure_classes   = array();
				$figure_classes[] = 'cozy-block-product-tab__product-image';
				$figure_classes[] = $attributes['imageStyles']['hoverEffect'] ? 'has-hover-effect' : '';
				$figure_classes[] = $attributes['imageStyles']['linkProduct'] ? 'has-link' : '';
				$output          .= '<figure class="' . implode( ' ', $figure_classes ) . '">';

				$output .= '<img src="' . esc_url( $product_data['image_url'] ) . '" />';
				if ( $attributes['enableOptions']['productPrice'] && $attributes['enableOptions']['saleBadge'] && $product_data['on_sale'] ) {
					$sale_badge_classes   = array();
					$sale_badge_classes[] = 'cozy-sale-badge';
					$sale_badge_classes[] = 'position-' . $attributes['saleBadge']['position'];

					switch ( $attributes['saleBadge']['contentType'] ) {
						case 'percentage':
							if ( isset( $product_data['discount_percentage'] ) && ! empty( $product_data['discount_percentage'] ) ) {
								$output .= '<span class="' . implode( ' ', $sale_badge_classes ) . '">';
								$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
								$output .= $product_data['discount_percentage'];
								$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
								$output .= '</span>';
							}
							break;

						case 'amount':
							if ( isset( $product_data['discount_amt'] ) && ! empty( $product_data['discount_amt'] ) ) {
								$output .= '<span class="' . implode( ' ', $sale_badge_classes ) . '">';
								$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
								$output .= $product_data['discount_amt'];
								$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
								$output .= '</span>';
							}
							break;

						default:
							$output .= '<span class="' . implode( ' ', $sale_badge_classes ) . '">';
							$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
							$output .= esc_html__( 'Sale', 'cozy-addons' );
							$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
							$output .= '</span>';
					}
				}

				if ( $attributes['imageStyles']['linkProduct'] ) {
					$open_new_tab = isset( $attributes['imageStyles']['linkNewTab'] ) && $attributes['imageStyles']['linkNewTab'] ? '_blank' : '';
					$output      .= '<a href="' . esc_url( $product_data['link'] ) . '" target="' . $open_new_tab . '" rel="noopener">';
				}
				$output .= '<span class="post__image-background">';
				$output .= '</span>';
				if ( $attributes['imageStyles']['linkProduct'] ) {
					$output .= '</a>';
				}

				if ( ( isset( $attributes['enableOptions']['cart'] ) && $attributes['enableOptions']['cart'] ) || ( isset( $attributes['enableOptions']['wishlist'] ) && $attributes['enableOptions']['wishlist'] ) || ( isset( $attributes['enableOptions']['quickView'] ) && $attributes['enableOptions']['quickView'] ) ) {
					$classes   = array();
					$classes[] = 'cozy-block-product-tab__icon-container';
					$classes[] = 'direction-' . ( isset( $attributes['utilIcon']['direction'] ) && ! empty( $attributes['utilIcon']['direction'] ) ? $attributes['utilIcon']['direction'] : 'vertical' );
					$classes[] = 'align-vertical-' . ( isset( $attributes['utilIcon']['align']['vertical'] ) && ! empty( $attributes['utilIcon']['align']['vertical'] ) ? $attributes['utilIcon']['align']['vertical'] : 'top' );
					$classes[] = 'align-horizontal-' . ( isset( $attributes['utilIcon']['align']['horizontal'] ) && ! empty( $attributes['utilIcon']['align']['horizontal'] ) ? $attributes['utilIcon']['align']['horizontal'] : 'right' );
					$classes[] = $attributes['utilIcon']['hoverShow'] ? 'has-hover-show' : '';
					$output   .= '<div class="' . implode( ' ', $classes ) . '">';
					if ( isset( $attributes['enableOptions']['cart'] ) && $attributes['enableOptions']['cart'] ) {
						$output .= '<div class="cozy-block-product-tab__icon-wrapper cart__icon-wrapper" data-product-id="' . $product_data['id'] . '">';
						$output .= '<svg viewBox="0 0 12 15" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
						$output .= '<path d="M4 3.99999C4 3.46956 4.21071 2.96085 4.58579 2.58578C4.96086 2.2107 5.46957 1.99999 6 1.99999C6.53043 1.99999 7.03914 2.2107 7.41421 2.58578C7.78929 2.96085 8 3.46956 8 3.99999H4ZM2.66667 3.99999H0.666667C0.489856 3.99999 0.320286 4.07023 0.195262 4.19525C0.0702379 4.32028 0 4.48985 0 4.66666V14C0 14.1768 0.0702379 14.3464 0.195262 14.4714C0.320286 14.5964 0.489856 14.6667 0.666667 14.6667H11.3333C11.5101 14.6667 11.6797 14.5964 11.8047 14.4714C11.9298 14.3464 12 14.1768 12 14V4.66666C12 4.48985 11.9298 4.32028 11.8047 4.19525C11.6797 4.07023 11.5101 3.99999 11.3333 3.99999H9.33333C9.33333 3.11593 8.98214 2.26809 8.35702 1.64297C7.7319 1.01785 6.88406 0.666656 6 0.666656C5.11595 0.666656 4.2681 1.01785 3.64298 1.64297C3.01786 2.26809 2.66667 3.11593 2.66667 3.99999ZM4 6.66666C4 7.19709 4.21071 7.7058 4.58579 8.08087C4.96086 8.45594 5.46957 8.66666 6 8.66666C6.53043 8.66666 7.03914 8.45594 7.41421 8.08087C7.78929 7.7058 8 7.19709 8 6.66666H9.33333C9.33333 7.55071 8.98214 8.39856 8.35702 9.02368C7.7319 9.6488 6.88406 9.99999 6 9.99999C5.11595 9.99999 4.2681 9.6488 3.64298 9.02368C3.01786 8.39856 2.66667 7.55071 2.66667 6.66666H4Z" />';
						$output .= '</svg>';
						$output .= '</div>';
					}

					if ( isset( $attributes['enableOptions']['wishlist'] ) && $attributes['enableOptions']['wishlist'] ) {
						$wishlist_user_meta = get_user_meta( $attributes['userID'], 'cozy_block_wishlist_data', true );
						$classes            = array();
						$classes[]          = 'cozy-block-product-tab__icon-wrapper';
						$classes[]          = 'wishlist__icon-wrapper';
						$classes[]          = is_array( $wishlist_user_meta ) && is_user_logged_in() && in_array( intval( $product_data['id'] ), $wishlist_user_meta ) ? 'is-active' : '';
						$output            .= '<div class="' . implode( ' ', $classes ) . '" data-product-id="' . $product_data['id'] . '">';
						$output            .= '<svg viewBox="0 0 14 12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
						$output            .= '<path d="M12.6411 0.820517C11.1427 -0.430353 8.91423 -0.205357 7.53886 1.1848L7.0002 1.72854L6.46154 1.1848C5.08891 -0.205357 2.8577 -0.430353 1.35929 0.820517C-0.357861 2.25621 -0.448093 4.83294 1.0886 6.38917L6.37951 11.7409C6.7213 12.0864 7.27637 12.0864 7.61816 11.7409L12.9091 6.38917C14.4485 4.83294 14.3583 2.25621 12.6411 0.820517Z" />';
						$output            .= '</svg>';
						$output            .= '</div>';
					}

					if ( isset( $attributes['enableOptions']['quickView'] ) && $attributes['enableOptions']['quickView'] ) {
						$output .= '<div class="cozy-block-product-tab__icon-wrapper quick-view__icon-wrapper" data-product-id="' . $product_data['id'] . '">';
						$output .= '<svg viewBox="0 0 18 12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
						$output .= '<path d="M17.8913 5.54375C16.1966 2.23719 12.8416 0 9 0C5.15843 0 1.80249 2.23875 0.108733 5.54406C0.0372461 5.68547 0 5.8417 0 6.00016C0 6.15861 0.0372461 6.31484 0.108733 6.45625C1.80342 9.76281 5.15843 12 9 12C12.8416 12 16.1975 9.76125 17.8913 6.45594C17.9628 6.31453 18 6.1583 18 5.99984C18 5.84139 17.9628 5.68516 17.8913 5.54375ZM9 10.5C8.10998 10.5 7.23995 10.2361 6.49993 9.74161C5.75991 9.24715 5.18313 8.54434 4.84253 7.72208C4.50194 6.89981 4.41282 5.99501 4.58646 5.12209C4.76009 4.24918 5.18868 3.44736 5.81801 2.81802C6.44735 2.18868 7.24918 1.7601 8.12209 1.58647C8.99501 1.41283 9.89981 1.50195 10.7221 1.84254C11.5443 2.18314 12.2472 2.75991 12.7416 3.49993C13.2361 4.23995 13.5 5.10998 13.5 6C13.5003 6.59103 13.3841 7.17632 13.1581 7.72242C12.932 8.26851 12.6005 8.7647 12.1826 9.18262C11.7647 9.60054 11.2685 9.932 10.7224 10.158C10.1763 10.3841 9.59103 10.5003 9 10.5ZM9 3C8.73223 3.00374 8.46618 3.04358 8.20906 3.11844C8.42101 3.40646 8.52271 3.7609 8.49574 4.11748C8.46876 4.47406 8.31489 4.80917 8.06203 5.06203C7.80917 5.31489 7.47406 5.46876 7.11748 5.49574C6.7609 5.52271 6.40646 5.42101 6.11843 5.20906C5.95442 5.81331 5.98403 6.45377 6.20308 7.04031C6.42214 7.62685 6.81961 8.12993 7.33956 8.47874C7.85951 8.82754 8.47575 9.00452 9.10155 8.98475C9.72735 8.96498 10.3312 8.74946 10.8281 8.36853C11.325 7.9876 11.6899 7.46044 11.8715 6.86125C12.0531 6.26205 12.0422 5.62099 11.8404 5.0283C11.6386 4.43561 11.256 3.92114 10.7465 3.55728C10.2369 3.19343 9.62611 2.99853 9 3Z" />';
						$output .= '</svg>';
						$output .= '</div>';
					}
					$output .= '</div>';
				}
				$output .= '</figure>';
			}

			if ( $attributes['enableOptions']['productName'] ) {
				$has_post_link = isset( $attributes['productName']['linkProduct'] ) && $attributes['productName']['linkProduct'] ? 'href="' . esc_url( $product_data['link'] ) . '"' : '';
				$open_new_tab  = isset( $attributes['productName']['linkProduct'], $attributes['productName']['linkNewTab'] ) && $attributes['productName']['linkProduct'] && $attributes['productName']['linkNewTab'] ? '_blank' : '';
				$output       .= '<h4 class="cozy-block-product-tab__product-title"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $product_data['title'] ) . '</a></h4>';
			}

			if ( $attributes['enableOptions']['productSummary'] ) {
				$output .= '<p>' . cozy_create_excerpt( $product_data['content'], $attributes['excerpt'] ) . '</p>';
			}

			$flex_div = $attributes['enableOptions']['productPrice'] && $attributes['enableOptions']['productRating'] ? 'cozy-block-product-tab__display-flex' : '';
			$output  .= '<div class="' . $flex_div . '">';
			if ( $attributes['enableOptions']['productPrice'] && ! empty( $product_data['price'] ) ) {
				$output .= '<p class="cozy-block-product-tab__product-price">' . $product_data['price'] . '</p>';
			}
			if ( $attributes['enableOptions']['productRating'] && 0 != $product_data['rating'] ) {
				$output .= '<div class="cozy-block-product-tab__product-rating">';
				$output .= '<svg stroke="' . $attributes['productRating']['iconColor'] . '" stroke-width="1.5" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">';
				$output .= '<path d="M6.65335 1.83265C6.68155 1.76387 6.72957 1.70503 6.7913 1.66362C6.85303 1.62221 6.92568 1.6001 7.00002 1.6001C7.07435 1.6001 7.14701 1.62221 7.20874 1.66362C7.27047 1.70503 7.31849 1.76387 7.34669 1.83265L8.76335 5.23998C8.78987 5.30374 8.83346 5.35894 8.88933 5.39952C8.9452 5.4401 9.01119 5.46448 9.08002 5.46998L12.7587 5.76465C13.0914 5.79131 13.226 6.20665 12.9727 6.42331L10.17 8.82465C10.1177 8.86944 10.0786 8.92778 10.0572 8.99328C10.0358 9.05878 10.0329 9.12891 10.0487 9.19598L10.9054 12.786C10.9226 12.858 10.9181 12.9335 10.8924 13.003C10.8667 13.0724 10.821 13.1327 10.7611 13.1763C10.7012 13.2198 10.6297 13.2445 10.5557 13.2475C10.4817 13.2504 10.4085 13.2313 10.3454 13.1926L7.19535 11.2693C7.13651 11.2335 7.06893 11.2145 7.00002 11.2145C6.93111 11.2145 6.86353 11.2335 6.80469 11.2693L3.65469 13.1933C3.59152 13.232 3.51832 13.2511 3.44432 13.2481C3.37033 13.2452 3.29885 13.2204 3.23893 13.1769C3.17901 13.1334 3.13333 13.0731 3.10765 13.0036C3.08198 12.9342 3.07747 12.8587 3.09469 12.7866L3.95135 9.19598C3.96724 9.12891 3.96432 9.05876 3.94291 8.99325C3.92151 8.92773 3.88244 8.86939 3.83002 8.82465L1.02735 6.42331C0.971228 6.37505 0.930626 6.31128 0.910652 6.24C0.890678 6.16873 0.892224 6.09314 0.915096 6.02274C0.937968 5.95235 0.981145 5.89028 1.0392 5.84436C1.09725 5.79844 1.16758 5.7707 1.24135 5.76465L4.92002 5.46998C4.98885 5.46448 5.05483 5.4401 5.1107 5.39952C5.16657 5.35894 5.21017 5.30374 5.23669 5.23998L6.65335 1.83265Z" stroke-linecap="round" stroke-linejoin="round"  />';
				$output .= '</svg>';
				$output .= '<span>' . number_format( floatval( $product_data['rating'] ), 1 ) . '</span>';
				$output .= '</div>';
			}
			$output .= '</div>';

			if ( isset( $attributes['enableOptions']['cartButton'] ) && $attributes['enableOptions']['cartButton'] ) {
				$output    .= '<div class="post__cart-button" data-product-id="' . $product_data['id'] . '">';
				$output    .= '<svg class="loader-icon display-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.99998 2.66666C9.72665 2.66666 11.2626 3.48666 12.238 4.762L10.6666 6.33333H14.6666V2.33333L13.1873 3.81266C12.5631 3.03781 11.773 2.41284 10.8753 1.98376C9.97754 1.55467 8.99499 1.33241 7.99998 1.33333C4.31798 1.33333 1.33331 4.318 1.33331 8H2.66665C2.66665 6.58551 3.22855 5.22896 4.22874 4.22876C5.22894 3.22857 6.58549 2.66666 7.99998 2.66666ZM13.3333 8C13.3333 9.11533 12.9837 10.2026 12.3336 11.1089C11.6835 12.0151 10.7656 12.6948 9.7091 13.0522C8.65259 13.4096 7.51062 13.4268 6.44382 13.1014C5.37703 12.776 4.4391 12.1243 3.76198 11.238L5.33331 9.66666H1.33331V13.6667L2.81265 12.1873C3.43687 12.9622 4.22694 13.5872 5.12468 14.0162C6.02242 14.4453 7.00497 14.6676 7.99998 14.6667C11.682 14.6667 14.6666 11.682 14.6666 8H13.3333Z" />
				</svg>';
				$cart_label = isset( $attributes['cartButton']['label'] ) ? $attributes['cartButton']['label'] : '';
				$output    .= '<span class="cart-button__label">' . esc_html( $cart_label ) . '</span>';
				$output    .= '</div>';
			}

			$output .= '</div>';
		}
		$output .= '</li>';
	}
}

foreach ( (array) $attributes['tabs'] as $key => $tab_data ) {
	$args = array();

	if ( isset( $tab_data['category'] ) && ! empty( $tab_data['category'] ) ) {
		$args = array(
			'post_type'      => 'product', // Adjust to your custom post type if necessary.
			'tax_query'      => array(
				array(
					'taxonomy' => 'product_cat', // Adjust to your custom taxonomy if necessary.
					'field'    => 'term_id',
					'terms'    => $tab_data['category'],
				),
			),
			'posts_per_page' => $attributes['perPage'],
			'order'          => 'DESC',
			'order_by'       => 'date',
		);
	} else {
		$args = array(
			'post_type'      => 'product', // Adjust to your custom post type if necessary.
			'posts_per_page' => $attributes['perPage'],
			'order'          => 'DESC',
			'order_by'       => 'date',
		);
	}

	$query = new WP_Query( $args );

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

	$classes   = array();
	$classes[] = 'cozy-block-product-tab__body';
	$classes[] = 0 === $key ? 'active-content' : '';
	$output   .= '<ul class="' . implode( ' ', $classes ) . '">';
	$output   .= render_cozy_block_product_tab_data( $attributes, $products, $output );
	$output   .= '</ul>';
}
// End Tab Content

/* Toast */
$output .= '<div class="cozy-block-product-tab__toast visibility-hidden"></div>';

if ( isset( $attributes['enableOptions']['quickView'] ) && $attributes['enableOptions']['quickView'] ) {
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

wp_localize_script( 'cozy-block--product-tab--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--product-tab--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductTab( "' . esc_html( $client_id ) . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$font_families = array();

if ( isset( $attributes['tabStyles']['titleFontFamily'] ) && ! empty( $attributes['tabStyles']['titleFontFamily'] ) ) {
	$font_families[] = $attributes['tabStyles']['titleFontFamily'];
}
if ( isset( $attributes['tabStyles']['fontFamily'] ) && ! empty( $attributes['tabStyles']['fontFamily'] ) ) {
	$font_families[] = $attributes['tabStyles']['fontFamily'];
}
if ( isset( $attributes['saleBadge']['fontFamily'] ) && ! empty( $attributes['saleBadge']['fontFamily'] ) ) {
	$font_families[] = $attributes['saleBadge']['fontFamily'];
}
if ( isset( $attributes['productName']['fontFamily'] ) && ! empty( $attributes['productName']['fontFamily'] ) ) {
	$font_families[] = $attributes['productName']['fontFamily'];
}
if ( isset( $attributes['productPrice']['fontFamily'] ) && ! empty( $attributes['productPrice']['fontFamily'] ) ) {
	$font_families[] = $attributes['productPrice']['fontFamily'];
}
if ( isset( $attributes['productRating']['fontFamily'] ) && ! empty( $attributes['productRating']['fontFamily'] ) ) {
	$font_families[] = $attributes['productRating']['fontFamily'];
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

$render = sprintf( '<div class="cozy-block-wrapper"><div %1$s>%2$s</div></div>', $wrapper_attributes, $output );
echo $render;
