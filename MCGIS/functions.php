<?php
/*register style sheets*/
function mcgis_styles() {
wp_enqueue_style( 'custom-style', get_template_directory_uri().'/style.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/fonts/font-awesome.min.css');
}
/* Enable support for Post Formats.*/
add_action( 'wp_register_scripts', 'mcgis_styles' );
add_action( 'wp_enqueue_scripts', 'mcgis_styles' );
add_theme_support( 'post-formats', array('aside','image','video','quote','link','gallery','audio',) );
/* Add theme support for selective refresh for widgets.*/
add_theme_support( 'customize-selective-refresh-widgets' );

/*add the bg-image functionality*/
add_theme_support( 'custom-background' );

/*add posts thumb-nail support*/
add_theme_support( 'post-thumbnails' );
/*add post format support*/
add_theme_support('post-formats',array('gallery','link'));

/*add the menu to admin*/
register_nav_menus( array('primary' => __( 'Primary Menu', 'McGIS' )) );
require_once('wp-bootstrap-navwalker.php');
require get_template_directory(). '/inc/Business Location.php';
require get_template_directory(). '/inc/customPostsTypes.php';
require get_template_directory(). '/inc/Socialmedia.php';
require get_template_directory(). '/inc/serviceSectionBuilder.php';
require get_template_directory() . '/inc/header-customizer.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory(). '/inc/slider customizer.php';
require get_template_directory(). '/inc/button-section.php';
require get_template_directory(). '/inc/about-pg-customizer.php';
require get_template_directory(). '/inc/footer-customizer.php';
/*wp-header-image*/
add_theme_support( 'custom-header',array( 'header-text' => true,'default-image' => get_template_directory_uri() . '/images/defaultheader.jpg','uploads' => true,'video' => true,'video-setting' =>true,'width'  => 2000,));
/*add widgets*/
function header_button_init() {
register_sidebar( array(
'name' => 'Header Widget',
'id' => 'header-widget',
'before_widget' => '<div class="hw-widget">',
'after_widget' => '</div>',
'before_title' => '<h2 class="hw-title">',
'after_title' => '</h2>',
) );

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
function mcgis_scripts()
{  
   wp_enqueue_script( 'custom-script-js', get_template_directory_uri().'assets/js/jquery.min.js',true);
   wp_enqueue_script( 'custom-script-popper', get_template_directory_uri().'assets/popper/popper.min.js',
   	array( 'jquery' ),true);
   wp_enqueue_script( 'custom-script-boot', get_template_directory_uri().'assets/bootstrap/js/bootstrap.min.js',
   	array('jquery' ),true);
add_action( 'wp_register_scripts', 'mcgis_scripts' );
add_action( 'wp_enqueue_scripts', 'mcgis_scripts' );
add_action('wp_footer', 'mcgis_scripts');
}
add_filter('show_admin_bar', '__return_false');
?>