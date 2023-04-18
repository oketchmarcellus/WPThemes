<?php
/**
* Newsletter Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );

if($current_options['newsletter_form_section_enabled'] == true){ ?>
<section class="newsletter">
  <div class="container">
    <h2 id="newsletter_form"><font color="#a35719">Join us</font> <span>Newsletter signup</span></h2>
  </div>
  <div class="newsletter-bg" id="newsletter-form" style="background-image:url('<?php echo get_template_directory_uri()?>/images/newsletter-bg.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <p style="color:#000000;">Subscribe to keep up to date with our latest news & innovations.</p>
        </div>
        <div class="col-sm-12 col-md-8">
          <div class="form">
            <input type="text" placeholder="Enter your Email" id="exampleInputName" class="form-control first">
            <input type="text" class="bttn" value="Subscribe">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>