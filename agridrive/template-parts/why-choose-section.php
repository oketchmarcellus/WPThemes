<?php
/**
* WhyAgridrive Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );
$why_agridrive_content = get_theme_mod( 'why_agridrive_content');

if($current_options['why_agridrive_enabled'] == true){ ?>
<section class="why-choose">
  <div class="container">
    <div class="row">
    <?php if ( ! empty( $why_agridrive_content ) ) {
        $why_agridrive_content = json_decode( $why_agridrive_content);
            foreach ( $why_agridrive_content as $selected_item ) {
            $title = $selected_item->title;
            $text = $selected_item->text;
            $image = $selected_item->image_url;
    {?>
    <div class="col-sm-12 col-md-4" style="margin-bottom:15px;">
    
        <div class="choose-list">
        <div class="row"> 
        <div class="col-sm-2 col-md-3">
        <?php if ( ! empty( $image ) ) : ?>
        <div class="icon"> <img class="img-responsive" src="<?php echo esc_html($image); ?>" style="vertical-align:top;" /></div>
        <?php endif; ?>
        </div> 
      <div class="col-sm-10 col-md-9">
        <div class="list-cnt">
          <?php if ( ! empty( $title ) ) : ?>
            <h3><?php echo esc_html( $title ); ?></h3>
          <?php endif; ?>
          <?php if ( ! empty( $text ) ) : ?>
            <p><?php echo wp_trim_words( $text ,55); ?></p>
          <?php endif; ?>
        </div>
      </div>
      </div>
          <i class="fa fa-leaf" aria-hidden="true"></i> 
      </div>
      
    </div>
    <?php }
        }
      }else{
            $title = array (__('farm mechanization','agridrive'), __('agribusiness advisory','agridrive'), __('model farms','agridrive'), __('seed production','agridrive'));
            $image = array(get_template_directory_uri().'/images/icons/INNOVATION.png',get_template_directory_uri().'/images/icons/ONE-STOP-SHOP-SOLUTIONS.png', get_template_directory_uri().'/images/icons/SUSTAINABLE-APPROACHES.png');

            $text = array(__('Innovation is at the heart of our business operations. We have a team of experts who are continuously researching new ways of improving agribusiness productivity in Africa. This has enabled us to provide tomorrow’s technology today. With Agridrive, you will be receiving cutting-edge solutions as they are released right from our innovation labs.','agridrive'),__("Agridrive provides all the agribusiness solutions under one roof so that you don't have to deal with fragmented services from different suppliers with varying quality. We provide solutions right from plantation phase through to selling phase. We are keen on offering you the convenience you need and at much lower cost.",'agridrive'),__("We’ve embraced and inculcated sustainability approaches in our all our agribusiness solutions. Agridrive recognizes and appreciates the need to conserve our environment in as so much as it’s dedicated to contributing towards food security in Africa. Thus our solutions harmonize with the local ecosystem in order to support the long-term global sustainability agenda..",'agridrive'));
            for($i=0; $i<=2; $i++) { ?>
              <div class="col-sm-12 col-md-4" style="margin-bottom:15px;">
                <div class="choose-list">
                <div class="row"> 
                <div class="col-sm-2 col-md-3">
                  <div class="icon"> <img src="<?php echo $image[$i]; ?>" style="vertical-align:top;" /> </div>
                </div> 
                <div class="col-sm-10 col-md-9">
                  <div class="list-cnt">
                    <h3><?php echo $title[$i]; ?></h3>
                    <p><?php  echo wp_trim_words($text[$i],55); ?></p><br>
                  </div>
                </div>
                </div>
                <i class="fa fa-leaf" aria-hidden="true"></i>
               </div>
              </div>
            <?php }
          }?> 
    </div>
  </div>
</section>
<?php }?>