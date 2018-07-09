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
<?php if (is_single()) {
	$header_image_url = get_the_post_thumbnail_url(null, 'big-featured-image');
} else {
	$header_image_url = theme_get_option( 'small_header_bg_image', 'http://third-generation-web.com/mille-fiori/img/bouquet-of-flowers-1149099_1920.jpg' );
}
?>
<header class="small-header single-header">
	<nav id="mainNav" class="navbar navbar-expand-md navbar-light fixed-top affix-top">
		<div class="container">
			<div class="row">
				<div class="col">
					<button class="navbar-toggler navbar-toggler-right" type="button">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="nav-container">
						<div class="logo-section">
							<a class="navbar-brand page-scroll" href="/">
								<img class="img-responsive img-centered"
										 src="<?php echo theme_get_option( 'millefiori_header_logo', get_template_directory_uri() . '/img/logo1.png' ); ?>"
										 alt="logo">
							</a>
						</div>
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'menu-1',
								'container_class' => 'collapse navbar-collapse',
								'menu_class'      => 'navbar-nav',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="<?php echo is_single() ? 'container' : ''; ?> small-header-image"
			 style="background-image: url('<?php echo $header_image_url; ?>');"></div>
	<?php $data = get_the_archive_title();
	if ( $data && strpos( $data, ":" ) ) {
		$title = substr( $data, strpos( $data, ":" ) + 2 );
	} elseif ( is_single() ) {
		$title = null;
	}
	if ( $title ): ?>
		<div class="text-container">
			<div class="container">
				<div class="intro-text">
					<div class="intro-heading"><?php echo $title; ?></div>
					<div class="intro-separator"></div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</header>
