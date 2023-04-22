<?php if ( ! function_exists( 'agridrive_stats_defaults_customize_register' ) ) :
	
	function agridrive_stats_defaults_customize_register( $wp_customize ) {

			 $agridrive_stats_content_control = $wp_customize->get_setting( 'agridrive_stats_content' );
			if ( ! empty( $agridrive_stats_content_control ) ) {
				$agridrive_stats_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa fa-globe',
					'title'      => esc_html__( '16,000+ HA', 'agridrive' ),
					'subtitles'       => 'Mechanized to date',
					'id'         => 'customizer_repeater_56d7ea7f40y66',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-home',
					'title'      => esc_html__( '2000+', 'agridrive' ),
					'subtitles'       => 'Trained Farmers',
					'id'         => 'customizer_repeater_56d7ea7f40y67',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-users',
					'title'      => esc_html__( '12+', 'agridrive' ),
					'subtitles'       => 'Mechanization Technolgies Applied',
					'id'         => 'customizer_repeater_56d7ea7f40y68',
					'color'      => '#113df0',
					),
					
					array(
					'icon_value' => 'fa fa-plane',
					'title'      => esc_html__( '5+', 'agridrive' ),
					'subtitles'       => 'Countries in Africa','agridrive',
					'id'         => 'customizer_repeater_56d7ea7f40y69',
					'color'      => '#113df0',
					),
					
					
				) );

			}
			
		}
	add_action( 'customize_register', 'agridrive_stats_defaults_customize_register' );
	
endif;