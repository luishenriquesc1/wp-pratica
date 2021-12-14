<?php

function load_scrtipts(){
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true); //carregamento do bootstrap
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all'); //carregamento da folha de estilo do bootstrap
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all'); //carregamento da folha de estilo principal
}

add_action('wp_enqueue_scripts', 'load_scrtipts'); //função que enfileira as folhas de estilo e scripts

//Registrando menu
register_nav_menus(
  array(
    'primary_menu' => 'Primary Menu',
    'footer_menu' => 'Footer Menu'
  )
);