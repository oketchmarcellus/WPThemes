<?php
/*
*Template Name: AATF Contact Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>
<!-- Add your site or application content here -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

            $args = array('post_type' => 'Team_members', 'posts_per_page' => 100, 'order' => 'ASC',);
            $count = 0;
            $aatf_team= new WP_Query( $args );?>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- Contact Us Area -->
            <div class="pg-contact-us-area">

                <!-- Contact Page Form and Map -->
                <div class="pg-contact-form-map-wrapper bg-white section-padding-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="pg-contact-form pg-contact-form-2 mr-0 mr-lg-3">
                                    <div class="small-title">
                                        <h4><b>Send us a message</b></h4> 
                                    </div>
                                    <form id="contact-form" action="mail2.php" method="post">
                                        <div class="row no-gutters">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="single-input">
                                                    <input type="text" name="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-input">
                                                    <input type="email" name="email" placeholder="Your E-mail">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-input">
                                                    <input type="text" name="subject" placeholder="Your Phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <textarea name="message" cols="10" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <button class="cr-btn cr-btn-round" type="submit" style="background:#F3B71B; padding:12px 20px;">
                                                        <span>Send Message</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="single-quick-contact "> 
                                    <h5 style="color:#ac832d;">KENYA (HEAD) OFFICE</h5>
                                    <p>
                                        ILRI Campus, Naivasha Road<br>
										P.O. Box 30709-00100<br>
										Nairobi, Kenya<br>
										Telephone: +254-20 422 3700<br>
										Via US – Tel: 1 650 833 666

                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="single-quick-contact "> 
                                    <h5 style="color:#ac832d;">NIGERIA OFFICE</h5>
                                    <p>
                                        4th Floor, Bank of Agriculture Building, <br>
										162 Independence Ave <br>
										Central Business District Abuja, Nigeria <br>
										Telephone: +234 9 4605480

                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="single-quick-contact "> 
                                    <h5 style="color:#ac832d;">BUSINESS HOURS </h5>
                                    <p>
										Mon - Thur: 8.00 am - 5.00 pm <br>
										Friday: 8.00 am - 1.00 pm <br>
										Email: aatf@aatf-africa.org
									</p>
                                </div>
                            </div>
                        </div>
								
								
								
								
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Contact Page Form and Map -->
				
				<!-- Contact Page Details -->
                <div class="pg-contact-details bg-white section-padding-xs mobile-mt-0" style="margin-bottom:0; padding:0;">
                    <div class="pg-contact-map-wrapper"> 
                                    <div class="contact-map">
                                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1RzmLEPJ4OCKjw9DAr0mv-RMla6YUFl6c" width="100%" height="520"></iframe>
                                    </div>
                                </div>
                </div>
                <!--// Contact Page Details -->

                

            </div>	
			<!-- Call To Action Area -->
            <?php get_template_part('template-parts/call-to-action'); ?>
      <!--// Call To Action Area -->

        </main>
        <!--// Page Content -->
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