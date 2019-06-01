<?php
/*
 * Plugin Name: Youtube Subs
 * Plugin URI:  https://example.com/plugin-name
 * Description: Display youtube sub button and count
 * Version:     1.0.0
 * Author:      axle Rodriguez
 * Author URI:  https://example.com
 */

//Exit if accessed directly
if (!defined('ABSPATH')) {
	die;
}	

//load scripts
require_once(plugin_dir_path( __FILE__ ).'/includes/youtubesubs-script.php');

//load Class
require_once(plugin_dir_path( __FILE__ ).'/includes/youtubesubs-class.php');

function register_youtubesubs(){
	register_widget( 'Youtube_Subs_Widget' );
}
//hook in funtion
add_action('widgets_init', 'register_youtubesubs');
