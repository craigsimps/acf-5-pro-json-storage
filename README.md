# Project-specific Custom Fields
Save ACF Pro custom fields as JSON within this plugin, rather than inside the theme.

I use ACF Pro for most custom WordPress projects, and the latest version supports saving your Field Groups to JSON. To activate this functionality out of the box, all you have to do is create a folder within your _theme_ called `/acf-json/`. But I don't like that.

I prefer for these JSON files to be stored outside of the theme, because they're key to the functionality of the website, and `functionality === plugin`.

Install and activate this plugin, and ACF will automatically save the JSON output to the `acf-json` folder within the plugin. 
