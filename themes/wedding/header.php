<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="nav-down nav-top">
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
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div>
		</nav>
	</header>

<?php
//	if ( function_exists( 'hfe_render_header' ) ) {
//		hfe_render_header();
//	}
?>
