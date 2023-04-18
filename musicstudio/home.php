<?php
/*
Template Name: Home Page Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2Press
* @since sept2017 1.0
*/
if(is_front_page()){
	get_header();
    get_template_part('template-parts/section1');
    get_template_part('template-parts/section2');
    get_template_part('template-parts/section3');
    get_template_part('template-parts/latest-news');
}elseif ( have_posts() ){
	get_header();
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content/content', 'front-page' );
	endwhile;
 }
 else{
 	get_header();
 	get_template_part( 'template-parts/content/content', 'none' );

 }
get_footer(); ?>