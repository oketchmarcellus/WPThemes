<?php if ( ! function_exists( 'anviltech_services_defaults_customize_register' ) ) :
	
	function anviltech_services_defaults_customize_register( $wp_customize ) {

			 $anviltech_service_content_control = $wp_customize->get_setting( 'anviltech_service_content' );
			if ( ! empty( $anviltech_service_content_control ) ) {
				$anviltech_service_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa fa-html5',
					'title'      => esc_html__( 'Html5', 'anviltech' ),
					'text'       => 'Have that idea for your site quickly converted into an Html 5 mockup.',
					'id'         => 'customizer_repeater_56d7ea7f40b56',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-android',
					'title'      => esc_html__( 'Android', 'anviltech' ),
					'text'       => 'We currently have ongoing projects for android.',
					'id'         => 'customizer_repeater_56d7ea7f40b66',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-wordpress',
					'title'      => esc_html__( 'WordPress', 'anviltech' ),
					'text'       => 'We create and customize wordpress themes to your liking.',
					'id'         => 'customizer_repeater_56d7ea7f40b86',
					'color'      => '#113df0',
					),
					
					array(
					'icon_value' => 'fa fa-joomla',
					'title'      => esc_html__( 'Joomla', 'anviltech' ),
					'text'       => 'We create joomla templates from scratch for your site.',
					'id'         => 'customizer_repeater_56d7ea7f40b96',
					'color'      => '#113df0',
					),
					
					
				) );

			}
			
		}
	add_action( 'customize_register', 'anviltech_services_defaults_customize_register' );
	
endif;