<?php if (get_post_meta( get_the_ID(), 'agridrivecheckbox_success_stories', true )): ?>
<div class="inner-wrapper testimonials-wrapper">
  <div class="container">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="testimonials"> 
      <?php $args = array('post_type' => 'Success_stories', 'posts_per_page' => -1);
            $Success_stories= new WP_Query( $args );
            $count = 0;
        if(  $Success_stories->have_posts() ):?>
      <!-- Wrapper for slides --> 
      <div class="carousel-inner">
        <?php while ( $Success_stories->have_posts() ) :  $Success_stories->the_post();?>
        <div class="item slides <?php echo ($count == 0) ? 'active' : ''; ?>">
          <div class="slide-<?php echo $count; ?>">
            <div class="row">
              <div class="col-sm-4">
                <div class="img-border">
                  <div class="tes-img"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"></div>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="testimonials-content">
                  <?php echo the_content();?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php $count++; ?>
        <?php wp_reset_query(); ?>
        <?php endwhile;?>
        <?php endif;?>
      </div>
      <ol class="carousel-indicators"> 
        <?php $count = 0;
              if ($count == 0){?>
                  <li data-target="#testimonials" data-slide-to="<?php echo $count++; ?>" class="active"></li>
           <?php} else{?>
                    <li data-target="#testimonials" data-slide-to="<?php echo $count++; ?>"></li>
       <?php }?>
        </ol>
      <!-- Indicators -->
    </div>
  </div>
</div>
<?php endif;?>