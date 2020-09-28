<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Changelog page
 *
 * @since 0.3
 * @author Florian Valois
 *
 * @return void
 */
if ( !function_exists( 'keolis_changelog' ) ) 
{
  function keolis_changelog()
  {        
  ?>
  <div class="wrap">
    <h1><?php echo __( 'Changelog', 'keliosis' ); ?></h1>
  </div>
  <?php
  }
}