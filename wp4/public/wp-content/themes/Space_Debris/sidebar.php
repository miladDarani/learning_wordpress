<div class="row" id="row2">

    
<?php $featured = get_posts(['category' => '2']); ?>

    <?php foreach ($featured as $post) : ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="yellow-title">
                    <h5 class="pl-3 py-3 my-2" id="yellow-h5"><?= the_title(); ?></h5>
                </div>
                <img class="" src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title(); ?>" />
                    <div class="card-body">
        
                        <p class=""><?= the_excerpt(); ?></p>
                        
                        <div class="btn-container mb-4">
                            <div class="btn-div my-2">
                                <a href="<?php the_permalink(); ?>" class="my-2">read more >> &nbsp;</a>
                            </div>
                        </div>

                    </div>
            </div>
        </div> <!-- /col-md-4 -->

    <?php endforeach; ?>









</div> <!-- /row2 -->