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
// Current Year ////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

function current_year( $atts, $content = null ) {

	return date('Y');

}
// Register the shortcode
add_shortcode('year', 'current_year');