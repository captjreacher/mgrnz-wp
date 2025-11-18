<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://cozythemes.com/
 * @since      1.0.0
 *
 * @package    Cozy_Essential_Addons
 * @subpackage Cozy_Essential_Addons/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Cozy_Essential_Addons
 * @subpackage Cozy_Essential_Addons/includes
 * @author     CozyThemes <support@cozythemes.com>
 */
class Cozy_Essential_Addons {


	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Cozy_Essential_Addons_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'COZY_ESSENTIAL_ADDONS_VERSION' ) ) {
			$this->version = COZY_ESSENTIAL_ADDONS_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'cozy-essential-addons';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		include_once ABSPATH . 'wp-admin/includes/plugin.php';
		$check_ai_pluign_status = is_plugin_active( 'advanced-import/advanced-import.php' );
		if ( $check_ai_pluign_status ) {
			$this->define_hooks();
		}
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Cozy_Essential_Addons_Loader. Orchestrates the hooks of the plugin.
	 * - Cozy_Essential_Addons_i18n. Defines internationalization functionality.
	 * - Cozy_Essential_Addons_Admin. Defines all hooks for the admin area.
	 * - Cozy_Essential_Addons_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( __DIR__ ) . 'includes/class-cozy-essential-addons-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( __DIR__ ) . 'includes/class-cozy-essential-addons-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( __DIR__ ) . 'admin/class-cozy-essential-addons-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( __DIR__ ) . 'public/class-cozy-essential-addons-public.php';

		require_once plugin_dir_path( __DIR__ ) . 'includes/functions.php';

		/**
		 * including hooks of the plugins
		 */
		require_once plugin_dir_path( __DIR__ ) . 'includes/hooks.php';

		/**
		 * including demo configs for themes of the cozythemes
		 */
		require_once plugin_dir_path( __DIR__ ) . 'includes/demo-configs.php';
		require_once plugin_dir_path( __DIR__ ) . 'admin/cpt-options.php';

		if ( cozythemes_demo_importer_premium_access() ) {
			require_once plugin_dir_path( __DIR__ ) . 'includes/block-patterns.php';
		}

		$this->loader = new Cozy_Essential_Addons_Loader();
	}

	private function define_hooks() {
		include_once ABSPATH . 'wp-admin/includes/plugin.php';
		$check_ai_pluign_status = is_plugin_active( 'advanced-import/advanced-import.php' );
		$plugin_admin           = cozythemes_demo_importer_hooks();
		if ( $check_ai_pluign_status ) {
			$this->loader->add_action( 'admin_init', $plugin_admin, 'redirect' );
			$this->loader->add_action( 'admin_menu', $plugin_admin, '_ct_import_menu', '99' );
			$this->loader->add_action( 'advanced_import_demo_lists', $plugin_admin, 'add_demo_lists', 999 );
			$this->loader->add_filter( 'gettext', $plugin_admin, '_ct_import_menu_custom_label', 10, 3 );
			$this->loader->add_action( 'wp_ajax_walker_core_getting_started', $plugin_admin, 'install_advanced_import' );
		}
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Cozy_Essential_Addons_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Cozy_Essential_Addons_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Cozy_Essential_Addons_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Cozy_Essential_Addons_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'enqueue_block_assets', $plugin_public, 'cozy_essential_addons_block_assets' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Cozy_Essential_Addons_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}


	public function cozythemes_demo_importer_missing_notice() {
		$pluginList = cozythemes_demo_importer_plugin_check_activated();
		if ( $pluginList != '1' ) {
			$fileexists = cozythemes_demo_importer_plugin_file_exists();
			if ( $fileexists == '1' ) {
				$walker_core_plugin = 'advanced-import/advanced-import.php';
				$activation_url     = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . $walker_core_plugin . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $walker_core_plugin );
				$message            = '<p>' . __( 'CozyThemes Demo Importer Demo Import Feature is not working because you need to activate Advanced Import Plugin.' ) . '</p>';
				$activate_msg       = __( 'Activate Advanced Import Now' );
				$message           .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $activation_url, $activate_msg ) . '</p>';
				echo '<div class="error"><p>' . $message . '</p></div>';
			}
		}
	}
}
