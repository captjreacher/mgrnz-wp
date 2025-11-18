<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$cozy_block_var = 'cozyAdvancedTab_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block--advanced-tab--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--advanced-tab--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockAdvancedTabInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$container_color = array(
	'border' => isset( $attributes['containerStyles']['border']['color'] ) ? $attributes['containerStyles']['border']['color'] : '',
	'bg'     => isset( $attributes['containerStyles']['bgColor'] ) ? $attributes['containerStyles']['bgColor'] : '',
);

$title_color  = array(
	'text' => isset( $attributes['titleTypography']['color'] ) ? $attributes['titleTypography']['color'] : '',
);
$title_styles = array(
	'gap'            => isset( $attributes['titleStyles']['gap'] ) ? $attributes['titleStyles']['gap'] : '',
	'flex_wrap'      => isset( $attributes['titleStyles']['flexWrap'] ) && $attributes['titleStyles']['flexWrap'] ? 'wrap' : 'nowrap',
	'letter_case'    => isset( $attributes['titleTypography']['letterCase'] ) ? $attributes['titleTypography']['letterCase'] : '',
	'decoration'     => isset( $attributes['titleTypography']['decoration'] ) ? $attributes['titleTypography']['decoration'] : '',
	'line_height'    => isset( $attributes['titleTypography']['lineHeight'] ) ? $attributes['titleTypography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['titleTypography']['letterSpacing'] ) ? $attributes['titleTypography']['letterSpacing'] : '',
);

$tab_title_color = array(
	'border' => isset( $attributes['separatorStyles']['border']['color'] ) ? $attributes['separatorStyles']['border']['color'] : '',
	'text'   => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
);

$tab_width  = isset( $attributes['tabStyles']['width'] ) ? $attributes['tabStyles']['width'] : '';
$tab_after  = $attributes['enableTabAfter'] ? $attributes['separatorStyles']['border']['width']['bottom'] . 'px' : '';
$tab_color  = array(
	'border'        => isset( $attributes['tabStyles']['border']['color'] ) ? $attributes['tabStyles']['border']['color'] : '',
	'bg'            => isset( $attributes['tabStyles']['bgColor'] ) ? $attributes['tabStyles']['bgColor'] : '',
	'active_bg'     => isset( $attributes['tabStyles']['bgColorActive'] ) ? $attributes['tabStyles']['bgColorActive'] : '',
	'active_text'   => isset( $attributes['typography']['colorActive'] ) ? $attributes['typography']['colorActive'] : '',
	'active_border' => isset( $attributes['tabStyles']['border']['colorActive'] ) ? $attributes['tabStyles']['border']['colorActive'] : '',
);
$tab_styles = array(
	'letter_case'    => isset( $attributes['typography']['letterCase'] ) ? $attributes['typography']['letterCase'] : '',
	'decoration'     => isset( $attributes['typography']['decoration'] ) ? $attributes['typography']['decoration'] : '',
	'line_height'    => isset( $attributes['typography']['lineHeight'] ) ? $attributes['typography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['typography']['letterSpacing'] ) ? $attributes['typography']['letterSpacing'] : '',
);

$icon_color = array(
	'icon'        => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
	'active_icon' => isset( $attributes['typography']['colorActive'] ) ? $attributes['typography']['colorActive'] : '',
);

$content_styles = array(
	'margin' => array(
		'top'    => isset( $attributes['contentStyles']['margin']['top'] ) ? $attributes['contentStyles']['margin']['top'] : '',
		'bottom' => isset( $attributes['contentStyles']['margin']['bottom'] ) ? $attributes['contentStyles']['margin']['bottom'] : '',
	),
);
$content_color  = array(
	'border' => isset( $attributes['contentStyles']['border']['color'] ) ? $attributes['contentStyles']['border']['color'] : '',
	'bg'     => isset( $attributes['contentStyles']['bgColor'] ) ? $attributes['contentStyles']['bgColor'] : '',
);

$block_styles = "
#$block_id {
    padding: {$attributes['containerStyles']['padding']['top']}px {$attributes['containerStyles']['padding']['right']}px {$attributes['containerStyles']['padding']['bottom']}px {$attributes['containerStyles']['padding']['left']}px;
    border-style: {$attributes['containerStyles']['border']['type']};
    border-width: {$attributes['containerStyles']['border']['width']['top']}px {$attributes['containerStyles']['border']['width']['right']}px {$attributes['containerStyles']['border']['width']['bottom']}px {$attributes['containerStyles']['border']['width']['left']}px;
    border-color: {$container_color['border']};
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    background-color: {$container_color['bg']};
}

#$block_id .advanced-tab-title {
    font-weight: {$attributes['titleTypography']['fontWeight']};
    font-size: {$attributes['titleTypography']['fontSize']}px;
    font-family: {$attributes['titleTypography']['fontFamily']};
    color: {$title_color['text']};
    text-tranform: {$title_styles['letter_case']};
    text-decoration: {$title_styles['decoration']};
    line-height: {$title_styles['line_height']};
    letter-spacing: {$title_styles['letter_spacing']};
}

#$block_id .cozy-tab-title {
    padding: {$attributes['separatorStyles']['padding']['top']}px {$attributes['separatorStyles']['padding']['right']}px {$attributes['separatorStyles']['padding']['bottom']}px {$attributes['separatorStyles']['padding']['left']}px;
    border-style: {$attributes['separatorStyles']['border']['type']};
    border-width: {$attributes['separatorStyles']['border']['width']['top']}px {$attributes['separatorStyles']['border']['width']['right']}px {$attributes['separatorStyles']['border']['width']['bottom']}px {$attributes['separatorStyles']['border']['width']['left']}px;
    border-color: {$tab_title_color['border']};
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    text-tranform: {$tab_styles['letter_case']};
    text-decoration: {$tab_styles['decoration']};
    line-height: {$tab_styles['line_height']};
    letter-spacing: {$tab_styles['letter_spacing']};
    color: {$tab_title_color['text']};
}

#$block_id .layout-wrapper {
    gap: {$title_styles['gap']};
    flex-wrap: {$title_styles['flex_wrap']};
}
#$block_id.layout-horizontal .layout-wrapper {
    justify-content: {$attributes['tabAlign']};
}
#$block_id.layout-horizontal .cozy-tab-title {
    gap: {$attributes['columnGap']}px;
    justify-content: {$attributes['tabAlign']};
}

#$block_id .cozy-tab-title .cozy-tab-button {
    padding: {$attributes['tabStyles']['padding']['top']}px {$attributes['tabStyles']['padding']['right']}px {$attributes['tabStyles']['padding']['bottom']}px {$attributes['tabStyles']['padding']['left']}px;
    border-style: {$attributes['tabStyles']['border']['type']};
    border-width: {$attributes['tabStyles']['border']['width']['top']}px {$attributes['tabStyles']['border']['width']['right']}px {$attributes['tabStyles']['border']['width']['bottom']}px {$attributes['tabStyles']['border']['width']['left']}px;
    border-color: {$tab_color['border']};
    border-radius: {$attributes['tabStyles']['borderRadius']['top']}px {$attributes['tabStyles']['borderRadius']['right']}px {$attributes['tabStyles']['borderRadius']['bottom']}px {$attributes['tabStyles']['borderRadius']['left']}px;
    background-color: {$tab_color['bg']};
}

#$block_id.layout-vertical .cozy-tab-title .cozy-tab-button {
    width: {$tab_width}px;
}
#$block_id.layout-vertical {
    gap: {$attributes['columnGap']}px;
}
#$block_id.layout-vertical .cozy-tab-title {
    gap: {$attributes['rowGap']}px;
}
@media only screen and (max-width: 1024px) {
    #$block_id.layout-vertical .layout-wrapper {
        margin-bottom: {$attributes['columnGap']}px;
    }
}

#$block_id .cozy-tab-title .cozy-tab-button .display-flex {
    gap: {$attributes['iconSpacing']}px;
}

#$block_id .cozy-tab-title .cozy-tab-button.active {
    border-color: {$tab_color['active_border']};
    background-color: {$tab_color['active_bg']};
    color: {$tab_color['active_text']};
}

#$block_id .cozy-tab-title .cozy-tab-button.active:after {
    height: {$tab_after};
    bottom: -{$attributes['separatorStyles']['border']['width']['bottom']}px;
    background-color: {$tab_color['active_bg']};
}

#$block_id .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
}

#$block_id.icon-layout-fill .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
    fill: {$icon_color['icon']};
}

#$block_id.icon-layout-outline .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
    stroke: {$icon_color['icon']};
    fill: none;
}

#$block_id.icon-layout-fill .cozy-tab-title .cozy-tab-button.active .cozy-tab-icon {
    fill: {$icon_color['active_icon']};
}

#$block_id.icon-layout-outline .cozy-tab-title .cozy-tab-button.active .cozy-tab-icon {
    stroke: {$icon_color['active_icon']};
    fill: none;
}

#$block_id .cozy-advanced-tab-wrapper {
    padding: {$attributes['contentStyles']['padding']['top']}px {$attributes['contentStyles']['padding']['right']}px {$attributes['contentStyles']['padding']['bottom']}px {$attributes['contentStyles']['padding']['left']}px;
    margin-top: {$content_styles['margin']['top']};
    margin-bottom: {$content_styles['margin']['bottom']};
    border-style: {$attributes['contentStyles']['border']['type']};
    border-width: {$attributes['contentStyles']['border']['width']['top']}px {$attributes['contentStyles']['border']['width']['right']}px {$attributes['contentStyles']['border']['width']['bottom']}px {$attributes['contentStyles']['border']['width']['left']}px;
    border-color: {$content_color['border']};
    border-radius: {$attributes['contentStyles']['borderRadius']['top']}px {$attributes['contentStyles']['borderRadius']['right']}px {$attributes['contentStyles']['borderRadius']['bottom']}px {$attributes['contentStyles']['borderRadius']['left']}px;
    background-color: {$content_color['bg']};
}
";

$output = '<div class="cozy-block-wrapper">';

$font_families = array();

if ( isset( $attributes['titleTypography']['fontFamily'] ) && ! empty( $attributes['titleTypography']['fontFamily'] ) ) {
	$font_families[] = $attributes['titleTypography']['fontFamily'];
}

if ( isset( $attributes['typography']['fontFamily'] ) && ! empty( $attributes['typography']['fontFamily'] ) ) {
	$font_families[] = $attributes['typography']['fontFamily'];
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
