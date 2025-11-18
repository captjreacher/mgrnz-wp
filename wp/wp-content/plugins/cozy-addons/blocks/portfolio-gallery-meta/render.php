<?php
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['clientId'] ) ) ) : '';

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$portfolio_id = get_the_ID();

$cpt_type = get_post_type( $portfolio_id );

$cat_styles = array(
	'gap'            => isset( $attributes['cat']['gap'] ) ? $attributes['cat']['gap'] : '',
	'row_gap'        => isset( $attributes['cat']['rowGap'] ) ? $attributes['cat']['rowGap'] : '',
	'padding'        => isset( $attributes['cat']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['cat']['padding'] ) : '',
	'margin'         => isset( $attributes['cat']['margin'] ) ? cozy_render_TRBL( 'margin', $attributes['cat']['margin'] ) : '',
	'border'         => isset( $attributes['cat']['border'] ) ? cozy_render_TRBL( 'border', $attributes['cat']['border'] ) : '',
	'radius'         => isset( $attributes['cat']['radius'] ) ? $attributes['cat']['radius'] : '',
	'font'           => array(
		'size'   => isset( $attributes['cat']['font']['size'] ) ? $attributes['cat']['font']['size'] : '',
		'weight' => isset( $attributes['cat']['font']['weight'] ) ? $attributes['cat']['font']['weight'] : '',
		'family' => isset( $attributes['cat']['font']['family'] ) ? $attributes['cat']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['cat']['letterCase'] ) ? $attributes['cat']['letterCase'] : '',
	'decoration'     => isset( $attributes['cat']['decoration'] ) ? $attributes['cat']['decoration'] : '',
	'line_height'    => isset( $attributes['cat']['lineHeight'] ) ? $attributes['cat']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['cat']['letterSpacing'] ) ? $attributes['cat']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['cat']['color']['text'] ) ? $attributes['cat']['color']['text'] : '',
		'bg'   => isset( $attributes['cat']['color']['bg'] ) ? $attributes['cat']['color']['bg'] : '',
	),
);

$title_styles = array(
	'margin'         => isset( $attributes['title']['margin'] ) ? cozy_render_TRBL( 'margin', $attributes['title']['margin'] ) : '',
	'font'           => array(
		'size'   => isset( $attributes['title']['font']['size'] ) ? $attributes['title']['font']['size'] : '',
		'weight' => isset( $attributes['title']['font']['weight'] ) ? $attributes['title']['font']['weight'] : '',
		'family' => isset( $attributes['title']['font']['family'] ) ? $attributes['title']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['title']['letterCase'] ) ? $attributes['title']['letterCase'] : '',
	'decoration'     => isset( $attributes['title']['decoration'] ) ? $attributes['title']['decoration'] : '',
	'line_height'    => isset( $attributes['title']['lineHeight'] ) ? $attributes['title']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['title']['letterSpacing'] ) ? $attributes['title']['letterSpacing'] : '',
	'color'          => array(
		'text' => isset( $attributes['title']['color']['text'] ) ? $attributes['title']['color']['text'] : '',
	),
);

$typography = array(
	'font'           => array(
		'size'   => isset( $attributes['typography']['font']['size'] ) ? $attributes['typography']['font']['size'] : '',
		'weight' => isset( $attributes['typography']['font']['weight'] ) ? $attributes['typography']['font']['weight'] : '',
		'family' => isset( $attributes['typography']['font']['family'] ) ? $attributes['typography']['font']['family'] : '',
	),
	'letter_case'    => isset( $attributes['typography']['letterCase'] ) ? $attributes['typography']['letterCase'] : '',
	'decoration'     => isset( $attributes['typography']['decoration'] ) ? $attributes['typography']['decoration'] : '',
	'line_height'    => isset( $attributes['typography']['lineHeight'] ) ? $attributes['typography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['typography']['letterSpacing'] ) ? $attributes['typography']['letterSpacing'] : '',
	'color'          => array(
		'text'       => isset( $attributes['typography']['color']['text'] ) ? $attributes['typography']['color']['text'] : '',
		'text_hover' => isset( $attributes['typography']['color']['textHover'] ) ? $attributes['typography']['color']['textHover'] : '',
	),
);

$block_styles = "
#$block_id.portfolio-gallery__meta-categories .category__wrapper {
    gap: {$cat_styles['gap']};
    row-gap: {$cat_styles['row_gap']};
    {$cat_styles['margin']}
}
#$block_id.portfolio-gallery__meta-categories .category__item {
    {$cat_styles['padding']}
    {$cat_styles['border']}
    border-radius: {$cat_styles['radius']};
    font-size: {$cat_styles['font']['size']};
    font-weight: {$cat_styles['font']['weight']};
    font-family: {$cat_styles['font']['family']};
    text-transform: {$cat_styles['letter_case']};
    text-decoration: {$cat_styles['decoration']};
    line-height: {$cat_styles['line_height']};
    letter-spacing: {$cat_styles['letter_spacing']};
    background-color: {$cat_styles['color']['bg']};
    color: {$cat_styles['color']['text']};
}

#$block_id .meta__title {
	{$title_styles['margin']}
	font-size: {$title_styles['font']['size']};
    font-weight: {$title_styles['font']['weight']};
    font-family: {$title_styles['font']['family']};
    text-transform: {$title_styles['letter_case']};
    text-decoration: {$title_styles['decoration']};
    line-height: {$title_styles['line_height']};
    letter-spacing: {$title_styles['letter_spacing']};
    color: {$title_styles['color']['text']};
}

#$block_id .meta__content, #$block_id.portfolio-gallery__meta-url a {
	font-size: {$typography['font']['size']};
    font-weight: {$typography['font']['weight']};
    font-family: {$typography['font']['family']};
    text-transform: {$typography['letter_case']};
    text-decoration: {$typography['decoration']};
    line-height: {$typography['line_height']};
    letter-spacing: {$typography['letter_spacing']};
    color: {$typography['color']['text']};
}
#$block_id.portfolio-gallery__meta-url a:hover {
    color: {$typography['color']['text_hover']};
}
";

$font_families = array();

if ( isset( $attributes['cat']['font']['family'] ) && ! empty( $attributes['cat']['font']['family'] ) ) {
	$font_families[] = $attributes['cat']['font']['family'];
}
if ( isset( $attributes['title']['font']['family'] ) && ! empty( $attributes['title']['font']['family'] ) ) {
	$font_families[] = $attributes['title']['font']['family'];
}
if ( isset( $attributes['typography']['font']['family'] ) && ! empty( $attributes['typography']['font']['family'] ) ) {
	$font_families[] = $attributes['typography']['font']['family'];
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

if ( 'ca_portfolio_gallery' === $cpt_type ) :
	$wrapper_attributes = get_block_wrapper_attributes();

	$classes   = array();
	$classes[] = 'cozy-block-portfolio-gallery-meta';
	$classes[] = 'portfolio-gallery__meta-' . $attributes['meta'];

	?>

<div class="cozy-block-wrapper">
	<div <?php echo $wrapper_attributes; ?>>
		<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>">
			<?php
			switch ( $attributes['meta'] ) {
				case 'categories':
					$portfolio_taxonomy = get_the_terms( $portfolio_id, 'ca_portfolio_gallery_category' );

					if ( ! empty( $portfolio_taxonomy ) ) {
						?>
							<ul class="category__wrapper">
								<?php
								foreach ( $portfolio_taxonomy as $portfolio_cat ) {
									$name = isset( $portfolio_cat->name ) ? sanitize_text_field( $portfolio_cat->name ) : '';
									if ( empty( $name ) ) {
										continue;
									}
									?>
							<li class="category__item"><?php echo esc_html( $name ); ?></li>
									<?php
								}
								?>
							</ul>
								<?php
					}

					break;

				case 'url':
					$portfolio_cpt_url = get_post_meta( $portfolio_id, 'ca_portfolio_gallery_url', true );
					$new_tab           = isset( $attributes['link']['newTab'] ) && filter_var( $attributes['link']['newTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
					$nofollow          = isset( $attributes['link']['noFollow'] ) && filter_var( $attributes['link']['noFollow'], FILTER_VALIDATE_BOOLEAN ) ? 'nofollow' : '';

					if ( '#' !== $portfolio_cpt_url && ! empty( $portfolio_cpt_url ) ) {
						?>
						<a class="meta__link" href="<?php echo esc_url( $portfolio_cpt_url ); ?>" target="<?php echo esc_attr( $new_tab ); ?>" rel="<?php echo esc_attr( $nofollow ); ?>"><?php echo esc_html( $attributes['metaTitle'] ); ?></a>
						<?php
					}

					break;

				default:
					$meta_field    = 'year' === $attributes['meta'] ? 'project_year' : $attributes['meta'];
					$portfolio_cpt = get_post_meta( $portfolio_id, 'ca_portfolio_gallery_' . $meta_field, true );
					if ( ! empty( $portfolio_cpt ) ) {
						?>
						<p class="meta__title"><?php echo esc_html( $attributes['metaTitle'] ); ?></p>
						<p class="meta__content"><?php echo esc_html( $portfolio_cpt ); ?></p>
						<?php
					}
			}
			?>
		</div>
	</div>

</div>

	<?php

endif;