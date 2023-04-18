<?php
/**
 * The template for displaying posts with excerpts
 * @package production
 */
?>
<div class="heading-helper">		
	<?php the_title( '<h2 class="text-uppercase heading">', '</h2>' ); ?>
</div>
<div class="container">
	<p><?php echo the_excerpt(); ?></p>
</div>