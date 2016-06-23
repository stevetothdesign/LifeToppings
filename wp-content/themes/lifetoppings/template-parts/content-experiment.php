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
		<!-- use post thumbnail as background image -->
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0]; ?>
		<!-- use defualt if none is present -->
		<?php else :
		$image = get_bloginfo( 'stylesheet_directory') . '/img/default_cat_img.jpg'; ?>
		<?php endif; ?>
		
		<div class="entry-feature-container">
			<a href="<?php the_permalink();?>">
				<div class="entry-feature" style="background-image: url('<?php echo $image; ?>')" >
				</div><!-- end .entry-feature -->
			</a>
			<div class="entry-feature-content">
				<div class="entry-meta">
					<?php lifetoppings_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>	
				<div class="content-excerpt">
					<?php the_excerpt();?>
				</div><!-- end excerpt -->
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

	
</article><!-- #post-## -->
