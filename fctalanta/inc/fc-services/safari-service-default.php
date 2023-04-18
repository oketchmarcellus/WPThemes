<?php if ( ! function_exists( 'safari_services_defaults_customize_register' ) ) :
	
	function safari_services_defaults_customize_register( $wp_customize ) {

			 $safari_services_content_control = $wp_customize->get_setting( 'safari_services_content' );
			if ( ! empty( $safari_services_content_control ) ) {
				$safari_services_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa fa-plane',
					'title'      => esc_html__( 'Early Booking', 'safari' ),
					'text'       => 'Lorem Ipsum is simply dummy text of the Live printing.',
					'id'         => 'customizer_repeater_56d7ea7f40z56',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-car',
					'title'      => esc_html__( 'Beautiful Journey', 'safari' ),
					'text'       => 'Lorem Ipsum is simply dummy text of the Live printing.',
					'id'         => 'customizer_repeater_56d7ea7f40z66',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-briefcase',
					'title'      => esc_html__( 'Customer Pleasure', 'safari' ),
					'text'       => 'Lorem Ipsum is simply dummy text of the Live printing.',
					'id'         => 'customizer_repeater_56d7ea7f40z86',
					'color'      => '#113df0',
					),
					
					array(
					'icon_value' => 'fa fa-smile-o',
					'title'      => esc_html__( 'Diverse Destination', 'safari' ),
					'text'       => 'Lorem Ipsum is simply dummy text of the Live printing.',
					'id'         => 'customizer_repeater_56d7ea7f40z96',
					'color'      => '#113df0',
					),
					
					
				) );

			}
			
		}
	add_action( 'customize_register', 'safari_services_defaults_customize_register' );
	
endif;