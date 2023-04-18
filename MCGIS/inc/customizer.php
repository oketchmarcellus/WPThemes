<?php
/*
=================================
    Homepage Customizer
=================================
*/
 
function prodigi_customize_register( $wp_customize ) {
// Add Home Page Panel
	 $wp_customize->add_panel('homepage', array(
	 	'title' => __('Home Page', 'McGIS'), 
	 	'description' => '',
	    'priority' => 140,));
// Panels Home page content
	$wp_customize->add_section('main_section',array(
		'title' =>__('Main Section','McGIS'),
	     'description' =>sprintf(__('Home Page Content','McGIS')),
	     'panel' => 'homepage',
	     'priority' =>60,));
//subtitle		
	$wp_customize->add_setting('main_section_title',array(
			'default'	=> __('Perfect Theme For Your Next Project','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('main_section_title',array(
			'label'	=> __('column 1 subtitle ','McGIS'),
			'section'	=> 'main_section',
			'setting'	=> 'main_section_title'
	));
 //Main COntent
	$wp_customize->add_setting('McGIS_main_section',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer'
			
	));
	
	$wp_customize->add_control('McGIS_main_section',array(
			'label'	=> __('Select Content','McGIS'),
			'section'	=> 'main_section',
			'setting'	=> 'McGIS_main_section',
			'type' => 'dropdown-pages'
	));		
	

// Home page Service Section
	$wp_customize->add_section('service',array(
		'title' =>__('Service Section','McGIS'),
	     'description' =>sprintf(__('Options for services Section','McGIS')),
	     'panel' => 'homepage',
	     'priority' =>80,));		
// Add icons, labels & Controls for Home Page service
//Heading for service section 
$wp_customize->add_setting('service_section_heading',array(
			'default'	=> __('Services Section','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
$wp_customize->add_control('service_section_heading',array(
			'label'	=> __('Section Heading ','McGIS'),
			'description' => __('Change the heading for this section','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_section_heading'
	));	

//service_column1
//icon
$wp_customize->add_setting('service_column1_icon',array(
			'default'	=> __('camera','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
	
	$wp_customize->add_control('service_column1_icon',array(
			'label'	=> __('Icon 1','McGIS'),
			'description' => __('Select a icon in this list <a target="_blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a> and enter the code','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_column1_icon'
	));	
//subtitle		
	$wp_customize->add_setting('service_subtitle1',array(
			'default'	=> __('Services1 subtitle','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('service_subtitle1',array(
			'label'	=> __('column 1 subtitle ','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_subtitle1'
	));	
//content
	$wp_customize->add_setting('service_column1_content_1',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' => '',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('service_column1_content_1',array(
			'label'	=> __('Content 1','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_column1_content_1',
			'type' => 'textarea'
	));	
//Button
	$wp_customize->add_setting('service_button_text_1',array(
			'default'	=> __('Read More','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('service_button_text_1',array(
			'label'	=> __('Button Text 1','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_button_text_1'
	));	
//service_column2
$wp_customize->add_setting('service_column2_icon',array(
			'default'	=> __('map','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
	
	$wp_customize->add_control('service_column2_icon',array(
			'label'	=> __('Icon 2','McGIS'),
			'description' => __('Select a icon in this list <a target="_blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a> and enter the code','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_column2_icon'
	));			

//subtitle		
	$wp_customize->add_setting('service_subtitle2',array(
			'default'	=> __('Services2 subtitle','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('service_subtitle2',array(
			'label'	=> __('column 2 subtitle ','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_subtitle2'
	));	
//content		
	$wp_customize->add_setting('service_column2_content_2',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' => '',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('service_column2_content_2',array(
			'label'	=> __('Content 2','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_column2_content_2',
			'type' => 'textarea'
	));	
//Button
	$wp_customize->add_setting('service_button_text_2',array(
			'default'	=> __('Read More','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('service_button_text_2',array(
			'label'	=> __('Button Text 2','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_button_text_2'
	));	
//service_column3
$wp_customize->add_setting('service_column3_icon',array(
			'default'	=> __('map-marker','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
	
	$wp_customize->add_control('service_column3_icon',array(
			'label'	=> __('Icon 3','McGIS'),
			'description' => __('Select a icon in this list <a target="_blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a> and enter the code','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_column3_icon'
	));			

//subtitle		
	$wp_customize->add_setting('service_subtitle3',array(
			'default'	=> __('Services3 subtitle','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('service_subtitle3',array(
			'label'	=> __('column 3 subtitle ','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_subtitle1'
	));	
//content			
	$wp_customize->add_setting('service_column3_content_3',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' => '',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('service_column3_content_3',array(
			'label'	=> __('Content 3','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_column3_content_3',
			'type' => 'textarea'
	));
//Button	
	$wp_customize->add_setting('service_button_text_3',array(
			'default'	=> __('Read More','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('service_button_text_3',array(
			'label'	=> __('Button Text 3','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_button_text_3'
	));	

//service_column4
$wp_customize->add_setting('service_column4_icon',array(
			'default'	=> __('map-pin','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
	
	$wp_customize->add_control('service_column4_icon',array(
			'label'	=> __('Icon 4','McGIS'),
			'description' => __('Select a icon in this list <a target="_blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a> and enter the code','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_column4_icon'
	));			
//subtitle		
	$wp_customize->add_setting('service_subtitle4',array(
			'default'	=> __('Services4 subtitle','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('service_subtitle4',array(
			'label'	=> __('column 4 subtitle ','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_subtitle4'
	));	
//content				
	$wp_customize->add_setting('service_column4_content_4',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' => '',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('service_column4_content_4',array(
			'label'	=> __('Content 4','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_column4_content_4',
			'type' => 'textarea'
	));
//Button
	$wp_customize->add_setting('service_button_text_4',array(
			'default'	=> __('Read More','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('service_button_text_4',array(
			'label'	=> __('Button Text 4','McGIS'),
			'section'	=> 'service',
			'setting'	=> 'service_button_text_4'
	));
// Panels Home page subsection
	$wp_customize->add_section('sub_section',array(
		'title' =>__('Sub Section','McGIS'),
	     'description' =>sprintf(__('Home Sub-Content','McGIS')),
	     'panel' => 'homepage',
	     'priority' =>90,));
//subtitle		
	$wp_customize->add_setting('sub_section_title',array(
			'default'	=> __('Our Work','McGIS'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('sub_section_title',array(
			'label'	=> __('column 1 subtitle ','McGIS'),
			'section'	=> 'sub_section',
			'setting'	=> 'sub_section_title'
	));
 //Sub Content
	$wp_customize->add_setting('McGIS_sub_section_content',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer'
			
	));
	
	$wp_customize->add_control('McGIS_sub_section_content',array(
			'label'	=> __('Select Content page','McGIS'),
			'section'	=> 'sub_section',
			'setting'	=> 'McGIS_sub_section_content',
			'type' => 'dropdown-pages'
	));		
}
add_action('customize_register','prodigi_customize_register');

function prodigi_sanitize_integer( $input ) {
    return intval( $input );
}