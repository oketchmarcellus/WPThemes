<?php if ( ! function_exists( 'anviltech_contacts_defaults_customize_register' ) ) :
	
	function anviltech_contacts_defaults_customize_register( $wp_customize ) {

			 $agridrive_contact_page_content_control = $wp_customize->get_setting( 'agridrive_contact_page_content' );
			if ( ! empty( $agridrive_contact_page_content_control ) ) {
				$agridrive_contact_page_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa fa-map-marker',
					'title'      => esc_html__( 'Office', 'agridrive' ),
					'text'       => 'Old Naivasha Road, Nairobi Kenya
									ARCN Annex, No 3 Ibrahim Idris Street-Jabi Abuja, Nigeria',
					'id'         => 'customizer_repeater_56d7ea7f41c56',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-phone',
					'title'      => esc_html__( 'phone', 'agridrive' ),
					'text'       => '+254 20 42 23 752
									+234 98 70 16 84',
					'id'         => 'customizer_repeater_56d7ea7f41c66',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-envelope',
					'title'      => esc_html__( 'email', 'agridrive' ),
					'text'       => 'info@agridrive.ke
									 info@agridrive.co.ng',
					'id'         => 'customizer_repeater_56d7ea7f41c86',
					'color'      => '#113df0',
					),
				) );

			}
			
		}
	add_action( 'customize_register', 'anviltech_contacts_defaults_customize_register' );
	
endif;