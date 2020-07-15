<?php get_header(); ?>
    
        <div id="content" class="col-xs-12">


            <div id="primary" class="col-xs-12 col-sm-9">


    <?php if(have_posts()) : ?>
            <?php while(have_posts()) :?>
                <?php the_post(); ?>
     <article>

        <h1><a href="<?php the_permalink(); ?>"><?= the_title(); ?></a></h1>

                    

        <p><?= the_content(); ?></p>

    </article>

    <?php endwhile; ?>
    
<?php endif; ?>

<div id="respond">

<h3>Leave a Reply</h3>

<div id="cancel-comment-reply">
    <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2015/03/new-elementary-program-begins-on-sep-1/#respond" style="display:none;">Click here to cancel reply.</a></small>
</div>


<form action="http://issdwp.dev/wp-comments-post.php" method="post" id="commentform">


<p><input type="text" name="author" id="author" value="" size="22" tabindex="1" aria-required='true' /><br />
<label for="author"><small>Name (required)</small></label></p>

<p><input type="text" name="email" id="email" value="" size="22" tabindex="2" aria-required='true' /><br />
<label for="email"><small>Mail (will not be published) (required)</small></label></p>

<p><input type="text" name="url" id="url" value="" size="22" tabindex="3" /><br />
<label for="url"><small>Website</small></label></p>


<p><small><strong>XHTML:</strong> You can use these tags: <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></small></p>

<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type='hidden' name='comment_post_ID' value='20' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p>

</form>

</div>

            </div><!-- /primary -->

            <div id="secondary" class="col-xs-12 col-sm-3">

                <?php get_sidebar(); ?>


            </div><!-- /secondary -->

        </div><!-- /content -->

 <?php get_footer(); ?>        