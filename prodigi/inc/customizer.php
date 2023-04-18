<?php
/*
=================================
    Homepage Customizer
=================================
*/
function prodigi_customize_register( WP_Customize_Manager $wp_customize ) {

// Transport postMessage
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
//Add Partial Refresh for blogname,Blogdescription & Other Custom Theme Modes
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'prodigi_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'prodigi_customize_partial_blogdescription',
	) );
	$wp_customize->selective_refresh->add_partial( 'main_header_title', array(
		'selector' => '.header-content-inner h1',
		'render_callback' => 'prodigi_customize_partial_main_header_title',
	) );
	$wp_customize->selective_refresh->add_partial( 'service_section_heading', array(
		'selector' => '#top-service-section',
		'render_callback' => 'prodigi_customize_partial_service_section_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'home_content_heading', array(
		'selector' => '#featured-home',
		'render_callback' => 'prodigi_customize_home_content_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'bg_dark_text', array(
		'selector' => '.container.text-center h2',
		'render_callback' => 'prodigi_customize_partial_bg_dark_text',
	) );
	$wp_customize->selective_refresh->add_partial( 'footer_content_heading', array(
		'selector' => '#footer-heading',
		'render_callback' => 'prodigi_customize_partial_footer_content_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'phone', array(
		'selector' => '#phone',
		'render_callback' => 'prodigi_customize_partial_phone',
	) );
// Add Home Page Panel
	 $wp_customize->add_panel('homepage', array(
	 	'title' => __('Home Page', 'prodigi'), 
	 	'description' => '',
	    'priority' => 140,));
//subtitle		
	$wp_customize->add_setting('main_section_title',array(
			'default'	=> __('Perfect Theme For Your Next Project','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' => 'postMessage',
			'type'  => 'theme_mod'
	));
    $wp_customize->add_control('main_section_title',array(
			'label'	=> __('column 1 subtitle ','prodigi'),
			'section'	=> 'main_section',
			'setting'	=> 'main_section_title'
	));
//Custom colors
    // Site theme
	$wp_customize->add_setting('color_scheme',array(
			'default'           => apply_filters( 'color_scheme_selector_default', '#113df0' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_scheme',
			array(
				'label'    => __( 'Color Scheme hue Selector', 'prodigi' ),
				'section'  => 'colors',
				'settings' => 'color_scheme',
				'priority' => 13,
			)
		)
	);
	 // Site title
	$wp_customize->add_setting('dark_bg',array(
			'default'           => apply_filters( 'dark_bg_default', '#222222' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_bg',
			array(
				'label'    => __( 'Announcement Section hue Selector', 'prodigi' ),
				'section'  => 'colors',
				'settings' => 'dark_bg',
				'priority' => 14,
			)
		)
	);
// Home page Service Section
	$wp_customize->add_section('service',array(
		'title' =>__('Service Section','prodigi'),
	     'description' =>sprintf(__('Options for services Section','prodigi')),
	     'panel' => 'homepage',
	     'priority' =>80,));
// Home page Service Section
	$wp_customize->add_section('featured_content',array(
		'title' =>__('Homepage Featured Content','prodigi'),
	     'description' =>sprintf(__('Select Homepage featured Post','prodigi')),
	     'panel' => 'homepage',
	     'priority' =>81,));
// Announcement Section
	$wp_customize->add_section('Announcement',array(
		'title' =>__('Announcement Section','prodigi'),
	     'description' =>sprintf(__('Add important Announcements in the colored section','prodigi')),
	     'panel' => 'homepage',
	     'priority' =>82,));		
// Add icons, labels & Controls for Home Page service
//Heading for service section 
$wp_customize->add_setting('service_section_heading',array(
			'default'	=> __('Services Section','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('service_section_heading',array(
			'label'	=> __('Section Heading ','prodigi'),
			'description' => __('Change the heading for this section','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_section_heading'
	));	

//service_column1
//icon
$wp_customize->add_setting('service_column1_icon',array(
			'default'	=> __('html5','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
	
	$wp_customize->add_control('service_column1_icon',array(
			'label'	=> __('Icon 1','prodigi'),
			'description' => __('Select a icon in this list <a target="_blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a> and enter the code','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_column1_icon'
	));	
//subtitle		
	$wp_customize->add_setting('service_subtitle1',array(
			'default'	=> __('Html 5','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' =>'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('service_subtitle1',array(
			'label'	=> __('column 1 subtitle ','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_subtitle1'
	));	
//content
	$wp_customize->add_setting('service_column1_content_1',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',		
	));
	
	$wp_customize->add_control('service_column1_content_1',array(
			'label'	=> __('Content 1','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_column1_content_1',
			'type' => 'textarea'
	));	
//service_column2
$wp_customize->add_setting('service_column2_icon',array(
			'default'	=> __('android','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
	
	$wp_customize->add_control('service_column2_icon',array(
			'label'	=> __('Icon 2','prodigi'),
			'description' => __('Select a icon in this list <a target="_blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a> and enter the code','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_column2_icon'
	));			

//subtitle		
	$wp_customize->add_setting('service_subtitle2',array(
			'default'	=> __('android','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' =>'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('service_subtitle2',array(
			'label'	=> __('column 2 subtitle ','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_subtitle2'
	));	
//content		
	$wp_customize->add_setting('service_column2_content_2',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('service_column2_content_2',array(
			'label'	=> __('Content 2','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_column2_content_2',
			'type' => 'textarea'
	));	
//service_column3
$wp_customize->add_setting('service_column3_icon',array(
			'default'	=> __('wordpress','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
	
	$wp_customize->add_control('service_column3_icon',array(
			'label'	=> __('Icon 3','prodigi'),
			'description' => __('Select a icon in this list <a target="_blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a> and enter the code','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_column3_icon'
	));			

//subtitle		
	$wp_customize->add_setting('service_subtitle3',array(
			'default'	=> __('WordPress','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' =>'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('service_subtitle3',array(
			'label'	=> __('column 3 subtitle ','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_subtitle1'
	));	
//content			
	$wp_customize->add_setting('service_column3_content_3',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('service_column3_content_3',array(
			'label'	=> __('Content 3','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_column3_content_3',
			'type' => 'textarea'
	));
//service_column4
$wp_customize->add_setting('service_column4_icon',array(
			'default'	=> __('joomla','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
	
	$wp_customize->add_control('service_column4_icon',array(
			'label'	=> __('Icon 4','prodigi'),
			'description' => __('Select a icon in this list <a target="_blank" href="http://fontawesome.io/icons/">http://fontawesome.io/icons/</a> and enter the code','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_column4_icon'
	));			
//subtitle		
	$wp_customize->add_setting('service_subtitle4',array(
			'default'	=> __('Joomla','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' =>'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('service_subtitle4',array(
			'label'	=> __('column 4 subtitle ','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_subtitle4'
	));	
//content				
	$wp_customize->add_setting('service_column4_content_4',array(
			'default' => '',
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('service_column4_content_4',array(
			'label'	=> __('Content 4','prodigi'),
			'section'	=> 'service',
			'setting'	=> 'service_column4_content_4',
			'type' => 'textarea'
	));
//Heading for Home Content Section 
$wp_customize->add_setting('home_content_heading',array(
			'default'	=> __('Featured Content','prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('home_content_heading',array(
			'label'	=> __('Home Content Heading ','prodigi'),
			'description' => __('Change the heading for your Home content to your liking','prodigi'),
			'section'	=> 'featured_content',
			'setting'	=> 'home_content_heading'
	));	
//Home Page Featured Post Content
	$wp_customize->add_setting('featured_home_post',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer'
	));
	
	$wp_customize->add_control('featured_home_post',array(
			'label'	=> __('Select Content','fashionHouse'),
			'section'	=> 'featured_content',
			'setting'	=> 'featured_home_post',
			'type' => 'dropdown-pages',
			'description' => 'Use featured image feature on contents post to choose image'

	));
//bg dark section text	
	$wp_customize->add_setting('bg_dark_text',array(
			'default'	=> __('Get free Templates Now!', 'prodigi'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' =>'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('bg_dark_text',array(
			'label'	=> __('Announcement section ','prodigi'),
			'section'	=> 'Announcement',
			'setting'	=> 'bg_dark_text'
	));	
}
add_action('customize_register','prodigi_customize_register');

function prodigi_sanitize_integer( $input ) {
    return intval( $input );
}
/*Add render Callback for all referesh Partials*/
function prodigi_customize_partial_blogname() {
	bloginfo( 'name' );
}
function prodigi_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function prodigi_customize_partial_main_header_title() {
	return get_theme_mode( '.header-content-inner h1' );
}
function prodigi_customize_partial_service_section_heading() {
	return get_theme_mod( 'service_section_heading' );
}
function prodigi_customize_home_content_heading() {
	return get_theme_mod( 'home_content_heading' );
}
function prodigi_customize_partial_bg_dark_text() {
	return get_theme_mod( 'bg_dark_text' );
}
function prodigi_customize_partial_footer_content_heading() {
	return get_theme_mod( 'footer_content_heading' );
}
function prodigi_customize_partial_phone() {
	return get_theme_mod( 'phone' );
}
/**
 * Enqueue scripts for customizer
 */
function prodigi_customizer_js() {
   wp_enqueue_script( 'prodigi_customizer_script', esc_url( get_template_directory_uri() ) . '/js/customizer.js', array("jquery"), '1.0', true  );
}
add_action( 'customize_preview_init', 'prodigi_customizer_js' );
