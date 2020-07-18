<?php

// create our function


// ==================================================================== \\
function addMyStyles()
{
    wp_enqueue_style('wp2', get_stylesheet_uri(), ['bootstrap']);
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'addMyStyles');


// ==================================================================== \\


function addMyScripts()
{
    wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js',  ['jquery'], null, true);

    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', ['jquery'], '1.0', true);
    
}

add_action('wp_enqueue_scripts', 'addMyScripts');

// ==================================================================== \\
// 
function addACommentToHead()
{
    echo " <!-- HREy i added this -->";
}

add_action('wp_head', 'addACommentToHead', 0);


// ==================================================================== \\
function addACopyRightToFooter ()
{
    echo '<div class="justify-content-center text-center my-4"> Copyright 2020 by Milad </div>';
}

add_action('wp_footer', 'addACopyRightToFooter');

// =============================  FEATURES  ============================= \\
// =============================            ============================= \\

//Enable featured images
add_theme_support('post-thumbnails');
register_nav_menus();



if(!function_exists('my_first_shortcode')){

    function my_first_shortcode($atts, $content = null)
    {
        $esc_content = esc_html($content) ?? '';
        $class = esc_attr($atts['class']) ?? '';
        $title = esc_attr($atts['title']) ?? '';

        $str = "<p class='{$class}' title='{$title}'> {$esc_content} </p> ";
        return $str;
    }

    add_shortcode('test', 'my_first_shortcode');
}


// ------------------------------------------------------ \\
//CUSTOM POST TYPE


if(!function_exists('make_my_post_type')) {
    function make_my_post_type() {

        $options = [
            'labels' => [
                'name' => 'Books', 
                'singular_name' => 'Book'
            ],
            'public' => true,
            'capability_type' => 'post', 
            'has_archive' => true,
            'hierarchical' => false,
            'taxonomies' => ['category'],
            'supports' => ['title', 'editor', 'excerpt', 'revisions', 'thumbnail']
        ];

        register_post_type('books', $options);
    }
    add_action('init', 'make_my_post_type');
}   


























