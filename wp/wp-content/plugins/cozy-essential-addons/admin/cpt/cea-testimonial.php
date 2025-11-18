<?php

/**
 * Custom Post Type for Testimonials
 * 
 */

if (!function_exists('cea_testimonial_init')) :
  function cea_testimonial_init()
  {
    $labels = array(
      'name'                  => _x('Testimonials', 'Testimonials', 'cozy-essential-addons'),
      'singular_name'         => _x('Testimonial', 'Testimonial', 'cozy-essential-addons'),
      'menu_name'             => _x('Testimonials', 'Admin Menu text', 'cozy-essential-addons'),
      'name_admin_bar'        => _x('Testimonial', 'Add New on Toolbar', 'cozy-essential-addons'),
      'add_new'               => __('Add New', 'cozy-essential-addons'),
      'add_new_item'          => __('Add New Testimonial', 'cozy-essential-addons'),
      'new_item'              => __('New Testimonial', 'cozy-essential-addons'),
      'edit_item'             => __('Edit Testimonial', 'cozy-essential-addons'),
      'view_item'             => __('View Testimonial', 'cozy-essential-addons'),
      'all_items'             => __('All Testimonials', 'cozy-essential-addons'),
      'search_items'          => __('Search Testimonials', 'cozy-essential-addons'),
      'parent_item_colon'     => __('Parent Testimonials:', 'cozy-essential-addons'),
      'not_found'             => __('No Testimonial found.', 'cozy-essential-addons'),
    );
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'cea_testimonial'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => true,
      'menu_position'      => 20,
      'supports'           => array('title', 'editor', 'author', 'thumbnail'),
      'show_in_rest'       => true,
      'menu_icon'           => 'dashicons-testimonial',
    );
    register_post_type('cea_testimonial', $args);
  }
  add_action('init', 'cea_testimonial_init');
endif;

if (!function_exists('cea_testimonial_taxonomy')) :
  function cea_testimonial_taxonomy()
  {
    $labels = array(
      'name' => _x('Categories', 'cozy-essential-addons'),
      'singular_name' => _x('Category', 'cozy-essential-addons'),
      'search_items' =>  __('Search Categories', 'cozy-essential-addons'),
      'all_items' => __('All Categories', 'cozy-essential-addons'),
      'parent_item' => __('Parent Category', 'cozy-essential-addons'),
      'parent_item_colon' => __('Parent Category:', 'cozy-essential-addons'),
      'edit_item' => __('Edit Category', 'cozy-essential-addons'),
      'update_item' => __('Update Category', 'cozy-essential-addons'),
      'add_new_item' => __('Add New Category', 'cozy-essential-addons'),
      'new_item_name' => __('New Category', 'cozy-essential-addons'),
      'menu_name' => __('Testimonial Categories', 'cozy-essential-addons'),
    );

    register_taxonomy('cea_testimonial_category', array('cea_testimonial'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'cea_testimonial_category'),
      'show_in_rest'       => true
    ));
  }
  add_action('init', 'cea_testimonial_taxonomy', 30);
endif;
