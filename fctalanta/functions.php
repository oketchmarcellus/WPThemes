<?php
//register style sheets
function fctalanta_styles() {
wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
wp_enqueue_style( 'akslider', get_template_directory_uri().'/css/akslider.css');
wp_enqueue_style( 'line-icons', get_template_directory_uri().'/css/donate.css');
wp_enqueue_style( 'theme-styles', get_template_directory_uri().'/style.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.min.css');
wp_enqueue_style( 'custom-font','http://fonts.googleapis.com/css?family=Roboto:300,400,500,700',false);
}
add_action( 'wp_register_scripts', 'fctalanta_styles' );
add_action( 'wp_enqueue_scripts', 'fctalanta_styles' );

//let wordpress manager the document title for us
add_theme_support( 'title-tag' );

// Enable support for Post Formats
add_theme_support( 'post-formats', array('aside','image','video','quote','link','gallery','audio',) );
// Add theme support for selective refresh for widgets

add_theme_support( 'customize-selective-refresh-widgets' );

//add the bg-image functionality
add_theme_support( 'custom-background' );

//wp-custom-logo
add_theme_support( 'custom-logo', array('height'=> 100,'width'=> 200,'flex-height' => true,'flex-width'  => true,'header-text' => array( 'site-title', 'site-description' )));

/*wp-header-image*/
function fctalanta_custom_header_setup() {
				$args = array(
				'header-text' => true,
				'default-image'      => get_template_directory_uri() . '/images/main-slider-img.jpg',
				'default-text-color' => '#f5f5f5',
				'uploads' => true,
				'video'	=>true,
				'width'              => 1500,
				'height'			=>648,
				'flex-width'         => true,
				'flex-height'        => true,
		);
add_theme_support( 'custom-header', $args );
/*Register Default header*/
		$header_images = array(
			'default-image1' => array(
				'url'           =>	'%s/images/main-slider-img1.jpg',
				'thumbnail_url' =>	'%s/images/main-slider-img1.jpg',
				'description'   =>	'header default1',
		),
			'default-image2' => array(
				'url'           =>	'%s/images/main-slider-img2.jpg',
				'thumbnail_url' =>	'%s/images/main-slider-img2.jpg',
				'description'   => 'header default2'),
);
register_default_headers( $header_images );
}
add_action( 'after_setup_theme', 'fctalanta_custom_header_setup' );

//add posts thumb-nail support
add_theme_support( 'post-thumbnails' );
//set size of the previewed thumbs image
add_image_size( 'previewed_thumbs_img', 100, 100, true );

//add admin post thumbnail preview list feature
function posts_columns($defaults){
    $defaults['preview_post_thumbs'] = __('Thumbs preview');
    return $defaults;
}

//add new column called Thumbs preview
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

//add post format support
add_theme_support('post-formats',array('gallery','link'));

//add the menu to admin
register_nav_menus( array(
	'primary-navigation' => __( 'fctalanta Primary Navigation', 'fctalanta' ),
	'social-links' => __( 'fctalanta Social Links', 'fctalanta' ),
	'footer-nav'       => __( 'fctalanta Footer Links', 'fctalanta' ),
));

// Register Sidebars

function register_talanta_sidebars() {

// Register Sidebar
register_sidebar( array(
  'name' => esc_html__( 'Sidebar', 'agridrive' ),
  'id' => 'sidebar1',
  'description' => esc_html__( 'default sidebar.', 'agridrive' ),
  'before_widget' => '<div id="%1$s" class="sidebar %2$s clearfix">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="uk-panel-title">',
  'after_title' => '</h3>',
));

}
add_action( 'widgets_init', 'register_talanta_sidebars' );

function custom_footer_widgets() {

  register_sidebar( array(
    'name'          => 'Footer Widget area one',
    'id'            => 'footer_widget1',
    'description'   => __('Add a text or customl html widget here'),
    'before_widget' => '<div id="%1$s" class="textwidget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="block-title">',
    'after_title'   => '</h3>',
  ) );
   register_sidebar( array(
    'name'          => 'Footer Widget area two',
    'id'            => 'footer_widget2',
    'description'   => __('Add a text or customl html widget here'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="block-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer Widget area three',
    'id'            => 'footer_widget3',
    'description'   => __('Add a text or customl html widget here'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="block-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer Widget area four',
    'id'            => 'footer_widget4',
    'description'   => __('Add a text or customl html widget here'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="block-title">',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'custom_footer_widgets' );

function get_talanta_breadcrumb() {
    echo '<li><a href="'.home_url().'" rel="nofollow">Home</a>&nbsp;&nbsp;&nbsp;</li>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&nbsp;&nbsp;";
                echo '<li class="uk-active"><a href="#">';
                the_title();
                echo '</li>';
                echo '</a>';
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo '<li class="uk-active"><a href="#">';
        echo the_title();
        echo '</li>';
        echo '</a>';
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;Search Results for... ";
        echo '<li class="uk-active"><a href="#">';
        echo the_search_query();
        echo '</li>';
        echo '</a>';
    } elseif (is_archive()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo '<li class="uk-active"><a href="#">';
        echo 'Archives';
        echo '</li>';
        echo '</a>';
    }
}


//require_once('wp-bootstrap-navwalker.php');
require get_template_directory(). '/inc/custom-controls.php';
require get_template_directory(). '/inc/customizer.php';
require get_template_directory(). '/inc/custom-metaboxes.php';
require get_template_directory(). '/inc/template-functions.php';
require get_template_directory(). '/inc/starter-content.php';
require get_template_directory(). '/inc/custom-post-types.php';
//require get_template_directory(). '/inc/gallery-customizer.php';
//require get_template_directory(). '/inc/footer-customizer.php';
//require get_template_directory(). '/inc/uploadmetabox.php';
require get_template_directory(). '/inc/fc-main-carousel/fc-main-carousel-customizer.php';
require get_template_directory(). '/inc/fc-main-carousel/fc-main-carousel-default.php';
require get_template_directory(). '/inc/fc-stats/fc-talanta-stats-customizer.php';
require get_template_directory(). '/inc/fc-stats/fc-talanta-stats-default.php';
//require get_template_directory(). '/inc/aeternity-promo-items/aeternity-promo-items-customizer.php';
//require get_template_directory(). '/inc/aeternity-promo-items/aeternity-promo-items-default.php';
//require get_template_directory(). '/inc/fctalanta-categories/categories-customizer.php';
//require get_template_directory(). '/inc/fctalanta-categories/categories-default.php';
//register-scripts
function fctalanta_scripts(){
   	wp_register_script( 'uikit-js', get_template_directory_uri().'/js/uikit.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'uikit-js');

   	wp_register_script( 'SimpleCounter', get_template_directory_uri().'/js/SimpleCounter.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'SimpleCounter');
   	wp_register_script( 'grid-js', get_template_directory_uri().'/js/components/grid.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'grid-js');
    wp_register_script( 'slideshow-js', get_template_directory_uri().'/js/components/slideshow.js',array('jquery' ),'1.0',true);
    wp_enqueue_script( 'slideshow-js');
   	wp_register_script( 'mixitup-js', get_template_directory_uri().'/assets/js/jquery.mixitup.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'mixitup-js');
   	wp_register_script( 'slideset-js', get_template_directory_uri().'/js/components/slideset.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'slideset-js');
   	wp_register_script( 'sticky-js', get_template_directory_uri().'/js/components/sticky.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'sticky-js');
   	wp_register_script( 'lightbox-js', get_template_directory_uri().'/js/components/lightbox.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'lightbox-js');
   	wp_register_script( 'isotope-js', get_template_directory_uri().'/js/isotope.pkgd.min.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'isotope-js');
   	wp_register_script( 'theme-js', get_template_directory_uri().'/js/theme.js',array('jquery' ),'1.0',true);
   	wp_enqueue_script( 'theme-js-js');
}

add_action( 'wp_register_scripts', 'fctalanta_scripts' );
add_action( 'wp_enqueue_scripts', 'fctalanta_scripts' );
add_action('wp_footer', 'fctalanta_scripts');
?>