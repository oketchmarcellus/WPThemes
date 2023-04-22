<?php
/*
=================================
    All Custom Post Types
=================================
*/
/*add header-img metabox*/
function custom_header_image_add_metabox ($post_type){
  $types = array('page','post','Success_stories', 'Aatf_projects','Aatf_programmes',);
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


add_action('admin_init','my_meta_init');

function my_meta_init() {

  if(!empty($post))
    {

      $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
      if($pageTemplate == 'page-team.php' ){

        function enable_team_members_meta_box( $meta_boxes ) {

        global $post;

        $prefix = 'aatf';

        $meta_boxes[] = array(
          'id' => 'aatf_team_item',
          'title' => esc_html__( 'Add team members section', 'aatf' ),
          'post_types' => array('page' ),
          'context' => 'advanced',
          'priority' => 'default',
          'autosave' => 'false',
          'fields' => array(
            array(
              'id' => $prefix . 'team_section_checkbox',
              'name' => esc_html__( 'Enable Team Members Section', 'aatf' ),
              'type' => 'checkbox',
              'desc' => esc_html__( 'Check to add team members sections to this page', 'aatf' ),
            ),
          ),
        );
        return $meta_boxes;
      }
        add_filter( 'rwmb_meta_boxes', 'enable_team_members_meta_box' );
        remove_post_type_support('page', 'editor');
      }
    }
}

add_action( 'add_meta_boxes', 'replace_about_featured_image_tile', 100 );

function replace_about_featured_image_tile() {

    global $post;

    if(!empty($post))
    {

      $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
      if($pageTemplate == 'page-bout.php' ){
        remove_meta_box( 'postimagediv', 'page', 'side' );
        add_meta_box('postimagediv', __('Where we are Map image'), 'post_thumbnail_meta_box', 'page', 'normal', 'default');
      }
    }
}


function job_description_metabox( $meta_boxes ) {
  $prefix = 'aatf';

  $meta_boxes[] = array(
    'id' => 'job_description',
    'title' => esc_html__( 'Job Description Box', 'aatf' ),
    'post_types' => array('Team_members' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'job_title',
        'type' => 'text',
        'name' => esc_html__( 'Team Member job Title', 'aatf' ),
        'placeholder' => esc_html__( 'Managing Director', 'aatf' ),
      ),
      array(
        'id' => $prefix . 'checkbox_boardmember',
        'name' => esc_html__( 'Board Member', 'aatf' ),
        'type' => 'checkbox',
      ),
      array(
        'id' => $prefix . 'checkbox_staff',
        'name' => esc_html__( 'Staff Member', 'aatf' ),
        'type' => 'checkbox',
      ),
    ),
  );

  return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'job_description_metabox' );



function partners_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Partners Logos', 'aatf' ),
        'id'       => 'partner-logo',
        'context'  => 'normal',
        'post_types' => array('page' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => 'false',
        'fields'   => [
            [
                'type'     => 'image_advanced',
                'name'     => esc_html__( 'Partners Logo', 'aatf' ),
                'id'       => $prefix . 'partners_logo',
                'desc'     => esc_html__( 'Add Aatf partner Logo', 'aatf' ),
                'multiple' => true,
                'clone'    => true,
            ],
        ],
    ];

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'partners_meta_boxes' );


function resources_url_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Resource', 'aatf' ),
        'id'      => 'resources',
        'context' => 'normal',
        'post_types' => array('Aatf_resources' ),
        'fields'  => [
            [
                'type'  => 'text',
                'name'  => esc_html__( 'Resource Title', 'aatf' ),
                'id'    => $prefix . 'resource_title',
                'desc'  => esc_html__( 'Add title of Resource File', 'aatf' ),
                'clone' => true,
            ],
            [
                'type'  => 'url',
                'name'  => esc_html__( 'Resource url', 'aatf' ),
                'id'    => $prefix . 'resource_url',
                'desc'  => esc_html__( 'Add link to resource', 'aatf' ),
                'clone' => true,
            ],
        ],
    ];

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'resources_url_meta_boxes' );

add_filter( 'rwmb_meta_boxes', 'featured_posts_meta_boxes' );

function featured_posts_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Select featured Stories', 'aatf' ),
        'id'         => 'featured',
        'post_types' => ['page'],
        'context'    => 'normal',
        'priority'   => 'low',
        'fields'     => [
            [
                'type'        => 'text',
                'name'        => esc_html__( 'featured post section title', 'aatf' ),
                'id'          => $prefix . 'featured_post_section_title',
                'desc'        => esc_html__( 'Add title for featured posts section', 'aatf' ),
                'placeholder' => esc_html__( 'Featured Stories', 'aatf' ),
            ],
            [
                'type'       => 'post',
                'name'       => esc_html__( 'featured posts', 'aatf' ),
                'id'         => $prefix . 'featured_posts',
                'desc'       => esc_html__( 'Select featured posts to show on page', 'aatf' ),
                'post_type'  => ['post','Project_stories'],
                'field_type' => 'select_advanced',
                'clone'      => true,
            ],
        ],
    ];

    return $meta_boxes;
}


add_filter( 'rwmb_meta_boxes', 'faqs_accordion_items' );

function faqs_accordion_items( $meta_boxes ) {
    $prefix = 'aatf';

    $meta_boxes[] = [
        'title'   => esc_html__( 'FAQS ', 'aatf' ),
        'id'      => 'faqs',
        'context' => 'normal',
        'post_types' => ['FAQ_accordions'],
        'fields'  => [
            [
                'type'  => 'text',
                'name'  => esc_html__( 'Faq title', 'aatf' ),
                'id'    => $prefix . 'faq_title',
                'clone_as_multiple' => true,
            ],
            [
                'type'  => 'wysiwyg',
                'name'  => esc_html__( 'faq content', 'aatf' ),
                'id'    => $prefix . 'faq_content',
                'clone_as_multiple' => true,
            ],
        ],
        'clone_as_multiple' => true,
    ];

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes','resources_meta_boxes');

function resources_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Resources Thumb', 'aatf' ),
        'id'       => 'resources-thumb',
        'context'  => 'normal',
        'post_types' => array('Aatf_resources' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => 'false',
        'fields'   => [
            [
                'type'     => 'image_advanced',
                'name'     => esc_html__( 'Resources Thumb', 'aatf' ),
                'id'       => $prefix . 'resources_thumb',
                'desc'     => esc_html__( 'Add Aatf Resource Thumbnail', 'aatf' ),
                'multiple' => true,
                'clone'    => true,
            ],
        ],1
    ];

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes','project_briefs_meta_boxes');

function project_briefs_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Project Briefs Thumb', 'aatf' ),
        'id'       => 'briefs-thumb',
        'context'  => 'normal',
        'post_types' => array('Aatf_resources' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => 'false',
        'fields'   => [
            [
                'type'     => 'image_advanced',
                'name'     => esc_html__( 'Briefs Thumb', 'aatf' ),
                'id'       => $prefix . 'briefs_thumb',
                'desc'     => esc_html__( 'Add Aatf Project Briefs Thumbnail', 'aatf' ),
                'multiple' => true,
                'clone'    => true,
            ],
        ],1
    ];

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes','newsletter_meta_boxes');

function newsletter_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Newsletter Thumb', 'aatf' ),
        'id'       => 'newsletter-thumb',
        'context'  => 'normal',
        'post_types' => array('Aatf_newsletters' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => 'false',
        'fields'   => [
            [
                'type'     => 'image_advanced',
                'name'     => esc_html__( 'Newsletter Thumb', 'aatf' ),
                'id'       => $prefix . 'newsletter_thumb',
                'desc'     => esc_html__( 'Add Aatf Newsletters Thumbnail', 'aatf' ),
                'multiple' => true,
                'clone'    => true,
            ],
        ],1
    ];

    return $meta_boxes;
}


function aatf_load_wp_admin_scripts(){

wp_register_script( 'production_headermeta_img_script', get_template_directory_uri() .'/js/headermeta.js',array( 'jquery'),false);
wp_enqueue_script('production_headermeta_img_script');

wp_register_style( 'gallery_metabox_css', get_template_directory_uri() .'/css/gallery-metabox.css',array(),'');
wp_enqueue_style('gallery_metabox_css');
wp_register_script( 'gallery-metabox_script', get_template_directory_uri() .'/js/gallery-metabox.js',array( 'jquery'),false);
wp_enqueue_script('gallery-metabox_script');

}
add_action('admin_enqueue_scripts', 'aatf_load_wp_admin_scripts');
?>