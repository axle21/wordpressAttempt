<?php

//add scripts
function yts_add_scripts(){
	//add main CSS
	wp_enqueue_style( 'yts-main-style', plugins_url().'/youtubesub/css/style.css' );

	//add main JS
	wp_enqueue_script( 'yts-main-script',plugins_url().'/youtubesub/js/main.js'  );

	//add google script
	wp_register_script( 'google', 'https://apis.google.com/js/platform.js' );
	wp_enqueue_script('google');
}
add_action( 'wp_enqueue_scripts', 'yts_add_scripts');