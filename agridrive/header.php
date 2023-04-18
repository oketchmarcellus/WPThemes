<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Header Start -->
<!--header class="wow fadeInDown" data-offset-top="197" data-spy="affix"-->
<header class="wow fadeInDown" data-offset-top="197"> 
<!--// TopBaar //-->
<div class="kode-topbar hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6"  style="margin-top:7px;">  
                  <?php
                    wp_nav_menu( array(
                      'menu_id'              => 'social',
                      'theme_location'    => 'social-links',
                      'depth'             => 1,
                      'container'         => 'ul',
                      'menu_class'        => 'social-icons',
                    ));
                ?>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 pull-right">
				<?php
					get_template_part( 'template-parts/widgets/header-search' );
        		?> 		
			</div>
		</div>
	</div>
</div>
<?php get_template_part('template-parts/top-bar'); ?>
<!--// TopBaar //-->
<!-- Logo and Nav -->
<?php get_template_part('template-parts/wpbootstrap-nav'); ?>
<?php if ((is_front_page()) || (is_home())){
	get_template_part('template-parts/carousel');
} ?>

</header>
<!-- Header End -->
