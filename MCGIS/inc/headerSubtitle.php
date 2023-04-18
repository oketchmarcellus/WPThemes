<?php
/*
=================================
    HeaderSubtitle
=================================
*/
add_action('admin_menu', 'Header_components_page');

function Header_components_page() {
    $page_title = 'Header options';
    $menu_title = 'Header options';
    $capability = 'edit_posts';
    $menu_slug = 'header_components';
    $function = 'Edit_header_Admin_page';
    $icon_url = 'dashicons-editor-paste-text';
    $position = 21;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    //Activate Custom Settings
    add_action('admin_init','custom_header_setting');
}
function custom_header_setting(){
    //register each settings fields
    $setting_group = 'header-component-group';
    $setting4_name = 'button_font';
    $setting_button_status ='button_status';
    register_setting($setting_group,$setting3_name);
    register_setting($setting_group,$setting4_name);
    register_setting($setting_group,$setting_button_status);
    //Add section
    $section_id = 'section-1';
    $section_name ='Header Controls';
    $section_callback_fuction ='Components_section_info';
    $section_page_slug = 'header_components';
    add_settings_section($section_id,$section_name,$section_callback_fuction,$section_page_slug);
    //Header Button
    $setting4_field_id = 'button';
    $setting4_field_name = 'Button font class';
    $setting4_field_callback_function = 'get_header_button';
    $setting4_field_page_slug = 'header_components';
    $setting4_section = 'section-1';
    add_settings_field($setting4_field_id,$setting4_field_name,$setting4_field_callback_function,$setting4_field_page_slug,$setting4_section);
    //Radio Buttons
    $setting5_field_id = 'Radio';
    $setting5_field_name = 'Show / Hide button';
    $setting5_field_callback_function = 'get_radio_buttons';
    $setting5_field_page_slug = 'header_components';
    $setting5_section = 'section-1';
    add_settings_field($setting5_field_id,$setting5_field_name,$setting5_field_callback_function,$setting5_field_page_slug,$setting5_section);

}   //Section heading 
function Components_section_info(){
    echo 'Edit header Components';
}
function get_header_button() {
    $setting_group = 'header-component-group';
    $setting4_name = 'button_font';
    $buttonClass = esc_attr(get_option($setting4_name));
    echo '<input type="text" name="button_font" value="'.$buttonClass.'" placeholder="enter awesome font-class here" style="height: 40px; width:350px;" /><p>e.g btn-dark</p>
    ';
}  
 function get_radio_buttons() {
    $setting_group = 'header-component-group';
    $setting_button_status ='button_status';
    $buttonOptions = get_option('button_status');
    if ($buttonOptions == 1){
    echo '<input type="radio" name="button_status" value="1" <?php checked('.$buttonOptions.'); checked="checked"  
    ?> Show <input type="radio" name="button_status" value="0" <?php checked('.$buttonOptions.'); ?> Hide';
     }else{
     echo '<input type="radio" name="button_status" value="1" <?php checked('.$buttonOptions.');  
    ?> Show <input type="radio" name="button_status" value="0" <?php checked('.$buttonOptions.'); checked="checked" ?> 
    Hide'; 
     }
    
}
   //create Admin Page
function Edit_header_Admin_page(){

    require_once(get_template_directory(). '/inc/templates/headercomponents.php');
}
?>