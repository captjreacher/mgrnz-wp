<?php
function cozythemes_demo_importer_get_theme_name() {
	$current_theme = wp_get_theme();
	return $current_theme->get( 'Name' );
}

function cozythemes_demo_importer_plugin_check_activated() {
	$pluginList                      = get_option( 'active_plugins' );
	$cozythemes_demo_importer_plugin = 'advanced-import/advanced-import.php';
	$checkPlugin                     = in_array( $cozythemes_demo_importer_plugin, $pluginList );
	return $checkPlugin;
}
function cozythemes_demo_importer_plugin_file_exists() {
	$cozythemes_demo_importer_plugin = 'advanced-import/advanced-import.php';
	$pathpluginurl                   = WP_PLUGIN_DIR . '/' . $cozythemes_demo_importer_plugin;
	$isinstalled                     = file_exists( $pathpluginurl );
	return $isinstalled;
}
function cozythemes_demo_importer_get_theme_screenshot() {
	$current_theme = wp_get_theme();
	return $current_theme->get_screenshot();
}
function cozythemes_demo_importer_get_current_theme_slug() {
	$current_theme = wp_get_theme();
	return $current_theme->stylesheet;
}
function cozythemes_demo_importer_premium_access() {
	if ( class_exists( 'PatternBerg' ) || class_exists( 'Cozy_Addons' ) ) {
		$premium_status = false;
		if ( cc_fs()->is__premium_only() ) {
			if ( cc_fs()->can_use_premium_code() ) {
				$premium_status = true;
			}
		}
		return $premium_status;
	}
}
if ( cozythemes_demo_importer_premium_access() ) {
	add_action( 'advanced_import_is_pro_active', 'cozythemes_demo_importer_set_premium_active' );
	function cozythemes_demo_importer_set_premium_active( $is_pro_active ) {
		return true;
	}
}

if ( ! function_exists( 'cozythemes_demo_importer_scripts_loading' ) ) {
	function cozythemes_demo_importer_scripts_loading() {
		wp_enqueue_style( 'cdi-admin-style', COZY_ESSENTIAL_ADDONS_URL . 'admin/css/cdi-styles.css' );
	}
	add_action( 'admin_enqueue_scripts', 'cozythemes_demo_importer_scripts_loading' );
}

function cdi_check_advanced_import_plugin() {
	if ( ! is_plugin_active( 'advanced-import/advanced-import.php' ) ) {
		add_action( 'admin_notices', 'cdi_display_advanced_import_message' );
	}
}

function cdi_display_advanced_import_message() {
	$message = sprintf(
		esc_html__( '"%1$s" requires "%2$s" must to be installed and activated to use one click demo import feature.', 'cozy-essential-addons' ),
		'<strong>' . esc_html__( 'Cozy Essential Addons', 'cozy-essential-addons' ) . '</strong>',
		'<strong><a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__( 'Advanced Import', 'cozy-essential-addons' ) . '</a></strong>'
	);
	printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
}

add_action( 'admin_init', 'cdi_check_advanced_import_plugin' );
