<?php get_header(); ?>
<!-- Sample 1-->
<!-- Posts panel container -->
<div class="posts-panel">

  <!-- Panel's header -->
  <header class="panel-header">
    
  </header>

        
    <div class="grid-x">


      <?php $featured = get_posts(['category' => '6']); ?>  
      <?php foreach ($featured as $post) : ?>  

         
        <div class="post-item cell small-12 large-8">

            
            <!-- Post's thumbnail -->
            <a href="<?php esc_html (the_permalink()) ?>" class="post-thumbnail">
              <img src="<?= esc_html (get_the_post_thumbnail_url($post->ID)); ?>" alt="<?= esc_html ($post->post_title)?>" />
            </a>


             <!-- Post's title -->
            <a href="<?php the_permalink() ?>">
                <h4 class="post-title"><?= esc_html ($post->post_title)?></h4>
            </a>

            <div class="post-meta" >
                <span class="meta">
                    <span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text"></a>
                </span>

                <span class="meta">
                    <span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text"><?php echo esc_html (get_the_date()) ?></span>
                </span>
            </div>

            <!-- Post's summary -->
            <div class="post-summary">
                <p id="excerpt"><?= esc_html ($post->post_excerpt)?>
                  <a href="<?php the_permalink() ?>" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
                </p>
            </div>

        </div>

    <?php endforeach; ?>






        <div class=" cell large-4">


        <?php if(have_posts()) : ?>
            <?php while(have_posts()) :?>
                <?php the_post(); ?>



                <div class="post-item">

                    <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                    </a>

                    <div class="post-text">

                      <a href="#">
                        <h3 class="post-title"><?= the_title(); ?></h3>
                      </a>

                      <div class="post-meta">
                        <span class="meta">
                            <span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text"><?php the_author(); ?></a>
                        </span>

                        <span class="meta">
                            <span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text"><?= get_the_date(); ?></span>
                        </span>

                      </div>

                      <div class="post-summary">
                        <p><?php the_excerpt(); ?>
                          <a href="<?php the_permalink(); ?>" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
                        </p>
                      </div>
                    </div>
        
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      
                
   

        </div>
    </div>

    <?php get_footer(); ?>