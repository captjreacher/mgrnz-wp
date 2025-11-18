<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://cozythemes.com/
 * @since      1.0.0
 *
 * @package    Cozy_Essential_Addons
 * @subpackage Cozy_Essential_Addons/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Cozy_Essential_Addons
 * @subpackage Cozy_Essential_Addons/public
 * @author     CozyThemes <support@cozythemes.com>
 */
class Cozy_Essential_Addons_Public
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */

	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->cozy_essential_addons_partials();
	}

	public function cozy_essential_addons_partials()
	{
		/**
		 * Adding shorcode for listing all CPT
		 */
		require_once COZY_ESSENTIAL_ADDONS_PATH . 'public/shortcodes.php';
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cozy_Essential_Addons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cozy_Essential_Addons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style('cozy-essential-style', plugin_dir_url(__FILE__) . 'css/cozy-essential-style.css', array(), $this->version, 'all');
	}
	function cozy_essential_addons_block_assets()
	{
		wp_enqueue_style('cozy-essential-block-style', plugin_dir_url(__FILE__) . 'css/block.css', array(), $this->version, 'all');
	}
	//add_action( 'enqueue_block_assets', 'dofse_block_assets' );

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cozy_Essential_Addons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cozy_Essential_Addons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/cozy-essential-addons-public.js', array('jquery'), $this->version, false);
	}
}
