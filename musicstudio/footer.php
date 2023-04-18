<footer style="background-image: url('<?php echo get_theme_mod('footer_bg_img',get_template_directory_uri().'/assets/img/footer-bg-img.jpg')?>');">
        <div class="row footer-bg">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foot-cover">
                <div class="footer-content">
                <div class="container">
                    <div class="col-lg-4 col-md-4 footer-text">
                        <div><img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/production-template-icons-homepage-location.png" class="location-img"></div>
                            <?php
                                get_template_part( 'template-parts/footer-widget1' );
                            ?>
                    </div>
                    <div class="col-lg-4 col-md-4 footer-text">
                        <div><img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/production-template-icons-homepage-call.png" class="location-img"></div>
                            <?php
                                get_template_part( 'template-parts/footer-widget2' );
                            ?>
                    </div>
                    <div class="col-lg-4 col-md-4 footer-text">
                        <div><img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/production-template-icons-homepage-email.png" class="location-img"></div>
                           <?php
                                get_template_part( 'template-parts/footer-widget3' );
                            ?>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
            </div>
            </div>
        </div>
</footer>
  <!-- Bootstrap core JavaScript -->
  <?php wp_footer(); ?>
</body>

</html>