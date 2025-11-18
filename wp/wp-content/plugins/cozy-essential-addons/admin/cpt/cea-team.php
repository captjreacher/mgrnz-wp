<?php
/**
* Custom Post Type for Testimonials
* 
*/
if(!function_exists('cea_team_init')):
    function cea_team_init() {
        $labels = array(
            'name'                  => _x( 'Teams', 'Teams', 'cozy-essential-addons' ),
            'singular_name'         => _x( 'Team', 'Team', 'cozy-essential-addons' ),
            'menu_name'             => _x( 'Teams', 'Admin Menu text', 'cozy-essential-addons' ),
            'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'cozy-essential-addons' ),
            'add_new'               => __( 'Add New', 'cozy-essential-addons' ),
            'add_new_item'          => __( 'Add New Team', 'cozy-essential-addons' ),
            'new_item'              => __( 'New Team', 'cozy-essential-addons' ),
            'edit_item'             => __( 'Edit Team', 'cozy-essential-addons' ),
            'view_item'             => __( 'View Team', 'cozy-essential-addons' ),
            'all_items'             => __( 'All Teams', 'cozy-essential-addons' ),
            'search_items'          => __( 'Search Team', 'cozy-essential-addons' ),
            'parent_item_colon'     => __( 'Parent Team:', 'cozy-essential-addons' ),
            'not_found'             => __( 'No Team found.', 'cozy-essential-addons' ),
        );     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'cea_team' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => 20,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-groups',
        );
        register_post_type( 'cea_team', $args );
    }
    add_action( 'init', 'cea_team_init' );
endif;

if(!function_exists('cea_team_taxonomy')):
    function cea_team_taxonomy() {
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
        'menu_name' => __( 'Team Categories','cozy-essential-addons' ),
      );    
     
      register_taxonomy('cea_team_category',array('cea_team'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'cea_team_category' ),
        'show_in_rest'       => true
      ));
    } 
    add_action( 'init', 'cea_team_taxonomy', 30 );
endif;
    ?>