<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
  /**
   * Load theme's JavaScript sources.
   */
  function understrap_scripts() {
    // Get the theme data.
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ), false );
    wp_register_script( 'jquery-slim', ( get_template_directory_uri() . '/js/jquery.min.js' ), true, '3.2.1' );
    wp_enqueue_script( 'jquery-slim' );
    wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true );

    wp_enqueue_script( 'mille-fiori-imagesloaded', get_stylesheet_directory_uri() . '/js/vendor/imagesloaded.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'mille-fiori-masonry', get_stylesheet_directory_uri() . '/js/vendor/masonry.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'mille-fiori-easing', get_stylesheet_directory_uri() . '/js/vendor/jquery/jquery.easing.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'mille-fiori-bootstrap-validation', get_stylesheet_directory_uri() . '/js/vendor/jqBootstrapValidation.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'mille-fiori-viewportchecker', get_stylesheet_directory_uri() . '/js/vendor/jquery/jquery.viewportchecker.js', array(), $the_theme->get( 'Version' ), true );
    if ( theme_get_option( 'millefiori_animation_status', 'on' ) == 'on' ) {
      wp_enqueue_script( 'mille-fiori-animation', get_stylesheet_directory_uri() . '/js/activate-animation.js', array(), $the_theme->get( 'Version' ), true );
    }
    wp_enqueue_script( 'mille-fiori-js', get_stylesheet_directory_uri() . '/js/mille-fiori.js', array(), $the_theme->get( 'Version' ), true );


    wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
