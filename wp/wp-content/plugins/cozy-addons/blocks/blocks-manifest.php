<?php
// This file is generated. Do not modify it manually.
return array(
	'accordion' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'cozy-block/accordion',
		'version' => '1.0.0',
		'title' => 'Accordion',
		'category' => 'cozy-block',
		'description' => 'Streamline content presentation with our \'Accordion\' block, allowing you to organize information in a compact and user-friendly manner. Users can easily expand and collapse sections to access the details they desire, creating a clean and efficient user experience.',
		'keywords' => array(
			'accordion'
		),
		'textdomain' => 'cozy-addons',
		'example' => array(
			
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'rowGap' => array(
				'type' => 'number',
				'default' => 10
			),
			'titleTag' => array(
				'type' => 'string',
				'default' => 'h4'
			),
			'titleJustify' => array(
				'type' => 'string',
				'default' => 'space-between'
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 14,
						'vh' => 25
					),
					'gap' => '6px',
					'path' => 'M10.8737 12.7121C10.9908 12.595 10.9908 12.405 10.8737 12.2879L1.00502 2.41924C0.887867 2.30208 0.887867 2.11213 1.00502 1.99497L1.99497 1.00502C2.11213 0.887867 2.30208 0.887867 2.41924 1.00502L13.7021 12.2879C13.8192 12.405 13.8192 12.595 13.7021 12.7121L2.41924 23.995C2.30208 24.1121 2.11213 24.1121 1.99497 23.995L1.00502 23.005C0.887867 22.8879 0.887868 22.6979 1.00503 22.5808L10.8737 12.7121Z',
					'activePath' => 'M10.8737 12.7121C10.9908 12.595 10.9908 12.405 10.8737 12.2879L1.00502 2.41924C0.887867 2.30208 0.887867 2.11213 1.00502 1.99497L1.99497 1.00502C2.11213 0.887867 2.30208 0.887867 2.41924 1.00502L13.7021 12.2879C13.8192 12.405 13.8192 12.595 13.7021 12.7121L2.41924 23.995C2.30208 24.1121 2.11213 24.1121 1.99497 23.995L1.00502 23.005C0.887867 22.8879 0.887868 22.6979 1.00503 22.5808L10.8737 12.7121Z',
					'activeViewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 14,
						'vh' => 25
					),
					'view' => 'default',
					'position' => 'right',
					'layout' => 'fill',
					'size' => 22,
					'color' => '#5566ca',
					'colorHover' => '#36cfc6',
					'opacity' => 1,
					'rotate' => 90,
					'rotateActive' => 270
				)
			),
			'iconBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 5,
						'right' => 5,
						'bottom' => 5,
						'left' => 5
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderColorHover' => '',
					'borderRadius' => 50,
					'bgColor' => '#b2bcf9',
					'bgColorHover' => ''
				)
			),
			'containerStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'border' => array(
						'width' => array(
							'top' => 1,
							'right' => 1,
							'bottom' => 1,
							'left' => 1
						),
						'type' => 'none',
						'color' => '#000'
					),
					'borderRadius' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'bgColor' => ''
				)
			),
			'accordionStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 16,
						'right' => 16,
						'bottom' => 16,
						'left' => 16
					),
					'border' => array(
						'width' => array(
							'top' => 1,
							'right' => 1,
							'bottom' => 1,
							'left' => 1
						),
						'type' => 'none',
						'color' => '#000'
					),
					'borderRadius' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'bgColor' => '#E6E8F4'
				)
			),
			'titleTypography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => '',
					'fontSize' => '',
					'color' => '#000',
					'fontWeight' => ''
				)
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => '',
					'fontSize' => 16,
					'color' => '#000',
					'fontWeight' => 400
				)
			)
		),
		'providesContext' => array(
			'icon' => 'icon',
			'titleTag' => 'titleTag',
			'titleJustify' => 'titleJustify'
		),
		'supports' => array(
			'html' => false
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--accordion--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'ad' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/ad',
		'title' => 'Advertisement',
		'description' => '\'Advertisement\' block seamlessly integrates custom ad scripts and clickable image links into your WordPress site, enhancing engagement and driving traffic.',
		'category' => 'cozy-block/post-magazine',
		'keywords' => array(
			'category',
			'post'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'type' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'media' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0,
					'url' => '',
					'link' => '',
					'openNewTab' => true,
					'dimensionType' => '',
					'width' => '765px',
					'height' => '100px',
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'align' => 'center',
					'objectFit' => 'contain',
					'position' => array(
						'x' => 0.5,
						'y' => 0.5
					)
				)
			),
			'customScript' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'add-to-cart' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/add-to-cart',
		'title' => 'Add to Cart',
		'description' => 'With the \'Add to Cart\' block allows you to easily add products to your cart, featuring a customizable button that can display a label, an icon, or both.',
		'category' => 'cozy-block/woocommerce',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'interactivity' => array(
				'clientNavigation' => true
			)
		),
		'usesContext' => array(
			'postId',
			'postType',
			'queryId'
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'postType' => array(
				'type' => 'string',
				'default' => ''
			),
			'button' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'label' => 'Add to cart',
					'width' => '100%',
					'height' => '40px',
					'gap' => '6px',
					'justify' => 'center',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'shadow' => array(
						'default' => array(
							'enabled' => false,
							'horizontal' => 0,
							'vertical' => 0,
							'blur' => 0,
							'spread' => 0,
							'color' => '#000',
							'position' => ''
						),
						'hover' => array(
							'enabled' => false,
							'horizontal' => 0,
							'vertical' => 0,
							'blur' => 0,
							'spread' => 0,
							'color' => '#000',
							'position' => ''
						)
					),
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'color' => array(
						'text' => '#090b10',
						'textHover' => '#fff',
						'bg' => '#fff',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'size' => '16px',
					'position' => 'right',
					'path' => 'M4 3.99999C4 3.46956 4.21071 2.96085 4.58579 2.58578C4.96086 2.2107 5.46957 1.99999 6 1.99999C6.53043 1.99999 7.03914 2.2107 7.41421 2.58578C7.78929 2.96085 8 3.46956 8 3.99999H4ZM2.66667 3.99999H0.666667C0.489856 3.99999 0.320286 4.07023 0.195262 4.19525C0.0702379 4.32028 0 4.48985 0 4.66666V14C0 14.1768 0.0702379 14.3464 0.195262 14.4714C0.320286 14.5964 0.489856 14.6667 0.666667 14.6667H11.3333C11.5101 14.6667 11.6797 14.5964 11.8047 14.4714C11.9298 14.3464 12 14.1768 12 14V4.66666C12 4.48985 11.9298 4.32028 11.8047 4.19525C11.6797 4.07023 11.5101 3.99999 11.3333 3.99999H9.33333C9.33333 3.11593 8.98214 2.26809 8.35702 1.64297C7.7319 1.01785 6.88406 0.666656 6 0.666656C5.11595 0.666656 4.2681 1.01785 3.64298 1.64297C3.01786 2.26809 2.66667 3.11593 2.66667 3.99999ZM4 6.66666C4 7.19709 4.21071 7.7058 4.58579 8.08087C4.96086 8.45594 5.46957 8.66666 6 8.66666C6.53043 8.66666 7.03914 8.45594 7.41421 8.08087C7.78929 7.7058 8 7.19709 8 6.66666H9.33333C9.33333 7.55071 8.98214 8.39856 8.35702 9.02368C7.7319 9.6488 6.88406 9.99999 6 9.99999C5.11595 9.99999 4.2681 9.6488 3.64298 9.02368C3.01786 8.39856 2.66667 7.55071 2.66667 6.66666H4Z',
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 12,
						'vh' => 15
					),
					'box' => array(
						'margin' => array(
							'top' => '0px',
							'bottom' => '0px'
						),
						'width' => '40px',
						'height' => '40px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '100px'
					),
					'color' => array(
						'text' => '#5566ca',
						'textHover' => '',
						'bg' => '#fff',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'toast' => array(
				'type' => 'object',
				'default' => array(
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => ''
					),
					'color' => array(
						'text' => '#fff',
						'bg' => '#28a745'
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'advanced-categories' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/advanced-categories',
		'title' => 'Advanced Categories (Pro)',
		'description' => 'Showcase your post categories with images in various layouts—grid, list, or carousel—for a visually engaging and navigable experience with our \'Advanced Categories\' block.',
		'category' => 'cozy-block/post-magazine',
		'keywords' => array(
			'category',
			'post'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'perPage' => array(
				'type' => 'number',
				'default' => -1
			),
			'showNestedCategory' => array(
				'type' => 'boolean',
				'default' => true
			),
			'categoryOptions' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'display' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'layoutHover' => array(
				'type' => 'boolean',
				'default' => false
			),
			'contentPosition' => array(
				'type' => 'string',
				'default' => 'center center'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'linkCategory' => true,
					'openNewTab' => true,
					'image' => true,
					'name' => true,
					'icon' => true,
					'count' => true
				)
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'columnCount' => 3,
					'gap' => '26px'
				)
			),
			'listOptions' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '26px',
					'height' => '50px'
				)
			),
			'categoryItem' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'bgColor' => '',
					'bgColorHover' => '',
					'borderColorHover' => ''
				)
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'hoverEffect' => true,
					'width' => '',
					'height' => '430px',
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'overlayColor' => '#090A0F57'
				)
			),
			'title' => array(
				'type' => 'object',
				'default' => array(
					'fontSize' => '18px',
					'fontFamily' => '',
					'fontWeight' => '600',
					'letterCase' => '',
					'decoration' => '',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#5566ca',
					'colorHover' => '#f90'
				)
			),
			'iconBox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '5px',
						'right' => '5px',
						'bottom' => '5px',
						'left' => '5px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'bgColor' => '#5566ca',
					'bgColorHover' => '',
					'borderColorHover' => ''
				)
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '4px',
					'view' => 'default',
					'layout' => 'fill',
					'path' => 'M5.40498 17.8C5.34498 17.8 5.26498 17.8 5.20498 17.78C4.84498 17.68 4.60498 17.38 4.60498 17C4.60498 16.88 4.62498 13.82 6.90498 11.54C8.36498 10.08 10.365 9.27995 12.885 9.13995V6.99995C12.885 6.67995 13.085 6.37995 13.385 6.25995C13.685 6.13995 14.025 6.19995 14.265 6.43995L19.185 11.44C19.485 11.76 19.485 12.2599 19.185 12.5599L14.265 17.5599C14.045 17.7999 13.685 17.86 13.385 17.74C13.085 17.62 12.885 17.32 12.885 17V14.84C11.285 14.8 7.48498 14.96 6.10498 17.4C5.96498 17.64 5.68498 17.8 5.40498 17.8ZM12.445 13.2199C13.185 13.2199 13.705 13.28 13.765 13.28C14.165 13.32 14.485 13.66 14.485 14.08V15.04L17.485 12L14.485 8.95995V9.91995C14.485 10.3599 14.125 10.7199 13.685 10.7199C11.225 10.7199 9.32498 11.38 8.04498 12.68C7.46498 13.26 7.06498 13.92 6.78498 14.54C8.64498 13.42 11.005 13.2199 12.445 13.2199Z',
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 24,
						'vh' => 24
					),
					'size' => '20px',
					'opacity' => 100,
					'strokeWidth' => 1,
					'color' => '',
					'colorHover' => ''
				)
			),
			'contentBox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '10px',
						'bottom' => '0px',
						'left' => '10px'
					),
					'fontSize' => '18px',
					'fontFamily' => '',
					'fontWeight' => '500'
				)
			),
			'postCount' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '6px',
					'labelBefore' => '',
					'labelAfter' => '',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'color' => '',
					'bgColor' => ''
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'direction' => 'horizontal',
					'height' => '430px',
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 2500
					),
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 26,
					'speed' => 1500
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'default' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'color' => '#6a6a6a',
						'colorHover' => ''
					),
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px',
						'color' => '#f90',
						'colorHover' => ''
					),
					'align' => 'center',
					'verticalPosition' => 0,
					'left' => '0px',
					'right' => '0px',
					'gap' => '4px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverShow' => true,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'borderColorHover' => '',
					'bgColor' => '#007cba',
					'bgColorHover' => '#f90',
					'color' => '#fff',
					'colorHover' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'viewScript' => array(
			'cozy-block--advanced-categories--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'advanced-gallery' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'cozy-block/advanced-gallery',
		'version' => '1.0.0',
		'title' => 'Advanced Gallery',
		'category' => 'cozy-block',
		'description' => '\'Advanced gallery\' block with a grid, masonry and carousel layout that opens images in a lightbox for a sleek, full-screen viewing experience.',
		'keywords' => array(
			'gallery',
			'image'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'perPage' => array(
				'type' => 'number',
				'default' => -1
			),
			'display' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'isotopeFilter' => false,
					'hoverTitle' => false,
					'hoverIcon' => true,
					'lightbox' => true,
					'lightboxTitle' => true
				)
			),
			'tabOptions' => array(
				'type' => 'object',
				'default' => array(
					'showDefaultTab' => true,
					'justifyTab' => 'center',
					'gap' => '4px'
				)
			),
			'tabsList' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'mediaCollection' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'column' => 3,
					'columnGap' => '16px',
					'masonry' => false
				)
			),
			'headerBox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '6px',
						'right' => '6px',
						'bottom' => '6px',
						'left' => '6px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '12px'
					),
					'border' => array(
						'top' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'right' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'bottom' => array(
							'width' => '1px',
							'style' => 'solid',
							'color' => '#e2e2e2'
						),
						'left' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						)
					),
					'radius' => '0px',
					'color' => array(
						'bg' => ''
					)
				)
			),
			'tabStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '2px',
						'right' => '6px',
						'bottom' => '2px',
						'left' => '6px'
					),
					'radius' => '0px',
					'default' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'shadow' => array(
							'enabled' => false,
							'horizontal' => 0,
							'vertical' => 0,
							'blur' => 0,
							'spread' => 0,
							'color' => '',
							'position' => ''
						)
					),
					'active' => array(
						'marginBottom' => 0,
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'shadow' => array(
							'enabled' => false,
							'horizontal' => 0,
							'vertical' => 0,
							'blur' => 0,
							'spread' => 0,
							'color' => '',
							'position' => ''
						)
					),
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'bgActive' => '',
						'text' => '',
						'textHover' => '#f90',
						'textActive' => '#5566ca'
					)
				)
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'height' => '220px',
					'radius' => '0px',
					'hoverEffect' => true,
					'title' => array(
						'align' => 'center',
						'bottom' => '10px',
						'left' => '0px',
						'right' => '0px',
						'font' => array(
							'size' => '14px',
							'weight' => '500',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					),
					'color' => array(
						'text' => '#fff',
						'overlay' => '#090b1085'
					)
				)
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'size' => '30px',
					'path' => 'M17.3051 12.1C17.3051 12.6 16.9051 13 16.4051 13H12.8051V16.4C12.8051 16.9 12.4051 17.3 11.9051 17.3C11.4051 17.3 11.0051 16.9 11.0051 16.4V13H7.60511C7.10511 13 6.70511 12.6 6.70511 12.1C6.70511 11.6 7.10511 11.2 7.60511 11.2H11.0051V7.6C11.0051 7.1 11.4051 6.7 11.9051 6.7C12.4051 6.7 12.8051 7.1 12.8051 7.6V11.2H16.4051C16.9051 11.2 17.3051 11.6 17.3051 12.1Z',
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 24,
						'vh' => 24
					),
					'box' => array(
						'padding' => array(
							'top' => '6px',
							'right' => '6px',
							'bottom' => '6px',
							'left' => '6px'
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '50px'
					),
					'color' => array(
						'text' => '',
						'textHover' => '#fff',
						'bg' => '#fff',
						'bgHover' => '#f90'
					)
				)
			),
			'lightbox' => array(
				'type' => 'object',
				'default' => array(
					'title' => array(
						'align' => 'center',
						'bottom' => 0,
						'left' => '0px',
						'right' => '0px',
						'font' => array(
							'size' => '16px',
							'weight' => '500',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '#fff'
						)
					),
					'navigation' => array(
						'enabled' => true,
						'hoverShow' => true,
						'size' => '16px',
						'boxWidth' => '35px',
						'boxHeight' => '35px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '5px',
						'color' => array(
							'icon' => '#fff',
							'iconHover' => '',
							'bg' => '#6a6a6a',
							'bgHover' => '#f90',
							'borderHover' => ''
						)
					)
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'effect' => 'slide',
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 2500
					),
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 26,
					'speed' => 1500
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => '10px',
					'height' => '10px',
					'radius' => '10px',
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px'
					),
					'align' => 'center',
					'bottom' => 0,
					'left' => '0px',
					'right' => '0px',
					'gap' => '4px',
					'color' => array(
						'default' => '#6a6a6a',
						'defaultHover' => '',
						'active' => '#f90',
						'activeHover' => ''
					)
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverShow' => true,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => array(
						'icon' => '#fff',
						'iconHover' => '',
						'bg' => '#007cba',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			),
			'ajaxLoader' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'type' => 'default',
					'label' => 'Load More',
					'loadingText' => '',
					'minWidth' => '95px',
					'content' => 10,
					'padding' => array(
						'top' => '8px',
						'right' => '14px',
						'bottom' => '8px',
						'left' => '14px'
					),
					'margin' => array(
						'top' => '26px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => ''
					),
					'textAlign' => 'center',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'spinnerPrimary' => '#fff',
						'spinnerSecondary' => '#989898',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--advanced-gallery--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'advanced-tab' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/advanced-tab',
		'title' => 'Advanced Tabs',
		'description' => 'Elevate your site’s navigation with the Advanced Tabs block — a sleek, interactive tabbed layout that organizes content beautifully and enhances user engagement.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'tabAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'columnGap' => array(
				'type' => 'number',
				'default' => 0
			),
			'rowGap' => array(
				'type' => 'number',
				'default' => 10
			),
			'iconLayout' => array(
				'type' => 'string',
				'default' => 'fill'
			),
			'iconSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'iconSpacing' => array(
				'type' => 'number',
				'default' => 10
			),
			'enableTabAfter' => array(
				'type' => 'boolean',
				'default' => true
			),
			'enableTitle' => array(
				'type' => 'boolean',
				'default' => true
			),
			'title' => array(
				'type' => 'string',
				'default' => 'Advanced Tabs'
			),
			'titleStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '0px',
					'flexWrap' => true
				)
			),
			'innerBlocks' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'parentAttributes' => array(
				'type' => 'object',
				'default' => array(
					
				)
			),
			'containerStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'border' => array(
						'width' => array(
							'top' => 1,
							'right' => 1,
							'bottom' => 1,
							'left' => 1
						),
						'type' => 'none',
						'color' => '#000'
					),
					'borderRadius' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'bgColor' => ''
				)
			),
			'separatorStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'border' => array(
						'width' => array(
							'top' => 0,
							'right' => 0,
							'bottom' => 1,
							'left' => 0
						),
						'type' => 'solid',
						'color' => '#e2e2e2'
					)
				)
			),
			'tabStyles' => array(
				'type' => 'object',
				'default' => array(
					'width' => 60,
					'padding' => array(
						'top' => 5,
						'right' => 10,
						'bottom' => 5,
						'left' => 10
					),
					'border' => array(
						'width' => array(
							'top' => 1,
							'right' => 1,
							'bottom' => 1,
							'left' => 1
						),
						'type' => 'none',
						'color' => '',
						'colorActive' => '#E6E8F4'
					),
					'borderRadius' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'bgColor' => '#5566ca',
					'bgColorActive' => '#EFEAF7'
				)
			),
			'contentStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 10,
						'right' => 10,
						'bottom' => 10,
						'left' => 10
					),
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'border' => array(
						'width' => array(
							'top' => 1,
							'right' => 1,
							'bottom' => 1,
							'left' => 1
						),
						'type' => 'none',
						'color' => '#000'
					),
					'borderRadius' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'bgColor' => '#EFEAF7'
				)
			),
			'titleTypography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => 'Public Sans',
					'fontSize' => 16,
					'color' => '#000',
					'fontWeight' => 400,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => 'Public Sans',
					'fontSize' => 16,
					'color' => '#fff',
					'colorActive' => '#5566ca',
					'fontWeight' => 400,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--advanced-tab--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'back-to-top' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/back-to-top',
		'title' => 'Back to Top',
		'description' => 'Improve user experience with a convenient \'Back to Top\' button, enabling effortless return to the page\'s top for smooth and easy navigation.',
		'category' => 'cozy-block',
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'cozy-addons',
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'position' => array(
				'type' => 'object',
				'default' => array(
					'right' => 25,
					'bottom' => 25
				)
			),
			'styles' => array(
				'type' => 'object',
				'default' => array(
					'boxWidth' => 50,
					'boxHeight' => 50,
					'borderRadius' => 50,
					'iconSize' => 18,
					'iconColor' => '#fff',
					'iconColorHover' => '#fff',
					'bgColor' => '#5566CA',
					'bgColorHover' => '#5566CA'
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--back-to-top--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'breadcrumb' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/breadcrumb',
		'title' => 'Breadcrumbs',
		'description' => 'Enhance navigation on your site with our \'Breadcrumb\' block, offering an intuitive trail of links that guides users through the hierarchical structure, ensuring a seamless and organized browsing experience.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => 'Public Sans',
					'fontSize' => 16,
					'fontWeight' => 400,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'' => 'none',
					'color' => '#000',
					'linkColor' => '#5566CA',
					'hoverColor' => '#36CFC6'
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block-scripts'
		),
		'render' => 'file:./render.php'
	),
	'button' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/button',
		'title' => 'Cozy Button',
		'description' => 'Enhance user interaction with our stylish and versatile \'Button\' block, designed to seamlessly integrate into your site for a polished appearance.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'carousel' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'cozy-block/carousel',
		'version' => '1.0.0',
		'title' => 'Item',
		'description' => 'Supportive block for Team and Testimonials blocks.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'parent' => array(
			'cozy-block/teams',
			'cozy-block/testimonial',
			'cozy-block/featured-content-box',
			'cozy-block/portfolio-gallery'
		)
	),
	'categorized-post-tabs' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/categorized-post-tabs',
		'title' => 'Categorized Post Tabs (Pro)',
		'description' => 'Showcase your posts categorically with multiple layout options, including grid and list. Easily feature a specific post to highlight important content. Enhance your site\'s look and keep visitors engaged with our versatile and customizable \'Categorized Post Tabs\' block.',
		'category' => 'cozy-block/post-magazine',
		'keywords' => array(
			'category',
			'post'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'perPage' => array(
				'type' => 'number',
				'default' => 6
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'grid-featured'
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'fontSize' => '14px'
					)
				)
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'heading' => true,
					'postImage' => true,
					'imgLinkPost' => true,
					'imgOpenNewTab' => false,
					'titleLinkPost' => true,
					'titleOpenNewTab' => false,
					'postContent' => true,
					'featuredPostContent' => true,
					'postExcerpt' => 20,
					'featuredPostExcerpt' => 20,
					'readMore' => true,
					'featuredReadMore' => true,
					'readMoreNewTab' => false,
					'postAuthor' => true,
					'featuredPostAuthor' => true,
					'postComments' => true,
					'featuredPostComments' => true,
					'postDate' => true,
					'featuredPostDate' => true,
					'postCategories' => true,
					'featuredPostCategories' => true,
					'linkCat' => true,
					'catOpenNewTab' => false,
					'linkPostMeta' => true,
					'postMetaOpenNewTab' => false
				)
			),
			'headingLabel' => array(
				'type' => 'string',
				'default' => 'Featured'
			),
			'headingTag' => array(
				'type' => 'string',
				'default' => 'h2'
			),
			'headingGap' => array(
				'type' => 'string',
				'default' => '16px'
			),
			'headerBox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '6px',
						'right' => '6px',
						'bottom' => '6px',
						'left' => '6px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '12px'
					),
					'border' => array(
						'top' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'right' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'bottom' => array(
							'width' => '1px',
							'style' => 'solid',
							'color' => '#e2e2e2'
						),
						'left' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						)
					),
					'radius' => '0px',
					'color' => array(
						'bg' => ''
					)
				)
			),
			'headingStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'font' => array(
						'size' => '18px',
						'weight' => '600',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'bg' => '',
						'text' => ''
					)
				)
			),
			'tabOptions' => array(
				'type' => 'object',
				'default' => array(
					'showDefaultTab' => true,
					'justifyTab' => 'space-between',
					'gap' => '4px'
				)
			),
			'selectedCategories' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'tabStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '2px',
						'right' => '6px',
						'bottom' => '2px',
						'left' => '6px'
					),
					'radius' => '0px',
					'default' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'shadow' => array(
							'enabled' => false,
							'horizontal' => 0,
							'vertical' => 0,
							'blur' => 0,
							'spread' => 0,
							'color' => '',
							'position' => ''
						)
					),
					'active' => array(
						'marginBottom' => 0,
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'shadow' => array(
							'enabled' => false,
							'horizontal' => 0,
							'vertical' => 0,
							'blur' => 0,
							'spread' => 0,
							'color' => '',
							'position' => ''
						)
					),
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'bgActive' => '',
						'text' => '',
						'textHover' => '#f90',
						'textActive' => '#5566ca'
					)
				)
			),
			'featuredPostOptions' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'imageOverlay' => false,
					'source' => 'default',
					'sticky' => true,
					'rowGap' => '26px',
					'columnGap' => '16px',
					'textAlign' => 'left',
					'image' => array(
						'margin' => array(
							'top' => '0px',
							'bottom' => '10px'
						),
						'height' => '450px',
						'radius' => '0px'
					),
					'content' => array(
						'padding' => array(
							'top' => '0px',
							'right' => '0px',
							'bottom' => '0px',
							'left' => '0px'
						),
						'margin' => array(
							'top' => 0,
							'bottom' => '0px'
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '0px',
						'outerHGap' => '0px',
						'outerVGap' => '0px',
						'position' => 'relative',
						'color' => array(
							'bg' => ''
						)
					),
					'title' => array(
						'className' => '',
						'margin' => array(
							'top' => '4px',
							'bottom' => '6px'
						),
						'font' => array(
							'size' => '22px',
							'weight' => '600',
							'family' => 'Public Sans'
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '#090b10',
							'textHover' => '#f90'
						)
					),
					'postID' => '',
					'categoryFeatured' => array(
						
					),
					'position' => 'left'
				)
			),
			'postBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'shadowHover' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'hoverEffect' => true
				)
			),
			'postOptions' => array(
				'type' => 'object',
				'default' => array(
					'column' => 2,
					'gap' => '16px',
					'imageOverlay' => false,
					'textAlign' => 'left',
					'image' => array(
						'margin' => array(
							'top' => '0px',
							'bottom' => '10px'
						),
						'width' => '',
						'height' => '220px',
						'radius' => '0px',
						'hoverEffect' => true
					),
					'content' => array(
						'gap' => '10px',
						'layout' => 'default',
						'padding' => array(
							'top' => '0px',
							'right' => '0px',
							'bottom' => '0px',
							'left' => '0px'
						)
					),
					'title' => array(
						'className' => '',
						'margin' => array(
							'top' => '4px',
							'bottom' => '6px'
						),
						'font' => array(
							'size' => '18px',
							'weight' => '600',
							'family' => 'Public Sans'
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '#090b10',
							'textHover' => '#f90'
						)
					)
				)
			),
			'featuredPostCategories' => array(
				'type' => 'object',
				'default' => array(
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'postCategories' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '12px',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '6px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'postMeta' => array(
				'type' => 'object',
				'default' => array(
					'enableIcon' => true,
					'margin' => array(
						'top' => '0px',
						'bottom' => '4px'
					),
					'font' => array(
						'size' => '12px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#5566ca',
						'textHover' => '#f90',
						'featured' => '#5566ca',
						'featuredHover' => '#f90'
					)
				)
			),
			'featuredReadMore' => array(
				'type' => 'object',
				'default' => array(
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'textAlign' => 'right',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'readMore' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '4px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'textAlign' => 'right',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--categorized-post-tabs--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'cf7-styler' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/cf7-styler',
		'title' => 'Contact Form 7 Styler(Pro)',
		'description' => 'Effortlessly customize and style your Contact Form 7 forms with unique designs using the Contact Form 7 Styler block.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'shortcode' => array(
				'type' => 'string',
				'default' => ''
			),
			'gap' => array(
				'type' => 'string',
				'default' => '20px'
			),
			'align' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'label' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'bg' => ''
					)
				)
			),
			'textStyles' => array(
				'type' => 'object',
				'default' => array(
					'textareaHeight' => '',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'borderFocus' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textFocus' => '',
						'bg' => '',
						'bgFocus' => ''
					)
				)
			),
			'dropdownStyles' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'bg' => ''
					)
				)
			),
			'dateStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'bg' => ''
					)
				)
			),
			'buttonStyles' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'display' => 'inline',
					'align' => 'left',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'checkboxStyles' => array(
				'type' => 'object',
				'default' => array(
					'itemGap' => '1em',
					'size' => '',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => ''
					)
				)
			),
			'radioStyles' => array(
				'type' => 'object',
				'default' => array(
					'itemGap' => '1em',
					'size' => '',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => ''
					)
				)
			),
			'acceptanceStyles' => array(
				'type' => 'object',
				'default' => array(
					'size' => '',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => ''
					)
				)
			),
			'fileStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'padding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'right' => '',
					'bottom' => '',
					'left' => ''
				)
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'bottom' => ''
				)
			),
			'border' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'style' => '',
					'color' => ''
				)
			),
			'radius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'right' => '',
					'bottom' => '',
					'left' => ''
				)
			),
			'shadow' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'horizontal' => '0px',
					'vertical' => '0px',
					'blur' => '0px',
					'spread' => '0px',
					'color' => '',
					'position' => ''
				)
			),
			'font' => array(
				'type' => 'object',
				'default' => array(
					'size' => '',
					'weight' => '',
					'family' => ''
				)
			),
			'color' => array(
				'type' => 'object',
				'default' => array(
					'text' => '',
					'bg' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'container' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/container',
		'title' => 'Cozy Container',
		'description' => 'Infuse life into your content with our \'Cozy Container\' block, offering animation and customization options for a vibrant and personalized user experience.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'background' => array(
				'backgroundImage' => true,
				'backgroundSize' => true,
				'__experimentalDefaultControls' => array(
					'backgroundImage' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'mediaId' => array(
				'type' => 'number',
				'default' => 0
			),
			'mediaUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'imagePosition' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'position' => array(
				'type' => 'string',
				'default' => 'inherit'
			),
			'fixedPlacement' => array(
				'type' => 'string',
				'default' => 'top'
			),
			'top' => array(
				'type' => 'number',
				'default' => 0
			),
			'bottom' => array(
				'type' => 'number',
				'default' => 0
			),
			'stickyStyles' => array(
				'type' => 'object',
				'default' => array(
					'bgColor' => ''
				)
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0
				)
			),
			'padding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0
				)
			),
			'zIndex' => array(
				'type' => 'string',
				'default' => '0'
			),
			'border' => array(
				'type' => 'object',
				'default' => array(
					'type' => 'none',
					'color' => '#fff',
					'widthDimension' => array(
						'top' => 1,
						'right' => 1,
						'bottom' => 1,
						'left' => 1
					)
				)
			),
			'borderHover' => array(
				'type' => 'object',
				'default' => array(
					'type' => 'none',
					'color' => '',
					'widthDimension' => array(
						'top' => 1,
						'right' => 1,
						'bottom' => 1,
						'left' => 1
					)
				)
			),
			'borderRadius' => array(
				'type' => 'object',
				'default' => array(
					'topL' => 6,
					'topR' => 6,
					'bottomL' => 6,
					'bottomR' => 6
				)
			),
			'borderRadiusHover' => array(
				'type' => 'object',
				'default' => array(
					'topL' => '',
					'topR' => '',
					'bottomL' => '',
					'bottomR' => ''
				)
			),
			'boxShadow' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'color' => '#000',
					'horizontal' => 0,
					'vertical' => 0,
					'blur' => 10,
					'spread' => 0,
					'position' => ''
				)
			),
			'boxShadowHover' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'color' => '#000',
					'horizontal' => 0,
					'vertical' => 0,
					'blur' => 10,
					'spread' => 0,
					'position' => ''
				)
			),
			'backgroundColorHover' => array(
				'type' => 'string',
				'default' => ''
			),
			'animation' => array(
				'type' => 'object',
				'default' => array(
					'effect' => 'none',
					'direction' => 'left',
					'gap' => '50',
					'duration' => '1',
					'delay' => '0.5'
				)
			),
			'shapeDivider' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'margin' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'height' => 200,
					'position' => 'bottom',
					'flip' => 'right',
					'svg' => '<svg viewBox="0 0 519 134" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 134H519V0L0 134Z"/></svg>',
					'color' => '#fff'
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--container--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'countdown-timer' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/countdown-timer',
		'title' => 'Countdown Timer (Pro)',
		'description' => 'The Countdown Timer Block creates urgency with a customizable timer for promotions or events, featuring automatic hiding after the offer ends.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'day' => true,
					'dayLabel' => 'Days',
					'hour' => true,
					'hourLabel' => 'Hours',
					'minute' => true,
					'minuteLabel' => 'Minutes',
					'second' => true,
					'secondLabel' => 'Seconds'
				)
			),
			'beforeLabel' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'content' => 'Hurry up! Sale ends in:'
				)
			),
			'afterLabel' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'content' => ''
				)
			),
			'beforeAfterStyles' => array(
				'type' => 'object',
				'default' => array(
					'width' => 'full',
					'gap' => '12px',
					'font' => array(
						'size' => '22px',
						'weight' => '500',
						'family' => 'Poppins'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '1.2em',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#333'
					)
				)
			),
			'endOptions' => array(
				'type' => 'object',
				'default' => array(
					'type' => 'default',
					'label' => 'The offer ended!',
					'width' => 'full',
					'align' => 'center',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'font' => array(
						'size' => '16px',
						'weight' => '500',
						'family' => 'Poppins'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#333',
						'bg' => ''
					)
				)
			),
			'startDate' => array(
				'type' => 'string',
				'default' => ''
			),
			'endDate' => array(
				'type' => 'string',
				'default' => ''
			),
			'separator' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'content' => ':',
					'margin' => array(
						'top' => '-6px',
						'left' => '-20px'
					),
					'size' => '48px',
					'color' => array(
						'text' => ''
					)
				)
			),
			'align' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'gap' => array(
				'type' => 'string',
				'default' => '26px'
			),
			'label' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'display' => 'block',
					'position' => 'bottom',
					'align' => 'center',
					'gap' => '4px',
					'font' => array(
						'size' => '15px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '1em',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#858585'
					)
				)
			),
			'itemStyles' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'height' => '',
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'shadow' => array(
						'enabled' => '',
						'horizontal' => '0',
						'vertical' => '0',
						'blur' => '0',
						'spread' => '0',
						'color' => '',
						'position' => ''
					),
					'color' => array(
						'text' => '',
						'bg' => ''
					)
				)
			),
			'timerStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'font' => array(
						'size' => '44px',
						'weight' => '600',
						'family' => ''
					),
					'lineHeight' => '1.2em',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'bg' => ''
					)
				)
			),
			'padding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'right' => '',
					'bottom' => '',
					'left' => ''
				)
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'bottom' => ''
				)
			),
			'border' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'style' => '',
					'color' => ''
				)
			),
			'radius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'right' => '',
					'bottom' => '',
					'left' => ''
				)
			),
			'shadow' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'horizontal' => '0',
					'vertical' => '0',
					'blur' => '0',
					'spread' => '0',
					'color' => '',
					'position' => ''
				)
			),
			'font' => array(
				'type' => 'object',
				'default' => array(
					'size' => '',
					'weight' => '',
					'family' => ''
				)
			),
			'color' => array(
				'type' => 'object',
				'default' => array(
					'text' => '',
					'bg' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--countdown-timer--frontend-script',
			'cozy-dep-luxon'
		),
		'render' => 'file:./render.php'
	),
	'counter' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/counter',
		'title' => 'Counter',
		'description' => 'Highlight achievements and statistics with our \'Counter\' block, a sleek number counter that elegantly displays numbers and stats to captivate your audience.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'endNumber' => array(
				'type' => 'string',
				'default' => '10000'
			),
			'animationDuration' => array(
				'type' => 'number',
				'default' => 1000
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'styles' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => 'Public Sans',
					'fontSize' => '64px',
					'color' => '#5566CA',
					'fontWeight' => 700
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--counter--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'cta' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/cta',
		'title' => 'Call to Action',
		'description' => 'Boost interaction with our \'Call to Action\' block, strategically placed to inspire users to take the next step, whether it\'s making a purchase or subscribing.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'current-time' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/date-time',
		'title' => 'Date & Time',
		'description' => 'Stay updated with our \'Date & Time\' block, effortlessly displaying the current time and date to keep your audience informed and engaged.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 5,
						'right' => 5,
						'bottom' => 5,
						'left' => 5
					),
					'borderRadius' => array(
						'topL' => 6,
						'topR' => 6,
						'bottomL' => 6,
						'bottomR' => 6
					),
					'textAlign' => 'center',
					'display' => 'flex',
					'gap' => 10,
					'marginBottom' => 10,
					'styles' => array(
						'fontFamily' => 'Public Sans',
						'fontSize' => 14,
						'fontWeight' => '400',
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => '#000',
						'bgColor' => '#fff'
					)
				)
			),
			'abbr' => array(
				'type' => 'boolean',
				'default' => false
			),
			'week' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true
				)
			),
			'date' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'format' => 'm-d-y'
				)
			),
			'time' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'timeFormat' => true,
					'padding' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'borderRadius' => array(
						'topL' => 0,
						'topR' => 0,
						'bottomL' => 0,
						'bottomR' => 0
					),
					'styles' => array(
						'fontSize' => '',
						'fontWeight' => '',
						'fontFamily' => '',
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => '',
						'bgColor' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--current-time--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'featured-content-box' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/featured-content-box',
		'title' => 'Featured Content Box',
		'description' => 'Presenting the \'Featured Content Box\' block – your ultimate tool for showcasing standout content! Customize your display for a visually stunning presentation that captivates your audience.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'enableMasonry' => false,
					'columnCount' => 3,
					'gap' => 30
				)
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'stackedImage' => array(
				'type' => 'object',
				'default' => array(
					'verticalPosition' => -25
				)
			),
			'galleryOptions' => array(
				'type' => 'object',
				'default' => array(
					'overlayOpacity' => 0.6,
					'overlayColorHover' => ''
				)
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'gap' => 4,
					'width' => 10,
					'height' => 10,
					'borderRadius' => 10,
					'activeWidth' => 10,
					'activeHeight' => 10,
					'activeBorderRadius' => 10,
					'activeBorder' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'activeOffset' => 0,
					'activeColor' => '#007cba',
					'color' => '#252525',
					'activeColorHover' => '#164861',
					'colorHover' => '#a5a5a5',
					'activeBorderHover' => '',
					'align' => 'center',
					'verticalPosition' => 0,
					'left' => '0px',
					'right' => '0px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'iconSize' => 15,
					'iconBoxWidth' => 35,
					'iconBoxHeight' => 35,
					'borderRadius' => 50,
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'backgroundColor' => '#fff',
					'color' => '#007cba',
					'backgroundColorHover' => '#007cba',
					'colorHover' => '#fff',
					'borderHover' => ''
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'delay' => 2500
					),
					'reverseDirection' => false,
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 30,
					'speed' => 700,
					'smoothTransition' => false
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--featured-content-box--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'featured-post' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/featured-post',
		'title' => 'Featured Post (Pro)',
		'description' => '\'Featured Post\' block allows you to handpick from your latest posts and showcase them in versatile display options such as grid, list, and carousel, enhancing your site\'s visual appeal and user engagement.',
		'category' => 'cozy-block/post-magazine',
		'keywords' => array(
			'magazine',
			'post'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'fontSize' => '14px'
					)
				)
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'heading' => true,
					'subHeading' => true,
					'postImage' => true,
					'imgLinkPost' => true,
					'imgOpenNewTab' => false,
					'titleLinkPost' => true,
					'titleOpenNewTab' => false,
					'postCategories' => true,
					'linkCat' => true,
					'catOpenNewTab' => false,
					'postContent' => true,
					'postAuthor' => true,
					'postComments' => true,
					'postDate' => true,
					'linkPostMeta' => true,
					'postMetaOpenNewTab' => false,
					'postExcerpt' => 20,
					'readMore' => true,
					'readMoreNewTab' => false
				)
			),
			'headingLabel' => array(
				'type' => 'string',
				'default' => 'Featured'
			),
			'headingTag' => array(
				'type' => 'string',
				'default' => 'h2'
			),
			'headingGap' => array(
				'type' => 'string',
				'default' => '16px'
			),
			'headerBox' => array(
				'type' => 'object',
				'default' => array(
					'tabAlign' => 'space-between',
					'padding' => array(
						'top' => '6px',
						'right' => '6px',
						'bottom' => '6px',
						'left' => '6px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '12px'
					),
					'border' => array(
						'top' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'right' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'bottom' => array(
							'width' => '1px',
							'style' => 'solid',
							'color' => '#e2e2e2'
						),
						'left' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						)
					),
					'radius' => '0px',
					'color' => array(
						'bg' => ''
					)
				)
			),
			'headingStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'clipPath' => '',
					'font' => array(
						'size' => '18px',
						'weight' => '600',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'bg' => '',
						'text' => ''
					)
				)
			),
			'subHeading' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'View All',
					'tag' => 'h3',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'selectedPosts' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'postBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'shadowHover' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'hoverEffect' => true
				)
			),
			'postOptions' => array(
				'type' => 'object',
				'default' => array(
					'column' => 3,
					'gap' => '16px',
					'masonry' => false,
					'rowReverse' => false,
					'imageOverlay' => false,
					'textAlign' => 'left',
					'image' => array(
						'margin' => array(
							'top' => '0px',
							'bottom' => '10px'
						),
						'position' => 'left',
						'width' => '',
						'height' => '200px',
						'radius' => '0px',
						'hoverEffect' => true
					),
					'content' => array(
						'gap' => '10px',
						'padding' => array(
							'top' => '0px',
							'right' => '0px',
							'bottom' => '0px',
							'left' => '0px'
						)
					),
					'title' => array(
						'className' => '',
						'margin' => array(
							'top' => '4px',
							'bottom' => '6px'
						),
						'font' => array(
							'size' => '18px',
							'weight' => '600',
							'family' => 'Public Sans'
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '#090b10',
							'textHover' => '#f90'
						)
					)
				)
			),
			'postCategories' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '12px',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '6px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'hoverEffect' => true,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'postMeta' => array(
				'type' => 'object',
				'default' => array(
					'enableIcon' => true,
					'margin' => array(
						'top' => '8px',
						'bottom' => '8px'
					),
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#5566ca',
						'textHover' => '#f90'
					)
				)
			),
			'readMore' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '4px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'textAlign' => 'right',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'effect' => 'slide',
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 2500
					),
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 26,
					'speed' => 1500
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => '10px',
					'height' => '10px',
					'radius' => '10px',
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px'
					),
					'align' => 'center',
					'bottom' => 0,
					'left' => '0px',
					'right' => '0px',
					'gap' => '4px',
					'color' => array(
						'default' => '#6a6a6a',
						'defaultHover' => '',
						'active' => '#f90',
						'activeHover' => ''
					)
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverShow' => true,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => array(
						'borderHover' => '',
						'bg' => '#007cba',
						'bgHover' => '#f90',
						'icon' => '#fff',
						'iconHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--featured-post--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'featured-post-tabs' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/featured-post-tabs',
		'title' => 'Featured Post Tabs (Pro)',
		'description' => 'Highlight your best content with our \'Featured Post Tabs\' block, providing five tabs—Latest, Popular, Trending, Tags, and Comments—to showcase your top articles and boost engagement.',
		'category' => 'cozy-block/post-magazine',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'fontSize' => '14px'
					)
				)
			),
			'siteURL' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'string',
				'default' => 'list'
			),
			'height' => array(
				'type' => 'string',
				'default' => '430px'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'latest' => true,
					'popular' => true,
					'trending' => false,
					'tags' => true,
					'tagsLinkNewTab' => false,
					'comments' => true,
					'commentsLinkNewTab' => false
				)
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'columnCount' => 2,
					'gap' => '26px'
				)
			),
			'listOptions' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '26px'
				)
			),
			'perPage' => array(
				'type' => 'object',
				'default' => array(
					'latest' => 3,
					'popular' => 3,
					'trending' => 3,
					'tags' => 3,
					'comments' => 3
				)
			),
			'tabJustification' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'tabGap' => array(
				'type' => 'string',
				'default' => '6px'
			),
			'iconBox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '5px',
						'right' => '5px',
						'bottom' => '5px',
						'left' => '5px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'bgColor' => '#38dbc8',
					'bgColorActive' => '',
					'borderColorActive' => ''
				)
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'position' => 'icon-only',
					'gap' => '6px',
					'view' => 'default',
					'layout' => 'fill',
					'size' => '20px',
					'opacity' => 100,
					'strokeWidth' => 1,
					'selectedToggle' => 'latest',
					'latest' => array(
						'path' => 'M12.0051 2.8C6.9251 2.8 2.8051 6.92 2.8051 12C2.8051 17.08 6.9251 21.2 12.0051 21.2C17.0851 21.2 21.2051 17.08 21.2051 12C21.2051 6.92 17.0851 2.8 12.0051 2.8ZM12.7451 19.56C12.7051 19.56 12.6051 19.56 12.6051 19.58V15.24C13.6051 15.22 14.5851 15.2 15.4451 15.14C14.6851 17.48 13.2851 19.04 12.7451 19.56ZM11.2651 19.56C10.7251 19.02 9.3251 17.46 8.5651 15.14C9.4051 15.2 10.4051 15.24 11.4051 15.24V19.58C11.4051 19.58 11.3251 19.56 11.2651 19.56ZM4.4051 12C4.4051 11.5 4.4651 11 4.5451 10.52C4.9851 10.44 5.8251 10.32 7.0051 10.2C6.9051 10.78 6.8451 11.38 6.8451 12.02C6.8451 12.66 6.9051 13.26 6.9851 13.82C5.8251 13.7 4.96509 13.58 4.52509 13.5C4.46509 13 4.4051 12.5 4.4051 12ZM8.0651 12C8.0651 11.32 8.1451 10.68 8.2651 10.08C9.1851 10.02 10.2051 9.96001 11.4051 9.96001V14.04C10.2051 14.02 9.1851 13.98 8.2451 13.9C8.1451 13.32 8.0651 12.68 8.0651 12ZM12.7251 4.43999C13.2651 4.97999 14.6451 6.58001 15.4251 8.86001C14.5851 8.80001 13.6051 8.76001 12.6051 8.76001V4.41999C12.6051 4.41999 12.6851 4.43999 12.7251 4.43999ZM11.4051 4.41999V8.76001C10.4051 8.78001 9.4251 8.80001 8.5851 8.86001C9.3451 6.58001 10.7451 4.97999 11.2651 4.43999C11.3251 4.43999 11.4051 4.41999 11.4051 4.41999ZM12.6051 14.04V9.96001C13.8051 9.98001 14.8251 10.02 15.7451 10.08C15.8651 10.68 15.9451 11.32 15.9451 12C15.9451 12.68 15.8851 13.32 15.7651 13.92C14.8451 13.98 13.8051 14.02 12.6051 14.04ZM16.9851 10.2C18.1651 10.32 19.0051 10.44 19.4451 10.52C19.5451 11 19.5851 11.5 19.5851 12C19.5851 12.5 19.5251 13 19.4451 13.48C19.0051 13.56 18.1651 13.68 16.9851 13.8C17.0851 13.22 17.1251 12.62 17.1251 11.98C17.1451 11.38 17.0851 10.76 16.9851 10.2ZM19.0851 9.23999C18.5251 9.15999 17.7251 9.06001 16.7051 8.96001C16.2251 7.24001 15.3851 5.86 14.6851 4.88C16.7051 5.64 18.3051 7.23999 19.0851 9.23999ZM9.32509 4.88C8.60509 5.84 7.7851 7.21999 7.3051 8.93999C6.3051 9.01999 5.50509 9.14 4.92509 9.22C5.70509 7.24 7.32509 5.64 9.32509 4.88ZM4.92509 14.76C5.48509 14.84 6.2851 14.94 7.2851 15.04C7.7651 16.76 8.5651 18.14 9.2851 19.1C7.2851 18.32 5.70509 16.74 4.92509 14.76ZM14.7251 19.1C15.4451 18.14 16.2451 16.78 16.7251 15.06C17.7251 14.98 18.5251 14.86 19.0851 14.78C18.3051 16.74 16.7251 18.32 14.7251 19.1Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 24,
							'vh' => 24
						)
					),
					'popular' => array(
						'path' => 'M14.765 21.2C12.285 21.2 8.385 20.38 7.425 19.7C7.205 19.54 7.08501 19.3 7.08501 19.04V11.22C7.08501 10.98 7.20501 10.74 7.38501 10.6C7.44501 10.56 8.845 9.45999 10.305 8.63999C12.125 7.63999 13.385 6.24001 13.685 5.36001C14.045 4.28001 14.565 2.8 16.205 2.8C16.985 2.8 17.625 3.24 17.965 4C18.645 5.56 17.925 7.72 16.725 9.42C17.525 9.6 18.525 9.85999 19.125 10.04C20.225 10.38 20.945 11.18 21.105 12.16C21.245 13.16 20.745 14.18 19.685 14.96C18.905 17.06 17.565 20.38 16.585 20.92C16.205 21.12 15.545 21.2 14.765 21.2ZM8.68501 18.56C10.205 19.2 14.885 19.86 15.765 19.52C16.225 19.1 17.405 16.42 18.225 14.16C18.285 14 18.385 13.86 18.525 13.76C19.185 13.32 19.525 12.8 19.465 12.36C19.405 12 19.085 11.7 18.605 11.54C17.605 11.22 15.125 10.68 15.085 10.68C14.805 10.62 14.585 10.42 14.485 10.14C14.385 9.85999 14.465 9.56001 14.665 9.36001C16.465 7.42001 16.785 5.43999 16.445 4.63999C16.345 4.39999 16.225 4.4 16.165 4.4C15.765 4.4 15.585 4.68001 15.165 5.88001C14.685 7.28001 13.025 8.95999 11.045 10.04C10.085 10.56 9.125 11.26 8.645 11.62V18.56H8.68501ZM5.525 19.12V11.14C5.525 10.42 4.945 9.83999 4.225 9.83999C3.505 9.83999 2.925 10.42 2.925 11.14V19.12C2.925 19.84 3.505 20.42 4.225 20.42C4.925 20.42 5.525 19.82 5.525 19.12Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 24,
							'vh' => 24
						)
					),
					'trending' => array(
						'path' => 'M1.75 15L0 13.25L9.25 3.9375L14.25 8.9375L20.75 2.5H17.5V0H25V7.5H22.5V4.25L14.25 12.5L9.25 7.5L1.75 15Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 25,
							'vh' => 15
						)
					),
					'tags' => array(
						'path' => 'M19.4508 8.82582L11.1742 0.54918C10.8226 0.197548 10.3456 2.6003e-06 9.84836 0H1.875C0.839453 0 0 0.839453 0 1.875V9.84836C2.6003e-06 10.3456 0.197548 10.8226 0.54918 11.1742L8.82582 19.4508C9.55801 20.183 10.7452 20.1831 11.4775 19.4508L19.4508 11.4775C20.183 10.7452 20.183 9.55805 19.4508 8.82582ZM4.375 6.25C3.33945 6.25 2.5 5.41055 2.5 4.375C2.5 3.33945 3.33945 2.5 4.375 2.5C5.41055 2.5 6.25 3.33945 6.25 4.375C6.25 5.41055 5.41055 6.25 4.375 6.25ZM24.4508 11.4775L16.4775 19.4508C15.7452 20.183 14.558 20.183 13.8258 19.4508L13.8118 19.4368L20.6109 12.6376C21.275 11.9736 21.6406 11.0907 21.6406 10.1516C21.6406 9.21258 21.2749 8.32973 20.6109 7.6657L12.9452 0H14.8484C15.3456 2.6003e-06 15.8226 0.197548 16.1742 0.54918L24.4508 8.82582C25.183 9.55805 25.183 10.7452 24.4508 11.4775Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 25,
							'vh' => 20
						)
					),
					'comments' => array(
						'path' => 'M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 25,
							'vh' => 20
						)
					)
				)
			),
			'postOptions' => array(
				'type' => 'object',
				'default' => array(
					'postImage' => true,
					'imgLinkPost' => true,
					'imgOpenLinkNewTab' => false,
					'titleLinkPost' => true,
					'titleOpenLinkNewTab' => false,
					'postContent' => true,
					'postDate' => true,
					'linkPostMeta' => true,
					'postMetaOpenLinkNewTab' => false,
					'categories' => true,
					'linkCat' => true,
					'catLinkNewTab' => false,
					'excerpt' => 20
				)
			),
			'postBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'radius' => '0px',
					'bgColor' => '',
					'bgColorHover' => '',
					'borderColorHover' => ''
				)
			),
			'imageStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'width' => '30%',
					'height' => '220px',
					'radius' => ''
				)
			),
			'categoryStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'padding' => array(
						'top' => '2px',
						'right' => '10px',
						'bottom' => '2px',
						'left' => '10px'
					),
					'marginTop' => '0px',
					'marginBottom' => '0px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => '#fff',
					'colorHover' => '',
					'bgColor' => '#5566ca',
					'bgColorHover' => '#f90',
					'borderColorHover' => '',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'titleStyles' => array(
				'type' => 'object',
				'default' => array(
					'className' => '',
					'marginTop' => '6px',
					'marginBottom' => '6px',
					'fontSize' => '20px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '600',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#090b10',
					'colorHover' => '#f90'
				)
			),
			'dateStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'marginTop' => '6px',
					'marginBottom' => '0px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => '',
					'colorHover' => '',
					'bgColor' => '',
					'bgColorHover' => '',
					'borderColorHover' => '',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'tagStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'padding' => array(
						'top' => '2px',
						'right' => '10px',
						'bottom' => '2px',
						'left' => '10px'
					),
					'boxPadding' => array(
						'top' => '10px',
						'right' => '10px',
						'bottom' => '10px',
						'left' => '10px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => '#fff',
					'colorHover' => '',
					'bgColor' => '#5566ca',
					'bgColorHover' => '#f90',
					'borderColorHover' => '',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'tabStyles' => array(
				'type' => 'object',
				'default' => array(
					'marginTop' => '0px',
					'marginBottom' => '6px',
					'padding' => array(
						'top' => '4px',
						'right' => '10px',
						'bottom' => '4px',
						'left' => '10px'
					),
					'borderRadius' => array(
						'top' => '0',
						'right' => '0',
						'bottom' => '0',
						'left' => '0'
					),
					'default' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'color' => '#6a6a6a',
						'bgColor' => ''
					),
					'active' => array(
						'tabOverlay' => false,
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'color' => '#5566ca',
						'bgColor' => ''
					),
					'fontSize' => '14px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '500',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'separatorStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0',
						'right' => '0',
						'bottom' => '0',
						'left' => '0'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0',
						'right' => '0',
						'bottom' => '0',
						'left' => '0'
					),
					'bgColor' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--featured-post-tabs--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'featured-product' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/featured-product',
		'title' => 'Featured Product (Pro)',
		'description' => '\'Featured Product\' block allows you to handpick from your latest products and showcase them in versatile display options such as grid, and carousel, enhancing your site\'s visual appeal and user engagement.',
		'category' => 'cozy-block/woocommerce',
		'keywords' => array(
			'product'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'heading' => true,
					'subHeading' => true,
					'postImage' => true,
					'imgLinkPost' => true,
					'imgLinkNewTab' => false,
					'productCategories' => true,
					'linkCat' => true,
					'catNewTab' => false,
					'titleLinkPost' => true,
					'titleLinkNewTab' => false,
					'productPrice' => true,
					'productRating' => true,
					'postContent' => true,
					'postExcerpt' => 20,
					'cartButton' => true,
					'cart' => true,
					'wishlist' => true,
					'quickView' => true,
					'saleBadge' => true
				)
			),
			'headingLabel' => array(
				'type' => 'string',
				'default' => 'Featured'
			),
			'headingTag' => array(
				'type' => 'string',
				'default' => 'h2'
			),
			'headingGap' => array(
				'type' => 'string',
				'default' => '16px'
			),
			'headerBox' => array(
				'type' => 'object',
				'default' => array(
					'tabAlign' => 'space-between',
					'padding' => array(
						'top' => '6px',
						'right' => '6px',
						'bottom' => '6px',
						'left' => '6px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '12px'
					),
					'border' => array(
						'top' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'right' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'bottom' => array(
							'width' => '1px',
							'style' => 'solid',
							'color' => '#e2e2e2'
						),
						'left' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						)
					),
					'radius' => '0px',
					'color' => array(
						'bg' => ''
					)
				)
			),
			'headingStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'clipPath' => '',
					'font' => array(
						'size' => '18px',
						'weight' => '600',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'bg' => '',
						'text' => ''
					)
				)
			),
			'subHeading' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'View All',
					'tag' => 'h3',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'selectedPosts' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'postBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'shadowHover' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'hoverEffect' => false
				)
			),
			'postOptions' => array(
				'type' => 'object',
				'default' => array(
					'column' => 3,
					'gap' => '16px',
					'masonry' => false,
					'textAlign' => 'left',
					'image' => array(
						'margin' => array(
							'top' => '0px',
							'bottom' => '10px'
						),
						'width' => '',
						'height' => '350px',
						'radius' => '0px',
						'hoverEffect' => true,
						'objectFit' => 'cover',
						'objectPosition' => 'top',
						'overlay' => '#1c1c1c96'
					),
					'title' => array(
						'margin' => array(
							'top' => '4px',
							'bottom' => '6px'
						),
						'font' => array(
							'size' => '18px',
							'weight' => '600',
							'family' => 'Public Sans'
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '#090b10',
							'textHover' => '#f90'
						)
					)
				)
			),
			'saleBadge' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '4px',
						'right' => '4px',
						'bottom' => '4px',
						'left' => '4px'
					),
					'border' => array(
						'style' => '',
						'width' => '',
						'color' => ''
					),
					'radius' => '5px',
					'labelBefore' => '',
					'labelAfter' => '',
					'contentType' => 'default',
					'position' => 'left',
					'top' => 10,
					'right' => 10,
					'left' => 10,
					'rotate' => 0,
					'font' => array(
						'size' => '12px',
						'weight' => '400',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'bg' => '#5566ca'
					)
				)
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'size' => '16px',
					'gap' => '8px',
					'hoverShow' => true,
					'direction' => 'vertical',
					'align' => array(
						'vertical' => 'top',
						'horizontal' => 'right'
					),
					'margin' => array(
						'top' => 10,
						'left' => '10px',
						'right' => '10px'
					),
					'box' => array(
						'width' => '40px',
						'height' => '40px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '50px'
					),
					'color' => array(
						'text' => '#090b10',
						'textHover' => '#fff',
						'textActive' => '#fff',
						'bg' => '#fff',
						'bgHover' => '#f90',
						'bgActive' => '#5566ca',
						'borderHover' => '',
						'borderActive' => ''
					)
				)
			),
			'selectedSetting' => array(
				'type' => 'string',
				'default' => 'price'
			),
			'productCategory' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'padding' => array(
						'top' => '2px',
						'right' => '10px',
						'bottom' => '2px',
						'left' => '10px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					),
					'font' => array(
						'size' => '12px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'productPrice' => array(
				'type' => 'object',
				'default' => array(
					'margin' => array(
						'top' => '4px',
						'bottom' => '6px'
					),
					'font' => array(
						'size' => '16px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#090b10'
					)
				)
			),
			'productSummary' => array(
				'type' => 'object',
				'default' => array(
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'font' => array(
						'size' => '14px',
						'weight' => '400',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#6a6a6a'
					)
				)
			),
			'cartButton' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'Add to Cart',
					'width' => '',
					'padding' => array(
						'top' => '8px',
						'right' => '16px',
						'bottom' => '8px',
						'left' => '16px'
					),
					'margin' => array(
						'top' => '10px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'effect' => 'slide',
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 1500
					),
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 26,
					'speed' => 2000
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => '10px',
					'height' => '10px',
					'radius' => '10px',
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px'
					),
					'align' => 'center',
					'bottom' => 0,
					'left' => '0px',
					'right' => '0px',
					'gap' => '4px',
					'color' => array(
						'default' => '#6a6a6a',
						'defaultHover' => '',
						'active' => '#f90',
						'activeHover' => ''
					)
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverShow' => true,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => array(
						'borderHover' => '',
						'bg' => '#007cba',
						'bgHover' => '#f90',
						'icon' => '#fff',
						'iconHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--featured-product--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'featured-product-tabs' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/featured-product-tabs',
		'title' => 'Featured Products Tab (Pro)',
		'description' => 'Highlight your best content with our \'Featured Product Tabs\' block, providing four tabs—Latest, Best Seller, Top Rated, and On Sale—to showcase your top products and boost engagement.',
		'category' => 'cozy-block/woocommerce',
		'keywords' => array(
			'product'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'fontSize' => '14px'
					)
				)
			),
			'siteURL' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'height' => array(
				'type' => 'string',
				'default' => '430px'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'latest' => true,
					'seller' => true,
					'rated' => true,
					'sale' => true
				)
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'columnCount' => 3,
					'gap' => '26px'
				)
			),
			'listOptions' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '26px'
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'direction' => 'horizontal',
					'height' => '430px',
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 2500
					),
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 26,
					'speed' => 1500
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'default' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'color' => '#6a6a6a',
						'colorHover' => ''
					),
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px',
						'color' => '#f90',
						'colorHover' => ''
					),
					'verticalPosition' => 0,
					'gap' => '4px',
					'align' => 'center',
					'left' => '0px',
					'right' => '0px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverShow' => true,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'borderColorHover' => '',
					'bgColor' => '#007cba',
					'bgColorHover' => '#f90',
					'color' => '#fff',
					'colorHover' => ''
				)
			),
			'perPage' => array(
				'type' => 'object',
				'default' => array(
					'latest' => 3,
					'seller' => 3,
					'rated' => 3,
					'sale' => 3
				)
			),
			'tabHeading' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'content' => 'Featured Products',
					'tag' => 'h2',
					'gap' => '16px',
					'fontSize' => '20px',
					'fontWeight' => '600',
					'fontFamily' => '',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => ''
				)
			),
			'tabJustification' => array(
				'type' => 'string',
				'default' => 'space-between'
			),
			'tabGap' => array(
				'type' => 'string',
				'default' => '26px'
			),
			'iconBox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '5px',
						'right' => '5px',
						'bottom' => '5px',
						'left' => '5px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'bgColor' => '#fff',
					'bgColorActive' => '#5566ca',
					'borderColorActive' => ''
				)
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'position' => 'before',
					'gap' => '6px',
					'view' => 'default',
					'layout' => 'fill',
					'size' => '20px',
					'opacity' => 100,
					'strokeWidth' => 1,
					'selectedToggle' => 'latest',
					'latest' => array(
						'path' => 'M12.0051 2.8C6.9251 2.8 2.8051 6.92 2.8051 12C2.8051 17.08 6.9251 21.2 12.0051 21.2C17.0851 21.2 21.2051 17.08 21.2051 12C21.2051 6.92 17.0851 2.8 12.0051 2.8ZM12.7451 19.56C12.7051 19.56 12.6051 19.56 12.6051 19.58V15.24C13.6051 15.22 14.5851 15.2 15.4451 15.14C14.6851 17.48 13.2851 19.04 12.7451 19.56ZM11.2651 19.56C10.7251 19.02 9.3251 17.46 8.5651 15.14C9.4051 15.2 10.4051 15.24 11.4051 15.24V19.58C11.4051 19.58 11.3251 19.56 11.2651 19.56ZM4.4051 12C4.4051 11.5 4.4651 11 4.5451 10.52C4.9851 10.44 5.8251 10.32 7.0051 10.2C6.9051 10.78 6.8451 11.38 6.8451 12.02C6.8451 12.66 6.9051 13.26 6.9851 13.82C5.8251 13.7 4.96509 13.58 4.52509 13.5C4.46509 13 4.4051 12.5 4.4051 12ZM8.0651 12C8.0651 11.32 8.1451 10.68 8.2651 10.08C9.1851 10.02 10.2051 9.96001 11.4051 9.96001V14.04C10.2051 14.02 9.1851 13.98 8.2451 13.9C8.1451 13.32 8.0651 12.68 8.0651 12ZM12.7251 4.43999C13.2651 4.97999 14.6451 6.58001 15.4251 8.86001C14.5851 8.80001 13.6051 8.76001 12.6051 8.76001V4.41999C12.6051 4.41999 12.6851 4.43999 12.7251 4.43999ZM11.4051 4.41999V8.76001C10.4051 8.78001 9.4251 8.80001 8.5851 8.86001C9.3451 6.58001 10.7451 4.97999 11.2651 4.43999C11.3251 4.43999 11.4051 4.41999 11.4051 4.41999ZM12.6051 14.04V9.96001C13.8051 9.98001 14.8251 10.02 15.7451 10.08C15.8651 10.68 15.9451 11.32 15.9451 12C15.9451 12.68 15.8851 13.32 15.7651 13.92C14.8451 13.98 13.8051 14.02 12.6051 14.04ZM16.9851 10.2C18.1651 10.32 19.0051 10.44 19.4451 10.52C19.5451 11 19.5851 11.5 19.5851 12C19.5851 12.5 19.5251 13 19.4451 13.48C19.0051 13.56 18.1651 13.68 16.9851 13.8C17.0851 13.22 17.1251 12.62 17.1251 11.98C17.1451 11.38 17.0851 10.76 16.9851 10.2ZM19.0851 9.23999C18.5251 9.15999 17.7251 9.06001 16.7051 8.96001C16.2251 7.24001 15.3851 5.86 14.6851 4.88C16.7051 5.64 18.3051 7.23999 19.0851 9.23999ZM9.32509 4.88C8.60509 5.84 7.7851 7.21999 7.3051 8.93999C6.3051 9.01999 5.50509 9.14 4.92509 9.22C5.70509 7.24 7.32509 5.64 9.32509 4.88ZM4.92509 14.76C5.48509 14.84 6.2851 14.94 7.2851 15.04C7.7651 16.76 8.5651 18.14 9.2851 19.1C7.2851 18.32 5.70509 16.74 4.92509 14.76ZM14.7251 19.1C15.4451 18.14 16.2451 16.78 16.7251 15.06C17.7251 14.98 18.5251 14.86 19.0851 14.78C18.3051 16.74 16.7251 18.32 14.7251 19.1Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 24,
							'vh' => 24
						)
					),
					'rated' => array(
						'path' => 'M14.765 21.2C12.285 21.2 8.385 20.38 7.425 19.7C7.205 19.54 7.08501 19.3 7.08501 19.04V11.22C7.08501 10.98 7.20501 10.74 7.38501 10.6C7.44501 10.56 8.845 9.45999 10.305 8.63999C12.125 7.63999 13.385 6.24001 13.685 5.36001C14.045 4.28001 14.565 2.8 16.205 2.8C16.985 2.8 17.625 3.24 17.965 4C18.645 5.56 17.925 7.72 16.725 9.42C17.525 9.6 18.525 9.85999 19.125 10.04C20.225 10.38 20.945 11.18 21.105 12.16C21.245 13.16 20.745 14.18 19.685 14.96C18.905 17.06 17.565 20.38 16.585 20.92C16.205 21.12 15.545 21.2 14.765 21.2ZM8.68501 18.56C10.205 19.2 14.885 19.86 15.765 19.52C16.225 19.1 17.405 16.42 18.225 14.16C18.285 14 18.385 13.86 18.525 13.76C19.185 13.32 19.525 12.8 19.465 12.36C19.405 12 19.085 11.7 18.605 11.54C17.605 11.22 15.125 10.68 15.085 10.68C14.805 10.62 14.585 10.42 14.485 10.14C14.385 9.85999 14.465 9.56001 14.665 9.36001C16.465 7.42001 16.785 5.43999 16.445 4.63999C16.345 4.39999 16.225 4.4 16.165 4.4C15.765 4.4 15.585 4.68001 15.165 5.88001C14.685 7.28001 13.025 8.95999 11.045 10.04C10.085 10.56 9.125 11.26 8.645 11.62V18.56H8.68501ZM5.525 19.12V11.14C5.525 10.42 4.945 9.83999 4.225 9.83999C3.505 9.83999 2.925 10.42 2.925 11.14V19.12C2.925 19.84 3.505 20.42 4.225 20.42C4.925 20.42 5.525 19.82 5.525 19.12Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 24,
							'vh' => 24
						)
					),
					'seller' => array(
						'path' => 'M1.75 15L0 13.25L9.25 3.9375L14.25 8.9375L20.75 2.5H17.5V0H25V7.5H22.5V4.25L14.25 12.5L9.25 7.5L1.75 15Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 25,
							'vh' => 15
						)
					),
					'sale' => array(
						'path' => 'M19.4508 8.82582L11.1742 0.54918C10.8226 0.197548 10.3456 2.6003e-06 9.84836 0H1.875C0.839453 0 0 0.839453 0 1.875V9.84836C2.6003e-06 10.3456 0.197548 10.8226 0.54918 11.1742L8.82582 19.4508C9.55801 20.183 10.7452 20.1831 11.4775 19.4508L19.4508 11.4775C20.183 10.7452 20.183 9.55805 19.4508 8.82582ZM4.375 6.25C3.33945 6.25 2.5 5.41055 2.5 4.375C2.5 3.33945 3.33945 2.5 4.375 2.5C5.41055 2.5 6.25 3.33945 6.25 4.375C6.25 5.41055 5.41055 6.25 4.375 6.25ZM24.4508 11.4775L16.4775 19.4508C15.7452 20.183 14.558 20.183 13.8258 19.4508L13.8118 19.4368L20.6109 12.6376C21.275 11.9736 21.6406 11.0907 21.6406 10.1516C21.6406 9.21258 21.2749 8.32973 20.6109 7.6657L12.9452 0H14.8484C15.3456 2.6003e-06 15.8226 0.197548 16.1742 0.54918L24.4508 8.82582C25.183 9.55805 25.183 10.7452 24.4508 11.4775Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 25,
							'vh' => 20
						)
					)
				)
			),
			'productOptions' => array(
				'type' => 'object',
				'default' => array(
					'image' => true,
					'imgLinkPost' => true,
					'imgLinkNewTab' => false,
					'categories' => true,
					'linkCat' => true,
					'catNewTab' => false,
					'title' => true,
					'titleLinkPost' => true,
					'titleLinkNewTab' => false,
					'content' => true,
					'price' => true,
					'rating' => true,
					'excerpt' => 20,
					'cartButton' => true,
					'saleBadge' => true,
					'cart' => true,
					'wishlist' => true,
					'quickView' => true
				)
			),
			'itemStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'radius' => '0px',
					'textAlignment' => 'left',
					'bgColor' => '',
					'bgColorHover' => '',
					'borderColorHover' => ''
				)
			),
			'imageStyles' => array(
				'type' => 'object',
				'default' => array(
					'hoverEffect' => true,
					'margin' => array(
						'top' => '0px',
						'bottom' => '10px'
					),
					'width' => '',
					'height' => '330px',
					'objectFit' => 'cover',
					'objectPosition' => 'top',
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'overlay' => '#1c1c1c96'
				)
			),
			'saleBadge' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '2px',
						'right' => '4px',
						'bottom' => '2px',
						'left' => '4px'
					),
					'border' => array(
						'style' => '',
						'width' => '',
						'color' => ''
					),
					'radius' => '5px',
					'labelBefore' => '',
					'labelAfter' => '',
					'contentType' => 'default',
					'position' => 'left',
					'top' => 10,
					'right' => 10,
					'left' => 10,
					'rotate' => 0,
					'bgColor' => '#5566ca',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#fff'
				)
			),
			'utilIcon' => array(
				'type' => 'object',
				'default' => array(
					'size' => '16px',
					'gap' => '6px',
					'hoverShow' => true,
					'direction' => 'vertical',
					'align' => array(
						'vertical' => 'top',
						'horizontal' => 'right'
					),
					'margin' => array(
						'top' => 10,
						'left' => '10px',
						'right' => '10px'
					),
					'box' => array(
						'width' => '40px',
						'height' => '40px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '50px'
					),
					'color' => array(
						'text' => '#090b10',
						'textHover' => '#fff',
						'textActive' => '#fff',
						'bg' => '#fff',
						'bgHover' => '#f90',
						'bgActive' => '#5566ca',
						'borderHover' => '',
						'borderActive' => ''
					)
				)
			),
			'categoryStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'padding' => array(
						'top' => '2px',
						'right' => '10px',
						'bottom' => '2px',
						'left' => '10px'
					),
					'marginTop' => '0px',
					'marginBottom' => '0px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => '#fff',
					'colorHover' => '',
					'bgColor' => '#5566ca',
					'bgColorHover' => '#f90',
					'borderColorHover' => '',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'title' => array(
				'type' => 'object',
				'default' => array(
					'marginTop' => '6px',
					'marginBottom' => '6px',
					'fontSize' => '18px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '600',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#090b10',
					'colorHover' => '#f90'
				)
			),
			'priceRatingWrapper' => array(
				'type' => 'object',
				'default' => array(
					'display' => 'flex',
					'justifyContent' => 'space-between',
					'gap' => '26px'
				)
			),
			'price' => array(
				'type' => 'object',
				'default' => array(
					'marginTop' => '8px',
					'marginBottom' => '8px',
					'fontSize' => '16px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '500',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#090b10'
				)
			),
			'rating' => array(
				'type' => 'object',
				'default' => array(
					'marginTop' => '16px',
					'marginBottom' => '0px',
					'fontSize' => '14px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '500',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '',
					'iconColor' => '#f90'
				)
			),
			'cartButton' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'Add to Cart',
					'width' => '',
					'padding' => array(
						'top' => '8px',
						'right' => '16px',
						'bottom' => '8px',
						'left' => '16px'
					),
					'margin' => array(
						'top' => '10px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			),
			'tabStyles' => array(
				'type' => 'object',
				'default' => array(
					'marginTop' => '0px',
					'marginBottom' => '6px',
					'padding' => array(
						'top' => '4px',
						'right' => '10px',
						'bottom' => '4px',
						'left' => '10px'
					),
					'radius' => array(
						'top' => '0',
						'right' => '0',
						'bottom' => '0',
						'left' => '0'
					),
					'default' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'color' => '#6a6a6a',
						'bgColor' => ''
					),
					'active' => array(
						'tabOverlay' => false,
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'color' => '#5566ca',
						'bgColor' => ''
					),
					'fontSize' => '14px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '500',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'separatorStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'bgColor' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'viewScript' => array(
			'cozy-block--featured-product-tabs--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'grid' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'cozy-block/grid',
		'version' => '1.0.0',
		'title' => 'Item',
		'description' => 'Supportive block for Team and Testimonials blocks.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'parent' => array(
			'cozy-block/teams',
			'cozy-block/testimonial',
			'cozy-block/featured-content-box',
			'cozy-block/portfolio-gallery'
		)
	),
	'icon-list' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/icon-list',
		'title' => 'Icon List',
		'description' => 'Elevate your lists with style using the \'Icon List\' block, offering advanced options to effortlessly integrate and customize icons for a visually appealing and informative presentation.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconView' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'iconLayout' => array(
				'type' => 'string',
				'default' => 'fill'
			),
			'iconPosition' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'iconSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'iconColor' => array(
				'type' => 'string',
				'default' => '#5566ca'
			),
			'iconColorHover' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconOpacity' => array(
				'type' => 'number',
				'default' => 1
			),
			'iconRotate' => array(
				'type' => 'number',
				'default' => 0
			),
			'iconGap' => array(
				'type' => 'number',
				'default' => 10
			),
			'enableTitle' => array(
				'type' => 'boolean',
				'default' => true
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'enableLogo' => array(
				'type' => 'boolean',
				'default' => true
			),
			'linkType' => array(
				'type' => 'string',
				'default' => 'full'
			),
			'linkNewTab' => array(
				'type' => 'boolean',
				'default' => true
			),
			'linkNoFollow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'listStyle' => array(
				'type' => 'string',
				'default' => 'vertical'
			),
			'containerStyles' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'height' => '',
					'gap' => 10,
					'padding' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderColorHover' => '',
					'borderRadius' => array(
						'top' => 5,
						'right' => 5,
						'bottom' => 5,
						'left' => 5
					),
					'bgColor' => '',
					'bgColorHover' => ''
				)
			),
			'iconBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 5,
						'right' => 5,
						'bottom' => 5,
						'left' => 5
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderColorHover' => '',
					'borderRadius' => 50,
					'bgColor' => '#b2bcf9',
					'bgColorHover' => ''
				)
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => 'Public Sans',
					'fontSize' => 16,
					'color' => '#000',
					'colorHover' => '',
					'fontWeight' => 400,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			)
		),
		'providesContext' => array(
			'enableLogo' => 'enableLogo',
			'enableTitle' => 'enableTitle',
			'linkType' => 'linkType',
			'linkNewTab' => 'linkNewTab',
			'linkNoFollow' => 'linkNoFollow',
			'iconPosition' => 'iconPosition'
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'icon-picker' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/icon-picker',
		'title' => 'Icon Picker',
		'description' => 'Unlock endless possibilities with our \'Icon Picker\' block, providing a user-friendly interface to choose from a diverse range of icons, enhancing the visual appeal of your content.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'align' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'view' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'fill'
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0
				)
			),
			'iconSize' => array(
				'type' => 'number',
				'default' => 80
			),
			'strokeWidth' => array(
				'type' => 'number',
				'default' => 2
			),
			'iconViewBox' => array(
				'type' => 'object',
				'default' => array(
					'vx' => 0,
					'vy' => 0,
					'vw' => 24,
					'vh' => 23
				)
			),
			'iconPath' => array(
				'type' => 'string',
				'default' => 'M10.3646 0.77312L7.5304 6.51965L1.18926 7.44413C0.052104 7.60906 -0.403625 9.01097 0.421028 9.81392L5.0087 14.2844L3.92363 20.5995C3.72832 21.741 4.93058 22.596 5.93752 22.0622L11.6103 19.0804L17.283 22.0622C18.29 22.5917 19.4922 21.741 19.2969 20.5995L18.2118 14.2844L22.7995 9.81392C23.6242 9.01097 23.1684 7.60906 22.0313 7.44413L15.6901 6.51965L12.8559 0.77312C12.3481 -0.251186 10.8768 -0.264207 10.3646 0.77312Z'
			),
			'iconColor' => array(
				'type' => 'string',
				'default' => '#5566ca'
			),
			'iconColorHover' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconOpacity' => array(
				'type' => 'number',
				'default' => 1
			),
			'iconRotate' => array(
				'type' => 'number',
				'default' => 0
			),
			'boxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 5,
						'right' => 5,
						'bottom' => 5,
						'left' => 5
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderColorHover' => '',
					'borderRadius' => 50,
					'bgColor' => '#b2bcf9',
					'bgColorHover' => ''
				)
			),
			'link' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'url' => '',
					'newTab' => false,
					'noFollow' => false
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'img-compare' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/img-compare',
		'title' => 'Before/After Image (Pro)',
		'description' => 'Showcase stunning before-and-after images with a sleek, interactive Image Compare block for visual storytelling.',
		'category' => 'cozy-block',
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'url1' => '',
					'label1' => '',
					'alt1' => '',
					'url2' => '',
					'label2' => '',
					'alt2' => '',
					'height' => '460px'
				)
			),
			'label' => array(
				'type' => 'object',
				'default' => array(
					'position' => 'top',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'margin' => array(
						'top' => '',
						'left' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'bg' => ''
					)
				)
			),
			'direction' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'divider' => array(
				'type' => 'object',
				'default' => array(
					'width' => '6px',
					'icon' => array(
						'size' => '28px',
						'padding' => array(
							'top' => '12px',
							'right' => '12px',
							'bottom' => '12px',
							'left' => '12px'
						),
						'radius' => '100px'
					),
					'color' => array(
						'icon' => '#333',
						'iconBg' => '#fff',
						'bg' => '#fff'
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--img-compare--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'magazine-grid' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/magazine-grid',
		'title' => 'Magazine Grid (Pro)',
		'description' => 'Showcase your posts categorically with multiple layout options. Easily feature a specific post to highlight important content. Enhance your site\'s look and keep visitors engaged with our versatile and customizable \'Magazine Grid\' block.',
		'category' => 'cozy-block/post-magazine',
		'keywords' => array(
			'magazine',
			'post'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'fontSize' => '14px'
					)
				)
			),
			'perPage' => array(
				'type' => 'number',
				'default' => 6
			),
			'sortBy' => array(
				'type' => 'string',
				'default' => 'latest'
			),
			'exclude' => array(
				'type' => 'string',
				'default' => ''
			),
			'offset' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'featured-left'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'heading' => true,
					'subHeading' => true,
					'ignoreSticky' => true,
					'postImage' => true,
					'imgLinkPost' => true,
					'imgLinkNewTab' => false,
					'titleLinkPost' => true,
					'titleLinkNewTab' => false,
					'postContent' => true,
					'featuredPostContent' => true,
					'postExcerpt' => 20,
					'featuredPostExcerpt' => 30,
					'readMore' => true,
					'featuredReadMore' => true,
					'readMoreNewTab' => false,
					'postAuthor' => true,
					'featuredPostAuthor' => true,
					'postComments' => true,
					'feauredPostComments' => true,
					'postDate' => true,
					'enableMetaIcon' => true,
					'featuredPostDate' => true,
					'linkPostMeta' => true,
					'postMetaNewTab' => false,
					'postCategories' => true,
					'featuredPostCategories' => true,
					'enableFeaturedMetaIcon' => true,
					'linkCat' => true,
					'catNewTab' => false
				)
			),
			'headingLabel' => array(
				'type' => 'string',
				'default' => 'Featured'
			),
			'headingTag' => array(
				'type' => 'string',
				'default' => 'h2'
			),
			'headingGap' => array(
				'type' => 'string',
				'default' => '16px'
			),
			'headerBox' => array(
				'type' => 'object',
				'default' => array(
					'tabAlign' => 'space-between',
					'padding' => array(
						'top' => '6px',
						'right' => '6px',
						'bottom' => '6px',
						'left' => '6px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '12px'
					),
					'border' => array(
						'top' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'right' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'bottom' => array(
							'width' => '1px',
							'style' => 'solid',
							'color' => '#e2e2e2'
						),
						'left' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						)
					),
					'radius' => '0px',
					'color' => array(
						'bg' => ''
					)
				)
			),
			'headingStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'clipPath' => '',
					'font' => array(
						'size' => '18px',
						'weight' => '600',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'bg' => '',
						'text' => ''
					)
				)
			),
			'subHeading' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'View All',
					'tag' => 'h3',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'selectedCategory' => array(
				'type' => 'string',
				'default' => ''
			),
			'featuredPostOptions' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'imageOverlay' => false,
					'source' => 'default',
					'sticky' => true,
					'rowGap' => '26px',
					'columnGap' => '16px',
					'textAlign' => 'left',
					'image' => array(
						'margin' => array(
							'top' => '0px',
							'bottom' => '10px'
						),
						'height' => '450px',
						'radius' => '0px'
					),
					'content' => array(
						'padding' => array(
							'top' => '0px',
							'right' => '0px',
							'bottom' => '0px',
							'left' => '0px'
						),
						'margin' => array(
							'top' => 0,
							'bottom' => '0px'
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '0px',
						'outerHGap' => '0px',
						'outerVGap' => '0px',
						'position' => 'relative',
						'color' => array(
							'bg' => ''
						)
					),
					'title' => array(
						'className' => '',
						'margin' => array(
							'top' => '4px',
							'bottom' => '6px'
						),
						'font' => array(
							'size' => '22px',
							'weight' => '600',
							'family' => 'Public Sans'
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '#090b10',
							'textHover' => '#f90'
						)
					),
					'postID' => '',
					'position' => 'left'
				)
			),
			'postBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'shadowHover' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'hoverEffect' => true
				)
			),
			'postOptions' => array(
				'type' => 'object',
				'default' => array(
					'column' => 2,
					'gap' => '16px',
					'invert' => false,
					'masonry' => false,
					'imageOverlay' => false,
					'textAlign' => 'left',
					'image' => array(
						'margin' => array(
							'top' => '0px',
							'bottom' => '10px'
						),
						'width' => '',
						'height' => '220px',
						'radius' => '0px',
						'hoverEffect' => true
					),
					'content' => array(
						'gap' => '12px',
						'rowGap' => '10px',
						'padding' => array(
							'top' => '0px',
							'right' => '0px',
							'bottom' => '0px',
							'left' => '0px'
						)
					),
					'title' => array(
						'className' => '',
						'margin' => array(
							'top' => '4px',
							'bottom' => '6px'
						),
						'font' => array(
							'size' => '18px',
							'weight' => '600',
							'family' => 'Public Sans'
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '#090b10',
							'textHover' => '#f90'
						)
					)
				)
			),
			'featuredPostCategories' => array(
				'type' => 'object',
				'default' => array(
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'postCategories' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '12px',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '6px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'hoverEffect' => true,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'postMeta' => array(
				'type' => 'object',
				'default' => array(
					'margin' => array(
						'top' => '8px',
						'bottom' => '8px'
					),
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'featured' => '#5566ca',
						'featuredHover' => '#f90',
						'text' => '#5566ca',
						'textHover' => '#f90'
					)
				)
			),
			'featuredReadMore' => array(
				'type' => 'object',
				'default' => array(
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'readMore' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '4px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'textAlign' => 'right',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'ajaxLoader' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'type' => 'default',
					'label' => 'Load More',
					'loadingText' => '',
					'minWidth' => '95px',
					'content' => 10,
					'padding' => array(
						'top' => '8px',
						'right' => '14px',
						'bottom' => '8px',
						'left' => '14px'
					),
					'margin' => array(
						'top' => '26px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'textAlign' => 'center',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'spinnerPrimary' => '#fff',
						'spinnerSecondary' => '#989898',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--magazine-grid--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'magazine-list' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/magazine-list',
		'title' => 'Magazine List (Pro)',
		'description' => 'Showcase your posts categorically with multiple layout options. Easily feature a specific post to highlight important content. Enhance your site\'s look and keep visitors engaged with our versatile and customizable \'Magazine List\' block.',
		'category' => 'cozy-block/post-magazine',
		'keywords' => array(
			'magazine',
			'post'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'fontSize' => '14px'
					)
				)
			),
			'perPage' => array(
				'type' => 'number',
				'default' => 6
			),
			'sortBy' => array(
				'type' => 'string',
				'default' => 'latest'
			),
			'exclude' => array(
				'type' => 'string',
				'default' => ''
			),
			'offset' => array(
				'type' => 'string',
				'default' => ''
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'heading' => true,
					'subHeading' => true,
					'ignoreSticky' => true,
					'postImage' => true,
					'imgLinkPost' => true,
					'imgLinkNewTab' => false,
					'titleLinkPost' => true,
					'titleLinkNewTab' => false,
					'postContent' => true,
					'postExcerpt' => 20,
					'readMore' => true,
					'readMoreNewTab' => false,
					'postAuthor' => true,
					'postComments' => true,
					'postDate' => true,
					'linkPostMeta' => true,
					'postMetaNewTab' => false,
					'postCategories' => true,
					'linkCat' => true,
					'catNewTab' => false
				)
			),
			'headingLabel' => array(
				'type' => 'string',
				'default' => 'Featured'
			),
			'headingTag' => array(
				'type' => 'string',
				'default' => 'h2'
			),
			'headingGap' => array(
				'type' => 'string',
				'default' => '16px'
			),
			'headerBox' => array(
				'type' => 'object',
				'default' => array(
					'tabAlign' => 'space-between',
					'padding' => array(
						'top' => '6px',
						'right' => '6px',
						'bottom' => '6px',
						'left' => '6px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '12px'
					),
					'border' => array(
						'top' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'right' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'bottom' => array(
							'width' => '1px',
							'style' => 'solid',
							'color' => '#e2e2e2'
						),
						'left' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						)
					),
					'radius' => '0px',
					'color' => array(
						'bg' => ''
					)
				)
			),
			'headingStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'clipPath' => '',
					'font' => array(
						'size' => '18px',
						'weight' => '600',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'bg' => '',
						'text' => ''
					)
				)
			),
			'subHeading' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'View All',
					'tag' => 'h3',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'selectedCategory' => array(
				'type' => 'string',
				'default' => ''
			),
			'postBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'shadowHover' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'hoverEffect' => true
				)
			),
			'postOptions' => array(
				'type' => 'object',
				'default' => array(
					'column' => 1,
					'gap' => '16px',
					'rowReverse' => false,
					'textAlign' => 'left',
					'image' => array(
						'position' => 'left',
						'width' => '30%',
						'height' => '200px',
						'radius' => '0px',
						'hoverEffect' => true
					),
					'content' => array(
						'gap' => '10px',
						'padding' => array(
							'top' => '0px',
							'right' => '0px',
							'bottom' => '0px',
							'left' => '0px'
						)
					),
					'title' => array(
						'className' => '',
						'margin' => array(
							'top' => '4px',
							'bottom' => '6px'
						),
						'font' => array(
							'size' => '18px',
							'weight' => '600',
							'family' => 'Public Sans'
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '#090b10',
							'textHover' => '#f90'
						)
					)
				)
			),
			'postCategories' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '12px',
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '6px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'hoverEffect' => true,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'postMeta' => array(
				'type' => 'object',
				'default' => array(
					'enableIcon' => true,
					'margin' => array(
						'top' => '8px',
						'bottom' => '8px'
					),
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#5566ca',
						'textHover' => '#f90'
					)
				)
			),
			'readMore' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '4px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'textAlign' => 'right',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'ajaxLoader' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'type' => 'default',
					'label' => 'Load More',
					'loadingText' => '',
					'minWidth' => '95px',
					'content' => 10,
					'padding' => array(
						'top' => '8px',
						'right' => '14px',
						'bottom' => '8px',
						'left' => '14px'
					),
					'margin' => array(
						'top' => '26px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'textAlign' => 'center',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'spinnerPrimary' => '#fff',
						'spinnerSecondary' => '#989898',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--magazine-list--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'mega-menu' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/mega-menu',
		'title' => 'Advanced Mega Menu',
		'description' => 'Our user-friendly \'Advanced Mega Menu Block\' is the ultimate solution for effortlessly organizing your site\'s content into stylish and efficient multi-column layouts, enhancing navigation for your visitors.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'namespace' => array(
				'type' => 'string',
				'default' => 'cozy-block/mega-menu'
			),
			'menuDisplay' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'menuWidth' => array(
				'type' => 'number',
				'default' => 200
			),
			'displayEvent' => array(
				'type' => 'string',
				'default' => 'hover'
			),
			'dropdownWidth' => array(
				'type' => 'number',
				'default' => 980
			),
			'menuGap' => array(
				'type' => 'number',
				'default' => 30
			),
			'contentGap' => array(
				'type' => 'number',
				'default' => 40
			),
			'megaMenuContentGap' => array(
				'type' => 'number',
				'default' => 20
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 14,
						'vh' => 25
					),
					'activeViewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 14,
						'vh' => 25
					),
					'path' => 'M10.8737 12.7121C10.9908 12.595 10.9908 12.405 10.8737 12.2879L1.00502 2.41924C0.887867 2.30208 0.887867 2.11213 1.00502 1.99497L1.99497 1.00502C2.11213 0.887867 2.30208 0.887867 2.41924 1.00502L13.7021 12.2879C13.8192 12.405 13.8192 12.595 13.7021 12.7121L2.41924 23.995C2.30208 24.1121 2.11213 24.1121 1.99497 23.995L1.00502 23.005C0.887867 22.8879 0.887868 22.6979 1.00503 22.5808L10.8737 12.7121Z',
					'activePath' => '',
					'view' => 'default',
					'layout' => 'fill',
					'size' => 10,
					'gap' => 0,
					'rotate' => 90,
					'rotateActive' => 0,
					'opacity' => 1,
					'color' => '#5566ca'
				)
			),
			'template' => array(
				'type' => 'object',
				'default' => array(
					
				)
			),
			'megaMenuTemplates' => array(
				'type' => 'object',
				'default' => array(
					
				)
			),
			'responsive' => array(
				'type' => 'object',
				'default' => array(
					'width' => 768,
					'slide' => 'left',
					'padding' => array(
						'top' => 20,
						'right' => 5,
						'bottom' => 5,
						'left' => 5
					),
					'iconPosition' => 'right',
					'iconTop' => 15,
					'gap' => 10,
					'bgColor' => '#e2e2e2',
					'openIcon' => array(
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 22,
							'vh' => 20
						),
						'path' => 'M0.78125 3.51562H21.0938C21.5252 3.51562 21.875 3.16587 21.875 2.73438V0.78125C21.875 0.349756 21.5252 0 21.0938 0H0.78125C0.349756 0 0 0.349756 0 0.78125V2.73438C0 3.16587 0.349756 3.51562 0.78125 3.51562ZM0.78125 11.3281H21.0938C21.5252 11.3281 21.875 10.9784 21.875 10.5469V8.59375C21.875 8.16226 21.5252 7.8125 21.0938 7.8125H0.78125C0.349756 7.8125 0 8.16226 0 8.59375V10.5469C0 10.9784 0.349756 11.3281 0.78125 11.3281ZM0.78125 19.1406H21.0938C21.5252 19.1406 21.875 18.7909 21.875 18.3594V16.4062C21.875 15.9748 21.5252 15.625 21.0938 15.625H0.78125C0.349756 15.625 0 15.9748 0 16.4062V18.3594C0 18.7909 0.349756 19.1406 0.78125 19.1406Z',
						'boxWidth' => '30px',
						'boxHeight' => '30px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '100px',
						'size' => '14px',
						'color' => array(
							'icon' => '#fff',
							'iconHover' => '',
							'bg' => '#0c50ff',
							'bgHover' => '#f90',
							'borderHover' => ''
						)
					),
					'closeIcon' => array(
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 12,
							'vh' => 12
						),
						'path' => 'M10.9449 9.66003C11.3049 10.02 11.3049 10.58 10.9449 10.94C10.7649 11.12 10.5449 11.2 10.3049 11.2C10.0649 11.2 9.84493 11.12 9.66493 10.94L6.00492 7.28004L2.34491 10.94C2.16491 11.12 1.94492 11.2 1.70492 11.2C1.46492 11.2 1.24493 11.12 1.06493 10.94C0.704932 10.58 0.704932 10.02 1.06493 9.66003L4.72492 6.00004L1.06493 2.34004C0.704932 1.98004 0.704932 1.42004 1.06493 1.06004C1.42493 0.700037 1.98491 0.700037 2.34491 1.06004L6.00492 4.72003L9.66493 1.06004C10.0249 0.700037 10.5849 0.700037 10.9449 1.06004C11.3049 1.42004 11.3049 1.98004 10.9449 2.34004L7.2849 6.00004L10.9449 9.66003Z',
						'horizontalSpacing' => 15,
						'boxWidth' => '30px',
						'boxHeight' => '30px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '',
						'size' => '14px',
						'color' => array(
							'icon' => '#fff',
							'iconHover' => '',
							'bg' => '#0c50ff',
							'bgHover' => '#f90',
							'borderHover' => ''
						)
					)
				)
			),
			'menuStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 16,
						'right' => 5,
						'bottom' => 16,
						'left' => 5
					),
					'itemPadding' => array(
						'top' => 5,
						'right' => 5,
						'bottom' => 5,
						'left' => 5
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderRadius' => 10,
					'itemBorderRadius' => 10,
					'bgColor' => '#fff',
					'bgColorActive' => '',
					'colorActive' => '',
					'textHoverColor' => '',
					'itemHoverColor' => ''
				)
			),
			'submenuStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 5,
						'right' => 5,
						'bottom' => 5,
						'left' => 5
					),
					'minWidth' => 150,
					'itemSpacing' => 10,
					'boxShadow' => array(
						'enabled' => false,
						'color' => '#000',
						'marginTop' => 0,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 10,
						'spread' => 0,
						'position' => ''
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderRadius' => 10,
					'bgColor' => '#fff',
					'textHoverColor' => '',
					'itemHoverColor' => ''
				)
			),
			'iconBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'width' => '20px',
					'height' => '20px',
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderColorHover' => '',
					'borderRadius' => 50,
					'bgColor' => '',
					'bgColorHover' => ''
				)
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => 'Public Sans',
					'fontSize' => 16,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#000',
					'bgColorActive' => '',
					'colorActive' => '',
					'fontWeight' => 400
				)
			)
		),
		'editorScript' => array(
			'file:./index.js'
		),
		'editorStyle' => array(
			'file:./index.css'
		),
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--mega-menu--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'modal' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/modal',
		'title' => 'Popup Builder (Pro)',
		'description' => 'Capture attention with our \'Popup Builder\' block, a pop-up window designed to showcase offers and promotions, providing a compelling way to communicate with your audience.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'boxWidth' => array(
				'type' => 'number',
				'default' => 645
			),
			'modalType' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'modalEvent' => array(
				'type' => 'string',
				'default' => 'load'
			),
			'loadOnRefresh' => array(
				'type' => 'boolean',
				'default' => false
			),
			'backgroundOverlayColor' => array(
				'type' => 'string',
				'default' => '#222222ad'
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconStyles' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'alignment' => 'right',
					'horizontalSpacing' => -50,
					'verticalSpacing' => -50,
					'boxWidth' => 36,
					'boxHeight' => 36,
					'radius' => 100,
					'iconSize' => 15,
					'bg' => '#0c50ff',
					'bgHover' => '#f90',
					'iconColor' => '#fff',
					'iconColorHover' => '',
					'border' => '1px solid #000',
					'borderRadius' => 20
				)
			),
			'clickButtonStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 10,
						'right' => 10,
						'bottom' => 10,
						'left' => 10
					),
					'content' => 'default',
					'label' => 'Open Popup',
					'imgURL' => 'Open Popup',
					'imgWidth' => 100,
					'imgHeight' => 100,
					'imgRadius' => 0,
					'imgHasPulse' => 0,
					'fontSize' => 14,
					'fontFamily' => 'Public Sans',
					'fontWeight' => '500',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'justify' => 'center',
					'borderType' => 'none',
					'borderWidth' => array(
						'top' => 1,
						'right' => 1,
						'bottom' => 1,
						'left' => 1
					),
					'borderColor' => '#000',
					'borderRadius' => 60,
					'color' => '#0ba986',
					'colorHover' => '',
					'bgColor' => '#dcf2ec',
					'bgColorHover' => ''
				)
			),
			'padding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 50,
					'right' => 50,
					'bottom' => 50,
					'left' => 50
				)
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'bottom' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--modal--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'news-ticker' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/news-ticker',
		'title' => 'News Ticker (Pro)',
		'description' => 'Stay informed with our \'News Ticker\' block, delivering real-time headlines in a scrolling format for an engaging and dynamic user experience.',
		'category' => 'cozy-block/post-magazine',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => false
			),
			'height' => array(
				'type' => 'number',
				'default' => 200
			),
			'carouselOptions' => array(
				'type' => 'object',
				'default' => array(
					'navigation' => array(
						'enabled' => true,
						'verticalGap' => 0,
						'horizontalGap' => 60,
						'iconSize' => 15,
						'iconBoxWidth' => 35,
						'iconBoxHeight' => 35,
						'borderRadius' => 50,
						'backgroundColor' => '#fff',
						'color' => '#007cba',
						'backgroundColorHover' => '#007cba',
						'colorHover' => '#fff'
					),
					'sliderOptions' => array(
						'loop' => false,
						'autoplay' => false,
						'slidesPerView' => 1,
						'spaceBetween' => 30,
						'speed' => 700
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--news-ticker--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'popular-post' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/popular-post',
		'title' => 'Popular Post (Pro)',
		'description' => 'Explore trending topics effortlessly with our \'Popular Post\' block, showcasing a curated selection of the latest and most engaging content for a quick and dynamic browsing experience.',
		'category' => 'cozy-block/post-magazine',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'fontSize' => '14px'
					)
				)
			),
			'display' => array(
				'type' => 'string',
				'default' => 'list'
			),
			'column' => array(
				'type' => 'number',
				'default' => 1
			),
			'columnGap' => array(
				'type' => 'string',
				'default' => '16px'
			),
			'height' => array(
				'type' => 'string',
				'default' => '200px'
			),
			'gap' => array(
				'type' => 'string',
				'default' => '20px'
			),
			'perPage' => array(
				'type' => 'number',
				'default' => 6
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'image' => true,
					'imgLinkPost' => true,
					'imgLinkNewTab' => false,
					'category' => true,
					'linkCat' => true,
					'catNewTab' => false,
					'titleLinkPost' => true,
					'titleLinkNewTab' => false,
					'content' => true,
					'excerpt' => 20,
					'author' => true,
					'comments' => true,
					'date' => true,
					'enableMetaIcon' => true,
					'linkPostMeta' => true,
					'postMetaNewTab' => false
				)
			),
			'itemStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '10px',
						'right' => '10px',
						'bottom' => '10px',
						'left' => '10px'
					),
					'border' => array(
						'width' => '1px',
						'style' => 'solid',
						'color' => '#e2e2e2'
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'boxShadow' => array(
						'enabled' => false,
						'color' => '#000',
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 10,
						'spread' => 0,
						'position' => ''
					),
					'borderColorHover' => '',
					'bgColor' => '',
					'bgColorHover' => ''
				)
			),
			'imageStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'width' => '220px',
					'height' => '120px',
					'radius' => '0px'
				)
			),
			'categoryStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'padding' => array(
						'top' => '2px',
						'right' => '10px',
						'bottom' => '2px',
						'left' => '10px'
					),
					'marginTop' => '0px',
					'marginBottom' => '0px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => '#fff',
					'colorHover' => '',
					'bgColor' => '#5566ca',
					'bgColorHover' => '#f90',
					'borderColorHover' => '',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'titleStyles' => array(
				'type' => 'object',
				'default' => array(
					'className' => '',
					'marginTop' => '6px',
					'marginBottom' => '4px',
					'fontSize' => '18px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '600',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#090b10',
					'colorHover' => '#f90'
				)
			),
			'dateStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'marginTop' => '0px',
					'marginBottom' => '6px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => '#5566ca',
					'colorHover' => '#f90',
					'bgColor' => '',
					'bgColorHover' => '',
					'borderColorHover' => '',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => '10px',
					'height' => '10px',
					'radius' => '10px',
					'gap' => '4px',
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '0px'
					),
					'color' => array(
						'default' => '#252525',
						'defaultHover' => '#a5a5a5',
						'active' => '#007cba',
						'activeHover' => '#164861'
					),
					'align' => 'center',
					'top' => 0,
					'left' => '0px',
					'right' => '0px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverEffect' => true,
					'horizontalGap' => '50px',
					'verticalPosition' => 0,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'borderColorHover' => '',
					'bgColor' => '#007cba',
					'bgColorHover' => '#f90',
					'color' => '#fff',
					'colorHover' => ''
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => true,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 2500
					),
					'slidesPerView' => 1,
					'spaceBetween' => 30,
					'speed' => 1500
				)
			),
			'carouselOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => true,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'delay' => 2500
					),
					'slidesPerView' => 3,
					'spaceBetween' => 30,
					'speed' => 1500,
					'effect' => 'slide'
				)
			),
			'ajaxLoader' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'type' => 'default',
					'label' => 'Load More',
					'loadingText' => '',
					'minWidth' => '95px',
					'content' => 10,
					'padding' => array(
						'top' => '8px',
						'right' => '14px',
						'bottom' => '8px',
						'left' => '14px'
					),
					'margin' => array(
						'top' => '26px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'textAlign' => 'center',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'spinnerPrimary' => '#fff',
						'spinnerSecondary' => '#989898',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--popular-post--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'portfolio-gallery' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/portfolio-gallery',
		'title' => 'Portfolio Gallery',
		'description' => 'Showcase your work with finesse using the \'Portfolio Gallery\' block, designed for creating advanced and visually stunning layouts to present your portfolio in a captivating manner.',
		'category' => 'cozy-block',
		'keywords' => array(
			'gallery',
			'image',
			'img',
			'portfolio'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'spacing' => array(
				'padding' => true
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'namespace' => array(
				'type' => 'string',
				'default' => 'cozy-block/portfolio-gallery'
			),
			'source' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'innerBlocks' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'orderBy' => array(
				'type' => 'string',
				'default' => 'date/desc'
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'layoutType' => array(
				'type' => 'string',
				'default' => 'gallery'
			),
			'perPage' => array(
				'type' => 'number',
				'default' => -1
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'portfolioTemplates' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'portfolioTax' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'portfolioCat' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'catInit' => array(
				'type' => 'boolean',
				'default' => false
			),
			'imageHoverEffect' => array(
				'type' => 'boolean',
				'default' => true
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'title' => true,
					'excerpt' => true,
					'excerptType' => 'default',
					'excerptCount' => 20,
					'icon' => true,
					'button' => true
				)
			),
			'featuredImage' => array(
				'type' => 'object',
				'default' => array(
					'link' => array(
						'enabled' => true,
						'newTab' => false,
						'noFollow' => false
					),
					'width' => '',
					'height' => '350px',
					'margin' => array(
						'top' => '',
						'bottom' => '10px'
					),
					'objectFit' => 'cover',
					'radius' => '',
					'overlayColor' => '#00000080'
				)
			),
			'postTitle' => array(
				'type' => 'object',
				'default' => array(
					'tag' => 'h4',
					'link' => array(
						'enabled' => true,
						'newTab' => false,
						'noFollow' => false
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'textHover' => ''
					)
				)
			),
			'overlayContent' => array(
				'type' => 'object',
				'default' => array(
					'position' => 'bottom left',
					'padding' => array(
						'top' => '10px',
						'right' => '10px',
						'bottom' => '10px',
						'left' => '10px'
					),
					'button' => array(
						'link' => array(
							'enabled' => true,
							'newTab' => false,
							'noFollow' => false
						),
						'label' => 'Read More',
						'padding' => array(
							'top' => '',
							'right' => '',
							'bottom' => '',
							'left' => ''
						),
						'margin' => array(
							'top' => '',
							'bottom' => ''
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '',
						'font' => array(
							'size' => '14px',
							'weight' => '',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'btnText' => '#fff',
						'btnTextHover' => '#f90',
						'btnBg' => '',
						'btnBgHover' => '',
						'btnBorderHover' => ''
					)
				)
			),
			'popup' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => '70%',
					'height' => '600px',
					'responsiveFullWidth' => 767,
					'enableOptions' => array(
						'image' => true,
						'cat' => true,
						'title' => true,
						'excerpt' => true,
						'excerptType' => 'default',
						'excerptCount' => 20,
						'cpt' => true,
						'cptYear' => true,
						'yearLabel' => 'Project Year',
						'cptClient' => true,
						'clientLabel' => 'Client',
						'cptSkills' => true,
						'skillsLabel' => 'Skills',
						'cptURL' => true,
						'urlLabel' => 'Website',
						'urlNewTab' => false,
						'urlNoFollow' => false
					),
					'padding' => array(
						'top' => '40px',
						'right' => '40px',
						'bottom' => '40px',
						'left' => '40px'
					),
					'featuredImage' => array(
						'link' => array(
							'enabled' => true,
							'newTab' => false,
							'noFollow' => false
						),
						'width' => '',
						'height' => '',
						'margin' => array(
							'top' => '',
							'bottom' => '16px'
						),
						'radius' => ''
					),
					'category' => array(
						'gap' => '10px',
						'rowGap' => '',
						'stackLayout' => true,
						'padding' => array(
							'top' => '2px',
							'right' => '10px',
							'bottom' => '2px',
							'left' => '10px'
						),
						'margin' => array(
							'top' => '',
							'bottom' => '10px'
						),
						'border' => array(
							'width' => '1px',
							'style' => 'solid',
							'color' => '#0c50ff'
						),
						'radius' => '10px',
						'font' => array(
							'size' => '14px',
							'weight' => '',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					),
					'postTitle' => array(
						'link' => array(
							'enabled' => true,
							'newTab' => false,
							'noFollow' => false
						),
						'margin' => array(
							'top' => '',
							'bottom' => ''
						),
						'font' => array(
							'size' => '',
							'weight' => '',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					),
					'cpt' => array(
						'gap' => '10px',
						'padding' => array(
							'top' => '',
							'right' => '',
							'bottom' => '',
							'left' => ''
						),
						'margin' => array(
							'top' => '16px',
							'bottom' => ''
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => ''
					),
					'cptTitle' => array(
						'font' => array(
							'size' => '16px',
							'weight' => '500',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					),
					'cptSubtitle' => array(
						'font' => array(
							'size' => '',
							'weight' => '',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					),
					'font' => array(
						'size' => '14px',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'cat' => '#0c50ff',
						'catBg' => '',
						'postTitle' => '',
						'cptTitle' => '',
						'cptSubtitle' => '',
						'link' => '',
						'linkHover' => '#f90',
						'bg' => '',
						'overlay' => '',
						'closeIcon' => ''
					)
				)
			),
			'galleryOptions' => array(
				'type' => 'object',
				'default' => array(
					'textAlign' => 'left',
					'icon' => array(
						'size' => '28px',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 24,
							'vh' => 24
						),
						'path' => 'M17.3051 12.1C17.3051 12.6 16.9051 13 16.4051 13H12.8051V16.4C12.8051 16.9 12.4051 17.3 11.9051 17.3C11.4051 17.3 11.0051 16.9 11.0051 16.4V13H7.60511C7.10511 13 6.70511 12.6 6.70511 12.1C6.70511 11.6 7.10511 11.2 7.60511 11.2H11.0051V7.6C11.0051 7.1 11.4051 6.7 11.9051 6.7C12.4051 6.7 12.8051 7.1 12.8051 7.6V11.2H16.4051C16.9051 11.2 17.3051 11.6 17.3051 12.1Z',
						'boxWidth' => '',
						'boxHeight' => '',
						'padding' => array(
							'top' => '5px',
							'right' => '5px',
							'bottom' => '5px',
							'left' => '5px'
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '100px'
					),
					'featuredImage' => array(
						'width' => '',
						'height' => '',
						'objectFit' => 'cover',
						'objectPosition' => 'top'
					),
					'closeIcon' => array(
						'top' => '',
						'right' => '',
						'size' => '15px',
						'boxWidth' => '26px',
						'boxHeight' => '26px',
						'padding' => array(
							'top' => '',
							'right' => '',
							'bottom' => '',
							'left' => ''
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '100px'
					),
					'navIcon' => array(
						'size' => '15px',
						'boxWidth' => '35px',
						'boxHeight' => '35px',
						'padding' => array(
							'top' => '',
							'right' => '',
							'bottom' => '',
							'left' => ''
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '5px'
					),
					'color' => array(
						'icon' => '#000',
						'iconHover' => '#fff',
						'iconBg' => '#fff',
						'iconBgHover' => '#f90',
						'iconBorderHover' => '',
						'closeIcon' => '#000',
						'closeIconHover' => '#fff',
						'closeIconBg' => '#fff',
						'closeIconBgHover' => '#f90',
						'closeIconBorderHover' => '#f90',
						'bullet' => '#fff',
						'navIcon' => '#000',
						'navIconHover' => '#fff',
						'navIconBg' => '#cacaca',
						'navIconBgHover' => '#f90',
						'navIconBorderHover' => '',
						'overlay' => '#000000b0'
					)
				)
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'displayColumn' => 3,
					'columnGap' => '26px',
					'rowGap' => '26px',
					'isotopeFilter' => false,
					'masonryEnabled' => false
				)
			),
			'isotopeFilter' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'rowGap' => '10px',
					'justify' => 'center',
					'search' => array(
						'enabled' => false,
						'position' => 'top',
						'width' => '',
						'padding' => array(
							'top' => '',
							'right' => '',
							'bottom' => '',
							'left' => ''
						),
						'margin' => array(
							'top' => '',
							'bottom' => ''
						),
						'shadow' => array(
							'enabled' => false,
							'horizontal' => '0',
							'vertical' => '0',
							'blur' => '0',
							'spread' => '0',
							'color' => '',
							'position' => ''
						)
					),
					'margin' => array(
						'top' => '',
						'bottom' => '20px'
					),
					'padding' => array(
						'top' => '2px',
						'right' => '10px',
						'bottom' => '2px',
						'left' => '10px'
					),
					'border' => array(
						'width' => '1px',
						'style' => 'solid',
						'color' => '#9a9a9a'
					),
					'active' => array(
						'border' => array(
							'width' => '1px',
							'style' => 'solid',
							'color' => '#ffffff00'
						)
					),
					'radius' => '5px',
					'font' => array(
						'size' => '14px',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => '',
						'activeText' => '#fff',
						'bg' => '',
						'bgHover' => '',
						'activeBg' => '#0c50ff',
						'borderHover' => ''
					)
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'direction' => 'horizontal',
					'height' => '430px',
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 2500
					),
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 26,
					'speed' => 1500
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'default' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'color' => '#6a6a6a',
						'colorHover' => ''
					),
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px',
						'color' => '#f90',
						'colorHover' => ''
					),
					'align' => 'center',
					'verticalPosition' => 0,
					'left' => '0px',
					'right' => '0px',
					'gap' => '4px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverShow' => true,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'borderColorHover' => '',
					'bgColor' => '#007cba',
					'bgColorHover' => '#f90',
					'color' => '#fff',
					'colorHover' => ''
				)
			),
			'ajaxButton' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'label' => 'Load More',
					'contentLoad' => 10,
					'padding' => array(
						'top' => '10px',
						'right' => '20px',
						'bottom' => '10px',
						'left' => '20px'
					),
					'margin' => array(
						'top' => '16px',
						'bottom' => ''
					),
					'border' => array(
						'width' => '',
						'type' => '',
						'color' => ''
					),
					'radius' => '10px',
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'bg' => '#0c50ff',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--portfolio-gallery--frontend-script',
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'portfolio-gallery-meta' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/portfolio-gallery-meta',
		'title' => 'Portfolio Gallery Meta',
		'description' => 'Fetches the meta field for portfolio gallery.',
		'category' => 'cozy-block',
		'supports' => array(
			'spacing' => array(
				'margin' => true
			)
		),
		'attributes' => array(
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'meta' => array(
				'type' => 'string',
				'default' => 'year'
			),
			'metaTitle' => array(
				'type' => 'string',
				'default' => 'Project Year'
			),
			'cat' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '',
					'rowGap' => '',
					'padding' => array(
						'top' => '5px',
						'right' => '12px',
						'bottom' => '5px',
						'left' => '12px'
					),
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'border' => array(
						'width' => '1px',
						'style' => 'solid',
						'color' => '#0c50ff'
					),
					'radius' => '5px',
					'font' => array(
						'size' => '13px',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#0c50ff',
						'bg' => ''
					)
				)
			),
			'title' => array(
				'type' => 'object',
				'default' => array(
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => ''
					)
				)
			),
			'link' => array(
				'type' => 'object',
				'default' => array(
					'newTab' => false,
					'noFollow' => false
				)
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'post-carousel' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/post-carousel',
		'title' => 'Post Grid/Carousel',
		'description' => 'Immerse yourself in an engaging browsing journey using our \'Post Carousel\' block, showcasing visually stunning and interactive featured content for effortless exploration.',
		'category' => 'cozy-block/post-magazine',
		'keywords' => array(
			'post',
			'carousel',
			'grid'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'carousel'
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'displayColumn' => 3,
					'masonryEnabled' => false,
					'columnGap' => 30
				)
			),
			'carouselOptions' => array(
				'type' => 'object',
				'default' => array(
					'pagination' => array(
						'enabled' => true,
						'width' => 10,
						'height' => 10,
						'borderRadius' => 10,
						'activeWidth' => 10,
						'activeHeight' => 10,
						'activeBorder' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'activeOffset' => 0,
						'gap' => 4,
						'activeBorderRadius' => 10,
						'activeColor' => '#007cba',
						'color' => '#252525',
						'activeColorHover' => '#164861',
						'colorHover' => '#a5a5a5',
						'align' => 'center',
						'positionVertical' => -20,
						'left' => '0px',
						'right' => '0px'
					),
					'navigation' => array(
						'enabled' => true,
						'iconSize' => 15,
						'iconBoxWidth' => 35,
						'iconBoxHeight' => 35,
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'borderRadius' => 50,
						'backgroundColor' => '#fff',
						'color' => '#007cba',
						'backgroundColorHover' => '#007cba',
						'colorHover' => '#fff',
						'borderHover' => ''
					),
					'sliderOptions' => array(
						'autoplay' => array(
							'enabled' => true,
							'pauseOnMouseEnter' => true,
							'reverseDirection' => false,
							'delay' => 2500
						),
						'loop' => false,
						'centeredSlides' => false,
						'slidesPerView' => 3,
						'spaceBetween' => 30,
						'speed' => 700
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--post-carousel--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'post-comments' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/post-comments',
		'title' => 'Post Comments (Pro)',
		'description' => 'Unlock the Conversation Power! See what sparks discussions with our \'Post Comments\' block. Gain valuable insights to refine your engagement strategy and foster meaningful interactions.',
		'category' => 'cozy-block/post-magazine',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'usesContext' => array(
			'postId',
			'postType',
			'queryId'
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'postType' => array(
				'type' => 'string',
				'default' => ''
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'labelBefore' => true,
					'icon' => true,
					'comments' => true,
					'labelAfter' => true
				)
			),
			'linkNewTab' => array(
				'type' => 'boolean',
				'default' => false
			),
			'labelBefore' => array(
				'type' => 'string',
				'default' => ''
			),
			'labelAfter' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'string',
				'default' => 'inline'
			),
			'contentJustify' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentGap' => array(
				'type' => 'string',
				'default' => '0px'
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'size' => '16px',
					'position' => 'before',
					'path' => 'M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z',
					'view' => 'default',
					'layout' => 'fill',
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 25,
						'vh' => 20
					),
					'strokeWidth' => 1,
					'rotate' => 0,
					'opacity' => 100,
					'gap' => '4px',
					'color' => '#5566ca',
					'colorHover' => '#f90'
				)
			),
			'iconBox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '5px',
						'right' => '5px',
						'bottom' => '5px',
						'left' => '5px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'borderRadius' => '100px',
					'bgColor' => '#b2bcf9',
					'bgColorHover' => ''
				)
			),
			'label' => array(
				'type' => 'object',
				'default' => array(
					'fontSize' => '14px',
					'fontFamily' => '',
					'fontWeight' => '400',
					'color' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'post-slider' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/post-slider',
		'title' => 'Post Slider (Pro)',
		'description' => 'Discover an interactive showcase of content through our \'Post Slider\' feature, presenting a visually captivating carousel of posts for an engaging and dynamic browsing experience.',
		'category' => 'cozy-block/post-magazine',
		'keywords' => array(
			'post',
			'slider'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'carouselOptions' => array(
				'type' => 'object',
				'default' => array(
					'smoothTransition' => false,
					'pagination' => array(
						'enabled' => true,
						'width' => 10,
						'height' => 10,
						'borderRadius' => 10,
						'activeWidth' => 10,
						'activeHeight' => 10,
						'activeBorder' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'activeOffset' => 0,
						'activeBorderRadius' => 10,
						'activeColor' => '#007cba',
						'color' => '#252525',
						'activeColorHover' => '#164861',
						'colorHover' => '#a5a5a5',
						'align' => 'center',
						'positionVertical' => 5,
						'gap' => 4,
						'left' => '0px',
						'right' => '0px'
					),
					'navigation' => array(
						'enabled' => true,
						'iconSize' => 15,
						'iconBoxWidth' => 35,
						'iconBoxHeight' => 35,
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'borderRadius' => 50,
						'backgroundColor' => '#fff',
						'color' => '#007cba',
						'backgroundColorHover' => '#007cba',
						'colorHover' => '#fff',
						'borderHover' => ''
					),
					'sliderOptions' => array(
						'loop' => false,
						'autoplay' => array(
							'enabled' => true,
							'pauseOnMouseEnter' => true,
							'reverseDirection' => false,
							'delay' => 3000
						),
						'centeredSlides' => false,
						'slidesPerView' => 1,
						'spaceBetween' => 30,
						'speed' => 2000
					)
				)
			),
			'thumbOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => false,
					'centeredSlides' => false,
					'responsive' => array(
						'enabled' => false,
						'viewport' => 768,
						'width' => '40px',
						'height' => '40px'
					),
					'width' => '150px',
					'height' => '150px',
					'horizontalSpacing' => '0px',
					'verticalSpacing' => '0px',
					'direction' => 'horizontal',
					'horizontalJustify' => 'center',
					'verticalJustify' => 'center',
					'position' => 'left',
					'gap' => '0px',
					'radius' => '0px',
					'default' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => 0,
						'opacity' => 100
					),
					'active' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => 0,
						'opacity' => 100
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--post-slider--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'post-views' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/post-views',
		'title' => 'Post Views (Pro)',
		'description' => 'Unlock the Engagement Power! See what captivates your audience with our \'Post Views\' block. Gain valuable insights to refine your content strategy and maximize impact.',
		'category' => 'cozy-block/post-magazine',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'usesContext' => array(
			'postId',
			'postType',
			'queryId'
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'postType' => array(
				'type' => 'string',
				'default' => ''
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'labelBefore' => true,
					'icon' => true,
					'views' => true,
					'labelAfter' => true
				)
			),
			'labelBefore' => array(
				'type' => 'string',
				'default' => ''
			),
			'labelAfter' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'string',
				'default' => 'inline'
			),
			'contentJustify' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentGap' => array(
				'type' => 'string',
				'default' => '0px'
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'size' => '16px',
					'position' => 'before',
					'path' => 'M24.8489 7.69965C22.4952 3.1072 17.8355 0 12.5 0C7.16447 0 2.50345 3.10938 0.151018 7.70009C0.0517306 7.89649 0 8.11348 0 8.33355C0 8.55362 0.0517306 8.77061 0.151018 8.96701C2.50475 13.5595 7.16447 16.6667 12.5 16.6667C17.8355 16.6667 22.4965 13.5573 24.8489 8.96658C24.9482 8.77018 25 8.55319 25 8.33312C25 8.11304 24.9482 7.89605 24.8489 7.69965ZM12.5 14.5833C11.2638 14.5833 10.0555 14.2168 9.02766 13.53C7.99985 12.8433 7.19878 11.8671 6.72573 10.7251C6.25268 9.58307 6.12891 8.3264 6.37007 7.11402C6.61123 5.90164 7.20648 4.78799 8.08056 3.91392C8.95464 3.03984 10.0683 2.44458 11.2807 2.20343C12.493 1.96227 13.7497 2.08604 14.8917 2.55909C16.0338 3.03213 17.0099 3.83321 17.6967 4.86102C18.3834 5.88883 18.75 7.0972 18.75 8.33333C18.7504 9.15421 18.589 9.96711 18.275 10.7256C17.9611 11.484 17.5007 12.1732 16.9203 12.7536C16.3398 13.3341 15.6507 13.7944 14.8922 14.1084C14.1338 14.4223 13.3208 14.5837 12.5 14.5833ZM12.5 4.16667C12.1281 4.17186 11.7586 4.22719 11.4015 4.33116C11.6958 4.73119 11.8371 5.22347 11.7996 5.71873C11.7621 6.21398 11.5484 6.6794 11.1972 7.0306C10.846 7.38179 10.3806 7.5955 9.88537 7.63297C9.39012 7.67043 8.89784 7.52917 8.49781 7.23481C8.27001 8.07404 8.31113 8.96357 8.61538 9.77821C8.91962 10.5928 9.47167 11.2916 10.1938 11.776C10.916 12.2605 11.7719 12.5063 12.641 12.4788C13.5102 12.4514 14.3489 12.152 15.039 11.623C15.7291 11.0939 16.236 10.3617 16.4882 9.52951C16.7404 8.69729 16.7253 7.80693 16.445 6.98376C16.1647 6.16058 15.6333 5.44602 14.9256 4.94067C14.2179 4.43532 13.3696 4.16462 12.5 4.16667Z',
					'view' => 'default',
					'layout' => 'fill',
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 25,
						'vh' => 17
					),
					'strokeWidth' => 1,
					'rotate' => 0,
					'opacity' => 100,
					'gap' => '4px',
					'color' => '#5566ca'
				)
			),
			'iconBox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '5px',
						'right' => '5px',
						'bottom' => '5px',
						'left' => '5px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'borderRadius' => '100px',
					'bgColor' => '#b2bcf9'
				)
			),
			'label' => array(
				'type' => 'object',
				'default' => array(
					'fontSize' => '14px',
					'fontFamily' => '',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'pricing-table' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/pricing-table',
		'title' => 'Pricing Table',
		'description' => 'Explore pricing options with this clean and organized pricing table. It includes a simple container displaying pricing elements, allowing users to view prices and features at a glance.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'enabled' => array(
				'type' => 'object',
				'default' => array(
					'featured' => false,
					'icon' => true,
					'heading' => true,
					'subHeading' => false,
					'price' => true,
					'description' => true,
					'button' => true,
					'list' => true
				)
			),
			'order' => array(
				'type' => 'array',
				'default' => array(
					'icon',
					'heading',
					'description',
					'subHeading',
					'price',
					'list',
					'button'
				)
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'featured' => array(
				'type' => 'object',
				'default' => array(
					'tag' => 'div',
					'content' => 'Best Seller',
					'textAlign' => 'center',
					'position' => array(
						'type' => 'unset',
						'align' => 'left',
						'top' => '',
						'left' => '',
						'right' => ''
					),
					'rotate' => '',
					'padding' => array(
						'top' => '8px',
						'right' => '0px',
						'bottom' => '8px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => '',
						'vertical' => '',
						'blur' => '',
						'spread' => '',
						'color' => '',
						'position' => ''
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'uppercase',
					'decoration' => 'none',
					'lineHeight' => '1.2em',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'bg' => '#0c50ff'
					)
				)
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'source' => 'default',
					'id' => '',
					'url' => '',
					'alt' => '',
					'path' => '',
					'viewBox' => array(
						'vx' => '',
						'vy' => '',
						'vw' => '',
						'vh' => ''
					),
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'size' => '20px',
					'boxWidth' => '36px',
					'boxHeight' => '36px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'align' => 'center',
					'color' => array(
						'text' => '#0c50ff',
						'bg' => ''
					)
				)
			),
			'heading' => array(
				'type' => 'object',
				'default' => array(
					'tag' => 'h3',
					'content' => 'Premium',
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'font' => array(
						'size' => '28px',
						'weight' => '600',
						'family' => 'Poppins'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '1.2em',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#0a0a0a'
					)
				)
			),
			'subHeading' => array(
				'type' => 'object',
				'default' => array(
					'tag' => 'h5',
					'content' => 'Sub Heading',
					'margin' => array(
						'top' => '10px',
						'bottom' => '4px'
					),
					'font' => array(
						'size' => '18px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '1.2em',
					'letterSpacing' => '',
					'color' => array(
						'text' => ''
					)
				)
			),
			'price' => array(
				'type' => 'object',
				'default' => array(
					'tag' => 'p',
					'content' => '$99.99',
					'display' => 'inline-block',
					'separator' => array(
						'tag' => 'p',
						'content' => '/month',
						'margin' => array(
							'top' => '',
							'bottom' => ''
						),
						'font' => array(
							'size' => '14px',
							'weight' => '500',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					),
					'margin' => array(
						'top' => '10px',
						'bottom' => '10px'
					),
					'font' => array(
						'size' => '24px',
						'weight' => '600',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#0a0a0a',
						'separator' => '#404040'
					)
				)
			),
			'description' => array(
				'type' => 'object',
				'default' => array(
					'tag' => 'p',
					'content' => 'Ideal for enterprises and large-scale projects.'
				)
			),
			'button' => array(
				'type' => 'object',
				'default' => array(
					'tag' => 'a',
					'textAlign' => 'center',
					'content' => 'Upgrade to Pro',
					'link' => array(
						'url' => '#',
						'newtab' => false,
						'noFollow' => false
					),
					'width' => '100%',
					'padding' => array(
						'top' => '12px',
						'right' => '26px',
						'bottom' => '12px',
						'left' => '26px'
					),
					'margin' => array(
						'top' => '26px',
						'bottom' => '16px'
					),
					'border' => array(
						'style' => '',
						'width' => '',
						'color' => ''
					),
					'radius' => '10px',
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'bg' => '#0a0a0a',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			),
			'list' => array(
				'type' => 'object',
				'default' => array(
					'content' => array(
						'Role Based Permissions',
						'Outcome Reporting',
						'Service Level Agreement Rules',
						'Live Chat for Support'
					),
					'textAlign' => 'left',
					'icon' => array(
						'enabled' => true,
						'path' => 'M4.66668 7.11333L10.7947 0.986L11.7373 1.92867L4.66668 8.99933L0.424011 4.75667L1.36668 3.814L4.66668 7.11333Z',
						'viewBox' => array(
							'vx' => '0',
							'vy' => '0',
							'vw' => '12',
							'vh' => '9'
						),
						'boxWidth' => '12px',
						'boxHeight' => '12px',
						'boxBorder' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'boxRadius' => '50%',
						'size' => '12px',
						'position' => 'left'
					),
					'gap' => '10px',
					'heading' => array(
						'content' => 'Features',
						'margin' => array(
							'top' => '',
							'bottom' => '-4px'
						),
						'font' => array(
							'size' => '16px',
							'weight' => '500',
							'family' => 'Poppins'
						),
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					),
					'ajaxLoader' => array(
						'enabled' => false,
						'label' => 'See more features >>',
						'align' => 'center',
						'showCount' => 10,
						'loadCount' => 10,
						'padding' => array(
							'top' => '',
							'right' => '',
							'bottom' => '',
							'left' => ''
						),
						'margin' => array(
							'top' => '16',
							'bottom' => ''
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '',
						'font' => array(
							'size' => '16px',
							'weight' => '',
							'family' => ''
						),
						'letterCase' => 'none',
						'decoration' => 'underline',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => array(
							'text' => '',
							'textHover' => '',
							'bg' => '',
							'bgHover' => '',
							'borderHover' => ''
						)
					),
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'margin' => array(
						'top' => '',
						'bottom' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'item' => array(
						'padding' => array(
							'top' => '',
							'right' => '',
							'bottom' => '',
							'left' => ''
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => array(
							'top' => '',
							'right' => '',
							'bottom' => '',
							'left' => ''
						)
					),
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'icon' => '#0a0a0a',
						'iconBg' => '',
						'heading' => '#0a0a0a',
						'text' => '#0a0a0a',
						'wrapperBg' => '',
						'listBg' => ''
					)
				)
			),
			'padding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '40px',
					'right' => '28px',
					'bottom' => '44px',
					'left' => '28px'
				)
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'bottom' => '0px'
				)
			),
			'border' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'style' => '',
					'color' => ''
				)
			),
			'radius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '10px',
					'bottom' => '10px',
					'left' => '10px'
				)
			),
			'shadow' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'horizontal' => '0',
					'vertical' => '0',
					'blur' => '10px',
					'spread' => '-8px',
					'color' => '#000',
					'position' => ''
				)
			),
			'overflow' => array(
				'type' => 'string',
				'default' => 'auto'
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'font' => array(
						'size' => '14px',
						'weight' => '400',
						'family' => 'Poppins'
					),
					'letterCase' => 'none'
				)
			),
			'color' => array(
				'type' => 'object',
				'default' => array(
					'text' => '#404040',
					'bg' => '#fff'
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--pricing-table--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'product-carousel' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/product-carousel',
		'title' => 'Product Grid/Carousel',
		'description' => 'Engage your audience with our \'Product Grid/Carousel\' block, offering a visually appealing and interactive way to display WooCommerce products in a carousel format for an enhanced browsing experience.',
		'category' => 'cozy-block/woocommerce',
		'keywords' => array(
			'product',
			'grid',
			'carousel'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'interactivity' => array(
				'clientNavigation' => true
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'namespace' => array(
				'type' => 'string',
				'default' => ''
			),
			'currencySymbol' => array(
				'type' => 'string',
				'default' => ''
			),
			'currencyPosition' => array(
				'type' => 'string',
				'default' => ''
			),
			'quickView' => array(
				'type' => 'boolean',
				'default' => false
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'template' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'buttonHoverColor' => array(
				'type' => 'object',
				'default' => array(
					'background' => '#5566ca',
					'text' => '#fff'
				)
			),
			'productGroup' => array(
				'type' => 'string',
				'default' => 'latest'
			),
			'productCategory' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'imageScale' => array(
				'type' => 'boolean',
				'default' => true
			),
			'saleBadge' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'display' => 'flex',
					'position' => 'left',
					'top' => 16,
					'right' => 12,
					'left' => 12,
					'marginBottom' => 0,
					'gap' => 0,
					'labelBefore' => '',
					'contentType' => 'default',
					'labelAfter' => '',
					'padding' => array(
						'top' => 4,
						'right' => 10,
						'bottom' => 4,
						'left' => 10
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderRadius' => 5,
					'rotate' => 0,
					'bgColor' => '#5566ca',
					'typography' => array(
						'fontFamily' => '',
						'fontSize' => 10,
						'fontWeight' => 400,
						'letterCase' => '',
						'lineHeight' => '',
						'letterSpacing' => '',
						'color' => '#fff'
					),
					'labelTypography' => array(
						'fontFamily' => '',
						'fontSize' => 10,
						'color' => '',
						'fontWeight' => 400,
						'letterCase' => '',
						'lineHeight' => '',
						'letterSpacing' => ''
					)
				)
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'productImage' => true,
					'productTitle' => true,
					'productCategories' => true,
					'productSummary' => true,
					'productRating' => true,
					'productPrice' => true,
					'cartButton' => true,
					'cart' => true,
					'wishlist' => true,
					'quickView' => true
				)
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'displayColumn' => 3,
					'columnGap' => 30
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => 10,
					'height' => 10,
					'borderRadius' => 10,
					'activeWidth' => 10,
					'activeHeight' => 10,
					'activeBorder' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'activeOffset' => 0,
					'gap' => 4,
					'activeBorderRadius' => 10,
					'activeColor' => '#007cba',
					'color' => '#252525',
					'activeColorHover' => '#164861',
					'colorHover' => '#a5a5a5',
					'align' => 'center',
					'verticalPosition' => 0,
					'left' => '0px',
					'right' => '0px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'iconSize' => 15,
					'iconBoxWidth' => 35,
					'iconBoxHeight' => 35,
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'borderRadius' => 50,
					'backgroundColor' => '#fff',
					'color' => '#007cba',
					'backgroundColorHover' => '#007cba',
					'colorHover' => '#fff',
					'borderHover' => ''
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'delay' => 2500
					),
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 30,
					'speed' => 700
				)
			),
			'reviewStyles' => array(
				'type' => 'object',
				'default' => array(
					'fontSize' => 14,
					'color' => ''
				)
			),
			'ajaxLoader' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'type' => 'default',
					'label' => 'Load More',
					'loadingText' => '',
					'minWidth' => '95px',
					'content' => 10,
					'padding' => array(
						'top' => '8px',
						'right' => '14px',
						'bottom' => '8px',
						'left' => '14px'
					),
					'margin' => array(
						'top' => '26px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'textAlign' => 'center',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'spinnerPrimary' => '#fff',
						'spinnerSecondary' => '#989898',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => array(
			'file:./index.css'
		),
		'viewScript' => array(
			'cozy-block--product-carousel--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'product-category' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/product-category',
		'title' => 'Product Category',
		'description' => 'Elevate your product presentation with the \'Product Category\' block, providing advanced layout options like lists, grids, and carousels to showcase WooCommerce product categories in a visually appealing and organized manner.',
		'category' => 'cozy-block/woocommerce',
		'keywords' => array(
			'product',
			'category',
			'carousel',
			'list',
			'grid'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'text' => true,
				'background' => true,
				'link' => true
			),
			'spacing' => array(
				'padding' => true,
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'perPage' => array(
				'type' => 'number',
				'default' => 6
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'center'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'image' => true,
					'name' => true,
					'count' => true,
					'linkNewTab' => false
				)
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'displayColumn' => 3,
					'invertLayout' => false,
					'stackLayout' => false,
					'alignItems' => 'center',
					'gap' => '26px',
					'rowGap' => '26px',
					'contentGap' => '10px'
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'direction' => 'horizontal',
					'height' => '430px',
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'delay' => 2500
					),
					'slidesPerView' => 3,
					'centeredSlides' => false,
					'spaceBetween' => 26,
					'speed' => 1500
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'default' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'color' => '#6a6a6a',
						'colorHover' => ''
					),
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px',
						'color' => '#f90',
						'colorHover' => ''
					),
					'align' => 'center',
					'verticalPosition' => 0,
					'left' => '0px',
					'right' => '0px',
					'gap' => '4px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverShow' => true,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'borderColorHover' => '',
					'bgColor' => '#007cba',
					'bgColorHover' => '#f90',
					'color' => '#fff',
					'colorHover' => ''
				)
			),
			'containerStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'boxShadow' => array(
						'enabled' => false,
						'color' => '#000',
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 10,
						'spread' => 0,
						'position' => ''
					),
					'fontSize' => '16px',
					'fontWeight' => '500',
					'fontFamily' => '',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'borderColorHover' => '',
					'bgColor' => '',
					'bgColorHover' => ''
				)
			),
			'featuredImage' => array(
				'type' => 'object',
				'default' => array(
					'hoverEffect' => true,
					'width' => '',
					'height' => '430px',
					'marginBottom' => '10px',
					'radius' => '10px'
				)
			),
			'productCount' => array(
				'type' => 'object',
				'default' => array(
					'display' => 'default',
					'position' => 'right',
					'top' => 10,
					'right' => 10,
					'left' => 0,
					'marginTop' => '0px',
					'marginBottom' => '0px',
					'labelBefore' => '',
					'labelAfter' => '',
					'padding' => array(
						'top' => '2px',
						'right' => '6px',
						'bottom' => '2px',
						'left' => '6px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '100px',
						'right' => '100px',
						'bottom' => '100px',
						'left' => '100px'
					),
					'fontSize' => '14px',
					'fontWeight' => '400',
					'fontFamily' => '',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'bgColor' => '#5566ca',
					'color' => '#fff'
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--product-category--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'product-review' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/product-review',
		'title' => 'All Product Reviews',
		'description' => 'Revolutionize your product displays with our \'All Product Reviews\' block. Showcase customer feedback in style with multiple layout options, including list, grid, and carousel. Increase trust and engagement by strategically placing authentic reviews anywhere on your WordPress site for maximum impact.',
		'category' => 'cozy-block/woocommerce',
		'keywords' => array(
			'product',
			'review'
		),
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'perPage' => array(
				'type' => 'string',
				'default' => '6'
			),
			'ratingFilter' => array(
				'type' => 'string',
				'default' => '1'
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'productName' => true,
					'titleLinkPost' => true,
					'titleLinkNewTab' => false,
					'productRating' => true,
					'reviewerName' => true,
					'image' => true,
					'reviewDate' => true,
					'reviewContent' => true
				)
			),
			'imageType' => array(
				'type' => 'string',
				'default' => 'product'
			),
			'headingOptions' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'blockAlign' => 'space-between',
					'gap' => 15,
					'verticalGap' => 10,
					'label' => 'Store Reviews',
					'fontFamily' => 'Public Sans',
					'fontSize' => '22',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#000',
					'iconColor' => '#D48D3B',
					'iconBgColor' => '#FBF3EA',
					'fontWeight' => 600
				)
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'blockAlign' => 'left',
					'displayColumn' => 3,
					'columnGap' => 30
				)
			),
			'listOptions' => array(
				'type' => 'object',
				'default' => array(
					'textAlign' => 'left',
					'rowGap' => 10
				)
			),
			'ajaxButton' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'label' => 'Load More',
					'contentLoad' => 10,
					'marginTop' => 16,
					'padding' => array(
						'top' => 12,
						'right' => 26,
						'bottom' => 12,
						'left' => 26
					),
					'border' => array(
						'width' => 1,
						'type' => 'none',
						'color' => '#000',
						'colorHover' => ''
					),
					'borderRadius' => 10,
					'fontSize' => 14,
					'fontWeight' => 500,
					'fontFamily' => 'Public Sans',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'bgColor' => '#5566ca',
					'bgColorHover' => '#f90',
					'color' => '#fff',
					'colorHover' => ''
				)
			),
			'carouselOptions' => array(
				'type' => 'object',
				'default' => array(
					'textAlign' => 'center',
					'flexDirection' => 'column',
					'gap' => 0
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => 10,
					'height' => 10,
					'borderRadius' => 10,
					'activeWidth' => 10,
					'activeHeight' => 10,
					'activeBorder' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'activeOffset' => 0,
					'gap' => 4,
					'activeBorderRadius' => 10,
					'activeColor' => '#007cba',
					'color' => '#252525',
					'activeColorHover' => '#164861',
					'colorHover' => '#a5a5a5',
					'align' => 'center',
					'verticalPosition' => 0,
					'left' => '0px',
					'right' => '0px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'iconSize' => 15,
					'iconBoxWidth' => 35,
					'iconBoxHeight' => 35,
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'borderRadius' => 50,
					'verticalPosition' => 65,
					'backgroundColor' => '#fff',
					'color' => '#007cba',
					'backgroundColorHover' => '#007cba',
					'colorHover' => '#fff',
					'borderHover' => ''
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'delay' => 2500
					),
					'centeredSlides' => false,
					'slidesPerView' => 3,
					'spaceBetween' => 30,
					'speed' => 700
				)
			),
			'containerStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 24,
						'right' => 24,
						'bottom' => 24,
						'left' => 24
					),
					'border' => array(
						'width' => array(
							'top' => 1,
							'right' => 1,
							'bottom' => 1,
							'left' => 1
						),
						'type' => 'solid',
						'color' => '#e2e2e2',
						'colorHover' => ''
					),
					'borderRadius' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'boxShadow' => array(
						'enabled' => false,
						'color' => '#000',
						'colorHover' => '',
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 10,
						'blurHover' => '',
						'spread' => 0,
						'spreadHover' => '',
						'position' => ''
					),
					'bgColor' => '',
					'bgColorHover' => ''
				)
			),
			'reviewImage' => array(
				'type' => 'object',
				'default' => array(
					'hoverEffect' => true,
					'width' => 60,
					'height' => 60,
					'borderRadius' => 100
				)
			),
			'reviewTitle' => array(
				'type' => 'object',
				'default' => array(
					'marginLeft' => 20,
					'dateFormat' => 'm-d-y',
					'dateAbbr' => true,
					'titleColor' => '#5566ca',
					'titleColorHover' => '#f90',
					'ratingSize' => 16,
					'ratingColor' => '#fcb900',
					'textColor' => '#000',
					'titleTypography' => array(
						'fontFamily' => 'Public Sans',
						'fontSize' => 16,
						'fontWeight' => 600,
						'letterCase' => 'none',
						'decoration' => 'none',
						'lineHeight' => '',
						'letterSpacing' => ''
					)
				)
			),
			'reviewContent' => array(
				'type' => 'object',
				'default' => array(
					'margin' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 78
					),
					'excerpt' => 10,
					'position' => 'bottom',
					'borderRadius' => 10
				)
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => 'Public Sans',
					'fontSize' => 14,
					'color' => '#646464',
					'fontWeight' => 400,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--product-review--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'product-slider' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/product-slider',
		'title' => 'Product Slider (Pro)',
		'description' => 'Highlight your WooCommerce products dynamically with the \'Product Slider\' block, allowing smooth sliding to showcase your products in an attractive and interactive manner.',
		'category' => 'cozy-block/woocommerce',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => 10,
					'height' => 10,
					'borderRadius' => 10,
					'activeWidth' => 10,
					'activeHeight' => 10,
					'activeBorder' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'activeOffset' => 0,
					'gap' => 4,
					'activeBorderRadius' => 10,
					'activeColor' => '#007cba',
					'color' => '#252525',
					'activeColorHover' => '#164861',
					'colorHover' => '#a5a5a5',
					'align' => 'center',
					'verticalPosition' => 0,
					'left' => '0px',
					'right' => '0px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'iconSize' => 15,
					'iconBoxWidth' => 35,
					'iconBoxHeight' => 35,
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'borderRadius' => 50,
					'backgroundColor' => '#fff',
					'color' => '#007cba',
					'backgroundColorHover' => '#007cba',
					'colorHover' => '#fff',
					'borderHover' => ''
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 3000
					),
					'centeredSlides' => false,
					'slidesPerView' => 1,
					'spaceBetween' => 30,
					'speed' => 2000
				)
			),
			'thumbOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => false,
					'centeredSlides' => false,
					'responsive' => array(
						'enabled' => false,
						'viewport' => 768,
						'width' => '40px',
						'height' => '40px'
					),
					'width' => '150px',
					'height' => '150px',
					'horizontalSpacing' => '0px',
					'verticalSpacing' => '0px',
					'direction' => 'horizontal',
					'horizontalJustify' => 'center',
					'verticalJustify' => 'center',
					'position' => 'left',
					'gap' => '0px',
					'radius' => '0px',
					'default' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => 0,
						'opacity' => 100
					),
					'active' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => 0,
						'opacity' => 100
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--product-slider--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'product-tab' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/product-tab',
		'title' => 'Products Showcase Tabs (Pro)',
		'description' => 'Effortlessly organize and present your WooCommerce products with our \'Products Showcase Tabs\' block. Explore a user-friendly approach to displaying items in categorized tabs, enhancing navigation and optimizing the shopping experience for your visitors.',
		'category' => 'cozy-block/woocommerce',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'interactivity' => array(
				'clientNavigation' => true
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'siteURL' => array(
				'type' => 'string',
				'default' => ''
			),
			'namespace' => array(
				'type' => 'string',
				'default' => 'cozy-block/product-tab'
			),
			'enableTitle' => array(
				'type' => 'boolean',
				'default' => true
			),
			'title' => array(
				'type' => 'string',
				'default' => 'Products Showcase'
			),
			'titleTag' => array(
				'type' => 'string',
				'default' => 'h4'
			),
			'titleJustify' => array(
				'type' => 'string',
				'default' => 'space-between'
			),
			'titleGap' => array(
				'type' => 'string',
				'default' => '26px'
			),
			'textAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'contentGap' => array(
				'type' => 'string',
				'default' => '16px'
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'productImage' => true,
					'productName' => true,
					'productRating' => true,
					'productCategories' => true,
					'productSummary' => true,
					'productPrice' => true,
					'cartButton' => true,
					'cart' => true,
					'wishlist' => true,
					'quickView' => true,
					'saleBadge' => true
				)
			),
			'perPage' => array(
				'type' => 'number',
				'default' => 3
			),
			'excerpt' => array(
				'type' => 'number',
				'default' => 20
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'masonry' => false,
					'columnCount' => 3,
					'gap' => '30px'
				)
			),
			'tabs' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 'all',
						'title' => 'All',
						'category' => '',
						'layout' => 'one'
					)
				)
			),
			'tabGap' => array(
				'type' => 'string',
				'default' => '0'
			),
			'tabStyles' => array(
				'type' => 'object',
				'default' => array(
					'titleFontSize' => '20px',
					'titleFontFamily' => '',
					'titleFontWeight' => '600',
					'titleLetterCase' => 'none',
					'titleDecoration' => 'none',
					'titleLineHeight' => '',
					'titleLetterSpacing' => '',
					'titleColor' => '#090b10',
					'padding' => array(
						'top' => '4px',
						'right' => '10px',
						'bottom' => '4px',
						'left' => '10px'
					),
					'borderRadius' => array(
						'top' => '0',
						'right' => '0',
						'bottom' => '0',
						'left' => '0'
					),
					'default' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'color' => '',
						'bgColor' => ''
					),
					'active' => array(
						'tabOverlay' => false,
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'color' => '#5566ca',
						'bgColor' => ''
					),
					'fontSize' => '14px',
					'fontFamily' => '',
					'fontWeight' => '500',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'separatorStyles' => array(
				'type' => 'object',
				'default' => array(
					'margin' => array(
						'top' => '0',
						'right' => '0',
						'bottom' => '16px',
						'left' => '0'
					),
					'padding' => array(
						'top' => '0',
						'right' => '0',
						'bottom' => '0',
						'left' => '0'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'borderRadius' => array(
						'top' => '0',
						'right' => '0',
						'bottom' => '0',
						'left' => '0'
					),
					'bgColor' => ''
				)
			),
			'itemBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'shadowHover' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'hoverEffect' => false
				)
			),
			'imageStyles' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'height' => '330px',
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'radius' => '0px',
					'hoverEffect' => true,
					'linkProduct' => true,
					'linkNewTab' => false,
					'objectFit' => 'cover',
					'objectPosition' => 'top',
					'overlay' => '#1c1c1c96'
				)
			),
			'saleBadge' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '4px',
						'right' => '6px',
						'bottom' => '4px',
						'left' => '6px'
					),
					'border' => array(
						'style' => '',
						'width' => '',
						'color' => ''
					),
					'borderRadius' => '5px',
					'labelBefore' => '',
					'labelAfter' => '',
					'contentType' => 'default',
					'position' => 'left',
					'top' => 10,
					'right' => 10,
					'left' => 10,
					'rotate' => 0,
					'bgColor' => '#5566ca',
					'fontSize' => '12px',
					'fontFamily' => '',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#fff'
				)
			),
			'utilIcon' => array(
				'type' => 'object',
				'default' => array(
					'size' => '16px',
					'gap' => '6px',
					'hoverShow' => true,
					'direction' => 'vertical',
					'align' => array(
						'vertical' => 'top',
						'horizontal' => 'right'
					),
					'margin' => array(
						'top' => 10,
						'left' => '10px',
						'right' => '10px'
					),
					'box' => array(
						'width' => '40px',
						'height' => '40px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '50px'
					),
					'color' => array(
						'text' => '#090b10',
						'textHover' => '#fff',
						'textActive' => '#fff',
						'bg' => '#fff',
						'bgHover' => '#f90',
						'bgActive' => '#5566ca',
						'borderHover' => '',
						'borderActive' => ''
					)
				)
			),
			'productCategory' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'padding' => array(
						'top' => '2px',
						'right' => '10px',
						'bottom' => '2px',
						'left' => '10px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					),
					'font' => array(
						'size' => '12px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'productName' => array(
				'type' => 'object',
				'default' => array(
					'linkProduct' => true,
					'linkNewTab' => false,
					'marginTop' => '6px',
					'marginBottom' => '4px',
					'fontSize' => '18px',
					'fontFamily' => '',
					'fontWeight' => '600',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#090b10',
					'colorHover' => '#f90'
				)
			),
			'productPrice' => array(
				'type' => 'object',
				'default' => array(
					'marginTop' => '10px',
					'marginBottom' => '10px',
					'fontSize' => '16px',
					'fontFamily' => '',
					'fontWeight' => '500',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#090b10'
				)
			),
			'productRating' => array(
				'type' => 'object',
				'default' => array(
					'marginTop' => '16px',
					'marginBottom' => '0',
					'fontSize' => '14px',
					'fontFamily' => '',
					'fontWeight' => '500',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '',
					'iconColor' => '#f90'
				)
			),
			'cartButton' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'Add to Cart',
					'padding' => array(
						'top' => '8px',
						'right' => '16px',
						'bottom' => '8px',
						'left' => '16px'
					),
					'margin' => array(
						'top' => '6px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'width' => '',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => '10px',
					'height' => '10px',
					'radius' => '10px',
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px'
					),
					'align' => 'center',
					'bottom' => 0,
					'left' => '0px',
					'right' => '0px',
					'gap' => '4px',
					'color' => array(
						'default' => '#6a6a6a',
						'defaultHover' => '',
						'active' => '#f90',
						'activeHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--product-tab--frontend-script',
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'progress-bar' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/progress-bar',
		'title' => 'Progress Bar',
		'description' => 'Keep your audience informed and intrigued with our \'Progress Bar\' block, offering dynamic circular, horizontal, and vertical progress indicators for an interactive and visually engaging user experience.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'width' => array(
				'type' => 'number',
				'default' => 40
			),
			'height' => array(
				'type' => 'number',
				'default' => 24
			),
			'layoutCircle' => array(
				'type' => 'object',
				'default' => array(
					'circumference' => 180,
					'style' => 'outline',
					'alignment' => 'center',
					'width' => 30,
					'primaryColor' => '#5566ca',
					'secondaryColor' => '#F4F5FF'
				)
			),
			'progress' => array(
				'type' => 'number',
				'default' => 50
			),
			'label' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'position' => 'inside',
					'alignment' => 'center',
					'gap' => 10,
					'marginBottom' => 10,
					'before' => '',
					'after' => ''
				)
			),
			'showSpiral' => array(
				'type' => 'boolean',
				'default' => false
			),
			'borderRadius' => array(
				'type' => 'object',
				'default' => array(
					'top' => 0,
					'right' => 0,
					'bottom' => 0,
					'left' => 0
				)
			),
			'bgColor' => array(
				'type' => 'string',
				'default' => '#5566ca'
			),
			'containerStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'border' => array(
						'width' => array(
							'top' => 1,
							'right' => 1,
							'bottom' => 1,
							'left' => 1
						),
						'type' => 'none',
						'color' => '#F4F5FF'
					),
					'borderRadius' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'bgColor' => '#dee0f3'
				)
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => '',
					'fontSize' => 16,
					'color' => '#fff',
					'fontWeight' => 400
				)
			),
			'labelTypography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => '',
					'fontSize' => 16,
					'color' => '',
					'fontWeight' => 400
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--progress-bar--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'quick-view' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/quick-view',
		'title' => 'Quick View (Pro)',
		'description' => 'Preview product details in a stylish lightbox with the \'Quick View\' block, providing a seamless and efficient way to view essential information without leaving the current page.',
		'category' => 'cozy-block/woocommerce',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'interactivity' => array(
				'clientNavigation' => true
			)
		),
		'usesContext' => array(
			'postId',
			'postType',
			'queryId'
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'postType' => array(
				'type' => 'string',
				'default' => ''
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'size' => '16px',
					'align' => 'right',
					'path' => 'M24.8489 7.69965C22.4952 3.1072 17.8355 0 12.5 0C7.16447 0 2.50345 3.10938 0.151018 7.70009C0.0517306 7.89649 0 8.11348 0 8.33355C0 8.55362 0.0517306 8.77061 0.151018 8.96701C2.50475 13.5595 7.16447 16.6667 12.5 16.6667C17.8355 16.6667 22.4965 13.5573 24.8489 8.96658C24.9482 8.77018 25 8.55319 25 8.33312C25 8.11304 24.9482 7.89605 24.8489 7.69965ZM12.5 14.5833C11.2638 14.5833 10.0555 14.2168 9.02766 13.53C7.99985 12.8433 7.19878 11.8671 6.72573 10.7251C6.25268 9.58307 6.12891 8.3264 6.37007 7.11402C6.61123 5.90164 7.20648 4.78799 8.08056 3.91392C8.95464 3.03984 10.0683 2.44458 11.2807 2.20343C12.493 1.96227 13.7497 2.08604 14.8917 2.55909C16.0338 3.03213 17.0099 3.83321 17.6967 4.86102C18.3834 5.88883 18.75 7.0972 18.75 8.33333C18.7504 9.15421 18.589 9.96711 18.275 10.7256C17.9611 11.484 17.5007 12.1732 16.9203 12.7536C16.3398 13.3341 15.6507 13.7944 14.8922 14.1084C14.1338 14.4223 13.3208 14.5837 12.5 14.5833ZM12.5 4.16667C12.1281 4.17186 11.7586 4.22719 11.4015 4.33116C11.6958 4.73119 11.8371 5.22347 11.7996 5.71873C11.7621 6.21398 11.5484 6.6794 11.1972 7.0306C10.846 7.38179 10.3806 7.5955 9.88537 7.63297C9.39012 7.67043 8.89784 7.52917 8.49781 7.23481C8.27001 8.07404 8.31113 8.96357 8.61538 9.77821C8.91962 10.5928 9.47167 11.2916 10.1938 11.776C10.916 12.2605 11.7719 12.5063 12.641 12.4788C13.5102 12.4514 14.3489 12.152 15.039 11.623C15.7291 11.0939 16.236 10.3617 16.4882 9.52951C16.7404 8.69729 16.7253 7.80693 16.445 6.98376C16.1647 6.16058 15.6333 5.44602 14.9256 4.94067C14.2179 4.43532 13.3696 4.16462 12.5 4.16667Z',
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 25,
						'vh' => 17
					),
					'box' => array(
						'width' => '40px',
						'height' => '40px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '50px'
					),
					'color' => array(
						'text' => '#5566ca',
						'textHover' => '#fff',
						'bg' => '',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			),
			'lightbox' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '26px',
						'right' => '30px',
						'bottom' => '20px',
						'left' => '30px'
					),
					'color' => array(
						'icon' => '#fff',
						'iconHover' => '',
						'iconBg' => '#5566ca',
						'iconBgHover' => '#f90',
						'bg' => '#fff',
						'overlay' => '#282828d6'
					)
				)
			),
			'selectedTypography' => array(
				'type' => 'string',
				'default' => 'title'
			),
			'productTitle' => array(
				'type' => 'object',
				'default' => array(
					'font' => array(
						'size' => '18px',
						'weight' => '600',
						'family' => ''
					),
					'letterCase' => 'none',
					'color' => array(
						'text' => '#090b10',
						'textHover' => '#f90'
					)
				)
			),
			'productSummary' => array(
				'type' => 'object',
				'default' => array(
					'font' => array(
						'size' => '14px',
						'weight' => '400',
						'family' => ''
					),
					'color' => array(
						'text' => '#6a6a6a'
					)
				)
			),
			'productPrice' => array(
				'type' => 'object',
				'default' => array(
					'font' => array(
						'size' => '16px',
						'weight' => '500',
						'family' => ''
					),
					'color' => array(
						'text' => '#090b10'
					)
				)
			),
			'cartButton' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'Add to Cart',
					'padding' => array(
						'top' => '6px',
						'right' => '14px',
						'bottom' => '6px',
						'left' => '14px'
					),
					'margin' => array(
						'top' => '16px',
						'bottom' => '16px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'font' => array(
						'size' => '16px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'bg' => '#5566ca',
						'bgHover' => '#090b10',
						'borderHover' => ''
					)
				)
			),
			'viewButton' => array(
				'type' => 'object',
				'default' => array(
					'label' => 'View my cart',
					'border' => array(
						'width' => '1px',
						'style' => 'solid',
						'color' => '#090b10'
					),
					'radius' => '100px',
					'font' => array(
						'size' => '16px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'color' => array(
						'text' => '#090b10',
						'textHover' => '#fff',
						'bg' => '',
						'bgHover' => '#090b10',
						'borderHover' => ''
					)
				)
			),
			'review' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '16px',
						'right' => '0px',
						'bottom' => '26px',
						'left' => '0px'
					),
					'color' => array(
						'author' => '#090b10',
						'date' => '#6a6a6a',
						'content' => '#6a6a6a'
					)
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => '10px',
					'height' => '10px',
					'radius' => '10px',
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '1px'
					),
					'align' => 'center',
					'bottom' => -5,
					'left' => '0px',
					'right' => '0px',
					'gap' => '4px',
					'color' => array(
						'default' => '#6a6a6a',
						'defaultHover' => '',
						'active' => '#f90',
						'activeHover' => ''
					)
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'hoverShow' => true,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => array(
						'borderHover' => '',
						'bg' => '#007cba',
						'bgHover' => '#f90',
						'icon' => '#fff',
						'iconHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-swiper-bundle'
		),
		'viewStyle' => 'cozy-swiper-bundle',
		'render' => 'file:./render.php'
	),
	'related-post' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/related-post',
		'title' => 'Related Post (Pro)',
		'description' => 'Uncover additional relevant content using our \'Related Post\' block, offering curated suggestions tailored to your interests for an engaging exploration of aligned topics.',
		'category' => 'cozy-block/post-magazine',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'displayColumn' => 3,
					'columnGap' => 30
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => array(
			'cozy-block--related-post--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'sidebar-panel' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/sidebar-panel',
		'title' => 'Sidebar Panel',
		'description' => 'Maximize versatility with our \'Sidebar Panel\' block, seamlessly integrating a customizable sidebar drawer to display menus, latest posts, popular content, or any desired elements for a user-friendly and organized layout.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconView' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'iconLayout' => array(
				'type' => 'string',
				'default' => 'fill'
			),
			'iconSize' => array(
				'type' => 'number',
				'default' => 16
			),
			'iconColor' => array(
				'type' => 'string',
				'default' => '#5566ca'
			),
			'iconColorHover' => array(
				'type' => 'string',
				'default' => '#36cfc6'
			),
			'iconOpacity' => array(
				'type' => 'number',
				'default' => 1
			),
			'iconRotate' => array(
				'type' => 'number',
				'default' => 0
			),
			'openIcon' => array(
				'type' => 'object',
				'default' => array(
					'enableIcon' => true,
					'path' => 'M0.78125 3.51562H21.0938C21.5252 3.51562 21.875 3.16587 21.875 2.73438V0.78125C21.875 0.349756 21.5252 0 21.0938 0H0.78125C0.349756 0 0 0.349756 0 0.78125V2.73438C0 3.16587 0.349756 3.51562 0.78125 3.51562ZM0.78125 11.3281H21.0938C21.5252 11.3281 21.875 10.9784 21.875 10.5469V8.59375C21.875 8.16226 21.5252 7.8125 21.0938 7.8125H0.78125C0.349756 7.8125 0 8.16226 0 8.59375V10.5469C0 10.9784 0.349756 11.3281 0.78125 11.3281ZM0.78125 19.1406H21.0938C21.5252 19.1406 21.875 18.7909 21.875 18.3594V16.4062C21.875 15.9748 21.5252 15.625 21.0938 15.625H0.78125C0.349756 15.625 0 15.9748 0 16.4062V18.3594C0 18.7909 0.349756 19.1406 0.78125 19.1406Z',
					'viewBox' => array(
						'vx' => 0,
						'vy' => 0,
						'vw' => 22,
						'vh' => 20
					),
					'enableTitle' => true,
					'pulseEffect' => false,
					'title' => 'Menu',
					'titlePosition' => 'after',
					'gap' => 10,
					'color' => array(
						'icon' => '',
						'iconHover' => '',
						'bg' => '',
						'bgHover' => ''
					)
				)
			),
			'closeIcon' => array(
				'type' => 'object',
				'default' => array(
					'alignment' => 'right',
					'verticalSpacing' => 10,
					'horizontalSpacing' => 0
				)
			),
			'sidebarLayout' => array(
				'type' => 'string',
				'default' => 'custom'
			),
			'width' => array(
				'type' => 'number',
				'default' => 380
			),
			'sidebarPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => 10,
					'right' => 20,
					'bottom' => 20,
					'left' => 20
				)
			),
			'bgColor' => array(
				'type' => 'string',
				'default' => '#fff'
			),
			'position' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'overlayBgColor' => array(
				'type' => 'string',
				'default' => '#22222257'
			),
			'zIndex' => array(
				'type' => 'number',
				'default' => 9999
			),
			'overlayZIndex' => array(
				'type' => 'number',
				'default' => 999
			),
			'iconBoxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 7,
						'right' => 7,
						'bottom' => 7,
						'left' => 7
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderColorHover' => '',
					'borderRadius' => 50,
					'bgColor' => '#b2bcf9',
					'bgColorHover' => ''
				)
			),
			'typography' => array(
				'type' => 'object',
				'default' => array(
					'fontFamily' => 'Public Sans',
					'fontSize' => 16,
					'color' => '#000',
					'colorHover' => '',
					'fontWeight' => 400,
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--sidebar-panel--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'slide' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'cozy-block/slide',
		'version' => '1.0.0',
		'title' => 'Slide',
		'description' => 'Support block for the slider block.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'attributes' => array(
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'focalPoint' => array(
				'type' => 'object',
				'default' => array(
					'x' => 0.5,
					'y' => 0.5
				)
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'background' => array(
						'backgroundImage' => array(
							'id' => '',
							'source' => '',
							'title' => '',
							'url' => ''
						)
					)
				)
			)
		),
		'supports' => array(
			'html' => false,
			'inserter' => false,
			'background' => array(
				'backgroundImage' => true,
				'__experimentalDefaultControls' => array(
					'backgroundImage' => true
				)
			)
		),
		'parent' => array(
			'cozy-block/slider'
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'slider' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/slider',
		'title' => 'Slider',
		'description' => 'Immerse your audience in captivating visuals with our versatile \'Slider\' block, perfect for showcasing images or content in a dynamic and engaging carousel.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'direction' => array(
				'type' => 'string',
				'default' => 'horizontal'
			),
			'height' => array(
				'type' => 'number',
				'default' => '750'
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'hasPagination' => array(
				'type' => 'boolean',
				'default' => true
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'hasZoomEffect' => array(
				'type' => 'boolean',
				'default' => false
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'width' => '10px',
					'height' => '10px',
					'borderRadius' => '100px',
					'activeWidth' => '10px',
					'activeHeight' => '10px',
					'activeBorder' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'activeOffset' => '4px',
					'activeBorderRadius' => '100px',
					'bottom' => 0,
					'left' => 0,
					'right' => 0,
					'align' => 'center',
					'gap' => '4px',
					'activeColor' => '#007cba',
					'color' => '#fff',
					'activeColorHover' => '#164861',
					'colorHover' => '#a5a5a5',
					'activeBorderHover' => '',
					'dynamicBullets' => false
				)
			),
			'hasNavigation' => array(
				'type' => 'boolean',
				'default' => true
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'iconSize' => 15,
					'iconRotate' => 0,
					'iconBoxWidth' => 35,
					'iconBoxHeight' => 35,
					'borderRadius' => 50,
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderColorHover' => '',
					'backgroundColor' => '#fff',
					'color' => '#007cba',
					'backgroundColorHover' => '#007cba',
					'colorHover' => '#fff',
					'padding' => array(
						'top' => 5,
						'right' => 5,
						'bottom' => 5,
						'left' => 5,
						'responsive' => 'desktop'
					),
					'arrowIconNext' => '<svg aria-hidden=\'true\' focusable=\'false\' data-prefix=\'fas\' data-icon=\'0\' class=\'svg-inline--fa fa-0 \' role=\'img\' xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 320 512\'><path fill=\'currentColor\' d=\'M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z\'></path></svg>',
					'arrowIconPrev' => '<svg aria-hidden=\'true\' focusable=\'false\' data-prefix=\'fas\' data-icon=\'angle-left\' class=\'svg-inline--fa fa-angle-left \' role=\'img\' xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 320 512\'><path fill=\'currentColor\' d=\'M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\'></path></svg>'
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => false,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'delay' => 2500
					),
					'slidesPerView' => 1,
					'centeredSlides' => false,
					'spaceBetween' => 26,
					'speed' => 1500,
					'effect' => 'none'
				)
			),
			'thumbOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => false,
					'centeredSlides' => false,
					'gap' => 0,
					'slidesPerView' => 3,
					'responsive' => array(
						'enabled' => false,
						'viewport' => 768,
						'width' => '40px',
						'height' => '40px'
					),
					'width' => '',
					'height' => '150px',
					'horizontalSpacing' => '0px',
					'verticalSpacing' => '0px',
					'direction' => 'horizontal',
					'horizontalJustify' => 'center',
					'verticalJustify' => 'center',
					'position' => 'left',
					'radius' => '0px',
					'default' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => 0,
						'opacity' => 50
					),
					'active' => array(
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => 0,
						'opacity' => 100
					)
				)
			),
			'thumbMedia' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'shapeDivider' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'margin' => array(
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0
					),
					'height' => 200,
					'position' => 'bottom',
					'flip' => 'right',
					'svg' => '<svg viewBox="0 0 519 134" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 134H519V0L0 134Z"/></svg>',
					'color' => '#fff'
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--slider--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'social-icon' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/social-icon',
		'title' => 'Social Icons',
		'description' => 'Foster online connections effortlessly using our \'Social Icons\' block, allowing you to effortlessly integrate and showcase your social media profiles directly on your website.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'view' => array(
				'type' => 'string',
				'default' => 'stacked'
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'fill'
			),
			'iconSize' => array(
				'type' => 'number',
				'default' => 20
			),
			'iconColorLayout' => array(
				'type' => 'string',
				'default' => 'default'
			),
			'iconColor' => array(
				'type' => 'string',
				'default' => '#fff'
			),
			'iconColorHover' => array(
				'type' => 'string',
				'default' => ''
			),
			'iconOpacity' => array(
				'type' => 'number',
				'default' => 1
			),
			'gap' => array(
				'type' => 'number',
				'default' => 10
			),
			'boxStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => 10,
						'right' => 10,
						'bottom' => 10,
						'left' => 10
					),
					'borderType' => 'none',
					'borderWidth' => 1,
					'borderColor' => '#000',
					'borderColorHover' => '',
					'borderRadius' => 50,
					'bgColor' => '#b2bcf9',
					'bgColorHover' => ''
				)
			)
		),
		'providesContext' => array(
			'view' => 'view',
			'layout' => 'layout',
			'iconColorLayout' => 'iconColorLayout'
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'social-share' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/social-share',
		'title' => 'Social Shares',
		'description' => 'Encourage seamless content sharing with our \'Social Shares\' block, featuring eye-catching social media icons for enhanced engagement and wider reach.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'display' => array(
				'type' => 'object',
				'default' => array(
					'layout' => 'default',
					'orientation' => 'horizontal',
					'align' => 'center',
					'position' => 'left',
					'zIndex' => 999
				)
			),
			'socialList' => array(
				'type' => 'array',
				'default' => array(
					'Facebook',
					'X',
					'Linkedin',
					'Telegram'
				)
			),
			'socialOptions' => array(
				'type' => 'array',
				'default' => array(
					array(
						'key' => 'Email',
						'label' => ''
					),
					array(
						'key' => 'Facebook',
						'label' => ''
					),
					array(
						'key' => 'Linkedin',
						'label' => ''
					),
					array(
						'key' => 'Pinterest',
						'label' => ''
					),
					array(
						'key' => 'Reddit',
						'label' => ''
					),
					array(
						'key' => 'Telegram',
						'label' => ''
					),
					array(
						'key' => 'Tumblr',
						'label' => ''
					),
					array(
						'key' => 'X',
						'label' => ''
					),
					array(
						'key' => 'Whatsapp',
						'label' => ''
					)
				)
			),
			'wrapperStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'margin' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '',
					'stackLayout' => true,
					'color' => array(
						'bg' => ''
					)
				)
			),
			'icon' => array(
				'type' => 'object',
				'default' => array(
					'enableIcon' => true,
					'enableLabel' => false,
					'labelGap' => '4px',
					'view' => 'stacked',
					'gap' => '10px',
					'rowGap' => '6px',
					'boxWidth' => '',
					'boxHeight' => '',
					'padding' => array(
						'top' => '6px',
						'right' => '6px',
						'bottom' => '6px',
						'left' => '6px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'size' => '16px',
					'font' => array(
						'size' => '',
						'weight' => '',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'useBrandColor' => true,
					'color' => array(
						'svg' => '',
						'text' => '',
						'textHover' => '',
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'openNewTab' => array(
				'type' => 'boolean',
				'default' => true
			),
			'noFollow' => array(
				'type' => 'boolean',
				'default' => true
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'render' => 'file:./render.php'
	),
	'teams' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/teams',
		'title' => 'Teams',
		'description' => 'Introduce your team in style with our \'Team\' block, offering both grid and carousel layouts for a visually appealing display of your talented lineup.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'displayColumn' => 3,
					'masonryEnabled' => false,
					'columnGap' => 30
				)
			),
			'carouselOptions' => array(
				'type' => 'object',
				'default' => array(
					'pagination' => array(
						'enabled' => true,
						'width' => 10,
						'height' => 10,
						'borderRadius' => 10,
						'activeWidth' => 10,
						'activeHeight' => 10,
						'activeBorder' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'activeOffset' => 0,
						'gap' => 4,
						'activeBorderRadius' => 10,
						'activeColor' => '#007cba',
						'color' => '#252525',
						'activeColorHover' => '#164861',
						'colorHover' => '#a5a5a5',
						'activeBorderHover' => '',
						'align' => 'center',
						'positionVertical' => -20,
						'left' => '0px',
						'right' => '0px'
					),
					'navigation' => array(
						'enabled' => true,
						'iconSize' => 15,
						'iconBoxWidth' => 35,
						'iconBoxHeight' => 35,
						'borderType' => 'none',
						'borderWidth' => 1,
						'borderColor' => '#000',
						'borderColorHover' => '',
						'borderRadius' => 50,
						'backgroundColor' => '#fff',
						'color' => '#007cba',
						'backgroundColorHover' => '#007cba',
						'colorHover' => '#fff',
						'padding' => array(
							'top' => 5,
							'right' => 5,
							'bottom' => 5,
							'left' => 5
						)
					),
					'sliderOptions' => array(
						'loop' => false,
						'speed' => 700,
						'smoothTransition' => false,
						'autoplay' => array(
							'enabled' => true,
							'pauseOnMouseEnter' => true,
							'delay' => 2500
						),
						'reverseDirection' => false,
						'centeredSlides' => false,
						'slidesPerView' => 3,
						'spaceBetween' => 30
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--teams--frontend-script',
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'testimonial' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/testimonial',
		'title' => 'Testimonials',
		'description' => 'Build trust and credibility with our \'Testimonial\' block, providing grid and carousel layouts to elegantly showcase user feedback and positive experiences.',
		'category' => 'cozy-block',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'blockClientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'layout' => array(
				'type' => 'string',
				'default' => 'carousel'
			),
			'hoverShow' => array(
				'type' => 'boolean',
				'default' => true
			),
			'gridOptions' => array(
				'type' => 'object',
				'default' => array(
					'displayColumn' => 3,
					'masonryEnabled' => false,
					'columnGap' => 30
				)
			),
			'carouselOptions' => array(
				'type' => 'object',
				'default' => array(
					'pagination' => array(
						'enabled' => true,
						'width' => 10,
						'height' => 10,
						'borderRadius' => 10,
						'activeWidth' => 10,
						'activeHeight' => 10,
						'activeBorder' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'activeOffset' => 0,
						'gap' => 4,
						'activeBorderRadius' => 10,
						'activeColor' => '#007cba',
						'color' => '#252525',
						'activeColorHover' => '#164861',
						'colorHover' => '#a5a5a5',
						'activeBorderHover' => '',
						'align' => 'center',
						'positionVertical' => -20,
						'left' => '0px',
						'right' => '0px'
					),
					'navigation' => array(
						'enabled' => true,
						'iconSize' => 15,
						'iconBoxWidth' => 35,
						'iconBoxHeight' => 35,
						'borderRadius' => 50,
						'borderType' => 'none',
						'borderWidth' => 1,
						'borderColor' => '#000',
						'borderColorHover' => '',
						'backgroundColor' => '#fff',
						'color' => '#007cba',
						'backgroundColorHover' => '#007cba',
						'colorHover' => '#fff',
						'padding' => array(
							'top' => 5,
							'right' => 5,
							'bottom' => 5,
							'left' => 5
						)
					),
					'sliderOptions' => array(
						'loop' => false,
						'autoplay' => array(
							'enabled' => true,
							'pauseOnMouseEnter' => true,
							'delay' => 2500
						),
						'reverseDirection' => false,
						'centeredSlides' => false,
						'slidesPerView' => 1,
						'spaceBetween' => 30,
						'speed' => 700,
						'smoothTransition' => false
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--testimonial--frontend-script'
		),
		'script' => 'cozy-swiper-bundle',
		'render' => 'file:./render.php'
	),
	'toggle-content' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/toggle-content',
		'title' => 'Toggle Content (Pro)',
		'description' => 'The toggle content, featuring a switcher or tab-style design, allows users to seamlessly switch between different content sections for a more organized and interactive experience.',
		'category' => 'cozy-block',
		'allowedBlocks' => array(
			'cozy-block/toggle-content-item'
		),
		'textdomain' => 'cozy-addons',
		'attributes' => array(
			'activeContent' => array(
				'type' => 'string',
				'default' => ''
			),
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'tabs' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'type' => array(
				'type' => 'string',
				'default' => 'toggle'
			),
			'wrapperStyles' => array(
				'type' => 'object',
				'default' => array(
					'width' => '100%',
					'contentAlign' => 'center',
					'contentGap' => '10px',
					'padding' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'margin' => array(
						'top' => '',
						'bottom' => '26px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => array(
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => ''
					),
					'color' => array(
						'bg' => ''
					)
				)
			),
			'tabStyles' => array(
				'type' => 'object',
				'default' => array(
					'default' => array(
						'padding' => array(
							'top' => '6px',
							'right' => '18px',
							'bottom' => '6px',
							'left' => '18px'
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => ''
					),
					'active' => array(
						'margin' => array(
							'top' => '',
							'bottom' => ''
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '100px'
					),
					'font' => array(
						'size' => '16px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'textActive' => '#fff',
						'textHover' => '',
						'bg' => '',
						'bgActive' => '#0c50ff',
						'bgHover' => '',
						'borderHover' => ''
					)
				)
			),
			'toggleStyles' => array(
				'type' => 'object',
				'default' => array(
					'font' => array(
						'size' => '16px',
						'weight' => '500',
						'family' => ''
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => array(
						'text' => '',
						'button' => '#fff',
						'bg' => '#ccc',
						'buttonActive' => '',
						'bgActive' => '#0c50ff'
					)
				)
			),
			'padding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'right' => '',
					'bottom' => '',
					'left' => ''
				)
			),
			'margin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'bottom' => ''
				)
			),
			'border' => array(
				'type' => 'object',
				'default' => array(
					'width' => '',
					'style' => '',
					'color' => ''
				)
			),
			'radius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '',
					'right' => '',
					'bottom' => '',
					'left' => ''
				)
			),
			'shadow' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'horizontal' => '0px',
					'vertical' => '0px',
					'blur' => '0px',
					'spread' => '0px',
					'color' => '#000',
					'position' => ''
				)
			),
			'color' => array(
				'type' => 'object',
				'default' => array(
					'text' => '',
					'bg' => ''
				)
			),
			'font' => array(
				'type' => 'object',
				'default' => array(
					'size' => '',
					'weight' => '',
					'family' => ''
				)
			)
		),
		'providesContext' => array(
			'activeContent' => 'activeContent'
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--toggle-content--frontend-script'
		),
		'render' => 'file:./render.php'
	),
	'trending-post' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/trending-post',
		'title' => 'Trending Post (Pro)',
		'description' => 'Stay ahead with our \'Trending Post\' block, spotlighting the most popular and engaging content on your site for a dynamic and up-to-the-minute user experience.',
		'category' => 'cozy-block/post-magazine',
		'textdomain' => 'cozy-addons',
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalTextTransform' => true,
				'__experimentalFontFamily' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalSkipSerialization' => array(
					'textDecoration'
				),
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'fontSize' => '14px'
					)
				)
			),
			'display' => array(
				'type' => 'string',
				'default' => 'list'
			),
			'column' => array(
				'type' => 'number',
				'default' => 1
			),
			'columnGap' => array(
				'type' => 'string',
				'default' => '26px'
			),
			'height' => array(
				'type' => 'string',
				'default' => '200px'
			),
			'gap' => array(
				'type' => 'string',
				'default' => '26px'
			),
			'perPage' => array(
				'type' => 'number',
				'default' => 5
			),
			'enableOptions' => array(
				'type' => 'object',
				'default' => array(
					'image' => true,
					'imgLinkPost' => true,
					'imgLinkNewTab' => false,
					'category' => true,
					'linkCat' => true,
					'catNewTab' => false,
					'titleLinkPost' => true,
					'titleLinkNewTab' => false,
					'content' => true,
					'excerpt' => 20,
					'author' => true,
					'comments' => true,
					'date' => true,
					'enableMetaIcon' => true,
					'linkPostMeta' => true,
					'postMetaNewTab' => false
				)
			),
			'itemStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '10px',
						'right' => '10px',
						'bottom' => '10px',
						'left' => '10px'
					),
					'border' => array(
						'width' => '1px',
						'style' => 'solid',
						'color' => '#e2e2e2'
					),
					'radius' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'boxShadow' => array(
						'enabled' => false,
						'color' => '#000',
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 10,
						'spread' => 0,
						'position' => ''
					),
					'borderColorHover' => '',
					'bgColor' => '',
					'bgColorHover' => ''
				)
			),
			'imageStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'width' => '220px',
					'height' => '120px',
					'radius' => ''
				)
			),
			'categoryStyles' => array(
				'type' => 'object',
				'default' => array(
					'gap' => '10px',
					'hoverEffect' => true,
					'padding' => array(
						'top' => '2px',
						'right' => '10px',
						'bottom' => '2px',
						'left' => '10px'
					),
					'marginTop' => '0px',
					'marginBottom' => '0px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'color' => '#fff',
					'colorHover' => '',
					'bgColor' => '#5566ca',
					'bgColorHover' => '#f90',
					'borderColorHover' => '',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'titleStyles' => array(
				'type' => 'object',
				'default' => array(
					'className' => '',
					'marginTop' => '6px',
					'marginBottom' => '4px',
					'fontSize' => '18px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '600',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'color' => '#090b10',
					'colorHover' => '#f90'
				)
			),
			'dateStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'marginTop' => '0px',
					'marginBottom' => '6px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => '#5566ca',
					'colorHover' => '#f90',
					'bgColor' => '',
					'bgColorHover' => '',
					'borderColorHover' => '',
					'fontSize' => '12px',
					'fontFamily' => 'Public Sans',
					'fontWeight' => '400',
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => ''
				)
			),
			'pagination' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'width' => '10px',
					'height' => '10px',
					'radius' => '10px',
					'gap' => '4px',
					'active' => array(
						'width' => '10px',
						'height' => '10px',
						'radius' => '10px',
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'offset' => '0px'
					),
					'color' => array(
						'default' => '#252525',
						'defaultHover' => '#a5a5a5',
						'active' => '#007cba',
						'activeHover' => '#164861'
					),
					'align' => 'center',
					'top' => 0,
					'left' => '0px',
					'right' => '0px'
				)
			),
			'navigation' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => true,
					'hoverEffect' => true,
					'horizontalGap' => '50px',
					'verticalPosition' => 0,
					'size' => '15px',
					'boxWidth' => '35px',
					'boxHeight' => '35px',
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'borderColorHover' => '',
					'bgColor' => '#007cba',
					'bgColorHover' => '#f90',
					'color' => '#fff',
					'colorHover' => ''
				)
			),
			'sliderOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => true,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'reverseDirection' => false,
						'delay' => 2500
					),
					'slidesPerView' => 1,
					'spaceBetween' => 30,
					'speed' => 1500
				)
			),
			'carouselOptions' => array(
				'type' => 'object',
				'default' => array(
					'loop' => true,
					'autoplay' => array(
						'status' => true,
						'pauseOnMouseEnter' => true,
						'delay' => 2500
					),
					'slidesPerView' => 1,
					'spaceBetween' => 30,
					'speed' => 1500,
					'effect' => 'slide'
				)
			),
			'ajaxLoader' => array(
				'type' => 'object',
				'default' => array(
					'enabled' => false,
					'type' => 'default',
					'label' => 'Load More',
					'loadingText' => '',
					'minWidth' => '95px',
					'content' => 10,
					'padding' => array(
						'top' => '8px',
						'right' => '14px',
						'bottom' => '8px',
						'left' => '14px'
					),
					'margin' => array(
						'top' => '26px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '100px',
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => 'Public Sans'
					),
					'letterCase' => 'none',
					'decoration' => 'none',
					'lineHeight' => '',
					'letterSpacing' => '',
					'textAlign' => 'center',
					'color' => array(
						'text' => '#fff',
						'textHover' => '',
						'spinnerPrimary' => '#fff',
						'spinnerSecondary' => '#989898',
						'bg' => '#5566ca',
						'bgHover' => '#f90',
						'borderHover' => ''
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-swiper-bundle',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--trending-post--frontend-script'
		),
		'script' => array(
			'cozy-swiper-bundle'
		),
		'render' => 'file:./render.php'
	),
	'wishlist' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'cozy-block/wishlist',
		'title' => 'Wishlist (Pro)',
		'description' => '\'Wishlist\' block allows you to add and view your favorite products in a convenient, accessible sidebar for easy management and quick access.',
		'category' => 'cozy-block/woocommerce',
		'textdomain' => 'cozy-addons',
		'usesContext' => array(
			'postId',
			'postType',
			'queryId'
		),
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'gradients' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'padding' => true
				)
			),
			'interactivity' => array(
				'clientNavigation' => true
			)
		),
		'attributes' => array(
			'cover' => array(
				'type' => 'string',
				'default' => ''
			),
			'clientId' => array(
				'type' => 'string',
				'default' => ''
			),
			'postType' => array(
				'type' => 'string',
				'default' => ''
			),
			'variation' => array(
				'type' => 'string',
				'default' => 'wishlist'
			),
			'wishlist' => array(
				'type' => 'object',
				'default' => array(
					'icon' => array(
						'size' => '16px',
						'align' => 'right',
						'path' => 'M8.00068 3.01933C8.76254 2.33777 9.75642 1.97375 10.7783 2.00201C11.8001 2.03028 12.7723 2.44869 13.4953 3.17133C14.2176 3.89346 14.6362 4.86449 14.6655 5.88539C14.6947 6.90628 14.3324 7.8997 13.6527 8.662L7.99935 14.3233L2.34735 8.662C1.66685 7.8993 1.30415 6.90503 1.33371 5.88332C1.36326 4.8616 1.78283 3.88996 2.50628 3.16788C3.22972 2.4458 4.20215 2.02807 5.22392 2.00044C6.24569 1.97281 7.23927 2.33739 8.00068 3.01933ZM12.5513 4.11333C12.0696 3.63237 11.4221 3.35388 10.7416 3.33492C10.0611 3.31595 9.39916 3.55795 8.89135 4.01133L8.00135 4.81L7.11068 4.012C6.60513 3.55992 5.94632 3.31746 5.26833 3.33394C4.59033 3.35043 3.94408 3.62462 3.4611 4.10073C2.97811 4.57683 2.69467 5.21908 2.66846 5.89677C2.64226 6.57446 2.87524 7.23668 3.32002 7.74866L8.00002 12.436L12.68 7.74933C13.1229 7.2396 13.3559 6.58082 13.3321 5.90598C13.3082 5.23113 13.0292 4.59048 12.5513 4.11333Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 16,
							'vh' => 16
						),
						'box' => array(
							'width' => '40px',
							'height' => '40px',
							'border' => array(
								'width' => '',
								'style' => '',
								'color' => ''
							),
							'radius' => '100px'
						),
						'color' => array(
							'text' => '#5566ca',
							'textHover' => '#fff',
							'bg' => '#fff',
							'bgHover' => '#f90',
							'borderHover' => ''
						)
					),
					'activeIcon' => array(
						'box' => array(
							'border' => array(
								'width' => '',
								'style' => '',
								'color' => ''
							),
							'radius' => '50px'
						),
						'color' => array(
							'text' => '#fff',
							'textHover' => '#fff',
							'bg' => '#5566ca',
							'bgHover' => '#f90',
							'borderHover' => ''
						)
					)
				)
			),
			'sidebar' => array(
				'type' => 'object',
				'default' => array(
					'icon' => array(
						'size' => '20px',
						'path' => 'M8.00068 3.01933C8.76254 2.33777 9.75642 1.97375 10.7783 2.00201C11.8001 2.03028 12.7723 2.44869 13.4953 3.17133C14.2176 3.89346 14.6362 4.86449 14.6655 5.88539C14.6947 6.90628 14.3324 7.8997 13.6527 8.662L7.99935 14.3233L2.34735 8.662C1.66685 7.8993 1.30415 6.90503 1.33371 5.88332C1.36326 4.8616 1.78283 3.88996 2.50628 3.16788C3.22972 2.4458 4.20215 2.02807 5.22392 2.00044C6.24569 1.97281 7.23927 2.33739 8.00068 3.01933ZM12.5513 4.11333C12.0696 3.63237 11.4221 3.35388 10.7416 3.33492C10.0611 3.31595 9.39916 3.55795 8.89135 4.01133L8.00135 4.81L7.11068 4.012C6.60513 3.55992 5.94632 3.31746 5.26833 3.33394C4.59033 3.35043 3.94408 3.62462 3.4611 4.10073C2.97811 4.57683 2.69467 5.21908 2.66846 5.89677C2.64226 6.57446 2.87524 7.23668 3.32002 7.74866L8.00002 12.436L12.68 7.74933C13.1229 7.2396 13.3559 6.58082 13.3321 5.90598C13.3082 5.23113 13.0292 4.59048 12.5513 4.11333Z',
						'viewBox' => array(
							'vx' => 0,
							'vy' => 0,
							'vw' => 16,
							'vh' => 16
						),
						'box' => array(
							'width' => '40px',
							'height' => '40px',
							'border' => array(
								'width' => '',
								'style' => '',
								'color' => ''
							),
							'radius' => '50px'
						),
						'color' => array(
							'text' => '',
							'textHover' => '#fff',
							'bg' => '#fff',
							'bgHover' => '#f90',
							'borderHover' => ''
						)
					),
					'count' => array(
						'enabled' => true,
						'margin' => array(
							'top' => 2,
							'right' => 0
						),
						'padding' => array(
							'top' => '2px',
							'right' => '6px',
							'bottom' => '2px',
							'left' => '6px'
						),
						'border' => array(
							'width' => '',
							'style' => '',
							'color' => ''
						),
						'radius' => '100px',
						'font' => array(
							'size' => '10px',
							'weight' => '400',
							'family' => ''
						),
						'color' => array(
							'text' => '#fff',
							'bg' => '#5566ca'
						)
					),
					'closeIcon' => array(
						'size' => '20px',
						'position' => 'right',
						'top' => '10px',
						'left' => '10px',
						'right' => '10px',
						'box' => array(
							'width' => '40px',
							'height' => '40px',
							'border' => array(
								'width' => '',
								'style' => '',
								'color' => ''
							),
							'radius' => '100px'
						),
						'color' => array(
							'text' => '',
							'textHover' => '#fff',
							'bg' => '#fff',
							'bgHover' => '#f90',
							'borderHover' => ''
						)
					),
					'selectedTypography' => 'title',
					'productImage' => array(
						'width' => '80px',
						'height' => '80px',
						'radius' => ''
					),
					'productTitle' => array(
						'font' => array(
							'size' => '16px',
							'weight' => '600',
							'family' => ''
						),
						'letterCase' => 'none',
						'color' => array(
							'text' => '#000',
							'textHover' => '#f90'
						)
					),
					'productSummary' => array(
						'font' => array(
							'size' => '14px',
							'weight' => '400',
							'family' => ''
						),
						'letterCase' => 'none',
						'color' => array(
							'text' => '#6a6a6a'
						)
					),
					'productPrice' => array(
						'font' => array(
							'size' => '14px',
							'weight' => '500',
							'family' => ''
						),
						'letterCase' => 'none',
						'color' => array(
							'text' => '#090b10'
						)
					),
					'button' => array(
						'padding' => array(
							'top' => '6px',
							'right' => '12px',
							'bottom' => '6px',
							'left' => '12px'
						),
						'font' => array(
							'size' => '12px',
							'weight' => '500',
							'family' => ''
						),
						'letterCase' => 'none',
						'cart' => array(
							'border' => array(
								'width' => '',
								'style' => '',
								'color' => ''
							),
							'radius' => '100px',
							'color' => array(
								'text' => '#fff',
								'textHover' => '',
								'bg' => '#5566ca',
								'bgHover' => '#f90',
								'borderHover' => ''
							)
						),
						'remove' => array(
							'border' => array(
								'width' => '',
								'style' => '',
								'color' => ''
							),
							'radius' => '100px',
							'color' => array(
								'text' => '#fff',
								'textHover' => '',
								'bg' => '#cf2e2e',
								'bgHover' => '#f90',
								'borderHover' => ''
							)
						)
					),
					'width' => '30%',
					'position' => 'right',
					'contentGap' => '26px',
					'padding' => array(
						'top' => '20px',
						'right' => '20px',
						'bottom' => '20px',
						'left' => '20px'
					),
					'color' => array(
						'bg' => '#fff',
						'overlay' => '#282828d6',
						'cartText' => '#fff',
						'cartTextHover' => '#fff',
						'cartBg' => '#5566ca',
						'cartBgHover' => '#f90'
					)
				)
			),
			'itemStyles' => array(
				'type' => 'object',
				'default' => array(
					'padding' => array(
						'top' => '0px',
						'right' => '0px',
						'bottom' => '0px',
						'left' => '0px'
					),
					'margin' => array(
						'top' => '0px',
						'bottom' => '0px'
					),
					'border' => array(
						'width' => '',
						'style' => '',
						'color' => ''
					),
					'radius' => '0px',
					'color' => array(
						'bg' => '',
						'bgHover' => '',
						'borderHover' => ''
					),
					'shadow' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					),
					'shadowHover' => array(
						'enabled' => false,
						'horizontal' => 0,
						'vertical' => 0,
						'blur' => 0,
						'spread' => 0,
						'color' => '',
						'position' => ''
					)
				)
			),
			'toast' => array(
				'type' => 'object',
				'default' => array(
					'font' => array(
						'size' => '14px',
						'weight' => '500',
						'family' => ''
					),
					'color' => array(
						'text' => '#fff',
						'bg' => '#28a745'
					)
				)
			)
		),
		'editorScript' => array(
			'file:./index.js',
			'file:../index.js'
		),
		'editorStyle' => 'file:./index.css',
		'style' => array(
			'file:./style-index.css',
			'cozy-block--global-block-styles'
		),
		'viewScript' => array(
			'cozy-block--wishlist--frontend-script'
		),
		'render' => 'file:./render.php'
	)
);
