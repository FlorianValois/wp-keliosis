<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Init WP Keliosis in WP
 *
 * @since 0.1
 */
if ( !function_exists( 'keliosis_init' ) ) {
  add_action( 'after_setup_theme', 'keliosis_init' );
  function keliosis_init() {
    // Admin UI
//    require WP_KELIOSIS_PATH_INC_ADMIN_UI . 'enqueue.php';

  }
}