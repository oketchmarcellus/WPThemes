<?php

/*increase upload Limit*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

require_once('wp-bootstrap-navwalker.php');
require get_template_directory() . '/includes/customizer.php';

/*register style sheets*/
function production_styles() {
wp_enqueue_style( 'boot-style', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
wp_enqueue_style( 'custom-style', get_template_directory_uri().'/style.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.min.css');
}

/* Enable support for Post Formats.*/
add_action( 'wp_register_scripts', 'production_styles' );
add_action('wp_enqueue_scripts', 'production_styles' );

add_theme_support( 'post-formats', array('aside','image','video','quote','link','gallery','audio',) );

/* Add theme support for selective refresh for widgets.*/
add_theme_support('customize-selective-refresh-widgets');

/*wp-custom-logo*/
add_theme_support( 'custom-logo', array('height'=> 200,'width'=> 200,'flex-height' => true,'flex-width'  => true,));

/*add the bg-image functionality*/
add_theme_support('custom-background');

/*add posts thumb-nail support*/
add_theme_support('post-thumbnails');
/*add post format support*/
add_theme_support('post-formats',array('gallery','link'));

/*add the menu to admin*/
register_nav_menus( array('primary' => __( 'Primary Menu', 'production' ),
  "social-links" => __( 'Social Links', 'production' ),
  "footer"       => __( 'Footer Links', 'production' ),
));

/*wp-header-image*/
function production_custom_header_setup() {
        $args = array(
        'header-text' => true,
        'default-image'      => get_template_directory_uri() . '/assets/img/shutterstock_50882653.jpg',
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
add_action( 'after_setup_theme', 'production_custom_header_setup' );

/*wp-custom-logo*/

add_theme_support( 'custom-logo', array('height'=> 200,'width'=> 200,'flex-height' => true,'flex-width'  => true,'header-text' => array( 'site-title', 'site-description' )));
/*add widgets*/
function header_button_init(){
register_sidebar( array(
'name' => 'Header Widget',
'id' => 'header-widget',
'before_widget' => '<div id="%1$s" class="hw-widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2 class="hw-title">',
'after_title' => '</h2>',
));

}
add_action( 'widgets_init', 'header_button_init' );

function custom_footer_widgets() {

  register_sidebar( array(
    'name'          => 'footer Widgets',
    'id'            => 'footer_1',
    'description'   => __('Add footer widgets here'),
    'before_widget' => '<div id="%1$s" class="location-txt %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<p>',
    'after_title'   => '</p>',
  ) );

}
add_action( 'widgets_init', 'custom_footer_widgets' );

/*register-scripts*/
function production_scripts(){ 
   wp_register_style( 'custom-script-js', get_template_directory_uri().'/assets/js/jquery.min.js');
   wp_enqueue_script( 'custom-script-js');
   wp_register_script( 'custom-script-boot', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array('jquery' ),'1.0',true);
   wp_enqueue_script( 'custom-script-boot');
}
add_action( 'wp_register_scripts', 'production_scripts' );
add_action( 'wp_enqueue_scripts', 'production_scripts' );
add_filter('show_admin_bar', '__return_false');
?>