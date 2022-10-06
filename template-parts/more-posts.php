<?php 
    $my_args_banner = array(
        'offset'        => '5',
    );
    $my_query_banner = new WP_Query ( $my_args_banner );
?>
<div class="row mb-5">
    <?php if( $my_query_banner->have_posts()) :     
        while( $my_query_banner->have_posts() ) : 
        $my_query_banner->the_post(); 
    ?>
    
    <div class="col-4">
            <a href="<?php the_permalink();?>">
                <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('home-more-post', array('class' => '')) ;
                } else { ?>
                <img src="" alt="" title=""/>
                <?php } ?>
            </a>
        </div>
        <div class="col-8">
            
            <div class="content">
                
                <h3 class="h3title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                <div class="creator">
                    <span class="author"><b>Autor:</b><?php the_author(); ?></span>
                    <span class="date"><b>Data:</b> <?php echo get_the_date( 'd/m/Y' ); ?></span><br>
                    <span class="category"><b>Categoria:</b><?php the_category(); ?></span>
                </div>
                <!-- 
                <div class="social-media">
                    <div class="item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/ico-footer-facebook.svg" alt="">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/ico-footer-youtube.svg" alt="">
                    </div>
                </div>                       -->
                <span class="description">
                    <?php echo get_excerpt_home_more_posts(); ?>
                </span>
            </div>
        </div>
        <hr>
    
    <?php endwhile; endif; ?>
</div>