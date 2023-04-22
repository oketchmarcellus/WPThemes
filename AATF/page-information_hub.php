<?php
/*
*Template Name: AAT Information Hub Template
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

            <!-- COVID Area -->
            <section class="infohub-covid">
                <div class="container">  
					<div class="row"> 
						<div class="col-xl-12 col-lg-12 col-12 offset-0"> 
							<h3 style="color:#FFFFFF">COVID-19 UPDATES</h3>
							<h3 style="color:#000000; margin-bottom:2px;"><b>Food security under COVID-19</b></h3>
							<h4 style="color:#000000;"><b>AATF working towards food security under COVID-19 pandemic</b></h4>
							<a href="AATF-in-Realignment-With-COVID-19-Management.php" class="cr-btn"> <span>Read More</span> </a> 
							 
						</div> 
					</div>
					 
                </div>
            </section>
            <!--// COVID Area -->  


			<!-- GALLERY Area -->
            <section class="portfolio-area section-padding-xs bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12 offset-0">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">AATF GALLERY</h2>
								<h4>Highlights</h4>
							</div> 
                        </div>
						<div class="col-xl-6 col-lg-6 col-6">
							<a href="gallery.php" class="cr-btn" style="float:right;"> <span>VIEW MORE</span> </a>
						</div>
                    </div>
                

                <div class="portfolio-wrap">

                    <!-- Portfolios -->
                    <div class="row no-gutters portfolios portfolios-slider-active cr-slider-navigation-2 portfolios-zoom-button-holder">

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/cassava1.jpg" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                         
                                        <a href="images/gallery/cassava1.jpg" class="portfolio-zoom-trigger">
                                                <i class="flaticon-interface"></i> <br>
												Cassava
                                            </a>
											<h3> 
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio -->

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-creative">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/aflatoxin1.jpg" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="images/gallery/aflatoxin1.jpg" class="portfolio-zoom-trigger">
                                                <i class="flaticon-interface"></i> <br>
												Aflatoxin
                                            </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio -->

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/banana1.jpg" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="images/gallery/banana1.jpg" class="portfolio-zoom-trigger">
                                                <i class="flaticon-interface"></i> <br>
												Banana
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio -->

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-creative pfolio-filter-design">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/corporate1.jpg" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="images/gallery/corporate1.jpg" class="portfolio-zoom-trigger">
                                                <i class="flaticon-interface"></i><br>
												corporate
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio --> 

                    </div>
                    <!--// Portfolios -->

                </div>
				</div>
            </section>
            <!--// GALLERY Area --> 
			
			<!-- VIDEOS Area -->
            <section class="portfolio-area section-padding-xs bg-white" style="padding-top:0;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-6 offset-0">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">AATF VIDEOS</h2>
								<h4>Highlights</h4>
							</div> 
                        </div>
						<div class="col-xl-6 col-lg-6 col-6">
							<a href="gallery.php" class="cr-btn" style="float:right;"> <span>VIEW MORE</span> </a>
						</div>
                    </div>
                

                <div class="portfolio-wrap">

                    <!-- Portfolios -->
                    <div class="row no-gutters portfolios portfolios-slider-active cr-slider-navigation-2 portfolios-zoom-button-holder">

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/raPT7WKKvnk?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>
                                </div> 
                            </div>
                        
                        
                        </div>
                        <!--// Single Portfolio -->

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/dqM1WF4y8oQ?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>
                                </div> 
                            </div>
							
                        </div>
                        <!--// Single Portfolio -->
						
						<!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/sYDZhewuELE?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>
                                </div> 
                            </div>
							
                        </div>
                        <!--// Single Portfolio --> 

                    </div>
                    <!--// Portfolios -->

                </div>
				</div>
            </section>
            <!--// VIDEOS Area --> 
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
							<a href="AATF-TV.php" class="cr-btn" style="float:right;"> <span>VIEW ALL AATF TV</span> </a>
						</div>
                    </div>
					
					<div class="row services-grid">

                        <!-- Signle Service -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/g3Ff1pJlfDs?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>
                                </div>
                                <div class="service-content-2">
                                    <h4 style="color:#000000;"> AATF WEBINAR  </h4>
                                    <h5 style="color:#000000;">Transforming African Agriculture Through Mechanization For Productivity And Competitiveness</h5>
									<h6 style="color:#000000;">Sep 28, 2020 </h6>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/j3ua6fQUlsA?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>
                                </div>
                                <div class="service-content-2">
                                    <h4 style="color:#000000;"> AATF WEBINAR  </h4>
                                    <h5 style="color:#000000;">Promotion of Agricultural Technologies & Innovations for Agri-Business Resilience In Africa</h5>
									<h6 style="color:#000000;">Jul 27, 2020</h6>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                         

                    </div>
                </div>
            </section>
            <!--// TV Area -->
			<hr>
			<!-- News Area -->
            <section class="services-area section-padding-xs bg-white" style="margin-top:0; padding-top:20px;"> 
                <div class="container"> 
				
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-6">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">NEWS & UPDATES</h2> 
							</div>  
                        </div>
						<div class="col-xl-4 col-lg-4 col-6">
							<a href="news-&-updates.php" class="cr-btn" style="float:right;"> <span>VIEW ALL </span> </a>
						</div>
                    </div>
					
					<div class="row justify-content-center service-slider-active cr-slider-dots-1">

                        <!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<a href="Farmer-Mumba-forsees-lucrative-cassava-production-in-Zambia-with-CAMAP.php"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/stories/AATF-Field-Stories---images-20.11.2020-Farmer-Mumba-forsees-lucrative-cassava-production-in-Zambia-with.jpg" alt="Service Thumb"></a>
									 
								</div>
								<div class="blog-content"> 
									<a href="Farmer-Mumba-forsees-lucrative-cassava-production-in-Zambia-with-CAMAP.php"><h5>Farmer Mumba forsees lucrative cassava production in Zambia with CAMAP</h5> </a> 
									<a href="Farmer-Mumba-forsees-lucrative-cassava-production-in-Zambia-with-CAMAP.php" target="_blank" class="cr-readmore">Follow this story </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published: 1st May 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<a href="Nigerian-farmer-mentors-youth-on-cassava-farming.php"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/stories/AATF-Field-Stories---images-20.11.2020-Nigerian-farmer-mentors-youth-on-cassava-farming-–-Pastor-Felix-.jpg" alt="Service Thumb"></a>
									 
								</div>
								<div class="blog-content"> 
									<a href="Nigerian-farmer-mentors-youth-on-cassava-farming.php"><h5>Nigerian farmer mentors youth on cassava farming – Pastor Felix Afolabi</h5></a>  
                                    <a href="Nigerian-farmer-mentors-youth-on-cassava-farming.php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published: 1st May 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<a href="Removing-drudgery-from-cassava-farming.php"> <img src="<?php echo get_template_directory_uri(); ?>/images/projects/stories/AATF-Field-Stories---images-20.11.2020-Removing-drudgery-from-cassava-farming-–-success-for-farmer-Step.jpg" alt="Service Thumb"></a>
									 
								</div>
								<div class="blog-content"> 
									<a href="Removing-drudgery-from-cassava-farming.php"><h5>Removing drudgery from cassava farming – success for farmer Stephania Kunda in Zambia</h5></a>
                                    <a href="Removing-drudgery-from-cassava-farming.php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published: 1st May 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<a href="Transforming-the-cassava-subsector-in-Zambia-with-mechanisation.php"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/stories/AATF-Field-Stories---images-20.11.2020-Transforming-the-cassava-subsector-in-Zambia-with-mechanisation.jpg" alt="Service Thumb"></a>
									 
								</div>
								<div class="blog-content"> 
									<a href="Transforming-the-cassava-subsector-in-Zambia-with-mechanisation.php"><h5>Transforming the cassava subsector in Zambia with mechanisation </h5></a>
                                    <a href="Transforming-the-cassava-subsector-in-Zambia-with-mechanisation.php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published: 1st May 2020  </div>
							</article>
						</div>
						<!--// Single Blog --> 

                    </div>				
					 

                         

                    </div>
                </div>
            </section>
            <!--// Services Area --> 
			<hr> 
			
			<!-- Media Area -->
			<section id="portfoio-area" class="portfolio-area section-padding-xs bg-white" style="padding-top:20px;">
				<div class="container">
					<div class="row">
                        <div class="col-xl-12  col-lg-12 col-12 offset-0">
                            <div class="section-title">
                                <h2 style="color:#AC842D;">MEDIA</h2> 
                            </div>
                        </div>
                    </div> 
				</div>

				<div class="container">
				<div class="portfolio-wrap"> 

					<!-- Portfolios -->
					<div class="row no-gutters portfolios portfolios-style-1">

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-Design-MEDIA---Upcoming-Events-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="#"> Upcoming Events <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	 

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-Design-MEDIA---Newsletters-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="media.php#newsletters"> Newsletters <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	 

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-Design-MEDIA---press-releases-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="media.php#press"> Press Releases <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	 

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-Design-MEDIA---AATF-in-the-media-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="media.php"> AATF in the Media <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	 

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-AATF-TV-Webinar-sample-image-1.png" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="AATF-TV.php"> AATF TV <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	
						
					</div>
				</div>
				</div>
			</section>
			<hr>
			<!-- RESOURCES Area -->
			<section id="portfoio-area" class="portfolio-area section-padding-xs bg-white" style="padding-top:20px;">
				<div class="container">
					<div class="row">
                        <div class="col-xl-12  col-lg-12 col-12 offset-0">
                            <div class="section-title">
                                <h2 style="color:#AC842D;">RESOURCES</h2> 
                            </div>
                        </div>
                    </div> 
				</div>

				<div class="container">
				<div class="portfolio-wrap"> 

					<!-- Portfolios -->
					<div class="row no-gutters portfolios portfolios-style-1">

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-Design-MEDIA---Upcoming-Events-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="resources.php#publications"> Publications <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	 

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-RESOURCES---Blog-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="news-&-updates.php">Blog <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	 

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-RESOURCES---FAQs-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="FAQs.php"> FAQs <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	 

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-RESOURCES---Project-Briefs-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="resources.php#briefs"> Project Briefs <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	 

						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-RESOURCES---IP-&-Biosafety-Laws-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="resources.php"> IP & Biosafety Laws <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	
						
						<!-- Single Portfolio -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
							<div class="portfolio">
								<div class="portfoilo-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/AATF---Information-Hub-landing-Page-RESOURCES---MLND---SOPs-image.jpg" alt="portfolio thumb"> 
									<div class="centered-v">
									<div class="centered">
										<h4>
											<a href="resources.php#mlnd"> MLND - SOPs <br>  </a>
										</h4>
									</div>
									</div>  
								</div>
							</div>
						</div>
						<!--// Single Portfolio -->	
						
					</div>
				</div>
				</div>
			</section>
			
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
        <iframe width="100%" height="320" src="/https://www.youtube.com/embed/eQd9TE5EnhQ?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>  
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