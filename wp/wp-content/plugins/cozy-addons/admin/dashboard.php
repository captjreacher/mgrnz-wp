<div class="ct-companion-dashboard">
	<div class="dashboard-container">
		<div class="ct-dashboard-nav">
			<div class="ct-branding">
				<div class="ca-plugin-icon"><img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/cozy-addons-icon.png' ); ?>" /></div>
				<div class="ct-tabs" id="ct-dashboard-tabs">
					<div class="ct-tab" data-index="0"><?php esc_html_e( 'Dashboard', 'cozy-addons' ); ?></div>

					<?php if ( cozy_addons_is_block_theme() ) { ?>
						<div class="ct-tab" data-index="1"><?php esc_html_e( 'Blocks', 'cozy-addons' ); ?></div>
					<?php } ?>

					<div class="ct-tab" data-index="<?php echo cozy_addons_is_block_theme() ? esc_attr( 2 ) : esc_attr( 1 ); ?>"><?php esc_html_e( 'Settings', 'cozy-addons' ); ?></div>

					<div class="ct-tab" data-index="<?php echo cozy_addons_is_block_theme() ? esc_attr( 3 ) : esc_attr( 2 ); ?>"><?php esc_html_e( 'Free VS Pro', 'cozy-addons' ); ?></div>
				</div>
			</div>
			<div class="ct-plugin-link">
				<?php
				$classes   = array();
				$classes[] = ! cozy_addons_premium_access() ? 'ca__primary-btn' : '';
				$classes[] = ! cozy_addons_premium_access() ? 'btn-large' : '';
				$classes[] = cozy_addons_premium_access() ? 'pro__crown' : '';
				?>
				<a class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>" href="<?php echo ! cozy_addons_premium_access() ? 'https://cozythemes.com/cozy-addons/' : '#'; ?>" target="<?php echo ! cozy_addons_premium_access() ? '_blank' : ''; ?>">
					<img src="<?php echo esc_url( COZY_ADDONS_PLUGIN_URL . 'admin/assets/img/crown.png' ); ?>" />
					<?php ! cozy_addons_premium_access() ? esc_html_e( 'Upgrade to Pro', 'cozy-addons' ) : ''; ?></a>
			</div>
		</div>
		<div class="tab-content" id="content1">
			<?php require_once COZY_ADDONS_PLUGIN_DIR . 'admin/pages/index.php'; ?>
		</div>

		<?php
		if ( cozy_addons_is_block_theme() ) :
			?>

			<div class="tab-content" id="content2">
				<?php require_once COZY_ADDONS_PLUGIN_DIR . 'admin/pages/blocks.php'; ?>
			</div>

		<?php endif; ?>

		<div class="tab-content" id="<?php echo cozy_addons_is_block_theme() ? esc_attr( 'content3' ) : esc_attr( 'content2' ); ?>">
			<?php require_once COZY_ADDONS_PLUGIN_DIR . 'admin/pages/settings.php'; ?>
		</div>

		<div class="tab-content" id="<?php echo cozy_addons_is_block_theme() ? esc_attr( 'content4' ) : esc_attr( 'content3' ); ?>">
			<?php require_once COZY_ADDONS_PLUGIN_DIR . 'admin/pages/features.php'; ?>
		</div>
	</div>
</div>
