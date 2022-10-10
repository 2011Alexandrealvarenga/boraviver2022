<?php 

function get_excerpt_title(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 200);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <a href="'.get_the_permalink().'">Leia mais</a>';
    return $excerpt;
}
function get_excerpt_home_more_posts(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 200);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <a href="'.get_the_permalink().'">Leia mais</a>';
    return $excerpt;
}

// limitar caracteres
function limit_title_charc_carousel($title){
	$max = 70;
	if(strlen($title) > $max) {
		$title = substr( $title, 0, $max );
	}
	return $title;
}
function limit_title_charc($title){
	$max = 90;
	if(strlen($title) > $max) {
		$title = substr( $title, 0, $max );
	}
	return $title;
}