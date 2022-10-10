<?php get_header();?>
<section class="resume-post">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <hr class="line">
                <h2 class="subtitle"><?php the_archive_title(); ?></h2>
                <div class="row">

                    <?php get_template_part('template-parts/more-posts') ;?> 
                </div>
            </div>
            <div class="col-3">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                <?php endwhile; else : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>