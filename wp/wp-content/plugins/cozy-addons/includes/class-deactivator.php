<?php
namespace CozyAddons;

/**
 * Fired during plugin deactivation.
 *
 * This class defines all functionality that should run when the plugin is deactivated.
 * Typically includes cleanup tasks like removing scheduled hooks or flushing rewrite rules.
 *
 * @since      1.0.0
 * @package    CozyAddons
 * @subpackage CozyAddons/includes
 * @author     CozyThemes <support@cozythemes.com>
 */
class Deactivator {

	/**
	 * Runs deactivation-related tasks.
	 *
	 * This method is called when the plugin is deactivated.
	 * Use it to clear scheduled events, flush rewrite rules, or clean transient data.
	 *
	 * @return void
	 */
	public static function deactivate() {
		// Deactivation logic goes here.
	}
}
