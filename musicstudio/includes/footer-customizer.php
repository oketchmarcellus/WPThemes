<?php
/*
=================================
    Footer Customizer
=================================
*/
 
function prodigi_footer_customize_register( $wp_customize ) {
// Footer Components Section
	$wp_customize->add_section('footer_section',array(
		'title' =>__('Production Footer Components','production'),
	     'description' =>sprintf(__('Options for the Footer','production')),
	     'priority' =>400,));	
// Add icons, labels & Controls for Home Page footer content
//footer bg-image	
    $wp_customize->add_setting( 'footer_bg_img',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/footer-bg-img.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'footer_bg_img', array(
            'label'       => __( 'Footer Background img:', 'production' ),
            'section'     => 'footer_section',
            'settings'    => 'footer_bg_img',
            'description' => 'Upload the footer background here.'
    )));
    $wp_customize->add_setting( 'footer_location_icon',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/production-template-icons-homepage-location.png',
            'transport' =>'postMessage',));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'footer_location_icon', array(
            'label'       => __( 'Upload location icon:', 'production' ),
            'section'     => 'footer_section',
            'settings'    => 'footer_location_icon',
            'description' => 'Upload the location icon here,40 x 40px.'
    )));
    $wp_customize->add_setting( 'footer_phone_icon',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/production-template-icons-homepage-call.png',
            'transport' =>'postMessage',));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'footer_phone_icon', array(
            'label'       => __( 'Upload phone contact icon:', 'production' ),
            'section'     => 'footer_section',
            'settings'    => 'footer_phone_icon',
            'description' => 'Upload the phone icon here,40 x 40px.'
    )));
    $wp_customize->add_setting( 'footer_email_icon',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/production-template-icons-homepage-email.png',
            'transport' =>'postMessage',));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'footer_email_icon', array(
            'label'       => __( 'Upload email contact icon:', 'production' ),
            'section'     => 'footer_section',
            'settings'    => 'footer_email_icon',
            'description' => 'Upload the email icon here,40 x 40px.'
    )));
// Add Social Icons
	$wp_customize->add_section('socicons',array(
		'title' =>__('social media','prodigi'),
	     'description' =>sprintf(__('Connect to your Social media','prodigi')),
	     'panel' => 'footer_customizer',
	     'priority' =>4,));
}
add_action('customize_register','prodigi_footer_customize_register');
?>