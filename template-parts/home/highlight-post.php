<?php 
$destaque = array(
	'posts_per_page' => 4,
  'category'        => 'Destaque'
	);
	
	// query
	$my_query_destaque = new WP_Query ( $destaque );
?>

<div class="row">
  <div class="col-12">
    <hr class="line">
    <h2 class="subtitle">Destaques</h2>
  </div>
</div>
<div class="row">
    <?php if( $my_query_destaque->have_posts()) : 
      while( $my_query_destaque->have_posts() ) : 
      $my_query_destaque->the_post(); 
    ?>
    <div class="col-md-3">
      <a href="<?php the_permalink() ?>">          
        <div class="item">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('highlight-post', array('class' => '')) ;
            } else { ?>
            <img src="" alt="" title=""/>
          <?php } ?>
          <div class="carousel-back">
              <h2 class="subtitle"><?php echo limit_title_charc_carousel(get_the_title()); ?></h2>
            </div>
          </div>
      </a>
    </div>
    <?php endwhile; else : ?>
    <?php endif; ?>
</div>