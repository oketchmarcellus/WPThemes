<?php if (get_post_meta( get_the_ID(), 'agridrivecheckbox_service_page_items', true )): ?>
  <div class="inner-services" style="background-image: url('<?php echo get_template_directory_uri()?>/images/pattern-bg.jpg');">
    <div class="container">
    <?php $args = array('post_type' => 'Service_items', 'posts_per_page' => -1);
            $Service_items= new WP_Query( $args );
        if(  $Service_items->have_posts() ):?>
      <div class="row">
      <?php while ( $Service_items->have_posts() ) :  $Service_items->the_post();?>
        <div class="col-sm-6 col-md-4">
          <div class="callouts">
            <div class="icon" style="width:60px;"> <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" / ></div>
            <div class="content">
              <h3><?php the_title();?></h3>
              <?php echo wp_trim_words( get_the_content(),'17');?>
            </div>
          </div>
        </div>
        <?php wp_reset_query(); ?>
        <?php endwhile;?>
        </div>
        <?php endif;?>
       </div>
    </div>
  </div>
<?php endif;?>