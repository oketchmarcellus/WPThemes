<?php
/*
=================================
    Footer Customizer
=================================
*/
 
function prodigi_footer_customize_register( $wp_customize ) {
// Add footer components Panel
	 $wp_customize->add_panel('footer_customizer', array(
	 	'title' => __('Footer Components', 'McGIS'), 
	 	'description' => '',
	    'priority' => 145,));
// Add Address Section
	$wp_customize->add_section('addresses',array(
		'title' =>__('Addresses','McGIS'),
	     'description' =>sprintf(__('Physical or Mail Address','McGIS')),
	     'panel' => 'footer_customizer',
	     'priority' =>1,));
//Address Line 1		
	$wp_customize->add_setting('Address_line_1',array(
			'default'	=> __('Your address Goes here ','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('Address_line_1',array(
			'label'	=> __('First Line Of Address','McGIS'),
			'section'	=> 'addresses',
			'setting'	=> 'Address_line_1'
	));
 //Address Line 2		
	$wp_customize->add_setting('Address_line_2',array(
			'default'	=> __('Nrb,Kenya','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('Address_line_2',array(
			'label'	=> __('Second Line Of Address','McGIS'),
			'section'	=> 'addresses',
			'setting'	=> 'Address_line_2'
	));
//Phone and Email
	$wp_customize->add_section('Phone_mail',array(
		'title' =>__('Phone and Email','McGIS'),
	     'description' =>sprintf(__('Phone and Email','McGIS')),
	     'panel' => 'footer_customizer',
	     'priority' =>2,));
//Phone Number		
	$wp_customize->add_setting('phone',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('phone',array(
			'label'	=> __('Phone Number','McGIS'),
			'section'	=> 'Phone_mail',
			'setting'	=> 'phone'
	));
     $wp_customize->add_section('Phone_mail',array(
		'title' =>__('Phone and Email','McGIS'),
	     'description' =>sprintf(__('Phone and Email','McGIS')),
	     'panel' => 'footer_customizer',
	     'priority' =>2,));
//Email address		
	$wp_customize->add_setting('email',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('email',array(
			'label'	=> __('Email Address','McGIS'),
			'section'	=> 'Phone_mail',
			'setting'	=> 'email'
	));
// Add Social Icons
	$wp_customize->add_section('socicons',array(
		'title' =>__('social media','McGIS'),
	     'description' =>sprintf(__('Connect to your Social media','McGIS')),
	     'panel' => 'footer_customizer',
	     'priority' =>3,));
}
add_action('customize_register','prodigi_footer_customize_register');
?>