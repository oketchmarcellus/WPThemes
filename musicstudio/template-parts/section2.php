<?php 
	$musicstudio_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'production_options', array() ),$musicstudio_options); 
if($current_options['section2_enabled'] == true) { ?>
<section class="divider-img" style="background-image: url('<?php echo get_theme_mod('divider_img_upload',get_template_directory_uri().'/assets/img/production-template-welcome-section.jpg')?>');">     
</section>
<?php } ?>