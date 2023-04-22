<?php

require_once( get_template_directory() . '/inc/agridrive-stats/customizer-repeater-control.php' );

function agridrive_stats_customizer( $wp_customize ) {
	
	if ( class_exists( 'agridrive_stats_Repeater' ) ) {
			$wp_customize->add_setting( 'agridrive_stats_content', array(
			'sanitize_callback' => 'agridrive_repeater_sanitize',
			) );

			$wp_customize->add_control( new agridrive_Stats_Repeater( $wp_customize, 'agridrive_stats_content', array(
				'label'                             => esc_html__( 'agridrive Stats Content', 'agridrive' ),
				'section'                           => 'statistics',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Stat', 'agridrive' ),
				'item_name'                         => esc_html__( 'Stats', 'agridrive' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_subtitle_control'  => true,
				) ) );
		}

}
add_action( 'customize_register', 'agridrive_stats_customizer' );