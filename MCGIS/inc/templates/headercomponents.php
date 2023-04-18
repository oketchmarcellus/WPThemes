<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields('header-component-group'); ?>
	<?php do_settings_sections('header_components'); ?>
	<?php  submit_button(); ?>
</form>