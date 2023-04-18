<?php if (get_post_meta( get_the_ID(), 'agridriveabout_agridrive_accordion_checkbox', true )): ?>
<!-- Inner Wrapper Start -->
<div class="inner-wrapper">
  <div class="container">
    <?php $args = array('post_type' => 'Accordion_items', 'posts_per_page' => -1);
            $Accordion_items= new WP_Query( $args );
            $count = 0;
        if(  $Accordion_items->have_posts() ):?>
    <div class="classic-tab-panel">
      <ul class="nav nav-tabs ">
      <?php while ( $Accordion_items->have_posts() ) :  $Accordion_items->the_post();?>
        <li class="<?php echo ($i == 0) ? 'active' : ''; ?>"><a href="#<?php echo get_the_ID();?>" data-toggle="tab"><?php the_title();?></a> </li>
        <?php $i++; ?>
      <?php endwhile;?>
      </ul>
      <div class="tab-content">
        <?php while ( $Accordion_items->have_posts() ) :  $Accordion_items->the_post();?>
        <div class="tab-pane <?php echo ($count == 0) ? 'active' : ''; ?>" id="<?php echo get_the_ID();?>">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="img-border">
                <div class="tes-img"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="Agridrive Ltd"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <p><?php echo get_the_content();?></p>
            </div>
          </div>
        </div>
        <?php $count++; ?>
        <?php wp_reset_query(); ?>
        <?php endwhile;?>
      </div>
    </div>
    <?php endif;?>
  </div>
</div>
<!-- Inner Wrapper End -->
<?php endif;?>
<?php
/**
* Stats Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );

if($current_options['stats_section_enabled'] == true){ ?>
<section class="statistics">
  <div class="stats-img">
    <img class="img-responsive" src="<?php  echo get_theme_mod('statsbg_img_upload',get_template_directory_uri().'/images/homepage/STATISTICS-IMAGE.png'); ?>" width="100%" />
  </div>
</section>
<?php } ?>


