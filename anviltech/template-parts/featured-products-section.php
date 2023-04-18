<?php
    $anviltech_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'anviltech_options', array() ), $anviltech_options );
    if($current_options['featured_products_gallery_enabled'] == true){ ?>
    <section>
        <div class="container">
            <h2 class="text-center section-heading"><?php  echo get_theme_mod('featured_product_gallery_title',__('Our featured products','anviltech')); ?></h2>
            <hr class="primary-hr">
            <div class="row free-row">
                <?php if(get_theme_mod('img_upload_one')){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="shadow-box-it"><img class="img-responsive tag" src="<?php  echo esc_html($current_options['product_tag1']); ?>" width="100px">
                        <a href="#"><img class="img-responsive img-thumb" src="<?php  echo get_theme_mod('img_upload_one','anviltech'); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php  echo get_theme_mod('product1_title','anviltech'); ?></h4></div>
                </div>
                <?php }?>
                <?php if(get_theme_mod('img_upload_two')){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="shadow-box-it"><img class="img-responsive tag" src="<?php  echo esc_html($current_options['product_tag2']); ?>" width="100px">
                        <a href="#"><img class="img-responsive img-thumb" src="<?php  echo get_theme_mod('img_upload_two','anviltech'); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php  echo get_theme_mod('product2_title','anviltech'); ?></h4></div>
                </div>
                <?php }?>
                <?php if(get_theme_mod('img_upload_three')){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="shadow-box-it"><img class="img-responsive tag" src="<?php  echo esc_html($current_options['product_tag3']); ?>" width="100px">
                        <a href="#"><img class="img-responsive img-thumb" src="<?php  echo get_theme_mod('img_upload_three','anviltech'); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php  echo get_theme_mod('product3_title','anviltech'); ?></h4></div>
                </div>
                <?php }?>
                <?php if(get_theme_mod('img_upload_four')){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="shadow-box-it"><img class="img-responsive tag" src="<?php  echo esc_html($current_options['product_tag4']); ?>" width="100px">
                        <a href="#"><img class="img-responsive img-thumb" src="<?php  echo get_theme_mod('img_upload_four','anviltech'); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php  echo get_theme_mod('product4_title','anviltech'); ?></h4></div>
                </div>
                <?php }?>
            </div>
            <hr class="border-hr">
            <div class="row premiums-row">
                <?php if(get_theme_mod('img_upload_one_rw2')){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="shadow-box-it2"><img class="img-responsive tag2" src="
                    <?php  echo esc_html($current_options['first_product_tag_rw2']); ?>" width="100%">
                        <a href="#"><img class="img-responsive" src="<?php  echo get_theme_mod('img_upload_one_rw2','anviltech'); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php  echo get_theme_mod('rw2_product1_title','anviltech'); ?></h4></div>
                </div>
                <?php }?>
                <?php if(get_theme_mod('img_upload_two_rw2')){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="shadow-box-it2"><img class="img-responsive tag2" src="<?php  echo esc_html($current_options['second_product_tag_rw2']); ?>" width="100%">
                        <a href="#"><img class="img-responsive" src="<?php  echo get_theme_mod('img_upload_two_rw2','anviltech'); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php  echo get_theme_mod('rw2_product2_title','anviltech'); ?></h4></div>
                </div>
                <?php }?>
                <?php if(get_theme_mod('img_upload_three_rw2')){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="shadow-box-it2"><img class="img-responsive tag2" src="<?php  echo esc_html($current_options['third_product_tag_rw2']); ?>" width="100%">
                        <a href="#"><img class="img-responsive" src="<?php  echo get_theme_mod('img_upload_three_rw2','anviltech'); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php  echo get_theme_mod('rw2_product3_title','anviltech'); ?></h4></div>
                </div>
                <?php }?>
                <?php if(get_theme_mod('img_upload_four_rw2')){?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="shadow-box-it2"><img class="img-responsive tag2" src="<?php  echo esc_html($current_options['fourth_product_tag_rw2']); ?>" width="100%">
                        <a href="#"><img class="img-responsive" src="<?php  echo get_theme_mod('img_upload_four_rw2','anviltech'); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php  echo get_theme_mod('rw2_product4_title','anviltech'); ?></h4></div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <?php }?>