<?php
/*
=================================
    Contacts and Social Media
=================================
*/
add_action('admin_menu', 'Social_media');

function Social_media() {
    $page_title = 'Edit Social Media';
    $menu_title = 'Social Media';
    $capability = 'edit_posts';
    $menu_slug = 'Social_media_settings';
    $function = 'create_Admin_social_page';
    $icon_url = 'dashicons-twitter';
    $position = 101;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    //Activate Custom Settings
    add_action('admin_init','social_media_setting');
}

function social_media_setting(){
    //register each settings fields
    $setting_group = 'Social-media-setting-group';
    $setting6_font = 'facebook_font';
    $setting6_url = 'facebook_url';
    $setting7_font = 'twitter_font';
    $setting7_url = 'twitter_url';
    $setting8_font = 'dribble_font';
    $setting8_url = 'dribble_url';
    register_setting($setting_group,$setting6_font);
    register_setting($setting_group,$setting6_url);
    register_setting($setting_group,$setting7_font);
    register_setting($setting_group,$setting7_url);
    register_setting($setting_group,$setting8_font);
    register_setting($setting_group,$setting8_url);
    //Add section
    $section_id = 'section-1';
    $section_name ='Social media Controls';
    $section_callback_fuction ='Social_media_section_info';
    $section_page_slug = 'Social_media_settings';
    add_settings_section($section_id,$section_name,$section_callback_fuction,$section_page_slug);
    //facebook
    $setting6_field_id = 'facebook-icon';
    $setting6_field_name = 'facebook icon';
    $setting6_field_callback_function = 'facebook_font_url';
    $setting6_field_page_slug = 'Social_media_settings';
    $setting6_section = 'section-1';
    add_settings_field($setting6_field_id,$setting6_field_name,$setting6_field_callback_function,$setting6_field_page_slug,$setting6_section);
    //twitter
    $setting7_field_id = 'twitter-icon';
    $setting7_field_name = 'twitter icon';
    $setting7_field_callback_function = 'twitter_font_url';
    $setting7_field_page_slug = 'Social_media_settings';
    $setting7_section = 'section-1';
    add_settings_field($setting7_field_id,$setting7_field_name,$setting7_field_callback_function,$setting7_field_page_slug,$setting7_section);
    //dribble
    $setting8_field_id = 'dribble-icon';
    $setting8_field_name = 'dribble icon';
    $setting8_field_callback_function = 'dribble_font_url';
    $setting8_field_page_slug = 'Social_media_settings';
    $setting8_section = 'section-1';
    add_settings_field($setting8_field_id,$setting8_field_name,$setting8_field_callback_function,$setting8_field_page_slug,$setting8_section);
}
function Social_media_section_info(){
    echo 'Enter font Awesome Class And Link';
}

function facebook_font_url() {
    $setting_group = 'Social-media-setting-group';
    $setting6_font = 'facebook_font';
    $setting6_url = 'facebook_url';
    $facebookFont = esc_attr(get_option($setting6_font));
    $facebookUrl = esc_attr(get_option($setting6_url));
    echo '<input type="text" name="facebook_font" value="'.$facebookFont.'" placeholder="facebook font-class here" style="height: 40px; width:350px;" /> <input type="text" name="facebook_url" value="'.$facebookUrl.'" placeholder="facebook link" style="height: 40px; width:450px;" /><p>e.g fa fa-facebook</p>';
}  
function twitter_font_url(){
    $setting_group = 'Social-media-setting-group';
    $setting7_font = 'twitter_font';
    $setting7_url = 'twitter_url';
    $twitterFont = esc_attr(get_option($setting7_font));
    $twitterUrl = esc_attr(get_option($setting7_url));
    echo '<input type="text" name="facebook_font" value="'.$twitterFont.'" placeholder="twitter font-class here" style="height: 40px; width:350px;" /> <input type="text" name="twitter_url" value="'.$twitterUrl.'" placeholder="twitter link" style="height: 40px; width:450px;" /><p>e.g fa fa-twitter</p>';
}  
function dribble_font_url() {
    $setting_group = 'Social-media-setting-group';
    $setting8_font = 'dribble_font';
    $setting8_url = 'dribble_url';
    $dribbleFont = esc_attr(get_option($setting8_font));
    $dribbleUrl = esc_attr(get_option($setting8_url));
    echo '<input type="text" name="dribble_font" value="'.$dribbleFont.'" placeholder="dribble font-class here" style="height: 40px; width:350px;" /> <input type="text" name="dribble_url" value="'.$dribbleUrl.'" placeholder="dribble link" style="height: 40px; width:450px;" /><p>e.g fa fa-dribbble</p>';
}  

//Create Admin Page   
function create_Admin_social_page(){

    require_once(get_template_directory(). '/inc/templates/Socialmedialinks.php');
}
?>