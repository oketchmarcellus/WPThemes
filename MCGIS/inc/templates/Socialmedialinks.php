<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields('Social-media-setting-group'); ?>
	<?php do_settings_sections('Social_media_settings'); ?>
	<?php  submit_button(); ?>
</form>