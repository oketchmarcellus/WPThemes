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
 <?php if ( ( is_single() || ( is_page() && !agridrive_frontpage() ) )):
    get_template_part('template-parts/page-header-media');
endif; ?>
<?php $agridrive_options= template_data_setup();
      $current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );?>
<section class="news" style="background-image: url('<?php echo esc_url($current_options['latestnewsbg_img'])?>');">

<?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  <div class="container">
    <h2 style="border-bottom: dashed 1px #a35719"><span><?php the_title();?></</span></h2>
    <?php  if(has_post_thumbnail()){?>
      <div class="row" style="margin-bottom:12px; background:#FFFFFF;">
      <div class="thumbnail">
        <div class="col-md-3 col-sm-3" style="padding: 0px;">
          <div class="news-img">
            <img class="img-responsive" alt="Agridrive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
          </div> 
        </div>
      <div class="col-md-6 col-sm-5" style="padding-left: 0px; padding-right: 0px;">
        <div class="caption">
        <h3><a href="blog-1.php"><?php the_title();?></a></h3> 
        <p style="text-align:justify; color:#666666;"><?php echo get_the_content(); ?></p> 
        </div>
      </div>
      </div>
      <div class="col-md-3 col-sm-4" style="padding: 0px;">
      <?php get_sidebar(); ?>
      </div>
      </div>
      <?php }else {?>
      <div class="row" style="margin-bottom:12px; background:#FFFFFF;">
      <div class="thumbnail">
        <div class="col-md-9">
          <div class="caption">
            <h3><a href="blog-1.php"><?php the_title();?></a></h3> 
            <p style="text-align:justify; color:#666666;"><?php echo get_the_content(); ?></p> 
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4" style="padding: 0px;">
      <?php get_sidebar(); ?>
    </div>
      </div>
    <?php }?>
    </div>
    <?php endwhile; ?>
  <?php endif;?>
</div>
<?php get_footer(); ?>

</section>
<!-- Newsletter End -->
<?php get_footer(); ?>