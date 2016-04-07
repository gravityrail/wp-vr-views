<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    VR_Views
 * @subpackage VR_Views/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    VR_Views
 * @subpackage VR_Views/admin
 * @author     Daniel Walmsley <goldsounds@gmail.com>
 */
class VR_Views_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $vr_views    The ID of this plugin.
	 */
	private $vr_views;

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
	 * @param      string    $vr_views       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $vr_views, $version ) {

		$this->vr_views = $vr_views;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in VR_Views_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The VR_Views_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->vr_views, plugin_dir_url( __FILE__ ) . 'css/vr-views-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in VR_Views_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The VR_Views_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->vr_views, plugin_dir_url( __FILE__ ) . 'js/vr-views-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function render_vrview_editor_embed( $matches, $attr, $url, $rawattr ) {
		$public_renderer = new VR_Views_Public( $this->vr_views, $this->version );
		return $public_renderer->render_vrview_shortcode( array( 'image' => 'http://google.com' ) );
	}

}
