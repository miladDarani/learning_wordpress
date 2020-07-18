<?php

// ************************************************ \\
//                Custom Product Type            
// ************************************************ //
if(!function_exists('make_my_product_type')) {
    function make_my_product_type() {

        $options = [
            'labels' => [
                'name' => 'Products', 
                'singular_name' => 'Product'
            ],
            'public' => true,
            'capability_type' => 'post', 
            'has_archive' => true,
            'hierarchical' => false,
            'taxonomies' => ['category'],
            'supports' => ['title', 'editor', 'excerpt', 'revisions', 'thumbnail']
        ];

        register_post_type('products', $options);
    }
    add_action('init', 'make_my_product_type');
}   

// ************************************************ \\
//                    WP Features            
// ************************************************ //
register_nav_menus();

add_theme_support('post-thumbnails');


// ************************************************ \\
//                      Load CSS           
// ************************************************ //

/**
 * Adds CSS
 */
function addMyStyles()
{
    wp_register_style('foundation', get_template_directory_uri() . '/css/app.css', array(), false, 'all'); 
    wp_enqueue_style('foundation');
}

add_action('wp_enqueue_scripts', 'addMyStyles');
add_action('wp_enqueue_scripts','addMyStyles');


// ************************************************ \\
//                      Load JS           
// ************************************************ //

/**
 * Loads JavaScript
 */
function addMyScripts()
{
    wp_enqueue_script('foundationjs', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/js/foundation.min.js',  ['jquery'], null, true);

    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', ['jquery'], '1.0', true);
    
}

add_action('wp_enqueue_scripts', 'addMyScripts');


















