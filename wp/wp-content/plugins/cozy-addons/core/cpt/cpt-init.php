<?php

$ca_mega_menu_enabled         = get_option( 'ca-cpt--mega-menu-templates' );
$ca_portfolio_gallery_enabled = get_option( 'ca-cpt--portfolio-gallery-templates' );

if ( cozy_addons_premium_access() ) {
	if ( '1' === $ca_mega_menu_enabled || '' == $ca_mega_menu_enabled ) {
		require_once COZY_ADDONS_PLUGIN_DIR . 'core/cpt/ca-mega-menu.php';
		update_option( 'ca-cpt--mega-menu-templates', '1' );
	}

	if ( '1' === $ca_portfolio_gallery_enabled || '' == $ca_portfolio_gallery_enabled ) {
		require_once COZY_ADDONS_PLUGIN_DIR . 'core/cpt/ca-portfolio-gallery.php';
		update_option( 'ca-cpt--portfolio-gallery-templates', '1' );
	}
}
