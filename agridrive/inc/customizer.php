<?php
/*
=================================
    Homepage Customizer
=================================
*/

function agridrive_customize_register( WP_Customize_Manager $wp_customize ) {

// Transport postMessage
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
//Add Partial Refresh for blogname,Blogdescription & Other Custom Theme Modes
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title',
		'render_callback' => 'agridrive_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'custom_logo', array(
		'selector' => '#site-logo',
		'setting' => array( 'custom_logo' ),
	) );
	$wp_customize->selective_refresh->add_partial( 'header_image', array(
		'selector' => '.custom-header-media',
		'setting' => array( 'header_image' ),
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'agridrive_customize_partial_blogdescription',
	) );
	$wp_customize->selective_refresh->add_partial( 'agridrive_slider_content', array(
		'selector' => '#bs-carousel',
		'setting' => array('agridrive_slider_content'),
	) );
	$wp_customize->selective_refresh->add_partial( 'agridrive_services_content', array(
		'selector' => '#services-heading',
		'setting' => array('agridrive_servicess_content'),
	) );
	$wp_customize->selective_refresh->add_partial( 'why_agridrive_content', array(
		'selector' => '.why-choose',
		'setting' => array('why_agridrive_content'),
	) );
	$wp_customize->selective_refresh->add_partial( 'success_stories_post_heading', array(
		'selector' => '#success-heading',
		'render_callback' => 'success_stories_post_heading_customize_partial_edit',
	) );
	$wp_customize->selective_refresh->add_partial( 'success_stories_img_upload_one', array(
		'selector' => '#img-release1',
		'render_callback' => 'agridrive_customize_success_stories_img_upload_one',
	) );
	$wp_customize->selective_refresh->add_partial( 'success_stories_img_upload_two', array(
		'selector' => '#img-release2',
		'render_callback' => 'agridrive_customize_success_stories_img_upload_two',
	) );
	$wp_customize->selective_refresh->add_partial( 'success_stories_img_upload_three', array(
		'selector' => '#img-release3',
		'render_callback' => 'agridrive_customize_success_stories_img_upload_three',
	) );

	$wp_customize->selective_refresh->add_partial( 'statsbg_img_upload', array(
		'selector' => '.stats-img',
		'setting' => array('statsbg_img_upload'),
	) );
	$wp_customize->selective_refresh->add_partial( 'latest_news_heading', array(
		'selector' => '#news-heading',
		'render_callback' => 'agridrive_customize_partial_latest_news_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'net_partners_heading', array(
		'selector' => '#networks-heading',
		'render_callback' => 'agridrive_customize_partial_net_partners_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'newsletter_form_heading', array(
		'selector' => '#newsletter_form',
		'render_callback' => 'agridrive_customize_newsletter_form_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'footer_bg_img', array(
		'selector' => '.footer-content',
		'setting' => array('footer_bg_img'),
	) );
// Add Home Page Panel
	 $wp_customize->add_panel('homepage', array(
	 	'title' => __('Agridrive Theme options', 'agridrive'), 
	 	'description' => '',
	    'priority' => 140,));
//subtitle		
	$wp_customize->add_section('main_section_title',array(
			'default'	=> __('Perfect Theme For Your Next Project','agridrive'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' => 'postMessage',
			'type'  => 'theme_mod'
	));
    $wp_customize->add_control('main_section_title',array(
			'label'	=> __('column 1 subtitle ','agridrive'),
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
				'label'    => __( 'Color scheme hue selector', 'agridrive' ),
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
				'label'    => __( 'Section Heading hue Selector', 'agridrive' ),
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
				'label'    => __( 'Kode topbar color Selector', 'agridrive' ),
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
				'label'    => __( 'Header wrapper background color Selector', 'agridrive' ),
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
				'label'    => __( 'Why us section bg Color', 'agridrive' ),
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
				'label'    => __( 'Success stories background color', 'agridrive' ),
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
				'label'    => __( 'News form letter background color', 'agridrive' ),
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
				'label'    => __( 'Footer Wrapper Color', 'agridrive' ),
				'section'  => 'colors',
				'settings' => 'footer_wrapper_color',
				'priority' => 20,
			)
		)
	);	
// Home Slider Section
	$wp_customize->add_section('agridrive_slider',array(
		'title' =>__('Manage Sliders','agridrive'),
	     'description' =>sprintf(__('Options for Home Slider','agridrive')),
	     'panel' => 'homepage',
	     'priority' =>79,));
// Home page Why Us Section
	$wp_customize->add_section('why_agridrive',array(
		'title' =>__('Manage Why Agridrive Section','agridrive'),
	     'description' =>sprintf(__('Options for Why us Section','agridrive')),
	     'panel' => 'homepage',
	     'priority' =>80,));
// Home page Success stories Section
	$wp_customize->add_section('success_stories',array(
		'title' =>__('Manage Agridrive success Stories','agridrive'),
	     'description' =>sprintf(__('Options for success stories Section','agridrive')),
	     'panel' => 'homepage',
	     'priority' =>82,));
// statistics Section
	$wp_customize->add_section('statistics',array(
		'title' =>__('Manage Agridrive Stats section','agridrive'),
	     'description' =>sprintf(__('Add a backgound image to this section','agridrive')),
	     'panel' => 'homepage',
	     'priority' =>83,));
// Home page Latest Post Section
	$wp_customize->add_section('latest_news',array(
		'title' =>__('Manage Agridrive News Section','agridrive'),
	     'description' =>sprintf(__('Options for Latest News Section','agridrive')),
	     'panel' => 'homepage',
	     'priority' =>84,));
// Network and Partners Section
	$wp_customize->add_section('network-partners',array(
		'title' =>__('Manage Agridrive Network & Partners','agridrive'),
	     'description' =>sprintf(__('Add Networks and Partners','agridrive')),
	     'panel' => 'homepage',
	     'priority' =>85,));
// Newsletter form Section
	$wp_customize->add_section('newsletter',array(
		'title' =>__('Newsletter Form configurations','agridrive'),
	     'description' =>sprintf(__('Add Networks and Partners','agridrive')),
	     'panel' => 'homepage',
	     'priority' =>86,));
//Hide or show why agridrive
	$wp_customize->add_setting(
    'agridrive_options[why_agridrive_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[why_agridrive_enabled]',
    array(
        'label' => __('Enable why Agridrive section','agridrive'),
		'priority'   => 1,
        'section' => 'why_agridrive',
        'type' => 'checkbox',
    )
	);
//Hide or show success stories section
	$wp_customize->add_setting(
    'agridrive_options[success_stories_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[success_stories_enabled]',
    array(
        'label' => __('Enable Success Stories Section','agridrive'),
		'priority'   => 1,
        'section' => 'success_stories',
        'type' => 'checkbox',
    )
	);
//Heading for Home success_stories Content Section
$wp_customize->add_setting('agridrive_options[success_stories_post_heading]',array(
			'default'	=> __('Our Success Stories','agridrive'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('agridrive_options[success_stories_post_heading]',array(
			'label'	=> __('Success stories Section Heading ','agridrive'),
			'description' => __('Change the heading for Agridrive success stories Section to your liking','agridrive'),
			'section'	=> 'success_stories',
			'setting'	=> 'success_stories_post_heading'
	));
//Intro Content
$wp_customize->add_setting('agridrive_options[success_stories_intro]',array(
			'default' => __('Successful Agribusiness Solutions Delivered to Our Customers','agridrive'),
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('agridrive_options[success_stories_intro]',array(
			'label'	=> __('Edit intro text','agridrive'),
			'priority'   => 2,
			'section'	=> 'success_stories',
			'setting'	=> 'net_partners_intro_textsuccess_stories_intro',
			'type' => 'textarea',
			'description' => 'Add default Content'
	));
//Home Page success Stories Section content
//content				
	$wp_customize->add_setting( 'success_stories_img_upload_one',array(
            'default' => esc_url(get_template_directory_uri()).'/images/homepage/Homepage-SUCCESS-STORIES-1.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'success_stories_img_upload_one', array(
            'label'       => __( 'Upload first success story image:', 'agridrive' ),
            'section'     => 'success_stories',
            'settings'    => 'success_stories_img_upload_one',
            'description' => 'Upload your first image here.'
    )));
    //Upload one Title
	$wp_customize->add_setting('agridrive_options[success_stories_upload1_title]',array(
			'default'	=> __('Path P Youths in Oyo State, Nigeria','agridrive'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('agridrive_options[success_stories_upload1_title]',array(
			'label'	=> __('Edit first success story Title ','agridrive'),
			'description' => __('Change the Upload Title to your liking','agridrive'),
			'section'	=> 'success_stories',
			'setting'	=> 'success_stories_upload1_title'
	));
    $wp_customize->add_setting( 'success_stories_img_upload_two',array(
            'default' => esc_url(get_template_directory_uri()).'/images/homepage/Homepage-SUCCESS-STORIES-2.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'success_stories_img_upload_two', array(
            'label'       => __( 'Upload second succes story image:', 'agridrive' ),
            'section'     => 'success_stories',
            'settings'    => 'success_stories_img_upload_two',
            'description' => 'Upload your second image here.'
    )));
    //Upload Two Title
	$wp_customize->add_setting('agridrive_options[success_stories_upload2_title]',array(
			'default'	=> __('Cassava Planting in Ayetoro Ogun state, Nigeria','agridrive'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('agridrive_options[success_stories_upload2_title]',array(
			'label'	=> __('Edit Second success story Title ','agridrive'),
			'description' => __('Change the Upload Title to your liking','agridrive'),
			'section'	=> 'success_stories',
			'setting'	=> 'success_stories_upload2_title'
	));
    $wp_customize->add_setting( 'success_stories_img_upload_three',array(
            'default' => esc_url(get_template_directory_uri()).'/images/homepage/Homepage-SUCCESS-STORIES-3.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'success_stories_img_upload_three', array(
            'label'       => __( 'Upload third success story image:', 'agridrive' ),
            'section'     => 'success_stories',
            'settings'    => 'success_stories_img_upload_three',
            'description' => 'Upload your third image here.'
    )));  //Upload Three Title
	$wp_customize->add_setting('success_stories_upload3_title',array(
			'default'	=> __('Demonstration in Bida, Niger State,Nigeria','agridrive'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('agridrive_options[success_stories_upload3_title]',array(
			'label'	=> __('Edit third success story Title','agridrive'),
			'description' => __('Change the Upload Title to your liking','agridrive'),
			'section'	=> 'success_stories',
			'setting'	=> 'success_stories_upload3_title'
	)); 
	if ( class_exists( 'Category_Dropdown_Custom_Control' ) ) {
	$wp_customize->add_setting( 'success_stories_category_posts', array(
			'default'	=> 0,
			'sanitize_callback' => 'agridrive_sanitize_integer',
		));

	$wp_customize->add_control( new Category_Dropdown_Custom_Control( $wp_customize, 'success_stories_category_posts', array(	 'label'      => esc_html__( 'Select Post Category for more content', 'agridrive' ),
			'priority'   => 40,
			'section'    => 'success_stories',
			'setting'    =>'success_stories_category_posts',
			'description' => 'Add categories First then Use featured image feature on contents post to choose image',
			)));
		}
//Hide or show stats section
	$wp_customize->add_setting(
    'agridrive_options[stats_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
	$wp_customize->add_control(
    'agridrive_options[stats_section_enabled]',
    array(
        'label' => __('Enable statistics section','agridrive'),
		'priority'   => 1,
        'section' => 'statistics',
        'type' => 'checkbox',
    ));
	$wp_customize->add_setting( 'statsbg_img_upload',array(
            'default' => esc_url(get_template_directory_uri()).'/images/homepage/STATISTICS-IMAGE.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'statsbg_img_upload', array(
            'label'       => __( 'Change statistics Background image:', 'agridrive' ),
            'section'     => 'statistics',
            'settings'    => 'statsbg_img_upload',
            'description' => 'Upload your background image here.'
    )));
//Hide or show News section
	$wp_customize->add_setting(
    'agridrive_options[latest_news_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[latest_news_section_enabled]',
    array(
        'label' => __('Enable Agridrive Latest News Section','agridrive'),
		'priority'   => 1,
        'section' => 'latest_news',
        'type' => 'checkbox',
    )
	);
//Heading for Home latest news
$wp_customize->add_setting('agridrive_options[latest_news_heading]',array(
			'default'	=> __('latest news','agridrive'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('latest_news_heading',array(
			'label'	=> __('Latest News Section Heading ','agridrive'),
			'description' => __('Change the heading for your Latest Post Section to your liking','agridrive'),
			'section'	=> 'latest_news',
			'setting'	=> 'latest_news_heading'
	));
$wp_customize->add_setting( 'anviltech_options[latestnewsbg_img]',array(
            'default' => esc_url(get_template_directory_uri()).'/images/Our-Latest-News-BG-IMAGE.jpg',
            'transport' =>'postMessage',));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'anviltech_options[latestnewsbg_img]', array(
            'label'       => __( 'Change Latest News Background image:', 'agridrive' ),
            'section'     => 'latest_news',
            'setting'    => 'latestnewsbg_img',
            'description' => 'Upload your background image here.'
    )));
if ( class_exists( 'Category_Dropdown_Custom_Control' ) ) {
	$wp_customize->add_setting( 'latestnews_category_posts', array(
			'default'	=> 1,
			'sanitize_callback' => 'agridrive_sanitize_integer',
		));

	$wp_customize->add_control( new Category_Dropdown_Custom_Control( $wp_customize, 'latestnews_category_posts', array(	 'label'      => esc_html__( 'Select Post Category for latest Agridrive news content', 'agridrive' ),
			'priority'   => 40,
			'section'    => 'latest_news',
			'setting'    =>'latestnews_category_posts',
			'description' => 'Add categories First then Use featured image feature on contents post to choose image',
			)));
		}
//Hide or show partners section
	$wp_customize->add_setting(
    'agridrive_options[net_partners_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[net_partners_section_enabled]',
    array(
        'label' => __('Enable Networks and Parteners Section','agridrive'),
		'priority'   => 1,
        'section' => 'network-partners',
        'type' => 'checkbox',
    )
	);
//Heading for Networks & Partners Section
$wp_customize->add_setting('agridrive_options[net_partners_heading]',array(
			'default'	=> __('Our Networks and Partners','agridrive'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('agridrive_options[net_partners_heading]',array(
			'label'	=> __('Networks and Partners ','agridrive'),
			'description' => __('Change the heading for your Networks and Partners Section to your liking','agridrive'),
			'section'	=> 'network-partners',
			'setting'	=> 'latest_news_heading'
	));
//intro content				
	$wp_customize->add_setting('agridrive_options[network_partners_intro_text]',array(
			'default' => __('We Have an Extensive Network of Customers and Collaborating Partners across Africa. Together, We Work To Make Africa a Food Sustainable Continent.','agridrive'),
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('network_partners_intro_text',array(
			'label'	=> __('Edit intro text','agridrive'),
			'section'	=> 'network-partners',
			'setting'	=> 'net_partners_intro_text',
			'type' => 'textarea',
			'description' => 'Add default Content'
	));
//Hide or show contact form section
	$wp_customize->add_setting(
    'agridrive_options[newsletter_form_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[newsletter_form_section_enabled]',
    array(
        'label' => __('Enable contact form','agridrive'),
		'priority'   => 1,
        'section' => 'newsletter',
        'type' => 'checkbox',
    )
	);
//Heading newsletter form Section
$wp_customize->add_setting('newsletter_form_heading',array(
			'default'	=> __('news letter sign up','agridrive'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('newsletter_form_heading',array(
			'label'	=> __('News letter section heading ','agridrive'),
			'description' => __('Change the heading for news letter form to your liking','agridrive'),
			'section'	=> 'newsletter',
			'setting'	=> 'newsletter_form_heading'
	));
//intro text			
	$wp_customize->add_setting('newsletter_intro_text',array(
			'default' => __('Subscribe to keep up to date with our latest news & innovations.','agridrive'),
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
		$wp_customize->add_control('newsletter_intro_text',array(
			'label'	=> __('Edit intro text','agridrive'),
			'section'	=> 'newsletter',
			'setting'	=> 'newsletter_intro_text',
			'type' => 'textarea',
			'description' => 'Add default Content'
	));
	$wp_customize->add_setting( 'newsletterformbg_img',array(
            'default' => esc_url(get_template_directory_uri()).'/images/newsletter-bg.jpg',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'newsletterformbg_img', array(
            'label'       => __( 'Change contact form background image:', 'agridrive' ),
            'section'     => 'newsletter',
            'settings'    => 'newsletterformbg_img',
            'description' => 'Upload your background image here.'
    )));
}
add_action('customize_register','agridrive_customize_register');

function agridrive_sanitize_integer( $input ) {
    return intval( $input );
}

/*Add render Callback for all referesh Partials*/
function agridrive_customize_partial_blogname() {
	bloginfo( 'name' );
}
function agridrive_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function agridrive_customize_partial_phone() {
	return get_theme_mod( 'phone' );
}

/**
 * Enqueue scripts for customizer
 */
function agridrive_customizer_scripts() {
	wp_enqueue_style( 'agridrive_partial_edits_styler', get_template_directory_uri() . '/css/partial-edits.css', array(), 999 );
   wp_enqueue_script( 'agridrive_customizer_script', esc_url( get_template_directory_uri() ) . '/js/customizer.js', array("jquery"), '1.0', true  );
}
add_action( 'customize_preview_init', 'agridrive_customizer_scripts' );
