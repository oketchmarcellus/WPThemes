<?php
/*
*Template Name: PageTemplate
* @link http://adroit-themes.net
* @package WordPress
* @subpackage agridrive
* @since sept2017 1.0
*/
get_header(); ?>
<!-- Banner Wrapper Start -->
<?php if ( ( is_single() || ( is_page() && !agridrive_frontpage() ) )):
    get_template_part('template-parts/page-header-media');
endif; ?>
<!-- Inner Banner Wrapper End --> 
<!-- Inner Wrapper Start -->
<div class="inner-wrapper">
<div class="container">
<?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  <hr style="border-bottom: dashed 1px #a35719">
      <div class="row">
          <?php if(has_post_thumbnail()){?>
            <div class="col-sm-12 col-md-4">
              <div class="img-border">
                <div class="tes-img"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="Agridrive Ltd">
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <?php echo get_the_content(); ?>
            </div>
          <?php }else {?>
              <div class="col-sm-12 col-md-12">
              <?php echo get_the_content(); ?>
            </div>
          <?php }?>
      </div>
      <?php endwhile;?>
    <?php endif;?> 
  </div>
</div>
<!-- Inner Wrapper End --> 
<?php get_template_part('template-parts/agridrive-team');?>
<?php get_template_part('template-parts/success-stories-slider');?>
<?php get_template_part('template-parts/gallery-section');?>
<?php get_template_part('template-parts/services-page-items');?>
<?php get_template_part('template-parts/about-us-accordion');?>
<?php get_template_part('template-parts/contact-us');?>
<?php get_footer(); ?>