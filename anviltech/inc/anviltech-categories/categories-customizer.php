<?php

function anviltech_categories_customizer( $wp_customize ) {
	//Add Popular Categories fields
	if ( class_exists( 'anviltech_repeater' ) ) {
			$wp_customize->add_setting( 'anviltech_categories_content', array(
			'sanitize_callback' => 'anviltech_repeater_sanitize',
			) );

			$wp_customize->add_control( new anviltech_repeater( $wp_customize, 'anviltech_categories_content', array(
				'label'                             => esc_html__( 'Popular Categories', 'anviltech' ),
				'section'                           => 'categories',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Category', 'anviltech' ),
				'item_name'                         => esc_html__( 'Category', 'anviltech' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}

}
add_action( 'customize_register', 'anviltech_categories_customizer' );

?>

