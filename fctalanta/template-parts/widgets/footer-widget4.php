<?php
/*
=================================
    Footer Widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'footer_widget4' ) ) { ?>
			<div class="address footer-widget-4">
				<?php dynamic_sidebar( 'footer_widget4' ); ?>
			</div>
	<?php } ?>
</aside><!-- .widget-area3 -->
