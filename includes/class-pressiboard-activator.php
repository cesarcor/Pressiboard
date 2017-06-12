<?php

/**
 * Fired during plugin activation
 *
 * @link       http://www.example.com
 * @since      1.0.0
 *
 * @package    Pressiboard
 * @subpackage Pressiboard/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Pressiboard
 * @subpackage Pressiboard/includes
 * @author     Cesar C. Downs <cesarcorrechel@gmail.com>
 */
class Pressiboard_Activator {

	/**
	 * Activation class to add submenu to appearance menu
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

	add_action('admin_menu', 'pressiboard_page');

	function pressiboard_page(){
    add_submenu_page(
        'tools.php',
        'Pressiboard',
        'Pressiboard',
        'manage_options',
        'pressiboard',
        'pressiboard_view'
    );
	}

	function pressiboard_view(){
		?>
		<div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
    </div>

		<?php
	}



	}

}
