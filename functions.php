<?php

function happinessbegins_load_scripts_styles()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/app.css', array('normalize', 'googleFonts', "bttn"), '1.0.0');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0');
  wp_enqueue_style('bttn', get_template_directory_uri() . '/assets/css/bttn.min.css', array(), '1.0.0');
  wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Commissioner:wght@200;300;400;600&family=Piazzolla:ital,wght@0,600;0,800;1,400;1,500;1,800&display=swap', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'happinessbegins_load_scripts_styles');

function config_custom_logo()
{

  $defaults = array(
    'height' => 200,
    'width' => 350,
    'header-text' => array(),
  );

  add_theme_support('custom-logo', $defaults);
  
}

add_action('after_setup_theme', 'config_custom_logo');

// Menu

function happiness_begins_menus() {
  register_nav_menus(array(
    'menu-principal' => __( 'Menu Principal', 'happinessbegins')
  ));
}

add_action( 'init', 'happiness_begins_menus' );