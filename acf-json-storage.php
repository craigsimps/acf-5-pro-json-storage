<?php
/**
 * ACF JSON Storage
 *
 * @package    ACF_JSON_Storage
 * @author     Craig Simpson <csimps@gmail.com>
 * @license    GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       ACF JSON Storage
 * Plugin URI:        http://designed2.co.uk/
 * Description:       Store ACF 5 Pro JSON outside of the recommended /acf-json/ folder.
 * Version:           1.0.0
 * Author:            Craig Simpson
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'PCF_LOCATION' ) ) {
	define( 'PCF_LOCATION' , trailingslashit( plugin_dir_path( __FILE__ ) ) );
}

add_filter( 'acf/settings/save_json', 'pcf_acf_json_save_point' );
/**
 * Change ACF JSON save point to within this plugin rather than theme.
 *
 * @since 1.0.0
 *
 * @return string Path to save ACF JSON files.
 */
function pcf_acf_json_save_point() {
	return PCF_LOCATION . 'acf-json';
}

add_filter( 'acf/settings/load_json', 'pcf_acf_json_load_point' );
/**
 * Change ACF JSON load point to within this plugin rather than theme.
 *
 * @since 1.0.0
 *
 * @param 	array $paths Existing ACF JSON load paths.
 * @return 	array Paths to load ACF JSON files.
 */
function pcf_acf_json_load_point( $paths ) {
	unset( $paths[ 0 ] );
	$paths[] = PCF_LOCATION . 'acf-json';

	return $paths;
}
