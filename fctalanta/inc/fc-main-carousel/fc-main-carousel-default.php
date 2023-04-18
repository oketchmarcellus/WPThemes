<?php if ( ! function_exists( 'fctalanta_slider_default_customize_register' ) ) :
	
	function fctalanta_slider_default_customize_register( $wp_customize ) {
		
			// fctalanta default slider data.
				$fctalanta_slider_content_control = $wp_customize->get_setting( 'fctalanta_slider_content' );
				if ( ! empty( $fctalanta_slider_content_control ) ) {
				$fctalanta_slider_content_control->default = json_encode( array(
				array(
				'title'      => esc_html__( 'Welcome to <span>Fc Talanta</span>', 'fctalanta' ),
				'subtitle'	 =>esc_html__( ' Beyond <span>The dream</span>', 'fctalanta' ),
				'button_text'      => 'Read More',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/images/main-slider-img0.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40y96',
				),
				array(
				'title'      => esc_html__( 'One spirit<span>One Team</span>One win', 'fctalanta' ),
				'subtitle'	 =>esc_html__( "Wininning isn't everything<span>its the only thing</span> Enjoy the game", 'fctalanta' ),
				'button_text'      => 'Read More',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/images/main-slider-img1.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40y98',
				),
			array(
				'title'      => esc_html__( 'Football is <span>Our passion</span>', 'fctalanta' ),
				'subtitle'	 =>esc_html__( 'United we play. <span>United we win.</span>', 'fctalanta' ),
				'button_text'      => 'Tour Now',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/images/main-slider-img2.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40y99',
				),));

		} 
	}
	add_action( 'customize_register', 'fctalanta_slider_default_customize_register' );
	
endif;


