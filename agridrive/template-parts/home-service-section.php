<?php
/**
* Services Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );
$agridrive_services_content = get_theme_mod( 'agridrive_services_content');

if($current_options['service_section_enabled'] == true){ ?>
<section class="our-services">
  <div class="container">
    <?php if($current_options['service_title']) { ?>
    <h2 id="services-heading">What we do <span>Our Services</span></h2>
    <?php }?>
    <div id="services">
      <?php if ( ! empty( $agridrive_services_content ) ) {
        $allowed_html = array(
          'br'     => array(),
          'em'     => array(),
          'strong' => array(),
          'b'      => array(),
          'i'      => array(),
          'li'     =>array(),
          'ul'     =>array(),
          );
        $agridrive_services_content = json_decode( $agridrive_services_content );
            foreach ( $agridrive_services_content as $selected_item ) {
            $icon = $selected_item->icon_value;
            $title = $selected_item->title;
            $text = $selected_item->text;
            $link = $selected_item->link;
            $image = $selected_item->image_url;
            $color = $selected_item->color; 
            {?>
            <div class="col-lg-4 col-md-4 item">
              <div class="services"><?php if ( ! empty( $icon ) ) :?><i class="<?php echo esc_html( $icon ); ?>" aria-hidden="true"></i><?php endif; ?>
                <?php if ( ! empty( $title ) ) : ?>
                  <h3><?php echo esc_html( $title ); ?></h3>
                <?php endif; ?>
                <?php if ( ! empty( $text ) ) : ?>
                  <p><?php echo wp_kses( html_entity_decode(wp_trim_words($text,58)), $allowed_html ); ?></p>
                <?php endif; ?>
                <!--a href="javascript:void(0)">Read More</a--> 
              </div>
            </div>
            <?php }
        }
      }else{
            $title = array (__('farm mechanization','agridrive'), __('agribusiness advisory','agridrive'), __('model farms','agridrive'), __('seed production','agridrive'));
            $icon = array('fa fa-gears','fa fa-wechat','fa fa-pagelines','fa fa-pagelines');
            $text = array(__('We provide advanced farming systems based on digital agriculture and precision farming that will see you attain higher yields at a much lower cost and with minimal labour involvement. Our services include Crop Production, Irrigation, Fertilization, and Inputs Support, Harvesting, Post-Harvest Management, Agro-Processing, and Sales services. Whatever phase of farming you are at, we will be able to provide the machines just at the right time and a competitive rate.','agridrive'),__('Agridrive offers tailor-made agribusiness consultancy that will enable you to move your farm to a higher level of profitability. Backed by a team of experts with long-standing experience in Agriculture within Sub-Saharan Africa, we provide various specialized services to boost your productivity. These include Agribusiness Advisory, Royalty Management, Technology Licensing, Farm-to-market linkages, and Financial linkages.','agridrive'),__('We provide paid for technology demonstration services for Research Institutions, Universities, Private companies (seed companies) and Farmers, both large as well as small scale. Through the model farms, we also offer Agribusiness Incubation and Business Support, Horticulture under greenhouse system, High-value cash crops, and production for export as well as local markets.','agridrive'),__('Through our research and innovation lab, we develop new breeds of various crops that are adapted to local climatic conditions of different geographical locations. The crops include maize, cassava, cowpea, rice, and beans among many others. We’ve partnered with leading agrichemical companies for seed production and distribution across Africa.  With our seeds, farmers will be able to enjoy higher yields and reduced cost in disease mitigation.','agridrive'));
            for($i=0; $i<=3; $i++) { ?>
              <div class="col-lg-4 col-md-4 item">
                <div class="services"><i class="<?php echo $icon[$i]; ?> fa-4x text-primary sr-icons"></i>
                  <h3><?php echo $title[$i]; ?></h3>
                  <p class="text-muted"><?php  echo wp_trim_words($text[$i],28); ?></p>
                </div>
              </div>
            <?php }
          }?>  
    </div>
  </div>
</section>
<?php } ?>