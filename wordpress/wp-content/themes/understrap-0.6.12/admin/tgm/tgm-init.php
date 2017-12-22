<?php

/**
 * TGM Init Class
 */

include_once get_template_directory() . '/admin/tgm/class-tgm-plugin-activation.php';

function rocket_register_required_plugins() {

  $plugins = array(
    array(
      'name' 	   => 'Elementor Page Builder',
      'slug' 	   => 'elementor',
      'required' => true,
    ),
    array(
      'name' 	   => 'Void Elementor Post Grid Addon for Elementor Page builder',
      'slug' 	   => 'void-elementor-post-grid-addon-for-elementor-page-builder',
      'required' => true,
    ),    array(
      'name' 	   => 'Press Elements – Widgets for Elementor',
      'slug' 	   => 'press-elements',
      'required' => true,
    ),
    array(
      'name' 		  => 'WooCommerce',
      'slug' 		  => 'woocommerce',
      'required' 	=> false,
    ),
//    array(
//      'name'      => 'Visual Composer',
//      'slug'      => 'js_composer',
//      'source'    => get_template_directory() . '/inc/plugins/js_composer.zip',
//      'required'  => true,
//      'version'   => '5.0.1'
//    ),
//    array(
//      'name'      => 'Slider Revolution',
//      'slug'      => 'revslider',
//      'source'    => get_template_directory() . '/inc/plugins/revslider.zip',
//      'required'  => true,
//      'version'   => '5.3.0.2'
//    ),
//    array(
//      'name'      => 'Visual Composer Maced Google Maps',
//      'slug'      => 'visual-composer-maced-google-maps',
//      'source'    => 'https://github.com/danfisher85/visual-composer-maced-google-maps/archive/v1.2.7.zip',
//      'required'  => true,
//      'version'   => '1.2.7'
//    ),
//    array(
//      'name'         => 'Envato Market',
//      'slug'         => 'envato-market',
//      'required'     => false,
//      'source'       => 'https://github.com/envato/wp-envato-market/archive/master.zip',
//      'external_url' => 'https://github.com/envato/wp-envato-market',
//      'version'      => '1.0.0-RC2'
//    ),
  );

  $config = array(
    'id'           => 'mille-fiori',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => true,                    // Automatically activate plugins after installation or not.
    'message'      => '',				   	          // Automatically activate plugins after installation or not
  );

  tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'rocket_register_required_plugins' );