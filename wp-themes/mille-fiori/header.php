<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <style>
    /* base background color */
    body {
      background-color: <?php echo theme_get_option('pages_base_background_color', '#fff'); ?> !important;
    }

    /* base darker background color */
    section.darker {
      background-color: <?php echo theme_get_option('pages_darker_background_color', '#f5eef0'); ?> !important;
    }

    /* theme text color */
    #page-top, #page-top a, #page-top a:focus, #page-top a:active {
      color: <?php echo theme_get_option('pages_text_color_scheme', '#333'); ?>;
    }

    #page-top a:hover {
      outline: none;
      text-decoration: none;
      color: #b28d94;
    }

    /* theme headings text color */
    section .section-heading, #testimonials #carousel-reviews .testimonial-cell h6,
    .portfolio-modal .modal-content .modal-text-col h5,
    .portfolio-modal .modal-content .modal-text-col h2,
    #blogsection .blog-title {
      color: <?php echo theme_get_option('pages_heading_color_scheme', '#ebaca5'); ?> !important;
    }

    /* theme accent color */
    #team .team-image-cell .team-cell,
    #quote .quote-separator,
    #subscribe .input-group .form-control,
    #subscribe .input-group .input-group-btn .btn,
    .footer-block .address,
    #about .about-text .about-separator,
    figure.effect-layla figcaption::after,
    figure.effect-layla figcaption::before,
    .portfolio-modal .modal-content .modal-separator {
      border-color: <?php echo theme_get_option('pages_color_scheme', '#ebaca5'); ?> !important;
    }

    #quote blockquote .quote-footer, section h4.section-name .fa, #services .service-icon {
      color: <?php echo theme_get_option('pages_color_scheme', '#ebaca5'); ?> !important;
    }

    #portfolio .grid-item .portfolio-cell .portfolio-info,
    .footer-block .social-buttons li a:hover,
    .affix a.active {
      background-color: <?php echo theme_get_option('pages_color_scheme', '#ebaca5'); ?> !important;;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: <?php echo theme_get_option('pages_nav_color', '#000'); ?> !important;
    }
  </style>
  <?php wp_head(); ?>
</head>
<body id="page-top" <?php body_class(); ?>>
<!-- Header Content -->
<header class="small-header">
  <nav id="mainNav" class="navbar navbar-expand-md navbar-light fixed-top affix-top">
    <div class="container">
      <div class="logo-section">
        <a class="navbar-brand page-scroll" href="/">
          <img class="img-responsive img-centered"
               src="<?php echo theme_get_option( 'millefiori_header_logo', get_template_directory_uri() . '/img/logo1.png' ); ?>"
               alt="logo">
        </a>
      </div>
      <button class="navbar-toggler navbar-toggler-right" type="button"
              data-toggle="collapse" data-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php wp_nav_menu(
        array(
          'theme_location'  => 'primary',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navbarNavDropdown',
          'menu_class'      => 'navbar-nav',
          'fallback_cb'     => '',
          'menu_id'         => 'main-menu',
          'walker'          => new WP_Bootstrap_Navwalker(),
        )
      ); ?>

    </div>
  </nav>
  <div class="small-header-image"
       style="background-image: url('<?php echo theme_get_option( 'small_header_bg_image', '' ); ?>');"></div>
  <?php $data = get_the_archive_title();
  if ( $data && strpos( $data, ":" ) ) {
    $title = substr( $data, strpos( $data, ":" ) + 2 );
  } elseif ( is_single() ) {
    $title = get_the_title();
  }
  if ( $title ): ?>
    <div class="text-container">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading"><?php echo $title; ?></div>
          <div class="intro-separator"></div>
          <!--<a href="#about" class="page-scroll btn btn-xl">Explore</a>-->
        </div>
      </div>
    </div>
  <?php endif; ?>
</header>
