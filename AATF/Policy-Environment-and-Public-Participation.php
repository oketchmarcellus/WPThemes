<?php
/*
*Template Name: AATF Policy Environment Program Template
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
							 <p style="text-align:justify;">We recognize that innovation and technology can play a major role if African countries are to realise their potential in agriculture. Smallholder farmers in SSA have generally shown willingness to adopt innovative technologies particularly those that enable them to overcome their existing constraints. However, there are new technologies with the potential to drive transformation in the sector that have not reached farmers due to obstacles in policy, legal and regulatory environments that promote innovation.
Countries that are able to create conducive climates for innovation and business growth will be able to attract investment and drive the development of their agriculture sectors and their wider economies.
</p>
							 <p style="text-align:justify;">
Through our policy environment and public participation programme, we help in creating enabling environments by giving policymakers the information they need to make informed decisions about the regulation of agricultural technology. This also helps in the formulation of responsive regulations and support structures that promote agricultural innovation. Our contribution will help in realisation of a more receptive, science based, legal, regulatory and commercial environment that will deliver safe technologies to market while protecting human and environmental health.

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
								<p class="text-center">As AATF, we are keen on a supportive and enabling policy environment as well as public participation that will stimulate innovation, technology uptake and agribusiness. We believe that this is critical if agriculture is to make a meaningful difference in the lives of smallholder farmers in Africa. We undertake this programme through the below approaches  </p> 
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
									<h4> Policy and Regulatory Advocacy <br><br></h4>
									<p>We promote dialogue on science, technology and innovation, including education and awareness-building so that all stakeholders, from policymakers to farmers, can make informed decisions about new technologies.</p>
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
									<h4> Public Engagements on Policy & Regulations </h4>
							 		<p>We build support for availability and adoption of agricultural innovation at all levels of political leadership and farming communities by aligning with institutions as well as governments and non-state actors to champion the creation of functional policy and regulatory environments. </p>
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
									<h4> Capacity Building in Policy and Regulatory Development</h4>
							 		<p>We strengthen the capacity of institutions and individuals to equip them with the knowledge they need to effectively carry out their work along the area of policy, legal and regulatory environment </p>
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
        <?php get_template_part('template-parts/call-to-action'); ?>
        <!--// Call To Action Area -->
        </main>
        <!--// Page Content -->

    </div>
    <!-- //Main wrapper -->
<!--// Page Content -->
<?php get_footer(); ?>