<!DOCTYPE html>
<html lang="en">
  <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title ><?php bloginfo('title'); ?></title>
  <head>
     <?php wp_head(); ?> 
</head>
	<body id="page-top" <?php body_class(); ?>>
    <!-- Navigation -->
    <?php get_template_part('template-parts/wpbootstrap-nav'); ?>
    <?php $image_id = get_post_meta( $post->ID, '_custom_header_image_id', true );?>
    <?php if ($image_id):?>
    <header id="custom-header" class="masthead" role="banner" style="background-image: url('<?php echo wp_get_attachment_url( $image_id); ?>');">
      <div class="header-content">
        <div class="header-content-inner">
          <hr>
          <p><?php echo get_theme_mod('header_subtitle') ;?></p>
        </div>
      </div>
    </header>
  <?php else: ?>
    <header class="masthead" role="banner" style="background-image: url('<?php header_image(); ?>');">
      <div class="video-wrapper"> 
          <?php if ( has_header_video()): ?>
          <?php get_template_part('template-parts/header-video'); ?>
          <?php endif;?>
        </div>
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading"><?php  echo get_theme_mod('main_header_title','prodigi'); ?></h1>
          <hr>
          <p><?php echo get_theme_mod('header_subtitle') ;?></p>
          <?php if( get_theme_mod('button_text')): ?>
          <a class="btn <?php echo get_option('button_font') ;?>btn-primary btn-xl js-scroll-trigger" href="#about">
          <?php echo get_theme_mod('button_text') ;?></a>
          <?php endif;?>
        </div>
      </div>
    </header>
  <?php endif; ?>