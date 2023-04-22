<?php 
    $fctalanta_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ),$fctalanta_options); 
if($current_options['gallery_section_enabled'] == true) { ?>
<div class="tm-top-g-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-g" class="tm-top-g uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">

                            <div class="gallery-title">
                                <div class="uk-container uk-container-center tt-gallery-top-main">
                                    <div class="uk-grid" data-uk-grid-match="">
                                        <div class="uk-width-3-10 title">Gallery</div>
                                        <div class="uk-width-7-10 text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-sticky-placeholder">
                                <div style="margin: 0px;" class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                                    <div class="uk-container uk-container-center">
                                        <button class="active" data-filter="*">all</button>
                                        <button data-filter=".tt_c26e2589e25045ad516b5bc37d18523a">Volleyball</button>
                                        <button data-filter=".tt_6081becaf04f5a1455407d73e09bca13">Hockey</button>
                                        <button data-filter=".tt_c71a18083d9e74b4a5c5d8d9a17d68d0">Basketball</button>
                                        <button data-filter=".tt_449a5f6d01d5f416810d04b4df596b6a">Football</button>
                                        <button data-filter=".tt_ea9d8d12fefde9e2f9c4631a76504ce7">Rugby</button>
                                    </div>
                                </div>
                            </div>

                            <div id="boundary">

                                <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="">


                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item article-slider tt_c26e2589e25045ad516b5bc37d18523a ">
                                        <div class="uk-slidenav-position" data-uk-slideshow="{height:300}">
                                            <ul class="uk-slideshow">
                                            <?php  $args = array('post_type' => 'gallery_items');
                                                    $count=0;
                                                    $gallery_item= new WP_Query( $args );
                                                while ( $gallery_item->have_posts() ) :
                                                $gallery_item->the_post(); ?>
                                                <li class="uk-active" aria-hidden="false">
                                                    <div style="background-image: url(
                                                    <?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);" class="uk-cover-background uk-position-cover"></div>
                                                    <img style="width: 100%; height: auto; opacity: 0;" class="uk-responsive-height" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                                                    <div class="titles">
                                                        <div class="sub-title">
                                                            Donec vel orci sed leo semper viverra </div>
                                                    </div>
                                                </li>
                                                <?php wp_reset_query(); ?>
                                                <?php $count++;?>
                                                <?php endwhile; ?>
                                            </ul>
                                            <div class="article-slider-btn">
                                                <a href="http://h-sportak.torbara.com/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                                <a href="http://h-sportak.torbara.com/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php   $args = array('post_type' => 'gallery_items', 'posts_per_page' => 7);
                                            $count=0;
                                            $gallery_item= new WP_Query( $args ); ?>
                                            <?php  while ( $gallery_item->have_posts() ) :
                                                $gallery_item->the_post(); ?>
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a ">
                                    
                                        <div class="gallery-album">
                                        <?php $images = get_post_meta($post->ID,'vdw_gallery_id',true);
                                              $counter=0; ?>
                                            <?php foreach ($images as $image): ?>
                                            <a href="<?php echo wp_get_attachment_url($image);?>" data-uk-lightbox="{group:'my-group'}" class="img-<?php echo $counter;?>">
                                                <img src="<?php echo wp_get_attachment_url($image);?>" alt="">
                                            </a>
                                            <?php $counter++;?>
                                            <?php endforeach;?>
                                            
                                            <div class="titles">
                                                <div class="title">FC Talanta </div>
                                                <div class="sub-title"><?php the_title();?> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php wp_reset_query(); ?>
                                    <?php $count++;?>
                                    <?php endwhile; ?>
                                    <?php ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php } ?>