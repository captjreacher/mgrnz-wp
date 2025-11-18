<?php

$client_id  = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$slider_var = 'slider_' . str_replace( '-', '_', $client_id );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$bullet_styles = array(
	'active' => array(
		'border' => isset( $attributes['pagination']['activeBorder'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['activeBorder'] ) : '',
		'offset' => isset( $attributes['pagination']['activeOffset'] ) ? $attributes['pagination']['activeOffset'] : '4px',
	),
	'color'  => array(
		'active_border_hover' => isset( $attributes['pagination']['activeBorderHover'] ) ? $attributes['pagination']['activeBorderHover'] : '',
	),
);

$block_styles = "
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
    {$bullet_styles['active']['border']}
    outline-offset: {$bullet_styles['active']['offset']};
}

#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
	outline-color: {$bullet_styles['color']['active_border_hover']};
}
";

wp_localize_script( 'cozy-block--slider--frontend-script', $slider_var, $attributes );
wp_add_inline_script( 'cozy-block--slider--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockSliderInit( "' . esc_html( $client_id ) . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$classes   = array();
$classes[] = 'cozy-block-wrapper';
$classes[] = 'cozy-block-slider-wrapper';

$output = '<div class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '"><div ' . $wrapper_attributes . '>';

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$output .= $content;

$output .= '</div></div>';

echo $output;
