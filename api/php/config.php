<?php
  /**
  * Tweetie Config
  */

  // fetch the keys from the settings file
  $c_key = \Drupal\Core\Site\Settings::get('consumer_key');
  $c_secret = \Drupal\Core\Site\Settings::get('consumer_secret');
  $a_token = \Drupal\Core\Site\Settings::get('access_token');
  $a_secret = \Drupal\Core\Site\Settings::get('access_secret')
    
  // Consumer Key
  define('CONSUMER_KEY', $c_key);
  define('CONSUMER_SECRET', $c_secret);

  // User Access Token
  define('ACCESS_TOKEN', $a_token);
  define('ACCESS_SECRET', $a_secret);

  // Cache Settings
  define('CACHE_ENABLED', false);
  define('CACHE_LIFETIME', 3600); // in seconds
