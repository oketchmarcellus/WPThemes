<?php
/*
=================================
    All Custom Post Types
=================================
*/
/*Templates custom posts*/
/*Agridrive Team Members`*/
add_action( 'init', 'agridrive_team_members' );

function agridrive_team_members() {
    $labels = array(
    'name'               => _x( 'Agridrive Team Members', 'post type general name'),
    'singular_name'      => _x( 'Agridrive Team', 'post type singular name'),
    'menu_name'          => _x( 'Agridrive Team', 'admin menu'),
    'name_admin_bar'     => _x( 'Agridrive Team', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Team member'),
    'add_new_item'       => __( 'Add New Member'),
    'new_item'           => __( 'New Team member'),
    'edit_item'          => __( 'Edit Team member'),
    'view_item'          => __( 'View Team member'),
    'all_items'          => __( 'All Team members'),
    'featured_image'     => __( 'Team Member image', 'text_domain' ),
    'search_items'       => __( 'Search Team'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Team member found.'),
    'not_found_in_trash' => __( 'No Team member found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-groups',
    'description'        => __( 'The Agridrive Team'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
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
  register_post_type( 'Team_members', $args );
}
// Add Custom "Members Categories" taxonomy
register_taxonomy( 'members-categories', array( 'Team_members' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Members Categories', 'singular_name' => 'Members Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'Team-members' )
  )
);

/*Agridrive Gallery*/
add_action( 'init', 'agridrive_gallery' );

function agridrive_gallery() {
    $labels = array(
    'name'               => _x( 'Agridrive Gallery Items', 'post type general name'),
    'singular_name'      => _x( 'Agridrive Gallery', 'post type singular name'),
    'menu_name'          => _x( 'Agridrive Gallery', 'admin menu'),
    'name_admin_bar'     => _x( 'Agridrive Gallery', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Gallery Item'),
    'add_new_item'       => __( 'Add New Gallery Item'),
    'new_item'           => __( 'New Gallery Item'),
    'edit_item'          => __( 'Edit Gallery Item'),
    'view_item'          => __( 'View Gallery Item'),
    'all_items'          => __( 'All Gallery Items'),
    'featured_image'     => __( 'Gallery image', 'text_domain' ),
    'search_items'       => __( 'Search GAllery'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Gallery Item found.'),
    'not_found_in_trash' => __( 'No Gallery Item found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-format-gallery',
    'description'        => __( 'The Agridrive Gallery'),
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
  register_post_type( 'Gallery_Items', $args );
}
// Add Custom "Members Categories" taxonomy
register_taxonomy( 'gallery-items-categories', array( 'Gallery_Items' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Gallery Items Categories', 'singular_name' => 'Gallery Item Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'agridrive-gallery' )
  )
);
/*Agridrive Stories Slider*/
add_action( 'init', 'agridrive_stories_slider' );

function agridrive_stories_slider() {
    $labels = array(
    'name'               => _x( 'Agridrive Success Stories Slider', 'post type general name'),
    'singular_name'      => _x( 'Agridrive Story', 'post type singular name'),
    'menu_name'          => _x( 'Agridrive Stories', 'admin menu'),
    'name_admin_bar'     => _x( 'Agridrive Story', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Success Story'),
    'add_new_item'       => __( 'Add New Success Story'),
    'new_item'           => __( 'New Story'),
    'edit_item'          => __( 'Edit Story'),
    'view_item'          => __( 'View Story'),
    'all_items'          => __( 'All Stories'),
    'featured_image'     => __( 'Story featured image', 'text_domain' ),
    'search_items'       => __( 'Search Story'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Story found.'),
    'not_found_in_trash' => __( 'No Story found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => get_template_directory_uri() . '/images/icons/stories-icon.png',
    'description'        => __( 'Agridrive Success Stories'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'story' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'stories',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Success_stories', $args );
}
// Add Custom "Members Categories" taxonomy
register_taxonomy( 'stories-categories', array( 'Success_stories' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Stories Categories', 'singular_name' => 'Stories Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'Sucess-stories' )
  )
);
/*Agridrive Services Items*/
add_action( 'init', 'agridrive_services_items' );

function agridrive_services_items() {
    $labels = array(
    'name'               => _x( 'Agridrive Services', 'post type general name'),
    'singular_name'      => _x( 'Agridrive Service', 'post type singular name'),
    'menu_name'          => _x( 'Agridrive Services', 'admin menu'),
    'name_admin_bar'     => _x( 'Agridrive Service', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Service'),
    'add_new_item'       => __( 'Add New Service'),
    'new_item'           => __( 'New Service'),
    'edit_item'          => __( 'Edit Service'),
    'view_item'          => __( 'View Service'),
    'all_items'          => __( 'All Services'),
    'featured_image'     => __( 'Service icon', 'text_domain' ),
    'search_items'       => __( 'Search Service'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Service found.'),
    'not_found_in_trash' => __( 'No Service found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => get_template_directory_uri() . '/images/icons/services-icon.png',
    'description'        => __( 'The Agridrive Services'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'service' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'services',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Service_items', $args );
}
// Add Custom "Members Categories" taxonomy
register_taxonomy( 'service-categories', array( 'Service_items' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'services Categories', 'singular_name' => 'Services Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'Service-items' )
  )
);
/*About Agridrive Accordion*/
add_action( 'init', 'about_agridrive_accordion_items' );

function about_agridrive_accordion_items() {
    $labels = array(
    'name'               => _x( 'About agridrive', 'post type general name'),
    'singular_name'      => _x( 'About agridrive', 'post type singular name'),
    'menu_name'          => _x( 'About agridrive', 'admin menu'),
    'name_admin_bar'     => _x( 'About agridrive accordion', 'add new on admin bar'),
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
    'description'        => __( 'About Agridrive Accordion Items'),
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
register_taxonomy( 'Agridrive-Accordion-items', array( 'Accordion_items' ),
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
