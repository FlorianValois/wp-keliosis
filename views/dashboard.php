<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Dashboard page
 *
 * @since 0.1
 * @author Florian Valois
 *
 * @return void
 */
if ( !function_exists( 'wpk__dashboard' ) ) 
{
  function wpk__dashboard()
  {        
  
  wpk__title_page( __( 'Dashboard', 'keliosis' ) );
?>
  <div class="wrap">
  
  </div>
  <?php
  }
}