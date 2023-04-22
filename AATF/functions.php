<?php

/*increase upload Limit*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1100;

if ( ! function_exists('aatf_child_support') ) {

// Register Theme Features
function aatf_child_support()  {

	//let wordpress manager the document title for us
	add_theme_support( 'title-tag' );
	// Switch default core markup for search form, comment form, and comments to output valid HTML5.*/
	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

	// Add theme support for Featured Images
	add_theme_support('post-thumbnails');

	// Set custom thumbnail dimensions
	set_post_thumbnail_size( 200, 200, true );

	//set size of the previewed thumbs image
	add_image_size( 'previewed_thumbs_img', 100, 100, true );
	// Add theme support for selective refresh for widgets
	add_theme_support('customize-selective-refresh-widgets');

	//add the menu to admin
	register_nav_menus( array(
	'primary-navigation' => __( 'aatf Primary Navigation', 'aatf' ),
	'social-links' => __( 'aatf Social Links', 'aatf' ),
	'footer-nav'       => __( 'aatf Footer Links', 'aatf' ),
	));

	//Add admin post thumbnail preview list feature
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


	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '_custom_admin_header',
		'admin-preview-callback' => '_custom_admin_header_previewer',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for Custom Header
	$header_args = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 0,
		'flex-width'             => true,
		'flex-height'            => true,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => true,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
		'video'                  => true,
		'video-active-callback'  => '',
	);
	add_theme_support( 'custom-header', $header_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();

	// Add theme support for Translation
	load_theme_textdomain( 'aatf', get_template_directory() . '/language' );
}
add_action( 'after_setup_theme', 'aatf_child_support' );

}

// Add Toolbar Menus
function page_builder() {
	global $wp_admin_bar;

	$args = array(
		'id'     => 'theme_builder_menu',
		'title'  => __( 'Adroit builder', 'aatf' ),
		'href'   => 'adroit-page-builder.php',
	);
	$wp_admin_bar->add_menu( $args );

}
add_action( 'wp_before_admin_bar_render', 'page_builder', 999 );

//Core files required
require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
