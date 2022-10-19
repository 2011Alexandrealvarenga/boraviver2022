<?php get_header();?>
<section class="resume-post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <hr class="line">
                <h2 class="subtitle"><?php the_archive_title(); ?></h2>
                <div class="row">

                    <?php get_template_part('template-parts/more-posts') ;?> 
                </div>
            </div>
            <div class="col-3 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>