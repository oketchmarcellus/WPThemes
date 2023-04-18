<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <div class="site-title"><a class="navbar-brand js-scroll-trigger" href="#page-top"><?php bloginfo('name'); ?></a></div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php
                    wp_nav_menu( array(
                       'menu'              => 'primary',
                       'theme_location'    => 'primary',
                       'depth'             => 2,
                       'container'         => 'div',
                       'container_class'   => 'collapse navbar-collapse',
                       'container_id'      => 'navbarResponsive',
                       'menu_class'        => 'navbar-nav ml-auto',
                       'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                       'walker'            => new WP_Bootstrap_Navwalker()
                    ));
                ?>
        </div>
        </div>
</nav>