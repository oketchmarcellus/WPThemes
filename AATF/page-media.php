<?php
/*
*Template Name: AATF Media Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>
<style>  
			.header-h2{ color:#507536; font-weight:bold; margin-bottom:0;  }
			.header-h2-b{ color:#AC832D; font-weight:bold;  }
			.header-h2-2{ color:#507536; font-weight:bold;  }
			.service-content-2 h4{ color:#AC832D; }
			.service-content-n{ background:#FFFFFF; color:#000000; padding:10px 30px; }
			.service-content-n h5{ color:#000000; }
			.service-content-n a{ color:#507536; }
			.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: #a9802e;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  color:#FFFFFF; font-size:24px; font-weight:bold;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #517537;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: none;
  border-top: none; width:100%;
}
	</style>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!-- Page Content -->
        <main class="page-content">  

			<!-- UPCOMING Area -->
            <section class="services-area section-padding-xs bg-white" style=" padding-top:20px;"> 
                <div class="container"> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;"><?php the_title();?></h2> 
							</div> 
                        </div> 
                    </div>
					
					<div class="row services-grid">

                        <div class="col-lg-2 col-md-2 col-12"> </div>
						<!-- Signle Service -->
                        <div class="col-lg-8 col-md-8 col-12">
                            <!--<div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/calender.JPG" alt="Service Thumb">
                                </div> 
                            </div>-->
                        </div>
                        <!--// Signle Service --> 
						<div class="col-lg-2 col-md-2 col-12"> </div>

                         

                    </div>
                </div>
            </section>
            <!--// UPCOMING EVENTS Area -->
			
			<!-- NEWSLETTERS Area -->
            <section id="newsletters" class="services-area section-padding-xs bg-grey2" style=" padding-top:20px;"> 
                <div class="container"> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">NEWSLETTERS</h2> 
							</div> 
                        </div> 
                    </div>
					
					<div class="row services-grid">

                        <!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Newsletters(1).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service --> 
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Newsletters(2).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Newsletters(3).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Newsletters(4).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->

                         

                    </div>
                </div>
            </section>
            <!--// NEWSLETTERS Area -->
			 
			<!-- PRESS Area -->
            <section id="press" class="services-area section-padding-xs bg-grey2" style=" padding-top:20px;"> 
                <div class="container"> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">PRESS RELEASES</h2> 
							</div> 
                        </div> 
                    </div>
					
					<div class="row services-grid">

                        <!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Press Releases(1).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service --> 
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Press Releases(2).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Press Releases(3).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Press Releases(4).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->

                         

                    </div>
                </div>
            </section>
            <!--// NEWSLETTERS Area -->
			
			<!-- PRESS Area -->
            <section class="services-area section-padding-xs bg-white" style=" padding-top:20px;"> 
                <div class="container"> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">AATF NEWS & EVENTS</h2> 
							</div> 
                        </div> 
                    </div>
					
					<div class="row services-grid service-slider-active cr-slider-dots-1">

                        <!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/AATF-IMPACT-STORIES---POST-IMAGE-Nigerian-farmer-mentors-youth-on-cassava-farming-–-Pastor-Felix-Afolabi.png" alt="Service Thumb">
                                </div> 
								<div class="service-content-n">
                                    <h5> Nigerian farmer mentors youth on cassava farming – Pastor Felix Afolabi 
                                    </h5> 
									<a href="https://www.aatf-africa.org/aatf_fieldstories/nigerian-farmer-mentors-youth-on-cassava-farming-pastor-felix-afolabi/"> Read More</a>
                                     
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service --> 
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/AATF-IMPACT-STORIES---POST-IMAGES-Removing-drudgery-from-cassava-farming-–-success-for-farmer-Stephania-Kunda-in-Zambia.png" alt="Service Thumb">
                                </div> 
								<div class="service-content-n">
                                    <h5> Removing drudgery from cassava farming – success for farmer Stephania Kunda in Zambia 
                                    </h5> 
									<a href="https://www.aatf-africa.org/aatf_fieldstories/removing-drudgery-from-cassava-farming-success-for-farmer-stephania-kunda-in-zambia/"> Read More</a>
                                     
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/AATF-IMPACT-STORIES---POST-Images-.png" alt="Service Thumb">
                                </div> 
								<div class="service-content-n">
                                    <h5> Farmer Mumba forsees lucrative cassava production in Zambia with CAMAP 
                                    </h5> 
									<a href="https://www.aatf-africa.org/aatf_fieldstories/farmer-mumba-forsees-lucrative-cassava-production-in-zambia-with-camap/"> Read More</a>
                                     
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/AATF-IMPACT-STORIES---POST-IMAGE-Transforming-the-cassava-subsector-in-Zambia-with-mechanisation.png" alt="Service Thumb">
                                </div> 
								<div class="service-content-n">
                                    <h5> Transforming the cassava subsector in Zambia with mechanisation 
                                    </h5> 
									<a href="https://www.aatf-africa.org/aatf_fieldstories/transforming-the-cassava-subsector-in-zambia-with-mechanisation/"> Read More</a>
                                     
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service --> 

                         

                    </div>
                </div>
            </section>
            <!--// NEWSLETTERS Area -->
			
			<!-- PRESS Area -->
            <section class="services-area section-padding-xs bg-white" style=" padding-top:20px;"> 
                <div class="container"> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">AATF IN THE MEDIA</h2> 
							</div> 
                        </div> 
                    </div>
					
					<div class="row services-grid service-slider-active cr-slider-dots-1">

                        <!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/media/AATF-In-The-Media-images-ALLAFRICA.jpg" alt="Service Thumb">
                                </div>  
                            </div>
                        </div>
                        <!--// Signle Service --> 
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/media/AATF-In-The-Media-images-BREAKING.jpg" alt="Service Thumb">
                                </div>  
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/media/AATF-In-The-Media-images-BUSINESS-GHANA.jpg" alt="Service Thumb">
                                </div>  
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/media/AATF-In-The-Media-images-CORNELL.jpg" alt="Service Thumb">
                                </div>  
                            </div>
                        </div>
                        <!--// Signle Service --> 
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/media/AATF-In-The-Media-images-DAILY-TRUST.jpg" alt="Service Thumb">
                                </div>  
                            </div>
                        </div>
                        <!--// Signle Service --> 

                         

                    </div>
                </div>
            </section>
            <!--// NEWSLETTERS Area -->
			<hr>
			<!-- AATF TV Area -->
            <section class="services-area section-padding-xs bg-white" style="margin-top:0; padding-top:20px;"> 
                <div class="container" style="margin-top:0;"> 
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-6">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">AATF TV</h2> 
							</div> 
                        </div>
						<div class="col-xl-6 col-lg-6 col-6">
							<a href="#" class="cr-btn" style="float:right;"> <span>VIEW ALL AATF TV</span> </a>
						</div>
                    </div>
					
					<div class="row services-grid">

                        <!-- Signle Service -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-AATF-TV-Webinar-sample-image-1.png" alt="Service Thumb">
                                </div>
                                <div class="service-content-2">
                                    <h4 style="color:#000000;"> AATF WEBINAR  </h4>
                                    <h5 style="color:#000000;">AATF continues to realign its operation to COVID-19 management protocols.</h5>
									<h6 style="color:#000000;">13th August 2020</h6>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-AATF-TV-Webinar-sample-image-2.png" alt="Service Thumb">
                                </div>
                                <div class="service-content-2">
                                    <h4 style="color:#000000;"> AATF WEBINAR  </h4>
                                    <h5 style="color:#000000;">AATF continues to realign its operation to COVID-19 management protocols.</h5>
									<h6 style="color:#000000;">13th August 2020</h6>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                         

                    </div>
                </div>
            </section>
            <!--// TV Area -->
			
			<!-- Call To Action Area -->
            <?php get_template_part('template-parts/call-to-action'); ?>
      <!--// Call To Action Area -->

        </main>
        <!--// Page Content -->

        <!-- Footer Area -->
        <?php include_once 'footer.php'; ?>
        <!-- //Footer Area -->

        <!-- Form Message -->
        <div class="cr-contact-message-modal">
            <p class="form-messege"></p>
        </div>
        <!--// Form Message -->

    </div>
    <!-- //Main wrapper -->
	
	<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--h5 class="modal-title" id="exampleModalLongTitle">Video</h5-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="320" src="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/embed/eQd9TE5EnhQ?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>  
      </div>
      <!--div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div-->
    </div>
  </div>
</div>
<!-- end modal -->


    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!-- //Main wrapper -->
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>