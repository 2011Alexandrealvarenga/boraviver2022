<?php 

add_theme_support( 'post-thumbnails' );

add_image_size( 'home-carousel-left', 555, 360, true ); //Imagem do carousel da home

add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );
function prefix_remove_default_images( $sizes ) {
 unset( $sizes['small']); // 150px
 unset( $sizes['medium']); // 300px
 unset( $sizes['large']); // 1024px
 unset( $sizes['medium_large']); // 768px
 return $sizes;
}

