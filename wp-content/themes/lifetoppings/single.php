<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package LifeToppings
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			
			<?php
		  // Previous/next post navigation.
		     $next_post = get_next_post();
		     $previous_post = get_previous_post();
		     the_post_navigation( array(
		         'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'lifetoppings' ) . '</span> ' .
		             '<span class="screen-reader-text">' . __( 'Next post:', 'lifetoppings' ) . '</span> ' .
		             '<span class="post-title">%title</span>' . get_the_post_thumbnail($next_post->ID,'thumbnail'),
		         'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'lifetoppings' ) . '</span> ' .
		             '<span class="screen-reader-text">' . __( 'Previous post:', 'lifetoppings' ) . '</span> ' .
		             '<span class="post-title">%title</span>' . get_the_post_thumbnail($previous_post->ID,'thumbnail'),
		     ) );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
