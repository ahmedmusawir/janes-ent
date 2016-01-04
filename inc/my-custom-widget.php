<?php

class Featured_Widget extends WP_Widget
{
	function Featured_Widget() 
	{
		parent::WP_Widget(false, "Featured Deal Widget");
	}
 
	function update($new_instance, $old_instance) 
	{  
		return $new_instance;  
	}  
 
	function form($instance)
	{  
		$title = esc_attr($instance["title"]);  
		echo "<br />";
	}
 
	function widget($args, $instance) 
	{
		$widget_id = "widget_" . $args["widget_id"];
		// echo $widget_id;
/**
  *
  * Widget Variables
  *
  */
 	
?>	
<section  class="widget">		
	<?php //the_field("example_field", $widget_id ); ?>
	<?php //the_field("widget_button_text", $widget_id ); ?>
		
	<div class="exampleWidget">
	 
		<h2 class="widget-title"></h2>
		<h3><?php the_field( 'widget_title', $widget_id ); ?></h3>
		<h4><em>Location: <?php the_field( 'widget_location', $widget_id ); ?></em></h4>
		<img class="img-responsive img-circle" src="<?php the_field( 'widget_image', $widget_id ); ?>" alt="">
	 
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
		</p>
		<p class="text-center">
			<a class="btn btn-success" href="<?php the_field( 'widget_button_url', $widget_id ); ?>" title=""><?php the_field("widget_button_text", $widget_id ); ?></a>
		</p>
	 
	 
	</div>

</section>

<?php

	}
}
register_widget("Featured_Widget");