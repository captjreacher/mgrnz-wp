<?php
$client_id     = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$container_var = 'cozyContainer_' . str_replace( '-', '_', $client_id );

wp_localize_script( 'cozy-block--container--frontend-script', $container_var, $attributes );
wp_add_inline_script( 'cozy-block--container--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockContainerInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$background_image = $attributes['mediaUrl'] != '' ? 'url("' . $attributes['mediaUrl'] . '")' : 'none';

$block_styles = "
.cozy-block-wrapper.position-sticky {
    z-index: {$attributes['zIndex']};
}

#$block_id {
    background-image: {$background_image};
    background-position: {$attributes['imagePosition']};
    position: {$attributes['position']};
}

#$block_id.fixed-placement-top {
    top: {$attributes['top']}px;
}

#$block_id.fixed-placement-bottom {
    bottom: {$attributes['bottom']}px;
}

#$block_id .cozy-shape-divider-wrapper svg {
    margin: {$attributes['shapeDivider']['margin']['top']}px {$attributes['shapeDivider']['margin']['right']}px {$attributes['shapeDivider']['margin']['bottom']}px {$attributes['shapeDivider']['margin']['left']}px;
    height: {$attributes['shapeDivider']['height']}px;
    fill: {$attributes['shapeDivider']['color']};
}
";

$output = '<div class="cozy-block-wrapper ' . ( 'sticky' === $attributes['position'] ? 'position-sticky' : '' ) . '">';

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', $block_styles );
	}
);

$output .= $content;
$output .= '</div>';

echo $output;
