<?php if ( ! function_exists( 'production_slider_default_customize_register' ) ) :
	
	function production_slider_default_customize_register( $wp_customize ) {
		
			// Production default slider data.
				$production_slider_content_control = $wp_customize->get_setting( 'production_slider_content' );
				if ( ! empty( $production_slider_content_control ) ) {
				$production_slider_content_control->default = json_encode( array(
				array(
				'title'      => esc_html__( 'Proffesional', 'production' ),
				'text'       => esc_html__( 'Recording Studio.', 'production' ),
				'button_text'      => 'Read more',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/assets/img/slide0.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b96',
				),
				array(
				'title'      => esc_html__( 'Rock your world', 'production' ),
				'text'       => esc_html__( 'Turn the beat Up.', 'production' ),
				'button_text'      => 'Read more',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/assets/img/slide1.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b97',
				),
				array(
				'title'      => esc_html__( 'Mixins', 'production' ),
				'text'       => esc_html__( 'crazy Beat.', 'production' ),
				'button_text'      => 'Read more',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/assets/img/slide2.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b98',
				),
				array(
				'title'      => esc_html__( 'Music Production', 'production' ),
				'text'       => esc_html__( 'We are Sound Engineers.', 'production' ),
				'button_text'      => 'Read more',
				'link'       => '#',
				'image_url'  =>  get_template_directory_uri().'/assets/img/slide3.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b99',
				)));

		} 
	}
	add_action( 'customize_register', 'production_slider_default_customize_register' );
	
endif;


