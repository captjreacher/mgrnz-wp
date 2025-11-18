<?php

use CozyAddons\Helpers\Utils;

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyPortfolioGallery_' . str_replace( '-', '_', $client_id );

$attributes['portfolioTemplates'] = array( ...Utils::get_cozy_portfolio_gallery_templates() );
$attributes['portfolioTax']       = get_terms( array( 'ca_portfolio_gallery_category' ) );
$attributes['isPremium']          = cozy_addons_premium_access();
$attributes['ajaxURL']            = admin_url( 'admin-ajax.php' );
$attributes['nonce']              = wp_create_nonce( 'cozy_block_portfolio_gallery_load_more' );

wp_localize_script( 'cozy-block--portfolio-gallery--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--portfolio-gallery--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockPortfolioGalleryInit( "' . esc_html( $client_id ) . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$grid_options = array(
	'row_gap' => isset( $attributes['gridOptions']['rowGap'] ) ? $attributes['gridOptions']['rowGap'] : '',
);

$featured_img = array(
	'width'   => isset( $attributes['featuredImage']['width'] ) ? $attributes['featuredImage']['width'] : '',
	'height'  => isset( $attributes['featuredImage']['height'] ) ? $attributes['featuredImage']['height'] : '',
	'margin'  => array(
		'top'    => isset( $attributes['featuredImage']['margin']['top'] ) ? $attributes['featuredImage']['margin']['top'] : '',
		'bottom' => isset( $attributes['featuredImage']['margin']['bottom'] ) ? $attributes['featuredImage']['margin']['bottom'] : '',
	),
	'radius'  => isset( $attributes['featuredImage']['radius'] ) ? $attributes['featuredImage']['radius'] : '',
	'scale'   => isset( $attributes['featuredImage']['objectFit'] ) ? $attributes['featuredImage']['objectFit'] : '',
	'overlay' => isset( $attributes['featuredImage']['overlayColor'] ) ? $attributes['featuredImage']['overlayColor'] : '',
);

$post_title = array(
	'font'           => array(
		'size'   => isset( $attributes['postTitle']['font']['size'] ) ? $attributes['postTitle']['font']['size'] : '',
		'weight' => isset( $attributes['postTitle']['font']['weight'] ) ? $attributes['postTitle']['font']['weight'] : '',
		'family' => isset( $attributes['postTitle']['font']['family'] ) ? $attributes['postTitle']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['postTitle']['letterCase'] ) ? $attributes['postTitle']['letterCase'] : '',
	'decoration'     => isset( $attributes['postTitle']['decoration'] ) ? $attributes['postTitle']['decoration'] : '',
	'line_height'    => isset( $attributes['postTitle']['lineHeight'] ) ? $attributes['postTitle']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['postTitle']['letterSpacing'] ) ? $attributes['postTitle']['letterSpacing'] : '',
	'color'          => array(
		'text'       => isset( $attributes['postTitle']['color']['text'] ) ? $attributes['postTitle']['color']['text'] : '',
		'text_hover' => isset( $attributes['postTitle']['color']['textHover'] ) ? $attributes['postTitle']['color']['textHover'] : '',
	),
);

$overlay_content = array(
	'position'       => isset( $attributes['overlayContent']['position'] ) ? str_replace( ' ', '-', $attributes['overlayContent']['position'] ) : 'bottom-left',
	'align'          => isset( $attributes['overlayContent']['align'] ) ? $attributes['overlayContent']['align'] : 'left',
	'padding'        => isset( $attributes['overlayContent']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['overlayContent']['padding'] ) : '',
	'btn'            => array(
		'padding'        => isset( $attributes['overlayContent']['button']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['overlayContent']['button']['padding'] ) : '',
		'margin'         => array(
			'top'    => isset( $attributes['overlayContent']['button']['margin']['top'] ) ? $attributes['overlayContent']['button']['margin']['top'] : '',
			'bottom' => isset( $attributes['overlayContent']['button']['margin']['bottom'] ) ? $attributes['overlayContent']['button']['margin']['bottom'] : '',
		),
		'border'         => isset( $attributes['overlayContent']['button']['border'] ) ? cozy_render_TRBL( 'border', $attributes['overlayContent']['button']['border'] ) : '',
		'radius'         => isset( $attributes['overlayContent']['button']['radius'] ) ? $attributes['overlayContent']['button']['radius'] : '',
		'font'           => array(
			'size'   => isset( $attributes['overlayContent']['button']['font']['size'] ) ? $attributes['overlayContent']['button']['font']['size'] : '',
			'weight' => isset( $attributes['overlayContent']['button']['font']['weight'] ) ? $attributes['overlayContent']['button']['font']['weight'] : '',
			'family' => isset( $attributes['overlayContent']['button']['font']['family'] ) ? $attributes['overlayContent']['button']['font']['family'] : '',
		),
		'letter_case'    => isset( $attributes['overlayContent']['button']['letterCase'] ) ? $attributes['overlayContent']['button']['letterCase'] : '',
		'decoration'     => isset( $attributes['overlayContent']['button']['decoration'] ) ? $attributes['overlayContent']['button']['decoration'] : '',
		'line_height'    => isset( $attributes['overlayContent']['button']['lineHeight'] ) ? $attributes['overlayContent']['button']['lineHeight'] : '',
		'letter_spacing' => isset( $attributes['overlayContent']['button']['letterSpacing'] ) ? $attributes['overlayContent']['button']['letterSpacing'] : '',
	),
	'font'           => array(
		'size'   => isset( $attributes['overlayContent']['font']['size'] ) ? $attributes['overlayContent']['font']['size'] : '',
		'weight' => isset( $attributes['overlayContent']['font']['weight'] ) ? $attributes['overlayContent']['font']['weight'] : '',
		'family' => isset( $attributes['overlayContent']['font']['family'] ) ? $attributes['overlayContent']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['overlayContent']['letterCase'] ) ? $attributes['overlayContent']['letterCase'] : '',
	'decoration'     => isset( $attributes['overlayContent']['decoration'] ) ? $attributes['overlayContent']['decoration'] : '',
	'line_height'    => isset( $attributes['overlayContent']['lineHeight'] ) ? $attributes['overlayContent']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['overlayContent']['letterSpacing'] ) ? $attributes['overlayContent']['letterSpacing'] : '',
	'color'          => array(
		'text'             => isset( $attributes['overlayContent']['color']['text'] ) ? $attributes['overlayContent']['color']['text'] : '',
		'btn_text'         => isset( $attributes['overlayContent']['color']['btnText'] ) ? $attributes['overlayContent']['color']['btnText'] : '',
		'btn_text_hover'   => isset( $attributes['overlayContent']['color']['btnTextHover'] ) ? $attributes['overlayContent']['color']['btnTextHover'] : '',
		'btn_bg'           => isset( $attributes['overlayContent']['color']['btnBg'] ) ? $attributes['overlayContent']['color']['btnBg'] : '',
		'btn_bg_hover'     => isset( $attributes['overlayContent']['color']['btnBgHover'] ) ? $attributes['overlayContent']['color']['btnBgHover'] : '',
		'btn_border_hover' => isset( $attributes['overlayContent']['color']['btnBorderHover'] ) ? $attributes['overlayContent']['color']['btnBorderHover'] : '',
	),
);

$popup = array(
	'width'            => isset( $attributes['popup']['width'] ) ? $attributes['popup']['width'] : '',
	'height'           => isset( $attributes['popup']['height'] ) ? $attributes['popup']['height'] : '',
	'responsive_width' => isset( $attributes['popup']['responsiveWidth'] ) ? $attributes['popup']['responsiveWidth'] : '767',
	'padding'          => isset( $attributes['popup']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['popup']['padding'] ) : '',
	'img'              => array(
		'width'  => isset( $attributes['popup']['featuredImage']['width'] ) ? $attributes['popup']['featuredImage']['width'] : '',
		'height' => isset( $attributes['popup']['featuredImage']['height'] ) ? $attributes['popup']['featuredImage']['height'] : '',
		'margin' => array(
			'top'    => isset( $attributes['popup']['margin']['top'] ) ? $attributes['popup']['margin']['top'] : '',
			'bottom' => isset( $attributes['popup']['margin']['bottom'] ) ? $attributes['popup']['margin']['bottom'] : '',
		),
		'radius' => isset( $attributes['featuredImage']['radius'] ) ? $attributes['featuredImage']['radius'] : '',
	),
	'cat'              => array(
		'gap'            => isset( $attributes['popup']['category']['gap'] ) ? $attributes['popup']['category']['gap'] : '',
		'row_gap'        => isset( $attributes['popup']['category']['rowGap'] ) ? $attributes['popup']['category']['rowGap'] : '',
		'flex_wrap'      => isset( $attributes['popup']['category']['stackLayout'] ) && filter_var( $attributes['popup']['category']['stackLayout'], FILTER_VALIDATE_BOOLEAN ) ? 'wrap' : '',
		'padding'        => isset( $attributes['popup']['category']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['popup']['category']['padding'] ) : '',
		'margin'         => array(
			'top'    => isset( $attributes['popup']['category']['margin']['top'] ) ? $attributes['popup']['category']['margin']['top'] : '',
			'bottom' => isset( $attributes['popup']['category']['margin']['bottom'] ) ? $attributes['popup']['category']['margin']['bottom'] : '',
		),
		'border'         => isset( $attributes['popup']['category']['border'] ) ? cozy_render_TRBL( 'border', $attributes['popup']['category']['border'] ) : '',
		'radius'         => isset( $attributes['popup']['category']['radius'] ) ? $attributes['popup']['category']['radius'] : '',
		'font'           => array(
			'size'   => isset( $attributes['popup']['category']['font']['size'] ) ? $attributes['popup']['category']['font']['size'] : '',
			'weight' => isset( $attributes['popup']['category']['font']['weight'] ) ? $attributes['popup']['category']['font']['weight'] : '',
			'family' => isset( $attributes['popup']['category']['font']['family'] ) ? $attributes['popup']['category']['font']['family'] : '',
		),
		'letter_case'    => isset( $attributes['popup']['category']['letterCase'] ) ? $attributes['popup']['category']['letterCase'] : '',
		'decoration'     => isset( $attributes['popup']['category']['decoration'] ) ? $attributes['popup']['category']['decoration'] : '',
		'line_height'    => isset( $attributes['popup']['category']['lineHeight'] ) ? $attributes['popup']['category']['lineHeight'] : '',
		'letter_spacing' => isset( $attributes['popup']['category']['letterSpacing'] ) ? $attributes['popup']['category']['letterSpacing'] : '',
	),
	'post_title'       => array(
		'margin'         => array(
			'top'    => isset( $attributes['popup']['postTitle']['margin']['top'] ) ? $attributes['popup']['postTitle']['margin']['top'] : '',
			'bottom' => isset( $attributes['popup']['postTitle']['margin']['bottom'] ) ? $attributes['popup']['postTitle']['margin']['bottom'] : '',
		),
		'font'           => array(
			'size'   => isset( $attributes['popup']['postTitle']['font']['size'] ) ? $attributes['popup']['postTitle']['font']['size'] : '',
			'weight' => isset( $attributes['popup']['postTitle']['font']['weight'] ) ? $attributes['popup']['postTitle']['font']['weight'] : '',
			'family' => isset( $attributes['popup']['postTitle']['font']['family'] ) ? $attributes['popup']['postTitle']['font']['family'] : '',
		),
		'letter_case'    => isset( $attributes['popup']['postTitle']['letterCase'] ) ? $attributes['popup']['postTitle']['letterCase'] : '',
		'decoration'     => isset( $attributes['popup']['postTitle']['decoration'] ) ? $attributes['popup']['postTitle']['decoration'] : '',
		'line_height'    => isset( $attributes['popup']['postTitle']['lineHeight'] ) ? $attributes['popup']['postTitle']['lineHeight'] : '',
		'letter_spacing' => isset( $attributes['popup']['postTitle']['letterSpacing'] ) ? $attributes['popup']['postTitle']['letterSpacing'] : '',
	),
	'cpt'              => array(
		'gap'     => isset( $attributes['popup']['cpt']['gap'] ) ? $attributes['popup']['cpt']['gap'] : '',
		'padding' => isset( $attributes['popup']['cpt']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['popup']['cpt']['padding'] ) : '',
		'margin'  => array(
			'top'    => isset( $attributes['popup']['cpt']['margin']['top'] ) ? $attributes['popup']['cpt']['margin']['top'] : '',
			'bottom' => isset( $attributes['popup']['cpt']['margin']['bottom'] ) ? $attributes['popup']['cpt']['margin']['bottom'] : '',
		),
		'border'  => isset( $attributes['popup']['cpt']['border'] ) ? cozy_render_TRBL( 'border', $attributes['popup']['cpt']['border'] ) : '',
		'radius'  => isset( $attributes['popup']['cpt']['radius'] ) ? $attributes['popup']['cpt']['radius'] : '',
	),
	'cpt_title'        => array(
		'font'           => array(
			'size'   => isset( $attributes['popup']['cptTitle']['font']['size'] ) ? $attributes['popup']['cptTitle']['font']['size'] : '',
			'weight' => isset( $attributes['popup']['cptTitle']['font']['weight'] ) ? $attributes['popup']['cptTitle']['font']['weight'] : '',
			'family' => isset( $attributes['popup']['cptTitle']['font']['family'] ) ? $attributes['popup']['cptTitle']['font']['family'] : '',
		),
		'letter_case'    => isset( $attributes['popup']['cptTitle']['letterCase'] ) ? $attributes['popup']['cptTitle']['letterCase'] : '',
		'decoration'     => isset( $attributes['popup']['cptTitle']['decoration'] ) ? $attributes['popup']['cptTitle']['decoration'] : '',
		'line_height'    => isset( $attributes['popup']['cptTitle']['lineHeight'] ) ? $attributes['popup']['cptTitle']['lineHeight'] : '',
		'letter_spacing' => isset( $attributes['popup']['cptTitle']['letterSpacing'] ) ? $attributes['popup']['cptTitle']['letterSpacing'] : '',
	),
	'cpt_subtitle'     => array(
		'font'           => array(
			'size'   => isset( $attributes['popup']['cptSubtitle']['font']['size'] ) ? $attributes['popup']['cptSubtitle']['font']['size'] : '',
			'weight' => isset( $attributes['popup']['cptSubtitle']['font']['weight'] ) ? $attributes['popup']['cptSubtitle']['font']['weight'] : '',
			'family' => isset( $attributes['popup']['cptSubtitle']['font']['family'] ) ? $attributes['popup']['cptSubtitle']['font']['family'] : '',
		),
		'letter_case'    => isset( $attributes['popup']['cptSubtitle']['letterCase'] ) ? $attributes['popup']['cptSubtitle']['letterCase'] : '',
		'decoration'     => isset( $attributes['popup']['cptSubtitle']['decoration'] ) ? $attributes['popup']['cptSubtitle']['decoration'] : '',
		'line_height'    => isset( $attributes['popup']['cptSubtitle']['lineHeight'] ) ? $attributes['popup']['cptSubtitle']['lineHeight'] : '',
		'letter_spacing' => isset( $attributes['popup']['cptSubtitle']['letterSpacing'] ) ? $attributes['popup']['cptTitle']['letterSpacing'] : '',
	),
	'font'             => array(
		'size'   => isset( $attributes['popup']['font']['size'] ) ? $attributes['popup']['font']['size'] : '',
		'weight' => isset( $attributes['popup']['weight']['size'] ) ? $attributes['popup']['weight']['size'] : '',
		'family' => isset( $attributes['popup']['family']['size'] ) ? $attributes['popup']['family']['size'] : '',
	),
	'letter_case'      => isset( $attributes['popup']['letterCase'] ) ? $attributes['popup']['letterCase'] : '',
	'decoration'       => isset( $attributes['popup']['decoration'] ) ? $attributes['popup']['decoration'] : '',
	'line_height'      => isset( $attributes['popup']['lineHeight'] ) ? $attributes['popup']['lineHeight'] : '',
	'letter_spacing'   => isset( $attributes['popup']['letterSpacing'] ) ? $attributes['popup']['letterSpacing'] : '',
	'color'            => array(
		'text'         => isset( $attributes['popup']['color']['text'] ) ? $attributes['popup']['color']['text'] : '',
		'link'         => isset( $attributes['popup']['color']['link'] ) ? $attributes['popup']['color']['link'] : '',
		'link_hover'   => isset( $attributes['popup']['color']['linkHover'] ) ? $attributes['popup']['color']['linkHover'] : '',
		'cat'          => isset( $attributes['popup']['color']['cat'] ) ? $attributes['popup']['color']['cat'] : '',
		'cat_bg'       => isset( $attributes['popup']['color']['catBg'] ) ? $attributes['popup']['color']['catBg'] : '',
		'post_title'   => isset( $attributes['popup']['color']['postTitle'] ) ? $attributes['popup']['color']['postTitle'] : '',
		'cpt_title'    => isset( $attributes['popup']['color']['cptTitle'] ) ? $attributes['popup']['color']['cptTitle'] : '',
		'cpt_subtitle' => isset( $attributes['popup']['color']['cptSubtitle'] ) ? $attributes['popup']['color']['cptSubtitle'] : '',
		'bg'           => isset( $attributes['popup']['color']['bg'] ) ? $attributes['popup']['color']['bg'] : '',
		'overlay'      => isset( $attributes['popup']['color']['overlay'] ) ? $attributes['popup']['color']['overlay'] : '',
		'close_icon'   => isset( $attributes['popup']['color']['closeIcon'] ) ? $attributes['popup']['color']['closeIcon'] : '',
	),
);

$gallery = array(
	'icon'       => array(
		'path'       => isset( $attributes['galleryOptions']['icon']['path'] ) ? $attributes['galleryOptions']['icon']['path'] : '',
		'viewBox'    => array(
			'vx' => isset( $attributes['galleryOptions']['icon']['viewBox']['vx'] ) ? $attributes['galleryOptions']['icon']['viewBox']['vx'] : '',
			'vy' => isset( $attributes['galleryOptions']['icon']['viewBox']['vy'] ) ? $attributes['galleryOptions']['icon']['viewBox']['vy'] : '',
			'vw' => isset( $attributes['galleryOptions']['icon']['viewBox']['vw'] ) ? $attributes['galleryOptions']['icon']['viewBox']['vw'] : '',
			'vh' => isset( $attributes['galleryOptions']['icon']['viewBox']['vh'] ) ? $attributes['galleryOptions']['icon']['viewBox']['vh'] : '',
		),
		'size'       => isset( $attributes['galleryOptions']['icon']['size'] ) ? $attributes['galleryOptions']['icon']['size'] : '',
		'box_width'  => isset( $attributes['galleryOptions']['icon']['boxWidth'] ) ? $attributes['galleryOptions']['icon']['boxWidth'] : '',
		'box_height' => isset( $attributes['galleryOptions']['icon']['boxHeight'] ) ? $attributes['galleryOptions']['icon']['boxHeight'] : '',
		'padding'    => isset( $attributes['galleryOptions']['icon']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['galleryOptions']['icon']['padding'] ) : '',
		'border'     => isset( $attributes['galleryOptions']['icon']['border'] ) ? cozy_render_TRBL( 'border', $attributes['galleryOptions']['icon']['border'] ) : '',
		'radius'     => isset( $attributes['galleryOptions']['icon']['radius'] ) ? $attributes['galleryOptions']['icon']['radius'] : '',
	),
	'img'        => array(
		'width'           => isset( $attributes['galleryOptions']['featuredImage']['width'] ) ? $attributes['galleryOptions']['featuredImage']['width'] : '',
		'height'          => isset( $attributes['galleryOptions']['featuredImage']['height'] ) ? $attributes['galleryOptions']['featuredImage']['height'] : '',
		'object_fit'      => isset( $attributes['galleryOptions']['featuredImage']['objectFit'] ) ? $attributes['galleryOptions']['featuredImage']['objectFit'] : '',
		'object_position' => isset( $attributes['galleryOptions']['featuredImage']['objectPosition'] ) ? $attributes['galleryOptions']['featuredImage']['objectPosition'] : '',
	),
	'close_icon' => array(
		'top'        => isset( $attributes['galleryOptions']['closeIcon']['top'] ) ? $attributes['galleryOptions']['closeIcon']['top'] : '',
		'right'      => isset( $attributes['galleryOptions']['closeIcon']['right'] ) ? $attributes['galleryOptions']['closeIcon']['right'] : '',
		'size'       => isset( $attributes['galleryOptions']['closeIcon']['size'] ) ? $attributes['galleryOptions']['closeIcon']['size'] : '',
		'box_width'  => isset( $attributes['galleryOptions']['closeIcon']['boxWidth'] ) ? $attributes['galleryOptions']['closeIcon']['boxWidth'] : '',
		'box_height' => isset( $attributes['galleryOptions']['closeIcon']['boxHeight'] ) ? $attributes['galleryOptions']['closeIcon']['boxHeight'] : '',
		'padding'    => isset( $attributes['galleryOptions']['closeIcon']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['galleryOptions']['closeIcon']['padding'] ) : '',
		'border'     => isset( $attributes['galleryOptions']['closeIcon']['border'] ) ? cozy_render_TRBL( 'border', $attributes['galleryOptions']['closeIcon']['border'] ) : '',
		'radius'     => isset( $attributes['galleryOptions']['closeIcon']['radius'] ) ? $attributes['galleryOptions']['closeIcon']['radius'] : '',
	),
	'nav'        => array(
		'size'       => isset( $attributes['galleryOptions']['navIcon']['size'] ) ? $attributes['galleryOptions']['navIcon']['size'] : '',
		'box_width'  => isset( $attributes['galleryOptions']['navIcon']['boxWidth'] ) ? $attributes['galleryOptions']['navIcon']['boxWidth'] : '',
		'box_height' => isset( $attributes['galleryOptions']['navIcon']['boxHeight'] ) ? $attributes['galleryOptions']['navIcon']['boxHeight'] : '',
		'padding'    => isset( $attributes['galleryOptions']['navIcon']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['galleryOptions']['navIcon']['padding'] ) : '',
		'border'     => isset( $attributes['galleryOptions']['navIcon']['border'] ) ? cozy_render_TRBL( 'border', $attributes['galleryOptions']['navIcon']['border'] ) : '',
		'radius'     => isset( $attributes['galleryOptions']['navIcon']['radius'] ) ? $attributes['galleryOptions']['navIcon']['radius'] : '',
	),
	'color'      => array(
		'icon'                    => isset( $attributes['galleryOptions']['color']['icon'] ) ? $attributes['galleryOptions']['color']['icon'] : '',
		'icon_hover'              => isset( $attributes['galleryOptions']['color']['iconHover'] ) ? $attributes['galleryOptions']['color']['iconHover'] : '',
		'icon_bg'                 => isset( $attributes['galleryOptions']['color']['iconBg'] ) ? $attributes['galleryOptions']['color']['iconBg'] : '',
		'icon_bg_hover'           => isset( $attributes['galleryOptions']['color']['iconBgHover'] ) ? $attributes['galleryOptions']['color']['iconBgHover'] : '',
		'icon_border_hover'       => isset( $attributes['galleryOptions']['color']['iconBorderHover'] ) ? $attributes['galleryOptions']['color']['iconBorderHover'] : '',
		'close_icon'              => isset( $attributes['galleryOptions']['color']['closeIcon'] ) ? $attributes['galleryOptions']['color']['closeIcon'] : '',
		'close_icon_hover'        => isset( $attributes['galleryOptions']['color']['closeIconHover'] ) ? $attributes['galleryOptions']['color']['closeIconHover'] : '',
		'close_icon_bg'           => isset( $attributes['galleryOptions']['color']['closeIconBg'] ) ? $attributes['galleryOptions']['color']['closeIconBg'] : '',
		'close_icon_bg_hover'     => isset( $attributes['galleryOptions']['color']['closeIconBgHover'] ) ? $attributes['galleryOptions']['color']['closeIconBgHover'] : '',
		'close_icon_border_hover' => isset( $attributes['galleryOptions']['color']['closeIconBorderHover'] ) ? $attributes['galleryOptions']['color']['closeIconBorderHover'] : '',
		'nav_icon'                => isset( $attributes['galleryOptions']['color']['navIcon'] ) ? $attributes['galleryOptions']['color']['navIcon'] : '',
		'nav_icon_hover'          => isset( $attributes['galleryOptions']['color']['navIconHover'] ) ? $attributes['galleryOptions']['color']['navIconHover'] : '',
		'nav_icon_bg'             => isset( $attributes['galleryOptions']['color']['navIconBg'] ) ? $attributes['galleryOptions']['color']['navIconBg'] : '',
		'nav_icon_bg_hover'       => isset( $attributes['galleryOptions']['color']['navIconBgHover'] ) ? $attributes['galleryOptions']['color']['navIconBgHover'] : '',
		'nav_icon_border_hover'   => isset( $attributes['galleryOptions']['color']['navIconBorderHover'] ) ? $attributes['galleryOptions']['color']['navIconBorderHover'] : '',
		'bullet'                  => isset( $attributes['galleryOptions']['color']['bullet'] ) ? $attributes['galleryOptions']['color']['bullet'] : '',
		'overlay'                 => isset( $attributes['galleryOptions']['color']['overlay'] ) ? $attributes['galleryOptions']['color']['overlay'] : '',
	),
);

$isotope = array(
	'gap'            => isset( $attributes['isotopeFilter']['gap'] ) ? $attributes['isotopeFilter']['gap'] : '',
	'row_gap'        => isset( $attributes['isotopeFilter']['rowGap'] ) ? $attributes['isotopeFilter']['rowGap'] : '',
	'justify'        => isset( $attributes['isotopeFilter']['justify'] ) ? $attributes['isotopeFilter']['justify'] : '',
	'search'         => array(
		'position' => isset( $attributes['isotopeFilter']['search']['position'] ) ? $attributes['isotopeFilter']['search']['position'] : '',
		'width'    => isset( $attributes['isotopeFilter']['search']['width'] ) ? $attributes['isotopeFilter']['search']['width'] : '',
		'padding'  => isset( $attributes['isotopeFilter']['search']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['isotopeFilter']['search']['padding'] ) : '',
		'margin'   => array(
			'top'    => isset( $attributes['isotopeFilter']['search']['margin']['top'] ) ? $attributes['isotopeFilter']['search']['margin']['top'] : '',
			'bottom' => isset( $attributes['isotopeFilter']['search']['margin']['bottom'] ) ? $attributes['isotopeFilter']['search']['margin']['bottom'] : '',
		),
		'shadow'   => array(
			'horizontal' => isset( $attributes['isotopeFilter']['search']['shadow']['horizontal'] ) ? $attributes['isotopeFilter']['search']['shadow']['horizontal'] : '',
			'vertical'   => isset( $attributes['isotopeFilter']['search']['shadow']['vertical'] ) ? $attributes['isotopeFilter']['search']['shadow']['vertical'] : '',
			'blur'       => isset( $attributes['isotopeFilter']['search']['shadow']['blur'] ) ? $attributes['isotopeFilter']['search']['shadow']['blur'] : '',
			'spread'     => isset( $attributes['isotopeFilter']['search']['shadow']['spread'] ) ? $attributes['isotopeFilter']['search']['shadow']['spread'] : '',
			'color'      => isset( $attributes['isotopeFilter']['search']['shadow']['color'] ) ? $attributes['isotopeFilter']['search']['shadow']['color'] : '',
			'position'   => isset( $attributes['isotopeFilter']['search']['shadow']['position'] ) ? $attributes['isotopeFilter']['search']['shadow']['position'] : '',
		),
	),
	'margin'         => array(
		'top'    => isset( $attributes['isotopeFilter']['margin']['top'] ) ? $attributes['isotopeFilter']['margin']['top'] : '',
		'bottom' => isset( $attributes['isotopeFilter']['margin']['bottom'] ) ? $attributes['isotopeFilter']['margin']['bottom'] : '',
	),
	'padding'        => isset( $attributes['isotopeFilter']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['isotopeFilter']['padding'] ) : '',
	'border'         => isset( $attributes['isotopeFilter']['border'] ) ? cozy_render_TRBL( 'border', $attributes['isotopeFilter']['border'] ) : '',
	'active'         => array(
		'border' => isset( $attributes['isotopeFilter']['active']['border'] ) ? cozy_render_TRBL( 'border', $attributes['isotopeFilter']['active']['border'] ) : '',
	),
	'radius'         => isset( $attributes['isotopeFilter']['radius'] ) ? $attributes['isotopeFilter']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['isotopeFilter']['font']['size'] ) ? $attributes['isotopeFilter']['font']['size'] : '',
		'weight' => isset( $attributes['isotopeFilter']['font']['weight'] ) ? $attributes['isotopeFilter']['font']['weight'] : '',
		'family' => isset( $attributes['isotopeFilter']['font']['family'] ) ? $attributes['isotopeFilter']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['isotopeFilter']['letterCase'] ) ? $attributes['isotopeFilter']['letterCase'] : '',
	'decoration'     => isset( $attributes['isotopeFilter']['decoration'] ) ? $attributes['isotopeFilter']['decoration'] : '',
	'line_height'    => isset( $attributes['isotopeFilter']['lineHeight'] ) ? $attributes['isotopeFilter']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['isotopeFilter']['letterSpacing'] ) ? $attributes['isotopeFilter']['letterSpacing'] : '',
	'color'          => array(
		'text'         => isset( $attributes['isotopeFilter']['color']['text'] ) ? $attributes['isotopeFilter']['color']['text'] : '',
		'text_hover'   => isset( $attributes['isotopeFilter']['color']['textHover'] ) ? $attributes['isotopeFilter']['color']['textHover'] : '',
		'active_text'  => isset( $attributes['isotopeFilter']['color']['activeText'] ) ? $attributes['isotopeFilter']['color']['activeText'] : '',
		'bg'           => isset( $attributes['isotopeFilter']['color']['bg'] ) ? $attributes['isotopeFilter']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['isotopeFilter']['color']['bgHover'] ) ? $attributes['isotopeFilter']['color']['bgHover'] : '',
		'active_bg'    => isset( $attributes['isotopeFilter']['color']['activeBg'] ) ? $attributes['isotopeFilter']['color']['activeBg'] : '',
		'border_hover' => isset( $attributes['isotopeFilter']['color']['borderHover'] ) ? $attributes['isotopeFilter']['color']['borderHover'] : '',
	),
);

$ajax_btn_styles = array(
	'padding'        => isset( $attributes['ajaxButton']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['ajaxButton']['padding'] ) : '',
	'margin'         => array(
		'top'    => isset( $attributes['ajaxButton']['margin']['top'] ) ? $attributes['ajaxButton']['margin']['top'] : '',
		'bottom' => isset( $attributes['ajaxButton']['margin']['bottom'] ) ? $attributes['ajaxButton']['margin']['bottom'] : '',
	),
	'border'         => isset( $attributes['ajaxButton']['border'] ) ? cozy_render_TRBL( 'border', $attributes['ajaxButton']['border'] ) : '',
	'radius'         => isset( $attributes['ajaxButton']['radius'] ) ? $attributes['ajaxButton']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['ajaxButton']['font']['size'] ) ? $attributes['ajaxButton']['font']['size'] : '',
		'weight' => isset( $attributes['ajaxButton']['font']['weight'] ) ? $attributes['ajaxButton']['font']['weight'] : '',
		'family' => isset( $attributes['ajaxButton']['font']['family'] ) ? $attributes['ajaxButton']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['ajaxButton']['letterCase'] ) ? $attributes['ajaxButton']['letterCase'] : '',
	'decoration'     => isset( $attributes['ajaxButton']['decoration'] ) ? $attributes['ajaxButton']['decoration'] : '',
	'line_height'    => isset( $attributes['ajaxButton']['lineHeight'] ) ? $attributes['ajaxButton']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['ajaxButton']['letterSpacing'] ) ? $attributes['ajaxButton']['letterSpacing'] : '',
	'color'          => array(
		'text'         => isset( $attributes['ajaxButton']['color']['text'] ) ? $attributes['ajaxButton']['color']['text'] : '',
		'text_hover'   => isset( $attributes['ajaxButton']['color']['textHover'] ) ? $attributes['ajaxButton']['color']['textHover'] : '',
		'bg'           => isset( $attributes['ajaxButton']['color']['bg'] ) ? $attributes['ajaxButton']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['ajaxButton']['color']['bgHover'] ) ? $attributes['ajaxButton']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['ajaxButton']['color']['borderHover'] ) ? $attributes['ajaxButton']['color']['borderHover'] : '',
	),
);

$nav_styles = array(
	'size'               => isset( $attributes['navigation']['size'] ) ? $attributes['navigation']['size'] : '20px',
	'box_width'          => isset( $attributes['navigation']['boxWidth'] ) ? $attributes['navigation']['boxWidth'] : '35px',
	'box_height'         => isset( $attributes['navigation']['boxHeight'] ) ? $attributes['navigation']['boxHeight'] : '35px',
	'border'             => isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '',
	'radius'             => isset( $attributes['navigation']['radius'] ) ? $attributes['navigation']['radius'] : '100px',
	'color'              => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'color_hover'        => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_color'           => isset( $attributes['navigation']['bgColor'] ) ? $attributes['navigation']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['navigation']['bgColorHover'] ) ? $attributes['navigation']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['navigation']['borderColorHover'] ) ? $attributes['navigation']['borderColorHover'] : '',
);

$bullet = array(
	'default'             => array(
		'width'  => isset( $attributes['pagination']['default']['width'] ) ? $attributes['pagination']['default']['width'] : '',
		'height' => isset( $attributes['pagination']['default']['height'] ) ? $attributes['pagination']['default']['height'] : '',
		'radius' => isset( $attributes['pagination']['default']['radius'] ) ? $attributes['pagination']['default']['radius'] : '',
	),
	'active'              => array(
		'width'  => isset( $attributes['pagination']['active']['width'] ) ? $attributes['pagination']['active']['width'] : '',
		'height' => isset( $attributes['pagination']['active']['height'] ) ? $attributes['pagination']['active']['height'] : '',
		'radius' => isset( $attributes['pagination']['active']['radius'] ) ? $attributes['pagination']['active']['radius'] : '',
		'offset' => isset( $attributes['pagination']['active']['offset'] ) ? $attributes['pagination']['active']['offset'] : '',
	),
	'gap'                 => isset( $attributes['pagination']['gap'] ) ? $attributes['pagination']['gap'] : '4px',
	'align'               => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'left'                => isset( $attributes['pagination']['left'], $attributes['pagination']['align'] ) && 'left' === $attributes['pagination']['align'] ? 'padding-left:' . $attributes['pagination']['left'] . ';' : '',
	'right'               => isset( $attributes['pagination']['right'], $attributes['pagination']['align'] ) && 'right' === $attributes['pagination']['align'] ? 'padding-right:' . $attributes['pagination']['right'] . ';' : '',
	'outline'             => isset( $attributes['pagination']['active']['border'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['active']['border'] ) : '',
	'default_color'       => isset( $attributes['pagination']['default']['color'] ) ? $attributes['pagination']['default']['color'] : '',
	'default_color_hover' => isset( $attributes['pagination']['default']['colorHover'] ) ? $attributes['pagination']['default']['colorHover'] : '',
	'active_color'        => isset( $attributes['pagination']['active']['color'] ) ? $attributes['pagination']['active']['color'] : '',
	'active_color_hover'  => isset( $attributes['pagination']['active']['colorHover'] ) ? $attributes['pagination']['active']['colorHover'] : '',

);

$block_styles = "
#$block_id.source-default.layout-grid, #$block_id.source-template.layout-grid .cozy-layout-grid {
    grid-template-columns: repeat({$attributes['gridOptions']['displayColumn']}, 1fr);
    gap: {$attributes['gridOptions']['columnGap']};
    row-gap: {$grid_options['row_gap']};
}
#$block_id.source-default.layout-grid.has-masonry, #$block_id.source-template.layout-grid .cozy-layout-grid {
    column-count: {$attributes['gridOptions']['displayColumn']};
    grid-column-gap: {$attributes['gridOptions']['columnGap']};
}
#$block_id.layout-grid.has-masonry .cozy-block-grid, #$block_id.layout-grid.has-masonry .cozy-portfolio {
    margin-bottom: {$attributes['gridOptions']['columnGap']};
}
@media screen and (max-width: 1024px) {
    #$block_id.source-default.layout-grid, #$block_id.source-template.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(
            $width1,
            1fr
        ) !important;
    }
    #$block_id.source-default.layout-grid.has-masonry, #$block_id.source-template.layout-grid.has-masonry .cozy-layout-grid {
        column-count: $width1 !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id.source-default.layout-grid, #$block_id.source-template.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(
            $width2,
            1fr
        ) !important;
    }
    #$block_id.source-default.layout-grid.has-masonry, #$block_id.source-template.layout-grid.has-masonry .cozy-layout-grid {
        column-count: $width2 !important;
    }
}

@media screen and (max-width: 400px) {
    #$block_id.source-default.layout-grid, #$block_id.source-template.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(
            1,
            1fr
        ) !important;
    }
    #$block_id.source-default.layout-grid.has-masonry, #$block_id.source-template.layout-grid.has-masonry .cozy-layout-grid {
        column-count: 1 !important;
    }
}

#$block_id .filter__categories {
	gap: {$isotope['gap']};
	row-gap: {$isotope['row_gap']};
	justify-content: {$isotope['justify']};
	margin-top: {$isotope['margin']['top']};
	margin-bottom: {$isotope['margin']['bottom']};
}
#$block_id .filter__categories .category__item {
	{$isotope['padding']}
	border-radius: {$isotope['radius']};
	font-size: {$isotope['font']['size']};
	font-weight: {$isotope['font']['weight']};
	font-family: {$isotope['font']['family']};
	text-transform: {$isotope['letter_case']};
	text-decoration: {$isotope['decoration']};
	line-height: {$isotope['line_height']};
	letter-spacing: {$isotope['letter_spacing']};
	color: {$isotope['color']['text']};
	background-color: {$isotope['color']['bg']};
}
#$block_id .filter__categories .category__item:not(.active__tab) {
	{$isotope['border']}
}
#$block_id .filter__categories .category__item:hover {
	color: {$isotope['color']['text_hover']};
	background-color: {$isotope['color']['bg_hover']};
	border-color: {$isotope['color']['border_hover']};
}
#$block_id .filter__categories .category__item.active__tab {
	{$isotope['active']['border']}
	color: {$isotope['color']['active_text']};
	background-color: {$isotope['color']['active_bg']};
}

#$block_id .cozy-portfolio__featured-image {
	margin-top: {$featured_img['margin']['top']};
	margin-bottom: {$featured_img['margin']['bottom']};
	max-width: {$featured_img['width']};
	max-height: {$featured_img['height']};
	border-radius: {$featured_img['radius']};
}
#$block_id .cozy-portfolio__featured-image .image__overlay {
	background-color: {$featured_img['overlay']};
	border-radius: {$featured_img['radius']};
}
#$block_id .cozy-portfolio__featured-image img {
	height: {$featured_img['height']};
	border-radius: {$featured_img['radius']};
	object-fit: {$featured_img['scale']};
}

#$block_id .cozy-portfolio__title {
	font-size: {$post_title['font']['size']};
	font-weight: {$post_title['font']['weight']};
	font-family: {$post_title['font']['family']};
	text-transform: {$post_title['letter_case']};
	text-decoration: {$post_title['decoration']};
	line-height: {$post_title['line_height']};
	letter-spacing: {$post_title['letter_spacing']};
	color: {$post_title['color']['text']};
}
#$block_id .cozy-portfolio__title a {
	text-decoration: {$post_title['decoration']};
	color: {$post_title['color']['text']};
}
#$block_id .cozy-portfolio__title a:hover {
	color: {$post_title['color']['text_hover']};
}

#$block_id .cozy-portfolio.layout-type-overlay .portfolio__content {
	{$overlay_content['padding']}
	color: {$overlay_content['color']['text']};
}
#$block_id .cozy-portfolio.layout-type-overlay .cozy-portfolio__read-more-btn {
	{$overlay_content['btn']['padding']}
	margin-top: {$overlay_content['btn']['margin']['top']};
	margin-bottom: {$overlay_content['btn']['margin']['bottom']};
	{$overlay_content['btn']['border']}
	border-radius: {$overlay_content['btn']['radius']};
	font-size: {$overlay_content['btn']['font']['size']};
	font-weight: {$overlay_content['btn']['font']['weight']};
	font-family: {$overlay_content['btn']['font']['family']};
	text-transform: {$overlay_content['btn']['letter_case']};
	text-decoration: {$overlay_content['btn']['decoration']};
	line-height: {$overlay_content['btn']['line_height']};
	letter-spacing: {$overlay_content['btn']['letter_spacing']};
	background-color: {$overlay_content['color']['btn_bg']};
	color: {$overlay_content['color']['btn_text']};
}
#$block_id .cozy-portfolio.layout-type-overlay .cozy-portfolio__read-more-btn a {
	text-decoration: {$overlay_content['btn']['decoration']};
	color: {$overlay_content['color']['btn_text']};
}
#$block_id .cozy-portfolio.layout-type-overlay .cozy-portfolio__read-more-btn:hover {
	background-color: {$overlay_content['color']['btn_bg_hover']};
	color: {$overlay_content['color']['btn_text_hover']};
	border-color: {$overlay_content['color']['btn_border_hover']};
}
#$block_id .cozy-portfolio.layout-type-overlay .cozy-portfolio__read-more-btn:hover a {
	color: {$overlay_content['color']['btn_text_hover']};
}

#$block_id.source-template .cozy-portfolio:not(.layout-type-default).layout-type-gallery .gallery__icon {
	width: {$gallery['icon']['box_width']};
	height: {$gallery['icon']['box_height']};
	{$gallery['icon']['padding']}
	{$gallery['icon']['border']}
	border-radius: {$gallery['icon']['radius']};
	color: {$gallery['color']['icon']};
	background-color: {$gallery['color']['icon_bg']};
}
#$block_id.source-template .cozy-portfolio:not(.layout-type-default).layout-type-gallery .gallery__icon svg {
	width: {$gallery['icon']['size']};
	height: {$gallery['icon']['size']};
}
#$block_id.source-template .cozy-portfolio:not(.layout-type-default).layout-type-gallery .gallery__icon:hover {
	color: {$gallery['color']['icon_hover']};
	background-color: {$gallery['color']['icon_bg_hover']};
	border-color: {$gallery['color']['icon_border_hover']};
}
#$block_id.source-template .gallery__modal .gallery__overlay {
	background-color: {$gallery['color']['overlay']};
}
#$block_id.source-template .gallery__modal .close__icon {
	margin-top: {$gallery['close_icon']['top']};
	margin-right: {$gallery['close_icon']['right']};
	width: {$gallery['close_icon']['box_width']};
	height: {$gallery['close_icon']['box_height']};
	{$gallery['close_icon']['padding']}
	{$gallery['close_icon']['border']}
	border-radius: {$gallery['close_icon']['radius']};
	color: {$gallery['color']['close_icon']};
	background-color: {$gallery['color']['close_icon_bg']};
}
#$block_id.source-template .gallery__modal .close__icon:hover {
	color: {$gallery['color']['close_icon_hover']};
	background-color: {$gallery['color']['close_icon_bg_hover']};
	border-color: {$gallery['color']['close_icon_border_hover']};
}
#$block_id.source-template .gallery__modal .swiper-button-prev::after,
#$block_id.source-template .gallery__modal .swiper-button-next::after {
	font-size: {$gallery['nav']['size']};
}
#$block_id.source-template .gallery__modal .swiper-button-prev,
#$block_id.source-template .gallery__modal .swiper-button-next {
	width: {$gallery['nav']['box_width']};
	height: {$gallery['nav']['box_height']};
	{$gallery['nav']['padding']}
	{$gallery['nav']['border']}
	border-radius: {$gallery['nav']['radius']};
	background-color: {$gallery['color']['nav_icon_bg']};
	color: {$gallery['color']['nav_icon']};
}
#$block_id.source-template .gallery__modal .swiper-button-prev:hover,
#$block_id.source-template .gallery__modal .swiper-button-next:hover {
	background-color: {$gallery['color']['nav_icon_bg_hover']};
	color: {$gallery['color']['nav_icon_hover']};
	border-color: {$gallery['color']['nav_icon_border_hover']};
}
#$block_id.source-template .gallery__modal .swiper-pagination {
	color: {$gallery['color']['bullet']};
}

#$block_id .cozy-portfolio__modal .modal__overlay {
	background-color: {$popup['color']['overlay']};
}
#$block_id .cozy-portfolio__modal .modal__body {
	width: {$popup['width']};
	height: {$popup['height']};
	font-size: {$popup['font']['size']};
	font-weight: {$popup['font']['weight']};
	font-family: {$popup['font']['family']};
	text-transform: {$popup['letter_case']};
	text-decoration: {$popup['decoration']};
	line-height: {$popup['line_height']};
	letter-spacing: {$popup['letter_spacing']};
	color: {$popup['color']['text']};
	background-color: {$popup['color']['bg']};
}
#$block_id .cozy-portfolio__modal .modal__content {
	{$popup['padding']}
}
#$block_id .cozy-portfolio__modal .modal__content a {
	color: {$popup['color']['link']};
}
#$block_id .cozy-portfolio__modal .modal__content a:hover {
	color: {$popup['color']['link_hover']};
}
@media only screen and (max-width: {$popup['responsive_width']}px) {
	#$block_id .cozy-portfolio__modal .modal__body {
		width: 100vw;
		height: 100vh;
	}

	#$block_id .cozy-portfolio__modal .modal__wrap-1 .modal__post-title {
		display: block;
	}
	#$block_id .cozy-portfolio__modal .modal__wrap-2 .modal__post-title {
		display: none;
	}
}
@media only screen and (min-width: {$popup['responsive_width']}px) {
	#$block_id .cozy-portfolio__modal .modal__wrap-1 .modal__post-title {
		display: none;
	}
	#$block_id .cozy-portfolio__modal .modal__wrap-2 .modal__post-title {
		display: block;
	}
}
#$block_id .cozy-portfolio__modal .modal__featured-image {
	max-width: {$popup['img']['width']};
	max-height: {$popup['img']['height']};
	margin-top: {$popup['img']['margin']['top']};
	margin-bottom: {$popup['img']['margin']['bottom']};
	border-radius: {$popup['img']['radius']};
}
#$block_id .cozy-portfolio__modal .modal__featured-image img {
	border-radius: {$popup['img']['radius']};
}
#$block_id .cozy-portfolio__modal .modal__portfolio-categories {
	gap: {$popup['cat']['gap']};
	row-gap: {$popup['cat']['row_gap']};
	flex-wrap: {$popup['cat']['flex_wrap']};
	margin-top: {$popup['cat']['margin']['top']};
	margin-bottom: {$popup['cat']['margin']['bottom']};
	font-size: {$popup['cat']['font']['size']};
	font-weight: {$popup['cat']['font']['weight']};
	font-family: {$popup['cat']['font']['family']};
	text-transform: {$popup['cat']['letter_case']};
	text-decoration: {$popup['cat']['decoration']};
	line-height: {$popup['cat']['line_height']};
	letter-spacing: {$popup['cat']['letter_spacing']};
}
#$block_id .cozy-portfolio__modal .modal__portfolio-category {
	{$popup['cat']['padding']}
	{$popup['cat']['border']}
	border-radius: {$popup['cat']['radius']};
	background-color: {$popup['color']['cat_bg']};
	color: {$popup['color']['cat']};
}
#$block_id .cozy-portfolio__modal .modal__post-title {
	margin-top: {$popup['post_title']['margin']['top']};
	margin-bottom: {$popup['post_title']['margin']['bottom']};
	font-size: {$popup['post_title']['font']['size']};
	font-weight: {$popup['post_title']['font']['weight']};
	font-family: {$popup['post_title']['font']['family']};
	text-transform: {$popup['post_title']['letter_case']};
	text-decoration: {$popup['post_title']['decoration']};
	line-height: {$popup['post_title']['line_height']};
	letter-spacing: {$popup['post_title']['letter_spacing']};
	color: {$popup['color']['post_title']};
}
#$block_id .cozy-portfolio__modal .modal__post-title a {
	text-decoration: {$popup['post_title']['decoration']};
	color: {$popup['color']['post_title']};
}
#$block_id .cozy-portfolio__modal .modal__portfolio-cpt-wrap {
	{$popup['cpt']['padding']}
	margin-top: {$popup['cpt']['margin']['top']};
	margin-bottom: {$popup['cpt']['margin']['bottom']};
	{$popup['cpt']['border']}
	border-radius: {$popup['cpt']['radius']};
}
#$block_id .cozy-portfolio__modal .modal__portfolio-cpt:not(:first-child) {
	margin-top: {$popup['cpt']['gap']};
}
#$block_id .cozy-portfolio__modal .modal__portfolio-cpt-wrap .cpt__title {
	font-size: {$popup['cpt_title']['font']['size']};
	font-weight: {$popup['cpt_title']['font']['weight']};
	font-family: {$popup['cpt_title']['font']['family']};
	text-transform: {$popup['cpt_title']['letter_case']};
	text-decoration: {$popup['cpt_title']['decoration']};
	line-height: {$popup['cpt_title']['line_height']};
	letter-spacing: {$popup['cpt_title']['letter_spacing']};
	color: {$popup['color']['cpt_title']};
}
#$block_id .cozy-portfolio__modal .modal__portfolio-cpt-wrap .cpt__title {
	font-size: {$popup['cpt_subtitle']['font']['size']};
	font-weight: {$popup['cpt_subtitle']['font']['weight']};
	font-family: {$popup['cpt_subtitle']['font']['family']};
	text-transform: {$popup['cpt_subtitle']['letter_case']};
	text-decoration: {$popup['cpt_subtitle']['decoration']};
	line-height: {$popup['cpt_subtitle']['line_height']};
	letter-spacing: {$popup['cpt_subtitle']['letter_spacing']};
	color: {$popup['color']['cpt_subtitle']};
}

#$block_id .cozy-portfolio__ajax-btn-wrap {
	margin-top: {$ajax_btn_styles['margin']['top']};
	margin-bottom: {$ajax_btn_styles['margin']['bottom']};
}
#$block_id .cozy-portfolio__ajax-btn {
    {$ajax_btn_styles['padding']}
    {$ajax_btn_styles['border']}
    border-radius: {$ajax_btn_styles['radius']};
    background-color: {$ajax_btn_styles['color']['bg']};
    color: {$ajax_btn_styles['color']['text']};
    font-size: {$ajax_btn_styles['font']['size']};
    font-weight: {$ajax_btn_styles['font']['weight']};
    font-family: {$ajax_btn_styles['font']['family']};
    text-transform: {$ajax_btn_styles['letter_case']};
    text-decoration: {$ajax_btn_styles['decoration']};
    line-height: {$ajax_btn_styles['line_height']};
    letter-spacing: {$ajax_btn_styles['letter_spacing']};
}
#$block_id .cozy-portfolio__ajax-btn:hover {
    background-color: {$ajax_btn_styles['color']['bg_hover']};
    color: {$ajax_btn_styles['color']['text_hover']};
    border-color: {$ajax_btn_styles['color']['border_hover']};
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
	font-size: {$nav_styles['size']};
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
	width: {$nav_styles['box_width']};
	height: {$nav_styles['box_height']};
	{$nav_styles['border']}
	border-radius: {$nav_styles['radius']};
	color: {$nav_styles['color']};
	background-color: {$nav_styles['bg_color']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
	color: {$nav_styles['color_hover']};
	background-color: {$nav_styles['bg_color_hover']};
	border-color: {$nav_styles['border_color_hover']};
}

#$block_id .swiper-pagination {
	bottom: {$attributes['pagination']['verticalPosition']}px;
    text-align: {$bullet['align']};
    {$bullet['left']}
    {$bullet['right']}
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
	width: {$bullet['default']['width']};
	height: {$bullet['default']['height']};
	border-radius: {$bullet['default']['radius']};
	background-color: {$bullet['default_color']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
	width: {$bullet['active']['width']};
	height: {$bullet['active']['height']};
	border-radius: {$bullet['active']['radius']};
	background-color: {$bullet['active_color']};
	{$bullet['outline']}
	outline-offset: {$bullet['active']['offset']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
	background-color: {$bullet['default_color_hover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
	background-color: {$bullet['active_color_hover']};
}
#$block_id.swiper-horizontal .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullet['gap']});
}
#$block_id.swiper-vertical .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: var(--swiper-pagination-bullet-vertical-gap, {$bullet['gap']}) 0;
}
";

$font_families = array();

if ( isset( $attributes['isotopeFilter']['font']['family'] ) && ! empty( $attributes['isotopeFilter']['font']['family'] ) ) {
	$font_families[] = $attributes['isotopeFilter']['font']['family'];
}
if ( isset( $attributes['postTitle']['font']['family'] ) && ! empty( $attributes['postTitle']['font']['family'] ) ) {
	$font_families[] = $attributes['postTitle']['font']['family'];
}
if ( isset( $attributes['overlayContent']['font']['family'] ) && ! empty( $attributes['overlayContent']['font']['family'] ) ) {
	$font_families[] = $attributes['overlayContent']['font']['family'];
}
if ( isset( $attributes['overlayContent']['button']['font']['family'] ) && ! empty( $attributes['overlayContent']['button']['font']['family'] ) ) {
	$font_families[] = $attributes['overlayContent']['button']['font']['family'];
}
if ( isset( $attributes['popup']['font']['family'] ) && ! empty( $attributes['popup']['font']['family'] ) ) {
	$font_families[] = $attributes['popup']['font']['family'];
}
if ( isset( $attributes['popup']['category']['font']['family'] ) && ! empty( $attributes['popup']['category']['font']['family'] ) ) {
	$font_families[] = $attributes['popup']['category']['font']['family'];
}
if ( isset( $attributes['popup']['postTitle']['font']['family'] ) && ! empty( $attributes['popup']['postTitle']['font']['family'] ) ) {
	$font_families[] = $attributes['popup']['postTitle']['font']['family'];
}
if ( isset( $attributes['popup']['cptTitle']['font']['family'] ) && ! empty( $attributes['popup']['cptTitle']['font']['family'] ) ) {
	$font_families[] = $attributes['popup']['cptTitle']['font']['family'];
}
if ( isset( $attributes['popup']['cptSubtitle']['font']['family'] ) && ! empty( $attributes['popup']['cptSubtitle']['font']['family'] ) ) {
	$font_families[] = $attributes['popup']['cptSubtitle']['font']['family'];
}
if ( isset( $attributes['ajaxButton']['font']['family'] ) && ! empty( $attributes['ajaxButton']['font']['family'] ) ) {
	$font_families[] = $attributes['ajaxButton']['font']['family'];
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

$allowed_tags = array(
	'h1',
	'h2',
	'h3',
	'h4',
	'h5',
	'h6',
	'p',
);

$wrapper_attributes = get_block_wrapper_attributes();

$classes   = array();
$classes[] = 'cozy-block-portfolio-gallery';
$classes[] = 'source-' . $attributes['source'];
$classes[] = 'layout-' . $attributes['layout'];
$classes[] = cozy_addons_premium_access() && isset( $attributes['gridOptions']['masonryEnabled'] ) && filter_var( $attributes['gridOptions']['masonryEnabled'], FILTER_VALIDATE_BOOLEAN ) ? 'has-masonry' : '';
$classes[] = 'carousel' === $attributes['layout'] ? 'cozy-portfolio-gallery__swiper-container' : '';
$classes[] = 'carousel' === $attributes['layout'] && isset( $attributes['navigation']['hoverShow'] ) && filter_var( $attributes['navigation']['hoverShow'], FILTER_VALIDATE_BOOLEAN ) ? 'hover-show' : '';
?>
<div class="cozy-block-wrapper">
	<div <?php echo $wrapper_attributes; ?>>
		<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_html( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
			<?php
			// Default source.
			if ( 'default' === $attributes['source'] ) {
				if ( 'carousel' === $attributes['layout'] ) {
					?>
					<div class="swiper-wrapper">
					<?php
				}
				echo $content;
				if ( 'carousel' === $attributes['layout'] ) {
					?>
					</div>
					<?php
				}
			} elseif ( 'template' === $attributes['source'] && cozy_addons_premium_access() ) {
				$cpt_order = explode( '/', $attributes['orderBy'] );

				$args  = array(
					'post_type'      => 'ca_portfolio_gallery',
					'posts_per_page' => $attributes['perPage'],
					'post_status'    => 'publish',
					'orderby'        => $cpt_order[0],
					'order'          => $cpt_order[1],
				);
				$query = new \WP_Query( $args );

				$portfolio_gallery = $query->get_posts();

				if ( 'grid' === $attributes['layout'] && isset( $attributes['gridOptions']['isotopeFilter'] ) && filter_var( $attributes['gridOptions']['isotopeFilter'], FILTER_VALIDATE_BOOLEAN ) ) {
					?>
					<!-- Isotope Filter -->
					<section class="portfolio__filters">
						<ul class="filter__categories">
							<li class="category__item active__tab" data-tax-id="0"><?php esc_html_e( 'All', 'cozy-addons' ); ?></li>
							<?php
							if ( is_array( $attributes['portfolioCat'] ) && ! empty( $attributes['portfolioCat'] ) ) {
								foreach ( $attributes['portfolioCat'] as $tax_id ) {
									$portfolio_category = get_term( intval( $tax_id ), 'ca_portfolio_gallery_category' );

									// Validate term.
									if ( ! $portfolio_category || is_wp_error( $portfolio_category ) ) {
										continue;
									}

									$label = $portfolio_category->name;
									?>
									<li class="category__item" data-tax-id="<?php echo esc_attr( $tax_id ); ?>"><?php echo esc_html( $label ); ?></li>
									<?php
								}
							}
							?>
						</ul>
					</section>
					<?php
				}

				$classes   = array();
				$classes[] = 'cozy-layout-wrapper';
				$classes[] = 'cozy-layout-' . $attributes['layout'];
				$classes[] = 'carousel' === $attributes['layout'] ? 'swiper-wrapper' : '';
				?>
				<!-- Portfolio templates render -->
				<ul class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
					<?php
					if ( ! empty( $portfolio_gallery ) ) {
						/* Needs to call the util render function */
						$portfolio_items = \CozyAddons\Helpers\BlockRender::get_instance()->portfolio_gallery_render( $attributes, $portfolio_gallery );

						echo $portfolio_items;
					}
					?>
				</ul>

				<?php
				$args  = array(
					'post_type'      => 'ca_portfolio_gallery',
					'posts_per_page' => -1,
					'post_status'    => 'publish',
					'orderby'        => $cpt_order[0],
					'order'          => $cpt_order[1],
				);
				$query = new \WP_Query( $args );

				$portfolio_gallery = $query->get_posts();
				// Gallery Layout.
				if ( 'gallery' === $attributes['layoutType'] ) {
					?>
					<div class="gallery__modal display__none">
						<div class="gallery__overlay"></div>
						<div class="gallery__body">
							<div class="close__icon">
								<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.99999 4.058L8.29999 0.758003L9.24266 1.70067L5.94266 5.00067L9.24266 8.30067L8.29932 9.24334L4.99932 5.94334L1.69999 9.24334L0.757324 8.3L4.05732 5L0.757324 1.7L1.69999 0.75867L4.99999 4.058Z" fill="currentColor" />
								</svg>
							</div>

							<div class="swiper-container">
								<ul class="swiper-wrapper">
									<?php
									if ( ! empty( $portfolio_gallery ) ) {
										foreach ( $portfolio_gallery as $portfolio ) {
											$portfolio_id = $portfolio->ID;

											$img_url = get_the_post_thumbnail_url( $portfolio_id );

											$post_title = $portfolio->post_title;

											$post_url = get_permalink( $portfolio_id );

											// Filter out posts for tabs filter.
											$portfolio_taxonomy = get_the_terms( $portfolio_id, 'ca_portfolio_gallery_category' );
											$portfolio_tax_ids  = array();
											if ( is_array( $portfolio_taxonomy ) || ! is_wp_error( $portfolio_taxonomy ) ) {
												$portfolio_tax_ids = wp_list_pluck( $portfolio_taxonomy, 'term_id' );
											}
											?>
											<li class="gallery__item swiper-slide" data-post-taxonomies="<?php echo wp_json_encode( $portfolio_tax_ids ); ?>">
												<figure class="gallery__image">
													<?php
													if ( isset( $attributes['featuredImage']['link']['enabled'] ) && filter_var( $attributes['featuredImage']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
														$new_tab   = isset( $attributes['featuredImage']['link']['newTab'] ) && filter_var( $attributes['featuredImage']['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
														$no_follow = isset( $attributes['featuredImage']['link']['noFollow'] ) && filter_var( $attributes['featuredImage']['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';

														?>
														<a href="<?php echo esc_url( $post_url ); ?>" target="<?php echo esc_attr( $new_tab ); ?>" rel="<?php echo esc_attr( $no_follow ); ?>">
														<?php
													}
													?>
														<img src="<?php echo esc_url( $img_url ); ?>" />
														<?php
														if ( isset( $attributes['featuredImage']['link']['enabled'] ) && filter_var( $attributes['featuredImage']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
															?>
														</a>
															<?php
														}
														?>
												</figure>

												<?php
												if ( isset( $attributes['enableOptions']['title'] ) && filter_var( $attributes['enableOptions']['title'], FILTER_VALIDATE_BOOLEAN ) ) {
													$title_tag     = isset( $attributes['postTitle']['tag'] ) && in_array( $attributes['postTitle']['tag'], $allowed_tags, true ) ? $attributes['postTitle']['tag'] : 'p';
													$title_content = '';
													if ( isset( $attributes['postTitle']['link']['enabled'] ) && filter_var( $attributes['postTitle']['link']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_url ) ) {
														$new_tab        = isset( $attributes['postTitle']['link']['newTab'] ) && filter_var( $attributes['postTitle']['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
														$rel            = isset( $attributes['postTitle']['link']['noFollow'] ) && filter_var( $attributes['postTitle']['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';
														$title_content .= '<a href="' . esc_url( $post_url ) . '" target="' . esc_attr( $new_tab ) . '" rel="' . esc_attr( $rel ) . '">';
														$title_content .= esc_html( $post_title );
														$title_content .= '</a>';
													} else {
														$title_content .= esc_html( $post_title );
													}

													printf(
														'<%1$s class="cozy-portfolio__title">%2$s</%1$s>',
														esc_attr( $title_tag ),
														wp_kses(
															$title_content,
															array(
																'a' => array(
																	'href' => array(),
																	'target' => array(),
																	'rel'  => array(),
																),
															)
														)
													);
												}
												?>
											</li>
											<?php
										}
									}
									?>
								</ul>
							</div>

						</div>

						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
						<div class="swiper-pagination"></div>
					</div>
					<?php
				}

				// Ajax loader.
				if ( 'carousel' !== $attributes['layout'] && -1 != $attributes['perPage'] && isset( $attributes['ajaxButton']['enabled'] ) && filter_var( $attributes['ajaxButton']['enabled'], FILTER_VALIDATE_BOOLEAN ) && ( ! isset( $attributes['gridOptions']['isotopeFilter'] ) || ! filter_var( $attributes['gridOptions']['isotopeFilter'], FILTER_VALIDATE_BOOLEAN ) ) ) {
					$label = isset( $attributes['ajaxButton']['label'] ) ? sanitize_text_field( $attributes['ajaxButton']['label'] ) : '';

					if ( ! empty( $label ) ) {
						?>
						<div class="cozy-portfolio__ajax-btn-wrap">
							<button class="cozy-portfolio__ajax-btn">
								<div class="btn__spinner display__none"></div>
								<span class="btn__label">
									<?php echo esc_html( $label ); ?>
								</span>
							</button>
						</div>
						<?php
					}
				}
			}

			// Carousel pagination and navigation.
			if ( 'carousel' === $attributes['layout'] ) {
				if ( isset( $attributes['navigation']['enabled'] ) && filter_var( $attributes['navigation']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
					?>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
					<?php
				}
				if ( isset( $attributes['pagination']['enabled'] ) && filter_var( $attributes['pagination']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
					?>
					<div class="swiper-pagination"></div>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>