<?php
/**
* Stats Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );

if($current_options['stats_section_enabled'] == true){ ?>
<section class="statistics">
	<div class="stats-img">
		<img class="img-responsive" src="<?php  echo get_theme_mod('statsbg_img_upload',get_template_directory_uri().'/images/homepage/STATISTICS-IMAGE.png'); ?>" width="100%" />
	</div>
</section>
<?php } ?>

