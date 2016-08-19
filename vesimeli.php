<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://plus.google.com/u/0/+GillesVolluzGasdia
 * @since             0.0.1
 * @package           Vesimeli
 *
 * @wordpress-plugin
 * Plugin Name:       Vesimeli
 * Plugin URI:        https://www.avansis.ch/Vesimeli
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.0.1
 * Author:            Gilles Volluz
 * Author URI:        https://plus.google.com/u/0/+GillesVolluzGasdia
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vesimeli
 * Domain Path:       /languages
 */

error_reporting(-1);
ini_set('display_errors', 'On');
 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vesimeli-activator.php
 */
function activate_vesimeli() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vesimeli-activator.php';
	Vesimeli_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vesimeli-deactivator.php
 */
function deactivate_vesimeli() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vesimeli-deactivator.php';
	Vesimeli_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vesimeli' );
register_deactivation_hook( __FILE__, 'deactivate_vesimeli' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vesimeli.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vesimeli() {

	$plugin = new Vesimeli();
	$plugin->run();

}
run_vesimeli();
