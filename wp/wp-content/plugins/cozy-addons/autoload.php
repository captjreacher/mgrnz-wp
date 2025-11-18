<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * This file contains the autoloading mechanism.
 *
 * The spl_autoload_register function is a pre-defined function
 * to effectively create a queue of autoload functions, and run through each of them in the order they are defined.
 *
 * @package CozyAddons
 */
spl_autoload_register(
	function ( $class_name ) {
		$prefix   = 'CozyAddons\\';
		$base_dir = COZY_ADDONS_PLUGIN_DIR . 'includes/';

		$len = strlen( $prefix );
		if ( strncmp( $prefix, $class_name, $len ) !== 0 ) {
			return;
		}

		$relative_class = substr( $class_name, $len );

		$parts           = explode( '\\', $relative_class );
		$class_base_name = array_pop( $parts );
		$path            = implode( '/', array_map( 'strtolower', $parts ) );

		// Determine file prefix based on naming convention.
		$filename_part = strtolower( str_replace( '_', '-', $class_base_name ) );

		$prefix_type = 'class-';

		$file = rtrim( $base_dir, '/' ) . '/' . $prefix_type . $filename_part . '.php';

		if ( ! empty( $path ) ) {
			$file = rtrim( $base_dir, '/' ) . '/' . ucfirst( $path ) . '/' . $prefix_type . $filename_part . '.php';
		}

		if ( file_exists( $file ) ) {
			require $file;
		}
	}
);
