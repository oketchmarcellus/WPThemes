
<?php
/*
*Template Name: Default Page Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- Contact Us Area -->
            <div class="pg-contact-us-area">

                <!-- Contact Page Form and Map -->
                <div class="pg-contact-form-map-wrapper section-padding-xs" style="background:#e4f1d9;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"> </div>

							<div class="col-md-10 text-center">
                                 <h2 style="color:#AC842D;"><b><?php the_title();?></b></h2>
								 <?php echo get_the_content(); ?>
                            </div>
							<div class="col-md-1"> </div>
                             
                        </div>
                    </div>
                </div>
                <!--// Contact Page Form and Map -->
              
            </div>
            <!-- Call To Action Area -->
            <?php get_template_part('template-parts/call-to-action'); ?>
            <!--// Call To Action Area -->
        </main>
        <!--// Page Content -->

        <!-- Footer Area -->

        <!-- Form Message -->
        <div class="cr-contact-message-modal">
            <p class="form-messege"></p>
        </div>
        <!--// Form Message -->

    </div>
    <!-- //Main wrapper -->
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>