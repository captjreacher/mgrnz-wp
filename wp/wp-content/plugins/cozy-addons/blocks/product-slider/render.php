<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyProductSlider_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--product-slider--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--product-slider--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductSliderInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

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
	'align'  => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'left'   => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? 'padding-left: ' . $attributes['pagination']['left'] . ';' : '',
	'right'  => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? 'padding-right: ' . $attributes['pagination']['right'] . ';' : '',
	'active' => array(
		'height' => isset( $attributes['pagination']['activeHeight'] ) ? $attributes['pagination']['activeHeight'] : '',
		'border' => isset( $attributes['pagination']['activeBorder'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['activeBorder'] ) : '',
		'offset' => isset( $attributes['pagination']['activeOffset'] ) ? $attributes['pagination']['activeOffset'] : '',
	),
	'gap'    => isset( $attributes['pagination']['gap'] ) ? $attributes['pagination']['gap'] : '',
);
$bullet_color = array(
	'default_bg'       => isset( $attributes['pagination']['color'] ) ? $attributes['pagination']['color'] : '',
	'active_bg'        => isset( $attributes['pagination']['activeColor'] ) ? $attributes['pagination']['activeColor'] : '',
	'default_bg_hover' => isset( $attributes['pagination']['colorHover'] ) ? $attributes['pagination']['colorHover'] : '',
	'active_bg_hover'  => isset( $attributes['pagination']['activeColorHover'] ) ? $attributes['pagination']['activeColorHover'] : '',
);

$block_styles = "
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
    margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullet['gap']}px);
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
    width: {$attributes['pagination']['width']}px;
    height: {$attributes['pagination']['height']}px;
    border-radius: {$attributes['pagination']['borderRadius']}px;
    background-color: {$bullet_color['default_bg']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
    width: {$attributes['pagination']['activeWidth']}px;
    height: {$bullet['active']['height']}px;
    {$bullet['active']['border']}
    outline-offset: {$bullet['active']['offset']}px;
    border-radius: {$attributes['pagination']['activeBorderRadius']}px;
    background-color: {$bullet_color['active_bg']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
    background-color: {$bullet_color['default_bg_hover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
    background-color: {$bullet_color['active_bg_hover']};
}
";

$output = '<div class="cozy-block-wrapper">';

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$output .= $content;
$output .= '</div>';

echo $output;
