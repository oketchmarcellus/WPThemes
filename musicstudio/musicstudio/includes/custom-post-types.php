<?php
/*
=================================
    All Custom Post Types
=================================
*/
/*add header-img metabox*/
add_action( 'add_meta_boxes', 'custom_header_image_add_metabox' );
function custom_header_image_add_metabox ($post_type){
  $types = array('page');
  if (in_array($post_type, $types)){
    add_meta_box( 
    'customheaderimagediv', 
    __( 'Custom Header', 'text-domain' ), 
    'custom_header_image_metabox', 
    $post_type, 
    'side', 
    'high');
  }
}
function custom_header_image_metabox ( $post ) {
  global $content_width, $_wp_additional_image_sizes;
  $image_id = get_post_meta( $post->ID, '_custom_header_image_id', true );
  $old_content_width = $content_width;
  $content_width = 254;
  if ( $image_id && get_post( $image_id ) ) {
    if ( ! isset( $_wp_additional_image_sizes['post-thumbnail'] ) ) {
      $thumbnail_html = wp_get_attachment_image( $image_id, array( $content_width, $content_width ) );
    } else {
      $thumbnail_html = wp_get_attachment_image( $image_id, 'post-thumbnail' );
    }
    if ( ! empty( $thumbnail_html ) ) {
      $content = $thumbnail_html;
      $content .= '<p class="hide-if-no-js"><a href="javascript:;" id="remove_custom_header_image_button" >' . esc_html__( 'Remove header image', 'text-domain' ) . '</a></p>';
      $content .= '<input type="hidden" id="upload_custom_header_image" name="_header_cover_image" value="' . esc_attr( $image_id ) . '" />';
    }
    $content_width = $old_content_width;
  } else {
    $content = '<img src="" style="width:' . esc_attr( $content_width ) . 'px;height:auto;border:0;display:none;" />';
    $content .= '<p class="hide-if-no-js"><a title="' . esc_attr__( 'Set header image', 'text-domain' ) . '" href="javascript:;" id="upload_custom_header_image_button" id="set-header-image" data-uploader_title="' . esc_attr__( 'Choose an image', 'text-domain' ) . '" data-uploader_button_text="' . esc_attr__( 'Set header image', 'text-domain' ) . '">' . esc_html__( 'Set header image', 'text-domain' ) . '</a></p>';
    $content .= '<input type="hidden" id="upload_custom_header_image" name="_header_cover_image" value="" />';
  }
  echo $content;
}
add_action( 'save_post', 'custom_header_image_save', 10, 1 );
function custom_header_image_save ( $post_id ) {
  if( isset( $_POST['_header_cover_image'] ) ) {
    $image_id = (int) $_POST['_header_cover_image'];
    update_post_meta( $post_id, '_custom_header_image_id', $image_id );
  }
}

/*Custom gallery metabox*/
  function add_gallery_metabox($post_type) {
    $types = array('page');

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
      <tr><td><p>For Portofolio use image size 650 x 350 px</p></td></tr>
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

function prodigi_portfolio_load_wp_admin_scripts(){
wp_register_style( 'prodigi_gallery_metabox_css', get_template_directory_uri() .'/inc/templates/assets1/gallery-metabox.css',array(),'');
wp_enqueue_style('prodigi_gallery_metabox_css');
wp_register_script( 'prodigi_gallery-metabox_script', get_template_directory_uri() .'/inc/templates/assets1/gallery-metabox.js',array( 'jquery'),false);
wp_enqueue_script('prodigi_gallery-metabox_script');
wp_register_script( 'prodigi_headermeta_img_script', get_template_directory_uri() .'/inc/templates/assets1/headermeta.js',array( 'jquery'),false);
wp_enqueue_script('prodigi_headermeta_img_script');
}
add_action('admin_enqueue_scripts', 'prodigi_portfolio_load_wp_admin_scripts');
?>