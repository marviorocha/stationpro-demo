<?php

if (!class_exists('Redux')) {
  return null;
}


global $stationpro;



$opt_name = 'stationpro';

/**
 * GLOBAL ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

/**
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.
if (!function_exists('get_plugins')) {
  include_once ABSPATH . 'wp-admin/includes/plugin.php';
}

$data_plugins = get_plugins();

$args = array(
  // REQUIRED!!  Change these values as you need/desire.
  'opt_name' => $opt_name,

  'logo' => plugin_dir_url(__FILE__) . '/assets/images/logo_stationpro.svg',

  // Name that appears at the top of your panel.
  'display_name' => 'StationPro.co',

  // Version that appears at the top of your panel.
  'display_version' => 'v' . $data_plugins['station-pro/stationpro.php']['Version'],
  'type_version' => $stationpro->is_plan('premium') ? 'premium version' : 'version free',

  // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
  'menu_type' => 'menu',

  // Show the sections below the admin menu item or not.
  'allow_sub_menu' => true,

  'menu_title' => esc_html__('Station Pro', 'stationpro'),
  'page_title' => esc_html__('Station Pro - Dashboard', 'stationpro'),

  // Disable this in case you want to create your own google fonts loader.
  'disable_google_fonts_link' => true,

  // Show the panel pages on the admin bar.
  'admin_bar' => false,

  // Choose an icon for the admin bar menu.
  'admin_bar_icon' => 'dashicons-microphone',

  // Choose an priority for the admin bar menu.
  'admin_bar_priority' => '',

  // Set a different name for your global variable other than the opt_name.
  'global_variable' => '',

  // Show the time the page took to load, etc.
  'dev_mode' => false,

  // Enable basic customizer support.
  'customizer' => false,

  // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
  'page_priority' => 81,

  // For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
  'page_parent' => 'themes.php',

  // Permissions needed to access the options panel.
  'page_permissions' => 'manage_options',

  // Specify a custom URL to an icon.
  'menu_icon' => 'dashicons-microphone',

  // Force your panel to always open to a specific tab (by id).
  'last_tab' => '',

  // Icon displayed in the admin panel next to your menu_title.
  'page_icon' => 'icon-themes',

  // Page slug used to denote the panel.
  'page_slug' => '_stationpro_panel',

  // On load save the defaults to DB before user clicks save or not.
  'save_defaults' => true,

  // If true, shows the default value next to each field that is not the default value.
  'default_show' => false,

  // What to print by the field's title if the value shown is default. Suggested: *.
  'default_mark' => '',

  // Shows the Import/Export panel when not used as a field.
  'show_import_export' => false,

  // CAREFUL -> These options are for advanced use only.
  'transient_time' => 60 * MINUTE_IN_SECONDS,

  // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
  'output' => false,

  // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
  'output_tag' => false,

  // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
  // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
  'database' => '',

  // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
  'use_cdn' => false,
  'compiler' => true,

  // Enable or disable flyout menus when hovering over a menu with submenus.
  'flyout_submenus' => false,


  // 'templates_path' => plugin_dir_url( __FILE__ ) . 'templates/panel/container.tpl.php',
  // Mode to display fonts (auto|block|swap|fallback|optional)
  // See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display
  'font_display' => 'swap',

  'templates_path' => dirname(__FILE__) . '/templates/panel/',

  'admin_theme' => 'ectoplasm',

  'footer_credit' => 'Station Pro by <a href="' . esc_url('https://stationpro.co') . '" target="_blank">Station Pro</a>',

  'hide_reset' => true,
  'network_admin' => true,


);

Redux::set_args($opt_name, $args);


Redux::set_section(
  $opt_name,
  array(
    'title' => esc_html__('Player', 'stationpro'),
    'id' => 'basic',
    'desc' => esc_html__('These are really basic fields!', 'stationpro'),
    'customizer_width' => '400px',
    'icon' => 'el el-play-circle',
  )
);

require_once Redux_Core::$dir . '../app/sections/fields/player_input.php';
require_once Redux_Core::$dir . '../app/sections/fields/streaming.php';



Redux::set_section(
  $opt_name,
  array(
    'title' => esc_html__('Styles', 'stationpro'),
    'id' => 'styles',
    'desc' => $stationpro->is_plan('premium') ? true : esc_html__('You can custom player your radio is coming soon!', 'stationpro'),
    'customizer_width' => '400px',
    'icon' => 'el el-website',
    'disabled' => false,
  )
);

require_once Redux_Core::$dir . '../app/sections/fields/styles.php';

Redux::set_section(
  $opt_name,
  array(
    'title' => esc_html__('Settings', 'stationpro'),
    'id' => 'settings',
    'desc' => esc_html__('Settings player', 'stationpro'),
    'customizer_width' => '400px',
    'icon' => 'el el-cog',
  )
);

require_once Redux_Core::$dir . '../app/sections/fields/settings.php';


/**
 * Dequeues the 'redux-admin-css' style and registers and enqueues a new
 * 'redux-custom-css' style with a dependency on 'redux-admin-css'.
 *
 * @throws Some_Exception_Class if unable to register the new style.
 */
function station_pro_override_panel_css()
{
  wp_dequeue_style('redux-admin-css');
  wp_register_style(
    'redux-custom-css',
    plugin_dir_url(__FILE__) . 'assets/css/dashboard.css',
    array('redux-admin-css'),
    time(),
    'all'
  );
  wp_enqueue_style('redux-custom-css');
  $option = get_option('stationpro');
  file_put_contents(dirname(__DIR__) . "/core/inc/player/assets/javascript/station_data.json", json_encode($option));
}
add_action('redux/page/' . $opt_name . '/enqueue', 'station_pro_override_panel_css');



/**
 * Enqueues the necessary styles and scripts for the station_pro theme.
 *
 * @throws Some_Exception_Class description of exception
 * @return void
 */
function station_pro_enqueue_styles()
{

  wp_enqueue_style('material-icons', esc_url(Redux_Core::$url) . 'inc/player/assets/css/material_icos.css');
  wp_enqueue_style('animate-css', esc_url(Redux_Core::$url) . 'inc/player/assets/css/animate.min.css');
  wp_enqueue_style('player_custom_css', esc_url(Redux_Core::$url) . 'inc/player/assets/css/player.css', false);
  wp_enqueue_script('tailwindcss', esc_url(Redux_Core::$url) . 'inc/player/assets/javascript/tailwindcss.js', false);

  // wp_enqueue_script('player_javascript', esc_url(Redux_Core::$url) . 'inc/player/assets/javascript/radio.js', false);
}

add_action('wp_enqueue_scripts', 'station_pro_enqueue_styles');


/**
 * Enqueues the necessary scripts for the station pro advertisements.
 *
 * @throws Some_Exception_Class description of exception
 */
function station_pro_advertis_enqueue_scripts()
{
  wp_register_script('AlpineJS-module', esc_url(Redux_Core::$url) . 'inc/player/assets/javascript/alpine.min.js', null, null, 'defer');
  wp_enqueue_script('AlpineJS-module');
}
add_action('wp_enqueue_scripts', 'station_pro_advertis_enqueue_scripts');
add_filter('script_loader_tag', 'station_pro_advertis_defer_script', 10, 2);


/**
 * Replaces the type attribute of a script tag based on the handle value.
 *
 * @param string $tag The original script tag.
 * @param string $handle The handle value.
 * @return string The modified script tag.
 */
function station_pro_advertis_defer_script($tag, $handle)
{
  if ($handle === 'AlpineJS-module') {
    $tag = str_replace("type='text/javascript'", "type='module'", $tag);
  }
  if ($handle === 'AlpineJS-nomodule') {
    $tag = str_replace("type='text/javascript'", "nomodule", $tag);
    $tag = str_replace("type='text/javascript'", "", $tag);
    $tag = str_replace("alpine.min.js'", "alpine.min.js' defer", $tag);
  }
  return $tag;
}

add_action('update_option', function () {
  $option = get_option('stationpro');
  file_put_contents(dirname(__DIR__) . "/core/inc/player/assets/javascript/station_data.json", json_encode($option));
}, 10, 3);
