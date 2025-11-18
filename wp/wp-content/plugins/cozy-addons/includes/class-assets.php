<?php
namespace CozyAddons;

/**
 * Manages static assets for the Cozy Addons plugin.
 *
 * This singleton class provides centralized access to plugin assets
 * like fonts, scripts, and styles.
 *
 * @package CozyAddons
 */
class Assets {
	/**
	 * Singleton instance of the class.
	 *
	 * @var Assets|null
	 */
	private static $instance = null;

	/**
	 * Absolute path to the assets directory.
	 *
	 * @var string
	 */
	private static $dir = COZY_ADDONS_PLUGIN_DIR . 'assets/';

	/**
	 * URL to the assets directory.
	 *
	 * @var string
	 */
	private static $url = COZY_ADDONS_PLUGIN_URL . 'assets/';

	/**
	 * Returns the singleton instance of the Assets class.
	 *
	 * @return Assets The singleton instance.
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function get_utility_function_status( $function_name ) {
		$status = false;

		$value = get_option( 'ca--utility--' . $function_name );

		if ( '1' === $value || '' == $value ) {
			$status = true;
		}

		return $status;
	}

	/**
	 * Class constructor.
	 *
	 * Private to enforce the singleton pattern.
	 *
	 * @access private
	 */
	private function __construct() {
		// Asset initialization logic (if any) can be added here.
		$this->load_asset_files();

		add_action( 'init', array( $this, 'initialize_resource_handles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_frontend_assets' ) );

		$this->block_assets();
	}

	/**
	 * Loads asset-related files.
	 *
	 * Currently includes Google Fonts setup from the fonts directory.
	 *
	 * @return void
	 */
	private function load_asset_files() {
		require_once self::$dir . 'fonts/google-fonts.php';
	}

	/**
	 * Registers shared frontend libraries without enqueuing them.
	 *
	 * This method registers the Swiper.js bundle (JS and CSS),
	 * so it can be enqueued conditionally elsewhere.
	 *
	 * @return void
	 */
	public function initialize_resource_handles() {
		// Swiper.js bundle.
		wp_register_script( 'cozy-swiper-bundle', COZY_ADDONS_PLUGIN_URL . 'vendor/swiper/swiper-bundle.js', array( 'jquery' ), COZY_ADDONS_VERSION, false );
		wp_register_style( 'cozy-swiper-bundle', COZY_ADDONS_PLUGIN_URL . 'vendor/swiper/swiper-bundle.css', array(), COZY_ADDONS_VERSION, 'all' );
	}

	/**
	 * Enqueues general frontend scripts and styles used across the site.
	 *
	 * Includes animation libraries such as AOS.
	 *
	 * @return void
	 */
	public function load_frontend_assets() {
		// Luxon.
		wp_enqueue_script(
			'cozy-dep-luxon', // Handle name.
			COZY_ADDONS_PLUGIN_URL . 'vendor/luxon/luxon.js', // Path to your JavaScript file.
			array(),
			COZY_ADDONS_VERSION,
			true
		);
	}

	/**
	 * Hooks block asset loaders into WordPress actions.
	 *
	 * Registers asset loading methods for both the block editor and frontend.
	 *
	 * @return void
	 */
	private function block_assets() {
		add_action( 'enqueue_block_editor_assets', array( $this, 'load_block_editor_assets' ) );
		add_action( 'enqueue_block_assets', array( $this, 'load_block_assets' ) );
	}

	/**
	 * Enqueues styles and scripts for the block editor (Gutenberg).
	 *
	 * Includes editor-only CSS, animation settings, and utility scripts.
	 * Also localizes Google Fonts for dynamic use in blocks.
	 *
	 * @return void
	 */
	public function load_block_editor_assets() {
		// Block Editor CSS.
		wp_enqueue_style( 'cozy-addons--editor--style', self::$url . 'css/cozy-block-editor.css', array(), COZY_ADDONS_VERSION, 'all' );

		// Utility attributes.
		$styles_status = $this->get_utility_function_status( 'styles' );
		if ( $styles_status ) {
			wp_enqueue_script( 'cozy-core-block-scripts', self::$url . 'js/cozy-common-block-scripts.js', array( 'react-jsx-runtime', 'wp-block-editor', 'wp-components', 'wp-blocks', 'wp-element', 'wp-hooks' ), COZY_ADDONS_VERSION, true );
			wp_localize_script(
				'cozy-core-block-scripts',
				'googleFonts',
				array(
					'collection' => cozy_addons_google_fonts(),
				)
			);
		}
	}

	/**
	 * Enqueues styles and scripts required on the frontend for custom blocks.
	 *
	 * Includes the main block CSS, responsive scripts, and external dependencies like Luxon.
	 *
	 * @return void
	 */
	public function load_block_assets() {
		// Block CSS.
		wp_enqueue_style( 'cozy-addons--blocks--style', self::$url . 'css/cozy-block.css', array(), COZY_ADDONS_VERSION, 'all' );

		// Responsive Script.
		wp_enqueue_script( 'cozy-addons--block-responsive', self::$url . 'js/cozy-responsive.js', array( 'jquery' ), COZY_ADDONS_VERSION, false );

		// AOS animation lib.
		$animation_status = $this->get_utility_function_status( 'animation' );
		if ( $animation_status ) {
			wp_enqueue_script( 'cozy-addons--aos', COZY_ADDONS_PLUGIN_URL . 'vendor/aos/aos.js', array( 'jquery' ), COZY_ADDONS_VERSION, true );
			wp_enqueue_style( 'cozy-addons--aos', COZY_ADDONS_PLUGIN_URL . 'vendor/aos/aos.css', array(), COZY_ADDONS_VERSION, 'all' );

			wp_enqueue_script( 'cozy-addons--animation-settings', self::$url . 'js/cozy-animation.min.js', array( 'react-jsx-runtime', 'wp-block-editor', 'wp-components', 'wp-compose', 'wp-hooks', 'wp-i18n' ), COZY_ADDONS_VERSION, true );
		}
	}
}
