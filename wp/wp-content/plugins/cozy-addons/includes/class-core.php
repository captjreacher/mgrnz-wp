<?php
namespace CozyAddons;

/**
 * Loads the core functionality for the Cozy Addons plugin.
 *
 * This singleton class is responsible for bootstrapping core logic,
 * helpers, and shared utilities of the plugin.
 *
 * @package CozyAddons
 */
class Core {
	/**
	 * Singleton instance of the class.
	 *
	 * @var Core|null
	 */
	private static $instance = null;

	/**
	 * Absolute path to the core directory.
	 *
	 * @var string
	 */
	private static $dir = COZY_ADDONS_PLUGIN_DIR . 'core/';

	/**
	 * URL to the core directory.
	 *
	 * @var string
	 */
	private static $url = COZY_ADDONS_PLUGIN_URL . 'core/';

	/**
	 * Returns the singleton instance of the Core class.
	 *
	 * @return Core The singleton instance.
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
	 * Private to enforce the singleton pattern.
	 * Initialization of core components can be added here.
	 *
	 * @access private
	 */
	private function __construct() {
		require_once self::$dir . 'cpt/cpt-init.php';

		// Core initialization logic (e.g., helpers, utilities) goes here.
		$this->register_block_templates();

		$this->register_plugin_api();

		$this->add_custom_block_filters();
	}

	/**
	 * Registers custom block templates for the plugin.
	 *
	 * Loads the content for the "Single Portfolio Gallery" template and registers it
	 * with a specific post type using `register_block_template()`.
	 */
	private function register_block_templates() {
		$content = \CozyAddons\Helpers\Utils::get_cpt_template( 'single-ca-portfolio-gallery' );

		register_block_template(
			'cozy-addons//single-ca_portfolio_gallery',
			array(
				'title'       => 'Single Portfolio Gallery',
				'description' => 'Displays single portfolio galery.',
				'content'     => $content,
				'post_types'  => array( 'ca_portfolio_gallery' ),
			)
		);
	}

	/**
	 * Registers plugin-specific REST API classes and routes.
	 *
	 * Includes API class files and hooks into the `rest_api_init` action to register routes.
	 */
	private function register_plugin_api() {
		require_once self::$dir . 'api/class-block.php';
		require_once self::$dir . 'api/class-cf7.php';
		require_once self::$dir . 'api/class-woo.php';

		add_action( 'rest_api_init', array( $this, 'register_api_routes' ) );
	}

	/**
	 * Initializes and registers all REST API endpoints for the plugin.
	 *
	 * Instantiates the Block, CF7, and Woo API classes to ensure their routes are available.
	 */
	public function register_api_routes() {
		\Core\Api\Block::get_instance();
		\Core\Api\CF7::get_instance();

		if ( is_woocommerce_active() ) {
			\Core\Api\Woo::get_instance();
		}
	}

	/**
	 * Registers custom filters for specific block rendering behavior.
	 *
	 * This method is typically used to hook into WordPress filters (like `pre_render_block`)
	 * to modify the output of specific custom blocks.
	 *
	 * @return void
	 */
	private function add_custom_block_filters() {
		require_once self::$dir . 'filters/class-query-loop.php';

		\Core\Filters\QueryLoop::get_instance();
	}
}
