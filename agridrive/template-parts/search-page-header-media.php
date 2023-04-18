<div class="inner-banner about-banner" style="background-image: url('<?php echo get_template_directory_uri().'/images/about/about-header-bg.jpg'?>');">
  <div class="container">
  <?php if ( have_posts() ) : ?>
    <h2><?php printf( __( 'Search Results for: %s', 'agridrive' ), '<span>' . get_search_query() . '</span>' ); ?><font color="#a35719"></h2>
  <?php endif;?>
    <ul class="inner-breadcrumb">
      <?php get_agridrive_breadcrumb();?>
    </ul>
  </div>
</div>

