<?php get_header();?>
<div class="ir-para-conteudo">
    <section class="banner">
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
                    <h2 class="subtitle">Últimas Notícias</h2>
                    <?php get_template_part('template-parts/resume-posts') ;?> 
                </div>
                <div class="col-3">
                    col 3
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>