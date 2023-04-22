<?php
/*
*Template Name: Aatf Achievements Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>
<!-- Add your site or application content here -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!-- Page Content -->
        <main class="page-content">

            <!-- Services Area -->
            <section class="services-area section-padding-lg bg-white">
                <div class="container" style="width:70%; margin:auto;"> 
                    <div class="row services-grid">

                        <!-- Signle Service -->
                        <div class="col-lg-7 col-md-7 col-12">
                           
						    <!-- Counter Area -->
                 
                        <div class="counter-area-inner counter-style-2">
                            <div class="row no-gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
										 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3">
										 	<img src="<?php echo get_template_directory_uri(); ?>/images/impact/icon-1.png" width="60">
										 </div>
										 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10  col-xs-9 col-9">
										 	<div class="counter2">
												<h5 class="counter-active">12,877,887</h5>
												<h6>Number of total beneficiaries reached (farmers and other stakeholders)</h6>
											</div>
										</div>
									</div>
                                </div>
                                
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
										 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3">
										 	<img src="<?php echo get_template_directory_uri(); ?>/images/impact/icon-6.png" width="60">
										 </div>
										 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10  col-xs-9 col-9">
										 	<div class="counter2">
												<h5 class="counter-active">5,172,122</h5>
												<h6>Number of Smallholder farmers directly reached</h6>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
										 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3">
										 	<img src="<?php echo get_template_directory_uri(); ?>/images/impact/icon-7.png" width="60">
										 </div>
										 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10  col-xs-9 col-9">
										 	<div class="counter2">
												<h5 class="counter-active">81,215</h5>
												<h6>Number of Market system value chain actors</h6>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
										 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3">
										 	<img src="<?php echo get_template_directory_uri(); ?>/images/impact/icon-2.png" width="60">
										 </div>
										 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10  col-xs-9 col-9">
										 	<div class="counter2">
												<h5 class="counter-active">451</h5>
												<h6>Number of Seed companies and agrodealers engaged</h6>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
										 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3">
										 	<img src="<?php echo get_template_directory_uri(); ?>/images/impact/icon-3.png" width="60">
										 </div>
										 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10  col-xs-9 col-9">
										 	<div class="counter2">
												<h5 class="counter-active">27,694.87</h5>
												<h6>Number of Metric tonnes of New product seed sold</h6>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
										 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3">
										 	<img src="<?php echo get_template_directory_uri(); ?>/images/impact/icon-4.png" width="60">
										 </div>
										 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10  col-xs-9 col-9">
										 	<div class="counter2">
												<h5 class="counter-active">1,176,394.8</h5>
												<h6>Number of Hectares of Land area cultivated with AATF products</h6>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
										 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3">
										 	<img src="<?php echo get_template_directory_uri(); ?>/images/impact/icon-5.png" width="60">
										 </div>
										 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10  col-xs-9 col-9">
										 	<div class="counter2">
												<h5 class="counter-active">23</h5>
												<h6>Number of Countries in Africa with AATF presence/reach/coverage</h6>
											</div>
										</div>
									</div>
                                </div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
										 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3">
										 	<img src="<?php echo get_template_directory_uri(); ?>/images/impact/icon-9.png" width="60">
										 </div>
										 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10  col-xs-9 col-9">
										 	<div class="counter2">
												<h5 class="counter-active">656,783</h5>
												<h6> Number of farmers that AATF has educated on mechanization.</h6>
											</div>
										</div>
									</div>
                                </div> 
								
                            </div>
                        </div>
                     
                <!--// Counter Area -->
						   
						     
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-5 col-md-5 col-12">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/impact/AATF-Our-Impact-map.jpg" >  
                        </div>
                        <!--// Signle Service -->

                         

                    </div>
                </div>
            </section>
            <!--// Services Area --> 
			
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


    <!-- Google Map -->
    <script src="<?php echo get_template_directory_uri(); ?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.740610, -73.935242), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on

                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('google-map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.740610, -73.935242),
                map: map,
                title: 'Karbar',
                icon: "images/icons/marker.png",
                animation: google.maps.Animation.BOUNCE
            });
        }
</script>
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>
