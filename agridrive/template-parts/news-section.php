<?php
/**
* Latest news Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );

if($current_options['latest_news_section_enabled'] == true){ ?>
<section class="news" style="background-image: url('<?php echo esc_url($current_options['latestnewsbg_img'])?>');">
  <div class="container">
    <h2 id="news-heading" style="border-bottom: dashed 1px #a35719"><span><font color="#a35719">Latest </font>News</span></h2>
  <?php
    $cat_id = get_cat_ID('get_theme_mod("latestnews_category_posts",true)');
    $args = array(
    'cat' =>$cat_id,
    'post_type'=>'post',
    'posts_per_page'=>2,
    'post_status'=>'publish',
    'orderby'=>'date');
    $latest_news = new WP_Query( $args);
    if ( $latest_news->have_posts() ) :
      while ( $latest_news->have_posts() ) : $latest_news->the_post();?> 
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
        <p style="text-align:justify; color:#666666;"><?php the_excerpt(29,'content'); ?></p>
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
            <p style="text-align:justify; color:#666666;"><?php echo the_excerpt(29,'content'); ?></p>
            <a href="<?php echo esc_url(get_permalink());?>" class="readmore">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
          </div>
        </div>
      </div>
      </div>
    <?php }?>
    <?php endwhile; ?>
  <?php endif;?>
  </div>
  <div class="paginations">
    <?php wp_link_pages(array(
        'before' => '<p class="page-links">' . __( 'Pages:', 'agridrive' ),
        'after'  => '</p>',
        'nextpagelink'=>__('Next Page'),
        'previouspagelink'=>__('Previous Page'),
      ) ); ?>
  </div>
</section>
<?php } ?>