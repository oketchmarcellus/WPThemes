<?php

require_once( get_template_directory() . '/inc/safari-services/customizer-repeater-control.php' );

function safari_services_customizer( $wp_customize ) {
 
	//Service section panel
	$wp_customize->add_section( 'safari_service_section' , array(
		'title'      => __('Safari Service section', 'safari'),
		'panel'		=>'homepage',
		'priority'       => 59,
   	) );
	
	//Hide or show frontpage Service Section
	
	$wp_customize->add_setting(
    'safari_options[service_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'safari_options[service_section_enabled]',
    array(
        'label' => __('Enable Safari Service section','safari'),
        'section' => 'safari_service_section',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
    'safari_options[service_title]',
    array(
        'default' =>__('Our services','safari'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'safari_options[service_title]',
    array(
        'label' => __('Edit Service Section Title','safari'),
        'section' => 'safari_service_section',
        'type' => 'text',
    )
	);

	if ( class_exists( 'safari_services_repeater' ) ) {
			$wp_customize->add_setting( 'safari_services_content', array(
			'sanitize_callback' => 'safari_repeater_sanitize',
			) );

			$wp_customize->add_control( new safari_services_repeater( $wp_customize, 'safari_services_content', array(
				'label'                             => esc_html__( 'Safari Service Content', 'safari' ),
				'section'                           => 'safari_service_section',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Service', 'safari' ),
				'item_name'                         => esc_html__( 'Service', 'safari' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}

}
add_action( 'customize_register', 'safari_services_customizer' );

