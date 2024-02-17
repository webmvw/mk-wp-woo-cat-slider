<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://webmkit.com
 * @since      1.0.0
 *
 * @package    Mts_Woo_Cat_Slide
 * @subpackage Mts_Woo_Cat_Slide/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Mts_Woo_Cat_Slide
 * @subpackage Mts_Woo_Cat_Slide/public
 * @author     webmk <masudrana.bbpi@gmail.com>
 */
class Mts_Woo_Cat_Slide_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mts_Woo_Cat_Slide_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mts_Woo_Cat_Slide_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mts-woo-cat-slide-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mts_Woo_Cat_Slide_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mts_Woo_Cat_Slide_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mts-woo-cat-slide-public.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script('hammer', 'https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script('micro-slider', 'https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js', array( 'jquery' ), $this->version, false );


	}

	public function mts_woo_cat_slide_shortcode_callback(){
		ob_start();
		require_once(plugin_dir_path(__FILE__).'partials/mts-woo-cat-slide-public-display.php');
		$template = ob_get_contents();
		ob_clean();
		echo $template;
	}

}
