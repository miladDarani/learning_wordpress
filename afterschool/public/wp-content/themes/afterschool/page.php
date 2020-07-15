<?php get_header(); 
global $post;
?>
        

  <div id="primary" class="col-xs-12 col-sm-9">
            
    <article>
                
      <h1><a href="#"><?php the_title(); ?></a></h1>
    

        <img class="alignleft" src="<?= get_the_post_thumbnail_url() ?>" alt="</a></h1>
    " />

        <p><?= esc_html($post->post_content); ?></p>

       


        <table class="table table-striped">
          <tr>
            <th>Entry Header 1</th>
            <th>Entry Header 2</th>
            <th>Entry Header 3</th>
            <th>Entry Header 4</th>
          </tr>
          <tr>
            <td>Entry First Line 1</td>
            <td>Entry First Line 2</td>
            <td>Entry First Line 3</td>
            <td>Entry First Line 4</td>
          </tr>
          <tr>
            <td>Entry Line 1</td>
            <td>Entry Line 2</td>
            <td>Entry Line 3</td>
            <td>Entry Line 4</td>
          </tr>
          <tr>
            <td>Entry Last Line 1</td>
            <td>Entry Last Line 2</td>
            <td>Entry Last Line 3</td>
            <td>Entry Last Line 4</td>
          </tr>
        </table>


        <p><?= esc_html($post->post_content); ?></p>

                        
    </article>

                
</div><!-- /primary -->

<div id="secondary" class="col-xs-12 col-sm-3">

        
      <?php get_sidebar('2 '); ?>
        
        
        

      </div><!-- /secondary -->

    </div><!-- /content -->
<?php get_footer(); ?>