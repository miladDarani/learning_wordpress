</div><!-- /primary -->

            <div id="secondary" class="col-xs-12 col-sm-3">
                
                <?php $featured = get_posts(['category' => '3']); ?>
                <?php foreach ($featured as $post) : ?>
                <div id="callout_1" class="callout col-xs-12">
                    <div class="col-xs-12">
                    <a href="#"><img src="<?= get_the_post_thumbnail_url($post->ID); ?>" alt="<?= esc_html ($post->post_title)?>" /></a>
                    <div class="caption  col-xs-12">
                            <a href="<?php the_permalink(); ?>"><?= esc_html ($post->post_title)?></a>
                    </div><!-- /caption -->
                    </div>
                </div><!-- /callout -->
                 <?php endforeach; ?>
               


            </div><!-- /secondary -->