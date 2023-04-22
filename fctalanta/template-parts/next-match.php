<?php 
    $fctalanta_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ),$fctalanta_options); 
if($current_options['nextevent_section_enabled'] == true) { ?>
<div class="tm-top-e-box tm-full-width  va-main-next-match" style="background-image: url(<?php echo get_theme_mod('nextmatchbg_img',get_template_directory_uri().'/images/tr.png')?>);>
            <div class="uk-container uk-container-center">
                <section id="tm-top-e" class="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid uk-grid-collapse" id="next_match">
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 va-single-next-match">
                                        <div class="va-main-next-wrap">
                                            <div class="main-next-match-title"><em><?php  echo get_theme_mod('nextevent_heading',__('Next Match','fctalanta')); ?></em>
                                            </div>
                                            <div class="match-list-single">
                                                <div class="match-list-item">
                                                    <div class="count">
                                
                                                        <div id="countdown4">
                                                            <div class="counter_container">
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>

                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="logo">
                                                        <a href="<?php echo esc_url(get_permalink());?>">
                                                            <img src="<?php echo get_theme_mod( 'next_match_home_team_logo',get_template_directory_uri().'/images/talanta/talantalogo-1.png'); ?>" class="img-polaroid" alt="<?php  echo get_theme_mod('next_match_home_team_title',__('Fc Talanta','fctalanta')); ?> VS <?php  echo get_theme_mod('next_match_away_team_title',__('Eldoret Youth','fctalanta')); ?>" title="<?php  echo get_theme_mod('next_match_home_team_title',__('Fc Talanta','fctalanta')); ?> VS <?php  echo get_theme_mod('next_match_away_team_title',__('Eldoret Youth','fctalanta')); ?>">
                                                        </a>
                                                    </div>
                                                    <div class="team-name"><?php  echo get_theme_mod('next_match_home_team_title',__('Fc Talanta','fctalanta')); ?> </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name"><?php  echo get_theme_mod('next_match_away_team_title',__('Eldoret Youth','fctalanta')); ?></div>
                                                    <div class="logo">
                                                        <a href="<?php echo esc_url(get_permalink());?>">
                                                            <img src="<?php echo get_theme_mod( 'next_match_away_team_logo',get_template_directory_uri().'/images/team-ava1.png'); ?>" class="img-polaroid" alt="<?php  echo get_theme_mod('next_match_home_team_title',__('Fc Talanta','fctalanta')); ?> VS <?php  echo get_theme_mod('next_match_away_team_title',__('Eldoret Youth','fctalanta')); ?>" title="<?php  echo get_theme_mod('next_match_home_team_title',__('Fc Talanta','fctalanta')); ?> VS <?php  echo get_theme_mod('next_match_away_team_title',__('Eldoret Youth','fctalanta')); ?>">
                                                        </a>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="date"><?php  echo get_theme_mod('next_match_kickoff',__('November 29, 2019 | 12:00 am','fctalanta')); ?>  </div>
                                                    <div class="clear"></div>
                                                    <div class="location"><address><?php  echo get_theme_mod('latest_results_venue',__('Camp Toyoyo, Nairobi','fctalanta')); ?><br><br></address> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 va-list-next-match">
                                        <div class="match-list-wrap">
                                            <?php   $args = array('post_type' => 'fixture_items', 'posts_per_page' => 7);
                                                $count = 0;
                                                $next_match= new WP_Query( $args );
                                            while ( $next_match->have_posts() ) :$next_match->the_post();?>
                                            <div class="match-list-item alt">
                                                <div class="date"><?php echo (get_post_meta (get_the_ID(),'fctalanta-kickoff', true)); ?></div>
                                                <div class="wrapper">
                                                    <div class="logo">
                                                    <?php
                                                        $images = rwmb_meta( 'fctalanta-image_logo_1', array( 'size' => 'thumbnail' ) );
                                                        foreach ( $images as $image ) {
                                                        echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                                                    } ?>
                                                    </div>
                                                    <div class="team-name"><?php echo (get_post_meta (get_the_ID(),'fctalanta-home_team_name', true)); ?></div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name"><?php echo (get_post_meta (get_the_ID(),'fctalanta-away_team_name', true)); ?> </div>
                                                    <div class="logo">
                                                        <?php $images = rwmb_meta( 'fctalanta-image_logo_2', array( 'size' => 'thumbnail' ) );
                                                        foreach ( $images as $image ) {
                                                        echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php wp_reset_query(); ?>
                                        <?php $count++;?>
                                        <?php endwhile; ?>  
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                 </div>
                </section>
            </div>
        </div>
<?php } ?>