<?php get_header(); ?>


<div class="container">
    <img src="http://wp4/wp-content/uploads/2020/07/sub_03.jpg" alt="" class="img-fluid w-100">
    <div class="row mb-5">
    <!-- LEFT CONTENT -->

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) :?>
                <?php the_post(); ?>

    
                    <div class="col-md-8">
                        <h2 class="my-3"><?php the_title(); ?></h2>
                        <hr> <br>
                       
                        <p class="mt-4"><?= the_content(); ?></p>

                    </div>

                    <!-- SIDEBAR -->
                    <div class="col-md-4">
                      <div id="side">
                        <?php get_sidebar(); ?>
                      </div> 
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

</div><!-- /container -->







<?php get_footer(); ?>