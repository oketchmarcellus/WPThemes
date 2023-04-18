<?php 
    $fctalanta_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ),$fctalanta_options); 
if($current_options['latest_result_enabled'] == true) { ?>
<div class="tm-top-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-b" class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">

                            <div class="va-latest-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="va-latest-top">

                                        <h3 id="latest-results"><?php  echo get_option('latest_results_heading',__('Latest Results','fctalanta')); ?></h3>
                                        <div class="tournament">
                                            <address><?php  echo get_theme_mod('latest_results_venue',__('Camp Toyoyo','fctalanta')); ?><br><br></address> </div>
                                        <div class="date">
                                            <?php  echo get_theme_mod('latest_results_kickoff',__('November 29, 2019 | 12:00 am','fctalanta')); ?> </div>
                                    </div>
                                </div>
                                <div class="va-latest-middle uk-flex uk-flex-middle">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-grid uk-flex uk-flex-middle">
                                            <div class="uk-width-2-12 center">
                                                <a href="results.html">
                                                    <img src="<?php echo get_theme_mod( 'latest_result_home_team_club_logo',get_template_directory_uri().'/images/club-logo.png'); ?>" class="img-polaroid" alt="" title="">
                                                </a>
                                            </div>
                                            <div class="uk-width-3-12 name uk-vertical-align">
                                                <div class="wrap uk-vertical-align-middle">
                                                    <?php  echo get_theme_mod('latest_result_home_team_title',__('Western Stima','fctalanta')); ?> </div>
                                            </div>
                                            <div class="uk-width-2-12 score">
                                                <div class="title">score</div>
                                                <div class="table">
                                                    <div class="left"> <?php  echo get_theme_mod('home_score',__('3','fctalanta')); ?></div>
                                                    <div class="right"> <?php  echo get_theme_mod('away_score',__('2','fctalanta')); ?></div>
                                                    <div class="uk-clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-12 name alt uk-vertical-align">
                                                <div class="wrap uk-vertical-align-middle">
                                                    <?php  echo get_theme_mod('latest_result_away_team_title',__('Fc Talanta','fctalanta')); ?> </div>
                                            </div>
                                            <div class="uk-width-2-12 center">
                                                <a href="results.html">
                                                   <img src="<?php echo get_theme_mod( 'latest_result_away_team_club_logo',get_template_directory_uri().'/images/talanta/talantalogo-1.png'); ?>" class="img-polaroid" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-container uk-container-center">
                                    <div class="va-latest-bottom">
                                        <div class="uk-grid">
                                            <div class="uk-width-8-12 uk-container-center text">
                                                <?php 
                                                    $mainpost = new WP_query('page_id='.get_theme_mod('latest_match_post' ,true));
                                                    while( $mainpost->have_posts() ) : $mainpost->the_post() ;?>
                                                    <p><?php echo get_the_content(); ?></p>
                                                    <?php wp_reset_query();?>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>

                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="btn-wrap uk-container-center">
                                                    <a class="read-more" href="results.html">More Info</a>
                                                </div>
                                            </div>
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