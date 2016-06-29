<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

						<main id="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<div class="byline entry-meta vcard">
                    
                    <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago on '; ?>
                    
                    <?php printf( __( '', 'lttheme' ).' %1$s',
                    /* the time the post was published */
                    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                    ); ?>
									</div>

								</header>

								<section class="entry-content">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'lttheme' ), __( '<span>One</span> Comment', 'lttheme' ), __( '<span>%</span> Comments', 'lttheme' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('Filed under', 'lttheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'lttheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

									<?php lt_page_nav(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'lttheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'lttheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'lttheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
