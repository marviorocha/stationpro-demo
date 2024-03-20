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
        'title'            => esc_attr('Radio', 'stationpro'),
        'desc'             => esc_attr('Settings your radio player', 'stationpro') . ('<br></br>'),
        'id'               => 'basic-text',
        'subsection'       => true,
        'customizer_width' => '900px',


        'fields'           => array(
            array(
                'id' => 'radio_name',
                'type' => 'text',
                'title' => esc_attr('Radio name', 'stationpro'),
                'placeholder' => esc_attr('Name to your station', 'stationpro'),
            ),
            array(
                'id' => 'radio_description',
                'type' => 'text',
                'title' => esc_attr('Description', 'station_desciption'),
                'placeholder' => esc_attr('Description to your station', 'stationpro'),
            ),

            array(
                'id' => 'btn_action_url',
                'type' => 'text',
                'title' => esc_attr('Button Schendule', 'stationpro'),
                'placeholder' => esc_attr('Add your url to any schendule the your radio', 'stationpro'),
                'validate' => array(
                    'url'
                ),

            ),


            array(
                'id' => 'marqueet_one',
                'type' => 'text',
                'title' => esc_attr('Annunciations', 'station_desciption'),
                'placeholder' => esc_attr('Description a small annunciation in yout player', 'stationpro'),
            ),

            array(

                'id' => 'radio_logo',
                'type' => 'media',
                'title' => esc_attr('Radio Logo', 'stationpro'),
            ),

        ),
    )
);
