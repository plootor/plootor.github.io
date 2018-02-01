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