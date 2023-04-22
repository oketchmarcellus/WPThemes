<?php
/*
*Template Name: AATF News and Updates Template
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


			<!-- STORIES Area -->
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
        <?php  $args = array('post_type' => 'post', 'posts_per_page' => 18, 'category_name'=>'news-updates-category', 'post_status'=>'publish','orderby'=>'date');
              $count=0;
              $news_item= new WP_Query( $args );
              if ( $news_item->have_posts() ) : while ( $news_item->have_posts() ) :$news_item->the_post(); ?>
              <!-- Signle Service -->
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="service service-style-4 ">
                      <div class="service-image">
                          <a href="<?php echo esc_url(get_permalink());?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"></a>
                      </div>
                      <div class="service-content">
                          <a href="<?php echo esc_url(get_permalink());?>"><h5><?php the_title();?></h5> </a> 
                          <a href="<?php echo esc_url(get_permalink());?>" class="cr-btn"> More > </a>
                      </div>
                  </div>
              </div>
              <!--// Signle Service -->
            <?php wp_reset_query(); endwhile; endif;?>
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
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>
