<?php

require_once( get_template_directory() . '/inc/fc-stats/customizer-repeater-control.php' );

function fc_talanta_stats_customizer( $wp_customize ) {
	
	if ( class_exists( 'fc_talanta_stats_repeater' ) ) {
			$wp_customize->add_setting( 'fc_talanta_stats_content', array(
			'sanitize_callback' => 'fc_talanta_repeater_sanitize',
			) );

			$wp_customize->add_control( new fc_talanta_stats_repeater( $wp_customize, 'fc_talanta_stats_content', array(
				'label'                             => esc_html__( 'Fc Talanta Achievement Stats', 'fc_talanta' ),
				'section'                           => 'achievements',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new statistic', 'fc_talanta' ),
				'item_name'                         => esc_html__( 'Stats', 'fc_talanta' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_subtitle_control'  => true,
				) ) );
		}

}
add_action( 'customize_register', 'fc_talanta_stats_customizer' );