<?php
/*
*Template Name: Aatf Careers Page Template
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

.service-style-4 {
    min-height: inherit; 
    background: #AD832D;
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
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		$args = array('post_type' => 'Aatf_jobs', 'posts_per_page' => 10, 'order' => 'ASC',);
        $count = 0;
        $aatf_jobs= new WP_Query( $args );?>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
<!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!-- Page Content -->
        <main class="page-content">

            <!-- Services Area -->
            <section class="services-area section-padding-xs  centerbg">
                <div class="container">  
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-12 offset-0">
							<div class="section-title text-center">
                                 <h2 style="color:#AC842D;"><?php the_title();?></h2> 
							</div>
						</div>
					</div>
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
					
					<div class="row">
					 <div class="tab" style="width:100%;">
						  <button class="tablinks" style="width:50%;" onClick="openCity(event, 'London')" id="defaultOpen">CAREERS & VACANCIES</button>
						  <button class="tablinks"  style="width:50%;" onClick="openCity(event, 'Paris')">RFPs</button> 
						</div>
						
						<div id="London" class="tabcontent"> 
						  <div class="row services-grid">
						  	<?php  while ( $aatf_jobs->have_posts() ) :$aatf_jobs->the_post();{ ?>
							<!-- Single Job -->
							<div class="col-lg-12 col-md-12 col-12">
								<div class="service service-style-4"> 
									<div class="service-content-2">
										<h4><?php the_title();?></h4>
										<p><?php echo the_content();?></p> <br>
										 <a href="<?php echo esc_url(get_permalink());?>" class="cr-btn"> <span>Read More</span> </a> 
									</div>
								</div>
							</div>
							<!--// Single Job --> 
							<?php } wp_reset_query(); $count++; endwhile; ?>	
						</div>
						</div>
						
						<div id="Paris" class="tabcontent">
						  <div class="row services-grid">

							<!-- Single Job -->
							<div class="col-lg-12 col-md-12 col-12">
								<div class="service service-style-4"> 
									<div class="service-content-2">
										<h4> RFP  </h4>
										<a href="careers-inner.php" class="cr-btn"> <span>Download</span> </a> 
									</div>
								</div>
							</div>
							<!--// Single Job -->
						 </div>
						</div> 
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
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>