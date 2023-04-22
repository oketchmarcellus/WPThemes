<?php 
    $fctalanta_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ),$fctalanta_options); 
if($current_options['ourteam_section_enabled'] == true) { ?>
<div class="tm-bottom-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="our-team-main-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/our-team-main-wrap-bg.jpg');">
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid" data-uk-grid-match="">
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <div class="our-team-wrap">
                                                <div class="our-team-title">
                                                    <h3>Our <span>Team</span></h3>
                                                </div>
                                                <div class="our-team-text">
                                                    <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p>
                                                </div>
                                                <div class="our-team-text additional">
                                                    <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.</p>
                                                </div>
                                                <div class="team-read-wrap"><a class="team-read-more" href="<?php echo esc_url(get_permalink());?>">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   $args = array('post_type' => 'talanta_team', 'posts_per_page' => 11);
                                            $count=0;
                                            $talanta_team= new WP_Query( $args ); ?>
                                            <?php  while ( $talanta_team->have_posts() ) :
                                                $talanta_team->the_post(); ?>
                                        <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                        <div class="player-number"><span><?php echo (get_post_meta (get_the_ID(),'fctalanta-jersey_no', true)); ?></span>
                                                        </div>
                                                        <div class="bio"><span><a href="<?php echo esc_url(get_permalink());?>">bio</a></span>
                                                        </div>
                                                        <a href="player.html">
                                                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-polaroid" alt="<?php the_title();?>" title="<?php the_title();?>">
                                                        </a>
                                                        <ul class="socials">
                                                            <li class="twitter">
                                                                <a href="<?php echo (get_post_meta (get_the_ID(),'fctalanta-social_twitter', true)); ?>" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="facebook">
                                                                <a href="<?php echo (get_post_meta (get_the_ID(),'fctalanta-social_facebook', true)); ?>" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="google-plus">
                                                                <a href="<?php echo (get_post_meta (get_the_ID(),'fctalanta-social_google-plus', true)); ?>" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="pinterest">
                                                                <a href="<?php echo (get_post_meta (get_the_ID(),'fctalanta-social_pinterest', true)); ?>" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="linkedin">
                                                                <a href="<?php echo (get_post_meta (get_the_ID(),'fctalanta-social_linkedin', true)); ?>" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            <h3>
                                                                <a href="player.html"><?php the_title();?> </a>
                                                            </h3>
                                                        </div>
                                                        <div class="position"><?php echo (get_post_meta (get_the_ID(),'fctalanta-position', true)); ?> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php wp_reset_query(); ?>
                                    <?php $count++;?>
                                    <?php endwhile; ?>
                                    <?php ;?>
                                    </div>
                                </div>
                            <div class="our-team-btn"><a href="players.html"><span>More Info</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php } ?>