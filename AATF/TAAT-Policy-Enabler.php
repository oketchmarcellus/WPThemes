<?php
/*
*Template Name: AATF TAAT Policy Enabler Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
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
        <!-- Page Content -->
        <main class="page-content">

            <!-- Feature Area -->
            <section id="feature-area" class="feature-area section-padding-xs bg-white">
                <div class="container">
                    <div class="row justify-content-center">

                        <!-- Signle Service -->
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12" style="padding-right:30px;">
							<div class="section-title" style="margin-bottom:20px;">
							  	<h2 style="color:#AC842D; margin-bottom:0;">ABOUT THE PROJECT</h2> 
							</div>
							  
							 <p style="text-align:justify;">The TAAT Policy Enabler, led by AATF, is supporting efforts towards the creation of an enabling
environment that will fast-track crop variety release and registration and spur market
incentives for agro-inputs and agricultural produce. The Project achieves this through
engagement with policy decision-makers and relevant stakeholders for policy, regulatory and
institutional reforms in the seed sector, pesticide industry and agricultural value chains in
select African countries.</p>
<p style="text-align:justify;">
AATF is leading the TAAT Policy Enabler Project, an initiative of the African Development Bank
(AfDB) under its Technologies for African Agricultural Transformation program. The objectives
include:
<ul><li>Create a strong seed system in target Countries through seed industry assessments and
facilitation of the elimination of policy and regulatory challenges in the seed sector.</li>
<li>Increase access and availability of quality seeds through the accreditation of seed companies
and agro-input suppliers.</li>
<li> Harmonise regional technology release and registration policies through the study of existing
protocols and enactment of relevant policies that improve the cross-boundary movement of
seeds and agricultural goods.</li>
<li>Facilitate competitive value-added chains through an analysis of existing value chain studies
and synthesis of policies that create market incentives for farmers and agribusinesses.</li>
</ul>
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
											<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-icon-1.jpg" > <br>
										</div> 
										<div class="col-md-12 col-sm-12 col-xs-12"><p style="color:#333333;">Increase the proportion of African farmers using improved seeds from 30 per cent to 60 per cent within the next 8-10 years.</p>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-icon-2.jpg" > <br> 
										</div> 
										<div class="col-md-12 col-sm-12 col-xs-12"><p style="color:#333333;">Increase in value addition in Africa from $40 of value-added to one ton of processed products to US$80 due to increased value addition created by a reliable and competitive supply of feedstock.</p>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-icon-3.jpg" > <br> 
										</div> 
										<div class="col-md-12 col-sm-12 col-xs-12"><p style="color:#333333;">“It should be possible for Africa to quadruple agriculture output in the next 30 years” – Donald Kaberuka, Former President AfDB. </p>
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
									<p>Advocacy for policy interventions to address access to cheaper farming inputs ranging from quality seeds, fertilizers to agro-chemicals.</p> 
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
							 		<p>Create an enabling environment that nurtures commercial agriculture by streamlining access to markets. </p>
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
							 		<p>Provide technical support to governments in Africa on matters relating to the deployment of agricultural technology to fast track attainment of food security in the continent. </p>
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
								<div class=" text-center"> 
									<h2 class="header-h2-b">PROJECT HIGHLIGHTS</h2> 
								</div>
							</div>
						</div>
                        <div class="counter-area-inner">
                            <div class="row no-gutters align-items-center">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    
									<div class="row  counter-pg">
										<div class="col-md-12 col-sm-12">
											<img src="<?php echo get_template_directory_uri(); ?>/images/projects/our-project-pages-icons-1.png" width="60" >
										</div>
										<div class="col-md-12 col-sm-12">
									
											<div class="text-center" style="border:none;">
												<h3><span class="counter-active">25</span>+</h3> 
											</div>
										</div>
										 
									</div>
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<p>National policy dialogue events
organized in the areas of the
seed industry
and agricultural value chains</p>
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
												<h3><span class="counter-active">8</span> </h3> 
											</div>
										</div>
										 
									</div>
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<p> Number of policies/
regulations/guidelines drafted,
passed and adopted. </p> 
											  
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
												<h3><span class="counter-active">13</span> </h3>  
											</div>
										</div>
										 
									</div>
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<p>Number of countries
where seed industry assessments
have been completed, gaps identified
and policymakers engaged</p>
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
												<h3 class="counter-active">60</h3> 
											</div>
										</div>
										 
									</div>
									<div class="row counter-pg">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin:0;">
											<p>Number of policy-related
stakeholders engaged.to date</p>
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
					 	<div class="col-lg-12 col-md-12"> <h2 class="header-h2-b"> FIELD & IMPACT STORIES </h2> </div>
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
                                <h2 class="header-h2-b"> PROJECT PARTNERS </h2> 
                             
                        </div>
                    </div> 
				</div>
				<div class="container">
					<div class="row text-center">
                        <div class="col-lg-12 col-md-12  col-12">
							<a href="https://www.iita.org/"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/TAAT-policy/AATF-project-logos-TAAT-POLICY-IITA.jpg" width="200"></a> 
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/TAAT-policy/AATF-project-logos-TAAT-POLICY-CORAF.jpg" width="200"> 
							<img src="<?php echo get_template_directory_uri(); ?>/images/projects/TAAT-policy/AATF-project-logos-TAAT-POLICY-MARKET-MATTERS-INC.jpg" width="200"> 
							<a href="https://www.aatf-africa.org"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/TAAT-policy/AATF-project-logos-TAAT-POLICY-AATF.jpg" width="200"></a>
						</div>
						 
					</div>
					<div class="row text-center">
						
					</div>
				</div>
			</section>
			
			<!-- Pricing Area -->
            <section class="pricing-area bg-grey2"  style="margin-bottom:30px; padding:30px;">
                <div class="container"> 
                     <div class="row text-center"> 
					 	<div class="col-lg-12 col-md-12"> <h2 class="header-h2-b"> INFORMATION AND RESOURCES </h2> </div>
					</div>
					 <div class="row justify-content-center service-slider-active cr-slider-dots-1"> 
                            
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> TAAT POLICY ENABLER COMPACT FACT SHEET </h6>
									<p> </p>
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> TAAT POLICY ENABLER COMPACT FACT SHEET <b>FRENCH</b> </h6>
									<p> </p>
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> Accelerating Seed Policy Harmonization:
Key Challenges and Action Plan for COMESA </h6>
									<p> </p>
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> Proceedings of the
HIGH LEVEL CONSULTATIVE WORKSHOP
ON THE STATUS OF THE COMESA SEED
POLICY IMPLEMENTATION PLAN</h6>
									<p> </p>
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> Harmonization in ECOWAS Leaps Forward:
TAAT Policy Mobilizes Efforts To Accelerate The Implementation Of Harmonized Seed Regulations In West Africa and The Sahel</h6>
									<p> </p>
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog blog2"> 
								<div class="blog-content"> 
									<h6 class="header-h5"> Seed Sector Reforms Gain Speed in DR Congo and Sierra Leone Thanks to TAAT Policy</h6>
									<p></p>
									<a href="#" class="resource-btn"> Download Resource file </a>
								</div>
								 
							</article>
						</div>
						<!--// Single Blog -->
						
						 

                         

                    </div>
                </div>
            </section>
            <!--// Pricing Area -->
			
			<section class="pricing-area bg-grey2"  style="margin-bottom:0px; padding:30px;">
                <div class="container">  
					<div class="row" style="margin-bottom:20px;">
						<div class="col-lg-6 col-md-6">
						<h4 class="p"> PROJECT MANAGEMENT </h4>
							 <div class="row" style="margin-bottom:20px;">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <img src="<?php echo get_template_directory_uri(); ?>/images/projects/TAAT-policy/francis-nangayo.jpg" style="border-radius:50%;"> </div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> <h5 class="header-h5">Dr. Francis Nang’ayo </h5>
									<p class="header-p">Project Manager</p>
									<h5 class="header-h5-2"> F.Nangayo@aatf-africa.org</h5>
								</div>
							</div>
							
						</div>
						<div class="col-lg-6 col-md-6"> 
							
							<h4 class="p"> PROJECT INVESTORS </h4>
							 <div class="row" style="margin-bottom:20px;"> 
							 	<div class="col-lg-12 col-md-12"> <a href="https://www.afdb.org/en"><img src="<?php echo get_template_directory_uri(); ?>/images/projects/TAAT-policy/AFDB.png" width="260" ></a> </div>
								<div class="col-lg-12 col-md-12"><p>AfDB is supporting AATF in executing activities under the
TAAT Maize Compact and TAAT Policy Enabler Compact
under the Technologies for African Agricultural
Transformation (TAAT) program. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- Call To Action Area -->
            <section style="background:#3b5d22; padding:20px 10px; color:#FFFFFF;">
                <div class="container">
                    <div class="row">
					
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-" style="padding-top:12px;"> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/FOOTER-CALL-BUTTON.png" /> </div>
								<div class="col-md-10 col-sm-10 col-xs-10 ">CALL US TODAY <br> <b>254-20 422 3700</b> </div>
							</div> 
						</div>
						
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-" style="padding-top:12px;"> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/FOOTER-LOCATION-ICON.png" /> </div>
								<div class="col-md-10 col-sm-10 col-xs-10 ">NAIROBI, KENYA <br> <b>  Naivasha Rd</b> </div>
							</div> 
						</div>
						
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-" style="padding-top:12px;"> <img src="<?php echo get_template_directory_uri(); ?>/images/icons/FOOTER-EMAIL-ICON.png" /> </div>
								<div class="col-md-10 col-sm-10 col-xs-10 "> EMAIL <br> <b>  aatf@aatf-africa.org</b> </div>
							</div> 
						</div>
						
                    </div>
                </div>
            </section>
            <!-- Call To Action Area -->
        <?php get_template_part('template-parts/call-to-action'); ?>
        <!--// Call To Action Area -->
        </main>
        <!--// Page Content -->

    </div>
    <!-- //Main wrapper -->
<!--// Page Content -->
<?php get_footer(); ?>