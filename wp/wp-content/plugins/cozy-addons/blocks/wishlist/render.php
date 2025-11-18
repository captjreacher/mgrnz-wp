<?php
$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['clientId'] ) ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['isUserLoggedIn'] = is_user_logged_in();
$attributes['userID']         = get_current_user_id();
$attributes['ajaxUrl']        = admin_url( 'admin-ajax.php' );
$attributes['sidebarNonce']   = wp_create_nonce( 'cozy_block_wishlist_render_data_sidebar' );
$attributes['wishlistNonce']  = wp_create_nonce( 'cozy_block_wishlist_update_user_wishlist' );
$attributes['cartNonce']      = wp_create_nonce( 'cozy_block_wishlist_add_to_cart' );

if ( 'sidebar' === $attributes['variation'] ) {
	wp_localize_script( 'cozy-block--wishlist--frontend-script', $block_id, $attributes );
	wp_add_inline_script( 'cozy-block--wishlist--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockWishlist( "' . esc_html( $client_id ) . '" ) }) ' );
}

$wishlist_icon = array(
	'default' => array(
		'align'  => isset( $attributes['wishlist']['icon']['align'] ) ? $attributes['wishlist']['icon']['align'] : 'right',
		'width'  => isset( $attributes['wishlist']['icon']['box']['width'] ) ? $attributes['wishlist']['icon']['box']['width'] : '40px',
		'height' => isset( $attributes['wishlist']['icon']['box']['height'] ) ? $attributes['wishlist']['icon']['box']['height'] : '40px',
		'border' => isset( $attributes['wishlist']['icon']['box']['border'] ) ? cozy_render_TRBL( 'border', $attributes['wishlist']['icon']['box']['border'] ) : '',
		'color'  => array(
			'text'         => isset( $attributes['wishlist']['icon']['color']['text'] ) ? $attributes['wishlist']['icon']['color']['text'] : '',
			'text_hover'   => isset( $attributes['wishlist']['icon']['color']['textHover'] ) ? $attributes['wishlist']['icon']['color']['textHover'] : '',
			'bg'           => isset( $attributes['wishlist']['icon']['color']['bg'] ) ? $attributes['wishlist']['icon']['color']['bg'] : '',
			'bg_hover'     => isset( $attributes['wishlist']['icon']['color']['bgHover'] ) ? $attributes['wishlist']['icon']['color']['bgHover'] : '',
			'border_hover' => isset( $attributes['wishlist']['icon']['color']['borderHover'] ) ? $attributes['wishlist']['icon']['color']['borderHover'] : '',
		),
	),
	'active'  => array(
		'border' => isset( $attributes['wishlist']['activeIcon']['box']['border'] ) ? cozy_render_TRBL( 'border', $attributes['wishlist']['activeIcon']['box']['border'] ) : '',
		'radius' => isset( $attributes['wishlist']['activeIcon']['box']['radius'] ) ? $attributes['wishlist']['activeIcon']['box']['radius'] : '',
		'color'  => array(
			'text'         => isset( $attributes['wishlist']['activeIcon']['color']['text'] ) ? $attributes['wishlist']['activeIcon']['color']['text'] : '',
			'text_hover'   => isset( $attributes['wishlist']['activeIcon']['color']['textHover'] ) ? $attributes['wishlist']['activeIcon']['color']['textHover'] : '',
			'bg'           => isset( $attributes['wishlist']['activeIcon']['color']['bg'] ) ? $attributes['wishlist']['activeIcon']['color']['bg'] : '',
			'bg_hover'     => isset( $attributes['wishlist']['activeIcon']['color']['bgHover'] ) ? $attributes['wishlist']['activeIcon']['color']['bgHover'] : '',
			'border_hover' => isset( $attributes['wishlist']['activeIcon']['color']['borderHover'] ) ? $attributes['wishlist']['activeIcon']['color']['borderHover'] : '',
		),
	),
);

$sidebar      = array(
	'padding'         => isset( $attributes['sidebar']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['sidebar']['padding'] ) : '',
	'color'           => array(
		'cart_text'       => isset( $attributes['sidebar']['color']['cartText'] ) ? $attributes['sidebar']['color']['cartText'] : '',
		'cart_text_hover' => isset( $attributes['sidebar']['color']['cartTextHover'] ) ? $attributes['sidebar']['color']['cartTextHover'] : '',
		'cart_bg'         => isset( $attributes['sidebar']['color']['cartBg'] ) ? $attributes['sidebar']['color']['cartBg'] : '',
		'cart_bg_hover'   => isset( $attributes['sidebar']['color']['cartBgHover'] ) ? $attributes['sidebar']['color']['cartBgHover'] : '',
		'bg'              => isset( $attributes['sidebar']['color']['bg'] ) ? $attributes['sidebar']['color']['bg'] : '',
		'overlay'         => isset( $attributes['sidebar']['color']['overlay'] ) ? $attributes['sidebar']['color']['overlay'] : '',
	),
	'count'           => array(
		'padding' => isset( $attributes['sidebar']['count']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['sidebar']['count']['padding'] ) : '',
		'border'  => isset( $attributes['sidebar']['count']['border'] ) ? cozy_render_TRBL( 'border', $attributes['sidebar']['count']['border'] ) : '',
		'color'   => array(
			'text' => isset( $attributes['sidebar']['count']['color']['text'] ) ? $attributes['sidebar']['count']['color']['text'] : '',
			'bg'   => isset( $attributes['sidebar']['count']['color']['bg'] ) ? $attributes['sidebar']['count']['color']['bg'] : '',
		),
	),
	'product_image'   => array(
		'width'  => isset( $attributes['sidebar']['productImage']['width'] ) ? $attributes['sidebar']['productImage']['width'] : '',
		'height' => isset( $attributes['sidebar']['productImage']['height'] ) ? $attributes['sidebar']['productImage']['height'] : '',
		'radius' => isset( $attributes['sidebar']['productImage']['radius'] ) ? $attributes['sidebar']['productImage']['radius'] : '',
	),
	'product_title'   => array(
		'color' => array(
			'text'       => isset( $attributes['sidebar']['productTitle']['color']['text'] ) ? $attributes['sidebar']['productTitle']['color']['text'] : '',
			'text_hover' => isset( $attributes['sidebar']['productTitle']['color']['textHover'] ) ? $attributes['sidebar']['productTitle']['color']['textHover'] : '',
		),
	),
	'product_summary' => array(
		'color' => array(
			'text' => isset( $attributes['sidebar']['productSummary']['color']['text'] ) ? $attributes['sidebar']['productSummary']['color']['text'] : '',
		),
	),
	'product_price'   => array(
		'color' => array(
			'text' => isset( $attributes['sidebar']['productPrice']['color']['text'] ) ? $attributes['sidebar']['productPrice']['color']['text'] : '',
		),
	),
	'button'          => array(
		'padding' => isset( $attributes['sidebar']['button']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['sidebar']['button']['padding'] ) : '',
		'cart'    => array(
			'border' => isset( $attributes['sidebar']['button']['cart']['border'] ) ? cozy_render_TRBL( 'border', $attributes['sidebar']['button']['cart']['border'] ) : '',
			'color'  => array(
				'text'         => isset( $attributes['sidebar']['button']['cart']['color']['text'] ) ? $attributes['sidebar']['button']['cart']['color']['text'] : '',
				'text_hover'   => isset( $attributes['sidebar']['button']['cart']['color']['textHover'] ) ? $attributes['sidebar']['button']['cart']['color']['textHover'] : '',
				'bg'           => isset( $attributes['sidebar']['button']['cart']['color']['bg'] ) ? $attributes['sidebar']['button']['cart']['color']['bg'] : '',
				'bg_hover'     => isset( $attributes['sidebar']['button']['cart']['color']['bgHover'] ) ? $attributes['sidebar']['button']['cart']['color']['bgHover'] : '',
				'border_hover' => isset( $attributes['sidebar']['button']['cart']['color']['borderHover'] ) ? $attributes['sidebar']['button']['cart']['color']['borderHover'] : '',
			),
		),
		'remove'  => array(
			'border' => isset( $attributes['sidebar']['button']['remove']['border'] ) ? cozy_render_TRBL( 'border', $attributes['sidebar']['button']['remove']['border'] ) : '',
			'color'  => array(
				'text'         => isset( $attributes['sidebar']['button']['remove']['color']['text'] ) ? $attributes['sidebar']['button']['remove']['color']['text'] : '',
				'text_hover'   => isset( $attributes['sidebar']['button']['remove']['color']['textHover'] ) ? $attributes['sidebar']['button']['remove']['color']['textHover'] : '',
				'bg'           => isset( $attributes['sidebar']['button']['remove']['color']['bg'] ) ? $attributes['sidebar']['button']['remove']['color']['bg'] : '',
				'bg_hover'     => isset( $attributes['sidebar']['button']['remove']['color']['bgHover'] ) ? $attributes['sidebar']['button']['remove']['color']['bgHover'] : '',
				'border_hover' => isset( $attributes['sidebar']['button']['remove']['color']['borderHover'] ) ? $attributes['sidebar']['button']['remove']['color']['borderHover'] : '',
			),
		),
	),
);
$sidebar_item = array(
	'padding'      => cozy_render_TRBL( 'padding', $attributes['itemStyles']['padding'] ),
	'border'       => isset( $attributes['itemStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['itemStyles']['border'] ) : '',
	'bg'           => isset( $attributes['itemStyles']['color']['bg'] ) ? $attributes['itemStyles']['color']['bg'] : '',
	'bg_hover'     => isset( $attributes['itemStyles']['color']['bgHover'] ) ? $attributes['itemStyles']['color']['bgHover'] : '',
	'border_hover' => isset( $attributes['itemStyles']['color']['borderHover'] ) ? $attributes['itemStyles']['color']['borderHover'] : '',
	'shadow'       => array(
		'horizontal' => isset( $attributes['itemStyles']['shadow']['horizontal'] ) ? $attributes['itemStyles']['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['itemStyles']['shadow']['vertical'] ) ? $attributes['itemStyles']['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['itemStyles']['shadow']['blur'] ) ? $attributes['itemStyles']['shadow']['blur'] : '',
		'spread'     => isset( $attributes['itemStyles']['shadow']['spread'] ) ? $attributes['itemStyles']['shadow']['spread'] : '',
		'color'      => isset( $attributes['itemStyles']['shadow']['color'] ) ? $attributes['itemStyles']['shadow']['color'] : '',
		'position'   => isset( $attributes['itemStyles']['shadow']['position'] ) ? $attributes['itemStyles']['shadow']['position'] : '',
	),
	'shadow_hover' => array(
		'horizontal' => isset( $attributes['itemStyles']['shadowHover']['horizontal'] ) ? $attributes['itemStyles']['shadowHover']['horizontal'] : '',
		'vertical'   => isset( $attributes['itemStyles']['shadowHover']['vertical'] ) ? $attributes['itemStyles']['shadowHover']['vertical'] : '',
		'blur'       => isset( $attributes['itemStyles']['shadowHover']['blur'] ) ? $attributes['itemStyles']['shadowHover']['blur'] : '',
		'spread'     => isset( $attributes['itemStyles']['shadowHover']['spread'] ) ? $attributes['itemStyles']['shadowHover']['spread'] : '',
		'color'      => isset( $attributes['itemStyles']['shadowHover']['color'] ) ? $attributes['itemStyles']['shadowHover']['color'] : '',
		'position'   => isset( $attributes['itemStyles']['shadowHover']['position'] ) ? $attributes['itemStyles']['shadowHover']['position'] : '',
	),
);
$sidebar_icon = array(
	'open'  => array(
		'width'  => isset( $attributes['sidebar']['icon']['box']['width'] ) ? $attributes['sidebar']['icon']['box']['width'] : '40px',
		'height' => isset( $attributes['sidebar']['icon']['box']['height'] ) ? $attributes['sidebar']['icon']['box']['height'] : '40px',
		'border' => isset( $attributes['sidebar']['icon']['box']['border'] ) ? cozy_render_TRBL( 'border', $attributes['sidebar']['icon']['box']['border'] ) : '',
		'color'  => array(
			'text'         => isset( $attributes['sidebar']['icon']['color']['text'] ) ? $attributes['sidebar']['icon']['color']['text'] : '',
			'text_hover'   => isset( $attributes['sidebar']['icon']['color']['textHover'] ) ? $attributes['sidebar']['icon']['color']['textHover'] : '',
			'bg'           => isset( $attributes['sidebar']['icon']['color']['bg'] ) ? $attributes['sidebar']['icon']['color']['bg'] : '',
			'bg_hover'     => isset( $attributes['sidebar']['icon']['color']['bgHover'] ) ? $attributes['sidebar']['icon']['color']['bgHover'] : '',
			'border_hover' => isset( $attributes['sidebar']['icon']['color']['borderHover'] ) ? $attributes['sidebar']['icon']['color']['borderHover'] : '',
		),
	),
	'close' => array(
		'width'  => isset( $attributes['sidebar']['closeIcon']['box']['width'] ) ? $attributes['sidebar']['closeIcon']['box']['width'] : '40px',
		'height' => isset( $attributes['sidebar']['closeIcon']['box']['height'] ) ? $attributes['sidebar']['closeIcon']['box']['height'] : '40px',
		'border' => isset( $attributes['sidebar']['closeIcon']['box']['border'] ) ? cozy_render_TRBL( 'border', $attributes['sidebar']['closeIcon']['box']['border'] ) : '',
		'left'   => 'left' === $attributes['sidebar']['closeIcon']['position'] ? $attributes['sidebar']['closeIcon']['left'] : '',
		'right'  => 'right' === $attributes['sidebar']['closeIcon']['position'] ? $attributes['sidebar']['closeIcon']['right'] : '',
		'color'  => array(
			'text'         => isset( $attributes['sidebar']['closeIcon']['color']['text'] ) ? $attributes['sidebar']['closeIcon']['color']['text'] : '',
			'text_hover'   => isset( $attributes['sidebar']['closeIcon']['color']['textHover'] ) ? $attributes['sidebar']['closeIcon']['color']['textHover'] : '',
			'bg'           => isset( $attributes['sidebar']['closeIcon']['color']['bg'] ) ? $attributes['sidebar']['closeIcon']['color']['bg'] : '',
			'bg_hover'     => isset( $attributes['sidebar']['closeIcon']['color']['bgHover'] ) ? $attributes['sidebar']['closeIcon']['color']['bgHover'] : '',
			'border_hover' => isset( $attributes['sidebar']['closeIcon']['color']['borderHover'] ) ? $attributes['sidebar']['closeIcon']['color']['borderHover'] : '',
		),
	),
);

$toast = array(
	'color' => array(
		'text' => isset( $attributes['toast']['color']['text'] ) ? $attributes['toast']['color']['text'] : '',
		'bg'   => isset( $attributes['toast']['color']['bg'] ) ? $attributes['toast']['color']['bg'] : '',
	),
);

$block_styles = "
#$block_id.variation-wishlist .wishlist__icon-wrapper {
	width: {$wishlist_icon['default']['width']};
	height: {$wishlist_icon['default']['height']};
	{$wishlist_icon['default']['border']}
	border-radius: {$attributes['wishlist']['icon']['box']['radius']};
	background-color: {$wishlist_icon['default']['color']['bg']};
}
#$block_id.variation-wishlist .wishlist__icon-wrapper:hover {
	background-color: {$wishlist_icon['default']['color']['bg_hover']};
	border-color: {$wishlist_icon['default']['color']['border_hover']};
}
#$block_id.variation-wishlist .wishlist__icon {
	width: {$attributes['wishlist']['icon']['size']};
	height: {$attributes['wishlist']['icon']['size']};
	fill: {$wishlist_icon['default']['color']['text']};
	stroke: none;
}
#$block_id.variation-wishlist .wishlist__icon-wrapper:hover .wishlist__icon {
	fill: {$wishlist_icon['default']['color']['text_hover']};
}
#$block_id.variation-wishlist .wishlist__icon-wrapper.is-active {
	{$wishlist_icon['active']['border']}
	border-radius: {$wishlist_icon['active']['radius']};
	background-color: {$wishlist_icon['active']['color']['bg']};
}
#$block_id.variation-wishlist .wishlist__icon-wrapper.is-active:hover {
	background-color: {$wishlist_icon['active']['color']['bg_hover']};
	border-color: {$wishlist_icon['active']['color']['border_hover']};
}
#$block_id.variation-wishlist .wishlist__icon-wrapper.is-active .wishlist__icon {
	fill: {$wishlist_icon['active']['color']['text']};
	stroke: none;
}
#$block_id.variation-wishlist .wishlist__icon-wrapper.is-active:hover .wishlist__icon {
	fill: {$wishlist_icon['active']['color']['text_hover']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__sidebar-wrapper {
    background-color: {$sidebar['color']['overlay']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__sidebar {
    width: {$attributes['sidebar']['width']};
    background-color: {$sidebar['color']['bg']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__sidebar-body {
	{$sidebar['padding']}
}

#$block_id.variation-sidebar .sidebar__icon-wrapper {
	width: {$sidebar_icon['open']['width']};
	height: {$sidebar_icon['open']['height']};
	{$sidebar_icon['open']['border']}
	border-radius: {$attributes['sidebar']['icon']['box']['radius']};
	background-color: {$sidebar_icon['open']['color']['bg']};
}
#$block_id.variation-sidebar .sidebar__icon-wrapper:hover {
	background-color: {$sidebar_icon['open']['color']['bg_hover']};
	border-color: {$sidebar_icon['open']['color']['border_hover']};
}
#$block_id.variation-sidebar .sidebar__icon {
	width: {$attributes['sidebar']['icon']['size']};
	height: {$attributes['sidebar']['icon']['size']};
	fill: {$sidebar_icon['open']['color']['text']};
	stroke: none;
}
#$block_id.variation-sidebar .sidebar__icon-wrapper:hover .sidebar__icon {
	fill: {$sidebar_icon['open']['color']['text_hover']};
}

.logged-in #$block_id.variation-sidebar .sidebar-close-button {
    margin-top: calc(34px + {$attributes['sidebar']['closeIcon']['top']});
}
#$block_id.variation-sidebar .sidebar-close-button {
    margin-top: {$attributes['sidebar']['closeIcon']['top']};
    margin-left: {$sidebar_icon['close']['left']};
    margin-right: {$sidebar_icon['close']['right']};
	width: {$sidebar_icon['close']['width']};
	height: {$sidebar_icon['close']['height']};
	{$sidebar_icon['close']['border']}
	border-radius: {$attributes['sidebar']['closeIcon']['box']['radius']};
	background-color: {$sidebar_icon['close']['color']['bg']};
}
#$block_id.variation-sidebar .sidebar-close-button:hover {
	background-color: {$sidebar_icon['close']['color']['bg_hover']};
	border-color: {$sidebar_icon['close']['color']['border_hover']};
}
#$block_id.variation-sidebar .sidebar-close-button svg {
	width: {$attributes['sidebar']['closeIcon']['size']};
	height: {$attributes['sidebar']['closeIcon']['size']};
	fill: {$sidebar_icon['close']['color']['text']};
	stroke: none;
}
#$block_id.variation-sidebar .sidebar-close-button:hover svg {
	fill: {$sidebar_icon['close']['color']['text_hover']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__count {
	margin-top: {$attributes['sidebar']['count']['margin']['top']}px;
	margin-right: {$attributes['sidebar']['count']['margin']['right']}px;
	{$sidebar['count']['padding']}
	{$sidebar['count']['border']}
	border-radius: {$attributes['sidebar']['count']['radius']};
	color: {$sidebar['count']['color']['text']};
	background-color: {$sidebar['count']['color']['bg']};
	font-size: {$attributes['sidebar']['count']['font']['size']};
	font-weight: {$attributes['sidebar']['count']['font']['weight']};
	font-family: {$attributes['sidebar']['count']['font']['family']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__product-data-wrapper {
	gap: {$attributes['sidebar']['contentGap']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__product-data {
	{$sidebar_item['padding']}
	margin-top: {$attributes['itemStyles']['margin']['top']};
	margin-bottom: {$attributes['itemStyles']['margin']['bottom']};
	{$sidebar_item['border']}
	border-radius: {$attributes['itemStyles']['radius']};
	background-color: {$sidebar_item['bg']};
}
#$block_id.variation-sidebar.item-has-box-shadow .cozy-block-wishlist__product-data {
	box-shadow: {$sidebar_item['shadow']['horizontal']}px {$sidebar_item['shadow']['vertical']}px {$sidebar_item['shadow']['blur']}px {$sidebar_item['shadow']['spread']}px {$sidebar_item['shadow']['color']} {$sidebar_item['shadow']['position']}; 
}
#$block_id.variation-sidebar .cozy-block-wishlist__product-data:hover {
	background-color: {$sidebar_item['bg_hover']};
	border-color: {$sidebar_item['border_hover']};
}
#$block_id.variation-sidebar.item-has-hover-box-shadow .cozy-block-wishlist__product-data:hover {
	box-shadow: {$sidebar_item['shadow_hover']['horizontal']}px {$sidebar_item['shadow_hover']['vertical']}px {$sidebar_item['shadow_hover']['blur']}px {$sidebar_item['shadow_hover']['spread']}px {$sidebar_item['shadow_hover']['color']} {$sidebar_item['shadow_hover']['position']}; 
}

#$block_id.variation-sidebar .cozy-block-wishlist__product-image {
	min-width: {$sidebar['product_image']['width']};
	max-height: {$sidebar['product_image']['height']};
	border-radius: {$sidebar['product_image']['radius']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__product-image {
	height: {$sidebar['product_image']['height']};
	border-radius: {$sidebar['product_image']['radius']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__product-title a {
	font-size: {$attributes['sidebar']['productTitle']['font']['size']};
	font-weight: {$attributes['sidebar']['productTitle']['font']['weight']};
	font-family: {$attributes['sidebar']['productTitle']['font']['family']};
	text-transform: {$attributes['sidebar']['productTitle']['letterCase']};
	color: {$sidebar['product_title']['color']['text']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__product-title a:hover {
	color: {$sidebar['product_title']['color']['text_hover']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__product-summary {
	font-size: {$attributes['sidebar']['productSummary']['font']['size']};
	font-weight: {$attributes['sidebar']['productSummary']['font']['weight']};
	font-family: {$attributes['sidebar']['productSummary']['font']['family']};
	text-transform: {$attributes['sidebar']['productSummary']['letterCase']};
	color: {$sidebar['product_summary']['color']['text']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__product-price {
	font-size: {$attributes['sidebar']['productPrice']['font']['size']};
	font-weight: {$attributes['sidebar']['productPrice']['font']['weight']};
	font-family: {$attributes['sidebar']['productPrice']['font']['family']};
	text-transform: {$attributes['sidebar']['productPrice']['letterCase']};
	color: {$sidebar['product_price']['color']['text']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__sidebar-button {
	{$sidebar['button']['padding']}
	font-size: {$attributes['sidebar']['button']['font']['size']};
	font-weight: {$attributes['sidebar']['button']['font']['weight']};
	font-family: {$attributes['sidebar']['button']['font']['family']};
	text-transform: {$attributes['sidebar']['button']['letterCase']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__sidebar-button.add__cart {
	{$sidebar['button']['cart']['border']}
	border-radius: {$attributes['sidebar']['button']['cart']['radius']};
	color: {$sidebar['button']['cart']['color']['text']};
	background-color: {$sidebar['button']['cart']['color']['bg']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__sidebar-button.add__cart:hover {
	color: {$sidebar['button']['cart']['color']['text_hover']};
	background-color: {$sidebar['button']['cart']['color']['bg_hover']};
	border-color: {$sidebar['button']['cart']['color']['border_hover']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__sidebar-button.remove__wishlist {
	{$sidebar['button']['remove']['border']}
	border-radius: {$attributes['sidebar']['button']['remove']['radius']};
	color: {$sidebar['button']['remove']['color']['text']};
	background-color: {$sidebar['button']['remove']['color']['bg']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__sidebar-button.remove__wishlist:hover {
	color: {$sidebar['button']['remove']['color']['text_hover']};
	background-color: {$sidebar['button']['remove']['color']['bg_hover']};
	border-color: {$sidebar['button']['remove']['color']['border_hover']};
}

#$block_id.variation-sidebar .cozy-block-wishlist__cart-button {
	color: {$sidebar['color']['cart_text']};
	background-color: {$sidebar['color']['cart_bg']};
}
#$block_id.variation-sidebar .cozy-block-wishlist__cart-button:hover {
	color: {$sidebar['color']['cart_text_hover']};
	background-color: {$sidebar['color']['cart_bg_hover']};
}

#$block_id.variation-{$attributes['variation']} .cozy-block-wishlist__toast {
	font-size: {$attributes['toast']['font']['size']};
	font-weight: {$attributes['toast']['font']['weight']};
	font-family: {$attributes['toast']['font']['family']};
	color: {$toast['color']['text']};
	background-color: {$toast['color']['bg']};
}
";

$classes   = array();
$classes[] = 'cozy-block-wishlist';
$classes[] = 'variation-' . $attributes['variation'];
$classes[] = 'sidebar' === $attributes['variation'] && $attributes['itemStyles']['shadow']['enabled'] ? 'item-has-box-shadow' : '';
$classes[] = 'sidebar' === $attributes['variation'] && $attributes['itemStyles']['shadowHover']['enabled'] ? 'item-has-hover-box-shadow' : '';
$output    = '<div class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '" id="' . esc_attr( $block_id ) . '">';

if ( 'wishlist' === $attributes['variation'] ) {
	/* Toast */
	$output .= '<div class="cozy-block-wishlist__toast visibility-hidden"></div>';
	/* End Toast */
}

/* Wishlist Variation */
$wishlist_user_meta = get_user_meta( $attributes['userID'], 'cozy_block_wishlist_data', true );
if ( ! empty( $attributes['postType'] ) && 'product' === $attributes['postType'] && 'wishlist' === $attributes['variation'] ) {
	$cozy_product_id = $block->context['postId'];
	$classes         = array();
	$classes[]       = 'cozy-block-wishlist__icon-wrapper';
	$classes[]       = 'wishlist__icon-wrapper';
	$classes[]       = 'post-' . $cozy_product_id;
	$classes[]       = is_array( $wishlist_user_meta ) && is_user_logged_in() && in_array( intval( $cozy_product_id ), $wishlist_user_meta ) ? 'is-active' : '';
	$output         .= '<div class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '" data-product-id="' . $cozy_product_id . '" onClick="handleWishlistClick(' . $cozy_product_id . ')">';

	$view_box   = array();
	$view_box[] = $attributes['wishlist']['icon']['viewBox']['vx'];
	$view_box[] = $attributes['wishlist']['icon']['viewBox']['vy'];
	$view_box[] = $attributes['wishlist']['icon']['viewBox']['vw'];
	$view_box[] = $attributes['wishlist']['icon']['viewBox']['vh'];
	$output    .= '<svg class="cozy-block-wishlist__icon wishlist__icon" viewBox="' . implode( ' ', $view_box ) . '" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">';
	$output    .= '<path d="' . $attributes['wishlist']['icon']['path'] . '" />';
	$output    .= '</svg>';

	$output .= '</div>';
}
/* End Wishlist Variation */

/* Sidebar Variation */
if ( 'sidebar' === $attributes['variation'] ) {
	$output    .= '<div class="cozy-block-wishlist__icon-wrapper sidebar__icon-wrapper">';
	$view_box   = array();
	$view_box[] = $attributes['sidebar']['icon']['viewBox']['vx'];
	$view_box[] = $attributes['sidebar']['icon']['viewBox']['vy'];
	$view_box[] = $attributes['sidebar']['icon']['viewBox']['vw'];
	$view_box[] = $attributes['sidebar']['icon']['viewBox']['vh'];
	$output    .= '<svg class="cozy-block-wishlist__icon sidebar__icon" viewBox="' . implode( ' ', $view_box ) . '" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">';
	$output    .= '<path d="' . $attributes['sidebar']['icon']['path'] . '" />';
	$output    .= '</svg>';

	/* Wishlist Count */
	if ( isset( $attributes['sidebar']['count']['enabled'] ) && $attributes['sidebar']['count']['enabled'] ) {
		if ( is_user_logged_in() && is_array( $wishlist_user_meta ) && count( $wishlist_user_meta ) > 0 ) {
			$output .= '<span class="cozy-block-wishlist__count">';
			$output .= count( $wishlist_user_meta );
			$output .= '</span>';
		}
	}
	/* End Wishlist Count */

	$output .= '</div>';

	$classes   = array();
	$classes[] = 'cozy-block-wishlist__sidebar-wrapper';
	$classes[] = 'visibility-hidden';
	$classes[] = 'position-' . $attributes['sidebar']['position'];
	$output   .= '<div class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '">';

	/* Toast */
	$output .= '<div class="cozy-block-wishlist__toast visibility-hidden"></div>';
	/* End Toast */

	/* Sidebar */
	$output .= '<div class="cozy-block-wishlist__sidebar">';

	/* Close Button */
	$classes   = array();
	$classes[] = 'cozy-block-wishlist__toolbar-button';
	$classes[] = 'sidebar-close-button';
	$classes[] = 'position-' . $attributes['sidebar']['closeIcon']['position'];
	$output   .= '<div class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '">';
	$output   .= '<svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/" aria-hidden="true">';
	$output   .= '<path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />';
	$output   .= '</svg>';
	$output   .= '</div>';
	/* End Close Button */

	/* Sidebar Data */
	$output .= '<div class="cozy-block-wishlist__sidebar-body">';
	if ( is_user_logged_in() ) {
		$output .= '<ul class="cozy-block-wishlist__product-data-wrapper">';
		if ( is_array( $wishlist_user_meta ) ) {
			krsort( $wishlist_user_meta );
			foreach ( $wishlist_user_meta as $product_id ) {
				// Get the product object.
				$product = wc_get_product( $product_id );

				if ( $product ) {
					// Get product details.
					$product_name        = $product->get_name();
					$product_link        = get_permalink( $product_id );
					$product_price       = wc_price( $product->get_price() );
					$product_description = $product->get_description();
					$product_image       = wp_get_attachment_url( $product->get_image_id() );
					$is_in_stock         = $product->get_stock_status();

					$output .= '<li class="cozy-block-wishlist__product-data post-' . $product_id . '">';
					/* Product Image */
					if ( ! empty( $product_image ) ) {
						$output .= '<figure class="cozy-block-wishlist__product-image">';
						$output .= '<a href="' . esc_url( $product_link ) . '" rel="noopener" target="_blank">';
						$output .= '<img src="' . esc_url( $product_image ) . '" />';
						$output .= '</a>';
						$output .= '</figure>';
					}
					/* End Product Image */

					/* Product Details */
					$output .= '<div style="width:100%;">';
					$output .= '<p class="cozy-block-wishlist__product-title"><a href="' . esc_url( $product_link ) . '" rel="noopener" target="_blank">' . $product_name . '</a></p>';
					$output .= '<p class="cozy-block-wishlist__product-summary">' . cozy_create_excerpt( $product_description, 15 ) . '</p>';
					$output .= '<p class="cozy-block-wishlist__product-price">' . $product_price . '</p>';

					/* Add/Remove Buttons */
					$output     .= '<div style="display:flex;justify-content:space-between;flex-wrap:wrap;gap:6px;">';
					$stock_label = 'instock' === $is_in_stock ? 'Add to Cart' : 'Out of Stock';
					$classes     = array();
					$classes[]   = 'cozy-block-wishlist__sidebar-button';
					$classes[]   = 'instock' === $is_in_stock ? 'add__cart' : 'out-of-stock';
					$output     .= '<div class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '" data-product-id="' . $product_id . '">' . $stock_label . '</div>';
					$output     .= '<div class="cozy-block-wishlist__sidebar-button remove__wishlist" data-product-id="' . $product_id . '">' . esc_html__( 'Remove', 'cozy-addons' ) . '</div>';
					$output     .= '</div>';
					/* End Add/Remove Buttons */

					$output .= '</div>';

					/* End Product Details */
					$output .= '</li>';

				}
			}
		}

		$output .= '</ul>';
	}
	$output .= '</div>';
	/* End Sidebar Data */

	/* Go to Cart Button */
	$cart_page_url = wc_get_cart_url();
	$output       .= '<a class="cozy-block-wishlist__cart-button" href="' . esc_url( $cart_page_url ) . '" rel="noopener" target="_blank">';
	$output       .= esc_html__( 'View my cart', 'cozy-addons' );
	$output       .= '</a>';
	/* End Cart Button */

	$output .= '</div>';
	/* End Sidebar */
	$output .= '</div>';
}
/* End Sidebar Variation */
$output .= '</div>';

$wrapper_attributes = get_block_wrapper_attributes();

if ( 'sidebar' === $attributes['variation'] ) {
	$font_families = array();

	if ( isset( $attributes['sidebar']['count']['font']['family'] ) && ! empty( $attributes['sidebar']['count']['font']['family'] ) ) {
		$font_families[] = $attributes['sidebar']['count']['font']['family'];
	}
	if ( isset( $attributes['sidebar']['productTitle']['font']['family'] ) && ! empty( $attributes['sidebar']['productTitle']['font']['family'] ) ) {
		$font_families[] = $attributes['sidebar']['productTitle']['font']['family'];
	}
	if ( isset( $attributes['sidebar']['productSummary']['font']['family'] ) && ! empty( $attributes['sidebar']['productSummary']['font']['family'] ) ) {
		$font_families[] = $attributes['sidebar']['productSummary']['font']['family'];
	}
	if ( isset( $attributes['sidebar']['productPrice']['font']['family'] ) && ! empty( $attributes['sidebar']['productPrice']['font']['family'] ) ) {
		$font_families[] = $attributes['sidebar']['productPrice']['font']['family'];
	}
	if ( isset( $attributes['sidebar']['button']['font']['family'] ) && ! empty( $attributes['sidebar']['button']['font']['family'] ) ) {
		$font_families[] = $attributes['sidebar']['button']['font']['family'];
	}
	if ( isset( $attributes['toast']['font']['family'] ) && ! empty( $attributes['toast']['font']['family'] ) ) {
		$font_families[] = $attributes['toast']['font']['family'];
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
}

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);


$render = sprintf( '<div class="cozy-block-wrapper cozy-block-wishlist-wrapper justify-' . $wishlist_icon['default']['align'] . '"><div %1$s>%2$s</div></div>', $wrapper_attributes, $output );
echo $render;

if ( ! function_exists( 'add_to_wishlist_cookie' ) ) {
	function add_to_wishlist_cookie( $product_id ) {
		$wishlist = isset( $_COOKIE['wishlist'] ) ? json_decode( sanitize_key( wp_unslash( $_COOKIE['wishlist'] ) ), true ) : array();

		if ( ! in_array( $product_id, $wishlist ) ) {
			$wishlist[] = $product_id;
			setcookie( 'wishlist', wp_json_encode( $wishlist ), time() + ( 86400 * 30 ), '/' ); // 30 days expiration
			return true;
		}

		return false; // Item already in wishlist.
	}
}

if ( ! is_user_logged_in() ) {
	?>

<script src="<?php echo esc_url( trailingslashit( COZY_ADDONS_PLUGIN_URL ) ) . 'public/js/jquery.js'; ?>"></script>
<script type="text/javascript">
	// var wishlistCount = document.querySelector('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count');
	var wishlistData = getLocalWishlist();

	var showWishlistCount = <?php echo 'sidebar' === $attributes['variation'] && isset( $attributes['sidebar']['count']['enabled'] ) && $attributes['sidebar']['count']['enabled'] ? '1' : '0'; ?>;

	if(parseInt(showWishlistCount) == 1) {
		if(wishlistData.length > 0) {
			// wishlistCount.innerHTML = wishlistData.length;
			if ($('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').length) {
				// If it exists, update its content
				$('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').html(wishlistData.length);
			} else {
				// If it does not exist, create it and append it to the parent container
				$('.cozy-block-wishlist.variation-sidebar .sidebar__icon-wrapper').append(
					`<span class="cozy-block-wishlist__count">${wishlistData.length}</span>`
				);
			}
		}else {
			$('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').remove();
		}
	}

	wishlistData.forEach((productID) => {
		const iconClass = '.cozy-block-wishlist.variation-wishlist .post-' + productID;
		const wishlistIconWrapper = document.querySelector(iconClass);

		if(wishlistData.includes(productID)) {
			if(wishlistIconWrapper) {
				wishlistIconWrapper.classList.add('is-active');
			}
		}else {
			if(wishlistIconWrapper) {
				wishlistIconWrapper.classList.remove('is-active');
			}
		}
	})

	// Function to toggle product ID in the wishlist
	function updateLocalWishlist(productId) {
		let wishlist = JSON.parse(localStorage.getItem("cozy_block_wishlist_data")) || [];

		// Check if productId is already in the wishlist
		if (wishlist.includes(productId)) {
		// Remove the productId from the wishlist
		wishlist = wishlist.filter(
			(id) => parseInt(id) !== parseInt(productId)
		);
		} else {
		// Add the productId to the wishlist
		wishlist.push(productId);
		}

		// Update the localStorage with the new wishlist
		localStorage.setItem(
		"cozy_block_wishlist_data",
		JSON.stringify(wishlist)
		);
	}

	function getLocalWishlist() {
		let wishlist =
		JSON.parse(localStorage.getItem("cozy_block_wishlist_data")) || [];
		return wishlist;
	}

	function handleWishlistClick(productId) {
		updateLocalWishlist(productId)

		const iconClass = '.cozy-block-wishlist.variation-wishlist .post-' + productId;
		const wishlistIconWrapper = document.querySelector(iconClass);

		const wishlistData = getLocalWishlist();

		if(wishlistData.includes(productId)) {
			wishlistIconWrapper.classList.add('is-active');
		}else {
			wishlistIconWrapper.classList.remove('is-active');
		}

		if(parseInt(showWishlistCount) == 1) {
			if (wishlistData.length > 0) {
				if ($('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').length) {
						// If it exists, update its content
					$('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').html(wishlistData.length);
				} else {
					// If it does not exist, create it and append it to the parent container
					$('.cozy-block-wishlist.variation-sidebar .sidebar__icon-wrapper').append(
						`<span class="cozy-block-wishlist__count">${wishlistData.length}</span>`
					);
				}
			} else {
				$(
					".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
				).remove();
			}
		}

		// Trigger Toast Message
		const variationClass = "variation-<?php echo esc_attr( $attributes['variation'] ); ?>";
		$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').html('Wishlist Updated!');
		$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').removeClass('visibility-hidden');
		setTimeout(() => {
			$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').addClass('visibility-hidden');
		}, 2000)
	}
</script>
	<?php
}

if ( 'wishlist' === $attributes['variation'] && is_user_logged_in() ) {
	?>
<script src="<?php echo esc_url( trailingslashit( COZY_ADDONS_PLUGIN_URL ) ) . 'public/js/jquery.js'; ?>"></script>
<script type="text/javascript">
	var showWishlistCount = <?php echo 'sidebar' === $attributes['variation'] && isset( $attributes['sidebar']['count']['enabled'] ) && $attributes['sidebar']['count']['enabled'] ? '1' : '0'; ?>;

	function addToCart(el) {
		const productId = $(el).attr("data-product-id");
		$.ajax({
			url: "<?php echo esc_url( $attributes['ajaxUrl'] ); ?>",
			method: "POST",
			data: {
				action: "cozy_block_wishlist_add_to_cart",
				cartNonce: "<?php echo sanitize_key( $attributes['cartNonce'] ); ?>",
				productId: productId,
			},
			success: function (response) {
				// Trigger Toast Message
				const variationClass = "variation-<?php echo esc_attr( $attributes['variation'] ); ?>";
				$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').html('Cart Updated!');
				$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').removeClass('visibility-hidden');
				setTimeout(() => {
					$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').addClass('visibility-hidden');
				}, 2000)
			},
			error: function (error) {
				console.log("Unable to add to cart...");
			},
		});
	}
	  
	function removeFromWishlist(el) {
		const productId = $(el).attr("data-product-id");
		$.ajax({
			url: "<?php echo esc_url( $attributes['ajaxUrl'] ); ?>",
			method: "POST",
			data: {
				action: "cozy_block_wishlist_update_user_wishlist",
				wishlistNonce: "<?php echo sanitize_key( $attributes['wishlistNonce'] ); ?>",
				productId: productId,
				userId: "<?php echo sanitize_key( $attributes['userID'] ); ?>",
			},
			success: function (response) {
			if (response.data.user_wishlist.includes(parseInt(productId))) {
				$(
				".cozy-block-wishlist.variation-wishlist .post-" + productId
				).addClass("is-active");
			} else {
				$(
				".cozy-block-wishlist.variation-wishlist .post-" + productId
				).removeClass("is-active");
			}

			if(parseInt(showWishlistCount) == 1) {
				if (response.data.user_wishlist.length > 0) {
					if ($('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').length) {
						// If it exists, update its content
						$('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').html(response.data.user_wishlist.length);
					} else {
						// If it does not exist, create it and append it to the parent container
						$('.cozy-block-wishlist.variation-sidebar .sidebar__icon-wrapper').append(
							`<span class="cozy-block-wishlist__count">${response.data.user_wishlist.length}</span>`
						);
					}
				} else {
					$(
						".cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count"
					).remove();
				}
			}

			if (response.data.user_wishlist.length <= 0) {
				$(".cozy-block-wishlist__sidebar-body").html("");
			}

			updateSidebarRender(response.data.user_wishlist);
			},
			error: function (error) {
			console.log("Unable to update wishlist...");
			},
		});
	}
	  
	function updateSidebarRender(wishlistData) {
		if (wishlistData.length > 0) {
			$.ajax({
			url: "<?php echo esc_url( $attributes['ajaxUrl'] ); ?>",
			method: "POST",
			data: {
				action: "cozy_block_wishlist_render_data_sidebar",
				sidebarNonce: "<?php echo sanitize_key( $attributes['sidebarNonce'] ); ?>",
				wishlistData: wishlistData,
			},
			success: function (response) {
				if (response.data) {
					$('.cozy-block-wishlist__sidebar-body').html(response.data.render);

					// Add to Cart
					$(
					".cozy-block-wishlist__sidebar-button.add__cart"
					).on("click", function () {
						addToCart(this);
					});

					// Remove from Wishlist
					$(
					".cozy-block-wishlist__sidebar-button.remove__wishlist"
					).on("click", function (e) {
							$(this).addClass("opacity-50");
						removeFromWishlist(this);
					});
				}
			},
			error: function (error) {
				console.log("Unable to load data...");
			},
			});
		}
	}
	
	function handleWishlistClick(productId) {
		$.ajax({
				url: "<?php echo esc_url( $attributes['ajaxUrl'] ); ?>",
				method: "POST",
				data: {
					action: "cozy_block_wishlist_update_user_wishlist",
					wishlistNonce: "<?php echo sanitize_key( $attributes['wishlistNonce'] ); ?>",
					productId: productId,
					userId: "<?php echo sanitize_key( $attributes['userID'] ); ?>",
				}, 
				success: function(response) {
					if (response.data.user_wishlist.includes(parseInt(productId))) {
						$(".cozy-block-wishlist.variation-wishlist .post-" + productId).addClass("is-active");
					} else {
						$(".cozy-block-wishlist.variation-wishlist .post-" + productId).removeClass("is-active");
					}

					if(parseInt(showWishlistCount) == 1) {
						if(response.data.user_wishlist.length > 0) {
							// Check if the .cozy-block-wishlist__count element exists
							if ($('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').length) {
								// If it exists, update its content
								$('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').html(response.data.user_wishlist.length);
							} else {
								// If it does not exist, create it and append it to the parent container
								$('.cozy-block-wishlist.variation-sidebar .sidebar__icon-wrapper').append(
									`<span class="cozy-block-wishlist__count">${response.data.user_wishlist.length}</span>`
								);
							}
						}else {
							$('.cozy-block-wishlist.variation-sidebar .cozy-block-wishlist__count').remove();
						}
					}

					updateSidebarRender(response.data.user_wishlist);

					// Trigger Toast Message
					const variationClass = "variation-<?php echo $attributes['variation']; ?>";
					$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').html('Wishlist Updated!');
					$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').removeClass('visibility-hidden');
					setTimeout(() => {
						$('.cozy-block-wishlist.'+ variationClass +' .cozy-block-wishlist__toast').addClass('visibility-hidden');
					}, 2000)
				}, 
				error: function(error) {
					console.log('Unable to update wishlist...');
				}
			})	
	}
</script>
	<?php
}
