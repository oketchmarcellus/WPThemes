<?php
require_once( get_template_directory() . '/inc/agridrive-partners/customizer-repeater-control.php' );
function agridrive_parters_customizer( $wp_customize ) {

	if ( class_exists( 'agridrive_partners_repeater' ) ) {
			$wp_customize->add_setting( 'agridrive_network_partners_content', array(
			'sanitize_callback' => 'agridrive_repeater_sanitize',
			) );

			$wp_customize->add_control( new agridrive_partners_repeater( $wp_customize, 'agridrive_network_partners_content', array(
				'label'                             => esc_html__( 'Agridrive Partners logos', 'agridrive' ),
				'section'                           => 'network-partners',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Customer or Partner logos', 'agridrive' ),
				'item_name'                         => esc_html__( 'Logo', 'agridrive' ),
				'customizer_repeater_image_control' => true,
				) ) );
		}

}
add_action( 'customize_register', 'agridrive_parters_customizer' );

?>

