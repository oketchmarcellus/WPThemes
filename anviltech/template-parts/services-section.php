<?php
/**
* Services Section
*/  
$anviltech_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'anviltech_options', array() ), $anviltech_options );
$anviltech_service_content = get_theme_mod( 'anviltech_service_content');

if($current_options['service_section_enabled'] == true){ ?>
    <section>
        <div class="container">
            <div class="row service-row">
                <div class="col-md-12 text-center">
                <?php if($current_options['service_title']) { ?>
                    <h2 class="section-heading" id='testhead'><?php echo esc_html($current_options['service_title']); ?></h2>
                <?php }?>
                <hr class="primary-hr">
                </div>
                <?php if ( ! empty( $anviltech_service_content ) ) {
                        $anviltech_service_content = json_decode( $anviltech_service_content );
                            foreach ( $anviltech_service_content as $selected_item ) {
                            $icon = $selected_item->icon_value;
                            $title = $selected_item->title;
                            $text = $selected_item->text;
                            $link = $selected_item->link;
                            $image = $selected_item->image_url;
                            $color = $selected_item->color; 
                            {?>
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                            <div class="service-box">
                            <?php if ( ! empty( $icon ) ) :?>
                                <i class="fa <?php echo esc_html( $icon ); ?> fa-4x text-primary sr-icons"></i>
                            <?php endif; ?>
                            <?php if ( ! empty( $title ) ) : ?>
                                <h3><?php echo esc_html( $title ); ?></h3>
                            <?php endif; ?>
                            <?php if ( ! empty( $text ) ) : ?>
                                <p class="text-muted"><?php echo ( $text ); ?></p>
                            <?php endif; ?>
                            </div>
                        </div>
                        <?php }
                        }
                    }
                    else{
                    $title = array (__('Html5','anviltech'), __('Android','anviltech'), __('WordPress','anviltech'), __('Joomla','anviltech'));
                    $icon = array('fa fa-html5','fa fa-android','fa fa-wordpress','fa fa-joomla');
                    $text = array('Have that idea for your site quickly converted into an Html 5 mockup.','We currently have ongoing projects for android.','We create and customize wordpress themes to your liking.','We create joomla templates from scratch for your site.');
                    for($i=0; $i<=3; $i++) { ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="service-box"><i class="<?php echo $icon[$i]; ?> fa-4x text-primary sr-icons"></i>
                        <h3><?php echo $title[$i]; ?></h3>
                        <p class="text-muted"><?php  echo $text[$i]; ?></p>
                        </div>
                    </div>
                    <?php }
                    }?>        
            </div>
        </div>
    </section>
<?php } ?> 