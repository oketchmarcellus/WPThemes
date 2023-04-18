
<div class="col-md-12 menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/fashion-template-logo.png" width="130px" class="img-responsive logo">
                 <?php
                    wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarNavAltMarkup',
                    'menu_class'        => 'navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                     ));
                 ?>           
        </div>
    </nav>
</div>