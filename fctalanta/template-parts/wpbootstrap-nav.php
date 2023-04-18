<div style="height: 70px;" class="uk-sticky-placeholder">
  <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
    <div class="uk-container uk-container-center">
        <a class="tm-logo uk-float-left" href="index-2.html">
          <?php $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id,'full');?>
          <img class="img-responsive" src="<?php echo esc_url($logo[0]);?>">
          <?php if (!has_custom_logo()){?>
          <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/talanta/talantalogo-1.png" alt="logo" title="logo" style="width: 100px; height: auto;"> <span>FC<em>Talanta</em></span>
          <?php }?>
        </a>
        <?php
          wp_nav_menu( array(
            'menu_id'              => 'primary',
            'theme_location'    => 'primary-navigation',
            'depth'             => 0,
            'container'         => 'div',
            'container_class'   => '',
            'container_id'      => '',
            'menu_class'        => 'uk-navbar-nav uk-hidden-small',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          ));
        ?>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
      </div>
    </nav>
  </div>
</div>