<?php
/*
=================================
    All Custom Categories
=================================
*/
/*Templates custom categories*/


function news_and_updates_category() {
    wp_insert_term(
        'News and Updates',
        'category',
        array(
          'description' => 'Add your News and update posts to this category.',
          'slug'        => 'news-updates-category'
        )
    );
}
add_action( 'after_setup_theme', 'news_and_updates_category' );