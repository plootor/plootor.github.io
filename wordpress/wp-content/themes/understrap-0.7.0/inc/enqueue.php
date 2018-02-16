<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if (!function_exists('understrap_scripts')) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts()
	{
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style('understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get('Version'), false);
		wp_enqueue_script('jquery');
		wp_enqueue_script('popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);
		wp_enqueue_script('understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get('Version'), true);
		wp_enqueue_script('understrap-custom', get_template_directory_uri() . '/js/custom.js', array(), $the_theme->get('Version'), true);
		if (is_page('gallery')) {
			wp_enqueue_script('jquery-viewportChecker', get_template_directory_uri() . '/js/jquery-plugins/jquery.viewportchecker.js', array(), $the_theme->get('Version'), true);
			wp_enqueue_script('alexander-animation', get_template_directory_uri() . '/js/activate-animation.js', array(), $the_theme->get('Version'), true);
		}

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action('wp_enqueue_scripts', 'understrap_scripts');
