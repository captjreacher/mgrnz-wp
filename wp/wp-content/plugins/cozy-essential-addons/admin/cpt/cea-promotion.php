<?php
/**
* Custom Post Type for Promotions
* 
*/
if(!function_exists('cea_promotion_init')):
    function cea_promotion_init() {
        
        $args = array(
            'labels'    => array(
                'name'                  => _x( 'Promotions', 'Promotions', 'cozy-essential-addons' ),
                'singular_name'         => _x( 'Promotion', 'Promotion', 'cozy-essential-addons' ),
                'menu_name'             => _x( 'Promotions', 'Admin Menu text', 'cozy-essential-addons' ),
                'name_admin_bar'        => _x( 'Promotion', 'Add New on Toolbar', 'cozy-essential-addons' ),
                'add_new'               => __( 'Add New', 'cozy-essential-addons' ),
                'add_new_item'          => __( 'Add New Promotion', 'cozy-essential-addons' ),
                'new_item'              => __( 'New Promotion', 'cozy-essential-addons' ),
                'edit_item'             => __( 'Edit Promotion', 'cozy-essential-addons' ),
                'view_item'             => __( 'View Promotion', 'cozy-essential-addons' ),
                'all_items'             => __( 'All Promotions', 'cozy-essential-addons' ),
                'search_items'          => __( 'Search Promotion', 'cozy-essential-addons' ),
                'parent_item_colon'     => __( 'Parent Promotion:', 'cozy-essential-addons' ),
                'not_found'             => __( 'No Promotion found.', 'cozy-essential-addons' ),
            ),  
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'cea_promotion' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => 20,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-megaphone',
        );
        register_post_type( 'cea_promotion', $args );
    }
    add_action( 'init', 'cea_promotion_init' );
endif;

if(!function_exists('cea_promotion_taxonomy')):
    function cea_promotion_taxonomy() {
      register_taxonomy('cea_promotion_category',array('cea_promotion'), array(
        'hierarchical' => true,
        'labels' =>  array(
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
            'menu_name' => __( 'Promotion Categories','cozy-essential-addons' ),
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'cea_promotion_category' ),
        'show_in_rest'       => true
      ));
    } 
    add_action( 'init', 'cea_promotion_taxonomy', 30 );
endif;
    ?>