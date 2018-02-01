<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

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
//require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/customizer/customizer.php';
require get_template_directory() . '/customizer/customizer-controls.php';

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

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/widgets-implementations.php';

require get_template_directory() . '/inc/elementor-widgets.php';

/**
 * Load TGMPA
 */
require_once get_template_directory() . '/admin/tgm/tgm-init.php';

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'sidebar-thumb' );
  set_post_thumbnail_size( 360, 220, true ); // default Post Thumbnail dimensions
}

add_image_size( 'big-featured-image', 1050, 700, array( 'center', 'center' ) );

add_image_size( 'tall-medium-image', 300, 400, array( 'center', 'center' ) );

add_image_size( 'square-image', 250, 250, array( 'center', 'center' ) );

function my_menu_notitle( $menu ) {
  return $menu = preg_replace( '/ title="(.*?)"/', '', $menu );
}

add_filter( 'wp_nav_menu', 'my_menu_notitle' );

add_filter( 'wp_page_menu', 'my_menu_notitle' );

add_filter( 'wp_list_categories', 'my_menu_notitle' );

add_filter( 'wp_list_pages', 'my_menu_notitle' );