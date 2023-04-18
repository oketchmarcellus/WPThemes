<?php
/*
Template Name: Portfolio Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2Press
* @since sept2017 1.0
*/
?>
<?php get_header(); ?>
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
  <?php endif;?>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><?php the_title();?></h2>
            <?php
                if ( have_posts() ) :
                while ( have_posts() ) : the_post();?>
            <hr class="light">
            <p class="text-faded"><?php echo get_the_content(); ?></p>
               <?php endwhile; ?>
            <?php endif;?>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>
    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
        	<?php
                $images = get_post_meta($post->ID,'vdw_gallery_id',true); ?>
                <?php foreach ($images as $image): ?>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="<?php echo wp_get_attachment_url($image);?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endforeach;?>
      </div>
    </section>

    <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>Free Download at Start Bootstrap!</h2>
        <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </div>
<?php get_footer(); ?>