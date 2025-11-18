<?php
$client_id          = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$block_id           = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$box_bg_color       = isset( $attributes['boxStyles']['bgColor'] ) ? $attributes['boxStyles']['bgColor'] : '';
$box_bg_color_hover = isset( $attributes['boxStyles']['bgColorHover'] ) ? $attributes['boxStyles']['bgColorHover'] : '';

$wrapper_styles = array(
	'align' => isset( $attributes['align'] ) ? $attributes['align'] : 'center',
);

$margin = array(
	'top'    => isset( $attributes['margin']['top'] ) ? $attributes['margin']['top'] : '',
	'right'  => isset( $attributes['margin']['right'] ) ? $attributes['margin']['right'] : '',
	'bottom' => isset( $attributes['margin']['bottom'] ) ? $attributes['margin']['bottom'] : '',
	'left'   => isset( $attributes['margin']['left'] ) ? $attributes['margin']['left'] : '',
);

$icon_color = array(
	'border'       => isset( $attributes['boxStyles']['borderColor'] ) ? $attributes['boxStyles']['borderColor'] : '',
	'border_hover' => isset( $attributes['boxStyles']['borderColorHover'] ) ? $attributes['boxStyles']['borderColorHover'] : '',
	'hover'        => isset( $attributes['iconColorHover'] ) ? $attributes['iconColorHover'] : '',
);

$stroke_hover_color = 'outline' === $attributes['layout'] ? $icon_color['hover'] : '';

$block_styles = "
.cozy-block-icon-wrapper {
	justify-content: {$wrapper_styles['align']};
}
	
#$block_id {
    margin-top: {$margin['top']}px;
    margin-right: {$margin['right']}px;
    margin-bottom: {$margin['bottom']}px;
    margin-left: {$margin['left']}px;
}

#$block_id.stacked {
    padding: {$attributes['boxStyles']['padding']['top']}px {$attributes['boxStyles']['padding']['right']}px {$attributes['boxStyles']['padding']['bottom']}px {$attributes['boxStyles']['padding']['left']}px;
    border: {$attributes['boxStyles']['borderWidth']}px {$attributes['boxStyles']['borderType']} {$icon_color['border']};
    border-radius: {$attributes['boxStyles']['borderRadius']}px;
    background-color: {$box_bg_color};
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
}

#$block_id svg {
    rotate: {$attributes['iconRotate']}deg;
}

#$block_id.stacked:hover {
    background-color: {$box_bg_color_hover};
    border-color: {$icon_color['border_hover']};
}

#$block_id:hover svg {
    fill: {$icon_color['hover']};
}
#$block_id:hover svg {
    stroke: {$stroke_hover_color};
}
";

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$wrapper_attributes = get_block_wrapper_attributes();

?>

<div class="cozy-block-wrapper cozy-block-icon-wrapper">
	<div <?php echo $wrapper_attributes; ?>>
		<?php
		if ( isset( $attributes['link']['enabled'], $attributes['link']['url'] ) && $attributes['link']['enabled'] && ! empty( $attributes['link']['url'] ) ) {
			$new_tab  = isset( $attributes['link']['newTab'] ) && $attributes['link']['newTab'] ? '_blank' : '';
			$nofollow = isset( $attributes['link']['noFollow'] ) && $attributes['link']['noFollow'] ? 'nofollow' : '';
			?>
			<a href="<?php echo esc_url( $attributes['link']['url'] ); ?>" target="<?php echo esc_attr( $new_tab ); ?>" rel="<?php echo esc_attr( $nofollow ); ?>">
			<?php
		}

		echo $content;

		if ( isset( $attributes['link']['enabled'], $attributes['link']['url'] ) && $attributes['link']['enabled'] && ! empty( $attributes['link']['url'] ) ) {
			?>
			</a>
			<?php
		}
		?>
	</div>
</div>