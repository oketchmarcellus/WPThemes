<?php
/*
=================================
    Homepage Customizer
=================================
*/
//require get_template_directory() . '/includes/slider-customizer-controls.php';
require get_template_directory() . '/includes/production-slider/slider-customizer.php';
require get_template_directory() . '/includes/production-slider/slider-default.php';
require get_template_directory() . '/includes/header-customizer.php';
require get_template_directory() . '/includes/custom-post-types.php';
require get_template_directory() . '/includes/custom-controls.php';
require get_template_directory() . '/includes/colorScheme-customizer.php';
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/footer-customizer.php';
//require get_template_directory() . '/includes/slider-default.php';

function production_customize_register( WP_Customize_Manager $wp_customize ) {

// Transport postMessage
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'custom_logo' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_image' )->transport = 'postMessage';
//Add Partial Refresh for blogname,Blogdescription & Other Custom Theme Modes
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'production_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'custom_logo', array(
		'selector' => '.logo-img',
		'render_callback' => 'production_customize_custom_logo',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'production_customize_partial_blogdescription',
	) );
	$wp_customize->selective_refresh->add_partial( 'header_image', array(
		'selector' => '.masthead',
		'render_callback' => 'production_header_image_partial',
	) );
	$wp_customize->selective_refresh->add_partial( 'production_slider_content', array(
		'selector' => '.carousel',
		'render_callback' => 'production_customize_partial_slider_content',
	) );
	$wp_customize->selective_refresh->add_partial( 'main_header_title', array(
		'selector' => '.header-content-inner h1',
		'render_callback' => 'production_customize_partial_main_header_title',
	) );
	$wp_customize->selective_refresh->add_partial( 'welcome_post_icon', array(
		'selector' => '#welcome-icon',
		'render_callback' => 'production_customize_welcome_post_icon',
	) );
	$wp_customize->selective_refresh->add_partial( 'releases_post_icon', array(
		'selector' => '#releases-icon',
		'render_callback' => 'production_customize_releases_post_icon',
	) );
	$wp_customize->selective_refresh->add_partial( 'releases_img_upload_one', array(
		'selector' => '#img-release1',
		'render_callback' => 'production_customize_img_release1',
	) );
	$wp_customize->selective_refresh->add_partial( 'releases_img_upload_two', array(
		'selector' => '#img-release2',
		'render_callback' => 'production_customize_img_release2',
	) );
	$wp_customize->selective_refresh->add_partial( 'releases_img_upload_three', array(
		'selector' => '#img-release3',
		'render_callback' => 'production_customize_img_release3',
	) );
	$wp_customize->selective_refresh->add_partial( 'latest_news_icon', array(
		'selector' => '#news-icon',
		'render_callback' => 'production_customize_latest_news_icon',
	) );
	$wp_customize->selective_refresh->add_partial( 'bg_dark_text', array(
		'selector' => '.container.text-center h2',
		'render_callback' => 'production_customize_partial_bg_dark_text',
	) );
	$wp_customize->selective_refresh->add_partial( 'footer_content_heading', array(
		'selector' => '#footer-heading',
		'render_callback' => 'production_customize_partial_footer_content_heading',
	) );
	$wp_customize->selective_refresh->add_partial( 'footer_bg_img', array(
		'selector' => '.footer-content',
		'render_callback' => 'production_customize_partial_footer_bg_img',
	) );
	$wp_customize->selective_refresh->add_partial( 'phone', array(
		'selector' => '#phone',
		'render_callback' => 'production_customize_partial_phone',
	) );
// Add Home Page Panel
	 $wp_customize->add_panel('homepage', array(
	 	'title' => __('Home Page', 'production'), 
	 	'description' => '',
	    'priority' => 140,));
//subtitle		
	$wp_customize->add_setting('main_section_title',array(
			'default'	=> __('Perfect Theme For Your Next Project','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' => 'postMessage',
			'type'  => 'theme_mod'
	));
    $wp_customize->add_control('main_section_title',array(
			'label'	=> __('column 1 subtitle ','production'),
			'section'	=> 'main_section',
			'setting'	=> 'main_section_title'
	));
//Custom colors
    // Site theme
	$wp_customize->add_setting('color_scheme',array(
			'default'           => apply_filters( 'color_scheme_selector_default', '#790908' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_scheme',
			array(
				'label'    => __( 'Color Scheme hue Selector', 'production' ),
				'section'  => 'colors',
				'settings' => 'color_scheme',
				'priority' => 13,
			)
		)
	);
	// Site heading Color
	$wp_customize->add_setting('heading_color',array(
			'default'           => apply_filters( 'heading_color_default', '#790908' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_color',
			array(
				'label'    => __( 'Section Heading hue Selector', 'production' ),
				'section'  => 'colors',
				'settings' => 'heading_color',
				'priority' => 14,
			)
		)
	);
	// Site theme
	$wp_customize->add_setting('hr_color',array(
			'default'           => apply_filters( 'color_scheme_selector_default', '#cc0402' ),
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hr_color',
			array(
				'label'    => __( 'Footer Horizontal line Color', 'production' ),
				'section'  => 'colors',
				'settings' => 'hr_color',
				'priority' => 15,
			)
		)
	);
// Home Slider Section
	$wp_customize->add_section('production_slider',array(
		'title' =>__('Manager Sliders','production'),
	     'description' =>sprintf(__('Options for Home Slider','production')),
	     'panel' => 'homepage',
	     'priority' =>79,));
// Home page Service Section
	$wp_customize->add_section('welcome',array(
		'title' =>__('Welcome Section','production'),
	     'description' =>sprintf(__('Options for welcome Section','production')),
	     'panel' => 'homepage',
	     'priority' =>80,));
// Home page Service Section
	$wp_customize->add_section('releases',array(
		'title' =>__('releases Content','production'),
	     'description' =>sprintf(__('Options for Releases Section','production')),
	     'panel' => 'homepage',
	     'priority' =>81,));
// Home page Latest Post Section
	$wp_customize->add_section('latest_news',array(
		'title' =>__('Latest news Content','production'),
	     'description' =>sprintf(__('Options for Latest News Section','production')),
	     'panel' => 'homepage',
	     'priority' =>82,));
//Heading for Home welcome Content Section 
	$wp_customize->add_setting('welcome_post_heading',array(
			'default'	=> __('welcome','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('welcome_post_heading',array(
			'label'	=> __('Welcome Section Heading ','production'),
			'description' => __('Change the heading for your Welcome Section to your liking','production'),
			'section'	=> 'welcome',
			'setting'	=> 'welcome_post_heading'
	));
//Heading for welcome Section heading icon
$wp_customize->add_setting( 'welcome_post_icon',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/production-template-icons-homepage-welcome.png',
            'transport' =>'postMessage',));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'welcome_post_icon', array(
            'label'       => __( 'Upload icon image:', 'production' ),
            'section'     => 'welcome',
            'settings'    => 'welcome_post_icon',
            'description' => 'Upload the heading icon here,50 x 50px.'
    )));
//Home Page welcome Section content
	$wp_customize->add_setting('welcome_post',array(
			'default'	=> 0,
			'sanitize_callback'	=> 'production_sanitize_integer'
	));
	
	$wp_customize->add_control('welcome_post',array(
			'label'	=> __('Select Content','production'),
			'section'	=> 'welcome',
			'setting'	=> 'welcome_post',
			'type' => 'dropdown-pages',
			'description' => 'Use featured image feature on contents post to choose image'

	));
//Heading for Home Releases Content Section
$wp_customize->add_setting('releases_post_heading',array(
			'default'	=> __('new releases','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('releases_post_heading',array(
			'label'	=> __('Releases Section Heading ','production'),
			'description' => __('Change the heading for your New Releases Section to your liking','production'),
			'section'	=> 'releases',
			'setting'	=> 'releases_post_heading'
	));
//Heading for new Releases heading icon
$wp_customize->add_setting( 'releases_post_icon',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/production-template-icons-homepage-new-releases.png',
            'transport' =>'postMessage',
            ));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'releases_post_icon', array(
            'label'       => __( 'Upload icon image:', 'production' ),
            'section'     => 'releases',
            'settings'    => 'releases_post_icon',
            'description' => 'Upload the heading icon here,50 x 50px.'
    )));
//Home Page new releases Section content
//content				
	$wp_customize->add_setting('releases_post',array(
			'default' => __('Here is a sneak peek into our Recent production Projects','production'),
	        'type' => 'theme_mod',
	        'capability' => 'edit_theme_options',
	        'transport' =>'postMessage',
	        'sanitize_callback' => 'esc_textarea',
			
	));
	
	$wp_customize->add_control('releases_post',array(
			'label'	=> __('Add Content','production'),
			'section'	=> 'releases',
			'setting'	=> 'releases_post',
			'type' => 'textarea',
			'description' => 'Add default Content'
	));
	$wp_customize->add_setting( 'releases_img_upload_one',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/images_08.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'releases_img_upload_one', array(
            'label'       => __( 'Upload image one:', 'production' ),
            'section'     => 'releases',
            'settings'    => 'releases_img_upload_one',
            'description' => 'Upload your first image here.'
    )));
    //Upload one Title
	$wp_customize->add_setting('releases_upload1_title',array(
			'default'	=> __('Turn Up','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('releases_upload1_title',array(
			'label'	=> __('Upload One Title ','production'),
			'description' => __('Change the Upload Title to your liking','production'),
			'section'	=> 'releases',
			'setting'	=> 'releases_upload1_title'
	));
	//Upload one sub-Title
	$wp_customize->add_setting('releases_upload1_subtitle',array(
			'default'	=> __('Ginger','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('releases_upload1_subtitle',array(
			'label'	=> __('Upload One subtitle ','production'),
			'description' => __('Change the Upload subtitle to your liking','production'),
			'section'	=> 'releases',
			'setting'	=> 'releases_upload1_subtitle'
	));
    $wp_customize->add_setting( 'releases_img_upload_two',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/images_05.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'releases_img_upload_two', array(
            'label'       => __( 'Upload image two:', 'production' ),
            'section'     => 'releases',
            'settings'    => 'releases_img_upload_two',
            'description' => 'Upload your second image here.'
    )));
    //Upload Two Title
	$wp_customize->add_setting('releases_upload2_title',array(
			'default'	=> __('up vote','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('releases_upload2_title',array(
			'label'	=> __('Upload Two Title ','production'),
			'description' => __('Change the Upload Title to your liking','production'),
			'section'	=> 'releases',
			'setting'	=> 'releases_upload2_title'
	));
	//Upload two sub-Title
	$wp_customize->add_setting('releases_upload2_subtitle',array(
			'default'	=> __('Makkain','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('releases_upload2_subtitle',array(
			'label'	=> __('Upload Two subtitle ','production'),
			'description' => __('Change the Upload subtitle to your liking','production'),
			'section'	=> 'releases',
			'setting'	=> 'releases_upload2_subtitle'
	));
    $wp_customize->add_setting( 'releases_img_upload_three',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/images_11.png',
            'transport' =>'postMessage',));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'releases_img_upload_three', array(
            'label'       => __( 'Upload image three:', 'production' ),
            'section'     => 'releases',
            'settings'    => 'releases_img_upload_three',
            'description' => 'Upload your third image here.'
    )));  //Upload Three Title
	$wp_customize->add_setting('releases_upload3_title',array(
			'default'	=> __('jazzy beat','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('releases_upload3_title',array(
			'label'	=> __('Upload Three Title ','production'),
			'description' => __('Change the Upload Title to your liking','production'),
			'section'	=> 'releases',
			'setting'	=> 'releases_upload3_title'
	));
	//Upload two sub-Title
	$wp_customize->add_setting('releases_upload3_subtitle',array(
			'default'	=> __('Jazzy Sax','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
		));
	$wp_customize->add_control('releases_upload3_subtitle',array(
			'label'	=> __('Upload Three subtitle ','production'),
			'description' => __('Change the Upload subtitle to your liking','production'),
			'section'	=> 'releases',
			'setting'	=> 'releases_upload3_subtitle'
	)); 
	if ( class_exists( 'Category_Dropdown_Custom_Control' ) ) {
	$wp_customize->add_setting( 'releases_category_posts', array(
			'default'	=> 0,
			'sanitize_callback' => 'production_sanitize_integer',
		));

	$wp_customize->add_control( new Category_Dropdown_Custom_Control( $wp_customize, 'releases_category_posts', array(	 'label'      => esc_html__( 'Select Post Category for more content', 'production' ),
			'priority'   => 40,
			'section'    => 'releases',
			'setting'    =>'releases_category_posts',
			'description' => 'Add categories First then Use featured image feature on contents post to choose image',
			)));
		}
//bg dark section text	
	$wp_customize->add_setting('bg_dark_text',array(
			'default'	=> __('Get free Templates Now!', 'production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport' =>'postMessage',
			'type'  => 'theme_mod'
	));
     $wp_customize->add_control('bg_dark_text',array(
			'label'	=> __('Announcement section ','production'),
			'section'	=> 'Announcement',
			'setting'	=> 'bg_dark_text'
	));
//Heading for Home latest news
$wp_customize->add_setting('latest_news_heading',array(
			'default'	=> __('latest news','production'),
			'sanitize_callback'	=> 'sanitize_text_field',
			'type'  => 'theme_mod',
			'transport' => 'postMessage',
	));
$wp_customize->add_control('latest_news_heading',array(
			'label'	=> __('Latest Posts Section Heading ','production'),
			'description' => __('Change the heading for your Latest Post Section to your liking','production'),
			'section'	=> 'latest_news',
			'setting'	=> 'latest_news_heading'
	));
$wp_customize->add_setting( 'latest_news_icon',array(
            'default' => esc_url(get_template_directory_uri()).'/assets/img/production-template-icons-homepage-latest-news.png',
            'transport' =>'postMessage',));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'latest_news_icon', array(
            'label'       => __( 'Upload icon image:', 'production' ),
            'section'     => 'latest_news',
            'settings'    => 'latest_news_icon',
            'description' => 'Upload the heading icon here,50 x 50px.'
    )));
}
add_action('customize_register','production_customize_register');

function production_sanitize_integer( $input ) {
    return intval( $input );
}

/*Add render Callback for all referesh Partials*/
function production_customize_partial_blogname() {
	bloginfo( 'name' );
}
function production_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function production_customize_partial_main_header_title() {
	return get_theme_mode( '.header-content-inner h1' );
}
function production_customize_partial_service_section_heading() {
	return get_theme_mod( 'service_section_heading' );
}
function production_customize_welcome_post() {
	return get_theme_mod( 'welcome_post' );
}
function production_customize_releases_post() {
	return get_theme_mod( 'releases_post' );
}
function production_customize_partial_bg_dark_text() {
	return get_theme_mod( 'bg_dark_text' );
}
function production_customize_partial_footer_content_heading() {
	return get_theme_mod( 'footer_content_heading' );
}
function production_customize_partial_phone() {
	return get_theme_mod( 'phone' );
}
/**
 * Enqueue scripts for customizer
 */
function production_customizer_scripts() {
	wp_enqueue_style( 'production_partial_edits_styler', get_template_directory_uri() . '/assets/css/partial-edits.css', array(), 999 );
   wp_enqueue_script( 'production_customizer_script', esc_url( get_template_directory_uri() ) . '/assets/js/customizer.js', array("jquery"), '1.0', true  );
}
add_action( 'customize_preview_init', 'production_customizer_scripts' );
