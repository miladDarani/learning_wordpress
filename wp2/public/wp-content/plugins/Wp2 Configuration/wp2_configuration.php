<?php


/**
 * Plugin Name: WP2 Configuration
 * Description: Configuration options for WP2 site
 * Author: Milad Darani
 * Author URI: https://uwpace.ca
 * Plugin URI: https://uwpace.ca/videos/wordpress
 */




/**
 * Why would you create a configuration plugin?
 * 
 * Because you have configuration or settings that you 
 * may want to use if you change themes.
 */




// Enable Featured Image support in our theme
add_theme_support('post-thumbnails');


// Enable the menu editor
register_nav_menus();






if(!function_exists('wp2addACommentsToHead')) {


    /**
     * Add a comment to the head of the page
     */
    function wp2addACommentToHead()
    {
        echo "<!-- Hey, I added this in an action hook! -->\n";
    }


    add_action('wp_head', 'wp2addACommentToHead', 0);




}






if(!function_exists('wp2addACopyrightToFooter')) {


    /**
     * Add a copyright notice to the footer
     */
    function wp2addACopyrightToFooter()
    {
        echo '<div class="text-center my-4">Copyright &copy; 2020 by Steve</div>';
    }


    add_action('wp_footer', 'wp2addACopyrightToFooter');


}











