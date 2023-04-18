<?php
/*
=================================
    Footer Widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'footer_widget3' ) ) { ?>
			<div class="address footer-widget-3">
				<?php dynamic_sidebar( 'footer_widget3' ); ?>
			</div>
	<?php } ?>
</aside><!-- .widget-area3 -->
