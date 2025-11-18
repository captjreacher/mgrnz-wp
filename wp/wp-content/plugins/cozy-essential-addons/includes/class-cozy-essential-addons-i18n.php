<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://cozythemes.com/
 * @since      1.0.0
 *
 * @package    Cozy_Essential_Addons
 * @subpackage Cozy_Essential_Addons/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cozy_Essential_Addons
 * @subpackage Cozy_Essential_Addons/includes
 * @author     CozyThemes <support@cozythemes.com>
 */
class Cozy_Essential_Addons_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cozy-essential-addons',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
