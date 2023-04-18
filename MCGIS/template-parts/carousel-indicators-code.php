<!-- Image Carousel -->
<?php
function get_carousel_images($slider){
        $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 8));
        $count = 0;
        $output = '';
        $slider = new WP_Query( $args );
        while ( $slider->have_posts() ) :$slider->the_post();{
            if($count == 0){
        	$output .='<div class="item active">';
            } else {
            $output .='<div class="item">';
            }
        $output.='<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" /></div>';
        $count=$count ++;
        } 
     return $output;     
}
function get_carousel_indicators($slider){
	    $display ='';
	    $count = 0;
	    while ( $slider->have_posts() ) : $slider->the_post();{
        if($count == 0);{ 
        	$display.='<li data-target="#carousel-1" data-slide-to="<?php echo $count; ?>" class="active"></li>';
         } else {
            $display.='<li data-target="#carousel-1" data-slide-to="<?php echo $count; ?>"></li>';
         }
         $count = $count++;
         return $display;
	    }
}
;?>
<!-- Image Carousel -->
<div class="carousel slide" data-ride="carousel" id="carousel-1">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 8)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
      <?php echo get_carousel_images($slider); ?>
     <?php endforeach; ?>
  </div>
  <!-- Controls -->
 <div>
   <?php if($count >= 0):?>
     <!-- Indicators -->
    <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
   <?php endif;?>
   <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php echo get_carousel_indicators($slider); ?>
  </ol>
  </div>
</div>




                               
