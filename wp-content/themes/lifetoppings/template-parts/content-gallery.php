<?php
/**
 * Template Name: LifeToppings Gallery
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LifeToppings
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				
				<?php

				$args = array(
				    'numberposts' => 1, // Using -1 loads all posts
				    'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
				    'order'=> 'ASC',
				    'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
				    'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
				    'post_status' => null,
				    'post_type' => 'attachment'
				);

				$images = get_children( $args );

				if($images){ ?>
				<div id="slider">
				    <?php foreach($images as $image){ ?>
				    <img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
				    <?php    } ?>
				</div>
				<?php } ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
