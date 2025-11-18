<?php
/**
 * Sets or updates the post view count for a specific post.
 *
 * This function is typically triggered when a post is viewed. It checks the current view count
 * stored as a custom field (post meta) and increments it by one. If the view count doesn't exist,
 * it initializes it to 1.
 *
 * @param int $post_id The ID of the post for which to update the view count.
 */
function cozy_addons_set_post_views( $post_id ) {
	$count_key = 'cozy_post_views_count';
	$count     = get_post_meta( $post_id, $count_key, true );

	$trending_key   = 'cozy_trending_post_views';
	$trending_count = get_post_meta( $post_id, $trending_key, true );

	if ( $count == '' ) {
		$count = 1;
		delete_post_meta( $post_id, $count_key );
		add_post_meta( $post_id, $count_key, '1' );
	} else {
		++$count;
		update_post_meta( $post_id, $count_key, $count );
	}

	if ( '' === $trending_count ) {
		$trending_count = '1';
		delete_post_meta( $post_id, $trending_count );
		add_post_meta( $post_id, $trending_key, '1' );
	} else {
		++$trending_count;
		update_post_meta( $post_id, $trending_key, $trending_count );
	}
}

/**
 * Tracks post views for the given post ID.
 *
 * This function is usually hooked into WordPress actions like `wp_head` or `template_redirect`
 * to track and increment the view count for single post pages. It ensures views are only counted
 * for individual posts and not for pages, archives, or other content types.
 *
 * @param int $post_id The ID of the post being viewed.
 */
function cozy_addons_track_post_views( $post_id ) {
	if ( ! is_single() ) {
		return;
	}

	if ( empty( $post_id ) ) {
		global $post;
		$post_id = $post->ID;
	}

	cozy_addons_set_post_views( $post_id );
}
add_action( 'wp_head', 'cozy_addons_track_post_views' );

/**
 * Resets the view counts for all posts used to determine trending content.
 *
 * This function is intended to clear or reset the custom post meta field
 * that stores the view count used for calculating trending posts. It can be
 * scheduled to run periodically via WP-Cron (e.g., weekly or monthly).
 *
 * @return void
 */
function cozy_addons_reset_trending_post_views_count() {
	// Get all posts
	$args = array(
		'post_type'      => 'post', // Change if your post type is different
		'posts_per_page' => -1,     // Get all posts
	);

	$posts = get_posts( $args );

	foreach ( $posts as $post ) {
		$post_id = $post->ID;
		delete_post_meta( $post_id, 'cozy_trending_post_views' );
		// You can recreate the meta key with an initial count of 0 if desired
		update_post_meta( $post_id, 'cozy_trending_post_views', '0' );
	}
}
// Schedule the reset function to run weekly
if ( ! wp_next_scheduled( 'reset_trending_post_views_count_event' ) ) {
	wp_schedule_event( time(), 'weekly', 'reset_trending_post_views_count_event' );
}
add_action( 'reset_trending_post_views_count_event', 'cozy_addons_reset_trending_post_views_count' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

/**
 * Handles logic for determining or enforcing premium access restrictions.
 *
 * This function checks if the current user has access to premium content or features.
 * It may be used to conditionally display premium blocks, restrict content visibility,
 * or trigger redirects/notices for non-premium users.
 *
 * Common use cases include membership validation, license checking, or feature gating.
 *
 * @return void
 */
function cozy_addons_premium_access() {
	$premium_status = false;
	if ( cc_fs()->is__premium_only() && cc_fs()->is_plan( 'pro', true ) && cc_fs()->can_use_premium_code() ) {
		$premium_status = true;
	}

	return $premium_status;
}

function cozy_addons_get_option_callback() {
	$option_name = '';

	$block_name = isset( $_POST['block_name'] ) ? sanitize_text_field( wp_unslash( $_POST['block_name'] ) ) : '';
	if ( ! empty( $block_name ) ) {
		$option_name  = 'cozy-block--' . $block_name;
		$block_option = get_option( $option_name );
		echo esc_html( $block_option );
	}
	wp_die();
}
add_action( 'wp_ajax_get_cozy_block_option', 'cozy_addons_get_option_callback' );

/**
 * Generates a trimmed excerpt from the given content.
 *
 * This function strips HTML tags and shortcodes from the provided content,
 * then trims it to the specified number of words, appending an ellipsis (`...`)
 * if the content exceeds the defined length.
 */
function cozy_create_excerpt( $content, $length = 20 ) {
	// Strip HTML tags and shortcodes.
	$content = wp_strip_all_tags( strip_shortcodes( $content ) );

	// Split the content into words.
	$words = explode( ' ', $content );

	// Truncate to the specified length.
	if ( count( $words ) > intval( $length ) ) {
		$words   = array_slice( $words, 0, intval( $length ) );
		$content = implode( ' ', $words ) . '...';
	} else {
		$content = implode( ' ', $words );
	}

	return esc_html( $content );
}

/**
 * Retrieves the list of active Cozy Addons blocks.
 *
 * This function returns an array of block slugs or identifiers
 * that are marked as active by the plugin's Utils helper.
 *
 * @return array List of active Cozy Addons blocks.
 */
function cozy_addons_active_blocks() {
	$active_cozy_blocks = \CozyAddons\Helpers\Utils::get_instance()->active_blocks;

	return $active_cozy_blocks;
}

/**
 * Handles AJAX request to update the activation status of a Cozy Addons block.
 *
 * This function verifies the user capability, sanitizes incoming POST data,
 * and updates the WordPress option storing the block's enabled/disabled status.
 * Only blocks present in the list of allowed active blocks are processed.
 *
 * Expected POST parameters:
 * - 'block_name' (string): The slug/identifier of the block.
 * - 'checked' (string): The new status value to be saved (usually 'true' or 'false').
 *
 * @return void Terminates execution with wp_die().
 */
function cozy_addons_set_block_status() {
	$allowed_blocks = cozy_addons_active_blocks();

	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$block_name = isset( $_POST['block_name'] ) ? sanitize_text_field( wp_unslash( $_POST['block_name'] ) ) : '';
	if ( ! in_array( $block_name, $allowed_blocks ) ) {
		return;
	}

	$option_name = 'cozy-block--' . $block_name;
	$checked     = isset( $_POST['checked'] ) ? sanitize_text_field( wp_unslash( $_POST['checked'] ) ) : '';
	update_option( $option_name, $checked );
	wp_die();
}
add_action( 'wp_ajax_update_cozy_block_option', 'cozy_addons_set_block_status' );

/**
 * Callback function to get the current enable/disable status of a custom post type setting.
 *
 * Typically used in the WordPress REST API or settings API to return the current status
 * (enabled or disabled) of a custom post type feature for the Cozy Addons plugin.
 */
function cozy_addons_cpt_enable_status_callback() {
	$option_name   = '';
	$template_name = isset( $_POST['templateName'] ) ? sanitize_text_field( wp_unslash( $_POST['templateName'] ) ) : '';
	if ( ! empty( $template_name ) ) {
		$option_name    = 'ca-cpt--' . $template_name;
		$enabled_status = get_option( $option_name );
		wp_send_json_success(
			array(
				'enabledStatus' => $enabled_status,
			)
		);
	}
	wp_die();
}
add_action( 'wp_ajax_get_ca_cpt_enable_status', 'cozy_addons_cpt_enable_status_callback' );

/**
 * Callback function to update the enable/disable status of a custom post type feature.
 *
 * Typically used with the WordPress Settings API or REST API to handle toggling a setting
 * related to custom post type (CPT) functionality in the Cozy Addons plugin.
 *
 * Validates and saves the new value (e.g., true/false) to the appropriate option or setting.
 *
 * @param bool $value The new value to be saved (true to enable, false to disable).
 * @return bool The value that was saved after validation.
 */
function cozy_addons_toggle_cpt_enable_callback() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'Access Denied' );
		return;
	}

	$allowed_options = array(
		'mega-menu-templates',
		'portfolio-gallery-templates',
	);

	$request_option = isset( $_POST['templateName'] ) ? sanitize_text_field( wp_unslash( $_POST['templateName'] ) ) : '';

	if ( ! in_array( $request_option, $allowed_options ) ) {
		wp_die( 'Invalid Option' );
	}

	$option_name = 'ca-cpt--' . $request_option;
	$checked     = isset( $_POST['checked'] ) ? sanitize_text_field( wp_unslash( $_POST['checked'] ) ) : '';
	update_option( $option_name, $checked );
	wp_die();
}
add_action( 'wp_ajax_toggle_ca_cpt_enable', 'cozy_addons_toggle_cpt_enable_callback' );

function cozy_addons_toggle_ca_utility_function_status_callback() {
	check_ajax_referer( 'ca_utility_function', 'nonce' );

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'Access Denied' );
		return;
	}

	$allowed_options = array(
		'animation',
		'styles',
	);

	$request_option = isset( $_POST['functionName'] ) ? sanitize_text_field( wp_unslash( $_POST['functionName'] ) ) : '';

	if ( ! in_array( $request_option, $allowed_options ) ) {
		wp_die( 'Invalid Option' );
	}

	$option_name = 'ca--utility--' . $request_option;
	$checked     = isset( $_POST['checked'] ) ? sanitize_text_field( wp_unslash( $_POST['checked'] ) ) : '';
	update_option( $option_name, $checked );
	wp_die();
}
add_action( 'wp_ajax_cozy_addons_toggle_ca_utility_function_status', 'cozy_addons_toggle_ca_utility_function_status_callback' );

/**
 * Displays a dismissible upsell admin notice for promoting premium features or products.
 *
 * This function outputs an admin notice in the WordPress dashboard, encouraging users
 * to upgrade to a premium version or explore additional features. The notice includes
 * a dismiss option that respects user preferences using user meta or options.
 */
function cozy_addons_upsell_dismissble_notice() {
	update_option( 'cozy_dashboard_dismissed_notice', 1 );
}
add_action( 'wp_ajax_cozy_upsell_dismissble_notice', 'cozy_addons_upsell_dismissble_notice' );

/**
 * Checks whether the WooCommerce plugin is active.
 *
 * This function determines if WooCommerce is currently active on the site,
 * typically by checking the list of active plugins or if the WooCommerce class exists.
 *
 * Useful for conditionally loading WooCommerce-specific features or settings.
 *
 * @return bool True if WooCommerce is active, false otherwise.
 */
function is_woocommerce_active() {
	return is_plugin_active( 'woocommerce/woocommerce.php' );
}

/**
 * Determines whether the currently active theme is a block-based (FSE) theme.
 *
 * This function checks if the active WordPress theme supports full site editing (FSE)
 * by verifying the existence of a `theme.json` file or using WordPress core functions.
 *
 * Useful for conditionally enabling features or compatibility layers specific to block themes.
 *
 * @return bool True if a block (FSE) theme is active, false otherwise.
 */
function cozy_addons_is_block_theme() {
	$active_theme = wp_get_theme();

	return $active_theme->is_block_theme();
}

/**
 * Displays a generic dismissible admin notice in the WordPress dashboard.
 *
 * This function is used to show important information, alerts, or announcements
 * to the user with an option to dismiss the notice. The dismissal is typically
 * stored using user meta, options, or transients to prevent repeated display.
 *
 * Common use cases include plugin updates, feature announcements, or setup prompts.
 *
 * @return void
 */
function cozy_addons_dismissble_notice() {
	update_option( 'cozy_addons_block_theme', 1 );
}
add_action( 'wp_ajax_cozy_blocks_dismissble_notice', 'cozy_addons_dismissble_notice' );

/* Portfolio gallery ajax loader */
function cozy_block_portfolio_gallery_load_content() {
	check_ajax_referer( 'cozy_block_portfolio_gallery_load_more', 'nonce', true );
	$attributes = isset( $_POST['attributes'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['attributes'] ) ), true ) : array();

	$offset = isset( $_POST['offset'] ) ? sanitize_text_field( wp_unslash( $_POST['offset'] ) ) : null;

	if ( empty( $attributes ) || is_null( $offset ) ) {
		return;
	}

	$content_load = isset( $attributes['ajaxButton']['contentLoad'] ) ? sanitize_text_field( wp_unslash( $attributes['ajaxButton']['contentLoad'] ) ) : 10;

	$new_offset = 0;
	if ( 0 == $offset ) {
		$new_offset = $attributes['perPage'];
	} else {
		$new_offset = $offset + $content_load;
	}

	$cpt_order = explode( '/', $attributes['orderBy'] );

	$args = array(
		'post_type'      => 'ca_portfolio_gallery',
		'posts_per_page' => $content_load,
		'post_status'    => 'publish',
		'offset'         => $new_offset,
		'orderby'        => $cpt_order[0],
		'order'          => $cpt_order[1],
	);

	$query = new \WP_Query( $args );

	$portfolio_gallery = $query->get_posts();

	if ( empty( $portfolio_gallery ) ) {
		return;
	}

	$render = \CozyAddons\Helpers\BlockRender::get_instance()->portfolio_gallery_render( $attributes, $portfolio_gallery );

	$next_args     = array(
		'post_type'      => 'ca_portfolio_gallery',
		'posts_per_page' => $content_load,
		'post_status'    => 'publish',
		'offset'         => $new_offset + $content_load,
		'orderby'        => $cpt_order[0],
		'order'          => $cpt_order[1],
	);
	$next_query    = new \WP_Query( $next_args );
	$remaining_cpt = $next_query->get_posts();

	wp_send_json_success(
		array(
			'render'       => $render,
			'offset'       => $new_offset,
			'hasNext'      => ! empty( $remaining_cpt ) ? true : false,
			'renderLength' => count( $portfolio_gallery ),
		)
	);
}
add_action( 'wp_ajax_cozy_block_portfolio_gallery_loader', 'cozy_block_portfolio_gallery_load_content' );
add_action( 'wp_ajax_nopriv_cozy_block_portfolio_gallery_loader', 'cozy_block_portfolio_gallery_load_content' );

/**
 * Loads and returns the content for the Magazine Grid block via AJAX or server-side rendering.
 *
 * This function is responsible for dynamically generating and returning post content
 * used in the Magazine Grid block, typically based on attributes like category, tags,
 * pagination, or other query parameters.
 *
 * @return void Outputs the generated HTML content directly (usually via `echo`).
 */
function cozy_block_magazine_grid_load_content() {
	check_ajax_referer( 'cozy_block_magazine_grid_load_more', 'nonce', true );
	$attributes = isset( $_POST['attributes'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['attributes'] ) ), true ) : '';

	if ( empty( $attributes ) ) {
		return;
	}

	/* Fetch Posts */
	if ( ! function_exists( 'get_cozy_block_magazine_grid_posts' ) ) {
		function get_cozy_block_magazine_grid_posts( $cozy_block_magazine_grid_args = array() ) {
			if ( ! empty( $cozy_block_magazine_grid_args ) ) {
				$latest_posts         = new \WP_Query( $cozy_block_magazine_grid_args );
				$additional_post_data = array();
				foreach ( $latest_posts->posts as $post ) {
					$post_id        = $post->ID;
					$post_image_url = get_the_post_thumbnail_url( $post_id );
					$post_link      = get_permalink( $post_id );

					$post_data                   = (array) $post; // Convert WP_Post object to an array.
					$post_data['post_image_url'] = $post_image_url;

					// Get categories and their links.
					$categories      = get_the_category( $post_id );
					$post_categories = array();
					foreach ( $categories as $category ) {
						$post_categories[] = array(
							'name'        => $category->name,
							'link'        => get_category_link( $category->term_id ),
							'count'       => $category->count,
							'description' => $category->description,
							'slug'        => $category->slug,
							'taxonomy'    => $category->taxonomy,
							'parent'      => $category->parent,
						);
					}
					$post_data['post_categories'] = $post_categories;

					$post_data['post_excerpt'] = get_the_excerpt( $post_id );

					$post_data['post_author_name']    = get_the_author_meta( 'display_name', $post->post_author ) ?? '';
					$post_data['post_author_url']     = get_author_posts_url( $post->post_author ) ?? '';
					$post_data['post_link']           = $post_link;
					$post_data['post_date_formatted'] = get_the_date( '', $post_id );
					$post_data['comment_link']        = get_comments_link( $post_id );
					$additional_post_data[]           = $post_data;
				}

				wp_reset_postdata();

				return $additional_post_data;
			}

			return array();
		}
	}
	/* Posts Render */
	if ( ! function_exists( 'render_cozy_block_magazine_grid_posts_load_more_data' ) ) {
		function render_cozy_block_magazine_grid_posts_load_more_data( $attributes, $post_data, &$output ) {
			$classes   = array();
			$classes[] = 'cozy-block-magazine-grid__post-item';
			$classes[] = filter_var( $attributes['postBoxStyles']['hoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';
			$classes[] = filter_var( $attributes['postBoxStyles']['shadow']['enabled'], FILTER_VALIDATE_BOOLEAN ) ? 'has-box-shadow' : '';
			$classes[] = filter_var( $attributes['postBoxStyles']['shadowHover']['enabled'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-box-shadow' : '';
			$classes[] = filter_var( $attributes['postOptions']['imageOverlay'], FILTER_VALIDATE_BOOLEAN ) ? 'has-image-overlay' : '';
			$output   .= '<li class="' . implode( ' ', $classes ) . '" data-post-id="' . esc_attr( $post_data['ID'] ) . '">';

			if ( filter_var( $attributes['enableOptions']['postImage'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_data['post_image_url'] ) ) {
				$classes       = array();
				$classes[]     = 'post__image';
				$classes[]     = filter_var( $attributes['postOptions']['image']['hoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';
				$has_post_link = isset( $attributes['enableOptions']['imgLinkPost'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
				$open_new_tab  = isset( $attributes['enableOptions']['imgLinkPost'], $attributes['enableOptions']['imgLinkNewTab'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['imgLinkNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';

				$output .= '<figure class="' . implode( ' ', $classes ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener"><img src="' . esc_url( $post_data['post_image_url'] ) . '" /></a></figure>';
			}

			$output .= '<div class="post__content-wrapper">';

			if ( filter_var( $attributes['enableOptions']['postCategories'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_data['post_categories'] ) ) {
				$output   .= '<div class="post__categories">';
				$classes   = array();
				$classes[] = 'post__category-item';
				$classes[] = filter_var( $attributes['postCategories']['hoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';

				$open_new_tab = isset( $attributes['enableOptions']['linkCat'], $attributes['enableOptions']['catNewTab'] ) && filter_var( $attributes['enableOptions']['linkCat'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['catNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
				foreach ( $post_data['post_categories'] as $cat_data ) {
					$has_cat_link = isset( $attributes['enableOptions']['linkCat'] ) && filter_var( $attributes['enableOptions']['linkCat'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $cat_data['link'] ) . '"' : '';
					$output      .= '<a class="' . implode( ' ', $classes ) . '" ' . $has_cat_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $cat_data['name'] ) . '</a>';
				}
				$output .= '</div>';
			}

			$has_post_link      = isset( $attributes['enableOptions']['titleLinkPost'] ) && filter_var( $attributes['enableOptions']['titleLinkPost'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
			$open_new_tab       = isset( $attributes['enableOptions']['titleLinkPost'], $attributes['enableOptions']['titleLinkNewTab'] ) && filter_var( $attributes['enableOptions']['titleLinkPost'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['titleLinkNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
			$classes            = array();
			$classes[]          = 'post__title';
			$additional_classes = isset( $attributes['postOptions']['title']['className'] ) ? $attributes['postOptions']['title']['className'] : '';
			if ( ! empty( $additional_classes ) ) {
				$classes = array_merge( $classes, explode( ' ', $additional_classes ) );
			}
			$output .= '<h4 class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $post_data['post_title'] ) . '</a></h4>';

			if ( filter_var( $attributes['enableOptions']['postAuthor'], FILTER_VALIDATE_BOOLEAN ) || filter_var( $attributes['enableOptions']['postComments'], FILTER_VALIDATE_BOOLEAN ) || filter_var( $attributes['enableOptions']['postDate'], FILTER_VALIDATE_BOOLEAN ) ) {
				$output .= '<div class="post__meta">';

				$has_meta_link = isset( $attributes['enableOptions']['linkPostMeta'] ) && filter_var( $attributes['enableOptions']['linkPostMeta'], FILTER_VALIDATE_BOOLEAN ) ? true : false;
				$open_new_tab  = isset( $attributes['enableOptions']['linkPostMeta'], $attributes['enableOptions']['postMetaNewTab'] ) && filter_var( $attributes['enableOptions']['linkPostMeta'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['postMetaNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
				$show_icon     = isset( $attributes['enableOptions']['enableMetaIcon'] ) && $attributes['enableOptions']['enableMetaIcon'] ? true : false;
				if ( filter_var( $attributes['enableOptions']['postAuthor'], FILTER_VALIDATE_BOOLEAN ) ) {
					$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_author_url'] ) . '"' : '';
					$output   .= '<a class="post__author display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
					if ( $show_icon ) {
						$output .= '<svg
								width="' . $attributes['postMeta']['font']['size'] . '"
								height="' . $attributes['postMeta']['font']['size'] . '"
								xmlns="http://www.w3.org/2000/svg"
								aria-hidden="true"
								viewBox="0 0 12 15"
							>
								<path d="M11.2972 14.6667H0.630493V13.3333C0.630493 12.4493 0.981683 11.6014 1.6068 10.9763C2.23193 10.3512 3.07977 10 3.96383 10H7.96383C8.84788 10 9.69573 10.3512 10.3208 10.9763C10.946 11.6014 11.2972 12.4493 11.2972 13.3333V14.6667ZM5.96383 8.66667C5.43854 8.66667 4.9184 8.5632 4.43309 8.36218C3.94779 8.16117 3.50683 7.86653 3.1354 7.49509C2.76396 7.12366 2.46933 6.6827 2.26831 6.1974C2.06729 5.7121 1.96383 5.19195 1.96383 4.66667C1.96383 4.14138 2.06729 3.62124 2.26831 3.13593C2.46933 2.65063 2.76396 2.20967 3.1354 1.83824C3.50683 1.4668 3.94779 1.17217 4.43309 0.971148C4.9184 0.770129 5.43854 0.666666 5.96383 0.666666C7.02469 0.666666 8.04211 1.08809 8.79225 1.83824C9.5424 2.58838 9.96383 3.6058 9.96383 4.66667C9.96383 5.72753 9.5424 6.74495 8.79225 7.49509C8.04211 8.24524 7.02469 8.66667 5.96383 8.66667Z" />
							</svg>';
					}

					$output .= '<p>' . esc_html( $post_data['post_author_name'] ) . '</p>';
					$output .= '</a>';
				}

				if ( filter_var( $attributes['enableOptions']['postComments'], FILTER_VALIDATE_BOOLEAN ) && intval( $post_data['comment_count'] ) > 0 ) {
					$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['comment_link'] ) . '"' : '';
					$output   .= '<a class="post__comments display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
					if ( $show_icon ) {
						$output .= '<svg
								width="' . $attributes['postMeta']['font']['size'] . '"
								height="' . $attributes['postMeta']['font']['size'] . '"
								xmlns="http://www.w3.org/2000/svg"
								aria-hidden="true"
								viewBox="0 0 25 20"
							>
								<path d="M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z" />
							</svg>';
					}

					$output .= '<p>' . esc_html( $post_data['comment_count'] ) . '</p>';
					$output .= '</a>';
				}

				if ( filter_var( $attributes['enableOptions']['postDate'], FILTER_VALIDATE_BOOLEAN ) ) {
					$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
					$output   .= '<a class="post__date display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
					if ( $show_icon ) {
						$output .= '<svg
								width="' . $attributes['postMeta']['font']['size'] . '"
								height="' . $attributes['postMeta']['font']['size'] . '"
								xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 16 18"
								aria-hidden="true"
							>
								<path d="M7.66699 10.6666C7.43088 10.6666 7.23296 10.5868 7.07324 10.427C6.91352 10.2673 6.83366 10.0694 6.83366 9.83329C6.83366 9.59718 6.91352 9.39927 7.07324 9.23954C7.23296 9.07982 7.43088 8.99996 7.66699 8.99996C7.9031 8.99996 8.10102 9.07982 8.26074 9.23954C8.42046 9.39927 8.50033 9.59718 8.50033 9.83329C8.50033 10.0694 8.42046 10.2673 8.26074 10.427C8.10102 10.5868 7.9031 10.6666 7.66699 10.6666ZM4.33366 10.6666C4.09755 10.6666 3.89963 10.5868 3.73991 10.427C3.58019 10.2673 3.50033 10.0694 3.50033 9.83329C3.50033 9.59718 3.58019 9.39927 3.73991 9.23954C3.89963 9.07982 4.09755 8.99996 4.33366 8.99996C4.56977 8.99996 4.76769 9.07982 4.92741 9.23954C5.08713 9.39927 5.16699 9.59718 5.16699 9.83329C5.16699 10.0694 5.08713 10.2673 4.92741 10.427C4.76769 10.5868 4.56977 10.6666 4.33366 10.6666ZM11.0003 10.6666C10.7642 10.6666 10.5663 10.5868 10.4066 10.427C10.2469 10.2673 10.167 10.0694 10.167 9.83329C10.167 9.59718 10.2469 9.39927 10.4066 9.23954C10.5663 9.07982 10.7642 8.99996 11.0003 8.99996C11.2364 8.99996 11.4344 9.07982 11.5941 9.23954C11.7538 9.39927 11.8337 9.59718 11.8337 9.83329C11.8337 10.0694 11.7538 10.2673 11.5941 10.427C11.4344 10.5868 11.2364 10.6666 11.0003 10.6666ZM7.66699 14C7.43088 14 7.23296 13.9201 7.07324 13.7604C6.91352 13.6007 6.83366 13.4027 6.83366 13.1666C6.83366 12.9305 6.91352 12.7326 7.07324 12.5729C7.23296 12.4132 7.43088 12.3333 7.66699 12.3333C7.9031 12.3333 8.10102 12.4132 8.26074 12.5729C8.42046 12.7326 8.50033 12.9305 8.50033 13.1666C8.50033 13.4027 8.42046 13.6007 8.26074 13.7604C8.10102 13.9201 7.9031 14 7.66699 14ZM4.33366 14C4.09755 14 3.89963 13.9201 3.73991 13.7604C3.58019 13.6007 3.50033 13.4027 3.50033 13.1666C3.50033 12.9305 3.58019 12.7326 3.73991 12.5729C3.89963 12.4132 4.09755 12.3333 4.33366 12.3333C4.56977 12.3333 4.76769 12.4132 4.92741 12.5729C5.08713 12.7326 5.16699 12.9305 5.16699 13.1666C5.16699 13.4027 5.08713 13.6007 4.92741 13.7604C4.76769 13.9201 4.56977 14 4.33366 14ZM11.0003 14C10.7642 14 10.5663 13.9201 10.4066 13.7604C10.2469 13.6007 10.167 13.4027 10.167 13.1666C10.167 12.9305 10.2469 12.7326 10.4066 12.5729C10.5663 12.4132 10.7642 12.3333 11.0003 12.3333C11.2364 12.3333 11.4344 12.4132 11.5941 12.5729C11.7538 12.7326 11.8337 12.9305 11.8337 13.1666C11.8337 13.4027 11.7538 13.6007 11.5941 13.7604C11.4344 13.9201 11.2364 14 11.0003 14ZM1.83366 17.3333C1.37533 17.3333 0.982964 17.1701 0.656576 16.8437C0.330187 16.5173 0.166992 16.125 0.166992 15.6666V3.99996C0.166992 3.54163 0.330187 3.14926 0.656576 2.82288C0.982964 2.49649 1.37533 2.33329 1.83366 2.33329H2.66699V0.666626H4.33366V2.33329H11.0003V0.666626H12.667V2.33329H13.5003C13.9587 2.33329 14.351 2.49649 14.6774 2.82288C15.0038 3.14926 15.167 3.54163 15.167 3.99996V15.6666C15.167 16.125 15.0038 16.5173 14.6774 16.8437C14.351 17.1701 13.9587 17.3333 13.5003 17.3333H1.83366ZM1.83366 15.6666H13.5003V7.33329H1.83366V15.6666Z" />
							</svg>';
					}

					$output .= '<p>' . esc_html( $post_data['post_date_formatted'] ) . '</p>';
					$output .= '</a>';
				}

				$output .= '</div>';
			}
			if ( filter_var( $attributes['enableOptions']['postContent'], FILTER_VALIDATE_BOOLEAN ) ) {
				$output .= '<div class="post__content">';
				$output .= '<div>';

				if ( isset( $post_data['post_excerpt'] ) && ! empty( $post_data['post_excerpt'] ) ) {
					$output .= $post_data['post_excerpt'];
				} else {
					$output .= cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['postExcerpt'] );
				}

				$output .= '</div>';
				if ( filter_var( $attributes['enableOptions']['readMore'], FILTER_VALIDATE_BOOLEAN ) ) {
					$open_new_tab = isset( $attributes['enableOptions']['readMoreNewTab'] ) && filter_var( $attributes['enableOptions']['readMoreNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
					$output      .= '<span class="post__read-more"><a class="post__read-more-link" href="' . esc_url( $post_data['post_link'] ) . '" target="' . $open_new_tab . '" rel="noopener">' . esc_html__( 'Read More', 'cozy-addons' ) . '</a></span>';
				}
				$output .= '</div>';
			}

			$output .= '</div>';

			$output .= '</li>';
		}
	}

	$selected_category             = 'category' === $attributes['sortBy'] && isset( $attributes['selectedCategory'] ) ? array( $attributes['selectedCategory'] ) : array();
	$cozy_block_magazine_grid_args = array(
		'post_type'           => 'post',
		'orderby'             => 'date',
		'order'               => 'DESC',
		'posts_per_page'      => $attributes['perPage'],
		'ignore_sticky_posts' => $attributes['enableOptions']['ignoreSticky'],
		'category__in'        => $selected_category,
		'post__not_in'        => array(),
		'post_status'         => 'publish',
	);

	if ( isset( $attributes['offset'] ) && ! empty( $attributes['offset'] ) ) {
		$offset_args = array(
			'post_type'      => 'post',
			'orderby'        => 'date',
			'order'          => 'DESC',
			'fields'         => 'ids', // Corrected this line
			'posts_per_page' => $attributes['offset'],
			'post_status'    => 'publish',
		);

		$offset_query = new \WP_Query( $offset_args );

		if ( ! empty( $offset_query->posts ) ) {
			$cozy_block_magazine_grid_args['post__not_in'] = array_merge(
				$cozy_block_magazine_grid_args['post__not_in'],
				$offset_query->posts
			);
		}
	}

	$excluded_post_ids = isset( $attributes['exclude'] ) ? explode( ',', sanitize_text_field( $attributes['exclude'] ) ) : array();
	if ( is_array( $excluded_post_ids ) && ! empty( $excluded_post_ids ) ) {
		$cozy_block_magazine_grid_args['post__not_in'] = array_merge( $cozy_block_magazine_grid_args['post__not_in'], $excluded_post_ids );
	}

	$additional_post_data = get_cozy_block_magazine_grid_posts( $cozy_block_magazine_grid_args );

	$cozy_block_magazine_grid_args['posts_per_page'] = -1;
	$all_posts                                       = get_cozy_block_magazine_grid_posts( $cozy_block_magazine_grid_args );

	$remaining_posts = array_udiff(
		$all_posts,
		$additional_post_data,
		function ( $a, $b ) {
			return $a['ID'] - $b['ID'];
		}
	);

	// Assuming you have pagination or offset to get remaining posts in chunks.
	$offset                = isset( $_POST['offset'] ) ? intval( $_POST['offset'] ) : 0;
	$posts_per_page        = isset( $attributes['ajaxLoader']['content'] ) ? intval( $attributes['ajaxLoader']['content'] ) : 10;
	$remaining_posts_chunk = array_slice( $remaining_posts, $offset, $posts_per_page );
	$next_chunk            = array_slice( $remaining_posts, $offset + $posts_per_page, $posts_per_page );

	if ( empty( $remaining_posts_chunk ) ) {
		wp_send_json_error( '' );
	}

	if ( ! empty( $remaining_posts_chunk ) ) {
		// Output the posts.
		$output = '';
		foreach ( $remaining_posts_chunk as $post_data ) {
			// Customize the HTML structure as per your requirement .
			render_cozy_block_magazine_grid_posts_load_more_data( $attributes, $post_data, $output );
		}
		$return_data = array(
			'render'           => $output,
			'next_chunk_count' => count( $next_chunk ),
		);
		wp_send_json_success( $return_data );
	}
}
add_action( 'wp_ajax_cozy_block_magazine_grid_loader', 'cozy_block_magazine_grid_load_content' );
add_action( 'wp_ajax_nopriv_cozy_block_magazine_grid_loader', 'cozy_block_magazine_grid_load_content' );

/**
 * Loads and outputs the content for the Magazine List block via AJAX or server-side rendering.
 *
 * This function dynamically generates the post list layout for the Magazine List block
 * based on incoming query parameters such as category, tags, pagination, or custom filters.
 */
function cozy_block_magazine_list_load_content() {
	check_ajax_referer( 'cozy_block_magazine_list_load_more', 'nonce', true );
	$attributes = isset( $_POST['attributes'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['attributes'] ) ), true ) : array();

	if ( empty( $attributes ) ) {
		return;
	}

	/* Fetch Posts */
	if ( ! function_exists( 'get_cozy_block_magazine_list_posts' ) ) {
		function get_cozy_block_magazine_list_posts( $cozy_block_magazine_grid_args = array() ) {
			if ( ! empty( $cozy_block_magazine_grid_args ) ) {
				$latest_posts         = new \WP_Query( $cozy_block_magazine_grid_args );
				$additional_post_data = array();
				foreach ( $latest_posts->posts as $post ) {
					$post_id        = $post->ID;
					$post_image_url = get_the_post_thumbnail_url( intval( $post_id ) );
					$post_link      = get_permalink( $post_id );

					$post_data                   = (array) $post; // Convert WP_Post object to an array.
					$post_data['post_image_url'] = $post_image_url;

					// Get categories and their links.
					$categories      = get_the_category( $post_id );
					$post_categories = array();
					foreach ( $categories as $category ) {
						$post_categories[] = array(
							'name'        => $category->name,
							'link'        => get_category_link( $category->term_id ),
							'count'       => $category->count,
							'description' => $category->description,
							'slug'        => $category->slug,
							'taxonomy'    => $category->taxonomy,
							'parent'      => $category->parent,
						);
					}
					$post_data['post_categories'] = $post_categories;

					$post_data['post_excerpt'] = get_the_excerpt( $post_id );

					$post_data['post_author_name']    = get_the_author_meta( 'display_name', $post->post_author ) ?? '';
					$post_data['post_author_url']     = get_author_posts_url( $post->post_author ) ?? '';
					$post_data['post_link']           = $post_link;
					$post_data['post_date_formatted'] = get_the_date( '', $post_id );
					$post_data['comment_link']        = get_comments_link( $post_id );
					$additional_post_data[]           = $post_data;
				}

				wp_reset_postdata();

				return $additional_post_data;
			}

			return array();
		}
	}
	/* Posts Render */
	if ( ! function_exists( 'render_cozy_block_magazine_list_posts_load_more_data' ) ) {
		function render_cozy_block_magazine_list_posts_load_more_data( $attributes, $post_data, &$output ) {
			$classes   = array();
			$classes[] = 'cozy-block-magazine-list__post-item';
			$classes[] = filter_var( $attributes['postBoxStyles']['hoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';
			$classes[] = filter_var( $attributes['postBoxStyles']['shadow']['enabled'], FILTER_VALIDATE_BOOLEAN ) ? 'has-box-shadow' : '';
			$classes[] = filter_var( $attributes['postBoxStyles']['shadowHover']['enabled'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-box-shadow' : '';
			$output   .= '<li class="' . implode( ' ', $classes ) . '" data-post-id="' . esc_attr( $post_data['ID'] ) . '">';

			if ( filter_var( $attributes['enableOptions']['postImage'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_data['post_image_url'] ) && 'left' === $attributes['postOptions']['image']['position'] ) {
				$classes   = array();
				$classes[] = 'post__image';
				$classes[] = filter_var( $attributes['postOptions']['image']['hoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';

				$has_post_link = isset( $attributes['enableOptions']['imgLinkPost'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
				$open_new_tab  = isset( $attributes['enableOptions']['imgLinkPost'], $attributes['enableOptions']['imgLinkNewTab'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['imgLinkNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
				$output       .= '<figure class="' . implode( ' ', $classes ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener"><img src="' . esc_url( $post_data['post_image_url'] ) . '" /></a></figure>';
			}

			$output .= '<div class="post__content-wrapper">';

			if ( filter_var( $attributes['enableOptions']['postCategories'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_data['post_categories'] ) ) {
				$output      .= '<div class="post__categories">';
				$classes      = array();
				$classes[]    = 'post__category-item';
				$classes[]    = filter_var( $attributes['postCategories']['hoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';
				$open_new_tab = isset( $attributes['enableOptions']['linkCat'], $attributes['enableOptions']['catNewTab'] ) && filter_var( $attributes['enableOptions']['linkCat'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['catNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
				foreach ( $post_data['post_categories'] as $cat_data ) {
					$has_cat_link = isset( $attributes['enableOptions']['linkCat'] ) && filter_var( $attributes['enableOptions']['linkCat'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $cat_data['link'] ) . '"' : '';
					$output      .= '<a class="' . implode( ' ', $classes ) . '" ' . $has_cat_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $cat_data['name'] ) . '</a>';
				}
				$output .= '</div>';
			}

			$has_post_link      = isset( $attributes['enableOptions']['titleLinkPost'] ) && $attributes['enableOptions']['titleLinkPost'] ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
			$open_new_tab       = isset( $attributes['enableOptions']['titleLinkPost'], $attributes['enableOptions']['titleLinkNewTab'] ) && $attributes['enableOptions']['titleLinkPost'] && $attributes['enableOptions']['titleLinkNewTab'] ? '_blank' : '';
			$classes            = array();
			$classes[]          = 'post__title';
			$additional_classes = isset( $attributes['postOptions']['title']['className'] ) ? $attributes['postOptions']['title']['className'] : '';
			if ( ! empty( $additional_classes ) ) {
				$classes = array_merge( $classes, explode( ' ', $additional_classes ) );
			}
			$output .= '<h4 class="' . esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener">' . esc_html( $post_data['post_title'] ) . '</a></h4>';

			if ( filter_var( $attributes['enableOptions']['postAuthor'], FILTER_VALIDATE_BOOLEAN ) || filter_var( $attributes['enableOptions']['postComments'], FILTER_VALIDATE_BOOLEAN ) || filter_var( $attributes['enableOptions']['postDate'], FILTER_VALIDATE_BOOLEAN ) ) {
				$has_meta_link = isset( $attributes['enableOptions']['linkPostMeta'] ) && filter_var( $attributes['enableOptions']['linkPostMeta'], FILTER_VALIDATE_BOOLEAN ) ? true : false;
				$open_new_tab  = isset( $attributes['enableOptions']['linkPostMeta'], $attributes['enableOptions']['postMetaNewTab'] ) && filter_var( $attributes['enableOptions']['linkPostMeta'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['postMetaNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
				$show_icon     = isset( $attributes['postMeta']['enableIcon'] ) && $attributes['postMeta']['enableIcon'] ? true : false;
				$output       .= '<div class="post__meta">';

				if ( filter_var( $attributes['enableOptions']['postAuthor'], FILTER_VALIDATE_BOOLEAN ) ) {
					$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_author_url'] ) . '"' : '';
					$output   .= '<a class="post__author display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
					if ( $show_icon ) {
						$output .= '<svg
								width="' . $attributes['postMeta']['font']['size'] . '"
								height="' . $attributes['postMeta']['font']['size'] . '"
								xmlns="http://www.w3.org/2000/svg"
								aria-hidden="true"
								viewBox="0 0 12 15"
							>
								<path d="M11.2972 14.6667H0.630493V13.3333C0.630493 12.4493 0.981683 11.6014 1.6068 10.9763C2.23193 10.3512 3.07977 10 3.96383 10H7.96383C8.84788 10 9.69573 10.3512 10.3208 10.9763C10.946 11.6014 11.2972 12.4493 11.2972 13.3333V14.6667ZM5.96383 8.66667C5.43854 8.66667 4.9184 8.5632 4.43309 8.36218C3.94779 8.16117 3.50683 7.86653 3.1354 7.49509C2.76396 7.12366 2.46933 6.6827 2.26831 6.1974C2.06729 5.7121 1.96383 5.19195 1.96383 4.66667C1.96383 4.14138 2.06729 3.62124 2.26831 3.13593C2.46933 2.65063 2.76396 2.20967 3.1354 1.83824C3.50683 1.4668 3.94779 1.17217 4.43309 0.971148C4.9184 0.770129 5.43854 0.666666 5.96383 0.666666C7.02469 0.666666 8.04211 1.08809 8.79225 1.83824C9.5424 2.58838 9.96383 3.6058 9.96383 4.66667C9.96383 5.72753 9.5424 6.74495 8.79225 7.49509C8.04211 8.24524 7.02469 8.66667 5.96383 8.66667Z" />
							</svg>';
					}

					$output .= '<p>' . esc_html( $post_data['post_author_name'] ) . '</p>';
					$output .= '</a>';
				}

				if ( filter_var( $attributes['enableOptions']['postComments'], FILTER_VALIDATE_BOOLEAN ) && intval( $post_data['comment_count'] ) > 0 ) {
					$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['comment_link'] ) . '"' : '';
					$output   .= '<a class="post__comments display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
					if ( $show_icon ) {
						$output .= '<svg
								width="' . $attributes['postMeta']['font']['size'] . '"
								height="' . $attributes['postMeta']['font']['size'] . '"
								xmlns="http://www.w3.org/2000/svg"
								aria-hidden="true"
								viewBox="0 0 25 20"
							>
								<path d="M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z" />
							</svg>';
					}

					$output .= '<p>' . esc_html( $post_data['comment_count'] ) . '</p>';
					$output .= '</a>';
				}

				if ( filter_var( $attributes['enableOptions']['postDate'], FILTER_VALIDATE_BOOLEAN ) ) {
					$meta_link = $has_meta_link ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
					$output   .= '<a class="post__date display-flex" ' . $meta_link . ' target="' . $open_new_tab . '" rel="noopener">';
					if ( $show_icon ) {
						$output .= '<svg
								width="' . $attributes['postMeta']['font']['size'] . '"
								height="' . $attributes['postMeta']['font']['size'] . '"
								xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 16 18"
								aria-hidden="true"
							>
								<path d="M7.66699 10.6666C7.43088 10.6666 7.23296 10.5868 7.07324 10.427C6.91352 10.2673 6.83366 10.0694 6.83366 9.83329C6.83366 9.59718 6.91352 9.39927 7.07324 9.23954C7.23296 9.07982 7.43088 8.99996 7.66699 8.99996C7.9031 8.99996 8.10102 9.07982 8.26074 9.23954C8.42046 9.39927 8.50033 9.59718 8.50033 9.83329C8.50033 10.0694 8.42046 10.2673 8.26074 10.427C8.10102 10.5868 7.9031 10.6666 7.66699 10.6666ZM4.33366 10.6666C4.09755 10.6666 3.89963 10.5868 3.73991 10.427C3.58019 10.2673 3.50033 10.0694 3.50033 9.83329C3.50033 9.59718 3.58019 9.39927 3.73991 9.23954C3.89963 9.07982 4.09755 8.99996 4.33366 8.99996C4.56977 8.99996 4.76769 9.07982 4.92741 9.23954C5.08713 9.39927 5.16699 9.59718 5.16699 9.83329C5.16699 10.0694 5.08713 10.2673 4.92741 10.427C4.76769 10.5868 4.56977 10.6666 4.33366 10.6666ZM11.0003 10.6666C10.7642 10.6666 10.5663 10.5868 10.4066 10.427C10.2469 10.2673 10.167 10.0694 10.167 9.83329C10.167 9.59718 10.2469 9.39927 10.4066 9.23954C10.5663 9.07982 10.7642 8.99996 11.0003 8.99996C11.2364 8.99996 11.4344 9.07982 11.5941 9.23954C11.7538 9.39927 11.8337 9.59718 11.8337 9.83329C11.8337 10.0694 11.7538 10.2673 11.5941 10.427C11.4344 10.5868 11.2364 10.6666 11.0003 10.6666ZM7.66699 14C7.43088 14 7.23296 13.9201 7.07324 13.7604C6.91352 13.6007 6.83366 13.4027 6.83366 13.1666C6.83366 12.9305 6.91352 12.7326 7.07324 12.5729C7.23296 12.4132 7.43088 12.3333 7.66699 12.3333C7.9031 12.3333 8.10102 12.4132 8.26074 12.5729C8.42046 12.7326 8.50033 12.9305 8.50033 13.1666C8.50033 13.4027 8.42046 13.6007 8.26074 13.7604C8.10102 13.9201 7.9031 14 7.66699 14ZM4.33366 14C4.09755 14 3.89963 13.9201 3.73991 13.7604C3.58019 13.6007 3.50033 13.4027 3.50033 13.1666C3.50033 12.9305 3.58019 12.7326 3.73991 12.5729C3.89963 12.4132 4.09755 12.3333 4.33366 12.3333C4.56977 12.3333 4.76769 12.4132 4.92741 12.5729C5.08713 12.7326 5.16699 12.9305 5.16699 13.1666C5.16699 13.4027 5.08713 13.6007 4.92741 13.7604C4.76769 13.9201 4.56977 14 4.33366 14ZM11.0003 14C10.7642 14 10.5663 13.9201 10.4066 13.7604C10.2469 13.6007 10.167 13.4027 10.167 13.1666C10.167 12.9305 10.2469 12.7326 10.4066 12.5729C10.5663 12.4132 10.7642 12.3333 11.0003 12.3333C11.2364 12.3333 11.4344 12.4132 11.5941 12.5729C11.7538 12.7326 11.8337 12.9305 11.8337 13.1666C11.8337 13.4027 11.7538 13.6007 11.5941 13.7604C11.4344 13.9201 11.2364 14 11.0003 14ZM1.83366 17.3333C1.37533 17.3333 0.982964 17.1701 0.656576 16.8437C0.330187 16.5173 0.166992 16.125 0.166992 15.6666V3.99996C0.166992 3.54163 0.330187 3.14926 0.656576 2.82288C0.982964 2.49649 1.37533 2.33329 1.83366 2.33329H2.66699V0.666626H4.33366V2.33329H11.0003V0.666626H12.667V2.33329H13.5003C13.9587 2.33329 14.351 2.49649 14.6774 2.82288C15.0038 3.14926 15.167 3.54163 15.167 3.99996V15.6666C15.167 16.125 15.0038 16.5173 14.6774 16.8437C14.351 17.1701 13.9587 17.3333 13.5003 17.3333H1.83366ZM1.83366 15.6666H13.5003V7.33329H1.83366V15.6666Z" />
							</svg>';
					}

					$output .= '<p>' . esc_html( $post_data['post_date_formatted'] ) . '</p>';
					$output .= '</a>';
				}

				$output .= '</div>';
			}
			if ( filter_var( $attributes['enableOptions']['postContent'], FILTER_VALIDATE_BOOLEAN ) ) {
				$output .= '<div class="post__content">';
				$output .= '<div>';

				if ( isset( $post_data['post_excerpt'] ) && ! empty( $post_data['post_excerpt'] ) ) {
					$output .= $post_data['post_excerpt'];
				} else {
					$output .= cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['postExcerpt'] );
				}

				$output .= '</div>';
				if ( filter_var( $attributes['enableOptions']['readMore'], FILTER_VALIDATE_BOOLEAN ) ) {
					$open_new_tab = isset( $attributes['enableOptions']['readMoreNewTab'] ) && filter_var( $attributes['enableOptions']['readMoreNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
					$output      .= '<span class="post__read-more"><a class="post__read-more-link" href="' . esc_url( $post_data['post_link'] ) . '" target="' . $open_new_tab . '" rel="noopener">' . esc_html__( 'Read More', 'cozy-addons' ) . '</a></span>';
				}
				$output .= '</div>';
			}

			$output .= '</div>';

			if ( filter_var( $attributes['enableOptions']['postImage'], FILTER_VALIDATE_BOOLEAN ) && ! empty( $post_data['post_image_url'] ) && 'right' === $attributes['postOptions']['image']['position'] ) {
				$classes   = array();
				$classes[] = 'post__image';
				$classes[] = filter_var( $attributes['postOptions']['image']['hoverEffect'], FILTER_VALIDATE_BOOLEAN ) ? 'has-hover-effect' : '';

				$has_post_link = isset( $attributes['enableOptions']['imgLinkPost'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) ? 'href="' . esc_url( $post_data['post_link'] ) . '"' : '';
				$open_new_tab  = isset( $attributes['enableOptions']['imgLinkPost'], $attributes['enableOptions']['imgLinkNewTab'] ) && filter_var( $attributes['enableOptions']['imgLinkPost'], FILTER_VALIDATE_BOOLEAN ) && filter_var( $attributes['enableOptions']['imgLinkNewTab'], FILTER_VALIDATE_BOOLEAN ) ? '_blank' : '';
				$output       .= '<figure class="' . implode( ' ', $classes ) . '"><a ' . $has_post_link . ' target="' . $open_new_tab . '" rel="noopener"><img src="' . esc_url( $post_data['post_image_url'] ) . '" /></a></figure>';
			}

			$output .= '</li>';
		}
	}

	$selected_category             = 'category' === $attributes['sortBy'] && isset( $attributes['selectedCategory'] ) ? array( $attributes['selectedCategory'] ) : array();
	$cozy_block_magazine_list_args = array(
		'post_type'           => 'post',
		'orderby'             => 'date',
		'order'               => 'DESC',
		'posts_per_page'      => $attributes['perPage'],
		'ignore_sticky_posts' => $attributes['enableOptions']['ignoreSticky'],
		'category__in'        => $selected_category,
		'post__not_in'        => array(),
		'post_status'         => 'publish',
	);

	if ( isset( $attributes['offset'] ) && ! empty( $attributes['offset'] ) ) {
		$offset_args = array(
			'post_type'      => 'post',
			'orderby'        => 'date',
			'order'          => 'DESC',
			'fields'         => 'ids', // Corrected this line
			'posts_per_page' => $attributes['offset'],
			'post_status'    => 'publish',
		);

		$offset_query = new \WP_Query( $offset_args );

		if ( ! empty( $offset_query->posts ) ) {
			$cozy_block_magazine_list_args['post__not_in'] = array_merge(
				$cozy_block_magazine_list_args['post__not_in'],
				$offset_query->posts
			);
		}
	}

	$excluded_post_ids = isset( $attributes['exclude'] ) ? explode( ',', sanitize_text_field( $attributes['exclude'] ) ) : array();
	if ( is_array( $excluded_post_ids ) && ! empty( $excluded_post_ids ) ) {
		$cozy_block_magazine_list_args['post__not_in'] = array_merge( $cozy_block_magazine_list_args['post__not_in'], $excluded_post_ids );
	}

	$additional_post_data = get_cozy_block_magazine_list_posts( $cozy_block_magazine_list_args );

	$cozy_block_magazine_list_args['posts_per_page'] = -1;
	$all_posts                                       = get_cozy_block_magazine_list_posts( $cozy_block_magazine_list_args );

	$remaining_posts = array_udiff(
		$all_posts,
		$additional_post_data,
		function ( $a, $b ) {
			return $a['ID'] - $b['ID'];
		}
	);

	// Assuming you have pagination or offset to get remaining posts in chunks.
	$offset                = isset( $_POST['offset'] ) ? intval( $_POST['offset'] ) : 0;
	$posts_per_page        = isset( $attributes['ajaxLoader']['content'] ) ? intval( $attributes['ajaxLoader']['content'] ) : 10;
	$remaining_posts_chunk = array_slice( $remaining_posts, $offset, $posts_per_page );
	$next_chunk            = array_slice( $remaining_posts, $offset + $posts_per_page, $posts_per_page );

	if ( empty( $remaining_posts_chunk ) ) {
		wp_send_json_error( '' );
	}

	if ( ! empty( $remaining_posts_chunk ) ) {
		// Output the posts.
		$output = '';
		foreach ( $remaining_posts_chunk as $post_data ) {
			// Customize the HTML structure as per your requirement .
			render_cozy_block_magazine_list_posts_load_more_data( $attributes, $post_data, $output );
		}
		$return_data = array(
			'render'           => $output,
			'next_chunk_count' => count( $next_chunk ),
		);
		wp_send_json_success( $return_data );
	}
}
add_action( 'wp_ajax_cozy_block_magazine_list_loader', 'cozy_block_magazine_list_load_content' );
add_action( 'wp_ajax_nopriv_cozy_block_magazine_list_loader', 'cozy_block_magazine_list_load_content' );

/**
 * Loads and outputs the content for the Popular Posts block via AJAX or server-side rendering.
 *
 * This function retrieves and renders a list of popular posts, typically sorted by view count
 * or other popularity metrics. It supports dynamic loading based on query parameters like
 * time range, post type, category, or offset.
 */
function cozy_block_popular_posts_load_content() {
	check_ajax_referer( 'cozy_block_popular_posts_load_more', 'nonce', true );
	$attributes = isset( $_POST['attributes'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['attributes'] ) ), true ) : array();

	if ( empty( $attributes ) ) {
		return;
	}

	/* Fetch Posts */
	if ( ! function_exists( 'get_cozy_block_popular_posts' ) ) {
		function get_cozy_block_popular_posts( $args = array() ) {
			if ( ! empty( $args ) ) {
				$popular_posts        = new \WP_Query( $args );
				$additional_post_data = array();

				foreach ( $popular_posts->posts as $post_data ) {
					$post_image_url = get_the_post_thumbnail_url( $post_data->ID );
					$post_link      = get_permalink( $post_data->ID );

					// Get categories and their links.
					$categories                  = get_the_category( $post_data->ID );
					$post_categories             = array();
					$post_id                     = $post_data->ID;
					$post_data                   = (array) $post_data; // Convert WP_Post object to an array.
					$post_data['post_image_url'] = $post_image_url;

					foreach ( $categories as $category ) {
						$post_categories[] = array(
							'name'        => $category->name,
							'link'        => get_category_link( $category->term_id ),
							'count'       => $category->count,
							'description' => $category->description,
							'slug'        => $category->slug,
							'taxonomy'    => $category->taxonomy,
							'parent'      => $category->parent,
						);
					}
					$post_data['post_categories'] = $post_categories;

					$post_data['post_author_name']    = get_the_author_meta( 'display_name', $post_data['post_author'] ) ?? '';
					$post_data['post_author_url']     = get_author_posts_url( $post_data['post_author'] ) ?? '';
					$post_data['post_link']           = $post_link;
					$post_data['post_date_formatted'] = get_the_date( '', $post_id );
					$post_data['comment_link']        = get_comments_link( $post_id );
					$additional_post_data[]           = $post_data;
				}

				wp_reset_postdata();

				return $additional_post_data;
			}
			return array();
		}
	}

	$cozy_block_popular_posts_args = array(
		'post_type'           => 'post',
		'meta_key'            => 'cozy_post_views_count', // Replace with your popularity field.
		'orderby'             => 'cozy_post_views_count',
		'order'               => 'DESC',
		'posts_per_page'      => $attributes['perPage'], // Number of popular posts to retrieve.
		'ignore_sticky_posts' => true,
		'meta_query'          => array(
			'relation' => 'AND',
			array(
				'key'     => 'cozy_post_views_count',
				'compare' => 'EXISTS', // Check if the timestamp is greater than or equal to one week ago.
			),
			array(
				'key'     => 'cozy_post_views_count',
				'value'   => '0',
				'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
			),
		),
		'post_status'         => 'publish',
	);

	$additional_post_data = get_cozy_block_popular_posts( $cozy_block_popular_posts_args );

	$cozy_block_popular_posts_args['posts_per_page'] = -1;
	$all_posts                                       = get_cozy_block_popular_posts( $cozy_block_popular_posts_args );

	$remaining_posts = array_udiff(
		$all_posts,
		$additional_post_data,
		function ( $a, $b ) {
			return $a['ID'] - $b['ID'];
		}
	);

	// Assuming you have pagination or offset to get remaining posts in chunks.
	$offset                = isset( $_POST['offset'] ) ? intval( $_POST['offset'] ) : 0;
	$posts_per_page        = isset( $attributes['ajaxLoader']['content'] ) ? intval( $attributes['ajaxLoader']['content'] ) : 10;
	$remaining_posts_chunk = array_slice( $remaining_posts, $offset, $posts_per_page );
	$next_chunk            = array_slice( $remaining_posts, $offset + $posts_per_page, $posts_per_page );

	if ( empty( $remaining_posts_chunk ) ) {
		wp_send_json_error( '' );
	}

	if ( ! empty( $remaining_posts_chunk ) ) {
		// Output the posts.
		$output = '';
		foreach ( $remaining_posts_chunk as $post_data ) {
			// Customize the HTML structure as per your requirement .
			\CozyAddons\Helpers\BlockRender::popular_posts_render( $attributes, $post_data, $output );
		}
		$return_data = array(
			'render'           => $output,
			'next_chunk_count' => count( $next_chunk ),
		);
		wp_send_json_success( $return_data );
	}
}
add_action( 'wp_ajax_cozy_block_popular_posts_loader', 'cozy_block_popular_posts_load_content' );
add_action( 'wp_ajax_nopriv_cozy_block_popular_posts_loader', 'cozy_block_popular_posts_load_content' );

/**
 * Loads and outputs the content for the Trending Posts block via AJAX or server-side rendering.
 *
 * This function retrieves and displays a list of trending posts, usually based on post view counts
 * or custom metrics tracked over a specific time range (e.g., daily, weekly).
 * It can support additional filters like categories, tags, or post types.
 */
function cozy_block_trending_posts_load_content() {
	check_ajax_referer( 'cozy_block_trending_posts_load_more', 'nonce', true );
	$attributes = isset( $_POST['attributes'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['attributes'] ) ), true ) : array();

	if ( empty( $attributes ) ) {
		return;
	}

	/* Fetch Posts */
	if ( ! function_exists( 'get_cozy_block_trending_posts' ) ) {
		function get_cozy_block_trending_posts( $args = array() ) {
			if ( ! empty( $args ) ) {
				$popular_posts        = new \WP_Query( $args );
				$additional_post_data = array();

				foreach ( $popular_posts->posts as $post_data ) {
					$post_image_url = get_the_post_thumbnail_url( $post_data->ID );
					$post_link      = get_permalink( $post_data->ID );

					// Get categories and their links.
					$categories                  = get_the_category( $post_data->ID );
					$post_categories             = array();
					$post_id                     = $post_data->ID;
					$post_data                   = (array) $post_data; // Convert WP_Post object to an array.
					$post_data['post_image_url'] = $post_image_url;

					foreach ( $categories as $category ) {
						$post_categories[] = array(
							'name'        => $category->name,
							'link'        => get_category_link( $category->term_id ),
							'count'       => $category->count,
							'description' => $category->description,
							'slug'        => $category->slug,
							'taxonomy'    => $category->taxonomy,
							'parent'      => $category->parent,
						);
					}
					$post_data['post_categories'] = $post_categories;

					$post_data['post_author_name']    = get_the_author_meta( 'display_name', $post_data['post_author'] ) ?? '';
					$post_data['post_author_url']     = get_author_posts_url( $post_data['post_author'] ) ?? '';
					$post_data['post_link']           = $post_link;
					$post_data['post_date_formatted'] = get_the_date( '', $post_id );
					$post_data['comment_link']        = get_comments_link( $post_id );
					$additional_post_data[]           = $post_data;
				}

				wp_reset_postdata();

				return $additional_post_data;
			}
			return array();
		}
	}

	$cozy_block_trending_posts_args = array(
		'post_type'      => 'post',
		'orderby'        => 'cozy_trending_post_views',
		'order'          => 'DESC',
		'posts_per_page' => $attributes['perPage'], // Number of trending posts to retrieve.
		'meta_key'       => 'cozy_trending_post_views', // Replace with your popularity field.
		'meta_query'     => array(
			'relation' => 'AND',
			array(
				'key'     => 'cozy_trending_post_views',
				'compare' => 'EXISTS', // Check if the timestamp is greater than or equal to one week ago.
			),
			array(
				'key'     => 'cozy_trending_post_views',
				'value'   => '0',
				'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
			),
		),
		'post_status'    => 'publish',
	);

	$additional_post_data = get_cozy_block_trending_posts( $cozy_block_trending_posts_args );

	$cozy_block_trending_posts_args['posts_per_page'] = -1;
	$all_posts                                        = get_cozy_block_trending_posts( $cozy_block_trending_posts_args );

	$remaining_posts = array_udiff(
		$all_posts,
		$additional_post_data,
		function ( $a, $b ) {
			return $a['ID'] - $b['ID'];
		}
	);

	// Assuming you have pagination or offset to get remaining posts in chunks.
	$offset                = isset( $_POST['offset'] ) ? intval( $_POST['offset'] ) : 0;
	$posts_per_page        = isset( $attributes['ajaxLoader']['content'] ) ? intval( $attributes['ajaxLoader']['content'] ) : 10;
	$remaining_posts_chunk = array_slice( $remaining_posts, $offset, $posts_per_page );
	$next_chunk            = array_slice( $remaining_posts, $offset + $posts_per_page, $posts_per_page );

	if ( empty( $remaining_posts_chunk ) ) {
		wp_send_json_error( '' );
	}

	if ( ! empty( $remaining_posts_chunk ) ) {
		// Output the posts.
		$output = '';
		foreach ( $remaining_posts_chunk as $post_data ) {
			// Customize the HTML structure as per your requirement .
			\CozyAddons\Helpers\BlockRender::trending_posts_render( $attributes, $post_data, $output );
		}
		$return_data = array(
			'render'           => $output,
			'next_chunk_count' => count( $next_chunk ),
		);
		wp_send_json_success( $return_data );
	}
}
add_action( 'wp_ajax_cozy_block_trending_posts_loader', 'cozy_block_trending_posts_load_content' );
add_action( 'wp_ajax_nopriv_cozy_block_trending_posts_loader', 'cozy_block_trending_posts_load_content' );

/**
 * Loads and outputs the content for the Advanced Gallery block via AJAX or server-side rendering.
 *
 * This function dynamically generates a gallery layout based on the provided attributes,
 * such as image IDs, gallery style, columns, captions, or filters. It is used to support
 * advanced gallery features like lazy loading, pagination, category-based filtering, or lightbox support.
 */
function cozy_block_advanced_gallery_load_content() {
	check_ajax_referer( 'cozy_block_advanced_gallery_load_more', 'nonce', true );
	$attributes = isset( $_POST['attributes'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['attributes'] ) ), true ) : array();

	$offset   = isset( $_POST['offset'] ) ? intval( $_POST['offset'] ) : 0;
	$tab_slug = isset( $_POST['tabSlug'] ) && '' !== $_POST['tabSlug'] ? sanitize_text_field( wp_unslash( $_POST['tabSlug'] ) ) : '';

	if ( empty( $attributes ) ) {
		return;
	}

	/* Gallery Render */
	if ( 'grid' === $attributes['display'] ) {
		if ( 'all' == $tab_slug ) {
			$limit                 = count( (array) $attributes['mediaCollection'] ) - 1;
			$remaining_posts       = array_slice( (array) $attributes['mediaCollection'], $attributes['perPage'], $limit );
			$posts_per_page        = isset( $attributes['ajaxLoader']['content'] ) ? intval( $attributes['ajaxLoader']['content'] ) : 10;
			$remaining_posts_chunk = array_slice( $remaining_posts, $offset, $posts_per_page );
			$next_chunk            = array_slice( $remaining_posts, $offset + $posts_per_page, $posts_per_page );
			if ( empty( $remaining_posts_chunk ) ) {
				wp_send_json_error( $remaining_posts_chunk );
			}

			if ( ! empty( $remaining_posts_chunk ) ) {
				// Output the posts.
				$output = '';
				foreach ( $remaining_posts_chunk as $media ) {
					// Customize the HTML structure as per your requirement .
					\CozyAddons\Helpers\BlockRender::advanced_gallery_render( $attributes, $media, $output );
				}
				$return_data = array(
					'render'           => $output,
					'next_chunk_count' => count( $next_chunk ),
					'tab_slug'         => $tab_slug,
				);
				wp_send_json_success( $return_data );
			}
		} else {
			$filtered_items = array_filter(
				(array) $attributes['mediaCollection'],
				function ( $item ) use ( $tab_slug ) {
					return isset( $item['categories'] ) && in_array( $tab_slug, $item['categories'], true );
				}
			);

			$tab_offset            = intval( $attributes['tabRemainingData'][ $tab_slug ]['offset'] );
			$limit                 = count( $filtered_items ) - 1;
			$remaining_posts       = array_slice( $filtered_items, $attributes['perPage'], $limit );
			$posts_per_page        = isset( $attributes['ajaxLoader']['content'] ) ? intval( $attributes['ajaxLoader']['content'] ) : 10;
			$remaining_posts_chunk = array_slice( $remaining_posts, $tab_offset, $posts_per_page );
			$next_chunk            = array_slice( $remaining_posts, $tab_offset + $posts_per_page, $posts_per_page );

			if ( empty( $remaining_posts_chunk ) ) {
				wp_send_json_error( $tab_slug );
			}

			if ( ! empty( $remaining_posts_chunk ) ) {
				// Output the posts.
				$output = '';
				foreach ( $remaining_posts_chunk as $media ) {
					// Customize the HTML structure as per your requirement .
					\CozyAddons\Helpers\BlockRender::advanced_gallery_render( $attributes, $media, $output );
				}
				$return_data = array(
					'render'           => $output,
					'next_chunk_count' => count( $next_chunk ),
					'tab_slug'         => $tab_slug,
				);
				wp_send_json_success( $return_data );
			}
		}
	}
}
add_action( 'wp_ajax_cozy_block_advanced_gallery_loader', 'cozy_block_advanced_gallery_load_content' );
add_action( 'wp_ajax_nopriv_cozy_block_advanced_gallery_loader', 'cozy_block_advanced_gallery_load_content' );

/**
 * Renders the wishlist data inside a sidebar layout.
 *
 * This function is responsible for generating and displaying the wishlist items
 * in a sidebar or off-canvas panel. It typically pulls wishlist data from user meta,
 * session, or a custom storage mechanism, and formats the output as HTML.
 */
function cozy_addons_wishlist_render_data_sidebar() {
	check_ajax_referer( 'cozy_block_wishlist_render_data_sidebar', 'sidebarNonce', true );

	$wishlist_data = isset( $_POST['wishlistData'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['wishlistData'] ) ), true ) : '';

	$output = '<ul class="cozy-block-wishlist__product-data-wrapper">';

	if ( is_array( $wishlist_data ) ) {
		krsort( $wishlist_data );

		foreach ( $wishlist_data as $product_id ) {
			// Get the product object.
			$product = wc_get_product( $product_id );

			if ( $product ) {
				// Get product details.
				$product_name        = $product->get_name();
				$product_link        = get_permalink( $product_id );
				$product_price       = wc_price( $product->get_price() );
				$product_description = $product->get_description();
				$product_image       = wp_get_attachment_url( $product->get_image_id() );
				$is_in_stock         = $product->get_stock_status();

				$output .= '<li class="cozy-block-wishlist__product-data post-' . $product_id . '">';
				/* Product Image */
				if ( ! empty( $product_image ) ) {
					$output .= '<figure class="cozy-block-wishlist__product-image">';
					$output .= '<a href="' . esc_url( $product_link ) . '" rel="noopener" target="_blank">';
					$output .= '<img src="' . esc_url( $product_image ) . '" />';
					$output .= '</a>';
					$output .= '</figure>';
				}
				/* End Product Image */

				/* Product Details */
				$output .= '<div style="width:100%;">';
				$output .= '<p class="cozy-block-wishlist__product-title"><a href="' . esc_url( $product_link ) . '" rel="noopener" target="_blank">' . esc_html( $product_name ) . '</a></p>';
				$output .= '<p class="cozy-block-wishlist__product-summary">' . cozy_create_excerpt( $product_description, 15 ) . '</p>';
				$output .= '<p class="cozy-block-wishlist__product-price">' . $product_price . '</p>';

				/* Add/Remove Buttons */
				$output     .= '<div style="display:flex;justify-content:space-between;flex-wrap:wrap;gap:6px;">';
				$stock_label = 'instock' === $is_in_stock ? 'Add to Cart' : 'Out of Stock';
				$classes     = array();
				$classes[]   = 'cozy-block-wishlist__sidebar-button';
				$classes[]   = 'instock' === $is_in_stock ? 'add__cart' : 'out-of-stock';
				$output     .= '<div class="' . implode( ' ', $classes ) . '" data-product-id="' . $product_id . '">' . $stock_label . '</div>';
				$output     .= '<div class="cozy-block-wishlist__sidebar-button remove__wishlist" data-product-id="' . $product_id . '">' . esc_html__( 'Remove', 'cozy-addons' ) . '</div>';
				$output     .= '</div>';
				/* End Add/Remove Buttons */

				$output .= '</div>';

				/* End Product Details */
				$output .= '</li>';

			}
		}
	}

	$output .= '</ul>';

	wp_send_json_success(
		array(
			'render' => $output,
		)
	);
}
add_action( 'wp_ajax_cozy_block_wishlist_render_data_sidebar', 'cozy_addons_wishlist_render_data_sidebar' );
add_action( 'wp_ajax_nopriv_cozy_block_wishlist_render_data_sidebar', 'cozy_addons_wishlist_render_data_sidebar' );

/* Update Logged In user wishlist */
add_action( 'wp_ajax_cozy_block_wishlist_update_user_wishlist', 'cozy_block_wishlist_update_user_wishlist_callback' );
add_action( 'wp_ajax_nopriv_cozy_block_wishlist_update_user_wishlist', 'cozy_block_wishlist_update_user_wishlist_callback' );
if ( ! function_exists( 'cozy_block_wishlist_update_user_wishlist_callback' ) ) {
	function cozy_block_wishlist_update_user_wishlist_callback() {
		check_ajax_referer( 'cozy_block_wishlist_update_user_wishlist', 'wishlistNonce', true );

		$product_id = isset( $_POST['productId'] ) ? intval( sanitize_text_field( wp_unslash( $_POST['productId'] ) ) ) : '';
		$user_id    = isset( $_POST['userId'] ) ? sanitize_text_field( wp_unslash( $_POST['userId'] ) ) : '';

		// Retrieve the current wishlist from user meta.
		$user_wishlist = get_user_meta( $user_id, 'cozy_block_wishlist_data', true ); // Add `true` to return a single value

		// Initialize the wishlist if it is not already an array.
		if ( ! is_array( $user_wishlist ) ) {
			$user_wishlist = array();
		}

		// Check if the product_id exists in the wishlist.
		$key = array_search( $product_id, $user_wishlist, true );

		if ( $key !== false ) {
			// Product exists in the wishlist, remove it.
			unset( $user_wishlist[ $key ] );
			// Reindex the array to prevent gaps.
			$user_wishlist = array_values( $user_wishlist );
		} else {
			// Product does not exist, add it to the wishlist.
			$user_wishlist[] = $product_id;

		}

		// Update the user meta with the modified wishlist
		update_user_meta( $user_id, 'cozy_block_wishlist_data', $user_wishlist );

		wp_send_json_success(
			array(
				'user_wishlist' => get_user_meta( $user_id, 'cozy_block_wishlist_data', true ),
			)
		);
	}
}

/* Add product to cart */
add_action( 'wp_ajax_cozy_block_wishlist_add_to_cart', 'cozy_block_wishlist_add_to_cart_callback' );
add_action( 'wp_ajax_nopriv_cozy_block_wishlist_add_to_cart', 'cozy_block_wishlist_add_to_cart_callback' );
if ( ! function_exists( 'cozy_block_wishlist_add_to_cart_callback' ) ) {
	function cozy_block_wishlist_add_to_cart_callback() {
		check_ajax_referer( 'cozy_block_wishlist_add_to_cart', 'cartNonce', true );

		$product_id = isset( $_POST['productId'] ) ? intval( sanitize_text_field( wp_unslash( $_POST['productId'] ) ) ) : '';

		$quantity = isset( $_POST['productQuantity'] ) ? sanitize_text_field( wp_unslash( $_POST['productQuantity'] ) ) : 1;

		$added = WC()->cart->add_to_cart( $product_id, $quantity );

		if ( $added ) {
			wp_send_json_success( 'Product added to cart' );
		} else {
			wp_send_json_error( 'Could not add product to cart' );
		}
	}
}

/* Quick View lightbox render */
add_action( 'wp_ajax_cozy_block_quick_view_lightbox_render', 'render_cozy_block_quick_view_lightbox_body' );
add_action( 'wp_ajax_nopriv_cozy_block_quick_view_lightbox_render', 'render_cozy_block_quick_view_lightbox_body' );
if ( ! function_exists( 'render_cozy_block_quick_view_lightbox_body' ) ) {
	function render_cozy_block_quick_view_lightbox_body() {
		check_ajax_referer( 'cozy_block_quick_view_render_data_lightbox', 'quickViewNonce', true );

		$attributes = isset( $_POST['attributes'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['attributes'] ) ), true ) : array();

		$product_id = isset( $_POST['productId'] ) ? intval( sanitize_text_field( wp_unslash( $_POST['productId'] ) ) ) : '';

		$product = wc_get_product( $product_id );

		$output = '';

		if ( $product ) {
			$price               = '';
			$discount_amt        = '';
			$discount_percentage = '';
			// Check if the product has a sale price.
			if ( $product->is_on_sale() ) {
				$price         = wc_format_sale_price( $product->get_regular_price(), $product->get_sale_price() );
				$regular_price = $product->get_regular_price();
				$sale_price    = $product->get_sale_price();

				// Check if both regular and sale prices are numeric before calculating discount amount
				if ( is_numeric( $regular_price ) && is_numeric( $sale_price ) ) {
					$discount_amt        = wc_price( $regular_price - $sale_price );
					$discount_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
					$discount_percentage = number_format( $discount_percentage, 1 );
					$discount_percentage = preg_replace( '/\.0+$/', '', $discount_percentage ) . '%';
				}
			} else {
				$price = wc_price( $product->get_regular_price() );
			}

			// Get product details.
			$product_name         = get_the_title( $product_id );
			$product_link         = get_permalink( $product_id );
			$product_price        = $price;
			$product_description  = get_the_content( '', '', $product_id );
			$product_image        = get_the_post_thumbnail_url( $product_id );
			$product_rating_count = $product->get_review_count();
			$product_rating       = $product->get_average_rating(); // Get the product rating.

			/* Close Button */
			$output .= '<div class="quick-view__lightbox-toolbar-button lightbox__close-button">';
			$output .= '<svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/" aria-hidden="true">';
			$output .= '<path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />';
			$output .= '</svg>';
			$output .= '</div>';
			/* End Close Button */

			if ( ! empty( $product_image ) ) {
				$classes   = array();
				$classes[] = 'quick-view__product-image';
				$output   .= '<figure class="' . implode( ' ', $classes ) . '">';
				$output   .= '<a href="' . esc_url( $product_link ) . '" rel="noopener" target="_blank">';
				$output   .= '<img src="' . esc_url( $product_image ) . '" />';
				$output   .= '</a>';
				$output   .= '</figure>';
			}

			/* Product Details */
			$output .= '<div class="quick-view__product-detail">';
			$output .= '<h3 class="post__title"><a href="' . esc_url( $product_link ) . '" rel="noopener" target="_blank">' . esc_html( $product_name ) . '</a></h3>';
			$output .= '<p class="post__content">' . cozy_create_excerpt( $product_description ) . '</p>';

			$output .= '<div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;">';
			$output .= '<p class="post__price">' . $product_price . '</p>';

			if ( $product_rating_count > 0 ) {
				/* Product Rating */
				$rating_percent = floatval( $product_rating ) / 5 * 100 . '%';
				$output        .= '<div class="quick-view__product-review">';
				$output        .= '<div class="quick-view__product-rating" style="display:inline;background: linear-gradient(90deg, #fcb900 ' . $rating_percent . ', rgba(0,0,0,0.2) ' . $rating_percent . ');">★★★★★</div>';
				$output        .= '<span style="display:block;">(' . number_format( $product_rating, 1 ) . ' out of ' . $product_rating_count . _n( ' Review', ' Reviews', $product_rating_count, 'cozy-addons' ) . ')</span>';
				$output        .= '</div>';
				/* End Product Rating */
			}

			$output .= '</div>';

			/* Add to Cart */
			$output .= '<div class="quick-view__cart-wrapper">';
			$output .= '<div class="quick-view__quantity">';
			$output .= '<span class="quantity__increase"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M17.3051 12.1C17.3051 12.6 16.9051 13 16.4051 13H12.8051V16.4C12.8051 16.9 12.4051 17.3 11.9051 17.3C11.4051 17.3 11.0051 16.9 11.0051 16.4V13H7.60511C7.10511 13 6.70511 12.6 6.70511 12.1C6.70511 11.6 7.10511 11.2 7.60511 11.2H11.0051V7.6C11.0051 7.1 11.4051 6.7 11.9051 6.7C12.4051 6.7 12.8051 7.1 12.8051 7.6V11.2H16.4051C16.9051 11.2 17.3051 11.6 17.3051 12.1Z" />
			</svg></span>';
			$output .= '<input class="quick-view__quantity-input" type="text" value="1" disabled />';
			$output .= '<span class="quantity__decrease opacity-50"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
			<path d="M5 11.25h14v1.5H5z" />
			</svg></span>';
			$output .= '</div>';

			$output .= '<div class="quick-view__cart-tooltip visibility-hidden"></div>';

			$output       .= '<div class="quick-view__cart-buttons">';
			$cart_label    = $attributes['cartButton']['label'] ? $attributes['cartButton']['label'] : 'Add to cart';
			$output       .= '<div class="quick-view__cart-button post__cart-button">';
			$output       .= '<svg class="loader-icon display-none" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.99998 2.66666C9.72665 2.66666 11.2626 3.48666 12.238 4.762L10.6666 6.33333H14.6666V2.33333L13.1873 3.81266C12.5631 3.03781 11.773 2.41284 10.8753 1.98376C9.97754 1.55467 8.99499 1.33241 7.99998 1.33333C4.31798 1.33333 1.33331 4.318 1.33331 8H2.66665C2.66665 6.58551 3.22855 5.22896 4.22874 4.22876C5.22894 3.22857 6.58549 2.66666 7.99998 2.66666ZM13.3333 8C13.3333 9.11533 12.9837 10.2026 12.3336 11.1089C11.6835 12.0151 10.7656 12.6948 9.7091 13.0522C8.65259 13.4096 7.51062 13.4268 6.44382 13.1014C5.37703 12.776 4.4391 12.1243 3.76198 11.238L5.33331 9.66666H1.33331V13.6667L2.81265 12.1873C3.43687 12.9622 4.22694 13.5872 5.12468 14.0162C6.02242 14.4453 7.00497 14.6676 7.99998 14.6667C11.682 14.6667 14.6666 11.682 14.6666 8H13.3333Z" />
				</svg>';
			$output       .= '<span class="cart-button__label">' . esc_html( $cart_label ) . '</span>';
			$output       .= '</div>';
			$cart_page_url = wc_get_cart_url();
			$output       .= '<a class="quick-view__cart-view" href="' . esc_url( $cart_page_url ) . '" rel="noopener" target="_blank">' . esc_html__( 'View my cart', 'cozy-addons' ) . '</a>';
			$output       .= '</div>';

			$output .= '</div>';
			/* End Add to Cart */

			if ( $product_rating_count > 0 ) {
				/* Product Rating Carousel */
				$output .= '<div class="quick-view__rating swiper__container">';
				$output .= '<div class="swiper-wrapper">';
				$args    = array(
					'post_type' => 'product',
					'post_id'   => $product_id,
					'status'    => 'approve', // Only get approved comments
					'orderby'   => 'date',
					'order'     => 'DESC',
				);

				$reviews = get_comments( $args );

				foreach ( $reviews as $review ) {
					$user_avatar    = get_avatar_url( $review->user_id );
					$timestamp      = strtotime( $review->comment_date );
					$comment_rating = get_comment_meta( $review->comment_ID, 'rating', true );
					$rating_percent = $comment_rating / 5 * 100 . '%';

					$output .= '<div class="quick-view__rating-item swiper-slide">';

					$output .= '<figure class="quick-view__user-avatar">'; /* User Avatar */
					$output .= '<img src="' . esc_url( $user_avatar ) . '" />';
					$output .= '</figure>'; /* End User Avatar */

					$output .= '<div style="display:inline-block;margin-left:10px;">'; /* Rating details */
					$output .= '<p class="review-author">' . esc_html( $review->comment_author ) . '</p>';
					$output .= '<p class="review-date">' . gmdate( 'd M, Y', $timestamp ) . '</p>';
					$output .= '<div class="quick-view__product-rating" style="display:inline;background: linear-gradient(90deg, #fcb900 ' . $rating_percent . ', rgba(0,0,0,0.2) ' . $rating_percent . ');">★★★★★</div>';

					$output .= '</div>'; /* End Rating Details */
					$output .= '<div class="review-content">' . cozy_create_excerpt( $review->comment_content, 30 ) . '</div>';

					$output .= '</div>'; /* End Swiper Slide */
				}
				$output .= '</div>';

				$output .= '<div class="swiper-pagination"></div>';

				$output .= '</div>';
				/* End Product Rating Carousel */
			}

			$output .= '</div>';
			/* End Product Details */

			wp_send_json_success(
				array(
					'render' => $output,
				)
			);
		}
	}
}

function cozy_remove_special_chars( $str, $args = array() ) {
	$special_chars = array( ';', '=', '(', ')', ' ' );
	if ( ! empty( $args ) && is_array( $args ) ) {
		$special_chars = array_diff( $special_chars, $args );
	}

	$str = wp_strip_all_tags( $str );

	return str_replace( $special_chars, '', $str );
}

/**
 * Filters HTML content to allow only a specific set of HTML tags and attributes.
 *
 * This function helps prevent XSS (Cross-Site Scripting) attacks by sanitizing
 * user-provided content and ensuring only safe HTML elements and attributes
 * are allowed. It uses the wp_kses() function internally to enforce the whitelist.
 *
 * @param string $content The HTML content to be sanitized.
 *
 * @return string The sanitized content with only the allowed HTML tags and attributes.
 */
function cozy_filter_html_tags( $tag ) {
	$allowed_tags = array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div', 'span', 'p' );

	// Convert the user input to lowercase to ensure case-insensitive comparison.
	$tag = strtolower( trim( $tag ) );

	// Check if the tag is in the whitelist; return it if valid, otherwise return 'p'.
	return in_array( $tag, $allowed_tags, true ) ? $tag : 'p';
}

/**
 * Retrieves the plugin versions of the Cozy Addons plugin from the WordPress API.
 *
 * This function sends a request to the WordPress Plugin API endpoint for Cozy Addons
 * and retrieves the available versions. It processes the response, checks if it is serialized
 * or JSON, and extracts version information into an array. The versions are then sorted
 * in descending order based on the version number.
 *
 * @return array An array of plugin versions, each containing 'version' and 'url' keys.
 *               - 'version' is the plugin version number.
 *               - 'url' is the download URL for the plugin version.
 *               If the response does not contain version data or is invalid,
 *               an empty array will be returned.
 */
function cozy_addons_get_plugin_versions() {
	$response = wp_remote_get( 'https://api.wordpress.org/plugins/info/1.0/cozy-addons/' );

	$response = wp_remote_retrieve_body( $response );

	if ( is_serialized( $response ) ) {
		$response = maybe_unserialize( $response );
	} else {
		$response = json_decode( $response );
	}

	if ( ! is_object( $response ) ) {
		return array();
	}
	if ( ! isset( $response->versions ) ) {
		return array();
	}

	$versions = array();
	foreach ( $response->versions as $key => $value ) {
		$versions[] = array(
			'version' => is_object( $value ) ? $value->version : $key,
			'url'     => is_object( $value ) ? $value->file : $value,
		);
	}

	usort(
		$versions,
		function ( $a, $b ) {
			return version_compare( $b['version'], $a['version'] );
		}
	);

	array_pop( $versions );

	return $versions;
}

// Download plugin and initiate rollback
function cozy_addons_download_plugin_rollback_version_callback() {
	check_ajax_referer( 'cozy_addons_rollback_version_download', 'nonce', true );

	$previous_version_url = isset( $_POST['downloadURL'] ) ? sanitize_url( wp_unslash( $_POST['downloadURL'] ) ) : '';

	// Your previous version logic here
	if ( empty( esc_url( $previous_version_url ) ) ) {
		wp_send_json_error( array( 'message' => esc_html__( 'Invalid download URL.', 'cozy-addons' ) ) );
	}

	$temp_file = download_url( esc_url( $previous_version_url ) );

	if ( is_wp_error( $temp_file ) ) {
		wp_delete_file( $temp_file );
		wp_send_json_error( array( 'message' => esc_html__( 'Oops! Download failed.', 'cozy-addons' ) ) );
	}

	wp_send_json_success(
		array(
			'tempFile' => $temp_file,
		)
	);
}
add_action( 'wp_ajax_cozy_addons_download_plugin_rollback_version', 'cozy_addons_download_plugin_rollback_version_callback' );
add_action( 'wp_ajax_nopriv_cozy_addons_download_plugin_rollback_version', 'cozy_addons_download_plugin_rollback_version_callback' );

// Deactivate and remove the plugin
function cozy_addons_activate_rollback_version_callback() {
	check_ajax_referer( 'cozy_addons_rollback_version_activate', 'nonce', true );

	$temp_file = isset( $_POST['tempURL'] ) ? sanitize_text_field( wp_unslash( $_POST['tempURL'] ) ) : '';

	if ( empty( $temp_file ) || ! file_exists( $temp_file ) || mime_content_type( $temp_file ) !== 'application/zip' ) {
		wp_delete_file( $temp_file );
		wp_send_json_error();
	}

	if ( is_plugin_active( 'cozy-addons/cozy-addons.php' ) ) {
		deactivate_plugins( 'cozy-addons/cozy-addons.php' );

		if ( file_exists( trailingslashit( WP_PLUGIN_DIR ) . 'cozy-addons' ) ) {
			// if ( is_wp_error( uninstall_plugin( 'cozy-addons/cozy-addons.php' ) ) ) {
			// wp_send_json_error();
			// }

			if ( is_wp_error( delete_plugins( array( 'cozy-addons/cozy-addons.php' ) ) ) ) {
				wp_send_json_error();
			}
		}
	}

	$result = unzip_file( $temp_file, WP_PLUGIN_DIR );

	wp_delete_file( $temp_file );

	if ( is_wp_error( $result ) ) {
		wp_send_json_error();
	}

	if ( file_exists( trailingslashit( WP_PLUGIN_DIR ) . 'cozy-addons' ) ) {
		activate_plugin( 'cozy-addons/cozy-addons.php' );
	}

	wp_send_json_success();
}
add_action( 'wp_ajax_cozy_addons_activate_rollback_version', 'cozy_addons_activate_rollback_version_callback' );
add_action( 'wp_ajax_nopriv_cozy_addons_activate_rollback_version', 'cozy_addons_activate_rollback_version_callback' );

/**
 * Adds data attributes for the responsive show/hide in the block.
 *
 * @param string $block_content The content serialized block content.
 * @param array  $block The parsed block.
 */
function append_cozy_responsive_data_attributes( &$block_content, &$block ) {
	$enabled_blocks = array(
		'core/buttons',
		'core/button',
		'core/columns',
		'core/column',
		'core/group',
		'core/heading',
		'core/paragraph',
	);

	if ( ! isset( $block['attrs']['cozyResponsiveShow'] ) && ! in_array( $block['blockName'], $enabled_blocks, true ) ) {
		return $block_content;
	}

	if ( isset( $block['attrs']['cozyResponsiveShow'] ) && in_array( $block['blockName'], $enabled_blocks, true ) ) {
		$cozy_responsive_show = $block['attrs']['cozyResponsiveShow'];

		// Extract the existing class attribute.
		preg_match( '/<div class="([^"]+)"/', $block_content, $matches );
		$existing_class = isset( $matches[1] ) ? $matches[1] : '';

		// Append the custom class and inline styles to the class attribute
		$updated_class = trim( $existing_class . ' cozy-responsive-show__initialized' );

		$cozy_responsive_string = ' data-desktop-show="' . $cozy_responsive_show['desktopShow'] . '" data-tablet-show="' . $cozy_responsive_show['tabletShow'] . '" data-tablet-viewport-width="' . $cozy_responsive_show['tabletViewport'] . '" data-mobile-show="' . $cozy_responsive_show['mobileShow'] . '" data-mobile-viewport-width="' . $cozy_responsive_show['mobileViewport'] . '"';

		if ( 'core/heading' === $block['blockName'] ) {
			$level = $block['attrs']['level'] ?? '2';

			preg_match( '/<h' . $level . ' class="([^"]+)"/', $block_content, $matches );
			$existing_class = isset( $matches[1] ) ? $matches[1] : '';

			$updated_class = trim( $existing_class . ' cozy-responsive-show__initialized' );

			$block_content = preg_replace( '/<h' . $level . ' class="' . preg_quote( $existing_class ) . '.*?"/', '<h' . $level . ' class="' . esc_attr( $updated_class ) . '"' . $cozy_responsive_string, $block_content );

		} elseif ( 'core/paragraph' === $block['blockName'] ) {
			preg_match( '/<p(?:\s+class="([^"]+)")?/', $block_content, $matches );
			$existing_class = isset( $matches[1] ) ? $matches[1] : '';

			$updated_class = trim( $existing_class . ' cozy-responsive-show__initialized' );

			if ( $existing_class ) {
				$block_content = preg_replace( '/<p(\s+class="' . preg_quote( $existing_class ) . '.*?)?"/', '<p class="' . esc_attr( $updated_class ) . '"' . $cozy_responsive_string, $block_content );
			} else {
				$block_content = preg_replace( '/<p/', '<p class="' . esc_attr( $updated_class ) . '"' . $cozy_responsive_string, $block_content, 1 );
			}
		} else {
			$block_content = preg_replace(
				'/<div class="' . preg_quote( $existing_class ) . '.*?"/',
				'<div class="' . esc_attr( $updated_class ) . '"' . $cozy_responsive_string,
				$block_content
			);
		}
	}

	return $block_content;
}

/**
 * Adds data attributes for the hover effect in the block.
 *
 * @param string $block_content The content serialized block content.
 * @param array  $block The parsed block.
 */
function append_cozy_hover_effect_data_attributes( &$block_content, &$block ) {
	$enabled_blocks = array(
		'core/buttons',
		'core/button',
		'core/group',
		'core/columns',
		'core/column',
		'core/image',
	);

	if ( ! isset( $block['attrs']['cozyHoverEffect'] ) && ! in_array( $block['blockName'], $enabled_blocks, true ) ) {
		return $block_content;
	}

	if ( isset( $block['attrs']['cozyHoverEffect'] ) && in_array( $block['blockName'], $enabled_blocks, true ) ) {
		$cozy_hover_effect = $block['attrs']['cozyHoverEffect'];

		// Extract the existing class attribute
		preg_match( '/<div class="([^"]+)"/', $block_content, $matches );
		$existing_class = isset( $matches[1] ) ? $matches[1] : '';

		preg_match(
			'/<div[^>]*\bclass=".*?\b' . preg_quote( $existing_class, '/' ) . '\b.*?"[^>]*\sstyle="([^"]*)"/',
			$block_content,
			$matches
		);
		$existing_styles = isset( $matches[1] ) ? $matches[1] : '';

		// Append the custom class and inline styles to the class attribute
		$updated_class = trim( $existing_class . ' cozy-hover-effect__initialized' );

		if ( filter_var( $cozy_hover_effect['boxShadow']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
			$updated_class .= ' cozy-hover-effect__has-default-box-shadow';
		}

		if ( filter_var( $cozy_hover_effect['boxShadowHover']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
			$updated_class .= ' cozy-hover-effect__has-hover-box-shadow';
		}

		$cozy_hover_string = ' style="';

		// Hover Transform.
		if ( isset( $cozy_hover_effect['transformEnabled'] ) && filter_var( $cozy_hover_effect['transformEnabled'], FILTER_VALIDATE_BOOLEAN ) ) {
			$cozy_hover_string .= '--cozyHoverTranslateX:' . esc_attr( $cozy_hover_effect['transform']['translateX'] ) . 'px; --cozyHoverTranslateY:' . esc_attr( $cozy_hover_effect['transform']['translateY'] ) . 'px; --cozyHoverRotate: ' . esc_attr( $cozy_hover_effect['transform']['rotate'] ) . 'deg; --cozyHoverScale: ' . esc_attr( $cozy_hover_effect['transform']['scale'] ) . ';';
		}

		$shadow_color = array(
			'default' => isset( $cozy_hover_effect['boxShadow']['color'] ) ? $cozy_hover_effect['boxShadow']['color'] : '',
			'hover'   => isset( $cozy_hover_effect['boxShadowHover']['color'] ) ? $cozy_hover_effect['boxShadowHover']['color'] : '',
		);
		// Default Box Shadow.
		if ( isset( $cozy_hover_effect['boxShadow']['enabled'] ) && filter_var( $cozy_hover_effect['boxShadow']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
			$cozy_hover_string .= '--cozyDefaultBoxShadow: ' . $cozy_hover_effect['boxShadow']['horizontal'] . 'px ' . $cozy_hover_effect['boxShadow']['vertical'] . 'px ' . $cozy_hover_effect['boxShadow']['blur'] . 'px ' . $cozy_hover_effect['boxShadow']['spread'] . 'px ' . $shadow_color['default'] . ' ' . $cozy_hover_effect['boxShadow']['position'] . ';';
		}
		// Hover Box Shadow.
		if ( isset( $cozy_hover_effect['boxShadowHover']['enabled'] ) && filter_var( $cozy_hover_effect['boxShadowHover']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
			$cozy_hover_string .= '--cozyHoverBoxShadow: ' . $cozy_hover_effect['boxShadowHover']['horizontal'] . 'px ' . $cozy_hover_effect['boxShadowHover']['vertical'] . 'px ' . $cozy_hover_effect['boxShadowHover']['blur'] . 'px ' . $cozy_hover_effect['boxShadowHover']['spread'] . 'px ' . $shadow_color['hover'] . ' ' . $cozy_hover_effect['boxShadowHover']['position'] . ';';
		}

		// Z Index attribute.
		if ( isset( $cozy_hover_effect['hasZIndex'] ) && filter_var( $cozy_hover_effect['hasZIndex'], FILTER_VALIDATE_BOOLEAN ) ) {
			$cozy_hover_string .= 'z-index:' . $cozy_hover_effect['zIndex'] . ';';
		}

		// Transform Default.
		if ( isset( $cozy_hover_effect['transformDefaultEnabled'] ) && filter_var( $cozy_hover_effect['transformDefaultEnabled'], FILTER_VALIDATE_BOOLEAN ) ) {
			$translate_x = isset( $cozy_hover_effect['transformDefault']['translateX'] ) ? 'translateX(' . esc_attr( $cozy_hover_effect['transformDefault']['translateX'] ) . 'px) ' : '';
			$translate_y = isset( $cozy_hover_effect['transformDefault']['translateY'] ) ? 'translateY(' . esc_attr( $cozy_hover_effect['transformDefault']['translateY'] ) . 'px) ' : '';
			$rotate      = isset( $cozy_hover_effect['transformDefault']['rotate'] ) ? 'rotate(' . esc_attr( $cozy_hover_effect['transformDefault']['rotate'] ) . 'deg) ' : '';
			$scale       = isset( $cozy_hover_effect['transformDefault']['scale'] ) ? 'scale(' . esc_attr( $cozy_hover_effect['transformDefault']['scale'] ) . ')' : '';

			if ( ! empty( $translate_x ) || ! empty( $translate_y ) || ! empty( $rotate ) || ! empty( $scale ) ) {
				$cozy_hover_string .= 'transform: ' . $translate_x . $translate_y . $rotate . $scale . ';';
			}
		}

		// Overflow.
		if ( isset( $cozy_hover_effect['hasOverflow'] ) && filter_var( $cozy_hover_effect['hasOverflow'], FILTER_VALIDATE_BOOLEAN ) ) {
			$updated_class .= ' cozy-hover-effect__overflow-' . $cozy_hover_effect['overflow'] . ' ';
		}

		if ( 'core/button' === $block['blockName'] ) {
			$cozy_hover_string .= '"';
		} else {
			$cozy_hover_string .= $existing_styles . '"';
		}

		if ( 'core/image' === $block['blockName'] ) {
			preg_match( '/<figure class="([^"]+)"/', $block_content, $matches );
			$existing_class = isset( $matches[1] ) ? $matches[1] : '';

			preg_match(
				'/<figure class=".*?\b' . preg_quote( $existing_class, '/' ) . '\b.*?"(?: style="([^"]*)")?/',
				$block_content,
				$matches
			);
			$existing_styles = isset( $matches[1] ) ? $matches[1] : '';

			$updated_class = trim( $existing_class . ' cozy-hover-effect__initialized' );

			if ( filter_var( $cozy_hover_effect['boxShadow']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
				$updated_class .= ' cozy-hover-effect__has-default-box-shadow';
			}

			if ( filter_var( $cozy_hover_effect['boxShadowHover']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
				$updated_class .= ' cozy-hover-effect__has-hover-box-shadow';
			}

			$cozy_hover_string = ' style="';

			// Hover Transform.
			if ( isset( $cozy_hover_effect['transformEnabled'] ) && filter_var( $cozy_hover_effect['transformEnabled'], FILTER_VALIDATE_BOOLEAN ) ) {
				$cozy_hover_string .= '--cozyHoverTranslateX:' . esc_attr( $cozy_hover_effect['transform']['translateX'] ) . 'px; --cozyHoverTranslateY:' . esc_attr( $cozy_hover_effect['transform']['translateY'] ) . 'px; --cozyHoverRotate: ' . esc_attr( $cozy_hover_effect['transform']['rotate'] ) . 'deg; --cozyHoverScale: ' . esc_attr( $cozy_hover_effect['transform']['scale'] ) . ';';
			}

			$shadow_color = array(
				'default' => isset( $cozy_hover_effect['boxShadow']['color'] ) ? $cozy_hover_effect['boxShadow']['color'] : '',
				'hover'   => isset( $cozy_hover_effect['boxShadowHover']['color'] ) ? $cozy_hover_effect['boxShadowHover']['color'] : '',
			);
			// Default Box Shadow.
			if ( isset( $cozy_hover_effect['boxShadow']['enabled'] ) && filter_var( $cozy_hover_effect['boxShadow']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
				$cozy_hover_string .= '--cozyDefaultBoxShadow: ' . $cozy_hover_effect['boxShadow']['horizontal'] . 'px ' . $cozy_hover_effect['boxShadow']['vertical'] . 'px ' . $cozy_hover_effect['boxShadow']['blur'] . 'px ' . $cozy_hover_effect['boxShadow']['spread'] . 'px ' . $shadow_color['default'] . ' ' . $cozy_hover_effect['boxShadow']['position'] . ';';
			}
			// Hover Box Shadow.
			if ( isset( $cozy_hover_effect['boxShadowHover']['enabled'] ) && filter_var( $cozy_hover_effect['boxShadowHover']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
				$cozy_hover_string .= '--cozyHoverBoxShadow: ' . $cozy_hover_effect['boxShadowHover']['horizontal'] . 'px ' . $cozy_hover_effect['boxShadowHover']['vertical'] . 'px ' . $cozy_hover_effect['boxShadowHover']['blur'] . 'px ' . $cozy_hover_effect['boxShadowHover']['spread'] . 'px ' . $shadow_color['hover'] . ' ' . $cozy_hover_effect['boxShadowHover']['position'] . ';';
			}

			// Z Index attribute.
			if ( isset( $cozy_hover_effect['hasZIndex'] ) && filter_var( $cozy_hover_effect['hasZIndex'], FILTER_VALIDATE_BOOLEAN ) ) {
				$cozy_hover_string .= 'z-index:' . $cozy_hover_effect['zIndex'] . ';';
			}

			// Transform Default.
			if ( isset( $cozy_hover_effect['transformDefaultEnabled'] ) && filter_var( $cozy_hover_effect['transformDefaultEnabled'], FILTER_VALIDATE_BOOLEAN ) ) {
				$translate_x = isset( $cozy_hover_effect['transformDefault']['translateX'] ) ? 'translateX(' . esc_attr( $cozy_hover_effect['transformDefault']['translateX'] ) . 'px) ' : '';
				$translate_y = isset( $cozy_hover_effect['transformDefault']['translateY'] ) ? 'translateY(' . esc_attr( $cozy_hover_effect['transformDefault']['translateY'] ) . 'px) ' : '';
				$rotate      = isset( $cozy_hover_effect['transformDefault']['rotate'] ) ? 'rotate(' . esc_attr( $cozy_hover_effect['transformDefault']['rotate'] ) . 'deg) ' : '';
				$scale       = isset( $cozy_hover_effect['transformDefault']['scale'] ) ? 'scale(' . esc_attr( $cozy_hover_effect['transformDefault']['scale'] ) . ')' : '';

				if ( ! empty( $translate_x ) || ! empty( $translate_y ) || ! empty( $rotate ) || ! empty( $scale ) ) {
					$cozy_hover_string .= 'transform: ' . $translate_x . $translate_y . $rotate . $scale . ';';
				}
			}

			// Overflow.
			if ( isset( $cozy_hover_effect['hasOverflow'] ) && filter_var( $cozy_hover_effect['hasOverflow'], FILTER_VALIDATE_BOOLEAN ) ) {
				// $cozy_hover_string .= 'overflow:' . $cozy_hover_effect['overflow'] . ';';
				$updated_class .= ' cozy-hover-effect__overflow-' . $cozy_hover_effect['overflow'] . ' ';
			}

			$cozy_hover_string .= $existing_styles . '"';

			// $block_content = preg_replace( '/<figure class="' . preg_quote( $existing_class ) . '.*?"/', '<figure class="' . esc_attr( $updated_class ) . '"' . $cozy_hover_string, $block_content );

			$block_content = preg_replace(
				'/<figure class=".*?\b' . preg_quote( $existing_class, '/' ) . '\b.*?"/',
				'<figure class="' . esc_attr( $updated_class ) . '"' . $cozy_hover_string,
				$block_content,
				1
			);

		} else {
			// $cozy_hover_string .= $existing_styles . '"';

			$block_content = preg_replace(
				'/<div class=".*?\b' . preg_quote( $existing_class, '/' ) . '\b.*?"/',
				'<div class="' . esc_attr( $updated_class ) . '"' . $cozy_hover_string,
				$block_content,
				1
			);
		}
	}
}

function append_cozy_custom_font_data_attributes( &$block_content, &$block ) {
	$enabled_blocks = array(
		'core/buttons',
		'core/button',
		'core/group',
		'core/columns',
		'core/column',
		'core/heading',
		'core/paragraph',
		'cozy-block/mega-menu',
	);

	if ( ! isset( $block['attrs']['cozyCustomFont'] ) && ! in_array( $block['blockName'], $enabled_blocks, true ) ) {
		return $block_content;
	}

	if ( isset( $block['attrs']['cozyCustomFont'] ) && in_array( $block['blockName'], $enabled_blocks, true ) ) {

		$custom_font = $block['attrs']['cozyCustomFont'];

		if ( ! empty( $custom_font ) ) {
			preg_match( '/<div(?:\s+class="([^"]+)")?/', $block_content, $matches );
			$existing_class = isset( $matches[1] ) ? $matches[1] : '';

			preg_match( '/<div\s[^>]*\bstyle="(.*?)"/', $block_content, $matches );
			$existing_styles = isset( $matches[1] ) ? $matches[1] : '';

			// Append your styles to the existing styles
			$new_styles      = 'font-family: ' . $custom_font . ' !important;';
			$appended_styles = $existing_styles ? $existing_styles . '; ' . $new_styles : $new_styles;

			if ( 'core/heading' === $block['blockName'] ) {
				$level = $block['attrs']['level'] ?? '2';

				preg_match( '/<h' . $level . ' class="([^"]+)"/', $block_content, $matches );
				$existing_class = isset( $matches[1] ) ? $matches[1] : '';

				preg_match( '/<h' . $level . '\s[^>]*\bstyle="(.*?)"/', $block_content, $matches );
				$existing_styles = isset( $matches[1] ) ? $matches[1] : '';
				$appended_styles = $existing_styles ? $existing_styles . '; ' . $new_styles : $new_styles;

				$block_content = preg_replace( '/<h' . $level . ' class="' . preg_quote( $existing_class ) . '.*?"/', '<h' . $level . ' class="' . esc_attr( $existing_class ) . '" style="' . $appended_styles . '"', $block_content );

			} elseif ( 'core/paragraph' === $block['blockName'] ) {
				preg_match( '/<p(?:\s+class="([^"]+)")?/', $block_content, $matches );
				$existing_class = isset( $matches[1] ) ? $matches[1] : '';

				preg_match( '/<p\s[^>]*\bstyle="(.*?)"/', $block_content, $matches );
				$existing_styles = isset( $matches[1] ) ? $matches[1] : '';

				$appended_styles = $existing_styles ? $existing_styles . '; ' . $new_styles : $new_styles;

				if ( $existing_class ) {
					$block_content = preg_replace( '/<p class="' . preg_quote( $existing_class ) . '.*?"/', '<p class="' . esc_attr( $existing_class ) . '" style="' . $appended_styles . '"', $block_content );

				} else {
					$block_content = preg_replace( '/<p/', '<p style="' . $appended_styles . '"', $block_content, 1 );
				}
			} else {
				// Replace the existing style attribute with the appended styles.
				$block_content = preg_replace( '/<div class="' . preg_quote( $existing_class ) . '.*?"/', '<div class="' . esc_attr( $existing_class ) . '" style="' . $appended_styles . '"', $block_content );
			}

			$block_content = '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $custom_font . ':wght@400;500;600;700;800" />' . $block_content;

		}
	}
}

/**
 * Adds data attributes for the animation in the block.
 *
 * @param string $block_content The content serialized block content.
 * @param array  $block The parsed block.
 */
function apply_cozy_block_animation_responsive_hover_filter( $block_content, $block ) {
	$enabled_blocks = array(
		'core/buttons',
		'core/button',
		'core/cover',
		'core/group',
		'core/heading',
		'core/columns',
		'core/column',
		'core/image',
		'core/paragraph',
		'cozy-block/slider',
		'cozy-block/post-slider',
		'cozy-block/product-slider',
		'cozy-block/mega-menu',
	);

	if ( ! isset( $block['attrs']['cozyAnimation'] ) && ! in_array( $block['blockName'], $enabled_blocks, true ) ) {
		return $block_content;
	}

	if ( isset( $block['attrs']['cozyAnimation'] ) && in_array( $block['blockName'], $enabled_blocks, true ) ) {
		if ( 'none' === $block['attrs']['cozyAnimation'] ) {
			return $block_content;
		}

		// Extract the existing class attribute
		preg_match( '/<div class="([^"]+)"/', $block_content, $matches );
		$existing_class = isset( $matches[1] ) ? $matches[1] : '';

		$cozy_animation = $block['attrs']['cozyAnimation'];

		// Append the custom class and inline styles to the class attribute
		$updated_class = trim( $existing_class . ' cozy-animation__initialized' );

		$aos_string = '';
		if ( 'none' !== $cozy_animation['type'] ) {
			$aos_string = ' data-aos="' . esc_attr( $cozy_animation['type'] ) . '" data-aos-easing="' . esc_attr( $cozy_animation['easingFunction'] ) . '" data-aos-anchor-placement="' . esc_attr( $cozy_animation['anchorPlacement'] ?? '' ) . '" data-aos-duration="' . esc_attr( $cozy_animation['duration'] ?? '600' ) . '"';
		}

		if ( 'core/heading' === $block['blockName'] ) {

			$level = $block['attrs']['level'] ?? '2';

			preg_match( '/<h' . $level . ' class="([^"]+)"/', $block_content, $matches );
			$existing_class = isset( $matches[1] ) ? $matches[1] : '';

			$updated_class = trim( $existing_class . ' cozy-animation__initialized' );

			$block_content = preg_replace( '/<h' . $level . ' class="' . preg_quote( $existing_class ) . '.*?"/', '<h' . $level . ' class="' . esc_attr( $updated_class ) . '"' . $aos_string, $block_content );
		} elseif ( 'core/paragraph' === $block['blockName'] ) {
			preg_match( '/<p(?:\s+class="([^"]+)")?/', $block_content, $matches );
			$existing_class = isset( $matches[1] ) ? $matches[1] : '';

			$updated_class = trim( $existing_class . ' cozy-animation__initialized' );

			if ( $existing_class ) {
				$block_content = preg_replace( '/<p(\s+class="' . preg_quote( $existing_class ) . '.*?)?"/', '<p class="' . esc_attr( $updated_class ) . '"' . $aos_string, $block_content );
			} else {
				$block_content = preg_replace( '/<p/', '<p class="' . esc_attr( $updated_class ) . '"' . $aos_string, $block_content, 1 );
			}
		} elseif ( 'core/image' === $block['blockName'] ) {
			preg_match( '/<figure class="([^"]+)"/', $block_content, $matches );
			$existing_class = isset( $matches[1] ) ? $matches[1] : '';

			$updated_class = trim( $existing_class . ' cozy-animation__initialized' );

			$block_content = preg_replace( '/<figure class="' . preg_quote( $existing_class ) . '.*?"/', '<figure class="' . esc_attr( $updated_class ) . '"' . $aos_string, $block_content );

		} else {
			// $block_content = preg_replace(
			// '/<div class="' . preg_quote( $existing_class ) . '.*?"/',
			// '<div class="' . esc_attr( $updated_class ) . '"' . $aos_string,
			// $block_content
			// );

			$found         = false;
			$block_content = preg_replace_callback(
				'/<div class="' . preg_quote( $existing_class, '/' ) . '.*?"/',
				function ( $matches ) use ( $updated_class, $aos_string, &$found ) {
					if ( ! $found ) {
						$found = true;
						return '<div class="' . esc_attr( $updated_class ) . '"' . $aos_string;
					}
					return $matches[0]; // Return the original match for subsequent occurrences.
				},
				$block_content
			);
		}
	}

	append_cozy_responsive_data_attributes( $block_content, $block );

	append_cozy_hover_effect_data_attributes( $block_content, $block );

	append_cozy_custom_font_data_attributes( $block_content, $block );

	return $block_content;
}
add_filter( 'render_block', 'apply_cozy_block_animation_responsive_hover_filter', 10, 2 );

/**
 * Sets the style variables for the button hover styles.
 *
 * @param string $block_content The content serialized block content.
 * @param array  $block The parsed block.
 */
function add_cozy_hover_color_styles( $block_content, $block ) {
	// Check if it's a core/button block
	if ( 'core/button' === $block['blockName'] ) {
		if ( ! isset( $block['attrs']['cozyHoverStyles'] ) && ! isset( $block['attrs']['cozyHoverColor'] ) && ! isset( $block['attrs']['icon'] ) ) {
			return $block_content;
		}
		// print_r( $block['attrs'] );

		// Extract the existing class attribute
		// preg_match( '/<div class="([^"]+)"/', $block_content, $matches );
		preg_match( '/<div\s[^>]*\bclass="(.*?)"/', $block_content, $matches );
		$existing_class = isset( $matches[1] ) ? $matches[1] : '';

		// Extract the custom styles from block attributes
		$custom_styles = array(
			'--cozyButtonBgColorHover' => 'currentColor',
			'--cozyButtonColorHover'   => 'currentColor',
			'--cozyButtonBorderHover'  => 'currentColor',
		);

		if ( isset( $block['attrs']['cozyHoverStyles'] ) ) {
			$cozyHoverStyles = $block['attrs']['cozyHoverStyles'];

			$custom_styles = array(
				'--cozyButtonBgColorHover' => isset( $cozyHoverStyles['bgColor'] ) ? strtolower( $cozyHoverStyles['bgColor'] ) : 'currentColor',
				'--cozyButtonColorHover'   => isset( $cozyHoverStyles['color'] ) ? strtolower( $cozyHoverStyles['color'] ) : 'currentColor',
				'--cozyButtonBorderHover'  => isset( $cozyHoverStyles['borderColor'] ) ? strtolower( $cozyHoverStyles['borderColor'] ) : 'currentColor',
			);
		}

		// Build the inline style string
		$inline_styles = '';
		foreach ( $custom_styles as $style => $value ) {
			$inline_styles .= "$style: $value; ";
		}

		// Append the custom class and inline styles to the class attribute
		$updated_class = trim( $existing_class . ' cozy-button-hover-styles' );

		preg_match( '/<div\s[^>]*\bstyle="(.*?)"/', $block_content, $matches );
		$existing_styles = isset( $matches[1] ) ? $matches[1] : '';
		$appended_styles = $existing_styles . '; ' . $inline_styles;

		// Icon Styles
		if ( isset( $block['attrs']['icon']['enabled'] ) && filter_var( $block['attrs']['icon']['enabled'], FILTER_VALIDATE_BOOLEAN ) ) {
			$icon_attr = $block['attrs']['icon'];

			$updated_class .= ' cozy-button__has-icon icon-position__' . $icon_attr['position'];

			$size     = isset( $icon_attr['size'] ) ? $icon_attr['size'] : '16'; // e.g. from your attributes
			$view_box = isset( $icon_attr['viewBox']['vx'], $icon_attr['viewBox']['vy'], $icon_attr['viewBox']['vw'], $icon_attr['viewBox']['vh'] ) ? $icon_attr['viewBox']['vx'] . ' ' . $icon_attr['viewBox']['vy'] . ' ' . $icon_attr['viewBox']['vw'] . ' ' . $icon_attr['viewBox']['vh'] : '';
			$path     = isset( $icon_attr['path'] ) ? $icon_attr['path'] : ''; // example path

			$svg      = '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="' . $view_box . '"><path fill="currentColor" d="' . $path . '"/></svg>';
			$data_uri = "url('data:image/svg+xml;utf8," . rawurlencode( $svg ) . "')";

			$custom_styles = array(
				'--cozy--icon--box-width'      => isset( $icon_attr['boxWidth'] ) ? $icon_attr['boxWidth'] : '',
				'--cozy--icon--box-height'     => isset( $icon_attr['boxHeight'] ) ? $icon_attr['boxHeight'] : '',
				'--cozy--icon--size'           => isset( $icon_attr['size'] ) ? $icon_attr['size'] : '',
				'--cozy--icon--rotate'         => isset( $icon_attr['rotate'] ) ? $icon_attr['rotate'] . 'deg' : '',
				// '--cozy--icon--padding--top'    => isset( $icon_attr['padding']['top'] ) ? $icon_attr['padding']['top'] : '',
				// '--cozy--icon--padding--right'  => isset( $icon_attr['padding']['right'] ) ? $icon_attr['padding']['right'] : '',
				// '--cozy--icon--padding--bottom' => isset( $icon_attr['padding']['bottom'] ) ? $icon_attr['padding']['bottom'] : '',
				// '--cozy--icon--padding--left'   => isset( $icon_attr['padding']['left'] ) ? $icon_attr['padding']['left'] : '',
				'--cozy--icon--margin--top'    => isset( $icon_attr['margin']['top'] ) ? $icon_attr['margin']['top'] : '',
				'--cozy--icon--margin--bottom' => isset( $icon_attr['margin']['bottom'] ) ? $icon_attr['margin']['bottom'] : '',
				// '--cozy--icon--border--width'   => isset( $icon_attr['border']['width'] ) ? $icon_attr['border']['width'] : '',
				// '--cozy--icon--border--style'   => isset( $icon_attr['border']['style'] ) ? $icon_attr['border']['style'] : '',
				// '--cozy--icon--border--color'   => isset( $icon_attr['border']['color'] ) ? $icon_attr['border']['color'] : '',
				// '--cozy--icon--radius'          => isset( $icon_attr['radius'] ) ? $icon_attr['radius'] : '',
				'--cozy--icon--gap'            => isset( $icon_attr['gap'] ) ? $icon_attr['gap'] : '',
				'--cozy--icon--color'          => isset( $icon_attr['color']['text'] ) ? $icon_attr['color']['text'] : 'currentColor',
				'--cozy--icon--color-hover'    => isset( $icon_attr['color']['textHover'] ) ? $icon_attr['color']['textHover'] : 'currentColor',
				'--cozy--icon--svg'            => $data_uri,
			);

			// Build the inline style string.
			foreach ( $custom_styles as $style => $value ) {
				$inline_styles .= "$style: $value; ";
			}
			// print_r( $inline_styles );

			$appended_styles = $existing_styles . $inline_styles;
		}

		$block_content = preg_replace( '/<div class="' . preg_quote( $existing_class ) . '.*?"/', '<div class="' . esc_attr( $updated_class ) . '" style="' . $appended_styles . '"', $block_content );
	}

	if ( 'core/navigation' === $block['blockName'] ) {
		// Extract the custom styles from block attributes.
		$custom_styles = array(
			'--cozyMenuPadding'      => 0,
			'--cozyHoverMenuText'    => '',
			'--cozyHoverMenuBg'      => '',
			'--cozyHoverSubmenuText' => '',
			'--cozyHoverSubmenuBg'   => '',
		);

		if ( isset( $block['attrs']['cozyMenuPadding'] ) || isset( $block['attrs']['cozyHoverColor'] ) ) {
			$padding          = $block['attrs']['cozyMenuPadding'] ?? array();
			$cozy_hover_color = $block['attrs']['cozyHoverColor'] ?? array();

			$custom_styles = array(
				'--cozyMenuPadding'      => ( $padding['top'] ?? 0 ) . 'px ' . ( $padding['right'] ?? 0 ) . 'px ' . ( $padding['bottom'] ?? 0 ) . 'px ' . ( $padding['left'] ?? 0 ) . 'px',
				'--cozyHoverMenuText'    => strtolower( $cozy_hover_color['menuText'] ?? '' ),
				'--cozyHoverMenuBg'      => strtolower( $cozy_hover_color['menuBg'] ?? '' ),
				'--cozyHoverSubmenuText' => strtolower( $cozy_hover_color['submenuText'] ?? '' ),
				'--cozyHoverSubmenuBg'   => strtolower( $cozy_hover_color['submenuBg'] ?? '' ),
			);
		}

		// Build the inline style string.
		$inline_styles = '';
		foreach ( $custom_styles as $style => $value ) {
			$inline_styles .= "$style: $value; ";
		}

		preg_match( '/<ul[^>]*?\s+class="([^"]+)"/', $block_content, $class_matches );
		$existing_class_attribute = $class_matches[1] ?? '';

		$updated_class = trim( $existing_class_attribute ) . ' cozy-nav-hover-color';

		preg_match( '/<ul[^>]*?\s+style="([^"]*)"/', $block_content, $style_matches );
		$existing_style_attribute = $style_matches[1] ?? '';

		$block_content = preg_replace(
			// '/<ul class=".*?\b' . preg_quote( $existing_class_attribute, '/' ) . '\b.*?"/',
			'/<ul[^>]*?\s+class="([^"]+)"/',
			'<ul class="' . esc_attr( $updated_class ) . '" style="' . esc_attr( $existing_style_attribute . $inline_styles ) . '"',
			$block_content,
			1
		);

	}

	return $block_content;
}
add_filter( 'render_block', 'add_cozy_hover_color_styles', 10, 2 );

function cozy_render_TRBL( $type, $attributes ) {
	$sides = array( 'top', 'right', 'bottom', 'left' );

	if ( ! function_exists( 'cozy_addons_generate_property' ) ) {
		/**
		 * Helper function to generate CSS properties conditionally.
		 *
		 * @param string $prop       The CSS property to generate (e.g., 'padding', 'border').
		 * @param string $side       The side of the element to apply the property (e.g., 'top', 'right', 'bottom', 'left').
		 * @param array  $attributes An associative array of style attributes for the element.
		 *                           Contains the values for the corresponding CSS property for each side.
		 *
		 * @return string            The generated CSS rule for the specified property and side, or an empty string if the attribute is not set.
		 */
		function cozy_addons_generate_property( $prop, $side, $attributes ) {
			if ( ! isset( $attributes[ $side ] ) ) {
				return '';
			}

			$attr_side = esc_attr( $attributes[ $side ] );
			return ! empty( $attributes[ $side ] ) ? "{$prop}-{$side}: {$attr_side};" : '';
		}
	}

	switch ( $type ) {
		case 'border':
			// Check if any global border property exists.
			if ( isset( $attributes['width'] ) || isset( $attributes['style'] ) || isset( $attributes['color'] ) ) {
				$width = isset( $attributes['width'] ) ? esc_attr( $attributes['width'] ) : '';
				$style = isset( $attributes['style'] ) ? esc_attr( $attributes['style'] ) : '';
				$color = isset( $attributes['color'] ) ? esc_attr( $attributes['color'] ) : '';
				return "border-width:{$width};border-style: {$style};border-color: {$color};";
			}

			// Handle individual borders for each side.
			$css = '';
			foreach ( $sides as $side ) {
				$border_value =
				( ! empty( $attributes[ $side ]['width'] ) ? "{$attributes[$side]['width']} " : '' ) .
				( ! empty( $attributes[ $side ]['style'] ) ? "{$attributes[$side]['style']} " : '' ) .
				( ! empty( $attributes[ $side ]['color'] ) ? "{$attributes[$side]['color']}" : '' );

				if ( ! empty( $border_value ) ) {
					$css .= "border-{$side}: {$border_value};\n";
				}
			}
			return $css;

		case 'outline':
			// Check if any global border property exists.

			if ( isset( $attributes['width'] ) || isset( $attributes['style'] ) || isset( $attributes['color'] ) ) {
				$width = isset( $attributes['width'] ) ? esc_attr( $attributes['width'] ) : '';
				$style = isset( $attributes['style'] ) ? esc_attr( $attributes['style'] ) : '';
				$color = isset( $attributes['color'] ) ? esc_attr( $attributes['color'] ) : '';
				return "outline:{$width} {$style} {$color};";
			}

			break;

		case 'border-radius':
			// Handle individual border radius for each side.
			$top    = isset( $attributes['top'] ) ? esc_attr( $attributes['top'] ) : '';
			$right  = isset( $attributes['right'] ) ? esc_attr( $attributes['right'] ) : '';
			$bottom = isset( $attributes['bottom'] ) ? esc_attr( $attributes['bottom'] ) : '';
			$left   = isset( $attributes['left'] ) ? esc_attr( $attributes['left'] ) : '';

			return ( ! empty( $attributes['top'] ) ? "border-top-left-radius: {$top};" : '' ) .
			( ! empty( $attributes['right'] ) ? "border-top-right-radius: {$right};" : '' ) .
			( ! empty( $attributes['bottom'] ) ? "border-bottom-right-radius: {$bottom};" : '' ) .
			( ! empty( $attributes['left'] ) ? "border-bottom-left-radius: {$left};" : '' );

		case 'padding':
			// Handle padding for each side
			$css = '';
			foreach ( $sides as $side ) {
				$css .= cozy_addons_generate_property( 'padding', $side, $attributes ) . "\n";
			}
			return $css;

		case 'margin':
			// Handle padding for each side
			$css = '';
			foreach ( $sides as $side ) {
				$css .= cozy_addons_generate_property( 'margin', $side, $attributes ) . "\n";
			}
			return $css;

		default:
			return '';
	}
}
