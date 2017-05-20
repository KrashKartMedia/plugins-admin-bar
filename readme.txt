=== Plugins Admin Bar - WordPress Plugin Adding Plugin Link To WP Admin Bar Sub Menu ===
Contributors: GeekStreetWP, binarygary
Author URI: https://wordpress.org/plugins/plugins-admin-bar/
Tags: plugin, plugins, admin, wp-admin-bar,
Requires at least: 4.1
Tested up to: 4.7.3
Stable tag: 1.4
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugins Admin Bar is a free WordPress Plugin that adds quick links to the WordPress Admin Bar, under the site name menu, for plugins and network plugins on multisite.

== Description ==

Plugins are amazing tools in the WordPress ecosystem. Every WordPress site has at least one plugins installed/activated. Yet there is no quick link to installed plugins. Plugins Admin Bar fixes this.

WordPress has the WP Admin Bar at the top of every site. On the front end of the site, you'll see the name of your site as a link to /wp-admin/. Under the Site Name, there is a sub-menu with quick links to the Dashboard, Themes, Widgets, and Menus.

= What shows up when the plugin is installed on a single install of WordPress? =

Plugin Admin Bar adds a new menu item to the quick links sub-menu, called Plugins, for a single site install. 

The new menu item has it's own sub menu with quick links to Add a new plugin, add new popular plugin, add new recommended plugin, add new favorite plugin, view active plugins, and view inactive plugins.

= What shows up when the plugin is installed on a multisite install of WordPress and I am a Super Admin? =

Plugin Admin Bar adds two new menu item to the quick links sub-menu, called Plugins and Network Plugins, for a multisite install, as long as you are the Super Admin of the multisite network. 

The two new menu items have their own sub menu items with quick links to Add a new network plugin, add new popular plugin, add new recommended plugin, add new favorite plugin, view network active plugins, and view network inactive plugins, and view network must use plugins. You can also view plugins active or inactive for a single site.

= What shows up when the plugin is installed on a multisite install of WordPress and I am an Admin? =

If you are a single site admin, on multisite, you'll only see all plugins, active & inactive plugins in the dropdown menu item.

See screenshots for more information.

With Plugins Admin Bar, you'll never have to click 4 or 5 times just to install a new plugin, ever again.
                      
== Frequently Asked Questions ==

= Does this work with Multisite? =

Yes. If you're on multisite, add new plugin link takes you to the network admin install page. Same for the edit plugins.

= Why doesnt the plugins menu item show for site admins of a subdomain/subfoler site? =

There is an option in the Network Settings where a network admin (Super Admin) has to select the option to show the plugins menu in the left naviagtion bar for admins of a single Multisite site.

== Installation ==

This section describes how to install the plugin and get it working.

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'Plugins Admin Bar'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `plugins-admin-bar.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `plugins-admin-bar.zip`
2. Extract the `plugins-admin-bar` directory to your computer
3. Upload the `plugins-admin-bar` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

== Screenshots ==

1. A single site can view active and inactive plugins, add a new plugin or add popular, recommended and favorite plugins.
2. A multisite network can view network active, inactive and must use plugins. Can add new, popular, recommended and favorite plugins. Can view active single site active and inactive plugins.

== Changelog ==

= 1.4 =

* Added: Link to plugin editor
* Added: If a plugin was deavtived, adds recently active plugin quicklink.
* Fixed: Few minor tweaks to the order of appearance.

= 1.3 =
* Minor Changes. Just needed to escape some stuff.
* Fixed: Escape the URL's
* Fixed: Escape the HTML's
* Updated: Ready for translations

= 1.2 =
* Added: Conditional Checks for Multisite vs. Single Site.
* Added: If muiltisite && current user can managae options, show the full network & plugins menus.
* Added If is not multisite && current user can manage options, show full plugins menu.
* Added: There is a setting in multisite where a network admin (Super Admin) must choose to show the plugins menu item for Multisite single site admins. If selected, a site admin will see the drop down displaying all plugins, active and inactive plugins just for the specific site.
* Fixed: Typo in the FAQ section on Readme.txt.
* Updated: FAQ section on Readme.txt file answers more questions.

= 1.1 =
* Added: Support for multisite.
* Added: Support for single sites.
* If multisite, do some things a single site cant do.
* If Single site, just show regular plugins link.

= 1.0 =
* Release Date - April 16th, 2017
* First release
