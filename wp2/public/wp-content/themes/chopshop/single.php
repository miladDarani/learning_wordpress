<?php get_header(); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        
        


        <?php if(have_posts()) : ?>
            <?php while(have_posts()) :?>
                <?php the_post(); ?>

                    <!-- Blog Post  DETIAL VIEW-->
                    <div class="card mb-4">
                      <div class="card-body">
                       <h1 class="my-4">
                            single.php <?php the_title(); ?>
                        </h1>

                            <!-- Featured Image -->
                            <?php if(has_post_thumbnail()) : ?>
                                

                                <img class="img-fluid" src="<?= get_the_post_thumbnail_url() ?>" alt="">

                            <?php endif; ?>
                            <!-- /Featured Image -->

                        <div class="card-text"><?= the_content(); ?></div>
                        
                      </div>
                      <div class="card-footer text-muted">
                        Posted on January 1, 2020 by
                        <a href="#"><?php  the_author();?></a>
                      </div>
                    </div>

            <?php endwhile; ?>
        <?php endif; ?>



       </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

            <?php get_sidebar(); ?>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php get_footer(); ?>
