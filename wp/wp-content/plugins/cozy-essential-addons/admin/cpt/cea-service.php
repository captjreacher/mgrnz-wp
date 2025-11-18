<?php
/**
* Custom Post Type for Testimonials
* 
*/
if(!function_exists('cea_service_init')):
    function cea_service_init() {
        $labels = array(
            'name'                  => _x( 'Services', 'Services', 'cozy-essential-addons' ),
            'singular_name'         => _x( 'Service', 'Service', 'cozy-essential-addons' ),
            'menu_name'             => _x( 'Services', 'Admin Menu text', 'cozy-essential-addons' ),
            'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'cozy-essential-addons' ),
            'add_new'               => __( 'Add New', 'cozy-essential-addons' ),
            'add_new_item'          => __( 'Add New Service', 'cozy-essential-addons' ),
            'new_item'              => __( 'New Service', 'cozy-essential-addons' ),
            'edit_item'             => __( 'Edit Service', 'cozy-essential-addons' ),
            'view_item'             => __( 'View Service', 'cozy-essential-addons' ),
            'all_items'             => __( 'All Services', 'cozy-essential-addons' ),
            'search_items'          => __( 'Search Service', 'cozy-essential-addons' ),
            'parent_item_colon'     => __( 'Parent Service:', 'cozy-essential-addons' ),
            'not_found'             => __( 'No Service found.', 'cozy-essential-addons' ),
        );     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'cea_service' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => 20,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-admin-tools',
        );
        register_post_type( 'cea_service', $args );
    }
    add_action( 'init', 'cea_service_init' );
endif;

if(!function_exists('cea_service_taxonomy')):
    function cea_service_taxonomy() {
      $labels = array(
        'name' => _x( 'Categories', 'cozy-essential-addons' ),
        'singular_name' => _x( 'Category', 'cozy-essential-addons' ),
        'search_items' =>  __( 'Search Categories','cozy-essential-addons' ),
        'all_items' => __( 'All Categories', 'cozy-essential-addons' ),
        'parent_item' => __( 'Parent Category', 'cozy-essential-addons' ),
        'parent_item_colon' => __( 'Parent Category:', 'cozy-essential-addons' ),
        'edit_item' => __( 'Edit Category', 'cozy-essential-addons'), 
        'update_item' => __( 'Update Category','cozy-essential-addons' ),
        'add_new_item' => __( 'Add New Category','cozy-essential-addons' ),
        'new_item_name' => __( 'New Category','cozy-essential-addons'),
        'menu_name' => __( 'Service Categories','cozy-essential-addons' ),
      );    
     
      register_taxonomy('cea_service_category',array('cea_service'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'cea_service_category' ),
        'show_in_rest'       => true
      ));
    } 
    add_action( 'init', 'cea_service_taxonomy', 30 );
endif;
    ?>