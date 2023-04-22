<!--Sidebar Area-->
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-12">
     <h4 class="header-h4"> OTHER STORIES </h4>
     <?php  $args = array('post_type' => 'post', 'posts_per_page' => 18, 'category_name'=>'news-updates-category', 'post_status'=>'publish','orderby'=>'date', 'post__not_in' => array( $post->ID ));
              $count=0;
              $news_item= new WP_Query( $args );
              if ( $news_item->have_posts() ) : while ( $news_item->have_posts() ) :$news_item->the_post(); ?>
	 <a href="<?php echo esc_url(get_permalink());?>">
	 <img  src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="Service Thumb">
	 <h5 class="header-h5"><?php the_title();?></h5></a>
	 <a href="<?php echo esc_url(get_permalink());?>" class="cr-btn2">READ MORE</a> 
	 <hr>
	 <?php wp_reset_query(); endwhile; endif;?>

</div>
<!--<aside class="widget-area" role="complementary">
<?php if(is_active_sidebar( 'sidebar1' )){ ?>
			<?php dynamic_sidebar( 'sidebar1');	?>
<?php } ?>
</aside>-->
<!--Sidebar Area-->