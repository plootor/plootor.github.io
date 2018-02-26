<?php

if (!function_exists('underscore_scripts')) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function underscore_scripts()
	{
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_script('underscore-imageloaded', get_template_directory_uri() . '/js/vendor/imagesloaded.pkgd.min.js', array(), $the_theme->get('Version'), true);
		wp_enqueue_script('underscore-masonry', get_template_directory_uri() . '/js/vendor/masonry.pkgd.min.js', array(), $the_theme->get('Version'), true);
		wp_enqueue_script('underscore-custom', get_template_directory_uri() . '/js/custom.js', array(), $the_theme->get('Version'), true);
	}
} // endif function_exists( 'understrap_scripts' ).

//add_action('wp_enqueue_scripts', 'underscore_scripts');
