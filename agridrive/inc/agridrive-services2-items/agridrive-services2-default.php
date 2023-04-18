<?php if ( ! function_exists( 'why_agridrive_defaults_customize_register' ) ) :
	
	function why_agridrive_defaults_customize_register( $wp_customize ) {

			 $why_agridrive_content_content_control = $wp_customize->get_setting( 'why_agridrive_content' );
			if ( ! empty( $why_agridrive_content_content_control ) ) {
				$why_agridrive_content_content_control->default = json_encode( array(
					array(
					'image_url'  => get_template_directory_uri().'/images/icons/INNOVATION.png',
					'title'      => esc_html__( 'innovations', 'agridrive' ),
					'text'       => 'Innovation is at the heart of our business operations. We have a team of experts who are continuously researching new ways of improving agribusiness productivity in Africa. This has enabled us to provide tomorrow’s technology today. With Agridrive, you will be receiving cutting-edge solutions as they are released right from our innovation labs.',
					),
					array(
					'image_url'  => get_template_directory_uri().'/images/icons/ONE-STOP-SHOP-SOLUTIONS.png',
					'title'      => esc_html__( 'one stop shop solutions', 'agridrive' ),
					'text'       => "Agridrive provides all the agribusiness solutions under one roof so that you don't have to deal with fragmented services from different suppliers with varying quality. We provide solutions right from plantation phase through to selling phase. We are keen on offering you the convenience you need and at much lower cost.",
					),
					array(
					'image_url'  => get_template_directory_uri().'/images/icons/SUSTAINABLE-APPROACHES.png',
					'title'      => esc_html__( 'sustainable approaches', 'agridrive' ),
					'text'       => "We’ve embraced and inculcated sustainability approaches in our all our agribusiness solutions. Agridrive recognizes and appreciates the need to conserve our environment in as so much as it’s dedicated to contributing towards food security in Africa. Thus our solutions harmonize with the local ecosystem in order to support the long-term global sustainability agenda..",
					),
				) );

			}
			
		}
	add_action( 'customize_register', 'why_agridrive_defaults_customize_register' );
	
endif;