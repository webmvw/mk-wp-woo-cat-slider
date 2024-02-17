<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://webmkit.com
 * @since      1.0.0
 *
 * @package    Mts_Woo_Cat_Slide
 * @subpackage Mts_Woo_Cat_Slide/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mts_Woo_Cat_Slide
 * @subpackage Mts_Woo_Cat_Slide/includes
 * @author     webmk <masudrana.bbpi@gmail.com>
 */
class Mts_Woo_Cat_Slide_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mts-woo-cat-slide',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
