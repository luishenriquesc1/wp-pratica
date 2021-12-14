<?php

function load_scrtipts(){
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scrtipts');