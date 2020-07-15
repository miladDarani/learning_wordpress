<?php
// ==================================================================== \\
function addMyStyles()
{
    wp_enqueue_style('space', get_stylesheet_uri(), ['bootstrap']);
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


// =============================  FEATURES  ============================= \\
// =============================            ============================= \\

//Enable featured images
add_theme_support('post-thumbnails');
register_nav_menus();

add_filter( 'widget_text', 'do_shortcode' );



/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 19;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );
