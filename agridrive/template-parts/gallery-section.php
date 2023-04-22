
<!-- Inner Banner Wrapper End --> 
<!-- Inner Wrapper Start -->
<?php if (get_post_meta( get_the_ID(), 'agridrivegallery_checkbox', true )) { ?>
<div class="inner-wrapper projects-gallery">
  <div class="container">
    <div class="row">
    <div class="gal-container">
     <?php 	  $args = array('post_type' => 'Gallery_Items', 'posts_per_page' => 16);
     		  $count=0;
              $gallery_item= new WP_Query( $args ); ?>
              <?php  while ( $gallery_item->have_posts() ) :$gallery_item->the_post(); ?>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
          <div class="gal-list">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php echo $count;?>">
              <div class="zoom"> <i class="fa fa-search" aria-hidden="true"></i> </div>
              <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="Gallery Image"> </a>
              <div class="modal fade" id="myModal<?php echo $count;?>" tabindex="-1" role="dialog" data-modal="<?php echo $count;?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="Project Image"> </div>
				     <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-prev" data-modal="<?php echo --$count; ?>">Prev</button>
                      <button type="button" class="btn btn-default btn-next" data-modal="<?php echo ++$count; ?>">Next</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>	
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php wp_reset_query(); ?>
      	<?php $count++;?>
        <?php endwhile; ?>
        <?php ;?>
    </div>
    </div>
  </div>
</div>
<?php } ?>