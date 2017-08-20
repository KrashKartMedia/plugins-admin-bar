<?php
/**
 * Plugin Name: Plugins Admin Bar
 * Plugin URI: https://wordpress.org/plugins/plugins-admin-bar/
 * Description: Add a top level menu item to the admin bar for plugin links.
 * Version: 1.5
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
		//Adds New PLugin link to new-content tab
	    $args = array(
		'id' => 'add-a-new-plugin-network-plugins',
		'title' => esc_html__( 'Plugin', 'plugins-admin-bar' ),
		'href' => esc_url( network_admin_url( '/plugin-install.php' ) ),
		'parent' => 'new-content',
		'meta' => array(
			'class' => 'add-a-new-plugin-network-plugins', 
			'title' => esc_html__( 'Add A New Plugin', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//Adds Upload Plugin link to new-content tab
	    $args = array(
		'id' => 'upload-a-new-plugin-network-plugins',
		'title' => esc_html__( 'Upload A Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( network_admin_url( '/plugin-install.php?tab=upload' ) ),
		'parent' => 'new-content',
		'meta' => array(
			'class' => 'upload-a-new-plugin-network-plugins', 
			'title' => esc_html__( 'Upload A Plugin', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//hide plugins-active-inactive from wp-admin screens
		if ( ! is_admin() ) {
	   	//Adds network parent link under site-name
	    $args = array(
		'id' => 'network-plugins',
		'title' => esc_html__( 'Network Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( network_admin_url( '/plugins.php' ) ), 
		'parent' => 'site-name',
		'meta' => array(
			'class' => 'network-plugins', 
			'title' => esc_html__( 'View Network Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//hide plugins-active-inactive from wp-admin screens
		}
		//Add New Popular Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-add-popular',
		'title' => esc_html__( 'Add New Popular Plugin', 'plugins-admin-bar' ), 
		'href' => esc_url( network_admin_url( '/plugin-install.php?tab=popular' ) ),
		'parent' => 'add-a-new-plugin-network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-add-popular', 
			'title' => esc_html__( 'Add a new popular plugin', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//Add New Recommended Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-add-recommended',
		'title' => esc_html__( 'Add New Recommended Plugin', 'plugins-admin-bar' ), 
		'href' => esc_url( network_admin_url( '/plugin-install.php?tab=recommended' ) ),
		'parent' => 'add-a-new-plugin-network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-add-recommended', 
			'title' => esc_html__( 'Add a new recommended plugin', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//Add New Favorites Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-add-favorites',
		'title' => esc_html__( 'Add New Favorites Plugin', 'plugins-admin-bar' ),  
		'href' => esc_url( network_admin_url( '/plugin-install.php?tab=favorites' ) ),
		'parent' => 'add-a-new-plugin-network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-add-favorites', 
			'title' => esc_html__( 'Add a new favorites plugin', 'plugins-admin-bar' ), 
			)
		);
		$wp_admin_bar->add_node($args);
		//Add Active Network Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-active',
		'title' => esc_html__( 'View Network Active Plugins', 'plugins-admin-bar' ), 
		'href' => esc_url( network_admin_url( '/plugins.php?plugin_status=active' ) ),
		'parent' => 'network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-active', 
			'title' => esc_html__( 'View All Network Activated Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//Add Inactive Network Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-inactive',
		'title' => esc_html__( 'View Network Inactive Plugins', 'plugins-admin-bar' ), 
		'href' => esc_url( network_admin_url( '/plugins.php?plugin_status=inactive' ) ),
		'parent' => 'network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-inactive', 
			'title' => esc_html__( 'View All Network Inactivated Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//Add Inactive Network Plugin Child Link to network-plugins parent link
		$args = array(
		'id' => 'network-plugins-mustuse',
		'title' => esc_html__( 'View Network Must Use Plugins','plugins-admin-bar' ), 
		'href' => esc_url( network_admin_url( '/plugins.php?plugin_status=mustuse' ) ),
		'parent' => 'network-plugins', 
		'meta' => array(
			'class' => 'network-plugins-mustuse', 
			'title' => esc_html__( 'View All Network Must Use Plugins','plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//hide plugins-active-inactive from wp-admin screens
		if ( ! is_admin() ) {
		//single site plugins parent link under site-name
	    $args = array(
		'id' => 'installed-plugins',
		'title' => esc_html__( 'Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugins.php' ) ), 
		'parent' => 'site-name',
		'meta' => array(
			'class' => 'plugins', 
			'title' => esc_html__( 'View Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//hide plugins-active-inactive from wp-admin screens
		}
		//View Active Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'active-plugins',
		'title' => esc_html__( 'Active Plugins', 'plugins-admin-bar' ), 
		'href' => esc_url( admin_url( '/plugins.php?plugin_status=active' ) ),
		'parent' => 'installed-plugins', 
		'meta' => array(
			'class' => 'active-plugins', 
			'title' => esc_html__( 'Active Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//View Inactive Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'inactive-plugins',
		'title' => esc_html__( 'Inactive Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugins.php?plugin_status=inactive' ) ),
		'parent' => 'installed-plugins', 
		'meta' => array(
			'class' => 'inactive-plugins', 
			'title' => esc_html__( 'Inactive Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);

		//is multisite && user can manage_network_plugins
		}
		
		//is_multisite && current user can manage options && plugins menu site option is true
		else if ( is_multisite() && current_user_can( 'manage_options' ) && isset($plugins_menu_perms['plugins'] ) ) {
		//hide plugins-active-inactive from wp-admin screens
		if ( ! is_admin() ) {
		$args = array(
		'id' => 'network-single-admin-plugins',
		'title' => esc_html__( 'Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugins.php' ) ), 
		'parent' => 'site-name',
		'meta' => array(
			'class' => 'network-single-admin-plugins', 
			'title' => esc_html__( 'View Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		}
		//Add Active Plugin Child Link to installed-plugins - single site on MS parent link
		$args = array(
		'id' => 'network-single-admin-plugins-active',
		'title' => esc_html__( 'Active Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugins.php?plugin_status=active' ) ),
		'parent' => 'network-single-admin-plugins', 
		'meta' => array(
			'class' => 'network-single-admin-plugins-', 
			'title' => esc_html__( 'Active Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);

		//Add Inactive Plugin Child Link to installed-plugins  - single site on MS parent link
		$args = array(
		'id' => 'network-single-admin-plugins-inactive',
		'title' => esc_html__( 'Inactive Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugins.php?plugin_status=inactive' ) ),
		'parent' => 'network-single-admin-plugins', 
		'meta' => array(
			'class' => 'network-single-admin-plugins-inactive', 
			'title' => esc_html__( 'Inactive Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);

		//is_multisite && current user can manage options && plugins menu site option is true
		}

		//is_single_site && user can manage_options
		else if ( ! is_multisite() && current_user_can('manage_options') ) {
		//Adds New PLugin link to new-content tab
	    $args = array(
		'id' => 'add-a-new-plugin-single-plugins',
		'title' => esc_html__( 'Plugin', 'plugins-admin-bar' ),
		'href' => esc_url( network_admin_url( '/plugin-install.php' ) ),
		'parent' => 'new-content',
		'meta' => array(
			'class' => 'add-a-new-plugin-single-plugins', 
			'title' => esc_html__( 'Add A New Plugin', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//Adds Upload Plugin link to new-content tab
	    $args = array(
		'id' => 'upload-a-new-plugin-single-plugins',
		'title' => esc_html__( 'Upload A Plugin', 'plugins-admin-bar' ),
		'href' => esc_url( network_admin_url( '/plugin-install.php?tab=upload' ) ),
		'parent' => 'new-content',
		'meta' => array(
			'class' => 'upload-a-new-plugin-single-plugins', 
			'title' => esc_html__( 'Upload a Plugin', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//hide plugins-active-inactive from wp-admin screens
		if ( ! is_admin() ) {
		$args = array(
		'id' => 'single-plugins',
		'title' => esc_html__( 'Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugins.php' ) ), 
		'parent' => 'site-name',
		'meta' => array(
			'class' => 'single-plugins', 
			'title' => esc_html__( 'View Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);

		//Add Active Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'single-plugins-active',
		'title' => esc_html__( 'Active Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugins.php?plugin_status=active' ) ),
		'parent' => 'single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-active', 
			'title' => esc_html__( 'Active Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);

		//Add Inactive Plugin Child Link to installed-plugins parent link
		$args = array(
		'id' => 'single-plugins-inactive',
		'title' => esc_html__( 'Inactive Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugins.php?plugin_status=inactive' ) ),
		'parent' => 'single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-inactive', 
			'title' => esc_html__( 'Inactive Plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//hide plugins-active-inactive from wp-admin screens
		}
		//if recently active plugins
		if (get_site_option( 'recently_activated', array() ) ){
		//Add Recently Active Plugins Child Link to network-plugins parent link
		$args = array(
		'id' => 'single-plugins-recently-active',
		'title' => esc_html__( 'Recenlty Active Plugins','plugins-admin-bar' ), 
		'href' => esc_url( admin_url( '/plugins.php?plugin_status=recently_activated' ) ),
		'parent' => 'single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-recently-active', 
			'title' => esc_html__( 'View Recently Active Plugins','plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);
		//if recently active plugins
		}

		// Add popular link to the installed-plugins link
		$args = array(
		'id' => 'single-site-plugins-popular',
		'title' => esc_html__( 'Add Popuplar Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugin-install.php?tab=popular' ) ),
		'parent' => 'add-a-new-plugin-single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-popular', 
			'title' => esc_html__( 'Add popular plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);

		// Add recommended link to the installed-plugins link
		$args = array(
		'id' => 'single-site-plugins-recommended',
		'title' => esc_html__( 'Add Recommended Plugins', 'plugins-admin-bar' ), 
		'href' => esc_url( admin_url('/plugin-install.php?tab=recommended') ),
		'parent' => 'add-a-new-plugin-single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-recommended', 
			'title' => esc_html__( 'Add recommended plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);

		// Add favorites link to the installed-plugins link
		$args = array(
		'id' => 'single-site-plugins-favorites',
		'title' => esc_html__( 'Add Favorites Plugins', 'plugins-admin-bar' ),
		'href' => esc_url( admin_url( '/plugin-install.php?tab=favorites' ) ),
		'parent' => 'add-a-new-plugin-single-plugins', 
		'meta' => array(
			'class' => 'single-plugins-favorites', 
			'title' => esc_html__( 'Add favorites plugins', 'plugins-admin-bar' ),
			)
		);
		$wp_admin_bar->add_node($args);

		//is_single_site && user can manage_options
		}
	 //kick off the function
	}
?>