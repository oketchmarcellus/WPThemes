<?php 
    $musicstudio_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'production_options', array() ),$musicstudio_options); 
if($current_options['section1_enabled'] == true) { ?>			
    <section class="welcome">
        <div class="heading-helper" id="welcome-icon"><img class="img-responsive heading-icon" src="<?php echo get_theme_mod( 'welcome_post_icon',get_template_directory_uri().'/assets/img/production-template-icons-homepage-welcome.png'); ?>">
        <h2 class="text-uppercase heading" id="welcome-heading"><?php  echo get_theme_mod('welcome_post_heading',__('welcome','production')); ?></h2>
        </div>
        <div class="container">
            <?php 
    			$mainpost = new WP_query('page_id='.get_theme_mod('welcome_post' ,true));
    			while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
        		<p><?php echo get_the_content(); ?></p>
				<?php endwhile; ?>
		</div>
	</section>
<?php } ?>