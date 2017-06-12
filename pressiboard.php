<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.cesardowns.com
 * @since             1.0.0
 * @package           Pressiboard
 *
 * @wordpress-plugin
 * Plugin Name:       Pressiboard
 * Plugin URI:        http://www.cesardowns.com
 * Description:       WordPress theme customization dashboard
 * Version:           1.0.0
 * Author:            Cesar C. Downs
 * Author URI:        http://www.cesardowns.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pressiboard
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pressiboard-activator.php
 */
function activate_pressiboard() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pressiboard-activator.php';
	Pressiboard_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pressiboard-deactivator.php
 */
function deactivate_pressiboard() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pressiboard-deactivator.php';
	Pressiboard_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pressiboard' );
register_deactivation_hook( __FILE__, 'deactivate_pressiboard' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pressiboard.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pressiboard() {

	$plugin = new Pressiboard();
	$plugin->run();

}
run_pressiboard();
