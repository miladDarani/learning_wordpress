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
add_theme_support('widgets');

// ************************************************ \\
//                      Load CSS           
// ************************************************ //

/**
 * Adds CSS
 */
function addMyStyles()
{

    wp_register_style('blogposts', get_template_directory_uri() . '/css/featured-blog-posts-panel.scss', array(), false, 'all');
    wp_enqueue_style('blogposts');



    wp_register_style('singlepost', get_template_directory_uri() . '/css/responsive-blog-post', array(), false, 'all');
    wp_enqueue_style('singlepost');


    


    wp_register_style('foundation', get_template_directory_uri() . '/css/app.css', array(), false, 'all'); 
    wp_enqueue_style('foundation');


    wp_register_style('foundationcss', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/css/foundation.min.css', array(), false, 'all'); 
    wp_enqueue_style('foundationcss');



    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all'); 
    wp_enqueue_style('main');



    wp_register_style('googlefont', 'https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap', false, 'all');
    wp_enqueue_style('googlefont');



    


}

add_action('wp_enqueue_scripts', 'addMyStyles');



// ************************************************ \\
//                      Load JS           
// ************************************************ //

/**
 * Loads JavaScript
 */
function addMyScripts()
{
    wp_enqueue_script('foundationjs', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/js/foundation.min.js', null, true);

    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', ['jquery'], '1.0', true);


    wp_enqueue_script('postsjs', get_template_directory_uri() . '/js/featured-blog-posts-panel.js', ['jquery'], '1.0', true);

    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/977c9f68f6.js', ['jquery'], null, true );
    
}   

add_action('wp_enqueue_scripts', 'addMyScripts');



// ************************************************ \\
//                      Menus           
// ************************************************ //

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        
        'footer-menu' => 'Footer Menu Location',
        'below-menu' => 'Below Menu Location'
        

    )

);

if(!function_exists('make_my_post_type')) {
    function make_my_post_type() {

        $options = [
            'labels' => [
                'name' => 'Masks', 
                'singular_name' => 'Mask'
            ],
            'public' => true,
            'capability_type' => 'post', 
            'has_archive' => true,
            'hierarchical' => false,
            'taxonomies' => ['category'],
            'supports' => ['title', 'editor', 'excerpt', 'revisions', 'thumbnail']
        ];

        register_post_type('masks', $options);
    }
    add_action('init', 'make_my_post_type');
}  









