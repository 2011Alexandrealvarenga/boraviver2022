<?php get_header();?>
<section class="page">
    <div class="container">
        <div class="row mt-4">
            <div class="col-9">
                <?php while(have_posts()) : the_post();?>
                    <h1><?php the_title(); ?></h1>
                    
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
            <div class="col-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>