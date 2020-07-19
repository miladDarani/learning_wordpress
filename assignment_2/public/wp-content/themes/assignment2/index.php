<?php get_header(); ?>


        
    <div class="grid-y">


      <?php $featured = get_posts(['category' => '6']); ?>  
      <?php foreach ($featured as $post) : ?>  

         
        <div class="post-item cell ">

            <h4>Article Of The Month:</h4>
            <!-- Post's thumbnail -->
            <a href="<?php esc_html (the_permalink()) ?>" class="post-thumbnail">
              <img class="post-img" src="<?= esc_html (get_the_post_thumbnail_url($post->ID)); ?>" alt="<?= esc_html ($post->post_title)?>" />
            </a>


             <!-- Post's title -->
            <a href="<?php the_permalink() ?>">
                <h4 class="post-title"><?= esc_html ($post->post_title)?></h4>
            </a>

            <div class="post-meta" >
                <span class="meta">
                    <span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">&nbsp;<?php 

                                             
                                             $author_id = $post->post_author;
                                             $author = get_the_author_meta('display_name', $author_id); 
                                             echo $author;

                                       ?></a>
                </span>
                <br>
                <span class="meta">
                    <span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">&nbsp;<?php echo esc_html (get_the_date()) ?></span>
                </span>
            </div>

            <!-- Post's summary -->
            <div class="post-summary">
                <p id="excerpt"><?= esc_html ($post->post_excerpt)?>
                  <a href="<?php the_permalink() ?>" class="post-read-more">Read more &nbsp;<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
                </p>
            </div>

        </div>

    <?php endforeach; ?>
    
    </div> <!-- grid x -->

    <br>
    <hr>
    <h1>Medical News</h1>
    <br>



    <div class="grid-y">

        <div class=" cell ">


        <?php if(have_posts()) : ?>
            <?php while(have_posts()) :?>
                <?php the_post(); ?>



                <div class="post-item">

                    <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                        <img class="post-img" src="<?= get_the_post_thumbnail_url() ?>" alt="">
                    </a>

                    <div class="post-text">

                      <a href="<?php the_permalink() ?>">
                        <h5 class="post-title"><?= the_title(); ?></h5>
                      </a>

                      <div class="post-meta">
                        <span class="meta">
                            <span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span>&nbsp;<a class="meta-text"><?php the_author(); ?></a>
                        </span>
                        <br>
                        <span class="meta">
                            <span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">&nbsp;<?= get_the_date(); ?></span>
                        </span>

                      </div>

                      <div class="post-summary">
                        <?php the_excerpt(); ?>
                        <p>
                          <a href="<?php the_permalink(); ?>" class="post-read-more">Read more &nbsp;<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
                        </p>
                      </div>
                    </div>
        
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
                
   

        </div>
    </div>

    <?php get_footer(); ?>