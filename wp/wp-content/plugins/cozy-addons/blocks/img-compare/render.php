<?php
$client_id = isset( $attributes['clientId'] ) ? str_replace( '-', '_', sanitize_key( wp_unslash( $attributes['clientId'] ) ) ) : '';

$block_id = 'cozyBlock_' . $client_id;

$styles = array(
	'image' => array(
		'height' => isset( $attributes['image']['height'] ) ? $attributes['image']['height'] : '',
	),
);

$image = array(
	'alt1' => isset( $attributes['image']['alt1'] ) ? $attributes['image']['alt1'] : '',
	'alt2' => isset( $attributes['image']['alt2'] ) ? $attributes['image']['alt2'] : '',
);

$divider_styles = array(
	'width' => isset( $attributes['divider']['width'] ) ? $attributes['divider']['width'] : '',
	'icon'  => array(
		'size'    => isset( $attributes['divider']['icon']['size'] ) ? $attributes['divider']['icon']['size'] : '',
		'padding' => isset( $attributes['divider']['icon']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['divider']['icon']['padding'] ) : '',
		'radius'  => isset( $attributes['divider']['icon']['radius'] ) ? $attributes['divider']['icon']['radius'] : '',
	),
	'color' => array(
		'icon'          => isset( $attributes['divider']['color']['icon'] ) ? $attributes['divider']['color']['icon'] : '',
		'icon_hover'    => isset( $attributes['divider']['color']['iconHover'] ) ? $attributes['divider']['color']['iconHover'] : '',
		'icon_bg'       => isset( $attributes['divider']['color']['iconBg'] ) ? $attributes['divider']['color']['iconBg'] : '',
		'icon_bg_hover' => isset( $attributes['divider']['color']['iconBgHover'] ) ? $attributes['divider']['color']['iconBgHover'] : '',
		'bg'            => isset( $attributes['divider']['color']['bg'] ) ? $attributes['divider']['color']['bg'] : '',
		'bg_hover'      => isset( $attributes['divider']['color']['bgHover'] ) ? $attributes['divider']['color']['bgHover'] : '',
	),
);

$label_styles = array(
	'padding'        => isset( $attributes['label']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['label']['padding'] ) : '',
	'margin'         => array(
		'top'  => isset( $attributes['label']['margin']['top'] ) ? $attributes['label']['margin']['top'] : '',
		'left' => isset( $attributes['label']['margin']['left'] ) ? $attributes['label']['margin']['left'] : '',
	),
	'border'         => isset( $attributes['label']['border'] ) ? cozy_render_TRBL( 'border', $attributes['label']['border'] ) : '',
	'radius'         => isset( $attributes['label']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['label']['radius'] ) : '',
	'font'           => array(
		'size'   => isset( $attributes['label']['font']['size'] ) ? $attributes['label']['font']['size'] : '',
		'family' => isset( $attributes['label']['font']['family'] ) ? $attributes['label']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['label']['lineHeight'] ) ? $attributes['label']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['label']['letterSpacing'] ) ? $attributes['label']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['label']['color']['text'] ) ? $attributes['label']['color']['text'] : '',
		'bg'   => isset( $attributes['label']['color']['bg'] ) ? $attributes['label']['color']['bg'] : '',
	),
);

$block_styles = "
#$block_id .divider {
	background-color: {$divider_styles['color']['bg']};
}
#$block_id .divider .divider-icon__wrap {
	{$divider_styles['icon']['padding']}
	border-radius: {$divider_styles['icon']['radius']};
	background-color: {$divider_styles['color']['icon_bg']};
}
#$block_id .divider svg {
	width: {$divider_styles['icon']['size']};
	height: {$divider_styles['icon']['size']};
	fill: {$divider_styles['color']['icon']};
}

#$block_id.direction-horizontal .divider {
	width: {$divider_styles['width']};
}
#$block_id.direction-vertical .divider {
	height: {$divider_styles['width']};
}

#$block_id .comparison-slider img {
	height: {$styles['image']['height']};
}

@media only screen and (max-width: 1024px) {
	#$block_id.direction-vertical .divider {
		max-height: {$divider_styles['width']};
	}

	#$block_id .comparison-slider img {
		max-height: {$styles['image']['height']};
	}
}

#$block_id .overlay-label {
	{$label_styles['padding']}
	{$label_styles['border']}
	{$label_styles['radius']}
	font-size: {$label_styles['font']['size']};
	font-weight: {$attributes['label']['font']['weight']};
	font-family: {$label_styles['font']['family']};
	text-transform: {$attributes['label']['letterCase']};
	text-decoration: {$attributes['label']['decoration']};
	line-height: {$label_styles['line_height']};
	letter-spacing: {$label_styles['letter_spacing']};
	color: {$label_styles['color']['text']};
	background-color: {$label_styles['color']['bg']};

	&.position-top {
		margin-top: {$label_styles['margin']['top']};
	}

	&.position-bottom {
		margin-bottom: {$label_styles['margin']['top']};
	}
}

#$block_id .comparison-slider > .overlay-label.after {
	margin-right: {$label_styles['margin']['left']};
}
#$block_id .resize > .overlay-label.before {
	margin-left: {$label_styles['margin']['left']};
}
";

$font_families = array();

if ( isset( $attributes['label']['font']['family'] ) && ! empty( $attributes['label']['font']['family'] ) ) {
	$font_families[] = $attributes['label']['font']['family'];
}

// Remove duplicate font families.
$font_families = array_unique( $font_families );

$font_query = '';

// Add other fonts.
foreach ( $font_families as $key => $family ) {
	if ( 0 === $key ) {
		$font_query .= 'family=' . $family . ':wght@100;200;300;400;500;600;700;800;900';
	} else {
		$font_query .= '&family=' . $family . ':wght@100;200;300;400;500;600;700;800;900';
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
		wp_add_inline_style( 'cozy-block--global-block-styles', $block_styles );
	}
);

$wrapper_attributes = get_block_wrapper_attributes();

wp_localize_script( 'cozy-block--img-compare--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--img-compare--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockImgCompare( "' . esc_html( $block_id ) . '" ) }) ' );

$classes   = array();
$classes[] = 'cozy-block-img-compare';
$classes[] = 'direction-' . $attributes['direction'];
?>

<div class="cozy-block-wrapper">
	<div <?php echo $wrapper_attributes; ?>>
		<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
			<div class="comparison-slider">

				<?php
				if ( ! empty( $attributes['image']['url2'] ) ) {
					?>
					<img src="<?php echo esc_url( $attributes['image']['url2'] ); ?>" alt="<?php echo esc_html( $image['alt2'] ); ?>" />
					<?php
					if ( ! empty( $attributes['image']['label2'] ) ) {
						$classes   = array();
						$classes[] = 'overlay-label';
						$classes[] = 'after';
						$classes[] = 'position-' . $attributes['label']['position'];
						?>
						<p class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
							<?php echo esc_html( $attributes['image']['label2'] ); ?>
						</p>
						<?php
					}
				}
				?>

				<?php
				if ( ! empty( $attributes['image']['url1'] ) ) {
					?>
					<div class="resize">
						<img src="<?php echo esc_url( $attributes['image']['url1'] ); ?>" alt="<?php echo esc_html( $image['alt1'] ); ?>" />

						<?php
						if ( ! empty( $attributes['image']['label1'] ) ) {
							$classes   = array();
							$classes[] = 'overlay-label';
							$classes[] = 'before';
							$classes[] = 'position-' . $attributes['label']['position'];
							?>
						<p class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
							<?php echo esc_html( $attributes['image']['label1'] ); ?>
						</p>
							<?php
						}
						?>
					</div>
					<?php
				}
				?>

				<div class="divider">
					<div class="divider-icon__wrap">
						<svg
							width="24"
							height="24"
							viewBox="0 0 24 24"
							fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M9 6L3 12L9 18V6ZM15 18L21 12L15 6V18Z" />
						</svg>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>