<?php 
    $musicstudio_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'production_options', array() ),$musicstudio_options); 
if($current_options['section4_enabled'] == true) { ?>
<section>
    <div class="row news">
        <div class="col-md-12 latest-news">
            <div class="heading-helper" id="news-icon"><img class="img-responsive heading-icon" src="<?php echo get_template_directory_uri()?>/assets/img/production-template-icons-homepage-latest-news.png">
                <h2 class="text-uppercase heading" id="news-heading"><?php  echo get_theme_mod('latest_news_heading',__('latest news','production')); ?></h2></div>
        </div>
    </div>
    <div class="row news-slider">
        <div class="col-md-12 new-control">
            <div class="text-right controls">
                <a href="#carousel-2" role="button" data-slide="prev" class="btn btn-default btn-xs left"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a href="#carousel-2" role="button" data-slide="next" class="btn btn-default btn-xs right"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
            <?php get_template_part( 'template-parts/news-slider' );?>
        </div>
    </div>
</section>
<?php }
?>