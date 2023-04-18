<?php
/**
* Products Offer Section
*/ 
$anviltech_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'anviltech_options', array() ), $anviltech_options );
if($current_options['product_offer_section_enabled'] == true){ ?>
        <div class="row responsive-template">
            <?php 
                $mainpost = new WP_query('page_id='.get_theme_mod('product_offer_post' ,true)); 
                while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
            <div class="col-lg-12 col-md-12 mx-auto text-center">
                <h2 class="text-center section-heading"  id="offers"><?php echo esc_html($current_options['product_offer_title']); ?><?php echo get_theme_mod('product_offer_title') ;?></h2>
                <hr class="primary-hr">
            </div>
            <div class="col-md-12">
                <div class="responsive-templates">
                    <div class="col-lg-7 col-md-7"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="100%"></div>
                    <div class="col-lg-5 col-md-5 responsive-text">
                        <p><?php echo get_the_excerpt(); ?></p>
                        <a class="btn header-browse-button" role="button" href="all-temp.html" style="background-image: url('<?php echo esc_url($current_options['product_offer_button_bg']); ?>')"><?php echo esc_html($current_options['product_offer_button_text']) ;?></a>
                    </div>
                </div>
            </div>
            <?php wp_reset_query();?>
            <?php endwhile; ?>
        </div>
<?php } ?>
</div>
</section>