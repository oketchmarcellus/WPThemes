<?php
/*
=================================
    All Custom Post Types
=================================
*/
/*Templates custom posts*/
/*Fc Talanta Team`*/
add_action( 'init', 'Fc_Talanta_players' );

function Fc_Talanta_players() {
    $labels = array(
    'name'               => _x( 'Fc Talanta Team', 'post type general name'),
    'singular_name'      => _x( 'Fc Talanta Team', 'post type singular name'),
    'menu_name'          => _x( 'Fc Talanta Team', 'admin menu'),
    'name_admin_bar'     => _x( 'Fc Talanta Team', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Team member'),
    'add_new_item'       => __( 'Add New player'),
    'new_item'           => __( 'New player'),
    'edit_item'          => __( 'Edit player '),
    'view_item'          => __( 'View player'),
    'all_items'          => __( 'All players'),
    'featured_image'     => __( 'Player photo', 'text_domain' ),
    'search_items'       => __( 'Search player'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Player found.'),
    'not_found_in_trash' => __( 'No Player found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => get_template_directory_uri() . '/images/talanta-ico.png',
    'description'        => __( 'The Fc Talanta Team'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'exclude_from_search' => false,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'team' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'teams',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'talanta_team', $args );
}
// Add Custom "Members Categories" taxonomy
register_taxonomy( 'player-categories', array( 'talanta_team' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Players Categories', 'singular_name' => 'Players Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'team' )
  )
);

/*Fc Talanta Gallery*/
add_action( 'init', 'Fc_Talanta_gallery' );

function Fc_Talanta_gallery() {
    $labels = array(
    'name'               => _x( 'Fc Talanta Gallery Items', 'post type general name'),
    'singular_name'      => _x( 'Fc Talanta Gallery', 'post type singular name'),
    'menu_name'          => _x( 'Fc Talanta Gallery', 'admin menu'),
    'name_admin_bar'     => _x( 'Fc Talanta Gallery', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Gallery Item'),
    'add_new_item'       => __( 'Add New Gallery Item'),
    'new_item'           => __( 'New Gallery Item'),
    'edit_item'          => __( 'Edit Gallery Item'),
    'view_item'          => __( 'View Gallery Item'),
    'all_items'          => __( 'All Gallery Items'),
    'featured_image'     => __( 'Featured Image', 'text_domain' ),
    'search_items'       => __( 'Search GAllery'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Gallery Item found.'),
    'not_found_in_trash' => __( 'No Gallery Item found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-format-gallery',
    'description'        => __( 'The Fc Talanta Gallery'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'gallery' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'galleries',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'gallery_items', $args );
}
// Add Custom "Members Categories" taxonomy
register_taxonomy( 'gallery-items-categories', array( 'gallery_items' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Gallery Items Categories', 'singular_name' => 'Gallery Item Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'talanta-gallery' )
  )
);
/*Fc Talanta Awards Slider*/
add_action( 'init', 'fc_Talanta_awards_slider' );

function fc_Talanta_awards_slider() {
    $labels = array(
    'name'               => _x( 'Fc Talanta Awards Slider', 'post type general name'),
    'singular_name'      => _x( 'Fc Talanta Award', 'post type singular name'),
    'menu_name'          => _x( 'Fc Talanta Awards', 'admin menu'),
    'name_admin_bar'     => _x( 'Fc Talanta Award', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Award'),
    'add_new_item'       => __( 'Add New Award'),
    'new_item'           => __( 'New Award'),
    'edit_item'          => __( 'Edit Award'),
    'view_item'          => __( 'View Award'),
    'all_items'          => __( 'All Awards'),
    'featured_image'     => __( 'Award featured image', 'text_domain' ),
    'search_items'       => __( 'Search Awards'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Award found.'),
    'not_found_in_trash' => __( 'No Award found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => get_template_directory_uri() . '/images/achievement-icon.png',
    'description'        => __( 'Fc Talanta Awards'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'award' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'awards',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'talanta_awards', $args );
}
// Add Custom "Awards Categories" taxonomy
register_taxonomy( 'awards-categories', array( 'talanta_awards' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Awards Categories', 'singular_name' => 'Awards Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'awards' )
  )
);
/*Fc Talanta Services Items*/
add_action( 'init', 'Fc_Talanta_fixtures' );

function Fc_Talanta_fixtures() {
    $labels = array(
    'name'               => _x( 'Fc Talanta Fixture', 'post type general name'),
    'singular_name'      => _x( 'Fc Talanta Fixture', 'post type singular name'),
    'menu_name'          => _x( 'Fc Talanta Fixtures', 'admin menu'),
    'name_admin_bar'     => _x( 'Fc Talanta Fixture', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Fixture'),
    'add_new_item'       => __( 'Add New Fixture'),
    'new_item'           => __( 'New Fixture'),
    'edit_item'          => __( 'Edit Fixture'),
    'view_item'          => __( 'View Fixture'),
    'all_items'          => __( 'All Fixtures'),
    'featured_image'     => __( 'Home Team Club Logo', 'text_domain' ),
    'search_items'       => __( 'Search Fixture'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Fixture found.'),
    'not_found_in_trash' => __( 'No Fixture found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => get_template_directory_uri() . '/images/kickoff-icon.png',
    'description'        => __( 'The Fc Talanta Fixtures'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'fixture' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'fixturess',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'fixture_items', $args );
}
// Add Custom "Members Categories" taxonomy
register_taxonomy( 'fixture-categories', array( 'fixture_items' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Fixtures Categories', 'singular_name' => 'Fixtures Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'fixtures' )
  )
);
/*About Fc Talanta Accordion*/
add_action( 'init', 'about_Fc_Talanta_accordion_items' );

function about_Fc_Talanta_accordion_items() {
    $labels = array(
    'name'               => _x( 'About Fc Talanta', 'post type general name'),
    'singular_name'      => _x( 'About Fc Talanta', 'post type singular name'),
    'menu_name'          => _x( 'About Fc Talanta', 'admin menu'),
    'name_admin_bar'     => _x( 'About Fc Talanta accordion', 'add new on admin bar'),
    'add_new'            => _x( 'Add New accordion item', 'accordion item'),
    'add_new_item'       => __( 'Add New accordion item'),
    'new_item'           => __( 'New accordion item'),
    'edit_item'          => __( 'Edit accordion item'),
    'view_item'          => __( 'View accordion item'),
    'all_items'          => __( 'All Accordion Items'),
    'featured_image'     => __( 'Accordion featured image', 'text_domain' ),
    'search_items'       => __( 'Search Accordion Items'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Accordion Item found.'),
    'not_found_in_trash' => __( 'No Accordion Items found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-info',
    'description'        => __( 'About Fc Talanta Accordion Items'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'accordion' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'Accordion Item',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Accordion_items', $args );
}
// Add Custom "Accordion Categories" taxonomy
register_taxonomy( 'Fc Talanta-Accordion-items', array( 'Accordion_items' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Accordion Item Categories', 'singular_name' => 'Accordion item Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'Accordion-items' )
  )
);
add_action('post_edit_form_tag','add_post_enctype');
//Add enctype
function add_post_enctype() {
  echo 'enctype=multipart/form-data';
}

?>
