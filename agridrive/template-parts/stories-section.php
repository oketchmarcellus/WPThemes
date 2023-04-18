<?php
/**
* Stories Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );

if($current_options['success_stories_enabled'] == true){ ?>
<section class="success-stories">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 text-center" style="color: #FFFFFF;">
	  	<h3 id="success-heading" style="color:#c2c320;"><?php echo esc_html($current_options['success_stories_post_heading']);?></h3> 
		<p><?php echo esc_html($current_options['success_stories_intro']);?></p><br>
	  </div>
	</div><!--end row-->
	<div class="row">
      <div class="col-sm-4 col-md-4 text-center" style="color: #FFFFFF;">
	  	<a href="success-stories.php"><img src="<?php  echo get_theme_mod('success_stories_img_upload_one',get_template_directory_uri().'/images/homepage/Homepage-SUCCESS-STORIES-1.jpg'); ?>" /></a> <br><br>
		<p><?php echo esc_html($current_options['success_stories_upload1_title']);?></p>
	  </div>
	  <div class="col-sm-4 col-md-4 text-center" style="color: #FFFFFF;">
	  	<a href="success-stories.php"><img src="<?php  echo get_theme_mod('success_stories_img_upload_two',get_template_directory_uri().'/images/homepage/Homepage-SUCCESS-STORIES-2.jpg'); ?>" /></a><br><br>
		<p><?php echo esc_html($current_options['success_stories_upload2_title']);?></p>
	  </div>
	  <div class="col-sm-4 col-md-4 text-center" style="color: #FFFFFF;">
	  	<a href="success-stories.php"><img src="<?php  echo get_theme_mod('success_stories_img_upload_three',get_template_directory_uri().'/images/homepage/Homepage-SUCCESS-STORIES-3.jpg'); ?>" /></a><br><br>
		<p><?php echo esc_html($current_options['success_stories_upload3_title']);?></p>
	  </div> 
	 </div><!--end row-->
  </div><!--end container-->
</section>
<?php } ?>