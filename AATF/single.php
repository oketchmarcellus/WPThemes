<?php
/*
*Template Name: AAT Single post Template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage agridrive
* @since sept2017 1.0
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
		.pg-text { width:100%; background:#c5e0b1; padding-top:100px; padding-left:5px; padding-right:5px; min-height:420px;  } 
		.counter { padding: 5px;  background:#EFB41A; }
		.counter-pg { margin:2px 7px;  }
</style>
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

            <!-- Feature Area -->
            <section id="feature-area" class="feature-area section-padding-xs bg-white">
                <div class="container">
                    <div class="row justify-content-center services-grid">

                        <!-- Signle Service -->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-7 col-12" style="padding-right:30px;">
							<div class="section-title" style="margin-bottom:20px;">
								<h3 style="color:#AC842D; margin-bottom:0;"><?php the_title();?></h3> 
							</div> 
							<h5>by <?php the_author(); ?></h5>
							<?php echo get_the_content(); ?>
                        </div>
                        <!--// Signle Service -->
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </section>
            <!--// Feature Area -->
			
			 
			
			<!-- Call To Action Area -->
            <?php get_template_part('template-parts/call-to-action'); ?>
      <!--// Call To Action Area -->
        </main>
        <!--// Page Content -->

    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
<?php endwhile; endif;?>
<!-- //Page Content -->
<?php get_footer(); ?>