<?php $image_id = get_post_meta( $post->ID, '_custom_header_image_id', true );?>
<?php if ($image_id):?>
  <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('<?php echo wp_get_attachment_url( $image_id); ?>');">
                                <img class="uk-invisible" src="<?php echo wp_get_attachment_url( $image_id); ?>" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <?php if ( ( is_single() || ( is_page() ) )):?>
                                    <h1><?php the_title();?></h1>
                                    <?php elseif (is_archive()):?>
                                    <h1>Archives</h1>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<div class="uk-container uk-container-center alt">
  <ul class="uk-breadcrumb">
    <?php get_talanta_breadcrumb();?>
  </ul>
</div>
<?php else: ?>
<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('<?php echo get_template_directory_uri().'/images/head-bg.jpg'?>');">
                                <img class="uk-invisible" src="<?php echo get_template_directory_uri()?>/images/head-bg.jpg" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <?php if ( ( is_single() || ( is_page() ) )):?>
                                    <h1><?php the_title();?></h1>
                                    <?php elseif (is_archive()):?>
                                    <h1>Archives</h1>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<div class="uk-container uk-container-center alt">
  <ul class="uk-breadcrumb">
    <?php get_talanta_breadcrumb();?>
  </ul>
</div>
<?php endif; ?>
