<?php

require_once( get_template_directory() . '/inc/safari-awesomerooms-slider/customizer-repeater-control.php' );

function safari_awesome_rooms_slider_customizer( $wp_customize ) {
// list control categories	
if ( ! class_exists( 'WP_Customize_Control' ) ) return NULL;

	// Home Slider Section
	$wp_customize->add_section(
        'awesome_rooms_section_settings',
        array(
            'title' => __('Safari Awesome rooms Slider','safari'),
            'description' =>sprintf(__('Options for awesome rooms Slider','safari')),
            'panel'  => 'homepage',
            'priority' =>83,
    ));
	
	//Hide or show slider
	
	$wp_customize->add_setting(
    'safari_options[awesomerooms_slider_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'safari_options[awesomerooms_slider_enabled]',
    array(
        'label' => __('Enable Awesome rooms slider','safari'),
		'priority'   => 1,
        'section' => 'awesomerooms_slider_enabled',
        'type' => 'checkbox',
    )
	);
	 
	 
	if ( class_exists( 'Safari_awesomerooms_slider_Repeater' ) ) {
			$wp_customize->add_setting( 'safari_awesomerooms_slider_content', array(
			'sanitize_callback' => 'safari_repeater_sanitize',
			) );

			$wp_customize->add_control( new Safari_awesomerooms_slider_Repeater( $wp_customize, 'safari_awesomerooms_slider_content', array(
				'label'                             => esc_html__( 'safari Awesome Rooms Slider Content', 'safari' ),
				'priority'   => 2,
				'section'                           => 'awesome_rooms_section_settings',
				'add_field_label'                   => esc_html__( 'Add new slide', 'safari' ),
				'item_name'                         => esc_html__( 'Slide', 'safari' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}

		}
add_action( 'customize_register', 'safari_awesome_rooms_slider_customizer' );

