<?php
namespace CozyAddons;

/**
 * Handles internationalization (i18n) for the Cozy Addons plugin.
 *
 * This singleton class loads the plugin text domain to support translation.
 *
 * @package CozyAddons
 */
class i18n {
	/**
	 * Singleton instance of the class.
	 *
	 * @var i18n|null
	 */
	private static $instance = null;

	/**
	 * Returns the singleton instance of the i18n class.
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @return i18n The singleton instance.
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 *
	 * Registers the action to load plugin textdomain on WordPress 'init' hook.
	 *
	 * @access private
	 */
	private function __construct() {
		add_action( 'init', array( $this, 'i18n' ) );
	}

	/**
	 * Loads the plugin textdomain for translation.
	 *
	 * This allows WordPress to load the appropriate language files from the `languages/` directory.
	 *
	 * @return void
	 */
	public function i18n() {
		load_plugin_textdomain(
			'cozy-addons',
			false,
			COZY_ADDONS_PLUGIN_DIR . 'languages/'
		);
	}
}
