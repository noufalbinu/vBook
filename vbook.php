<?php
/*
 * Plugin Name:       vBook Booking Manager
 * Plugin URI:        https://wpadroit.com/plugins/vbook/
 * Description:       Hotel & Resort Booking & Managing plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Noufal Binu
 * Author URI:        https://noufalbinu.com/
 * License:           GPL v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Update URI:        https://wpadroit.com/plugins/vbook/
 * Text Domain:       vbook
 * Domain Path:       /languages
 */

 /* Main Plugin File */
...
function my_plugin_activate() {

  add_option( 'Activated_Plugin', 'vbook' );

  /* activation code here */
}
register_activation_hook( __FILE__, 'index' );

function load_plugin() {

    if ( is_admin() && get_option( 'Activated_Plugin' ) == 'vbook' ) {

        delete_option( 'Activated_Plugin' );

        /* do stuff once right after activation */
        // example: add_action( 'init', 'my_init_function' );
    }
}
add_action( 'admin_init', 'load_plugin' );