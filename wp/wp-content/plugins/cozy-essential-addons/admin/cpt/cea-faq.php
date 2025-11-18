<?php
/**
* Custom Post Type for Testimonials
* 
*/
if(!function_exists('cea_faq_init')):
    function cea_faq_init() {
       
        $args = array(
            'labels'             => array(
            'name'                  => _x( 'Faqs', 'Faqs', 'cozy-essential-addons' ),
            'singular_name'         => _x( 'Faq', 'Faq', 'cozy-essential-addons' ),
            'menu_name'             => _x( 'Faqs', 'Admin Menu text', 'cozy-essential-addons' ),
            'name_admin_bar'        => _x( 'Faq', 'Add New on Toolbar', 'cozy-essential-addons' ),
            'add_new'               => __( 'Add New', 'cozy-essential-addons' ),
            'add_new_item'          => __( 'Add New Faq', 'cozy-essential-addons' ),
            'new_item'              => __( 'New Faq', 'cozy-essential-addons' ),
            'edit_item'             => __( 'Edit Faq', 'cozy-essential-addons' ),
            'view_item'             => __( 'View Faq', 'cozy-essential-addons' ),
            'all_items'             => __( 'All Faqs', 'cozy-essential-addons' ),
            'search_items'          => __( 'Search Faq', 'cozy-essential-addons' ),
            'parent_item_colon'     => __( 'Parent Faq:', 'cozy-essential-addons' ),
            'not_found'             => __( 'No Faq found.', 'cozy-essential-addons' ),
        ), 
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cea_faq' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true,
        'menu_icon'           => 'dashicons-format-chat',
    );
        register_post_type( 'cea_faq', $args );
    }
    add_action( 'init', 'cea_faq_init' );
endif;

if(!function_exists('cea_faq_taxonomy')):
    function cea_faq_taxonomy() {
      register_taxonomy('cea_faq_category',array('cea_faq'), array(
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
            'menu_name' => __( 'Faqs Categories','cozy-essential-addons' ),
        ),  
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'cea_faq_category' ),
        'show_in_rest'       => true
      ));
    } 
    add_action( 'init', 'cea_faq_taxonomy', 30 );
endif;
    ?>