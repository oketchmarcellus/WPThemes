<!-- Top Wrapper -->
  <div class="top-wrapper hidden-xs">
    <div class="container">
      <div class="row">
        <div id="site-logo" class="col-md-5 col-sm-3 col-xs-3" style="padding:12px 0;">
        <?php $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id,'full');?>
            <img class="img-responsive logo-img" src="<?php echo esc_url($logo[0]);?>">
            <?php if (!has_custom_logo()){?>
            <img class="img-responsive logo-img" src="<?php echo get_template_directory_uri()?>/images/logo.png"></a>
          <?php }?>
         <?php;?>
        </div>
        <div class="col-md-7 col-sm-9 col-xs-9" style=" padding:12px 0;"> 
		   <div class="row">
		   		
				<div class="col-md-4 col-sm-4 col-xs-4" style="padding:0px;"> 
             		<div class="row">
             		<div class="col-md-2 col-sm-2 col-xs-2"><br /><img src="<?php echo get_template_directory_uri()?>/images/icons/OUR-LOCATIONS-ICON.PNG" width="20px" /> </div>
             		<div class="col-md-10 col-sm-10 col-xs-10" style="padding:0px;">
						<?php
							get_template_part( 'template-parts/widgets/header-address-widget' );
        				?> 
					</div>
					</div>
			   </div>
			   
			   <div class="col-md-1 hidden-sm hidden-xs" style="padding:0px;"> <center><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/icons/CONTACT-ICON-SEPARATOR.JPG" style="margin-top:25%;" /></center> </div>
			   
			   <div class="col-md-3 col-sm-4 col-xs-4" style="padding:0px;">
			   		<div class="row">
			   		<div class="col-md-3 col-sm-2 col-xs-2"><br /><img src="<?php echo get_template_directory_uri()?>/images/icons/EMAIL-US-ICON.PNG" width="20px" />
             		</div>
			   		<div class="col-md-9 col-sm-10 col-xs-10" style="padding:0px;">
						<?php
							get_template_part( 'template-parts/widgets/header-email-widget' );
        				?>
					</div>
					</div>
			   </div>
			   
			   <div class="col-md-1 hidden-sm hidden-xs" style="padding:0px;"> <center><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/icons/CONTACT-ICON-SEPARATOR.JPG" style="margin-top:25%;" /></center> </div>
			   
			   <div class="col-md-3 col-sm-4 col-xs-4" style="padding:0px;">
			   		<div class="row">
			   		<div class="col-md-3 col-sm-2 col-xs-2"><br /> <img src="<?php echo get_template_directory_uri()?>/images/icons/CALL-US-ICON.PNG" width="20px" />
             		</div>
			   		<div class="col-md-9 col-sm-10 col-xs-10" style="padding:0px;">
						<?php
							get_template_part( 'template-parts/widgets/header-phone-widget' );
        				?> 
					</div>
					</div> 
			   </div>
			   
		   </div>
        </div>
		
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end wrapper -->