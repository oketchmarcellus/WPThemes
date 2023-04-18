<h2 class="text-lowercase text-center"><?php  echo get_theme_mod('service_section_heading',__('Services Section','McGIS')); ?></h2>
            <hr class="small">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail service-item">
                        <div class="text-center"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-<?php echo sanitize_html_class(get_theme_mod('service_column1_icon',__( 'camera', 'McGIS' ))); ?> fa-stack-1x text-primary"></i> </span></div>
                        <div class="caption">
                            <h3 class="text-center"><a class="service-link" href="<?php the_permalink(); ?>">
                                <?php  echo get_theme_mod('service_subtitle1'); ?></a></h3>
                            <p><?php  echo get_theme_mod('service_column1_content_1'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail service-item">
                        <div class="text-center"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-<?php echo sanitize_html_class(get_theme_mod('service_column2_icon',__( 'map', 'McGIS' ))); ?> fa-stack-1x text-primary"></i> </span></div>
                        <div class="caption">
                            <h3 class="text-center"><a href="<?php the_permalink(); ?>">
                                <?php  echo get_theme_mod('service_subtitle2'); ?></a></h3>
                            <p><?php  echo get_theme_mod('service_column2_content_2'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail service-item">
                        <div class="text-center"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-<?php echo sanitize_html_class(get_theme_mod('service_column3_icon',__( 'map-marker', 'McGIS' ))); ?> fa-stack-1x text-primary"></i> </span></div>
                        <div class="caption">
                            <h3 class="text-center"><a href="<?php the_permalink(); ?>">
                                <?php  echo get_theme_mod('service_subtitle3'); ?></a></h3>
                            <p><?php  echo get_theme_mod('service_column3_content_3'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail service-item">
                        <div class="text-center"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-<?php echo sanitize_html_class(get_theme_mod('service_column4_icon',__( 'map-pin', 'McGIS' ))); ?> fa-stack-1x text-primary"></i> </span></div>
                        <div class="caption">
                            <h3 class="text-center"><a href="<?php the_permalink(); ?>">
                                <?php  echo get_theme_mod('service_subtitle4'); ?></a></h3>
                            <p><?php  echo get_theme_mod('service_column4_content_4'); ?></p>
                        </div>
                    </div>
                </div>
            </div>