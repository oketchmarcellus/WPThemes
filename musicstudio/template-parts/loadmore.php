<?php
            $releases_cat_id = get_cat_ID('get_theme_mod("releases_category_posts" ,true)');
            $args = array(
                        'cat' =>$releases_cat_id,
                        'post_type'=>'post',
                        'posts_per_page'=>'10',
                        'post_status'=>'publish',);
            $releases_posts= new WP_Query( $args);
            if($releases_posts->have_posts()){?>
                 <div class="col-md-12 see-more"> 
                <button class="btn btn-lg releases_loadmore" type="button">see more</button>
                </div>
            <?php } while ( $releases_posts->have_posts()){
                    $releases_posts->the_post(); {?>
                    <div class="col-lg-4 col-md-4">
                        <div id="img-release">
                        <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                        <h4 class="text-uppercase project-heading" id="upload3-title"><?php the_title(); ?></h4>
                        </div>
                    </div>
                    <?php wp_reset_query(); }
                }?>