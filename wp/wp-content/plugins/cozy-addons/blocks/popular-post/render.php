<?php
$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['clientId'] ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['ajaxUrl'] = admin_url( 'admin-ajax.php' );
$attributes['nonce']   = wp_create_nonce( 'cozy_block_popular_posts_load_more' );
wp_localize_script( 'cozy-block--popular-post--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--popular-post--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockPopularPostsInit( "' . $client_id . '" ) }) ' );

$list = array(
	'column' => isset( $attributes['column'] ) ? $attributes['column'] : '',
	'gap'    => isset( $attributes['columnGap'] ) ? $attributes['columnGap'] : '',
);

$col1 = isset( $attributes['column'] ) && $attributes['column'] <= 3 ? $attributes['column'] : 3;
$col2 = isset( $attributes['column'] ) && $attributes['column'] <= 2 ? $attributes['column'] : 2;

$item_padding = cozy_render_TRBL( 'padding', $attributes['itemStyles']['padding'] );
$item_border  = isset( $attributes['itemStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['itemStyles']['border'] ) : '';
$item_radius  = cozy_render_TRBL( 'border-radius', $attributes['itemStyles']['radius'] );
$item_styles  = array(
	'bg_color'           => isset( $attributes['itemStyles']['bgColor'] ) ? $attributes['itemStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['itemStyles']['bgColorHover'] ) ? $attributes['itemStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['itemStyles']['borderColorHover'] ) ? $attributes['itemStyles']['borderColorHover'] : '',
	'shadow_color'       => isset( $attributes['itemStyles']['boxShadow']['color'] ) ? $attributes['itemStyles']['boxShadow']['color'] : '',
);

$cat_padding = cozy_render_TRBL( 'padding', $attributes['categoryStyles']['padding'] );
$cat_border  = isset( $attributes['categoryStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['categoryStyles']['border'] ) : '';
$cat_styles  = array(
	'letter_case'        => isset( $attributes['categoryStyles']['letterCase'] ) ? $attributes['categoryStyles']['letterCase'] : '',
	'decoration'         => isset( $attributes['categoryStyles']['decoration'] ) ? $attributes['categoryStyles']['decoration'] : '',
	'line_height'        => isset( $attributes['categoryStyles']['lineHeight'] ) ? $attributes['categoryStyles']['lineHeight'] : '',
	'letter_spacing'     => isset( $attributes['categoryStyles']['letterSpacing'] ) ? $attributes['categoryStyles']['letterSpacing'] : '',
	'color'              => isset( $attributes['categoryStyles']['color'] ) ? $attributes['categoryStyles']['color'] : '',
	'color_hover'        => isset( $attributes['categoryStyles']['colorHover'] ) ? $attributes['categoryStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['categoryStyles']['bgColor'] ) ? $attributes['categoryStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['categoryStyles']['bgColorHover'] ) ? $attributes['categoryStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['categoryStyles']['borderColorHover'] ) ? $attributes['categoryStyles']['borderColorHover'] : '',
);

$post_image = array(
	'margin' => array(
		'top'    => isset( $attributes['images']['margin']['top'] ) ? $attributes['images']['margin']['top'] : '',
		'bottom' => isset( $attributes['images']['margin']['bottom'] ) ? $attributes['images']['margin']['bottom'] : '',
	),
);

$title_styles = array(
	'letter_case'    => isset( $attributes['titleStyles']['letterCase'] ) ? $attributes['titleStyles']['letterCase'] : '',
	'decoration'     => isset( $attributes['titleStyles']['decoration'] ) ? $attributes['titleStyles']['decoration'] : '',
	'line_height'    => isset( $attributes['titleStyles']['lineHeight'] ) ? $attributes['titleStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['titleStyles']['letterSpacing'] ) ? $attributes['titleStyles']['letterSpacing'] : '',
	'color'          => isset( $attributes['titleStyles']['color'] ) ? $attributes['titleStyles']['color'] : '',
	'color_hover'    => isset( $attributes['titleStyles']['colorHover'] ) ? $attributes['titleStyles']['colorHover'] : '',
);

$date_padding = cozy_render_TRBL( 'padding', $attributes['dateStyles']['padding'] );
$date_border  = isset( $attributes['dateStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['dateStyles']['border'] ) : '';
$date_styles  = array(
	'letter_case'        => isset( $attributes['dateStyles']['letterCase'] ) ? $attributes['dateStyles']['letterCase'] : '',
	'decoration'         => isset( $attributes['dateStyles']['decoration'] ) ? $attributes['dateStyles']['decoration'] : '',
	'line_height'        => isset( $attributes['dateStyles']['lineHeight'] ) ? $attributes['dateStyles']['lineHeight'] : '',
	'letter_spacing'     => isset( $attributes['dateStyles']['letterSpacing'] ) ? $attributes['dateStyles']['letterSpacing'] : '',
	'color'              => isset( $attributes['dateStyles']['color'] ) ? $attributes['dateStyles']['color'] : '',
	'color_hover'        => isset( $attributes['dateStyles']['colorHover'] ) ? $attributes['dateStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['dateStyles']['bgColor'] ) ? $attributes['dateStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['dateStyles']['bgColorHover'] ) ? $attributes['dateStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['dateStyles']['borderColorHover'] ) ? $attributes['dateStyles']['borderColorHover'] : '',
);

$nav_border = isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '';
$nav_styles = array(
	'color'              => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'color_hover'        => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_color'           => isset( $attributes['navigation']['bgColor'] ) ? $attributes['navigation']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['navigation']['bgColorHover'] ) ? $attributes['navigation']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['navigation']['borderColorHover'] ) ? $attributes['navigation']['borderColorHover'] : '',
);

$bullets = array(
	'width'  => isset( $attributes['pagination']['width'] ) ? $attributes['pagination']['width'] : '10px',
	'height' => isset( $attributes['pagination']['height'] ) ? $attributes['pagination']['height'] : '10px',
	'radius' => isset( $attributes['pagination']['radius'] ) ? $attributes['pagination']['radius'] : '10px',
	'gap'    => isset( $attributes['pagination']['gap'] ) ? $attributes['pagination']['gap'] : '4px',
	'active' => array(
		'width'   => isset( $attributes['pagination']['active']['width'] ) ? $attributes['pagination']['active']['width'] : '10px',
		'height'  => isset( $attributes['pagination']['active']['height'] ) ? $attributes['pagination']['active']['height'] : '10px',
		'radius'  => isset( $attributes['pagination']['active']['radius'] ) ? $attributes['pagination']['active']['radius'] : '10px',
		'outline' => isset( $attributes['pagination']['active']['border'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['active']['border'] ) : '',
		'offset'  => isset( $attributes['pagination']['active']['offset'] ) ? $attributes['pagination']['active']['offset'] : '',
	),
	'color'  => array(
		'default'       => isset( $attributes['pagination']['color']['default'] ) ? $attributes['pagination']['color']['default'] : '',
		'default_hover' => isset( $attributes['pagination']['color']['defaultHover'] ) ? $attributes['pagination']['color']['defaultHover'] : '',
		'active'        => isset( $attributes['pagination']['color']['active'] ) ? $attributes['pagination']['color']['active'] : '',
		'active_hover'  => isset( $attributes['pagination']['color']['activeHover'] ) ? $attributes['pagination']['color']['activeHover'] : '',
	),
	'align'  => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'top'    => isset( $attributes['pagination']['top'] ) ? $attributes['pagination']['top'] : '',
	'left'   => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? $attributes['pagination']['left'] : '',
	'right'  => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? $attributes['pagination']['right'] : '',
);

$loader = array(
	'label'          => isset( $attributes['ajaxLoader']['label'] ) ? $attributes['ajaxLoader']['label'] : '',
	'loading_text'   => isset( $attributes['ajaxLoader']['loadingText'] ) ? $attributes['ajaxLoader']['loadingText'] : '',
	'min_width'      => isset( $attributes['ajaxLoader']['minWidth'] ) ? $attributes['ajaxLoader']['minWidth'] : '',
	'padding'        => isset( $attributes['ajaxLoader']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['ajaxLoader']['padding'] ) : '',
	'margin'         => array(
		'top'    => isset( $attributes['ajaxLoader']['margin']['top'] ) ? $attributes['ajaxLoader']['margin']['top'] : '',
		'bottom' => isset( $attributes['ajaxLoader']['margin']['bottom'] ) ? $attributes['ajaxLoader']['margin']['bottom'] : '',
	),
	'border'         => isset( $attributes['ajaxLoader']['border'] ) ? cozy_render_TRBL( 'border', $attributes['ajaxLoader']['border'] ) : '',
	'radius'         => isset( $attributes['ajaxLoader']['radius'] ) ? $attributes['ajaxLoader']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['ajaxLoader']['font']['size'] ) ? $attributes['ajaxLoader']['font']['size'] : '',
		'weight' => isset( $attributes['ajaxLoader']['font']['weight'] ) ? $attributes['ajaxLoader']['font']['weight'] : '',
		'family' => isset( $attributes['ajaxLoader']['font']['family'] ) ? $attributes['ajaxLoader']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['ajaxLoader']['letterCase'] ) ? $attributes['ajaxLoader']['letterCase'] : '',
	'decoration'     => isset( $attributes['ajaxLoader']['decoration'] ) ? $attributes['ajaxLoader']['decoration'] : '',
	'line_height'    => isset( $attributes['ajaxLoader']['lineHeight'] ) ? $attributes['ajaxLoader']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['ajaxLoader']['letterSpacing'] ) ? $attributes['ajaxLoader']['letterSpacing'] : '',
	'text_align'     => isset( $attributes['ajaxLoader']['textAlign'] ) ? $attributes['ajaxLoader']['textAlign'] : '',
	'color'          => array(
		'text'              => isset( $attributes['ajaxLoader']['color']['text'] ) ? $attributes['ajaxLoader']['color']['text'] : '',
		'text_hover'        => isset( $attributes['ajaxLoader']['color']['textHover'] ) ? $attributes['ajaxLoader']['color']['textHover'] : '',
		'spinner_primary'   => isset( $attributes['ajaxLoader']['color']['spinnerPrimary'] ) ? $attributes['ajaxLoader']['color']['spinnerPrimary'] : '',
		'spinner_secondary' => isset( $attributes['ajaxLoader']['color']['spinnerSecondary'] ) ? $attributes['ajaxLoader']['color']['spinnerSecondary'] : '',
		'bg'                => isset( $attributes['ajaxLoader']['color']['bg'] ) ? $attributes['ajaxLoader']['color']['bg'] : '',
		'bg_hover'          => isset( $attributes['ajaxLoader']['color']['bgHover'] ) ? $attributes['ajaxLoader']['color']['bgHover'] : '',
		'border_hover'      => isset( $attributes['ajaxLoader']['color']['borderHover'] ) ? $attributes['ajaxLoader']['color']['borderHover'] : '',
	),
);

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$block_styles = "
#$block_id.display-ticker {
    height: {$attributes['height']};
}

#$block_id.display-grid .cozy-block-popular-posts__grid-wrapper, #$block_id.display-list .cozy-block-popular-posts__list-wrapper {
	grid-template-columns: repeat({$list['column']}, 1fr);
	gap: {$list['gap']};
}
@media screen and (max-width: 1024px) {
	#$block_id.display-grid .cozy-block-popular-posts__grid-wrapper, #$block_id.display-list .cozy-block-popular-posts__list-wrapper {
		grid-template-columns: repeat({$col1}, 1fr);
	}
}
@media screen and (max-width: 767px) {
	#$block_id.display-grid .cozy-block-popular-posts__grid-wrapper, #$block_id.display-list .cozy-block-popular-posts__list-wrapper {
		grid-template-columns: repeat({$col2}, 1fr);
	}
}
@media screen and (max-width: 400px) {
	#$block_id.display-grid .cozy-block-popular-posts__grid-wrapper, #$block_id.display-list .cozy-block-popular-posts__list-wrapper {
		grid-template-columns: repeat(1, 1fr);
	}
}

#$block_id.display-list .cozy-block-popular-posts__list-wrapper {
    row-gap: {$attributes['gap']};
}
#$block_id .cozy-block-popular-posts__item {
    {$item_padding}
    {$item_border}
    {$item_radius}
    background-color: {$item_styles['bg_color']};
}
#$block_id.item-has-box-shadow .cozy-block-popular-posts__item {
    box-shadow: {$attributes['itemStyles']['boxShadow']['horizontal']}px {$attributes['itemStyles']['boxShadow']['vertical']}px {$attributes['itemStyles']['boxShadow']['blur']}px {$attributes['itemStyles']['boxShadow']['spread']}px {$item_styles['shadow_color']} {$attributes['itemStyles']['boxShadow']['position']};
}
#$block_id .cozy-block-popular-posts__item:hover {
    border-color: {$item_styles['border_color_hover']};
    background-color: {$item_styles['bg_color_hover']};
}

#$block_id .cozy-block-popular-posts__image  {
	max-height: {$attributes['imageStyles']['height']};
	max-width: {$attributes['imageStyles']['width']};
	border-radius: {$attributes['imageStyles']['radius']};
	margin-top: {$post_image['margin']['top']};
	margin-bottom: {$post_image['margin']['bottom']};
}
#$block_id.display-list .cozy-block-popular-posts__image  {
	min-width: {$attributes['imageStyles']['width']};
	max-width: {$attributes['imageStyles']['width']};
}
#$block_id .cozy-block-popular-posts__image img {
	height: {$attributes['imageStyles']['height']};
	border-radius: {$attributes['imageStyles']['radius']};
}
@media only screen and (max-width: 1024px) {
	#$block_id .cozy-block-popular-posts__image img {
		max-height: {$attributes['imageStyles']['height']};
	}
}

#$block_id .cozy-block-popular-posts__post-categories {
	gap: {$attributes['categoryStyles']['gap']};
	font-size: {$attributes['categoryStyles']['fontSize']};
	font-family: {$attributes['categoryStyles']['fontFamily']};
	font-weight: {$attributes['categoryStyles']['fontWeight']};
	text-transform: {$cat_styles['letter_case']};
	text-decoration: {$cat_styles['decoration']};
	line-height: {$cat_styles['line_height']};
	letter-spacing: {$cat_styles['letter_spacing']};
	margin-top: {$attributes['categoryStyles']['marginTop']};
	margin-bottom: {$attributes['categoryStyles']['marginBottom']};
}
#$block_id .cozy-block-popular-posts__post-categories a {
	{$cat_padding}
	{$cat_border}
	border-radius: {$attributes['categoryStyles']['radius']};
	color: {$cat_styles['color']};
	background-color: {$cat_styles['bg_color']};
}
#$block_id .cozy-block-popular-posts__post-categories a:hover {
	color: {$cat_styles['color_hover']};
	background-color: {$cat_styles['bg_color_hover']};
	border-color: {$cat_styles['border_color_hover']};
}

#$block_id .cozy-block-popular-posts__post-title {
	margin-top: {$attributes['titleStyles']['marginTop']};
	margin-bottom: {$attributes['titleStyles']['marginBottom']};
    font-size: clamp(16px, calc(3vw + 4px), {$attributes['titleStyles']['fontSize']});
    font-family: {$attributes['titleStyles']['fontFamily']};
    font-weight: {$attributes['titleStyles']['fontWeight']};
	text-transform: {$title_styles['letter_case']};
	line-height: {$title_styles['line_height']};
	letter-spacing: {$title_styles['letter_spacing']};
}
#$block_id .cozy-block-popular-posts__post-title a {
	text-decoration: {$title_styles['decoration']};
	color: {$title_styles['color']};
}
#$block_id .cozy-block-popular-posts__post-title a:hover {
	color: {$title_styles['color_hover']};
}

#$block_id .post__meta {
	margin-top: {$attributes['dateStyles']['marginTop']};
	margin-bottom: {$attributes['dateStyles']['marginBottom']};
}
#$block_id .post__meta a {
	{$date_padding}
	{$date_border}
	border-radius: {$attributes['dateStyles']['radius']};
	color: {$date_styles['color']};
	background-color: {$date_styles['bg_color']};
	font-size: {$attributes['dateStyles']['fontSize']};
	font-family: {$attributes['dateStyles']['fontFamily']};
	font-weight: {$attributes['dateStyles']['fontWeight']};
	text-transform: {$date_styles['letter_case']};
	text-decoration: {$date_styles['decoration']};
	line-height: {$date_styles['line_height']};
	letter-spacing: {$date_styles['letter_spacing']};
}
#$block_id .post__meta svg {
	fill: {$date_styles['color']};
}
#$block_id .post__meta a:hover {
	color: {$date_styles['color_hover']};
	background-color: {$date_styles['bg_color_hover']};
	border-color: {$date_styles['border_color_hover']};
}
#$block_id .post__meta a:hover svg {
	fill: {$date_styles['color_hover']};
}

#$block_id .cozy-block-popular-posts__ajax-loader-wrapper {
	margin-top: {$loader['margin']['top']};
	margin-bottom: {$loader['margin']['bottom']};
	text-align: {$loader['text_align']};
}
#$block_id .cozy-block-popular-posts__ajax-loader, #$block_id .scroll-spinner.has-loading-text {
	{$loader['padding']}
	{$loader['border']}
	border-radius: {$loader['radius']};
	font-size: {$loader['font']['size']};
	font-weight: {$loader['font']['weight']};
	font-family: {$loader['font']['family']};
	text-transform: {$loader['letter_case']};
	text-decoration: {$loader['decoration']};
	line-height: {$loader['line_height']};
	letter-spacing: {$loader['letter_spacing']};
	color: {$loader['color']['text']};
	background-color: {$loader['color']['bg']};
	min-width: {$loader['min_width']};
}
#$block_id .cozy-block-popular-posts__ajax-loader:hover {
	color: {$loader['color']['text_hover']};
	background-color: {$loader['color']['bg_hover']};
	border-color: {$loader['color']['border_hover']};
}
#$block_id .cozy-block-popular-posts__ajax-loader .spinner,
#$block_id .scroll-spinner {
	border-color: {$loader['color']['spinner_secondary']};
	border-top-color: {$loader['color']['spinner_primary']};
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
#$block_id.display-ticker .swiper-button-prev,
#$block_id.display-ticker .swiper-button-next {
	top: {$attributes['navigation']['verticalPosition']}px;
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
	color: {$nav_styles['color_hover']};
	background-color: {$nav_styles['bg_color_hover']};
	border-color: {$nav_styles['border_color_hover']};
}
#$block_id.display-ticker .swiper-button-prev {
    right: var(--swiper-navigation-sides-offset, {$attributes['navigation']['horizontalGap']});
}

#$block_id.display-carousel .swiper-pagination {
	bottom: {$bullets['top']}px;
	text-align: {$bullets['align']};
	padding-left: {$bullets['left']};
	padding-right: {$bullets['right']};
}
#$block_id.display-carousel .swiper-pagination-bullet {
	width: {$bullets['width']};
	height: {$bullets['height']};
	border-radius: {$bullets['radius']};
	background-color: {$bullets['color']['default']};
}
#$block_id.display-carousel .swiper-pagination-horizontal .swiper-pagination-bullet {
	margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullets['gap']});
}
#$block_id.display-carousel .swiper-pagination-bullet:hover {
	background-color: {$bullets['color']['default_hover']};
}
#$block_id.display-carousel .swiper-pagination-bullet-active {
	width: {$bullets['active']['width']};
	height: {$bullets['active']['height']};
	border-radius: {$bullets['active']['radius']};
	{$bullets['active']['outline']}
	outline-offset: {$bullets['active']['offset']};
	background-color: {$bullets['color']['active']};
}
#$block_id.display-carousel .swiper-pagination-bullet-active:hover {
	background-color: {$bullets['color']['active_hover']};
}
";


$classes   = array();
$classes[] = 'cozy-block-popular-posts';
$classes[] = 'display-' . $attributes['display'];
$classes[] = 'ticker' === $attributes['display'] || 'carousel' === $attributes['display'] ? 'swiper-container' : '';
$classes[] = isset( $attributes['ajaxLoader']['enabled'], $attributes['ajaxLoader']['type'] ) && $attributes['ajaxLoader']['enabled'] && 'scroll' === $attributes['ajaxLoader']['type'] ? 'has-infinite-scroll' : '';
$classes[] = 'carousel' === $attributes['display'] && isset( $attributes['navigation']['hoverEffect'] ) && $attributes['navigation']['hoverEffect'] ? 'has-nav-hover-show' : '';
$classes[] = $attributes['itemStyles']['boxShadow']['enabled'] ? 'item-has-box-shadow' : '';

$output       = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';
$ul_classes   = array();
$ul_classes[] = ( 'grid' === $attributes['display'] || 'list' === $attributes['display'] ) ? 'cozy-block-popular-posts__' . $attributes['display'] . '-wrapper' : 'swiper-wrapper';

$output .= '<ul class="' . implode( ' ', $ul_classes ) . '">';
$args    = array(
	'post_type'           => 'post',
	'meta_key'            => 'cozy_post_views_count', // Replace with your popularity field.
	'orderby'             => 'cozy_post_views_count',
	'order'               => 'DESC',
	'posts_per_page'      => $attributes['perPage'], // Number of popular posts to retrieve.
	'ignore_sticky_posts' => true,
	'meta_query'          => array(
		'relation' => 'AND',
		array(
			'key'     => 'cozy_post_views_count',
			'compare' => 'EXISTS', // Check if the timestamp is greater than or equal to one week ago.
		),
		array(
			'key'     => 'cozy_post_views_count',
			'value'   => '0',
			'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
		),
	),
);

if ( ! function_exists( 'get_cozy_block_popular_posts_data' ) ) {
	function get_cozy_block_popular_posts_data( $args = array() ) {
		if ( ! empty( $args ) ) {
			$popular_posts        = new \WP_Query( $args );
			$additional_post_data = array();

			foreach ( $popular_posts->posts as $post_data ) {
				$post_image_url = get_the_post_thumbnail_url( $post_data->ID );
				$post_link      = get_permalink( $post_data->ID );

				// Get categories and their links.
				$categories                  = get_the_category( $post_data->ID );
				$post_categories             = array();
				$post_id                     = $post_data->ID;
				$post_data                   = (array) $post_data; // Convert WP_Post object to an array.
				$post_data['post_image_url'] = $post_image_url;

				foreach ( $categories as $category ) {
					$post_categories[] = array(
						'name'        => $category->name,
						'link'        => get_category_link( $category->term_id ),
						'count'       => $category->count,
						'description' => $category->description,
						'slug'        => $category->slug,
						'taxonomy'    => $category->taxonomy,
						'parent'      => $category->parent,
					);
				}
				$post_data['post_categories'] = $post_categories;

				$post_data['post_author_name']    = get_the_author_meta( 'display_name', $post_data['post_author'] ) ?? '';
				$post_data['post_author_url']     = get_author_posts_url( $post_data['post_author'] ) ?? '';
				$post_data['post_link']           = $post_link;
				$post_data['post_date_formatted'] = get_the_date( '', $post_id );
				$post_data['comment_link']        = get_comments_link( $post_id );
				$additional_post_data[]           = $post_data;
			}

			wp_reset_postdata();

			return $additional_post_data;
		}
		return array();
	}
}

$additional_post_data = get_cozy_block_popular_posts_data( $args );

foreach ( $additional_post_data as $post_data ) {
	$item_classes   = array();
	$item_classes[] = 'cozy-block-popular-posts__item';
	$item_classes[] = 'ticker' === $attributes['display'] || 'carousel' === $attributes['display'] ? 'swiper-slide' : '';
	$output        .= '<li class="' . implode( ' ', $item_classes ) . '" data-post-id="' . esc_attr( $post_data['ID'] ) . '">';
	if ( 'list' === $attributes['display'] ) {
		$output .= '<div class="item__flex" style="display:flex;gap:' . $attributes['imageStyles']['gap'] . '">';
	}

	// Post Image.
	if ( $attributes['enableOptions']['image'] && ! empty( $post_data['post_image_url'] ) ) {
		$figure_classes   = array();
		$figure_classes[] = 'cozy-block-popular-posts__image';
		$figure_classes[] = $attributes['imageStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$output          .= '<figure class="' . implode( ' ', $figure_classes ) . '">';
		$has_post_link    = isset( $attributes['enableOptions']['imgLinkPost'] ) && $attributes['enableOptions']['imgLinkPost'] ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
		$open_new_tab     = isset( $attributes['enableOptions']['imgLinkPost'], $attributes['enableOptions']['imgLinkNewTab'] ) && $attributes['enableOptions']['imgLinkPost'] && $attributes['enableOptions']['imgLinkNewTab'] ? '_blank' : '';
		$output          .= '<a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">';
		$output          .= '<img alt="' . esc_html( $post_data['post_title'] ) . '" src="' . $post_data['post_image_url'] . '" />';
		$output          .= '</a>';
		$output          .= '</figure>';
	}

	$output .= '<div>';
	// Post Category.
	if ( $attributes['enableOptions']['category'] ) {
		$category_classes   = array();
		$category_classes[] = 'cozy-block-popular-posts__post-categories';
		$category_classes[] = $attributes['categoryStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$output            .= '<div class="' . implode( ' ', $category_classes ) . '">';
		$open_new_tab       = isset( $attributes['enableOptions']['linkCat'], $attributes['enableOptions']['catNewTab'] ) && $attributes['enableOptions']['linkCat'] && $attributes['enableOptions']['catNewTab'] ? '_blank' : '';
		foreach ( $post_data['post_categories'] as $cat_data ) {
			$has_cat_link = isset( $attributes['enableOptions']['linkCat'] ) && $attributes['enableOptions']['linkCat'] ? 'href="' . esc_url( $cat_data['link'] ) . '"' : '';
			$output      .= '<a ' . $has_cat_link . ' target="' . $open_new_tab . '" rel="noopener">';
			$output      .= esc_html( $cat_data['name'] );
			$output      .= '</a>';
		}
		$output .= '</div>';
	}

	// Post Title.
	$has_post_link    = isset( $attributes['enableOptions']['titleLinkPost'] ) && $attributes['enableOptions']['titleLinkPost'] ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
	$open_new_tab     = isset( $attributes['enableOptions']['titleLinkPost'], $attributes['enableOptions']['titleLinkNewTab'] ) && $attributes['enableOptions']['titleLinkPost'] && $attributes['enableOptions']['titleLinkNewTab'] ? '_blank' : '';
	$classes          = array();
	$classes[]        = 'cozy-block-popular-posts__post-title';
	$addition_classes = isset( $attributes['titleStyles']['className'] ) ? $attributes['titleStyles']['className'] : '';
	if ( ! empty( $addition_classes ) ) {
		$classes = array_merge( $classes, explode( ' ', $addition_classes ) );
	}
	$output .= '<h4 class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $post_data['post_title'] ) . '</a></h4>';

	if ( ( isset( $attributes['enableOptions']['author'] ) && $attributes['enableOptions']['author'] ) || ( isset( $attributes['enableOptions']['comments'] ) && $attributes['enableOptions']['comments'] ) || $attributes['enableOptions']['date'] ) {
		$output .= '<div class="post__meta">';

		$has_meta_link = isset( $attributes['enableOptions']['linkPostMeta'] ) && $attributes['enableOptions']['linkPostMeta'] ? true : false;
		$open_new_tab  = isset( $attributes['enableOptions']['linkPostMeta'], $attributes['enableOptions']['postMetaNewTab'] ) && $attributes['enableOptions']['linkPostMeta'] && $attributes['enableOptions']['postMetaNewTab'] ? '_blank' : '';
		$show_icon     = isset( $attributes['enableOptions']['enableMetaIcon'] ) && $attributes['enableOptions']['enableMetaIcon'] ? true : false;

		if ( isset( $attributes['enableOptions']['author'] ) && $attributes['enableOptions']['author'] ) {
			$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_author_url'] ) . '"' : '';
			$output   .= '<a class="post__author display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
			if ( $show_icon ) {
				$output .= '<svg
											width="' . $attributes['dateStyles']['fontSize'] . '"
											height="' . $attributes['dateStyles']['fontSize'] . '"
											xmlns="http://www.w3.org/2000/svg"
											aria-hidden="true"
											viewBox="0 0 12 15"
										>
											<path d="M11.2972 14.6667H0.630493V13.3333C0.630493 12.4493 0.981683 11.6014 1.6068 10.9763C2.23193 10.3512 3.07977 10 3.96383 10H7.96383C8.84788 10 9.69573 10.3512 10.3208 10.9763C10.946 11.6014 11.2972 12.4493 11.2972 13.3333V14.6667ZM5.96383 8.66667C5.43854 8.66667 4.9184 8.5632 4.43309 8.36218C3.94779 8.16117 3.50683 7.86653 3.1354 7.49509C2.76396 7.12366 2.46933 6.6827 2.26831 6.1974C2.06729 5.7121 1.96383 5.19195 1.96383 4.66667C1.96383 4.14138 2.06729 3.62124 2.26831 3.13593C2.46933 2.65063 2.76396 2.20967 3.1354 1.83824C3.50683 1.4668 3.94779 1.17217 4.43309 0.971148C4.9184 0.770129 5.43854 0.666666 5.96383 0.666666C7.02469 0.666666 8.04211 1.08809 8.79225 1.83824C9.5424 2.58838 9.96383 3.6058 9.96383 4.66667C9.96383 5.72753 9.5424 6.74495 8.79225 7.49509C8.04211 8.24524 7.02469 8.66667 5.96383 8.66667Z" />
										</svg>';
			}

			$output .= '<p>' . esc_html( $post_data['post_author_name'] ) . '</p>';
			$output .= '</a>';
		}

		if ( isset( $attributes['enableOptions']['comments'] ) && $attributes['enableOptions']['comments'] && intval( $post_data['comment_count'] ) > 0 ) {
			$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['comment_link'] ) . '"' : '';
			$output   .= '<a class="post__comments display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
			if ( $show_icon ) {
				$output .= '<svg
										width="' . $attributes['dateStyles']['fontSize'] . '"
										height="' . $attributes['dateStyles']['fontSize'] . '"
										xmlns="http://www.w3.org/2000/svg"
										aria-hidden="true"
										viewBox="0 0 25 20"
									>
										<path d="M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z" />
									</svg>';
			}

			$output .= '<p>' . esc_html( $post_data['comment_count'] ) . '</p>';
			$output .= '</a>';
		}

		// Post Date.
		if ( $attributes['enableOptions']['date'] ) {
			$meta_link   = $has_meta_link ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
				$output .= '<a class="post__date display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
			if ( $show_icon ) {
				$output .= '<svg
											width="' . $attributes['dateStyles']['fontSize'] . '"
											height="' . $attributes['dateStyles']['fontSize'] . '"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 16 18"
											aria-hidden="true"
										>
											<path d="M7.66699 10.6666C7.43088 10.6666 7.23296 10.5868 7.07324 10.427C6.91352 10.2673 6.83366 10.0694 6.83366 9.83329C6.83366 9.59718 6.91352 9.39927 7.07324 9.23954C7.23296 9.07982 7.43088 8.99996 7.66699 8.99996C7.9031 8.99996 8.10102 9.07982 8.26074 9.23954C8.42046 9.39927 8.50033 9.59718 8.50033 9.83329C8.50033 10.0694 8.42046 10.2673 8.26074 10.427C8.10102 10.5868 7.9031 10.6666 7.66699 10.6666ZM4.33366 10.6666C4.09755 10.6666 3.89963 10.5868 3.73991 10.427C3.58019 10.2673 3.50033 10.0694 3.50033 9.83329C3.50033 9.59718 3.58019 9.39927 3.73991 9.23954C3.89963 9.07982 4.09755 8.99996 4.33366 8.99996C4.56977 8.99996 4.76769 9.07982 4.92741 9.23954C5.08713 9.39927 5.16699 9.59718 5.16699 9.83329C5.16699 10.0694 5.08713 10.2673 4.92741 10.427C4.76769 10.5868 4.56977 10.6666 4.33366 10.6666ZM11.0003 10.6666C10.7642 10.6666 10.5663 10.5868 10.4066 10.427C10.2469 10.2673 10.167 10.0694 10.167 9.83329C10.167 9.59718 10.2469 9.39927 10.4066 9.23954C10.5663 9.07982 10.7642 8.99996 11.0003 8.99996C11.2364 8.99996 11.4344 9.07982 11.5941 9.23954C11.7538 9.39927 11.8337 9.59718 11.8337 9.83329C11.8337 10.0694 11.7538 10.2673 11.5941 10.427C11.4344 10.5868 11.2364 10.6666 11.0003 10.6666ZM7.66699 14C7.43088 14 7.23296 13.9201 7.07324 13.7604C6.91352 13.6007 6.83366 13.4027 6.83366 13.1666C6.83366 12.9305 6.91352 12.7326 7.07324 12.5729C7.23296 12.4132 7.43088 12.3333 7.66699 12.3333C7.9031 12.3333 8.10102 12.4132 8.26074 12.5729C8.42046 12.7326 8.50033 12.9305 8.50033 13.1666C8.50033 13.4027 8.42046 13.6007 8.26074 13.7604C8.10102 13.9201 7.9031 14 7.66699 14ZM4.33366 14C4.09755 14 3.89963 13.9201 3.73991 13.7604C3.58019 13.6007 3.50033 13.4027 3.50033 13.1666C3.50033 12.9305 3.58019 12.7326 3.73991 12.5729C3.89963 12.4132 4.09755 12.3333 4.33366 12.3333C4.56977 12.3333 4.76769 12.4132 4.92741 12.5729C5.08713 12.7326 5.16699 12.9305 5.16699 13.1666C5.16699 13.4027 5.08713 13.6007 4.92741 13.7604C4.76769 13.9201 4.56977 14 4.33366 14ZM11.0003 14C10.7642 14 10.5663 13.9201 10.4066 13.7604C10.2469 13.6007 10.167 13.4027 10.167 13.1666C10.167 12.9305 10.2469 12.7326 10.4066 12.5729C10.5663 12.4132 10.7642 12.3333 11.0003 12.3333C11.2364 12.3333 11.4344 12.4132 11.5941 12.5729C11.7538 12.7326 11.8337 12.9305 11.8337 13.1666C11.8337 13.4027 11.7538 13.6007 11.5941 13.7604C11.4344 13.9201 11.2364 14 11.0003 14ZM1.83366 17.3333C1.37533 17.3333 0.982964 17.1701 0.656576 16.8437C0.330187 16.5173 0.166992 16.125 0.166992 15.6666V3.99996C0.166992 3.54163 0.330187 3.14926 0.656576 2.82288C0.982964 2.49649 1.37533 2.33329 1.83366 2.33329H2.66699V0.666626H4.33366V2.33329H11.0003V0.666626H12.667V2.33329H13.5003C13.9587 2.33329 14.351 2.49649 14.6774 2.82288C15.0038 3.14926 15.167 3.54163 15.167 3.99996V15.6666C15.167 16.125 15.0038 16.5173 14.6774 16.8437C14.351 17.1701 13.9587 17.3333 13.5003 17.3333H1.83366ZM1.83366 15.6666H13.5003V7.33329H1.83366V15.6666Z" />
										</svg>';
			}

				$output .= '<p>' . esc_html( $post_data['post_date_formatted'] ) . '</p>';
				$output .= '</a>';
		}

		$output .= '</div>';

	}

	// Post Excerpt
	if ( $attributes['enableOptions']['content'] ) {
		$output .= '<p class="cozy-block-popular-posts__content">';
		if ( isset( $post_data['post_excerpt'] ) && ! empty( $post_data['post_excerpt'] ) ) {
			$output .= cozy_create_excerpt( $post_data['post_excerpt'], $attributes['enableOptions']['excerpt'] );
		} else {
			$output .= cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['excerpt'] );
		}
		$output .= '</p>';
	}

	$output .= '</div>';

	if ( 'list' === $attributes['display'] ) {
		$output .= '</div>';
	}
	$output .= '</li>';
}
$output .= '</ul>';

if ( ( 'ticker' === $attributes['display'] || 'carousel' === $attributes['display'] ) && $attributes['navigation']['enabled'] ) {
	$output .= '<div class="swiper-button-prev"></div>';
	$output .= '<div class="swiper-button-next"></div>';
}
if ( 'carousel' === $attributes['display'] && isset( $attributes['pagination'], $attributes['pagination']['enabled'] ) && $attributes['pagination']['enabled'] ) {
	$output .= '<div class="swiper-pagination"></div>';
}

if ( isset( $attributes['ajaxLoader']['enabled'] ) && $attributes['ajaxLoader']['enabled'] && ( 'list' === $attributes['display'] || 'grid' === $attributes['display'] ) ) {
	if ( isset( $attributes['ajaxLoader']['type'] ) && 'default' === $attributes['ajaxLoader']['type'] ) {
		$args['posts_per_page'] = -1;
		$all_posts              = get_cozy_block_popular_posts_data( $args );

		$remaining_posts = array_udiff(
			$all_posts,
			$additional_post_data,
			function ( $a, $b ) {
				return $a['ID'] - $b['ID'];
			}
		);

		$classes   = array();
		$classes[] = 'cozy-block-popular-posts__ajax-loader';
		$classes[] = empty( $remaining_posts ) ? 'display-none' : '';
		$output   .= '<div class="cozy-block-popular-posts__ajax-loader-wrapper">';
		$output   .= '<button class="' . implode( ' ', $classes ) . '">';
		$output   .= '<span>' . esc_html( $loader['label'] ) . '</span>';

		$classes   = array();
		$classes[] = 'spinner';
		$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';
		$output   .= esc_html( $loader['loading_text'] );
		$output   .= '<span class="cozy-block-popular-posts__dots"></span>';
		$output   .= '</div>';

		$output .= '</button>';
		$output .= '</div>';
	}

	if ( isset( $attributes['ajaxLoader']['type'] ) && 'scroll' === $attributes['ajaxLoader']['type'] ) {
		$output   .= '<div style="text-align: center;">';
		$classes   = array();
		$classes[] = 'scroll-spinner';
		$classes[] = 'display-none';
		$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';
		if ( isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ) {
			$output .= esc_html( $loader['loading_text'] );
			$output .= '<span class="cozy-block-popular-posts__dots"></span>';
		}
		$output .= '</div>';
		$output .= '</div>';
	}
}

$output .= '</div>';

$wrapper_attributes = get_block_wrapper_attributes();

$font_families = array();

if ( isset( $attributes['categoryStyles']['fontFamily'] ) && ! empty( $attributes['categoryStyles']['fontFamily'] ) ) {
	$font_families[] = $attributes['categoryStyles']['fontFamily'];
}
if ( isset( $attributes['titleStyles']['fontFamily'] ) && ! empty( $attributes['titleStyles']['fontFamily'] ) ) {
	$font_families[] = $attributes['titleStyles']['fontFamily'];
}
if ( isset( $attributes['dateStyles']['fontFamily'] ) && ! empty( $attributes['dateStyles']['fontFamily'] ) ) {
	$font_families[] = $attributes['dateStyles']['fontFamily'];
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

$render = sprintf( '<div class="cozy-block-wrapper cozy-block-popular-posts-wrapper"><div %1$s>%2$s</div></div>', $wrapper_attributes, $output );
echo $render;
