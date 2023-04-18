<?php

require_once( get_template_directory() . '/inc/anviltech-service/customizer-repeater-control.php' );

function anviltech_service_customizer( $wp_customize ) {
 
	//Service section panel
	$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Service sections', 'anviltech'),
		'panel'		=>'homepage',
		'priority'       => 59,
   	) );
	
	
	//Hide or show frontpage Service Section
	
	$wp_customize->add_setting(
    'anviltech_options[service_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'anviltech_options[service_section_enabled]',
    array(
        'label' => __('Enable Service section on front page','anviltech'),
        'section' => 'service_section_head',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
    'anviltech_options[service_title]',
    array(
        'default' =>__('We Are Experts In','anviltech'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'anviltech_options[service_title]',
    array(
        'label' => __('Edit Section Title','anviltech'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);

	if ( class_exists( 'anviltech_repeater' ) ) {
			$wp_customize->add_setting( 'anviltech_service_content', array(
			'sanitize_callback' => 'anviltech_repeater_sanitize',
			) );

			$wp_customize->add_control( new anviltech_repeater( $wp_customize, 'anviltech_service_content', array(
				'label'                             => esc_html__( 'Service Content', 'anviltech' ),
				'section'                           => 'service_section_head',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Service', 'anviltech' ),
				'item_name'                         => esc_html__( 'Service', 'anviltech' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}

}
add_action( 'customize_register', 'anviltech_service_customizer' );

function anviltech_repeater_sanitize($input){
	$input_decoded = json_decode($input,true);
	
	if(!empty($input_decoded)) {
		foreach ($input_decoded as $boxk => $box ){
			foreach ($box as $key => $value){

					$input_decoded[$boxk][$key] = wp_kses_post( force_balance_tags( $value ) );

			}
		}
		return json_encode($input_decoded);
	}
	return $input;
}
	?>

