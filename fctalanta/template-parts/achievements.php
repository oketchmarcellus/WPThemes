<?php 
    $fctalanta_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ),$fctalanta_options); 
if($current_options['achievements_section_enabled'] == true) { ?>
<div class="tm-bottom-a-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel tt-achievments-wrap" style="background-image: url(<?php echo get_template_directory_uri()?>/images/tt-achievments-wrap.jpg);">
                            <div class="uk-grid uk-grid-collapse">
                                <div class="uk-width-large-4-10 uk-width-medium-1-1 achievments-block">
                                    <div class="our-awards-main-wrap">
                                        <div class="uk-slidenav-position our-awards" data-uk-slider="{autoplay:true, autoplayInterval:7000}">
                                            <div class="our-awards-main-title">
                                                <h2>Our <span>Awards</span></h2>
                                                <div class="our-awards-btn">
                                                    <a draggable="false" href="http://h-sportak.torbara.com/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                                                    <a draggable="false" href="http://h-sportak.torbara.com/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                                                </div>
                                            </div>
                                            <div class="uk-slider-container">
                                                <ul class="uk-slider uk-grid uk-grid-width-large-1-2">
                                                <?php  $args = array('post_type' => 'talanta_awards');
                                                    $count=0;
                                                    $gallery_item= new WP_Query( $args );
                                                while ( $gallery_item->have_posts() ) :
                                                $gallery_item->the_post(); ?>
                                                    <li>
                                                    <div class="img-wrap"><img draggable="false" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                                                        </div>
                                                        <div class="text"><?php the_title();?></div>
                                                    </li>
                                                <?php wp_reset_query(); ?>
                                                <?php $count++;?>
                                                <?php endwhile; ?>    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-large-5-10 uk-width-medium-1-1 achievments-block uk-push-1-10">
                                    <div class="achievments-inner">
                                        <div class="our-awards-main-title">
                                            <h2>achievements</h2>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                <div class="item">
                                                    <div class="icon"><img src="<?php echo get_template_directory_uri()?>/images/stat-icon.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <div class="number">35</div>
                                                        <div class="text">goals</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                <div class="item">
                                                    <div class="icon"><img src="<?php echo get_template_directory_uri()?>/images/stat-icon1.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <div class="number">12</div>
                                                        <div class="text">games played</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                <div class="item">
                                                    <div class="icon"><img src="<?php echo get_template_directory_uri()?>/images/stat-icon2.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <div class="number">13</div>
                                                        <div class="text">violations</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                <div class="item">
                                                    <div class="icon"><img src="<?php echo get_template_directory_uri()?>/images/stat-icon3.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <div class="number">8</div>
                                                        <div class="text">Awards</div>
                                                    </div>
                                                </div>
                                            </div>
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