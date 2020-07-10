
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="<?=get_stylesheet_uri()?>">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
       
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" style="padding-top:56px;">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <?php if(is_page() || is_single()) : ?>
        <h1 class="my-4">
          <?php esc_html($post->post_title) ?>
        </h1>
        <?php endif; ?>



        
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) :?>
            <?php the_post(); ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <?php if(!is_page() && !is_single()) : ?>
            <h2 class="card-title"><?= the_title() ?></h2>
          <?php endif; ?>



            <?php if(is_page() || is_single()) : ?>
                <?php the_content() ?>
              <?php else : ?>
                <?php the_excerpt() ?>
            <?php endif; ?>


            <div class="card-text"><?= the_excerpt() ?></div>
            <a href="<?= the_permalink() ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?php  the_date() ?> by
            <a href="#"><?php the_author() ?></a>
          </div>
        </div>
        <!-- END blog post -->

        <?php endwhile; ?>
    <?php endif; ?>




      <?php the_posts_pagination() ?>



        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <form action="/" method="get" class="form">
                <div class="input-group">
                  <input type="text" name="s" >
                  <button class="btn btn-primary btn-sm">search</button>
                </div>
              </form>
              </span>
            </div>
          </div>
        </div>
        
        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Menu</h5>
          <div class="card-body">
            
            <?php wp_nav_menu(
                array(
                  'menu_class' => 'navbar-nav mr-auto'
                )
            ) ?>

          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <ul class="list-unstyled mb-0">

                  <?php wp_list_categories(['title_li' => '']) ?>
                  
                </ul>
              </div>
              
            </div>
          </div>
        </div>

        

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

</body>

</html>
