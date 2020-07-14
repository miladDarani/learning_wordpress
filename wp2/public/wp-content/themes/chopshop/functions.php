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




























