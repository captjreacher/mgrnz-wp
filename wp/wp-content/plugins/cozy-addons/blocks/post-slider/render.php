<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyPostSlider_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--post-slider--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--post-slider--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockPostSliderInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$nav_styles = array(
	'border' => isset( $attributes['carouselOptions']['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['carouselOptions']['navigation']['border'] ) : '',
	'color'  => array(
		'border_hover' => isset( $attributes['carouselOptions']['navigation']['borderHover'] ) ? $attributes['carouselOptions']['navigation']['borderHover'] : '',
	),
);

$bullet_styles = array(
	'gap'    => isset( $attributes['carouselOptions']['pagination']['gap'] ) ? $attributes['carouselOptions']['pagination']['gap'] : '4',
	'active' => array(
		'height' => isset( $attributes['carouselOptions']['pagination']['activeHeight'] ) ? $attributes['carouselOptions']['pagination']['activeHeight'] : '',
		'border' => isset( $attributes['carouselOptions']['pagination']['activeBorder'] ) ? cozy_render_TRBL( 'outline', $attributes['carouselOptions']['pagination']['activeBorder'] ) : '',
		'offset' => isset( $attributes['carouselOptions']['pagination']['activeOffset'] ) ? $attributes['carouselOptions']['pagination']['activeOffset'] : '',
	),
);


$block_styles = "
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
    {$nav_styles['border']}
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
	border-color: {$nav_styles['color']['border_hover']};
}

#$block_id .swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullet_styles['gap']}px);
}
#$block_id .swiper-pagination-bullet-active {
    height: {$bullet_styles['active']['height']}px !important;
    {$bullet_styles['active']['border']}
    outline-offset: {$bullet_styles['active']['offset']}px;
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
$classes[] = 'cozy-block-post-slider-wrapper';
$classes[] = isset( $attributes['carouselOptions']['smoothTransition'] ) && $attributes['carouselOptions']['smoothTransition'] ? 'swiper__smooth-transition' : '';
?>

<div class="<?php echo esc_html( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
	<?php echo $content; ?>
</div>
