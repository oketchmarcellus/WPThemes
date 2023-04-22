<div class="col-lg-12">
    <div class="header-inner">
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-secondary-light.png" width="180" alt="AATF logo"> 
            </a>
        </div>
        <nav class="menu">
         <!--Collect the nav links, forms, and other content for toggling -->
                  <?php
                    wp_nav_menu( array(
                      'menu_id'              => 'primary',
                      'theme_location'    => 'primary-navigation',
                      'depth'             => 0,
                      'container'         => 'ul',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'bs-example-navbar-collapse-1',
                      'menu_class'        => '',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    ));
                ?>
        </nav> 
    </div>
</div>
            