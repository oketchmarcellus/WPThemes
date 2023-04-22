<?php
/*
*Template Name: AATF Projects Higlights 
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>
 <style>  .service-content-2 h4{ color:#AC832D; } </style>    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        $args1 = array('post_type' => 'Aatf_projects', 'posts_per_page' => 100, 'order' => 'ASC',);
        $count = 0;
        $project_items= new WP_Query( $args1 );?>
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
						<div class="col-xl-12 col-lg-12 col-12 offset-0">
							<div class="section-title text-center">
                                 <h2 style="color:#AC842D;">AATF PROJECTS</h2> 
							</div>
						</div>
					</div-->
					<div class="row" style="margin-bottom:30px;"> 
						<div class="col-xl-12 col-lg-12 col-12 offset-0">
							<div class="centered-b text-center">
								<font style="float:left; color: #999999; margin-right:10px;"> <i class="fa fa-quote-left"></i> </font>  
								<p style="color:#507536; text-align:center;"><?php echo get_the_content(); ?></p>  
<font style="float:right; color: #999999;"> <i class="fa fa-quote-right"></i> </font>
							</div> 
							 
						</div>  
					</div>
				</div>
			</section>
			
			<section class="services-area  bg-white" style="padding:30px;">
                <div class="container"> 
					
					<div class="row services-grid">
                         <?php while ( $project_items->have_posts() ) :  $project_items->the_post();?>
                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="service service-style-4">
                                <div class="service-image">
                                <a href="TELA-Maize-project.php"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"></a>
                                </div>
                                <div class="service-content-2">
                                    <a href="<?php echo esc_url(get_permalink());?>"><h4><?php the_title();?></h4></a>
                                    <p>Protecting maize against drought and insect damage</p> <br><br>
									 <a href="<?php echo esc_url(get_permalink());?>" class="cr-btn"> <span>Read More</span> </a> 
                                </div>
                            </div> 
                        </div>
                        <!--// Signle Service -->
                        <?php endwhile;?>
                    </div>
                </div>
            </section>
            <!--// Services Area --> 
			
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
        <!--// Page Content -->
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>