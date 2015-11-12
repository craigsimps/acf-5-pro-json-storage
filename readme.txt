=== ACF 5 Pro JSON Storage ===
Contributors: craigsimps
Donate link: http://designed2.co.uk/
Tags: acfpro, save, location, json, storage
Requires at least: 3.5.0
Tested up to: 4.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Stable tag: 1.0.0

Save ACF 5 Pro custom fields as JSON within this plugin, rather than inside your theme.

== Description ==

I use Advanced Custom Fields 5 Pro for most custom WordPress projects, and the latest version supports saving your Field Groups to JSON. To activate this functionality out of the box, all you have to do is create a folder within your _theme_ called `/acf-json/`. But I don't like that.

I prefer for these JSON files to be stored outside of the theme, because they're key to the functionality of the website, and `functionality === plugin`. Storing this data outside of your WordPress theme makes it inherently more portable, and means you can retain the ACF JSON data even if you change theme.

Once the plugin is installed and activate it will automatically save field groups as JSON within the plugin's `/acf-json/` folder when they are updated or saved.

This plugin is under active development on [Github](https://github.com/craigsimps/acf-pro-json-storage/)

= Requirements =
* ACF 5 Pro (Synchronized JSON requires at least v5.1.5)

== Installation ==

1. Upload 'acf-pro-json-storage' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' page in WordPress dashboard.
3. When you create or update an existing ACF Field Group it will be saved inside the 'acf-pro-json-storage' plugin folder.

== Changelog ==

= 1.0 =
* Initial Commit.
