<?php
/**
 * The Single Post content template file.
 *
 * @package prodigi
 */
get_header(); ?>
	<?php while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content/content', get_post_format() );
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	 ?>
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'prodigi' ), 'after'  => '</div>', ) ); ?>
	<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>