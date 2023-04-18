<?php
/*
=================================
    All Custom Post Types
=================================
*/
/*homepage featured item*/
/*wp-bootstrap carousel*/
add_action( 'init', 'custom_bootstrap_slider' );

function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Bootstrap Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slides'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-slides',
    	'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail')
	);
	register_post_type( 'slider', $args );
	add_theme_support( 'post-title' );
    add_theme_support( 'post-thumbnails' );
}

  function add_gallery_metabox($post_type) {
    $types = array('post', 'page', 'custom-post-type');

    if (in_array($post_type, $types)) {
      add_meta_box(
        'gallery-metabox',
        'Gallery',
        'gallery_meta_callback',
        $post_type,
        'normal',
        'high'
      );
    }
  }
  add_action('add_meta_boxes', 'add_gallery_metabox');

  function gallery_meta_callback($post) {
    wp_nonce_field( basename(__FILE__), 'gallery_meta_nonce' );
    $ids = get_post_meta($post->ID, 'page_gallery_id', true);

    ?>
    <table class="form-table">
      <tr><td><p>For Portofolio use image size 445 x 297 px</p></td></tr>
      <tr><td>
        <a class="gallery-add button" href="#" data-uploader-title="Add image(s) to gallery" data-uploader-button-text="Add image(s)">Add image(s)</a>

        <ul id="gallery-metabox-list">
        <?php if ($ids) : foreach ($ids as $key => $value) : $image = wp_get_attachment_image_src($value); ?>

          <li>
            <input type="hidden" name="page_gallery_id[<?php echo $key; ?>]" value="<?php echo $value; ?>">
            <img class="image-preview" src="<?php echo $image[0]; ?>">
            <a class="change-image button button-small" href="#" data-uploader-title="Change image" data-uploader-button-text="Change image">Change image</a><br>
            <small><a class="remove-image" href="#">Remove image</a></small>
          </li>

        <?php endforeach; endif; ?>
        </ul>

      </td></tr>
    </table>
  <?php }

  function gallery_meta_save($post_id) {
    if (!isset($_POST['gallery_meta_nonce']) || !wp_verify_nonce($_POST['gallery_meta_nonce'], basename(__FILE__))) return;

    if (!current_user_can('edit_post', $post_id)) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(isset($_POST['page_gallery_id'])) {
      update_post_meta($post_id, 'page_gallery_id', $_POST['page_gallery_id']);
    } else {
      delete_post_meta($post_id, 'page_gallery_id');
    }
  }
  add_action('save_post', 'gallery_meta_save');

function McGIS_portfolio_load_wp_admin_scripts(){
wp_register_style( 'McGIS_gallery_metabox_css', get_template_directory_uri() .'/inc/templates/assets1/gallery-metabox.css',array(),'');
wp_enqueue_style('McGIS_gallery_metabox_css');
wp_register_script( 'McGIS_gallery-metabox_script', get_template_directory_uri() .'/inc/templates/assets1/gallery-metabox.js',array( 'jquery'),false);
wp_enqueue_script('McGIS_gallery-metabox_script');
}
add_action('admin_enqueue_scripts', 'McGIS_portfolio_load_wp_admin_scripts');
?>