<?php $headers = get_uploaded_header_images(); ?>
<?php foreach($headers as $header) : ?>
<img class="header-img" src="<?php echo $header['url']; ?>"/>
 <?php shuffle($headers);?>
<?php endforeach; ?>
<?php;?>
