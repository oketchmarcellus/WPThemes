<?php
/*
*Template Name: single post Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage agridrive
* @since sept2017 1.0
*/
get_header(); 
?>
<!-- Banner Wrapper Start -->
 <?php if ( ( is_single() || is_archive() || ( is_page() && !agridrive_frontpage() ) )):
    get_template_part('template-parts/page-header-media');
endif; ?>
<?php $agridrive_options= template_data_setup();
      $current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );?>
<section class="news">
<?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  <div class="container">
    <h2 style="border-bottom: dashed 1px #a35719"><span><?php the_title();?></</span></h2>
    <?php  if(has_post_thumbnail()){?>
      <div class="row" style="margin-bottom:12px; background:#FFFFFF;">
      <div class="thumbnail">
        <div class="col-sm-7 col-md-8">
          <div class="news-img">
            <img class="img-responsive" alt="Agridrive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
          </div> 
        <div class="caption">
        <h3><a href="blog-1.php"><?php the_title();?></a></h3> 
        <p style="text-align:justify; color:#666666;"><?php echo get_the_content(); ?></p> 
        </div>
        </div>
      </div>
      <div class="col-sm-5 col-md-4">
      <?php get_sidebar(); ?>
      </div>
      </div>
      <?php }else {?>
      <div class="row" style="margin-bottom:12px; background:#FFFFFF;">
      <div class="thumbnail">
        <div class="col-sm-7 col-md-8">
          <div class="caption">
            <h3><a href="blog-1.php"><?php the_title();?></a></h3> 
            <p style="text-align:justify; color:#666666;"><?php echo get_the_content(); ?></p> 
          </div>
        </div>
      </div>
      <div class="col-sm-5 col-md-4">
      <?php get_sidebar(); ?>
    </div>
      </div>
    <?php }?>
    <div class="container">
          <div class="col-xs-6 col-sm-6">
            <?php previous_post_link('%link','<span class="fa fa-long-arrow-left" aria-hidden="true">Previous Post</span>',true);?>
          </div>
          <div class="col-xs-6 col-sm-6">
            <?php next_post_link('%link','<span class="fa fa-long-arrow-right" aria-hidden="true"> Next Post</span>',true);?>
          </div>
    </div>
    </div>
    <?php endwhile; ?>
  <?php endif;?>
</section>
<?php get_footer(); ?>