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
			<div class="address footer-widget-2">
				<?php dynamic_sidebar( 'footer_widget2' ); ?>
			</div>
	<?php }
	     if ( has_nav_menu( 'footer-nav' ) ) { ?>
            <?php
              wp_nav_menu( array(
                'menu_id'=>'foot',
                'theme_location' => 'footer-nav',
                'menu_class'     => 'footer-menu',
                'container'         => 'ul',
                'depth'          => 1,
                'link_before'    => '<i class="fa fa-angle-right hidden-xs"><span class="quick-menu">',
                'link_after'     => '</span></i>',
              ) );
            ?>
    <?php }?>
</aside><!-- .widget-area2 -->
