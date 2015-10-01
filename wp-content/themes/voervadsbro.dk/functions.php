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
      wp_enqueue_style( 'mainbg-style', get_template_directory_uri() . '/css/mainbg.css?v=' . time(), array(), null );
      wp_enqueue_style( 'effects-style', get_template_directory_uri() . '/css/effects.css?v=' . time(), array(), null );
      wp_enqueue_style( 'foundation-style', get_template_directory_uri() . '/css/foundation/foundation.css', array(), null );
      wp_enqueue_style( 'foundation-icons-style', get_template_directory_uri() . '/fonts/foundation/foundation-icons.css', array(), null );
      wp_enqueue_style( 'social-font-style', 'https://fonts.googleapis.com/css?family=Gloria+Hallelujah', array(), null );
      wp_enqueue_style( 'headerText-font-style', 'https://fonts.googleapis.com/css?family=Righteous', array(), null );
      wp_enqueue_style( 'bodyText-font-style','https://fonts.googleapis.com/css?family=Comfortaa', array(), null );
      wp_enqueue_style( 'vegas-css', get_template_directory_uri() . '/css/vegas.min.css', array(), null );
      wp_enqueue_style( 'cornermorph-css', get_template_directory_uri() . '/css/menu_cornermorph.css', array(), null );
      wp_enqueue_style( 'photoswipe-css', get_template_directory_uri() . '/js/photoswipe/photoswipe.css', array(), null );
      wp_enqueue_style( 'photoswipe-ui-css', get_template_directory_uri() . '/js/photoswipe/default-skin/default-skin.css', array(), null );

      wp_enqueue_script( 'photoswipe-script', get_template_directory_uri() . '/js/photoswipe/photoswipe.min.js', array( ), '4.1.0', false );
      wp_enqueue_script( 'photoswipe-ui-script', get_template_directory_uri() . '/js/photoswipe/photoswipe-ui-default.min.js', array( ), '4.1.0', false );
      wp_enqueue_script( 'masonry-script', get_template_directory_uri() . '/js/masonry.3.3.2.min.js', array('jquery'), '3.3.2', false );
      wp_enqueue_script( 'vegas-script', get_template_directory_uri() . '/js/vegas.min.js', array('jquery'), '2.1.3', true );
      wp_enqueue_script( 'classie-script', get_template_directory_uri() . '/js/classie.js', array(), '1.0.1', true );
      wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false );
      wp_enqueue_script( 'foundation-script', get_template_directory_uri() . '/js/foundation.min.js', array('jquery', 'modernizr-script'), '5', true );
      wp_enqueue_script( 'voervadsbro-script', get_template_directory_uri() . '/js/voervadsbro.js?v=' . time(), array( 'vegas-script', 'classie-script', 'foundation-script' ), '20150330', true );
    }
    add_action( 'wp_enqueue_scripts', 'voervadsbro_scripts' );
  endif;

  if ( ! function_exists( 'voervadsbro_excerpt' ) ) :
    function voervadsbro_excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      }
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }
  endif;

  if ( ! function_exists( 'VoervadsbroInfiniteScroll' ) ) :
    function VoervadsbroInfiniteScroll(){
      add_theme_support( 'infinite-scroll', array(
          'container' => 'infinite-container',
          'footer' => 'footer',
      ) );
    }
    add_action( 'after_setup_theme', 'VoervadsbroInfiniteScroll' );
  endif;

  require get_template_directory() . '/inc/VoervadsbroWalkerNav.php';
