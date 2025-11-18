<?php

if ( ! isset( $block->context['postId'] ) ) {
	return '';
}

$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['clientId'] ) ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

if ( ! function_exists( 'render_cozy_block_post_comments_icon' ) ) {
	function render_cozy_block_post_comments_icon( $attributes, $post_comments_count ) {
		if ( $attributes['enableOptions']['icon'] && isset( $post_comments_count ) && ! empty( $post_comments_count ) && '0' != $post_comments_count ) {
			$icon_fill      = 'fill' === $attributes['icon']['layout'] ? $attributes['icon']['color'] : 'none';
			$icon_stroke    = 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['color'] : 'none';
			$stroke_width   = 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['strokeWidth'] : '';
			$stroke_opacity = 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['opacity'] / 100 : '';

			$icon = "
				<div class='cozy-block-post-comments__icon-wrapper view-{$attributes['icon']['view']} layout-{$attributes['icon']['layout']}'>
					<svg
						width='{$attributes['icon']['size']}'
						height='{$attributes['icon']['size']}'
						class='cozy-block-post-comments__icon'
						xmlns='http://www.w3.org/2000/svg'
						viewBox='{$attributes['icon']['viewBox']['vx']} {$attributes['icon']['viewBox']['vy']} {$attributes['icon']['viewBox']['vw']} {$attributes['icon']['viewBox']['vh']}'
						aria-hidden='true'
						fill='{$icon_fill}'
						stroke='{$icon_stroke}'
						stroke-width='{$stroke_width}'
						stroke-opacity='{$stroke_opacity}'
					>
						<path d='{$attributes['icon']['path']}'/>
					</svg>
				</div>
			";

			return $icon;
		}

		return '';
	}
}

$cozy_post_id        = $block->context['postId'];
$post_comments_count = get_comments_number( $cozy_post_id );
$post_comments_link  = get_comments_link( $cozy_post_id );

$wrapper_attributes = get_block_wrapper_attributes();

$classes   = array();
$classes[] = 'display-' . $attributes['display'];

$block_extra_classes = implode( ' ', $classes );

$icon_box_padding = cozy_render_TRBL( 'padding', $attributes['iconBox']['padding'] );
$icon_box_border  = cozy_render_TRBL( 'border', $attributes['iconBox']['border'] );
$icon_color       = array(
	'bg_hover'   => isset( $attributes['iconBox']['bgColorHover'] ) ? $attributes['iconBox']['bgColorHover'] : '',
	'icon_hover' => isset( $attributes['icon']['colorHover'] ) ? $attributes['icon']['colorHover'] : '',
	'bg'         => isset( $attributes['iconBox']['bgColor'] ) ? $attributes['iconBox']['bgColor'] : '',
	'text'       => isset( $attributes['label']['color'] ) ? $attributes['label']['color'] : '',
);


$block_styles = "
#$block_id.display-block {
    text-align: {$attributes['textAlign']};
}
#$block_id.display-block .cozy-block-post-comments__wrapper {
    justify-content: {$attributes['textAlign']};
    margin: {$attributes['contentGap']} 0;
}
#$block_id.display-inline {
    justify-content: {$attributes['contentJustify']};
    gap: {$attributes['contentGap']};
}

#$block_id .cozy-block-post-comments__wrapper {
	gap: {$attributes['icon']['gap']}
}
#$block_id .cozy-block-post-comments__wrapper:hover .cozy-block-post-comments__icon-wrapper {
    background-color: {$icon_color['bg_hover']};
}
#$block_id .cozy-block-post-comments__wrapper:hover .cozy-block-post-comments__icon-wrapper.layout-fill > .cozy-block-post-comments__icon {
    fill: {$icon_color['icon_hover']};
}
#$block_id .cozy-block-post-comments__wrapper:hover .cozy-block-post-comments__icon-wrapper.layout-outline > .cozy-block-post-comments__icon {
    stroke: {$icon_color['icon_hover']};
}

#$block_id .cozy-block-post-comments__icon-wrapper.view-stacked {
	{$icon_box_padding}
	{$icon_box_border}
	border-radius: {$attributes['iconBox']['borderRadius']};
	background-color: {$icon_color['bg']};
}
#$block_id .cozy-block-post-comments__icon {
	transform: rotate({$attributes['icon']['rotate']}deg);
}

#$block_id .cozy-block-post-comments__label {
	font-size: {$attributes['label']['fontSize']};
	font-family: {$attributes['label']['fontFamily']};
	font-weight: {$attributes['label']['fontWeight']};
	color: {$icon_color['text']};
}
";

$output = '<div ' . $wrapper_attributes . '>';

$font_families = array();

if ( isset( $attributes['label']['fontFamily'] ) && ! empty( $attributes['label']['fontFamily'] ) ) {
	$font_families[] = $attributes['label']['fontFamily'];
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

$output .= '<div class="cozy-block-post-comments ' . $block_extra_classes . '" id="' . $block_id . '">';

if ( $attributes['enableOptions']['labelBefore'] ) {
	$output .= '<p class="cozy-block-post-comments__label cozy-block-post-comments__label-before">' . $attributes['labelBefore'] . '</p>';
}

$output .= '<div>';

$open_new_tab = isset( $attributes['linkNewTab'] ) && $attributes['linkNewTab'] ? 'target="_blank"' : '';

$output .= '<a class="cozy-block-post-comments__wrapper" href="' . esc_url( $post_comments_link ) . '" ' . $open_new_tab . ' rel="noopener">';
if ( 'before' === $attributes['icon']['position'] ) {
	$output .= render_cozy_block_post_comments_icon( $attributes, $post_comments_count );
}

if ( $attributes['enableOptions']['comments'] ) {
	$output .= isset( $post_comments_count ) && '0' !== $post_comments_count ? '<p class="cozy-block-post-comments__comment-count">' . $post_comments_count . '</p>' : '';
}

if ( 'after' === $attributes['icon']['position'] ) {
	$output .= render_cozy_block_post_comments_icon( $attributes, $post_comments_count );
}
$output .= '</a>';

$output .= '</div>';

if ( $attributes['enableOptions']['labelAfter'] ) {
	$output .= '<p class="cozy-block-post-comments__label cozy-block-post-comments__label-after">' . $attributes['labelAfter'] . '</p>';
}

$output .= '</div></div>';

$post_type = $block->context['postType'];

if ( isset( $post_comments_count ) && 'post' === $post_type && ! empty( $post_comments_count ) && '0' != $post_comments_count ) {
	echo $output;
}
