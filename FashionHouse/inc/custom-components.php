<?php
/*
=================================
    All Custom components
=================================
*/
//add excerpts metabox
function excerpts_metabox() {
add_meta_box('postexcerpt', __('Excerpt'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
}
add_action( 'admin_menu', 'excerpts_metabox' );

?>