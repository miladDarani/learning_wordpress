<?php

if(!defined('ABSPATH')) die ('Direct Access Forbidden');
/**
 * Plugin Name: Bootstrap Buttons
 */

if(!function_exists('btn_danger')){
    function btn_danger($atts, $content = null){
        $label = esc_html($atts['label']);
        $btn = "<button class = 'btn btn-danger'> {$label} </button>";
        return $btn;
    }

    add_shortcode('btn_danger', 'btn_danger');
}



if(!function_exists('btn_success')){
    function btn_success($atts, $content = null){
        $label = esc_html($atts['label']);
        $btn = "<button class = 'btn btn-success'> {$label} </button>";
        return $btn;
    }

    add_shortcode('btn_success', 'btn_success');
}