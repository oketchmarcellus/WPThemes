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

function enable_team_members_meta_box( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'agridrive_team',
    'title' => esc_html__( 'Add team members section', 'agridrive' ),
    'post_types' => array('page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'team_section_checkbox',
        'name' => esc_html__( 'Enable Team Members Section', 'agridrive' ),
        'type' => 'checkbox',
        'desc' => esc_html__( 'Check to add team members sections to this page', 'agridrive' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'enable_team_members_meta_box' );

function success_stories_meta_box( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'success-stories',
    'title' => esc_html__( 'Add Success Stories Slider to Page', 'agridrive' ),
    'post_types' => array('page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'checkbox_success_stories',
        'name' => esc_html__( 'Success Stories Slider', 'agridrive' ),
        'type' => 'checkbox',
        'desc' => esc_html__( 'Check to add Success Stories Slider', 'agridrive' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'success_stories_meta_box' );

function add_gallery_meta_box( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'gallery',
    'title' => esc_html__( 'Add Gallery to this page', 'agridrive' ),
    'post_types' => array('page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'gallery_checkbox',
        'name' => esc_html__( 'Gallery Check box', 'agridrive' ),
        'type' => 'checkbox',
        'desc' => esc_html__( 'Check to enable Agridrive Gallery to this page', 'agridrive' ),
      ),),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'add_gallery_meta_box' );

function about_us_accordion_metabox( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'accordion',
    'title' => esc_html__( 'About Us Accordion', 'agridrive' ),
    'post_types' => array('page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'about_agridrive_accordion_checkbox',
        'name' => esc_html__( 'About Agridrive Accordion', 'agridrive' ),
        'type' => 'checkbox',
        'desc' => esc_html__( 'Check to enable About Agridrive Accordion to this page', 'agridrive' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'about_us_accordion_metabox' );

function service_page_items_metabox( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'services',
    'title' => esc_html__( 'Service items', 'agridrive' ),
    'post_types' => array('page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'checkbox_service_page_items',
        'name' => esc_html__( 'Service items', 'agridrive' ),
        'type' => 'checkbox',
        'desc' => esc_html__( 'Check to enable Service items to this page', 'agridrive' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'service_page_items_metabox' );

function job_description_metabox( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'job_description',
    'title' => esc_html__( 'Job Description Box', 'agridrive' ),
    'post_types' => array('Team_members' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'job_title',
        'type' => 'text',
        'name' => esc_html__( 'Team Member job Title', 'agridrive' ),
        'placeholder' => esc_html__( 'Managing Director', 'agridrive' ),
      ),
      array(
        'id' => $prefix . 'checkbox_director',
        'name' => esc_html__( 'Director', 'agridrive' ),
        'type' => 'checkbox',
      ),
      array(
        'id' => $prefix . 'checkbox_senior_management_staff',
        'name' => esc_html__( 'Senior Manager', 'agridrive' ),
        'type' => 'checkbox',
      ),
      array(
        'id' => $prefix . 'checkbox_junior_management_staff',
        'name' => esc_html__( 'Junior Manager', 'agridrive' ),
        'type' => 'checkbox',
      ),
      array(
        'id' => $prefix . 'checkbox_staff',
        'name' => esc_html__( 'Member of Senior Staff', 'agridrive' ),
        'type' => 'checkbox',
      ),
      array(
        'id' => $prefix . 'checkbox_junior_staff',
        'name' => esc_html__( 'Member of Junior Staff', 'agridrive' ),
        'type' => 'checkbox',
      ),
      array(
        'id' => $prefix . 'checkbox_contracted_staff',
        'name' => esc_html__( 'Member of Contracted Staff', 'agridrive' ),
        'type' => 'checkbox',
      ),
      array(
        'id' => $prefix . 'checkbox_casual_staff',
        'name' => esc_html__( 'Member of Casual staff', 'agridrive' ),
        'type' => 'checkbox',
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'job_description_metabox' );

function events_metabox( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'events',
    'title' => esc_html__( 'Agridrive news & events', 'agridrive' ),
    'post_types' => array('page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'events_checkbox',
        'name' => esc_html__( 'Agridrive news & Events', 'agridrive' ),
        'type' => 'checkbox',
        'desc' => esc_html__( 'Check to enable news & events section on this page', 'agridrive' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'events_metabox' );

function contact_page_metabox( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'contacts',
    'title' => esc_html__( 'Agridrive Contact Page', 'agridrive' ),
    'post_types' => array('page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'contacts_checkbox',
        'name' => esc_html__( 'Agridrive Contact Details', 'agridrive' ),
        'type' => 'checkbox',
        'desc' => esc_html__( 'Check to use Page as contact Page', 'agridrive' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'contact_page_metabox' );

function enable_stats_section_get_meta_box( $meta_boxes ) {
  $prefix = 'agridrive';

  $meta_boxes[] = array(
    'id' => 'stats_section',
    'title' => esc_html__( 'Add stats section', 'agridrive' ),
    'post_types' => array('page' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'stats_section_checkbox',
        'name' => esc_html__( 'Enable Stats section', 'agridrive' ),
        'type' => 'checkbox',
        'desc' => esc_html__( 'Check to enable stats in this page', 'agridrive' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'enable_stats_section_get_meta_box' );

function production_portfolio_load_wp_admin_scripts(){

wp_register_script( 'production_headermeta_img_script', get_template_directory_uri() .'/js/headermeta.js',array( 'jquery'),false);
wp_enqueue_script('production_headermeta_img_script');
}
add_action('admin_enqueue_scripts', 'production_portfolio_load_wp_admin_scripts');
?>