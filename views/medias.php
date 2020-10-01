<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Media page
 *
 * @since 0.1
 * @author Florian Valois
 *
 * @return void
 */
if ( !function_exists( 'wpk__medias' ) ) 
{
  function wpk__medias()
  {  
    
  echo wpk__title_page( __( 'Medias', 'keliosis' ) ); 
?>
  
  <div class="wrap">
  
  </div>
  <?php
  }
}