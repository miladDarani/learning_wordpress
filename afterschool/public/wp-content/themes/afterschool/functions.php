<?php
// ==================================================================== \\
function addMyStyles()
{
    wp_enqueue_style('afterschool', get_stylesheet_uri(), ['bootstrap']);
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