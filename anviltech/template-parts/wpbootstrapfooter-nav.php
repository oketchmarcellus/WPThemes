<!--Footer Navigation -->
    <div>
        <?php
            wp_nav_menu( array(
                'menu'              => 'footer',
                'theme_location'    => 'footer',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'footer-list',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
            ));
        ?>
    </div>

