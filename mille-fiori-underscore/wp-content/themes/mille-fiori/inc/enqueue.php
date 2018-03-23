<?php

if ( ! function_exists( 'underscore_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function millefiori_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_script( 'underscore-viewport2', get_template_directory_uri() . '/js/vendor/jquery.viewportchecker.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'underscore-imageloaded', get_template_directory_uri() . '/js/vendor/imagesloaded.pkgd.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'underscore-masonry', get_template_directory_uri() . '/js/vendor/masonry.pkgd.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'underscore-custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
	}
}

add_action( 'wp_enqueue_scripts', 'millefiori_scripts' );
