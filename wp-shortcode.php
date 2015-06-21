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

/* Include the shortcodes files */
$shortcodes_dir = dirname( __FILE__ ) . '/shortcodes';
$files = preg_grep('/^([^.])/', scandir($shortcodes_dir));
foreach($files as $file) {
	require ($shortcodes_dir .'/'. $file);
}
