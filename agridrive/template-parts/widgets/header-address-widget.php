<?php
/*
=================================
    header Widget Area
=================================
*/
?>

<aside class="widget-area" role="complementary">
	<?php
		if ( is_active_sidebar( 'header_address' ) ) { ?>
			<div class="about header-address">
				<?php dynamic_sidebar( 'header_address' ); ?>
			</div>
	<?php } ?>
</aside><!-- .widget-area1 -->
