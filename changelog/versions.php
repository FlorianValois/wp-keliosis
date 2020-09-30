<?php

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human !');

/**
 * Changelog versions
 *
 * @since 0.3
 * @author Florian Valois
 */

$versions = array(
  array(
    'version' => '0.3',
    'date' => '28th September, 2020',
    'details' => array(
      'changed' => array(
        'Updated all design and all page of plugin',
        'Change Font Awesome Free v 5.12.0 library to Font Awesome Free v 5.14.0 CDN'
      ),
      'removed' => array(
        'Removed Bootstrap v 4.4.1',
        'Remove function to create a dedicate table in database for plugin'
      )
    )
  ),
  array(
    'version' => '0.2.3',
    'date' => '11th January, 2020',
    'details' => array(
      'changed' => array(
        'Updated readme sections : description, installation and screenshot',
        'Updated changelog section. Change version listing by tabs for less scrolling'
      ),
      'fixed' => array(
        'Debug link changelog on dashboard'
      ),
      'removed' => array(
        'Removed folder in assets'
      )
    )
  ),
  array(
    'version' => '0.2.2',
    'date' => '11th January, 2020',
    'details' => array(
      'fixed' => array(
        'Problem on merge branch in SVN'
      )
    )
  ),
  array(
    'version' => '0.2.1',
    'date' => '11th January, 2020',
    'details' => array(
      'fixed' => array(
        'Tested up to: WP 5.3.2'
      )
    )
  ),
  array(
    'version' => '0.2',
    'date' => '11th January, 2020',
    'details' => array(
      'added' => array(
        'Added administrator access security.Added administrator access security',
        'Added new UI, logo and banner',
        'Added english and french translations)',
        'Added new sections : Dashboard, Medias, Email, Changelog',
        'Added function to customize name and email author of mail by default send by WordPress',
        'Added function to check existing field and his value',
        'Added Bootstrap v 4.4.1',
        'Added Font Awesome Free v 5.12.0',
      ),
      'change' => array(
        'Change name folder views in sections',
        'Reorganize files in views folder',
        'Updated .pot file'
      ),
      'remove' => array(
        'Removed settings in options table to place data in specific table'
      )
    )
  ),
  array(
    'version' => '0.1.1',
    'date' => '30th December, 2019',
    'details' => array(
      'changed' => array(
        'Updated plugin informations'
      )
    )
  ),
  array(
    'version' => '0.1',
    'date' => '27th December, 2019',
    'details' => array(
      'added' => array(
        'Added main settings page',
        'Added rewrite_filename function',
        'Added .pot file and translations function'
      )
    )
  )
);