<?php
$client_id = ! empty( $attributes['clientId'] ) ? cozy_remove_special_chars( $attributes['clientId'] ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['ajaxUrl']   = admin_url( 'admin-ajax.php' );
$attributes['cartNonce'] = wp_create_nonce( 'cozy_block_wishlist_add_to_cart' );

$button = array(
	'width'          => isset( $attributes['button']['width'] ) ? $attributes['button']['width'] : '',
	'height'         => isset( $attributes['button']['height'] ) ? $attributes['button']['height'] : '',
	'border'         => isset( $attributes['button']['border'] ) ? cozy_render_TRBL( 'border', $attributes['button']['border'] ) : '',
	'shadow_default' => array(
		'horizontal' => isset( $attributes['button']['shadow']['default']['horizontal'] ) ? $attributes['button']['shadow']['default']['horizontal'] : '',
		'vertical'   => isset( $attributes['button']['shadow']['default']['vertical'] ) ? $attributes['button']['shadow']['default']['vertical'] : '',
		'blur'       => isset( $attributes['button']['shadow']['default']['blur'] ) ? $attributes['button']['shadow']['default']['blur'] : '',
		'spread'     => isset( $attributes['button']['shadow']['default']['spread'] ) ? $attributes['button']['shadow']['default']['spread'] : '',
		'color'      => isset( $attributes['button']['shadow']['default']['color'] ) ? $attributes['button']['shadow']['default']['color'] : '',
		'position'   => isset( $attributes['button']['shadow']['default']['position'] ) ? $attributes['button']['shadow']['default']['position'] : '',
	),
	'shadow_hover'   => array(
		'horizontal' => isset( $attributes['button']['shadow']['hover']['horizontal'] ) ? $attributes['button']['shadow']['hover']['horizontal'] : '',
		'vertical'   => isset( $attributes['button']['shadow']['hover']['vertical'] ) ? $attributes['button']['shadow']['hover']['vertical'] : '',
		'blur'       => isset( $attributes['button']['shadow']['hover']['blur'] ) ? $attributes['button']['shadow']['hover']['blur'] : '',
		'spread'     => isset( $attributes['button']['shadow']['hover']['spread'] ) ? $attributes['button']['shadow']['hover']['spread'] : '',
		'color'      => isset( $attributes['button']['shadow']['hover']['color'] ) ? $attributes['button']['shadow']['hover']['color'] : '',
		'position'   => isset( $attributes['button']['shadow']['hover']['position'] ) ? $attributes['button']['shadow']['hover']['position'] : '',
	),
	'color'          => array(
		'text'         => isset( $attributes['button']['color']['text'] ) ? $attributes['button']['color']['text'] : '',
		'text_hover'   => isset( $attributes['button']['color']['textHover'] ) ? $attributes['button']['color']['textHover'] : '',
		'bg'           => isset( $attributes['button']['color']['bg'] ) ? $attributes['button']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['button']['color']['bgHover'] ) ? $attributes['button']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['button']['color']['borderHover'] ) ? $attributes['button']['color']['borderHover'] : '',
	),
);

$icon         = array(
	'border' => isset( $attributes['icon']['box']['border'] ) ? cozy_render_TRBL( 'border', $attributes['icon']['box']['border'] ) : '',
	'color'  => array(
		'text'         => isset( $attributes['icon']['color']['text'] ) && ! empty( $attributes['icon']['color']['text'] ) ? $attributes['icon']['color']['text'] : $button['color']['text'],
		'text_hover'   => isset( $attributes['icon']['color']['textHover'] ) && ! empty( $attributes['icon']['color']['textHover'] ) ? $attributes['icon']['color']['textHover'] : $button['color']['text_hover'],
		'bg'           => isset( $attributes['icon']['color']['bg'] ) && ! empty( $attributes['icon']['color']['bg'] ) ? $attributes['icon']['color']['bg'] : $button['color']['bg'],
		'bg_hover'     => isset( $attributes['icon']['color']['bgHover'] ) && ! empty( $attributes['icon']['color']['bgHover'] ) ? $attributes['icon']['color']['bgHover'] : $button['color']['bg_hover'],
		'border_hover' => isset( $attributes['icon']['color']['borderHover'] ) && ! empty( $attributes['icon']['color']['borderHover'] ) ? $attributes['icon']['color']['borderHover'] : $button['color']['border_hover'],
	),
);
$block_styles = "
#$block_id.has-label {
    width: {$button['width']};
    height: {$button['height']};
    {$button['border']}
    border-radius: {$attributes['button']['radius']};
    font-size: {$attributes['button']['font']['size']};
    font-weight: {$attributes['button']['font']['weight']};
    font-family: {$attributes['button']['font']['family']};
    text-transform: {$attributes['button']['letterCase']};
    color: {$button['color']['text']};
    background-color: {$button['color']['bg']};
	gap: {$attributes['button']['gap']};
}
#$block_id.has-label.has-box-shadow {
    box-shadow: {$button['shadow_default']['horizontal']}px {$button['shadow_default']['vertical']}px {$button['shadow_default']['blur']}px {$button['shadow_default']['spread']}px {$button['shadow_default']['color']} {$button['shadow_default']['position']};
}
#$block_id.has-label.has-hover-box-shadow:hover {
    box-shadow: {$button['shadow_hover']['horizontal']}px {$button['shadow_hover']['vertical']}px {$button['shadow_hover']['blur']}px {$button['shadow_hover']['spread']}px {$button['shadow_hover']['color']} {$button['shadow_hover']['position']};
}
#$block_id.has-label:hover {
    color: {$button['color']['text_hover']};
    background-color: {$button['color']['bg_hover']};
    border-color: {$button['color']['border_hover']};
}

#$block_id .cozy-block-add-to-cart__icon-wrapper {
	margin-top: {$attributes['icon']['box']['margin']['top']};
	margin-bottom: {$attributes['icon']['box']['margin']['bottom']};
    width: {$attributes['icon']['box']['width']};
    height: {$attributes['icon']['box']['height']};
    {$icon['border']}
    border-radius: {$attributes['icon']['box']['radius']};
    background-color: {$icon['color']['bg']};
}
#$block_id .cozy-block-add-to-cart__icon-wrapper:hover, #$block_id.has-label:hover .cozy-block-add-to-cart__icon-wrapper {
    background-color: {$icon['color']['bg_hover']};
    border-color: {$icon['color']['border_hover']};
}
#$block_id .cozy-block-add-to-cart__icon-wrapper svg {
    width: {$attributes['icon']['size']};
    height: {$attributes['icon']['size']};
    fill: {$icon['color']['text']};
    stroke: none;
}
#$block_id .cozy-block-add-to-cart__icon-wrapper:hover svg, #$block_id.has-label:hover svg {
    fill: {$icon['color']['text_hover']};
}
";

$product_id = $block->context['postId'];

$classes   = array();
$classes[] = 'cozy-block-add-to-cart';
$classes[] = $attributes['button']['enabled'] ? 'has-label' : '';
$classes[] = $attributes['button']['enabled'] && $attributes['button']['shadow']['default']['enabled'] ? 'has-box-shadow' : '';
$classes[] = $attributes['button']['enabled'] && $attributes['button']['shadow']['hover']['enabled'] ? 'has-hover-box-shadow' : '';
$output    = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '" onClick="handleAddToCartClick(' . $product_id . ')">';

if ( ! empty( $attributes['postType'] ) && 'product' === $attributes['postType'] ) {

	if ( $attributes['button']['enabled'] && isset( $attributes['button']['font']['family'] ) && ! empty( $attributes['button']['font']['family'] ) ) {
		$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['button']['font']['family'] . ':wght@100;200;300;400;500;600;700;800;900" />';
	}

	if ( $attributes['icon']['enabled'] && 'left' === $attributes['icon']['position'] ) {
		/* Cart Icon */
		$classes   = array();
		$classes[] = 'cozy-block-add-to-cart__icon-wrapper';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';

		$view_box   = array();
		$view_box[] = $attributes['icon']['viewBox']['vx'];
		$view_box[] = $attributes['icon']['viewBox']['vy'];
		$view_box[] = $attributes['icon']['viewBox']['vw'];
		$view_box[] = $attributes['icon']['viewBox']['vh'];
		$output    .= '<svg class="cozy-block-add-to-cart__cart-icon" viewBox="' . implode( ' ', $view_box ) . '" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">';
		$output    .= '<path d="' . cozy_remove_special_chars( $attributes['icon']['path'], array( ' ' ) ) . '" />';
		$output    .= '</svg>';

		$output .= '</div>';
		/* End Cart Icon */
	}

	if ( $attributes['button']['enabled'] ) {
		$output .= '<span class="cozy-block-add-to-cart__label">';
		$output .= esc_html( cozy_remove_special_chars( $attributes['button']['label'], array( ' ' ) ) );
		$output .= '</span>';
	}

	if ( $attributes['icon']['enabled'] && 'right' === $attributes['icon']['position'] ) {
		/* Cart Icon */
		$classes   = array();
		$classes[] = 'cozy-block-add-to-cart__icon-wrapper';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';

		$view_box   = array();
		$view_box[] = $attributes['icon']['viewBox']['vx'];
		$view_box[] = $attributes['icon']['viewBox']['vy'];
		$view_box[] = $attributes['icon']['viewBox']['vw'];
		$view_box[] = $attributes['icon']['viewBox']['vh'];
		$output    .= '<svg class="cozy-block-add-to-cart__cart-icon" viewBox="' . implode( ' ', $view_box ) . '" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">';
		$output    .= '<path d="' . cozy_remove_special_chars( $attributes['icon']['path'], array( ' ' ) ) . '" />';
		$output    .= '</svg>';

		$output .= '</div>';
		/* End Cart Icon */
	}
}

$output .= '</div>';

$wrapper_attributes = get_block_wrapper_attributes();

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$render = sprintf( '<div class="cozy-block-wrapper cozy-block-add-to-cart-wrapper justify-' . $attributes['button']['justify'] . '"><div %1$s>%2$s</div></div>', $wrapper_attributes, $output );
echo $render;

?>

<script src="<?php echo esc_url( trailingslashit( COZY_ADDONS_PLUGIN_URL ) ) . 'public/js/jquery.js'; ?>"></script>
<script type="text/javascript">
	function handleAddToCartClick(productId) {
		if ($('body').find('.cozy-block-add-to-cart__toast').length === 0) {
			$('body').append('<div class="cozy-block-add-to-cart__toast visibility-hidden"></div>');
		}	

		$.ajax({
			url: "<?php echo esc_url( $attributes['ajaxUrl'] ); ?>",
			method: "POST",
			data: {
				action: "cozy_block_wishlist_add_to_cart",
				cartNonce: "<?php echo sanitize_key( $attributes['cartNonce'] ); ?>",
				productId: parseInt(productId),
			},
			success: function (response) {
				// Trigger Toast Message
				$("body .cozy-block-add-to-cart__toast").html(
					"Cart Updated!"
				);
				$("body .cozy-block-add-to-cart__toast").removeClass(
					"visibility-hidden"
				);
				setTimeout(() => {
					$("body .cozy-block-add-to-cart__toast").addClass(
					"visibility-hidden"
					);
				}, 2000);
			},
			error: function (error) {
				console.log("Unable to add to cart...");
			},
		});
	}
</script>

<?php