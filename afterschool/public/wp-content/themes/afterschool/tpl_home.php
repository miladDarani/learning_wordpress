<?php 

/**
   * Template Name: Home Page
   */

get_header(); ?>
<div id="content" class="col-xs-12">
        

            <div id="primary" class="col-xs-12">
            
                <div id="featured" class="col-xs-12">
                
                    <img src="http://afterschool/wp-content/uploads/2020/07/after_school.jpg" alt="After School" />
                
                    <div class="caption col-xs-12">
                        <a href="#">Find out about our programs for children</a>
                    </div><!-- /caption -->
                
                </div><!-- /featured -->
                
            </div><!-- /primary -->

            <div id="secondary" class="col-xs-12">

                <?php $featured = get_posts(['category' => '3']); ?>

                <?php foreach ($featured as $post) : ?>
                       
                        <div id="callout_1" class="callout col-sm-4 col-xs-12">
                        <div class="col-xs-12">
                        <a href="#"><img src="<?= get_the_post_thumbnail_url($post->ID); ?>" alt="Elementary School Programs" /></a>
                        <div class="caption  col-xs-12">
                            <a href="#"><?= esc_html ($post->post_title)?></a> 
                    </div><!-- /caption -->
                    </div>
                </div><!-- /callout -->
                <?php endforeach; ?>
                
                
                

            </div><!-- /secondary -->

        </div><!-- /content -->
<?php get_footer(); ?>