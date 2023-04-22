<!-- Our team Start -->
<?php 
$anviltech_options= template_data_setup();
$current_options = wp_parse_args(  get_option( 'agridrive_options', array() ), $anviltech_options );
if (get_post_meta( get_the_ID(), 'agridriveteam_section_checkbox', true )) { ?>
<section class="team">
  <div class="container">
<?php   $args = array('post_type' => 'Team_members', 'posts_per_page' => 100);
        $count = 0;
        $agri_team= new WP_Query( $args ); ?>
    <?php if ($current_options['directors_enabled']== true ): ?>
    <div class="row" style="margin-bottom:30px;">
    <h3>Board of Directors</h3>
    <hr style="border-bottom: dashed 1px #a35719">
    <p><?php echo esc_html($current_options['directors_job_description']) ;?></p>
    <?php  while ( $agri_team->have_posts() ) :$agri_team->the_post(); ?>
    <?php if (get_post_meta( get_the_ID(), 'agridrive-checkbox_director', true )) { ?>
        <div class="col-md-4 col-sm-4">
            <div class="team-intro">
                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title();?>" />
                <div class="team-name">
                    <p><strong><?php the_title();?></strong> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php echo $count;?>" class="team-btn team-popup">Read Bio</a>
                </div>
            </div>
        </div>
        <!-- The Modal Bio 1-->
        <div class="modal fade" id="myModal<?php echo $count;?>" tabindex="-1" role="dialog" data-modal="<?php echo $count;?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="modal-body row"> 
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" style="margin-right:5px; width:80%" /></div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <p><b><font style="font-size:16px;"><?php the_title();?></font></b> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p> <hr>
                            <p><?php echo the_content();?></p> 
                        </div><!-- end col-md-8 -->
                        </div> <!-- end modal-body row -->
                </div><!-- end modal-content  -->
            </div><!-- end modal-dialog -->
        </div>
        <?php }?>
        <?php wp_reset_query(); ?>
        <?php $count++;?>
        <?php endwhile; ?>
    </div>
    <?php endif;?>
    <?php if ($current_options['senior_managers_enabled']== true ): ?>
    <div class="row" style="margin-bottom:30px;">
    <h3>Senior Management</h3>
    <hr style="border-bottom: dashed 1px #a35719">
    <p><?php echo esc_html($current_options['senior_managers_job_description']) ;?></p>
    <?php  while ( $agri_team->have_posts() ) :$agri_team->the_post(); ?>
    <?php if (get_post_meta( get_the_ID(), 'agridrive-checkbox_senior_management_staff', true )) { ?>
        <div class="col-md-4 col-sm-4">
            <div class="team-intro">
                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title();?>" />
                <div class="team-name">
                    <p><strong><?php the_title();?></strong> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php echo $count;?>" class="team-btn team-popup">Read Bio</a>
                </div>
            </div>
        </div>
        <!-- The Modal Bio 1-->
        <div class="modal fade" id="myModal<?php echo $count;?>" tabindex="-1" role="dialog" data-modal="<?php echo $count;?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="modal-body row"> 
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" style="margin-right:5px; width:80%" /></div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <p><b><font style="font-size:16px;"><?php the_title();?></font></b> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p> <hr>
                            <p><?php echo the_content();?></p> 
                        </div><!-- end col-md-8 -->
                        </div> <!-- end modal-body row -->
                </div><!-- end modal-content  -->
            </div><!-- end modal-dialog -->
        </div>
        <?php }?>
        <?php wp_reset_query(); ?>
        <?php $count++;?>
        <?php endwhile; ?>
    </div>
    <?php endif;?>
     <?php if ($current_options['junior_managers_enabled']== true ): ?>
    <div class="row" style="margin-bottom:30px;">
    <h3>Junior Management</h3>
    <hr style="border-bottom: dashed 1px #a35719">
    <p><?php echo esc_html($current_options['junior_managers_job_description']) ;?></p>
    <?php  while ( $agri_team->have_posts() ) :$agri_team->the_post(); ?>
    <?php if (get_post_meta( get_the_ID(), 'agridrive-checkbox_junior_management_staff', true )) { ?>
        <div class="col-md-4 col-sm-4">
            <div class="team-intro">
                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title();?>" />
                <div class="team-name">
                    <p><strong><?php the_title();?></strong> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php echo $count;?>" class="team-btn team-popup">Read Bio</a>
                </div>
            </div>
        </div>
        <!-- The Modal Bio 1-->
        <div class="modal fade" id="myModal<?php echo $count;?>" tabindex="-1" role="dialog" data-modal="<?php echo $count;?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="modal-body row"> 
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" style="margin-right:5px; width:80%" /></div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <p><b><font style="font-size:16px;"><?php the_title();?></font></b> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p> <hr>
                            <p><?php echo the_content();?></p> 
                        </div><!-- end col-md-8 -->
                        </div> <!-- end modal-body row -->
                </div><!-- end modal-content  -->
            </div><!-- end modal-dialog -->
        </div>
        <?php }?>
        <?php wp_reset_query(); ?>
        <?php $count++;?>
        <?php endwhile; ?>
    </div>
    <?php endif;?>
    <?php if ($current_options['senior_staff_enabled']== true ): ?>
    <div class="row" style="margin-bottom:30px;">
    <h3>Senior Staff</h3>
    <hr style="border-bottom: dashed 1px #a35719">
    <p><?php echo esc_html($current_options['senior_staff_job_description']) ;?></p>
    <?php  while ( $agri_team->have_posts() ) :$agri_team->the_post(); ?>
    <?php if (get_post_meta( get_the_ID(), 'agridrive-checkbox_junior_management_staff', true )) { ?>
        <div class="col-md-4 col-sm-4">
            <div class="team-intro">
                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title();?>" />
                <div class="team-name">
                    <p><strong><?php the_title();?></strong> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php echo $count;?>" class="team-btn team-popup">Read Bio</a>
                </div>
            </div>
        </div>
        <!-- The Modal Bio 1-->
        <div class="modal fade" id="myModal<?php echo $count;?>" tabindex="-1" role="dialog" data-modal="<?php echo $count;?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="modal-body row"> 
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" style="margin-right:5px; width:80%" /></div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <p><b><font style="font-size:16px;"><?php the_title();?></font></b> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p> <hr>
                            <p><?php echo the_content();?></p> 
                        </div><!-- end col-md-8 -->
                        </div> <!-- end modal-body row -->
                </div><!-- end modal-content  -->
            </div><!-- end modal-dialog -->
        </div>
        <?php }?>
        <?php wp_reset_query(); ?>
        <?php $count++;?>
        <?php endwhile; ?>
    </div>
    <?php endif;?>
    <?php if ($current_options['junior_staff_enabled']== true ): ?>
    <div class="row" style="margin-bottom:30px;">
    <h3>Junior Staff</h3>
    <hr style="border-bottom: dashed 1px #a35719">
    <p><?php echo esc_html($current_options['junior_staff_job_description']) ;?></p>
    <?php  while ( $agri_team->have_posts() ) :$agri_team->the_post(); ?>
    <?php if (get_post_meta( get_the_ID(), 'agridrive-checkbox_junior_management_staff', true )) { ?>
        <div class="col-md-4 col-sm-4">
            <div class="team-intro">
                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title();?>" />
                <div class="team-name">
                    <p><strong><?php the_title();?></strong> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php echo $count;?>" class="team-btn team-popup">Read Bio</a>
                </div>
            </div>
        </div>
        <?php }?>
        <?php wp_reset_query(); ?>
        <?php $count++;?>
        <?php endwhile; ?>
    </div>
    <?php endif;?>
    <?php if ($current_options['contracted_staff_enabled']== true ): ?>
    <div class="row" style="margin-bottom:30px;">
    <h3>Contracted Staff</h3>
    <hr style="border-bottom: dashed 1px #a35719">
    <p><?php echo esc_html($current_options['contracted_staff_job_description']) ;?></p>
    <?php  while ( $agri_team->have_posts() ) :$agri_team->the_post(); ?>
    <?php if (get_post_meta( get_the_ID(), 'agridrive-checkbox_junior_management_staff', true )) { ?>
        <div class="col-md-4 col-sm-4">
            <div class="team-intro">
                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title();?>" />
                <div class="team-name">
                    <p><strong><?php the_title();?></strong> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php echo $count;?>" class="team-btn team-popup">Read Bio</a>
                </div>
            </div>
        </div>
        <!-- The Modal Bio 1-->
        <div class="modal fade" id="myModal<?php echo $count;?>" tabindex="-1" role="dialog" data-modal="<?php echo $count;?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="modal-body row"> 
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" style="margin-right:5px; width:80%" /></div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <p><b><font style="font-size:16px;"><?php the_title();?></font></b> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p> <hr>
                            <p><?php echo the_content();?></p> 
                        </div><!-- end col-md-8 -->
                        </div> <!-- end modal-body row -->
                </div><!-- end modal-content  -->
            </div><!-- end modal-dialog -->
        </div>
        <?php }?>
        <?php wp_reset_query(); ?>
        <?php $count++;?>
        <?php endwhile; ?>
    </div>
    <?php endif;?>
    <?php if ($current_options['casual_staff_enabled']== true ): ?>
    <div class="row" style="margin-bottom:30px;">
    <h3>Casual Staff</h3>
    <hr style="border-bottom: dashed 1px #a35719">
    <p><?php echo esc_html($current_options['casual_staff_job_description']) ;?></p>
    <?php  while ( $agri_team->have_posts() ) :$agri_team->the_post(); ?>
    <?php if (get_post_meta( get_the_ID(), 'agridrive-checkbox_junior_management_staff', true )) { ?>
        <div class="col-md-4 col-sm-4">
            <div class="team-intro">
                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title();?>" />
                <div class="team-name">
                    <p><strong><?php the_title();?></strong> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php echo $count;?>" class="team-btn team-popup">Read Bio</a>
                </div>
            </div>
        </div>
        <!-- The Modal Bio 1-->
        <div class="modal fade" id="myModal<?php echo $count;?>" tabindex="-1" role="dialog" data-modal="<?php echo $count;?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="modal-body row"> 
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" style="margin-right:5px; width:80%" /></div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <p><b><font style="font-size:16px;"><?php the_title();?></font></b> <br><?php echo (get_post_meta (get_the_ID(),'agridrive-job_title', true)); ?></p> <hr>
                            <p><?php echo the_content();?></p> 
                        </div><!-- end col-md-8 -->
                        </div> <!-- end modal-body row -->
                </div><!-- end modal-content  -->
            </div><!-- end modal-dialog -->
        </div>
        <?php }?>
        <?php wp_reset_query(); ?>
        <?php $count++;?>
        <?php endwhile; ?>
    </div>
    <?php endif;?>
    <?php ;?>
    <!-- end row-->    
  </div><!-- end container-->
</section>
<?php } ?>