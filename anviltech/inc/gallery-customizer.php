<?php
/*
=================================
    Home page featured Products Gallery
=================================
*/
 
//Anviltech featured products Gallery
function anviltech_gallery( $wp_customize ) {

//Featured Products Section
 $wp_customize->add_section('featured_products',array(
            'title' => 'Featured Products section',
            'description' => 'Edit section title',
            'panel' =>'homepage',
            'priority' =>63,
    ));
//Hide or featured products gallery section
    $wp_customize->add_setting(
    'anviltech_options[featured_products_gallery_enabled]',
    array(
        'default' => false,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option',
    )   
    );
    $wp_customize->add_control(
    'anviltech_options[featured_products_gallery_enableds]',
    array(
        'label' => __('Enable featured Products section','anviltech'),
        'priority'   => 1,
        'section' => 'categories',
        'type' => 'checkbox',
    )
    );

//Featured products Title      
    $wp_customize->add_setting('featured_product_gallery_title',array(
            'default'   => __('Our featured products','anviltech'),
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('featured_product_gallery_title',array(
            'label' => __('Section Title ','anviltech'),
            'section'   => 'featured_products',
            'settings'   => 'featured_product_gallery_title'
    ));
//Featured products row 1 
//set product image Tag
    $wp_customize->add_setting( 
        'anviltech_options[product_tag1]',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/free-template-icon-revised-with-words.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[product_tag1]', array(
            'label'       => __( 'Free Product Tag image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'product_tag1',
            'description' => 'upload free tag image here.',
    )));
    $wp_customize->add_setting( 'img_upload_one');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_one', array(
            'label'       => __( 'Upload first image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'img_upload_one',
            'description' => 'Upload your first image here.'
    )));
//Product Title
    $wp_customize->add_setting('product1_title',array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('product1_title',array(
            'label' => __('Product1 Title ','anviltech'),
            'section'   => 'featured_products',
            'setting'   => 'product1_title',
    ));

// img two
     //set product image Tag
    $wp_customize->add_setting( 
        'anviltech_options[product_tag2]',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/free-template-icon-revised-with-words.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[product_tag2]', array(
            'label'       => __( 'Free Product Tag image::', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'product_tag2',
            'description' => 'upload free tag image here.',
    )));
    $wp_customize->add_setting( 'img_upload_two');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_two', array(
            'label'       => __( 'Upload second image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'img_upload_two',
            'description' => 'Upload your second image here.'
    )));
//Product Title
    $wp_customize->add_setting('product2_title',array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('product2_title',array(
            'label' => __('Product2 Title ','anviltech'),
            'section'   => 'featured_products',
            'setting'   => 'product2_title',
    ));

// img three
     //set product image Tag
    $wp_customize->add_setting( 
        'anviltech_options[product_tag3]',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/free-template-icon-revised-with-words.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[product_tag3]', array(
            'label'       => __( 'Free Product Tag image::', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'product_tag3',
            'description' => 'upload free tag image here.',
    )));
    $wp_customize->add_setting( 'img_upload_three');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_three', array(
            'label'       => __( 'Upload third image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'img_upload_three',
            'description' => 'Upload your third image here.'
    )));
//Product Title
    $wp_customize->add_setting('product3_title',array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('product3_title',array(
            'label' => __('Product Title ','anviltech'),
            'section'   => 'featured_products',
            'setting'   => 'product3_title',
    ));

// img four
     //set product image Tag
    $wp_customize->add_setting( 
        'anviltech_options[product_tag4]',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/free-template-icon-revised-with-words.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[product_tag4]', array(
            'label'       => __( 'Free product Tag image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'product_tag4',
            'description' => 'upload free tag image here.',
    )));
    $wp_customize->add_setting( 'img_upload_four');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_four', array(
            'label'       => __( 'Upload fourth image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'img_upload_four',
            'description' => 'Upload your fourth image here.'
    )));
//Product Title
    $wp_customize->add_setting('product4_title',array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('product4_title',array(
            'label' => __('Product4 Title ','anviltech'),
            'section'   => 'featured_products',
            'setting'   => 'product4_title',
    ));

//Featured products row 2 
// img one
    //set product image Tag
    $wp_customize->add_setting( 
        'anviltech_options[first_product_tag_rw2]',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/premium-tag2.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[first_product_tag_rw2]', array(
            'label'       => __( 'Premium Product Tag image::', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'first_product_tag_rw2',
            'description' => 'upload premium tag image here.',
    )));
    $wp_customize->add_setting( 'img_upload_one_rw2');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_one_rw2', array(
            'label'       => __( 'Upload first image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'img_upload_one_rw2',
            'description' => 'Upload your first image here.'
    )));
//Product Title
    $wp_customize->add_setting('rw2_product1_title',array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('rw2_product1_title',array(
            'label' => __('Product1 Title ','anviltech'),
            'section'   => 'featured_products',
            'setting'   => 'rw2_product1_title',
    ));
// img two
//set product image Tag
    $wp_customize->add_setting( 
        'anviltech_options[second_product_tag_rw2]',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/premium-tag2.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[second_product_tag_rw2]', array(
            'label'       => __( 'Premium Product Tag image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'second_product_tag_rw2',
            'description' => 'upload premium tag image here.',
    )));
    $wp_customize->add_setting( 'img_upload_two_rw2');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_two_rw2', array(
            'label'       => __( 'Upload second image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'img_upload_two_rw2',
            'description' => 'Upload your second image here.'
    )));
//Product Title
    $wp_customize->add_setting('rw2_product2_title',array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('rw2_product2_title',array(
            'label' => __('Product2 Title ','anviltech'),
            'section'   => 'featured_products',
            'setting'   => 'rw2_product2_title',
    ));

// img three
//set product image Tag
    $wp_customize->add_setting( 
        'anviltech_options[third_product_tag_rw2]',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/premium-tag2.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[third_product_tag_rw2]', array(
            'label'       => __( 'Premium Product Tag image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'third_product_tag_rw2',
            'description' => 'upload premium tag image here.',
    )));
    $wp_customize->add_setting( 'img_upload_three_rw2');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_three_rw2', array(
            'label'       => __( 'Upload third image:', 'anviltech' ),
            'section'     => 'featured_products',
            'settings'    => 'img_upload_three_rw2',
            'description' => 'Upload your third image here.'
    )));
//Product Title
    $wp_customize->add_setting('rw2_product3_title',array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('rw2_product3_title',array(
            'label' => __('Product3 Title ','anviltech'),
            'section'   => 'featured_products',
            'setting'   => 'rw2_product3_title',
    ));

// img four
//set product image Tag
    $wp_customize->add_setting( 
        'anviltech_options[fourth_product_tag_rw2]',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/premium-tag2.png'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[fourth_product_tag_rw2]', array(
            'label'       => __( 'Premium Product Tag image:', 'anviltech' ),
            'section'     => 'featured_product_gallery_row2',
            'settings'    => 'fourth_product_tag_rw2',
            'description' => 'upload premium tag image here.',
    )));
    $wp_customize->add_setting( 'img_upload_four_rw2');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'img_upload_four_rw2', array(
            'label'       => __( 'Upload fourth image:', 'anviltech' ),
            'section'     => 'featured_product_gallery_row2',
            'settings'    => 'img_upload_four_rw2',
            'description' => 'Upload your fourth image here.'
    )));
//Product Title
    $wp_customize->add_setting('rw2_product4_title',array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field',
            'type'  => 'theme_mod'
    ));
     $wp_customize->add_control('rw2_product4_title',array(
            'label' => __('Product4 Title ','anviltech'),
            'section'   => 'featured_product_gallery_row2',
            'setting'   => 'rw2_product4_title',
    ));

}
add_action( 'customize_register', 'anviltech_gallery' );
