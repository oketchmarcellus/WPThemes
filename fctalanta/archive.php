<?php
/*
*Template Name: Archives Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage fctalanta
* @since sept2017 1.0
*/
get_header(); ?>
<!-- Banner Wrapper Start -->
<?php if ( ( is_single() || is_archive() || ( is_page() && !talanta_frontpage() ) )):
    get_template_part('template-parts/page-header-media');
endif; ?>
<div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                   
                    <div class="contentpaneopen">
                       <main id="tm-content" class="tm-content">
                            <div class="uk-grid" data-uk-grid-match="">
                            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                    	<?php if(has_post_thumbnail()){?>
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-polaroid" alt="">
                                            </a>        
                                        </div>
                                        <?php }?>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 25, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html"><?php the_title();?></a>        
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p><?php echo get_the_content(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i>
                                        	<span><?php if ( comments_open()):
                                        				get_comments_number();
                            						endif;?>
                            				</span>
                            			</div>
                                        <div class="read-more"><a href="<?php echo esc_url(get_permalink());?>">Read More</a></div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            <?php endif;?>
                            </div>
                            <div class="pagination">
          						<ul class="pagination-list">
            						<?php previous_post_link('<li class="pagination-prev"><span class="pagenav" aria-hidden="true">Prev</span></li>',true);?>
            						<?php next_post_link('<li class="pagination-next"><a data-original-title="Next" title=""  class="hasTooltip pagenav">Next</li></a>',true);?>
          						</ul>
    						</div>
    						<div class="clearfix"></div>
                        </main>
                    </div>
   

                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
<?php get_footer();?>