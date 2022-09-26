<?php 
function header_css() { 
    wp_enqueue_style( 'header_style', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.1', 'all');
  }
  add_action( 'wp_enqueue_scripts', 'header_css', 0);