# Custom ACF JSON Storage Location
Save ACF 5 Pro custom fields as JSON within this plugin, rather than inside your theme.

I use ACF 5 Pro for most custom WordPress projects, and the latest version supports saving your Field Groups to JSON. To activate this functionality out of the box, all you have to do is create a folder within your _theme_ called `/acf-json/`. But I don't like that.

I prefer for these JSON files to be stored outside of the theme, because they're key to the functionality of the website, and `functionality === plugin`.

Once the plugin is installed and activate it will automatically save field groups as JSON within the plugin `/acf-json/` folder when they are updated or saved.

## Requirements
* ACF 5 Pro (Synchronized JSON requires at least v5.1.5)

## Getting Started with ACF Local JSON

* http://www.advancedcustomfields.com/resources/local-json/
* http://www.advancedcustomfields.com/resources/synchronized-json/
