<?php
$anviltech_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'anviltech_options', array() ), $anviltech_options );?>
<div class="custom-header-media">
    <div class="container">    
        <div class='cover'>
            <div class="header-text" id="header-content">
                <h1 class="text-uppercase text-left header-text" id="site-title"><?php bloginfo( 'name','anviltech' ); ?></h1>
                <p class="text-left"  id="site-description"><?php bloginfo( 'description' ); ?></p>
            </div>
                <h1 class="text-uppercase text-left header-text"><?php echo esc_html($current_options['second_header_title']); ?></h1>
            <div class="browse-button-helper1">
                <button class="btn header-browse-button" type="button" style="background-image: url('<?php echo esc_url(get_theme_mod('button_bg')); ?>')"><?php echo get_theme_mod('button_text') ;?>
                    </button>
            </div>
        </div>
    </div>
<?php the_custom_header_markup(); ?>
</div>