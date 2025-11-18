<?php

use CozyAddons\Helpers\Utils;

$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( sanitize_key( $attributes['blockClientId'] ) ) ) : '';
$cozy_block_var = 'cozyProductReview_' . str_replace( '-', '_', $client_id );

$blockId = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$woo_product_comments = Utils::get_woo_product_reviews();

// Use array_filter to filter reviews.
$woo_product_comments = array_filter(
	$woo_product_comments,
	function ( $review ) use ( $attributes ) {
		return $review->product_rating >= $attributes['ratingFilter'];
	}
);

// Reindex the array to start from 0
$woo_product_comments = array_values( $woo_product_comments );

$attributes = array_merge( $attributes, array( 'woo_product_comments' => $woo_product_comments ) );

wp_localize_script( 'cozy-block--product-review--frontend-script', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block--product-review--frontend-script', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductReviewInit( "' . esc_html( $client_id ) . '" ) }) ' );

$displayColumn1 = ( $attributes['gridOptions']['displayColumn'] <= 3 ) ? $attributes['gridOptions']['displayColumn'] : 3;
$displayColumn2 = ( $attributes['gridOptions']['displayColumn'] <= 2 ) ? $attributes['gridOptions']['displayColumn'] : 2;

$container_color = array(
	'text'         => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
	'border'       => isset( $attributes['containerStyles']['border']['color'] ) ? $attributes['containerStyles']['border']['color'] : '',
	'bg'           => isset( $attributes['containerStyles']['bgColor'] ) ? $attributes['containerStyles']['bgColor'] : '',
	'shadow'       => isset( $attributes['containerStyles']['boxShadow']['color'] ) ? $attributes['containerStyles']['boxShadow']['color'] : '',
	'shadow_hover' => isset( $attributes['containerStyles']['boxShadow']['colorHover'] ) ? $attributes['containerStyles']['boxShadow']['colorHover'] : '',
	'border_hover' => isset( $attributes['containerStyles']['border']['colorHover'] ) ? $attributes['containerStyles']['border']['colorHover'] : '',
	'bg_hover'     => isset( $attributes['containerStyles']['bgColorHover'] ) ? $attributes['containerStyles']['bgColorHover'] : '',
);

$heading_styles = array(
	'letter_case'    => isset( $attributes['headingOptions']['letterCase'] ) ? $attributes['headingOptions']['letterCase'] : '',
	'decoration'     => isset( $attributes['headingOptions']['decoration'] ) ? $attributes['headingOptions']['decoration'] : '',
	'line_height'    => isset( $attributes['headingOptions']['lineHeight'] ) ? $attributes['headingOptions']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['headingOptions']['letterSpacing'] ) ? $attributes['headingOptions']['letterSpacing'] : '',
);
$heading_color  = array(
	'text'      => isset( $attributes['headingOptions']['color'] ) ? $attributes['headingOptions']['color'] : '',
	'rating_bg' => isset( $attributes['headingOptions']['iconBgColor'] ) ? $attributes['headingOptions']['iconBgColor'] : '',
);

$title_color  = array(
	'text'       => isset( $attributes['reviewTitle']['textColor'] ) ? $attributes['reviewTitle']['textColor'] : '',
	'text_hover' => isset( $attributes['reviewTitle']['titleColorHover'] ) ? $attributes['reviewTitle']['titleColorHover'] : '',
);
$title_styles = array(
	'letter_case'    => isset( $attributes['reviewTitle']['titleTypography']['letterCase'] ) ? $attributes['reviewTitle']['titleTypography']['letterCase'] : '',
	'decoration'     => isset( $attributes['reviewTitle']['titleTypography']['decoration'] ) ? $attributes['reviewTitle']['titleTypography']['decoration'] : '',
	'line_height'    => isset( $attributes['reviewTitle']['titleTypography']['lineHeight'] ) ? $attributes['reviewTitle']['titleTypography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['reviewTitle']['titleTypography']['letterSpacing'] ) ? $attributes['reviewTitle']['titleTypography']['letterSpacing'] : '',
);

$loader_color  = array(
	'border'       => isset( $attributes['ajaxButton']['border']['color'] ) ? $attributes['ajaxButton']['border']['color'] : '',
	'text'         => isset( $attributes['ajaxButton']['color'] ) ? $attributes['ajaxButton']['color'] : '',
	'bg'           => isset( $attributes['ajaxButton']['bgColor'] ) ? $attributes['ajaxButton']['bgColor'] : '',
	'border_hover' => isset( $attributes['ajaxButton']['border']['colorHover'] ) ? $attributes['ajaxButton']['border']['colorHover'] : '',
	'text_hover'   => isset( $attributes['ajaxButton']['colorHover'] ) ? $attributes['ajaxButton']['colorHover'] : '',
	'bg_hover'     => isset( $attributes['ajaxButton']['bgColorHover'] ) ? $attributes['ajaxButton']['bgColorHover'] : '',
);
$loader_styles = array(
	'letter_case'    => isset( $attributes['ajaxButton']['letterCase'] ) ? $attributes['ajaxButton']['letterCase'] : '',
	'decoration'     => isset( $attributes['ajaxButton']['decoration'] ) ? $attributes['ajaxButton']['decoration'] : '',
	'line_height'    => isset( $attributes['ajaxButton']['lineHeight'] ) ? $attributes['ajaxButton']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['ajaxButton']['letterSpacing'] ) ? $attributes['ajaxButton']['letterSpacing'] : '',
);

$block_typography = array(
	'letter_case'    => isset( $attributes['typography']['letterCase'] ) ? $attributes['typography']['letterCase'] : '',
	'decoration'     => isset( $attributes['typography']['decoration'] ) ? $attributes['typography']['decoration'] : '',
	'line_height'    => isset( $attributes['typography']['lineHeight'] ) ? $attributes['typography']['lineHeight'] : '',
	'letter_spacing' => isset( $attributes['typography']['letterSpacing'] ) ? $attributes['typography']['letterSpacing'] : '',
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
	'gap'    => isset( $attributes['pagination']['gap'] ) ? $attributes['pagination']['gap'] : '',
);
$bullet_color = array(
	'default_bg'       => isset( $attributes['pagination']['color'] ) ? $attributes['pagination']['color'] : '',
	'active_bg'        => isset( $attributes['pagination']['activeColor'] ) ? $attributes['pagination']['activeColor'] : '',
	'default_bg_hover' => isset( $attributes['pagination']['colorHover'] ) ? $attributes['pagination']['colorHover'] : '',
	'active_bg_hover'  => isset( $attributes['pagination']['activeColorHover'] ) ? $attributes['pagination']['activeColorHover'] : '',
);

$block_styles = "
    #{$blockId} {
        font-size: {$attributes['typography']['fontSize']}px;
        font-weight: {$attributes['typography']['fontWeight']};
        font-family: {$attributes['typography']['fontFamily']};
        text-transform: {$block_typography['letter_case']};
        text-decoration: {$block_typography['decoration']};
        line-height: {$block_typography['line_height']};
        letter-spacing: {$block_typography['letter_spacing']};
        color: {$container_color['text']};
    }
    #{$blockId} .woo-product-review {
        padding: {$attributes['containerStyles']['padding']['top']}px {$attributes['containerStyles']['padding']['right']}px {$attributes['containerStyles']['padding']['bottom']}px {$attributes['containerStyles']['padding']['left']}px;
        border-style: {$attributes['containerStyles']['border']['type']};
        border-width: {$attributes['containerStyles']['border']['width']['top']}px {$attributes['containerStyles']['border']['width']['right']}px {$attributes['containerStyles']['border']['width']['bottom']}px {$attributes['containerStyles']['border']['width']['left']}px;
        border-color: {$container_color['border']};
        background-color: {$container_color['bg']};
        border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    }
    #{$blockId}.has-box-shadow .woo-product-review {
        box-shadow: {$attributes['containerStyles']['boxShadow']['horizontal']}px {$attributes['containerStyles']['boxShadow']['vertical']}px {$attributes['containerStyles']['boxShadow']['blur']}px {$attributes['containerStyles']['boxShadow']['spread']}px {$container_color['shadow']} {$attributes['containerStyles']['boxShadow']['position']};
    }
    #{$blockId} .woo-product-review:hover {
        border-color: {$container_color['border_hover']};
        background-color: {$container_color['bg_hover']};
    }
    #{$blockId}.has-box-shadow .woo-product-review:hover {
        box-shadow: {$attributes['containerStyles']['boxShadow']['horizontal']}px {$attributes['containerStyles']['boxShadow']['vertical']}px {$attributes['containerStyles']['boxShadow']['blurHover']}px {$attributes['containerStyles']['boxShadow']['spreadHover']}px {$container_color['shadow_hover']} {$attributes['containerStyles']['boxShadow']['position']};
    }
    #{$blockId} .review-heading-wrapper {
        margin-bottom: {$attributes['headingOptions']['verticalGap']}px;
        justify-content: {$attributes['headingOptions']['blockAlign']};
        gap: {$attributes['headingOptions']['gap']}px;
    }
    #{$blockId} .review-heading-wrapper .review-heading{
        font-size: {$attributes['headingOptions']['fontSize']}px;
        font-weight: {$attributes['headingOptions']['fontWeight']};
        font-family: {$attributes['headingOptions']['fontFamily']};
        text-transform: {$heading_styles['letter_case']};
        text-decoration: {$heading_styles['decoration']};
        line-height: {$heading_styles['line_height']};
        letter-spacing: {$heading_styles['letter_spacing']};
        color: {$heading_color['text']};
    }
    #{$blockId} .review-heading-wrapper .total-avg-rating-wrapper {
        background-color: {$heading_color['rating_bg']};
    }
    #{$blockId}.layout-grid .woo-product-review-wrapper {
        grid-template-columns: repeat({$attributes['gridOptions']['displayColumn']}, 1fr);
        row-gap: {$attributes['gridOptions']['columnGap']}px;
        column-gap: {$attributes['gridOptions']['columnGap']}px;
        text-align: {$attributes['gridOptions']['blockAlign']};
    }
    @media screen and (max-width: 1024px) {
        .cozy-block-product-review.layout-grid .woo-product-review-wrapper {
            grid-template-columns: repeat(
            {$displayColumn1},
            1fr
            ) !important;
        }
    }
    @media screen and (max-width: 767px) {
        .cozy-block-product-review.layout-grid .woo-product-review-wrapper {
            grid-template-columns: repeat(
            {$displayColumn2},
            1fr
            ) !important;
        }
    }
    @media screen and (max-width: 400px) {
        .cozy-block-product-review.layout-grid .woo-product-review-wrapper {
            grid-template-columns: repeat(
            1,
            1fr
            ) !important;
        }
    }
    #{$blockId}.layout-list .woo-product-review {
        margin: 0 0 {$attributes['listOptions']['rowGap']}px 0;
        text-align: {$attributes['listOptions']['textAlign']};
    }
    #{$blockId} .woo-product-review figure {
        width: {$attributes['reviewImage']['width']}px;
        height: {$attributes['reviewImage']['height']}px;
        border-radius: {$attributes['reviewImage']['borderRadius']}px;
    }
    #{$blockId} .woo-product-review figure img {
        border-radius: {$attributes['reviewImage']['borderRadius']}px;
    }
    #{$blockId} .woo-product-review .display-grid .display-flex.align-start.flex-column {
        margin-left: {$attributes['reviewTitle']['marginLeft']}px;
        color: {$title_color['text']};
    }
    #{$blockId} .woo-product-review .display-grid .display-flex.align-start.flex-column .review-date:before {
        border-right-color: {$title_color['text']};
    }
    #{$blockId} .product-name {
        font-size: {$attributes['reviewTitle']['titleTypography']['fontSize']}px;
        font-weight: {$attributes['reviewTitle']['titleTypography']['fontWeight']};
        font-family: {$attributes['reviewTitle']['titleTypography']['fontFamily']};
        text-transform: {$title_styles['letter_case']};
        text-decoration: {$title_styles['decoration']};
        line-height: {$title_styles['line_height']};
        letter-spacing: {$title_styles['letter_spacing']};
        color: {$title_color['text']};
    }
    #{$blockId} .product-name:hover {
        color: {$title_color['text_hover']};
    }
    #{$blockId} .product-rating-wrapper {
        font-size: {$attributes['reviewTitle']['ratingSize']}px;
    }
    #{$blockId} .review-content-wrapper {
        margin: {$attributes['reviewContent']['margin']['top']}px {$attributes['reviewContent']['margin']['right']}px {$attributes['reviewContent']['margin']['bottom']}px {$attributes['reviewContent']['margin']['left']}px;
    }
    #{$blockId} .cozy-dynamic-loader {
        margin-top: {$attributes['ajaxButton']['marginTop']}px;
        padding: {$attributes['ajaxButton']['padding']['top']}px {$attributes['ajaxButton']['padding']['right']}px {$attributes['ajaxButton']['padding']['bottom']}px {$attributes['ajaxButton']['padding']['left']}px;
        border-style: {$attributes['ajaxButton']['border']['type']};
        border-width: {$attributes['ajaxButton']['border']['width']}px;
        border-color: {$loader_color['border']};
        border-radius: {$attributes['ajaxButton']['borderRadius']}px;
        background-color: {$loader_color['bg']};
        color: {$loader_color['text']};
        font-size: {$attributes['ajaxButton']['fontSize']}px;
        font-weight: {$attributes['ajaxButton']['fontWeight']};
        font-family: {$attributes['ajaxButton']['fontFamily']};
        text-transform: {$loader_styles['letter_case']};
        text-decoration: {$loader_styles['decoration']};
        line-height: {$loader_styles['line_height']};
        letter-spacing: {$loader_styles['letter_spacing']};
    }
    #{$blockId} .cozy-dynamic-loader:hover {
        border-color: {$loader_color['border_hover']};
        color: {$loader_color['text_hover']};
        background-color: {$loader_color['bg_hover']};
    }
    #{$blockId} .swiper-button-prev::after,
    #{$blockId} .swiper-button-next::after {
        font-size: {$attributes['navigation']['iconSize']}px;
    }
    #{$blockId} .swiper-button-prev,
    #{$blockId} .swiper-button-next {
        width: {$attributes['navigation']['iconBoxWidth']}px;
        height: {$attributes['navigation']['iconBoxHeight']}px;
        {$nav_styles['border']}
        border-radius: {$attributes['navigation']['borderRadius']}px;
        color: {$nav_color['icon']};
        background-color: {$nav_color['bg']};
        top: var(--swiper-navigation-top-offset, {$attributes['navigation']['verticalPosition']}%);
    }
    #{$blockId} .swiper-button-prev:hover,
    #{$blockId} .swiper-button-next:hover {
        color: {$nav_color['icon_hover']};
        background-color: {$nav_color['bg_hover']};
        border-color: {$nav_color['border_hover']};
    }

    #{$blockId} .swiper-pagination {
        bottom: {$attributes['pagination']['verticalPosition']}px;
        text-align: {$bullet['align']};
        {$bullet['left']}
        {$bullet['right']}
    }
    #{$blockId} .swiper-pagination .swiper-pagination-bullet {
        margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullet['gap']}px);
    }
    #{$blockId} .swiper-pagination .swiper-pagination-bullet {
        width: {$attributes['pagination']['width']}px;
        height: {$attributes['pagination']['height']}px;
        border-radius: {$attributes['pagination']['borderRadius']}px;
        background-color: {$bullet_color['default_bg']};
    }
    #{$blockId} .swiper-pagination .swiper-pagination-bullet-active {
        width: {$attributes['pagination']['activeWidth']}px;
        height: {$bullet['active']['height']}px;
        {$bullet['active']['border']}
        outline-offset: {$bullet['active']['offset']}px;
        border-radius: {$attributes['pagination']['activeBorderRadius']}px;
        background-color: {$bullet_color['active_bg']};
    }
    #{$blockId} .swiper-pagination .swiper-pagination-bullet:hover {
        background-color: {$bullet_color['default_bg_hover']};
    }
    #{$blockId} .swiper-pagination .swiper-pagination-bullet-active:hover {
        background-color: {$bullet_color['active_bg_hover']};
    }
";

$months = array(
	'January',
	'February',
	'March',
	'April',
	'May',
	'June',
	'July',
	'August',
	'September',
	'October',
	'November',
	'December',
);

$avgReviews   = Utils::get_woo_avg_product_reviews();
$totalReviews = Utils::get_woo_total_product_reviews();

$reviewsToDisplay = array();

if ( intval( $attributes['perPage'] ) === -1 ) {
	// Display all reviews
	$reviewsToDisplay = Utils::get_woo_product_reviews();
}

if ( intval( $attributes['perPage'] ) !== -1 ) {
	// Display reviews based on the specified perPage value
	$reviewsToDisplay = array_filter(
		Utils::get_woo_product_reviews(),
		function ( $review ) use ( $attributes ) {
			return $review->product_rating >= $attributes['ratingFilter'];
		}
	);

	$reviewsToDisplay = array_slice( $reviewsToDisplay, 0, intval( $attributes['perPage'] ) );
}

$reviewsToDisplay = array_filter(
	$reviewsToDisplay,
	function ( $review ) use ( $attributes ) {
		return $review->product_rating >= $attributes['ratingFilter'];
	}
);
$percent          = $avgReviews / 5 * 100;

echo '<div class="cozy-block-wrapper">';

$font_families = array();

if ( isset( $attributes['ajaxButton']['fontFamily'] ) && ! empty( $attributes['ajaxButton']['fontFamily'] ) ) {
	$font_families[] = $attributes['ajaxButton']['fontFamily'];
}

if ( isset( $attributes['headingOptions']['fontFamily'] ) && ! empty( $attributes['headingOptions']['fontFamily'] ) ) {
	$font_families[] = $attributes['headingOptions']['fontFamily'];
}

if ( isset( $attributes['reviewTitle']['titleTypography']['fontFamily'] ) && ! empty( $attributes['reviewTitle']['titleTypography']['fontFamily'] ) ) {
	$font_families[] = $attributes['reviewTitle']['titleTypography']['fontFamily'];
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

echo '<div class="cozy-block-product-review layout-' . esc_attr( $attributes['layout'] ) . ' ' . ( $attributes['hoverShow'] ? 'hover-show' : '' ) . ' ' . ( $attributes['containerStyles']['boxShadow']['enabled'] ? 'has-box-shadow' : '' ) . ' ' . ( $attributes['reviewImage']['hoverEffect'] ? 'has-image-hover-effect' : '' ) . '" id="' . esc_attr( $blockId ) . '">';

if ( $attributes['headingOptions']['enabled'] ) {
	echo '<div class="review-heading-wrapper">';
	echo '<h2 class="review-heading">' . esc_html( $attributes['headingOptions']['label'] ) . '</h2>';

	echo '<div class="total-reviews-count">';
	echo '<div class="display-inline-flex total-avg-rating-wrapper" style="margin-right: 10px; padding: 0 10px; border-radius: 10px;">';
	echo '<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: text-top; margin-right: 5px;">';
	// ... SVG path
	echo '<path stroke="' . esc_attr( $attributes['headingOptions']['iconColor'] ) . '" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M6.65335 1.83265C6.68155 1.76387 6.72957 1.70503 6.7913 1.66362C6.85303 1.62221 6.92568 1.6001 7.00002 1.6001C7.07435 1.6001 7.14701 1.62221 7.20874 1.66362C7.27047 1.70503 7.31849 1.76387 7.34669 1.83265L8.76335 5.23998C8.78987 5.30374 8.83346 5.35894 8.88933 5.39952C8.9452 5.4401 9.01119 5.46448 9.08002 5.46998L12.7587 5.76465C13.0914 5.79131 13.226 6.20665 12.9727 6.42331L10.17 8.82465C10.1177 8.86944 10.0786 8.92778 10.0572 8.99328C10.0358 9.05878 10.0329 9.12891 10.0487 9.19598L10.9054 12.786C10.9226 12.858 10.9181 12.9335 10.8924 13.003C10.8667 13.0724 10.821 13.1327 10.7611 13.1763C10.7012 13.2198 10.6297 13.2445 10.5557 13.2475C10.4817 13.2504 10.4085 13.2313 10.3454 13.1926L7.19535 11.2693C7.13651 11.2335 7.06893 11.2145 7.00002 11.2145C6.93111 11.2145 6.86353 11.2335 6.80469 11.2693L3.65469 13.1933C3.59152 13.232 3.51832 13.2511 3.44432 13.2481C3.37033 13.2452 3.29885 13.2204 3.23893 13.1769C3.17901 13.1334 3.13333 13.0731 3.10765 13.0036C3.08198 12.9342 3.07747 12.8587 3.09469 12.7866L3.95135 9.19598C3.96724 9.12891 3.96432 9.05876 3.94291 8.99325C3.92151 8.92773 3.88244 8.86939 3.83002 8.82465L1.02735 6.42331C0.971228 6.37505 0.930626 6.31128 0.910652 6.24C0.890678 6.16873 0.892224 6.09314 0.915096 6.02274C0.937968 5.95235 0.981145 5.89028 1.0392 5.84436C1.09725 5.79844 1.16758 5.7707 1.24135 5.76465L4.92002 5.46998C4.98885 5.46448 5.05483 5.4401 5.1107 5.39952C5.16657 5.35894 5.21017 5.30374 5.23669 5.23998L6.65335 1.83265Z" />';
	echo '</svg>';
	echo '<span>' . esc_html( $avgReviews ) . '</span>';
	echo '</div>';
	echo '<p class="display-inline-block" style="margin: 0">' . esc_html( $totalReviews ) . ' ' . esc_html__( 'Reviews', 'cozy-addons' ) . '</p>';
	echo '</div>';

	echo '</div>';
}

echo '<div class="cozy-product-review__swiper-container">';
echo '<ul class="woo-product-review-wrapper ' . ( $attributes['layout'] === 'carousel' ? 'swiper-wrapper' : '' ) . '">';

if ( ! empty( $reviewsToDisplay ) ) {
	foreach ( $reviewsToDisplay as $review ) {
		$comment_id     = $review->comment_ID;
		$comment_rating = get_comment_meta( $comment_id, 'rating', true );

		$dateString = $review->comment_date;
		$dateObject = new DateTime( $dateString );

		$day   = $dateObject->format( 'd' );
		$month = $months[ $dateObject->format( 'n' ) - 1 ];
		$year  = $dateObject->format( 'Y' );

		$formattedDate = '';

		if ( $attributes['reviewTitle']['dateAbbr'] ) {
			$month = substr( $month, 0, 3 );
		}

		if ( $attributes['reviewTitle']['dateFormat'] === 'd-m-y' ) {
			$formattedDate = $day . ' ' . $month . ', ' . $year;
		}

		if ( $attributes['reviewTitle']['dateFormat'] === 'm-d-y' ) {
			$formattedDate = $month . ' ' . $day . ', ' . $year;
		}

		$percent = $comment_rating / 5 * 100;

		$varPercent = "
            #$blockId .product-rating-wrapper[data-rating='{$comment_rating}']:before {
                --percent: calc($percent%);
                background: linear-gradient(90deg, {$attributes['reviewTitle']['ratingColor']} $percent%, rgba(0,0,0,0.2) $percent%);
            }
        ";

		echo '<style>' . $varPercent . '</style>';
		echo '<li class="woo-product-review ' . ( $attributes['layout'] === 'carousel' ? 'swiper-slide' : '' ) . '" data-comment-id="' . esc_attr( $review->comment_ID ) . '">';

		if ( $attributes['enableOptions']['reviewContent'] && 'top' === $attributes['reviewContent']['position'] ) {
			echo '<div class="review-content-wrapper">';
			echo '<div class="review-content">' . esc_html( cozy_create_excerpt( $review->comment_content, intval( $attributes['reviewContent']['excerpt'] ) ) ) . '</div>';
			echo '</div>';
		}

		echo '<div class="display-grid">';

		if ( $attributes['enableOptions']['image'] ) {
			echo '<figure class="review-image">';
			if ( $attributes['imageType'] === 'user' ) {
				echo '<img src="' . esc_url( $review->user_avatar ) . '" />';
			} elseif ( $attributes['imageType'] === 'product' ) {
				echo '<img src="' . esc_url( $review->product_image_url ) . '" />';
			}
			echo '</figure>';
		}

		echo '<div class="display-flex flex-column align-start justify-center">';

		echo '<div class="display-flex" style="flex-wrap:wrap;row-gap:4px;">';

		if ( $attributes['enableOptions']['productName'] ) {
			$has_post_link = isset( $attributes['enableOptions']['titleLinkPost'] ) && $attributes['enableOptions']['titleLinkPost'] ? 'href="' . esc_url( $review->product_url ) . '"' : '';
			$open_new_tab  = isset( $attributes['enableOptions']['titleLinkPost'], $attributes['enableOptions']['titleLinkNewTab'] ) && $attributes['enableOptions']['titleLinkPost'] && $attributes['enableOptions']['titleLinkNewTab'] ? '_blank' : '';
			echo '<a class="product-name" ' . $has_post_link . ' target="' . esc_attr( $open_new_tab ) . '" rel="noopener">';
			echo esc_html( $review->product_name );
			echo '</a>';
		}

		if ( $attributes['enableOptions']['productRating'] ) {
			echo '<div class="product-rating-wrapper" data-rating="' . esc_attr( $comment_rating ) . '"></div>';
		}

		echo '</div>';

		echo '<div class="display-flex" style="margin-top:6px;margin-bottom:4px;">';

		if ( $attributes['enableOptions']['reviewerName'] ) {
			echo '<div class="reviewer-name">' . esc_html( $review->reviewer_name ) . '</div>';
		}

		if ( $attributes['enableOptions']['reviewDate'] ) {
			echo '<time class="review-date">' . esc_html( $formattedDate ) . '</time>';
		}

		echo '</div>';

		echo '</div>';

		echo '</div>';

		if ( $attributes['enableOptions']['reviewContent'] && 'bottom' === $attributes['reviewContent']['position'] ) {
			echo '<div class="review-content-wrapper">';
			echo '<div class="review-content">' . esc_html( cozy_create_excerpt( $review->comment_content, intval( $attributes['reviewContent']['excerpt'] ) ) ) . '</div>';
			echo '</div>';
		}

		echo '</li>';
	}
}

echo '</ul>';

if ( $attributes['layout'] === 'carousel' && $attributes['navigation']['enabled'] ) {
	echo '<div class="swiper-button-prev cozy-block-button-prev"></div>';
	echo '<div class="swiper-button-next cozy-block-button-next"></div>';
}

if ( $attributes['layout'] === 'carousel' && $attributes['pagination']['enabled'] ) {
	echo '<div class="swiper-pagination cozy-pagination"></div>';
}

echo '</div>';

if ( $attributes['perPage'] !== '-1' && $attributes['layout'] !== 'carousel' && $attributes['ajaxButton']['enabled'] ) {
	echo '<div class="display-flex justify-center">';
	echo '<button class="cozy-dynamic-loader">' . esc_html( $attributes['ajaxButton']['label'] ) . '</button>';
	echo '</div>';
}

add_action(
	'wp_enqueue_scripts',
	function () use ( $block_styles ) {
		wp_add_inline_style( 'cozy-block--global-block-styles', esc_html( $block_styles ) );
	}
);

echo '</div>';

echo '</div>';
