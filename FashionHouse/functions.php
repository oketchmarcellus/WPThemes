<?php
/*register style sheets*/
function fashionHouse_styles() {
wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
wp_enqueue_style( 'custom-style', get_template_directory_uri().'/style.css');
wp_enqueue_style( 'menu-style', get_template_directory_uri().'/assets/css/menu.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/fonts/font-awesome.min.css');

}
/* Enable support for Post Formats.*/
add_action( 'wp_register_scripts', 'fashionHouse_styles' );
add_action( 'wp_enqueue_scripts', 'fashionHouse_styles' );
add_theme_support( 'post-formats', array('aside','image','video','quote','link','gallery','audio',) );
/* Add theme support for selective refresh for widgets.*/
add_theme_support( 'customize-selective-refresh-widgets' );

/*add the bg-image functionality*/
add_theme_support( 'custom-background' );

/*add posts thumb-nail support*/
add_theme_support( 'post-thumbnails' );
/*set size of the previewed thumbs image*/
add_image_size( 'previewed_thumbs_img', 100, 100, true );
/*add post format support*/
add_theme_support('post-formats',array('gallery','link'));
/*add the menu to admin*/
register_nav_menus( array('primary' => __( 'Primary Menu', 'McGIS' )) );
require_once('wp-bootstrap-navwalker.php');
require get_template_directory() . '/inc/customizer2.php';
require get_template_directory() . '/inc/custom-components.php';
require get_template_directory(). '/inc/gallery-customizer.php';
require get_template_directory(). '/inc/page-select-customizer.php';
/*wp-header-image*/
add_theme_support( 'custom-logo', array('height'=> 200,'width'=> 200,'flex-height' => true,'flex-width'  => true,'header-text' => array( 'site-title', 'site-description' )));
/*add admin post thumbnail preview list feature*/
//add new column called Thumbs preview
function posts_columns($defaults){
    $defaults['preview_post_thumbs'] = __('Thumbs preview');
    return $defaults;
}
function posts_custom_columns($column_name, $id){
        if($column_name == 'preview_post_thumbs'){
        	if( has_post_thumbnail() ){
        		echo the_post_thumbnail( 'previewed_thumbs_img' );
    		} else {
	    	_e('No Thumbnail');
        	}
		}
}
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
add_filter('manage_pages_columns', 'posts_columns', 5);
add_action('manage_pages_custom_column', 'posts_custom_columns', 5, 2);
add_filter('manage_post-type_posts_columns', 'posts_columns', 5);
add_action('manage_post-type_posts_custom_column', 'posts_custom_columns', 5, 2);

/*register-scripts*/
function fashionHouse_scripts()
{  
   wp_enqueue_script( 'custom-script-js', get_template_directory_uri().'assets/js/jquery.min.js',true);
   wp_enqueue_script( 'custom-script-boot', get_template_directory_uri().'assets/bootstrap/js/bootstrap.min.js',
   	array('jquery' ),true);
add_action( 'wp_register_scripts', 'fashionHouse_scripts' );
add_action( 'wp_enqueue_scripts', 'fashionHouse_scripts' );
add_action('wp_footer', 'fashionHouse_scripts');
}
add_filter('show_admin_bar', '__return_false');
?>