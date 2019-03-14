<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link       https://github.com/josenbo/josenbo-restrict-admin-bar-plugin
 * @since      1.0.0
 * @package    Restrict_Admin_Bar
 *
 * @wordpress-plugin
 * Plugin Name:       Josenbo Restrict Admin Bar
 * Plugin URI:        https://github.com/josenbo/josenbo-restrict-admin-bar-plugin
 * Description:       Restricts access to the admin bar to editors and administrators
 * Version:           1.0.0
 * Author:            Jochen Stein
 * Author URI:        https://github.com/josenbo
 * License:           GPLv3 
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       josenbo-restrict-admin-bar
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
  if (!current_user_can('editor') && !current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}
