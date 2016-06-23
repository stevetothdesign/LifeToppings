<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LifeToppings
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		
		<div class="entry-feature-container">

			<div class="entry-feature-content">
				<div class="entry-meta">
					<?php lifetoppings_posted_on(); ?>
				</div><!-- .entry-meta -->
				<h2 class="entry-title"><?php the_title(); ?></h2>	

				<div class="entry-categories">
				<?php
				$category = get_the_category($post->ID);
				if($category[0]){
				echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
				}
				if($category[1]){
				echo '<a href="'.get_category_link($category[1]->term_id ).'">'.$category[1]->cat_name.'</a>';
				}
				if($category[2]){
				echo '<a href="'.get_category_link($category[2]->term_id ).'">'.$category[2]->cat_name.'</a>';
				}
				?>
			</div><!-- end .entry-categories-->
			</div><!--end .entry-feature-content-->
		</div><!-- end entry-feature-container-->
		
	</header><!-- .entry-header -->
	<?php endif; ?>
	
	<div class="entry-feature">
		<?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();} 
		?>
	</div><!-- end .entry-feature -->
	
	    <div class="post-images">
	        <?php bdw_get_images(); ?>
					<div class="clear"></div>
	    </div>
		
	
	<div class="entry-content">	
	<?php the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lifetoppings' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
	?>
		<div class="postSignature"></div>			
	</div><!--end entry-content-->
		
			
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lifetoppings' ),
			'after'  => '</div>',
		) );
	?>
	</div><!-- .entry-content -->
	<div class="clear"></div>
	<footer class="entry-footer">
		<?php lifetoppings_entry_footer(); ?>
		<!--
		<div class="postShare">
			<ul class="social-media-icons">
		  	<li>
		  		<h3>SHARE</h3>
		  	</li>
				<li>
	        <?php echo '<a href="' . get_permalink() . '?share=facebook&nb=1">'; ?>
	        <i class="fa fa-facebook"></i>
	        </a>
	      </li>
	      <li>
	        <?php echo '<a href="' . get_permalink() . '?share=twitter&nb=1" rel="bookmark">'; ?>
	        <i class="fa fa-twitter"></i>
	        </a>
	      </li>
	      <li>
	        <?php echo '<a href="' . get_permalink() . '?share=pinterest&nb=1">'; ?>
	       <i class="fa fa-pinterest"></i>
	        </a>
	      </li>
	      <li>
	        <?php echo '<a href="' . get_permalink() . '?share=tumblr&nb=1">'; ?>
	        <i class="fa fa-tumblr"></i>
	        </a>
	      </li>
			</ul> 
		</div>
		<!  end postShare-->	
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
