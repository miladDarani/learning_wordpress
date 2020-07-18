<?php

if(!function_exists('wp2_say_hello')){
    function wp2_say_hello($str)
    {
        $esc_str = esc_html($str);
        echo $esc_str;
    }
}