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
 * @package           Cozy_Essential_Addons
 *
 * @wordpress-plugin
 * Plugin Name:       Cozy Essential Addons
 * Plugin URI:        https://cozythemes.com/cozy-essential-addons
 * Description:       Cozy Essential Addons is the free WordPress plugin for Custom post type and provides basic skeletal for custom post type list.
 * Version:           1.3.4
 * Author:            CozyThemes
 * Author URI:        https://cozythemes.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cozy-essential-addons
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'COZY_ESSENTIAL_ADDONS_VERSION', '1.3.4' );
define( 'COZY_ESSENTIAL_ADDONS_PATH', plugin_dir_path( __FILE__ ) );
define( 'COZY_ESSENTIAL_ADDONS_URL', plugin_dir_url( __FILE__ ) );
define( 'COZY_ESSENTIAL_ADDONS_ASSETS_URL', 'https://cozythemesdemos.com/cozy-essential-addons/' );
define( 'COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL', 'https://cozythemesdemos.com/cozy-essential-addons/demos' );
define( 'COZY_ESSENTIAL_ADDONS_SCRIPT_PREFIX', ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '' ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cozy-essential-addons-activator.php
 */
function activate_cozy_essential_addons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cozy-essential-addons-activator.php';
	Cozy_Essential_Addons_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cozy-essential-addons-deactivator.php
 */
function deactivate_cozy_essential_addons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cozy-essential-addons-deactivator.php';
	Cozy_Essential_Addons_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cozy_essential_addons' );
register_deactivation_hook( __FILE__, 'deactivate_cozy_essential_addons' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cozy-essential-addons.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cozy_essential_addons() {

	$plugin = new Cozy_Essential_Addons();
	$plugin->run();
}
run_cozy_essential_addons();
