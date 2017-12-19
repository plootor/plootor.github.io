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
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/gallery.html">Gallery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Blog
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/blog.html">Blog 1</a>
            <a class="dropdown-item" href="/blog2.html">Blog 2</a>
            <a class="dropdown-item" href="/blog3.html">Blog 3</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/menu.html">Menu 1</a>
            <a class="dropdown-item" href="/menu2.html">Menu 2</a>
            <a class="dropdown-item" href="/menu3.html">Menu 3</a>
            <a class="dropdown-item" href="/menu4.html">Menu 4</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
            Events
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/event.html">Events 1</a>
            <a class="dropdown-item" href="/event2.html">Events 2</a>
            <a class="dropdown-item" href="/event3.html">Events 3</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
            Team
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/team.html">Team 1</a>
            <a class="dropdown-item" href="/team2.html">Team 2</a>
            <a class="dropdown-item" href="/team3.html">Team 3</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Page Header -->
<header class="masthead">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item carusel1"></div>
      <div class="carousel-item carusel2"></div>
      <div class="carousel-item carusel3"></div>
      <div class="carousel-item carusel4 active"></div>
    </div>
  </div>
  <div class="text-container">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome to</div>
        <div class="intro-heading">Alexander</div>
        <div class="intro-subheading">Madrid</div>
      </div>
    </div>
  </div>
</header>