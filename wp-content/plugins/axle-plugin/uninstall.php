<?php

/*

*Trigger when file on PLugin uninstall

 */

if (! defined('WP_UNINSTALL_PLUGIN')) {
	die;
}

//clear database stored data
// $books = get_posts(array('post_type' => 'book' , 'numberposts' => -1));

// foreach ($books as $book) {
	
// 	wp_delete_post( $book->ID, true );
// }

//Access the database vis sql
global $wpdb;

$wpdb->query("DELETE FROM wp_posts where post_type='book");

$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");

$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");