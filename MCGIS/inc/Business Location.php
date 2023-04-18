<?php
/*
=================================
    Business Location $ Address
=================================
*/
add_action('admin_menu', 'Business_location');

function Business_location() {
    $page_title = 'My business location';
    $menu_title = 'Business Location';
    $capability = 'edit_posts';
    $menu_slug = 'biz_location_page';
    $function = 'create_Location_Admin_page';
    $icon_url = 'dashicons-location';
    $position = 24;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    //Activate Custom Settings
    add_action('admin_init','custom_map_setting');
}
function custom_map_setting(){
    //register each settings fields
    $setting_group = 'map-setting-group';
    $setting1_name = 'map_API';
    $setting2_name = 'map_url';
    register_setting($setting_group,$setting1_name);
    register_setting($setting_group,$setting2_name);
    //Add section
    $section_id = 'section-1';
    $section_name ='Section Controls';
    $section_callback_fuction ='Section_info';
    $section_page_slug = 'biz_location_page';
    add_settings_section($section_id,$section_name,$section_callback_fuction,$section_page_slug);
    //map API
    $setting1_field_id = 'Enter-map-API';
    $setting1_field_name = 'Googlemap API';
    $setting1_field_callback_function = 'get_map_API';
    $setting1_field_page_slug = 'biz_location_page';
    $setting1_section = 'section-1';
    add_settings_field($setting1_field_id,$setting1_field_name,$setting1_field_callback_function,$setting1_field_page_slug,$setting1_section);
    //Map url link
    $setting2_field_id = 'Enter-map-url';
    $setting2_field_name = 'Googlemap url';
    $setting2_field_callback_function = 'get_map_url';
    $setting2_field_page_slug = 'biz_location_page';
    $setting2_section = 'section-1';
    add_settings_field($setting2_field_id,$setting2_field_name,$setting2_field_callback_function,$setting2_field_page_slug,$setting2_section);

}

function Section_info(){
    echo 'Share or Embed Map';
}

function get_map_API() {
    $setting_group = 'map-setting-group';
    $setting1_name = 'map_API';
    $mapAPIParticulars = esc_attr(get_option($setting1_name));
    echo '<input type="text" name="map_API" value="'.$mapAPIParticulars.'" placeholder="https://www.google.co.ke/maps/place/" style="height: 40px; width:800px;" />';

} 
function get_map_url() {
    $setting_group = 'map-setting-group';
    $setting2_name = 'map_url';
    $mapurlParticulars = esc_attr(get_option($setting2_name));
    echo '<input type="text" name="map_url" value="'.$mapurlParticulars.'" placeholder="https://www.google.co.ke/maps/place/" style="height: 40px; width:800px;" />';

}  
   //Create Admin Page   
function create_Location_Admin_page(){

    require_once(get_template_directory(). '/inc/templates/embedLocationurl.php');
}