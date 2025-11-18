<?php
namespace Core\Api;

use WP_Error;
use WP_Query;
use WP_REST_Request;

class Woo {
	/**
	 * Holds the singleton instance of the Block class.
	 *
	 * @var self|null
	 */
	private static $instance = null;

	/**
	 * Retrieves the singleton instance of the class.
	 *
	 * Ensures that only one instance of the class is created and reused (Singleton pattern).
	 *
	 * @return self The single instance of the class.
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
	 * Initializes the class by registering REST API routes.
	 * Declared private to prevent direct instantiation (Singleton pattern).
	 */
	private function __construct() {
		$this->register_routes();
	}

	/**
	 * Registers REST API routes for the class.
	 *
	 * This method defines and registers all relevant REST API endpoints
	 * handled by the class. It should be called during the REST API
	 * initialization phase (e.g., via the `rest_api_init` action hook).
	 *
	 * @return void
	 */
	public function register_routes() {
		try {
			register_rest_route(
				'cozy-block/v1',
				'/product-categories',
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_product_categories' ),
					'permission_callback' => '__return_true',
				)
			);
		} catch ( \Exception $e ) {
			// error_log( 'Error registering route: ' . $e->getMessage() );
		}

		try {
			register_rest_route(
				'cozy-block/v1',
				'/products/(?P<term_id>\d+)',
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_product_by_category' ),
					'permission_callback' => '__return_true',
				)
			);
		} catch ( \Exception $e ) {
			// error_log( 'Error registering route: ' . $e->getMessage() );
		}

		try {
			register_rest_route(
				'cozy-block/v1',
				'/products',
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_woo_products' ),
					'permission_callback' => '__return_true',
				)
			);
		} catch ( \Exception $e ) {
			// error_log( 'Error registering route: ' . $e->getMessage() );
		}
	}

	/**
	 * Retrieves product categories via REST API.
	 *
	 * This method handles a REST API request and returns a list of WooCommerce
	 * product categories. It may support filtering, pagination, or specific fields
	 * depending on the request parameters.
	 *
	 * @param \WP_REST_Request $request The REST API request object containing optional query parameters.
	 * @return \WP_REST_Response|array The response containing product category data.
	 */
	public function get_product_categories( \WP_REST_Request $request ) {
		$args = array(
			'taxonomy'   => 'product_cat',
			'hide_empty' => true,
			'number'     => $request->get_param( 'per_page' ) ?? 10,
			'order'      => 'DESC',
			'orderby'    => 'count',
		);

		$categories = get_terms( $args );

		$formatted_data = array();
		if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
			foreach ( $categories as $category ) {
				$term_id      = $category->term_id;
				$thumbnail_id = get_term_meta( $term_id, 'thumbnail_id', true );

				// get the image URL.
				$image_url = wp_get_attachment_url( $thumbnail_id );

				$category->image_url = $image_url;
				$formatted_data[]    = $category;
			}
		}
		return rest_ensure_response( $formatted_data );
	}

	/**
	 * Retrieves products belonging to a specific category via REST API.
	 *
	 * This method processes a REST API request and returns a list of WooCommerce
	 * products filtered by the provided category ID or slug.
	 *
	 * @param WP_REST_Request $request The REST API request object containing category parameters (e.g., ID or slug).
	 * @return WP_REST_Response|array The response containing the list of products in the specified category.
	 */
	public function get_product_by_category( WP_REST_Request $request ) {
		$term_id  = $request->get_param( 'term_id' );
		$per_page = $request->get_param( 'per_page' );

		if ( empty( $term_id ) ) {
			return new WP_Error( 'invalid_term_id', 'Invalid term ID', array( 'status' => 400 ) );
		}

		// Fetch products associated with the term ID (category ID).
		$args = array(
			'post_type'      => 'product', // Adjust to your custom post type if necessary.
			'tax_query'      => array(
				array(
					'taxonomy' => 'product_cat', // Adjust to your custom taxonomy if necessary.
					'field'    => 'term_id',
					'terms'    => $term_id,
				),
			),
			'posts_per_page' => $per_page,
			'order'          => 'DESC',
			'order_by'       => 'date',
		);

		$query = new WP_Query( $args );

		if ( ! $query->have_posts() ) {
			return new WP_Error( 'no_products', 'No products found', array( 'status' => 404 ) );
		}

		$products = array();

		while ( $query->have_posts() ) {
			$query->the_post();
			// Get the product object.
			$product = wc_get_product( get_the_ID() );

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

			// Check if the product is valid
			if ( $product ) {
				$products[] = array(
					'id'                  => get_the_ID(),
					'image_url'           => get_the_post_thumbnail_url( get_the_ID() ),
					'title'               => get_the_title(),
					'content'             => get_the_content(),
					'link'                => get_permalink(),
					'price'               => $price, // Get the product price.
					'discount_amt'        => $discount_amt,
					'discount_percentage' => $discount_percentage,
					'on_sale'             => $product->is_on_sale(),
					'rating'              => $product->get_average_rating(), // Get the product rating.
				);
			}
		}

		wp_reset_postdata();

		return rest_ensure_response( $products );
	}

	/**
	 * Retrieves a list of WooCommerce products via REST API.
	 *
	 * This method handles a REST request to fetch products, with optional support
	 * for filters such as category, tag, price range, pagination, and sorting.
	 *
	 * @param \WP_REST_Request $request The REST API request object containing query parameters for filtering products.
	 * @return \WP_REST_Response|array The response containing the list of WooCommerce products.
	 */
	public function get_woo_products( \WP_REST_Request $request ) {
		$type     = $request->get_param( 'type' ) ?? 'latest';
		$per_page = $request->get_param( 'per_page' ) ?? 3;

		$args = array();

		switch ( $type ) {
			case 'seller':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'meta_key'       => 'total_sales',
					'orderby'        => 'total_sales',
					'meta_query'     => array(
						'relation' => 'AND',
						array(
							'key'     => 'total_sales',
							'compare' => 'EXISTS',
						),
						array(
							'key'     => 'total_sales',
							'value'   => '0',
							'compare' => '>',
						),
					),
				);
				break;

			case 'rated':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'meta_key'       => '_wc_average_rating',
					'orderby'        => '_wc_average_rating',
					'meta_query'     => array(
						'relation' => 'AND',
						array(
							'key'     => '_wc_average_rating',
							'compare' => 'EXISTS',
						),
						array(
							'key'     => '_wc_average_rating',
							'value'   => '0',
							'compare' => '>',
						),
					),
				);
				break;

			case 'sale':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'orderby'        => 'date',
					'meta_query'     => array(
						array(
							'key'     => '_sale_price',
							'value'   => 0,
							'compare' => '>',
							'type'    => 'NUMERIC',
						),
					),
				);
				break;

			default:
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'orderby'        => 'date',
				);
		}

		$query = new WP_Query( $args );

		if ( ! $query->have_posts() ) {
			return rest_ensure_response( array() );
		}

		$products = array();

		while ( $query->have_posts() ) {
			$query->the_post();
			// Get the product object.
			$product = wc_get_product( get_the_ID() );

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

			// Get categories and their links.
			$categories         = get_the_terms(
				get_the_ID(),
				'product_cat'
			);
			$product_categories = array();
			foreach ( $categories as $category ) {
				$product_categories[] = array(
					'name'        => $category->name,
					'link'        => get_category_link( $category->term_id ),
					'count'       => $category->count,
					'description' => $category->description,
					'slug'        => $category->slug,
					'taxonomy'    => $category->taxonomy,
					'parent'      => $category->parent,
				);
			}

			// Check if the product is valid
			if ( $product ) {
				$products[] = array(
					'id'                  => get_the_ID(),
					'image_url'           => get_the_post_thumbnail_url( get_the_ID() ),
					'title'               => get_the_title(),
					'content'             => get_the_content(),
					'link'                => get_permalink(),
					'price'               => $price, // Get the product price.
					'discount_amt'        => $discount_amt,
					'discount_percentage' => $discount_percentage,
					'on_sale'             => $product->is_on_sale(),
					'rating'              => $product->get_average_rating(), // Get the product rating.
					'review_count'        => $product->get_review_count(),
					'categories'          => $product_categories,
				);
			}
		}

		wp_reset_postdata();

		return rest_ensure_response( $products );
	}
}
