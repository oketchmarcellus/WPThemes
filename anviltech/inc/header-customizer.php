<?php
/*
=================================
    Header Titles Customizer
=================================
*/
function anviltech_header_subtitle_register( $wp_customize ) {		
    //Button text		
	$wp_customize->add_setting('button_text',array(
			'default'	=> __('Find out More','anviltech'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'priority' =>3,
	));
     $wp_customize->add_control('button_text',array(
			'label'	=> __('Button Text ','anviltech'),
			'section'	=> 'title_tagline',
			'setting'	=> 'button_text',
    ));

    //set button background image
	$wp_customize->add_setting( 'button_bg',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/button-background2.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'button_bg', array(
            'label'       => __( 'Button Background image:', 'anviltech' ),
            'section'     => 'title_tagline',
            'settings'    => 'button_bg',
            'description' => 'style and upload button backgound here.',
    )));
}
add_action('customize_register','anviltech_header_subtitle_register');
?>