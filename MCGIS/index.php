<?php
/*
Template Name: Home Page Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2Press
* @since sept2017 1.0
*/
?>
<?php get_header(); ?>
  <body id="page-top" <?php body_class(); ?>>
    <!--Site banner  - set the background image for the section in the line below -->
    <div>
       <img class="img-responsive" src="<?php echo get_theme_mod('McGIS_banner_image',get_template_directory_uri().'/img/banner2.png'); ?>" max-height="150px">
    </div>
    <?php get_template_part('template-parts/wpbootstrap-nav'); ?>
    <header id="top" class="header" >
        <div class="video-wrapper">
         <?php if(has_header_image()):?>
          <?php get_template_part('template-parts/header-image'); ?>
          <?php endif;?> 
         <?php if ( has_header_video()): ?>
         <?php get_template_part('template-parts/header-video'); ?>
         <?php endif;?>
          </div> 
         <img id="darkcover" class="header-img" src="<?php bloginfo('template_url'); ?>/img/transparent2.png"/>
         <div class="text-vertical-center">
                <?php  echo get_theme_mod('main_header_title','McGIS' ); ?>
                <h3 id="header-subtitle"><?php echo get_theme_mod('header_subtitle') ;?></h3>
                <a class="btn <?php echo get_option('button_font') ;?> btn-lg js-scroll-trigger" role="button" href="#" target="_blank"><?php echo get_theme_mod('button_text') ;?></a>
        </div>
    </header>
<div class="cover">
    <div class="container">
        <section>
           <?php if( get_theme_mod('McGIS_main_section')): ?>
            <?php 
                 $mainpost = new WP_query('page_id='.get_theme_mod('McGIS_main_section' ,true)); 
                 while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                 <h2 class="text-center"><?php  echo get_theme_mod('main_section_title',__('Perfect Theme For Your Next Project','McGIS' )); ?></h2>
                 <hr class="small">
                 <?php the_content(); ?>
            <?php endwhile; ?>
          <?php endif;?>
        </section>
        <section>
            <?php get_template_part('template-parts/servicesdisplay'); ?>
        </section>
        <section id="portfolio" class="portfolio">
            <div class="row text-center">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 class="text-lowercase text-center"><?php  echo get_theme_mod('sub_section_title'); ?></h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                          <?php if( get_theme_mod('McGIS_sub_section_content')): ?>
                            <?php 
                                $secondpost = new WP_query('page_id='.get_theme_mod('McGIS_sub_section_content' ,true)); 
                                while( $secondpost->have_posts() ) : $secondpost->the_post() ;?>
                                <?php the_content(); ?>
                                <?php endwhile; ?>
                            <?php endif;?>
                        </div>
                        <div class="col-md-6">
                                <?php get_template_part('template-parts/customizer-carousel'); ?>
                       </div>
                    </div>
               </div>
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