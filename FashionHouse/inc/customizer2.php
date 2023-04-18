<?php
/*
=================================
    Homepage Customizer
=================================
*/
 
function prodigi_customize_register( WP_Customize_Manager $wp_customize ) {
//Get Settings for Blogname,blogdescription & Other Custom Themes
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';
//Add Partial Refresh for blogname,Blogdescription & Other Custom Theme Modes
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'fashionHouse_customize_partial_blogname',
	) );
	/*$wp_customize->selective_refresh->add_partial( 'delivery_announcement_title', array(
		'selector' => '.best-deal-txt',
		'render_callback' => 'fashionHouse_customize_partial_delivery_announcement_title',
	) );
	$wp_customize->selective_refresh->add_partial( 'featured_section_title', array(
		'selector' => '.featured1 h2',
		'render_callback' => 'fashionHouse_customize_partial_featured_section_title',
	) );*/
// Add Home Page Panel
	 $wp_customize->add_panel('homepage', array(
	 	'title' => __('Home Page', 'fashionHouse'), 
	 	'description' => '',
	    'priority' => 140,));
// Panels Home page content
   	$wp_customize->add_section('delivery_section',array(
	'title' =>__('Deliver announcement','fashionHouse'),
	'description' =>sprintf(__('show delivery offers here','fashionHouse')),
	'panel' => 'homepage',
	'priority' =>60,));

	$wp_customize->add_section('contact_details',array(
		'title' =>__('Edit Contact details','fashionHouse'),
	     'description' =>sprintf(__('Edit contact details here','fashionHouse')),
	     'panel' => 'homepage',
	     'priority' =>61,));

	$wp_customize->add_section('featured_product_section',array(
		'title' =>__('Featured Product Section','fashionHouse'),
	     'description' =>sprintf(__('Select Featured Product Content','fashionHouse')),
	     'panel' => 'homepage',
	     'priority' =>62,));
	$wp_customize->add_section('fashion_quote_section',array(
		'title' =>__('Fashion Quote of the Week','fashionHouse'),
	     'description' =>sprintf(__('Edit the Fashion Quote Text here','fashionHouse')),
	     'panel' => 'homepage',
	     'priority' =>63,));
	$wp_customize->add_section('deal_section',array(
		'title' =>__('Deal of the week Title and excerpt','fashionHouse'),
	     'description' =>sprintf(__('Edit the deal title Text here','fashionHouse')),
	     'panel' => 'homepage',
	     'priority' =>64,));
	$wp_customize->add_section('arrivals_section',array(
		'title' =>__('New arrivals section','fashionHouse'),
	     'description' =>sprintf(__('Add details of New arrivals here','fashionHouse')),
	     'panel' => 'homepage',
	     'priority' =>65,));
	$wp_customize->add_section('best_buys_section',array(
		'title' =>__('Best Buys section','fashionHouse'),
	     'description' =>sprintf(__('Add details of Best Buys here','fashionHouse')),
	     'panel' => 'homepage',
	     'priority' =>66,));
	$wp_customize->add_section('announcement1',array(
		'title' =>__('announcement section','fashionHouse'),
	     'description' =>sprintf(__('Add announcements here','fashionHouse')),
	     'panel' => 'homepage',
	     'priority' =>67,));
//delivery announcement	
	$wp_customize->add_setting('delivery_announcement_title',array(
			'default'	=> __('Free Delivery as from ksh 5000','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' => 'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('delivery_announcement_title',array(
			'label'	=> __('delivery announcement','fashionHouse'),
			'section'	=> 'delivery_section',
			'setting'	=> 'delivery_announcement_title'
	));

//contact details phone
   	$wp_customize->add_setting('Phone_details',array(
			'default'	=> __('254 709 000 000','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' => 'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('Phone_details',array(
			'label'	=> __('phone number','fashionHouse'),
			'section'	=> 'contact_details',
			'setting'	=> 'Phone_details'
	)); 
//contact details email
    $wp_customize->add_setting('email_address',array(
			'default'	=> __('info@prodigi.co.ke','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('email_address',array(
			'label'	=> __('phone number','fashionHouse'),
			'section'	=> 'contact_details',
			'setting'	=> 'email_address'
	)); 

//featured article Title
   	$wp_customize->add_setting('featured_section_title',array(
			'default'	=> __('New season','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('featured_section_title',array(
			'label'	=> __('edit featured section title','fashionHouse'),
			'section'	=> 'featured_product_section',
			'setting'	=> 'featured_section_title'
	)); 
//featured article sub-title
    $wp_customize->add_setting('featured_section_sub-title',array(
			'default'	=> __('Collection 2017','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('featured_section_sub-title',array(
			'label'	=> __('edit featured section sub-title','fashionHouse'),
			'section'	=> 'featured_product_section',
			'setting'	=> 'featured_section_sub-title'
	));

//featured post
	$wp_customize->add_setting('fashionHouse_featured_post',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer'
			
	));
	
	$wp_customize->add_control('fashionHouse_featured_post',array(
			'label'	=> __('Select Content','fashionHouse'),
			'section'	=> 'featured_product_section',
			'setting'	=> 'fashionHouse_featured_post',
			'type' => 'dropdown-pages',
			'description' => 'Use featured image feature on contents post to choose image'
	));

//Fashion Quote
	$wp_customize->add_setting('fashion_quote',array(
		    'default'	=> __('Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat ','fashionHouse'),
			'sanitize_callback' => 'esc_textarea',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('fashion_quote',array(
			'label'	=> __('Fashion Qoute text','fashionHouse'),
			'section'	=> 'fashion_quote_section',
			'setting'	=> 'fashion_quote',
			'type' => 'textarea'
	));

//deal of the week text
    $wp_customize->add_setting('deal_title_text',array(
			'default'	=> __('deal of the week','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('deal_title_text',array(
			'label'	=> __('Deal section Title','fashionHouse'),
			'section'	=> 'deal_section',
			'setting'	=> 'deal_title_text'
	));
//deal of the week content heading
    $wp_customize->add_setting('deal_content_heading',array(
			'default'	=> __('Multipurpose Jacket','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('deal_content_heading',array(
			'label'	=> __('Content Heading','fashionHouse'),
			'section'	=> 'deal_section',
			'setting'	=> 'deal_content_heading'
	));
//deal of the week content
	$wp_customize->add_setting('deal_of_the_week_post',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer',
	));
	
	$wp_customize->add_control('deal_of_the_week_post',array(
			'label'	=> __('Select Content','fashionHouse'),
			'section'	=> 'deal_section',
			'setting'	=> 'deal_of_the_week_post',
			'type' => 'dropdown-pages',
			'description' => 'Use featured image feature on contents post to choose image'

    ));
//New Arrivals

//special_arrival1 heading
    $wp_customize->add_setting('special_arrivals1_heading',array(
			'default'	=> __('Nike','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('special_arrivals1_heading',array(
			'label'	=> __('special arrivals1 heading','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'special_arrivals1_heading'
	));
//special arrivals text
     $wp_customize->add_setting('special_arrivals1_txt',array(
			'default'	=> __('Nullam id dolor id nibh ultricies','fashionHouse'),
			'sanitize_callback' => 'esc_textarea',
			'capability' => 'edit_theme_options',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('special_arrivals1_txt',array(
			'label'	=> __('special arrivals1 text','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'arrivals1_heading',
			'type' => 'textarea'
	));
//special arrivals1 bg-color
    $wp_customize->add_setting('special_arrivals1_bg_color',array(
			'default'	=> __('#18384e','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('special_arrivals1_bg_color',array(
			'label'	=> __('special arrivals1 background color','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'special_arrivals1_bg_color',
			'description' => 'enter color code here to change background color e.g #18384e.'
	)); 
//special arrivals1 image
$wp_customize->add_setting( 'special_arrivals1_img',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/mens-section-shoe1.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'special_arrivals1_img', array(
            'label'       => __( 'Specail arrivals1 image:', 'fashionHouse' ),
            'section'     => 'arrivals_section',
            'settings'    => 'special_arrivals1_img',
            'description' => 'Upload special arrivals1 image here.'
    )));

//arrivals1 heading
    $wp_customize->add_setting('arrivals1_heading',array(
			'default'	=> __('common projects','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('arrivals1_heading',array(
			'label'	=> __('arrivals1 heading','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'arrivals1_heading'
	));
//arrivals1 txt

    $wp_customize->add_setting('arrivals1_txt',array(
			'default'	=> __('Nullam id dolor id nibh','fashionHouse'),
			'sanitize_callback' => 'esc_textarea',
			'capability' => 'edit_theme_options',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('arrivals1_txt',array(
			'label'	=> __('arrivals1 text','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'arrivals1_heading',
			'type' => 'textarea'
	)); 
//arrivals1 image
$wp_customize->add_setting( 'arrivals1_img',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/mens-section-fpr-shoe2.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'arrivals1_img', array(
            'label'       => __( 'Arrivals1 image:', 'fashionHouse' ),
            'section'     => 'arrivals_section',
            'settings'    => 'arrivals1_img',
            'description' => 'Upload arrivals1 image here.'
    )));
//arrivals2 heading
    $wp_customize->add_setting('arrivals2_heading',array(
			'default'	=> __('comme des carcons','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('arrivals2_heading',array(
			'label'	=> __('arrivals2 heading','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'arrivals2_heading'
	));
//arrivals2 txt

    $wp_customize->add_setting('arrivals2_txt',array(
			'default'	=> __('Nullam id dolor id nibh','fashionHouse'),
			'sanitize_callback' => 'esc_textarea',
			'capability' => 'edit_theme_options',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('arrivals2_txt',array(
			'label'	=> __('arrivals2 text','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'arrivals2_heading',
			'type' => 'textarea'
	)); 
//arrivals2 image
$wp_customize->add_setting( 'arrivals2_img',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/mens-section-fpr-shoes3.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'arrivals2_img', array(
            'label'       => __( 'Arrivals2 image:', 'fashionHouse' ),
            'section'     => 'arrivals_section',
            'settings'    => 'arrivals2_img',
            'description' => 'Upload arrivals2 image here.'
    )));
//arrivals3 heading
    $wp_customize->add_setting('arrivals3_heading',array(
			'default'	=> __('comme des carcons','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('arrivals3_heading',array(
			'label'	=> __('arrivals3 heading','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'arrivals3_heading'
	));
//arrivals2 txt

    $wp_customize->add_setting('arrivals3_txt',array(
			'default'	=> __('Nullam id dolor id nibh','fashionHouse'),
			'sanitize_callback' => 'esc_textarea',
			'capability' => 'edit_theme_options',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('arrivals3_txt',array(
			'label'	=> __('arrivals3 text','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'arrivals3_heading',
			'type' => 'textarea'
	)); 
//arrivals3 image
$wp_customize->add_setting( 'arrivals3_img',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/mens-section-fpr-shoe4.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'arrivals3_img', array(
            'label'       => __( 'Arrivals3 image:', 'fashionHouse' ),
            'section'     => 'arrivals_section',
            'settings'    => 'arrivals3_img',
            'description' => 'Upload arrivals3 image here.'
    )));

 //special_arrival2 heading
    $wp_customize->add_setting('special_arrivals2_heading',array(
			'default'	=> __('Jacket','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('special_arrivals2_heading',array(
			'label'	=> __('special arrivals2 heading','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'special_arrivals1_heading'
	));
//special arrivals2 text
     $wp_customize->add_setting('special_arrivals2_txt',array(
			'default'	=> __('Nullam id dolor','fashionHouse'),
			'sanitize_callback' => 'esc_textarea',
			'capability' => 'edit_theme_options',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('special_arrivals2_txt',array(
			'label'	=> __('special arrivals2 text','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'special_arrivals2_heading',
			'type' => 'textarea'
	));
//special arrivals2 bg-color
    $wp_customize->add_setting('special_arrivals2_bg_color',array(
			'default'	=> __('#ffdead','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('special_arrivals2_bg_color',array(
			'label'	=> __('special arrivals2 background color','fashionHouse'),
			'section'	=> 'arrivals_section',
			'setting'	=> 'specail_arrivals2_bg_color',
			'description' => 'enter color code here to change background color e.g #ffdead.'
	)); 
//special arrivals1 image
$wp_customize->add_setting( 'special_arrivals2_img',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/jacket-1.png'
	));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'special_arrivals2_img', array(
            'label'       => __( 'Special arrivals2 image:','fashionHouse' ),
            'section'     => 'arrivals_section',
            'settings'    => 'special_arrivals2_img',
            'description' => 'Upload special arrivals2 image here.'
    )));
//Best Buys1 heading
    $wp_customize->add_setting('best_buy1_heading',array(
			'default'	=> __('Dalmain','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('best_buy1_heading',array(
			'label'	=> __('best buys1 heading','fashionHouse'),
			'section'	=> 'best_buys_section',
			'setting'	=> 'best_buy1_heading'
	));
//Best Buys1 Content
     //featured post
	$wp_customize->add_setting('best_buy1',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer'
			
	));
	
	$wp_customize->add_control('best_buy1',array(
			'label'	=> __('Select Content','fashionHouse'),
			'section'	=> 'best_buys_section',
			'setting'	=> 'best_buy1',
			'type' => 'dropdown-pages',
			'description' => 'Use featured image feature on contents post to choose image'

	));
//Best Buys2 heading
    $wp_customize->add_setting('best_buy2_heading',array(
			'default'	=> __('Fat Simons','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('best_buy2_heading',array(
			'label'	=> __('best buys2 heading','fashionHouse'),
			'section'	=> 'best_buys_section',
			'setting'	=> 'best_buy2_heading'
	));
//Best Buys2 Content

	$wp_customize->add_setting('best_buy2',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer'
			
	));
	
	$wp_customize->add_control('best_buy2',array(
			'label'	=> __('Select Content','fashionHouse'),
			'section'	=> 'best_buys_section',
			'setting'	=> 'best_buy2'
	));
//Announcement1 Heading heading
    $wp_customize->add_setting('announcement1_heading',array(
			'default'	=> __('Nixons','fashionHouse'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('announcement1_heading',array(
			'label'	=> __('announcement1 heading','fashionHouse'),
			'section'	=> 'announcement1',
			'setting'	=> 'announcement1_heading'
	));
//Announcements Content
	$wp_customize->add_setting('announcement1_content',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'prodigi_sanitize_integer'
			
	));
	
	$wp_customize->add_control('announcement1_content',array(
			'label'	=> __('Select Content','fashionHouse'),
			'section'	=> 'announcement1',
			'setting'	=> 'announcement1_content',
			'type' => 'dropdown-pages',
			'description' => 'Use featured image feature on contents post to choose image'
	));
}
add_action('customize_register','prodigi_customize_register');
/*Add render Callback for all referesh Partials*/
function fashionHouse_customize_partial_delivery_announcement_title() {
	return get_theme_mode( 'delivery_announcement_title' );
}
function fashionHouse_customize_partial_featured_section_title() {
	return get_theme_mode( 'featured_section_title' );
}
function prodigi_sanitize_integer( $input ) {
    return intval( $input );
}
//Add javascript file for faster update of settings within preview
function my_preview_js() {
   wp_enqueue_script( 'fashionhouse_customizer_preview_script', esc_url( get_template_directory_uri() ) . '/assets/js/customizer-preview.js', array("jquery"), 'false', true  );
}
add_action( 'customize_controls_enqueue_scripts', 'my_preview_js' );		
	
