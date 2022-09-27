<?php 
function footer_diversos()
{
  wp_enqueue_script('jquery_3_5_1', get_template_directory_uri() . '/assets/js/jquery.3.5.1.js', null, null , true);
  wp_enqueue_script('footer_diversos', get_template_directory_uri() . '/assets/js/global.js', null, null , true);
  // wp_enqueue_script('footer_diversos');
}
add_action('wp_footer', 'footer_diversos');