<?php
/*
*Template Name: Aatf About Page Template
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
p{ margin-bottom:7px; line-height:22px; }
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
		$args = array('post_type' => 'About_accordions', 'posts_per_page' => 4, 'order' => 'ASC',);
        $count = 0;
        $about_aatf= new WP_Query( $args );?>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!-- Page Content -->
        <main class="page-content">

            <!-- Services Area -->
            <section class="services-area centerbg"  style="padding:30px;">
                <div class="container"> 
                    <div class="row ">
						<div class="col-xl-12 col-lg-12 col-12 offset-0">
							<div class="section-title text-center">
                  <h2 style="color:#AC842D;"><?php the_title();?></h2> 
							</div>
						</div>
					</div>
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
			 <section class="services-area white-bg"  style="padding:30px;">
                <div class="container">
					<div class="row" id="publications">
					 <div class="tab" style="width:100%;">
					<?php while ( $about_aatf->have_posts() ) :  $about_aatf->the_post();?>
						  <button class="tablinks tp" onClick="openCity(event, '<?php the_title();?>')" id="defaultOpen"><?php the_title();?></button>
					<?php wp_reset_query(); ?>
					<?php endwhile;?>
						</div>
						<?php while ( $about_aatf->have_posts() ) :  $about_aatf->the_post();?>
						<div id="<?php the_title();?>" class="tabcontent"> 
							<div class="row">
						  		<div class="col-md-12 col-sm-12 col-xs-12 col-12">
									<h4><?php the_title();?></h4>
									<p><?php echo the_content();?>
						  		</div> 
							</div>
						</div>
					<?php wp_reset_query(); ?>
        			<?php endwhile;?>
					 </div>
                </div>
            </section>
            <!--// Services Area --> 
			
			<!-- Services Area -->
            <section class="services-area centerbg" id="where"  style="padding:30px;">
                <div class="container"> 
                    <div class="row no-gutters align-items-center">
						<div class="col-xl-6 col-lg-6 col-12 offset-0 " style="padding-right:50px;">
							<div class="section-title">
                                 <h2 style="color:#AC842D;">WHERE WE ARE</h2>
							</div>
							<p>AATF is active in 13 countries of east, southern and west Africa, currently addressing challenges bedeviling key staples in Sub-Saharan Africa that include maize, rice, cassava, cowpeas, bananas and potatoes.</p>
							<a href="our-projects.php" class="cr-btn"> <span>Click here for more information</span> </a> 
											
						</div>
						<div class="col-xl-4 col-lg-4 col-12 offset-0 ">
							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
						</div>
						<div class="col-xl-2 col-lg-2 col-12 offset-0">
						</div>
					</div>
				</div>
			</section> 
			<!-- Partners Logos -->
            <?php get_template_part('template-parts/partners-logo-section'); ?>
            <!--// Parteners Logos -->
			<section style=" padding:20px 10px;">
                <div class="container">
					<div class="row" style="margin-bottom:30px;"> 
						<div class="col-xl-12 col-lg-12 col-12 offset-0 centerbg2">
							<div class="centered-b text-center">
								<font style="float:left; color: #999999; margin-right:10px;"> <i class="fa fa-quote-left"></i> </font>
								<p style="text-align:center;">AATF is showing real promise and is a problem solver in bringing innovative technologies to smallholder farmers in an accessible, sustainable form.<br>-Sir Gordon Conway</p> 
<font style="float:right; color: #999999;"> <i class="fa fa-quote-right"></i> </font>
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

        <!-- Footer Area -->
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
