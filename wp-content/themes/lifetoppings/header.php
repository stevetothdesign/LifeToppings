<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LifeToppings
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" href="http://lifetoppings.com/wp-content/uploads/2015/04/appleIcon192x192.png" />
<link rel="apple-touch-icon" sizes="144x144" href="http://lifetoppings.com/wp-content/uploads/2015/04/appleIcon144x144_2.png" />
<link rel="apple-touch-icon" sizes="114x114" href="http://lifetoppings.com/wp-content/uploads/2015/04/appleIcon144x144_2.png" />
<link rel="apple-touch-icon" sizes="72x72" href="http://lifetoppings.com/wp-content/uploads/2015/04/appleIcon144x144_2.png" />
<link rel="apple-touch-icon" href="http://lifetoppings.com/wp-content/uploads/2015/04/appleIcon144x144_2.png" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />

<link rel="stylesheet" href="http://www.lifetoppings.com/wp-content/themes/lifetoppings/fonts/font-awesome.css" type="text/css" media="screen">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/classie.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/photoDirection.js" type="text/javascript" charset="utf-8"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://use.typekit.net/wtk7rtm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>

	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1580399292247927";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lifetoppings' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	<div class="row">	
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div id="site-logo"></div></a></h1>
			
			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'lifetoppings' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
		
		<div class="socialbuttons">
			<ul class="social-media-icons">
		  	<li>
	        <a href="https://www.facebook.com/lifetoppings">
	        <i class="fa fa-facebook"></i>
	        </a>
	      </li>
	      <li>
	        <a href="https://twitter.com/LifeToppings">
	        <i class="fa fa-twitter"></i>
	        </a>
	      </li>
	      <li>
	        <a href="https://instagram.com/beckyturcich">
	        <i class="fa fa-instagram"></i>
	        </a>
	      </li>
	      <li>
	        <a href="https://www.pinterest.com/turcich/">
	       <i class="fa fa-pinterest"></i>
	        </a>
	      </li>
	      <li>
	        <a href="http://rturcich.tumblr.com/">
	        <i class="fa fa-tumblr"></i>
	        </a>
	      </li>
	      <li>
	        <a href="https://www.bloglovin.com/blogs/lifetoppings-14058471">
	        <i class="fa fa-heart"></i>
	        </a>
	      </li>
			</ul> 
		</div><!-- .socialbuttons -->
		<div class="clear"></div>
	</div><!--end row-->
</header><!-- #masthead -->
	
<div class="row">
	<div id="content" class="site-content">
