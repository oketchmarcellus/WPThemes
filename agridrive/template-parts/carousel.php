<?php
/**
* Agridrive Carousel
*/  
$agridrive_options= template_data_setup();
$slide_options = get_theme_mod('agridrive_slider_content');
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), 
$agridrive_options );

if($current_options['home_slider_enabled'] == true){ ?>
<div class="banner-wrapper">
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php $slide_options = json_decode($slide_options); 
            $count = 0;
            if( $slide_options!='' ){
              foreach($slide_options as $slide_item) {?>
              <div class="item slides <?php echo ($count == 0) ? 'active' : ''; ?>">
                <?php if($slide_item->image_url!=''){ ?>
                <div class="slide-<?php echo $count; ?>"><img class="img-responsive" src="<?php echo $slide_item->image_url; ?>" alt="Slide<?php echo $count; ?>"/></div>
                <div class="hero">
                  <?php if($slide_item->title != '') {?>
                  <h1><?php echo $slide_item->title; ?>
                  <?php if($slide_item->subtitle != '') {?><span><?php echo $slide_item->subtitle; ?></span><?php } ?></h1>
                  <?php } ?>
                  <!--h2>We serve better and faster</h2-->
                  <?php if($slide_item->text !=''){?>
                  <p><?php echo $slide_item->text ?></p>
                  <?php } ?>
                  <!--button class="btn btn-hero animated3">Call Us</button-->
                 <a href="#"><?php if($slide_item->button_text !=''){?><button class="btn btn-hero animated3"><?php echo $slide_item->button_text ?></button><?php } ?></a>
                </div>
                <?php } ?>
              </div>
              <?php $count++; ?>
             <?php }
                }else{
                  $slider_default_title = array(__( 'welcome to', 'agridrive' ), __( 'Innovative Solutions', 'agridrive' ),__( 'Ushering a new world of ', 'agridrive' ),__( 'The one stop solution ', 'agridrive'));
                   $slider_default_subtitle=array(__( 'agridrive limited', 'agridrive' ), __( 'beyond agriculture', 'agridrive' ),__( 'opportunities in africa', 'agridrive' ),__( 'for agribusiness africa', 'agridrive'));
                  for($count=0; $count<=3; $count++) {  ?>
                    <div class="item slides <?php echo ($count == 0) ? 'active' : ''; ?>">
                      <div class="slide-<?php echo $count; ?>">
                      <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/slides/slide-<?php echo $count; ?>.jpg" alt="Slide<?php echo $count; ?>"></div>
                        <div class="hero">
                          <h1><?php echo $slider_default_title[$count]; ?><span><?php echo $slider_default_subtitle[$count]; ?></span></h1>
                          <p><?php echo 'Lorem ipsum dolor sit amet.'; ?></p>
                          <a href="#"><button class="btn btn-hero animated3">Learn More</button></a>
                        </div>
                    </div>
                <?php }
            }?>
    </div>
    <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
  </div>
</div>
<?php }?>