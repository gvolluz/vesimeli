<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://plus.google.com/u/0/+GillesVolluzGasdia
 * @since      1.0.0
 *
 * @package    Vesimeli
 * @subpackage Vesimeli/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vesimeli
 * @subpackage Vesimeli/includes
 * @author     Gilles Volluz <gvolluz@avansis.ch>
 */
class Vesimeli_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vesimeli',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
