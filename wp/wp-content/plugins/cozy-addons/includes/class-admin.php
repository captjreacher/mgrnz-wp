<?php
namespace CozyAddons;

/**
 * Handles admin-specific functionality for the Cozy Addons plugin.
 *
 * This singleton class loads necessary files and features
 * required for the WordPress admin area.
 *
 * @package CozyAddons
 */
class Admin {
	/**
	 * Singleton instance of the class.
	 *
	 * @var Admin|null
	 */
	private static $instance = null;

	/**
	 * Absolute path to the admin directory.
	 *
	 * @var string
	 */
	private static $dir = COZY_ADDONS_PLUGIN_DIR . 'admin/';

	/**
	 * URL to the admin directory.
	 *
	 * @var string
	 */
	private static $url = COZY_ADDONS_PLUGIN_URL . 'admin/';

	/**
	 * Returns the singleton instance of the Admin class.
	 *
	 * @return Admin The singleton instance.
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
		$this->load_admin_files();

		add_action( 'admin_enqueue_scripts', array( $this, 'load_admin_assets' ) );

		add_action( 'admin_menu', array( $this, 'register_plugin_menu' ), 9 );
	}

	/**
	 * Loads admin-specific files.
	 *
	 * Includes files only when in the WordPress admin dashboard.
	 *
	 * @return void
	 */
	private function load_admin_files() {
		if ( is_admin() ) {
			require_once self::$dir . 'admin-notice.php';
		}
	}

	/**
	 * Enqueues admin-specific styles and scripts for the Cozy Addons plugin.
	 *
	 * This function checks if the current screen is the plugin's admin page and,
	 * if so, enqueues the necessary styles and scripts, along with localized data
	 * for AJAX usage.
	 */
	public function load_admin_assets() {
		$current_screen = get_current_screen();

		wp_enqueue_style( 'cozy-addons--admin-notice--style', self::$url . 'assets/css/admin-notice-styles.css', array(), COZY_ADDONS_VERSION, 'all' );

		if ( 'dashboard' !== $current_screen->id && 'plugins' !== $current_screen->id && 'toplevel_page__cozy_companions' !== $current_screen->id ) {
			return;
		}

		wp_enqueue_style( 'cozy-addons--admin-style', self::$url . 'assets/css/admin-styles.css', array(), COZY_ADDONS_VERSION, 'all' );
		wp_enqueue_script( 'cozy-addons--admin-script', self::$url . 'assets/js/admin-scripts.js', array( 'jquery' ), COZY_ADDONS_VERSION, false );
		wp_localize_script(
			'cozy-addons--admin-script',
			'ajax_object',
			array(
				'ajax_url'             => esc_url( admin_url( 'admin-ajax.php' ) ),
				'isPremium'            => cozy_addons_premium_access(),
				'utilityFunctionNonce' => wp_create_nonce( 'ca_utility_function' ),
			)
		);
	}

	/**
	 * Registers the admin menu and submenu for the Cozy Addons plugin.
	 *
	 * Adds a top-level menu and a corresponding submenu page in the WordPress admin dashboard
	 * under the "Cozy Blocks" label. The menu is only registered if it does not already exist.
	 */
	public function register_plugin_menu() {
		if ( ! menu_page_url( '_cozy_companions' ) ) {
			add_menu_page( 'Cozy Blocks', 'Cozy Blocks', 'manage_options', '_cozy_companions', array( $this, 'cozy_companion_info' ), self::$url . 'assets/img/ct_logo.svg', '2' );
			add_submenu_page(
				'_cozy_companions',
				'Dashboard',
				__( 'Dashboard', 'cozy-addons' ),
				'manage_options',
				'_cozy_companions'
			);
		}
	}

	/**
	 * Includes the plugin's dashboard page template.
	 *
	 * This function loads the main admin interface for the Cozy Addons plugin
	 * by including the dashboard PHP file.
	 */
	public function cozy_companion_info() {
			include_once self::$dir . 'dashboard.php';
	}
}
