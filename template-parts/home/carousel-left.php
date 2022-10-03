<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      
    <?php if (have_posts()) :
      $c = 0;
      while (have_posts()) : 
      the_post();
    ?>
    <div class="carousel-item <?php $c++; if($c == 1) { echo 'active'; } ?>">
      <div class="carousel-content">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('home-carousel-left', array('class' => '')) ;
        } else { ?>
          <img src="" alt="" title=""/>
        <?php } ?>
        <h2 class="title"><?php the_title(); ?></h2>
      </div>
    </div>
    <?php endwhile; else : ?>
    <?php endif; ?>

  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>