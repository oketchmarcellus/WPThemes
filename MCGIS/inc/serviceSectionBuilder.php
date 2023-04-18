<?php
/*
=================================
    Services section Admin
=================================
*/
/*register style sheets*/
function Admin_SectionBuilder_scripts($hook) {
if ( $hook != 'toplevel_page_service_Admin_page' ) {
        return;
    }
wp_register_style( 'SectionBuilder-style', get_template_directory_uri() .'/inc/templates/assets1/SectionBuilder.css',array(),'');
wp_enqueue_style('SectionBuilder-style');
wp_register_script( 'SectionBuilder-script', get_template_directory_uri() .'/inc/templates/assets1/SectionBuilder.js',array( 'jquery','jquery-ui-sortable' ),false);
wp_enqueue_script('SectionBuilder-script');
}
add_action('admin_enqueue_scripts', 'Admin_SectionBuilder_scripts');

add_action('admin_menu', 'service_section');

function service_section() {
    $page_title = 'Manage Service Section';
    $menu_title = 'Services';
    $capability = 'edit_posts';
    $menu_slug = 'service_Admin_page';
    $function = 'service_section_Admin_page';
    $icon_url = 'dashicons-hammer';
    $position = 23;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    //Activate Custom Settings
    add_action('admin_init','section_Builder_settings');
}
//register each settings fields
function section_Builder_settings(){
$setting_group = 'builder-component-group';
$setting_order_name = 'service_order';
$setting_icon_name = 'service-icon';
$setting_title_name = 'service_title';
register_setting($setting_group,$order_name);
register_setting($setting_group,$service_icon);
register_setting($setting_group,$service_title);

//Add section
    $section_id = 'section-1';
    $section_name ='Service Section Controls';
    $section_callback_function ='Builder_components_section';
    $section_page_slug = 'service_Admin_page';
    add_settings_section($section_id,$section_name,$section_callback_function,$section_page_slug);

    //service components
    $settings_field_id = 'components';
    $settings_field_name = 'Build service columns';
    $settings_field_callback_function = 'get_columns';
    $settings_field_page_slug = 'service_Admin_page';
    $settings_section = 'section-1';
    add_settings_field($settings_field_id,$settings_field_name,$settings_field_callback_function,$settings_field_page_slug,$settings_section);
}
    //Section heading 
function Builder_components_section(){
    echo 'Manage rows and columns';
}
    //Service fields
function get_columns(){
?>
   <div id="prodigi-page-builder">
        <!-- This is where we gonna add & manage rows -->
        <div class="service-rows">
            <p class="service-rows-message">This is where we manage columns.</p>
        </div><!-- .service-rows -->
 
        <!-- This is where our action buttons to add rows -->
        <div class="service-actions">
        <a href="#" class="service-add-row button-primary button-large" data-template="col-1">Add Column</a>
        </div><!-- .service-actions -->
 
        <!--  Rows template (Going to be hidden) -->
        <div class="service-templates" style="display: none;">
     
        <!-- == This is the 1 column row template -->
        <div class="service-row service-col-1">
            <div class="service-row-title">
                <?php
                $setting_group = 'builder-component-group';
                $setting_order_name = 'service_order';
                $order = esc_attr(get_option($setting_order_name)); ?>
                <span class="service-handle dashicons dashicons-sort"></span>
                <span class="service-order"><?php echo $order; ?></span>
                <span class="service-favicon"><span class="service-row-title-text">
                <?php
                $setting_group = 'builder-component-group';
                $setting_icon_name = 'service_icon';
                $setting_title_name = 'service_title';
                $icon_class = esc_attr(get_option($setting_icon_name));
                $serviceTitle = esc_attr(get_option($setting_title_name)); ?>
                <input type="text" name="service_icon" value="<?php echo $icon_class; ?>" placeholder="enter font class" style="width:200px;" /></span></span> 
                <span class="service-row-title-text"><input type="text" name="service_title" value="<?php echo $serviceTitle; ?>" placeholder="enter titletext here" style="width:350px;" /></span>
                <span class="service-remove dashicons dashicons-trash"></span>
            </div><!-- .service-row-title -->
            <div class="service-row-fields">
                <textarea class="service-row-input" name="service[<?php echo $order; ?>][content]" data-field="content" placeholder="Add content here..."><?php echo esc_textarea( $row_data['content'] ); ?></textarea>
                <input class="service-row-input" type="hidden" name="" data-field="type" value="col-1">
            </div><!-- .service-row-fields -->
        </div><!-- .service-row.service-col-1 -->
        </div><!-- .service-templates -->
 
     </div><!-- .prodigi-page-builder -->
<?php
} 
//Create Admin Page   
function service_section_Admin_page(){
 require_once(get_template_directory(). '/inc/templates/sectionBuilderComponents.php');
}
?>