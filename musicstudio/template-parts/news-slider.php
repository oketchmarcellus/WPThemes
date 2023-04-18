<div data-ride="carousel" data-interval="false" class="carousel slide" id="carousel-2">
		<div role="listbox" class="carousel-inner">
			<?php 
						$cat_id = get_cat_ID('get_theme_mod("latestnews_category_posts",true)');
						$counter=0;
						$args = array(
						'cat' =>$cat_id,
						'post_type'=>'post',
						'posts_per_page'=>'10',
						'post_status'=>'publish',
						'orderby'=>'date');
						$latest_news = new WP_Query( $args);
						foreach ($latest_news  as $slide_item){ ?>
				<div class="item <?php echo ($counter == 0) ? 'active' : ''; ?>">
						<div class="row">
				<?php $i = 0; 
							while ( $latest_news->have_posts() && $i <2){
							 $latest_news->the_post(); {?>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 newsbytes">
							<a class="slider-link" href="<?php echo esc_url(get_permalink());?>">
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive feat-img" alt="Slide Image"/>
								<div class="carousel-caption news-content">
								<h4 class="news-heading"><?php the_title(); ?></h4>
								<p class="news-txt"><?php echo wp_trim_words(get_the_content(),'13'); ?></p>
							</a>
							</div>
							</div>
						 <?php wp_reset_query(); $i++; };
						 }?>
						</div>
				</div>
				<?php  $counter++;?>
				<?php }?>
		</div>
	</div>
