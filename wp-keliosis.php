<?php
/*
 * Plugin Name: WP Keliosis
 * Plugin URI: https://wordpress.org/plugins/wp-keliosis/
 * Description: The best all-in-one plugin to customize default options of WordPress.
 * Version: 0.3
 * Author: Florian Valois
 * Author URI: https://florian-valois.com
 * Licence: GPLv2 or later
 *
 * Text Domain: keliosis
 * Domain Path: /languages
 */

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');


/**
 * Define constants
 *
 * @since 0.1
 * @author Florian Valois
 */
define( 'WP_KELIOSIS_VERSION',                  '0.3' );
define( 'WP_KELIOSIS_NAME',                     'keliosis' );
define( 'WP_KELIOSIS_SLUG',                     'wp-keliosis' );
define( 'WP_KELIOSIS_FILE',                     __FILE__ );
define( 'WP_KELIOSIS_PATH',                     realpath( plugin_dir_path( WP_KELIOSIS_FILE ) ) . '/' );

define( 'WP_KELIOSIS_PATH_INC',                 realpath( WP_KELIOSIS_PATH . 'inc/' ) . '/' );
define( 'WP_KELIOSIS_PATH_INC_ADMIN',           realpath( WP_KELIOSIS_PATH_INC . 'admin/' ) . '/' );
define( 'WP_KELIOSIS_PATH_INC_ADMIN_UI',        realpath( WP_KELIOSIS_PATH_INC_ADMIN . 'ui/' ) . '/' );
define( 'WP_KELIOSIS_PATH_VIEWS',               realpath( WP_KELIOSIS_PATH . 'views/' ) . '/' );
define( 'WP_KELIOSIS_PATH_CHANGELOG',           realpath( WP_KELIOSIS_PATH . 'changelog/' ) . '/' );

define( 'WP_KELIOSIS_URL',                      plugin_dir_url( WP_KELIOSIS_FILE ) );
define( 'WP_KELIOSIS_URL_ASSETS',               WP_KELIOSIS_URL . 'assets/' );

/**
 * Loads WP Keliosis translations
 *
 * @since 0.1
 * @author Florian Valois
 */
if ( !function_exists( 'keliosis_load_textdomain' ) ) 
{
  add_action( 'plugins_loaded', 'keliosis_load_textdomain' );
  function keliosis_load_textdomain() 
  {
    $locale = get_locale();
    $locale = apply_filters( 'plugin_locale', $locale, 'keliosis' );
    load_textdomain( 'keliosis', WP_LANG_DIR . '/plugins/wp-keliosis-' . $locale . '.mo' );
    load_plugin_textdomain( 'keliosis', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
  }
}

require_once WP_KELIOSIS_PATH . 'settings.php';