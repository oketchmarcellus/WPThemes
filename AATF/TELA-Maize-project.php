<?php
/*
*Template Name: AATF Tela Maize Projects Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>
	<style>  
			.slide-h5{ color:#507536; font-size:24px; font-weight:700; }
			.slide-bg{ background:rgba(255,255,255,0.9); width:100%; padding:20px 25px; }
			.header-h2{ color:#507536; font-weight:bold; margin-bottom:0;  }
			.header-h2-b{ color:#AC832D; font-weight:bold;  }
			.header-h2-2{ color:#507536; font-weight:bold;  }
			.header-h3{ color:#507536; text-align:justify;  }
			.header-h3-2{ color:#fff; background:#efb41a; width:400px; padding:10px; margin-bottom:0;  }
			.header-h4{ color:#922E91; font-weight: bolder; border-left:4px solid #F3B71B; padding-left:4px; }
			.header-h5{ color:#507536; font-weight:bold;  }
			.header-h5-2{ color:#ac832d; font-weight:bold;  }
			.header-h6{ color:#507536; font-weight:bold;  }
			.main-header-p{ color:#f3b71b; font-weight:900;  }
			.header-p{ color:#507536;  }
			.a-link{ font-size:12px; }
			hr { margin-top: 1px; margin-bottom: 15px; background: #dddddd; }
			h6 { font-weight:bold; margin-top:10px; }
			.pg { margin:2px 1px;  } 
			.pg-img { width:100%; margin-bottom:-90px; z-index:100;  } 
			.pg-text { width:100%; background:#c5e0b1; padding-top:100px; padding-left:35px; padding-right:35px; min-height:420px;  } 
			.counter { padding: 5px;  background:#fff; }
			.counter-pg h3{ font-weight:bold; font-size: 36px; }
			.counter-pg { margin:2px 7px; padding:10px 15px; text-align:center;	  }
			.counter-pg p { text-align:center; margin-bottom:0px; line-height:20px; font-size:14px;	  }
			.counter-area-inner { color: #000; }
			.p { background:#f1f2f2; padding:15px 10px; margin-top:10px; }
			.p2 { background:#922E91; padding:15px 10px; color:#FFFFFF; }
			p{ text-align:justify; }
			.benefits h6 { color:#ede70e; margin-bottom:5px; }
			.benefits p { color:#fff; font-size:14px; line-height:20px; margin-bottom:3px; }
			.side h5{ margin-bottom:0; }
			.side .cr-btn2{ margin-bottom:0; } 
	</style>
	<!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- Feature Area -->
            <section id="feature-area" class="feature-area section-padding-xs bg-grey2">
                <div class="container">
                    <div class="row justify-content-center">

                        <!-- Signle Service -->
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12" style="padding-right:30px;">
							<div class="section-title" style="margin-bottom:20px;">
							  	<h2 style="color:#AC842D; margin-bottom:0;">ABOUT THE PROJECT</h2> 
							</div>
								 
							 <p style="text-align:justify;">Maize is the most widely grown food crop in Africa with more than 300 million people
depending on it as their main food source. Its production is however severely affected by
drought and insect-pests, which negatively impact yields leading to crop failure, hunger and
poverty. Identifying ways to mitigate drought risk, stabilize yields, and encourage small-scale
farmers to adopt best management practices is fundamental to realizing food security and
improved livelihoods for the continent.</p>
<p style="text-align:justify;">
Through the support of the Bill and Melinda Gates Foundation and the United States Agency
for International Development, AATF is leading the TELA Maize Project, a public-private
partnership that is addressing the problem of drought in maize and destructive insects
specifically stemborers and fall armyworm. Stemborers reduce maize production in several
countries in Africa; and in Kenya alone, this loss averages 13% or 400,000 tonnes per year
equivalent to USD 90 million. Similarly, projections estimate that the Fall Armyworm could
destroy up to 20 million metric tons of maize in Africa each year, enough to feed 100 million
people. The TELA Project is working towards commercialisation of transgenic drought-tolerant
and insect-protected maize varieties to enhance food security in Sub-Saharan Africa.</p>
<p style="text-align:justify;">
The word ‘TELA’ is derived from the Latin word TUTELA which means ‘Protection’.The TELA
Maize Project builds on progress made from a decade of excellent breeding work under the
Water Efficient Maize for Africa (WEMA) Project. The TELA Maize Project is currently
implemented in 7 countries – Ethiopia, Kenya, Mozambique, Nigeria, South Africa, Tanzania and
Uganda.
</p>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12 side">
                             <h4 class="header-h4"> AATF PROJECTS </h4>
							 <h5 class="header-h5">TELA Maize</h5>
							 <a href="TELA-Maize-project.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">TAAT Maize</h5>
							 <a href="TAAT-Maize-Compact.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">TAAT Policy Enabler </h5>
							  <a href="TAAT-Policy-Enabler.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">Cowpea Project</h5>
							  <a href="Pod-Borer-Resistant-Maruca-Cowpea.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">MLN Project </h5>
							  <a href="MLN-Diagnostics-and-Management-Project.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">CAMAP Project </h5>
							  <a href="Cassava-Mechanisation-and-Agroprocessing-Project-CAMAP.php" class="cr-btn2">LEARN MORE</a> 
							 <hr> 

                        </div>
                        <!--// Signle Service -->

                         

                    </div>
                </div>
            </section>
            <!--// Feature Area -->
			
			<!-- Counter Area -->
                <div class="counter-area section-padding-xs">
                    <div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-12 offset-0"> 
								<div class="section-title text-center" style="margin-bottom:0px;">
									<h2 style="color:#AC842D; margin-bottom:0;">OUR CONTRIBUTION</h2> 
								</div>
							</div>
						</div>
                        <div class="counter-area-inner" style="padding:20px 0;">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-icon-1.jpg" >
										</div> 
										<div class="col-md-12 col-sm-12 col-xs-12"><p style="color:#333333;">Increase maize productivity in Africa whilst creating employment opportunities for women and youth.</p>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-icon-2.jpg" >
										</div> 
										<div class="col-md-12 col-sm-12 col-xs-12"><p style="color:#333333;">Increasing uptake and use of proven high-yielding climate-smart maize technologies by smallholder farmers in Sub-Saharan Africa. </p>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-icon-3.jpg" >
										</div> 
										<div class="col-md-12 col-sm-12 col-xs-12"><p style="color:#333333;">“We will be judged by the Commitment and Actions we take today to enable farmers access seeds and markets for improved livelihoods” – Dr. Martin Fregene – AfDB Agriculture Director </p>
										</div>
									</div>
									
                                </div> 
                            </div>
                        </div> <br><br> <hr>
                    </div>
                </div>
                <!--// Counter Area --> 
				
			
			<!-- Pricing Area -->
            <section id="pricing-area" class="pricing-area bg-white ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12 offset-0">
                            <div class=" text-center"> 
                                <div class="section-title text-center" style="margin-bottom:20px;">
									<h2 style="color:#AC842D; margin-bottom:0;">PROJECT BENEFIT</h2> 
								</div> 
                            </div>
                        </div>
                    </div>
				</div>
				<div style="width:88%; margin:auto;">
                    <div class="row justify-content-center">

                        <!-- Single Price box -->
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/AATF-our-project-pages-icon-FARMERS.png" width="180" >
								</div>
								<div class="pg-text">
									<h4> FARMERS</h4>
									<p>Smallholder farmers using TAAT Maize Compact will increase maize roductivity by at least 30%. This goes a long way in enhancing the efforts of food security in Africa. </p> 
								</div>
							</div>
                        </div>
                        <!--// Single Price box -->

                        <!-- Single Price box -->
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/AATF-our-project-pages-icon-BUSINESS.png" width="180" >
								</div>
								<div class="pg-text">
									<h4>  BUSINESSES</h4>
							 		<p>Farmers in commercial agriculture will enhance income by at least 20%. The extra income will improve the quality of life especially commercial farmers in rural areas. </p>
								</div>
							</div>
                        </div>
                        <!--// Single Price box -->

                        <!-- Single Price box -->
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/AATF-our-project-pages-icon-SOCIETY.png" width="180" >
								</div>
								<div class="pg-text">
									<h4> SOCIETY </h4>
							 		<p>With the enhanced commercialization prospects of TAAT Maize Compact, women and the youth will get employment by participating along the maize value chain. </p>
								</div>
							</div>
								
                        </div>
                        <!--// Single Price box -->

                    </div>
                </div>
            </section>
            <!--// Pricing Area -->
			
			<!-- Counter Area -->
                <div class="counter-area section-padding-xs">
                    <div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-12 offset-0">
								<div class="section-title text-center" style="margin-bottom:20px;">
									<h2 style="color:#AC842D; margin-bottom:0;">PROJECT HIGHLIGHTS</h2> 
								</div> 
							</div>
						</div>
                        <div class="counter-area-inner">
                            <div class="row no-gutters align-items-center">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    
									<div class="row counter-pg"> 
										<div class="col-md-12 col-sm-12">
											<img src="<?php echo get_template_directory_uri(); ?>/images/projects/our-project-pages-icons-1.png" width="60" >
										</div>
										<div class="col-md-12 col-sm-12">
									
											<div class="text-center" style="border:none;">
												<h3 class="counter-active" >5</h3> 
											</div>
										</div>
										 
									</div>
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<p>Number of TELA varieties released to date</p>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12">
											<img src="<?php echo get_template_directory_uri(); ?>/images/projects/our-project-pages-icons-2.png" width="60" >
										</div>
										<div class="col-md-12 col-sm-12">
									
											<div class="text-center">
												<h3 ><span class="counter-active">48</span>+</h3> 
											</div>
										</div>
										 
									</div>
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<p> permits approvals secured to facilitate testing and environmental release of transgenic products </p> 
											  
										</div>
									</div>
									
                                </div>
								
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12">
											<img src="<?php echo get_template_directory_uri(); ?>/images/projects/our-project-pages-icons-3.png" width="60" >
										</div>
										<div class="col-md-12 col-sm-12">
									
											<div class="text-center">
												<h3 ><span class="counter-active">50</span>%</h3>  
											</div>
										</div>
										 
									</div>
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<p>yield advantage of TELA varieties during trials relative to non-transgenic varieties due to insect protection</p>
										</div>
									</div>
									
                                </div>
								
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12">
											<img src="<?php echo get_template_directory_uri(); ?>/images/projects/our-project-pages-icons-4.png" width="60" >
										</div>
										<div class="col-md-12 col-sm-12">
									
											<div class="text-center">
												<h3 class="counter-active" >5</h3> 
											</div>
										</div>
										 
									</div>
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<p>Number of households to benefit from 113 tons of TELA maize in South Africa</p>
										</div>
									</div>
									
                                </div>
								
								 
                            </div>
                        </div>  
                    </div>
                </div>
                <!--// Counter Area -->  
			
			 <!-- Pricing Area -->
            <section class="pricing-area bg-grey2"  style="margin-bottom:30px; padding:30px;">
                <div class="container"> 
                     <div class="row text-center"> 
					 	<div class="col-lg-12 col-md-12"> 
							<div class="section-title text-center" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">FIELD & IMPACT STORIES</h2> 
							</div>
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
            </section>
            <!--// Pricing Area -->
			
			<section style="margin-bottom:30px; margin-top:40px; background:#e1eed6; padding:25px 10px;">
				<div class="container">
					<div class="row no-gutters align-items-center">
						<div class="col-lg-9 col-md-9 col-12 ">
                             <h3 class="header-h3" style="margin-bottom:0;"> Need more info on this?</h3>
							 <h3 class="header-h2" style="margin-bottom:0;"> Get in touch with us  for more information.</h3>
							 <h5>Fill out the contact request form & we'll get back to you.</h5>

                    	</div> 
						<div class="col-lg-3 col-md-3 col-12 ">
							<a href="contact-us.php"> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/contact-button.png" width="180" > </a>
						</div>
					</div>
				</div>
			</section>
			
			<section id="portfoio-area" class="portfolio-area bg-white section-padding-xs">
				<div class="container">
					<div class="row text-center">
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0"> 
                            <div class="section-title text-center" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">PROJECT PARTNERS</h2> 
							</div>
                             
                        </div>
                    </div> 
				</div>
				<div class="container">
					<div class="row text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-AATF.jpg" width="150" >
						
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-ARC.jpg" width="150">
						
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-ARCN.jpg" width="150">
						
							<a href="https://www.bayer.com/en/"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-BAYER.jpg" width="150"></a>
						
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-CIMMYT.jpg" width="150"></a>
						
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-COSTECH.jpg" width="150">
						
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-EAIR.jpg" width="150">
						
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-IIAM.jpg" width="150"> 
							
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-KALRO.jpg" width="150">
						
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-NARO.jpg" width="150">
						
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/AATF-project-logos-TEAL-TARI.jpg" width="150">
						</div>
					</div> 
				</div>
			</section>
			
			<!-- Pricing Area -->
            <section class="pricing-area bg-grey2"  style="margin-bottom:30px; padding:30px;">
                <div class="container"> 
                     <div class="row text-center"> 
					 	<div class="col-lg-12 col-md-12"> 
							<div class="section-title text-center" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">INFORMATION AND RESOURCES</h2> 
							</div>
						</div>
					</div>
					 <div class="row justify-content-center service-slider-active cr-slider-dots-1"> 
                            
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> TELA Maize Project: General FAQs </h6> 
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> TELA Maize Technology: FAQs for seed companies </h6> 
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> TELA Product Launch Collaboration Agreement (PLCA) Summary. </h6> 
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> Performance and yield stability of maize hybrids in stress-prone environments in eastern Africa </h6> 
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> On-farm Performance and Farmers’ Perceptions of DroughtTEGO-Climate-Smart Maize Hybrids in Kenya </h6> 
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> ADOPTION OF CLIMATE-SMART DROUGHTTEGO® VARIETIES IN KENYA </h6> 
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> Impact of DroughtTEGO® hybrid maize variety on agricultural productivity and poverty alleviation in Kenya </h6> 
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> Duration analysis of DroughtTEGO® hybrid maize adoption in Kenya </h6> 
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
                         

                         

                    </div>
                </div>
            </section>
            <!--// Pricing Area -->
			
			<!-- Pricing Area -->
            <section class="pricing-area bg-grey2"  style="margin-bottom:0px; padding:30px;">
                <div class="container"> 
			
					<div class="row" style="margin-bottom:20px;">
						<div class="col-lg-4 col-md-4">
								<h4 class="p"> PROJECT MANAGEMENT </h4>
							 <div class="row" style="margin-bottom:20px;">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/tela-contact.png" style="border-radius:50%;"> </div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> <h5 class="header-h5">Sylvester Oikeh</h5>
									<p class="header-p">Project Manager</p>
									<h5 class="header-h5-2"> S.Oikeh@aatf-africa.org</h5>
								</div>
							</div>
								 
						</div>
						<div class="col-lg-8 col-md-8">
							
							<h4 class="p"> PROJECT INVESTORS </h4>
							 <div class="row" style="margin-bottom:20px;"> 
							 	<div class="col-lg-6 col-md-6"> <a href="https://www.gatesfoundation.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/BMGF-logo_red_300dpi_2100x420.jpg" width="260" ></a> <p>Bill and Melinda Gates Foundation supports the TELA, Open Forum on Agricultural Biotechnology in Africa, QBS, the Hybrid Rice: Breeding by Design projects and has contributed to integrating IT into CAMAP. The Foundation previously supported the WEMA project and also provided core funding for organizational operational support.</p>
								</div>
								<div class="col-lg-6 col-md-6"> <a href="https://www.usaid.gov/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/tela-maize/usaid-logo-1.jpg" width="260" ></a> <p>The United States Agency for International Development (USAID), one of the original funders of AATF, supports the Nitrogen-Use Efficient, Water-Use Efficient, Salt-Tolerant Rice Project; Pod-Borer Resistant Cowpea Project; and the Water Efficient Maize for Africa project. USAID supports the MLN Diagnostics and Management Project through CIMMYT. USAID also supported the Striga Control in Maize project as part of the US government’s Feed the Future initiative.</p>
								</div>
							</div>
                	</div>
				</div>
            </section>
            <!--// Pricing Area -->
			
			<!-- Call To Action Area -->
			<?php get_template_part('template-parts/call-to-action'); ?>
			<!--// Call To Action Area -->
		</main>
</div>
<!--// Page Content -->
<?php get_footer(); ?>