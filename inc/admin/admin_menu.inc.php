<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Display a link for WP Keliosis in dashboard and call enqueue only on WP Keliosis options page
 *
 * @since 0.1
 * @author Florian Valois
 */
if ( !function_exists( 'keolis_link_dashboard' ) ) 
{
  add_action('admin_menu','keolis_link_dashboard');
  function keolis_link_dashboard()
  {
    $keliosis_admin_page = add_menu_page(
      __( 'WP Keliosis', 'keliosis' ), 
      __( 'WP Keliosis', 'keliosis' ), 
      'manage_options', 
      'wp_keliosis', 
      'keolis_dashboard', 
      'dashicons-admin-plugins',  
      99 
    );
    
    // Dashboard
    add_submenu_page( 
      'wp_keliosis', 
      __( 'Dashboard', 'keliosis' ), 
      __( 'Dashboard', 'keliosis' ),
      'manage_options', 
      'wp_keliosis',
      'keolis_dashboard'
    );
    
    // Images
    add_submenu_page( 
      'wp_keliosis', 
      __( 'Images', 'keliosis' ), 
      __( 'Images', 'keliosis' ),
      'manage_options', 
      'wp_keliosis_images',
      'keolis_images'
    );
    
    // Changelog
    add_submenu_page( 
      'wp_keliosis', 
      __( 'Changelog', 'keliosis' ), 
      __( 'Changelog', 'keliosis' ),
      'manage_options',
      'wp_keliosis_changelog',
      'keolis_changelog'
    );

  }
}