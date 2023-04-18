<?php
/*
=================================
    All Custom Post Types
=================================
*/
/*add header-img metabox*/
function custom_header_image_add_metabox ($post_type){
  $types = array('page');
  if (in_array($post_type, $types)){
    add_meta_box( 
    'customheaderimagediv', 
    __( 'Add Custom Page Header', 'text-domain' ), 
    'custom_header_image_metabox', 
    $post_type, 
    'side', 
    'high');
  }
}
add_action( 'add_meta_boxes', 'custom_header_image_add_metabox' );

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

function Gallery_meta_box( $meta_boxes ) {
  $prefix = '';

  $meta_boxes[] = array(
    'id' => 'gallery',
    'title' => esc_html__( 'Gallery Metabox', 'production-gallery' ),
    'post_types' => array( 'page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => false,
    'fields' => array(
      array(
        'id' => $prefix . 'gallery_heading_icon',
        'type' => 'image_advanced',
        'name' => esc_html__( 'Gallery Section Heading Icon', 'production-gallery' ),
        'desc' => esc_html__( 'Add image icon to your gallery Section', 'production-gallery' ),
        'max_file_uploads' => '1',
        'max_status' => false,
      ),
      array(
        'id' => $prefix . 'gallery_heading',
        'type' => 'text',
        'name' => esc_html__( 'Heading Text', 'production-gallery' ),
        'desc' => esc_html__( 'Add Gallery/Portfolio Heading', 'production-gallery' ),
      ),
      array(
        'id' => $prefix . 'production_gallery',
        'type' => 'image_advanced',
        'name' => esc_html__( 'Page Gallery', 'production-gallery' ),
        'desc' => esc_html__( 'Choose Images to add to Gallery', 'production-gallery' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'Gallery_meta_box' );

function your_prefix_get_meta_box( $meta_boxes ) {
  $prefix = 'prefix-';

  $meta_boxes[] = array(
    'id' => 'untitled',
    'title' => esc_html__( 'Select Posts For this Page', 'metabox-online-generator' ),
    'post_types' => array( 'page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => false,
    'fields' => array(
      array(
        'id' => $prefix . 'taxonomy_advanced_5',
        'type' => 'taxonomy_advanced',
        'name' => esc_html__( 'Choose Post category', 'metabox-online-generator' ),
        'taxonomy' => 'category',
        'field_type' => 'select',
      ),
      array(
        'id' => $prefix . 'page_posts',
        'type' => 'post',
        'name' => esc_html__( 'Posts', 'metabox-online-generator' ),
        'std' => 'Select Post',
        'desc' => esc_html__( 'Select posts you want on this page', 'metabox-online-generator' ),
        'post_type' => 'post',
        'field_type' => 'select_advanced',
        'clone' => true,
        'max_clone' => 6,
        'sort_clone' => true,
        'add_button' => esc_html__( 'Add Post', 'metabox-online-generator' ),
        'placeholder' => esc_html__( 'select Post', 'metabox-online-generator' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'your_prefix_get_meta_box' );

function divider_img_meta_box( $meta_boxes ) {
  $prefix = '';

  $meta_boxes[] = array(
    'id' => 'divider-image',
    'title' => esc_html__( 'Divider Image', 'production-image-divider' ),
    'post_types' => array( 'page' ),
    'context' => 'advanced',
    'priority' => 'low',
    'autosave' => false,
    'fields' => array(
      array(
        'id' => $prefix . 'image_advanced_2',
        'type' => 'image_advanced',
        'name' => esc_html__( 'Choose Image', 'production-image-divider' ),
        'max_file_uploads' => '1',
        'force_delete' => false,
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'divider_img_meta_box' );

function production_portfolio_load_wp_admin_scripts(){
wp_register_style( 'production_gallery_metabox_css', get_template_directory_uri() .'/assets/css/gallery-metabox.css',array(),'');
wp_enqueue_style('production_gallery_metabox_css');
wp_register_script( 'production_gallery-metabox_script', get_template_directory_uri() .'/assets/js/gallery-metabox.js',array( 'jquery'),false);
wp_enqueue_script('production_gallery-metabox_script');
wp_register_script( 'production_headermeta_img_script', get_template_directory_uri() .'/assets/js/headermeta.js',array( 'jquery'),false);
wp_enqueue_script('production_headermeta_img_script');
}
add_action('admin_enqueue_scripts', 'production_portfolio_load_wp_admin_scripts');
?>