<?php
/*
=================================
    All Custom Post Types
=================================
*/
/*Templates custom posts*/
/*wp-bootstrap carousel*/
add_action( 'init', 'download_post_type' );

function download_post_type() {
    $labels = array(
    'name'               => _x( 'Theme Page', 'post type general name'),
    'singular_name'      => _x( 'Themes', 'post type singular name'),
    'menu_name'          => _x( 'AnvilTech Themes', 'admin menu'),
    'name_admin_bar'     => _x( 'Themes', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Theme'),
    'add_new_item'       => __( 'Add New Theme'),
    'new_item'           => __( 'New Theme'),
    'edit_item'          => __( 'Edit Theme'),
    'view_item'          => __( 'View Theme'),
    'all_items'          => __( 'All Themes'),
    'featured_image'     => __( 'Featured Image', 'text_domain' ),
    'search_items'       => __( 'Search Theme'),
    'parent_item_colon'  => __( 'Parent Theme:'),
    'not_found'          => __( 'No Theme found.'),
    'not_found_in_trash' => __( 'No Theme found in Trash.'),
  );
    $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-slides',
      'description'        => __( 'The Theme download'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'             => array( 'slug' => 'download' ), // The individual download slug
    'capability_type'    => 'post',
    'has_archive'         => 'downloads',// The archive slug
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'exclude_from_search' => true,
   );
  register_post_type( 'Template_download', $args );
  add_theme_support( 'post-title' );
  add_theme_support( 'post-thumbnails' );
}
//Add enctype
register_taxonomy( 'download-categories', array( 'Template_download' ),
  array(
  'public' => true,
  'labels' => array( 'name' => 'Theme Categories', 'singular_name' => 'Theme Category' ),
  'hierarchical' => true,
  'rewrite' => array( 'slug' => 'Theme-types' )
  )
);

add_action('post_edit_form_tag','add_post_enctype');
// Add Custom "Download Categories" taxonomy
function add_post_enctype() {
  echo 'enctype=multipart/form-data';
}

add_action('add-metaboxes','BookMetabox');

//Adds the download meta box for the download post type
function Template_meta_box_download() {
  add_meta_box( 'Template-meta-box-download', 'Download Settings', 'Template_meta_box_download_display', 'Template_download', 'normal', 'high' );
}

add_action( 'add_meta_boxes', 'Template_meta_box_download' );

// Displays the download meta box
function Template_meta_box_download_display( $object, $box ) {

   // Setup some default values
   $defaults = array( 
  'file'    => '',
  'version' => '1.0',
  'postid'  => '',
  // Add more!
   );

   // Get the post meta
  $download = get_post_meta( $object->ID, 'download', true );

  // Merge them
  $download = wp_parse_args( $download, $defaults );  
?>
<input type="hidden" name="Template-meta-box-download" value="<?php echo wp_create_nonce( basename( __FILE__ ) ); ?>" />

<br />

<table class="form-table">

   <thead><tr><th><span class="description">None of the fields are required</span></th></tr></thead>

   <tr>
      <th><label for="download-hide">Hide download</label></th>
      <td>
         <?php $hide = get_post_meta( $object->ID, '_hide_download', true ); ?>
         <label><input type="checkbox" name="download-hide" id="download-hide" value="1" <?php checked( '1', $hide ); ?> />
         <span class="description">Check this if you don't want to show the download at the archive page</span></label>
      </td>
   </tr>

   <tr>
      <th><label for="download-file">File</label></th>
      <td>
         <input type="text" id="download-file" size="60" name="download-file" value="<?php echo esc_url( $download['file'] ); ?>" />
         <input type="button" id="upload-file-button"  class="button" value="Upload file" />
         <label for="download-file"><span class="description">Upload or link to download file</span></label>
      </td>
   </tr>

   <tr>
      <th><label for="download-version">Version</label></th>
      <td>
         <input type="text" id="download-version" name="download-version" value="<?php echo esc_attr( $download['version'] ); ?>" size="3" />
      </td>
   </tr>

   <tr>
      <th><label for="download-count">Download count</label></th>
      <td>
         <?php $count = isset( $object->ID ) ? get_post_meta( $object->ID, 'download_count', true ) : 0; ?>
         <input type="number" id="download-count" name="download-count" value="<?php echo absint( $count ); ?>" size="7" min="0" />
         <?php printf( '<p>This file has been downloaded <b>%d</b> times</p>', absint( $count ) ); ?>
      </td>
   </tr>

   <tr>
      <th><label for="download-postid">Post ID</label></th>
      <td>
         <label><input type="text" id="download-postid" name="download-postid" value="<?php echo absint( $download['postid'] ); ?>" size="3" />
         <span class="description">ID of the post which the download is associated with</span></label>
         <?php if ( !empty( $download['postid'] ) ) { ?>
            <p>This Theme is associated with <a href="<?php echo get_permalink( $download['postid'] ); ?>"><?php echo get_the_title( $download['postid'] ); ?></a></p>
         <?php } ?>
      </td>
   </tr>

</table>
<?php }
/**
 * Save the download information
 */
function Template_meta_box_download_save( $post_id, $post ) {

   /* Verify that the post type supports the meta box and the nonce before preceding. */
   if ( ! isset( $_POST['Template-meta-box-download'] ) || ! wp_verify_nonce( $_POST['Template-meta-box-download'], basename( __FILE__ ) ) )
  return $post_id;

   /* Don't save them if... */
   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
   if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) return;
   if ( defined( 'DOING_CRON' ) && DOING_CRON ) return;

   /* Get the post type object. */
   $post_type = get_post_type_object( $post->post_type );

   /* Check if the current user has permission to edit the post. */
   if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) )
  return $post_id;

/**
 * Add the download meta
 * CUSTOMIZE IF YOU'VE ADDED/EDITED/REMOVED FIELDS
 */
   update_post_meta( $post_id, 'download', array( 
  'file'    => esc_url_raw( $_POST['download-file'] ),
  'version' => strip_tags( $_POST['download-version'] ),
  'postid'   => absint( $_POST['download-postid'] ),
  // Add your own if you've added fields
   ) ); 

   // Seperate the download count and "hide" from the rest
   update_post_meta( $post_id, 'download_count', absint( $_POST['download-count'] ) );
   update_post_meta( $post_id, '_hide_download', ( $_POST['download-hide'] == 1 ? 1 : 0 ) ); 
}

add_action( 'save_post', 'Template_meta_box_download_save', 10, 2 );
?>
