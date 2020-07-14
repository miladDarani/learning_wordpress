<?php 
$title = 'register';
global $post;
/**
   * Template Name: Register
   */

get_header(); ?>
    

      <?= esc_html($post->post_content); ?> 


<?php get_footer(); ?>