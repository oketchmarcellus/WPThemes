<?php

require_once( get_template_directory() . '/includes/production-slider/customizer-repeater-control.php' );

function production_slider_customizer( $wp_customize ) {
// list control categories	
if ( ! class_exists( 'WP_Customize_Control' ) ) return NULL;

	// Home Slider Section
	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Manage Slider','musicstudio'),
            'description' =>sprintf(__('Options for homepage Slider','musicstudio')),
            'panel'  => 'homepage',
            'priority' =>79,
    ));
	
	//Hide or show slider
	
	$wp_customize->add_setting(
    'production_options[home_slider_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'production_options[home_slider_enabled]',
    array(
        'label' => __('Enable home slider','musicstudio'),
		'priority'   => 1,
        'section' => 'slider_section_settings',
        'type' => 'checkbox',
    )
	);
	 
	 
	if ( class_exists( 'Production_Repeater' ) ) {
			$wp_customize->add_setting( 'production_slider_content', array(
			'sanitize_callback' => 'production_repeater_sanitize',
			) );

			$wp_customize->add_control( new Production_Repeater( $wp_customize, 'production_slider_content', array(
				'label'                             => esc_html__( 'Slider Content', 'musicstudio' ),
				'priority'   => 2,
				'section'                           => 'slider_section_settings',
				'add_field_label'                   => esc_html__( 'Add new slide', 'musicstudio' ),
				'item_name'                         => esc_html__( 'Slide', 'musicstudio' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}

	//Slide Show Speed
	$wp_customize->add_setting(
    'production_options[slideshowSpeed]',
    array(
        'default' => '2500',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control(
    'production_options[slideshowSpeed]',
    array(
        'type' => 'select',
        'label' => __('Slideshow speed','musicstudio'),
        'section' => 'slider_section_settings',
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000'=>'2.0','2500'=>'2.5','3000'=>'3.0','3500'=>'3.5','4000'=>'4.0','4500'=>'4.5','5000'=>'5.0','5500'=>'5.5','6000'=>'6.0'),
		
		));	
		}
	add_action( 'customize_register', 'production_slider_customizer' );
	
	function production_slider_sanitize_layout( $value ) {
    if ( ! in_array( $value, array( 'Uncategorized','category_slider' ) ) )    
    return $value;
	}

	function production_repeater_sanitize($input){
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

