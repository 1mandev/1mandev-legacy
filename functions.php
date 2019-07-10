<?php

function mdev_enqueue_scripts(){
  wp_enqueue_style( 'flickity', get_theme_file_uri('/css/flickity.min.css'), NULL, '1.0.0', 'all' );
  wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css', NULL, '1.0.0', 'all');
  wp_enqueue_style( 'main', get_theme_file_uri('/css/main.css'), NULL, '1.0.0', 'all' );


  wp_enqueue_script( 'jquery-min', get_theme_file_uri('/js/jquery-3.4.1.min.js'), NULL, '1.0.0', true);
  wp_enqueue_script( 'flickity', get_theme_file_uri('/js/flickity.min.js'), NULL, '1.0.0', true);
  wp_enqueue_script( 'main', get_theme_file_uri('/js/main.js'),NULL, '1.0.0', true);
}


add_action( 'wp_enqueue_scripts', 'mdev_enqueue_scripts' );