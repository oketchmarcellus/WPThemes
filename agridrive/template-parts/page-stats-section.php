<?php if (get_post_meta( get_the_ID(), 'agridrivestats_section_checkbox', true )):?>
<?php if($current_options['stats_section_enabled'] == true){ ?>
<section class="statistics">
	<div class="stats-img">
		<img class="img-responsive" src="<?php  echo get_theme_mod('statsbg_img_upload',get_template_directory_uri().'/images/homepage/STATISTICS-IMAGE.png'); ?>" width="100%" />
	</div>
</section>
<?php } ?>
<?php endif;?>
