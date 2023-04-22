<?php
/*
*Template Name: Archives Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage agridrive
* @since sept2017 1.0
*/
get_header(); ?>
<!-- Banner Wrapper Start -->
<?php if ( ( is_single() || is_archive() || ( is_page() && !agridrive_frontpage() ) )):
    get_template_part('template-parts/page-header-media');
endif; ?>
<?php $agridrive_options= template_data_setup();
      $current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );?>
<section class="news" style="background-image: url('<?php echo esc_url($current_options['latestnewsbg_img'])?>');">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  <div class="container">
    <h2 id="news-heading" style="border-bottom: dashed 1px #a35719"><span><font color="#a35719"></font><?php the_title();?></span></h2>
      <?php if(has_post_thumbnail()){?>
      <div class="row" style="margin-bottom:12px; background:#FFFFFF;">
      <div class="thumbnail">
        <div class="col-md-4">
          <div class="news-img">
            <a class="hover-img" href="<?php echo esc_url(get_permalink());?>"> <img alt="Agridrive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
            <div class="hover-link"> 
            <div class="link"> <i class="fa fa-link" aria-hidden="true"></i> 
            </div> 
            </div>
            </a>
          </div> 
        </div>
      <div class="col-md-8">
        <div class="caption">
        <h3><a href="<?php echo esc_url(get_permalink());?>"><?php the_title();?></a></h3> 
        <p style="text-align:justify; color:#666666;"><?php echo get_the_content(); ?></p>
        <a href="<?php echo esc_url(get_permalink());?>" class="readmore">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
        </div>
      </div>
      </div>
      </div>
      <?php }else {?>
      <div class="row" style="margin-bottom:12px; background:#FFFFFF;">
      <div class="thumbnail">
        <div class="col-md-12">
          <div class="caption">
            <h3><a href="<?php echo esc_url(get_permalink());?>"><?php the_title();?></a></h3> 
            <p style="text-align:justify; color:#666666;"><?php echo get_the_content(); ?></p>
            <a href="<?php echo esc_url(get_permalink());?>" class="readmore">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
          </div>
        </div>
      </div>
      </div>
    <?php }?>
    <?php endwhile; ?>
  <?php endif;?> 
   <div class="row">
          <div class="col-xs-6 col-sm-6">
            <?php previous_post_link('<a><span class="fa fa-long-arrow-left" aria-hidden="true"></span> Previous Page</a>',true);?>
          </div>
          <div class="col-xs-6 col-sm-6">
            <?php next_post_link('<a><span class="fa fa-long-arrow-right" aria-hidden="true"></span> Next Page</a>',true);?>
          </div>
    </div>
</section>
<!-- Newsletter End -->
<?php get_footer(); ?>