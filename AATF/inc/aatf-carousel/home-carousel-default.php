<?php if ( ! function_exists( 'agridrive_slider_default_customize_register' ) ) :
	
	function agridrive_slider_default_customize_register( $wp_customize ) {
		
			// agridrive default slider data.
				$agridrive_slider_content_control = $wp_customize->get_setting( 'agridrive_slider_content' );
				if ( ! empty( $agridrive_slider_content_control ) ) {
				$agridrive_slider_content_control->default = json_encode( array(
				array(
				'title'      => esc_html__( 'welcome to', 'agridrive' ),
				'subtitle'	 =>esc_html__( 'agridrive limited', 'agridrive' ),
				'text'       => esc_html__( 'Recording StudioEmpowering Dreams Through Agribusiness Technology Solutions.', 'agridrive' ),
				'button_text'      => 'learn more',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/images/slides/slide-0.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b96',
				),
				array(
				'title'      => esc_html__( 'Innovative Solutions', 'agridrive' ),
				'subtitle'	 =>esc_html__( 'beyond agriculture', 'agridrive' ),
				'text'       => esc_html__( 'Providing Agribusiness Solutions That Transform Livelihoods.', 'agridrive' ),
				'button_text'      => 'learn more',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/images/slides/slide-1.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b98',
				),
				array(
				'title'      => esc_html__( 'Ushering a new world of', 'agridrive' ),
				'subtitle'	 =>esc_html__( ' opportunities in africa', 'agridrive' ),
				'text'       => esc_html__( 'Creating Great Business Opportunities For Agriprenuers in Sub-Saharan Africa.', 'agridrive' ),
				'button_text'      => 'learn more',
				'link'       => '#',
				'image_url'  =>  get_template_directory_uri().'/images/slides/slide-2.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b99',
				),
				array(
				'title'      => esc_html__( 'The one stop solution', 'agridrive' ),
				'subtitle'	 =>esc_html__( 'for agribusiness africa', 'agridrive' ),
				'text'       => esc_html__( 'We Provide End-to-End Innovative Agricultural Solutions For Farmers in Sub-Saharan Africa.', 'agridrive' ),
				'button_text'      => 'Contact Us',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/images/slides/slide-3.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b97',
				)));

		} 
	}
	add_action( 'customize_register', 'agridrive_slider_default_customize_register' );
	
endif;


