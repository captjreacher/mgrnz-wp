<?php
$client_id = isset( $attributes['clientId'] ) ? str_replace( '-', '_', sanitize_key( wp_unslash( $attributes['clientId'] ) ) ) : '';

$block_id = 'cozyBlock_' . $client_id;

$styles = array(
	'padding'        => isset( $attributes['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['padding'] ) : '',
	'border'         => isset( $attributes['border'] ) ? cozy_render_TRBL( 'border', $attributes['border'] ) : '',
	'radius'         => isset( $attributes['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['radius'] ) : '',
	'gap'            => isset( $attributes['gap'] ) ? $attributes['gap'] : '',
	'font'           => array(
		'size'   => isset( $attributes['font']['size'] ) ? $attributes['font']['size'] : '',
		'family' => isset( $attributes['font']['family'] ) ? $attributes['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['lineHeight'] ) ? $attributes['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['letterSpacing'] ) ? $attributes['letterSpacing'] : '',
	'shadow'         => array(
		'horizontal' => isset( $attributes['shadow']['horizontal'] ) ? $attributes['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['shadow']['vertical'] ) ? $attributes['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['shadow']['blur'] ) ? $attributes['shadow']['blur'] : '',
		'spread'     => isset( $attributes['shadow']['spread'] ) ? $attributes['shadow']['spread'] : '',
		'color'      => isset( $attributes['shadow']['color'] ) ? $attributes['shadow']['color'] : '',
		'position'   => isset( $attributes['shadow']['position'] ) ? $attributes['shadow']['position'] : '',
	),
	'color'          => array(
		'text' => isset( $attributes['color']['text'] ) ? $attributes['color']['text'] : '',
		'bg'   => isset( $attributes['color']['bg'] ) ? $attributes['color']['bg'] : '',
	),
);

$item_styles = array(
	'width'  => isset( $attributes['itemStyles']['width'] ) ? $attributes['itemStyles']['width'] : '',
	'height' => isset( $attributes['itemStyles']['height'] ) ? $attributes['itemStyles']['height'] : '',
	'margin' => array(
		'top'    => isset( $attributes['itemStyles']['margin']['top'] ) ? $attributes['itemStyles']['margin']['top'] : '',
		'bottom' => isset( $attributes['itemStyles']['margin']['bottom'] ) ? $attributes['itemStyles']['margin']['bottom'] : '',
	),
	'border' => isset( $attributes['itemStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['itemStyles']['border'] ) : '',
	'radius' => isset( $attributes['itemStyles']['radius'] ) ? $attributes['itemStyles']['radius'] : '',
	'shadow' => array(
		'horizontal' => isset( $attributes['itemStyles']['shadow']['horizontal'] ) ? $attributes['itemStyles']['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['itemStyles']['shadow']['vertical'] ) ? $attributes['itemStyles']['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['itemStyles']['shadow']['blur'] ) ? $attributes['itemStyles']['shadow']['blur'] : '',
		'spread'     => isset( $attributes['itemStyles']['shadow']['spread'] ) ? $attributes['itemStyles']['shadow']['spread'] : '',
		'color'      => isset( $attributes['itemStyles']['shadow']['color'] ) ? $attributes['itemStyles']['shadow']['color'] : '',
		'position'   => isset( $attributes['itemStyles']['shadow']['position'] ) ? $attributes['itemStyles']['shadow']['position'] : '',
	),
	'color'  => array(
		'text' => isset( $attributes['itemStyles']['color']['text'] ) ? $attributes['itemStyles']['color']['text'] : '',
		'bg'   => isset( $attributes['itemStyles']['color']['bg'] ) ? $attributes['itemStyles']['color']['bg'] : '',
	),
);

$timer_styles = array(
	'padding'        => isset( $attributes['timerStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['timerStyles']['padding'] ) : '',
	'border'         => isset( $attributes['timerStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['timerStyles']['border'] ) : '',
	'radius'         => isset( $attributes['timerStyles']['radius'] ) ? $attributes['timerStyles']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['timerStyles']['font']['size'] ) ? $attributes['timerStyles']['font']['size'] : '44px',
		'weight' => isset( $attributes['timerStyles']['font']['weight'] ) ? $attributes['timerStyles']['font']['weight'] : '600',
		'family' => isset( $attributes['timerStyles']['font']['family'] ) ? $attributes['timerStyles']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['timerStyles']['lineHeight'] ) ? $attributes['timerStyles']['lineHeight'] : '1.2em',
	'letter_spacing' => isset( $attributes['timerStyles']['letterSpacing'] ) ? $attributes['timerStyles']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['timerStyles']['color']['text'] ) ? $attributes['timerStyles']['color']['text'] : '',
		'bg'   => isset( $attributes['timerStyles']['color']['bg'] ) ? $attributes['timerStyles']['color']['bg'] : '',
	),
);

$separator = array(
	'content' => isset( $attributes['separator']['content'] ) ? htmlentities( $attributes['separator']['content'] ) : '',
	'margin'  => array(
		'top'  => isset( $attributes['separator']['margin']['top'] ) ? $attributes['separator']['margin']['top'] : '',
		'left' => isset( $attributes['separator']['margin']['left'] ) ? $attributes['separator']['margin']['left'] : '',
	),
	'size'    => isset( $attributes['separator']['size'] ) ? $attributes['separator']['size'] : '',
	'color'   => array(
		'text' => isset( $attributes['separator']['color']['text'] ) ? $attributes['separator']['color']['text'] : '',
	),
);

$label_styles = array(
	'gap'            => isset( $attributes['label']['gap'] ) ? $attributes['label']['gap'] : '',
	'font'           => array(
		'size'   => isset( $attributes['label']['font']['size'] ) ? $attributes['label']['font']['size'] : '',
		'family' => isset( $attributes['label']['font']['family'] ) ? $attributes['label']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['label']['lineHeight'] ) ? $attributes['label']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['label']['letterSpacing'] ) ? $attributes['label']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['label']['color']['text'] ) ? $attributes['label']['color']['text'] : '',
	),
);

$end_text_styles = array(
	'padding'        => isset( $attributes['endOptions']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['endOptions']['padding'] ) : '',
	'margin'         => array(
		'top'    => isset( $attributes['endOptions']['margin']['top'] ) ? $attributes['endOptions']['margin']['top'] : '',
		'bottom' => isset( $attributes['endOptions']['margin']['bottom'] ) ? $attributes['endOptions']['margin']['bottom'] : '',
	),
	'border'         => isset( $attributes['endOptions']['border'] ) ? cozy_render_TRBL( 'border', $attributes['endOptions']['border'] ) : '',
	'radius'         => isset( $attributes['endOptions']['radius'] ) ? $attributes['endOptions']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['endOptions']['font']['size'] ) ? $attributes['endOptions']['font']['size'] : '',
		'family' => isset( $attributes['endOptions']['font']['family'] ) ? $attributes['endOptions']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['endOptions']['lineHeight'] ) ? $attributes['endOptions']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['endOptions']['letterSpacing'] ) ? $attributes['endOptions']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['endOptions']['color']['text'] ) ? $attributes['endOptions']['color']['text'] : '',
		'bg'   => isset( $attributes['endOptions']['color']['bg'] ) ? $attributes['endOptions']['color']['bg'] : '',
	),
);

$ba_label = array(
	'gap'            => isset( $attributes['beforeAfterStyles']['gap'] ) ? $attributes['beforeAfterStyles']['gap'] : '',
	'font'           => array(
		'size'   => isset( $attributes['beforeAfterStyles']['font']['size'] ) ? $attributes['beforeAfterStyles']['font']['size'] : '',
		'family' => isset( $attributes['beforeAfterStyles']['font']['family'] ) ? $attributes['beforeAfterStyles']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['beforeAfterStyles']['lineHeight'] ) ? $attributes['beforeAfterStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['beforeAfterStyles']['letterSpacing'] ) ? $attributes['beforeAfterStyles']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['beforeAfterStyles']['color']['text'] ) ? $attributes['beforeAfterStyles']['color']['text'] : '',
	),
);

$block_styles = "
#$block_id {
	{$styles['padding']}
	{$styles['border']}
	{$styles['radius']}
	font-size: {$styles['font']['size']};
	font-weight: {$attributes['font']['weight']};
	font-family: {$styles['font']['family']};
	color: {$styles['color']['text']};
	background-color: {$styles['color']['bg']};
	line-height: {$styles['line_height']};
	letter-spacing: {$styles['letter_spacing']};
}
#$block_id.has-box-shadow {
	box-shadow: {$styles['shadow']['horizontal']} {$styles['shadow']['vertical']} {$styles['shadow']['blur']} {$styles['shadow']['spread']} {$styles['shadow']['color']} {$styles['shadow']['position']};
}

#$block_id .countdown-timer__wrap {
	margin-top: {$item_styles['margin']['top']};
	margin-bottom: {$item_styles['margin']['bottom']};
	justify-content: {$attributes['align']};
	gap: {$styles['gap']};
}

#$block_id .item__wrap {
	width: {$item_styles['width']};
	height: {$item_styles['height']};
	{$item_styles['border']}
	border-radius: {$item_styles['radius']};
	background-color: {$item_styles['color']['bg']};
	color: {$item_styles['color']['text']};
}
#$block_id .item__wrap.has-box-shadow {
	box-shadow: {$item_styles['shadow']['horizontal']} {$item_styles['shadow']['vertical']} {$item_styles['shadow']['blur']} {$item_styles['shadow']['spread']} {$item_styles['shadow']['color']} {$item_styles['shadow']['position']};
}
#$block_id .countdown-timer__item.has-separator:before {
	content: \"{$separator['content']}\";
	margin-top: {$separator['margin']['top']};
	margin-left: {$separator['margin']['left']};
	font-size: {$separator['size']};
	color: {$separator['color']['text']};
}
#$block_id .countdown-timer__item.display-inline {
	gap: {$label_styles['gap']};
}

#$block_id .countdown-timer__item .timer {
	{$timer_styles['padding']}
	{$timer_styles['border']}
	border-radius: {$timer_styles['radius']};
	font-size: {$timer_styles['font']['size']};
	font-weight: {$timer_styles['font']['weight']};
	font-family: {$timer_styles['font']['family']};
	line-height: {$timer_styles['line_height']};
	letter-spacing: {$timer_styles['letter_spacing']};
	background-color: {$timer_styles['color']['bg']};
	color: {$timer_styles['color']['text']};
}

#$block_id .countdown-timer__label {
	text-align: {$attributes['label']['align']};
	font-size: {$label_styles['font']['size']};
	font-weight: {$attributes['label']['font']['weight']};
	font-family: {$label_styles['font']['family']};
	text-transform: {$attributes['label']['letterCase']};
	text-decoration: {$attributes['label']['decoration']};
	line-height: {$label_styles['line_height']};
	letter-spacing: {$label_styles['letter_spacing']};
	color: {$label_styles['color']['text']};
}
#$block_id .countdown-timer__item.display-block .countdown-timer__label.is-top {
	margin-bottom: {$label_styles['gap']};
}
#$block_id .countdown-timer__item.display-block .countdown-timer__label.is-bottom {
	margin-top: {$label_styles['gap']};
}

#$block_id .countdown-timer__end-text-wrap {
	text-align: {$attributes['endOptions']['align']};
	margin-top: {$end_text_styles['margin']['top']};
	margin-bottom: {$end_text_styles['margin']['bottom']};
}
#$block_id .countdown-timer__end-text-wrap .end-text {
	{$end_text_styles['padding']}
	{$end_text_styles['border']}
	border-radius: {$end_text_styles['radius']};
	font-size: {$end_text_styles['font']['size']};
	font-weight: {$attributes['endOptions']['font']['weight']};
	font-family: {$end_text_styles['font']['family']};
	text-transform: {$attributes['endOptions']['letterCase']};
	text-decoration: {$attributes['endOptions']['decoration']};
	line-height: {$end_text_styles['line_height']};
	letter-spacing: {$end_text_styles['letter_spacing']};
	background-color: {$end_text_styles['color']['bg']};
	color: {$end_text_styles['color']['text']};
}

#$block_id #offer-wrap:not(.width-inline) .before-label, #$block_id #offer-wrap:not(.width-inline) .after-label {
	text-align: {$attributes['align']};
}
#$block_id #offer-wrap:not(.width-inline) .before-label {
	margin-bottom: {$ba_label['gap']};
}
#$block_id #offer-wrap:not(.width-inline) .after-label {
	margin-top: {$ba_label['gap']};
}
#$block_id #offer-wrap.width-inline {
	justify-content: {$attributes['align']};
	gap: {$ba_label['gap']};
}
#$block_id .before-label, #$block_id .after-label {
	font-size: {$ba_label['font']['size']};
	font-weight: {$attributes['beforeAfterStyles']['font']['weight']};
	font-family: {$ba_label['font']['family']};
	text-transform: {$attributes['beforeAfterStyles']['letterCase']};
	text-decoration: {$attributes['beforeAfterStyles']['decoration']};
	line-height: {$ba_label['line_height']};
	letter-spacing: {$ba_label['letter_spacing']};
	color: {$ba_label['color']['text']};
}
";

$font_families = array();

if ( isset( $attributes['timerStyles']['font']['family'] ) && ! empty( $attributes['timerStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['timerStyles']['font']['family'];
}

if ( isset( $attributes['label']['font']['family'] ) && ! empty( $attributes['label']['font']['family'] ) ) {
	$font_families[] = $attributes['label']['font']['family'];
}

if ( isset( $attributes['endOptions']['font']['family'] ) && ! empty( $attributes['endOptions']['font']['family'] ) ) {
	$font_families[] = $attributes['endOptions']['font']['family'];
}

if ( isset( $attributes['beforeAfterStyles']['font']['family'] ) && ! empty( $attributes['beforeAfterStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['beforeAfterStyles']['font']['family'];
}

if ( isset( $attributes['font']['family'] ) && ! empty( $attributes['font']['family'] ) ) {
	$font_families[] = $attributes['font']['family'];
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
		wp_add_inline_style( 'cozy-block--global-block-styles', $block_styles );
	}
);

$wrapper_attributes = get_block_wrapper_attributes();

$wp_timezone = wp_timezone();

$now      = new DateTime( 'now', $wp_timezone );
$end_date = new DateTime( 'now', $wp_timezone );

if ( ! empty( $attributes['startDate'] ) ) {
	$start_date   = new DateTime( $attributes['startDate'], $wp_timezone );
	$started_diff = $now->diff( $start_date );

	if ( 0 === $started_diff->invert ) {
		return;
	}
}

if ( ! empty( $attributes['endDate'] ) ) {
	$end_date = new DateTime( $attributes['endDate'], $wp_timezone );
}


// Calculate the difference.
$interval = $end_date->diff( $now );

$expired_diff = $now->diff( $end_date );

// Format the result with at least two digits for each component.
$days    = str_pad( $interval->days, 2, '0', STR_PAD_LEFT );
$hours   = str_pad( $interval->h, 2, '0', STR_PAD_LEFT );
$minutes = str_pad( $interval->i, 2, '0', STR_PAD_LEFT );
$seconds = str_pad( $interval->s, 2, '0', STR_PAD_LEFT );

if ( 1 === $expired_diff->invert ) {
	$days    = '00';
	$hours   = '00';
	$minutes = '00';
	$seconds = '00';
}

$attributes['wpTimezone'] = $wp_timezone;

wp_localize_script( 'cozy-block--countdown-timer--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--countdown-timer--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockCountdownTimer( "' . esc_html( $block_id ) . '" ) }) ' );

$classes   = array();
$classes[] = 'cozy-block-countdown-timer';
$classes[] = $attributes['shadow']['enabled'] ? 'has-box-shadow' : '';
$classes[] = $block_id;
?>

<div class="cozy-block-wrapper">
	<div <?php echo $wrapper_attributes; ?>>
		<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
			<?php
			$classes   = array();
			$classes[] = $attributes['beforeLabel']['enabled'] || $attributes['afterLabel']['enabled'] ? 'width-' . $attributes['beforeAfterStyles']['width'] : '';
			$classes[] = 'text' === $attributes['endOptions']['type'] && 1 === $expired_diff->invert ? 'display-none' : '';
			?>
			<div id="offer-wrap" class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
				<?php
				if ( $attributes['beforeLabel']['enabled'] ) {
					?>
					<div class="before-label"><?php echo esc_html( $attributes['beforeLabel']['content'] ); ?></div>
					<?php
				}

				$classes   = array();
				$classes[] = 'countdown-timer__wrap';
				?>
				<ul class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
					<?php
					$wrap_classes   = array();
					$wrap_classes[] = 'item__wrap';
					$wrap_classes[] = $attributes['itemStyles']['shadow']['enabled'] ? 'has-box-shadow' : '';

					$classes   = array();
					$classes[] = 'countdown-timer__item';
					$classes[] = 'display-' . $attributes['label']['display'];

					if ( $attributes['enableOptions']['day'] ) {
						?>
						<li class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $wrap_classes ) ) ) ); ?>">
							<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
								<?php
								if ( $attributes['label']['enabled'] && 'top' === $attributes['label']['position'] ) {
									?>
									<p class="countdown-timer__label is-top"><?php esc_html_e( 'Days', 'cozy-addons' ); ?></p>
									<?php
								}
								?>
								<div class="timer day"><?php echo esc_html( $days ); ?></div>
								<?php
								if ( $attributes['label']['enabled'] && 'bottom' === $attributes['label']['position'] ) {
									?>
									<p class="countdown-timer__label is-bottom"><?php esc_html_e( 'Days', 'cozy-addons' ); ?></p>
									<?php
								}
								?>
							</div>
						</li>
						<?php
					}
					?>

					<?php
					if ( $attributes['enableOptions']['hour'] ) {
						$classes[] = $attributes['enableOptions']['day'] && $attributes['separator']['enabled'] ? 'has-separator' : '';
						?>
						<li class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $wrap_classes ) ) ) ); ?>">
							<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
								<?php
								if ( $attributes['label']['enabled'] && 'top' === $attributes['label']['position'] ) {
									?>
									<p class="countdown-timer__label is-top"><?php esc_html_e( 'Hours', 'cozy-addons' ); ?></p>
									<?php
								}
								?>
								<div class="timer hour"><?php echo esc_html( $hours ); ?></div>
								<?php
								if ( $attributes['label']['enabled'] && 'bottom' === $attributes['label']['position'] ) {
									?>
									<p class="countdown-timer__label is-bottom"><?php esc_html_e( 'Hours', 'cozy-addons' ); ?></p>
									<?php
								}
								?>
							</div>
						</li>
						<?php
					}
					?>

					<?php
					if ( $attributes['enableOptions']['minute'] ) {
						$classes[] = ( $attributes['enableOptions']['day'] || $attributes['enableOptions']['hour'] ) && $attributes['separator']['enabled'] ? 'has-separator' : '';
						?>
						<li class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $wrap_classes ) ) ) ); ?>">
							<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
								<?php
								if ( $attributes['label']['enabled'] && 'top' === $attributes['label']['position'] ) {
									?>
									<p class="countdown-timer__label is-top"><?php esc_html_e( 'Minutes', 'cozy-addons' ); ?></p>
									<?php
								}
								?>
								<div class="timer minute"><?php echo esc_html( $minutes ); ?></div>
								<?php
								if ( $attributes['label']['enabled'] && 'bottom' === $attributes['label']['position'] ) {
									?>
									<p class="countdown-timer__label is-bottom"><?php esc_html_e( 'Minutes', 'cozy-addons' ); ?></p>
									<?php
								}
								?>
							</div>
						</li>
						<?php
					}
					?>

					<?php
					if ( $attributes['enableOptions']['second'] ) {
						$classes[] = ( $attributes['enableOptions']['day'] || $attributes['enableOptions']['hour'] || $attributes['enableOptions']['minute'] ) && $attributes['separator']['enabled'] ? 'has-separator' : '';
						?>
						<li class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $wrap_classes ) ) ) ); ?>">
							<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
								<?php
								if ( $attributes['label']['enabled'] && 'top' === $attributes['label']['position'] ) {
									?>
									<p class="countdown-timer__label is-top"><?php esc_html_e( 'Seconds', 'cozy-addons' ); ?></p>
									<?php
								}
								?>
								<div class="timer second"><?php echo esc_html( $seconds ); ?></div>
								<?php
								if ( $attributes['label']['enabled'] && 'bottom' === $attributes['label']['position'] ) {
									?>
									<p class="countdown-timer__label is-bottom"><?php esc_html_e( 'Seconds', 'cozy-addons' ); ?></p>
									<?php
								}
								?>
							</div>
						</li>
						<?php
					}
					?>
				</ul>
				<?php
				if ( $attributes['afterLabel']['enabled'] ) {
					?>
					<div class="after-label"><?php echo esc_html( $attributes['afterLabel']['content'] ); ?></div>
					<?php
				}
				?>
			</div>
			<?php
			if ( 'text' === $attributes['endOptions']['type'] ) {
				$classes   = array();
				$classes[] = 'countdown-timer__end-text-wrap';
				$classes[] = 1 === $expired_diff->invert ? '' : 'display-none';
				?>
				<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
					<?php
					$classes   = array();
					$classes[] = 'end-text';
					$classes[] = 'display-' . $attributes['endOptions']['width'];
					?>
					<p class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>"><?php echo esc_html( $attributes['endOptions']['label'] ); ?></p>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>