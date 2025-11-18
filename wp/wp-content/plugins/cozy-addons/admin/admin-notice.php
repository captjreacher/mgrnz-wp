<?php

/**
 * Displays an admin notice upon activation of the Cozy Blocks plugin.
 *
 * This notice welcomes the user to Cozy Blocks and promotes the plugin’s advanced features.
 * It encourages the user to explore the 30+ advanced blocks and provides an option to upgrade
 * to the premium version for additional benefits like ad-free editing, regular updates, and priority support.
 *
 * The notice is only shown under the following conditions:
 * - The user is in the admin area (not network admin).
 * - The user has the 'manage_options' capability.
 * - The notice has not been dismissed (based on the 'cozy_dashboard_dismissed_notice' option).
 *
 * Links to explore Cozy Blocks and the Pro version are included, along with an image for visual appeal.
 *
 * @since 1.0.0
 */
function cozy_addons_activation_admin_notice() {
	if ( is_admin() ) {
		if ( is_network_admin() ) {
			return;
		}
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		if ( get_option( 'cozy_dashboard_dismissed_notice' ) ) {
			return;
		}

		$current_screen = get_current_screen();

		if ( 'plugins' !== $current_screen->id && 'dashboard' !== $current_screen->id && 'toplevel_page__cozy_companions' !== $current_screen->id ) {
			return;
		}

		?>
		<div class="notice notice-info is-dismissible cozy-addons-admin-notice">
			<div class="notice-content">
				<div class="notice-holder">
					<h4>
						<?php esc_html_e( 'Welcome to Cozy Blocks — Let’s Build Something Great!', 'cozy-addons' ); ?>🚀
					</h4>
					<p>
						<?php esc_html_e( 'Cozy Blocks adds 50+ powerful and highly customizable blocks to your WordPress editor. Build faster, design better, and keep full control — all without writing a single line of code.', 'cozy-addons' ); ?></p>
					<a href="<?php echo esc_url( admin_url() ); ?>admin.php?page=_cozy_companions" class="ca__admin-notice-btn"><?php esc_html_e( "Let's Get Started", 'cozy-addons' ); ?></a>
				</div>
			</div>
			<div class="plugin-screen">
				<img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . '/admin/assets/img/cozy-blocks-notice-image.png' ); ?>" />
			</div>
		</div>
		<?php
	}
}
add_action( 'admin_notices', 'cozy_addons_activation_admin_notice' );

/**
 * Displays an admin notice if the active theme is not a block theme (FSE-compatible).
 *
 * This notice informs the admin that Cozy Blocks is designed for Full Site Editing (FSE).
 * It suggests switching to a block theme but also mentions that Elementor-compatible addons are available.
 *
 * The notice will only appear under the following conditions:
 * - The current theme is not a block/FSE-compatible theme.
 * - The user is in the admin area (not the network admin).
 * - The user has the 'manage_options' capability.
 * - The notice has not been dismissed via the 'cozy_addons_block_theme' option.
 */
function cozy_addons_invalid_theme_type_notice() {
	if ( is_admin() ) {
		if ( cozy_addons_is_block_theme() ) {
			return;
		}

		if ( is_network_admin() ) {
			return;
		}
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		if ( get_option( 'cozy_addons_block_theme' ) ) {
			return;
		}
		?>
		<div class="fs-notice notice fs-has-title notice-warning is-dismissible cozy-blocks-admin-notice">
			<label class="fs-plugin-title"><?php esc_html_e( 'Cozy Blocks', 'cozy-addons' ); ?></label>
			<div class="notice-content">
				<div class="notice-holder">
					<p>
						<img style="max-width: 22px;vertical-align: bottom;margin-bottom: -2px;margin-right: 5px;" src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/cozy-addons-icon.png' ); ?>" /><strong><?php esc_html_e( 'Uh-oh!', 'cozy-addons' ); ?></strong><?php esc_html_e( ' Cozy Blocks is tailored for Full Site Editing (FSE).', 'cozy-addons' ); ?>
					</p>
				</div>
			</div>
		</div>
		<?php
	}
}
add_action( 'admin_notices', 'cozy_addons_invalid_theme_type_notice' );

/**
 * Handles the rollback process for the "Cozy Addons" plugin.
 *
 * This function is triggered when the `action` query parameter is set to `cozy_addons_rollback`.
 * It verifies the request nonce, fetches the previous plugin version from the plugin versions list,
 * downloads the corresponding package, deactivates and deletes the current plugin version, and installs
 * and activates the previous version.
 *
 * @return void
 */
function cozy_addons_rollback_html_schema() {

	$is_cozy_addons_rollback = isset( $_GET['action'] ) && 'cozy_addons_rollback' === sanitize_text_field( wp_unslash( $_GET['action'] ) ) ? true : false;
	if ( ! $is_cozy_addons_rollback ) {
		return;
	}
	$wp_nonce = isset( $_GET['_wpnonce'] ) ? sanitize_text_field( wp_unslash( $_GET['_wpnonce'] ) ) : '';

	$rollback_version = isset( $_GET['version'] ) ? sanitize_text_field( wp_unslash( $_GET['version'] ) ) : '';

	if ( empty( $wp_nonce ) || ! wp_verify_nonce( $wp_nonce, 'cozy_addons_rollback_action' ) ) {
		wp_die( esc_html__( 'Not allowed!', 'cozy-addons' ) );
	}

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have permission to perform this action.', 'cozy-addons' ) );
	}

	$versions = cozy_addons_get_plugin_versions();

	$previous_version = array();

	if ( ! empty( $rollback_version ) ) {
		$previous_version = array_filter(
			$versions,
			function ( $version_info ) use ( $rollback_version ) {
				return version_compare( $version_info['version'], $rollback_version, '=' );
			}
		);
	} else {
		$previous_version = array_filter(
			$versions,
			function ( $version_info ) {
				return version_compare( $version_info['version'], COZY_ADDONS_VERSION, '<' );
			}
		);
	}

	$previous_version = array_values( $previous_version );

	if ( empty( $previous_version ) ) {
		wp_die( esc_html__( 'Not allowed!', 'cozy-addons' ) );
	}

	$styles = "
		html {
			background: #f1f1f1;
		}
		body {
			background: #fff;
			border: 1px solid #ccd0d4;
			color: #444;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
			margin: 2em auto;
			padding: 1em 2em;
			max-width: 700px;
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .04);
			box-shadow: 0 1px 1px rgba(0, 0, 0, .04);
		}
		h2 {
			border-bottom: 1px solid #dadada;
			clear: both;
			color: #666;
			font-size: 24px;
			margin: 30px 0 0 0;
			padding: 0;
			padding-bottom: 7px;
		}
		a {
			color: #2271b1;
		}
		a:hover,
		a:active {
			color: #135e96;
		}
		a:focus {
			color: #043959;
			box-shadow: 0 0 0 2px #2271b1;
			outline: 2px solid transparent;
		}
		.button {
			background: #f3f5f6;
			border: 1px solid #016087;
			color: #016087;
			display: inline-block;
			text-decoration: none;
			font-size: 13px;
			line-height: 2;
			height: 28px;
			margin: 0;
			padding: 0 10px 1px;
			cursor: pointer;
			-webkit-border-radius: 3px;
			-webkit-appearance: none;
			border-radius: 3px;
			white-space: nowrap;
			-webkit-box-sizing: border-box;
			-moz-box-sizing:    border-box;
			box-sizing:         border-box;

			vertical-align: top;
		}

		.button.disabled {
			margin-right: 16px;
			cursor: not-allowed;
			opacity: 0.5;
		}

		.button:hover,
		.button:focus {
			background: #f1f1f1;
		}

		.button:focus {
			background: #f3f5f6;
			border-color: #007cba;
			-webkit-box-shadow: 0 0 0 1px #007cba;
			box-shadow: 0 0 0 1px #007cba;
			color: #016087;
			outline: 2px solid transparent;
			outline-offset: 0;
		}

		.button:active {
			background: #f3f5f6;
			border-color: #7e8993;
			-webkit-box-shadow: none;
			box-shadow: none;
		}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}
			100% {
				transform: rotate(360deg);
			}
		}

		#loader-icon {
			vertical-align: middle;
			width: 12px;
			height: 12px;
			animation: spin 2s linear infinite;
			margin-right: 3px;
			margin-top: -3px;
		}

		.display-none {
			display: none;
		}

		#rollback-log {
			margin-top: 16px;
			padding: 0 14px;
		}

		.footer {
			margin: 20px 0 12px 0;
		}

	";

	echo '<style type="text/css">';
	echo esc_html( $styles );
	echo '</style>';

	echo '<h2>' . sprintf(
		/* translators: %s: Cozy Blocks rollback version */
		esc_html__( '%1$sConfirm rollback of Cozy Blocks to v%2$s!', 'cozy-addons' ),
		'<img style="max-width: 24px; vertical-align: bottom; display: inline-block; margin-bottom: 2px; margin-right: 5px;" src="' . esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/cozy-addons-icon.png' ) . '" />',
		esc_html( $previous_version[0]['version'] )
	) . '</h2>';

	echo '<div id="rollback-log"></div>';

	echo '<div class="footer">';
	echo '<button id="cozy-rollback__confirm" class="button" style="margin-right:16px;">';
	echo '<svg id="loader-icon" class="display-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M6.66667 1.33334C8.39333 1.33334 9.92933 2.15334 10.9047 3.42867L9.33333 5H13.3333V1L11.854 2.47934C11.2298 1.70449 10.4397 1.07951 9.54197 0.650429C8.64423 0.221346 7.66168 -0.000917878 6.66667 2.84892e-06C2.98467 2.84892e-06 0 2.98467 0 6.66667H1.33333C1.33333 5.25218 1.89524 3.89563 2.89543 2.89543C3.89562 1.89524 5.25218 1.33334 6.66667 1.33334ZM12 6.66667C12 7.782 11.6504 8.86927 11.0003 9.77553C10.3502 10.6818 9.4323 11.3614 8.37579 11.7189C7.31928 12.0763 6.1773 12.0935 5.11051 11.7681C4.04371 11.4426 3.10578 10.7909 2.42867 9.90467L4 8.33334H0V12.3333L1.47933 10.854C2.10356 11.6289 2.89363 12.2538 3.79137 12.6829C4.68911 13.112 5.67166 13.3343 6.66667 13.3333C10.3487 13.3333 13.3333 10.3487 13.3333 6.66667H12Z" fill="#135E96"/>
		</svg>
		';
	echo '<span>' . esc_html__( 'Confirm', 'cozy-addons' ) . '</span>';
	echo '</button>';

	echo '<a id="plugins-page-redirection" class="display-none" href="' . esc_url( admin_url( 'plugins.php' ) ) . '"> ' . esc_html__( 'Go to Plugins page', 'cozy-addons' ) . '</a>';
	echo '<div>';

	$ajax_url = esc_url( admin_url( 'admin-ajax.php' ) );

	$download_nonce = wp_create_nonce( 'cozy_addons_rollback_version_download' );
	$activate_nonce = wp_create_nonce( 'cozy_addons_rollback_version_activate' );

	$script = "
		jQuery(document).ready(function() {
			const rollbackLogs = jQuery(`#rollback-log`);
			const redirectionBtn = jQuery(`#plugins-page-redirection`);

			jQuery(`#cozy-rollback__confirm`).click(function() {
				const button = jQuery(this);
				button.addClass(`disabled`);

				const loaderIcon = jQuery(this).find(`#loader-icon`);
				loaderIcon.removeClass(`display-none`);

				rollbackLogs.append(`Downloading the plugin from {$previous_version[0]['url']}...\\n`);

				 // Simulate AJAX call to execute PHP rollback logic
				jQuery.ajax({
					url: `$ajax_url`, // WordPress AJAX handler
					type: `POST`,
					data: {
						action: `cozy_addons_download_plugin_rollback_version`,
						nonce: `{$download_nonce}`,
						downloadURL: `{$previous_version[0]['url']}`,
					},
					success: function(response) {
						if (response.success) {
							// Display step 2: Deactivate plugin
							rollbackLogs.append(`Unpacking and installing the plugin...\\n`);

							const tempFile = response.data.tempFile;
							
							// Simulate next step in PHP
							jQuery.ajax({
								url: `$ajax_url`,
								type: `POST`,
								data: {
									action: `cozy_addons_activate_rollback_version`,
									nonce: `{$activate_nonce}`,
									tempURL: tempFile,
								},
								success: function(response) {
									if (response.success) {
										rollbackLogs.append(`Plugin installed and activated\\n`);
									} else {
										rollbackLogs.append(`Error during plugin installation!\\n`);
									}
									button.remove();
									redirectionBtn.removeClass(`display-none`);
								}, 
								error: function() {
									rollbackLogs.append(`There was an issue with the rollback process. Please try again.\\n`);
									button.remove();
									redirectionBtn.removeClass(`display-none`);
								},
							});
						} else {
							rollbackLogs.append(`Error during download!\\n`);
							button.remove();
							redirectionBtn.removeClass(`display-none`);
						}
					},
					error: function() {
						rollbackLogs.append(`There was an issue with the rollback process. Please try again.\\n`);
						button.remove();
						redirectionBtn.removeClass(`display-none`);
					}
				});
			});
		});

	";

	echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>';

	echo '<script>';
	echo esc_html( $script );
	echo '</script>';

	exit;
}
add_action( 'admin_post_cozy_addons_rollback', 'cozy_addons_rollback_html_schema' );
