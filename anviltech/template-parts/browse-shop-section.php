<?php
$anviltech_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'anviltech_options', array() ), $anviltech_options );
if($current_options['browse_templates_section_enabled'] == true){ ?>
<section class="browse-shop">
	<div class="container">
		<div class="row">
			<?php 
                $mainpost = new WP_query('page_id='.get_theme_mod('anviltech_browse_site_post' ,true)); 
			while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
			<div class="col-md-12">
				<h2 class="text-center section-heading" id="browse-site"><?php  echo get_theme_mod('browse_site_title',__('Browse Our template Shop','anviltech' )); ?></h2>
                        <hr class="primary-hr">
			</div>
			<div class="col-lg-5 col-md-5">
				<p><?php echo get_the_excerpt(); ?></p>
                    <div class="browse-button-helper">
                        <a class="btn browse-button" role="button" href="all-temp.html" style="background-image: url('<?php echo esc_url($current_options['browse_button_bg']); ?>')"><?php echo esc_html($current_options['browse_button_text']) ;?></a>
                    </div>
			</div>
			<div class="col-lg-7 col-md-7"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"</div>
				<?php wp_reset_query();?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    </section>
<?php } ?>