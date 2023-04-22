<?php
/*
*Template Name: AATF Tela Mechanization and Digital Agriculture Program Template
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
							  
<p style="text-align:justify;">At AATF, we believe that mechanised and digital agriculture will reduce drudgery for smallholder farmers, develop competitive value chains and achieve future growth and poverty reduction agendas in Africa. With the sharp increase in food demand in Africa and the world, the rise in agricultural productivity that is required to meet these needs will not be possible without harnessing mechanization solutions.</p>
<p style="text-align:justify;">
Africa has the least mechanized agricultural system in the world. African farmers have 10 times fewer mechanized tools per farm area than farmers in other developing regions, and access has not grown as quickly as in other regions. This low use of mechanisation is affecting the competitiveness of the continent’s products at the world market because of the subsistence as opposed to commercial production and processing. </p>
<p style="text-align:justify;">

Mechanised and digital agriculture will inject competitiveness and open markets for the continent’s products and farmers. It can increase production efficiency and facilitate increased output of higher value products at a lower cost of operations. It will also improve profit margins from product sales while eliminating the drudgery associated with human muscle-powered cropping.
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
												<h4 class="counter-active">1000 </h4>
												<h6>MECHANIZED FARMS  </h6>
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
												<h4 class="counter-active"> 656,783</h4>
												<h6>FARMERS TRAINED ON MECHANIZATION</h6>

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
												<h4><span class="counter-active">300</span>% </h4>
												<h6>IMPROVEMENT ON CASSAVA YIELDS IN NIGERIA, UGANDA AND ZAMBIA</h6>
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
								<p class="text-center">Given our belief in the ability of the smallholder to positively contribute to Africa's agricultural transformation through the use of technology, we are building the ability of farmers to do agriculture as a business through the use of mechanisation and digital agriculture.    </p> 
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
									<h4>  Farm Mechanization </h4>
									<p>We are focusing on increasing access to good digital/precision agriculture technologies that will enhance farmer productivity. We identify and provide access to different machines suited for varying farm operations covering ploughing, harrowing, planting, spraying and harvesting.</p>
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
									<h4> Market Linkages</h4>
							 		<p> We help link farmers with markets to support the uptake of their higher volume cassava tubers and also ensure they get the best price.   </p>
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
									<h4> Partnerships</h4>
							 		<p>We work with partners to strengthen the capacity of local entrepreneurs in the maintenance and repairs of farm and processing machinery and prototype design of machines including the manufacture of low-cost machines. We also build farmer capacity in the efficient use of agricultural machinery. </p>
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
									<img src="<?php echo get_template_directory_uri(); ?>/images/projects/CAMAP_files/DSC_0871banner2.jpg">
									 
								</div>
								<div class="blog-content"> 
									<h5>
										<a href="Cassava-Mechanisation-and-Agroprocessing-Project-CAMAP.php" >Cassava Mechanisation and Agroprocessing Project (CAMAP)</a>  
									</h5> 
									<a href="Cassava-Mechanisation-and-Agroprocessing-Project-CAMAP.php" class="cr-readmore">Continue reading </a>
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