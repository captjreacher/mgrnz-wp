<?php
namespace Core\Filters;

class QueryLoop {
	/**
	 * The singleton instance of the class.
	 *
	 * Used to ensure only one instance of the class is created (Singleton pattern).
	 *
	 * @var self|null
	 */
	private static $instance;

	/**
	 * Retrieves the singleton instance of the class.
	 *
	 * Ensures only one instance of the class is created and returned.
	 * Implements the Singleton design pattern.
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
	 * Hooks custom rendering logic into the `pre_render_block` filter
	 * for specific blocks like related posts and product carousels.
	 */
	public function __construct() {
		\add_filter( 'pre_render_block', array( $this, 'apply_cozy_related_posts' ), 10, 2 );

		\add_filter( 'pre_render_block', array( $this, 'apply_filters_to_cozy_product_carousel' ), 10, 2 );
	}

	private function get_all_post_ids() {
		$args = array(
			'post_type'      => 'post', // Change 'post' to your custom post type if needed
			'posts_per_page' => -1, // Fetch all posts
			'fields'         => 'ids', // Retrieve only post IDs
			'post_status'    => 'publish', // Fetch only published posts
		);

		$query = new \WP_Query( $args );

		if ( $query->have_posts() ) {
			$post_ids = $query->posts;
			return $post_ids;
		} else {
			// No posts found
			return array();
		}
	}

	/**
	 * Applies custom rendering logic for the Cozy Related Posts block.
	 *
	 * This method is hooked into the `pre_render_block` filter and is used to
	 * replace or modify the block output for related posts based on block attributes.
	 *
	 * @param string $pre_render    The default rendered content of the block.
	 * @param array  $parsed_block  The parsed block array containing block name, attributes, and inner blocks.
	 * @return string Modified or original block content.
	 */
	public function apply_cozy_related_posts( $pre_render, $parsed_block ) {
		if ( is_single() && isset( $parsed_block ) && 'core/query' === $parsed_block['blockName'] && isset( $parsed_block['attrs']['query']['parents'] ) && in_array( 'cozy-block/related-post', $parsed_block['attrs']['query']['parents'], true ) ) {
			$current_post_id = get_the_ID();

			$tags       = wp_get_post_tags( $current_post_id );
			$categories = wp_get_post_categories( $current_post_id );

			// Collect tag and category IDs.
			$tag_ids      = array();
			$category_ids = array();

			foreach ( $tags as $post_tag ) {
				$tag_ids[] = $post_tag->term_id;
			}

			foreach ( $categories as $category ) {
				$category_ids[] = $category;
			}

			\add_filter(
				'query_loop_block_query_vars',
				function ( $default_query ) use ( $parsed_block, $category_ids, $tag_ids, $current_post_id ) {
					$query_args = array();

					$query_args['post__not_in'] = array( intval( $current_post_id ) );

					$query_args['tax_query'] = array(
						'relation' => 'OR', // Allows matching either condition
						array(
							'taxonomy' => 'category',
							'field'    => 'term_id', // You can use 'slug' or 'term_id'
							'terms'    => $category_ids, // Replace with your category IDs
						),
						array(
							'taxonomy' => 'post_tag',
							'field'    => 'term_id',
							'terms'    => $tag_ids, // Replace with your tag IDs
						),
					);

					if ( is_single() && isset( $parsed_block ) && 'core/query' === $parsed_block['blockName'] && in_array( 'cozy-block/related-post', $parsed_block['attrs']['query']['parents'], true ) ) {
						// Return the merged query.
						$filtered_query = array_merge(
							// $parsed_block['attrs']['query'],
							$default_query,
							$query_args
						);

						return $filtered_query;
					}

					return $default_query;
				},
				10,
				2
			);

		}

		return $pre_render;
	}

	public function apply_filters_to_cozy_product_carousel( $pre_render, $parsed_block ) {
		if ( isset( $parsed_block ) && 'cozy-block/product-carousel' === $parsed_block['blockName'] ) {
			$parent_block_attrs = $parsed_block['attrs'];

			add_filter(
				'query_loop_block_query_vars',
				function ( $default_query, $block ) use ( $parent_block_attrs ) {
					$core_post_template = $block->parsed_block;

					$query_args = array();

					$query_args['order']   = 'DESC';
					$query_args['orderby'] = 'date';

					if ( array_key_exists( 'namespace', $parent_block_attrs ) && 'cozy-block/product-carousel' === $parent_block_attrs['namespace'] ) {
						$query_args['post_type'] = 'product';

						if ( ! array_key_exists( 'productGroup', $parent_block_attrs ) ) {
							// $query_args['tax_query']  = array();
							$query_args['tax_query']  = $default_query['tax_query'];
							$query_args['meta_key']   = '';
							$query_args['meta_query'] = array();
							$query_args['post__in']   = array();
						}

						if ( array_key_exists( 'productGroup', $parent_block_attrs ) && 'best_selling' === $parent_block_attrs['productGroup'] ) {
							$query_args['meta_key'] = 'total_sales';
							$query_args['orderby']  = 'meta_value_num';

							$query_args['meta_query'] = array(
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
							);

							// Setting other query parameters to default.
							$query_args['post__in'] = array();
							// $query_args['tax_query'] = array();
							$query_args['tax_query'] = $default_query['tax_query'];
						}

						if ( array_key_exists( 'productGroup', $parent_block_attrs ) && 'top_rated' === $parent_block_attrs['productGroup'] ) {
							$query_args['meta_key'] = '_wc_average_rating';
							$query_args['orderby']  = 'meta_value_num';
							// $query_args['meta_query'] = WC()->query->get_meta_query();
							$query_args['meta_query'] = array(
								'relation' => 'AND',
								array(
									'key'     => '_wc_average_rating',
									'compare' => 'EXISTS',
								),
								array(
									'key'     => '_wc_average_rating',
									'value'   => '0',
									'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
								),
							);

							// Setting other query parameters to default.
							$query_args['post__in'] = array();
							// $query_args['tax_query'] = array();
							$query_args['tax_query'] = $default_query['tax_query'];
						}

						if ( array_key_exists( 'productGroup', $parent_block_attrs ) && 'sale' === $parent_block_attrs['productGroup'] ) {
							$product_ids_on_sale    = wc_get_product_ids_on_sale();
							$query_args['post__in'] = $product_ids_on_sale;

							// Setting other query parameters to default.
							// $query_args['tax_query']  = array();
							$query_args['tax_query']  = $default_query['tax_query'];
							$query_args['meta_key']   = '';
							$query_args['meta_query'] = array();
						}

						if ( array_key_exists( 'productGroup', $parent_block_attrs ) && 'category' === $parent_block_attrs['productGroup'] ) {
							$query_args['tax_query'] = $default_query['tax_query'];
							$query_args['tax_query'] = array(
								array(
									'taxonomy' => 'product_cat',
									'field'    => 'term_id',
									'terms'    => $parent_block_attrs['productCategory'] ?? array(),
									'operator' => 'IN',
								),
							);

							// Setting other query parameters to default.
							$query_args['meta_key']   = '';
							$query_args['meta_query'] = array();
							$query_args['post__in']   = array();

						}

						if ( array_key_exists( 'className', $core_post_template['attrs'] ) && 'cozy-layout-grid swiper-wrapper cozy-product-carousel-template' === $core_post_template['attrs']['className'] && array_key_exists( 'namespace', $parent_block_attrs ) ) {
							return array_merge(
								$default_query,
								$query_args
							);
						} else {
							return $default_query;
						}
					}
				},
				10,
				2
			);
		}
		return $pre_render;
	}
}
