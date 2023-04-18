<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading" id="footer-heading"><?php echo get_theme_mod('footer_content_heading') ;?></h2>
            <hr class="primary">
            <p><?php echo get_theme_mod('footer_content_txt') ;?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p id="phone"><?php echo get_theme_mod('phone') ;?></p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p id="email">
              <a href="mailto:<?php echo get_theme_mod('email') ;?>"><?php echo get_theme_mod('email') ;?></a>
            </p>
          </div>
        </div>
      </div>
</section>
<!-- Bootstrap core JavaScript -->
  <?php wp_footer(); ?>
</body>

</html>