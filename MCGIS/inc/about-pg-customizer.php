<?php
/*
=================================
    Aboutpage Customizer
=================================
*/
 
function prodigi_aboutpg_register( $wp_customize ) {
// Panels ABout page content
	$wp_customize->add_section('about_section',array(
		'title' =>__('About Page','McGIS'),
	     'description' =>sprintf(__('ABout Page Content','McGIS')),
	     'panel' => 'aboutpage',
	     'priority' =>60,));

//About Content
	$wp_customize->add_setting('about_content',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer'
			
	));
	
	$wp_customize->add_control('about_content',array(
			'label'	=> __('Select Content','McGIS'),
			'section'	=> 'aboutpage',
			'setting'	=> 'about_content',
			'type' => 'dropdown-pages'
	));
}
?>