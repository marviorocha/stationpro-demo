<?php

/**
 * Redux Player Class
 *
 * @class   Redux_Core
 * @version 4.0.0
 * @package StationPro.co
 */
global $stationpro;


if (!defined('ABSPATH')) {
  exit;
}

if (!class_exists('Redux_Player', false)) {

  /**
   * Class station_player
   */
  class Redux_Player
  {
    /**
     * Is loaded.
     *
     * @var bool
     */
    public $redux_loaded = true;

    /**
     * Get things started
     *
     * @since 1.4
     */
    public function __construct()
    {
      add_action('wp_footer', array($this, 'player_screen'));
    }


    public function init()
    {
      if ($this->redux_loaded) {
        return;
      }

      $this->redux_loaded = true;
      include_once dirname(__FILE__) . '/views/widget.php';
      add_action('wp_enqueue_style', "player_load");
    }

    /**
     * Displays the player screen and includes the main view file.
     *
     * @throws player_screen() description of exception
     * @return void
     */
    public function player_screen()
    {
      echo (

        '<div style="bottom:0; position: fixed; z-index: 1;  display: block;" class="transition transform fixed z-100 w-full opacity-100 scale-100 translate-y-0 ease-out duration-500"  id="player_stationpro">
                    <iframe allowfullscreen=""  src="' . esc_url(Redux_Core::$url) . 'inc/player/views/main.php" scrolling="no"  id="iframe_default" height="100" class="w-full" frameborder="0">
                    <p>Your browser is not supported iframe</p>
                   </iframe>
              </div>'
      );
    }
  }
}
