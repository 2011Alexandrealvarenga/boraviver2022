<?php get_header();?>
<div class="ir-para-conteudo">
    <section class="banner-imagem">
        <div class="bg-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <div class="content">
                            <h1 class="title">Deus, Viagem, Biblia ... viver!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-carousel">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="carousel-banner">
                        <div class="carousel-left">                        
                            <?php get_template_part('template-parts/home/carousel-left') ;?>
                        </div>
                        <div class="carousel-right">
                            <?php get_template_part('template-parts/home/carousel-right') ;?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="category-highlight">
        <div class="container">
            <?php get_template_part('template-parts/home/highlight-post') ;?> 
        </div>
    </section>
    <section class="resume-post">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <hr class="line">
                    <h2 class="subtitle">Mais Notícias</h2>                    
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
                            <?php get_template_part('template-parts/more-posts') ;?>                        
                        <?php endwhile; else:?>
                        <p>Não para ser exibido</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>