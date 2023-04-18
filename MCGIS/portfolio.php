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
<body <?php body_class(); ?>>
 <div class="cover">
    <div class="container">
        <section>
            <h2 class="text-center"> Portfolio</h2>
            <hr class="small">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();?>
               <p class="text-faded"><?php the_content(); ?></p>
            <?php endwhile; ?>
          <?php endif;?>
        </section>
        <section id="portfolio" class="portfolio">
            <div class="row text-center">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 class="text-lowercase text-center">Gallery </h2>
                    <hr class="small">
                    <div class="row">
                        <?php
                            $images = get_post_meta($post->ID,'page_gallery_id',true); ?>
                            <?php foreach ($images as $image): ?>
                        <div class="col-md-6">
                            <div class="portfolio-item"><a href="#"><img class="img-responsive img-portfolio img-fluid" src="<?php echo wp_get_attachment_url($image);?>"></a>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>
    </div>
 </div>
    <aside class="call-to-action bg-primary text-white">
        <div class="aside text-center">
            <h3><?php  echo get_theme_mod('button_section_text'); ?></h3><a class="btn btn-lg btn-light" role="button" 
            href="<?php  echo get_theme_mod('section_button1_link'); ?>"><?php  echo get_theme_mod('section_button1_Text'); ?></a>
            <a class="btn btn-lg btn-dark" role="button" href="<?php  echo get_theme_mod('section_button2_link'); ?>">
            <?php  echo get_theme_mod('section_button2_Text'); ?></a></div>
    </aside>
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_option('map_API') ;?>"></iframe>
      <br/><small><?php bloginfo('name')?><a class="google-link" href="<?php echo get_option('map_url') ;?>">google maps</a></small></section>
    <?php get_footer(); ?>

