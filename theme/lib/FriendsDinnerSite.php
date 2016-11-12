<?php

/**
 * FriendsDinnerSite
 * * extends Timber context
 * * extends Twig
 * * enqueues scripts
 * * registers post types
 * * registers taxonomies
 */
class FriendsDinnerSite {
  function __construct() {
    add_theme_support('post-formats');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_action('timber_context', array( $this, 'add_to_context' ));
    add_action('get_twig', array($this, 'add_to_twig'));
    add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
    add_action('init',array($this, 'register_post_types'));
    add_action('init',array($this, 'register_taxonomies'));
  }

  /**
   * Extend global context
   */
  function add_to_context($context) {
    return $context;
  }

  /**
   * Add custom filters, functions
   */
  function add_to_twig($twig) {
    return $twig;
  }

  /**
   * Enqueue scripts, stylesheets
   */
  function wp_enqueue_scripts() {

  }

  /**
   * Define custom post types
   */
  function register_post_types() {
    register_post_type('recipe', array(
      'labels' => array(
        'name' => 'Recipes',
        'singular_name' => 'Recipe',
        'menu_name' => 'Recipes',
        'name_admin_bar' => 'Recipe',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Recipe',
        'new_item' => 'New Recipe',
        'edit_item' => 'Edit Recipe',
        'view_item' => 'View Recipe',
        'all_items' => 'All Recipes',
        'search_items' => 'Search Recipes',
        'not_found' => 'No recipes found.',
        'not_found_in_trash' => 'No recipes found in Trash.'
      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => false,
      'rewrite' => array( 'slug' => 'recipes' ),
      'has_archive' => false,
      'exclude_from_search' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-carrot',
      'supports' => array('title', 'thumbnail')
    ));
  }

  /**
   * Define custom taxonomies
   */
  function register_taxonomies() {

  }
}
