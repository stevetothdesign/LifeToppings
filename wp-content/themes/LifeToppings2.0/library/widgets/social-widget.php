<?php
  
class SocialWidget extends WP_Widget {
  function __construct() {
    parent::__construct(
      'social_widget',
      'Social Media Widget',
      array(
        'description' => 'This widget shows the social media links'
      )
    );
  }
  
  public function widget($args, $instance) {
    
    extract($args);
    echo $before_widget;
    
    echo '
        <div class="social-widget">';
          echo $before_title;
          echo $instance['title'];
          echo $after_title;
      		echo '
            <div id="social-buttons">
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
        </div><!-- end .social-widget -->
    ';
    echo $after_widget;
  }
  
  public function form($instance) { ?>
    <p>
    <input type = "text"
      name = "<?php echo $this->get_field_name('title'); ?>"
      id = "<?php echo $this->get_field_id('title'); ?>" />
    </p>
    <?php }
  
}
  
?>