<?php
$options = get_option( 'ct_custom_options_settings' );
/**
 *Initilize and includes custok post type for the plugin
 */

if ( isset( $options['portfolio_enabled'] ) ) {
	require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-portfolio.php';
}
if ( isset( $options['testimonial_enabled'] ) ) {
	require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-testimonial.php';
}
if ( isset( $options['team_enabled'] ) ) {
	require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-team.php';
}
if ( isset( $options['service_enabled'] ) ) {
	require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-service.php';
}
if ( isset( $options['faq_enabled'] ) ) {
	require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-faq.php';
}
if ( isset( $options['promotion_enabled'] ) ) {
	require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-promotion.php';
}
