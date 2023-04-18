<?php
/*
Template Name: Contacts template
* @link http://prodigi.co.ke
* @package WordPress
* @subpackage Boot2Press
* @since sept2017 1.0
*/
?>
<?php get_header(); ?>

<body <?php body_class(); ?>>
<div class="cover">
    <div class="container">
        <section>
            <h2 class="text-center"><?php the_title();?></h2>
            <hr class="small">
            <form>
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Email Address</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Phone Number</label>
              <input type="tel" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Message</label>
              <textarea class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
          </div>
        </form>
        </section>
    </div>
</div>
    <aside class="call-to-action bg-primary text-white">
        <div class="aside text-center">
            <h3><?php  echo get_theme_mod('button_section_text'); ?></h3><a class="btn btn-lg btn-light" role="button" 
            href="<?php  echo get_theme_mod('section_button1_link'); ?>"><?php  echo get_theme_mod('section_button1_Text'); ?></a>
            <a class="btn btn-lg btn-dark" role="button" href="<?php  echo get_theme_mod('section_button2_link'); ?>">
                <?php  echo get_theme_mod('section_button2_Text'); ?></a></div>
    </aside>
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_option('map_API') ;?>"></iframe>
      <br/><small><?php bloginfo('name')?><a class="google-link" href="<?php echo get_option('map_url') ;?>">google maps</a></small></section>
    <?php get_footer(); ?>