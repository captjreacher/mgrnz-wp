<div class="settings-page">
	<?php
	if ( wp_is_block_theme() ) {
		?>
		<!-- Block CPT enable/disable -->
		<h2 class="mt-34"><?php esc_html_e( 'Block Custom Post Type', 'cozy-addons' ); ?></h2>
		<ul class="blocks-holder">
			<li>
				<div class="cozy-display-flex">
					<p>
						<?php esc_html_e( 'Mega Menu Templates', 'cozy-addons' ); ?>
					</p>
					</a>
					<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
				</div>
				<div class="cozy-block-toggle">
					<label class="switch">
						<?php
						echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : '';
						$checked = get_option( 'ca-cpt--mega-menu-templates' );
						?>
						<input type="checkbox" class="ca__block-cpt <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="mega-menu-templates" id="ca--mega-menu-cpt" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
						<?php if ( false === cozy_addons_premium_access() ) { ?>
							<div class="cozy-block-upsell-tooltip">
								<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this CPT!', 'cozy-addons' ); ?>
							</div>
						<?php } else { ?>
							<span class="cozy-toggle-slider cozy-pro-block round"></span>
						<?php } ?>
					</label>
				</div>
			</li>
	
			<li>
				<div class="cozy-display-flex">
					<p>
						<?php esc_html_e( 'Portfolio Gallery Templates', 'cozy-addons' ); ?>
					</p>
					</a>
					<p class="cozy-block-pro-label"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" /></p>
				</div>
				<div class="cozy-block-toggle">
					<label class="switch">
						<?php
						echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : '';
						$checked = get_option( 'ca-cpt--portfolio-gallery-templates' );
						?>
						<input type="checkbox" class="ca__block-cpt <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="portfolio-gallery-templates" id="ca--portfolio-gallery-cpt" <?php echo cozy_addons_premium_access() && ( '1' === $checked || '' == $checked ) ? 'checked' : ''; ?>>
						<?php if ( false === cozy_addons_premium_access() ) { ?>
							<div class="cozy-block-upsell-tooltip">
								<?php esc_html_e( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php esc_html_e( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php esc_html_e( ' to enable this CPT!', 'cozy-addons' ); ?>
							</div>
						<?php } else { ?>
							<span class="cozy-toggle-slider cozy-pro-block round"></span>
						<?php } ?>
					</label>
				</div>
			</li>
		</ul>
	
		<!-- Utility Functions -->
		<h2 class="mt-34"><?php esc_html_e( 'Utility Functions', 'cozy-addons' ); ?></h2>
		<ul class="utility-functions blocks-holder">
			<li>
				<div>
					<p class="function-title">
						<?php esc_html_e( 'Cozy Animation', 'cozy-addons' ); ?>
					</p>
					<p class="function-desc"><?php esc_html_e( "'Cozy Animation' attribute in core WordPress blocks (e.g: Group, Columns, ...).", 'cozy-addons' ); ?></p>
				</div>
				<div class="cozy-block-toggle">
					<label class="switch">
						<?php
						$checked = get_option( 'ca--utility--animation' );
						?>
						<input type="checkbox" class="ca__utility-function" name="animation" id="cozy-addons--utility--animation" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
						<span class="cozy-toggle-slider round"></span>
					</label>
				</div>
			</li>
	
			<li>
				<div>
					<p class="function-title">
						<?php esc_html_e( 'Styling Options', 'cozy-addons' ); ?>
					</p>
					<p class="function-desc"><?php esc_html_e( '\'Cozy Advanced Effects\', \'Cozy Responsive Visibility\' and \'Google Fonts\' attribute in core WordPress blocks (e.g: Group, Columns, ...).', 'cozy-addons' ); ?></p>
				</div>
				<div class="cozy-block-toggle">
					<label class="switch">
						<?php
						$checked = get_option( 'ca--utility--styles' );
						?>
						<input type="checkbox" class="ca__utility-function" name="styles" id="cozy-addons--utility--styles" <?php echo '1' === $checked || '' == $checked ? 'checked' : ''; ?>>
						<span class="cozy-toggle-slider round"></span>
					</label>
				</div>
			</li>
		</ul>
	
		<?php
	}
	?>
	
	<!-- Version Rollback -->
	<h2 class="mt-34"><?php esc_html_e( 'Version Control', 'cozy-addons' ); ?></h2>
	<div class="element-holder">
		<p class="rollback-desc">
			<?php
			printf(
				/* translators: %s: Plugin version */
				esc_html__( 'Experiencing an issue with Cozy Blocks version %1$s? Rollback to a previous version before the issue appeared.', 'cozy-addons' ),
				esc_html( COZY_ADDONS_VERSION )
			);

			$current_version = COZY_ADDONS_VERSION;

			$nonce         = wp_create_nonce( 'cozy_addons_rollback_action' );
			$rollback_path = "admin-post.php?action=cozy_addons_rollback&version={$current_version}&_wpnonce={$nonce}";
			$url           = get_admin_url( null, $rollback_path );
			?>
		</p>
	
		<span class="rollback-label"><strong><?php esc_html_e( 'Rollback Version ', 'cozy-addons' ); ?></strong></span>
		<select class="cozy-addons-rollback-version">
			<?php
			$cozy_addons_versions = cozy_addons_get_plugin_versions();

			foreach ( $cozy_addons_versions as $key => $version_info ) {
				if ( version_compare( $version_info['version'], '2.0.0', '<' ) ) {
					break;
				}

				$selected = 0 === $key ? ' selected' : '';
				echo '<option value="' . esc_attr( $version_info['version'] ) . '"' . esc_attr( $selected ) . '>' . esc_attr( $version_info['version'] ) . '</option>';
			}
			?>
		</select>
		<a id="cozy-addons-rollback-btn" class="button" href="<?php echo esc_url( $url ); ?>"><?php esc_html_e( 'Perform Rollback', 'cozy-addons' ); ?></a>
	</div>
</div>