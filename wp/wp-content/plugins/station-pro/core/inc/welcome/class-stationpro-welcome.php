<?php

/**
 * Redux Welcome Class
 *
 * @class Redux_Core
 * @version 4.0.0
 * @package StationPro.co
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Redux_Welcome', false)) {

    /**
     * Class Redux_Welcome
     */
    class Redux_Welcome
    {
        /**
         * Min capacity.
         *
         * @var string The capability users should have to view the page
         */
        public $minimum_capability = 'manage_options';

        /**
         * Display version.
         *
         * @var string
         */
        public $display_version = '';

        /**
         * Is loaded.
         *
         * @var bool
         */
        public $redux_loaded = false;

        /**
         * Get things started
         *
         * @since 1.4
         */
        public function __construct()
        {
            // Load the welcome page even if a Redux panel isn't running.
            add_action('init', array($this, 'init'), 999);
            //add_action( 'admin_init', array( $this, 'register_options' ) );
        }

        /**
         * Class init.
         */
        public function init()
        {
            if ($this->redux_loaded) {
                return;
            }

            $this->redux_loaded = true;
            add_action('admin_menu', array($this, 'admin_menus'));

            if (isset($_GET['page'])) { // phpcs:ignore WordPress.Security.NonceVerification
                add_action('admin_head', array($this, 'admin_head'));
                add_filter('admin_footer_text', array($this, 'change_wp_footer'));
                $plugins = get_plugins();
                $this->display_version = $plugins['station-pro/stationpro.php']['Version'];
            }
        }

        /**
         * Do Redirect.
         */
        public function do_redirect()
        {
            if (!defined('WP_CLI')) {
                wp_safe_redirect(esc_url(admin_url(add_query_arg(array('page' => 'station-pro'), 'options-general.php'))));
                exit();
            }
        }

        /**
         * Change Footer.
         */



        public function change_wp_footer()
        {
            echo esc_html__('If you like', 'station-pro') . ' <strong>StationPro.co</strong> ' . esc_html__('please leave us a', 'station-pro') . ' <a href="https://wordpress.org/support/view/plugin-reviews/station-pro?filter=5#postform" target="_blank" class="redux-rating-link" data-rated="Thanks :)">&#9733;&#9733;&#9733;&#9733;&#9733;</a> ' . esc_html__('rating. A huge thank you in advance!', 'station-pro');
        }



        /**
         * Register the Dashboard Pages which are later hidden but these pages
         * are used to render the What's Redux pages.
         *
         * @access public
         * @since  1.4
         * @return void
         */

        public function admin_menus()
        {
            $page = 'add_options_page';
            add_submenu_page('_stationpro_panel', 'Welcome Dashboard', 'Dashboard', $this->minimum_capability, 'station-pro', array($this, 'about_screen'), 0);
        }

        /**
         * Hide Individual Dashboard Pages
         *
         * @access public
         * @since  1.4
         * @return void
         */
        public function admin_head()
        {
            ?>
            <link rel='stylesheet' id='elusive-icons' <?php // phpcs:ignore WordPress.WP.EnqueuedResources 
            ?> href='<?php echo esc_url(Redux_Core::$url); ?>assets/css/vendor/elusive-icons.css' type='text/css' media='all' />

            <link rel='stylesheet' id='redux-welcome-css' <?php // phpcs:ignore WordPress.WP.EnqueuedResources 
            ?> href='<?php echo esc_url(Redux_Core::$url); ?>inc/welcome/css/redux-welcome.css' type='text/css' media='all' />

            <style>
                .redux-badge:before {
                    <?php echo is_rtl() ? 'right' : 'left'; ?>: 0;
                }

                .about-wrap .redux-badge {
                    <?php echo is_rtl() ? 'left' : 'right'; ?>: 0;
                }

                .about-wrap .feature-rest div {
                    padding- <?php echo is_rtl() ? 'left' : 'right'; ?>: 100px;
                }

                .about-wrap .feature-rest div.last-feature {
                    padding- <?php echo is_rtl() ? 'left' : 'right'; ?>: 0;
                }

                .about-wrap .feature-rest div.icon:before {
                    margin: <?php echo is_rtl() ? '0 -100px 0 0' : '0 0 0 -100px'; ?>;
                }
            </style>
            <?php
        }

        /**
         * Navigation tabs
         *
         * @access public
         * @since  1.9
         * @return void
         */
        public function tabs()
        {
            $selected = isset($_GET['page']) ? sanitize_text_field(wp_unslash($_GET['page'])) : 'station-pro'; // phpcs:ignore WordPress.Security.NonceVerification
            $nonce    = wp_create_nonce('redux-support-hash');

            ?>
            <input type="hidden" id="redux_support_nonce" value="<?php echo esc_attr($nonce); ?>" />
            
            <h2 class="nav-tab-wrapper">
                <a class="nav-tab <?php echo ('station-pro' === $selected ? 'nav-tab-active' : ''); ?>" href="<?php echo esc_url(admin_url(add_query_arg(array('page' => 'station-pro'), 'admin.php'))); ?>">
                    <?php esc_attr_e('What do you need?', 'station-pro'); ?>
                </a>

                <a class="nav-tab <?php echo ('upgrade-stationpro' === $selected ? 'nav-tab-active' : ''); ?>" href="<?php echo esc_url(admin_url(add_query_arg(array('page' => '_stationpro_panel-pricing'), 'admin.php'))); ?>">
                 <i class="el el-start"></i> <?php esc_attr_e('Upgrade now to Premium', 'station-pro'); ?>
                </a>
            </h2>
            <?php
        }

        /**
         * Render About Screen
         *
         * @access public
         * @since  1.4
         * @return void
         */
        public function about_screen()
        {

            echo '<div class="wrap" style="height:0;overflow:hidden;"><h2></h2></div>';

            require_once 'views/about.php';
        }
    }
}
