<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="mast-head">
	<div class="container nav-wrapper">
		<?php get_template_part('template-parts/wpbootstrap-nav'); ?>
	</div>
<?php
	//If a front page
	if (is_front_page()){
		get_template_part('template-parts/front-page-header-media');
	}elseif ( ( is_single() || ( is_page()) || (is_home()))) {
	//If a regular post or page, and not the front page, show customized page header.
		get_template_part('template-parts/page-header-media');
	}
?>

</header>