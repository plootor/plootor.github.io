<?php
/**
 * wedding Theme Customizer
 *
 * @package wedding
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wedding_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	
	
	$wp_customize->add_section(
		'wedding_animation_options',
		array(
			'title' => __( 'Page Animation', '_s' ),
			'priority' => 30,
			'description' => __( 'This setting will allow you to enable/disable loading page animation(Disable when edit page with Elementor).', 'wedding' )
		)
	);

	$wp_customize->add_setting('wedding_container_type', array(
		'default' => 'disable',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wedding_container_type', array(
				'label' => __('Container Width', 'wedding'),
				'description' => __("Choose between Bootstrap's container and container-fluid", 'wedding'),
				'section' => 'wedding_animation_options',
				'settings' => 'wedding_container_type',
				'type' => 'select',
				'choices' => array(
					'enable' => __('Enable', 'wedding'),
					'disable' => __('Disable', 'wedding'),
				),
				'priority' => '10',
			)
		));



	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'wedding_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'wedding_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'wedding_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wedding_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wedding_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wedding_customize_preview_js() {
	wp_enqueue_script( 'wedding-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wedding_customize_preview_js' );
