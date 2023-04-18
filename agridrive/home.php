<?php
/*
*Template Name: IndexPage Template
* @link http://adroit-themes.net
* @package WordPress
* @subpackage agridrive
* @since sept2018 1.0
*/
get_header();
if('page' == get_option('show_on_front')){
		 get_template_part('index');
	}else {
	get_template_part('template-parts/home-service-section');

	get_template_part('template-parts/why-choose-section');

	get_template_part('template-parts/stories-section');

	get_template_part('template-parts/stats-section');

	get_template_part('template-parts/news-section');

	get_template_part('template-parts/Network-section');

	get_template_part('template-parts/news-letter-section');
	}
get_footer(); ?>