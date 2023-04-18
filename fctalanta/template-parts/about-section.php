<?php 
    $fctalanta_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ),$fctalanta_options); 
if($current_options['about_section_enabled'] == true) { ?>
<div class="tm-top-c-box tm-full-width  home-about" style="background-image: url('<?php echo get_theme_mod('about_bg_image',get_template_directory_uri().'/images/home-about-bg.jpg')?>');">
            <div class="uk-container uk-container-center">
                <section id="tm-top-c" class="tm-top-c uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div class="uk-panel">
                            <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                                <div class="va-about-text">
                                    <div id="about-heading" class="title"><?php  echo get_theme_mod('about_heading',__('About team','fctalanta')); ?>
                                    </div>
                                    <p>
                                    <?php 
                                        $mainpost = new WP_query('page_id='.get_theme_mod('about_team_content' ,true));
                                    while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                                    <p><?php echo get_the_content(); ?></p>
                                    <?php wp_reset_query();?>
                                    <?php endwhile; ?>
                                    <a class="read-more" href="<?php echo esc_url(get_permalink());?>">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div style="min-height: 497px;" class="uk-panel">
                            <div class="trainers-module tm-trainers-slider ">
                                <div class="trainer-wrapper">
                                    <div data-uk-slideset="{default: 1, animation: 'fade', duration: 400}">
                                        <div class="trainer-top">
                                            <div class="trainers-btn">
                                                <a href="<?php echo get_site_url(); ?>" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                                <a href="<?php echo get_site_url(); ?>" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideset-item="next"></a>
                                            </div>
                                            <h3><?php  echo get_theme_mod('trainers_section_heading',__('Trainers','fctalanta')); ?></h3>
                                        </div>
                                        <ul class="uk-grid uk-slideset uk-grid-width-1-1">
                                            <?php if( get_theme_mod('trainer1')): ?>
                                            <li class="uk-active" style="">
                                                <div class="img-wrap"><img src="<?php echo get_theme_mod('trainer1',get_template_directory_uri().'/images/trainer-slider/trainer-img.jpg')?>" alt="">
                                                </div>
                                                <div class="name"><?php  echo get_theme_mod('trainer1_name',__('Shem Ondieki','fctalanta')); ?>
                                                </div>
                                            </li>
                                            <?php endif; ?>
                                            <?php if( get_theme_mod('trainer2')): ?>
                                            <li style="display: none;">
                                                <div class="img-wrap"><img src="<?php echo get_theme_mod('trainer2',get_template_directory_uri().'/images/trainer-slider/trainer-img1.jpg')?>" alt="">
                                                </div>
                                                <div class="name"><?php  echo get_theme_mod('trainer2_name',__('Shem Ondieki','fctalanta')); ?>
                                                </div>
                                            </li>
                                            <?php endif; ?>
                                            <?php if( get_theme_mod('trainer3')): ?>
                                            <li style="display: none;">
                                                <div class="img-wrap"><img src="<?php echo get_theme_mod('trainer3',get_template_directory_uri().'/images/trainer-slider/trainer-img2.jpg')?>" alt="">
                                                </div>
                                                <div class="name"><?php  echo get_theme_mod('trainer3_name',__('Shem Ondieki','fctalanta')); ?>
                                                </div>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<?php } ?>