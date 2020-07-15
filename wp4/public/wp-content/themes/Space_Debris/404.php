<?php get_header(); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Blog
          <small>Recent Posts</small>
        </h1>
        

      
        <div class="card mb-4">
          <div class="card-body">
              <h1>404 Not Found</h1>
              <div class="justified-content-center">
                  <?php get_Search_form(); ?>
              </div>
          </div>
        </div>


       

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
