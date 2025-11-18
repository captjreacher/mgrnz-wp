<?php
$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['clientId'] ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

wp_localize_script( 'cozy-block--advanced-categories--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--advanced-categories--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockAdvancedCategories( "' . $client_id . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$classes   = array();
$classes[] = 'cozy-block-advanced-categories';
$classes[] = 'display-' . $attributes['display'];
$classes[] = 'layout-' . $attributes['layout'];
$classes[] = 'cover' === $attributes['layout'] && $attributes['layoutHover'] ? 'has-layout-hover-effect' : '';
$classes[] = 'carousel' === $attributes['display'] ? 'swiper-container' : '';
$classes[] = 'carousel' === $attributes['display'] && $attributes['navigation']['hoverShow'] ? 'has-nav-hover-show' : '';

$column1 = $attributes['gridOptions']['columnCount'] <= 3 ? $attributes['gridOptions']['columnCount'] : 3;
$column2 = $attributes['gridOptions']['columnCount'] <= 2 ? $attributes['gridOptions']['columnCount'] : 2;

$item_div_padding = cozy_render_TRBL( 'padding', $attributes['categoryItem']['padding'] );
$item_div_border  = isset( $attributes['categoryItem']['border'] ) ? cozy_render_TRBL( 'border', $attributes['categoryItem']['border'] ) : '';
$item_div_radius  = cozy_render_TRBL( 'border-radius', $attributes['categoryItem']['radius'] );
$item_styles      = array(
	'shadow_color'       => isset( $attributes['categoryItem']['shadow']['color'] ) ? $attributes['categoryItem']['shadow']['color'] : '',
	'bg_color'           => isset( $attributes['categoryItem']['bgColor'] ) ? $attributes['categoryItem']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['categoryItem']['bgColorHover'] ) ? $attributes['categoryItem']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['categoryItem']['borderColorHover'] ) ? $attributes['categoryItem']['borderColorHover'] : '',
);

$image_radius = cozy_render_TRBL( 'border-radius', $attributes['image']['radius'] );

$content_wrapper_padding = cozy_render_TRBL( 'padding', $attributes['contentBox']['padding'] );

$image_color = array(
	'overlay' => isset( $attributes['image']['overlayColor'] ) ? $attributes['image']['overlayColor'] : '',
);

$title_styles = array(
	'letter_case'    => isset( $attributes['title']['letterCase'] ) ? $attributes['title']['letterCase'] : '',
	'decoration'     => isset( $attributes['title']['decoration'] ) ? $attributes['title']['decoration'] : '',
	'line_height'    => isset( $attributes['title']['lineHeight'] ) ? $attributes['title']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['title']['letterSpacing'] ) ? $attributes['title']['letterSpacing'] : '',
	'color'          => isset( $attributes['title']['color'] ) ? $attributes['title']['color'] : '',
	'color_hover'    => isset( $attributes['title']['colorHover'] ) ? $attributes['title']['colorHover'] : '',
);

$icon_box_padding = cozy_render_TRBL( 'padding', $attributes['iconBox']['padding'] );
$icon_box_border  = isset( $attributes['iconBox']['border'] ) ? cozy_render_TRBL( 'border', $attributes['iconBox']['border'] ) : '';
$icon_box_styles  = array(
	'bg_color'           => isset( $attributes['iconBox']['bgColor'] ) ? $attributes['iconBox']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['iconBox']['bgColorHover'] ) ? $attributes['iconBox']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['iconBox']['borderColorHover'] ) ? $attributes['iconBox']['borderColorHover'] : '',
);

$icon_opacity = number_format( floatval( $attributes['icon']['opacity'] / 100 ), 2 );
$icon_styles  = array(
	'color'       => isset( $attributes['icon']['color'] ) ? $attributes['icon']['color'] : $title_styles['color'],
	'color_hover' => isset( $attributes['icon']['colorHover'] ) ? $attributes['icon']['colorHover'] : $title_styles['color_hover'],
);

$count_padding = cozy_render_TRBL( 'padding', $attributes['postCount']['padding'] );
$count_border  = isset( $attributes['postCount']['border'] ) ? cozy_render_TRBL( 'border', $attributes['postCount']['border'] ) : '';
$count_radius  = cozy_render_TRBL( 'border-radius', $attributes['postCount']['radius'] );
$count_styles  = array(
	'color'    => isset( $attributes['postCount']['color'] ) ? $attributes['postCount']['color'] : '',
	'bg_color' => isset( $attributes['postCount']['bgColor'] ) ? $attributes['postCount']['bgColor'] : '',
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

// Block Styles START.
$block_styles = "
#$block_id {
    text-align: {$attributes['textAlign']};
}

#$block_id.display-grid .grid-wrapper {
    grid-template-columns: repeat({$attributes['gridOptions']['columnCount']}, 1fr);
    gap: {$attributes['gridOptions']['gap']};
}
@media screen and (max-width: 1024px) {
    #$block_id.display-grid .grid-wrapper {
        grid-template-columns: repeat(
            $column1,
            1fr
        ) !important;
    }
}
@media screen and (max-width: 767px) {
    #$block_id.display-grid .grid-wrapper {
        grid-template-columns: repeat(
            $column2,
            1fr
        ) !important;
    }
}
@media screen and (max-width: 400px) {
    #$block_id.display-grid .grid-wrapper {
        grid-template-columns: repeat(
            1,
            1fr
        ) !important;
    }
}

#$block_id.display-list .list-wrapper .cozy-block-advanced-categories__category-item {
    margin-bottom: {$attributes['listOptions']['gap']};
}
#$block_id .cozy-block-advanced-categories__category-item {
	{$item_div_padding}
	{$item_div_border}
	{$item_div_radius}
	background-color: {$item_styles['bg_color']};
	
	&.has-box-shadow {
		box-shadow: {$attributes['categoryItem']['shadow']['horizontal']}px {$attributes['categoryItem']['shadow']['vertical']}px {$attributes['categoryItem']['shadow']['blur']}px {$attributes['categoryItem']['shadow']['spread']}px {$item_styles['shadow_color']} {$attributes['categoryItem']['shadow']['position']};
	}
}
#$block_id .cozy-block-advanced-categories__category-item:hover {
	background-color: {$item_styles['bg_color_hover']};
	border-color: {$item_styles['border_color_hover']};
}
#$block_id.display-list .cozy-block-advanced-categories__category-item {
	height: {$attributes['listOptions']['height']};
}

#$block_id.display-list .cozy-block-advanced-categories__image {
	max-height: {$attributes['listOptions']['height']};
}
#$block_id.display-list .cozy-block-advanced-categories__image img {
	height: {$attributes['listOptions']['height']};
}
#$block_id:not(.display-list) .cozy-block-advanced-categories__image {
	max-height: {$attributes['image']['height']};
}
#$block_id:not(.display-list) .cozy-block-advanced-categories__image img {
	width: {$attributes['image']['width']};
	height: {$attributes['image']['height']};
}
#$block_id .cozy-block-advanced-categories__image img {
	{$image_radius}
}

#$block_id.layout-cover .cozy-block-advanced-categories__category-item:hover .cozy-block-advanced-categories__background {
	background-color: {$image_color['overlay']};
}

#$block_id .cozy-block-advanced-categories__content-wrapper {
	{$content_wrapper_padding}
}

#$block_id .cozy-block-advanced-categories__title {
	justify-content: {$attributes['textAlign']};
	gap: {$attributes['icon']['gap']};
}

#$block_id .cozy-block-advanced-categories__icon-wrapper.view-stacked {
	{$icon_box_padding}
	{$icon_box_border}
	border-radius: {$attributes['iconBox']['radius']};
	background-color: {$icon_box_styles['bg_color']};
}
#$block_id .cozy-block-advanced-categories__category-item:hover .cozy-block-advanced-categories__icon-wrapper.view-stacked {
	background-color: {$icon_box_styles['bg_color_hover']};
	border-color: {$icon_box_styles['border_color_hover']};
}
#$block_id .cozy-block-advanced-categories__icon {
	width: {$attributes['icon']['size']};
	height: {$attributes['icon']['size']};
}
#$block_id .layout-fill .cozy-block-advanced-categories__icon {
	opacity: {$icon_opacity};
	fill: {$icon_styles['color']};
	stroke: none;
}
#$block_id .layout-outline .cozy-block-advanced-categories__icon {
	stroke: {$icon_styles['color']};
	fill: none;
}
#$block_id.layout-default .cozy-block-advanced-categories__category-item:hover .layout-fill .cozy-block-advanced-categories__icon {
	fill: {$icon_styles['color_hover']};
}
#$block_id.layout-default .cozy-block-advanced-categories__category-item:hover .layout-outline .cozy-block-advanced-categories__icon {
	stroke: {$icon_styles['color_hover']};
}
#$block_id.layout-cover .cozy-block-advanced-categories__content-wrapper:hover .layout-fill .cozy-block-advanced-categories__icon {
	fill: {$icon_styles['color_hover']};
}
#$block_id.layout-cover .cozy-block-advanced-categories__content-wrapper:hover .layout-outline .cozy-block-advanced-categories__icon {
	stroke: {$icon_styles['color_hover']};
}

#$block_id .cozy-block-advanced-categories__name {
	font-size: {$attributes['title']['fontSize']};
	font-family: {$attributes['title']['fontFamily']};
	font-weight: {$attributes['title']['fontWeight']};
	text-transform: {$title_styles['letter_case']};
	text-decoration: {$title_styles['decoration']};
	line-height: {$title_styles['line_height']};
	letter-spacing: {$title_styles['letter_spacing']};
	color: {$title_styles['color']};
}
#$block_id.layout-default .cozy-block-advanced-categories__category-item:hover .cozy-block-advanced-categories__name {
	color: {$title_styles['color_hover']};
}
#$block_id.layout-cover .cozy-block-advanced-categories__content-wrapper:hover .cozy-block-advanced-categories__name {
	color: {$title_styles['color_hover']};
}

#$block_id .cozy-block-advanced-categories__count {
	{$count_padding}
	{$count_border}
	{$count_radius}
	color: {$count_styles['color']};
	background-color: {$count_styles['bg_color']};
}
#$block_id.layout-default .cozy-block-advanced-categories__category-item:hover .cozy-block-advanced-categories__count {
	color: {$title_styles['color_hover']};
}
#$block_id.layout-cover .cozy-block-advanced-categories__content-wrapper:hover .cozy-block-advanced-categories__count {
	color: {$title_styles['color_hover']};
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

#$block_id.swiper-container .swiper-pagination {
	bottom: {$attributes['pagination']['verticalPosition']}px;
	text-align: {$bullet['align']};
    {$bullet['left']}
    {$bullet['right']}
}
#$block_id.swiper-container .swiper-pagination .swiper-pagination-bullet {
	width: {$attributes['pagination']['default']['width']};
	height: {$attributes['pagination']['default']['height']};
	border-radius: {$attributes['pagination']['default']['radius']};
	background-color: {$bullet_styles['default_color']};
}
#$block_id.swiper-container .swiper-pagination .swiper-pagination-bullet-active {
	width: {$attributes['pagination']['active']['width']};
	height: {$attributes['pagination']['active']['height']};
	border-radius: {$attributes['pagination']['active']['radius']};
	background-color: {$bullet_styles['active_color']};
	{$bullet_outline}
	outline-offset: {$attributes['pagination']['active']['offset']};
}
#$block_id.swiper-container .swiper-pagination .swiper-pagination-bullet:hover {
	background-color: {$bullet_styles['default_color_hover']};
}
#$block_id.swiper-container .swiper-pagination .swiper-pagination-bullet-active:hover {
	background-color: {$bullet_styles['active_color_hover']};
}
#$block_id.swiper-horizontal .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$attributes['pagination']['gap']});
}
#$block_id.swiper-vertical .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: var(--swiper-pagination-bullet-vertical-gap, {$attributes['pagination']['gap']}) 0;
}
";
// Block Styles END.

$output = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';

$display_wrapper_classes   = array();
$display_wrapper_classes[] = 'carousel' === $attributes['display'] ? 'swiper-wrapper' : $attributes['display'] . '-wrapper';
$output                   .= '<div class="' . implode( ' ', $display_wrapper_classes ) . '">';

// <-- Category Content -->
$args = array(
	'taxonomy'   => 'category',
	'hide_empty' => true,
	'number'     => -1 !== $attributes['perPage'] ? $attributes['perPage'] : '',
	'order'      => 'DESC',
	'orderby'    => 'count',
	// 'parent'     => 0,
);

if ( isset( $attributes['showNestedCategory'] ) && ! filter_var( $attributes['showNestedCategory'], FILTER_VALIDATE_BOOLEAN ) ) {
	$args['parent'] = 0;
}

$categories = get_categories( $args );

// Function to find the index of an object with a specific id.
if ( ! function_exists( 'cozy_find_post_advanced_cat_index' ) ) {
	function cozy_find_post_advanced_cat_index( $cat_options, $id ) {
		foreach ( $cat_options as $index => $item ) {
			if ( $item['id'] === $id ) {
				return $index;
			}
		}
		return -1; // Return -1 if not found, similar to JavaScript's findIndex.
	}
}

foreach ( $categories as $category ) {
	$cat_index = cozy_find_post_advanced_cat_index( $attributes['categoryOptions'], $category->term_id );
	$cat_data  = array();

	if ( -1 != $cat_index ) {
		$cat_data = $attributes['categoryOptions'][ $cat_index ];
	}

	$object_position_x     = ! empty( $cat_data ) && isset( $cat_data, $cat_data['focalPoint']['x'] ) ? floatval( $cat_data['focalPoint']['x'] ) * 100 . '%' : '';
	$object_position_y     = ! empty( $cat_data ) && isset( $cat_data, $cat_data['focalPoint']['y'] ) ? floatval( $cat_data['focalPoint']['y'] ) * 100 . '%' : '';
	$count_singular_styles = array(
		'color'         => ! empty( $cat_data ) && isset( $cat_data, $cat_data['color'] ) ? $cat_data['color'] : '',
		'bg_color'      => ! empty( $cat_data ) && isset( $cat_data, $cat_data['bgColor'] ) ? $cat_data['bgColor'] : '',
		'overlay_color' => ! empty( $cat_data ) && isset( $cat_data, $cat_data['overlayColor'] ) ? $cat_data['overlayColor'] : '',
	);

	$cat_styles = "
		#$block_id .cozy-block-advanced-categories__category-item[data-category-id='{$category->term_id}'] .cozy-block-advanced-categories__image img {
			object-position: {$object_position_x} {$object_position_y};
		}
		#$block_id .cozy-block-advanced-categories__category-item[data-category-id='{$category->term_id}'] .cozy-block-advanced-categories__background {
			background-color: {$count_singular_styles['overlay_color']};
		}
		#$block_id .cozy-block-advanced-categories__category-item[data-category-id='{$category->term_id}'] .cozy-block-advanced-categories__count {
			color: {$count_singular_styles['color']};
			background-color: {$count_singular_styles['bg_color']};
		}
	";

	$cat_classes   = array();
	$cat_classes[] = 'cozy-block-advanced-categories__category-item';
	$cat_classes[] = 'carousel' === $attributes['display'] ? 'swiper-slide' : '';
	$cat_classes[] = isset( $attributes['categoryItem']['shadow']['enabled'] ) && $attributes['categoryItem']['shadow']['enabled'] ? 'has-box-shadow' : '';
	$output       .= '<style>' . $cat_styles . '</style>';
	$output       .= '<div class="' . implode( ' ', $cat_classes ) . '" data-category-id="' . $category->term_id . '">';

	$has_category_link = isset( $attributes['enableOptions']['linkCategory'] ) && $attributes['enableOptions']['linkCategory'] ? 'href="' . esc_url( get_category_link( $category->term_id ) ) . '"' : '';
	$open_new_tab      = isset( $attributes['enableOptions']['linkCategory'], $attributes['enableOptions']['openNewTab'] ) && $attributes['enableOptions']['linkCategory'] && $attributes['enableOptions']['openNewTab'] ? '_blank' : '';

		$output .= '<a ' . $has_category_link . ' target="' . $open_new_tab . '" rel="noopener">';
	if ( 'cover' === $attributes['layout'] ) {
		$output .= '<span class="cozy-block-advanced-categories__background"></span>';
	}
	if ( $attributes['enableOptions']['image'] && isset( $cat_data, $cat_data['mediaURL'] ) && ! empty( $cat_data ) ) {
		$img_classes   = array();
		$img_classes[] = 'cozy-block-advanced-categories__image';
		$img_classes[] = $attributes['image']['hoverEffect'] ? 'has-image-hover-effect' : '';
		$output       .= '<figure class="' . implode( ' ', $img_classes ) . '">';
			$img_url   = isset( $cat_data['mediaURL'] ) && ! empty( $cat_data['mediaURL'] ) ? $cat_data['mediaURL'] : '';
			$output   .= '<img src="' . $img_url . '" />';
		$output       .= '</figure>';
	}

		$content_wrapper_classes   = array();
		$content_wrapper_classes[] = 'cozy-block-advanced-categories__content-wrapper';
		$content_wrapper_classes[] = 'position-' . str_replace( ' ', '-', $attributes['contentPosition'] );
		$output                   .= '<div class="' . implode( ' ', $content_wrapper_classes ) . '">';
	if ( $attributes['enableOptions']['name'] ) {
		$output .= '<div class="cozy-block-advanced-categories__title">';
		if ( $attributes['enableOptions']['icon'] ) {
			$icon_wrapper_classes   = array();
			$icon_wrapper_classes[] = 'cozy-block-advanced-categories__icon-wrapper';
			$icon_wrapper_classes[] = 'view-' . $attributes['icon']['view'];
			$icon_wrapper_classes[] = 'layout-' . $attributes['icon']['layout'];

			$icon_view_box   = array();
			$icon_view_box[] = $attributes['icon']['viewBox']['vx'];
			$icon_view_box[] = $attributes['icon']['viewBox']['vy'];
			$icon_view_box[] = $attributes['icon']['viewBox']['vw'];
			$icon_view_box[] = $attributes['icon']['viewBox']['vh'];

			$stroke_width   = 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['strokeWidth'] : '';
			$stroke_opacity = 'outline' === $attributes['icon']['layout'] ? number_format( floatval( $attributes['icon']['opacity'] / 100 ), 2 ) : '';

			$output         .= '<div class="' . implode( ' ', $icon_wrapper_classes ) . '">';
				$output     .= '<svg class="cozy-block-advanced-categories__icon" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="' . implode( ' ', $icon_view_box ) . '" stroke-width="' . $stroke_width . '" stroke-opacity="' . $stroke_opacity . '">';
					$output .= '<path d="' . $attributes['icon']['path'] . '" />';
				$output     .= '</svg>';
			$output         .= '</div>';
		}
			$output .= '<p class="cozy-block-advanced-categories__name">' . esc_html( $category->name ) . '</p>';
		$output     .= '</div>';
	}

	if ( $attributes['enableOptions']['count'] ) {
			$output     .= '<p class="cozy-block-advanced-categories__count-wrapper">';
				$output .= '<span class="cozy-block-advanced-categories__count">' . $category->count . '<span>';
			$output     .= '</p>';
	}
		$output .= '</div>'; // Content Wrapper div closing.

		$output .= '</a>';
	$output     .= '</div>';
}

// <--/ Category Content -->

$output .= '</div>';
if ( 'carousel' === $attributes['display'] ) {

	if ( $attributes['navigation']['enabled'] ) {
		$output .= '<div class="swiper-button-prev"></div><div class="swiper-button-next"></div>';
	}

	if ( $attributes['pagination']['enabled'] ) {
		$output .= '<div class="swiper-pagination"></div>';
	}
}
$output .= '</div>';

/* Font Family enqueue */
$font_families = array();

if ( isset( $attributes['title']['fontFamily'] ) && ! empty( $attributes['title']['fontFamily'] ) ) {
	$font_families[] = $attributes['title']['fontFamily'];
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

$render = sprintf( '<div class="cozy-block-wrapper cozy-block-advanced-categories-wrapper"><div %1$s>%2$s</div></div>', $wrapper_attributes, $output );
echo $render;
