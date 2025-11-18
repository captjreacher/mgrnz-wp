<?php

/**
 * Custom Post Type for Mega Menu
 */
if ( ! function_exists( 'ca_cpt_mega_menu_init' ) ) {
	/**
	 * Registering custom post type 'ca_mega_menu'.
	 *
	 * @return void
	 */
	function ca_cpt_mega_menu_init() {
		$args = array(
			'labels'             => array(
				'name'              => _x( 'Mega Menu Templates', 'Mega Menu Templates', 'cozy-addons' ),
				'singular_name'     => _x( 'Mega Menu Template', 'Mega Menu Template', 'cozy-addons' ),
				'menu_name'         => _x( 'Mega Menu Templates', 'Admin Menu Text', 'cozy-addons' ),
				'name_admin_bar'    => _x( 'Mega Menu Templates', 'Add New on Toolbar', 'cozy-addons' ),
				'add_new'           => __( 'Add New', 'cozy-addons' ),
				'add_new_item'      => __( 'Add New Template', 'cozy-addons' ),
				'new_item'          => __( 'New Template', 'cozy-addons' ),
				'edit_item'         => __( 'Edit Template', 'cozy-addons' ),
				'view_item'         => __( 'View Template', 'cozy-addons' ),
				'all_items'         => __( 'All Mega Menu Templates', 'cozy-addons' ),
				'search_items'      => __( 'Search Mega Menu Template', 'cozy-addons' ),
				'parent_item_colon' => __( 'Parent Mega Menu Template:', 'cozy-addons' ),
				'not_found'         => __( 'No Mega Menu Template found.', 'cozy-addons' ),
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'ca_mega_menu' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 20,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
			'show_in_rest'       => true,
			'menu_icon'          => 'dashicons-menu',
		);
		register_post_type( 'ca_mega_menu', $args );
	}

	add_action( 'init', 'ca_cpt_mega_menu_init' );

}
