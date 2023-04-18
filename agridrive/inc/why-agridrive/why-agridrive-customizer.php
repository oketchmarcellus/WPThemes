<?php

require_once( get_template_directory() . '/inc/why-agridrive/customizer-repeater-control.php' );

function why_agridrive_customizer( $wp_customize ) {
	if ( class_exists( 'why_agridrive_repeater' ) ) {
			$wp_customize->add_setting( 'why_agridrive_content', array(
			'sanitize_callback' => 'agridrive_repeater_sanitize',
			) );

			$wp_customize->add_control( new why_agridrive_repeater( $wp_customize, 'why_agridrive_content', array(
				'label'                             => esc_html__( 'Why Agridrive Content', 'agridrive' ),
				'section'                           => 'why_agridrive',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new', 'agridrive' ),
				'item_name'                         => esc_html__( 'Why Us', 'agridrive' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_text_control'  => true,
				) ) );
		}

}
add_action( 'customize_register', 'why_agridrive_customizer' );
	
?>

