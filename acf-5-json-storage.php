<?php
/**
 * ACF 5 Pro JSON Storage
 *
 * @package    ACF_JSON_Storage
 * @author     Craig Simpson <csimps@gmail.com>
 * @license    GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       ACF 5 Pro JSON Storage
 * Plugin URI:        https://github.com/craigsimps/acf-json-storage
 * Description:       Store ACF 5 Pro JSON outside of the default theme /acf-json/ folder.
 * Version:           1.0.0
 * Author:            Craig Simpson
 * Text Domain:	      acf-5-pro-json-storage
 * Domain Path	      /languages
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: craigsimps/acf-5-pro-json-storage
 * GitHub Plugin URI: https://github.com/craigsimps/acf-5-pro-json-storage
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

register_activation_hook( __FILE__, 'ajs_activation_logic' );
/**
 * Check if ACF Pro is active. If not, do not activate this plugin.
 * 
 * @since 1.0.0
 */
function ajs_activation_logic() {
	if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
		deactivate_plugins(plugin_basename(__FILE__));
	}
}

add_action( 'deactivated_plugin', 'ajs_detect_plugin_deactivation', 10, 2 );
/**
 * If a plugin is deactivated, check and see if it's ACF Pro. If it is, deactivate this plugin.
 * 
 * @since 1.0.0
 */
function ajs_detect_plugin_deactivation( $plugin, $network_activation ) {
    if ( $plugin == "advanced-custom-fields-pro/acf.php" ) {
        deactivate_plugins( plugin_basename( __FILE__ ) );
    }
}

add_filter( 'acf/settings/save_json', 'ajs_acf_json_save_point' );
/**
 * Change ACF JSON save point to within this plugin rather than theme.
 *
 * @since 1.0.0
 *
 * @return string Path to save ACF JSON files.
 */
function ajs_acf_json_save_point() {
	return trailingslashit( plugin_dir_path( __FILE__ ) ) . 'acf-json';
}

add_filter( 'acf/settings/load_json', 'ajs_acf_json_load_point' );
/**
 * Change ACF JSON load point to within this plugin rather than theme.
 *
 * @since 1.0.0
 *
 * @param 	array $paths Existing ACF JSON load paths.
 * @return 	array Paths to load ACF JSON files.
 */
function ajs_acf_json_load_point( $paths ) {
	unset( $paths[ 0 ] );
	$paths[] = trailingslashit( plugin_dir_path( __FILE__ ) ) . 'acf-json';

	return $paths;
}
