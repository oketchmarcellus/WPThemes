<?php
/*
*Template Name: Aatf Resources Page Template
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
  color:#FFFFFF; font-size:18px; font-weight:bold;
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
 .tab2 {
  float: left;
  border: 1px solid #ccc;
  background-color: #507536;
  width: 30%; 
}

/* Style the buttons inside the tab */
.tab2 button {
  display: block;
  background-color: inherit;
  color: #FFFFFF;
  padding: 8px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 18px;
  font-weight:900;
}

.service.service-style-4 {
    min-height: initial;
}

/* Change background color of buttons on hover */
.tab2 button:hover {
  background-color: #ac832d;
}

/* Create an active/current "tab button" class */
.tab2 button.active {
  background-color: #ac832d;
}

/* Style the tab content */
.tabcontent2 {
  float: left;
  padding: 30px 30px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none; 
  background:#ede6d6;
}.tp{ width:25%; min-height:70px; }
@media only screen and (max-width: 800px) {
.tp{ width:50%;  }
}
	</style> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    $args = array('post_type' => 'Aatf_resources', 'posts_per_page' => 10, 'order' => 'ASC',);
        $count = 0;
        $aatf_resources= new WP_Query( $args );?>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->

        <!-- Page Content -->
        <main class="page-content">   
			<!-- Services Area -->
            <section class="services-area  centerbg" style="padding:30px;">
                <div class="container"> 
                    <!--div class="row">
						<div class="col-lg-12 col-md-12 col-12 offset-0">
						<div class="section-title">
                                 <h2 style="color:#AC842D;">PUBLICATIONS</h2>
							</div> 
						</div>
					</div-- 
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-12 offset-0">
							<div class="section-title text-center">
                                 <h2 style="color:#AC842D;">AATF RESOURCES</h2> 
							</div>
						</div>
					</div-->
					<div class="row" style="margin-bottom:30px;"> 
						<div class="col-xl-12 col-lg-12 col-12 offset-0">
							<div class="centered-b text-center">
								<p style="color:#507536; text-align:center;"><?php echo get_the_content(); ?></p> 
							</div> 
							 
						</div> 
					</div>
				</div>
			</section>
			
			<section class="services-area  bg-white" style="padding:30px;">
                <div class="container">
					<div class="row" id="publications">
					 <div class="tab" style="width:100%;">
						  <button class="tablinks tp" onClick="openCity(event, 'Reports')" id="defaultOpen">Annual Reports</button>
						  <button class="tablinks tp" onClick="openCity(event, 'Profiles')">Profiles</button>
						  <button class="tablinks tp" onClick="openCity(event, 'Publications')">General Publications</button> 
						  <button class="tablinks tp" onClick="openCity(event, 'staff')">Staff Publications</button>  
						</div>
						
						<div id="Reports" class="tabcontent"> 
						  <div class="row">
						  	<div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(1).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(2).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(3).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(4).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(5).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(6).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(7).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(8).png">  
						  </div> 
						</div>
						</div>
						
						<div id="Publications" class="tabcontent"> 
						  <div class="row">
						  	 
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(4).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(5).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(6).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(7).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(8).png">  
						  </div> 
						</div>
						</div>
						
						<div id="staff" class="tabcontent"> 
						  <div class="row">
						  	  
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(5).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(6).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(7).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(8).png">  
						  </div> 
						</div>
						</div>
						
						<div id="Profiles" class="tabcontent">
						  <div class="row">
						  	<div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(9).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(10).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(11).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(12).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(13).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(14).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(7).png">  
						  </div>
						  <div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Publications(8).png">  
						  </div> 
						 </div>
						</div> 
					 </div>
				</div>
			</section>

			 
			<hr>
			<!-- PROJECT BRIEFS -->
            <section id="briefs" class="services-area section-padding-xs bg-white" style="margin-top:0; padding-top:20px;"> 
                <div class="container" style="margin-top:0;"> 
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-6">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">PROJECT BRIEFS</h2> 
							</div> 
                        </div> 
                    </div>
					
					<div class="row services-grid">

                        <!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Project Briefs(1).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->

                       <!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Project Briefs(2).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Project Briefs(3).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Project Briefs(4).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Project Briefs(5).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Project Briefs(6).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Project Briefs(7).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -- 
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 Project Briefs.png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->

                         

                    </div>
                </div>
            </section>
            <!--// TV Area -->
			<hr>
			<!-- MLND SOPS -->
            <section id="mlnd" class="services-area section-padding-xs bg-white" style="margin-top:0; padding-top:20px;"> 
                <div class="container" style="margin-top:0;"> 
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-6">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">MLND SOPS</h2> 
							</div> 
                        </div> 
                    </div>
					
					<div class="row services-grid">

                        <!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 MLND-SOPs(1).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->

                       <!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 MLND-SOPs(2).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 MLND-SOPs(3).png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						<!-- Signle Service -->
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="service service-style-4">
                                <div class="service-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/infohub/Screenshot_2020-08-30 MLND-SOPs.png" alt="Service Thumb">
                                </div> 
                            </div>
                        </div>
                        <!--// Signle Service -->
						
						 

                    </div>
                </div>
            </section>
            <!--// TV Area --> 
			<hr>  
			
			<section class="services-area bg-white" style="padding:30px;">
                <div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="section-title" style="margin-bottom:0;">
                                 <h2 style="color:#AC842D; margin-bottom:0;">IP & BIOSAFETY LAWS</h2> 
								 <p style="color:#000000; font-size:18px;">Intellectual Property (IP) and Biosafety Laws in AATF Project Countries</p>
							</div>
						</div> 
                    </div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-12" style="background:#E4F0D8; padding:30px;"> 
							<h5 style="color:#507536; font-weight: bolder;">INTERNATIONAL  BIOSAFETY LAWS </h5>
							<a href="docs/cartagena-protocol-en.pdf" target="_blank"> Cartagena Protocol on Biosafety to the Convention on Biological Diversity</a> <hr>
							<a href="docs/Nagoya-Kuala-Lumpur-Supplementary-Protocol-on-Liability-and-Redress-to-the-Cartegena-Protocol-on-Biosafety.pdf" target="_blank">Nagoya – Kuala Lumpur Supplementary Protocol on Liability and Redress to the Cartegena Protocol on Biosafety</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 col-12" style="background: #CCCCCC; padding:30px;"> 
							<h5 style="color:#507536; font-weight: bolder;">INTERNATIONAL & REGIONAL IP LAWS</h5>
							<p>African Regional Intellectual Property Organization (ARIPO) – (AATF Project Countries – Ghana, Kenya, Liberia, Malawi, Mozambique, Rwanda, Sierra Leone, Tanzania, Uganda, Zambia and Zimbabwe)</p>
							<a href="docs/Arusha-Protocol_20181.pdf">Arusha Protocol 2018</a> <br>
							<a href="docs/Harare-Protocol-2019.pdf">Harare Protocol 2019</a> <hr>
							
							<p>African Intellectual Property Organization (OAPI) – (AATF Project Countries – Benin, Burkina Faso, Central African Republic, Chad, Cote d’Ivoire, Mauritania and Togo)</p>
							<a href="docs/Bangui-agreement.pdf">Agreement Revising the Bangui Agreement of March 2, 1977 </a> <br>
							<a href="docs/Bangui-agreement-regulations.pdf">Regulations Under the Agreement Revising the Bangui Agreement of March 2, 1977 on the Creation of an African Intellectual Property Organization</a><hr>
							
							<p>Common Market of Eastern and Southern Africa (COMESA) – (AATF Project Countries – Burundi, Kenya, Zimbabwe, Rwanda, Ethiopia, Uganda, D.R. Congo, Malawi and Zambia)</p>
							<a href="docs/COMESA-Seed-Trade-Harmonisation-Regulations-English.pdf">COMESA Seed Trade Harmonisation Regulations</a> <hr>
							
							<p>Consultative Group on International Agricultural Research</p>
							<a href="docs/CGIAR-Principles-on-the-Management-of-Intellectual-Assets.pdf">CGIAR Principles on the Management of Intellectual Assets</a>
						</div>
					</div>
				</div>
			</section>
					
					
					
			 <!-- Media Area -->
			<section id="portfoio-area" class="portfolio-area section-padding-xs bg-white" style="padding-top:20px;"> 
				<div class="container">
					<div class="row" style="background:#ede6d6;"> 

						<div class="tab2">
						  <button class="tablinks2" onClick="openCity2(event, 'burkina')" id="defaultOpen2">Burkina Faso</button>
						  <button class="tablinks2" onClick="openCity2(event, 'burundi')">Burundi</button>
						  <button class="tablinks2" onClick="openCity2(event, 'drc')">Democratic Republic of Congo</button>
						  <button class="tablinks2" onClick="openCity2(event, 'drc')">Ethiopia</button>
						  <button class="tablinks2" onClick="openCity2(event, 'ghana')">Ghana</button>
						  <button class="tablinks2" onClick="openCity2(event, 'kenya')">Kenya</button>
						  <button class="tablinks2" onClick="openCity2(event, 'malawi')">Malawi</button>
						  <button class="tablinks2" onClick="openCity2(event, 'mozambique')">Mozambique</button>
						  <button class="tablinks2" onClick="openCity2(event, 'nigeria')">Nigeria</button>
						  <button class="tablinks2" onClick="openCity2(event, 'rwanda')">Rwanda</button>
						  <button class="tablinks2" onClick="openCity2(event, 'sa')">South Africa</button>
						  <button class="tablinks2" onClick="openCity2(event, 'tz')">Tanzania</button>
						  <button class="tablinks2" onClick="openCity2(event, 'ug')">Uganda</button>
						  <button class="tablinks2" onClick="openCity2(event, 'zambia')">Zambia</button>
						  <button class="tablinks2" onClick="openCity2(event, 'zimbabwe')">Zimbabwe</button>
						</div>
						
						<div id="burkina" class="tabcontent2"> 
                             <h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Burkina Faso</b></p>
							 <a href="docs/Burkina-Faso-Biosafety-Law.pdf" target="_blank"> Burkina Faso Biosafety Law </a> <br>
							 <a href="docs/regulation-règles-nationales-en-matière-de-sécurité-en-biotechnologie-au-burkina.pdf" target="_blank">Regulation- Règles Nationales en Matière de Sécurité en Biotechnologie au Burkina Faso </a>
                         
						</div>
						
						<div id="burundi" class="tabcontent2">
							<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Burundi</b></p>
							 <a>Law No. 113 of July 28, 2009 relating to Industrial Property</a>
							
						</div>
						
						<div id="drc" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Democratic Republic of Congo</b></p>
							 <a>D.R. Congo Industrial Property Law</a>
							
						</div>
						
						<div id="drc" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Ethiopia</b></p>
							 <a>Proclamation No. 123 of 1995 for Inventions, Minor Inventions and Industrial Designs
Regulation No. 12 of 1997 Inventions, Minor Inventions and Industrial Designs <br>
Proclamation No. 1068 of 2017 to Provide for Plant Breeder’s Rights<br>
Ethiopia Proclamation No 896-2015<br>
Directive 1 Ethiopia Application Contents<br>
Directive 2 Ethiopia Risk Assessment<br>
Directive 3 Ethiopia Risk Management Strategy<br>
Directive 4 Ethiopia Transport Requirements<br>
Directive 5 Ethiopia Storing and Processing<br>
Directive 6 Ethiopia Accidental Release Responses</a>
							
						</div>
						
						<div id="ghana" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Ghana</b></p>
							 <a>Patents Act, 2003 (Act 657)<br>
Biosafety Act, 2011<br>
Ghana Biosafety Regulations</a>
							
						</div>
						
						<div id="kenya" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Kenya</b></p>
							 <a>Kenya Industrial Property Act No. 3 of 2001<br>
Industrial Property Regulation 2002<br>
Industrial Property Tribunal Regulations 2001<br>
Seed and Plant Varieties Act, Cap 326<br>
Kenya Seeds and Plant Varieties (PBR) Regulations 1994<br>
Biosafety Act No. 2 of 2009<br>
Kenya Labelling Regulations 2012<br>
Kenya Contained Use Regulations 2011<br>
Kenya Environmental Release Regulations 2011<br>
Kenya Biosafety Export Import and Transit Regulations 2011</a>
							
						</div>
						
						<div id="malawi" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Malawi</b></p>
							 <a>Law of Patents Chapter 49:02<br>
Patents Regulations 49:02<br>
Patents (Agents’ Fees) Regulations<br>
Malawi Biosafety Act<br>
Malawi Plant Breeder’s Rights Act</a>
							
						</div>
						
						<div id="mozambique" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Mozambique</b></p>
							 <a>Industrial Property Code (Decree No. 04 of 2006)<br>
New Plant Varieties Decree (No. 58 of 2006)<br>
Mozambique Biosafety Decree 2014<br>
Mozambique Biosafety Regulations</a>
							
						</div>
						
						<div id="nigeria" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Nigeria</b></p>
							 <a>Patent and Designs Act, Chapter 344 of 1990<br>
Patent Rules under Section 30 of December 1971<br>
Patents and Designs (Convention Countries) Order under section 27(1) of 1971<br>
Patents and Designs (Additional Transitional and Saving Provisions) Order under paragraph 7 of 1972<br>
Nigeria Biosafety Management Agency Act 2015<br>
Nigeria Biosafety Regulations 2017</a>
							
						</div>
						
						<div id="rwanda" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Rwanda</b></p>
							 <a>Law of the Protection of Intellectual Property No 31 of 2009</a>
							
						</div>
						
						<div id="sa" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>South Africa</b></p>
							 <a>Patent Act (No. 57 of 1978)<br>
Patent Regulations, 1978<br>
Patent Examination Regulations, 2003<br>
Notice in terms of Regulation 2 of the Patents Regulations<br>
Plant Breeders’ Rights Act (No.15 of 1976)<br>
Plant Breeders’ Rights Amendment Act, 1996 (No. 673)<br>
Genetically Modified Organisms Act 15 of 1997<br>
Genetically Modified Organisms Regulations (No. R. 120 of 2010)<br>
Genetically Modified Organisms Amendment Act (Act No. 23 of 2006)</a>
							
						</div>
						
						<div id="tz" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Tanzania</b></p>
							 <a>Patents Act (No. 1 of 1987)<br>
Biosafety Regulations 2009<br>
Plant Breeders’ Rights Act 2012 – Mainland<br>
Plant Breeders’ Rights Act 2014 – Zanzibar<br>
Regulations for Plant Breeder’s Rights Act – Mainland</a>
							
						</div>
						
						<div id="ug" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Uganda</b></p>
							 <a>Patents Act (Chapter 216)<br>
Patents (Amendment) Act 2002<br>
Trade Secrets Protection Act 2009<br>
Plant Variety Protection Act 2014<br>
Industrial Property Act, 2014</a>
							
						</div>
						
						<div id="drc" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Zambia</b></p>
							 <a>Patent Law Cap 400<br>
Patents (Amendment) Acts No. 26 of 1987<br> 
Patents Regulations<br>
Patents (Amendment) Regulations 1981<br>
Patent Rules Section 81 (Appeals)<br>
Plant Breeders Rights Act No. 18 of 2007<br>
Biosafety Act 2007</a>
							
						</div>
						
						<div id="zimbabwe" class="tabcontent2">
						 	<h5 style="color:#507536; font-weight: bolder;">National IP and Biosafety Laws </h5>
							 <p><b>Zimbabwe</b></p>
							 <a>Patents Act Chapter 26:03 of 1971<br>
Plant Breeders Rights Act 18:16 of 1973<br>
National Biotechnology Authority Act</a>
							
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
<script>
function openCity2(evt, cityName) {
  var i, tabcontent2, tablinks2;
  tabcontent2 = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent2.length; i++) {
    tabcontent2[i].style.display = "none";
  }
  tablinks2 = document.getElementsByClassName("tablinks2");
  for (i = 0; i < tablinks2.length; i++) {
    tablinks2[i].className = tablinks2[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen2").click();
</script>
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>