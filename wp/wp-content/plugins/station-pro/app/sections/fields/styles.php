<?php

Redux::set_section(
  $opt_name,
  array(
    'title' => esc_html__('Style your player', 'your-textdomain-here'),
    'desc' => esc_html__('Add your url server the your radio streaming here shoutcast or icecast keep blank  the others that did not used.', 'your-textdomain-here') . ('<br></br>'),
    'id' => 'streaming',
    'subsection' => true,
    'customizer_width' => '900px',


    'fields' => array(
      array(
        'id' => 'top',
        'type' => 'switch',
        'title' => esc_attr('Top/Botton Player', 'stationpro'),
        'default' => true,
      ),
    ),
  )
);
