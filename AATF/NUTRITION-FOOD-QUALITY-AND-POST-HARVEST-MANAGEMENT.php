<?php
/*
*Template Name: AATF Tela Nutrition and Food Quality Program Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>
	<style>  
			.slide-h5{ color:#507536; font-size:24px; font-weight:700; }
			.slide-bg{ background:rgba(255,255,255,0.9); width:100%; padding:20px 25px; }
			.header-h2{ color:#AC832D; font-weight:bold;  }
			.header-h2-2{ color:#507536; font-weight:bold;  }
			.header-h3{ color:#007D32; text-align:justify;  }
			.header-h4{ color:#922E91; font-weight: bolder; border-left:4px solid #F3B71B; padding-left:4px; }
			.header-h5{ color:#283B1B;  }
			.a-link{ font-size:12px; }
			hr { margin-top: 1px; margin-bottom: 15px; background: #dddddd; }
			h6 { font-weight:bold; margin-top:10px; }
			.pg { margin:2px 1px;  } 
			.pg-img { width:100%; margin-bottom:-90px; z-index:100;  } 
			.pg-text { width:100%; background:#c5e0b1; padding-top:100px; padding-left:20px; padding-right:20px; min-height:420px;  } 
			.counter { padding: 5px;  background:#EFB41A; }
			.counter { padding: 5px;  background:#EFB41A; }
			.counter-pg { margin:2px 7px;  }
	</style>
<!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!-- Page Content -->
        <main class="page-content">

            <!-- Feature Area -->
            <section id="feature-area" class="feature-area section-padding-xs bg-grey2">
                <div class="container">
                    <div class="row justify-content-center">

                        <!-- Signle Service -->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-7 col-12" style="padding-right:30px;">
                             <div class="section-title" style="margin-bottom:20px;">
							  	<h2 style="color:#AC842D; margin-bottom:0;">ABOUT THE PROGRAMME</h2> 
							</div>
							 <h5>Nutrition</h5>
<p style="text-align:justify;">Beyond food security, poor nutrition has been identified as a major cause of diet-related health ailments.  Access to a balanced diet is critical to improved health and a vibrant economically active population of Africa. The development of nutrient-enriched crops and diversification of crop portfolio holds strong key opportunities for enhancing the nutrition of smallholder farmer families.</p>

<h5>Food Quality </h5>
<p style="text-align:justify;">Improved food quality is a key driver in Africa’s development as the continent is becoming more involved in regional and international trade to improve economies and increase farmer earnings. However, food quality and safety remain a huge challenge in Africa given that food contamination undermines trade and consumer health. Food safety management along food chains is a priority for us at AATF to prevent diseases and trade disruptions in Africa. </p>

<h5>Post-Harvest Management</h5>
<p style="text-align:justify;">Post-harvest Management (PHM) is crucial to reduce loss in quantity and qualitative or nutritive value of the product to stimulate increased access of farmer produce to both local and international markets. PHM, therefore, aims at reducing the incidence of pests and diseases on harvested produce; minimize undesirable consumption effect on human health, reducing the negative impact on the environment and controlling internal deterioration or spoilage. </p>

                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-12">
                             <h4 class="header-h4"> AATF PROGRAMME AREAS </h4>
							 <h5 class="header-h5">Farm Productivity</h5>
							 <a href="Farm-Productivity.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">Policy Environment and Public Participation</h5>
							 <a href="Policy-Environment-and-Public-Participation.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">Market Systems for Commercialisation </h5>
							  <a href="Market-Systems-for-Commercialisation.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">Nutrition, Food Quality and Post-harvest Management </h5>
							  <a href="NUTRITION-FOOD-QUALITY-AND-POST-HARVEST-MANAGEMENT.php" class="cr-btn2">LEARN MORE</a> 
							 <hr>
							 <h5 class="header-h5">Mechanisation and Digital Agriculture </h5>
							  <a href="MECHANIZATION-AND-DIGITAL-AGRICULTURE.php" class="cr-btn2">LEARN MORE</a> 
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
								<div class=" text-center"> 
									<h2 class="header-h2">OUR CONTRIBUTION</h2> 
								</div>
							</div>
						</div>
                        <div class="counter-area-inner">
                            <div class="row no-gutters align-items-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    
									<div class="row col-container2 counter-pg">
										<div class="col-md-7 col-sm-7 col-xs-6 col-6 col" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/farmers-icon2.png" >
										</div>
										<div class="col-md-5 col-sm-5 col-xs-6 col-6 col" style="padding:0; margin:0;">
									
											<div class="counter text-center">
												<h4 class="counter-active">20 </h4>
												<h6>NUTRITIOUS CROP VARITIES DEVELOPED </h6>
											</div>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    
									<div class="row col-container2 counter-pg">
										<div class="col-md-7 col-sm-7 col-xs-6 col-6 col" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/land-cultivated-icon2.png" >
										</div>
										<div class="col-md-5 col-sm-5 col-xs-6 col-6 col" style="padding:0; margin:0;">
									
											<div class="counter text-center">
												<h4 class="counter-active">1000 </h4>
												<h6>SMALLHOLDER FARMERS 
TRAINED ON FOOD QUALITY
</h6>
											</div>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="row col-container2 counter-pg">
										<div class="col-md-7 col-sm-7 col-xs-6 col-6 col" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/farm-output-icon2.png" >
										</div>
										<div class="col-md-5 col-sm-5 col-xs-6 col-6 col" style="padding:0; margin:0;">
									
											<div class="counter text-center">
												<h4 class="counter-active">30 </h4>
												<h6>IMPROVED 
POST HARVEST YIELDS
</h6>
											</div>
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
									<h2 style="color:#AC842D; margin-bottom:0;">PROGRAMME IMPLEMENTATION </h2>   
								</div> 
								<p class="text-center">The relationship between poverty and improved livelihoods suggests that improving the present poor dietary status and living standards of poor farm families in Africa is hinged on strengthening their food portfolio for more crops with highly enriched nutrients while improving their capacities to become agripreneurs. We achieve our mission through reduction of post-harvest yield/nutrient losses and improvement of commercial food quality for enhanced market access implemented through the following approaches.      </p> 
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
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-implementation-icon-1.png" > 
								</div>
								<div class="pg-text">
									<h4> Sustainable Technologies </h4>
									<p>AATF is developing and advocating for use of sustainable technologies to build an agriculture sector that contributes to food and nutrition secure Africa. The foundation is particularly engaging in the development of nutritious, high yield crops and enhancing post-harvest technologies.</p>
								</div>
							</div>
                        </div>
                        <!--// Single Price box -->

                        <!-- Single Price box -->
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-implementation-icon-2.png" > 
								</div>
								<div class="pg-text">
									<h4>  Capacity Building</h4>
							 		<p>AATF is strengthening the agribusiness capacities of smallholder farmers and improving their access to markets so that they can enhance their earnings. The foundation works across a diversified crop portfolio that combines cereals, roots and tubers, legumes and horticultural crops, supporting farmers in building a diverse, nutritious food system.  </p>
								</div>
							</div>
                        </div>
                        <!--// Single Price box -->

                        <!-- Single Price box -->
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-implementation-icon-3.png" > 
								</div>
								<div class="pg-text">
									<h4>  	Regulatory Frameworks</h4>
							 		<p>We have also undertaken initiatives to develop regulatory frameworks that support food quality, ranging from the establishment of guidelines to meet international food safety for local and export markets, and registration of environmentally friendly technologies such as bio-pesticides to reduce food spoilage and contamination.  </p>
								</div>
							</div>
								
                        </div>
                        <!--// Single Price box -->

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
			
			<!-- Pricing Area -->
            <section class="pricing-area bg-white"  style="margin-bottom:30px; margin-top:40px; padding-bottom:30px;">
                <div class="container"> 
                     <div class="row text-center"> 
					 	<div class="col-lg-12 col-md-12"> <h2 class="header-h2">CURRENT PROJECTS AND SPECIAL INITIATIVES </h2> </div>
					</div>
					 <div class="row justify-content-center service-slider-active cr-slider-dots-1"> 
                            
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/projects/IMG_5070.JPG">
									 
								</div>
								<div class="blog-content"> 
									<h5>
										<a href="Seeds-to-Business-Project.php" >Seeds to Business Project (Seeds2B)</a>  
									</h5> 
									<a href="Seeds-to-Business-Project.php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published on July 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/projects/Pod Borer Resistant Maruca (PBR) Cowpea.png">
									 
								</div>
								<div class="blog-content"> 
									<h5>
										<a href="Pod-Borer-Resistant-Maruca-Cowpea.php" >Pod Borer Resistant Maruca (PBR) Cowpea</a>  
									</h5> 
									<a href="Pod-Borer-Resistant-Maruca-Cowpea.php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published on July 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -- 
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/projects/The Open Forum on Agricultural Biotechnology in Africa (OFAB).jpg">
									 
								</div>
								<div class="blog-content"> 
									<h5>
										<a href="The-Open-Forum-on-Agricultural-Biotechnology-in-Africa-(OFAB).php" >The Open Forum on Agricultural Biotechnology in Africa (OFAB)</a>
									</h5> 
									<a href="The-Open-Forum-on-Agricultural-Biotechnology-in-Africa-(OFAB).php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published on July 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						 

                    </div>
                </div>
            </section>
            <!--// Pricing Area -->
           <!-- Call To Action Area -->
        <?php get_template_part('template-parts/call-to-action'); ?>
        <!--// Call To Action Area -->
        </main>
        <!--// Page Content -->

    </div>
    <!-- //Main wrapper -->
<!--// Page Content -->
<?php get_footer(); ?>