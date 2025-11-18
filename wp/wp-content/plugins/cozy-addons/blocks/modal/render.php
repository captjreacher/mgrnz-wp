<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyModal_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--modal--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--modal--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockModalInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$wrapper_styles = array(
	'margin' => array(
		'top'    => isset( $attributes['margin']['top'] ) ? $attributes['margin']['top'] : '',
		'bottom' => isset( $attributes['margin']['bottom'] ) ? $attributes['margin']['bottom'] : '',
	),
);

$color = array(
	'bg'         => isset( $attributes['backgroundColor'] ) ? $attributes['backgroundColor'] : '',
	'icon'       => isset( $attributes['iconStyles']['iconColor'] ) ? $attributes['iconStyles']['iconColor'] : '',
	'icon_hover' => isset( $attributes['iconStyles']['iconColorHover'] ) ? $attributes['iconStyles']['iconColorHover'] : '',
);


$button_styles = array(
	'justify'        => isset( $attributes['clickButtonStyles']['justify'] ) ? $attributes['clickButtonStyles']['justify'] : 'center',
	'border'         => isset( $attributes['clickButtonStyles']['borderColor'] ) ? $attributes['clickButtonStyles']['borderColor'] : '',
	'text'           => isset( $attributes['clickButtonStyles']['color'] ) ? $attributes['clickButtonStyles']['color'] : '',
	'bg'             => isset( $attributes['clickButtonStyles']['bgColor'] ) ? $attributes['clickButtonStyles']['bgColor'] : '',
	'text_hover'     => isset( $attributes['clickButtonStyles']['colorHover'] ) ? $attributes['clickButtonStyles']['colorHover'] : '',
	'bg_hover'       => isset( $attributes['clickButtonStyles']['bgColorHover'] ) ? $attributes['clickButtonStyles']['bgColorHover'] : '',
	'font'           => array(
		'family' => isset( $attributes['clickButtonStyles']['fontFamily'] ) ? $attributes['clickButtonStyles']['fontFamily'] : '',
		'weight' => isset( $attributes['clickButtonStyles']['fontWeight'] ) ? $attributes['clickButtonStyles']['fontWeight'] : '',
	),
	'letter_case'    => isset( $attributes['clickButtonStyles']['letterCase'] ) ? $attributes['clickButtonStyles']['letterCase'] : '',
	'decoration'     => isset( $attributes['clickButtonStyles']['decoration'] ) ? $attributes['clickButtonStyles']['decoration'] : '',
	'line_height'    => isset( $attributes['clickButtonStyles']['lineHeight'] ) ? $attributes['clickButtonStyles']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['clickButtonStyles']['letterSpacing'] ) ? $attributes['clickButtonStyles']['letterSpacing'] : '',
	'img'            => array(
		'width'  => isset( $attributes['clickButtonStyles']['imgWidth'] ) ? $attributes['clickButtonStyles']['imgWidth'] : '100',
		'height' => isset( $attributes['clickButtonStyles']['imgHeight'] ) ? $attributes['clickButtonStyles']['imgHeight'] : '100',
		'radius' => isset( $attributes['clickButtonStyles']['imgRadius'] ) ? $attributes['clickButtonStyles']['imgRadius'] : '',
	),
);

$icon_styles = array(
	'display'    => ( isset( $attributes['iconStyles']['enabled'] ) && $attributes['iconStyles']['enabled'] ) || ! isset( $attributes['iconStyles']['enabled'] ) ? 'flex' : 'none',
	'box_width'  => isset( $attributes['iconStyles']['boxWidth'] ) ? $attributes['iconStyles']['boxWidth'] : '36',
	'box_height' => isset( $attributes['iconStyles']['boxHeight'] ) ? $attributes['iconStyles']['boxHeight'] : '36',
	'radius'     => isset( $attributes['iconStyles']['radius'] ) ? $attributes['iconStyles']['radius'] : '100',
	'color'      => array(
		'bg'       => isset( $attributes['iconStyles']['bg'] ) ? $attributes['iconStyles']['bg'] : '',
		'bg_hover' => isset( $attributes['iconStyles']['bgHover'] ) ? $attributes['iconStyles']['bgHover'] : '',
	),
);

$overlay_styles = array(
	'color' => array(
		'bg' => isset( $attributes['backgroundOverlayColor'] ) ? $attributes['backgroundOverlayColor'] : '',
	),
);

$block_styles = "
.cozy-block-wrapper[data-block='{$client_id}'] {
    text-align: {$button_styles['justify']};
	margin-top: {$wrapper_styles['margin']['top']};
	margin-bottom: {$wrapper_styles['margin']['bottom']};
}
.cozy-block-wrapper[data-block='{$client_id}'] .cozy-block-modal__overlay {
	background-color: {$overlay_styles['color']['bg']};
}
.cozy-modal-open[data-type='{$client_id}'] {
    padding: {$attributes['clickButtonStyles']['padding']['top']}px {$attributes['clickButtonStyles']['padding']['right']}px {$attributes['clickButtonStyles']['padding']['bottom']}px {$attributes['clickButtonStyles']['padding']['left']}px;
    border-style: {$attributes['clickButtonStyles']['borderType']};
    border-width: {$attributes['clickButtonStyles']['borderWidth']['top']}px {$attributes['clickButtonStyles']['borderWidth']['right']}px {$attributes['clickButtonStyles']['borderWidth']['bottom']}px {$attributes['clickButtonStyles']['borderWidth']['left']}px;
    border-color: {$button_styles['border']};
    border-radius: {$attributes['clickButtonStyles']['borderRadius']}px;
    font-size: {$attributes['clickButtonStyles']['fontSize']}px;
    font-family: {$button_styles['font']['family']};
    font-weight: {$button_styles['font']['weight']};
    text-transform: {$button_styles['letter_case']};
    text-decoration: {$button_styles['decoration']};
    line-height: {$button_styles['line_height']};
    letter-spacing: {$button_styles['letter_spacing']};
    color: {$button_styles['text']};
    background-color: {$button_styles['bg']};
}
.cozy-modal-open[data-type='{$client_id}'] .cozy-modal-open__img {
    max-width: {$button_styles['img']['width']}px;
    max-height: {$button_styles['img']['height']}px;
    border-radius: {$button_styles['img']['radius']}px;
}
.cozy-modal-open[data-type='{$client_id}'] .cozy-modal-open__img img {
    border-radius: {$button_styles['img']['radius']}px;
}
.cozy-modal-open[data-type='{$client_id}']:hover {
    color: {$button_styles['text_hover']};
    background-color: {$button_styles['bg_hover']};
}
#$block_id {
    padding: {$attributes['padding']['top']}px {$attributes['padding']['right']}px {$attributes['padding']['bottom']}px {$attributes['padding']['left']}px;
    background-color: {$color['bg']};
}
#$block_id.type-default {
    width: {$attributes['boxWidth']}px;
}
#$block_id .modal-icon-wrapper {
    margin-top: {$attributes['iconStyles']['verticalSpacing']}px;
    display: {$icon_styles['display']};
    width: {$icon_styles['box_width']}px;
    height: {$icon_styles['box_height']}px;
    border-radius: {$icon_styles['radius']}px;
    background-color: {$icon_styles['color']['bg']};
}
#$block_id.icon-align-left .modal-icon-wrapper {
    margin-left: {$attributes['iconStyles']['horizontalSpacing']}px;
}
#$block_id.icon-align-right .modal-icon-wrapper {
    margin-right: {$attributes['iconStyles']['horizontalSpacing']}px;
}
#$block_id .modal-icon-wrapper:hover {
    background-color: {$icon_styles['color']['bg_hover']};
}
#$block_id .modal-icon-wrapper svg {
    width: {$attributes['iconStyles']['iconSize']}px;
    height: {$attributes['iconStyles']['iconSize']}px;
    fill: {$color['icon']};
}
#$block_id .modal-icon-wrapper:hover svg {
    fill: {$color['icon_hover']};
}
";

$font_families = array();

if ( isset( $attributes['clickButtonStyles']['fontFamily'] ) && ! empty( $attributes['clickButtonStyles']['fontFamily'] ) ) {
	$font_families[] = $attributes['clickButtonStyles']['fontFamily'];
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

$output = '<div class="cozy-block-wrapper" data-block="' . esc_attr( $client_id ) . '">';

if ( 'default' === $attributes['modalType'] ) {
	$output .= '<div class="cozy-block-modal__overlay display-none"></div>';
}

$output .= $content;
$output .= '</div>';

echo $output;
