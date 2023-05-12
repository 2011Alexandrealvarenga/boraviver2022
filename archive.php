<?php get_header();?>
    <section class="resume-post">
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-9">
                    <hr class="line">
                    <h2 class="subtitle">Mais Notícias</h2>                    
                  
                    <?php if( have_posts()) :     
                        while( have_posts() ) : 
                        the_post(); 
                    ?>
                    <?php get_template_part('template-parts/more-posts') ;?>                        
                    <?php endwhile; ?> 
                    <?php get_template_part('template-parts/pagination') ;?> 
                
                    <?php else : ?>
                        <p>Não ha dados para ser exibido</p>
                    <?php endif; ?>
                   
                </div>
                <div class="col-3 sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>