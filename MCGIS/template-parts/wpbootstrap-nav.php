<nav class="navbar navbar-static-top" id="mainNav">
    <div class="container" id="nav-container">
        <div class=container-fluid>
                <div class="navbar-header">
                    <a class="navbar-brand navbar-link" href="#"> </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
              <div class="collapse navbar-collapse" >
                <?php
                    wp_nav_menu( array(
                       'menu'              => 'primary',
                       'theme_location'    => 'primary',
                       'depth'             => 2,
                       'container'         => 'div',
                       'container_class'   => 'collapse navbar-collapse',
                       'container_id'      => 'navbarResponsive',
                       'menu_class'        => 'nav navbar-nav navbar-right',
                       'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                       'walker'            => new WP_Bootstrap_Navwalker()
                    ));
                ?>
              </div>
        </div>
  </div>
</nav>