<?php
namespace Core\Api;

use WP_REST_Request;

class CF7 {
	/**
	 * Holds the singleton instance of the Block class.
	 *
	 * @var self|null
	 */
	private static $instance = null;

	/**
	 * Retrieves the singleton instance of the Block class.
	 *
	 * Ensures that only one instance of the class is created and returned.
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
	 * Initializes the class by registering REST API routes.
	 * Declared private to enforce the Singleton pattern.
	 */
	private function __construct() {
		$this->register_routes();
	}

	/**
	 * Registers REST API routes for the Block class.
	 *
	 * This method defines and registers all REST endpoints related to block functionality.
	 * Should be called during the REST API initialization phase.
	 *
	 * @return void
	 */
	public function register_routes() {
		try {
			register_rest_route(
				'cozy-block/v1',
				'/cf7-shortcode-content',
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'cozy_addons_get_cf7_render' ),
					'permission_callback' => function () {
						return current_user_can( 'manage_options' );
					},
				)
			);

		} catch ( \Exception $e ) {
			// error_log( 'Error registering route: ' . $e->getMessage() );
		}
	}

	/**
	 * Renders a Contact Form 7 form via REST API.
	 *
	 * This method processes a REST request to retrieve the rendered HTML
	 * of a Contact Form 7 form based on the provided form ID or shortcode.
	 *
	 * @param WP_REST_Request $request The REST API request object containing parameters such as form ID or shortcode.
	 * @return WP_REST_Response|array The rendered Contact Form 7 form or an error response.
	 */
	public function cozy_addons_get_cf7_render( WP_REST_Request $request ) {
		$shortcode = $request->get_param( 'shortcode' ) ? sanitize_text_field( wp_unslash( $request->get_param( 'shortcode' ) ) ) : '';

		$render = '';

		if ( ! empty( $shortcode ) ) {
			$render = do_shortcode( $shortcode );
		}

		return $render;
	}
}
