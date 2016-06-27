<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header__main-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row">
          <button class="js-open-drawer header__menu-toggle material-icons">menu</button>
          <div id="inner-header">
      			<a href="<?php echo home_url(); ?>" rel="nofollow">
              <h1 id="logo" itemscope itemtype="http://schema.org/Organization">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/main-logo.svg" />
              </h1>
            </a>

  					<div class="nav__drawer" role="drawer" itemscope itemtype="http://schema.org/SiteNavigationElement">
  						<div class="nav__drawer-wrapper" role="drawer__wrapper">
                <div class="nav__drawer-header" role="drawer__header">
                  <button class="js-close-drawer header__menu-toggle material-icons">close</button>
                  <div class="nav__drawer-links">
                    <a href="<?php echo home_url() . '/signup';?>" class="nav__drawer-header-link">Sign Up</a>
                  </div>
                </div><!--- .nav__drawer-header -->  
            
                  <?php wp_nav_menu(array(
      					    'container' => false,                           // remove nav container
      					    'container_class' => 'nav nav__drawer-menu',    // class of container (should you choose to use it)
      					    'menu' => __( 'The Main Menu', 'lttheme' ),     // nav name
      					    'menu_class' => 'nav__drawer-menu',             // adding custom nav class
      					    'theme_location' => 'main-nav',                 // where it's located in the theme
      					    'before' => '',                                 // before the menu
          			    'after' => '',                                  // after the menu
          			    'link_before' => '',                            // before each link
          			    'link_after' => '',                             // after each link
          			    'depth' => 0,                                   // limit the depth of the nav
      					    'fallback_cb' => ''                             // fallback function (if there is one)
  						    )); ?>
                  
              		<div id="socialbuttons">
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
  					   </div><!-- end .nav__drawer-wrapper -->
            </div><!-- end .nav__drawer -->
          
            <div class="desktop-nav">
              <?php wp_nav_menu(array(
  					    'container' => false,                           // remove nav container
  					    'container_class' => 'nav desktop-nav-menu',    // class of container (should you choose to use it)
  					    'menu' => __( 'The Main Menu', 'lttheme' ),     // nav name
  					    'menu_class' => 'desktop-nav-menu',             // adding custom nav class
  					    'theme_location' => 'main-nav',                 // where it's located in the theme
  					    'before' => '',                                 // before the menu
      			    'after' => '',                                  // after the menu
      			    'link_before' => '',                            // before each link
      			    'link_after' => '',                             // after each link
      			    'depth' => 0,                                   // limit the depth of the nav
  					    'fallback_cb' => ''                             // fallback function (if there is one)
  				    )); ?>
            </div><!-- end .desktop-nav -->
          
          
  				</div><!-- end .inner-header -->
        </div><!-- end row -->
			</header>

