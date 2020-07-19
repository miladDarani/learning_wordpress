<?php get_header(); ?>
<style>
    .hide-menu{
        display: none;
    }
</style>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Search Results:
          <p><small><?php the_search_query(); ?></small></p>
        </h1>
        


        <?php if(have_posts()) : ?>
            <?php while(have_posts()) :?>
                <?php the_post(); ?>

                    <!-- Blog Post -->
                    <div class="card mb-4">
                      <div class="card-body">
                        <h2 class="card-title"><?= the_title(); ?></h2>
                        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                        <img class="post-img" src="<?= get_the_post_thumbnail_url() ?>" alt="">
                    </a>
                        <p class="card-text"><?= the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
                      </div>
                      <div class="card-footer text-muted">
                        Posted on January 1, 2020 by
                        <a href="#"><?php  the_author();?></a>
                      </div>
                    </div>

            <?php endwhile; ?>

            <?php else : ?>
              <h1>oops</h1>
              <h2>Sorry your search retuned no results</h2>

        <?php endif; ?>



        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">

          <li class="page-item">
            <?php next_posts_link(' << older') ?>
          </li>

          <li class="page-item">
            <?php previous_posts_link('newer >>') ?>
          </li>

        </ul>

      </div>



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php get_footer(); ?>
