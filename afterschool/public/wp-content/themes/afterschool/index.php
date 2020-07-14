<?php get_header(); ?>

        <div id="content" class="col-xs-12">


            <div id="primary" class="col-xs-12 col-sm-9">

                <h1 class="archive_title">News</h1>


    <?php if(have_posts()) : ?>
        <?php while(have_posts()) :?>
            <?php the_post(); ?>    
                <article>

                    <h2><a href="<?php the_permalink(); ?>"><?= the_title() ?></a></h2>

                        
                    <p><?= the_content()?></p>

                </article>
        <?php endwhile; ?>
    <?php endif; ?>


            <?php get_sidebar(); ?>

        </div><!-- /content -->

  <?php get_footer(); ?>