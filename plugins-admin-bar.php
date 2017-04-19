<?php
/**
 * Plugin Name: Plugins Admin Bar
 * Plugin URI: https://wordpress.org/plugins/plugins-admin-bar/
 * Description: Add a top level menu item to the admin bar for plugin links.
 * Version: 1.2
 * Author: Russell Aaron
 * Author URI: http://russellenvy.com
 * Text Domain: plugins-admin-bar
 * License: GPL2
 */
	if ( ! defined( 'ABSPATH' ) ) {exit;}
	// hook into admin bar-menu - add our own links
    add_action('admin_bar_menu', 'plugins_admin_bar_links', 999);
    
    //kick off the function
    function plugins_admin_bar_links($wp_admin_bar) {
    	$plugins_menu_perms = get_site_option( 'menu_items' );
	    //is multisite && user can manage_network_plugins
	    if ( is_multisite() && current_user_can('manage_network_options') ) {
	   	//network parent link under site-name
	    $args = array(
		'id' => 'network-plugins',
		'title' => 'Network Plugins', 
		'href' => network_admin_url() . 'plugins.php', 
		'parent' => 'site-name',
		'meta' => array(
			'class' => 'network-plugins', 
			'title' => 'View Network Plugins'
			)
		);
		$wp_admin_bar->add_node($args);
		//Add New Network Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-add-new',
		'title' => 'Add New Network Plugin', 
		'href' => network_admin_url() . 'plugin-install.php',
		'parent' => 'network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-add-new', 
			'title' => 'Add a new plugin to your network'
			)
		);
		$wp_admin_bar->add_node($args);
		//Add New Popular Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-add-popular',
		'title' => 'Add New Popular Plugin', 
		'href' => network_admin_url() . 'plugin-install.php?tab=popular',
		'parent' => 'network-plugins-add-new', 
		'meta' => array(
			'class' => 'network-plugins-add-popular', 
			'title' => 'Add a new popular plugin'
			)
		);
		$wp_admin_bar->add_node($args);
		//Add New Recommended Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-add-recommended',
		'title' => 'Add New Recommended Plugin', 
		'href' => network_admin_url() . 'plugin-install.php?tab=recommended',
		'parent' => 'network-plugins-add-new', 
		'meta' => array(
			'class' => 'network-plugins-add-recommended', 
			'title' => 'Add a new recommended plugin'
			)
		);
		$wp_admin_bar->add_node($args);
		//Add New Favorites Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-add-favorites',
		'title' => 'Add New Favorites Plugin', 
		'href' => network_admin_url() . 'plugin-install.php?tab=favorites',
		'parent' => 'network-plugins-add-new', 
		'meta' => array(
			'class' => 'network-plugins-add-favorites', 
			'title' => 'Add a new favorites plugin'
			)
		);
		$wp_admin_bar->add_node($args);
		//Add Active Network Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-active',
		'title' => 'View Network Active Plugins', 
		'href' => network_admin_url() . 'plugins.php?plugin_status=active',
		'parent' => 'network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-active', 
			'title' => 'View All Network Activated Plugins'
			)
		);
		$wp_admin_bar->add_node($args);
		//Add Inactive Network Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-inactive',
		'title' => 'View Network Inactive Plugins', 
		'href' => network_admin_url() . 'plugins.php?plugin_status=inactive',
		'parent' => 'network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-inactive', 
			'title' => 'View All Network Inactivated Plugins'
			)
		);
		$wp_admin_bar->add_node($args);
		//Add Inactive Network Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-mustuse',
		'title' => 'View Network Must Use Plugins', 
		'href' => network_admin_url() . 'plugins.php?plugin_status=mustuse',
		'parent' => 'network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-mustuse', 
			'title' => 'View All Network Must Use Plugins'
			)
		);
		$wp_admin_bar->add_node($args);
		//single site plugins parent link under site-name
	    $args = array(
		'id' => 'installed-plugins',
		'title' => 'Plugins', 
		'href' => admin_url() . 'plugins.php', 
		'parent' => 'site-name',
		'meta' => array(
			'class' => 'plugins', 
			'title' => 'View Plugins'
			)
		);
		$wp_admin_bar->add_node($args);
		//View Active Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'active-plugins',
		'title' => 'Active Plugins', 
		'href' => admin_url() . 'plugins.php?plugin_status=active',
		'parent' => 'installed-plugins', 
		'meta' => array(
			'class' => 'active-plugins', 
			'title' => 'Active Plugins'
			)
		);
		$wp_admin_bar->add_node($args);
		//View Inactive Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'inactive-plugins',
		'title' => 'Inactive Plugins', 
		'href' => admin_url() . 'plugins.php?plugin_status=inactive',
		'parent' => 'installed-plugins', 
		'meta' => array(
			'class' => 'inactive-plugins', 
			'title' => 'Inactive Plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		//is multisite && user can manage_network_plugins
		}
		
		//is_multisite && current user can manage options && plugins menu site option is true
		else if ( is_multisite() && current_user_can( 'manage_options' ) && isset($plugins_menu_perms['plugins'] ) ) {
		$args = array(
		'id' => 'network-single-admin-plugins',
		'title' => 'Plugins'. print_r($plugins_checked,1), 
		'href' => admin_url() . 'plugins.php', 
		'parent' => 'site-name',
		'meta' => array(
			'class' => 'network-single-admin-plugins', 
			'title' => 'View Plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		//Add Active Plugin Child Link to installed-plugins - single site on MS parent link
		$args = array(
		'id' => 'network-single-admin-plugins-active',
		'title' => 'Active Plugins', 
		'href' => admin_url() . 'plugins.php?plugin_status=active',
		'parent' => 'network-single-admin-plugins', 
		'meta' => array(
			'class' => 'network-single-admin-plugins-', 
			'title' => 'Active Plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		//Add Inactive Plugin Child Link to installed-plugins  - single site on MS parent link
		$args = array(
		'id' => 'network-single-admin-plugins-inactive',
		'title' => 'Inactive Plugins', 
		'href' => admin_url() . 'plugins.php?plugin_status=inactive',
		'parent' => 'network-single-admin-plugins', 
		'meta' => array(
			'class' => 'network-single-admin-plugins-inactive', 
			'title' => 'Inactive Plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		//is_multisite && current user can manage options && plugins menu site option is true
		}

		//is_single_site && user can manage_options
		else if ( ! is_multisite() && current_user_can('manage_options') ) {
		$args = array(
		'id' => 'single-plugins',
		'title' => 'Plugins', 
		'href' => admin_url() . 'plugins.php', 
		'parent' => 'site-name',
		'meta' => array(
			'class' => 'single-plugins', 
			'title' => 'View Plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		//Add New Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'plugins-add-new',
		'title' => 'Add New Plugin', 
		'href' => admin_url() . 'plugin-install.php',
		'parent' => 'single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-add-new', 
			'title' => 'Add a new plugin'
			)
		);
		$wp_admin_bar->add_node($args);

		//Add Active Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'single-plugins-active',
		'title' => 'Active Plugins', 
		'href' => admin_url() . 'plugins.php?plugin_status=active',
		'parent' => 'single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-active', 
			'title' => 'Active Plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		//Add Inactive Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'single-plugins-inactive',
		'title' => 'Inactive Plugins', 
		'href' => admin_url() . 'plugins.php?plugin_status=inactive',
		'parent' => 'single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-inactive', 
			'title' => 'Inactive Plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		// Add popular link to the installed-plugins link
		$args = array(
		'id' => 'single-site-plugins-popular',
		'title' => 'Add Popuplar Plugins', 
		'href' => admin_url() . 'plugin-install.php?tab=popular',
		'parent' => 'plugins-add-new', 
		'meta' => array(
			'class' => 'single-plugins-popular', 
			'title' => 'Add popular plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		// Add recommended link to the installed-plugins link
		$args = array(
		'id' => 'single-site-plugins-recommended',
		'title' => 'Add Recommended Plugins', 
		'href' => admin_url() . 'plugin-install.php?tab=recommended',
		'parent' => 'plugins-add-new', 
		'meta' => array(
			'class' => 'single-plugins-recommended', 
			'title' => 'Add recommended plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		// Add favorites link to the installed-plugins link
		$args = array(
		'id' => 'single-site-plugins-favorites',
		'title' => 'Add Favorites Plugins', 
		'href' => admin_url() . 'plugin-install.php?tab=favorites',
		'parent' => 'plugins-add-new', 
		'meta' => array(
			'class' => 'single-plugins-favorites', 
			'title' => 'Add favorites plugins'
			)
		);
		$wp_admin_bar->add_node($args);

		//is_single_site && user can manage_options
		}
	 //kick off the function
	}
?>