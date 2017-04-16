<?php
/**
 * Plugin Name: Plugins Admin Bar
 * Plugin URI: https://github.com/KrashKartMedia/plugins-admin-bar
 * Description: Add a top level menu item to the admin bar for plugin links.
 * Version: 1.0
 * Author: Russell Aaron
 * Author URI: http://russellenvy.com
 * Text Domain: plugins-admin-bar
 * License: GPL2
 */
	if ( ! defined( 'ABSPATH' ) ) {exit;}
	// hook into admin bar-menu - add our own links
    add_action('admin_bar_menu', 'plugins_admin_bar_links', 999);
    //create links in function.
    //parent link in admin bar, under site-name
	function plugins_admin_bar_links($wp_admin_bar) {
		$args = array(
			'id' => 'plugins-admin-bar',
			'title' => 'Plugins', 
			'href' => admin_url() . 'plugins.php',
			'parent' => 'site-name',
			'meta' => array(
				'class' => 'plugins_admin_bar', 
				'title' => 'View all plugins'
				)
		);
		$wp_admin_bar->add_node($args);
	// Add new plugins link
		$args = array(
			'id' => 'add-new-plugin',
			'title' => 'Add New Plugin', 
			'href' => admin_url() . 'plugin-install.php',
			'parent' => 'plugins-admin-bar', 
			'meta' => array(
				'class' => 'plugins-admin-bar-new-plugin', 
				'title' => 'Add a new plugin'
				)
		);
		$wp_admin_bar->add_node($args);
	// Add active plugins link
	$args = array(
			'id' => 'active-plugins',
			'title' => 'Active Plugins', 
			'href' => admin_url() . 'plugins.php?plugin_status=active',
			'parent' => 'plugins-admin-bar', 
			'meta' => array(
				'class' => 'plugins-admin-bar-active-plugins', 
				'title' => 'View all active plugins'
				)
		);
		$wp_admin_bar->add_node($args);
	// Add inactive plugins link
	$args = array(
			'id' => 'inactive-plugins',
			'title' => 'Inactive Plugins', 
			'href' => admin_url() . 'plugins.php?plugin_status=inactive',
			'parent' => 'plugins-admin-bar', 
			'meta' => array(
				'class' => 'plugins-admin-bar-inactive-plugins', 
				'title' => 'View all inactive plugins'
				)
		);
		$wp_admin_bar->add_node($args);
		// Add plugin editor link
	$args = array(
			'id' => 'editor-plugins',
			'title' => 'Plugin Editor', 
			'href' => admin_url() . 'plugin-editor.php',
			'parent' => 'plugins-admin-bar', 
			'meta' => array(
				'class' => 'plugins-admin-bar-editor-plugins', 
				'title' => 'Edit plugins'
				)
		);
		$wp_admin_bar->add_node($args);
	}
?>