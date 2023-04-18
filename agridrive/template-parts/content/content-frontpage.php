<section class="news" style="background-image: url('<?php echo get_template_directory_uri()?>/images/Our-Latest-News-BG-IMAGE.JPG');">
  <div class="container">
    <h2 id="news-heading" style="border-bottom: dashed 1px #a35719"><span><font color="#a35719"><?php the_title();?></h2>
  <?php
      if(has_post_thumbnail()){?>
      <div class="row" style="margin-bottom:12px; background:#FFFFFF;">
      <div class="thumbnail">
        <div class="col-md-4">
          <div class="news-img">
            <a class="hover-img" href="blog-1.php"> <img alt="Agridrive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
            <div class="hover-link"> 
            <div class="link"> <i class="fa fa-link" aria-hidden="true"></i> 
            </div> 
            </div>
            </a>
          </div> 
        </div>
      <div class="col-md-8">
        <div class="caption">
        <h3><a href="blog-1.php"><?php the_title();?></a></h3> 
        <p style="text-align:justify; color:#666666;"><?php echo get_the_content(); ?></p>
        <a href="blog-1.php" class="readmore">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
        </div>
      </div>
      </div>
      </div>
      <?php }else {?>
      <div class="row" style="margin-bottom:12px; background:#FFFFFF;">
      <div class="thumbnail">
        <div class="col-md-12">
          <div class="caption">
            <h3><a href="blog-1.php"><?php the_title();?></a></h3> 
            <p style="text-align:justify; color:#666666;"><?php echo get_the_content(); ?></p>
            <a href="blog-1.php" class="readmore">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
          </div>
        </div>
      </div>
      </div>
    <?php }?>
</section>