<?php
/*
=================================
    Page select Customizer
=================================
*/
function prefix_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'showcase' , array(
    		'title'      => __( 'View Pages', 'prodigi' ),
		'priority'   => 30,
	) );

// Add color scheme setting and control.
		$wp_customize->add_setting( 'showcase-page-', array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'showcase-page-', array(
			'label'    => __( 'Select Page', 'prodigi' ),
			'section'  => 'showcase',
			'type'     => 'dropdown-pages'
		) );

}
add_action( 'customize_register', 'prefix_customize_register' );
