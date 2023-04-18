<?php
/*
=================================
    Footer Widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'footer_widget2' ) ) { ?>
			<div class="location-txt footer-widget-2">
				<?php dynamic_sidebar( 'footer_widget2' ); ?>
			</div>
	<?php } ?>
</aside><!-- .widget-area2 -->
