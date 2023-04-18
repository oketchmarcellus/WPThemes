<?php
/*
*Template Name: IndexPage Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2Press
* @since sept2017 1.0
*/
get_header(); ?>
<section class="main-section">
<div class="heading-helper">		
	<?php the_title( '<h2 class="text-uppercase heading" id="welcome-heading">', '</h2>' ); ?>
</div>
<?php 	
	while(have_posts()):the_post();?>
		<div class="container">
			<p><?php echo get_the_content(); ?></p>
		</div>
	<?php endwhile;?>		
		<?php wp_link_pages(array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) ); ?>
		<div class="col-md-4">
			<div class="sidebar-section-right">
			<?php get_sidebar(); ?>
			</div>
		</div>
</section>
<?php get_footer(); ?>