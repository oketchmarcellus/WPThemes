<?php
/*
Template Name: All templates
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage anviltech_main_section'
* @since sept2017 1.0
*/
?>
<?php get_header(); ?>
  <body id="page-top" <?php body_class(); ?>>s
    <section>
        <div class="container">
            <h2 class="text-center section-heading">All products</h2>
            <hr class="primary-hr">
            <?php $args = array('post_type' => 'Template_download', 'posts_per_page' => 16);
                 $all_cat = new WP_Query( $args ); ?>            
            <div class="row free-row">
                    <?php  while ( $all_cat->have_posts() ) : $all_cat->the_post(); ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 showcase">
                    <div class="shadow-box-it2"><img class="img-responsive tag" src="assets/img/free-template-icon-revised-with-words.png" width="100px">
                        <a href="#"><img class="img-responsive img-thumb" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="100%"></a>
                        <h4 class="text-uppercase text-center"><?php the_title(); ?></h4></div>
                    </div>
                <?php wp_reset_query(); ?>
                <?php endwhile; ?>
            </div>
            <hr>
            <?php ;?>
    </section>
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-auto text-center">
                    <h2 class="text-center section-heading">lets get in touch!</h2>
                    <hr class="primary-hr">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible! </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-4 col-md-4 ml-auto text-center"><a href="#" class="bottom-contact"><i class="fa fa-phone fa-3x sr-contact"></i></a>
                    <p> 123-456-6789 </p>
                </div>
                <div class="col-lg-4 col-md-4 ml-auto text-center"><a href="mailto:info@prodigi.co.ke." class="bottom-contact"><i class="fa fa-envelope-o fa-3x sr-contact"></i></a>
                    <p><a href="mailto:info@prodigi.co.ke." class="contact-text">info@prodigi.co.ke </a></p>
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>
        <div class="col-md-12 footer-ls">
            <div>
                <div class="col-lg-3 col-md-3">
                 <?php get_template_part('template-parts/wpbootstrapfooter-nav'); ?>
                </div>
                <div class="col-lg-3 col-md-3">
                 <?php get_template_part('template-parts/wpbootstrapfooter-nav'); ?>
                </div>
                <div class="col-lg-3 col-md-3">
                  <?php get_template_part('template-parts/wpbootstrapfooter-nav'); ?>
                </div>
                <div class="col-lg-3 col-md-3">
                  <?php get_template_part('template-parts/wpbootstrapfooter-nav'); ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="bottom-social-cons"><a href="#" class="socia-link2"><i class="fa fa-youtube"></i></a><a href="#" class="socia-link2"><i class="fa fa-instagram"></i></a><a href="#" class="socia-link2"><i class="fa fa-twitter"></i></a><a href="#" class="socia-link2"><i class="fa fa-facebook"></i></a>
                <a
                href="#" class="socia-link2"><i class="fa fa-pinterest-p"></i></a><a href="#" class="socia-link2"><i class="fa fa-rss"></i></a></div>
        </div>
    </footer>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>