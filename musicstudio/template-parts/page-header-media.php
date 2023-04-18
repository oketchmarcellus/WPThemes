<?php $image_id = get_post_meta( $post->ID, '_custom_header_image_id', true );?>
<?php if ($image_id):?>
<div class="mast-head2" style="background-image: url('<?php echo wp_get_attachment_url( $image_id); ?>');">
    <div class="mast-cover">
        <div class="page-title"><img class="img-responsive heading-icon" src="<?php echo get_template_directory_uri().'/assets/img/production-template---about-us-(about-us-icon)-2.png'?>">
        </div>
    </div>
</div>
<?php else: ?>
<div class="mast-head2" style="background-image: url('<?php echo get_template_directory_uri().'/assets/img/custom-header-bg.jpg'?>');">
    <div class="mast-cover">
        <div class="page-title"><img class="img-responsive heading-icon" src="<?php echo get_template_directory_uri().'/assets/img/production-template---about-us-(about-us-icon)-2.png'?>">
        </div>
    </div>
</div>
<?php endif; ?>