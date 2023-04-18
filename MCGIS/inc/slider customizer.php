<?php
/*
=================================
    slider customizer section Admin
=================================
*/
 
//Customizer Carousel
function McGIS_home_sliders( $wp_customize ) {
// Add sliders section
 $wp_customize->add_section('home_slide_img_one',array(
            'title' => 'slider 1',
            'description' => 'This section updates all information pertaining to the first image in the slideshow of the home page 842 x 400px',
            'panel' =>'homepage',
            'priority' =>90,
    ));
    $wp_customize->add_setting( 'McGIS_slide_img_upload_one',array(
            'default' => esc_url(get_template_directory_uri()).'/img/default-slider.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'McGIS_slide_img_upload_one', array(
            'label'       => __( 'Upload image for first slide in sequence:', 'McGIS' ),
            'section'     => 'home_slide_img_one',
            'settings'    => 'McGIS_slide_img_upload_one',
            'description' => 'Upload your first slider image here.'
    )));
    $wp_customize->add_setting( 'McGIS_slide_title_1', array(
            'default' => 'slider 1',
            'sanitize_callback' => 'sanitize_headline_text',
    )); 

    $wp_customize->add_control( 'McGIS_slide_title_1', array(
           'type'    => 'text',
           'label'   => __( 'Heading Text Here:', 'McGIS' ),
           'section' => 'home_slide_img_one'
    ));
    $wp_customize->add_setting( 'McGIS_slide_text_1', array(
           'default' => 'No Descriptive Text Has Been Entered',
           'sanitize_callback' => 'sanitize_slide_descriptive_text'
    ));
    $wp_customize->add_control( 'McGIS_slide_text_1', array(
    'label'    => __( 'Descriptive Text Here:', 'McGIS' ),
    'section'  => 'home_slide_img_one',
    'settings' => 'McGIS_slide_text_1',
    'type'     => 'text'
));
    $wp_customize->add_setting( 'McGIS_slide_one_link', array(
         'default' => 'No Link URL Has Been Entered',
         'sanitize_callback' => 'sanitize_link_url',
    ));
    $wp_customize->add_control( 'McGIS_slide_one_link', array(
           'label'    => __( 'Slide 1 URL Here:', 'McGIS' ),
           'section'  => 'home_slide_img_one',
           'settings' => 'McGIS_slide_link',
           'type'     => 'text',
));

//Slider 2
    $wp_customize->add_section('home_slide_img_two',array(
            'title' => 'slider 2',
            'description' => 'This section updates all information pertaining to the second image in the slideshow of the home page 842 x 400px',
            'panel' =>'homepage',
            'priority' =>91,
    ));
    $wp_customize->add_setting( 'McGIS_slide_img_upload_two',array(
            'default' => esc_url(get_template_directory_uri()).'/img/default-slider.png')); 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'McGIS_slide_img_upload_two', array(
            'label'       => __( 'Upload image for second slide in sequence:', 'McGIS' ),
            'section'     => 'home_slide_img_two',
            'settings'    => 'McGIS_slide_img_upload_two',
            'description' => 'Upload your second slider image here.'
    )));
    $wp_customize->add_setting( 'McGIS_slide_title_2', array(
            'default' => 'slider 2',
            'sanitize_callback' => 'sanitize_headline_text',
    )); 

    $wp_customize->add_control( 'McGIS_slide_title_2', array(
           'type'    => 'text',
           'label'   => __( 'Heading Text Here:', 'McGIS' ),
           'section' => 'home_slide_img_two'
    ));
    $wp_customize->add_setting( 'McGIS_slide_text_2', array(
           'default' => 'No Descriptive Text Has Been Entered',
           'sanitize_callback' => 'sanitize_slide_descriptive_text'
    ));
    $wp_customize->add_control( 'McGIS_slide_text_2', array(
    'label'    => __( 'Descriptive Text Here:', 'McGIS' ),
    'section'  => 'home_slide_img_two',
    'settings' => 'McGIS_slide_text_2',
    'type'     => 'text'
));
    $wp_customize->add_setting( 'McGIS_slide_two_link', array(
         'default' => 'No Link URL Has Been Entered',
         'sanitize_callback' => 'sanitize_link_url',
    ));
    $wp_customize->add_control( 'McGIS_slide_two_link', array(
           'label'    => __( 'Slide 2 URL Here:', 'McGIS' ),
           'section'  => 'home_slide_img_two',
           'settings' => 'McGIS_slide_two_link',
           'type'     => 'text',
));    
//slider 3
  $wp_customize->add_section('home_slide_img_three',array(
            'title' => 'slider 3',
            'description' => 'This section updates all information pertaining to the three image in the slideshow of the home page 842 x 400px',
            'panel' =>'homepage',
            'priority' =>92,
    ));
    $wp_customize->add_setting( 'McGIS_slide_img_upload_three',array(
            'default' => esc_url(get_template_directory_uri()).'/img/default-slider.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'McGIS_slide_img_upload_three', array(
            'label'       => __( 'Upload image for third slide in sequence:', 'McGIS' ),
            'section'     => 'home_slide_img_three',
            'settings'    => 'McGIS_slide_img_upload_three',
            'description' => 'Upload your third slider image here.'
    )));
    $wp_customize->add_setting( 'McGIS_slide_title_3', array(
            'default' => 'slider 3',
            'sanitize_callback' => 'sanitize_headline_text',
    )); 

    $wp_customize->add_control( 'McGIS_slide_title_3', array(
           'type'    => 'text',
           'label'   => __( 'Heading Text Here:', 'McGIS' ),
           'section' => 'home_slide_img_three'
    ));
    $wp_customize->add_setting( 'McGIS_slide_text_3', array(
           'default' => 'No Descriptive Text Has Been Entered',
           'sanitize_callback' => 'sanitize_slide_descriptive_text'
    ));
    $wp_customize->add_control( 'McGIS_slide_text_3', array(
    'label'    => __( 'Descriptive Text Here:', 'McGIS' ),
    'section'  => 'home_slide_img_three',
    'settings' => 'McGIS_slide_text_3',
    'type'     => 'text'
));
    $wp_customize->add_setting( 'McGIS_slide_three_link', array(
         'default' => 'No Link URL Has Been Entered',
         'sanitize_callback' => 'sanitize_link_url',
    ));
    $wp_customize->add_control( 'McGIS_slide_three_link', array(
           'label'    => __( 'Slide 3 URL Here:', 'McGIS' ),
           'section'  => 'home_slide_img_three',
           'settings' => 'McGIS_slide_three_link',
           'type'     => 'text',
)); 
//slider 4
   $wp_customize->add_section('home_slide_img_four',array(
            'title' => 'slider 4',
            'description' => 'This section updates all information pertaining to the four image in the slideshow of the home page 842 x 400px',
            'panel' =>'homepage',
            'priority' =>93,
    ));
    $wp_customize->add_setting( 'McGIS_slide_img_upload_four',array(
            'default' => esc_url(get_template_directory_uri()).'/img/default-slider.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'McGIS_slide_img_upload_four', array(
            'label'       => __( 'Upload image for fourth slide in sequence:', 'McGIS' ),
            'section'     => 'home_slide_img_four',
            'settings'    => 'McGIS_slide_img_upload_four',
            'description' => 'Upload your fourth slider image here.'
    )));
    $wp_customize->add_setting( 'McGIS_slide_title_4', array(
            'default' => 'slider 4',
            'sanitize_callback' => 'sanitize_headline_text',
    )); 

    $wp_customize->add_control( 'McGIS_slide_title_4', array(
           'type'    => 'text',
           'label'   => __( 'Heading Text Here:', 'McGIS' ),
           'section' => 'home_slide_img_four'
    ));
    $wp_customize->add_setting( 'McGIS_slide_text_4', array(
           'default' => 'No Descriptive Text Has Been Entered',
           'sanitize_callback' => 'sanitize_slide_descriptive_text'
    ));
    $wp_customize->add_control( 'McGIS_slide_text_4', array(
    'label'    => __( 'Descriptive Text Here:', 'McGIS' ),
    'section'  => 'home_slide_img_four',
    'settings' => 'McGIS_slide_text_4',
    'type'     => 'text'
));
    $wp_customize->add_setting( 'McGIS_slide_four_link', array(
         'default' => 'No Link URL Has Been Entered',
         'sanitize_callback' => 'sanitize_link_url',
    ));
    $wp_customize->add_control( 'McGIS_slide_four_link', array(
           'label'    => __( 'Slide 4 URL Here:', 'McGIS' ),
           'section'  => 'home_slide_img_four',
           'settings' => 'McGIS_slide_four_link',
           'type'     => 'text',
));
//slider 5
  $wp_customize->add_section('home_slide_img_five',array(
            'title' => 'slider 5',
            'description' => 'This section updates all information pertaining to the five image in the slideshow of the home page 842 x 400px',
            'panel' =>'homepage',
            'priority' =>94,
    ));
    $wp_customize->add_setting( 'McGIS_slide_img_upload_five',array(
            'default' => esc_url(get_template_directory_uri()).'/img/default-slider.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'McGIS_slide_img_upload_five', array(
            'label'       => __( 'Upload image for fifth slide in sequence:', 'McGIS' ),
            'section'     => 'home_slide_img_five',
            'settings'    => 'McGIS_slide_img_upload_five',
            'description' => 'Upload your fifth slider image here.'
    )));
    $wp_customize->add_setting( 'McGIS_slide_title_5', array(
            'default' => 'slider 5',
            'sanitize_callback' => 'sanitize_headline_text',
    )); 

    $wp_customize->add_control( 'McGIS_slide_title_5', array(
           'type'    => 'text',
           'label'   => __( 'Heading Text Here:', 'McGIS' ),
           'section' => 'home_slide_img_five'
    ));
    $wp_customize->add_setting( 'McGIS_slide_text_5', array(
           'default' => 'No Descriptive Text Has Been Entered',
           'sanitize_callback' => 'sanitize_slide_descriptive_text'
    ));
    $wp_customize->add_control( 'McGIS_slide_text_5', array(
    'label'    => __( 'Descriptive Text Here:', 'McGIS' ),
    'section'  => 'home_slide_img_five',
    'settings' => 'McGIS_slide_text_5',
    'type'     => 'text'
));
    $wp_customize->add_setting( 'McGIS_slide_five_link', array(
         'default' => 'No Link URL Has Been Entered',
         'sanitize_callback' => 'sanitize_link_url',
    ));
    $wp_customize->add_control( 'McGIS_slide_five_link', array(
           'label'    => __( 'Slide 5 URL Here:', 'McGIS' ),
           'section'  => 'home_slide_img_five',
           'settings' => 'McGIS_slide_five_link',
           'type'     => 'text',
));   
//slider 6
  $wp_customize->add_section('home_slide_img_six',array(
            'title' => 'slider 6',
            'description' => 'This section updates all information pertaining to the sixth image in the slideshow of the home page 842 x 400px',
            'panel' =>'homepage',
            'priority' =>95,
    ));
    $wp_customize->add_setting( 'McGIS_slide_img_upload_six',array(
            'default' => esc_url(get_template_directory_uri()).'/img/default-slider.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'McGIS_slide_img_upload_six', array(
            'label'       => __( 'Upload image for sixth slide in sequence:', 'McGIS' ),
            'section'     => 'home_slide_img_six',
            'settings'    => 'McGIS_slide_img_upload_six',
            'description' => 'Upload your sixth slider image here.'
    )));
    $wp_customize->add_setting( 'McGIS_slide_title_6', array(
            'default' => 'slider 6',
            'sanitize_callback' => 'sanitize_headline_text',
    )); 

    $wp_customize->add_control( 'McGIS_slide_title_6', array(
           'type'    => 'text',
           'label'   => __( 'Heading Text Here:', 'McGIS' ),
           'section' => 'home_slide_img_six'
    ));
    $wp_customize->add_setting( 'McGIS_slide_text_6', array(
           'default' => 'No Descriptive Text Has Been Entered',
           'sanitize_callback' => 'sanitize_slide_descriptive_text'
    ));
    $wp_customize->add_control( 'McGIS_slide_text_6', array(
    'label'    => __( 'Descriptive Text Here:', 'McGIS' ),
    'section'  => 'home_slide_img_six',
    'settings' => 'McGIS_slide_text_6',
    'type'     => 'text'
));
    $wp_customize->add_setting( 'McGIS_slide_six_link', array(
         'default' => 'No Link URL Has Been Entered',
         'sanitize_callback' => 'sanitize_link_url',
    ));
    $wp_customize->add_control( 'McGIS_slide_six_link', array(
           'label'    => __( 'Slide 6 URL Here:', 'McGIS' ),
           'section'  => 'home_slide_img_six',
           'settings' => 'McGIS_slide_six_link',
           'type'     => 'text',
));

}
add_action( 'customize_register', 'McGIS_home_sliders' );

function sanitize_headline_text( $input ) {
return wp_kses_post( force_balance_tags( $input ) );
}
function sanitize_slide_descriptive_text( $input ) {
return wp_kses_post( force_balance_tags( $input ) );
}
function sanitize_link_url( $input ) {
return wp_kses_post( force_balance_tags( $input ) );
} 