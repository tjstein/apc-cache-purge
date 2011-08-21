<?php
/**
 * @package APC Cache Purge
 * @version 0.1
 */
/*
Plugin Name: APC Cache Purge
Plugin URI: http://tjstein.com
Description: This is a simple, single purpose plugin to flush the APC cache.
Author: TJ Stein
Version: 0.1
Author URI: http://tjstein.com
*/
function apc_purge() {
	return apc_clear_cache;
}
// Add Clear APC menu under Tools menu
add_action('admin_menu', 'php_apc_info');
        
function php_apc_info() {
	add_submenu_page('tools.php', 'Flush APC', 'Flush APC', 'activate_plugins', 'flush_php_apc', 'php_apc_options');
}
        
function php_apc_options() {
	if (apc_purge() && apc_purge('user'))
		print '<p>Success!</p>';
	else
		print '<p>Clearing Failed!</p>';
	print '<pre>'; print_r(apc_cache_info()); print '</pre>';
}
// Add Clear APC in the favorite actions dropdown
add_filter('favorite_actions', 'clear_apc_link');
        
function clear_apc_link($actions) {
	$actions['tools.php?page=flush_php_apc'] = array('Flush APC', 'edit_posts');
	return $actions;
}
?>