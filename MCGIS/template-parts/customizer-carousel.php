<div class="carousel slide" data-ride="carousel" id="carousel-1">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-1" data-slide-to="1"></li>
      <li data-target="#carousel-1" data-slide-to="2"></li>
      <li data-target="#carousel-1" data-slide-to="3"></li>
      <li data-target="#carousel-1" data-slide-to="4"></li>
      <li data-target="#carousel-1" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><a href="<?php echo esc_url( get_theme_mod( 'McGIS_slide_one_link' ) ); ?>">
      <img src='<?php echo get_theme_mod( 'McGIS_slide_img_upload_one',get_template_directory_uri().'/img/default-slider.png'); ?>' alt="<?php echo get_theme_mod( 'McGIS_slide_title_1' ); ?>"></a><!-- end link to image, re-use post title as image ALT... SMART -->
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo (get_theme_mod( 'McGIS_slide_title_1')); ?></h1><!-- prints dynamic heading title text -->
            <p><?php echo (get_theme_mod( 'McGIS_slide_text_1' )); ?></p><!-- prints dynamic descriptive paragraph text -->
          </div>
        </div>
    </div>
    <!-- end theme customizer dynamic content -->
    <div class="item">
      <a href="<?php echo esc_url( get_theme_mod( 'McGIS_slide_two_link' ) ); ?>">
      <img src='<?php echo esc_url( get_theme_mod( 'McGIS_slide_img_upload_two',get_template_directory_uri().'/img/default-slider.png')); ?>' alt="<?php echo get_theme_mod( 'McGIS_slide_title_2' ); ?>"></a><!-- end link to image, re-use post title as image ALT... SMART -->
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo get_theme_mod( 'McGIS_slide_title_2' ); ?></h1><!-- prints dynamic heading title text -->
            <p><?php echo get_theme_mod( 'McGIS_slide_text_2' ); ?></p><!-- prints dynamic descriptive paragraph text -->
          </div>
        </div>
    </div>
    <div class="item">
      <a href="<?php echo esc_url( get_theme_mod( 'McGIS_slide_three_link' ) ); ?>"> <!-- links entire image to URL entered in customizer -->
      <img src='<?php echo get_theme_mod( 'McGIS_slide_img_upload_three' ); ?>' alt="<?php echo get_theme_mod( 'McGIS_slide_title_3' ); ?>"></a><!-- end link to image, re-use post title as image ALT... SMART -->
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo get_theme_mod( 'McGIS_slide_title_3' ); ?></h1><!-- prints dynamic heading title text -->
            <p><?php echo get_theme_mod( 'McGIS_slide_text_3' ); ?></p><!-- prints dynamic descriptive paragraph text -->
          </div>
        </div>
    </div>
    <div class="item">
      <a href="<?php echo esc_url( get_theme_mod( 'McGIS_slide_four_link' ) ); ?>"> <!-- links entire image to URL entered in customizer -->
      <img src='<?php echo get_theme_mod( 'McGIS_slide_img_upload_four',get_template_directory_uri().'/img/default-slider.png'); ?>' alt="<?php echo get_theme_mod( 'McGIS_slide_title_3' ); ?>"></a><!-- end link to image, re-use post title as image ALT... SMART -->
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo get_theme_mod( 'McGIS_slide_title_4' ); ?></h1><!-- prints dynamic heading title text -->
            <p><?php echo get_theme_mod( 'McGIS_slide_text_4' ); ?></p><!-- prints dynamic descriptive paragraph text -->
          </div>
        </div>
    </div>
    <div class="item">
      <a href="<?php echo esc_url( get_theme_mod( 'McGIS_slide_five_link' ) ); ?>"> <!-- links entire image to URL entered in customizer -->
      <img src='<?php echo get_theme_mod( 'McGIS_slide_img_upload_five',get_template_directory_uri().'/img/default-slider.png'); ?>' alt="<?php echo get_theme_mod( 'McGIS_slide_title_5' ); ?>"></a><!-- end link to image, re-use post title as image ALT... SMART -->
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo get_theme_mod( 'McGIS_slide_title_5' ); ?></h1><!-- prints dynamic heading title text -->
            <p><?php echo get_theme_mod( 'McGIS_slide_text_5' ); ?></p><!-- prints dynamic descriptive paragraph text -->
          </div>
        </div>
    </div>
    <div class="item">
      <a href="<?php echo esc_url( get_theme_mod( 'McGIS_slide_six_link' ) ); ?>"> <!-- links entire image to URL entered in customizer -->
      <img src='<?php echo get_theme_mod( 'McGIS_slide_img_upload_six',get_template_directory_uri().'/img/default-slider.png'); ?>' alt="<?php echo get_theme_mod( 'McGIS_slide_title_6' ); ?>"></a><!-- end link to image, re-use post title as image ALT... SMART -->
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo get_theme_mod( 'McGIS_slide_title_6' ); ?></h1><!-- prints dynamic heading title text -->
            <p><?php echo get_theme_mod( 'McGIS_slide_text_6' ); ?></p><!-- prints dynamic descriptive paragraph text -->
          </div>
        </div>
    </div>
  </div><!-- /.carousel-inner -->
  <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
           <i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#carousel-1"  role="button" data-slide="next">
           <i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
  </div>
</div><!-- /.carousel -->