<?php
/**
* Services Section
*/  
$agridrive_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $agridrive_options );
$agridrive_service_content = get_theme_mod( 'agridrive_service_content');

if($current_options['stats_section_enabled'] == true){ ?>
<section class="statistics" style="background-image: url(<?php echo get_theme_mod('statsbg_img_upload',get_template_directory_uri().'/images/homepage/STATISTICS-IMAGE.png'); ?>">
	<div class="container text-center">
		<div class="stats">
		<div class="row">
            <?php if ( ! empty( $agridrive_stats_content ) ) {
                $allowed_html = array(
                'br'     => array(),
                'em'     => array(),
                'strong' => array(),
                'b'      => array(),
                'i'      => array(),
            );
            $agridrive_stats_content = json_decode( $aagridrive_stats_content );
            foreach ( $agridrive_stats_content as $selected_item ) {
                $icon = $selected_item->icon_value;
                $title = $selected_item->title;
                $text = $selected_item->text;
                $color = $selected_item->color; 
                {?>
                    <div class="col-sm-3">
                        <div class="count-content">
                        <?php if ( ! empty( $icon ) ) :?>
                            <div class="count-icon">
                                <i class="<?php echo esc_html( $icon ); ?>" aria-hidden="true"></i>
                            </div>
                            <?php endif; ?>
                            <div class="count">
                                <?php if ( ! empty( $title ) ) : ?>
                                <h1 class="count-number"> <?php echo esc_html( $title ); ?> </h1>
                                <?php endif; ?>
                                <?php if ( ! empty( $text ) ) : ?>
                                <div class="count-text"> <?php echo wp_kses( html_entity_decode( $text ), $allowed_html );?> 
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php }
                    }
                }else{
                    $icon = array('fa fa-globe','fa fa-home','fa fa-users','fa fa-plane','fa fa-plane');
                    $title = array (__( '16000 +HA', 'agridrive' ), __( '2000+', 'agridrive' ), __( '12+', 'agridrive' ), __( '5+', 'agridrive' ));
                    $text = array(__('Mechanized to date','agridrive'),__('Trained Farmers','agridrive'),__('Mechanization Technolgies Applied','agridrive'),__('Countries in Africa','agridrive'));
                    for($i=0; $i<=3; $i++) { ?>
                    <div class="col-sm-3">
                        <div class="count-content">
                            <div class="count-icon">
                                <i class="<?php echo $icon[$i]; ?>" aria-hidden="true"></i>
                            </div>
                            <div class="count">
                                <h1 class="count-number"> <?php echo $title[$i]; ?> </h1>
                                <div class="count-text"> <?php  echo ($text[$i]); ?> </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    }?> 
                             
            </div>
    	</div>
	</section>
<?php } ?>

