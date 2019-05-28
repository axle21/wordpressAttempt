<?php

/*
Plugin Name: Axle Plugin
Plugin URI: http://gtcoding.dev.cc
Description: First attempt to create custom plugin
Version: 1.0.0
Author:Axle Rodriguez
Author URI: zero/github.com
Text Domain: axle-plugin

 */

//Check if file exist or die
if (!defined('ABSPATH')) {
	die;
}

class AxlePlugin{

	function __construct(){
		add_action('init', array($this,'custom_post_type'));
	}
	function activate(){
		//generate custom post type
		$this->custom_post_type();
		//flush rewrite rules
		flush_rewrite_rules();
	}

	function deactivate(){
		//flush rewrite rules
		flush_rewrite_rules();

	}

	function uninstall(){

	}

	function custom_post_type(){
		register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
	}
}

if (class_exists('AxlePlugin')) {

	$axlePlugin = new AxlePlugin();
}

//activation
register_activation_hook(__FILE__,array($axlePlugin,'activate'));
	
//deactivation
register_deactivation_hook(__FILE__,array($axlePlugin,'deactivate'));

//uninstall

