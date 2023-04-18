<?php
/**
* Production big carousel
*/  $musicstudio_options= template_data_setup();
    $slide_options = get_theme_mod('production_slider_content');
    $current_options = wp_parse_args(  get_option( 'production_options', array() ), $musicstudio_options );
    
    if($current_options['home_slider_enabled'] == true){ ?>
        <div class="carousel slide" data-ride="carousel" data-interval="80000" id="carousel-1">
            <div class="carousel-inner" role="listbox">
            <?php  $slide_options = json_decode($slide_options); 
                    $count = 0;
             if( $slide_options!='' ){ 
                    
             foreach($slide_options as $slide_item) {?>

            <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
            <?php if($slide_item->image_url!=''){ ?>
            <img class="img-responsive slider-img" src="<?php echo $slide_item->image_url; ?>" alt="Slide Image">
                    <?php
                    $img_description =  $slide_item->text;
                    $readmorelink = $slide_item->link;
                    $readmore_button = $slide_item->button_text;
                    $open_new_tab = $slide_item->open_new_tab; 
                    ?>
                    <div class="carousel-caption header-text">
                    <?php if($slide_item->title != '') {?>
                        <h3 class="heading1"><?php echo $slide_item->title; ?></h3>
                    <?php } ?>
                    <?php if($img_description !=''){?>
                        <h1 class="heading2"><?php echo $img_description ?></h1>
                    </div>
                    <?php } ?>
                <?php } ?>
                </div>
             <?php $count++; ?>
             <?php }
                }else{
                    $slider_default_title = array(__( 'Proffesional', 'production' ), __( 'Rock your world', 'production' ),__( 'Mixins', 'production' ),__( 'Music Production', 'production' ));
                        for($count=0; $count<=3; $count++) 
                        {  ?>
                        <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/slide<?php echo $count; ?>.jpg">
                            <div class="carousel-caption header-text">
                                <h3 class="heading1"><?php echo $slider_default_title[$count]; ?></h3>
                                <h1 class="heading2"><?php echo 'Lorem ipsum dolor sit amet.'; ?></h1>
                            </div>
                        </div>
                <?php }
            }?>
              </div>
            <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><span class="sr-only">Next</span></a></div>
            <ol
            class="carousel-indicators"> 
                <?php $count = 0;
                if( $slide_options!='' ){
                    foreach($slide_options as $slide_item)
                    if ($count == 0){?>
                    <li data-target="#carousel-1" data-slide-to="<?php echo $count++; ?>" class="active"></li>
                    <?php }else{?>
                    <li data-target="#carousel-1" data-slide-to="<?php echo $count++; ?>" class="<?php echo ($count == 0) ? 'active' : ''; ?>"></li>
                    <?php }
                    }else{?>
                    <li data-target="#carousel-1" data-slide-to="<?php echo $count++; ?>" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="<?php echo $count++; ?>"></li>
                    <li data-target="#carousel-1" data-slide-to="<?php echo $count++; ?>"></li>
                    <li data-target="#carousel-1" data-slide-to="<?php echo $count++; ?>"></li>
                <?php }?>
            </ol>
        </div>
<?php } else {?>
    <div class="custom-header-media">
        <div class='wrap'>
            <div class="header-text" id="header-content">
                <h3 class="heading1 site-title"><?php bloginfo( 'name' ); ?></h3>
                <h1 class="heading2 site-description"><?php bloginfo( 'description' ); ?></h1>
            </div>
            <?php the_custom_header_markup(); ?>
        </div>
    </div>
<?php }?>