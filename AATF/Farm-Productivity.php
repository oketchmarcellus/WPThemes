<?php
/*
*Template Name: AATF Tela Farm Productivity Program Template
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
			.pg { margin:2px 1px; } 
			.pg-img { width:100%; margin-bottom:-90px; z-index:100;  } 
			.pg-text { width:100%; background:#c5e0b1; padding-top:100px; padding-left:20px; padding-right:20px; min-height:520px;  } 
			.counter { padding: 5px;  background:#EFB41A; }
			.counter-pg { margin:2px 7px;  }
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
                    <div class="row justify-content-center ">

                        <!-- Signle Service -->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-7 col-12" style="padding-right:30px;">
							<div class="section-title" style="margin-bottom:20px;">
							  	<h2 style="color:#AC842D; margin-bottom:0;">ABOUT THE PROGRAMME</h2> 
							</div>
								 
							 <p style="text-align:justify;">Agriculture remains the single greatest contrib¬utor to gross domestic product and employment across Africa. The sector makes up an estimated 25 percent of the con-tinent’s GDP, and more than half of its jobs. Around 80 percent of farms in Sub-Saharan Africa are smallholdings, employing around 175 million people, and women make up between 60-80 percent of the workforce. Improvements in agricultural technology have the potential to impart broad-based economic benefits and help to sustain the economic growth that SSA has been experiencing. The World Bank estimates that the sector could more than triple in size to US$1 trillion by 2030, up from the current US$300 billion. The potential for growth is enormous.</p>
							 <p style="text-align:justify;">
To this end, the AATF productivity and Stress Management Programme is geared towards assisting smallholder farmers to access agricultural innovations that can sustainably optimise production systems and build resilience of agricultural and food security systems, address farmer needs and contribute to Africa’s agricultural transformation. This will result in integrated innovations and the know-how applications required to improve efficient agricultural productivity of African staple and cash crops </p>
							 <p style="text-align:justify;">
Smallholder farms constitute approximately 80% of all farms in SSA and employ about 175 million people directly. With agriculture being a major component of the economies of SSA, there is an urgent need for stakeholders to focus on resilient agriculture. This calls for advanced agricultural techniques including biotechnological approaches for genetic improvement of crops, inputs, as well as equipment that can radically transform the region. To this end, the AATF productivity and stress management programme is geared towards assisting smallholder farmers to improve their crop yield through transfer and adoption of agricultural technological innovations. 

</p>
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
								<div class="section-title text-center" style="margin-bottom:20px;">
									<h2 style="color:#AC842D; margin-bottom:0;">OUR CONTRIBUTION</h2> 
								</div>
							</div>
						</div>
                        <div class="counter-area-inner">
                            <div class="row no-gutters align-items-center">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    
									<div class="row col-container2 counter-pg">
										<div class="col-md-7 col-sm-7 col-xs-6 col-6 col" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/farmers-icon2.png" >
										</div>
										<div class="col-md-5 col-sm-5 col-xs-6 col-6 col" style="padding:0; margin:0;">
									
											<div class="counter text-center">
												<h4><span class="counter-active">80</span>%</h4>
												<h6>SMALLHOLDER FARMS IN SSA</h6>
											</div>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    
									<div class="row col-container2 counter-pg">
										<div class="col-md-7 col-sm-7 col-xs-6 col-6 col" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/land-cultivated-icon2.png" >
										</div>
										<div class="col-md-5 col-sm-5 col-xs-6 col-6 col" style="padding:0; margin:0;">
									
											<div class="counter text-center">
												<h4><span class="counter-active">175</span>M</h4>
												<h6>EMPLOYED DIRECTLY</h6>
											</div>
										</div>
									</div>
									
                                </div>
								
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="row col-container2 counter-pg">
										<div class="col-md-7 col-sm-7 col-xs-6 col-6 col" style="padding:0; margin:0;">
											<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/farm-output-icon2.png" >
										</div>
										<div class="col-md-5 col-sm-5 col-xs-6 col-6 col" style="padding:0; margin:0;">
									
											<div class="counter text-center">
												<h4>USD <span class="counter-active">1</span>T</h4>
												<h6>MARKET POTENTIAL</h6>
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
								<p class="text-center">Agricultural technologies that allow farmers to increase their output in a sustainable, resilient manner will help catalyse transformation of the economies of Sub-Saharan Africa. Through our various projects and special initiatives, we have put mechanisms in place to facilitate the transfer of these technologies to smallholder farmers. </p> 
                            </div>
                        </div>
                    </div>
				</div>
				<div style="width:96%; margin:auto;">
                    <div class="row justify-content-center">

                        <!-- Single Price box -->
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-implementation-icon-1.png" > 
								</div>
								<div class="pg-text">
									<h4> Need Identification and Technology sourcing <br><br> </h4>
									<p>With input from farmers, scientists and other stakeholders, we define the problem and identify appropriate agricultural technologies and products that are needed to address the  constraints. We continue our traditional role of scouting and accessing appropriate technologies and products from around the world that can increase smallholder farmer productivity, address their current challenges and reduce their vulnerabilities. </p>
								</div>
							</div>
                        </div>
                        <!--// Single Price box -->

                        <!-- Single Price box -->
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-implementation-icon-2.png" > 
								</div>
								<div class="pg-text">
									<h4>  Product Development</h4>
							 		<p>We work with farmers, scientists, policymakers and other stakeholders to create partnerships through which technologies are developed and adapted into tangible products for use by smallholder farmers  </p>
								</div>
							</div>
                        </div>
                        <!--// Single Price box -->

                        <!-- Single Price box -->
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-implementation-icon-4.png" > 
								</div>
								<div class="pg-text">
									<h4> Product Deployment <br><br></h4>
							 		<p>We work across the value chain with farmers, scientists, policymakers and other stakeholders to create partnerships and mechanisms through which technologies and products can be transferred and utilised by smallholders.     </p>
								</div>
							</div>
								
                        </div>
                        <!--// Single Price box -->
						
						<!-- Single Price box -->
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="row justify-content-center pg">
								<div class="pg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/project-implementation-icon-3.png" > 
								</div>
								<div class="pg-text">
									<h4> Enabling Environment <br><br></h4>
							 		<p>We engage with governments and with public and private sector partners across the value chain to create an enabling environment, that will facilitate farmer access to these technologies in an affordable and economically sustainable way     </p>
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
					 	<div class="col-lg-12 col-md-12"> 
							<div class="section-title text-center" style="margin-bottom:20px;">
									<h2 style="color:#AC842D; margin-bottom:0;">CURRENT PROJECTS AND SPECIAL INITIATIVES</h2> 
							</div>
						</div>
					</div>
					 <div class="row justify-content-center service-slider-active cr-slider-dots-1"> 
                            
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/AATF-Our-Programmes---Current-Projects-&-Special-Initiatives-Module-images-TEAL-MAIZA.jpg" alt="blog thumb">
									 
								</div>
								<div class="blog-content"> 
									<h5>
										<a href="TELA-Maize-project.php" >TELA Maize Project</a>  <br> <br>
									</h5> 
									<a href="TELA-Maize-project.php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published on July 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/AATF-Our-Programmes---Current-Projects-&-Special-Initiatives-Module-images-TAAT-MAIZE.jpg" alt="blog thumb">
									 
								</div>
								<div class="blog-content"> 
									<h5>
										<a href="TAAT-Maize-Compact.php" >TAAT Maize Compact</a>  <br> <br>
									</h5> 
									<a href="TAAT-Maize-Compact.php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published on July 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/AATF-Our-Programmes---Current-Projects-&-Special-Initiatives-Module-images-MLN-PROJECT.jpg" alt="blog thumb">
									 
								</div>
								<div class="blog-content"> 
									<h5>
										<a href="MLN-Diagnostics-and-Management-Project.php" >MLN Diagnostics and Management Project</a>
									</h5> 
									<a href="MLN-Diagnostics-and-Management-Project.php" class="cr-readmore">Continue reading </a>
								</div>
								<div style="background:#AC832D; bottom:0; color:#FFFFFF; font-size:11px; padding-left:10px;"> Published on July 2020 </div>
							</article>
						</div>
						<!--// Single Blog -->
						
						<!-- Single Blog -->
						<div class="col-lg-12 col-md-12">
							<article class="blog">
								<div class="blog-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/programmes/AATF-Our-Programmes---Current-Projects-&-Special-Initiatives-Module-images-NEWEST-RICE-PROJECT.jpg" alt="blog thumb">
									 
								</div>
								<div class="blog-content"> 
									<h5>
										<a href="NEWEST-Project.php" >NEWEST Rice Project</a>  <br> <br>
									</h5> 
									<a href="NEWEST-Project.php" class="cr-readmore">Continue reading </a>
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