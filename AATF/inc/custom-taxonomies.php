<?php
/*
=================================
    All Custom Taxonomies
=================================
*/
/*Templates custom taxonomies*/


//hook into the init action and call create_book_taxonomies when it fires
 
add_action( 'init', 'create_news_and_updates_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_news_and_updates_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'News categories', 'News and Updates name' ),
    'singular_name' => _x( 'News updates category', 'News and Updates name' ),
    'search_items' =>  __( 'Search News and Updates' ),
    'all_items' => __( 'All News and Updates' ),
    'parent_item' => __( 'News and Updates' ),
    'parent_item_colon' => __( 'News and Updates:' ),
    'edit_item' => __( 'Edit News and Updates' ), 
    'update_item' => __( 'Update News and Updates' ),
    'add_new_item' => __( 'Add News and Updates' ),
    'new_item_name' => __( 'News and Updates' ),
    'menu_name' => __( 'News and Updates' ),
  );    
 
// Add Custom "Members Categories" taxonomy
register_taxonomy( 'Programmes', array( 'programme_items' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Programme Categories', 'singular_name' => 'Programmes Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'Programme-items' )
  )
);

// News and updates taxonomy
register_taxonomy( 'news', array( 'news_and_updates' ),
  array(
  'labels' => $labels,
  'public' => true,
  'hierarchical' => true,
  'labels' => array( 'name' => 'News and Updates', 'singular_name' => 'News and Updates Category' ),
  'show_admin_column' => true,
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'news-updates' )
  )
);
 
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


// Add Custom "Gallery Categories" taxonomy
register_taxonomy( 'gallery-items-categories', array( 'Gallery_Items' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Gallery Items Categories', 'singular_name' => 'Gallery Item Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'aatf-gallery' )
  )
);

// Add Custom "Sucess Stories" taxonomy
register_taxonomy( 'stories-categories', array( 'Success_stories' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Stories Categories', 'singular_name' => 'Stories Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'Sucess-stories' )
  )
);

// Add Custom "Members Categories" taxonomy
register_taxonomy( 'projects-categories', array( 'Project_items' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Projects Categories', 'singular_name' => 'Projects Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'projects-items' )
  )
);

// Add Custom "Accordion Categories" taxonomy
register_taxonomy( 'About', array( 'about_accordions' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'About Accordion Categories', 'singular_name' => 'About accordion item Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'about-accordions' )
  )
);



