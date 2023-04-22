<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?> 
	<style> 
	.logo, .menu{ text-align:center; } 
	.slide-h5{ color:#507536; font-size:24px; font-weight:700; }
	.slide-bg{ background:rgba(255,255,255,0.9); width:100%; padding:20px 25px; }
	.home-left {
  	background-image: url(images/bg/AATF-HOME-PAGE---Our-Manifesto-Section-LEFT.jpg);
  	background-repeat: no-repeat;
  	background-size: cover;
  	background-position: center center; 
  	color:#FFFFFF; padding:60px 15px; font-size:18px; }
  
	.home-right {
  	background: url(images/bg/AATF-HOME-PAGE---Our-Manifesto-Section-RIGHT.jpg);
  	background-repeat: no-repeat;
  	background-size: cover;
  	background-position: center center;  
  	color:#FFFFFF; padding:70px 15px;  font-size:18px; }
  	.service-style-4{ min-height:420px; background:#AD832D; }
 	.cr-btn{ bottom:0; }
	@media only screen and (max-width: 767px) {
	.mapp{ visibility:hidden; display:none; }
	.map-container, .impact-home{ padding:0;}
	</style>
</head>

<body <?php body_class(); ?>>
<!-- Add your site or application content here -->

<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
<!-- //Header -->

<header class="header header-style-1  sticky-header megamenu-container">

<!--div class="container d-none d-lg-block" style="width:98%;"-->
<div class="d-none d-lg-block" style="width:90%; margin:auto;">
    <div class="row">
        <?php get_template_part('template-parts/wpbootstrap-nav'); ?>
    </div>
</div>

<!-- Mobile Menu -->
<div class="mobile-menu-wrapper">
    <div class="container d-block d-lg-none">
        <div class="mobile-menu clearfix">
            <a class="mobile-logo" href="index.php">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-secondary-light.png" width="120" alt="mobile logo">
            </a> 
        </div>
    </div>
</div>
<!-- //Mobile Menu -->

</header>

<div class="search-form-wrapper">
<form class="search-form" id="" action="">
  <div class="input-group">
	 <input type="text" name="search" class="search form-control" placeholder="Search">
	 <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i>
	 </span>
	 <span class="input-group-addon search-close" id="basic-addon2"><i class="fa fa-window-close" aria-hidden="true"></i>
	 </span>
  </div>
</form>
</div>

<!-- Header End -->