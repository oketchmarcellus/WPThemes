<?php
/*
*Template Name: AATF Market Systems For COmmercialization Program Template
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
							 <p style="text-align:justify;">Agricultural technology, especially higher yielding and adaptable crop varieties have the potential to not only improve food security but also accelerate and transform African agriculture and economies. However, the slow adoption of new technologies, from improved seeds through to mechanization, has delayed realization of the benefits of these technologies by smallholders who make up 80 percent of Sub-Saharan Africa’s farms.  This deficiency is in part due to an under-developed private sector and the failure of market systems to bring new technologies swiftly to the end users.</p>
							 <p style="text-align:justify;">

Improving and streamlining the market systems in the region will produce substantial benefits to the agriculture sector by reducing the cost of doing business for all players in the agricultural value chain including farmers, seed companies, agro-dealers and consumers. Making markets work for African agriculture and helping farmers to access new technologies and inputs could spur a transformation of the wider economy. </p>
							 <p style="text-align:justify;">

Through our Market Systems for Commercialization Programme, we are focused on facilitating efficient market systems that respond to demand and supply of technologies. This ensures that smallholder farmers have the necessary inputs at the right time, right quantities and right quality. In the long run, this improves productivity and we assist the smallholder farmers with linkage to output markets. The result will be efficient market systems that will accelerate uptake and use of agricultural technologies for improved livelihoods of smallholder farmers.  </p> 
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
												<h4 class="counter-active">1000</h4>
												<h6>Farmers benefited</h6>
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
												<h4 class="counter-active">400</h4>
												<h6>(Ha) Land Cultivated</h6>
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
												<h4 class="counter-active">6400</h4>
												<h6>(Tonnes) Farm Outputs</h6>
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
								<p class="text-center">AATF believes that building a more efficient, sustainable and inclusive ag¬riculture system in Africa will require action from both the public and private sectors. The private sector is particular¬ly well-placed to commercialise new ag¬ricultural innovations and ensure that these new technologies reach farmers. We work across the value chain to en¬sure that the market systems function efficiently and effectively so that agri¬cultural products make it to where they are needed most.    </p> 
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
									<h4> Product Development Initiatives </h4>
									<p>We work with partners throughout the product development lifecycle identifying products in the research and development pipeline and helping to shepherd them towards a commercial release, including product allocation, licensing, seed production, promotion and marketing.   </p>
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
									<h4>  Facilitation of Strategic Partnerships </h4>
							 		<p>We foster collaborations with public and private actors across the value chain, including research institutes, universities, national and regional governments, technology owners, farmers, agro-dealers and financial institutions. This way, we ensure that the technologies are developed in line with current market needs and are suitable for the future of farming.</p>
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
									<h4>  Capacity Building </h4>
							 		<p>We support private sector companies including SMEs to enhance their capacity to deliver agricultural technologies to smallholder farmers. This includes capacity building in licensing, efficient mass production systems, quality control, marketing, and technical knowledge of the products as well as general business development. </p>
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