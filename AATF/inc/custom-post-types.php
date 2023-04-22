<?php
/*
=================================
    All Custom Post Types
=================================
*/
/*Templates custom posts*/
/*aatf Team Members`*/
add_action( 'init', 'aatf_team_members' );

function aatf_team_members() {
    $labels = array(
    'name'               => _x( 'Aatf Team Members', 'post type general name'),
    'singular_name'      => _x( 'Aatf Team', 'post type singular name'),
    'menu_name'          => _x( 'Aatf Team', 'admin menu'),
    'name_admin_bar'     => _x( 'Aatf Team', 'add new on admin bar'),
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
    'description'        => __( 'The Aatf Team'),
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


/*aatf Gallery*/
if ( ! function_exists('aatf_gallery') ) {//Add child theme support

add_action( 'init', 'aatf_gallery' );

function aatf_gallery() {
    $labels = array(
    'name'               => _x( 'aatf Gallery Items', 'post type general name'),
    'singular_name'      => _x( 'aatf Gallery', 'post type singular name'),
    'menu_name'          => _x( 'aatf Gallery', 'admin menu'),
    'name_admin_bar'     => _x( 'aatf Gallery', 'add new on admin bar'),
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
    'description'        => __( 'The aatf Gallery'),
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
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Gallery_Items', $args );
}

}
//aatf Success Stories
add_action( 'init', 'aatf_success_stories' );

function aatf_success_stories() {
    $labels = array(
    'name'               => _x( 'aatf Success Stories', 'post type general name'),
    'singular_name'      => _x( 'aatf Story', 'post type singular name'),
    'menu_name'          => _x( 'aatf Stories', 'admin menu'),
    'name_admin_bar'     => _x( 'aatf Story', 'add new on admin bar'),
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
    'menu_icon'      => 'dashicons-book',
    'description'        => __( 'aatf Success Stories'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'stories' ), // The individual slug
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


//aatf projects
add_action( 'init', 'aatf_projects' );

function aatf_projects() {
    $labels = array(
    'name'               => _x( 'aatf projects', 'post type general name'),
    'singular_name'      => _x( 'aatf project', 'post type singular name'),
    'menu_name'          => _x( 'aatf projects', 'admin menu'),
    'name_admin_bar'     => _x( 'aatf Project', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Aaatf Project'),
    'add_new_item'       => __( 'Add New Project'),
    'new_item'           => __( 'New Project'),
    'edit_item'          => __( 'Edit Project'),
    'view_item'          => __( 'View Project'),
    'all_items'          => __( 'All Projects'),
    'featured_image'     => __( 'Project featured image', 'text_domain' ),
    'search_items'       => __( 'Search Project'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Project found.'),
    'not_found_in_trash' => __( 'No Project found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => get_template_directory_uri() . '/images/icons/AATF-our-project-pages-icon-FARMERS.png',
    'description'        => __( 'aatf Success Projects'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'projects' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'projects',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Aatf_projects', $args );
}

/*aatf Programme Items*/
add_action( 'init', 'aatf_programme_items' );

function aatf_programme_items() {
    $labels = array(
    'name'               => _x( 'aatf programmes', 'post type general name'),
    'singular_name'      => _x( 'aatf programme', 'post type singular name'),
    'menu_name'          => _x( 'aatf programmes', 'admin menu'),
    'name_admin_bar'     => _x( 'aatf programme', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'programme'),
    'add_new_item'       => __( 'Add New Programme'),
    'new_item'           => __( 'New programme'),
    'edit_item'          => __( 'Edit programme'),
    'view_item'          => __( 'View Programme'),
    'all_items'          => __( 'All programmes'),
    'featured_image'     => __( 'Programmes featured image', 'text_domain' ),
    'search_items'       => __( 'Search Programme'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Programme found.'),
    'not_found_in_trash' => __( 'No programme found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => get_template_directory_uri() . '/images/icons/our-project-pages-icons-PROJECT-GOAL.png',
    'description'        => __( 'The aatf programmes'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'programmes' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'programmes',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Aatf_programmes', $args );
}

/*About aatf Accordion*/
add_action( 'init', 'about_aatf_accordion_items' );

function about_aatf_accordion_items() {
    $labels = array(
    'name'               => _x( 'About aatf', 'post type general name'),
    'singular_name'      => _x( 'About aatf', 'post type singular name'),
    'menu_name'          => _x( 'About aatf', 'admin menu'),
    'name_admin_bar'     => _x( 'About aatf accordion', 'add new on admin bar'),
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
    'description'        => __( 'About aatf Accordion Items'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'accordion' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'Accordion Items',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'About_accordions', $args );
}


/*About aatf Accordion*/
add_action( 'init', 'aatf_faq_accordion_items' );

function aatf_faq_accordion_items() {
    $labels = array(
    'name'               => _x( 'aatf FAQs', 'post type general name'),
    'singular_name'      => _x( 'aatf FAQ', 'post type singular name'),
    'menu_name'          => _x( 'aatf FAQs', 'admin menu'),
    'name_admin_bar'     => _x( 'FAQ accordion', 'add new on admin bar'),
    'add_new'            => _x( 'Add New FAQ', 'accordion item'),
    'add_new_item'       => __( 'Add New FAQ item'),
    'new_item'           => __( 'New FAQ item'),
    'edit_item'          => __( 'Edit FAQ item'),
    'view_item'          => __( 'View FAQ item'),
    'all_items'          => __( 'All FAQs'),
    'featured_image'     => __( 'FAQ featured image', 'text_domain' ),
    'search_items'       => __( 'Search FAQs'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Accordion Item found.'),
    'not_found_in_trash' => __( 'No Accordion Items found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-search',
    'description'        => __( 'Aatf FAQs Accordion Items'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'faq' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'FAQ Accordion Items',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'FAQ_accordions', $args );
}

//aatf projects
add_action( 'init', 'aatf_jobs' );

function aatf_jobs() {
    $labels = array(
    'name'               => _x( 'aatf jobs', 'post type general name'),
    'singular_name'      => _x( 'aatf job', 'post type singular name'),
    'menu_name'          => _x( 'aatf jobs', 'admin menu'),
    'name_admin_bar'     => _x( 'aatf Job', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Add Job'),
    'add_new_item'       => __( 'Add New Job'),
    'new_item'           => __( 'New Job'),
    'edit_item'          => __( 'Edit Job'),
    'view_item'          => __( 'View Job'),
    'all_items'          => __( 'All Jobs'),
    'featured_image'     => __( 'Jobs featured image', 'text_domain' ),
    'search_items'       => __( 'Search Project'),
    'parent_item_colon'  => __( 'Parent group:'),
    'not_found'          => __( 'No Job found.'),
    'not_found_in_trash' => __( 'No Job found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => get_template_directory_uri() . '/images/icons/careers2.png',
    'description'        => __( 'aatf Careers and Vacancies '),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'jobs' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'jobs',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Aatf_jobs', $args );
}

/*aatf Programme Items*/
add_action( 'init', 'aatf_resources' );

function aatf_resources() {
    $labels = array(
    'name'               => _x( 'aatf resources', 'post type general name'),
    'singular_name'      => _x( 'aatf resources', 'post type singular name'),
    'menu_name'          => _x( 'aatf resources', 'admin menu'),
    'name_admin_bar'     => _x( 'aatf resources', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'resource'),
    'add_new_item'       => __( 'Add New resources'),
    'new_item'           => __( 'New resources'),
    'edit_item'          => __( 'Edit resources'),
    'view_item'          => __( 'View resources'),
    'all_items'          => __( 'All resources'),
    'featured_image'     => __( 'Resources featured image', 'text_domain' ),
    'search_items'       => __( 'Search resources'),
    'parent_item_colon'  => __( 'Parent resources:'),
    'not_found'          => __( 'No Resources found.'),
    'not_found_in_trash' => __( 'No Resources found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-info',
    'description'        => __( 'The aatf resources'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'resources' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'resources',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Aatf_resources', $args );
}

/*aatf Programme Items*/
add_action( 'init', 'aatf_newsletters' );

function aatf_newsletters() {
    $labels = array(
    'name'               => _x( 'aatf newsletters', 'post type general name'),
    'singular_name'      => _x( 'aatf newsletters', 'post type singular name'),
    'menu_name'          => _x( 'aatf newsletters', 'admin menu'),
    'name_admin_bar'     => _x( 'aatf newsletters', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'newsletter'),
    'add_new_item'       => __( 'Add New newsletters'),
    'new_item'           => __( 'New newsletters'),
    'edit_item'          => __( 'Edit newsletters'),
    'view_item'          => __( 'View newsletters'),
    'all_items'          => __( 'All newsletters'),
    'featured_image'     => __( 'Newsletters featured image', 'text_domain' ),
    'search_items'       => __( 'Search newsletters'),
    'parent_item_colon'  => __( 'Parent newsletters:'),
    'not_found'          => __( 'No newsletters found.'),
    'not_found_in_trash' => __( 'No newsletters found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-media-text',
    'description'        => __( 'The aatf newsletters'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'newsletters' ), // The individual slug
    'capability_type'    => 'post',
    'has_archive'         => 'newsletters',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
    'taxonomy'            =>array('categories'),
   );
  register_post_type( 'Aatf_newsletters', $args );
}

add_action('post_edit_form_tag','add_post_enctype');
//Add enctype
function add_post_enctype() {
  echo 'enctype=multipart/form-data';
}

function aatf_posts_admin_scripts(){

wp_enqueue_style( 'admin-styles', get_template_directory_uri().'/css/admin-style.css');

}
add_action('admin_enqueue_scripts', 'aatf_posts_admin_scripts');

?>
