<?php
/*
=================================
    header Widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'header_email' ) ) { ?>
			<div class="about header-email">
				<?php dynamic_sidebar( 'header_email' ); ?>
			</div>
	<?php } ?>
</aside><!-- .email widget -->
