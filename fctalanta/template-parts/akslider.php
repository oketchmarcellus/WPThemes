<?php
/**
* Fc Talanta Akslider
*/  
$fctalanta_options= template_data_setup();
$akslider_options = get_theme_mod('fctalanta_slider_content');
$current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ), 
$fctalanta_options );

if($current_options['home_slider_enabled'] == true){ ?>
<div class="tm-top-a-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="akslider-module ">
                                <div class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                    <ul class="uk-slideshow uk-overlay-active">
                                    <?php $slide_options = json_decode($slide_options); 
                                        $count = 0;
                                        if( $slide_options!='' ){
                                        foreach($slide_options as $slide_item) {?>
                                        <?php if($slide_item->image_url!=''){ ?>
                                        <li aria-hidden="false" class="uk-height-viewport uk-<?php echo ($count == 0) ? 'active' : ''; ?>">
                                            <div style="background-image: url(<?php echo $slide_item->image_url; ?>;" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="<?php echo $slide_item->image_url; ?>" alt="">
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <?php if($slide_item->title != '') {?>
                                                        <h3><?php echo $slide_item->title; ?></h3><?php } ?>
                                                        <?php if($slide_item->subtitle != '') {?>
                                                        <div class="promo-sub"><?php echo $slide_item->subtitle; ?></div>
                                                        <?php } ?>
                                                        <?php if($slide_item->button_text !=''){?>
                                                        <a href="#" class="read-more"><?php echo $slide_item->button_text ?><i class="uk-icon-chevron-right"></i></a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    <?php $count++; ?>
                                    <?php }
                                  }else{
                                    $slider_default_title = array(__( 'welcome to Fc Talanta', 'fctalanta' ), __( 'one spirit one team one win', 'fctalanta' ),__( 'football is our passion ', 'fctalanta' ));
                                    $slider_default_subtitle=array(__( 'Beyond the dream', 'fctalanta' ), __( 'winning isnt everything its the only thing enjoy the game', 'fctalanta' ),__( 'United we play. united we win', 'fctalanta' ));?>
                                    <?php for($count=0; $count<=2; $count++) {  ?>
                                    <li aria-hidden="false" class="uk-height-viewport uk-<?php echo ($count == 0) ? 'active' : ''; ?>">
                                    <div style="background-image: url(<?php echo get_template_directory_uri()?>/images/talanta/fwdset1/main-slider-img<?php echo $count; ?>.jpg);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="<?php echo get_template_directory_uri()?>/images/talanta/fwdset1/main-slider-img<?php echo $count; ?>.jpg" alt="<?php echo $count; ?>">
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <h3><?php echo $slider_default_title[$count]; ?></h3>
                                                        <div class="promo-sub"><?php echo $slider_default_subtitle[$count]; ?></div>
                                                        <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php }
                                    }?>
                                    </ul>
                                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                        <?php $count = 0;
                                            if( $slide_options!='' ){
                                            foreach($slide_options as $slide_item)
                                                if ($count == 0){?>
                                                <li class="active" data-uk-slideshow-item="<?php echo $count++; ?>"><a href=""><?php echo $count++; ?></a>
                                                <?php }else{?>
                                                <li class="uk-<?php echo ($count == 0) ? 'active' : ''; ?>" data-uk-slideshow-item="<?php echo $count++; ?>"><a href=""><?php echo $count++; ?></a></li>
                                                <?php }
                                                }else{?>
                                                <li data-uk-slideshow-item="0"><a href="">0</a>
                                                </li>
                                                <li data-uk-slideshow-item="1"><a href="">1</a>
                                                </li>
                                                <li data-uk-slideshow-item="2"><a href="">2</a>
                                                </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php }?>
