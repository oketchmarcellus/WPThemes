<?php 
    $fctalanta_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ),$fctalanta_options); 
if($current_options['latestnews_section_enabled'] == true) { ?>
<div class="tm-top-f-box tm-full-width  va-main-our-news" style="background-image: url(<?php echo get_theme_mod('latest_news_bg_image',get_template_directory_uri().'/images/our-news-bg.jpg')?>);">
            <div class="uk-container uk-container-center">
                <section id="tm-top-f" class="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid uk-grid-collapse" data-uk-grid-match="">
                                    <div class="uk-width-1-1">
                                        <div class="our-news-title">
                                            <h3><?php  echo get_theme_mod('latestnews_heading',__('Talanta News','fctalanta')); ?></h3>
                                        </div>
                                        <div class="our-news-text"><?php  echo get_theme_mod('latestnews_intro_text',__('Keep it here for the latest news on FC Talanta, including scores, fixtures, results, form guide and league position.','fctalanta')); ?></div>
                                    </div>
                                    <?php
                                        $cat_id = get_cat_ID('get_theme_mod("latestnews_category_posts",true)');
                                        $args = array(
                                        'cat' =>$cat_id,
                                        'post_type'=>'post',
                                        'posts_per_page'=>2,
                                        'post_status'=>'publish',
                                        'orderby'=>'date');
                                        $latest_news = new WP_Query( $args);
                                    if ( $latest_news->have_posts() ) :
                                    while ( $latest_news->have_posts() ) : $latest_news->the_post();?>
                                    <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                        <?php if(has_post_thumbnail()){?>
                                        <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>); min-height: 280px;">


                                            <a href="<?php echo esc_url(get_permalink());?>"></a>
                                            <img class="uk-invisible" src="<<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                                        <?php }?>
                                        </div>
                                        <div style="min-height: 280px;" class="info">
                                            <div class="date">
                                                <?php echo get_the_date();?>  </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="<?php echo esc_url(get_permalink());?>"><?php the_title();?></a>	
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <?php the_excerpt(20,'content'); ?>
                                                <div class="read-more"><a href="<?php echo esc_url(get_permalink());?>">Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </article>
                                    <?php endwhile; ?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="all-news-btn"><a href="news.html"><span>All News</span></a>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
<?php } ?>