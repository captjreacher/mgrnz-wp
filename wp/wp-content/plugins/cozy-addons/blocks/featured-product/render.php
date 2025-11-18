<?php
$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['clientId'] ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['isUserLoggedIn'] = is_user_logged_in();
$attributes['cartNonce']      = wp_create_nonce( 'cozy_block_wishlist_add_to_cart' );
$attributes['wishlistNonce']  = wp_create_nonce( 'cozy_block_wishlist_update_user_wishlist' );
$attributes['ajaxUrl']        = admin_url( 'admin-ajax.php' );
$attributes['userID']         = get_current_user_id();
$attributes['sidebarNonce']   = wp_create_nonce( 'cozy_block_wishlist_render_data_sidebar' );
$attributes['quickViewNonce'] = wp_create_nonce( 'cozy_block_quick_view_render_data_lightbox' );

$col1 = $attributes['postOptions']['column'] <= 3 ? $attributes['postOptions']['column'] : 3;
$col2 = $attributes['postOptions']['column'] <= 2 ? $attributes['postOptions']['column'] : 2;

$header_box = array(
	'padding' => cozy_render_TRBL( 'padding', $attributes['headerBox']['padding'] ),
	'border'  => isset( $attributes['headerBox']['border'] ) ? cozy_render_TRBL( 'border', $attributes['headerBox']['border'] ) : '',
	'bg'      => isset( $attributes['headerBox']['color']['bg'] ) ? $attributes['headerBox']['color']['bg'] : '',
);

$heading = array(
	'padding'        => cozy_render_TRBL( 'padding', $attributes['headingStyles']['padding'] ),
	'border'         => isset( $attributes['headingStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['headingStyles']['border'] ) : '',
	'radius'         => cozy_render_TRBL( 'border-radius', $attributes['headingStyles']['radius'] ),
	'bg'             => isset( $attributes['headingStyles']['color']['bg'] ) ? $attributes['headingStyles']['color']['bg'] : '',
	'text'           => isset( $attributes['headingStyles']['color']['text'] ) ? $attributes['headingStyles']['color']['text'] : '',
	'clip_path'      => isset( $attributes['headingStyles']['clipPath'] ) ? $attributes['headingStyles']['clipPath'] : '',
	'letter_case'    => isset( $attributes['headingStyles']['letterCase'] ) ? $attributes['headingStyles']['letterCase'] : '',
	'decoration'     => isset( $attributes['headingStyles']['decoration'] ) ? $attributes['headingStyles']['decoration'] : '',
	'line_height'    => isset( $attributes['headingStyles']['lineHeight'] ) ? $attributes['headingStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['headingStyles']['letterSpacing'] ) ? $attributes['headingStyles']['letterSpacing'] : '',
);

$sub_heading = array(
	'padding'        => cozy_render_TRBL( 'padding', $attributes['subHeading']['padding'] ),
	'border'         => isset( $attributes['subHeading']['border'] ) ? cozy_render_TRBL( 'border', $attributes['subHeading']['border'] ) : '',
	'decoration'     => isset( $attributes['subHeading']['decoration'] ) ? $attributes['subHeading']['decoration'] : '',
	'line_height'    => isset( $attributes['subHeading']['lineHeight'] ) ? $attributes['subHeading']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['subHeading']['letterSpacing'] ) ? $attributes['subHeading']['letterSpacing'] : '',
	'text'           => isset( $attributes['subHeading']['color']['text'] ) ? $attributes['subHeading']['color']['text'] : '',
	'text_hover'     => isset( $attributes['subHeading']['color']['textHover'] ) ? $attributes['subHeading']['color']['textHover'] : '',
	'bg'             => isset( $attributes['subHeading']['color']['bg'] ) ? $attributes['subHeading']['color']['bg'] : '',
	'bg_hover'       => isset( $attributes['subHeading']['color']['bgHover'] ) ? $attributes['subHeading']['color']['bgHover'] : '',
	'border_hover'   => isset( $attributes['subHeading']['color']['borderHover'] ) ? $attributes['subHeading']['color']['borderHover'] : '',
);

$post_item = array(
	'padding'      => cozy_render_TRBL( 'padding', $attributes['postBoxStyles']['padding'] ),
	'border'       => isset( $attributes['postBoxStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['postBoxStyles']['border'] ) : '',
	'bg'           => isset( $attributes['postBoxStyles']['color']['bg'] ) ? $attributes['postBoxStyles']['color']['bg'] : '',
	'bg_hover'     => isset( $attributes['postBoxStyles']['color']['bgHover'] ) ? $attributes['postBoxStyles']['color']['bgHover'] : '',
	'border_hover' => isset( $attributes['postBoxStyles']['color']['borderHover'] ) ? $attributes['postBoxStyles']['color']['borderHover'] : '',
	'shadow'       => array(
		'horizontal' => isset( $attributes['postBoxStyles']['shadow']['horizontal'] ) ? $attributes['postBoxStyles']['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['postBoxStyles']['shadow']['vertical'] ) ? $attributes['postBoxStyles']['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['postBoxStyles']['shadow']['blur'] ) ? $attributes['postBoxStyles']['shadow']['blur'] : '',
		'spread'     => isset( $attributes['postBoxStyles']['shadow']['spread'] ) ? $attributes['postBoxStyles']['shadow']['spread'] : '',
		'color'      => isset( $attributes['postBoxStyles']['shadow']['color'] ) ? $attributes['postBoxStyles']['shadow']['color'] : '',
		'position'   => isset( $attributes['postBoxStyles']['shadow']['position'] ) ? $attributes['postBoxStyles']['shadow']['position'] : '',
	),
	'shadow_hover' => array(
		'horizontal' => isset( $attributes['postBoxStyles']['shadowHover']['horizontal'] ) ? $attributes['postBoxStyles']['shadowHover']['horizontal'] : '',
		'vertical'   => isset( $attributes['postBoxStyles']['shadowHover']['vertical'] ) ? $attributes['postBoxStyles']['shadowHover']['vertical'] : '',
		'blur'       => isset( $attributes['postBoxStyles']['shadowHover']['blur'] ) ? $attributes['postBoxStyles']['shadowHover']['blur'] : '',
		'spread'     => isset( $attributes['postBoxStyles']['shadowHover']['spread'] ) ? $attributes['postBoxStyles']['shadowHover']['spread'] : '',
		'color'      => isset( $attributes['postBoxStyles']['shadowHover']['color'] ) ? $attributes['postBoxStyles']['shadowHover']['color'] : '',
		'position'   => isset( $attributes['postBoxStyles']['shadowHover']['position'] ) ? $attributes['postBoxStyles']['shadowHover']['position'] : '',
	),
);

$post_image = array(
	'margin'   => array(
		'top'    => isset( $attributes['postOptions']['image']['margin']['top'] ) ? $attributes['postOptions']['image']['margin']['top'] : '',
		'bottom' => isset( $attributes['postOptions']['image']['margin']['bottom'] ) ? $attributes['postOptions']['image']['margin']['bottom'] : '',
	),
	'width'    => isset( $attributes['postOptions']['image']['width'] ) ? $attributes['postOptions']['image']['width'] : '',
	'height'   => isset( $attributes['postOptions']['image']['height'] ) ? $attributes['postOptions']['image']['height'] : '',
	'fit'      => isset( $attributes['postOptions']['image']['objectFit'] ) ? $attributes['postOptions']['image']['objectFit'] : '',
	'position' => isset( $attributes['postOptions']['image']['objectPosition'] ) ? $attributes['postOptions']['image']['objectPosition'] : '',
	'overlay'  => isset( $attributes['postOptions']['image']['overlay'] ) ? $attributes['postOptions']['image']['overlay'] : '',
);

$sale_badge = array(
	'padding'        => isset( $attributes['saleBadge']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['saleBadge']['padding'] ) : '',
	'border'         => isset( $attributes['saleBadge']['border'] ) ? cozy_render_TRBL( 'border', $attributes['saleBadge']['border'] ) : '',
	'left'           => 'left' === $attributes['saleBadge']['position'] ? $attributes['saleBadge']['left'] : '',
	'right'          => 'right' === $attributes['saleBadge']['position'] ? $attributes['saleBadge']['right'] : '',
	'decoration'     => isset( $attributes['saleBadge']['decoration'] ) ? $attributes['saleBadge']['decoration'] : '',
	'line_height'    => isset( $attributes['saleBadge']['lineHeight'] ) ? $attributes['saleBadge']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['saleBadge']['letterSpacing'] ) ? $attributes['saleBadge']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['saleBadge']['color']['text'] ) ? $attributes['saleBadge']['color']['text'] : '',
		'bg'   => isset( $attributes['saleBadge']['color']['bg'] ) ? $attributes['saleBadge']['color']['bg'] : '',
	),
);

$icon = array(
	'margin' => array(
		'top'    => 'top' === $attributes['icon']['align']['vertical'] ? $attributes['icon']['margin']['top'] . 'px' : '',
		'right'  => 'right' === $attributes['icon']['align']['horizontal'] ? $attributes['icon']['margin']['right'] : '',
		'bottom' => 'bottom' === $attributes['icon']['align']['vertical'] ? $attributes['icon']['margin']['top'] . 'px' : '',
		'left'   => 'left' === $attributes['icon']['align']['horizontal'] ? $attributes['icon']['margin']['left'] : '',
	),
	'border' => isset( $attributes['icon']['box']['border'] ) ? cozy_render_TRBL( 'border', $attributes['icon']['box']['border'] ) : '',
	'color'  => array(
		'text'          => isset( $attributes['icon']['color']['text'] ) ? $attributes['icon']['color']['text'] : '',
		'text_hover'    => isset( $attributes['icon']['color']['textHover'] ) ? $attributes['icon']['color']['textHover'] : '',
		'text_active'   => isset( $attributes['icon']['color']['textActive'] ) ? $attributes['icon']['color']['textActive'] : '',
		'bg'            => isset( $attributes['icon']['color']['bg'] ) ? $attributes['icon']['color']['bg'] : '',
		'bg_hover'      => isset( $attributes['icon']['color']['bgHover'] ) ? $attributes['icon']['color']['bgHover'] : '',
		'bg_active'     => isset( $attributes['icon']['color']['bgActive'] ) ? $attributes['icon']['color']['bgActive'] : '',
		'border_hover'  => isset( $attributes['icon']['color']['borderHover'] ) ? $attributes['icon']['color']['borderHover'] : '',
		'border_active' => isset( $attributes['icon']['color']['borderActive'] ) ? $attributes['icon']['color']['borderActive'] : '',
	),
);

$post_title = array(
	'decoration'     => isset( $attributes['postOptions']['title']['decoration'] ) ? $attributes['postOptions']['title']['decoration'] : '',
	'line_height'    => isset( $attributes['postOptions']['title']['lineHeight'] ) ? $attributes['postOptions']['title']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['postOptions']['title']['letterSpacing'] ) ? $attributes['postOptions']['title']['letterSpacing'] : '',
	'color'          => array(
		'text'       => isset( $attributes['postOptions']['title']['color']['text'] ) ? $attributes['postOptions']['title']['color']['text'] : '',
		'text_hover' => isset( $attributes['postOptions']['title']['color']['textHover'] ) ? $attributes['postOptions']['title']['color']['textHover'] : '',
	),
);

$product_category = array(
	'padding'        => isset( $attributes['productCategory']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['productCategory']['padding'] ) : '',
	'border'         => isset( $attributes['productCategory']['border'] ) ? cozy_render_TRBL( 'border', $attributes['productCategory']['border'] ) : '',
	'decoration'     => isset( $attributes['productCategory']['decoration'] ) ? $attributes['productCategory']['decoration'] : '',
	'line_height'    => isset( $attributes['productCategory']['lineHeight'] ) ? $attributes['productCategory']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['productCategory']['letterSpacing'] ) ? $attributes['productCategory']['letterSpacing'] : '',
	'color'          => array(
		'text'         => isset( $attributes['productCategory']['color']['text'] ) ? $attributes['productCategory']['color']['text'] : '',
		'text_hover'   => isset( $attributes['productCategory']['color']['textHover'] ) ? $attributes['productCategory']['color']['textHover'] : '',
		'bg'           => isset( $attributes['productCategory']['color']['bg'] ) ? $attributes['productCategory']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['productCategory']['color']['bgHover'] ) ? $attributes['productCategory']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['productCategory']['color']['borderHover'] ) ? $attributes['productCategory']['color']['borderHover'] : '',
	),
);

$product_price = array(
	'letter_case'    => isset( $attributes['productPrice']['letterCase'] ) ? $attributes['productPrice']['letterCase'] : '',
	'decoration'     => isset( $attributes['productPrice']['decoration'] ) ? $attributes['productPrice']['decoration'] : '',
	'line_height'    => isset( $attributes['productPrice']['lineHeight'] ) ? $attributes['productPrice']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['productPrice']['letterSpacing'] ) ? $attributes['productPrice']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['productPrice']['color']['text'] ) ? $attributes['productPrice']['color']['text'] : '',
	),
);

$product_summary = array(
	'letter_case'    => isset( $attributes['productSummary']['letterCase'] ) ? $attributes['productSummary']['letterCase'] : '',
	'decoration'     => isset( $attributes['productSummary']['decoration'] ) ? $attributes['productSummary']['decoration'] : '',
	'line_height'    => isset( $attributes['productSummary']['lineHeight'] ) ? $attributes['productSummary']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['productSummary']['letterSpacing'] ) ? $attributes['productSummary']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['productSummary']['color']['text'] ) ? $attributes['productSummary']['color']['text'] : '',
	),
);

$cart_btn = array(
	'width'          => isset( $attributes['cartButton']['width'] ) ? $attributes['cartButton']['width'] : '',
	'padding'        => isset( $attributes['cartButton']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['cartButton']['padding'] ) : '',
	'border'         => isset( $attributes['cartButton']['border'] ) ? cozy_render_TRBL( 'border', $attributes['cartButton']['border'] ) : '',
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

$nav = array(
	'border' => isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '',
	'color'  => array(
		'icon'         => isset( $attributes['navigation']['color']['icon'] ) ? $attributes['navigation']['color']['icon'] : '',
		'icon_hover'   => isset( $attributes['navigation']['color']['iconHover'] ) ? $attributes['navigation']['color']['iconHover'] : '',
		'bg'           => isset( $attributes['navigation']['color']['bg'] ) ? $attributes['navigation']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['navigation']['color']['bgHover'] ) ? $attributes['navigation']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['navigation']['color']['borderHover'] ) ? $attributes['navigation']['color']['borderHover'] : '',
	),
);

$bullets = array(
	'active' => array(
		'outline' => isset( $attributes['pagination']['active']['border'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['active']['border'] ) : '',
	),
	'color'  => array(
		'default'       => isset( $attributes['pagination']['color']['default'] ) ? $attributes['pagination']['color']['default'] : '',
		'default_hover' => isset( $attributes['pagination']['color']['defaultHover'] ) ? $attributes['pagination']['color']['defaultHover'] : '',
		'active'        => isset( $attributes['pagination']['color']['active'] ) ? $attributes['pagination']['color']['active'] : '',
		'active_hover'  => isset( $attributes['pagination']['color']['activeHover'] ) ? $attributes['pagination']['color']['activeHover'] : '',
	),
	'left'   => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? $attributes['pagination']['left'] : '',
	'right'  => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? $attributes['pagination']['right'] : '',
);

$block_styles = "
#$block_id .cozy-block-featured-product__header {
    {$header_box['padding']}
    margin-top: {$attributes['headerBox']['margin']['top']};
    margin-bottom: {$attributes['headerBox']['margin']['bottom']};
    {$header_box['border']}
    border-radius: {$attributes['headerBox']['radius']};
    background-color: {$header_box['bg']};
    gap: {$attributes['headingGap']};
	justify-content: {$attributes['headerBox']['tabAlign']};
}

#$block_id .cozy-block-featured-product__heading {
    {$heading['padding']}
    {$heading['border']}
    {$heading['radius']}
    font-size: clamp(20px, calc(3vw + 4px), {$attributes['headingStyles']['font']['size']});
    font-weight: {$attributes['headingStyles']['font']['weight']};
    font-family: {$attributes['headingStyles']['font']['family']};
    background-color: {$heading['bg']};
    color: {$heading['text']};
	clip-path: {$heading['clip_path']};
	text-transform: {$heading['letter_case']};
	text-decoration: {$heading['decoration']};
	line-height: {$heading['line_height']};
	letter-spacing: {$heading['letter_spacing']};
}

#$block_id .cozy-block-featured-product__sub-heading {
    {$sub_heading['padding']}
    {$sub_heading['border']}
	border-radius: {$attributes['subHeading']['radius']};
    font-size: clamp(18px, calc(3vw + 4px), {$attributes['subHeading']['font']['size']});
    font-weight: {$attributes['subHeading']['font']['weight']};
    font-family: {$attributes['subHeading']['font']['family']};
	text-transform: {$attributes['subHeading']['letterCase']};
    text-decoration: {$sub_heading['decoration']};
    line-height: {$sub_heading['line_height']};
    letter-spacing: {$sub_heading['letter_spacing']};
    background-color: {$sub_heading['bg']};
}
#$block_id .cozy-block-featured-product__sub-heading, #$block_id .cozy-block-featured-product__sub-heading a {
	color: {$sub_heading['text']};
}
#$block_id .cozy-block-featured-product__sub-heading:hover { 
	background-color: {$sub_heading['bg_hover']};
	border-color: {$sub_heading['border_hover']};
}
#$block_id .cozy-block-featured-product__sub-heading:hover, #$block_id .cozy-block-featured-product__sub-heading:hover a {
	color: {$sub_heading['text_hover']};
}

#$block_id .cozy-block-featured-product__posts {
    text-align: {$attributes['postOptions']['textAlign']};
}
#$block_id:not(.display-carousel) .cozy-block-featured-product__posts:not(.has-masonry) {
    grid-template-columns: repeat({$attributes['postOptions']['column']}, 1fr);
    gap: {$attributes['postOptions']['gap']};
}
#$block_id:not(.display-carousel) .cozy-block-featured-product__posts.has-masonry {
    column-count: {$attributes['postOptions']['column']};
    column-gap: {$attributes['postOptions']['gap']};
}
#$block_id:not(.display-carousel) .cozy-block-featured-product__posts.has-masonry .cozy-block-featured-product__post-item {
    margin-bottom: {$attributes['postOptions']['gap']};
}
@media only screen and (max-width: 1024px) {
	#$block_id:not(.display-carousel) .cozy-block-featured-product__posts:not(.has-masonry) {
		grid-template-columns: repeat({$col1}, 1fr) !important;
	}
	#$block_id:not(.display-carousel) .cozy-block-featured-product__posts.has-masonry {
		column-count: {$col1} !important;
	}
}
@media only screen and (max-width: 767px) {
	#$block_id:not(.display-carousel) .cozy-block-featured-product__posts:not(.has-masonry) {
		grid-template-columns: repeat({$col2}, 1fr) !important;
	}
	#$block_id:not(.display-carousel) .cozy-block-featured-product__posts.has-masonry {
		column-count: {$col2} !important;
	}
}
@media only screen and (max-width: 420px) {
	#$block_id:not(.display-carousel) .cozy-block-featured-product__posts:not(.has-masonry) {
		grid-template-columns: repeat(1, 1fr) !important;
	}
	#$block_id:not(.display-carousel) .cozy-block-featured-product__posts.has-masonry {
		column-count: 1 !important;
	}
}

#$block_id .cozy-block-featured-product__post-item {
	{$post_item['padding']}
	margin-top: {$attributes['postBoxStyles']['margin']['top']};
	margin-bottom: {$attributes['postBoxStyles']['margin']['bottom']};
	{$post_item['border']}
	border-radius: {$attributes['postBoxStyles']['radius']};
	background-color: {$post_item['bg']};
}
#$block_id .cozy-block-featured-product__post-item.has-box-shadow {
	box-shadow: {$post_item['shadow']['horizontal']}px {$post_item['shadow']['vertical']}px {$post_item['shadow']['blur']}px {$post_item['shadow']['spread']}px {$post_item['shadow']['color']} {$post_item['shadow']['position']}; 
}
#$block_id .cozy-block-featured-product__post-item:hover {
	background-color: {$post_item['bg_hover']};
	border-color: {$post_item['border_hover']};
}
#$block_id .cozy-block-featured-product__post-item.has-hover-box-shadow:hover {
	box-shadow: {$post_item['shadow_hover']['horizontal']}px {$post_item['shadow_hover']['vertical']}px {$post_item['shadow_hover']['blur']}px {$post_item['shadow_hover']['spread']}px {$post_item['shadow_hover']['color']} {$post_item['shadow_hover']['position']}; 
}

#$block_id .post__image {
	margin-top: {$post_image['margin']['top']};
	margin-bottom: {$post_image['margin']['bottom']};
	max-height: {$post_image['height']};
    max-width: {$post_image['width']};
    border-radius: {$attributes['postOptions']['image']['radius']};
}
#$block_id .post__image img {
	height: {$post_image['height']};
	border-radius: {$attributes['postOptions']['image']['radius']};
	object-fit: {$post_image['fit']};
	object-position: {$post_image['position']};
}
@media only screen and (max-width: 1024px) {
	#$block_id .post__image img {
		max-height: {$post_image['height']};
	}
}

#$block_id .post__image-background {
	border-radius: {$attributes['postOptions']['image']['radius']};
	background-color: {$post_image['overlay']};
}

#$block_id .cozy-block-featured-product__sale-badge {
    margin-top: {$attributes['saleBadge']['top']}px;
    margin-left: {$sale_badge['left']}px;
    margin-right: {$sale_badge['right']}px;
    {$sale_badge['padding']}
    {$sale_badge['border']}
    border-radius: {$attributes['saleBadge']['radius']};
    transform: rotate({$attributes['saleBadge']['rotate']}deg);
    font-size: {$attributes['saleBadge']['font']['size']};
    font-weight: {$attributes['saleBadge']['font']['weight']};
    font-family: {$attributes['saleBadge']['font']['family']};
    text-transform: {$attributes['saleBadge']['letterCase']};
    text-decoration: {$sale_badge['decoration']};
    line-height: {$sale_badge['line_height']};
    letter-spacing: {$sale_badge['letter_spacing']};
    color: {$sale_badge['color']['text']};
    background-color: {$sale_badge['color']['bg']};
}

#$block_id .cozy-block-featured-product__icon-container {
    margin-top: {$icon['margin']['top']};
    margin-right: {$icon['margin']['right']};
    margin-bottom: {$icon['margin']['bottom']};
    margin-left: {$icon['margin']['left']};
    gap: {$attributes['icon']['gap']};
}
#$block_id .cozy-block-featured-product__icon-wrapper {
	width: {$attributes['icon']['box']['width']};
	height: {$attributes['icon']['box']['height']};
	{$icon['border']}
    border-radius: {$attributes['icon']['box']['radius']};
    background-color: {$icon['color']['bg']};
}
#$block_id .cozy-block-featured-product__icon-wrapper:hover {
    background-color: {$icon['color']['bg_hover']};
    border-color: {$icon['color']['border_hover']};
}
#$block_id .cozy-block-featured-product__icon-wrapper.is-active {
    background-color: {$icon['color']['bg_active']};
    border-color: {$icon['color']['border_active']};
}
#$block_id .cozy-block-featured-product__icon-wrapper svg {
    width: {$attributes['icon']['size']};
    height: {$attributes['icon']['size']};
    fill: {$icon['color']['text']};
}
#$block_id .cozy-block-featured-product__icon-wrapper:hover svg {
    fill: {$icon['color']['text_hover']};
}
#$block_id .cozy-block-featured-product__icon-wrapper.is-active svg {
    fill: {$icon['color']['text_active']};
}

#$block_id .post__categories {
	gap: {$attributes['productCategory']['gap']};
	margin-top: {$attributes['productCategory']['margin']['top']};
    margin-bottom: {$attributes['productCategory']['margin']['bottom']};
	font-size: {$attributes['productCategory']['font']['size']};
    font-weight: {$attributes['productCategory']['font']['weight']};
    font-family: {$attributes['productCategory']['font']['family']};
    text-transform: {$attributes['productCategory']['letterCase']};
	line-height: {$product_category['line_height']};
	letter-spacing: {$product_category['letter_spacing']};
    justify-content: {$attributes['postOptions']['textAlign']};
}
#$block_id .post__categories a {
	{$product_category['padding']}
	{$product_category['border']}
	border-radius: {$attributes['productCategory']['radius']};
	text-decoration: {$product_category['decoration']};
	color: {$product_category['color']['text']};
	background-color: {$product_category['color']['bg']};
}
#$block_id .post__categories a:hover {
	color: {$product_category['color']['text_hover']};
	background-color: {$product_category['color']['bg_hover']};
	border-color: {$product_category['color']['border_hover']};
}

#$block_id .post__title {
	margin-top: {$attributes['postOptions']['title']['margin']['top']};
	margin-bottom: {$attributes['postOptions']['title']['margin']['bottom']};
	font-size: clamp(16px, calc(3vw + 4px), {$attributes['postOptions']['title']['font']['size']});
	font-weight: {$attributes['postOptions']['title']['font']['weight']};
	font-family: {$attributes['postOptions']['title']['font']['family']};
	text-transform: {$attributes['postOptions']['title']['letterCase']};
	line-height: {$post_title['line_height']};
	letter-spacing: {$post_title['letter_spacing']};
}
#$block_id .post__title a {
	text-decoration: {$post_title['decoration']};
	color: {$post_title['color']['text']};
}
#$block_id .post__title:hover a {
	color: {$post_title['color']['text_hover']};
}

#$block_id .post__price {
	margin-top: {$attributes['productPrice']['margin']['top']};
	margin-bottom: {$attributes['productPrice']['margin']['bottom']};
	font-size: {$attributes['productPrice']['font']['size']};
	font-weight: {$attributes['productPrice']['font']['weight']};
	font-family: {$attributes['productPrice']['font']['family']};
	text-transform: {$product_price['letter_case']};
	text-decoration: {$product_price['decoration']};
	line-height: {$product_price['line_height']};
	letter-spacing: {$product_price['letter_spacing']};
	color: {$product_price['color']['text']};
}
#$block_id .post__price * {
	color: {$product_price['color']['text']};
}

#$block_id .post__content {
	margin-top: {$attributes['productSummary']['margin']['top']};
	margin-bottom: {$attributes['productSummary']['margin']['bottom']};
	font-size: {$attributes['productSummary']['font']['size']};
	font-weight: {$attributes['productSummary']['font']['weight']};
	font-family: {$attributes['productSummary']['font']['family']};
	text-transform: {$product_summary['letter_case']};
	text-decoration: {$product_summary['decoration']};
	line-height: {$product_summary['line_height']};
	letter-spacing: {$product_summary['letter_spacing']};
	color: {$product_summary['color']['text']};
}

#$block_id .post__cart-button {
	width: {$cart_btn['width']};
    margin-top: {$attributes['cartButton']['margin']['top']};
    margin-bottom: {$attributes['cartButton']['margin']['bottom']};
    {$cart_btn['padding']}
    {$cart_btn['border']}
    border-radius: {$attributes['cartButton']['radius']};
    font-size: {$attributes['cartButton']['font']['size']};
    font-weight: {$attributes['cartButton']['font']['weight']};
    font-family: {$attributes['cartButton']['font']['family']};
    text-transform: {$attributes['cartButton']['letterCase']};
	text-decoration: {$cart_btn['decoration']};
	line-height: {$cart_btn['line_height']};
	letter-spacing: {$cart_btn['letter_spacing']};
    color: {$cart_btn['color']['text']};
    background-color: {$cart_btn['color']['bg']};
}
#$block_id .post__cart-button:hover {
    color: {$cart_btn['color']['text_hover']};
    background-color: {$cart_btn['color']['bg_hover']};
    border-color: {$cart_btn['color']['border_hover']};
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
    font-size: {$attributes['navigation']['size']};
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
    width: {$attributes['navigation']['boxWidth']};
    height: {$attributes['navigation']['boxHeight']};
    {$nav['border']}
    border-radius: {$attributes['navigation']['radius']};
    color: {$nav['color']['icon']};
    background-color: {$nav['color']['bg']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
    color: {$nav['color']['icon_hover']};
    background-color: {$nav['color']['bg_hover']};
    border-color: {$nav['color']['border_hover']};
}

#$block_id .swiper-pagination {
    bottom: {$attributes['pagination']['bottom']}px;
    text-align: {$attributes['pagination']['align']};
    padding-left: {$bullets['left']};
    padding-right: {$bullets['right']};
}
#$block_id .swiper-pagination-bullet {
    width: {$attributes['pagination']['width']};
    height: {$attributes['pagination']['height']};
    border-radius: {$attributes['pagination']['radius']};
    background-color: {$bullets['color']['default']};
}
#$block_id .swiper-pagination-horizontal .swiper-pagination-bullet {
    margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$attributes['pagination']['gap']});
}
#$block_id .swiper-pagination-bullet:hover {
    background-color: {$bullets['color']['default_hover']};
}
#$block_id .swiper-pagination-bullet-active {
    width: {$attributes['pagination']['active']['width']};
    height: {$attributes['pagination']['active']['height']};
    border-radius: {$attributes['pagination']['active']['radius']};
    {$bullets['active']['outline']}
    outline-offset: {$attributes['pagination']['active']['offset']};
    background-color: {$bullets['color']['active']};
}
#$block_id .swiper-pagination-bullet-active:hover {
    background-color: {$bullets['color']['active_hover']};
}
";

$classes   = array();
$classes[] = 'cozy-block-featured-product';
$classes[] = 'display-' . $attributes['display'];
$classes[] = 'carousel' === $attributes['display'] && $attributes['navigation']['enabled'] && $attributes['navigation']['hoverShow'] ? 'has-nav-hover-show' : '';
$output    = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';

if ( $attributes['enableOptions']['heading'] || $attributes['enableOptions']['subHeading'] ) {
	$output .= '<article class="cozy-block-featured-product__header">';
	if ( $attributes['enableOptions']['heading'] ) {
		$output .= sprintf( '<%1$s class="cozy-block-featured-product__heading">%2$s</%1$s>', $attributes['headingTag'], $attributes['headingLabel'] );
	}
	if ( $attributes['enableOptions']['subHeading'] ) {
		$output .= sprintf( '<%1$s class="cozy-block-featured-product__sub-heading">%2$s</%1$s>', $attributes['subHeading']['tag'], $attributes['subHeading']['label'] );
	}
	$output .= '</article>';
}

$classes   = array();
$classes[] = 'cozy-block-featured-product__body';
$classes[] = 'carousel' === $attributes['display'] ? 'swiper-container' : '';
$output   .= '<div class="' . implode( ' ', $classes ) . '">';

if ( ! function_exists( 'get_cozy_block_featured_product_data' ) ) {
	function get_cozy_block_featured_product_data( $featured_post_args = array() ) {
		if ( ! empty( $featured_post_args ) ) {
			$latest_posts         = new \WP_Query( $featured_post_args );
			$additional_post_data = array();
			foreach ( $latest_posts->posts as $post ) {
				$product_id = $post->ID;

				$product = wc_get_product( $product_id );

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

				$post_data = (array) $product; // Convert WP_Post object to an array.

				// Get categories and their links.
				$categories         = get_the_terms(
					$product_id,
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

				$post_data['ID']                  = $product_id;
				$post_data['image_url']           = get_the_post_thumbnail_url( $product_id );
				$post_data['post_link']           = get_permalink( $product_id );
				$post_data['post_title']          = get_the_title( $product_id );
				$post_data['post_content']        = get_the_content( '', '', $product_id );
				$post_data['price']               = $price;
				$post_data['discount_amt']        = $discount_amt;
				$post_data['discount_percentage'] = $discount_percentage;
				$post_data['on_sale']             = $product->is_on_sale();
				$post_data['rating']              = $product->get_average_rating();
				$post_data['review_count']        = $product->get_review_count();
				$post_data['categories']          = $product_categories;

				$additional_post_data[] = $post_data;
			}

			wp_reset_postdata();

			return $additional_post_data;
		}

		return array();
	}
}
/* Posts Render */
if ( ! function_exists( 'render_cozy_block_featured_product_data' ) ) {
	function render_cozy_block_featured_product_data( $attributes, $post_data, &$output ) {
		$classes   = array();
		$classes[] = 'cozy-block-featured-product__post-item';
		$classes[] = 'carousel' === $attributes['display'] ? 'swiper-slide' : '';
		$classes[] = $attributes['postBoxStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$classes[] = $attributes['postBoxStyles']['shadow']['enabled'] ? 'has-box-shadow' : '';
		$classes[] = $attributes['postBoxStyles']['shadowHover']['enabled'] ? 'has-hover-box-shadow' : '';
		$output   .= '<li class="' . implode( ' ', $classes ) . '" data-product-id="' . $post_data['ID'] . '">';

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

		if ( $attributes['enableOptions']['postImage'] && ! empty( $post_data['image_url'] ) ) {
			$classes   = array();
			$classes[] = 'post__image';
			$classes[] = $attributes['postOptions']['image']['hoverEffect'] ? 'has-hover-effect' : '';
			$output   .= '<figure class="' . implode( ' ', $classes ) . '">';
			$output   .= '<img src="' . esc_url( $post_data['image_url'] ) . '" />';
			if ( $attributes['enableOptions']['saleBadge'] && $post_data['on_sale'] ) {
				$classes   = array();
				$classes[] = 'cozy-block-featured-product__sale-badge';
				$classes[] = 'position-' . $attributes['saleBadge']['position'];
				switch ( $attributes['saleBadge']['contentType'] ) {
					case 'amount':
						if ( isset( $post_data['discount_amt'] ) && ! empty( $post_data['discount_amt'] ) ) {
							$output .= '<span class="' . implode( ' ', $classes ) . '">';
							$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
							$output .= '<span>';
							$output .= $post_data['discount_amt'];
							$output .= '</span>';
							$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
							$output .= '</span>';
						}
						break;

					case 'percentage':
						if ( isset( $post_data['discount_percentage'] ) && ! empty( $post_data['discount_percentage'] ) ) {
							$output .= '<span class="' . implode( ' ', $classes ) . '">';
							$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
							$output .= '<span>';
							$output .= $post_data['discount_percentage'];
							$output .= '</span>';
							$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
							$output .= '</span>';
						}
						break;

					default:
						$output .= '<span class="' . implode( ' ', $classes ) . '">';
						$output .= esc_html( $attributes['saleBadge']['labelBefore'] );
						$output .= '<span>';
						$output .= esc_html__( 'Sale', 'cozy-addons' );
						$output .= '</span>';
						$output .= esc_html( $attributes['saleBadge']['labelAfter'] );
						$output .= '</span>';
				}
			}

			$has_post_link = isset( $attributes['enableOptions']['imgLinkPost'] ) && $attributes['enableOptions']['imgLinkPost'] ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
			$open_new_tab  = isset( $attributes['enableOptions']['imgLinkPost'], $attributes['enableOptions']['imgLinkNewTab'] ) && $attributes['enableOptions']['imgLinkPost'] && $attributes['enableOptions']['imgLinkNewTab'] ? '_blank' : '';
			$output       .= '<a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">';
			$output       .= '<span class="post__image-background">';
			$output       .= '</span>';
			$output       .= '</a>';

			if ( $attributes['enableOptions']['cart'] || $attributes['enableOptions']['wishlist'] || $attributes['enableOptions']['quickView'] ) {
				$classes   = array();
				$classes[] = 'cozy-block-featured-product__icon-container';
				$classes[] = 'direction-' . $attributes['icon']['direction'];
				$classes[] = 'align-vertical-' . $attributes['icon']['align']['vertical'];
				$classes[] = 'align-horizontal-' . $attributes['icon']['align']['horizontal'];
				$classes[] = $attributes['icon']['hoverShow'] ? 'has-hover-show' : '';
				$output   .= '<div class="' . implode( ' ', $classes ) . '">';
				if ( $attributes['enableOptions']['cart'] ) {
					$output .= '<div class="cozy-block-featured-product__icon-wrapper cart__icon-wrapper" data-product-id="' . $post_data['ID'] . '">';
					$output .= '<svg viewBox="0 0 12 15" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
					$output .= '<path d="M4 3.99999C4 3.46956 4.21071 2.96085 4.58579 2.58578C4.96086 2.2107 5.46957 1.99999 6 1.99999C6.53043 1.99999 7.03914 2.2107 7.41421 2.58578C7.78929 2.96085 8 3.46956 8 3.99999H4ZM2.66667 3.99999H0.666667C0.489856 3.99999 0.320286 4.07023 0.195262 4.19525C0.0702379 4.32028 0 4.48985 0 4.66666V14C0 14.1768 0.0702379 14.3464 0.195262 14.4714C0.320286 14.5964 0.489856 14.6667 0.666667 14.6667H11.3333C11.5101 14.6667 11.6797 14.5964 11.8047 14.4714C11.9298 14.3464 12 14.1768 12 14V4.66666C12 4.48985 11.9298 4.32028 11.8047 4.19525C11.6797 4.07023 11.5101 3.99999 11.3333 3.99999H9.33333C9.33333 3.11593 8.98214 2.26809 8.35702 1.64297C7.7319 1.01785 6.88406 0.666656 6 0.666656C5.11595 0.666656 4.2681 1.01785 3.64298 1.64297C3.01786 2.26809 2.66667 3.11593 2.66667 3.99999ZM4 6.66666C4 7.19709 4.21071 7.7058 4.58579 8.08087C4.96086 8.45594 5.46957 8.66666 6 8.66666C6.53043 8.66666 7.03914 8.45594 7.41421 8.08087C7.78929 7.7058 8 7.19709 8 6.66666H9.33333C9.33333 7.55071 8.98214 8.39856 8.35702 9.02368C7.7319 9.6488 6.88406 9.99999 6 9.99999C5.11595 9.99999 4.2681 9.6488 3.64298 9.02368C3.01786 8.39856 2.66667 7.55071 2.66667 6.66666H4Z" />';
					$output .= '</svg>';
					$output .= '</div>';
				}

				if ( $attributes['enableOptions']['wishlist'] ) {
					$wishlist_user_meta = get_user_meta( $attributes['userID'], 'cozy_block_wishlist_data', true );
					$classes            = array();
					$classes[]          = 'cozy-block-featured-product__icon-wrapper';
					$classes[]          = 'wishlist__icon-wrapper';
					$classes[]          = is_array( $wishlist_user_meta ) && is_user_logged_in() && in_array( intval( $post_data['ID'] ), $wishlist_user_meta ) ? 'is-active' : '';
					$output            .= '<div class="' . implode( ' ', $classes ) . '" data-product-id="' . $post_data['ID'] . '">';
					$output            .= '<svg viewBox="0 0 14 12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
					$output            .= '<path d="M12.6411 0.820517C11.1427 -0.430353 8.91423 -0.205357 7.53886 1.1848L7.0002 1.72854L6.46154 1.1848C5.08891 -0.205357 2.8577 -0.430353 1.35929 0.820517C-0.357861 2.25621 -0.448093 4.83294 1.0886 6.38917L6.37951 11.7409C6.7213 12.0864 7.27637 12.0864 7.61816 11.7409L12.9091 6.38917C14.4485 4.83294 14.3583 2.25621 12.6411 0.820517Z" />';
					$output            .= '</svg>';
					$output            .= '</div>';
				}

				if ( $attributes['enableOptions']['quickView'] ) {
					$output .= '<div class="cozy-block-featured-product__icon-wrapper quick-view__icon-wrapper" data-product-id="' . $post_data['ID'] . '">';
					$output .= '<svg viewBox="0 0 18 12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">';
					$output .= '<path d="M17.8913 5.54375C16.1966 2.23719 12.8416 0 9 0C5.15843 0 1.80249 2.23875 0.108733 5.54406C0.0372461 5.68547 0 5.8417 0 6.00016C0 6.15861 0.0372461 6.31484 0.108733 6.45625C1.80342 9.76281 5.15843 12 9 12C12.8416 12 16.1975 9.76125 17.8913 6.45594C17.9628 6.31453 18 6.1583 18 5.99984C18 5.84139 17.9628 5.68516 17.8913 5.54375ZM9 10.5C8.10998 10.5 7.23995 10.2361 6.49993 9.74161C5.75991 9.24715 5.18313 8.54434 4.84253 7.72208C4.50194 6.89981 4.41282 5.99501 4.58646 5.12209C4.76009 4.24918 5.18868 3.44736 5.81801 2.81802C6.44735 2.18868 7.24918 1.7601 8.12209 1.58647C8.99501 1.41283 9.89981 1.50195 10.7221 1.84254C11.5443 2.18314 12.2472 2.75991 12.7416 3.49993C13.2361 4.23995 13.5 5.10998 13.5 6C13.5003 6.59103 13.3841 7.17632 13.1581 7.72242C12.932 8.26851 12.6005 8.7647 12.1826 9.18262C11.7647 9.60054 11.2685 9.932 10.7224 10.158C10.1763 10.3841 9.59103 10.5003 9 10.5ZM9 3C8.73223 3.00374 8.46618 3.04358 8.20906 3.11844C8.42101 3.40646 8.52271 3.7609 8.49574 4.11748C8.46876 4.47406 8.31489 4.80917 8.06203 5.06203C7.80917 5.31489 7.47406 5.46876 7.11748 5.49574C6.7609 5.52271 6.40646 5.42101 6.11843 5.20906C5.95442 5.81331 5.98403 6.45377 6.20308 7.04031C6.42214 7.62685 6.81961 8.12993 7.33956 8.47874C7.85951 8.82754 8.47575 9.00452 9.10155 8.98475C9.72735 8.96498 10.3312 8.74946 10.8281 8.36853C11.325 7.9876 11.6899 7.46044 11.8715 6.86125C12.0531 6.26205 12.0422 5.62099 11.8404 5.0283C11.6386 4.43561 11.256 3.92114 10.7465 3.55728C10.2369 3.19343 9.62611 2.99853 9 3Z" />';
					$output .= '</svg>';
					$output .= '</div>';
				}
				$output .= '</div>';
			}
			$output .= '</figure>';
		}

		$output .= '<div class="post__content-wrapper">';

		if ( $attributes['enableOptions']['productCategories'] && ! empty( $post_data['categories'] ) ) {
			$classes      = array();
			$classes[]    = 'post__categories';
			$classes[]    = $attributes['productCategory']['hoverEffect'] ? 'has-hover-effect' : '';
			$output      .= '<div class="' . implode( ' ', $classes ) . '">';
			$open_new_tab = isset( $attributes['enableOptions']['linkCat'], $attributes['enableOptions']['catNewTab'] ) && $attributes['enableOptions']['linkCat'] && $attributes['enableOptions']['catNewTab'] ? '_blank' : '';
			foreach ( $post_data['categories'] as $cat_data ) {
				$has_cat_link = isset( $attributes['enableOptions']['linkCat'] ) && $attributes['enableOptions']['linkCat'] ? 'href="' . esc_url( $cat_data['link'] ) . '"' : '';
				$output      .= '<a ' . $has_cat_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $cat_data['name'] ) . '</a>';
			}
			$output .= '</div>';
		}

		$has_post_link = isset( $attributes['enableOptions']['titleLinkPost'] ) && $attributes['enableOptions']['titleLinkPost'] ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
		$open_new_tab  = isset( $attributes['enableOptions']['titleLinkPost'], $attributes['enableOptions']['titleLinkNewTab'] ) && $attributes['enableOptions']['titleLinkPost'] && $attributes['enableOptions']['titleLinkNewTab'] ? '_blank' : '';
		$output       .= '<h2 class="post__title"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $post_data['post_title'] ) . '</a></h2>';

		$justify_content = $attributes['postOptions']['textAlign'];

		if ( $attributes['enableOptions']['productPrice'] && $attributes['enableOptions']['productRating'] ) {
			$justify_content = 'space-between';
		}

		$output .= '<div style="display:flex;align-items:center;justify-content:' . $justify_content . ';flex-wrap:wrap;">';
		if ( $attributes['enableOptions']['productPrice'] ) {
			$output .= '<p class="post__price">';
			$output .= $post_data['price'];
			$output .= '</p>';
		}

		if ( $attributes['enableOptions']['productRating'] && $post_data['review_count'] > 0 ) {
			$rating_percent = ( $post_data['rating'] / 5 * 100 ) . '%';
			$output        .= '<div style="font-size:14px;">';
			$output        .= '<div class="post__rating" style="display:inline;background: linear-gradient(90deg, #fcb900 ' . $rating_percent . ', rgba(0, 0, 0, 0.2) ' . $rating_percent . ')">';
			$output        .= '★★★★★';
			$output        .= '</div>';
			$output        .= '<span style="display:block;">(' . number_format( floatval( $post_data['rating'] ), 1 ) . ' out of ' . $post_data['review_count'] . ' ' . _n( 'review', 'reviews', $post_data['review_count'], 'cozy-addons' ) . '.)</span>';
			$output        .= '</div>';
		}
		$output .= '</div>';

		if ( $attributes['enableOptions']['postContent'] ) {
			$output .= '<div class="post__content">';
			$output .= cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['postExcerpt'] );
			$output .= '</div>';
		}

		if ( $attributes['enableOptions']['cartButton'] ) {
			$output .= '<div class="post__cart-button" data-product-id="' . $post_data['ID'] . '">';
			$output .= '<svg class="loader-icon display-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.99998 2.66666C9.72665 2.66666 11.2626 3.48666 12.238 4.762L10.6666 6.33333H14.6666V2.33333L13.1873 3.81266C12.5631 3.03781 11.773 2.41284 10.8753 1.98376C9.97754 1.55467 8.99499 1.33241 7.99998 1.33333C4.31798 1.33333 1.33331 4.318 1.33331 8H2.66665C2.66665 6.58551 3.22855 5.22896 4.22874 4.22876C5.22894 3.22857 6.58549 2.66666 7.99998 2.66666ZM13.3333 8C13.3333 9.11533 12.9837 10.2026 12.3336 11.1089C11.6835 12.0151 10.7656 12.6948 9.7091 13.0522C8.65259 13.4096 7.51062 13.4268 6.44382 13.1014C5.37703 12.776 4.4391 12.1243 3.76198 11.238L5.33331 9.66666H1.33331V13.6667L2.81265 12.1873C3.43687 12.9622 4.22694 13.5872 5.12468 14.0162C6.02242 14.4453 7.00497 14.6676 7.99998 14.6667C11.682 14.6667 14.6666 11.682 14.6666 8H13.3333Z" />
				</svg>';
			$output .= '<span class="cart-button__label">' . esc_html( $attributes['cartButton']['label'] ) . '</span>';
			$output .= '</div>';
		}

		$output .= '</div>';

		$output .= '</li>';
	}
}

$args = array(
	'post_type' => 'product',
	'orderby'   => 'date',
	'order'     => 'DESC',
	'post__in'  => $attributes['selectedPosts'],
);

$additional_post_data = get_cozy_block_featured_product_data( $args );


if ( ! empty( $additional_post_data ) ) {
	$classes   = array();
	$classes[] = 'cozy-block-featured-product__posts';
	$classes[] = 'carousel' === $attributes['display'] ? 'swiper-wrapper' : '';
	$classes[] = 'carousel' !== $attributes['display'] && $attributes['postOptions']['masonry'] ? 'has-masonry' : '';
	$output   .= '<ul class="' . implode( ' ', $classes ) . '">';
	foreach ( $additional_post_data as $key => $post_data ) {
		render_cozy_block_featured_product_data( $attributes, $post_data, $output );
	}
	$output .= '</ul>';
}

$output .= '</div>';

if ( 'carousel' === $attributes['display'] ) {
	if ( $attributes['navigation']['enabled'] ) {
		$output .= '<div class="swiper-button-prev"></div>';
		$output .= '<div class="swiper-button-next"></div>';
	}
	if ( $attributes['pagination']['enabled'] ) {
		$output .= '<div class="swiper-pagination"></div>';
	}
}

/* Toast */
$output .= '<div class="cozy-block-featured-product__toast visibility-hidden"></div>';

if ( $attributes['enableOptions']['quickView'] ) {
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

$wrapper_attributes = get_block_wrapper_attributes();

wp_localize_script( 'cozy-block--featured-product--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--featured-product--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockFeaturedProduct( "' . esc_html( $client_id ) . '" ) }) ' );

$font_families = array();

if ( isset( $attributes['headingStyles']['font']['family'] ) && ! empty( $attributes['headingStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['headingStyles']['font']['family'];
}
if ( isset( $attributes['subHeading']['font']['family'] ) && ! empty( $attributes['subHeading']['font']['family'] ) ) {
	$font_families[] = $attributes['subHeading']['font']['family'];
}
if ( isset( $attributes['postOptions']['title']['font']['family'] ) && ! empty( $attributes['postOptions']['title']['font']['family'] ) ) {
	$font_families[] = $attributes['postOptions']['title']['font']['family'];
}
if ( isset( $attributes['saleBadge']['font']['family'] ) && ! empty( $attributes['saleBadge']['font']['family'] ) ) {
	$font_families[] = $attributes['saleBadge']['font']['family'];
}
if ( isset( $attributes['productCategory']['font']['family'] ) && ! empty( $attributes['productCategory']['font']['family'] ) ) {
	$font_families[] = $attributes['productCategory']['font']['family'];
}
if ( isset( $attributes['productPrice']['font']['family'] ) && ! empty( $attributes['productPrice']['font']['family'] ) ) {
	$font_families[] = $attributes['productPrice']['font']['family'];
}
if ( isset( $attributes['productSummary']['font']['family'] ) && ! empty( $attributes['productSummary']['font']['family'] ) ) {
	$font_families[] = $attributes['productSummary']['font']['family'];
}
if ( isset( $attributes['cartButton']['font']['family'] ) && ! empty( $attributes['cartButton']['font']['family'] ) ) {
	$font_families[] = $attributes['cartButton']['font']['family'];
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
