<?php
/*
*Template Name: AATF Gallery Template
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
  color:#FFFFFF; font-size:24px; font-weight:bold;
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
	</style>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!-- Page Content -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php include_once 'header.php'; ?>
        <!-- //Header -->

        <!-- Breacrumb Area -->
        <div class="breadcrumb-area-infohub-gallery"> 
                 <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="cr-breadcrumb text-center" >
                            <h1> GALLERY </h1> 
                        </div>
                    </div>
                </div>  
            
        </div>
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">  


			<!-- Gallery Area -->
            <section class="portfolio-area section-padding-xs bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12 offset-0">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">AATF GALLERY</h2>
								<h4>Highlights</h4>
							</div> 
                        </div>
                    </div>
                

                <div class="portfolio-wrap">

                    <!-- Portfolios -->
                    <div class="row no-gutters portfolios portfolios-slider-active cr-slider-navigation-2 portfolios-zoom-button-holder">

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="images/gallery/cassava1.jpg" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                         
                                        <a href="images/gallery/cassava1.jpg" class="portfolio-zoom-trigger">
                                                <i class="flaticon-interface"></i> <br>
												Cassava
                                            </a>
											<h3> 
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio -->

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-creative">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="images/gallery/aflatoxin1.jpg" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="images/gallery/aflatoxin1.jpg" class="portfolio-zoom-trigger">
                                                <i class="flaticon-interface"></i> <br>
												Aflatoxin
                                            </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio -->

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="images/gallery/banana1.jpg" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="images/gallery/banana1.jpg" class="portfolio-zoom-trigger">
                                                <i class="flaticon-interface"></i> <br>
												Banana
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio -->

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-creative pfolio-filter-design">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="images/gallery/corporate1.jpg" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="images/gallery/corporate1.jpg" class="portfolio-zoom-trigger">
                                                <i class="flaticon-interface"></i><br>
												corporate
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio --> 

                    </div>
                    <!--// Portfolios -->

                </div>
				</div>
            </section>
            <!--// Gallery Area --> 
			
			<!-- Videos Area -->
            <section class="portfolio-area section-padding-xs bg-white" style="padding-top:0;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12 offset-0">
                            <div class="section-title" style="margin-bottom:20px;">
								<h2 style="color:#AC842D; margin-bottom:0;">AATF VIDEOS</h2>
								<h4>Highlights</h4>
							</div> 
                        </div>
                    </div>
                

                <div class="portfolio-wrap">

                    <!-- Portfolios -->
                    <div class="row no-gutters portfolios portfolios-slider-active cr-slider-navigation-2 portfolios-zoom-button-holder">

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/raPT7WKKvnk?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>
                                </div> 
                            </div>
							
                        </div>
                        <!--// Single Portfolio -->

                        <!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/dqM1WF4y8oQ?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>
                                </div> 
                            </div>
							
                        </div>
                        <!--// Single Portfolio -->
						
						<!-- Single Portfolio -->
                        <div class="portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/sYDZhewuELE?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>
                                </div> 
                            </div>
							
                        </div>
                        <!--// Single Portfolio -->  

                    </div>
                    <!--// Portfolios -->

                </div>
				</div>
            </section>
            <!--// Videos Area --> 
			<hr>
			 
			
			<!-- Call To Action Area -->
            <?php get_template_part('template-parts/call-to-action'); ?>
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
        <iframe width="100%" height="320" src="https://www.youtube.com/embed/eQd9TE5EnhQ?rel=0&modestbranding=1&autohide=1&showinfo=0&autoplay=0"> </iframe>  
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
<!-- //Main wrapper -->
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>