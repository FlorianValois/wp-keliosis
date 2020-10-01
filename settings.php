<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Init WP Keliosis in WP
 *
 * @since 0.1
 */
if ( !function_exists( 'wpk__init' ) ) {
  add_action( 'after_setup_theme', 'wpk__init' );
  function wpk__init() {
    
    // Admin menu
    require WP_KELIOSIS_PATH_INC_ADMIN . 'admin_menu.inc.php';
    
    // Admin UI
    require WP_KELIOSIS_PATH_INC_ADMIN_UI . 'enqueue.inc.php';
    
    // Template
    require WP_KELIOSIS_PATH_INC_TEMPLATE . 'title.inc.php';
    
    // Views
    require WP_KELIOSIS_PATH_VIEWS . 'dashboard.php';
    require WP_KELIOSIS_PATH_VIEWS . 'medias.php';
    require WP_KELIOSIS_PATH_VIEWS . 'changelog.php';

  }
}