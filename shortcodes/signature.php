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
// Signature ///////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

function signature( $atts,  $content = null ) {

	// Handling default attributes
	$a = shortcode_atts( array(
    	'text' 		=> 'This is a shortcode !',
		'before'	=> '<h3>',
		'after'		=> '</h3>',
	), $atts );

	// Returning the result with allowed nesting
	return $a['before']. '' .$a['text']. '' . do_shortcode($content) . '' .$a['after'];

}
// Register the shortcode
add_shortcode('signature', 'signature');