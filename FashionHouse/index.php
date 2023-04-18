
<?php
/*
Template Name: Home Page Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2PressMcGIS_main_section'
* @since sept2017 1.0
*/
get_header(); ?>
  <body id="page-top" <?php body_class(); ?>>
    <div class="announcement">
        <p class="text-uppercase text-center best-deal-txt">
        <?php  echo get_theme_mod('delivery_announcement_title',__('FREE DELIVERY AS FROM KSHS 5000','fashionHouse' )); ?></p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="contact">Call Us +<?php  echo get_theme_mod('Phone_details',__('254 709 000 000','fashionHouse' )); ?> | <?php  echo get_theme_mod('email_address',__('info@prodigi.co.ke','fashionHouse' )); ?></p>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12 menu">
            <?php get_template_part('template-parts/wpbootstrap-nav'); ?>
            </div>
         </div>
        <?php if( get_theme_mod('fashionHouse_featured_post')): ?>
        <div class="row featured">
            <div class="col-lg-6 col-md-5 col-sm-12 featured1">
            <?php 
                 $mainpost = new WP_query('page_id='.get_theme_mod('fashionHouse_featured_post' ,true)); 
                 while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                 <h2 class="text-uppercase text-center feat-text"><?php  echo get_theme_mod('featured_section_title',__('New season','fashionHouse' )); ?></h2>
                 <hr>
                 <h3 class="text-uppercase text-center"><?php  echo get_theme_mod('featured_section_sub-title',__('Collection 2017','fashionHouse' )); ?></h3>
                 <?php echo get_the_excerpt(); ?>
            <?php endwhile; ?>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-10 featured-img">
                 <img class="img-responsive top-brand" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="100%" height="420px"></div>
        </div>
        <?php endif;?>
        <div class="row qoute">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 quote"><img class="img-responsive slash-left" src="<?php bloginfo('template_url'); ?>/assets/img/slashleft.png"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 qoute-txt">
                <p class="text-center beauty-quote-txt"><?php  echo get_theme_mod('fashion_quote',__('Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat ','fashionHouse' )); ?></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class="img-responsive slash-right" src="<?php bloginfo('template_url'); ?>/assets/img/slashright.png"></div>
            <div class="col-lg-12 col-md-12 col-sm-11 col-xs-11 best-deal-msg">
                <h3 class="text-uppercase deals-heading"><?php  echo get_theme_mod('deal_title_text',__('deal of the week','fashionHouse' )); ?></h3><img src="<?php bloginfo('template_url'); ?>/assets/img/deal-blue.png" class="deals-img">
            </div>
        </div>
        <?php if( get_theme_mod('deal_of_the_week_post')): ?>
        <div class="row deals">
            <?php 
                 $mainpost = new WP_query('page_id='.get_theme_mod('deal_of_the_week_post' ,true)); 
                 while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
            <div class="col-lg-8 col-md-8 col-sm-12 best-deal">
                <h2 class="text-uppercase best-deal-txt"><?php  echo get_theme_mod('deal_content_heading',__('Multipurpose Jacket','fashionHouse' )); ?></h2>
                <p class="best-deal-txt"><?php echo get_the_excerpt(); ?></p>
                <?php endwhile; ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 best-deal"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="100%"></div>
        </div>
        <?php endif;?>
        <div class="row offers">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 off1"><img class="img-responsive offer-img" src="<?php echo esc_url( get_theme_mod( 'img_upload_one',get_template_directory_uri().'/assets/img/banner005.jpg')); ?>"><img class="img-responsive offer-img" src="<?php echo esc_url( get_theme_mod( 'img_upload_two',get_template_directory_uri().'/assets/img/fashion-template---for-sale-sections-1.png')); ?>"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 best-offer"><img class="img-responsive main-img" src="<?php echo esc_url( get_theme_mod( 'img_upload_three',get_template_directory_uri().'/assets/img/tumblr_ofbrlkNerq1udy1aoo1_500.jpg')); ?>" width="100%"></div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 off2"><img class="img-responsive offer-img" src="<?php echo esc_url( get_theme_mod( 'img_upload_four',get_template_directory_uri().'/assets/img/medium_banner--001.jpg')); ?>"><img class="img-responsive offer-img" src="<?php echo esc_url( get_theme_mod( 'img_upload_five',get_template_directory_uri().'/assets/img/fashion-template---for-sale-sections-2.png')); ?>"></div>
        </div>
        <div class="row new-arrivals">
            <div class="col-lg-3 col-md-3 col-sm-9 col-xs-12 arrivals1">
                <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_theme_mod( 'special_arrivals1_img',get_template_directory_uri().'/assets/img/mens-section-shoe1.png')); ?>" width="100%"></a>
                <h3 class="text-uppercase text-center best-deal-txt"><?php  echo get_theme_mod('special_arrivals1_heading',__('Nike','fashionHouse' )); ?></h3>
                <p class="text-center best-deal-txt"><?php  echo get_theme_mod('special_arrivals1_txt',__('Nullam id dolor id nibh ultricies','fashionHouse' )); ?></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 arrivals2">
                <div class="arrivals">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_theme_mod( 'arrivals1_img',get_template_directory_uri().'/assets/img/mens-section-fpr-shoe2.png')); ?>" width="100%" height="auto"></a>
                    <h3 class="text-uppercase text-center"><?php  echo get_theme_mod('arrivals1_heading',__('common projects','fashionHouse' )); ?></h3>
                    <p class="text-center"><?php  echo get_theme_mod('arrivals1_txt',__('Nullam id dolor id nibh','fashionHouse' )); ?></p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 arrivals2">
                <div class="arrivals">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_theme_mod( 'arrivals2_img',get_template_directory_uri().'/assets/img/mens-section-fpr-shoes3.png')); ?>" width="100%"></a>
                    <h3 class="text-uppercase text-center"><?php  echo get_theme_mod('arrivals2_heading',__('comme des carcons','fashionHouse' )); ?></h3>
                    <p class="text-center"><?php  echo get_theme_mod('arrivals2_txt',__('Nullam id dolor id nibh','fashionHouse' )); ?></p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 arrivals2">
                <div class="arrivals">
                    <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_theme_mod( 'arrivals2_img',get_template_directory_uri().'/assets/img/mens-section-fpr-shoe4.png')); ?>" width="100%" height="auto"></a>
                    <h3 class="text-uppercase text-center"><?php  echo get_theme_mod('arrivals3_heading',__('comme des carcons','fashionHouse' )); ?></h3>
                    <p class="text-center"><?php  echo get_theme_mod('arrivals2_txt',__('Nullam id dolor id nibh','fashionHouse' )); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-9 col-xs-12 arrivals3">
                <p class="text-center"><?php  echo get_theme_mod('special_arrivals2_txt',__('id dolor','fashionHouse' )); ?></p>
                <h2 class="text-uppercase text-center"><?php  echo get_theme_mod('special_arrivals2_txt',__('jacket','fashionHouse' )); ?></h2><img class="img-responsive arrivals3-img" src="<?php bloginfo('template_url'); ?>/assets/img/jacket-1.png" width="100%"></div>
        </div>
        <div class="row">
            <?php if( get_theme_mod('best_buy1')): ?>
            <div class="col-lg-5 col-md-5 col-sm-12 men-best-buy">
                <div class="box-it1">
                    <?php 
                        $mainpost = new WP_query('page_id='.get_theme_mod('best_buy1' ,true)); 
                        while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                    <a href="#"><img class="img-responsive best-buy-img1" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"></a>
                    <h3 class="text-uppercase text-center"><?php  echo get_theme_mod('best_buy1_heading',__('Dalmain','fashionHouse' )); ?></h3>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_theme_mod('best_buy2')): ?>
            <div class="col-lg-5 col-md-5 col-sm-12 men-best-buy2">
                <div class="box-it2">
                <?php 
                        $mainpost = new WP_query('page_id='.get_theme_mod('best_buy2' ,true)); 
                        while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                    <a href="#"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="100%" height="auto"></a>
                    <h3 class="text-uppercase text-center"><?php  echo get_theme_mod('best_buy2_heading',__('Fat Simons','fashionHouse' )); ?></h3>
                    <p class="text-center"><?php echo get_the_excerpt(); ?></p>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_theme_mod('announcement1_content')): ?>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 announcement1">
                <?php 
                        $mainpost = new WP_query('page_id='.get_theme_mod('announcement1_content' ,true)); 
                        while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                <h3 class="text-uppercase text-center best-deal-txt"><?php  echo get_theme_mod('announcement1_heading',__('Nixons','fashionHouse' )); ?></h3>
                <p class="best-deal-txt"><?php echo get_the_excerpt(); ?></p>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="row top-cat-heading">
            <div class="col-lg-3 col-md-2 col-sm-2 top-cat-grad1"></div>
            <div class="col-lg-6 col-md-8 col-sm-8 top-cat-text">
                <h3 class="text-center top-cat-txt">Beautiful, Awesome Clothing &amp; Accessories</h3></div>
            <div class="col-lg-3 col-md-2 col-sm-2 top-cat-grad2"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top-cat-col">
                <a href="#" class="top-cat"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_03.jpg" width="100%" height="auto"></a>
                <div class="caption">
                    <h3 class="text-center">Brand </h3></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top-cat-col2">
                <a href="#" class="top-cat"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_05.jpg" width="100%" height="auto"></a>
                <div class="caption">
                    <h3 class="text-center">The want List</h3></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top-cat-col2">
                <a href="#" class="top-cat"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_07.jpg" width="100%" height="auto"></a>
                <div class="caption">
                    <h3 class="text-center">Tops </h3></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top-cat-col3">
                <a href="#" class="top-cat"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_09.jpg" width="100%" height="auto"></a>
                <div class="caption">
                    <h3 class="text-center">Dresses</h3></div>
            </div>
        </div>
        <div class="row top-brand">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-2 col-md-2 top-brand-col1"><img src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_16.png"></div>
            <div class="col-lg-2 col-md-2 top-brand-col1"><img src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_16.png"></div>
            <div class="col-lg-2 col-md-2 top-brand-col1"><img src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_16.png"></div>
            <div class="col-lg-2 col-md-2 top-brand-col1"><img src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_16.png"></div>
            <div class="col-lg-2 col-md-2 top-brand-col1"><img src="<?php bloginfo('template_url'); ?>/assets/img/fashion-sections_16.png"></div>
            <div class="col-lg-1 col-md-1 col-sm-12"></div>
        </div>
    </div>
<?php get_footer(); ?>