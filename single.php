<?php get_header();?>
<section class="single">
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-9">
                <div class="content-img">
                    <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('single-post', array('class' => '')) ;
                        } else { ?>
                        <?php get_template_part('template-parts/thumb-default') ;?>
                    <?php } ?>
                    <hr class="line mt-4">
                    <h2 class="subtitle">
                        <?php the_title(); ?>
                    </h2>
                </div>
                <div class="creator mt-4">
                    <span class="author"><b>Autor:</b> Alexandre Alvarenga</span>
                    <span class="date"><b>Data:</b> <?php echo get_the_date( 'd/m/Y' ); ?></span>
                    <span class="category"><b>Categoria:</b><?php the_category(); ?></span>
                </div>
                <div class="content-post mt-5">
                    <span>
                        <?php the_content(); ?>
                    </span>
                </div>
                <!-- <div class="about-author mt-4">
                    <h3 class="author">Sobre o autor</h3>
                    <div class="align mt-2">
                        <img src="http://localhost:8080/WP/boraviver/wp-content/uploads/2022/09/download-1.jpg" alt="">
                        <div class="desc">    
                            <h4 class="name"><b>Nome:</b> Alexandre Alvarenga</h4>
                            <div class="description"> 
                                <span>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, quo! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, quo!
                                </span> 
                            </div>
                        </div>
                    </div>
                </div>
                <hr> -->
                <!-- inicio  -->

                <!-- fim -->
                <div class="comments">
                    <hr class="line">
                    <h2 class="subtitle">Categoria</h2>
                    <textarea class="mt-2" name="" id="" width="100%" rows="5" placeholder="Insira seu comentario"></textarea>
                    <div class="comments-itens mt-2">
                        <input type="text" placeholder="Nome">
                        <input type="text" placeholder="Email">
                    </div>
                    <input class="mt-2" type="submit" value="enviar">

                    <div class="after-comment mt-5">
                        <div class="data">
                            <span class="name"><b>Nome:</b> Alexandre Alvarenga <b>Data: </b>02/10/2022</span>
                        </div>
                        <textarea name="" id="" width="100%" rows="5" placeholder="comentário"></textarea>
                    </div>
                </div>

            </div>
            <div class="col-3 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>