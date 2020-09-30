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
if ( !function_exists( 'keliosis_images' ) ) 
{
  function keliosis_images()
  {        
  ?>
  <div class="wrap">
    <h1><?php echo __( 'Images', 'keliosis' ); ?></h1>
  </div>
  <?php
  }
}