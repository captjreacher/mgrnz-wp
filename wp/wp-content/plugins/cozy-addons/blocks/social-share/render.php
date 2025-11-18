<?php
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_single() ) {
	return '';
}

$client_id = ! empty( $attributes['clientId'] ) ? sanitize_key( wp_unslash( $attributes['clientId'] ) ) : '';

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attr_display        = array(
	'layout'      => isset( $attributes['display']['layout'] ) ? $attributes['display']['layout'] : 'default',
	'position'    => isset( $attributes['display']['position'] ) ? $attributes['display']['position'] : 'left',
	'orientation' => isset( $attributes['display']['orientation'] ) ? $attributes['display']['orientation'] : 'horizontal',
	'align'       => isset( $attributes['display']['align'] ) ? $attributes['display']['align'] : 'center',
);
$attr_wrapper_styles = array(
	'padding'      => isset( $attributes['wrapperStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['wrapperStyles']['padding'] ) : '',
	'margin'       => isset( $attributes['wrapperStyles']['margin'] ) ? cozy_render_TRBL( 'margin', $attributes['wrapperStyles']['margin'] ) : '',
	'border'       => isset( $attributes['wrapperStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['wrapperStyles']['border'] ) : '',
	'radius'       => isset( $attributes['wrapperStyles']['radius'] ) ? $attributes['wrapperStyles']['radius'] : '',
	'stack_layout' => isset( $attributes['wrapperStyles']['stackLayout'] ) && filter_var( $attributes['wrapperStyles']['stackLayout'], FILTER_VALIDATE_BOOLEAN ) ? 'wrap' : 'nowrap',
	'color'        => array(
		'bg' => isset( $attributes['wrapperStyles']['color']['bg'] ) ? $attributes['wrapperStyles']['color']['bg'] : '',
	),
);
$attr_icon           = array(
	'label_gap'      => isset( $attributes['icon']['labelGap'] ) ? $attributes['icon']['labelGap'] : '',
	'view'           => isset( $attributes['icon']['view'] ) ? $attributes['icon']['view'] : 'stacked',
	'gap'            => isset( $attributes['icon']['gap'] ) ? $attributes['icon']['gap'] : '',
	'row_gap'        => isset( $attributes['icon']['rowGap'] ) ? $attributes['icon']['rowGap'] : '',
	'box_width'      => isset( $attributes['icon']['boxWidth'] ) ? $attributes['icon']['boxWidth'] : '',
	'box_height'     => isset( $attributes['icon']['boxHeight'] ) ? $attributes['icon']['boxHeight'] : '',
	'padding'        => isset( $attributes['icon']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['icon']['padding'] ) : '',
	'border'         => isset( $attributes['icon']['border'] ) ? cozy_render_TRBL( 'border', $attributes['icon']['border'] ) : '',
	'radius'         => isset( $attributes['icon']['radius'] ) ? $attributes['icon']['radius'] : '',
	'size'           => isset( $attributes['icon']['size'] ) ? $attributes['icon']['size'] : '',
	'font'           => array(
		'size'   => isset( $attributes['icon']['font']['size'] ) ? $attributes['icon']['font']['size'] : '',
		'weight' => isset( $attributes['icon']['font']['weight'] ) ? $attributes['icon']['font']['weight'] : '',
		'family' => isset( $attributes['icon']['font']['family'] ) ? $attributes['icon']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['icon']['letterCase'] ) ? $attributes['icon']['letterCase'] : '',
	'decoration'     => isset( $attributes['icon']['decoration'] ) ? $attributes['icon']['decoration'] : '',
	'line_height'    => isset( $attributes['icon']['lineHeight'] ) ? $attributes['icon']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['icon']['letterSpacing'] ) ? $attributes['icon']['letterSpacing'] : '',
	'color'          => array(
		'svg'          => isset( $attributes['icon']['color']['svg'] ) ? $attributes['icon']['color']['svg'] : '',
		'text'         => isset( $attributes['icon']['color']['text'] ) ? $attributes['icon']['color']['text'] : '',
		'text_hover'   => isset( $attributes['icon']['color']['textHover'] ) ? $attributes['icon']['color']['textHover'] : '',
		'bg'           => isset( $attributes['icon']['color']['bg'] ) ? $attributes['icon']['color']['bg'] : '',
		'bg_hover'     => isset( $attributes['icon']['color']['bgHover'] ) ? $attributes['icon']['color']['bgHover'] : '',
		'border_hover' => isset( $attributes['icon']['color']['borderHover'] ) ? $attributes['icon']['color']['borderHover'] : '',
	),
);

$block_styles = "
#$block_id .social-share__wrap {
	{$attr_wrapper_styles['padding']}
	{$attr_wrapper_styles['margin']}
	{$attr_wrapper_styles['border']}
	border-radius: {$attr_wrapper_styles['radius']};
	background-color: {$attr_wrapper_styles['color']['bg']};
	gap: {$attr_icon['gap']};
	row-gap: {$attr_icon['row_gap']};
	flex-wrap: {$attr_wrapper_styles['stack_layout']};
}

#$block_id .social-share__icon a {
	width: {$attr_icon['box_width']};
	height: {$attr_icon['box_height']};
	{$attr_icon['padding']}
	{$attr_icon['border']}
	border-radius: {$attr_icon['radius']};
}
#$block_id .social-share__icon svg {
	width: {$attr_icon['size']};
	height: {$attr_icon['size']};
}
#$block_id .social-share__icon.view-stacked:not(.has-brand-color) a {
	background-color: {$attr_icon['color']['bg']};
}
#$block_id .social-share__icon:not(.has-brand-color) a {
	color: {$attr_icon['color']['text']};
}
#$block_id .social-share__icon:not(.has-brand-color) svg {
	color: {$attr_icon['color']['svg']};
}
#$block_id .social-share__icon a:hover {
	background-color: {$attr_icon['color']['bg_hover']};
	border-color: {$attr_icon['color']['border_hover']};
}
#$block_id .social-share__icon a:hover, #$block_id .social-share__icon a:hover svg {
	color: {$attr_icon['color']['text_hover']};
}
#$block_id .social-share__icon .social-share__label {
	margin-left: {$attr_icon['label_gap']};
	font-size: {$attr_icon['font']['size']};
	font-weight: {$attr_icon['font']['weight']};
	font-family: {$attr_icon['font']['family']};
	text-transform: {$attr_icon['letter_case']};
	text-decoration: {$attr_icon['decoration']};
	line-height: {$attr_icon['line_height']};
	letter-spacing: {$attr_icon['letter_spacing']};
}
";

$valid_social_list = array(
	'Facebook',
	'X',
	'Linkedin',
	'Telegram',
	'Email',
	'Pinterest',
	'Reddit',
	'Tumblr',
	'Whatsapp',
);

$social_share_params = array(
	'Linkedin'  => array(
		'icon'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M22.2857 0H1.70893C0.766071 0 0 0.776786 0 1.73036V22.2696C0 23.2232 0.766071 24 1.70893 24H22.2857C23.2286 24 24 23.2232 24 22.2696V1.73036C24 0.776786 23.2286 0 22.2857 0ZM7.25357 20.5714H3.69643V9.11786H7.25893V20.5714H7.25357ZM5.475 7.55357C4.33393 7.55357 3.4125 6.62679 3.4125 5.49107C3.4125 4.35536 4.33393 3.42857 5.475 3.42857C6.61071 3.42857 7.5375 4.35536 7.5375 5.49107C7.5375 6.63214 6.61607 7.55357 5.475 7.55357ZM20.5875 20.5714H17.0304V15C17.0304 13.6714 17.0036 11.9625 15.1821 11.9625C13.3286 11.9625 13.0446 13.4089 13.0446 14.9036V20.5714H9.4875V9.11786H12.9V10.6821H12.9482C13.425 9.78214 14.5875 8.83393 16.3179 8.83393C19.9179 8.83393 20.5875 11.2071 20.5875 14.2929V20.5714Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'https://www.linkedin.com/sharing/share-offsite/',
	),
	'Facebook'  => array(
		'icon'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.101 23.691V15.711H6.627V12.044H9.101V10.464C9.101 6.37901 10.949 4.48601 14.959 4.48601C15.36 4.48601 15.914 4.52801 16.427 4.58901C16.8112 4.62855 17.1924 4.69369 17.568 4.78401V8.10901C17.3509 8.08875 17.133 8.07675 16.915 8.07301C16.6707 8.06667 16.4264 8.06367 16.182 8.06401C15.475 8.06401 14.923 8.16001 14.507 8.37301C14.2273 8.51332 13.9922 8.72869 13.828 8.99501C13.57 9.41501 13.454 9.99001 13.454 10.747V12.044H17.373L16.987 14.147L16.7 15.711H13.454V23.956C19.396 23.238 24 18.179 24 12.044C24 5.41701 18.627 0.0440063 12 0.0440063C5.373 0.0440063 0 5.41701 0 12.044C0 17.672 3.874 22.394 9.101 23.691Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'https://www.facebook.com/sharer/sharer.php',
	),
	'Whatsapp'  => array(
		'icon'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M17.472 14.382C17.175 14.233 15.714 13.515 15.442 13.415C15.169 13.316 14.971 13.267 14.772 13.565C14.575 13.862 14.005 14.531 13.832 14.729C13.659 14.928 13.485 14.952 13.188 14.804C12.891 14.654 11.933 14.341 10.798 13.329C9.91501 12.541 9.31801 11.568 9.14501 11.27C8.97201 10.973 9.12701 10.812 9.27501 10.664C9.40901 10.531 9.57301 10.317 9.72101 10.144C9.87001 9.97001 9.91901 9.84601 10.019 9.64701C10.118 9.44901 10.069 9.27601 9.99401 9.12701C9.91901 8.97801 9.32501 7.51501 9.07801 6.92001C8.83601 6.34101 8.59101 6.42001 8.40901 6.41001C8.23601 6.40201 8.03801 6.40001 7.83901 6.40001C7.64101 6.40001 7.31901 6.47401 7.04701 6.77201C6.77501 7.06901 6.00701 7.78801 6.00701 9.25101C6.00701 10.713 7.07201 12.126 7.22001 12.325C7.36901 12.523 9.31601 15.525 12.297 16.812C13.006 17.118 13.559 17.301 13.991 17.437C14.703 17.664 15.351 17.632 15.862 17.555C16.433 17.47 17.62 16.836 17.868 16.142C18.116 15.448 18.116 14.853 18.041 14.729C17.967 14.605 17.77 14.531 17.472 14.382ZM12.05 21.785H12.046C10.2758 21.7852 8.53809 21.3092 7.01501 20.407L6.65401 20.193L2.91301 21.175L3.91101 17.527L3.67601 17.153C2.68645 15.5773 2.16295 13.7537 2.16601 11.893C2.16701 6.44301 6.60201 2.00901 12.054 2.00901C14.694 2.00901 17.176 3.03901 19.042 4.90701C19.9627 5.82363 20.6924 6.91374 21.189 8.11425C21.6856 9.31477 21.9392 10.6019 21.935 11.901C21.932 17.351 17.498 21.785 12.05 21.785ZM20.463 3.48801C19.3612 2.37893 18.0502 1.49955 16.6061 0.900811C15.162 0.302074 13.6133 -0.00410676 12.05 1.046e-05C5.49501 1.046e-05 0.160007 5.33501 0.157007 11.892C0.157007 13.988 0.704007 16.034 1.74501 17.837L0.0570068 24L6.36201 22.346C8.1056 23.2959 10.0594 23.7938 12.045 23.794H12.05C18.604 23.794 23.94 18.459 23.943 11.901C23.9478 10.3383 23.6428 8.79011 23.0454 7.34604C22.4481 5.90198 21.5704 4.59068 20.463 3.48801Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'https://api.whatsapp.com/send',
	),
	'X'         => array(
		'icon'      => '<svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M18.901 0.153015H22.581L14.541 9.34302L24 21.846H16.594L10.794 14.262L4.156 21.846H0.474L9.074 12.016L0 0.154015H7.594L12.837 7.08602L18.901 0.153015ZM17.61 19.644H19.649L6.486 2.24002H4.298L17.61 19.644Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'https://twitter.com/share',
	),
	'Pinterest' => array(
		'icon'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.017 0C5.39599 0 0.0289917 5.367 0.0289917 11.987C0.0289917 17.066 3.18699 21.404 7.64699 23.149C7.54199 22.2 7.44799 20.746 7.68799 19.71C7.90699 18.773 9.09399 13.753 9.09399 13.753C9.09399 13.753 8.73499 13.033 8.73499 11.972C8.73499 10.309 9.70199 9.061 10.903 9.061C11.927 9.061 12.421 9.83 12.421 10.749C12.421 11.778 11.768 13.316 11.429 14.741C11.144 15.934 12.029 16.906 13.204 16.906C15.332 16.906 16.972 14.661 16.972 11.419C16.972 8.558 14.909 6.55 11.964 6.55C8.55399 6.55 6.55499 9.112 6.55499 11.749C6.55499 12.782 6.94899 13.892 7.44399 14.49C7.54299 14.61 7.55599 14.715 7.52899 14.835C7.43899 15.21 7.23599 16.034 7.19499 16.198C7.14199 16.423 7.02299 16.469 6.79399 16.363C5.29899 15.673 4.36099 13.485 4.36099 11.717C4.36099 7.941 7.10899 4.465 12.281 4.465C16.439 4.465 19.673 7.432 19.673 11.388C19.673 15.523 17.066 18.85 13.44 18.85C12.226 18.85 11.086 18.221 10.682 17.471L9.93299 20.319C9.66399 21.364 8.92899 22.671 8.43499 23.465C9.55799 23.81 10.741 24 11.985 24C18.592 24 23.97 18.635 23.97 12.013C23.97 5.39 18.592 0.026 11.985 0.026L12.017 0Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'https://www.pinterest.com/pin/create/button/',
	),
	'Reddit'    => array(
		'icon'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12 0C5.373 0 0 5.373 0 12C0 15.314 1.343 18.314 3.515 20.485L1.229 22.771C0.775 23.225 1.097 24 1.738 24H12C18.627 24 24 18.627 24 12C24 5.373 18.627 0 12 0ZM16.388 3.199C17.492 3.199 18.387 4.094 18.387 5.198C18.387 6.303 17.492 7.198 16.388 7.198C15.442 7.198 14.649 6.541 14.441 5.659V5.661C13.294 5.823 12.409 6.811 12.409 8.002V8.009C14.185 8.076 15.809 8.576 17.095 9.372C17.568 9.009 18.159 8.792 18.802 8.792C20.349 8.792 21.604 10.046 21.604 11.594C21.604 12.711 20.949 13.675 20.003 14.125C19.915 17.381 16.366 20.001 12.006 20.001C7.645 20.001 4.101 17.384 4.008 14.131C3.054 13.684 2.394 12.716 2.394 11.593C2.394 10.045 3.649 8.791 5.197 8.791C5.842 8.791 6.436 9.009 6.909 9.376C8.184 8.586 9.79 8.085 11.549 8.011V8.001C11.549 6.338 12.812 4.967 14.429 4.794C14.617 3.883 15.422 3.199 16.388 3.199ZM8.303 11.575C7.519 11.575 6.844 12.355 6.797 13.372C6.75 14.388 7.437 14.801 8.223 14.801C9.009 14.801 9.594 14.432 9.641 13.416C9.688 12.399 9.088 11.575 8.303 11.575ZM15.709 11.575C14.923 11.575 14.324 12.399 14.371 13.416C14.418 14.433 15.005 14.801 15.789 14.801C16.574 14.801 17.262 14.388 17.215 13.372C17.169 12.355 16.494 11.575 15.709 11.575ZM12.006 15.588C11.032 15.588 10.099 15.636 9.236 15.723C9.089 15.738 8.995 15.891 9.053 16.028C9.536 17.182 10.675 17.992 12.006 17.992C13.336 17.992 14.476 17.182 14.959 16.028C15.016 15.891 14.922 15.738 14.775 15.723C13.912 15.636 12.98 15.588 12.006 15.588Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'https://reddit.com/submit',
	),
	'Telegram'  => array(
		'icon'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M11.944 3.26667e-05C8.77112 0.0148396 5.73324 1.28566 3.4949 3.53449C1.25656 5.78332 -3.4549e-05 8.82711 7.12435e-10 12C7.12441e-10 15.1826 1.26428 18.2349 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2349 24 15.1826 24 12C24 8.81743 22.7357 5.76519 20.4853 3.51475C18.2348 1.26431 15.1826 3.26667e-05 12 3.26667e-05C11.9813 -1.08889e-05 11.9627 -1.08889e-05 11.944 3.26667e-05ZM16.906 7.22403C17.006 7.22203 17.227 7.24703 17.371 7.36403C17.4667 7.44713 17.5277 7.56311 17.542 7.68903C17.558 7.78203 17.578 7.99503 17.562 8.16103C17.382 10.059 16.6 14.663 16.202 16.788C16.034 17.688 15.703 17.989 15.382 18.018C14.686 18.083 14.157 17.558 13.482 17.116C12.426 16.423 11.829 15.992 10.804 15.316C9.619 14.536 10.387 14.106 11.062 13.406C11.239 13.222 14.309 10.429 14.369 10.176C14.376 10.144 14.383 10.026 14.313 9.96403C14.243 9.90203 14.139 9.92303 14.064 9.94003C13.958 9.96403 12.271 11.08 9.003 13.285C8.523 13.615 8.09 13.775 7.701 13.765C7.273 13.757 6.449 13.524 5.836 13.325C5.084 13.08 4.487 12.951 4.539 12.536C4.566 12.32 4.864 12.099 5.432 11.873C8.93 10.349 11.262 9.34403 12.43 8.85903C15.762 7.47303 16.455 7.23203 16.906 7.22403Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'https://t.me/share/url',
	),
	'Tumblr'    => array(
		'icon'      => '<svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.563 24C4.47 24 2.532 20.244 2.532 17.589V9.747H0.115997V6.648C3.746 5.335 4.628 2.052 4.826 0.179C4.84 0.051 4.941 0 4.999 0H8.516V6.114H13.317V9.747H8.497V17.217C8.513 18.218 8.872 19.588 10.704 19.588H10.794C11.425 19.568 12.28 19.383 12.73 19.169L13.886 22.594C13.45 23.23 11.486 23.968 9.73 23.998H9.552L9.563 24Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'https://www.tumblr.com/widgets/share/tool',
	),
	'Email'     => array(
		'icon'      => '<svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M24 2.457V16.366C24 17.27 23.268 18.002 22.364 18.002H18.545V8.73L12 13.64L5.455 8.73V18.003H1.636C1.42107 18.003 1.20825 17.9606 1.0097 17.8784C0.811145 17.7961 0.63075 17.6755 0.47882 17.5235C0.32689 17.3714 0.206404 17.191 0.124246 16.9924C0.0420884 16.7938 -0.000131068 16.5809 3.05652e-07 16.366V2.457C3.05652e-07 0.433998 2.309 -0.721002 3.927 0.492998L5.455 1.64L12 6.548L18.545 1.638L20.073 0.492998C21.69 -0.720002 24 0.433998 24 2.457Z" fill="currentColor"/>
			</svg>',
		'share_url' => 'mailto:',
	),
);

// Remove duplicate font families.
$font_families = array();

if ( isset( $attributes['icon']['font']['family'] ) && ! empty( $attributes['icon']['font']['family'] ) ) {
	$font_families[] = $attributes['icon']['font']['family'];
}

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

$permalink = get_permalink();

$classes   = array();
$classes[] = 'cozy-block-social-share';
$classes[] = 'layout-' . $attr_display['layout'];
$classes[] = 'position-' . $attr_display['position'];
$classes[] = 'orientation-' . $attr_display['orientation'];
$classes[] = 'align-' . $attr_display['align'];
$classes[] = 'view-' . $attr_icon['view'];
?>

<div class="cozy-block-wrapper">

	<?php
	add_action(
		'wp_enqueue_scripts',
		function () use ( $block_styles ) {
			wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
		}
	);
	?>

	<div class="<?php echo esc_html( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>" id="<?php echo esc_html( $block_id ); ?>">
		<ul class="social-share__wrap">
			<?php
			if ( isset( $attributes['socialList'] ) && is_array( $attributes['socialList'] ) ) {
				foreach ( $attributes['socialList'] as $key => $social ) {
					if ( ! in_array( $social, $valid_social_list, true ) ) {
						continue;
					}

					$classes   = array();
					$classes[] = 'social-share__icon';
					$classes[] = strtolower( $social );
					$classes[] = isset( $attributes['icon']['useBrandColor'] ) && filter_Var( $attributes['icon']['useBrandColor'], FILTER_VALIDATE_BOOLEAN ) ? 'has-brand-color' : '';

					$social_options = isset( $attributes['socialOptions'] ) && ! empty( $attributes['socialOptions'] ) ? $attributes['socialOptions'] : array();

					if ( empty( $social_options ) ) {
						break;
					}

					$social_arr = array_filter(
						$social_options,
						function ( $item ) use ( $social ) {
							return $item['key'] === $social;
						}
					);
					$social_arr = reset( $social_arr );

					if ( empty( $social_arr ) ) {
						continue;
					}

					$share_url = $social_share_params[ $social ]['share_url'];

					$post_title = get_the_title();
					$post_url   = get_permalink();

					switch ( $social ) {
						case 'Email':
							$share_url .= '?subject=Check out this post';
							$share_url .= '&body=I thought you might like this:%0A' . esc_html( $post_title ) . '%0A' . esc_url( $post_url );
							break;

						case 'Facebook':
							$share_url .= '?u=' . esc_url( $post_url );
							break;

						case 'Linkedin':
							$share_url .= '?url=' . esc_url( $post_url );
							break;

						case 'Pinterest':
							$share_url .= '?url=' . esc_url( $post_url );
							break;

						case 'Reddit':
							$share_url .= '?url=' . esc_url( $post_url ) . '&title=' . esc_html( $post_title );
							break;

						case 'Telegram':
							$share_url .= '?url=' . esc_url( $post_url ) . '&text=' . esc_html( $post_title );
							break;

						case 'Tumblr':
							$share_url .= '?canonicalUrl=' . esc_url( $post_url ) . '&title=' . esc_html( $post_title );
							break;

						case 'X':
							$share_url .= '?url=' . esc_url( $post_url ) . '&text=' . esc_html( $post_title );
							break;

						case 'Whatsapp':
							$share_url .= '?text=' . esc_html( $post_title ) . '%20' . esc_url( $post_url );
							break;

						default:
							break;
					}

					$open_new_tab = isset( $attributes['openNewTab'] ) && filter_var( $attributes['openNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
					$nofollow     = isset( $attr_display['noFollow'] ) && filter_var( $attributes['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';
					?>
					<li class="<?php echo implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ); ?>">
						<a href="<?php echo esc_url( $share_url ); ?>" target="<?php echo esc_attr( $open_new_tab ); ?>" rel="<?php echo esc_attr( $nofollow ); ?>">
							<?php
							if ( isset( $attributes['icon']['enableIcon'] ) && filter_var( $attributes['icon']['enableIcon'], FILTER_VALIDATE_BOOLEAN ) ) {
								echo $social_share_params[ $social ]['icon'];
							}

							if ( isset( $attributes['icon']['enableLabel'] ) && filter_var( $attributes['icon']['enableLabel'], FILTER_VALIDATE_BOOLEAN ) ) {
								?>
								<span class="social-share__label">
									<?php
									echo ! empty( $social_arr['label'] ) ? esc_html(
										$social_arr['label']
									) : esc_html( $social );
									?>
								</span>
								<?php
							}
							?>
						</a>
					</li>
					<?php
				}
			}
			?>
		</ul>
	</div>
</div>