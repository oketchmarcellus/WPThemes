<?php
/*
Template Name: Home Page Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2Press
* @since sept2017 1.0
*/
get_header(); ?>
    <section class="welcome">
                  <div class="heading-helper" id="welcome-icon"><img class="img-responsive heading-icon" src="<?php echo get_template_directory_uri()?>/assets/img/production-template-icons-homepage-welcome.png">
                    <h2 class="text-uppercase heading" id="welcome-heading"><?php  echo get_theme_mod('welcome_post_heading',__('welcome','production')); ?></h2></div>
                    <?php 
                 $mainpost = new WP_query('page_id='.get_theme_mod('welcome_post' ,true)); 
                 while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                    <p><?php echo get_the_content(); ?></p>
                 <?php endwhile; ?>
    </section>
     <section class="divider-img" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/production-template-welcome-section.jpg')"></section>
    <section class="releases">
        <div class="heading-helper" id="releases-icon"><img class="img-responsive heading-icon" src="<?php echo get_template_directory_uri()?>/assets/img/production-template-icons-homepage-new-releases.png">
            <h2 class="text-uppercase heading" id="releases-heading"><?php  echo get_theme_mod('releases_post_heading',__('new releases','production')); ?></h2></div>
        <div class="releases-post">
            <p><?php  echo get_theme_mod('releases_post',__('Here is a sneak peek into our Recent production Projects','production')); ?></p>
        </div>
        <div>
            <div class="col-lg-4 col-md-4">
                <div id="img-release1"><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/images_08.jpg">
                    <h4 class="text-uppercase project-heading" id="upload1-title"><?php  echo get_theme_mod('releases_upload1_title',__('turn up','production')); ?></h4>
                    <p class="projects-txt" id="upload1-subtitle"><?php  echo get_theme_mod('releases_upload1_subtitle',__('Ginger','production')); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="img-release2"><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/images_05.jpg">
                    <h4 class="text-uppercase project-heading" id="upload2-title"><?php  echo get_theme_mod('releases_upload2_title',__('up vote','production')); ?></h4>
                    <p class="projects-txt" id="upload2-subtitle"><?php  echo get_theme_mod('releases_upload2_subtitle',__('Makkain','production')); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="img-release3"><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/images_11.jpg">
                    <h4 class="text-uppercase project-heading" id="upload3-title"><?php  echo get_theme_mod('releases_upload3_title',__('jazzy beat','production')); ?></h4>
                    <p class="projects-txt" id="upload3-subtitle"><?php  echo get_theme_mod('releases_upload3_subtitle',__('Jazzy Sax','production')); ?></p>
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-12 see-more">
                <button class="btn btn-lg more" type="button">see more</button>
            </div>
        </div>
    </section>
    <section>
        <div class="row news">
            <div class="col-md-12 latest-news">
                <div class="heading-helper" id="news-icon"><img class="img-responsive heading-icon" src="<?php echo get_template_directory_uri()?>/assets/img/production-template-icons-homepage-latest-news.png">
                    <h2 class="text-uppercase heading" id="news-heading"><?php  echo get_theme_mod('latest_news_heading',__('latest news','production')); ?></h2></div>
            </div>
            <div class="col-md-12">
                <div class="news">
                    <div class="col-lg-6 col-md-6 news-img-container1">
                        <div class="news-content">
                            <h4 class="text-left news-heading">lorem ipsum</h4>
                            <p class="text-left news-txt">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem</p>
                            <div></div>
                        </div><img class="img-responsive news-img" src="<?php echo get_template_directory_uri()?>/assets/img/kane-reinholdtsen-145944-unsplash.jpg"></div>
                    <div class="col-lg-6 col-md-6 news-img-container2">
                        <div class="news-content">
                            <h4 class="text-left news-heading">lorem ipsum</h4>
                            <p class="text-left news-txt">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem</p>
                            <div></div>
                        </div><img class="img-responsive news-img" src="<?php echo get_template_directory_uri()?>/assets/img/lechon-kirb-25696-unsplash.jpg"></div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
    