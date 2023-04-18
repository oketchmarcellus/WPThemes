<?php
/*
=================================
    Home page offer Gallery
=================================
*/
 
//Offer Gallery
function fashionHouse_gallery( $wp_customize ) {
// img one
 $wp_customize->add_section('home_offers_gallery',array(
            'title' => 'Gallery images',
            'description' => 'Upload your gallery images',
            'panel' =>'homepage',
            'priority' =>64,
    ));
    $wp_customize->add_setting( 'img_upload_one',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/banner005.jpg'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_one', array(
            'label'       => __( 'Upload first image:', 'fashionHouse' ),
            'section'     => 'home_offers_gallery',
            'settings'    => 'img_upload_one',
            'description' => 'Upload your first image here.'
    )));

// img two
    $wp_customize->add_setting( 'img_upload_two',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/fashion-template---for-sale-sections-1.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_two', array(
            'label'       => __( 'Upload second image:', 'fashionHouse' ),
            'section'     => 'home_offers_gallery',
            'settings'    => 'img_upload_two',
            'description' => 'Upload your second image here.'
    )));
// img three
    $wp_customize->add_setting( 'img_upload_three',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/tumblr_ofbrlkNerq1udy1aoo1_500.jpg'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_three', array(
            'label'       => __( 'Upload third image:', 'fashionHouse' ),
            'section'     => 'home_offers_gallery',
            'settings'    => 'img_upload_three',
            'description' => 'Upload your third image here.'
    )));
// img four
    $wp_customize->add_setting( 'img_upload_four',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/medium_banner--001.jpg'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_four', array(
            'label'       => __( 'Upload fourth image:', 'fashionHouse' ),
            'section'     => 'home_offers_gallery',
            'settings'    => 'img_upload_four',
            'description' => 'Upload your fourth image here.'
    )));
// img five
    $wp_customize->add_setting( 'img_upload_five',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/fashion-template---for-sale-sections-2.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_five', array(
            'label'       => __( 'Upload fifth image:', 'fashionHouse' ),
            'section'     => 'home_offers_gallery',
            'settings'    => 'img_upload_five',
            'description' => 'Upload your fifth image here.'
    )));
}
add_action( 'customize_register', 'fashionHouse_gallery' );
