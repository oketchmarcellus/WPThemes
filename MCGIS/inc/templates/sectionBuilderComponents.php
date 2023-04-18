<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('builder-component-group'); ?>   
    <?php do_settings_sections('service_Admin_page'); ?>
    <?php  submit_button(); ?>
    </form>