<?php 
    $fctalanta_options= template_data_setup();
    $current_options = wp_parse_args(  get_option( 'fctalanta_options', array() ),$fctalanta_options); 
if($current_options['support_section_enabled'] == true) { ?>
<div class="tm-top-d-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-d" class="tm-top-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="donate-wrap" style="background-image: url('<?php echo get_theme_mod('support_bg_image',get_template_directory_uri().'/images/donate-bg.jpg')?>');">
                                <div class="donate-inner">
                                    <h3 id="support-heading"><?php  echo get_theme_mod('support_heading',__('Support team','fctalanta')); ?></h3>
                                    <div class="uk-grid">
                                        <div class="uk-width-8-10 uk-push-1-10 intro-text"><?php  echo get_theme_mod('support_text',__('Donec ultrices pharetra bibendum. Aliquam velit tortor, maximus gravida nunc vitae, tincidunt dignissim erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi nec nisl a augue aliquam fringilla ac consectetur enim. Nullam sed pretium elit, eget fringilla nunc.','fctalanta')); ?>
                                             </div>
                                    </div>
                                    <form class="teamdonate-form" method="post" target="paypal">
                                        <div class="radio-wrap">
                                            <label class="active">$ 5
                                                <input name="amount" value="5" type="radio">
                                            </label>
                                            <label>$ 10
                                                <input name="amount" value="10" type="radio">
                                            </label>
                                            <label>$ 25
                                                <input name="amount" value="25" type="radio">
                                            </label>
                                            <label>$ 50
                                                <input name="amount" value="50" type="radio">
                                            </label>
                                            <label>$ 75
                                                <input name="amount" value="75" type="radio">
                                            </label>
                                            <label>$ 100
                                                <input name="amount" value="100" type="radio">
                                            </label>
                                        </div>
                                        
                                        <br>
                                        <br>
                                        <button class="donate-btn" type="submit" name="submit"><span>Donate</span>
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<?php } ?>