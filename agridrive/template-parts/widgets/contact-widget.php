<?php
/*
=================================
    Contact widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'contact_widget_area' ) ) { ?>
				<?php dynamic_sidebar( 'contact_widget_area' ); ?>
	<?php } ?>
</aside><!-- .email widget -->