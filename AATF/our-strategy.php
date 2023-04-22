<?php
/*
*Template Name: Strategy Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>

    <!-- Add your site or application content here -->

     

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php include_once 'header.php'; ?>
        <!-- //Header -->

        <!-- Breacrumb Area -->
        <div class="breadcrumb-area-strategy"> 
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="cr-breadcrumb" >
                            <h1> OUR STRATEGY </h1> 
                        </div>
                    </div>
                </div> 
            
        </div>
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- Contact Us Area -->
            <div class="pg-contact-us-area">

                <!-- Contact Page Form and Map -->
                <div class="pg-contact-form-map-wrapper section-padding-xs" style="background:#e4f1d9;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"> </div>
							<div class="col-md-10 text-center">
                                 <h2 style="color:#AC842D;"><b>OUR STRATEGY</b></h2>
								 <p>Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit. Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.</p>
<p>Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit. Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.</p>
<p>Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit. Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.Lorem ipsum dolor sit amet is non dolar rolem ipsum dolor sit.</p>

                            </div>
							<div class="col-md-1"> </div>
                             
                        </div>
                    </div>
                </div>
                <!--// Contact Page Form and Map -->
				
				 

                

            </div>
            <!--// Contact Us Area --> 
			
			<!-- Call To Action Area -->
            <section style="background:#3b5d22; padding:20px 10px; color:#FFFFFF;">
                <div class="container">
                    <div class="row">
					
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-" style="padding-top:12px;"> <img src="images/icons/FOOTER-CALL-BUTTON.png" /> </div>
								<div class="col-md-10 col-sm-10 col-xs-10 ">CALL US TODAY <br> <b>254-20 422 3700</b> </div>
							</div> 
						</div>
						
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-" style="padding-top:12px;"> <img src="images/icons/FOOTER-LOCATION-ICON.png" /> </div>
								<div class="col-md-10 col-sm-10 col-xs-10 ">NAIROBI, KENYA <br> <b>  Naivasha Rd</b> </div>
							</div> 
						</div>
						
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-" style="padding-top:12px;"> <img src="images/icons/FOOTER-EMAIL-ICON.png" /> </div>
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

        <!-- Form Message -->
        <div class="cr-contact-message-modal">
            <p class="form-messege"></p>
        </div>
        <!--// Form Message -->

    </div>
    <!-- //Main wrapper -->


    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0"></script>
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
<?php get_footer(); ?>
<!-- //Footer Area -->