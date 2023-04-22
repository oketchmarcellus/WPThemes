<?php
/*
=================================
    Homepage Customizer
=================================
*/

function fctalanta_customize_register( WP_Customize_Manager $wp_customize ) {

// Transport postMessage
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
//Add Partial Refresh for blogname,Blogdescription & Other Custom Theme Modes
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title',
		'render_callback' => 'fctalanta_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'custom_logo', array(
		'selector' => '.tm-logo',
		'setting' => array( 'custom_logo' ),
	) );
	$wp_customize->selective_refresh->add_partial( 'header_image', array(
		'selector' => '.custom-header-media',
		'setting' => array( 'header_image' ),
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'fctalanta_customize_partial_blogdescription',
	) );
	$wp_customize->selective_refresh->add_partial( 'fctalanta_slider_content', array(
		'selector' => '.akslider-module ',
		'setting' => array('fctalanta_slider_content'),
	) );
	$wp_customize->selective_refresh->add_partial( 'fctalanta_options[latest_results_heading]', array(
		'selector' => '#latest-results',
		'setting' => array('latest_results_heading'),
	) );
	$wp_customize->selective_refresh->add_partial( 'fctalanta_options[about_heading]', array(
		'selector' => '#about-heading',
		'render_callback' => 'about_heading_customize_partial_edit',
	) );
	$wp_customize->selective_refresh->add_partial( 'fctalanta_options[support_heading]', array(
		'selector' => '#support-heading',
		'render_callback' => 'support_heading_customize_partial_edit',
	) );
	$wp_customize->selective_refresh->add_partial( 'statsbg_img_upload', array(
		'selector' => '.stats-img',
		'setting' => array('statsbg_img_upload'),
	) );
	$wp_customize->selective_refresh->add_partial( 'latest_news_heading', array(
		'selector' => '#news-heading',
		'render_callback' => 'fctalanta_customize_partial_latest_news_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'net_partners_heading', array(
		'selector' => '#networks-heading',
		'render_callback' => 'fctalanta_customize_partial_net_partners_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'newsletter_form_heading', array(
		'selector' => '#newsletter_form',
		'render_callback' => 'fctalanta_customize_newsletter_form_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'footer_bg_img', array(
		'selector' => '.footer-content',
		'setting' => array('footer_bg_img'),
	) );
// Add Home Page Panel
	 $wp_customize->add_panel('homepage', array(
	 	'title' => __('FC Talanta Theme options', 'fctalanta'), 
	 	'description' => '',
	    'priority' => 140,));
//subtitle		
	$wp_customize->add_section('main_section_title',array(
			'default'	=> __('Perfect Theme For Your Next Project','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' => 'postMessage',
			'type'  => 'theme_mod'
	));
    $wp_customize->add_control('main_section_title',array(
			'label'	=> __('column 1 subtitle ','fctalanta'),
			'section'	=> 'main_section',
			'setting'	=> 'main_section_title'
	));
//Custom colors
    // Site theme
	$wp_customize->add_setting('color_scheme',array(
			'default'           => apply_filters( 'color_scheme_selector_default', '#009a3f' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_scheme',
			array(
				'label'    => __( 'Color scheme hue selector', 'fctalanta' ),
				'section'  => 'colors',
				'settings' => 'color_scheme',
				'priority' => 13,
			)
		)
	);
	// Site heading Color
	$wp_customize->add_setting('heading_color',array(
			'default'           => apply_filters( 'heading_color_selector_default', '#790908' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_color',
			array(
				'label'    => __( 'Section Heading hue Selector', 'fctalanta' ),
				'section'  => 'colors',
				'settings' => 'heading_color',
				'priority' => 14,
			)
		)
	);
// Kode topbar color
	$wp_customize->add_setting('kode_topbar_bg',array(
			'default'           => apply_filters( 'kode_topbar_bg_color_default', '#009a3f' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kode_topbar_bg',
			array(
				'label'    => __( 'Kode topbar color Selector', 'fctalanta' ),
				'section'  => 'colors',
				'settings' => 'kode_topbar_bg',
				'priority' => 15,
			)
		)
	);
// Header widget area background color
	$wp_customize->add_setting('header_wrapper_bg',array(
			'default'           => apply_filters( 'header_wrapper_bg_color_default', '#f3f2d3' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_wrapper_bg',
			array(
				'label'    => __( 'Header wrapper background color Selector', 'fctalanta' ),
				'section'  => 'colors',
				'settings' => 'header_wrapper_bg',
				'priority' => 16,
			)
		)
	);
// why us background color
	$wp_customize->add_setting('whyus_bg_color',array(
			'default'           => apply_filters( 'whyus_bg_color_default', '#f1f1f1' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'whyus_bg_color',
			array(
				'label'    => __( 'Why us section bg Color', 'fctalanta' ),
				'section'  => 'colors',
				'settings' => 'whyus_bg_color',
				'priority' => 17,
			)
		)
	);
// Success stories background color
	$wp_customize->add_setting('success_storiesbg_color',array(
			'default'           => apply_filters( 'success_storiesbg_color_default', '#351200' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'success_storiesbg_color',
			array(
				'label'    => __( 'Success stories background color', 'fctalanta' ),
				'section'  => 'colors',
				'settings' => 'success_storiesbg_color',
				'priority' => 18,
			)
		)
	);
// Newsletter form background color
	$wp_customize->add_setting('newsletter_bg_color',array(
			'default'           => apply_filters( 'newsletter_bg_color_color_default', '#c2c320' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'newsletter_bg_color',
			array(
				'label'    => __( 'News form letter background color', 'fctalanta' ),
				'section'  => 'colors',
				'settings' => 'newsletter_bg_color',
				'priority' => 19,
			)
		)
	);
// Footer wrapper color
	$wp_customize->add_setting('footer_wrapper_color',array(
			'default'           => apply_filters( 'footer_wrapper_color_default', '#002e00' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_wrapper_color',
			array(
				'label'    => __( 'Footer Wrapper Color', 'fctalanta' ),
				'section'  => 'colors',
				'settings' => 'footer_wrapper_color',
				'priority' => 20,
			)
		)
	);	
// Home Slider Section
	$wp_customize->add_section('fctalanta_slider',array(
		'title' =>__('Fc Talanta Main Slider','fctalanta'),
	     'description' =>sprintf(__('Options for Home Slider','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>79,));
// statistics Section
	$wp_customize->add_section('latest_result',array(
		'title' =>__('Fc Talanta latest Results','fctalanta'),
	     'description' =>sprintf(__('Fc Talanta Latest results settings','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>82,));
// Home page Latest Post Section
	$wp_customize->add_section('about',array(
		'title' =>__('Fc Talanta About Section','fctalanta'),
	     'description' =>sprintf(__('Options for about Section','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>84,));
// Network and Partners Section
	$wp_customize->add_section('support',array(
		'title' =>__('Fc Talanta support team Section','fctalanta'),
	     'description' =>sprintf(__('Options for support section','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>85,));
// Newsletter form Section
	$wp_customize->add_section('nextevent',array(
		'title' =>__('Fc Talanta Next Match section','fctalanta'),
	     'description' =>sprintf(__('Add next match','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>86,));
// Latestnews Section
	$wp_customize->add_section('latestnews',array(
		'title' =>__('Fc Talanta News Section','fctalanta'),
	     'description' =>sprintf(__('Add news','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>87,));
// gallery Section
	$wp_customize->add_section('gallery',array(
		'title' =>__('Fc Talanta Gallery Section','fctalanta'),
	     'description' =>sprintf(__('Options for Gallery Section','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>88,));
//Achievements Section
	$wp_customize->add_section('achievements',array(
		'title' =>__('Fc Talanta Achievements Section','fctalanta'),
	     'description' =>sprintf(__('Options for achievements Section','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>89,));
// Our Team Section
	$wp_customize->add_section('ourteam',array(
		'title' =>__('Fc Talanta Team Section','fctalanta'),
	     'description' =>sprintf(__('Options for Team Section','fctalanta')),
	     'panel' => 'homepage',
	     'priority' =>90,));
//Hide or show fctalanta video presentation
	$wp_customize->add_setting(
    'fctalanta_options[fctalanta_video_presentation_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'fctalanta_options[fctalanta_video_presentation_enabled]',
    array(
        'label' => __('Enable video fctalanta presentation','fctalanta'),
		'priority'   => 1,
        'section' => 'video_presentation',
        'type' => 'checkbox',
    )
	);
//Hide or show Latest results section
	$wp_customize->add_setting(
    'fctalanta_options[latest_result_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'fctalanta_options[latest_result_enabled]',
    array(
        'label' => __('Enable Latest results Section','fctalanta'),
		'priority'   => 1,
        'section' => 'latest_result',
        'type' => 'checkbox',
    )
	);
	//Heading for Latest Results
	$wp_customize->add_setting('fctalanta_options[latest_results_heading]',array(
			'default'	=> __('Latest Results','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[latest_results_heading]',array(
			'label'	=> __('Latest Results Heading ','fctalanta'),
			'description' => __('Change the Latest Results Section Heading','fctalanta'),
			'section'	=> 'latest_result',
			'setting'	=> 'latest_results_heading'
	));
	//Latest results Match Venue
	$wp_customize->add_setting('fctalanta_options[latest_results_venue]',array(
			'default'	=> __('Cambridgeshire UK','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[latest_results_venue]',array(
			'label'	=> __('Match Venue ','fctalanta'),
			'description' => __('Add venue for latest results match','fctalanta'),
			'section'	=> 'latest_result',
			'setting'	=> 'latest_results_venue'
	));
	//Latest results Match kickoff
	$wp_customize->add_setting('fctalanta_options[latest_results_kickoff]',array(
			'default'	=> __('November 29, 2019 | 12:00 am','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[latest_results_kickoff]',array(
			'label'	=> __('Match kickoff ','fctalanta'),
			'description' => __('Add venue kickoff time for latest results match e.g November 29, 2015 | 12:00 am','fctalanta'),
			'section'	=> 'latest_result',
			'setting'	=> 'latest_results_kickoff'
	));

	//Latest Results Club Logo
	$wp_customize->add_setting( 'latest_result_home_team_club_logo',array(
            'default' => esc_url(get_template_directory_uri()).'/images/club-logo.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'latest_result_home_team_club_logo', array(
            'label'       => __( 'Home Team:', 'fctalanta' ),
            'section'     => 'latest_result',
            'settings'    => 'latest_result_home_team',
            'description' => 'Upload Home Team Club Logo,Dimensions 97 x 100px'
    )));
    //Latest Match Home Team Club Title
	$wp_customize->add_setting('fctalanta_options[latest_result_home_team_title]',array(
			'default'	=> __('Western Stima','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[latest_result_home_team_title]',array(
			'label'	=> __('Home team club title','fctalanta'),
			'description' => __('Add Home Team Club Title','fctalanta'),
			'section'	=> 'latest_result',
			'setting'	=> 'latest_result_home_team_title'
	));
    //Latest Match Home Team Goals
	$wp_customize->add_setting('fctalanta_options[home_score]',array(
			'default'	=> __('3','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[home_score]',array(
			'label'	=> __('Goals Scored by Home team','fctalanta'),
			'description' => __('Add Goals for Home Team','fctalanta'),
			'section'	=> 'latest_result',
			'setting'	=> 'home_score'
	));
    $wp_customize->add_setting( 'latest_result_away_team_club_logo',array(
            'default' => esc_url(get_template_directory_uri()).'/images/talanta-club-logo.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'latest_result_away_team_club_logo', array(
            'label'       => __( 'Away team:', 'fctalanta' ),
            'section'     => 'latest_result',
            'settings'    => 'latest_result_away_team_club_logo',
            'description' => 'Upload Away Team Club Logo,Dimensions 97 x 100px.'
    )));
    //Latest Match Away Team Club Title
	$wp_customize->add_setting('fctalanta_options[latest_result_away_team_title]',array(
			'default'	=> __('Fc Talanta','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[latest_result_away_team_title]',array(
			'label'	=> __('Away team club title','fctalanta'),
			'description' => __('Add Home Team Club Title','fctalanta'),
			'section'	=> 'latest_result',
			'setting'	=> 'latest_result_home_team_title'
	));
    //Latest Match Away Team Goals
    $wp_customize->add_setting('fctalanta_options[away_score]',array(
			'default'	=> __('2','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[away_score]',array(
			'label'	=> __('Goals Scored by Away team','fctalanta'),
			'description' => __('Add Goals for Away Team','fctalanta'),
			'section'	=> 'latest_result',
			'setting'	=> 'away_score'
	));
	//Latest Match Section content
	$wp_customize->add_setting('latest_match_post',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('latest_match_post',array(
			'label'	=> __('Select Content','production'),
			'section'	=> 'latest_result',
			'setting'	=> 'latest_match_post',
			'type' => 'dropdown-pages',
			'description' => 'Select post for more content on latest Match results'

	));
	//Hide or show about section
	$wp_customize->add_setting(
    'fctalanta_options[about_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
	$wp_customize->add_control(
    'fctalanta_options[about_section_enabled]',
    array(
        'label' => __('Enable about section','fctalanta'),
		'priority'   => 1,
        'section' => 'about',
        'type' => 'checkbox',
    ));
    //Heading for about
	$wp_customize->add_setting('fctalanta_options[about_heading]',array(
			'default'	=> __('About team','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[about_heading]',array(
			'label'	=> __('About Team Heading ','fctalanta'),
			'description' => __('Change the ABout Section Heading','fctalanta'),
			'section'	=> 'about',
			'setting'	=> 'about_heading'
	));
    //About Section Background Image
	$wp_customize->add_setting( 'about_bg_image',array(
            'default' => esc_url(get_template_directory_uri()).'/images/home-about-bg.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'about_bg_image', array(
            'label'       => __( 'Background Image:', 'fctalanta' ),
            'section'     => 'about',
            'settings'    => 'about_bg_image',
            'description' => 'Upload Background Image'
    )));
    $wp_customize->add_setting( 'about_team_content', array(
			'default'           => '2',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'about_team_content', array(
			'label'    => __( 'Select about Page', 'fctalanta' ),
			'section'  => 'about',
			'type'     => 'dropdown-pages'
		) );
	//Trainers Heading
	$wp_customize->add_setting('fctalanta_options[trainers_section_heading]',array(
			'default'	=> __('Trainers','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[trainers_section_heading]',array(
			'label'	=> __('Trainers Section Heading ','fctalanta'),
			'description' => __('Change the Trainers Section Heading','fctalanta'),
			'section'	=> 'about',
			'setting'	=> 'trainers_section_heading'
	));
	//About Trainers
	$wp_customize->add_setting( 'trainer1',array(
            'default' => esc_url(get_template_directory_uri()).'/images/trainer-slider/trainer-img.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'trainer1', array(
            'label'       => __( 'Change Trainers photo:', 'fctalanta' ),
            'section'     => 'about',
            'settings'    => 'trainer1',
            'description' => 'Upload trainer 1 photo here'
    )));
    //Trainer1 name
	$wp_customize->add_setting('fctalanta_options[trainer1_name]',array(
			'default'	=> __('Shem Ondieki','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[trainer1_name]',array(
			'label'	=> __('Trainers Name','fctalanta'),
			'section'	=> 'about',
			'setting'	=> 'trainer1_name'
	));
    $wp_customize->add_setting( 'trainer2',array(
            'default' => esc_url(get_template_directory_uri()).'/images/trainer-slider/trainer-img1.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'trainer2', array(
            'label'       => __( 'Change Trainers photo:', 'fctalanta' ),
            'section'     => 'about',
            'settings'    => 'trainer2',
            'description' => 'Upload trainer 2 photo here.'
    )));
    //Trainer2 name
	$wp_customize->add_setting('fctalanta_options[trainer2_name]',array(
			'default'	=> __('Shem Ondieki','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[trainer2_name]',array(
			'label'	=> __('Trainers Name','fctalanta'),
			'section'	=> 'about',
			'setting'	=> 'trainer2_name'
	));
	$wp_customize->add_setting( 'trainer3',array(
            'default' => esc_url(get_template_directory_uri()).'/images/trainer-slider/trainer-img2.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'trainer3', array(
            'label'       => __( 'Change Trainers photo:', 'fctalanta' ),
            'section'     => 'about',
            'settings'    => 'trainer3',
            'description' => 'Upload trainer 3 photo here.'
    )));
    //Trainer3 name
	$wp_customize->add_setting('fctalanta_options[trainer3_name]',array(
			'default'	=> __('Shem Ondieki','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[trainer3_name]',array(
			'label'	=> __('Trainers Name','fctalanta'),
			'section'	=> 'about',
			'setting'	=> 'trainer3_name'
	));

//Hide or show support Section
	$wp_customize->add_setting(
    'fctalanta_options[support_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'fctalanta_options[support_section_enabled]',
    array(
        'label' => __('Enable fctalanta support Section','fctalanta'),
		'priority'   => 1,
        'section' => 'support',
        'type' => 'checkbox',
    )
	);
//Heading for support section
$wp_customize->add_setting('fctalanta_options[support_heading]',array(
			'default'	=> __('Support Team','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('fctalanta_options[support_heading]',array(
			'label'	=> __('Support Team Section Heading ','fctalanta'),
			'description' => __('Change the heading for support team Section to your liking','fctalanta'),
			'section'	=> 'support',
			'setting'	=> 'support_heading'
	));
	//Text for support section
	$wp_customize->add_setting('fctalanta_options[support_text]',array(
			'default'	=> __('Donec ultrices pharetra bibendum. Aliquam velit tortor, maximus gravida nunc vitae, tincidunt dignissim erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi nec nisl a augue aliquam fringilla ac consectetur enim. Nullam sed pretium elit, eget fringilla nunc.','fctalanta'),
	        'capability' => 'edit_theme_options',
	        'sanitize_callback' => 'esc_textarea',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[support_text]',array(
			'label'	=> __('Support Section Content ','fctalanta'),
			'description' => __('Add content to support team Section','fctalanta'),
			'section'	=> 'support',
			'setting'	=> 'support_text',
			'type' => 'textarea'
	));
	//support Section Background Image
	$wp_customize->add_setting( 'support_bg_image',array(
            'default' => esc_url(get_template_directory_uri()).'/images/donate-bg.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'about_bg_image', array(
            'label'       => __( 'Background Image:', 'fctalanta' ),
            'section'     => 'support',
            'settings'    => 'support_bg_image',
            'description' => 'Upload Background Image'
    )));
	//Hide or show next event section
	$wp_customize->add_setting(
    'fctalanta_options[nextevent_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'fctalanta_options[nextevent_section_enabled]',
    array(
        'label' => __('Enable Next match section','fctalanta'),
		'priority'   => 1,
        'section' => 'nextevent',
        'type' => 'checkbox',
    )
	);
	//Next event heading
	$wp_customize->add_setting('fctalanta_options[nextevent_heading]',array(
			'default'	=> __('Next Match','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[nextevent_heading]',array(
			'label'	=> __('Next match section heading ','fctalanta'),
			'description' => __('Change the heading for next match section to your liking','fctalanta'),
			'section'	=> 'nextevent',
			'setting'	=> 'nextevent_heading'
	));
	//Next Match Timer
	$wp_customize->add_setting('fctalanta_options[nextevent_timer]',array(
			'default'	=> __('27-03-2019 12:00:00 ','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[nextevent_timer]',array(
			'label'	=> __('Next Match Count Down','fctalanta'),
			'description' => __('Change the time & date of next match to your liking','fctalanta'),
			'section'	=> 'nextevent',
			'setting'	=> 'nextevent_timer'
	));
	//Next Match Home Club Logo
	$wp_customize->add_setting( 'next_match_home_team_logo',array(
            'default' => esc_url(get_template_directory_uri()).'/images/talanta-ico.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'lnext_match_home_team', array(
            'label'       => __( 'Home Team:', 'fctalanta' ),
            'section'     => 'nextevent',
            'settings'    => 'next_match_home_team',
            'description' => 'Upload Home Team icon,Dimensions 32 x 32px'
    )));
 	//Next Match Home Team Club Title
	$wp_customize->add_setting('fctalanta_options[next_match_home_team_title]',array(
			'default'	=> __('Fc Talanta','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[next_match_home_team_title]',array(
			'label'	=> __('Home team club title','fctalanta'),
			'description' => __('Add Home Team Club Title','fctalanta'),
			'section'	=> 'nextevent',
			'setting'	=> 'next_match_team_title'
	));
    $wp_customize->add_setting( 'next_match_away_team_logo',array(
            'default' => esc_url(get_template_directory_uri()).'/images/team-ava1.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'next_match_away_team', array(
            'label'       => __( 'Away team:', 'fctalanta' ),
            'section'     => 'nextevent',
            'settings'    => 'next_match_away_team',
            'description' => 'Upload Away Team icon,Dimensions 32 x 32px.'
    )));
    //Next Match Away Team Club Title
	$wp_customize->add_setting('fctalanta_options[next_match_away_team_title]',array(
			'default'	=> __('Eldoret Youth','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[next_match_away_team_title]',array(
			'label'	=> __('Home team club title','fctalanta'),
			'description' => __('Add Home Team Club Title','fctalanta'),
			'section'	=> 'nextevent',
			'setting'	=> 'next_match_away_team_title'
	));
	//Latest results Match kickoff
	$wp_customize->add_setting('fctalanta_options[next_match_kickoff]',array(
			'default'	=> __('November 29, 2019 | 12:00 am','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[next_match_kickoff]',array(
			'label'	=> __('Match kickoff ','fctalanta'),
			'description' => __('Add kickoff time for Next match e.g November 29, 2015 | 12:00 am','fctalanta'),
			'section'	=> 'nextevent',
			'setting'	=> 'next_match_kickoff'
	));
	//Next Match Venue
	$wp_customize->add_setting('fctalanta_options[next_match_venue]',array(
			'default'	=> __('Camp Toyoyo, Nairobi','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
	$wp_customize->add_control('fctalanta_options[next_match_venue]',array(
			'label'	=> __('Match Venue ','fctalanta'),
			'description' => __('Add venue for Next match','fctalanta'),
			'section'	=> 'nextevent',
			'setting'	=> 'next_match_venue'
	));
	$wp_customize->add_setting( 'nextmatchbg_img',array(
            'default' => esc_url(get_template_directory_uri()).'/images/tr.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'nextmatchbg_img', array(
            'label'       => __( 'Change Next Match Section background image:', 'fctalanta' ),
            'section'     => 'nextevent',
            'settings'    => 'nextmatchbg_img',
            'description' => 'Upload your background image here.'
    )));
	//Latest News Section
	$wp_customize->add_setting(
    'fctalanta_options[latestnews_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'fctalanta_options[latestnews_section_enabled]',
    array(
        'label' => __('Enable latest news section','fctalanta'),
		'priority'   => 1,
        'section' => 'latestnews',
        'type' => 'checkbox',
    ));
    $wp_customize->add_setting('fctalanta_options[latestnews_heading]',array(
			'default'	=> __('Talanta News','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('fctalanta_options[latestnews_heading]',array(
			'label'	=> __('Latest news section heading ','fctalanta'),
			'description' => __('Change the heading for news section to your liking','fctalanta'),
			'section'	=> 'latestnews',
			'setting'	=> 'atestnews_heading'
	));	
	$wp_customize->add_setting('latestnews_intro_text',array(
			'default' => __('Keep it here for the latest news on FC Talanta, including scores, fixtures, results, form guide and league position. '),
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
		$wp_customize->add_control('latestnews_intro_text',array(
			'label'	=> __('Edit intro text','fctalanta'),
			'section'	=> 'latestnews',
			'setting'	=> 'latestnews_intro_text',
			'type' => 'textarea',
			'description' => 'Add default Content'
	));
		if ( class_exists( 'Category_Dropdown_Custom_Control' ) ) {
	$wp_customize->add_setting( 'latestnews_category_posts', array(
			'default'	=> 1,
			'sanitize_callback' => 'production_sanitize_integer',
		));

	$wp_customize->add_control( new Category_Dropdown_Custom_Control( $wp_customize, 'latestnews_category_posts', array(	 'label'      => esc_html__( 'Or Select Post Category for latest news content', 'fctalanta' ),
			'priority'   => 40,
			'section'    => 'latestnews',
			'setting'    =>'latestnews_category_posts',
			'description' => 'Add categories News first then Use featured image feature on contents post to choose image',
			)));
	}
	//Latest News Background Image
	$wp_customize->add_setting( 'latest_news_bg_image',array(
            'default' => esc_url(get_template_directory_uri()).'/images/our-news-bg.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'latest_news_bg_image', array(
            'label'       => __( 'Background Image:', 'fctalanta' ),
            'priority'   => 41,
            'section'     => 'latestnews',
            'settings'    => 'latest_news_bg_image',
            'description' => 'Upload Background Image'
    )));
	//Gallery Section
	$wp_customize->add_setting(
    'fctalanta_options[gallery_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'fctalanta_options[gallery_section_enabled]',
    array(
        'label' => __('Gallery news section','fctalanta'),
		'priority'   => 1,
        'section' => 'gallery',
        'type' => 'checkbox',
    ));
    $wp_customize->add_setting('fctalanta_options[gallery_heading]',array(
			'default'	=> __('Gallery','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('fctalanta_options[gallery_heading]',array(
			'label'	=> __('Gallery section heading ','fctalanta'),
			'description' => __('Change the heading for gallery section to your liking','fctalanta'),
			'section'	=> 'gallery',
			'setting'	=> 'gallery_heading'
	));	
	$wp_customize->add_setting('gallery_intro_text',array(
			'default' => __('Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. '),
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
		$wp_customize->add_control('gallery_intro_text',array(
			'label'	=> __('Edit intro text','fctalanta'),
			'section'	=> 'gallery',
			'setting'	=> 'gallery_intro_text',
			'type' => 'textarea',
			'description' => 'Add default Content'
	));
		$wp_customize->add_setting(
    'fctalanta_options[achievements_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'fctalanta_options[achievements_section_enabled]',
    array(
        'label' => __('Enable Achievements section','fctalanta'),
		'priority'   => 1,
        'section' => 'achievements',
        'type' => 'checkbox',
    ));
    $wp_customize->add_setting(
    'fctalanta_options[ourteam_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'fctalanta_options[ourteam_section_enabled]',
    array(
        'label' => __('Enable Players Profile section','fctalanta'),
		'priority'   => 1,
        'section' => 'achievements',
        'type' => 'checkbox',
    ));
    $wp_customize->add_setting('fctalanta_options[ourteam_heading]',array(
			'default'	=> __('Gallery','fctalanta'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('fctalanta_options[ourteam_heading]',array(
			'label'	=> __('Our team ','fctalanta'),
			'description' => __('Change the heading for gallery section to your liking','fctalanta'),
			'section'	=> 'ourteam',
			'setting'	=> 'ourteam_heading'
	));	
		$wp_customize->add_setting( 'ourteam_content', array(
			'default'           => '2',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'ourteam_content', array(
			'label'    => __( 'Select about Team page', 'fctalanta' ),
			'section'  => 'ourteam',
			'type'     => 'dropdown-pages'
	) );
		$wp_customize->add_setting( 'ourteambg_img',array(
            'default' => esc_url(get_template_directory_uri()).'/images/our-team-main-wrap-bg.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'ourteambg_img', array(
            'label'       => __( 'Change Team Profile background image:', 'fctalanta' ),
            'section'     => 'ourteam',
            'settings'    => 'ourteambg_img',
            'description' => 'Upload your background image here.'
    )));
	$wp_customize->add_setting( 'newsletterformbg_img',array(
            'default' => esc_url(get_template_directory_uri()).'/images/newsletter-bg.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'newsletterformbg_img', array(
            'label'       => __( 'Change contact form background image:', 'fctalanta' ),
            'section'     => 'newsletter',
            'settings'    => 'newsletterformbg_img',
            'description' => 'Upload your background image here.'
    )));
}
add_action('customize_register','fctalanta_customize_register');

function fctalanta_sanitize_integer( $input ) {
    return intval( $input );
}

/*Add render Callback for all referesh Partials*/
function fctalanta_customize_partial_blogname() {
	bloginfo( 'name' );
}
function fctalanta_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function fctalanta_customize_partial_phone() {
	return get_theme_mod( 'phone' );
}

/**
 * Enqueue scripts for customizer
 */
function fctalanta_customizer_scripts() {
	wp_enqueue_style( 'fctalanta_partial_edits_styler', get_template_directory_uri() . '/css/partial-edits.css', array(), 999 );
   wp_enqueue_script( 'fctalanta_customizer_script', esc_url( get_template_directory_uri() ) . '/js/customizer.js', array("jquery"), '1.0', true  );
}
add_action( 'customize_preview_init', 'fctalanta_customizer_scripts' );
