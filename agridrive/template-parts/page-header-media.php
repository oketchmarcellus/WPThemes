<?php $image_id = get_post_meta( $post->ID, '_custom_header_image_id', true );?>
<?php if ($image_id):?>
<!-- Inner Banner Wrapper Start -->
<div class="inner-banner about-banner" style="background-image: url('<?php echo wp_get_attachment_url( $image_id); ?>');">
  <div class="container">
    <h2><?php the_title();?></h2>
    <ul class="inner-breadcrumb">
      <?php get_agridrive_breadcrumb();?>
    </ul>
  </div>
</div>
<!-- Inner Banner Wrapper End --> 
<?php else: ?>
<!-- Inner Banner Wrapper Start -->
<div class="inner-banner about-banner" style="background-image: url('<?php echo get_template_directory_uri().'/images/about/about-header-bg.jpg'?>');">
  <div class="container">
    <h2><?php the_title();?></h2>
    <ul class="inner-breadcrumb">
     <?php get_agridrive_breadcrumb();?>
    </ul>
  </div>
</div>
<?php endif; ?>
