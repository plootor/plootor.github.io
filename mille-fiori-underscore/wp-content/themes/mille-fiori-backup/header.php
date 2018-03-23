<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mille-fiori
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,600,700%7CPlayfair+Display:400i,700,700i"
				rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>

<header>
	<nav id="mainNav" class="navbar navbar-expand-md navbar-light fixed-top affix-top">
		<div class="container">
			<div class="row">
				<div class="col">
					<button class="navbar-toggler navbar-toggler-right" type="button"
									data-toggle="collapse" data-target="#navbarNavDropdown"
									aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="nav-container">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'nav_left',
								'container_class' => 'collapse navbar-collapse',
								'menu_class'      => 'navbar-nav',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
						<div class="logo-section">
							<a class="navbar-brand page-scroll" href="/">
								<img class="img-responsive img-centered"
										 src="<?php echo theme_get_option( 'millefiori_header_logo', get_template_directory_uri() . '/img/logo1.png' ); ?>"
										 alt="logo">
							</a>
						</div>
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'nav_right',
								'container_class' => 'collapse navbar-collapse',
								'menu_class'      => 'navbar-nav',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div>
				</div>
			</div>
	</nav>
	<?php /*
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="carousel-item item carusel1 active" <?php echo theme_get_option( 'millefiori_slide1_image' ) ?
				'style="background-image: url(' . theme_get_option( 'millefiori_slide1_image', '' ) . ')"' : ''; ?>></div>
			<div class="carousel-item item carusel2" <?php echo theme_get_option( 'millefiori_slide2_image' ) ?
				'style="background-image: url(' . theme_get_option( 'millefiori_slide2_image', '' ) . ')"' : ''; ?>></div>
			<div class="carousel-item item carusel3" <?php echo theme_get_option( 'millefiori_slide3_image' ) ?
				'style="background-image: url(' . theme_get_option( 'millefiori_slide3_image', '' ) . ')"' : ''; ?>></div>
			<div class="carousel-item item carusel4" <?php echo theme_get_option( 'millefiori_slide4_image' ) ?
				'style="background-image: url(' . theme_get_option( 'millefiori_slide4_image', '' ) . ')"' : ''; ?>></div>
		</div>
	</div> */ ?>
</header>

