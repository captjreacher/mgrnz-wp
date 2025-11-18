<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://cozythemes.com/
 * @since             1.0.0
 * @package           Cozy_Addons
 *
 * @wordpress-plugin
 * Plugin Name:       Cozy Blocks
 * Plugin URI:        https://cozythemes.com/cozy-addons
 * Description:       Streamline your website designs with our library of advanced blocks designed to extend the WordPress Site Editor.
 * Version:           2.1.31
 * Author:            CozyThemes
 * Author URI:        https://cozythemes.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cozy-addons
 * Domain Path:       /languages/
 * Requires at least: 5.8
 * Requires PHP: 7.3
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COZY_ADDONS_VERSION', '2.1.31' );
define( 'COZY_ADDONS_PLUGIN_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'COZY_ADDONS_PLUGIN_URL', trailingslashit( plugins_url( '', __FILE__ ) ) );

require_once COZY_ADDONS_PLUGIN_DIR . 'autoload.php';

if ( ! function_exists( 'cc_fs' ) ) {
	// Create a helper function for easy SDK access.
	function cc_fs() {
		global $cc_fs;
		if ( ! isset( $cc_fs ) ) {
			// Include Freemius SDK.
			require_once __DIR__ . '/freemius/start.php';

			$cc_fs = fs_dynamic_init(
				array(
					'id'                  => '12692',
					'slug'                => 'cozy-addons',
					'premium_slug'        => 'cozy-companions-premium',
					'type'                => 'plugin',
					'public_key'          => 'pk_fbca81b65cb25c89dcf0662ce4cc6',
					'is_premium'          => true,
					'premium_suffix'      => 'Pro',
					// If your plugin is a serviceware, set this option to false.
					'has_premium_version' => false,
					'has_addons'          => false,
					'has_affiliation'     => true,
					'has_paid_plans'      => true,
					'menu'                => array(
						'slug'    => '_cozy_companions',
						'support' => false,
					),
				)
			);
		}

		return $cc_fs;
	}

	// Init Freemius.
	cc_fs();
	// Signal that SDK was initiated.
	do_action( 'cc_fs_loaded' );
}

if ( ! defined( 'CT_COMPANION_SDK_URL' ) ) {
	define( 'CT_COMPANION_SDK_URL', COZY_ADDONS_PLUGIN_URL . '/admin/ct-companions/' );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cozy-addons-activator.php
 */
function activate_cozy_addons() {
	\CozyAddons\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cozy-addons-deactivator.php
 */
function deactivate_cozy_addons() {
	\CozyAddons\Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cozy_addons' );
register_deactivation_hook( __FILE__, 'deactivate_cozy_addons' );

if ( ! class_exists( 'Cozy_Addons' ) ) :
	final class Cozy_Addons {
		/**
		 * Instance
		 *
		 * @since 1.0.0
		 *
		 * @access private
		 * @static
		 *
		 * @var Cozy_Addons The single instance of the class.
		 */
		private static $instance = null;

		/**
		 * Instance
		 *
		 * Ensures only one instance of the class is loaded or can be loaded.
		 *
		 * @since 1.0.0
		 *
		 * @access public
		 * @static
		 *
		 * @return Cozy_Addons An instance of the class.
		 */
		public static function instance() {

			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 *
		 * @since 1.0.0
		 * @access public
		 */
		public function __construct() {
			\CozyAddons\Init::get_instance();
		}
	}

	// Instantiate Cozy Addons.
	Cozy_Addons::instance();

endif;
