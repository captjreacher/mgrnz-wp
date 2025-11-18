<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyProductCategory_' . str_replace( '-', '_', $client_id );

wp_localize_script( 'cozy-block--product-category--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--product-category--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductCategoryInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$wrapper_attributes = get_block_wrapper_attributes();

$item_padding = cozy_render_TRBL( 'padding', $attributes['containerStyles']['padding'] );
$item_border  = isset( $attributes['containerStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['containerStyles']['border'] ) : '';
$item_radius  = cozy_render_TRBL( 'border-radius', $attributes['containerStyles']['radius'] );
$item_styles  = array(
	'content_gap'        => isset( $attributes['gridOptions']['contentGap'] ) ? $attributes['gridOptions']['contentGap'] : '',
	'stack_layout'       => isset( $attributes['gridOptions']['stackLayout'] ) && filter_var( $attributes['gridOptions']['stackLayout'], FILTER_VALIDATE_BOOLEAN ) ? 'wrap' : '',
	'align_items'        => isset( $attributes['gridOptions']['alignItems'] ) ? $attributes['gridOptions']['alignItems'] : '',
	'bg_color'           => isset( $attributes['containerStyles']['bgColor'] ) ? $attributes['containerStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['containerStyles']['bgColorHover'] ) ? $attributes['containerStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['containerStyles']['borderColorHover'] ) ? $attributes['containerStyles']['borderColorHover'] : '',
	'shadow_color'       => isset( $attributes['containerStyles']['boxShadow']['color'] ) ? $attributes['containerStyles']['boxShadow']['color'] : '',
	'font_size'          => isset( $attributes['containerStyles']['fontSize'] ) ? $attributes['containerStyles']['fontSize'] : '',
	'font_weight'        => isset( $attributes['containerStyles']['fontWeight'] ) ? $attributes['containerStyles']['fontWeight'] : '',
	'font_family'        => isset( $attributes['containerStyles']['fontFamily'] ) ? $attributes['containerStyles']['fontFamily'] : '',
	'letter_case'        => isset( $attributes['containerStyles']['letterCase'] ) ? $attributes['containerStyles']['letterCase'] : '',
	'decoration'         => isset( $attributes['containerStyles']['decoration'] ) ? $attributes['containerStyles']['decoration'] : '',
	'line_height'        => isset( $attributes['containerStyles']['lineHeight'] ) ? $attributes['containerStyles']['lineHeight'] : '',
	'letter_spacing'     => isset( $attributes['containerStyles']['letterSpacing'] ) ? $attributes['containerStyles']['letterSpacing'] : '',
);

$count_padding = cozy_render_TRBL( 'padding', $attributes['productCount']['padding'] );
$count_border  = isset( $attributes['productCount']['border'] ) ? cozy_render_TRBL( 'border', $attributes['productCount']['border'] ) : '';
$count_radius  = cozy_render_TRBL( 'border-radius', $attributes['productCount']['radius'] );
$count_styles  = array(
	'margin_bottom'  => isset( $attributes['productCount']['marginBottom'] ) ? $attributes['productCount']['marginBottom'] : '',
	'color'          => isset( $attributes['productCount']['color'] ) ? $attributes['productCount']['color'] : '',
	'bg_color'       => isset( $attributes['productCount']['bgColor'] ) ? $attributes['productCount']['bgColor'] : '',
	'font_size'      => isset( $attributes['productCount']['fontSize'] ) ? $attributes['productCount']['fontSize'] : '',
	'font_family'    => isset( $attributes['productCount']['fontFamily'] ) ? $attributes['productCount']['fontFamily'] : '',
	'letter_case'    => isset( $attributes['productCount']['letterCase'] ) ? $attributes['productCount']['letterCase'] : 'none',
	'decoration'     => isset( $attributes['productCount']['decoration'] ) ? $attributes['productCount']['decoration'] : 'none',
	'line_height'    => isset( $attributes['productCount']['lineHeight'] ) ? $attributes['productCount']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['productCount']['letterSpacing'] ) ? $attributes['productCount']['letterSpacing'] : '',
);

$nav_border = isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '';
$nav_styles = array(
	'color'              => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'color_hover'        => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_color'           => isset( $attributes['navigation']['bgColor'] ) ? $attributes['navigation']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['navigation']['bgColorHover'] ) ? $attributes['navigation']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['navigation']['borderColorHover'] ) ? $attributes['navigation']['borderColorHover'] : '',
);

$bullet         = array(
	'align' => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'left'  => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? 'padding-left: ' . $attributes['pagination']['left'] . ';' : '',
	'right' => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? 'padding-right: ' . $attributes['pagination']['right'] . ';' : '',
);
$bullet_outline = isset( $attributes['pagination']['active']['border'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['active']['border'] ) : '';
$bullet_styles  = array(
	'default_color'       => isset( $attributes['pagination']['default']['color'] ) ? $attributes['pagination']['default']['color'] : '',
	'default_color_hover' => isset( $attributes['pagination']['default']['colorHover'] ) ? $attributes['pagination']['default']['colorHover'] : '',
	'active_color'        => isset( $attributes['pagination']['active']['color'] ) ? $attributes['pagination']['active']['color'] : '',
	'active_color_hover'  => isset( $attributes['pagination']['active']['colorHover'] ) ? $attributes['pagination']['active']['colorHover'] : '',
);

$block_styles = "
#$block_id {
	text-align: {$attributes['textAlign']};
}

#$block_id.display-grid .woo-product-category-wrapper {
    grid-template-columns: repeat({$attributes['gridOptions']['displayColumn']}, 1fr);
    row-gap: {$attributes['gridOptions']['gap']};
    column-gap: {$attributes['gridOptions']['gap']};
}
@media screen and (max-width: 1024px) {
    .cozy-block-product-category.display-grid .woo-product-category-wrapper {
        grid-template-columns: repeat({$width1}, 1fr) !important;
    }
}
@media screen and (max-width: 767px) {
    .cozy-block-product-category.display-grid .woo-product-category-wrapper {
        grid-template-columns: repeat({$width2}, 1fr) !important;
    }
}
@media screen and (max-width: 400px) {
    .cozy-block-product-category.display-grid .woo-product-category-wrapper {
        grid-template-columns: repeat(1, 1fr) !important;
    }
}

#$block_id .woo-product-category{
	{$item_padding}
	{$item_border}
	{$item_radius}
	background-color: {$item_styles['bg_color']};
}
#$block_id .woo-product-category .woo-product-category__link {
	font-size: {$item_styles['font_size']};
	font-weight: {$item_styles['font_weight']};
	font-family: {$item_styles['font_family']};
	text-transform: {$item_styles['letter_case']};
	text-decoration: {$item_styles['decoration']};
	line-height: {$item_styles['line_height']};
	letter-spacing: {$item_styles['letter_spacing']};
}
#$block_id.display-grid .woo-product-category.has-invert-layout  .woo-product-category__link {
	gap: {$item_styles['content_gap']};
	flex-wrap: {$item_styles['stack_layout']};
	align-items: {$item_styles['align_items']};
} 
#$block_id.has-box-shadow .woo-product-category {
    box-shadow: {$attributes['containerStyles']['boxShadow']['horizontal']}px {$attributes['containerStyles']['boxShadow']['vertical']}px {$attributes['containerStyles']['boxShadow']['blur']}px {$attributes['containerStyles']['boxShadow']['spread']}px {$item_styles['shadow_color']} {$attributes['containerStyles']['boxShadow']['position']};
}
#$block_id .woo-product-category:hover {
	background-color: {$item_styles['bg_color_hover']};
	border-color: {$item_styles['border_color_hover']};
}

#$block_id .cozy-block-product-category__image {
    margin-bottom: {$attributes['featuredImage']['marginBottom']};
    max-height: {$attributes['featuredImage']['height']};
}
#$block_id .cozy-block-product-category__image img {
    width: {$attributes['featuredImage']['width']};
    height: {$attributes['featuredImage']['height']};
    border-radius: {$attributes['featuredImage']['radius']};
}

#$block_id .woo-product-category .product-count {
	{$count_padding}
	margin-top: {$attributes['productCount']['marginTop']};
	margin-bottom: {$count_styles['margin_bottom']};
	{$count_border}
	{$count_radius}
	color: {$count_styles['color']};
	background-color: {$count_styles['bg_color']};
	font-size: {$count_styles['font_size']};
	font-family: {$count_styles['font_family']};
	font-weight: {$attributes['productCount']['fontWeight']};
	text-transform: {$count_styles['letter_case']};
	text-decoration: {$count_styles['decoration']};
	line-height: {$count_styles['line_height']};
	letter-spacing: {$count_styles['letter_spacing']};
}
#$block_id .cozy-block-product-category__stacked .product-count {
    top: {$attributes['productCount']['top']}px;
}
#$block_id.product-count-position-left .cozy-block-product-category__stacked .product-count {
    left: {$attributes['productCount']['left']}px;
    right: auto;
}
#$block_id.product-count-position-right .cozy-block-product-category__stacked .product-count {
    right: {$attributes['productCount']['right']}px;
    left: auto;
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
	text-align: {$bullet['align']};
    {$bullet['left']}
    {$bullet['right']}
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
#$block_id.swiper-horizontal .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$attributes['pagination']['gap']});
}
#$block_id.swiper-vertical .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: var(--swiper-pagination-bullet-vertical-gap, {$attributes['pagination']['gap']}) 0;
}
";

$classes   = array();
$classes[] = 'cozy-block-product-category';
$classes[] = 'display-' . $attributes['display'];
$classes[] = 'cozy-product-category__swiper-container';
$classes[] = $attributes['navigation']['hoverShow'] ? 'hover-show' : '';
$classes[] = $attributes['containerStyles']['boxShadow']['enabled'] ? 'has-box-shadow' : '';
$classes[] = $attributes['featuredImage']['hoverEffect'] ? 'has-image-hover-effect' : '';
$classes[] = 'product-count-position-' . $attributes['productCount']['position'];

$output = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';

$wrapper_classes   = array();
$wrapper_classes[] = 'woo-product-category-wrapper';
$wrapper_classes[] = 'carousel' === $attributes['display'] ? 'swiper-wrapper' : '';
$output           .= '<ul class="' . implode( ' ', $wrapper_classes ) . '">';

// Loop through categories.
$args = array(
	'taxonomy'   => 'product_cat',
	'hide_empty' => true,
	'number'     => -1 != $attributes['perPage'] ? $attributes['perPage'] : 10,
	'order'      => 'DESC',
	'orderby'    => 'count',
);

$categories = get_terms( $args );
foreach ( $categories as $product_cat ) {
	$cat_item_classes   = array();
	$cat_item_classes[] = 'woo-product-category';
	$cat_item_classes[] = isset( $attributes['gridOptions']['invertLayout'] ) && filter_var( $attributes['gridOptions']['invertLayout'], FILTER_VALIDATE_BOOLEAN ) ? 'has-invert-layout' : '';
	$cat_item_classes[] = 'carousel' === $attributes['display'] ? 'swiper-slide' : '';
	$output            .= '<li class="' . implode( ' ', $cat_item_classes ) . '">';
	$cat_link           = get_category_link( $product_cat->term_id );
	$open_new_tab       = isset( $attributes['enableOptions']['linkNewTab'] ) && $attributes['enableOptions']['linkNewTab'] ? '_blank' : '';
	$output            .= '<a class="woo-product-category__link" href="' . esc_url( $cat_link ) . '" target="' . $open_new_tab . '" rel="noopener">';

	$output      .= '<div class="cozy-block-product-category__stacked" style="position:relative">';
	$thumbnail_id = get_term_meta( $product_cat->term_id, 'thumbnail_id', true );
	// get the image URL.
	$image_url = wp_get_attachment_url( $thumbnail_id );
	if ( $attributes['enableOptions']['image'] && isset( $image_url ) && ! empty( $image_url ) ) {
		$output .= '<figure class="cozy-block-product-category__image">';
		$output .= '<img src="' . $image_url . '" />';
		$output .= '</figure>';
	}
	if ( $attributes['enableOptions']['count'] && 'badge' === $attributes['productCount']['display'] ) {
		$output .= '<div class="product-count-wrapper">';
		$output .= '<span class="product-count">';
		$output .= esc_html( $attributes['productCount']['labelBefore'] ) . esc_html( $product_cat->count ) . esc_html( $attributes['productCount']['labelAfter'] );
		$output .= '</span>';
		$output .= '</div>';
	}
	$output .= '</div>';

	if ( $attributes['enableOptions']['name'] ) {
		$output .= '<div class="category-name">' . esc_html( $product_cat->name ) . '</div>';
	}

	if ( $attributes['enableOptions']['count'] && 'default' === $attributes['productCount']['display'] ) {
		$output .= '<div class="product-count-wrapper">';
		$output .= '<span class="product-count">';
		$output .= esc_html( $attributes['productCount']['labelBefore'] ) . esc_html( $product_cat->count ) . esc_html( $attributes['productCount']['labelAfter'] );
		$output .= '</span>';
		$output .= '</div>';
	}

	$output .= '</a>';
	$output .= '</li>';
}

$output .= '</ul>';

wp_reset_postdata();

// Swiper Pagination and Navigation.
if ( 'carousel' === $attributes['display'] ) {
	if ( $attributes['navigation']['enabled'] ) {
		$output .= '<div class="swiper-button-prev cozy-block-button-prev"></div>';
		$output .= '<div class="swiper-button-next cozy-block-button-next"></div>';
	}
	if ( $attributes['pagination']['enabled'] ) {
		$output .= '<div class="swiper-pagination cozy-pagination"></div>';
	}
}
$output .= '</div>';

$font_families = array();

if ( isset( $attributes['containerStyles']['fontFamily'] ) && ! empty( $attributes['containerStyles']['fontFamily'] ) ) {
	$font_families[] = $attributes['containerStyles']['fontFamily'];
}
if ( isset( $attributes['productCount']['fontFamily'] ) && ! empty( $attributes['productCount']['fontFamily'] ) ) {
	$font_families[] = $attributes['productCount']['fontFamily'];
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

$render = sprintf( '<div class="cozy-block-wrapper cozy-block-product-category-wrapper display-' . $attributes['display'] . '"><div %1$s>%2$s</div></div>', $wrapper_attributes, $output );
echo $render;
