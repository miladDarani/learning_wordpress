<?php 

/**
 * Plugin Name : WP2 Configuration
 * Description: Configuration oprtions for WP2 site
 * Author: Milad Darani
 * Author URI: https://miladdarani.com
 */


// test to see if the function you are about to write exists

if(!function_exists('sayHello')) {
    function sayHello($str) {
        $esc_str = esc_html($str);
        printf('<h1 class="my-4">%s</h1>', $esc_str);
    }
}