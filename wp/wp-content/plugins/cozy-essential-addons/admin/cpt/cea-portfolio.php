<?php
/**
* Custom Post Type for Testimonials
* 
*/
if(!function_exists('cea_portfolio_init')):
    function cea_portfolio_init() {
        $labels = array(
            'name'                  => _x( 'Portfolios', 'Portfolio', 'cozy-essential-addons' ),
            'singular_name'         => _x( 'Portfolio', 'Portfolio', 'cozy-essential-addons' ),
            'menu_name'             => _x( 'Portfolios', 'Admin Menu text', 'cozy-essential-addons' ),
            'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'cozy-essential-addons' ),
            'add_new'               => __( 'Add New', 'cozy-essential-addons' ),
            'add_new_item'          => __( 'Add New Portfolio', 'cozy-essential-addons' ),
            'new_item'              => __( 'New Portfolio', 'cozy-essential-addons' ),
            'edit_item'             => __( 'Edit Portfolio', 'cozy-essential-addons' ),
            'view_item'             => __( 'View Portfolio', 'cozy-essential-addons' ),
            'all_items'             => __( 'All Portfolios', 'cozy-essential-addons' ),
            'search_items'          => __( 'Search Portfolios', 'cozy-essential-addons' ),
            'parent_item_colon'     => __( 'Parent Portfolios:', 'cozy-essential-addons' ),
            'not_found'             => __( 'No portfolio found.', 'cozy-essential-addons' ),
        );     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'cea_portfolio' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => 20,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-open-folder',
        );
        register_post_type( 'cea_portfolio', $args );
    }
    add_action( 'init', 'cea_portfolio_init' );
endif;

if(!function_exists('cea_portfolio_taxonomy')):
    function cea_portfolio_taxonomy() {
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
        'menu_name' => __( 'Portfolio Categories','cozy-essential-addons' ),
      );    
     
      register_taxonomy('cea_portfolio_category',array('cea_portfolio'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'cea_portfolio_category' ),
        'show_in_rest'       => true
      ));
    } 
    add_action( 'init', 'cea_portfolio_taxonomy', 30 );
endif;
    ?>