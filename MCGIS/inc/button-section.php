<?php
/*
=================================
    Button Section Customizer
=================================
*/
function prodigi_button_section_register( $wp_customize ) {
//Section Site Banner
	$wp_customize->add_section('buttons_section',array(
		'title' =>__('Buttons Sections','McGIS'),
	     'description' =>sprintf(__('Edit Button Section','McGIS')),
	     'priority' =>142,));
//Section text
	$wp_customize->add_setting('button_section_text',array(
			'default'	=> __('The buttons below are impossible to resist.','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('button_section_text',array(
			'label'	=> __('Button Section Text ','McGIS'),
			'section'	=> 'buttons_section',
			'setting'	=> 'button_section_text'
	));
//Button 1 Text
	$wp_customize->add_setting('section_button1_Text',array(
			'default'	=> __('Click Me!','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('section_button1_Text',array(
			'label'	=> __('Button Text','McGIS'),
			'section'	=> 'buttons_section',
			'setting'	=> 'section_button1_Text'
	));
//Button Url
	$wp_customize->add_setting('section_button1_link',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('section_button1_link',array(
			'label'	=> __('button1 Link','avvocato'),
			'section'	=> 'buttons_section',
			'setting'	=> 'section_button1_link'
	));	
//Button 1 Text
	$wp_customize->add_setting('section_button2_Text',array(
			'default'	=> __('Look at Me!','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('section_button2_Text',array(
			'label'	=> __('Button Text','McGIS'),
			'section'	=> 'buttons_section',
			'setting'	=> 'section_button2_Text'
	));
//Button Url
	$wp_customize->add_setting('section_button2_link',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('section_button2_link',array(
			'label'	=> __('button2 Link','McGIS'),
			'section'	=> 'buttons_section',
			'setting'	=> 'section_button2_link'
	));	
}
add_action('customize_register','prodigi_button_section_register');
?>