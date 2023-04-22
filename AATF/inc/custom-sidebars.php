<?php
/*
=================================
    All sidebars
=================================
*/
/*Templates custom sidebars*/


// Register Sidebars

function aatf_register_sidebars() {

// Register Sidebar
register_sidebar( array(
	'name' => esc_html__( 'Single Post Sidebar', 'aatf' ),
	'id' => 'sidebar1',
	'description' => esc_html__( 'Appears on single post page.', 'aatf' ),
	'before_widget' => '<div id="%1$s" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-12 %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="header-h4">',
	'after_title' => '</h4>',
));

}
add_action( 'widgets_init', 'aatf_register_sidebars' );


/*add widgets*/
function header_button_init(){

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


function get_aatf_breadcrumb() {
    echo '<li style="padding:0px"><a href="'.home_url().'" rel="nofollow">Home</a></li>';
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
    } elseif (is_archive()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo '<li>';
        echo 'Archives';
        echo '</li>';
    }
     elseif (is_search()) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;Search Results for... ";
        echo '<li>';
        echo the_search_query();
        echo '</li>';
    }

}


