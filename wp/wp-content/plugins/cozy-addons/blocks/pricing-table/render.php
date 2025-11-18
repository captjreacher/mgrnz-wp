<?php
$client_id = isset( $attributes['clientId'] ) ? str_replace( '-', '_', sanitize_key( wp_unslash( $attributes['clientId'] ) ) ) : '';

$block_id = 'cozyBlock_' . $client_id;

wp_localize_script( 'cozy-block--pricing-table--frontend-script', $block_id, $attributes );
wp_add_inline_script( 'cozy-block--pricing-table--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockPricingTable( "' . esc_html( $block_id ) . '" ) }) ' );

$styles = array(
	'padding' => isset( $attributes['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['padding'] ) : '',
	'border'  => isset( $attributes['border'] ) ? cozy_render_TRBL( 'border', $attributes['border'] ) : '',
	'radius'  => isset( $attributes['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['radius'] ) : '',
	'shadow'  => array(
		'horizontal' => isset( $attributes['shadow']['horizontal'] ) ? sanitize_text_field( $attributes['shadow']['horizontal'] ) : '',
		'vertical'   => isset( $attributes['shadow']['vertical'] ) ? sanitize_text_field( $attributes['shadow']['vertical'] ) : '',
		'blur'       => isset( $attributes['shadow']['blur'] ) ? sanitize_text_field( $attributes['shadow']['blur'] ) : '',
		'spread'     => isset( $attributes['shadow']['spread'] ) ? sanitize_text_field( $attributes['shadow']['spread'] ) : '',
		'color'      => isset( $attributes['shadow']['color'] ) ? sanitize_text_field( $attributes['shadow']['color'] ) : '',
		'position'   => isset( $attributes['shadow']['position'] ) ? sanitize_text_field( $attributes['shadow']['position'] ) : '',
	),
	'font'    => array(
		'size'   => isset( $attributes['typography']['font']['size'] ) ? sanitize_text_field( $attributes['typography']['font']['size'] ) : '',
		'family' => isset( $attributes['typography']['font']['family'] ) ? sanitize_text_field( $attributes['typography']['font']['family'] ) : '',
	),
	'color'   => array(
		'text' => isset( $attributes['color']['text'] ) ? sanitize_text_field( $attributes['color']['text'] ) : '',
		'bg'   => isset( $attributes['color']['bg'] ) ? sanitize_text_field( $attributes['color']['bg'] ) : '',
	),
);

$featured = array(
	'padding'        => isset( $attributes['featured']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['featured']['padding'] ) : '',
	'border'         => isset( $attributes['featured']['border'] ) ? cozy_render_TRBL( 'border', $attributes['featured']['border'] ) : '',
	'radius'         => isset( $attributes['featured']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['featured']['radius'] ) : '',
	'shadow'         => array(
		'horizontal' => isset( $attributes['featured']['shadow']['horizontal'] ) ? sanitize_text_field( $attributes['featured']['shadow']['horizontal'] ) : '',
		'vertical'   => isset( $attributes['featured']['shadow']['vertical'] ) ? sanitize_text_field( $attributes['featured']['shadow']['vertical'] ) : '',
		'blur'       => isset( $attributes['featured']['shadow']['blur'] ) ? sanitize_text_field( $attributes['featured']['shadow']['blur'] ) : '',
		'spread'     => isset( $attributes['featured']['shadow']['spread'] ) ? sanitize_text_field( $attributes['featured']['shadow']['spread'] ) : '',
		'color'      => isset( $attributes['featured']['shadow']['color'] ) ? sanitize_text_field( $attributes['featured']['shadow']['color'] ) : '',
		'position'   => isset( $attributes['featured']['shadow']['position'] ) ? sanitize_text_field( $attributes['featured']['shadow']['position'] ) : '',
	),
	'font'           => array(
		'size'   => isset( $attributes['featured']['font']['size'] ) ? sanitize_text_field( $attributes['featured']['font']['size'] ) : '',
		'family' => isset( $attributes['featured']['font']['family'] ) ? sanitize_text_field( $attributes['featured']['font']['family'] ) : '',
	),
	'line_height'    => isset( $attributes['featured']['lineHeight'] ) ? sanitize_text_field( $attributes['featured']['lineHeight'] ) : '',
	'letter_spacing' => isset( $attributes['featured']['letterSpacing'] ) ? sanitize_text_field( $attributes['featured']['letterSpacing'] ) : '',
	'color'          => array(
		'text' => isset( $attributes['featured']['color']['text'] ) ? sanitize_text_field( $attributes['featured']['color']['text'] ) : '',
		'bg'   => isset( $attributes['featured']['color']['bg'] ) ? sanitize_text_field( $attributes['featured']['color']['bg'] ) : '',
	),
	'position'       => array(
		'top'   => isset( $attributes['featured']['position']['top'] ) ? sanitize_text_field( $attributes['featured']['position']['top'] ) : '',
		'left'  => isset( $attributes['featured']['position']['left'] ) ? sanitize_text_field( $attributes['featured']['position']['left'] ) : '',
		'right' => isset( $attributes['featured']['position']['right'] ) ? sanitize_text_field( $attributes['featured']['position']['right'] ) : '',
	),
	'rotate'         => isset( $attributes['featured']['rotate'] ) ? sanitize_text_field( $attributes['featured']['rotate'] ) : '',
);

$icon = array(
	'padding'    => isset( $attributes['icon']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['icon']['padding'] ) : '',
	'margin'     => array(
		'top'    => isset( $attributes['icon']['margin']['top'] ) ? $attributes['icon']['margin']['top'] : '',
		'bottom' => isset( $attributes['icon']['margin']['bottom'] ) ? $attributes['icon']['margin']['bottom'] : '',
	),
	'box_width'  => isset( $attributes['icon']['boxWidth'] ) ? $attributes['icon']['boxWidth'] : '',
	'box_height' => isset( $attributes['icon']['boxHeight'] ) ? $attributes['icon']['boxHeight'] : '',
	'viewBox'    => array(
		'vx' => isset( $attributes['icon']['viewBox']['vx'] ) ? $attributes['icon']['viewBox']['vx'] : '',
		'vy' => isset( $attributes['icon']['viewBox']['vy'] ) ? $attributes['icon']['viewBox']['vy'] : '',
		'vw' => isset( $attributes['icon']['viewBox']['vw'] ) ? $attributes['icon']['viewBox']['vw'] : '',
		'vh' => isset( $attributes['icon']['viewBox']['vh'] ) ? $attributes['icon']['viewBox']['vh'] : '',
	),
	'path'       => isset( $attributes['icon']['path'] ) ? $attributes['icon']['path'] : '',
	'size'       => isset( $attributes['icon']['size'] ) ? $attributes['icon']['size'] : '',
	'border'     => isset( $attributes['icon']['border'] ) ? cozy_render_TRBL( 'border', $attributes['icon']['border'] ) : '',
	'radius'     => isset( $attributes['icon']['radius'] ) ? $attributes['icon']['radius'] : '',
	'color'      => array(
		'text' => isset( $attributes['icon']['color']['text'] ) ? $attributes['icon']['color']['text'] : '',
		'bg'   => isset( $attributes['icon']['color']['bg'] ) ? $attributes['icon']['color']['bg'] : '',
	),
);

$heading = array(
	'font'           => array(
		'size'   => isset( $attributes['heading']['font']['size'] ) ? sanitize_text_field( $attributes['heading']['font']['size'] ) : '',
		'family' => isset( $attributes['heading']['font']['family'] ) ? sanitize_text_field( $attributes['heading']['font']['family'] ) : '',
	),
	'line_height'    => isset( $attributes['heading']['lineHeight'] ) ? sanitize_text_field( $attributes['heading']['lineHeight'] ) : '',
	'letter_spacing' => isset( $attributes['heading']['letterSpacing'] ) ? sanitize_text_field( $attributes['heading']['letterSpacing'] ) : '',
	'color'          => array(
		'text' => isset( $attributes['heading']['color']['text'] ) ? sanitize_text_field( $attributes['heading']['color']['text'] ) : '',
	),
);

$sub_heading = array(
	'font'           => array(
		'size'   => isset( $attributes['subHeading']['font']['size'] ) ? sanitize_text_field( $attributes['subHeading']['font']['size'] ) : '',
		'family' => isset( $attributes['subHeading']['font']['family'] ) ? sanitize_text_field( $attributes['subHeading']['font']['family'] ) : '',
	),
	'line_height'    => isset( $attributes['subHeading']['lineHeight'] ) ? sanitize_text_field( $attributes['subHeading']['lineHeight'] ) : '',
	'letter_spacing' => isset( $attributes['subHeading']['letterSpacing'] ) ? sanitize_text_field( $attributes['subHeading']['letterSpacing'] ) : '',
	'color'          => array(
		'text' => isset( $attributes['subHeading']['color']['text'] ) ? sanitize_text_field( $attributes['subHeading']['color']['text'] ) : '',
	),
);

$price = array(
	'font'           => array(
		'size'   => isset( $attributes['price']['font']['size'] ) ? sanitize_text_field( $attributes['price']['font']['size'] ) : '',
		'family' => isset( $attributes['price']['font']['family'] ) ? sanitize_text_field( $attributes['price']['font']['family'] ) : '',
	),
	'line_height'    => isset( $attributes['price']['lineHeight'] ) ? sanitize_text_field( $attributes['price']['lineHeight'] ) : '',
	'letter_spacing' => isset( $attributes['price']['letterSpacing'] ) ? sanitize_text_field( $attributes['price']['letterSpacing'] ) : '',
	'separator'      => array(
		'font'           => array(
			'size'   => isset( $attributes['price']['separator']['font']['size'] ) ? sanitize_text_field( $attributes['price']['separator']['font']['size'] ) : '',
			'family' => isset( $attributes['price']['separator']['font']['family'] ) ? sanitize_text_field( $attributes['price']['separator']['font']['family'] ) : '',
		),
		'line_height'    => isset( $attributes['price']['separator']['lineHeight'] ) ? sanitize_text_field( $attributes['price']['separator']['lineHeight'] ) : '',
		'letter_spacing' => isset( $attributes['price']['separator']['letterSpacing'] ) ? sanitize_text_field( $attributes['price']['separator']['letterSpacing'] ) : '',
	),
	'color'          => array(
		'text'      => isset( $attributes['price']['color']['text'] ) ? sanitize_text_field( $attributes['price']['color']['text'] ) : '',
		'separator' => isset( $attributes['price']['color']['separator'] ) ? sanitize_text_field( $attributes['price']['color']['separator'] ) : '',
	),
);

$button = array(
	'width'          => isset( $attributes['button']['width'] ) ? sanitize_text_field( $attributes['button']['width'] ) : '',
	'padding'        => isset( $attributes['button']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['button']['padding'] ) : '',
	'border'         => isset( $attributes['button']['border'] ) ? cozy_render_TRBL( 'border', $attributes['button']['border'] ) : '',
	'radius'         => isset( $attributes['button']['radius'] ) ? sanitize_text_field( $attributes['button']['radius'] ) : '',
	'font'           => array(
		'size'   => isset( $attributes['button']['font']['size'] ) ? sanitize_text_field( $attributes['button']['font']['size'] ) : '',
		'family' => isset( $attributes['button']['font']['family'] ) ? sanitize_text_field( $attributes['button']['font']['family'] ) : '',
	),
	'line_height'    => isset( $attributes['button']['lineHeight'] ) ? sanitize_text_field( $attributes['button']['lineHeight'] ) : '',
	'letter_spacing' => isset( $attributes['button']['letterSpacing'] ) ? sanitize_text_field( $attributes['button']['letterSpacing'] ) : '',
	'color'          => array(
		'text'         => isset( $attributes['button']['color']['text'] ) ? sanitize_text_field( $attributes['button']['color']['text'] ) : '',
		'text_hover'   => isset( $attributes['button']['color']['textHover'] ) ? sanitize_text_field( $attributes['button']['color']['textHover'] ) : '',
		'bg'           => isset( $attributes['button']['color']['bg'] ) ? sanitize_text_field( $attributes['button']['color']['bg'] ) : '',
		'bg_hover'     => isset( $attributes['button']['color']['bgHover'] ) ? sanitize_text_field( $attributes['button']['color']['bgHover'] ) : '',
		'border_hover' => isset( $attributes['button']['color']['borderHover'] ) ? sanitize_text_field( $attributes['button']['color']['borderHover'] ) : '',
	),
);

$list = array(
	'padding'        => isset( $attributes['list']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['list']['padding'] ) : '',
	'border'         => isset( $attributes['list']['border'] ) ? cozy_render_TRBL( 'border', $attributes['list']['border'] ) : '',
	'radius'         => isset( $attributes['list']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['list']['radius'] ) : '',
	'item'           => array(
		'padding' => isset( $attributes['list']['item']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['list']['item']['padding'] ) : '',
		'border'  => isset( $attributes['list']['item']['border'] ) ? cozy_render_TRBL( 'border', $attributes['list']['item']['border'] ) : '',
		'radius'  => isset( $attributes['list']['item']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['list']['item']['radius'] ) : '',
	),
	'font'           => array(
		'size'   => isset( $attributes['list']['font']['size'] ) ? sanitize_text_field( $attributes['list']['font']['size'] ) : '',
		'family' => isset( $attributes['list']['font']['family'] ) ? sanitize_text_field( $attributes['list']['font']['family'] ) : '',
	),
	'line_height'    => isset( $attributes['list']['lineHeight'] ) ? sanitize_text_field( $attributes['list']['lineHeight'] ) : '',
	'letter_spacing' => isset( $attributes['list']['letterSpacing'] ) ? sanitize_text_field( $attributes['list']['letterSpacing'] ) : '',
	'gap'            => isset( $attributes['list']['gap'] ) ? sanitize_text_field( $attributes['list']['gap'] ) : '',
	'icon'           => array(
		'box_width'  => isset( $attributes['list']['icon']['boxWidth'] ) ? sanitize_text_field( $attributes['list']['icon']['boxWidth'] ) : '',
		'box_height' => isset( $attributes['list']['icon']['boxHeight'] ) ? sanitize_text_field( $attributes['list']['icon']['boxHeight'] ) : '',
		'size'       => isset( $attributes['list']['icon']['size'] ) ? sanitize_text_field( $attributes['list']['icon']['size'] ) : '',
		'box_border' => isset( $attributes['list']['icon']['boxBorder'] ) ? cozy_render_TRBL( 'border', $attributes['list']['icon']['boxBorder'] ) : '',
		'box_radius' => isset( $attributes['list']['icon']['boxRadius'] ) ? sanitize_text_field( $attributes['list']['icon']['boxRadius'] ) : '',
	),
	'heading'        => array(
		'font'           => array(
			'size'   => isset( $attributes['list']['heading']['font']['size'] ) ? sanitize_text_field( $attributes['list']['heading']['font']['size'] ) : '',
			'family' => isset( $attributes['list']['heading']['font']['family'] ) ? sanitize_text_field( $attributes['list']['heading']['font']['family'] ) : '',
		),
		'line_height'    => isset( $attributes['list']['heading']['lineHeight'] ) ? sanitize_text_field( $attributes['list']['heading']['lineHeight'] ) : '',
		'letter_spacing' => isset( $attributes['list']['heading']['letterSpacing'] ) ? sanitize_text_field( $attributes['list']['heading']['letterSpacing'] ) : '',
	),
	'loader'         => array(
		'padding'        => isset( $attributes['list']['ajaxLoader']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['list']['ajaxLoader']['padding'] ) : '',
		'margin'         => array(
			'top'    => isset( $attributes['list']['ajaxLoader']['margin']['top'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['margin']['top'] ) : '',
			'bottom' => isset( $attributes['list']['ajaxLoader']['margin']['bottom'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['margin']['bottom'] ) : '',
		),
		'border'         => isset( $attributes['list']['ajaxLoader']['border'] ) ? cozy_render_TRBL( 'border', $attributes['list']['ajaxLoader']['border'] ) : '',
		'radius'         => isset( $attributes['list']['ajaxLoader']['radius'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['radius'] ) : '',
		'font'           => array(
			'size'   => isset( $attributes['list']['ajaxLoader']['font']['size'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['font']['size'] ) : '',
			'family' => isset( $attributes['list']['ajaxLoader']['font']['family'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['font']['family'] ) : '',
		),
		'line_height'    => isset( $attributes['list']['ajaxLoader']['lineHeight'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['lineHeight'] ) : '',
		'letter_spacing' => isset( $attributes['list']['ajaxLoader']['letterSpacing'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['letterSpacing'] ) : '',
		'color'          => array(
			'text'         => isset( $attributes['list']['ajaxLoader']['color']['text'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['color']['text'] ) : '',
			'text_hover'   => isset( $attributes['list']['ajaxLoader']['color']['textHover'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['color']['textHover'] ) : '',
			'bg'           => isset( $attributes['list']['ajaxLoader']['color']['bg'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['color']['bg'] ) : '',
			'bg_hover'     => isset( $attributes['list']['ajaxLoader']['color']['bgHover'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['color']['bgHover'] ) : '',
			'border_hover' => isset( $attributes['list']['ajaxLoader']['color']['borderHover'] ) ? sanitize_text_field( $attributes['list']['ajaxLoader']['color']['borderHover'] ) : '',
		),

	),
	'color'          => array(
		'icon'      => isset( $attributes['list']['color']['icon'] ) ? sanitize_text_field( $attributes['list']['color']['icon'] ) : '',
		'icon_bg'   => isset( $attributes['list']['color']['iconBg'] ) ? sanitize_text_field( $attributes['list']['color']['iconBg'] ) : '',
		'heading'   => isset( $attributes['list']['color']['heading'] ) ? sanitize_text_field( $attributes['list']['color']['heading'] ) : '',
		'text'      => isset( $attributes['list']['color']['text'] ) ? sanitize_text_field( $attributes['list']['color']['text'] ) : '',
		'wrapper'   => isset( $attributes['list']['color']['wrapperBg'] ) ? sanitize_text_field( $attributes['list']['color']['wrapperBg'] ) : '',
		'list_item' => isset( $attributes['list']['color']['listBg'] ) ? sanitize_text_field( $attributes['list']['color']['listBg'] ) : '',
	),
);

$block_styles = "
#$block_id {
	margin-top: {$attributes['margin']['top']};
	margin-bottom: {$attributes['margin']['bottom']};
	{$styles['border']}
	{$styles['radius']}
	font-size: {$styles['font']['size']};
	font-weight: {$attributes['typography']['font']['weight']};
	font-family: {$styles['font']['family']};
	text-transform: {$attributes['typography']['letterCase']};
	background-color: {$styles['color']['bg']};
	color: {$styles['color']['text']};
	text-align: {$attributes['textAlign']};
	overflow: {$attributes['overflow']};
}
#$block_id.has-box-shadow {
	box-shadow: {$styles['shadow']['horizontal']} {$styles['shadow']['vertical']} {$styles['shadow']['blur']} {$styles['shadow']['spread']} {$styles['shadow']['color']} {$styles['shadow']['position']};
}
#$block_id .pricing-table__wrap {
	{$styles['padding']}
}

#$block_id .pricing-table__featured {
	{$featured['padding']}
	margin-top: {$attributes['featured']['margin']['top']};
	margin-bottom: {$attributes['featured']['margin']['bottom']};
	{$featured['border']}
	{$featured['radius']}
	font-size: {$featured['font']['size']};
	font-weight: {$attributes['featured']['font']['weight']};
	font-family: {$featured['font']['family']};
	text-transform: {$attributes['featured']['letterCase']};
	text-decoration: {$attributes['featured']['decoration']};
	line-height: {$featured['line_height']};
	letter-spacing: {$featured['letter_spacing']};
	color: {$featured['color']['text']};
	background-color: {$featured['color']['bg']};
	text-align: {$attributes['featured']['textAlign']};	
}
#$block_id .pricing-table__featured.has-box-shadow {
	box-shadow: {$featured['shadow']['horizontal']} {$featured['shadow']['vertical']} {$featured['shadow']['blur']} {$featured['shadow']['spread']} {$featured['shadow']['color']} {$featured['shadow']['position']};
}
#$block_id .pricing-table__featured.position-absolute {
	top: {$featured['position']['top']};
	transform: rotate({$featured['rotate']}deg);
}
#$block_id .pricing-table__featured.position-absolute.align-left{
	left: {$featured['position']['left']};
}
#$block_id .pricing-table__featured.position-absolute.align-right{
	right: {$featured['position']['right']};
}

#$block_id .pricing-table__icon-wrap {
	{$icon['padding']}
	margin-top: {$icon['margin']['top']};
	margin-bottom: {$icon['margin']['bottom']};
	width: {$icon['box_width']};
	height: {$icon['box_height']};
	{$icon['border']}
	border-radius: {$icon['radius']};
	background-color: {$icon['color']['bg']};
	color: {$icon['color']['text']};
}
#$block_id .pricing-table__icon-wrap svg {
	width: {$icon['size']};
	height: {$icon['size']};
}
#$block_id .pricing-table__img-wrap {
	margin-top: {$icon['margin']['top']};
	margin-bottom: {$icon['margin']['bottom']};
	border-radius: {$icon['radius']};
	max-width: {$icon['size']};
	max-height: {$icon['size']};
}
#$block_id .pricing-table__img-wrap img {
	width: {$icon['size']};
	height: {$icon['size']};
	border-radius: {$icon['radius']};
}

#$block_id .pricing-table__heading {
	margin-top: {$attributes['heading']['margin']['top']};
	margin-bottom: {$attributes['heading']['margin']['bottom']};
	font-size: {$heading['font']['size']};
	font-weight: {$attributes['heading']['font']['weight']};
	font-family: {$heading['font']['family']};
	text-transform: {$attributes['heading']['letterCase']};
	text-decoration: {$attributes['heading']['decoration']};
	line-height: {$heading['line_height']};
	letter-spacing: {$heading['letter_spacing']};
	color: {$heading['color']['text']};
}

#$block_id .pricing-table__subheading {
	margin-top: {$attributes['subHeading']['margin']['top']};
	margin-bottom: {$attributes['subHeading']['margin']['bottom']};
	font-size: {$sub_heading['font']['size']};
	font-weight: {$attributes['subHeading']['font']['weight']};
	font-family: {$sub_heading['font']['family']};
	text-transform: {$attributes['subHeading']['letterCase']};
	text-decoration: {$attributes['subHeading']['decoration']};
	line-height: {$sub_heading['line_height']};
	letter-spacing: {$sub_heading['letter_spacing']};
	color: {$sub_heading['color']['text']};
}

#$block_id .pricing-table__price-wrap {
	margin-top: {$attributes['price']['margin']['top']};
	margin-bottom: {$attributes['price']['margin']['bottom']};
	font-size: {$price['font']['size']};
	font-weight: {$attributes['price']['font']['weight']};
	font-family: {$price['font']['family']};
	text-transform: {$attributes['price']['letterCase']};
	text-decoration: {$attributes['price']['decoration']};
	line-height: {$price['line_height']};
	letter-spacing: {$price['letter_spacing']};
	color: {$price['color']['text']};
}
#$block_id .pricing-table__price-wrap .price__separator-label {
	margin-top: {$attributes['price']['separator']['margin']['top']};
	margin-bottom: {$attributes['price']['separator']['margin']['bottom']};
	font-size: {$price['separator']['font']['size']};
	font-weight: {$attributes['price']['separator']['font']['weight']};
	font-family: {$price['separator']['font']['family']};
	text-transform: {$attributes['price']['separator']['letterCase']};
	text-decoration: {$attributes['price']['separator']['decoration']};
	line-height: {$price['separator']['line_height']};
	letter-spacing: {$price['separator']['letter_spacing']};
	color: {$price['color']['separator']};
}

#$block_id .pricing-table__button-wrap {
	text-align: {$attributes['button']['textAlign']};
}
#$block_id .pricing-table__button {
	width: {$button['width']};
	{$button['padding']}
	margin-top: {$attributes['button']['margin']['top']};
	margin-bottom: {$attributes['button']['margin']['bottom']};
	{$button['border']}
	border-radius: {$button['radius']};
	font-size: {$button['font']['size']};
	font-weight: {$attributes['button']['font']['weight']};
	font-family: {$button['font']['family']};
	text-transform: {$attributes['button']['letterCase']};
	text-decoration: {$attributes['button']['decoration']};
	line-height: {$button['line_height']};
	letter-spacing: {$attributes['button']['letterSpacing']};
	background-color: {$button['color']['bg']};
	color: {$button['color']['text']};

}
#$block_id .pricing-table__button:hover {
	background-color: {$button['color']['bg_hover']};
	color: {$button['color']['text_hover']};
	border-color: {$button['color']['border_hover']};
}

#$block_id .pricing-table__list {
	margin-top: {$attributes['list']['margin']['top']};
	margin-bottom: {$attributes['list']['margin']['bottom']};
	{$list['padding']}
	{$list['border']}
	{$list['radius']}
	font-size: {$list['font']['size']};
	font-weight: {$attributes['list']['font']['weight']};
	font-family: {$list['font']['family']};
	text-transform: {$attributes['list']['letterCase']};
	text-decoration: {$attributes['list']['decoration']};
	line-height: {$list['line_height']};
	letter-spacing: {$list['letter_spacing']};
	color: {$list['color']['text']};
	background-color: {$list['color']['wrapper']};
}
#$block_id .pricing-table__list .list__heading {
	margin-top: {$attributes['list']['heading']['margin']['top']};
	margin-bottom: {$attributes['list']['heading']['margin']['bottom']};
	font-size: {$list['heading']['font']['size']};
	font-weight: {$attributes['list']['heading']['font']['weight']};
	font-family: {$list['heading']['font']['family']};
	text-transform: {$attributes['list']['heading']['letterCase']};
	text-decoration: {$attributes['list']['heading']['decoration']};
	line-height: {$list['heading']['line_height']};
	letter-spacing: {$list['heading']['letter_spacing']};
	color: {$list['color']['heading']};
}
#$block_id .pricing-table__list .pricing-table__list-item {
	{$list['item']['padding']}
	{$list['item']['border']}
	{$list['item']['radius']}
	justify-content: {$attributes['list']['textAlign']};
	background-color: {$list['color']['list_item']};
}
#$block_id .pricing-table__list .pricing-table__list-item:not(:first-child) {
	margin-top: {$list['gap']};
}
#$block_id .pricing-table__list .pricing-table__list-icon {
	min-width: {$list['icon']['box_width']};
	min-height: {$list['icon']['box_height']};
	{$list['icon']['box_border']}
	border-radius: {$list['icon']['box_radius']};
	background-color: {$list['color']['icon_bg']};
}
#$block_id .pricing-table__list .pricing-table__list-icon svg {
	width: {$list['icon']['size']};
	height: {$list['icon']['size']};
	fill: {$list['color']['icon']};
}
#$block_id #feature-list__ajax-loader-wrap {
	text-align: {$attributes['list']['ajaxLoader']['align']};
}
#$block_id #feature-list__ajax-loader {
	{$list['loader']['padding']}
	margin-top: {$list['loader']['margin']['top']};
	margin-bottom: {$list['loader']['margin']['bottom']};
	{$list['loader']['border']}
	border-radius: {$list['loader']['radius']};
	font-size: {$list['loader']['font']['size']};
	font-weight: {$attributes['list']['ajaxLoader']['font']['weight']};
	font-family: {$list['loader']['font']['family']};
	text-transform: {$attributes['list']['ajaxLoader']['letterCase']};
	text-decoration: {$attributes['list']['ajaxLoader']['decoration']};
	line-height: {$list['loader']['line_height']};
	letter-spacing: {$list['loader']['letter_spacing']};
	background-color: {$list['loader']['color']['bg']};
	color: {$list['loader']['color']['text']};
}
#$block_id #feature-list__ajax-loader:hover {
	background-color: {$list['loader']['color']['bg_hover']};
	color: {$list['loader']['color']['text_hover']};
	border-color: {$list['loader']['color']['border_hover']};
}
";

$font_families = array();

if ( isset( $attributes['typography']['font']['family'] ) && ! empty( $attributes['typography']['font']['family'] ) ) {
	$font_families[] = $attributes['typography']['font']['family'];
}

if ( isset( $attributes['featured']['font']['family'] ) && ! empty( $attributes['featured']['font']['family'] ) ) {
	$font_families[] = $attributes['featured']['font']['family'];
}

if ( isset( $attributes['heading']['font']['family'] ) && ! empty( $attributes['heading']['font']['family'] ) ) {
	$font_families[] = $attributes['heading']['font']['family'];
}

if ( isset( $attributes['subHeading']['font']['family'] ) && ! empty( $attributes['subHeading']['font']['family'] ) ) {
	$font_families[] = $attributes['subHeading']['font']['family'];
}

if ( isset( $attributes['price']['font']['family'] ) && ! empty( $attributes['price']['font']['family'] ) ) {
	$font_families[] = $attributes['price']['font']['family'];
}

if ( isset( $attributes['price']['separator']['font']['family'] ) && ! empty( $attributes['price']['separator']['font']['family'] ) ) {
	$font_families[] = $attributes['price']['separator']['font']['family'];
}

if ( isset( $attributes['button']['font']['family'] ) && ! empty( $attributes['button']['font']['family'] ) ) {
	$font_families[] = $attributes['button']['font']['family'];
}

if ( isset( $attributes['list']['font']['family'] ) && ! empty( $attributes['list']['font']['family'] ) ) {
	$font_families[] = $attributes['list']['font']['family'];
}

if ( isset( $attributes['list']['heading']['font']['family'] ) && ! empty( $attributes['list']['heading']['font']['family'] ) ) {
	$font_families[] = $attributes['list']['heading']['font']['family'];
}

if ( isset( $attributes['list']['ajaxLoader']['font']['family'] ) && ! empty( $attributes['list']['ajaxLoader']['font']['family'] ) ) {
	$font_families[] = $attributes['list']['ajaxLoader']['font']['family'];
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
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

$allowed_tags = array(
	'h1',
	'h2',
	'h3',
	'h4',
	'h5',
	'h6',
	'div',
	'p',
	'a',
	'span',
);

$wrapper_attributes = get_block_wrapper_attributes();

$classes   = array();
$classes[] = 'cozy-block-pricing-table';
$classes[] = $attributes['shadow']['enabled'] ? 'has-box-shadow' : '';
?>

<div class="cozy-block-wrapper">
	<div <?php echo $wrapper_attributes; ?>>
		<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
			<?php
			if ( cozy_addons_premium_access() && $attributes['enabled']['featured'] && ! empty( $attributes['featured']['content'] ) ) {
				$classes   = array();
				$classes[] = 'pricing-table__featured';
				$classes[] = 'position-' . $attributes['featured']['position']['type'];
				$classes[] = 'align-' . $attributes['featured']['position']['align'];
				$classes[] = isset( $attributes['featured']['shadow']['enabled'] ) && $attributes['featured']['shadow']['enabled'] ? 'has-box-shadow' : '';
				printf( '<%1$s class="%2$s">%3$s</%1$s>', esc_attr( in_array( $attributes['featured']['tag'], $allowed_tags, true ) ? $attributes['featured']['tag'] : 'p' ), esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ), esc_html( sanitize_text_field( $attributes['featured']['content'] ) ) );
			}

			$safe_values = array( 'heading', 'subHeading', 'price', 'description', 'button', 'list' );
			?>
			<div class="pricing-table__wrap">
			<?php
			foreach ( $attributes['order'] as $key ) {
				if ( 'list' === $key && $attributes['enabled'][ $key ] ) {
					?>
							<ul class="pricing-table__list">
					<?php

					if ( ! empty( $attributes['list']['heading']['content'] ) ) {
						printf( '<h4 class="list__heading">%1$s</h4>', esc_html( $attributes['list']['heading']['content'] ) );
					}


					if ( is_array( $attributes['list']['content'] ) && ! empty( $attributes['list']['content'] ) ) {
						$viewbox = implode( ' ', $attributes['list']['icon']['viewBox'] );
						foreach ( $attributes['list']['content'] as $list_index => $list_item ) {
							$classes   = array();
							$classes[] = 'pricing-table__list-item';

							$count_index = $list_index + 1;

							if ( cozy_addons_premium_access() && isset( $attributes['list']['ajaxLoader']['enabled'], $attributes['list']['ajaxLoader']['showCount'] ) && $attributes['list']['ajaxLoader']['enabled'] && $count_index > $attributes['list']['ajaxLoader']['showCount'] ) {
								$classes[] = 'display-none';
							} else {
								$classes[] = 'show';
							}

							?>
											<li class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>" data-index="<?php echo esc_attr( $list_index ); ?>">
								<?php
								if ( $attributes['list']['icon']['enabled'] && 'left' === $attributes['list']['icon']['position'] ) {
									?>
													<div class="pricing-table__list-icon">
														<svg
														viewBox="<?php echo esc_attr( $viewbox ); ?>"
														xmlns="http://www.w3.org/2000/svg"
														aria-hidden="true"
														>
															<path d="<?php echo esc_attr( $attributes['list']['icon']['path'] ); ?>" />	
														</svg>
													</div>
										<?php
								}
								?>
											<span><?php echo esc_html( $list_item ); ?></span>
									<?php
									if ( $attributes['list']['icon']['enabled'] && 'right' === $attributes['list']['icon']['position'] ) {
										?>
													<div class="pricing-table__list-icon">
														<svg
														viewbox="<?php echo esc_attr( $viewbox ); ?>"
														xmlns="http://www.w3.org/2000/svg"
														aria-hidden="true"
														>
															<path d="<?php echo esc_attr( $attributes['list']['icon']['path'] ); ?>" />	
														</svg>
													</div>
											<?php
									}
									?>
											</li>
									<?php
						}
					}

					if ( cozy_addons_premium_access() && $attributes['list']['ajaxLoader']['enabled'] && ( count( $attributes['list']['content'] ) > $attributes['list']['ajaxLoader']['showCount'] ) ) {
						?>
								<div id="feature-list__ajax-loader-wrap">
									<div id="feature-list__ajax-loader"><?php echo esc_html( sanitize_text_field( $attributes['list']['ajaxLoader']['label'] ) ); ?></div>
								</div>
							<?php
					}
					?>
							</ul>
					<?php
				} elseif ( 'list' !== $key && 'icon' !== $key && in_array( $key, $safe_values, true ) && $attributes['enabled'][ $key ] ) {
					if ( 'button' === $key || 'price' === $key ) {
						$classes   = array();
						$classes[] = 'pricing-table__' . $key . '-wrap';
						?>
						<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
						<?php
					}

					$classes = strtolower( $key );

					if ( 'price' === $key ) {
						$classes .= ' display-' . $attributes['price']['display'];
					}

					if ( 'button' === $key && isset( $attributes['button']['link']['url'] ) && ! empty( $attributes['button']['link']['url'] ) ) {
						$new_tab  = isset( $attributes['button']['link']['newtab'] ) && $attributes['button']['link']['newtab'] ? '_blank' : '';
						$nofollow = isset( $attributes['button']['link']['noFollow'] ) && $attributes['button']['link']['noFollow'] ? 'nofollow' : '';
						printf( '<%1$s class="pricing-table__%2$s" href="%4$s" target="%5$s" rel="%6$s">%3$s</%1$s>', esc_attr( in_array( $attributes[ $key ]['tag'], $allowed_tags, true ) ? $attributes[ $key ]['tag'] : 'p' ), esc_attr( $classes ), esc_html( $attributes[ $key ]['content'] ), esc_url( $attributes['button']['link']['url'] ), esc_attr( $new_tab ), esc_attr( $nofollow ) );
					} else {
						printf( '<%1$s class="pricing-table__%2$s">%3$s</%1$s>', esc_attr( in_array( $attributes[ $key ]['tag'], $allowed_tags, true ) ? $attributes[ $key ]['tag'] : 'p' ), esc_attr( $classes ), esc_html( $attributes[ $key ]['content'] ) );
					}

					if ( 'price' === $key && ! empty( $attributes['price']['separator']['content'] ) ) {
						printf( '<%1$s class="price__separator-label">%2$s</%1$s>', esc_attr( in_array( $attributes[ $key ]['tag'], $allowed_tags, true ) ? $attributes[ $key ]['tag'] : 'p' ), esc_html( $attributes['price']['separator']['content'] ) );
					}
					if ( 'button' === $key || 'price' === $key ) {
						?>
						</div>
						<?php
					}
				} elseif ( isset( $attributes['enabled']['icon'] ) && 'icon' === $key && $attributes['enabled'][ $key ] ) {
					if ( isset( $attributes['icon']['source'] ) && 'default' === $attributes['icon']['source'] ) {
						?>
						<div class="pricing-table__icon-wrap">
							<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor"
								viewBox="<?php echo esc_html( $icon['viewBox']['vx'] ) . ' ' . esc_html( $icon['viewBox']['vy'] ) . ' ' . esc_html( $icon['viewBox']['vw'] ) . ' ' . esc_html( $icon['viewBox']['vh'] ); ?>"
							>
								<path d="<?php echo esc_html( $icon['path'] ); ?>" />
							</svg>
						</div>
						<?php
					} elseif ( cozy_addons_premium_access() && isset( $attributes['icon']['source'] ) && 'media' === $attributes['icon']['source'] ) {
						$img_src = isset( $attributes['icon']['url'] ) ? sanitize_url( $attributes['icon']['url'] ) : '';
						$alt     = isset( $attributes['icon']['alt'] ) ? sanitize_text_field( $attributes['icon']['alt'] ) : '';
						?>
							<figure
								class="pricing-table__img-wrap"
							>
								<img src="<?php echo esc_url( $img_src ); ?>" alt="<?php echo esc_attr( $alt ); ?>" />
							</figure>
						<?php
					}
				}
			}
			?>
			</div>
		</div>
	</div>
</div>

<?php