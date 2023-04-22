<?php $image_id = get_post_meta( $post->ID, '_custom_header_image_id', true );?>
<?php if ($image_id):?>
<!-- Breacrumb Area -->
<div class="header-breadcrumb-area" style="background-image: url('<?php echo wp_get_attachment_url( $image_id); ?>');"> 
  <div class="row">
    <?php if ( ( is_single() || ( is_page() ) )):?>
    <div class="col-xl-6 col-md-6">
        <div class="cr-breadcrumb" >
            <h1><?php the_title();?></h1> 
        </div>
    </div>
    <?php elseif (is_archive()):?>
      <div class="col-xl-6 col-md-6">
        <div class="cr-breadcrumb" >
            <h1>Archives</h1> 
        </div>
      </div>
    <?php endif;?>
  </div>
</div> 
<!--.// Breacrumb Area -->
<?php endif; ?>
