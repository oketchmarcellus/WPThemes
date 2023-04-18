<h3>Enter your googlemap API then URL In the Text area</h3>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields('map-setting-group'); ?>
	<?php do_settings_sections('biz_location_page'); ?>
	<?php  submit_button(); ?>
</form>