<?php
  
class MyWidget extends WP_Widget {
  function __construct() {
    parent::__construct(
      'my_widget',
      'My Widget',
      array(
        'description' => 'This widget shows a random number'
      )
    );
  }
  
  public function widget($args, $instance) {
    
    extract($args);
    echo $before_widget;
    
    echo $before_title;
    echo $instance['title'];
    echo $after_title;
    
    echo rand(0, 1000);
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