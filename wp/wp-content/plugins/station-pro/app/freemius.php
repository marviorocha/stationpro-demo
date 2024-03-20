<?php

if (!function_exists('stationpro')) {
  // Create a helper function for easy SDK access.
  function stationpro()
  {
    global $stationpro;

    if (!isset($stationpro)) {
      // Activate multisite network integration.
      if (!defined('WP_FS__PRODUCT_1047_MULTISITE')) {
        define('WP_FS__PRODUCT_1047_MULTISITE', true);
      }
      
      if (!defined('WP_FS__ENABLE_GARBAGE_COLLECTOR')) {
        define('WP_FS__ENABLE_GARBAGE_COLLECTOR', true);
      }

      // Include Freemius SDK.
      require_once dirname(__FILE__) . '/freemius/start.php';

      $stationpro = fs_dynamic_init(
        array(
          'id' => '1047',
          'slug' => '_stationpro_panel',
          'type' => 'plugin',
          'public_key' => 'pk_3defa8338f31c475d1ef8fad18f9a',
          'is_premium' => false,
          'premium_suffix' => 'Station Pro (Premium)',
          // If your plugin is a serviceware, set this option to false.
          'has_premium_version' => true,
          'has_addons' => false,
          'has_paid_plans' => true,
          'menu' => array(
            'slug' => "_stationpro_panel",
            'first-path' => 'admin.php?page=station-pro&welcome-message=true',
            'support' => false,
            'network' => true,
          ),

        )
      );
    }

    return $stationpro;
  }

  // Init Freemius.
  stationpro();
  // Signal that SDK was initiated.
  do_action('stationpro_loaded');

  function stationpro_settings_url()
  {
    return admin_url('admin.php?page=_stationpro_panel');
  }

  stationpro()->add_filter('connect_url', 'stationpro_settings_url');
  stationpro()->add_filter('after_skip_url', 'stationpro_settings_url');
  stationpro()->add_filter('after_connect_url', 'stationpro_settings_url');
  stationpro()->add_filter('after_pending_connect_url', 'stationpro_settings_url');
}

stationpro()->add_action('after_uninstall', 'stationpro_uninstall_cleanup');
