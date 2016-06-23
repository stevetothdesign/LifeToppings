<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LifeToppings
 */

?>

	</div><!-- #content -->
</div><!--end row -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div style="margin-left:65px;" class="fb-like" data-href="https://www.facebook.com/lifetoppings" data-width="400" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			<div style="margin-top:0px;">
			<a class="blsdk-follow" href="https://www.bloglovin.com/blogs/lifetoppings-14058471" target="_blank" data-blsdk-type="button">Follow</a><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s);js.id = id;js.src = "https://widget.bloglovin.com/assets/widget/loader.js";fjs.parentNode.insertBefore(js, fjs);}(document, "script", "bloglovin-sdk"))</script>
			</div>
		
			
		
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lifetoppings' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lifetoppings' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( '%1$s by %2$s', 'lifetoppings' ), 'Design:', '<a href="http://stevetothdesign.com" rel="designer">Steve Toth Design</a>' ); ?>
			</div><!-- .site-info -->
			
		</div><!--end row-->
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
