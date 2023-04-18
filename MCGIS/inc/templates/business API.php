<h1>Business Location Settings</h1>
<?php settings_errors(); ?>
<h3 class="title">Manage Options</h3>
<p>EDit the Location of your Business</p>
<?php bloginfo('name'); ?>
<form method="post" action="options.php">
	<?php settings_fields('sunset-setting-group'); ?>
	<?php do_settings_sections('alecaddd_sunset'); ?>
	<?php  submit_button(); ?>
</form>