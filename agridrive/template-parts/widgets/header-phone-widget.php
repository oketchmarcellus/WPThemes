<?php
/*
=================================
    header Widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'header_phone' ) ) { ?>
			<div class="about header-phone">
				<?php dynamic_sidebar( 'header_phone' ); ?>
			</div>
	<?php } ?>
</aside><!-- .email widget -->
