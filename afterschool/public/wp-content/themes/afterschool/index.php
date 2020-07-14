<?php get_header(); ?>

        <div id="content" class="col-xs-12">


            <div id="primary" class="col-xs-12 col-sm-9">

                <h1 class="archive_title">News</h1>
<?php $featured = get_posts(['category' => '0']); ?>

                <?php foreach ($featured as $post) : ?>
                       
                   <!-- Blog Post -->
                    <div class="mb-4">
                      
                        <h2"><a style="color:#337ab7; font-size:30px;" href="<?php the_permalink(); ?>"><?= the_title(); ?></a></h2>
                        <p class="card-text"><?= the_excerpt(); ?></p>
                        
                     
                      
                    </div>

                <?php endforeach; ?>

    


            <?php get_sidebar(); ?>

        </div><!-- /content -->

  <?php get_footer(); ?>