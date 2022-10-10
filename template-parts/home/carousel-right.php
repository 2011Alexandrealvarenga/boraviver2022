<?php 
$my_args_banner = array(
	'posts_per_page' => 4,
	);
	
	// query
	$my_query_banner = new WP_Query ( $my_args_banner );
?>
<div class="carousel-content">
    <?php if( $my_query_banner->have_posts()) : 
        while( $my_query_banner->have_posts() ) : 
        $my_query_banner->the_post(); 
    ?>

    <div class="item">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('home-carousel-right', array('class' => '')) ;
            } else { ?>
            <img src="" alt="" title=""/>
        <?php } ?>
        <h2 class="subtitle">
            <?php echo limit_title_charc_carousel(get_the_title()); ?>
        </h2>

    </div>
    <?php endwhile; else : ?>
    <?php endif; ?>
</div>
