<?php 
function header_css() { 
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.1', 'all');
    wp_enqueue_style( 'header_css', get_template_directory_uri() . '/assets/css/header.css', array(), '1.1', 'all');
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
  }
  add_action( 'wp_enqueue_scripts', 'header_css', 0);