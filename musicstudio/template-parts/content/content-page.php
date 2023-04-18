
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="col-md-12 posts-helper1">
        		<?php if ( has_post_thumbnail() ) {?>
                <div class="col-lg-6 col-md-6 featured-image"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"></div>
            <div class="page-content">
                <div>
                    <p><?php echo get_the_content(); ?></p>
                    <?php wp_link_pages(array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'  => '</div>',
			) ); ?>
                </div>
            </div>
        </div>
        </div>        
        <?php }else {?>
		<div class="heading-helper">		
		<?php the_title( '<h2 class="text-uppercase heading" id="welcome-heading">', '</h2>' ); ?>
		</div>
			<div class="container">
			<p><?php echo get_the_content(); ?></p>
			</div>		
		<?php wp_link_pages(array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) ); ?>
<?php }?>
</div>