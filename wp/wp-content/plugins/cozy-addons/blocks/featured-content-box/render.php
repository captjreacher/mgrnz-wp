<?php

$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$cozy_block_var = 'cozyFeaturedContentBox_' . str_replace( '-', '_', $client_id );

$attributes['isPremium'] = cozy_addons_premium_access();

wp_localize_script( 'cozy-block--featured-content-box--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--featured-content-box--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockFeaturedContentBoxInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$width1 = $attributes['gridOptions']['columnCount'] <= 3 ? $attributes['gridOptions']['columnCount'] : 3;
$width2 = $attributes['gridOptions']['columnCount'] <= 2 ? $attributes['gridOptions']['columnCount'] : 2;

$gallery_color = array(
	'bg' => isset( $attributes['galleryOptions']['overlayColorHover'] ) ? $attributes['galleryOptions']['overlayColorHover'] : '',
);

$nav_styles = array(
	'border' => isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '',
);
$nav_color  = array(
	'icon'         => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'bg'           => isset( $attributes['navigation']['backgroundColor'] ) ? $attributes['navigation']['backgroundColor'] : '',
	'icon_hover'   => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_hover'     => isset( $attributes['navigation']['backgroundColorHover'] ) ? $attributes['navigation']['backgroundColorHover'] : '',
	'border_hover' => isset( $attributes['navigation']['borderHover'] ) ? $attributes['navigation']['borderHover'] : '',
);

$bullet       = array(
	'align'         => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'left'          => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? 'padding-left: ' . $attributes['pagination']['left'] . ';' : '',
	'right'         => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? 'padding-right: ' . $attributes['pagination']['right'] . ';' : '',
	'gap'           => isset( $attributes['pagination']['gap'] ) ? $attributes['pagination']['gap'] : 4,
	'active_height' => isset( $attributes['pagination']['activeHeight'] ) ? $attributes['pagination']['activeHeight'] : 10,
	'active_border' => isset( $attributes['pagination']['activeBorder'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['activeBorder'] ) : '',
	'active_offset' => isset( $attributes['pagination']['activeOffset'] ) ? $attributes['pagination']['activeOffset'] : 'center',
);
$bullet_color = array(
	'bg'                  => isset( $attributes['pagination']['color'] ) ? $attributes['pagination']['color'] : '',
	'active_bg'           => isset( $attributes['pagination']['activeColor'] ) ? $attributes['pagination']['activeColor'] : '',
	'bg_hover'            => isset( $attributes['pagination']['colorHover'] ) ? $attributes['pagination']['colorHover'] : '',
	'active_bg_hover'     => isset( $attributes['pagination']['activeColorHover'] ) ? $attributes['pagination']['activeColorHover'] : '',
	'active_border_hover' => isset( $attributes['pagination']['activeBorderHover'] ) ? $attributes['pagination']['activeBorderHover'] : '',
);

$block_styles = "
#$block_id {
    margin: {$attributes['margin']['top']}px {$attributes['margin']['right']}px {$attributes['margin']['bottom']}px {$attributes['margin']['left']}px;
}

#$block_id.display-grid .cozy-grid-wrapper {
    row-gap: {$attributes['gridOptions']['gap']}px;
    column-gap: {$attributes['gridOptions']['gap']}px;
}
#$block_id.display-grid:not(.has-masonry) .cozy-grid-wrapper {
    grid-template-columns: repeat({$attributes['gridOptions']['columnCount']}, 1fr);
}
#$block_id.display-grid.has-masonry .cozy-grid-wrapper {
    column-count: {$attributes['gridOptions']['columnCount']};
}
#$block_id.display-grid.has-masonry .cozy-grid-wrapper .cozy-block-grid:not(:first-child) {
    margin-top: {$attributes['gridOptions']['gap']}px;
}
@media screen and (max-width: 1024px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-grid-wrapper {
        grid-template-columns: repeat(
            $width1,
            1fr
        ) !important;
    }

    #$block_id.display-grid.has-masonry .cozy-grid-wrapper {
        column-count: $width1 !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-grid-wrapper {
        grid-template-columns: repeat(
            $width2,
            1fr
        ) !important;
    }

    #$block_id.display-grid.has-masonry .cozy-grid-wrapper {
        column-count: $width2 !important;
    }
}

@media screen and (max-width: 400px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-grid-wrapper {
        grid-template-columns: repeat(
            1,
            1fr
        ) !important;
    }

    #$block_id.display-grid.has-masonry .cozy-grid-wrapper {
        column-count: 1 !important;
    }
}

#$block_id.layout-stacked .cozy-stacked-image {
    bottom: {$attributes['stackedImage']['verticalPosition']}px;
}

#$block_id.layout-gallery .cozy-featured-content-box__layout-gallery:hover .wp-block-cover__background {
    background-color: {$gallery_color['bg']} !important;
    opacity: {$attributes['galleryOptions']['overlayOpacity']} !important;
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
    font-size: {$attributes['navigation']['iconSize']}px;
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
    width: {$attributes['navigation']['iconBoxWidth']}px;
    height: {$attributes['navigation']['iconBoxHeight']}px;
    {$nav_styles['border']}
    border-radius: {$attributes['navigation']['borderRadius']}px;
    color: {$nav_color['icon']};
    background-color: {$nav_color['bg']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
    color: {$nav_color['icon_hover']};
    background-color: {$nav_color['bg_hover']};
    border-color: {$nav_color['border_hover']};
}
#$block_id .swiper-pagination {
    bottom: {$attributes['pagination']['verticalPosition']}px;
    text-align: {$bullet['align']};
    {$bullet['left']}
    {$bullet['right']}
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
    width: {$attributes['pagination']['width']}px;
    height: {$attributes['pagination']['height']}px;
    border-radius: {$attributes['pagination']['borderRadius']}px;
    background-color: {$bullet_color['bg']};
}
#$block_id.swiper-horizontal .swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullet['gap']}px);
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
    width: {$attributes['pagination']['activeWidth']}px;
    height: {$bullet['active_height']}px;
    {$bullet['active_border']}
    outline-offset: {$bullet['active_offset']}px;
    border-radius: {$attributes['pagination']['activeBorderRadius']}px;
    background-color: {$bullet_color['active_bg']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
    background-color: {$bullet_color['bg_hover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
    background-color: {$bullet_color['active_bg_hover']};
    outline-color: {$bullet_color['active_border_hover']};
}
";

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$classes   = array();
$classes[] = 'cozy-block-wrapper';
$classes[] = cozy_addons_premium_access() && 'carousel' === $attributes['display'] && isset( $attributes['sliderOptions']['smoothTransition'] ) && $attributes['sliderOptions']['smoothTransition'] ? 'swiper__smooth-transition' : '';
?>

<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
	<?php echo $content; ?>
</div>