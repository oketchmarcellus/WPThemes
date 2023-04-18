<!-- Image Carousel -->
<div class="carousel slide" data-ride="carousel" id="carousel-1">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 8)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
      <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>"/>
      </div>
      <?php $count++; ?>
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
    <?php $count=0;?>
    <?php foreach($posts as $post):?>
     <li data-target="#myCarousel-1" data-slide-to="<?php echo $count; ?>" class="<?php echo 'active'; ?>"></li>
    <?php endforeach;?>
    <?php $count++;?>
    </ol>
  </div>
   </div>




                               
