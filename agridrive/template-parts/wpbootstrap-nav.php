<!-- Logo and Nav -->
<div class="logo-wrapper text-center">
  <div class="container">
    <div class="row"> 
      <!-- Logo -->
        <div class="col-sm-12 col-md-3 hidden-xs"> 
          <div class="affix-logo"> <a href="index.html">
            <img class="img-responsive logo-img" src="<?php echo get_template_directory_uri()?>/images/affix-logo.png"></a>
          </div>
        </div>
        <!-- Navigation -->
        <div class="col-sm-1 col-md-1"> </div>
        <div class="col-sm-12 col-md-12">
          <div class="row">
            <div class="col-sm-12 col-md-12">
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="<?php echo get_template_directory_uri()?>/images/mobile-logo.png" alt="Grow Landscape"/></a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
                  <?php
                    wp_nav_menu( array(
                      'menu_id'              => 'primary',
                      'theme_location'    => 'primary-navigation',
                      'depth'             => 0,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'bs-example-navbar-collapse-1',
                      'menu_class'        => 'nav navbar-nav',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    ));
                ?>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>