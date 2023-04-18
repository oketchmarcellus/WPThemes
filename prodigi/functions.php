<?php

/*increase upload Limit*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/*register style sheets*/
function prodigi_styles() {
wp_enqueue_style( 'custom-style', get_template_directory_uri().'/style.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css');
}

/* Enable support for Post Formats.*/
add_action( 'wp_register_scripts', 'prodigi_styles' );
add_action('wp_enqueue_scripts', 'prodigi_styles' );
add_theme_support( 'post-formats', array('aside','image','video','quote','link','gallery','audio',) );

/* Add theme support for selective refresh for widgets.*/
add_theme_support('customize-selective-refresh-widgets');

/*add the bg-image functionality*/
add_theme_support('custom-background');

/*add posts thumb-nail support*/
add_theme_support('post-thumbnails');
/*add post format support*/
add_theme_support('post-formats',array('gallery','link'));

/*add the menu to admin*/
register_nav_menus( array('primary' => __( 'Primary Menu', 'prodigi' ),
  "social-links" => __( 'Social Links', 'prodigi' ),
  "footer"       => __( 'Footer Links', 'prodigi' ),
));
require_once('wp-bootstrap-navwalker.php');
require get_template_directory() . '/inc/header-customizer.php';
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/colorScheme-customizer.php';
require get_template_directory() . '/inc/footer-customizer.php';
require get_template_directory() . '/inc/customizer.php';

/*wp-header-image*/
function prodigi_custom_header_setup() {
        $args = array(
        'header-text' => true,
        'default-image'      => get_template_directory_uri() . '/img/headerimg.jpg',
        'default-text-color' => '#f5f5f5',
        'uploads' => true,
        'width'              => 2000,
        'flex-width'         => true,
        'flex-height'        => true,
    );
add_theme_support( 'custom-header', $args );
/*Register Default header*/
		$header_images = array(
    	'headerdefault' => array(
        'url'           => get_template_directory_uri() . '/img/header.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/img/header.jpg',
        'description'   => 'headerdefault',
    ),
);
register_default_headers( $header_images );
}
add_action( 'after_setup_theme', 'prodigi_custom_header_setup' );
/*add widgets*/
function header_button_init(){
register_sidebar( array(
'name' => 'Header Widget',
'id' => 'header-widget',
'before_widget' => '<div class="hw-widget">',
'after_widget' => '</div>',
'before_title' => '<h2 class="hw-title">',
'after_title' => '</h2>',
));

}
add_action( 'widgets_init', 'header_button_init' );

function custom_footer_widget() {

	register_sidebar( array(
		'name'          => 'footer Widget',
		'id'            => 'Address_social_icons',
		'description'   => __('Add widget here to edit your footer address'),
		'before_widget' => '<div class="col-lg-12 mx-auto text-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="text-center">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'custom_footer_widget' );
/*wp-custom-logo*/

add_theme_support( 'custom-logo', array('height'=> 200,'width'=> 200,'flex-height' => true,'flex-width'  => true,'header-text' => array( 'site-title', 'site-description' )));

/*register-scripts*/
function prodigi_scripts(){ 
   wp_register_style( 'custom-script-js', get_template_directory_uri().'/vendor/jquery/jquery.min.js');
   wp_enqueue_script( 'custom-script-js');
   wp_register_script( 'custom-script-popper', get_template_directory_uri() .'/vendor/popper/popper.min.js');
   wp_enqueue_script( 'custom-script-popper');
   wp_register_script( 'custom-script-boot', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js',array('jquery' ),'1.0',true);
   wp_enqueue_script( 'custom-script-boot');
   wp_register_script( 'custom-script-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array("jquery"), '1.0', true  );
   wp_enqueue_script( 'custom-script-easing');
   wp_register_script( 'custom-script-scrollreveal', get_template_directory_uri().'/vendor/scrollreveal/scrollreveal.min.js',
   	array('jquery' ),'1.0',true);
   wp_enqueue_script( 'custom-script-scrollreveal');
   wp_register_script( 'custom-script-magnific', get_template_directory_uri().'/vendor/magnific-popup/jquery.magnific-popup.min.js',
   	array('jquery' ),'1.0',true);
   wp_enqueue_script( 'custom-script-magnific');
   wp_register_script( 'custom-script-creative', get_template_directory_uri().'/js/creative.min.js',array('jquery' ),'1.0',true);
   wp_enqueue_script( 'custom-script-creative');
}
add_action( 'wp_register_scripts', 'prodigi_scripts' );
add_action( 'wp_enqueue_scripts', 'prodigi_scripts' );
add_filter('show_admin_bar', '__return_false');
?>