<?php 
$title = 'register';
global $post;
/**
   * Template Name: Register
   */

get_header(); ?>
        <div class="container">
            <div class="row d-flex">
                <div class="col">
                    <h1 class="my-8">Contact</h1>
                    <p><?php echo do_shortcode('[contact-form-7 id="47" title="Register"]'); ?></p>
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-6">
                    
                </div>
            </div>
        </div>
<?php get_footer(); ?>