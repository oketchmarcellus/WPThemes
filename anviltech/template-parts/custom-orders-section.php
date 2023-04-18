<section class="other-products">
<div class="container">
<?php
$anviltech_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'anviltech_options', array() ), $anviltech_options );
if($current_options['custom_order_section_enabled'] == true){ ?>    
        <div class="container why-us">
            <?php 
                $mainpost = new WP_query('page_id='.get_theme_mod('custom_order_site_post' ,true)); 
                while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-auto text-center">
                    <h2 class="text-center section-heading" id="customs"><?php echo esc_html($current_options['custom_order_title']); ?></h2>
                    <hr class="primary-hr">
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <p><?php echo get_the_excerpt(); ?></p>
                <div class="browse-button-helper">
                    <a class="btn browse-button" type="button" style="background-image: url('<?php echo esc_url($current_options['custom_order_button_bg']); ?>')"><?php echo esc_html($current_options['custom_order_button_text']) ;?></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"></div>
            <?php wp_reset_query();?>
            <?php endwhile; ?>
        </div>
<?php } ?>
 