<?php

/**
 *
 * @link              http://goldsounds.com/plugins/vr-views
 * @since             1.0.0
 * @package           VR_Views
 *
 * @wordpress-plugin
 * Plugin Name:       Google VR Views
 * Plugin URI:        http://goldsounds.com/plugins/vr-views
 * Description:       Display Google VR Views in a browser a compatible VR devices
 * Version:           1.0.0
 * Author:            Daniel Walmsley
 * Author URI:        http://goldsounds.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vr-views
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vr-views-activator.php
 */
function activate_vr_views() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vr-views-activator.php';
	VR_Views_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vr-views-deactivator.php
 */
function deactivate_vr_views() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vr-views-deactivator.php';
	VR_Views_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vr_views' );
register_deactivation_hook( __FILE__, 'deactivate_vr_views' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vr-views.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vr_views() {

	$plugin = new VR_Views();
	$plugin->run();

}
run_vr_views();
