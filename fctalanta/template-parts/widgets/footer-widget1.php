<?php
/*
=================================
    Footer Widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'footer_widget1' ) ) { ?>
			<div class="about footer-widget-1">
				<?php dynamic_sidebar( 'footer_widget1' ); ?>
			</div>
	<?php } ?>
</aside><!-- .widget-area1 -->
