<!DOCTYPE html>
<html lang="en-gb">
<!-- Custom theme from adroit theme studios -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <img src="<?php echo esc_url(get_template_directory_uri().'/images/404.jpg'); ?>" alt="Page Not Found (404)." style="position: absolute; left: 50%; top: 50%; margin-left: -285px; margin-top: -190px;">

<?php wp_footer(); ?>
</body>
</html>