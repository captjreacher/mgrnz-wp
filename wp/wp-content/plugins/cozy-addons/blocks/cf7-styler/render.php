<?php
$client_id = isset( $attributes['clientId'] ) ? str_replace( '-', '_', sanitize_key( wp_unslash( $attributes['clientId'] ) ) ) : '';

$block_id = 'cozyBlock_' . $client_id;

$styles = array(
	'gap'     => isset( $attributes['gap'] ) ? $attributes['gap'] : '',
	'padding' => isset( $attributes['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['padding'] ) : '',
	'margin'  => array(
		'top'    => isset( $attributes['margin']['top'] ) ? $attributes['margin']['top'] : '',
		'bottom' => isset( $attributes['margin']['bottom'] ) ? $attributes['margin']['bottom'] : '',
	),
	'border'  => isset( $attributes['border'] ) ? cozy_render_TRBL( 'border', $attributes['border'] ) : '',
	'radius'  => isset( $attributes['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['radius'] ) : '',
	'shadow'  => array(
		'horizontal' => isset( $attributes['shadow']['horizontal'] ) ? $attributes['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['shadow']['vertical'] ) ? $attributes['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['shadow']['blur'] ) ? $attributes['shadow']['blur'] : '',
		'spread'     => isset( $attributes['shadow']['spread'] ) ? $attributes['shadow']['spread'] : '',
		'color'      => isset( $attributes['shadow']['color'] ) ? $attributes['shadow']['color'] : '',
		'position'   => isset( $attributes['shadow']['position'] ) ? $attributes['shadow']['position'] : '',
	),
	'font'    => array(
		'size'   => isset( $attributes['font']['size'] ) ? $attributes['font']['size'] : '',
		'family' => isset( $attributes['font']['family'] ) ? $attributes['font']['family'] : '',
	),
	'color'   => array(
		'text' => isset( $attributes['color']['text'] ) ? $attributes['color']['text'] : '',
		'bg'   => isset( $attributes['color']['bg'] ) ? $attributes['color']['bg'] : '',
	),
);

$label_styles = array(
	'padding'        => isset( $attributes['label']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['label']['padding'] ) : '',
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

$text_styles = array(
	'textarea_height' => isset( $attributes['textStyles']['textareaHeight'] ) ? $attributes['textStyles']['textareaHeight'] : '',
	'padding'         => isset( $attributes['textStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['textStyles']['padding'] ) : '',
	'border'          => isset( $attributes['textStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['textStyles']['border'] ) : '',
	'border_focus'    => isset( $attributes['textStyles']['borderFocus'] ) ? cozy_render_TRBL( 'border', $attributes['textStyles']['borderFocus'] ) : '',
	'radius'          => isset( $attributes['textStyles']['radius'] ) ? $attributes['textStyles']['radius'] : '',
	'font'            => array(
		'size'   => isset( $attributes['textStyles']['font']['size'] ) ? $attributes['textStyles']['font']['size'] : '',
		'weight' => isset( $attributes['textStyles']['font']['weight'] ) ? $attributes['textStyles']['font']['weight'] : '',
		'family' => isset( $attributes['textStyles']['font']['family'] ) ? $attributes['textStyles']['font']['family'] : '',
	),
	'line_height'     => isset( $attributes['textStyles']['lineHeight'] ) ? $attributes['textStyles']['lineHeight'] : '',
	'letter_spacing'  => isset( $attributes['textStyles']['letterSpacing'] ) ? $attributes['textStyles']['letterSpacing'] : '',
	'color'           => array(
		'text'       => isset( $attributes['textStyles']['color']['text'] ) ? $attributes['textStyles']['color']['text'] : '',
		'text_focus' => isset( $attributes['textStyles']['color']['textFocus'] ) ? $attributes['textStyles']['color']['textFocus'] : '',
		'bg'         => isset( $attributes['textStyles']['color']['bg'] ) ? $attributes['textStyles']['color']['bg'] : '',
		'bg_focus'   => isset( $attributes['textStyles']['color']['bgFocus'] ) ? $attributes['textStyles']['color']['bgFocus'] : '',
	),
);

$date_styles = array(
	'padding'        => isset( $attributes['dateStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['dateStyles']['padding'] ) : '',
	'margin'         => array(
		'top'    => isset( $attributes['dateStyles']['margin']['top'] ) ? $attributes['dateStyles']['margin']['top'] : '',
		'bottom' => isset( $attributes['dateStyles']['margin']['bottom'] ) ? $attributes['dateStyles']['margin']['bottom'] : '',
	),
	'border'         => isset( $attributes['dateStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['dateStyles']['border'] ) : '',
	'border_focus'   => isset( $attributes['dateStyles']['borderFocus'] ) ? cozy_render_TRBL( 'border', $attributes['dateStyles']['borderFocus'] ) : '',
	'radius'         => isset( $attributes['dateStyles']['radius'] ) ? $attributes['dateStyles']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['dateStyles']['font']['size'] ) ? $attributes['dateStyles']['font']['size'] : '',
		'weight' => isset( $attributes['dateStyles']['font']['weight'] ) ? $attributes['dateStyles']['font']['weight'] : '',
		'family' => isset( $attributes['dateStyles']['font']['family'] ) ? $attributes['dateStyles']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['dateStyles']['lineHeight'] ) ? $attributes['dateStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['dateStyles']['letterSpacing'] ) ? $attributes['dateStyles']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['dateStyles']['color']['text'] ) ? $attributes['dateStyles']['color']['text'] : '',
		'bg'   => isset( $attributes['dateStyles']['color']['bg'] ) ? $attributes['dateStyles']['color']['bg'] : '',
	),
);

$dropdown_styles = array(
	'width'          => isset( $attributes['dropdownStyles']['width'] ) ? $attributes['dropdownStyles']['width'] : '',
	'padding'        => isset( $attributes['dropdownStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['dropdownStyles']['padding'] ) : '',
	'border'         => isset( $attributes['dropdownStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['dropdownStyles']['border'] ) : '',
	'border_focus'   => isset( $attributes['dropdownStyles']['borderFocus'] ) ? cozy_render_TRBL( 'border', $attributes['dropdownStyles']['borderFocus'] ) : '',
	'radius'         => isset( $attributes['dropdownStyles']['radius'] ) ? $attributes['dropdownStyles']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['dropdownStyles']['font']['size'] ) ? $attributes['dropdownStyles']['font']['size'] : '',
		'weight' => isset( $attributes['dropdownStyles']['font']['weight'] ) ? $attributes['dropdownStyles']['font']['weight'] : '',
		'family' => isset( $attributes['dropdownStyles']['font']['family'] ) ? $attributes['dropdownStyles']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['dropdownStyles']['lineHeight'] ) ? $attributes['dropdownStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['dropdownStyles']['letterSpacing'] ) ? $attributes['dropdownStyles']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['dropdownStyles']['color']['text'] ) ? $attributes['dropdownStyles']['color']['text'] : '',
		'bg'   => isset( $attributes['dropdownStyles']['color']['bg'] ) ? $attributes['dropdownStyles']['color']['bg'] : '',
	),
);

$chkbx_styles = array(
	'padding'        => isset( $attributes['checkboxStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['checkboxStyles']['padding'] ) : '',
	'item_gap'       => isset( $attributes['checkboxStyles']['itemGap'] ) ? $attributes['checkboxStyles']['itemGap'] : '',
	'size'           => isset( $attributes['checkboxStyles']['size'] ) ? $attributes['checkboxStyles']['size'] : '',
	'font'           => array(
		'size'   => isset( $attributes['checkboxStyles']['font']['size'] ) ? $attributes['checkboxStyles']['font']['size'] : '',
		'weight' => isset( $attributes['checkboxStyles']['font']['weight'] ) ? $attributes['checkboxStyles']['font']['weight'] : '',
		'family' => isset( $attributes['checkboxStyles']['font']['family'] ) ? $attributes['checkboxStyles']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['checkboxStyles']['lineHeight'] ) ? $attributes['checkboxStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['checkboxStyles']['letterSpacing'] ) ? $attributes['checkboxStyles']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['checkboxStyles']['color']['text'] ) ? $attributes['checkboxStyles']['color']['text'] : '',
	),
);

$radio_styles = array(
	'padding'        => isset( $attributes['radioStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['radioStyles']['padding'] ) : '',
	'item_gap'       => isset( $attributes['radioStyles']['itemGap'] ) ? $attributes['radioStyles']['itemGap'] : '',
	'size'           => isset( $attributes['radioStyles']['size'] ) ? $attributes['radioStyles']['size'] : '',
	'font'           => array(
		'size'   => isset( $attributes['radioStyles']['font']['size'] ) ? $attributes['radioStyles']['font']['size'] : '',
		'weight' => isset( $attributes['radioStyles']['font']['weight'] ) ? $attributes['radioStyles']['font']['weight'] : '',
		'family' => isset( $attributes['radioStyles']['font']['family'] ) ? $attributes['radioStyles']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['radioStyles']['lineHeight'] ) ? $attributes['radioStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['radioStyles']['letterSpacing'] ) ? $attributes['radioStyles']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['radioStyles']['color']['text'] ) ? $attributes['radioStyles']['color']['text'] : '',
	),
);

$acceptance_styles = array(
	'padding'        => isset( $attributes['acceptanceStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['acceptanceStyles']['padding'] ) : '',
	'size'           => isset( $attributes['acceptanceStyles']['size'] ) ? $attributes['acceptanceStyles']['size'] : '',
	'font'           => array(
		'size'   => isset( $attributes['acceptanceStyles']['font']['size'] ) ? $attributes['acceptanceStyles']['font']['size'] : '',
		'weight' => isset( $attributes['acceptanceStyles']['font']['weight'] ) ? $attributes['acceptanceStyles']['font']['weight'] : '',
		'family' => isset( $attributes['acceptanceStyles']['font']['family'] ) ? $attributes['acceptanceStyles']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['acceptanceStyles']['lineHeight'] ) ? $attributes['acceptanceStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['acceptanceStyles']['letterSpacing'] ) ? $attributes['acceptanceStyles']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['acceptanceStyles']['color']['text'] ) ? $attributes['acceptanceStyles']['color']['text'] : '',
	),
);

$btn_styles = array(
	'width'          => isset( $attributes['buttonStyles']['width'] ) ? $attributes['buttonStyles']['width'] : '',
	'padding'        => isset( $attributes['buttonStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['buttonStyles']['padding'] ) : '',
	'margin'         => array(
		'top'    => isset( $attributes['buttonStyles']['margin']['top'] ) ? $attributes['buttonStyles']['margin']['top'] : '',
		'right'  => 'center' === $attributes['buttonStyles']['align'] ? 'auto' : '',
		'bottom' => isset( $attributes['buttonStyles']['margin']['bottom'] ) ? $attributes['buttonStyles']['margin']['bottom'] : '',
		'left'   => 'center' === $attributes['buttonStyles']['align'] || 'right' === $attributes['buttonStyles']['align'] ? 'auto' : '',
	),
	'border'         => isset( $attributes['buttonStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['buttonStyles']['border'] ) : '',
	'radius'         => isset( $attributes['buttonStyles']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['buttonStyles']['radius'] ) : '',
	'font'           => array(
		'size'   => isset( $attributes['buttonStyles']['font']['size'] ) ? $attributes['buttonStyles']['font']['size'] : '',
		'weight' => isset( $attributes['buttonStyles']['font']['weight'] ) ? $attributes['buttonStyles']['font']['weight'] : '',
		'family' => isset( $attributes['buttonStyles']['font']['family'] ) ? $attributes['buttonStyles']['font']['family'] : '',
	),
	'line_height'    => isset( $attributes['buttonStyles']['lineHeight'] ) ? $attributes['buttonStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['buttonStyles']['letterSpacing'] ) ? $attributes['buttonStyles']['letterSpacing'] : '',
	'color'          => array(
		'text'         => isset( $attributes['buttonStyles']['color']['text'] ) ? $attributes['buttonStyles']['color']['text'] : '',
		'text_hover'   => isset( $attributes['buttonStyles']['color']['textHover'] ) ? $attributes['buttonStyles']['color']['textHover'] : '',
		'bg'           => isset( $attributes['buttonStyles']['color']['bg'] ) ? $attributes['buttonStyles']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['buttonStyles']['color']['bgHover'] ) ? $attributes['buttonStyles']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['buttonStyles']['color']['borderHover'] ) ? $attributes['buttonStyles']['color']['borderHover'] : '',
	),
);

$file_styles = array(
	'padding' => isset( $attributes['fileStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['fileStyles']['padding'] ) : '',
	'border'  => isset( $attributes['fileStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['fileStyles']['border'] ) : '',
	'radius'  => isset( $attributes['fileStyles']['radius'] ) ? $attributes['fileStyles']['radius'] : '',
	'color'   => array(
		'text'         => isset( $attributes['fileStyles']['color']['text'] ) ? $attributes['fileStyles']['color']['text'] : '',
		'text_hover'   => isset( $attributes['fileStyles']['color']['textHover'] ) ? $attributes['fileStyles']['color']['textHover'] : '',
		'bg'           => isset( $attributes['fileStyles']['color']['bg'] ) ? $attributes['fileStyles']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['fileStyles']['color']['bgHover'] ) ? $attributes['fileStyles']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['fileStyles']['color']['borderHover'] ) ? $attributes['fileStyles']['color']['borderHover'] : '',
	),
);


$block_styles = "
#$block_id {
	{$styles['padding']}
	margin-top: {$styles['margin']['top']};
	margin-bottom: {$styles['margin']['bottom']};
	{$styles['border']}
	{$styles['radius']}
	font-size: {$styles['font']['size']};
	font-weight: {$attributes['font']['weight']};
	font-family: {$styles['font']['family']};
	color: {$styles['color']['text']};
	background-color: {$styles['color']['bg']};
}
#$block_id.has-box-shadow {
	box-shadow: {$styles['shadow']['horizontal']} {$styles['shadow']['vertical']} {$styles['shadow']['blur']} {$styles['shadow']['spread']} {$styles['shadow']['color']} {$styles['shadow']['position']};
}

#$block_id .wpcf7-form p:not(:last-child) {
	margin-bottom: {$styles['gap']};
}

#$block_id form > p > label {
	{$label_styles['padding']}
	font-size: {$label_styles['font']['size']};
	font-weight: {$attributes['label']['font']['weight']};
	font-family: {$label_styles['font']['family']};
	text-transform: {$attributes['label']['letterCase']};
	text-decoration: {$attributes['label']['decoration']};
	line-height: {$label_styles['line_height']};
	letter-spacing: {$label_styles['letter_spacing']};
	color: {$label_styles['color']['text']};
	background-color: {$label_styles['color']['bg']};
}

#$block_id form > p .wpcf7-text, #$block_id form > p .wpcf7-email, #$block_id form > p .wpcf7-textarea {
	{$text_styles['padding']}
	{$text_styles['border']}
	border-radius: {$text_styles['radius']};
	font-size: {$text_styles['font']['size']};
	font-weight: {$attributes['textStyles']['font']['weight']};
	font-family: {$text_styles['font']['family']};
	text-transform: {$attributes['textStyles']['letterCase']};
	text-decoration: {$attributes['textStyles']['decoration']};
	line-height: {$text_styles['line_height']};
	letter-spacing: {$text_styles['letter_spacing']};
	color: {$text_styles['color']['text']};
	background-color: {$text_styles['color']['bg']};

	&:focus, &:focus-visible {
		{$text_styles['border_focus']}
		color: {$text_styles['color']['text_focus']};
		background-color: {$text_styles['color']['bg_focus']};
	}
}
#$block_id form > p .wpcf7-textarea {
	height: {$text_styles['textarea_height']};
}

#$block_id form > p .wpcf7-date {
	{$date_styles['padding']}
	margin-top: {$date_styles['margin']['top']};
	margin-bottom: {$date_styles['margin']['bottom']};
	{$date_styles['border']}
	border-radius: {$date_styles['radius']};
	font-size: {$date_styles['font']['size']};
	font-weight: {$attributes['dateStyles']['font']['weight']};
	font-family: {$date_styles['font']['family']};
	text-transform: {$attributes['dateStyles']['letterCase']};
	text-decoration: {$attributes['dateStyles']['decoration']};
	line-height: {$date_styles['line_height']};
	letter-spacing: {$date_styles['letter_spacing']};
	color: {$date_styles['color']['text']};
	background-color: {$date_styles['color']['bg']};
}

#$block_id form > p .wpcf7-select {
	width: {$dropdown_styles['width']};
	{$dropdown_styles['padding']}
	{$dropdown_styles['border']}
	border-radius: {$dropdown_styles['radius']};
	font-size: {$dropdown_styles['font']['size']};
	font-weight: {$attributes['dropdownStyles']['font']['weight']};
	font-family: {$dropdown_styles['font']['family']};
	text-transform: {$attributes['dropdownStyles']['letterCase']};
	text-decoration: {$attributes['dropdownStyles']['decoration']};
	line-height: {$dropdown_styles['line_height']};
	letter-spacing: {$dropdown_styles['letter_spacing']};
	color: {$dropdown_styles['color']['text']};
	background-color: {$dropdown_styles['color']['bg']};
}

#$block_id form > p .wpcf7-checkbox {
	{$chkbx_styles['padding']}
	font-size: {$chkbx_styles['font']['size']};
	font-weight: {$attributes['checkboxStyles']['font']['weight']};
	font-family: {$chkbx_styles['font']['family']};
	text-transform: {$attributes['checkboxStyles']['letterCase']};
	text-decoration: {$attributes['checkboxStyles']['decoration']};
	line-height: {$chkbx_styles['line_height']};
	letter-spacing: {$chkbx_styles['letter_spacing']};
	color: {$chkbx_styles['color']['text']};

	& input[type='checkbox'] {
		width: {$chkbx_styles['size']};
		height: {$chkbx_styles['size']};
	}

	& .wpcf7-list-item:not(.first) {
		margin-left: {$chkbx_styles['item_gap']};
	}
}

#$block_id form > p .wpcf7-radio {
	{$radio_styles['padding']}
	font-size: {$radio_styles['font']['size']};
	font-weight: {$attributes['radioStyles']['font']['weight']};
	font-family: {$radio_styles['font']['family']};
	text-transform: {$attributes['radioStyles']['letterCase']};
	text-decoration: {$attributes['radioStyles']['decoration']};
	line-height: {$radio_styles['line_height']};
	letter-spacing: {$radio_styles['letter_spacing']};
	color: {$radio_styles['color']['text']};

	& input[type='radio'] {
		width: {$radio_styles['size']};
		height: {$radio_styles['size']};
	}

	& .wpcf7-list-item:not(.first) {
		margin-left: {$radio_styles['item_gap']};
	}
}

#$block_id form > p .wpcf7-acceptance {
	{$acceptance_styles['padding']}
	font-size: {$acceptance_styles['font']['size']};
	font-weight: {$attributes['acceptanceStyles']['font']['weight']};
	font-family: {$acceptance_styles['font']['family']};
	text-transform: {$attributes['acceptanceStyles']['letterCase']};
	text-decoration: {$attributes['acceptanceStyles']['decoration']};
	line-height: {$acceptance_styles['line_height']};
	letter-spacing: {$acceptance_styles['letter_spacing']};
	color: {$acceptance_styles['color']['text']};

	& input[type='checkbox'] {
		width: {$acceptance_styles['size']};
		height: {$acceptance_styles['size']};
	}
}

#$block_id form > p .wpcf7-file {
	{$file_styles['padding']}
	{$file_styles['border']}
	border-radius: {$file_styles['radius']};
	color: {$file_styles['color']['text']};
	background-color: {$file_styles['color']['bg']};

	&:hover {
		color: {$file_styles['color']['text_hover']};
		background-color: {$file_styles['color']['bg_hover']};
		border-color: {$file_styles['color']['border_hover']};
	}
}

#$block_id form > p .wpcf7-submit {
	width: {$btn_styles['width']};
	display: {$attributes['buttonStyles']['display']};
	{$btn_styles['padding']}
	margin-top: {$btn_styles['margin']['top']};
	margin-right: {$btn_styles['margin']['right']};
	margin-bottom: {$btn_styles['margin']['bottom']};
	margin-left: {$btn_styles['margin']['left']};
	{$btn_styles['border']}
	{$btn_styles['radius']}
	font-size: {$btn_styles['font']['size']};
	font-weight: {$attributes['buttonStyles']['font']['weight']};
	font-family: {$btn_styles['font']['family']};
	text-transform: {$attributes['buttonStyles']['letterCase']};
	text-decoration: {$attributes['buttonStyles']['decoration']};
	line-height: {$btn_styles['line_height']};
	letter-spacing: {$btn_styles['letter_spacing']};
	color: {$btn_styles['color']['text']};
	background-color: {$btn_styles['color']['bg']};

	&:hover {
		color: {$btn_styles['color']['text_hover']};
		background-color: {$btn_styles['color']['bg_hover']};
		border-color: {$btn_styles['color']['border_hover']};
	}
}
";

$font_families = array();

if ( isset( $attributes['label']['font']['family'] ) && ! empty( $attributes['label']['font']['family'] ) ) {
	$font_families[] = $attributes['label']['font']['family'];
}

if ( isset( $attributes['textStyles']['font']['family'] ) && ! empty( $attributes['textStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['textStyles']['font']['family'];
}

if ( isset( $attributes['dateStyles']['font']['family'] ) && ! empty( $attributes['dateStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['dateStyles']['font']['family'];
}

if ( isset( $attributes['dropdownStyles']['font']['family'] ) && ! empty( $attributes['dropdownStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['dropdownStyles']['font']['family'];
}

if ( isset( $attributes['checkboxStyles']['font']['family'] ) && ! empty( $attributes['checkboxStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['checkboxStyles']['font']['family'];
}

if ( isset( $attributes['radioStyles']['font']['family'] ) && ! empty( $attributes['radioStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['radioStyles']['font']['family'];
}

if ( isset( $attributes['acceptanceStyles']['font']['family'] ) && ! empty( $attributes['acceptanceStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['acceptanceStyles']['font']['family'];
}

if ( isset( $attributes['buttonStyles']['font']['family'] ) && ! empty( $attributes['buttonStyles']['font']['family'] ) ) {
	$font_families[] = $attributes['buttonStyles']['font']['family'];
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

$classes   = array();
$classes[] = 'cozy-block-cf7-styler';
$classes[] = $attributes['shadow']['enabled'] ? 'has-box-shadow' : '';
?>

<div class="cozy-block-wrapper">
	<div <?php echo $wrapper_attributes; ?>>
		<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
			<div>
				<?php echo do_shortcode( sanitize_text_field( $attributes['shortcode'] ) ); ?>
			</div>
		</div>
	</div>
</div>