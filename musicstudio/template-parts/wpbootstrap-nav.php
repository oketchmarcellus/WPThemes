<div class="menu"><div class="logo">
      <?php $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id,'full');?>
      <img class="img-responsive logo-img" src="<?php echo esc_url($logo[0]);?>">
      <?php if (!has_custom_logo()){?>
            <img class="img-responsive logo-img" src="<?php echo get_template_directory_uri()?>/assets/img/recording-studio-logo-sample-white.png">
      <?php }?></div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"></a>
                <button class="navbar-toggle collapsed visible-xs-block visible-sm-block" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                    <?php
                    wp_nav_menu( array(
                       'menu_id'              => 'primary',
                       'theme_location'    => 'primary-navigation',
                       'depth'             => 2,
                       'container'         => 'div',
                       'container_class'   => 'collapse navbar-collapse',
                       'container_id'      => 'navcol-1',
                       'menu_class'        => 'nav navbar-nav hidden-sm',
                       'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    ));
                ?>
            </div>
        </div>
    </nav>
</div>