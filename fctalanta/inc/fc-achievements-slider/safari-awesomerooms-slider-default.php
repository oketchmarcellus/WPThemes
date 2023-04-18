<?php if ( ! function_exists( 'safari_awesomerooms_default_customize_register' ) ) :
	
	function safari_awesomerooms_default_customize_register( $wp_customize ) {
		
			// safari default slider data.
				$safari_awesomerooms_slider_content_control = $wp_customize->get_setting( 'safari_awesomerooms_slider_content' );
				if ( ! empty( $safari_awesomerooms_slider_content_control ) ) {
				$safari_awesomerooms_slider_content_control->default = json_encode( array(
				array(
				'title'      => esc_html__( 'slide1', 'safari' ),
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/assets/images/2017/05/hotel-750x420-3-555x420.jpg.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40w92',
				),
				array(
				'title'      => esc_html__( 'slide2', 'safari' ),
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/assets/images/2017/05/hotel-750x420-1-555x420.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40w93',
				),
				array(
				'title'      => esc_html__( 'slide3', 'safari' ),
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/assets/images/2017/05/hotel-750x420-2-555x420.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40w94',
				),
				array(
				'title'      => esc_html__( 'slide4', 'safari' ),
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/assets/images/2017/05/hotel-750x420-1-555x420.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40w95',
				),));

		} 
	}
	add_action( 'customize_register', 'safari_awesomerooms_default_customize_register' );
	
endif;


