<?php

/*increase upload Limit*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/*register style sheets*/
function production_styles() {
wp_enqueue_style( 'boot-style', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
wp_enqueue_style( 'custom-style', get_template_directory_uri().'/style.css');
wp_enqueue_style( 'custom-font','https://fonts.googleapis.com/css?family=Open+Sans',false);
wp_enqueue_style( 'custom-font2','https://fonts.googleapis.com/css?family=Roboto',false);
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.min.css');
}

/* Enable support for Post Formats.*/
add_action( 'wp_register_scripts', 'production_styles' );
add_action('wp_enqueue_scripts', 'production_styles' );

/*let wordpress manager the document title for us*/
add_theme_support( 'title-tag' );

add_theme_support( 'post-formats', array('aside','image','video','quote','link','gallery','audio',) );

/* Add theme support for selective refresh for widgets.*/
add_theme_support('customize-selective-refresh-widgets');

/*wp-custom-logo*/
add_theme_support( 'custom-logo', array('height'=> 72,'width'=> 100,'flex-height' => true,'flex-width'  => true,));

/*add the bg-image functionality*/
add_theme_support('custom-background');

/*add posts thumb-nail support*/
add_theme_support('post-thumbnails');

/*set size of the previewed thumbs image*/
add_image_size( 'previewed_thumbs_img', 100, 100, true );

/*add post format support*/
add_theme_support('post-formats',array('gallery','link'));

/*add the menu to admin*/
register_nav_menus( array(
	'primary-navigation' => __( 'Production Primary Navigation', 'musicstudio' ),
	'social-links' => __( 'Production Social Links', 'musicstudio' ),
	'footer'       => __( 'Production Footer Links', 'musicstudio' ),
));

/*wp-header-image*/
function production_custom_header_setup() {
				$args = array(
				'header-text' => true,
				'default-image'      => get_template_directory_uri() . '/assets/img/header1.jpg',
				'default-text-color' => '#f5f5f5',
				'uploads' => true,
				'video'	=>true,
				'width'              => 2000,
				'flex-width'         => true,
				'flex-height'        => true,
		);
add_theme_support( 'custom-header', $args );
/*Register Default header*/
		$header_images = array(
			'default-image1' => array(
				'url'           =>	'%s/assets/img/header1.jpg',
				'thumbnail_url' =>	'%s/assets/img/header1.jpg',
				'description'   =>	'header default1',
		),
			'default-image2' => array(
				'url'           =>	'%s/assets/img/header2.jpg',
				'thumbnail_url' =>	'%s/assets/img/header2.jpg',
				'description'   => 'header default2'),
);
register_default_headers( $header_images );
}
add_action( 'after_setup_theme', 'production_custom_header_setup' );

/*wp-custom-logo*/

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
			esc_html_e('No Thumbnail');
				}
	}
}
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
add_filter('manage_pages_columns', 'posts_columns', 5);
add_action('manage_pages_custom_column', 'posts_custom_columns', 5, 2);
add_filter('manage_post-type_posts_columns', 'posts_columns', 5);
add_action('manage_post-type_posts_custom_column', 'posts_custom_columns', 5, 2);

/*add widgets*/
function header_button_init(){
register_sidebar( array(
'name' => 'Header Widget area',
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
		'name'          => 'footer Widget area one',
		'id'            => 'footer_widget1',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="location-txt %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p>',
		'after_title'   => '</p>',
	) );
	 register_sidebar( array(
		'name'          => 'footer Widget area two',
		'id'            => 'footer_widget2',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="location-txt %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p>',
		'after_title'   => '</p>',
	) );
		register_sidebar( array(
		'name'          => 'footer Widget area three',
		'id'            => 'footer_widget3',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="location-txt %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p>',
		'after_title'   => '</p>',
	) );

}
add_action( 'widgets_init', 'custom_footer_widgets' );

require_once('wp-bootstrap-navwalker.php');
require get_template_directory() . '/includes/template-functions.php';
require get_template_directory() . '/includes/customizer.php';
require get_template_directory() . '/includes/starter-content.php';
require get_template_directory() . '/includes/musicstudiotgm.php';
require get_template_directory() . '/includes/production-slider/slider-customizer.php';
require get_template_directory() . '/includes/production-slider/slider-default.php';
require get_template_directory() . '/includes/custom-post-types.php';
require get_template_directory() . '/includes/custom-controls.php';
require get_template_directory() . '/includes/colorScheme-customizer.php';
require get_template_directory() . '/includes/footer-customizer.php';

/*register-scripts*/
function production_scripts(){ 
	 wp_register_style( 'custom-script-js', get_template_directory_uri().'/assets/js/jquery.min.js');
	 wp_enqueue_script( 'custom-script-js');
	 wp_register_script( 'custom-script-boot', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array('jquery' ),'1.0',true);
	 wp_enqueue_script( 'custom-script-boot');
	 wp_register_style( 'carousel2-script', get_template_directory_uri().'/assets/js/LatestNewsCarousel.js');
	 wp_enqueue_script( 'loadmore_script');
	 wp_register_script( 'loadmore_script', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery') );
 
}
add_action( 'wp_register_scripts', 'production_scripts' );
add_action( 'wp_enqueue_scripts', 'production_scripts' );
add_action('wp_footer', 'production_scripts');
//add_filter('show_admin_bar', '__return_false');
?>