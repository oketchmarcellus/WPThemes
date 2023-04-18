<?php
/*
*Template Name: Page Template
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
        <div class="tm-bottom-a-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="about-team-page-top-wrap">
                                <div class="uk-grid">
                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                                    <?php if(has_post_thumbnail()){?>
                                    <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                    <div class="uk-width-large-5-10 uk-width-small-1-1">
                                        <div class="top-banner uk-cover-background uk-position-relative" style="height: 420px; background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>');">
                                            <img class="uk-invisible" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                                            <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle inner">
                                                “It’s not whether you get knocked
                                                <br> down; it’s whether you get up.”
                                                <div class="name">Vince Lombardi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }else {?>
                                    <div class="uk-width-1-1">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                    <?php }?>
                                    <?php endwhile;?>
                                <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<?php get_footer();?>