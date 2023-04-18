<?php
/*
=================================
   upload metabox
=================================
*/
/*Templates custom posts*/
add_action('post_edit_form_tag','add_post_enctype');

function add_post_enctype() {
	echo 'enctype=multipart/form-data';
}
//meta box functions for adding the metabox and saving Data

/*Custom custom metabox*/
  function BookMetabox($post_type) {
    $types = array('post');

    if (in_array($post_type, $types)) {
      add_meta_box(
        'Book-Metabox',
        'Upload Book',
        'BookUploading',
        $post_type,
        'normal',
        'low'
      );
    }
  }
add_action('add_meta_boxes', 'BookMetabox');

function BookUploading($post, $box){
	$BookTitle = get_post_meta($post->ID,'_bookTitle',true);
	$BookURL = get_post_meta($post->ID,'_bookURL',true);

echo '<p>
Book Title: <input type="text" name="bookTitle" value="'.esc_attr($BookTitle).'" />
</p>';

echo '<p>
Book Link : <input type="file" name="bookURL" value="Upload Book" />';
}
//hook to save our metabox data when the post is saved
add_action('save_post','saveBook');

function saveBook($post_id){
//process form data if $_POST is set

if (isset ($_POST['bookTitle'])){

if (isset ($_FILES['bookURL'])){
  
if(!wp_verify_nonce($_POST['Sequere_Submission'], 'my_unique_action')){
echo "Sorry Not allowed to add price";
exit;
}
else {
update_post_meta($post_id,'_bookTitle',sanitize_text_field($_POST['bookTitle']));
$upload = wp_upload_bits($_FILES['bookURL']['name'], null, file_get_contents($_FILES['bookURL']['tmp_name']));
update_post_meta($post_id,'_bookURL',sanitize_text_field($_POST['url']));
    }
  }
 }
}
?>