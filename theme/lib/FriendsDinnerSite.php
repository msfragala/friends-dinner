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

  }

  /**
   * Define custom taxonomies
   */
  function register_taxonomies() {

  }
}
