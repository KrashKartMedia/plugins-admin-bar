=== Plugins Admin Bar - WordPress Plugin Adding Plugin Link To WP Admin Bar Sub Menu ===
Contributors: GeekStreetWP, binarygary
Author URI: https://wordpress.org/plugins/plugins-admin-bar/
Tags: plugin, plugins, admin, wp-admin-bar,
Requires at least: 4.1
Tested up to: 4.8.1
Stable tag: 1.5
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugins Admin Bar is a free WordPress Plugin that adds quick links to the WordPress Admin Bar, under the site name menu, for plugins and network plugins on multisite.

== Description ==

Plugins are amazing tools in the WordPress ecosystem. Every WordPress site has at least one plugins installed/activated. Yet there is no quick link to installed plugins. Plugins Admin Bar fixes this.

WordPress has the WP Admin Bar at the top of every site. On the front end of the site, you'll see the name of your site as a link to /wp-admin/. Under the Site Name, there is a sub-menu with quick links to the Dashboard, Themes, Widgets, and Menus.

= How It Works on a Single Install =

Install the plugin and click activate. In the WP Admin Bar, at the top of your WordPress Site, hover your mouse on the +New Menu Item.
Inside is a list of the new things you can add to your site. You'll notice a menu item called "PLugins". Click to add a new plugin, or you can hover over the Plugins menu item and add a new plugin from the Popular, Recommended, and Favorites list.

In the WP Admin Bar, find the menu item with the Site Title. It has a house icon to the left. Hover over the Site Title menu item and you'll now see "Plugins" included in this list as well. From here, you'll be able to see Active and Inactive plugins.

= How It Works on a Multisite Install =

If you're a super admin (you can manage the entire site):

Install the plugin and click activate. In the WP Admin Bar, at the top of your WordPress Site, hover your mouse on the +New Menu Item.
Inside is a list of the new things you can add to your site. You'll notice a menu item called "PLugins". Click to add a new plugin to the network, or you can hover over the Plugins menu item and add a new Popular, Recommended, and Favorites plugin to the network.

You'll see two new menu items under the Site Title menu item in the WP Admin Bar.
"Network Plugins" & "Plugins" now appear under the Site Title. Under the "Network Plugins" menu item, you can see all of the Network Active, Inactive and Must use plugins. Under the "Plugins" menu item, you can see the Active and Inactive for each sub-site on the network.

If you are an admin of a sub-site (you can only activate/deactive plugins):
You will only see the "Plugins" menu item under the Site Title. You'll only be able to see the Active and Inactive plugins on your sub-site. Remember, only a super admin can add a plugin.

With Plugins Admin Bar, you'll never have to click 4 or 5 times just to view or install or a new plugin, ever again.
                      
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

1. A single site can view active and inactive plugins, add a new plugin or add popular, recommended and favorite plugins. Please be advised, this photo is from version 1.3.
2. A multisite network can view network active, inactive and must use plugins. Can add new, popular, recommended and favorite plugins. Can view active single site active and inactive plugins. Please be advised, this photo is from version 1.3.

== Changelog ==

= 1.5 =

* Fixed: Showed active and inactive plugins under the site title on every wp-admin screen. Now only shows when you're on the front end.
* Fixed: Grammar and punctuation.
* Added: Upload Plugin Button. Find the +New link in the WP-Admin Bar. In the Drop Down, you'll see New PLugin and Upload A Plugin.
* Bump Version Number.

= 1.4 =
* Added: Plugin quicklink to the +New drop down in WP Admin Bar.
* Added: Single Site Install will now display "Recently Active" menu item if a plugin has been recently deacitvated in the allowed time frame the notice fires off. When plugin is Reactivated, menu item hides again.
* Fixed: Moved Add New Popular, Recommended, and Favorites plugins to the Drop down link in +New quicklink.
* Fixed: Menu items are only two levels deep, not three.

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
