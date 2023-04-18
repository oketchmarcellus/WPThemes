<?php
/*
*Template Name: Single Post Template
* @link http://adroit-themes.net
* @package WordPress
* @subpackage FC Talanta
* @since sept2017 1.0
*/
get_header();?>
    <div class="over-wrap">
    <?php if ( ( is_single() || ( is_page() && !talanta_frontpage() ) )):
    get_template_part('template-parts/page-header-media');
    endif; ?>

        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                    <main id="tm-content" class="tm-content">
                        <div class="contentpaneopen">
                           <article>
                                <div class="clearfix"></div>
                                <div class="article-slider">
                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                                    <div id="carusel-11-30" class="uk-slidenav-position" data-uk-slideshow="{ height : 510 }">
                                        <ul class="uk-slideshow">
                                            <?php if(has_post_thumbnail()){?>
                                            <li>
                                                <div style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);" class="uk-cover-background uk-position-cover"></div>
                                                <img style="width: 100%; height: auto; opacity: 0;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                                            </li>
                                        </ul>
                                        <div class="article-slider-btn">
                                            <a href="http://h-sportak.torbara.com/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                            <a href="http://h-sportak.torbara.com/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-param">
                                    <div class="date">
                                        <i class="uk-icon-calendar"></i>
                                        <?php echo get_the_date();?>            
                                    </div>
                                    <div class="author">
                                        <i class="uk-icon-user"></i>
                                        <a class="filter-link" data-original-title="Show only articles of <b>Guest</b>" href="#" rel="nofollow"><?php echo get_the_author(); ?></a>            
                                    </div>
                                    <div class="categories">
                                        <i class="uk-icon-list-ul"></i>
                                        <?php the_category(); ?>            
                                    </div>
                                </div>
                                <?php }?>
                                <div class="article-single-text">
                                    <?php echo get_the_content(); ?>
                                </div>
                                <div class="share-wrap">
                                    <div class="share-title">share</div>
                                    <script type="text/javascript" src="../../yastatic.net/share/share.js" charset="utf-8"></script>
                                    <div class="yashare-auto-init" data-yasharel10n="en" data-yasharetype="none" data-yasharequickservices="facebook,twitter,gplus"><span class="b-share"><a rel="nofollow" target="_blank" title="Facebook" class="b-share__handle b-share__link b-share-btn__facebook" href="https://share.yandex.net/go.xml?service=facebook&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="facebook"><span class="b-share-icon b-share-icon_facebook"></span></a><a rel="nofollow" target="_blank" title="Twitter" class="b-share__handle b-share__link b-share-btn__twitter" href="https://share.yandex.net/go.xml?service=twitter&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="twitter"><span class="b-share-icon b-share-icon_twitter"></span></a><a rel="nofollow" target="_blank" title="Google Plus" class="b-share__handle b-share__link b-share-btn__gplus" href="https://share.yandex.net/go.xml?service=gplus&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="gplus"><span class="b-share-icon b-share-icon_gplus"></span></a></span></div>
                                </div>
                            </article>
                            <div class="news-nav-wrap">
                                <div class="uk-grid" data-uk-grid-match="">
                                    <div class="uk-width-1-2 uk-panel list-article news-nav">
                                        <div class="name">
                                            <h4>
                                                <?php previous_post_link('%link','Previous Post',true);?>     
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2 uk-panel list-article news-nav">
                                        <div class="name">
                                            <h4><?php next_post_link('%link','Next Post',true);?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                            endif;?>
                            <?php endwhile;?>
                            <?php endif;?>
                        </div>
   
                    </main>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
<?php get_footer();?>