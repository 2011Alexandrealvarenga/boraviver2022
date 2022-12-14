<?php 

function boraviver_2022_libras()
{


  wp_enqueue_script( 'libras', 'https://vlibras.gov.br/app/vlibras-plugin.js', null, null, null );
}
add_action('wp_footer', 'boraviver_2022_libras');

function boraviver_2022_footer_diversos()
{
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', null, null , true);
  wp_enqueue_script('jquery_3_5_1', get_template_directory_uri() . '/assets/js/jquery.3.5.1.js', null, null , true);
  if (is_home()){
    wp_enqueue_script('bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', null, null , true);
  }
  wp_enqueue_script('footer_diversos', get_template_directory_uri() . '/assets/js/global.js', null, null , true);
  wp_enqueue_script('footer_diversos');
}
add_action('wp_footer', 'boraviver_2022_footer_diversos');





