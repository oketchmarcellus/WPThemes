<?php
/*
*Template Name: frontpage Template
* @link http://adroit-theme.net
* @package WordPress
* @subpackage agridrive
* @since sept2017 1.0
*/
get_header();?>
<!-- Banner Wrapper Start -->
  <?php // Show the selected frontpage content.
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content/content', 'front-page' );

  // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ){
          comments_template();
        }
    else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
      get_template_part( 'template-parts/content/content', 'none' ); 
    endwhile; // End of the loop.
    endif;?>
  <?php if ( is_active_sidebar( 'right-sidebar' ) ) get_sidebar(); ?>
<!-- Newsletter End -->
<?php get_footer(); ?>