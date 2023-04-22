<?php

require_once( get_template_directory() . '/inc/agridrive-contact/customizer-repeater-control.php' );

function agridrive_contact_customizer( $wp_customize ) {
 
	//Service section panel
	$wp_customize->add_section( 'agridrive_contact_page' , array(
		'title'      => __('Manage Agridrive Contact Page', 'agridrive'),
		'panel'		=>'homepage',
		'priority'       => 87,
   	) );
	$wp_customize->add_setting(
    'agridrive_options[contact_page_title]',
    array(
        'default' =>__('Get in touch','agridrive'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[contact_page_title]',
    array(
        'label' => __('Edit Contact page Title','agridrive'),
        'section' => 'agridrive_contact_page',
        'type' => 'text',
    )
	);

	if ( class_exists( 'agridrive_contact_repeater' ) ) {
			$wp_customize->add_setting( 'agridrive_contact_page_content', array(
			'sanitize_callback' => 'agridrive_repeater_sanitize',
			) );

			$wp_customize->add_control( new agridrive_services_repeater( $wp_customize, 'agridrive_contact_page_content', array(
				'label'                             => esc_html__( 'Agridrive Contact info', 'agridrive' ),
				'section'                           => 'agridrive_contact_page',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new contact', 'agridrive' ),
				'item_name'                         => esc_html__( 'Contact', 'agridrive' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				) ) );
		}
//Contact form 7 Shortcodes Container 			
	$wp_customize->add_setting('contact_form7_shortcode',array(
			'default' => __('[contact-form-7 id="2459" title="Contact form 1"]','agridrive'),
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
		$wp_customize->add_control('contact_form7_shortcode',array(
			'label'	=> __('Paste Contact 7 form shortcode here','agridrive'),
			'section'	=> 'agridrive_contact_page',
			'setting'	=> 'contact_form7_shortcode',
			'type' => 'textarea',
			'description' => 'Add default Content'
	));

}
add_action( 'customize_register', 'agridrive_contact_customizer' );


	
?>

