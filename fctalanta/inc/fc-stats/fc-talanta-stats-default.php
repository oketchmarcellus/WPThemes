<?php if ( ! function_exists( 'fc_talanta_stats_defaults_customize_register' ) ) :
	
	function fc_talanta_stats_defaults_customize_register( $wp_customize ) {

			 $fc_talanta_stats_content_control = $wp_customize->get_setting( 'fc_talanta_stats_content' );
			if ( ! empty( $fc_talanta_stats_content_control ) ) {
				$fc_talanta_stats_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa fa-globe',
					'title'      => esc_html__( '35', 'fctalanta' ),
					'subtitle'       => 'goals',
					'image_url'  => get_template_directory_uri().'/images/stat-icon.png',
					'id'         => 'customizer_repeater_56d7ea7f40y66',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-home',
					'title'      => esc_html__( '12', 'fctalanta' ),
					'subtitle'       => 'games played',
					'image_url'  => get_template_directory_uri().'/images/stat-icon1.png',
					'id'         => 'customizer_repeater_56d7ea7f40y67',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-users',
					'title'      => esc_html__( '13', 'fctalanta' ),
					'subtitle'       => 'Violations',
					'image_url'  => get_template_directory_uri().'/images/stat-icon2.png',
					'id'         => 'customizer_repeater_56d7ea7f40y68',
					'color'      => '#113df0',
					),
					
					array(
					'icon_value' => 'fa fa-plane',
					'title'      => esc_html__( '8', 'fctalanta' ),
					'subtitle'       => 'Awards',
					'image_url'  => get_template_directory_uri().'/images/stat-icon3.png',
					'id'         => 'customizer_repeater_56d7ea7f40y69',
					'color'      => '#113df0',
					),
					
					
				) );

			}
			
		}
	add_action( 'customize_register', 'fc_talanta_stats_defaults_customize_register' );
	
endif;