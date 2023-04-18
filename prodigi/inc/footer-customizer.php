<?php
/*
=================================
    Footer Customizer
=================================
*/
 
function prodigi_footer_customize_register( $wp_customize ) {
// Add footer components Panel
	 $wp_customize->add_panel('footer_customizer', array(
	 	'title' => __('Footer Components', 'prodigi'), 
	 	'description' => '',
	    'priority' => 145,));
// Home page footer content
	$wp_customize->add_section('footer_content',array(
		'title' =>__('Footer content','prodigi'),
	     'description' =>sprintf(__('Options for footer content','prodigi')),
	     'panel' => 'footer_customizer',
	     'priority' =>1,));		
// Add icons, labels & Controls for Home Page footer content
//Heading for footer content 
$wp_customize->add_setting('footer_content_heading',array(
			'default'	=> __("Let's Get In Touch!",'prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' =>'postMessage',
			'type'  => 'theme_mod'
	));
$wp_customize->add_control('footer_content_heading',array(
			'label'	=> __('Section Heading ','prodigi'),
			'description' => __('Change the heading for this section','prodigi'),
			'section'	=> 'footer_content',
			'setting'	=> 'footer_content_section_heading'
	));	

//footer_content_column1
//content
	$wp_customize->add_setting('footer_content_txt',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' => '',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('footer_content_txt',array(
			'label'	=> __('Add Text','prodigi'),
			'section'	=> 'footer_content',
			'setting'	=> 'footer_content_txt',
			'type' => 'textarea'
	));	
// Add Address Section
	$wp_customize->add_section('addresses',array(
		'title' =>__('Addresses','prodigi'),
	     'description' =>sprintf(__('Physical or Mail Address','prodigi')),
	     'panel' => 'footer_customizer',
	     'priority' =>2,));
//Address Line 1		
	$wp_customize->add_setting('Address_line_1',array(
			'default'	=> __('Your address Goes here ','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('Address_line_1',array(
			'label'	=> __('First Line Of Address','prodigi'),
			'section'	=> 'addresses',
			'setting'	=> 'Address_line_1'
	));
 //Address Line 2		
	$wp_customize->add_setting('Address_line_2',array(
			'default'	=> __('Nrb,Kenya','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('Address_line_2',array(
			'label'	=> __('Second Line Of Address','prodigi'),
			'section'	=> 'addresses',
			'setting'	=> 'Address_line_2'
	));
//Phone and Email
	$wp_customize->add_section('Phone_mail',array(
		'title' =>__('Phone and Email','prodigi'),
	     'description' =>sprintf(__('Phone and Email','prodigi')),
	     'panel' => 'footer_customizer',
	     'priority' =>3,));
//Phone Number		
	$wp_customize->add_setting('phone',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' =>'postMessage'
	));
     $wp_customize->add_control('phone',array(
			'label'	=> __('Phone Number','prodigi'),
			'section'	=> 'Phone_mail',
			'setting'	=> 'phone'
	));
     $wp_customize->add_section('Phone_mail',array(
		'title' =>__('Phone and Email','prodigi'),
	     'description' =>sprintf(__('Phone and Email','prodigi')),
	     'panel' => 'footer_customizer',
	     'priority' =>3,));
//Email address		
	$wp_customize->add_setting('email',array(
			'default'	=> __('info@prodigi.co.ke','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' =>'postMessage'
	));
     $wp_customize->add_control('email',array(
			'label'	=> __('Email Address','prodigi'),
			'section'	=> 'Phone_mail',
			'setting'	=> 'email'
	));
// Add Social Icons
	$wp_customize->add_section('socicons',array(
		'title' =>__('social media','prodigi'),
	     'description' =>sprintf(__('Connect to your Social media','prodigi')),
	     'panel' => 'footer_customizer',
	     'priority' =>4,));
}
add_action('customize_register','prodigi_footer_customize_register');
?>