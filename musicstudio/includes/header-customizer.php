<?php
/*
=================================
    Header Titles Customizer
=================================
*/
function prodigi_header_subtitle_register( $wp_customize ) {
//Header Title
	$wp_customize->add_section('Header_section',array(
		'title' =>__('Header Button and Text','prodigi'),
	     'description' =>sprintf(__('Edit header Titles','prodigi')),
	     'priority' =>35,));
//Main Title
	$wp_customize->add_setting('main_header_title',array(
			'default'	=> __('A revolution in web and Mobile app development','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
			'priority' =>1,
	));
     $wp_customize->add_control('main_header_title',array(
			'label'	=> __('Main title ','prodigi'),
			'section'	=> 'Header_section',
			'setting'	=> 'main_header_title'
    ));
    //subtitle		
	$wp_customize->add_setting('header_subtitle',array(
			'default'	=> __('Join the revolution that will design and develop you a site that creates a supercharged impact!!...Go proDiGi!!We Design + Develop + Partner','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' =>'postMessage',
			'priority' =>2,
	));
     $wp_customize->add_control('header_subtitle',array(
			'label'	=> __('Subtitle ','prodigi'),
			'section'	=> 'Header_section',
			'setting'	=> 'header_subtitle',
    ));
    //Button text		
	$wp_customize->add_setting('button_text',array(
			'default'	=> __('Find out More','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
			'priority' =>3,
	));
     $wp_customize->add_control('button_text',array(
			'label'	=> __('Button Text ','prodigi'),
			'section'	=> 'Header_section',
			'setting'	=> 'button_text',
    ));

}
add_action('customize_register','prodigi_header_subtitle_register');
?>