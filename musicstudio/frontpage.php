<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * This is is the production construct of pages
 * and that other 'pages' on your production site may use be
 * different templates.
 * @package production
 */

get_header(); ?>

<div id="primary" class="content-area default_page">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content/content', 'front-page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		<?php if ( is_active_sidebar( 'right-sidebar' ) ) get_sidebar(); ?>
		</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();