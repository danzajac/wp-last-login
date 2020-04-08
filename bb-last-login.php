<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              andrewrhyand.com
 * @since             1.0.0
 * @package           Boxybird_Last_Login
 *
 * @wordpress-plugin
 * Plugin Name:       BoxyBird Last Login
 * Plugin URI:        #
 * Description:       Adds timestamp column for the last time a User logged-in.
 * Version:           1.1.0
 * Author:            Andrew Rhyand
 * Author URI:        andrewrhyand.com
 * License:           GPLv2 or later
*  License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       boxybird-last-login
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('BOXYBIRD_LAST_LOGIN', '1.1.0');

/**
 * The core plugin class
 */

 if (!class_exists('BB_Last_Login')) {
     require_once plugin_dir_path(__FILE__) . 'includes/BB_Last_Login.php';

     BB_Last_Login::init();
 }
