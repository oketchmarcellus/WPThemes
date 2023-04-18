<?php
/*
Template Name: Home Page Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2Press
* @since sept2017 1.0
*/
get_header(); ?> 
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading" id="top-service-section"><?php  echo get_theme_mod('service_section_heading',__('Services Section','prodigi')); ?></h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box" id="column1">
              <i class="fa fa-4x fa-<?php echo sanitize_html_class(get_theme_mod('service_column1_icon',__( 'html5', 'prodigi' ))); ?> text-default sr-icons"></i>
              <h3><?php  echo get_theme_mod('service_subtitle1'); ?></h3>
              <p class="text-muted"><?php  echo get_theme_mod('service_column1_content_1'); ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box" id="column2">
              <i class="fa fa-4x fa-<?php echo sanitize_html_class(get_theme_mod('service_column2_icon',__( 'android', 'prodigi' ))); ?> text-default sr-icons"></i>
              <h3><?php  echo get_theme_mod('service_subtitle2'); ?></h3>
              <p class="text-muted"><?php  echo get_theme_mod('service_column2_content_2'); ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box" id="column3">
              <i class="fa fa-4x fa-<?php echo sanitize_html_class(get_theme_mod('service_column3_icon',__( 'wordpress', 'prodigi' ))); ?> text-default sr-icons"></i>
              <h3><?php  echo get_theme_mod('service_subtitle3'); ?></h3>
              <p class="text-muted"><?php  echo get_theme_mod('service_column3_content_3'); ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box" id="column4">
              <i class="fa fa-4x fa-<?php echo sanitize_html_class(get_theme_mod('service_column4_icon',__( 'joomla', 'prodigi' ))); ?> text-default sr-icons"></i>
              <h3><?php  echo get_theme_mod('service_subtitle4'); ?></h3>
              <p class="text-muted"><?php  echo get_theme_mod('service_column4_content_4'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php if( get_theme_mod('featured_home_post')): ?>
    <section class="bg-default">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <?php 
                 $mainpost = new WP_query('page_id='.get_theme_mod('featured_home_post' ,true)); 
                 while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                  <h2 class="section-heading text-white" id="featured-home"><?php echo get_theme_mod('home_content_heading',__( 'Featured Content', 'prodigi' ));?></h2>
                  <hr class="light">
                  <p class="text-faded" id="home"><?php echo get_the_content(); ?></p>
                 <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif;?>
     <div class="call-to-action bg-dark-default">
      <div class="container text-center">
        <h2><?php echo get_theme_mod('bg_dark_text',__( 'Get free Templates Now!', 'prodigi' )); ?></h2>
      </div>
    </div>
<?php get_footer(); ?>
