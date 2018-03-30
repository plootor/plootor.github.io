<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package alexander
 */

$container = get_theme_mod('understrap_container_type');
?>
	<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700%7CPlayfair+Display:400,400i,700,700i"
					rel="stylesheet">

		<style>
			/* base background color */
			.footer, .footer a, footer .form-control, footer .form-control:focus {
				color: <?php echo theme_get_option('footer_color', '#cfccd4'); ?> !important;
				background-color: <?php echo theme_get_option('footer_background_color', '#cfccd4'); ?>;
			}

			footer .form-control::-webkit-input-placeholder {
				color: <?php echo theme_get_option('footer_color', '#cfccd4'); ?> !important;
			}

			footer .form-control::-moz-placeholder {
				color: <?php echo theme_get_option('footer_color', '#cfccd4'); ?> !important;
			}

			footer .form-control:-ms-input-placeholder {
				color: <?php echo theme_get_option('footer_color', '#cfccd4'); ?> !important;
			}

			.footer-separator, .sidebar-separator {
				border-color: <?php echo theme_get_option('pages_color_scheme', '#e5c07c'); ?>;
			}

			.common-button {
				background-color: <?php echo theme_get_option('pages_color_scheme', '#e5c07c'); ?>;
			}

			.navbar-light .navbar-nav .nav-link {
				color: <?php echo theme_get_option('pages_nav_color', '#fff'); ?> !important;
			}
		</style>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<header class="masthead">
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container relative" style="flex-direction: column;">
			<div class="logo-section">
			<?php the_custom_logo(); ?>
			</div>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
							data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
							aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navbarResponsive',
					'menu_id' => 'main-menu',
					'menu_class' => 'navbar-nav ml-auto',
					'fallback_cb' => '',
					'walker' => new understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
		</div>
	</nav>
</header>
