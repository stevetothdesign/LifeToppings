<?php
/**
 * LifeToppings functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LifeToppings
 */

if ( ! function_exists( 'lifetoppings_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lifetoppings_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on LifeToppings, use a find and replace
	 * to change 'lifetoppings' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lifetoppings', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
	add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
	add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode
	add_image_size( 'album-grid', 225, 150, true );
	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'lifetoppings' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lifetoppings_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // lifetoppings_setup
add_action( 'after_setup_theme', 'lifetoppings_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lifetoppings_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lifetoppings_content_width', 640 );
}
add_action( 'after_setup_theme', 'lifetoppings_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lifetoppings_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lifetoppings' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lifetoppings_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lifetoppings_scripts() {
	wp_enqueue_style( 'lifetoppings-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lifetoppings-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'lifetoppings-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lifetoppings_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* function and action for wordpress functions.php file */
function myjQueryScript() {
	if( !is_admin() ) { /* only display if not in admin area */
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js' );
		wp_enqueue_script( 'jquery' );
		/* jquery.js file in local theme folder */
		wp_deregister_script( 'default' );
		wp_register_script( 'default', get_bloginfo('stylesheet_directory').'/js/photoDirection.js' );
		wp_enqueue_script( 'default' );
	}
}
add_action( 'wp_print_scripts', 'myjQueryScript' );


/**
 * Add Photographer Name and URL fields to media uploader
 *
 * @param $form_fields array, fields to include in attachment form
 * @param $post object, attachment record in database
 * @return $form_fields, modified form fields
 */
 
function be_attachment_field_credit( $form_fields, $post ) {
	$form_fields['be-photographer-name'] = array(
		'label' => 'Photographer Name',
		'input' => 'text',
		'value' => get_post_meta( $post->ID, 'be_photographer_name', true ),
		'helps' => 'If provided, photo credit will be displayed',
	);

	$form_fields['be-photographer-url'] = array(
		'label' => 'Photographer URL',
		'input' => 'text',
		'value' => get_post_meta( $post->ID, 'be_photographer_url', true ),
		'helps' => 'Add Photographer URL',
	);

	return $form_fields;
}

add_filter( 'attachment_fields_to_edit', 'be_attachment_field_credit', 10, 2 );

/**
 * Save values of Photographer Name and URL in media uploader
 *
 * @param $post array, the post data for database
 * @param $attachment array, attachment fields from $_POST form
 * @return $post array, modified post data
 */

function be_attachment_field_credit_save( $post, $attachment ) {
	if( isset( $attachment['be-photographer-name'] ) )
		update_post_meta( $post['ID'], 'be_photographer_name', $attachment['be-photographer-name'] );

	if( isset( $attachment['be-photographer-url'] ) )
update_post_meta( $post['ID'], 'be_photographer_url', esc_url( $attachment['be-photographer-url'] ) );

	return $post;
}

add_filter( 'attachment_fields_to_save', 'be_attachment_field_credit_save', 10, 2 );


// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the post</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//strip images from post wherever they were placed
    add_filter('the_content','wpi_image_content_filter',11);

    function wpi_image_content_filter($content){

    if (is_home() || is_single() || is_front_page()){
        $content = preg_replace("/<img[^>]+\>/i", "", $content);
    }

        return $content;
}


//Get all images from the post to put back at end of post.

function bdw_get_images() {
 
    // Get the post ID
    $iPostID = get_the_ID();
 
    // Get images for this post
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
 
    // If images exist for this page
    if($arrImages) {
 
        // Get array keys representing attached image numbers
        $arrKeys = array_keys($arrImages);
 
 				foreach ($arrKeys as $i) {
        // Build the <img> string
        echo '<a href="' . wp_get_attachment_url($i) . '">' .
        					'<img src="' . wp_get_attachment_url($i) . '" />' .
             '</a>';
			 }
    }
	}
?>