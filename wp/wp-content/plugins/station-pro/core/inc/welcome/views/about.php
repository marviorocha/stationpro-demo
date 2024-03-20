<?php

/**
 * Admin View: Page - About
 *
 * @package StationPro.co
 */

defined('ABSPATH') || exit;

?>
<div class="wrap about-wrap">
    <div class="error hide">
       
        <?php printf(esc_html__('StationPro is running from within one of your products. To keep your site safe, please install the Redux Framework plugin from WordPress.org.', 'stationpro'));  ?>
       
    </div>
    <h1><?php printf(esc_html__('Welcome to', 'stationpro') . ' Station Pro %s', esc_html($this->display_version)); ?></h1>


    <div class="about-text">

        <?php esc_html_e("Station Pro, is the ultimate tool for adding a radio player to your WordPress site. With its easy installation process, you'll be up and running in no time. And with its customizable options, you can easily match the look and feel of the player to your website's design.
", 'stationpro'); ?>
    </div>
    <div class="redux-badge">
        <img src="<?php echo esc_url(Redux_Core::$url); ?>assets/img/logo_stationpro.svg" alt="logo StationPro">
        <span><?php printf(esc_html__('Version', 'stationpro') . ' %s', esc_html($this->display_version)); ?></span>
    </div>


    <?php $this->tabs(); ?>

    <div class="wrap about-wrap">

        <div class="columns">
            <div class="column is-half">

                <div class="card is-flex">
                    <div class="card-content">
                        <ul class="">
                            <li class="media">
                                <figure class="media-left pr-5">
                                    <span class="icon is-align-items-start"><i class="el el-play-circle el-3x"></i></span>

                                </figure>


                                <div class="content">
                                    <a href="<?php echo esc_url('admin.php?page=_stationpro_panel&tab=1'); ?>">
                                    <?php echo sprintf(esc_html__('Before you start, you need to set up some options for your player.', 'stationpro')); ?>
                                    </a>
                                </div>
                            </li>
                            <li class="media">
                                <figure class="media-left pr-5">
                                    <span class="icon is-align-items-start"><i class="el el-cog el-3x"></i></span>

                                </figure>


                                <div class="content">
                                <a href="<?php echo esc_url('admin.php?page=_stationpro_panel&tab=5') ?>">
                                    <?php echo sprintf(esc_html__('The settings player is a tool that allows you to customize various aspects of your player', 'stationpro')); ?>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>

            </div>

            <div class="column is-half">
                <div class="card is-flex">
                    <div class="card-content">



                        <div class="content">
                            <h3>Plugin recomended</h3>
                            <i class="el  el-chevron-right"></i> <a target="_blank" href="<?php echo esc_url('https://wordpress.org/plugins/ajax-press/'); ?>"><?php echo __('<b>Ajax Press</b> Keep your site more fast with this plugin', 'stationpro') ?></a> 
                        </div>


                        </ul>
                    </div>


                </div>
            </div>

        </div>

        <div class="box">
            <?php echo esc_html('Improved User Interface: We\'ve completely overhauled the user interface to make it even more intuitive and user-friendly. The new interface is sleek, modern, and easy to navigate, making it easier than ever to find and listen to your favorite radio stations.', 'stationpro') ?>
        </div>
 
    </div>
    <hr>
    <?php

    // $sysinfo = Redux_Helpers::process_redux_callers();

    ?>



    <div class="feature-section <?php echo empty($sysinfo) ? 'one-col' : 'two-col'; ?>">



    

        <div class="col">
            <?php
            if (!empty($sysinfo) && is_array($sysinfo)) {
                $plugin_index = array();
                $plugin_data  = get_plugins();

                foreach ($plugin_data as $key => $data) {
                    $key_slug                  = explode('/', $key);
                    $key_slug                  = $key_slug[0];
                    $plugin_index[$key_slug] = $key;
                }

                foreach ($sysinfo as $project_type => $products) {
                    if ('theme' === $project_type) {
                        $my_theme = wp_get_theme();
                        ?>
                        <div class="redux-product">
                            <h2 class="name"><?php echo esc_html($my_theme->get('Name')); ?>
                                <?php if (!empty($my_theme->get('Version'))) { ?>
                                    <span class="version"><?php echo esc_html__('Version:', 'stationpro'); ?>&nbsp;<?php echo esc_html($my_theme->get('Version')); ?></span>
                                <?php } ?>
                            </h2>
                            <p class="author">
                                <?php if (!empty($my_theme->get('Author'))) { ?>
                                    <?php echo esc_html__('By', 'stationpro'); ?>
                                    <a href="<?php echo !empty($my_theme->get('AuthorURI')) ? esc_attr($my_theme->get('AuthorURI')) : esc_attr($my_theme->get('ThemeURI')); ?>">
                                        <?php echo esc_html($my_theme->get('Author')); ?>

                                    </a>
                                <?php } ?>
                                <span class="type theme">
                                    <?php echo esc_html__('Theme', 'stationpro'); ?>
                                </span>
                            </p>
                            <hr style="margin: 0 0 15px 0;padding:0;">
                            <p class="author">
                                <small>
                                    <?php
                                    foreach ($products as $slug => $data) {
                                        foreach ($data as $opt_name => $callers) {
                                            echo '<span><strong>opt_name</strong>: <code>' . esc_html($opt_name) . '</code></span><br />';

                                            foreach ($callers as $caller) {
                                                echo '<span>~/' . esc_html($caller['basename']) . '</span><br />';
                                            }

                                            echo '<br />';
                                        }
                                    }
                                    ?>
                                </small>
                            </p>
                        </div>

                        <?php
                    } else {
                        foreach ($products as $product => $data) {
                            if (!isset($plugin_index[$product])) {
                                continue;
                            }

                            $plugin_path = Redux_Functions_Ex::wp_normalize_path(WP_PLUGIN_DIR . '/' . $plugin_index[$product]);
                            $plugin_data = get_plugin_data($plugin_path);

                            ?>
                            <div class="redux-product">
                                <h2 class="name">
                                    <?php echo esc_html($plugin_data['Name']); ?>
                                    <?php if (!empty($plugin_data['Version'])) { ?>
                                        <span class="version"><?php echo esc_html__('Version', 'stationpro'); ?>&nbsp;<?php echo esc_html($plugin_data['Version']); ?></span>
                                    <?php } ?>
                                </h2>
                                <p class="author">
                                    <?php
                                    if (!empty($plugin_data['Author'])) {
                                        $plugin_url = !empty($plugin_data['AuthorURI']) ? $plugin_data['AuthorURI'] : $plugin_data['PluginURI'];
                                        ?>
                                        <?php echo esc_html__('By', 'stationpro'); ?>
                                        <a href="<?php echo esc_attr($plugin_url); ?>">
                                            <?php echo esc_html(trim(wp_strip_all_tags($plugin_data['Author']))); ?>
                                        </a>
                                    <?php } ?>
                                    <span class="type plugin">
                                        <?php echo esc_html__('Plugin', 'stationpro'); ?>
                                    </span>
                                </p>
                                <hr style="margin: 0 0 15px 0;padding:0;">
                                <p class="author">
                                    <small>
                                        <?php
                                        foreach ($data as $opt_name => $callers) {
                                            echo '<span><strong>opt_name</strong>: <code>' . esc_html($opt_name) . '</code></span><br />';

                                            foreach ($callers as $caller) {
                                                echo '<span>~/' . esc_html($caller['basename']) . '</span><br />';
                                            }
                                        }
                                        ?>
                                    </small>
                                </p>
                            </div>
                            <?php
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
