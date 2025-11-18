<?php
$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['clientId'] ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['ajaxUrl'] = admin_url( 'admin-ajax.php' );
$attributes['nonce']   = wp_create_nonce( 'cozy_block_advanced_gallery_load_more' );

$header_box = array(
	'padding' => cozy_render_TRBL( 'padding', $attributes['headerBox']['padding'] ),
	'border'  => isset( $attributes['headerBox']['border'] ) ? cozy_render_TRBL( 'border', $attributes['headerBox']['border'] ) : '',
	'bg'      => isset( $attributes['headerBox']['color']['bg'] ) ? $attributes['headerBox']['color']['bg'] : '',
);

$tab_item = array(
	'padding'        => cozy_render_TRBL( 'padding', $attributes['tabStyles']['padding'] ),
	'border'         => isset( $attributes['tabStyles']['default']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['default']['border'] ) : '',
	'border_active'  => isset( $attributes['tabStyles']['active']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['active']['border'] ) : '',
	'letter_case'    => isset( $attributes['tabStyles']['letterCase'] ) ? $attributes['tabStyles']['letterCase'] : '',
	'decoration'     => isset( $attributes['tabStyles']['decoration'] ) ? $attributes['tabStyles']['decoration'] : '',
	'line_height'    => isset( $attributes['tabStyles']['lineHeight'] ) ? $attributes['tabStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['tabStyles']['letterSpacing'] ) ? $attributes['tabStyles']['letterSpacing'] : '',
	'bg'             => isset( $attributes['tabStyles']['color']['bg'] ) ? $attributes['tabStyles']['color']['bg'] : '',
	'bg_hover'       => isset( $attributes['tabStyles']['color']['bgHover'] ) ? $attributes['tabStyles']['color']['bgHover'] : '',
	'bg_active'      => isset( $attributes['tabStyles']['color']['bgActive'] ) ? $attributes['tabStyles']['color']['bgActive'] : '',
	'text'           => isset( $attributes['tabStyles']['color']['text'] ) ? $attributes['tabStyles']['color']['text'] : '',
	'text_hover'     => isset( $attributes['tabStyles']['color']['textHover'] ) ? $attributes['tabStyles']['color']['textHover'] : '',
	'text_active'    => isset( $attributes['tabStyles']['color']['textActive'] ) ? $attributes['tabStyles']['color']['textActive'] : '',
	'shadow'         => array(
		'horizontal' => isset( $attributes['tabStyles']['default']['shadow']['horizontal'] ) ? $attributes['tabStyles']['default']['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['tabStyles']['default']['shadow']['vertical'] ) ? $attributes['tabStyles']['default']['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['tabStyles']['default']['shadow']['blur'] ) ? $attributes['tabStyles']['default']['shadow']['blur'] : '',
		'spread'     => isset( $attributes['tabStyles']['default']['shadow']['spread'] ) ? $attributes['tabStyles']['default']['shadow']['spread'] : '',
		'color'      => isset( $attributes['tabStyles']['default']['shadow']['color'] ) ? $attributes['tabStyles']['default']['shadow']['color'] : '',
		'position'   => isset( $attributes['tabStyles']['default']['shadow']['position'] ) ? $attributes['tabStyles']['default']['shadow']['position'] : '',
	),
	'shadow_active'  => array(
		'horizontal' => isset( $attributes['tabStyles']['active']['shadow']['horizontal'] ) ? $attributes['tabStyles']['active']['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['tabStyles']['active']['shadow']['vertical'] ) ? $attributes['tabStyles']['active']['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['tabStyles']['active']['shadow']['blur'] ) ? $attributes['tabStyles']['active']['shadow']['blur'] : '',
		'spread'     => isset( $attributes['tabStyles']['active']['shadow']['spread'] ) ? $attributes['tabStyles']['active']['shadow']['spread'] : '',
		'color'      => isset( $attributes['tabStyles']['active']['shadow']['color'] ) ? $attributes['tabStyles']['active']['shadow']['color'] : '',
		'position'   => isset( $attributes['tabStyles']['active']['shadow']['position'] ) ? $attributes['tabStyles']['active']['shadow']['position'] : '',
	),

);

$image = array(
	'width'  => isset( $attributes['image']['width'] ) ? $attributes['image']['width'] : '',
	'height' => isset( $attributes['image']['height'] ) ? $attributes['image']['height'] : '',
	'radius' => isset( $attributes['image']['radius'] ) ? $attributes['image']['radius'] : '',
	'title'  => array(
		'left'           => 'left' === $attributes['image']['title']['align'] ? $attributes['image']['title']['left'] : '',
		'right'          => 'right' === $attributes['image']['title']['align'] ? $attributes['image']['title']['right'] : '',
		'letter_case'    => isset( $attributes['image']['title']['letterCase'] ) ? $attributes['image']['title']['letterCase'] : '',
		'decoration'     => isset( $attributes['image']['title']['decoration'] ) ? $attributes['image']['title']['decoration'] : '',
		'line_height'    => isset( $attributes['image']['title']['lineHeight'] ) ? $attributes['image']['title']['lineHeight'] : '',
		'letter_spacing' => isset( $attributes['image']['title']['letterSpacing'] ) ? $attributes['image']['title']['letterSpacing'] : '',
	),
	'color'  => array(
		'text'    => isset( $attributes['image']['color']['text'] ) ? $attributes['image']['color']['text'] : '',
		'overlay' => isset( $attributes['image']['color']['overlay'] ) ? $attributes['image']['color']['overlay'] : '',
	),
);

$icon = array(
	'padding' => isset( $attributes['icon']['box']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['icon']['box']['padding'] ) : '',
	'border'  => isset( $attributes['icon']['box']['border'] ) ? cozy_render_TRBL( 'border', $attributes['icon']['box']['border'] ) : '',
	'color'   => array(
		'text'       => isset( $attributes['icon']['color']['text'] ) ? $attributes['icon']['color']['text'] : '',
		'text_hover' => isset( $attributes['icon']['color']['textHover'] ) ? $attributes['icon']['color']['textHover'] : '',
		'bg'         => isset( $attributes['icon']['color']['bg'] ) ? $attributes['icon']['color']['bg'] : '',
		'bg_hover'   => isset( $attributes['icon']['color']['bgHover'] ) ? $attributes['icon']['color']['bgHover'] : '',
	),
);

$lightbox     = array(
	'title' => array(
		'left'           => 'left' === $attributes['lightbox']['title']['align'] ? $attributes['lightbox']['title']['left'] : '',
		'right'          => 'right' === $attributes['lightbox']['title']['align'] ? $attributes['lightbox']['title']['right'] : '',
		'letter_case'    => isset( $attributes['lightbox']['title']['letterCase'] ) ? $attributes['lightbox']['title']['letterCase'] : '',
		'decoration'     => isset( $attributes['lightbox']['title']['decoration'] ) ? $attributes['lightbox']['title']['decoration'] : '',
		'line_height'    => isset( $attributes['lightbox']['title']['lineHeight'] ) ? $attributes['lightbox']['title']['lineHeight'] : '',
		'letter_spacing' => isset( $attributes['lightbox']['title']['letterSpacing'] ) ? $attributes['lightbox']['title']['letterSpacing'] : '',
	),
	'color' => array(
		'text' => isset( $attributes['lightbox']['title']['color']['text'] ) ? $attributes['lightbox']['title']['color']['text'] : '',
	),
);
$lightbox_nav = array(
	'border' => isset( $attributes['lightbox']['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['lightbox']['navigation']['border'] ) : '',
	'color'  => array(
		'icon'         => isset( $attributes['lightbox']['navigation']['color']['icon'] ) ? $attributes['lightbox']['navigation']['color']['icon'] : '',
		'icon_hover'   => isset( $attributes['lightbox']['navigation']['color']['iconHover'] ) ? $attributes['lightbox']['navigation']['color']['iconHover'] : '',
		'bg'           => isset( $attributes['lightbox']['navigation']['color']['bg'] ) ? $attributes['lightbox']['navigation']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['lightbox']['navigation']['color']['bgHover'] ) ? $attributes['lightbox']['navigation']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['lightbox']['navigation']['color']['borderHover'] ) ? $attributes['lightbox']['navigation']['color']['borderHover'] : '',
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

$ajax_loader = array(
	'padding'           => cozy_render_TRBL( 'padding', $attributes['ajaxLoader']['padding'] ),
	'border'            => isset( $attributes['ajaxLoader']['border'] ) ? cozy_render_TRBL( 'border', $attributes['ajaxLoader']['border'] ) : '',
	'font_family'       => isset( $attributes['ajaxLoader']['font']['family'] ) ? $attributes['ajaxLoader']['font']['family'] : '',
	'letter_case'       => isset( $attributes['ajaxLoader']['letterCase'] ) ? $attributes['ajaxLoader']['letterCase'] : '',
	'decoration'        => isset( $attributes['ajaxLoader']['decoration'] ) ? $attributes['ajaxLoader']['decoration'] : '',
	'line_height'       => isset( $attributes['ajaxLoader']['lineHeight'] ) ? $attributes['ajaxLoader']['lineHeight'] : '',
	'letter_spacing'    => isset( $attributes['ajaxLoader']['letterSpacing'] ) ? $attributes['ajaxLoader']['letterSpacing'] : '',
	'text'              => isset( $attributes['ajaxLoader']['color']['text'] ) ? $attributes['ajaxLoader']['color']['text'] : '',
	'text_hover'        => isset( $attributes['ajaxLoader']['color']['textHover'] ) ? $attributes['ajaxLoader']['color']['textHover'] : '',
	'bg'                => isset( $attributes['ajaxLoader']['color']['bg'] ) ? $attributes['ajaxLoader']['color']['bg'] : '',
	'bg_hover'          => isset( $attributes['ajaxLoader']['color']['bgHover'] ) ? $attributes['ajaxLoader']['color']['bgHover'] : '',
	'border_hover'      => isset( $attributes['ajaxLoader']['color']['borderHover'] ) ? $attributes['ajaxLoader']['color']['borderHover'] : '',
	'spinner_primary'   => isset( $attributes['ajaxLoader']['color']['spinnerPrimary'] ) ? $attributes['ajaxLoader']['color']['spinnerPrimary'] : '',
	'spinner_secondary' => isset( $attributes['ajaxLoader']['color']['spinnerSecondary'] ) ? $attributes['ajaxLoader']['color']['spinnerSecondary'] : '',
);

$col1 = isset( $attributes['gridOptions']['column'] ) && $attributes['gridOptions']['column'] <= 3 ? $attributes['gridOptions']['column'] : 3;
$col2 = isset( $attributes['gridOptions']['column'] ) && $attributes['gridOptions']['column'] <= 2 ? $attributes['gridOptions']['column'] : 2;

$block_styles = "
#$block_id .cozy-block-advanced-gallery__header {
    {$header_box['padding']}
    margin-top: {$attributes['headerBox']['margin']['top']};
    margin-bottom: {$attributes['headerBox']['margin']['bottom']};
    {$header_box['border']}
    border-radius: {$attributes['headerBox']['radius']};
    background-color: {$header_box['bg']};
}
	
#$block_id .cozy-block-advanced-gallery__tabs {
	gap: {$attributes['tabOptions']['gap']};
	justify-content: {$attributes['tabOptions']['justifyTab']};
}

#$block_id .cozy-block-advanced-gallery__tab {
    {$tab_item['padding']}
    {$tab_item['border']}
    border-radius: {$attributes['tabStyles']['radius']};
    font-size: {$attributes['tabStyles']['font']['size']};
    font-weight: {$attributes['tabStyles']['font']['weight']};
    font-family: {$attributes['tabStyles']['font']['family']};
    text-transform: {$tab_item['letter_case']};
    text-decoration: {$tab_item['decoration']};
    line-height: {$tab_item['line_height']};
    letter-spacing: {$tab_item['letter_spacing']};
    background-color: {$tab_item['bg']};
    color: {$tab_item['text']};
}
#$block_id .item-has-default-shadow .cozy-block-advanced-gallery__tab {
    box-shadow: {$tab_item['shadow']['horizontal']}px {$tab_item['shadow']['vertical']}px {$tab_item['shadow']['blur']}px {$tab_item['shadow']['spread']}px {$tab_item['shadow']['color']} {$tab_item['shadow']['position']};
}
#$block_id .cozy-block-advanced-gallery__tab:hover {
    background-color: {$tab_item['bg_hover']};
    color: {$tab_item['text_hover']};
}
#$block_id .cozy-block-advanced-gallery__tab.active-tab {
    margin-bottom: {$attributes['tabStyles']['active']['marginBottom']}px;
    {$tab_item['border_active']}
    background-color: {$tab_item['bg_active']};
    color: {$tab_item['text_active']};
}
#$block_id .item-has-active-shadow .cozy-block-advanced-gallery__tab.active-tab {
    box-shadow: {$tab_item['shadow_active']['horizontal']}px {$tab_item['shadow_active']['vertical']}px {$tab_item['shadow_active']['blur']}px {$tab_item['shadow_active']['spread']}px {$tab_item['shadow_active']['color']} {$tab_item['shadow_active']['position']};
}

#$block_id .cozy-block-advanced-gallery__grid-wrapper:not(.has-masonry) {
	grid-template-columns: repeat({$attributes['gridOptions']['column']}, 1fr);
	gap: {$attributes['gridOptions']['columnGap']};
}
#$block_id .cozy-block-advanced-gallery__grid-wrapper.has-masonry {
	column-count: {$attributes['gridOptions']['column']};
	column-gap: {$attributes['gridOptions']['columnGap']};
}
#$block_id .has-masonry .cozy-block-advanced-gallery__item {
	margin-bottom: {$attributes['gridOptions']['columnGap']};
}
@media screen and (max-width: 1024px) {
	#$block_id .cozy-block-advanced-gallery__grid-wrapper:not(.has-masonry) {
		grid-template-columns: repeat({$col1}, 1fr) !important;
	}
	#$block_id .cozy-block-advanced-gallery__grid-wrapper.has-masonry {
		column-count: {$col1} !important;
	}
}
@media screen and (max-width: 767px) {
	#$block_id .cozy-block-advanced-gallery__grid-wrapper:not(.has-masonry) {
		grid-template-columns: repeat({$col2}, 1fr) !important;
	}
	#$block_id .cozy-block-advanced-gallery__grid-wrapper.has-masonry {
		column-count: {$col2} !important;
	}
}
@media screen and (max-width: 420px) {
	#$block_id .cozy-block-advanced-gallery__grid-wrapper:not(.has-masonry) {
		grid-template-columns: repeat(1, 1fr) !important;
	}
	#$block_id .cozy-block-advanced-gallery__grid-wrapper.has-masonry {
		column-count: 1 !important;
	}
}

#$block_id .cozy-block-advanced-gallery__image-wrapper {
	max-width: {$image['width']};
	max-height: {$image['height']};
	border-radius: {$image['radius']};
}
#$block_id .cozy-block-advanced-gallery__image {
	height: {$image['height']};
	border-radius: {$image['radius']};
}
#$block_id .cozy-block-advanced-gallery__image-background {
	background-color: {$image['color']['overlay']};
}
@media only screen and (max-width: 1024px) {
	#$block_id .cozy-block-advanced-gallery__image {
		max-height: {$image['height']};
	}
}

#$block_id .cozy-block-advanced-gallery__image-caption {
	text-align: {$attributes['image']['title']['align']};
	left: {$image['title']['left']};
	right: {$image['title']['right']};
	font-size: {$attributes['image']['title']['font']['size']};
	font-weight: {$attributes['image']['title']['font']['weight']};
	font-family: {$attributes['image']['title']['font']['family']};
	text-transform: {$attributes['image']['title']['letterCase']};
	text-decoration: {$image['title']['decoration']};
    line-height: {$image['title']['line_height']};
    letter-spacing: {$image['title']['letter_spacing']};
	color: {$image['color']['text']};
}
#$block_id .cozy-block-advanced-gallery__item.has-hover-caption:hover .cozy-block-advanced-gallery__image-caption {
	bottom: {$attributes['image']['title']['bottom']};
}

#$block_id .cozy-block-advanced-gallery__icon-wrapper {
	{$icon['padding']}
	{$icon['border']}
	border-radius: {$attributes['icon']['box']['radius']};
	background-color: {$icon['color']['bg']};
}
#$block_id .cozy-block-advanced-gallery__icon-wrapper:hover {
	background-color: {$icon['color']['bg_hover']};
}
#$block_id .cozy-block-advanced-gallery__icon {
	width: {$attributes['icon']['size']};
	height: {$attributes['icon']['size']};
	fill: {$icon['color']['text']};
	stroke: none;
}
#$block_id .cozy-block-advanced-gallery__icon-wrapper:hover .cozy-block-advanced-gallery__icon {
	fill: {$icon['color']['text_hover']};
}

#$block_id .cozy-block-advanced-gallery__lightbox-caption {
	text-align: {$attributes['lightbox']['title']['align']};
	margin-top: {$attributes['lightbox']['title']['bottom']}px;
	padding-left: {$lightbox['title']['left']};
	padding-right: {$lightbox['title']['right']};
	font-size: {$attributes['lightbox']['title']['font']['size']};
	font-weight: {$attributes['lightbox']['title']['font']['weight']};
	font-family: {$attributes['lightbox']['title']['font']['family']};
	text-transform: {$attributes['lightbox']['title']['letterCase']};
	text-decoration: {$lightbox['title']['decoration']};
	line-height: {$lightbox['title']['line_height']};
	letter-spacing: {$lightbox['title']['letter_spacing']};
	color: {$lightbox['color']['text']};
}

#$block_id .swiper-button-prev.lightbox-button-prev::after,
#$block_id .swiper-button-next.lightbox-button-next::after {
    font-size: {$attributes['lightbox']['navigation']['size']};
}
#$block_id .swiper-button-prev.lightbox-button-prev,
#$block_id .swiper-button-next.lightbox-button-next {
    width: {$attributes['lightbox']['navigation']['boxWidth']};
    height: {$attributes['lightbox']['navigation']['boxHeight']};
    {$lightbox_nav['border']}
    border-radius: {$attributes['lightbox']['navigation']['radius']};
    color: {$lightbox_nav['color']['icon']};
    background-color: {$lightbox_nav['color']['bg']};
}
#$block_id .swiper-button-prev.lightbox-button-prev:hover,
#$block_id .swiper-button-next.lightbox-button-next:hover {
    color: {$lightbox_nav['color']['icon_hover']};
    background-color: {$lightbox_nav['color']['bg_hover']};
    border-color: {$lightbox_nav['color']['border_hover']};
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

#$block_id .cozy-block-advanced-gallery__ajax-loader-wrapper {
	margin-top: {$attributes['ajaxLoader']['margin']['top']};
	margin-bottom: {$attributes['ajaxLoader']['margin']['bottom']};
	text-align: {$attributes['ajaxLoader']['textAlign']};
}
#$block_id .cozy-block-advanced-gallery__ajax-loader, #$block_id .scroll-spinner.has-loading-text {
	{$ajax_loader['padding']}
	{$ajax_loader['border']}
	border-radius: {$attributes['ajaxLoader']['radius']};
	font-size: {$attributes['ajaxLoader']['font']['size']};
	font-weight: {$attributes['ajaxLoader']['font']['weight']};
	font-family: {$ajax_loader['font_family']};
	text-transform: {$attributes['ajaxLoader']['letterCase']};
	text-decoration: {$ajax_loader['decoration']};
	line-height: {$ajax_loader['line_height']};
	letter-spacing: {$ajax_loader['letter_spacing']};
	color: {$ajax_loader['text']};
	background-color: {$ajax_loader['bg']};
	min-width: {$attributes['ajaxLoader']['minWidth']};
}
#$block_id .cozy-block-advanced-gallery__ajax-loader:hover {
	color: {$ajax_loader['text_hover']};
	background-color: {$ajax_loader['bg_hover']};
	border-color: {$ajax_loader['border_hover']};
}
#$block_id .cozy-block-advanced-gallery__ajax-loader .spinner,
#$block_id .scroll-spinner {
	border-color: {$ajax_loader['spinner_secondary']};
	border-top-color: {$ajax_loader['spinner_primary']};
}
";

$classes   = array();
$classes[] = 'cozy-block-advanced-gallery';
$classes[] = 'display-' . $attributes['display'];
$classes[] = 'carousel' === $attributes['display'] && $attributes['navigation']['enabled'] && $attributes['navigation']['hoverShow'] ? 'has-nav-hover-show' : '';
$classes[] = 'grid' === $attributes['display'] && $attributes['enableOptions']['lightbox'] ? 'has-light-box' : '';
$classes[] = 'grid' === $attributes['display'] && $attributes['ajaxLoader']['enabled'] && 'scroll' === $attributes['ajaxLoader']['type'] ? 'has-infinite-scroll' : '';
$output    = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';

/* Header */
if ( 'grid' === $attributes['display'] && $attributes['enableOptions']['isotopeFilter'] ) {
	$classes   = array();
	$classes[] = 'cozy-block-advanced-gallery__header';
	$output   .= '<article class="' . implode( ' ', $classes ) . '">';

	/* Tabs */
	$classes   = array();
	$classes[] = 'cozy-block-advanced-gallery__tabs';
	$classes[] = isset( $attributes['tabStyles']['default']['shadow']['enabled'] ) ? 'item-has-default-shadow' : '';
	$classes[] = isset( $attributes['tabStyles']['active']['shadow']['enabled'] ) ? 'item-has-active-shadow' : '';
	$output   .= '<ul class="' . implode( ' ', $classes ) . '">';
	if ( $attributes['tabOptions']['showDefaultTab'] ) {
		$output .= '<li class="cozy-block-advanced-gallery__tab active-tab" data-index="0" data-slug="">' . esc_html__( 'All', 'cozy-addons' ) . '</li>';
	}
	if ( ! empty( $attributes['tabsList'] ) ) {
		foreach ( (array) $attributes['tabsList'] as $index => $identifier ) {
			$classes    = array();
			$classes[]  = 'cozy-block-advanced-gallery__tab';
			$classes[]  = ! $attributes['tabOptions']['showDefaultTab'] && 0 === $index ? 'active-tab' : '';
			$data_index = $attributes['tabOptions']['showDefaultTab'] ? $index + 1 : $index;
			$output    .= '<li class="' . implode( ' ', $classes ) . '" data-index="' . $data_index . '" data-slug="' . $identifier['id'] . '">';
			$output    .= esc_html( $identifier['title'] );
			$output    .= '</li>';
		}
	}
	$output .= '</ul>';
	/* End Tabs */

	$output .= '</article>';
}
/* End Header */

/*
Body */
/* All Tab Content Body */
if ( ( ( $attributes['tabOptions']['showDefaultTab'] && $attributes['enableOptions']['isotopeFilter'] && 'grid' === $attributes['display'] ) || ( ! $attributes['enableOptions']['isotopeFilter'] && 'grid' === $attributes['display'] ) || 'carousel' === $attributes['display'] ) && ! empty( $attributes['mediaCollection'] ) ) {
	$all_media = array();
	if ( intval( $attributes['perPage'] ) > 0 ) {
		$all_media = array_slice( (array) $attributes['mediaCollection'], 0, $attributes['perPage'] );
	} else {
		$all_media = $attributes['mediaCollection'];
	}
	$limit = count( (array) $attributes['mediaCollection'] ) - 1;

	$remaining_posts = array(); // Check if per page is -1.
	if ( intval( $attributes['perPage'] ) > 0 ) {
		$remaining_posts = array_slice( (array) $attributes['mediaCollection'], $attributes['perPage'], $limit );
	}


	$classes   = array();
	$classes[] = 'cozy-block-advanced-gallery__body';
	$classes[] = 'carousel' === $attributes['display'] ? 'swiper-container' : '';
	$classes[] = 'active-content';
	$classes[] = 'animation__fade-in';
	$output   .= '<div class="' . implode( ' ', $classes ) . '">';

	$classes   = array();
	$classes[] = 'cozy-block-advanced-gallery__' . $attributes['display'] . '-wrapper';
	$classes[] = 'grid' === $attributes['display'] && $attributes['gridOptions']['masonry'] ? 'has-masonry' : '';
	$classes[] = 'carousel' === $attributes['display'] ? 'swiper-wrapper' : '';
	$output   .= '<ul class="' . implode( ' ', $classes ) . '">';
	/* Item */
	foreach ( $all_media as $media ) {
		\CozyAddons\Helpers\BlockRender::advanced_gallery_render( $attributes, $media, $output );
	}
	/* End Item */
	$output .= '</ul>';

	if ( 'carousel' === $attributes['display'] ) {
		if ( $attributes['navigation']['enabled'] ) {
			$output .= '<div class="swiper-button-prev"></div>';
			$output .= '<div class="swiper-button-next"></div>';
		}
		if ( $attributes['pagination']['enabled'] ) {
			$output .= '<div class="swiper-pagination"></div>';
		}
	}

	if ( ! empty( $remaining_posts ) && $attributes['ajaxLoader']['enabled'] ) {
		if ( 'default' === $attributes['ajaxLoader']['type'] ) {
			$classes   = array();
			$classes[] = 'cozy-block-advanced-gallery__ajax-loader';
			$output   .= '<div class="cozy-block-advanced-gallery__ajax-loader-wrapper">';
			$output   .= '<button class="' . implode( ' ', $classes ) . '" data-slug="all">';
			$output   .= '<span>' . esc_html( $attributes['ajaxLoader']['label'] ) . '</span>';

			$classes   = array();
			$classes[] = 'spinner';
			$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
			$output   .= '<div class="' . implode( ' ', $classes ) . '">';
			$output   .= esc_html( $attributes['ajaxLoader']['loadingText'] );
			$output   .= '<span class="cozy-block-advanced-gallery__dots"></span>';
			$output   .= '</div>';

			$output .= '</button>';
			$output .= '</div>';
		}

		if ( 'scroll' === $attributes['ajaxLoader']['type'] ) {
				$output .= '<div class="scroll-spinner-wrapper" style="text-align: center;"  data-slug="all">';
			$classes     = array();
			$classes[]   = 'scroll-spinner';
			$classes[]   = 'display-none';
			$classes[]   = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
			$output     .= '<div class="' . implode( ' ', $classes ) . '">';
			if ( isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ) {
				$output .= esc_html( $attributes['ajaxLoader']['loadingText'] );
				$output .= '<span class="cozy-block-advanced-gallery__dots"></span>';
			}
			$output .= '</div>';
			$output .= '</div>';
		}
	}
	$output .= '</div>';
	/* End All Tab Content Body */

}
/* End Body */

/* Tab Content Body */
if ( 'grid' === $attributes['display'] && $attributes['enableOptions']['isotopeFilter'] && ! empty( $attributes['tabsList'] ) ) {
	$attributes['tabRemainingData'] = array();
	foreach ( (array) $attributes['tabsList'] as $key => $gallery_tab ) {
		$tab_id = $gallery_tab['id'];
		$attributes['tabRemainingData'][ $tab_id ]['offset']       = '0';
		$attributes['tabRemainingData'][ $tab_id ]['isFetching']   = false;
		$attributes['tabRemainingData'][ $tab_id ]['hasNextChunk'] = true;

		$classes   = array();
		$classes[] = 'cozy-block-advanced-gallery__body';
		$classes[] = ! $attributes['tabOptions']['showDefaultTab'] && 0 === $key ? 'active-content' : '';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';

		$classes   = array();
		$classes[] = 'cozy-block-advanced-gallery__' . $attributes['display'] . '-wrapper';
		$classes[] = 'grid' === $attributes['display'] && $attributes['gridOptions']['masonry'] ? 'has-masonry' : '';
		$output   .= '<ul class="' . implode( ' ', $classes ) . '">';

		$filtered_items = array_filter(
			(array) $attributes['mediaCollection'],
			function ( $item ) use ( $tab_id ) {
				return in_array( $tab_id, $item['categories'], true );
			}
		);

		$all_media = array();
		if ( $attributes['ajaxLoader']['enabled'] && 'default' === $attributes['ajaxLoader']['type'] && intval( $attributes['perPage'] ) > 0 ) {
			// if ( intval( $attributes['perPage'] ) > 0 ) {
			$all_media = array_slice( $filtered_items, 0, $attributes['perPage'] );
		} else {
			$all_media = $filtered_items;
		}
		$limit           = count( $filtered_items ) - 1;
		$remaining_posts = array(); // Check if per page is -1.
		if ( intval( $attributes['perPage'] ) > 0 ) {
			$remaining_posts = array_slice( $filtered_items, $attributes['perPage'], $limit );
		}
		if ( ! empty( $all_media ) ) {
			/* Item */
			foreach ( $all_media as $media ) {
				\CozyAddons\Helpers\BlockRender::advanced_gallery_render( $attributes, $media, $output );
			}
			/* End Item */
		}
		$output .= '</ul>';

		// Tab Ajax Loader.
		if ( ! empty( $remaining_posts ) && $attributes['ajaxLoader']['enabled'] ) {
			if ( 'default' === $attributes['ajaxLoader']['type'] ) {
				$classes   = array();
				$classes[] = 'cozy-block-advanced-gallery__ajax-loader';
				$output   .= '<div class="cozy-block-advanced-gallery__ajax-loader-wrapper">';
				$output   .= '<button class="' . implode( ' ', $classes ) . '" data-slug="' . $tab_id . '">';
				$output   .= '<span>' . esc_html( $attributes['ajaxLoader']['label'] ) . '</span>';

				$classes   = array();
				$classes[] = 'spinner';
				$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
				$output   .= '<div class="' . implode( ' ', $classes ) . '">';
				$output   .= esc_html( $attributes['ajaxLoader']['loadingText'] );
				$output   .= '<span class="cozy-block-advanced-gallery__dots"></span>';
				$output   .= '</div>';

				$output .= '</button>';
				$output .= '</div>';
			}

			if ( 'scroll' === $attributes['ajaxLoader']['type'] ) {
				$output   .= '<div class="scroll-spinner-wrapper" style="text-align: center;"  data-slug="' . $tab_id . '">';
				$classes   = array();
				$classes[] = 'scroll-spinner';
				$classes[] = 'display-none';
				$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
				$output   .= '<div class="' . implode( ' ', $classes ) . '">';
				if ( isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ) {
					$output .= esc_html( $attributes['ajaxLoader']['loadingText'] );
					$output .= '<span class="cozy-block-advanced-gallery__dots"></span>';
				}
				$output .= '</div>';
				$output .= '</div>';
			}
		}
		$output .= '</div>';
		/* End Tab Content */

	}
}
/* End Tab Content Body */

/*
Lightbox */
// if ( 'grid' === $attributes['display'] && $attributes['enableOptions']['lightbox'] && ! empty( $attributes['mediaCollection'] ) ) {
if ( $attributes['enableOptions']['lightbox'] && ! empty( $attributes['mediaCollection'] ) ) {
	$output .= '<div class="cozy-block-advanced-gallery__lightbox-wrapper display-none">';

	$output .= '<div class="cozy-block-advanced-gallery__toolbar-wrapper" style="display:flex;justify-content:space-between;position:relative;z-index:99999;">';
	$output .= '<div class="swiper-pagination lightbox-pagination"></div>';

	/* Toolbar Buttons */
	$output .= '<div style="padding:6px;display:flex;align-items:center;gap:22px;background-color:#4f4e4e;">';
	/* Full Screen Button */
	$output .= '<div class="cozy-block-advanced-gallery__toolbar-button lightbox-fullscreen-button">';
	$output .= '<svg width="20px" height="20px" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/" aria-hidden="true">';
	$output .= '<path d="M4.5 11H3v4h4v-1.5H4.5V11zM3 7h1.5V4.5H7V3H3v4zm10.5 6.5H11V15h4v-4h-1.5v2.5zM11 3v1.5h2.5V7H15V3h-4z" />';
	$output .= '</svg>';
	$output .= '</div>';
	/* End Full Screen Button */

	/* Close Button */
	$output .= '<div class="cozy-block-advanced-gallery__toolbar-button lightbox-close-button">';
	$output .= '<svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/" aria-hidden="true">';
	$output .= '<path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />';
	$output .= '</svg>';
	$output .= '</div>';
	/* End Close Button */
	$output .= '</div>';
	/* End Toolbar Buttons */

	$output .= '</div>';

	if ( ( $attributes['enableOptions']['isotopeFilter'] && $attributes['tabOptions']['showDefaultTab'] ) || ( ! $attributes['enableOptions']['isotopeFilter'] && 'grid' === $attributes['display'] ) || 'carousel' === $attributes['display'] ) {
		$output .= '<div class="cozy-block-advanced-gallery__lightbox active-gallery">';
		$output .= '<ul class="cozy-block-advanced-gallery__lightbox-swiper-wrapper swiper-wrapper active-content">';
		foreach ( (array) $attributes['mediaCollection'] as $media ) {
			$output .= '<li class="cozy-block-advanced-gallery__lightbox-item swiper-slide">';

			$classes   = array();
			$classes[] = 'cozy-block-advanced-gallery__lightbox-image-wrapper';
			$output   .= '<figure class="' . implode( ' ', $classes ) . '">';
			$output   .= '<img class="cozy-block-advanced-gallery__lightbox-image" src="' . esc_url( $media['url'] ) . '" alt="' . esc_html( $media['alt'] ) . '" />';
			$output   .= '</figure>';

			if ( $attributes['enableOptions']['lightboxTitle'] ) {
				$output .= '<div class="cozy-block-advanced-gallery__lightbox-caption">';
				$output .= esc_html( $media['caption'] );
				$output .= '</div>';
			}

			$output .= '</li>';
		}
		$output .= '</ul>';
		$output .= '</div>';
	}
	if ( $attributes['enableOptions']['isotopeFilter'] && ! empty( $attributes['tabsList'] ) ) {
		foreach ( (array) $attributes['tabsList'] as $key => $gallery_tab ) {
			$tab_id                 = $gallery_tab['id'];
			$gallery_filtered_items = array_filter(
				(array) $attributes['mediaCollection'],
				function ( $item ) use ( $tab_id ) {
					return in_array( $tab_id, $item['categories'], true );
				}
			);

			$classes   = array();
			$classes[] = 'cozy-block-advanced-gallery__lightbox';
			$classes[] = ! $attributes['tabOptions']['showDefaultTab'] && 0 === $key ? 'active-gallery' : '';
			$output   .= '<div class="' . implode( ' ', $classes ) . '">';

			$classes   = array();
			$classes[] = 'cozy-block-advanced-gallery__lightbox-swiper-wrapper';
			$classes[] = 'swiper-wrapper';
			$classes[] = ! $attributes['tabOptions']['showDefaultTab'] && 0 === $key ? 'active-content' : '';
			$output   .= '<ul class="' . implode( ' ', $classes ) . '">';
			if ( ! empty( $gallery_filtered_items ) ) {
				foreach ( $gallery_filtered_items as $media ) {
					$output .= '<li class="cozy-block-advanced-gallery__lightbox-item swiper-slide">';

					$classes   = array();
					$classes[] = 'cozy-block-advanced-gallery__lightbox-image-wrapper';
					$output   .= '<figure class="' . implode( ' ', $classes ) . '">';
					$output   .= '<img class="cozy-block-advanced-gallery__lightbox-image" src="' . esc_url( $media['url'] ) . '" alt="' . esc_html( $media['alt'] ) . '" />';
					$output   .= '</figure>';

					if ( $attributes['enableOptions']['lightboxTitle'] ) {
						$output .= '<div class="cozy-block-advanced-gallery__lightbox-caption">';
						$output .= esc_html( $media['caption'] );
						$output .= '</div>';
					}

					$output .= '</li>';
				}
			}
			$output .= '</ul>';

			$output .= '</div>';
		}
	}

	$output .= '<div class="swiper-button-prev lightbox-button-prev"></div>';
	$output .= '<div class="swiper-button-next lightbox-button-next"></div>';


	$output .= '</div>';
}
/* End Lightbox */

$output .= '</div>';

wp_localize_script( 'cozy-block--advanced-gallery--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--advanced-gallery--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockAdvancedGallery( "' . $client_id . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$font_families = array();

if ( isset( $attributes['tabStyles']['font']['family'] ) && ! empty( $attributes['tabStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['tabStyles']['font']['family'];
}
if ( isset( $attributes['image']['title']['font']['family'] ) && ! empty( $attributes['image']['title']['font']['family'] ) ) {
	$font_families[] = $attributes['image']['title']['font']['family'];
}
if ( isset( $attributes['lightbox']['title']['font']['family'] ) && ! empty( $attributes['lightbox']['title']['font']['family'] ) ) {
	$font_families[] = $attributes['lightbox']['title']['font']['family'];
}
if ( isset( $attributes['ajaxLoader']['font']['family'] ) && ! empty( $attributes['ajaxLoader']['font']['family'] ) ) {
	$font_families[] = $attributes['ajaxLoader']['font']['family'];
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
