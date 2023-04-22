<?php

//register style sheets
function aatf_style_sheets(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style( 'plugins', get_template_directory_uri().'/css/plugins.css');
	wp_enqueue_style( 'color-variations', get_template_directory_uri().'/css/color-variations.css');
	wp_enqueue_style( 'core', get_template_directory_uri().'/style.css');
	wp_enqueue_style( 'custom-style', get_template_directory_uri().'/css/custom.css');
	wp_enqueue_style( 'landing', get_template_directory_uri().'/css/landing.css');
	wp_enqueue_style( 'spacing', get_template_directory_uri().'/spacing.min.css');
	wp_enqueue_style( 'search-bar', get_template_directory_uri().'/css/toggled-search-bar.css');
}

// Enable support for Post Formats
add_action( 'wp_register_scripts', 'aatf_style_sheets' );
add_action('wp_enqueue_scripts', 'aatf_style_sheets' );


//register style sheets
function aatf_plugins_style_sheets(){
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/plugins/animate.min.css');
	wp_enqueue_style( 'animate-headline', get_template_directory_uri().'/css/plugins/animate-headline.css');
	wp_enqueue_style( 'bicon', get_template_directory_uri().'/css/plugins/bicon.min.css');
	wp_enqueue_style( 'fakeloader', get_template_directory_uri().'/css/plugins/fakeloader.css');
	wp_enqueue_style( 'flaticon', get_template_directory_uri().'/css/plugins/flaticon.css');
	wp_enqueue_style( 'icofont', get_template_directory_uri().'/css/plugins/icofont.min.css');
	wp_enqueue_style( 'meanmenu', get_template_directory_uri().'/css/plugins/meanmenu.min.css');
	wp_enqueue_style( 'plyr', get_template_directory_uri().'/css/plugins/plyr.min.css');
	wp_enqueue_style( 'lightgallery', get_template_directory_uri().'/css/plugins/lightgallery.min.css');
	wp_enqueue_style( 'slick-slider', get_template_directory_uri().'/css/plugins/slick.min.css');
}

// Enable support for Post Formats
add_action( 'wp_register_scripts', 'aatf_plugins_style_sheets' );
add_action('wp_enqueue_scripts', 'aatf_plugins_style_sheets' );

//register style sheets
function aatf_scss(){
	wp_enqueue_style( '_mixins', get_template_directory_uri().'/scss/_mixins.scss');
	wp_enqueue_style( '_variables', get_template_directory_uri().'/scss/_variables.scss');
	wp_enqueue_style( 'style', get_template_directory_uri().'/scss/style.css');
	wp_enqueue_style( '_helper', get_template_directory_uri().'/scss/basic/_helper-class.scss');
	wp_enqueue_style( '_reset', get_template_directory_uri().'/scss/basic/_reset.scss');
	wp_enqueue_style( '_typography', get_template_directory_uri().'/scss/basic/_typography.scss');
	wp_enqueue_style( '_accordion', get_template_directory_uri().'/scss/elements/_accordion.scss');
	wp_enqueue_style( '_breadcrumb', get_template_directory_uri().'/scss/elements/_breadcrumb.scss');
	wp_enqueue_style( '_button', get_template_directory_uri().'/scss/elements/_button.scss');
	wp_enqueue_style( '_call-to-action', get_template_directory_uri().'/scss/elements/_call-to-action.scss');
	wp_enqueue_style( '_slider-elements', get_template_directory_uri().'/scss/elements/_slider-elements.scss');
	wp_enqueue_style( '_social-icons', get_template_directory_uri().'/scss/elements/_social-icons.scss');
}

// Enable support for Post Formats
add_action( 'wp_register_scripts', 'aatf_scss' );
add_action('wp_enqueue_scripts', 'aatf_scss' );



//register-scripts
function aatf_scripts(){ 

	wp_register_script( 'vendor-script', get_template_directory_uri().'/js/vendor/jquery-3.2.1.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'vendor-script');
	wp_register_script( 'popper-script', get_template_directory_uri().'/js/popper.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'popper-script');
	wp_register_script( 'bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'bootstrap-script');
	wp_register_script( 'particles-script', get_template_directory_uri().'/js/particles.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'particles-script');
	wp_register_script( 'plugins-script', get_template_directory_uri().'/js/plugins.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'plugins-script');
	wp_register_script( 'active-script', get_template_directory_uri().'/js/active.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'active-script');
	wp_register_script( 'scripts', get_template_directory_uri().'/js/scripts.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'script');
	wp_register_script( 'ytplayer-script', get_template_directory_uri().'/js/vendor/modernizr-3.5.0.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'ytplayer-script');
	wp_register_script( 'mordernizr-script', get_template_directory_uri().'/js/vendor/ytplayer-js.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'mordernizr-script');
	wp_register_script( 'ytplayer-script', get_template_directory_uri().'/js/customizer.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'ytplayer-script');
	wp_register_script( 'customizer-script', get_template_directory_uri().'/js/customizer.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'customizer-script');
}
add_action( 'wp_register_scripts', 'aatf_scripts' );
add_action( 'wp_enqueue_scripts', 'aatf_scripts' );
add_action('wp_footer', 'aatf_scripts');
