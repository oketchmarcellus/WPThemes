<?php
/**
* Agridrive Contact Page
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );
$agridrive_contact_page_content = get_theme_mod( 'agridrive_contact_page_content');?>
<!-- Inner Wrapper Start -->
<?php if (get_post_meta( get_the_ID(), 'agridrive-agridrive_contacts_checkbox', true )): ?>
<div class="inner-wrapper contact-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-7">
        <h2><?php echo esc_html($current_options['contact_page_title']) ;?></h2>
        <div class="row">
          <?php if ( ! empty( $agridrive_contact_page_content ) ) {
        $agridrive_contact_page_content = json_decode( $agridrive_contact_page_content );
            foreach ( $agridrive_contact_page_content as $selected_item ) {
            $icon = $selected_item->icon_value;
            $title = $selected_item->title;
            $text = $selected_item->text;
            $color = $selected_item->color; 
            {?>
          <div class="col-sm-4">
            <div class="address">
              <div class="icon-border">
                <div class="icon"><?php if ( ! empty( $icon ) ) :?>
                  <i class="<?php echo esc_html( $icon ); ?>" aria-hidden="true"></i>
                <?php endif; ?>
                </div>
              </div>
              <?php if ( ! empty( $title ) ) : ?>
              <p><strong><?php echo esc_html( $title ); ?></strong> <br></p>
              <?php endif; ?>
              <?php if ( ! empty( $text ) ) : ?>
              <p><?php echo ( $text); ?></p>
              <?php endif; ?>
            </div>
          </div>
          <?php }
          }
      }else{
            $icon = array('fa fa-map','fa fa-phone','fa fa-envelope');
            $title = array (__( 'Office', 'agridrive' ), __( 'phone', 'agridrive' ), __( 'email', 'agridrive' ));
            $text = array(__('Old Naivasha Road, Nairobi Kenya
                  ARCN Annex, No 3 Ibrahim Idris Street-Jabi Abuja, Nigeria','agridrive'),__('+254 20 42 23 752
                  +234 98 70 16 84','agridrive'),__('info@agridrive.ke
                   info@agridrive.co.ng','agridrive'));
            for($i=0; $i<=3; $i++) { ?>
              <div class="col-sm-4">
                <div class="address">
                  <div class="icon-border">
                    <div class="icon"><i class="<?php echo $icon[$i]; ?> fa-4x text-primary sr-icons"></i>
                    </div>
                  </div>
                  <p><strong><?php echo $title[$i]; ?></strong></p>
                  <p><?php  echo ($text[$i]); ?></p>
                </div>
              </div>
            <?php }
          }?> 
        </div>
      </div>
      <div class="col-sm-12 col-md-5">
        <h2>Leave a Message</h2>
        <div class="forms">
        <?php echo do_shortcode('[contact-form-7 id="172" title="Contact form 1"]');?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif;?>
<!-- Inner Wrapper End --> 
