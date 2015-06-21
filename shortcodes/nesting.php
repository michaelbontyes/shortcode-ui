<?php
/*
Plugin Name: Wp-Shortcode
Plugin URI: https://github.com/michaelbontyes/Wp-Shortcode
Description: A plugin to insert and edit shortcodes
Version: 1.0
Author: Michael Bontyes
Author URI: http://woodd.org
License: GPL2
*/

////////////////////////////////////////////////////////////////////
// Nesting  ////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////


function replace_my_shortcode($atts, $content = '') {
    if (empty($content))
        return 'Hello World!';
    else
        return 'Hello ' . do_shortcode($content) . '!';
}
add_shortcode('myshortcode', 'replace_my_shortcode');
