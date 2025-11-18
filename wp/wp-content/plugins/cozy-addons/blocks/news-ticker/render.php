<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyNewsTicker_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--news-ticker--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--news-ticker--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockNewsTickerInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$nav_color = array(
	'bg'         => isset( $attributes['carouselOptions']['navigation']['backgroundColor'] ) ? $attributes['carouselOptions']['navigation']['backgroundColor'] : '',
	'icon'       => isset( $attributes['carouselOptions']['navigation']['color'] ) ? $attributes['carouselOptions']['navigation']['color'] : '',
	'bg_hover'   => isset( $attributes['carouselOptions']['navigation']['backgroundColorHover'] ) ? $attributes['carouselOptions']['navigation']['backgroundColorHover'] : '',
	'icon_hover' => isset( $attributes['carouselOptions']['navigation']['colorHover'] ) ? $attributes['carouselOptions']['navigation']['colorHover'] : '',
);

$block_styles = "
#$block_id .swiper-container {
    max-height: {$attributes['height']}px;
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
    font-size: {$attributes['carouselOptions']['navigation']['iconSize']}px;
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
    width: {$attributes['carouselOptions']['navigation']['iconBoxWidth']}px;
    height: {$attributes['carouselOptions']['navigation']['iconBoxHeight']}px;
    border-radius: {$attributes['carouselOptions']['navigation']['borderRadius']}px;
    color: {$nav_color['icon']};
    background-color: {$nav_color['bg']};
    margin-top: {$attributes['carouselOptions']['navigation']['verticalGap']}px;
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
    color: {$nav_color['icon_hover']};
    background-color: {$nav_color['bg_hover']};
}
#$block_id .swiper-button-prev {
    right: var(--swiper-navigation-sides-offset, {$attributes['carouselOptions']['navigation']['horizontalGap']}px);
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
