<?php
/**
* Networks and Partners Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );
$agridrive_network_partners_content = get_theme_mod( 'agridrive_network_partners_content');

if($current_options['net_partners_section_enabled'] == true){ ?>
<section class="our-network">
	<div class="container">
		<div class="row text-center" style="margin-bottom:30px;">
			<h2 id="networks-heading"><span>OUR <font color="#a35719"><strong>NETWORK</strong></font> </span></h2>
			<p>We Have an Extensive Network of Customers and Collaborating Partners across Africa. <br> Together, We Work To Make Africa a Food Sustainable Continent. </p>  
		</div>
		<div class="row">
		<?php if ( ! empty( $agridrive_network_partners_content ) ) {
        	$agridrive_network_partners_content = json_decode( $agridrive_network_partners_content);
            foreach ( $agridrive_network_partners_content as $selected_item ) {
            $image = $selected_item->image_url;
        {?>
			<div class="col-md-2"> 
			<?php if ( ! empty( $image ) ) : ?>
			<img src="<?php echo esc_html($image); ?>" /><?php endif; ?> 
			</div>
		<?php }
        }
      }else{
            $image = array(get_template_directory_uri().'/images/homepage/Our-partners-logo.png', get_template_directory_uri().'/images/homepage/Our-partners-logo.png', get_template_directory_uri().'/images/homepage/Our-partners-logo.png',get_template_directory_uri().'/images/homepage/Our-partners-logo.png',get_template_directory_uri().'/images/homepage/Our-partners-logo.png',get_template_directory_uri().'/images/homepage/Our-partners-logo.png',);
            for($i=0; $i<=5; $i++) { ?>
            <div class="col-md-2">
            <img class="img-responsive" src="<?php echo $image[$i]; ?>" style="vertical-align:top;" />
            </div>
      		<?php }
        }?>
		</div>
	</div>
</section>
<?php } ?>
