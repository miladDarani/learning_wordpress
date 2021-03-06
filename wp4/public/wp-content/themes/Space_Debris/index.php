<?php get_header(); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Blog
          <small>Recent Posts</small>
        </h1>
        


        <?php if(have_posts()) : ?>
            <?php while(have_posts()) :?>
                <?php the_post(); ?>

                    <!-- Blog Post -->
                    <div class="card mb-4 p-3">
                      <div class="card-body">
                        <h2 class="card-title"><?= the_title(); ?></h2>
                        <p class="card-text"><?= the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
                      </div>
                      <div class="card-footer text-muted">
                        <?php  the_date();?> by
                        <a href="#"><?php  the_author();?></a>
                      </div>
                    </div>

            <?php endwhile; ?>
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

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
            <div id="side">
            <?php get_sidebar(); ?>
            </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php get_footer(); ?>

