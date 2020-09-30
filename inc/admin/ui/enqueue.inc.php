<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Add CSS and JS files for WP Keliosis settings page
 *
 * @since 0.1
 * @author Florian Valois
 */
if ( !function_exists( 'keliosis_enqueue_style_script' ) ) {
  function keliosis_enqueue_style_script() {
    // Call of CSS and JS files of keliosis plugin theme
    wp_enqueue_style( 'wp-keliosis', WP_KELIOSIS_URL . 'style.min.css', null, null );
    wp_enqueue_script( 'wp-keliosis', WP_KELIOSIS_URL . 'script.min.js', array('jquery', 'jquery-ui-core'), null, true );
    
    // Google Fonts
    wp_enqueue_style( 'wp-keliosis-google-font', 'https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap', null, '');
    
    wp_enqueue_style( 'wp-keliosis-font-awesome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css', null, null );


  }
}

/**
 * Function to call CSS and JS only on WP Keliosis options page
 *
 * @since 0.1
 * @author Florian Valois
 */
if ( !function_exists( 'keliosis_load_enqueue_style_script' ) ) {
  function keliosis_load_enqueue_style_script(){
    add_action( 'admin_print_styles', 'keliosis_enqueue_style_script' );
  }
}