<?php 
    $musicstudio_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'production_options', array() ),$musicstudio_options); 
if($current_options['section3_enabled'] == true) { ?>
<section class="releases">
        <div class="heading-helper" id="releases-icon"><img class="img-responsive heading-icon" src="<?php echo get_theme_mod( 'releases_post_icon',get_template_directory_uri().'/assets/img/production-template-icons-homepage-new-releases.png'); ?>">
            <h2 class="text-uppercase heading" id="releases-heading"><?php  echo get_theme_mod('releases_post_heading',__('new releases','production')); ?></h2></div>
        <div class="container releases-post">
            <p><?php  echo get_theme_mod('releases_post',__('Here is a sneak peek into our Recent production Projects','production')); ?></p>
        </div>
        <div class="releases-thumbs">
            <div class="col-lg-4 col-md-4">
                <div id="img-release1"><img class="img-responsive" src="<?php echo get_theme_mod( 'releases_img_upload_one',get_template_directory_uri().'/assets/img/images_08.jpg'); ?>">
                    <h4 class="text-uppercase project-heading" id="upload1-title"><?php  echo get_theme_mod('releases_upload1_title',__('turn up','production')); ?></h4>
                    <p class="projects-txt" id="upload1-subtitle"><?php  echo get_theme_mod('releases_upload1_subtitle',__('Ginger','production')); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="img-release2"><img class="img-responsive" src="<?php echo get_theme_mod( 'releases_img_upload_two',get_template_directory_uri().'/assets/img/images_05.jpg'); ?>">
                    <h4 class="text-uppercase project-heading" id="upload2-title"><?php  echo get_theme_mod('releases_upload2_title',__('up vote','production')); ?></h4>
                    <p class="projects-txt" id="upload2-subtitle"><?php  echo get_theme_mod('releases_upload2_subtitle',__('Makkain','production')); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="img-release3"><img class="img-responsive" src="<?php echo get_theme_mod( 'releases_img_upload_three',get_template_directory_uri().'/assets/img/images_11.jpg'); ?>">
                    <h4 class="text-uppercase project-heading" id="upload3-title"><?php  echo get_theme_mod('releases_upload3_title',__('jazzy beat','production')); ?></h4>
                    <p class="projects-txt" id="upload3-subtitle"><?php  echo get_theme_mod('releases_upload3_subtitle',__('Jazzy Sax','production')); ?></p>
                </div>
            </div>
        </div>
        <div>
        </div>
    </section>
<?php } ?>