<?php
/**
* Voervadsbro.dk functions and definitions
*
* @package Voervadsbro.dk
*/

if ( ! function_exists( 'voervadsbro_setup' ) ) :
  function voervadsbro_setup() {
    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on twentyfifteen, use a find and replace
    * to change 'twentyfifteen' to the name of your theme in all the template files
    */
    load_theme_textdomain( 'voervadsbro', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support( 'title-tag' );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
      'primary' => __( 'Primary Menu',      'voervadsbro' ),
      'social'  => __( 'Social Links Menu', 'voervadsbro' ),
      ) );

      /*
      * Switch default core markup for search form, comment form, and comments
      * to output valid HTML5.
      */
      add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
      ) );

      /*
      * Enable support for Post Formats.
      *
      * See: https://codex.wordpress.org/Post_Formats
      */
      add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
      ) );

    }
  endif;
  add_action( 'after_setup_theme', 'voervadsbro_setup' );

  /**
  * Enqueue scripts and styles.
  */
  if ( ! function_exists( 'voervadsbro_scripts' ) ) :
    function voervadsbro_scripts() {
      wp_enqueue_style( 'voervadsbro-style', get_template_directory_uri() . '/style.css?v=' . time(), array(), null );
      wp_enqueue_script( 'voervadsbro-script', get_template_directory_uri() . '/js/voervadsbro.js?v=' . time(), array( 'jquery' ), '20150330', true );
    }
    add_action( 'wp_enqueue_scripts', 'voervadsbro_scripts' );
  endif;
