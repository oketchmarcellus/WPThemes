<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Agridrive
 * @since 1.0
 * @version 1.0
 */

get_header(); 
get_template_part('template-parts/search-page-header-media');?>
<?php
	if ( have_posts() ) :
	/* Start the Loop */
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content/content-frontpage');
	endwhile; // End of the loop.

	else : ?>
<section class="news" style="background-image: url('<?php echo get_template_directory_uri()?>/images/Our-Latest-News-BG-IMAGE.JPG');">
  		<div class="container">
    	<h2 id="news-heading" style="border-bottom: dashed 1px #a35719"><span><?php _e( 'Nothing Found', 'twentyseventeen' ); ?><font color="#a35719"><?php the_title();?></h2>
		<h4><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></h4>
		</div>
</section>
<?php endif; ?>

<?php get_footer();
