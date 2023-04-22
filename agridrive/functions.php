<?php

/*increase upload Limit*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/*register style sheets*/
function agridrive_styles() {
wp_enqueue_style( 'boot-style', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
wp_enqueue_style( 'custom-font','https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i',false);
wp_enqueue_style( 'custom-font2','https://fonts.googleapis.com/css?family=Raleway',false);
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.min.css');
wp_enqueue_style( 'linear-icons-styling', get_template_directory_uri().'/assets/linear-icons/css/icon-font.min.css');
wp_enqueue_style( 'owl-carousle-styling', get_template_directory_uri().'/assets/owl-carousel/css/owl.carousel.css');
wp_enqueue_style( 'owl-carousle-theme', get_template_directory_uri().'/assets/owl-carousel/css/owl.theme.css');
wp_enqueue_style( 'ionicons-style', get_template_directory_uri().'/assets/css/ionicons.min.css');
wp_enqueue_style( 'magnific-style', get_template_directory_uri().'/assets/css/magnific-popup.css');

wp_enqueue_style( 'custom-style', get_template_directory_uri().'/style.css');
}

/* Enable support for Post Formats.*/
add_action( 'wp_register_scripts', 'agridrive_styles' );
add_action('wp_enqueue_scripts', 'agridrive_styles' );

/*let wordpress manager the document title for us*/
add_theme_support( 'title-tag' );
/* Switch default core markup for search form, comment form, and comments
* to output valid HTML5.*/
add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

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
	'primary-navigation' => __( 'agridrive Primary Navigation', 'musicstudio' ),
	'social-links' => __( 'agridrive Social Links', 'musicstudio' ),
	'footer-nav'       => __( 'agridrive Footer Links', 'musicstudio' ),
));

/*wp-header-image*/
function agridrive_custom_header_setup() {
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
				'url'           => '%s/assets/img/header1.jpg',
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
add_action( 'after_setup_theme', 'agridrive_custom_header_setup' );

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
		'name' => 'Sidebar widget',
		'id' => 'sidebarh',
		'description'   => __('Add widgetshere for your sidebar'),
		'before_widget' => '<div id="%1$s" class="sidebar %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
));
	register_sidebar( array(
		'name' => 'Header Search widget',
		'id' => 'header_search',
		'description'   => __('Add a search widget here'),
		'before_widget' => '<div id="%1$s" class="search-widget pull-right %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
	));
	register_sidebar( array(
		'name'          => 'Header address widget area',
		'id'            => 'header_address',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="address %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<font style="color:#a35719; font-weight:bold;">',
		'after_title'   => '</font>',
	) );
	register_sidebar( array(
		'name'          => 'Header email widget area',
		'id'            => 'header_email',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="mail %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<font style="color:#a35719; font-weight:bold;">',
		'after_title'   => '</font>',
	) );
	register_sidebar( array(
		'name'          => 'Header phone widget area',
		'id'            => 'header_phone',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="phone %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<font style="color:#a35719; font-weight:bold;">',
		'after_title'   => '</font>',
	) );

}
add_action( 'widgets_init', 'header_button_init' );

function contact_widget() {

	register_sidebar( array(
		'name'          => 'contact widget area',
		'id'            => 'contact_widget_area',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'contact_widget' );

function custom_footer_widgets() {

	register_sidebar( array(
		'name'          => 'Footer Widget area one',
		'id'            => 'footer_widget1',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="about %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	 register_sidebar( array(
		'name'          => 'Footer Widget area two',
		'id'            => 'footer_widget2',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="footer-nav %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget area three',
		'id'            => 'footer_widget3',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="address %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget area four',
		'id'            => 'footer_widget4',
		'description'   => __('Add a text or customl html widget here'),
		'before_widget' => '<div id="%1$s" class="address %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'custom_footer_widgets' );

function get_agridrive_breadcrumb() {
    echo '<li><a href="'.home_url().'" rel="nofollow">Home</a></li>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&nbsp; ";
                echo '<li>';
        		echo the_title();
        		echo '</li>';
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo '<li>';
        echo the_title();
        echo '</li>';
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;Search Results for... ";
        echo '<li>';
        echo the_search_query();
        echo '</li>';
    }
}

function register_heading_only_widget(){
	register_widget('heading_only_widget');
}
add_action('widgets_init','register_heading_only_widget');

//require_once('wp-bootstrap-navwalker.php');
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/agridrivemenu.php';
require get_template_directory() . '/inc/custom-widgets.php';
require get_template_directory() . '/inc/starter-content.php';
require get_template_directory() . '/inc/TGM/agridrivetgm.php';
require get_template_directory() . '/inc/agridrive-carousel/agridrive-home-carousel-customizer.php';
require get_template_directory() . '/inc/agridrive-carousel/agridrive-home-carousel-default.php';
require get_template_directory(). '/inc/agridrive-services/agridrive-service-customizer.php';
require get_template_directory(). '/inc/agridrive-services/agridrive-service-default.php';
require get_template_directory() . '/inc/agridrive-partners/partners-customizer.php';
require get_template_directory() . '/inc/agridrive-partners/partners-default.php';
require get_template_directory() . '/inc/why-agridrive/why-agridrive-customizer.php';
require get_template_directory() . '/inc/why-agridrive/why-agridrive-default.php';
require get_template_directory() . '/inc/jobs-customizer.php';
require get_template_directory() . '/inc/agridrive-contact/agridrive-contact-customizer.php';
require get_template_directory() . '/inc/agridrive-contact/agridrive-contact-default.php';
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/custom-metaboxes.php';
require get_template_directory() . '/inc/custom-controls.php';
//require get_template_directory() . '/includes/colorScheme-customizer.php';
require get_template_directory() . '/inc/footer-customizer.php';

/*register-scripts*/
function agridrive_scripts(){ 
	wp_register_script( 'jquery-min-script-js', get_template_directory_uri().'/assets/jquery/jquery-3.1.1.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'jquery-min-script-js');
	wp_register_script( 'imagesloaded-script-js', get_template_directory_uri().'/assets/jquery/imagesloaded.pkgd.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'imagesloaded-script-js');
	wp_register_script( 'animateNumber-script-js', get_template_directory_uri().'/assets/jquery/jquery.animateNumber.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'animateNumber-script-js');
	wp_register_script( 'owl-carousel-script', get_template_directory_uri().'/assets/owl-carousel/js/owl.carousel.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'owl-carousel-script');
	wp_register_script( 'magnific-popup-script-js', get_template_directory_uri().'/assets/jquery/jquery.magnific-popup.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'magnific-popup-script-js');
	wp_register_script( 'jquery-plugin-script-js', get_template_directory_uri().'/assets/jquery/plugin.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'jquery-plugin-script-js');
	wp_register_script( 'plugins-script-js', get_template_directory_uri().'/assets/jquery/plugins.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'plugins-script-js');
	wp_register_script( 'custom-script-boot', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array('jquery' ),array('jquery' ),'1.0',true);
	wp_enqueue_script( 'custom-script-boot');
	wp_register_script( 'isotope-script', get_template_directory_uri().'/assets/isotope/jquery.isotope.js',array('jquery' ),array('jquery' ),'1.0',true);
	wp_enqueue_script( 'isotope-script');
	wp_register_script( 'linear-icons-script', get_template_directory_uri().'/assets/linear-icons/svgembedder.min.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'linear-icons-script');
	wp_register_script( 'custom-script-boot', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array('jquery' ),array('jquery' ),'1.0',true);
	wp_enqueue_script( 'custom-script-boot');
	wp_register_script( 'carousel2-script', get_template_directory_uri().'/assets/js/LatestNewsCarousel.js',array('jquery' ),'1.0',true);
	wp_enqueue_script( 'carousel2-script');
	wp_register_script( 'custom-script-js', get_template_directory_uri().'/js/custom.js');
	wp_enqueue_script( 'custom-script-js',array('jquery' ),'1.0',true);
	//wp_register_script( 'navigation-script', get_template_directory_uri().'/js/navigation.js',array('jquery' ),'1.0',true);
	//wp_enqueue_script( 'navigation-script');
 
}
add_action( 'wp_register_scripts', 'agridrive_scripts' );
add_action( 'wp_enqueue_scripts', 'agridrive_scripts' );
add_action('wp_footer', 'agridrive_scripts');
//add_filter('show_admin_bar', '__return_false');
?>