<?php
namespace CozyAddons;

/**
 * Initializes all core components of the Cozy Addons plugin.
 *
 * This singleton class loads the internationalization module,
 * core functionality, admin panel integration, and custom blocks.
 *
 * @package CozyAddons
 */
class Init {
	/**
	 * Singleton instance of the class.
	 *
	 * @var Init|null
	 */
	private static $instance = null;

	private static $dir = COZY_ADDONS_PLUGIN_DIR . 'includes/';

	private static $url = COZY_ADDONS_PLUGIN_URL . 'includes/';

	/**
	 * Returns the singleton instance of the Init class.
	 *
	 * Ensures that only one instance of the plugin initializer is active.
	 *
	 * @return Init The singleton instance.
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
	 * Loads all primary plugin components:
	 *
	 * @return void
	 */
	public function __construct() {
		// Load helper class.
		require_once self::$dir . 'Helpers/class-utils.php';
		\CozyAddons\Helpers\Utils::get_instance();
		require_once self::$dir . 'Helpers/class-block-render.php';
		\CozyAddons\Helpers\BlockRender::get_instance();

		require_once COZY_ADDONS_PLUGIN_DIR . 'includes/functions.php';

		// Load Internationalization.
		\CozyAddons\i18n::get_instance();

		// Plugin Core.
		\CozyAddons\Core::get_instance();

		// Plugin Assets.
		\CozyAddons\Assets::get_instance();

		// Admin Instance.
		\CozyAddons\Admin::get_instance();

		// Block Instance.
		\CozyAddons\Blocks::get_instance();
	}
}
