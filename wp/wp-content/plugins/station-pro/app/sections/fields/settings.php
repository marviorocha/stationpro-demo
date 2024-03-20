<?php

/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package StationPro.co
 */

Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__('Settings', 'stationpro'),
        'desc'             => esc_html__('Add your url server the your radio streaming here shoutcast or icecast keep blank  the others that did not used.', 'your-textdomain-here') . ('<br></br>'),
        'id'               => 'player_settings',
        'subsection'       => true,
        'customizer_width' => '900px',


        'fields'           => array(


            array(
                'id' => 'toggle_marqueet',
                'type' => 'switch',
                'title' => esc_attr('Show/hide Annunciations', 'stationpro'),
                'default'  => true,

            ),

            array(
                'id' => 'toggle_action',
                'type' => 'switch',
                'title' => esc_attr('Show/hide Schendule', 'stationpro'),
            ),

            array(
                'id' => 'toggle_favorite',
                'type' => 'switch',
                'title' => esc_attr('Show/hide Favorite', 'stationpro'),
            ),


            array(
                'id' => 'toggle_brand',
                'type' => 'switch',
                'title' => esc_attr('Show/hide Brand Widget', 'stationpro'),
                'desc' => esc_attr('Please, remember that your version is free and I hope you can remember us when you disable this feature', 'stationpro'),
                'default'  => true,
            ),


        ),
    )
);
