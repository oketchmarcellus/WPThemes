<?php

require_once( get_template_directory() . '/inc/agridrive-services/customizer-repeater-control.php' );

function agridrive_services_customizer( $wp_customize ) {
 
	//Service section panel
	$wp_customize->add_section( 'agridrive_service_section' , array(
		'title'      => __('Manage Agridrive Service section', 'agridrive'),
		'panel'		=>'homepage',
		'priority'       => 59,
   	) );
	
	//Hide or show frontpage Service Section
	
	$wp_customize->add_setting(
    'agridrive_options[service_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[service_section_enabled]',
    array(
        'label' => __('Enable Agridrive Service section','agridrive'),
        'section' => 'agridrive_service_section',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
    'agridrive_options[service_title]',
    array(
        'default' =>__('Our services','agridrive'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[service_title]',
    array(
        'label' => __('Edit Service Section Title','agridrive'),
        'section' => 'agridrive_service_section',
        'type' => 'text',
    )
	);

	if ( class_exists( 'agridrive_services_repeater' ) ) {
			$wp_customize->add_setting( 'agridrive_services_content', array(
			//'sanitize_callback' => 'agridrive_repeater_sanitize',
			) );

			$wp_customize->add_control( new agridrive_services_repeater( $wp_customize, 'agridrive_services_content', array(
				'label'                             => esc_html__( 'Agridrive Service Content', 'agridrive' ),
				'section'                           => 'agridrive_service_section',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Service', 'agridrive' ),
				'item_name'                         => esc_html__( 'Service', 'agridrive' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}

}
add_action( 'customize_register', 'agridrive_services_customizer' );
	
?>

