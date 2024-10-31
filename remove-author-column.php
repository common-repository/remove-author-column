<?php
/*
Plugin Name: Remove Author Column
Plugin URI: http://www.humbug.in/aside/wordpress-plugin-remove-author-column-on-edit-posts-page/
Description: Removes the author column on edit posts page coz it doesn't make sense on a single author blog.
Version: 0.1
Author: Pratik Sinha
Author URI: http://www.humbug.in/
License: GPL2
*/

function remove_author_column($column) {
	unset($column['author']);
	return $column;
}

function remove_author_column_add() {
	add_filter('manage_posts_columns','remove_author_column',5,2);
}

add_action('admin_init','remove_author_column_add');
?>
