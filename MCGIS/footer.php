<!-- Footer -->
<footer>
    <section>
    <div class="row text-center">
        <h4><?php bloginfo('name')?></h4>
            <p><?php echo get_theme_mod('Address_line_1') ;?></p>
            <p><?php echo get_theme_mod('Address_line_2') ;?></p>
            <ul class="list-unstyled">
              <li> <i class="fa fa-phone fa-fw"></i> <?php echo get_theme_mod('phone') ;?></li>
              <li><i class="fa fa-envelope-o fa-fw"></i> <?php echo get_theme_mod('email') ;?></li>
            </ul>
            <ul class="list-inline">
              <li><a class="social" href="<?php echo get_option('facebook_url') ;?>"><i class="fa fa-facebook fa-fw fa-3x"></i></a></li>
              <li><a class="social" href="<?php echo get_option('twitter_url') ;?>"><i class="fa fa-twitter fa-fw fa-3x"></i></a></li>
              <li><a class="social" href="<?php echo get_option('dribble_url') ;?>"><i class="fa fa-dribbble fa-fw fa-3x"></i></a></li>
            </ul>
    </div>
   </section>
    </footer>
    <script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js'></script>
    <script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/bootstrap/js/bootstrap.min.js'></script>
     <?php wp_footer(); ?>
</body>
</html>
