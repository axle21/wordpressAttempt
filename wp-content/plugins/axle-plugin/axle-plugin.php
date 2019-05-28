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

	function register(){
		add_action( 'admin_enqueue_scripts', array($this, 'enqueue'));
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

	function custom_post_type(){
		register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
	}

	function enqueue(){
		//enqueue all scripts
		wp_enqueue_style('mypluginstyle', plugins_url('/assets/style.css', __FILE__));
		wp_enqueue_script('mypluginscripts', plugins_url('/assets/myscripts.js', __FILE__));
	}
}

if (class_exists('AxlePlugin')) {

	$axlePlugin = new AxlePlugin();
	$axlePlugin->register();
}

//activation
register_activation_hook(__FILE__,array($axlePlugin,'activate'));
	
//deactivation
register_deactivation_hook(__FILE__,array($axlePlugin,'deactivate'));