<?php

/*
--------------------------------
These are Custom widgets
--------------------------------
*/

class heading_only_widget extends WP_widget{
/*
This widgets add a single heading only
*/
public function __construct(){
	$widget_options=array(
		'classname'=>'heading_widget',
		'description'=>'This is a heading only widget'
		);
parent::__construct('heading_widget','Heading only widget',$widget_options);
	}

public function widget($args,$instance){
	$title=apply_filters('widget_title',$instance['title']);
	echo $args['before_widget'].$args['before_title'].$title.$args['after_title'];
	echo $args['after_widget'];
	}

public function form($instance){
	$title=!empty($instance['title']) ? $instance['title']:'';?>
	<p>
		<label for="<?php echo $this->get_field_id('title');?>">Title:</label>
		<input type="text" id="<?php echo $this->get_field_id('title');?>" name="get_field_name('title');?>" value="<?php echo esc_attr($title); ?>" />
	</p>
<?php }

public function update($new_instance,$old_instance){
	$instance=$old_instance;
	$instance['title']=strip_tags($new_instance['title']);
	return $instance;
	}
}