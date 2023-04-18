<?php if ( ! function_exists( 'agridrive_networks_partners_defaults_customize_register' ) ) :
	
	function agridrive_networks_partners_defaults_customize_register( $wp_customize ) {

			 $agridrive_network_partner__control = $wp_customize->get_setting( 'agridrive_network_partners_content' );
			if ( ! empty( $agridrive_network_partner__control ) ) {
				$agridrive_network_partner__control->default = json_encode( array(
					array(
					'image_url'  => get_template_directory_uri().'/images/homepage/Our-partners-logo.png',
					),
					array(
					'image_url'  => get_template_directory_uri().'/images/homepage/Our-partners-logo.png',
					),
					array(
					'image_url'  => get_template_directory_uri().'/images/homepage/Our-partners-logo.png',
					),
					array(
					'image_url'  => get_template_directory_uri().'/images/homepage/Our-partners-logo.png',
					),
					array(
					'image_url'  => get_template_directory_uri().'/images/homepage/Our-partners-logo.png',
					),
					array(
					'image_url'  => get_template_directory_uri().'/images/homepage/Our-partners-logo.png',
					),
				) );

			}
			
		}
	add_action( 'customize_register', 'agridrive_networks_partners_defaults_customize_register' );
	
endif;