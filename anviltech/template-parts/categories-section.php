<?php
/**
* Popular Categories Section
*/  
$anviltech_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'anviltech_options', array() ), $anviltech_options );
$anviltech_categories_content = get_theme_mod( 'anviltech_categories_content');

if($current_options['popular_categories_section_enabled'] == true){ ?>
    <section>
        <div class="container categories">
            <?php if($current_options['popular_categories_title']) { ?>
                <h2 class="text-center section-heading" id="pop-cat"><?php echo esc_html($current_options['popular_categories_title']); ?></h2>
                <?php }?>
                <hr class="primary-hr">
                <div class="row">
                <?php if ( ! empty( $anviltech_categories_content ) ) {
                        $anviltech_categories_content = json_decode( $anviltech_categories_content );
                        foreach ( $anviltech_categories_content as $category_item ) {
                            $title = $category_item->title;
                            $link = $category_item->link;
                            $image = $category_item->image_url;
                            {?>
                           <div class="col-lg-3 col-md-3">
                                <div class="cat-icons">
                                <?php if ( ! empty( $image ) ) : ?>
                                    <a href="<?php echo ($link);?>"><img src="<?php echo ( $image ); ?>" class="cat-img"></a>
                                <?php endif; ?>
                                <?php if ( ! empty( $title ) ) : ?>
                                    <h4><?php echo esc_html( $title ); ?></h4>
                                <?php endif; ?>
                                </div>
                            </div>
                        <?php }
                        }
                    }
                    else{
                    $title = array (__('Blogs','anviltech'), __('Entertainment','anviltech'), __('News & Magazines','anviltech'), __('Studios','anviltech'),__('Shools & Colleges','anviltech'));
                    $cat_icon = array(get_template_directory_uri().'/assets/img/blogs.png',get_template_directory_uri().'/assets/img/musicstudio.png',get_template_directory_uri().'/assets/img/magazines.png',get_template_directory_uri().'/assets/img/photostudio.png',get_template_directory_uri().'/assets/img/schools.png');
                    for($i=0; $i<=4; $i++) { ?>
                    <div class="col-lg-3 col-md-3">
                        <div class="cat-icons"><a href="#"><img class="img-responsive" src="<?php echo $cat_icon[$i]; ?>"></a>
                        <h4><?php echo $title[$i]; ?></h4>
                        </div>
                    </div>
                    <?php }
                    }?>        
                </div>
            <div class="browse-button-helper">
                <button class="btn header-browse-button" type="button" style="background-image: url(<?php echo esc_url($current_options['categories_button_bg']);?>);"><?php echo esc_html($current_options['categories_button_text']);?></button>
            </div>
        </div>
    
    </section>
<?php } ?> 
