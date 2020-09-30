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
if ( !function_exists( 'keliosis_dashboard' ) ) 
{
  function keliosis_dashboard()
  {        
  ?>
  <div class="wrap">
    <h1><?php echo __( 'Dashboard', 'keliosis' ); ?></h1>
  </div>
  <?php
  }
}