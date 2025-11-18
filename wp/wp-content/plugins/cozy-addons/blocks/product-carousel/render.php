<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyProductCarousel_' . str_replace( '-', '_', $client_id );

$currency_symbol                = get_woocommerce_currency_symbol();
$currency_position              = get_option( 'woocommerce_currency_pos' );
$attributes['currencySymbol']   = $currency_symbol;
$attributes['currencyPosition'] = $currency_position;

wp_localize_script( 'cozy-block--product-carousel--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--product-carousel--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductCarouselInit( "' . esc_html( $client_id ) . '" ) }) ' );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$sale_badge_font_size   = isset( $attributes['saleBadge']['typography']['fontSize'] ) ? $attributes['saleBadge']['typography']['fontSize'] : '';
$sale_badge_font_weight = isset( $attributes['saleBadge']['typography']['fontWeight'] ) ? $attributes['saleBadge']['typography']['fontWeight'] : '';
$sale_badge_font_family = isset( $attributes['saleBadge']['typography']['fontFamily'] ) ? $attributes['saleBadge']['typography']['fontFamily'] : '';
$sale_badge_font_color  = isset( $attributes['saleBadge']['typography']['color'] ) ? $attributes['saleBadge']['typography']['color'] : '';
$sale_badge             = array(
	'letter_case'    => isset( $attributes['saleBadge']['typography']['letterCase'] ) ? $attributes['saleBadge']['typography']['letterCase'] : '',
	'line_height'    => isset( $attributes['saleBadge']['typography']['lineHeight'] ) ? $attributes['saleBadge']['typography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['saleBadge']['typography']['letterSpacing'] ) ? $attributes['saleBadge']['typography']['letterSpacing'] : '',
);

$sale_badge_label = array(
	'font_size'      => isset( $attributes['saleBadge']['labelTypography']['fontSize'] ) ? $attributes['saleBadge']['labelTypography']['fontSize'] : '',
	'font_weight'    => isset( $attributes['saleBadge']['labelTypography']['fontWeight'] ) ? $attributes['saleBadge']['labelTypography']['fontWeight'] : '',
	'font_family'    => isset( $attributes['saleBadge']['labelTypography']['fontFamily'] ) ? $attributes['saleBadge']['labelTypography']['fontFamily'] : '',
	'letter_case'    => isset( $attributes['saleBadge']['labelTypography']['letterCase'] ) ? $attributes['saleBadge']['labelTypography']['letterCase'] : '',
	'line_height'    => isset( $attributes['saleBadge']['labelTypography']['lineHeight'] ) ? $attributes['saleBadge']['labelTypography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['saleBadge']['labelTypography']['letterSpacing'] ) ? $attributes['saleBadge']['labelTypography']['letterSpacing'] : '',
);

$sale_badge_color = array(
	'text' => isset( $attributes['saleBadge']['labelTypography']['color'] ) ? $attributes['saleBadge']['labelTypography']['color'] : '',
	'bg'   => isset( $attributes['saleBadge']['bgColor'] ) ? $attributes['saleBadge']['bgColor'] : '',
);

$read_more_color = array(
	'bg_hover'   => isset( $attributes['buttonHoverColor']['background'] ) ? $attributes['buttonHoverColor']['background'] : '',
	'text_hover' => isset( $attributes['buttonHoverColor']['text'] ) ? $attributes['buttonHoverColor']['text'] : '',
);

$rating_color = array(
	'icon' => isset( $attributes['reviewStyles']['color'] ) ? $attributes['reviewStyles']['color'] : '',
);

$nav_styles = array(
	'border' => isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '',
);
$nav_color  = array(
	'icon'         => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'bg'           => isset( $attributes['navigation']['backgroundColor'] ) ? $attributes['navigation']['backgroundColor'] : '',
	'icon_hover'   => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_hover'     => isset( $attributes['navigation']['backgroundColorHover'] ) ? $attributes['navigation']['backgroundColorHover'] : '',
	'border_hover' => isset( $attributes['navigation']['borderHover'] ) ? $attributes['navigation']['borderHover'] : '',
);

$bullet       = array(
	'align'  => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'left'   => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? 'padding-left: ' . $attributes['pagination']['left'] . ';' : '',
	'right'  => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? 'padding-right: ' . $attributes['pagination']['right'] . ';' : '',
	'active' => array(
		'height' => isset( $attributes['pagination']['activeHeight'] ) ? $attributes['pagination']['activeHeight'] : '',
		'border' => isset( $attributes['pagination']['activeBorder'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['activeBorder'] ) : '',
		'offset' => isset( $attributes['pagination']['activeOffset'] ) ? $attributes['pagination']['activeOffset'] : '',
	),
	'gap'    => isset( $attributes['pagination']['gap'] ) ? $attributes['pagination']['gap'] : 4,
);
$bullet_color = array(
	'default'       => isset( $attributes['pagination']['color'] ) ? $attributes['pagination']['color'] : '',
	'active'        => isset( $attributes['pagination']['activeColor'] ) ? $attributes['pagination']['activeColor'] : '',
	'default_hover' => isset( $attributes['pagination']['colorHover'] ) ? $attributes['pagination']['colorHover'] : '',
	'active_hover'  => isset( $attributes['pagination']['activeColorHover'] ) ? $attributes['pagination']['activeColorHover'] : '',
);

$block_id     = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$block_styles = "
#$block_id.layout-grid .cozy-layout-grid {
    row-gap: {$attributes['gridOptions']['columnGap']}px;
    column-gap: {$attributes['gridOptions']['columnGap']}px;
    grid-template-columns: repeat({$attributes['gridOptions']['displayColumn']}, 1fr);
}
@media screen and (max-width: 1024px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat({$width1}, 1fr) !important;
    }
}
@media screen and (max-width: 767px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat({$width2}, 1fr) !important;
    }
}
@media screen and (max-width: 400px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(1, 1fr) !important;
    }
}

#$block_id.on-sale .cozy-sale-badge {
    padding: {$attributes['saleBadge']['padding']['top']}px {$attributes['saleBadge']['padding']['right']}px {$attributes['saleBadge']['padding']['bottom']}px {$attributes['saleBadge']['padding']['left']}px;
    border: {$attributes['saleBadge']['borderWidth']}px {$attributes['saleBadge']['borderType']} {$attributes['saleBadge']['borderColor']};
    border-radius: {$attributes['saleBadge']['borderRadius']}px;
    background-color: {$sale_badge_color['bg']};
    rotate: {$attributes['saleBadge']['rotate']}deg;
    top: {$attributes['saleBadge']['top']}px;
    font-size: {$sale_badge_font_size}px;
    font-weight: {$sale_badge_font_weight};
    font-family: {$sale_badge_font_family};
	text-transform: {$sale_badge['letter_case']};
	line-height: {$sale_badge['line_height']};
	letter-spacing: {$sale_badge['letter_spacing']};
    color: {$sale_badge_font_color};
}
#$block_id.on-sale.sale-badge-display-block .cozy-sale-badge * {
    margin-bottom: {$attributes['saleBadge']['marginBottom']}px;
}
#$block_id.on-sale.sale-badge-display-flex .cozy-sale-badge {
    gap: {$attributes['saleBadge']['gap']}px;
}
#$block_id.on-sale.sale-badge-position-left .cozy-sale-badge{
    left: {$attributes['saleBadge']['left']}px;
}
#$block_id.on-sale.sale-badge-position-right .cozy-sale-badge{
    right: {$attributes['saleBadge']['right']}px;
}
#$block_id.on-sale .cozy-sale-badge .label-before,
#$block_id.on-sale .cozy-sale-badge .label-after {
    font-size: {$sale_badge_label['font_size']}px;
    font-weight: {$sale_badge_label['font_weight']};
    font-family: {$sale_badge_label['font_family']};
	text-transform: {$sale_badge_label['letter_case']};
	line-height: {$sale_badge_label['line_height']};
	letter-spacing: {$sale_badge_label['letter_spacing']};
    color: {$sale_badge_color['text']};
}

#$block_id .cozy-template-two .wp-block-read-more:hover,
#$block_id .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
#$block_id .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
    background-color: {$read_more_color['bg_hover']} !important;
    color: {$read_more_color['text_hover']} !important;
    opacity: 1 !important;
}

#$block_id .wc-block-components-product-rating__stars {
    font-size: {$attributes['reviewStyles']['fontSize']}px;
    color: {$rating_color['icon']};
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
    font-size: {$attributes['navigation']['iconSize']}px;
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
    width: {$attributes['navigation']['iconBoxWidth']}px;
    height: {$attributes['navigation']['iconBoxHeight']}px;
	{$nav_styles['border']}
    border-radius: {$attributes['navigation']['borderRadius']}px;
    color: {$nav_color['icon']};
    background-color: {$nav_color['bg']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
    color: {$nav_color['icon_hover']};
    background-color: {$nav_color['bg_hover']};
    border-color: {$nav_color['border_hover']};
}

#$block_id .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullet['gap']}px);
}
#$block_id .swiper-pagination {
    bottom: {$attributes['pagination']['verticalPosition']}px;
    text-align: {$bullet['align']};
    {$bullet['left']}
    {$bullet['right']}
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
    width: {$attributes['pagination']['width']}px;
    height: {$attributes['pagination']['height']}px;
    border-radius: {$attributes['pagination']['borderRadius']}px;
    background-color: {$bullet_color['default']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
    width: {$attributes['pagination']['activeWidth']}px;
	height: {$bullet['active']['height']}px;
	{$bullet['active']['border']}
	outline-offset: {$bullet['active']['offset']}px;
    border-radius: {$attributes['pagination']['activeBorderRadius']}px;
    background-color: {$bullet_color['active']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
    background-color: {$bullet_color['default_hover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
    background-color: {$bullet_color['active_hover']};
}
";

$output = '<div class="cozy-block-wrapper">';

/* Font Family */
$font_families = array();

if ( isset( $attributes['saleBadge']['typography']['fontFamily'] ) && ! empty( $attributes['saleBadge']['typography']['fontFamily'] ) ) {
	$font_families[] = $attributes['saleBadge']['typography']['fontFamily'];
}
if ( isset( $attributes['saleBadge']['labelTypography']['fontFamily'] ) && ! empty( $attributes['saleBadge']['labelTypography']['fontFamily'] ) ) {
	$font_families[] = $attributes['saleBadge']['labelTypography']['fontFamily'];
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

$output .= $content;


$output .= '</div>';

echo $output;
