<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load custom widgets.
 */
require get_template_directory() . '/inc/widgets-implementations.php';

/**
 * Load shortcodes.
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer-controls.php';
/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

require get_template_directory() . '/inc/social-sharing.php';

function theme_get_option( $option_name, $default_value = '' ) {
  $option_data = get_option( 'theme_options' );
  if ( isset( $option_data[ $option_name ] ) && $option_data[ $option_name ] != '' ) {
    return $option_data[ $option_name ];
  } elseif ( $default_value ) {
    return $default_value;
  } else {
    return false;
  }
}


if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'sidebar-thumb' );
  set_post_thumbnail_size( 360, 220, true ); // default Post Thumbnail dimensions
}

add_image_size( 'big-featured-image', 1050, 700, array( 'center', 'center' ) );


add_action( "wp_ajax_contact_send", "sendContactMail" );
add_action( "wp_ajax_nopriv_contact_send", "sendContactMail" );

function sendContactMail() {
  $name    = sanitize_text_field( $_POST["name"] );
  $email   = sanitize_email( $_POST["email"] );
  $subject = sanitize_text_field( $_POST["subject"] );
  $message = esc_textarea( $_POST["message"] );
  $headers = "From: $name <$email>" . "\r\n";
  $to      = get_option( 'admin_email' );

  $isSend = wp_mail( $to, $subject, $message, $headers );
  if ( $isSend ) {
    return true;
  }
  header( 'HTTP/1.0 404 Not Found' );
  exit;
}


add_action( "wp_ajax_newsletter_send", "sendSubscribeMail" );
add_action( "wp_ajax_nopriv_newsletter_send", "sendSubscribeMail" );

function sendSubscribeMail() {
  $email   = sanitize_email( $_POST["email"] );
  $headers = "From: <$email>" . "\r\n";
  $to      = get_option( 'admin_email' );
  $message = sprintf( __( 'You have a new subscription on your website from user:.', 'mille-fiori'), $email );
  $subject = __( 'Newsletter Submition', 'mille-fiori');
  $isSend  = wp_mail( $to, $subject, $message, $headers );
  if ( $isSend ) {
    return true;
  }
  header( 'HTTP/1.0 404 Not Found' );
  exit;
}

function my_menu_notitle( $menu ) {

  return $menu = preg_replace( '/ title="(.*?)"/', '', $menu );
}

add_filter( 'wp_nav_menu', 'my_menu_notitle' );

add_filter( 'wp_page_menu', 'my_menu_notitle' );

add_filter( 'wp_list_categories', 'my_menu_notitle' );

add_filter( 'wp_list_pages', 'my_menu_notitle' );
