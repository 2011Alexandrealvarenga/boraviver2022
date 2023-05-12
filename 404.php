<?php get_header();?>
<style>
  .sec-404 {
    height: 60vh;
    display: flex;
    align-items: center;
  }
  .sec-404 .content {
    text-align: center;
    display: grid;
    justify-content: center;
    }
    .sec-404 .content form {
        display: flex;
        justify-content: center;
    }
</style>
<section class="sec-404">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content">
          <h2 class="title">Resultado não encontrado</h2>
          <h3 class="title">Erro - 404</h3>
          <a href="/" alt="ir para 404 pagina inicial" title="404 pagina inicial"><p>Retorne a página inicial</p></a>
          <form class="form-inline my-2 my-lg-0">
            <?php get_search_form(); ?>
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </form>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>