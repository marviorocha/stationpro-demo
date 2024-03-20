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
        'title'            => esc_html__('Streaming', 'stationpro'),
        'desc'             => esc_html__('Add your url server the your radio streaming here shoutcast or icecast keep blank  the others that did not used.', 'stationpro') . ('<br></br>'),
        'id'               => 'streaming',
        'subsection'       => true,
        'customizer_width' => '900px',


        'fields'           => array(

            array(
                'id' => 'shoutcast',
                'type' => 'text',
                'title' => esc_attr('Shoutcast', 'stationpro'),
                'desc' => esc_attr('Input your full shoutcast url with port ex: https://79.198.12:10584 keep blank if you don\'t use shoutcast.', 'stationpro'),
                'placeholder' => esc_attr('Shoutcast streaming url', 'stationpro'),
                'validate' => array(
                    'url'
                ),
            ),
            array(
                'id' => 'icecast',
                'type' => 'text',
                'title' => esc_attr('Icecast', 'station_desciption'),
                'desc' => esc_attr('Input your full icecast url with port ex: http://radio.exemple.fm:8000/stream keep blank if you don\'t use icecast.', 'stationpro'),
                'placeholder' => esc_attr('Icecast streaming url', 'stationpro'),
                'validate' => array(
                    'url'
                ),
            ),


        ),
    )
);
