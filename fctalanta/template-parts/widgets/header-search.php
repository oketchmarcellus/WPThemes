<?php
/*
=================================
    header Widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'header_search' ) ) { ?>
			<?php dynamic_sidebar( 'header_search' ); ?>
	<?php } ?>
</aside><!-- .widget-area1 -->
