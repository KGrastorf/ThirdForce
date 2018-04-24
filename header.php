<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Third_Force_Communication_and_Coaching
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700i,900|Playfair+Display+SC" rel="stylesheet">
   <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/logotab.ico">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Martel:300" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/thirdforcecommunications/"><img class="header-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/Logo Nav.png" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/thirdforcecommunications/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/thirdforcecommunications/courses/">Courses</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://localhost/thirdforcecommunications/coaching/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Coaching
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/thirdforcecommunications/lei-anna/">Lei Anna</a>
          <a class="dropdown-item" href="http://localhost/thirdforcecommunications/troy/">Troy</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/thirdforcecommunications/teamwork/">Teamwork</a>
      </li>
      <li class="nav-item right">
        <a class="nav-link" href="http://localhost/thirdforcecommunications/about/">About</a>
      </li>
      <li class="nav-item right">
        <a class="nav-link" href="http://localhost/thirdforcecommunications/media/">Media</a>
      </li>
      <li class="nav-item right">
        <a class="nav-link" href="http://localhost/thirdforcecommunications/testimonials/">Testimonials</a>
      </li>
      <li class="nav-item right">
        <a class="nav-link" href="http://localhost/thirdforcecommunications/form/">Work With Us</a>
      </li>
			<li class="nav-item right">
        <a class="nav-link" href="http://localhost/thirdforcecommunications/contact/">Contact</a>
      </li>
    </ul>


  </div>
</nav>
	<div id="content" class="site-content">
