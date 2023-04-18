<?php
/*
Template Name: About Page Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2Press
* @since sept2017 1.0
*/
get_header(); ?>
	<section class="bg-default" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><?php the_title();?></h2>
            <?php
                if ( have_posts() ) :
                while ( have_posts() ) : the_post();?>
            <hr class="light">
            <p class="text-faded"><?php echo the_content(); ?>
            <?php endwhile; ?>
            <?php endif;?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
