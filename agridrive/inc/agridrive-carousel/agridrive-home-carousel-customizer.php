<?php

require_once( get_template_directory() . '/inc/agridrive-carousel/customizer-repeater-control.php' );

function agridrive_slider_customizer( $wp_customize ) {
// list control categories	
if ( ! class_exists( 'WP_Customize_Control' ) ) return NULL;

	// Home Slider Section
	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Manage Agridrive Home Slider','agridrive'),
            'description' =>sprintf(__('Options for homepage Slider','agridrive')),
            'panel'  => 'homepage',
            'priority' =>55,
    ));
	
	//Hide or show slider
	
	$wp_customize->add_setting(
    'agridrive_options[home_slider_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[home_slider_enabled]',
    array(
        'label' => __('Enable home slider','agridrive'),
		'priority'   => 1,
        'section' => 'slider_section_settings',
        'type' => 'checkbox',
    )
	);
	 
	 
	if ( class_exists( 'Agridrive_Repeater' ) ) {
			$wp_customize->add_setting( 'agridrive_slider_content', array(
			'sanitize_callback' => 'agridrive_repeater_sanitize',
			) );

			$wp_customize->add_control( new Agridrive_Repeater( $wp_customize, 'agridrive_slider_content', array(
				'label'                             => esc_html__( 'Agridrive Main Slider Content', 'agridrive' ),
				'priority'   => 2,
				'section'                           => 'slider_section_settings',
				'add_field_label'                   => esc_html__( 'Add new slide', 'agridrive' ),
				'item_name'                         => esc_html__( 'Slide', 'agridrive' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_subtitle_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}

	//Slide Show Speed
	$wp_customize->add_setting(
    'agridrive_options[slideshowSpeed]',
    array(
        'default' => '2500',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control(
    'agridrive_options[slideshowSpeed]',
    array(
        'type' => 'select',
        'label' => __('Slideshow speed','agridrive'),
        'section' => 'slider_section_settings',
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000'=>'2.0','2500'=>'2.5','3000'=>'3.0','3500'=>'3.5','4000'=>'4.0','4500'=>'4.5','5000'=>'5.0','5500'=>'5.5','6000'=>'6.0'),
		
		));	
		}
	add_action( 'customize_register', 'agridrive_slider_customizer' );

	function agridrive_repeater_sanitize($input){
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

