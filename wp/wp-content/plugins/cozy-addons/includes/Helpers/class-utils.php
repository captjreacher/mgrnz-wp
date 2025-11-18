<?php
namespace CozyAddons\Helpers;

/**
 * Utility helper functions for the Cozy Addons plugin.
 *
 * Provides general-purpose static methods used across the plugin.
 *
 * @since      1.0.0
 * @package    CozyAddons
 * @subpackage CozyAddons/Helpers
 */
class Utils {
	/**
	 * Holds the singleton instance of the class.
	 *
	 * @var self|null
	 */
	private static $instance = null;

	/**
	 * List of active block slugs registered in the plugin.
	 *
	 * @var array
	 */
	public $active_blocks = array();

	/**
	 * Returns the singleton instance of the class.
	 *
	 * Creates a new instance if one doesn't already exist.
	 * Ensures only one instance of this class is used throughout the plugin.
	 *
	 * @return self
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Class constructor.
	 *
	 * Initializes admin functionality by loading necessary admin files.
	 *
	 * @access private
	 */
	private function __construct() {
		$blocks              = require_once COZY_ADDONS_PLUGIN_DIR . 'blocks/blocks-manifest.php';
		$this->active_blocks = array_keys( $blocks );
	}

	/**
	 * Generates a trimmed excerpt from a given string.
	 *
	 * Strips shortcodes and HTML tags, splits the content by words,
	 * and truncates it to the specified word count.
	 * If the content exceeds the length, ellipsis (`...`) is appended.
	 *
	 * @since 1.0.0
	 *
	 * @param string $content The raw content string to generate an excerpt from.
	 * @param int    $length  Optional. Number of words to limit the excerpt to. Default 20.
	 *
	 * @return string The cleaned, shortened excerpt.
	 */
	public static function generate_excerpt( $content, $length = 20 ) {
		if ( empty( $content ) ) {
			return '';
		}

		// Strip HTML tags and shortcodes.
		$content = wp_strip_all_tags( strip_shortcodes( $content ) );
		// $content = do_blocks( $content );

		if ( null === $length ) {
			return $content;
		}

		// Split the content into words.
		$words = explode( ' ', $content );

		// Truncate to the specified length.
		if ( count( $words ) > $length ) {
			$words   = array_slice( $words, 0, $length );
			$content = implode( ' ', $words ) . '...';
		} else {
			$content = implode( ' ', $words );
		}

		return esc_html( $content );
	}

	/**
	 * Retrieves a list of approved product reviews with additional product and user data.
	 *
	 * @return array List of WP_Comment objects enriched with user avatar, product image,
	 *               product name, product rating, product URL, comment rating, and reviewer name.
	 */
	public static function get_woo_product_reviews() {
		if ( ! is_woocommerce_active() ) {
			return array();
		}

		$args = array(
			'status'      => 'approve',
			'post_status' => 'publish',
			'post_type'   => 'product',
		);

		$comments = get_comments( $args );

		foreach ( $comments as $comment ) {
			$avatar    = get_avatar_url( $comment->user_id );
			$user_data = get_userdata( $comment->user_id );

			$product_image_url = get_the_post_thumbnail_url( $comment->comment_post_ID );
			$product           = wc_get_product( $comment->comment_post_ID );

			$comment->user_avatar       = $avatar;
			$comment->product_image_url = $product_image_url;
			$comment->product_name      = esc_html( $product->get_title() );
			$comment->product_rating    = esc_html( $product->get_average_rating() );
			$comment->product_url       = $product->get_permalink();
			$comment->comment_rating    = get_comment_meta( $comment->comment_ID, 'rating', true );
			// $comment->product_rating_count = esc_html( $product->get_rating_count() );
			$comment->reviewer_name = isset( $user_data->display_name ) ? $user_data->display_name : '';
		}

		return $comments;
	}

	/**
	 * Retrieves the total number of approved product reviews.
	 *
	 * @global wpdb $wpdb WordPress database abstraction object.
	 * @return int Total number of approved product reviews.
	 */
	public static function get_woo_total_product_reviews() {
		global $wpdb;
		$total_reviews_count = $wpdb->get_var(
			"
				SELECT COUNT(*)
				FROM {$wpdb->comments}
				WHERE comment_type = 'review'
				AND comment_approved = 1
			"
		);
		return $total_reviews_count;
	}

	/**
	 * Retrieves the average rating value of all approved product reviews.
	 *
	 * @global wpdb $wpdb WordPress database abstraction object.
	 * @return float|null Average rating rounded to 2 decimal places, or null if no ratings are found.
	 */
	public static function get_woo_avg_product_reviews() {
		global $wpdb;
		$average_rating = $wpdb->get_var(
			"
				SELECT AVG(meta_value) as average_rating
				FROM {$wpdb->commentmeta} AS cm
				WHERE comment_id IN (
					SELECT comment_ID
					FROM {$wpdb->comments}
					WHERE comment_type = 'review' AND comment_approved = 1
				) AND meta_key = 'rating'
			"
		);

		if ( $average_rating ) {
			return round( $average_rating, 2 );
		}
	}

	/**
	 * Retrieves and returns the output of a custom post type template file.
	 *
	 * Checks if a template file exists in the plugin's `core/templates/` directory.
	 * If it does, the file is included and its output is captured and returned as a string.
	 *
	 * @param string $template The name of the template file (without the `.php` extension).
	 * @return string|null The buffered output of the template file, or null if the file doesn't exist.
	 */
	public static function get_cpt_template( $template ) {
		if ( file_exists( COZY_ADDONS_PLUGIN_DIR . 'core/templates/' . $template . '.php' ) ) {
			ob_start();

			include_once COZY_ADDONS_PLUGIN_DIR . 'core/templates/' . $template . '.php';

			return ob_get_clean();
		}
	}

	/**
	 * Retrieves a list of available Cozy Mega Menu templates.
	 *
	 * This static method returns an array of ca_mega_menu CPT
	 *
	 * @since 1.0.0
	 *
	 * @return array An associative array where keys are template slugs and values are their display labels.
	 */
	public static function get_cozy_mega_menu_templates(): array {
		$args = array(
			'post_type'      => 'ca_mega_menu', // Specify the custom post type.
			'posts_per_page' => -1, // Display all posts.
		);

		// Get the posts as an array.
		$posts_array = get_posts( $args );

		// Generate render template.
		foreach ( $posts_array as $template ) {
			// code...
			$parsed_blocks = parse_blocks( $template->post_content );

			$template_render = '';

			foreach ( $parsed_blocks as $block ) {
				$template_render .= render_block( $block );
			}

			$template->render = $template_render;
		}

		return $posts_array;
	}

	/**
	 * Retrieves a list of available Cozy Portfolio gallery templates.
	 *
	 * This static method returns an array of predefined gallery templates
	 * that can be used within the Cozy Portfolio block or plugin.
	 *
	 * @since 1.0.0
	 *
	 * @return array An associative array where keys are template slugs and values are their labels.
	 */
	public static function get_cozy_portfolio_gallery_templates(): array {
		$args = array(
			'post_type'      => 'ca_portfolio_gallery', // Specify the custom post type.
			'posts_per_page' => -1, // Display all posts.
		);

		// Get the posts as an array.
		$posts_array = get_posts( $args );

		// Generate render template.
		foreach ( $posts_array as $template ) {
			// code...

			$parsed_blocks = parse_blocks( $template->post_content );

			$template_render = '';

			foreach ( $parsed_blocks as $block ) {
				$template_render .= render_block( $block );
			}

			$template->render = $template_render;

			$template->featured_image       = get_the_post_thumbnail_url( $template->ID );
			$template->post_custom_category = get_the_terms( $template->ID, 'ca_portfolio_gallery_category' );

			// Retrieve custom post meta.
			$template->post_project_year = get_post_meta( $template->ID, 'ca_portfolio_gallery_project_year', true );
			$template->post_client       = get_post_meta( $template->ID, 'ca_portfolio_gallery_client', true );
			$template->post_skills       = get_post_meta( $template->ID, 'ca_portfolio_gallery_skills', true );
			$template->post_url          = get_post_meta( $template->ID, 'ca_portfolio_gallery_url', true );
		}

		return $posts_array;
	}
}
