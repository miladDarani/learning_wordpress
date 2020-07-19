<?php get_header(); ?>



<?php if(have_posts()) : ?>
    <?php while(have_posts()) : ?>
        <?php the_post() ?>

            <div class="responsive-blog-post">
              <div class="individual-post">
                <h4><?php the_title() ?></h4>
                <p class="date"><?=  get_the_date(); ?></p>
                <img src="<?= get_the_post_thumbnail_url(); ?>">
                <p> <?php the_content(); ?> </p>
              </div>
            </div>

    <?php  endwhile; ?>
<?php endif; ?>






<?php get_footer(); ?>

