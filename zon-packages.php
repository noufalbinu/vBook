<?php
/**
 * @package vBookPackages
 * @version 1.0
 */
/*
Plugin Name: vBook Booking Manager
Plugin URI: https://www.wpadroit.com/plugins/vbook
Description: .
Author: Noufal Binu
Version: 1.0.0
Author URI: https://www.noufalbinu.com/
Text Domain: vBook
*/


// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );
// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}
/**
 * The code that runs during plugin activation
 */
function activate_zon_packages() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_zon_packages' );
/**
 * The code that runs during plugin deactivation
 */
function deactivate_zon_packages() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_zon_packages' );
/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::registerServices();
}