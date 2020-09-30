<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Display a link for WP Keliosis in dashboard and call enqueue only on WP Keliosis options page
 *
 * @since 0.1
 * @author Florian Valois
 */
if ( !function_exists( 'keliosis_link_dashboard' ) ) 
{
  add_action('admin_menu','keliosis_link_dashboard');
  function keliosis_link_dashboard()
  {
    $keliosis_admin_page = array(
      
      // Main plugin page
      add_menu_page(
        __( 'WP Keliosis', 'keliosis' ), 
        __( 'WP Keliosis', 'keliosis' ), 
        'manage_options', 
        'wp_keliosis', 
        'keliosis_dashboard', 
        'dashicons-admin-plugins',  
        99 
      ),

      // Dashboard
      add_submenu_page( 
        'wp_keliosis', 
        __( 'Dashboard', 'keliosis' ), 
        __( 'Dashboard', 'keliosis' ),
        'manage_options', 
        'wp_keliosis',
        'keliosis_dashboard'
      ),

      // Images
      add_submenu_page( 
        'wp_keliosis', 
        __( 'Images', 'keliosis' ), 
        __( 'Images', 'keliosis' ),
        'manage_options', 
        'wp_keliosis_images',
        'keliosis_images'
      ),

      // Changelog
      add_submenu_page( 
        'wp_keliosis', 
        __( 'Changelog', 'keliosis' ), 
        __( 'Changelog', 'keliosis' ),
        'manage_options',
        'wp_keliosis_changelog',
        'keliosis_changelog'
      )
    );
    

    // Load CSS and JS only on plugin page
    foreach($keliosis_admin_page as $key){ 
      add_action('load-'.$key, 'keliosis_load_enqueue_style_script');
    }
    
  }
}
