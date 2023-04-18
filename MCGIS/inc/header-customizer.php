<?php
/*
=================================
    Header Titles Customizer
=================================
*/
function prodigi_header_subtitle_register( $wp_customize ) {
//Section Site Banner
	$wp_customize->add_section('site_banner',array(
		'title' =>__('Site Banner','McGIS'),
	     'description' =>sprintf(__('Add banner for site','McGIS')),
	     'priority' =>30,));
//Site Banner Settings
$wp_customize->add_setting('McGIS_banner_image',array(
			'default'	=> esc_url(get_template_directory_uri()).'/img/banner2.png',
			'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'McGIS_banner_image',array(
			   'label'      => __( 'Banner Image', 'McGIS' ),
			   'section'    => 'site_banner',
			   'settings'   => 'McGIS_banner_image',
			   'context'    => 'McGIS_banner_image' 
		   )
	   ));
//Header Title
	$wp_customize->add_section('Header_section',array(
		'title' =>__('Header Button and Text','McGIS'),
	     'description' =>sprintf(__('Edit header Titles','McGIS')),
	     'priority' =>35,));
//Main Title
	$wp_customize->add_setting('main_header_title',array(
			'default'	=> __('Just another WordPress site','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'priority' =>1,
	));
     $wp_customize->add_control('main_header_title',array(
			'label'	=> __('Main title ','McGIS'),
			'section'	=> 'Header_section',
			'setting'	=> 'main_header_title'
    ));
    //subtitle		
	$wp_customize->add_setting('header_subtitle',array(
			'default'	=> __('McGis Geopspatials website','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'priority' =>2,
	));
     $wp_customize->add_control('header_subtitle',array(
			'label'	=> __('Subtitle ','McGIS'),
			'section'	=> 'Header_section',
			'setting'	=> 'header_subtitle',
    ));
    //Button text		
	$wp_customize->add_setting('button_text',array(
			'default'	=> __('Find out More','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'priority' =>3,
	));
     $wp_customize->add_control('button_text',array(
			'label'	=> __('Button Text ','McGIS'),
			'section'	=> 'Header_section',
			'setting'	=> 'button_text',
    ));
}
add_action('customize_register','prodigi_header_subtitle_register');
?>