<?php
/*
*Template Name: AATF Team Template
* @link http://adroit.co.ke
* @package WordPress
* @subpackage Aatf
* @since Jan2021 1.0
*/
get_header(); ?>
<!-- Add your site or application content here -->
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
  background-color: #76ba43;
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
} .tabcontent p { text-align:center; }
.modal-dialog {
    max-width: 70%;
    margin: 30px auto;
}
</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

			$args = array('post_type' => 'Team_members', 'posts_per_page' => 100, 'order' => 'ASC',);
        	$count = 0;
        	$count1=0;
        	$aatf_team= new WP_Query( $args );?>

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <?php if ( ( is_single() || is_archive() || ( is_page() && !is_front_page() ) )): get_template_part('template-parts/page-header-media'); endif; ?>

        <!-- //Header -->
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">
  
			<!-- Services Area -->
            <section class="services-area" style="background:#E4F0D8; padding:30px;">
                <div class="container"> 
                    <div class="row">
						<div class="col-lg-12 col-md-12 col-12 offset-0 text-center">
						<div class="section-title text-center">
                                 <h2 style="color:#AC842D;"><?php the_title();?></h2>
							</div> 
						</div>
					</div>
					<div class="row">
					 <div class="tab" style="width:100%;">
						  <button class="tablinks" style="width:50%;" onClick="openCity(event, 'London')" id="defaultOpen">BOARD MEMBERS</button>
						  <button class="tablinks"  style="width:50%;" onClick="openCity(event, 'Paris')">STAFF MEMBERS</button> 
						</div>
						<div id="London" class="tabcontent"> 
						  <div class="row">
						  <?php  while ( $aatf_team->have_posts() ) :$aatf_team->the_post(); if (get_post_meta( get_the_ID(), 'aatfcheckbox_boardmember', true )) { ?>
						  	<div class="col-md-3 col-sm-3 col-xs-6 col-6">
								<a data-toggle="modal" data-target="#myModal<?php echo $count;?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"><br>
								<p><b><?php the_title();?></b> <br><?php echo (get_post_meta (get_the_ID(),'aatfjob_title', true)); ?></p></a>
							</div>
							<?php } wp_reset_query(); $count++; endwhile; ?> 
						</div>
						</div>
						<div id="Paris" class="tabcontent">
						  <div class="row">
						  <?php  while ( $aatf_team->have_posts() ) :$aatf_team->the_post(); if (get_post_meta( get_the_ID(), 'aatfcheckbox_staff', true )) { ?>
						  	<div class="col-md-3 col-sm-3 col-xs-6 col-6">
						  		<a data-toggle="modal" data-target="#myModal1<?php echo $count;?>">
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"> <br>
								<p><b><?php the_title();?></b><?php echo (get_post_meta (get_the_ID(),'aatfjob_title', true)); ?><br></p>
								</a>
						  </div>
						  <?php } wp_reset_query(); $count++; endwhile; ?>
						 </div>
						</div> 
					 </div>
				</div>
			</section>  
			
			<!-- Call To Action Area -->
            <?php get_template_part('template-parts/call-to-action'); ?>
            <!--// Call To Action Area -->
			<!-- Modal -->
			<?php  while ( $aatf_team->have_posts() ) :$aatf_team->the_post(); if (get_post_meta( get_the_ID(), 'aatfcheckbox_boardmember', true )) { ?>
			  <div class="modal fade" id="myModal<?php echo $count1;?>" role="dialog">
				<div class="modal-dialog"  style="width:80%">
				
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title" style="float:left;"><?php the_title();?></h4>
					</div>
					<div class="modal-body">
						<div class="row">

							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-top:12px;"> 
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"> <br>
								<p><b><?php the_title();?></b> <br>
								<?php echo (get_post_meta (get_the_ID(),'aatf-job_title', true)); ?></p> 
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12 "> 
							<?php echo the_content();?>

							</div>
						</div> 
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal" style="background:#507536;">Close</button>
					</div>
				  </div>
				  
				</div>
			  </div>
			  <?php } wp_reset_query(); $count1++; endwhile; ?>
			  <!-- Modal -->
			<?php  while ( $aatf_team->have_posts() ) :$aatf_team->the_post(); if (get_post_meta( get_the_ID(), 'aatfcheckbox_staff', true )) { ?>
			  <div class="modal fade" id="myModal1<?php echo $count1;?>" role="dialog">
				<div class="modal-dialog"  style="width:80%">
				
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title" style="float:left;"><?php the_title();?></h4>
					</div>
					<div class="modal-body">
						<div class="row">

							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-top:12px;"> 
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"> <br>
								<p><b><?php the_title();?></b> <br>
								<?php echo (get_post_meta (get_the_ID(),'aatf-job_title', true)); ?></p> 
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12 "> 
							<?php echo the_content();?>

							</div>
						</div> 
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal" style="background:#507536;">Close</button>
					</div>
				  </div>
				  
				</div>
			  </div>
			  <?php } wp_reset_query(); $count1++; endwhile; ?>

        </main>
<!--// Page Content -->

<!-- Form Message -->
<div class="cr-contact-message-modal">
    <p class="form-messege"></p>
</div>
<!--// Form Message -->

</div>
<!-- //Main wrapper -->
<!-- //Page Content -->
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>
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
