<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Images page
 *
 * @since 0.1
 * @author Florian Valois
 *
 * @return void
 */
if ( !function_exists( 'wpk__images' ) ) 
{
  function wpk__images()
  {  
    
  echo wpk__title_page( __( 'Images', 'keliosis' ) ); 
?>
  
  <div class="wrap">
  
  </div>
  <?php
  }
}