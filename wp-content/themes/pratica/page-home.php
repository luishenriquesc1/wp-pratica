<?php /*Template Name: Home*/?>

<?php get_header() ?>
  <div class="content-area">
    <main>
      <section class="slide">
        <div class="container">
          <div class="row">Slide</div>
        </div>
      </section>
      <section class="services">Serviços</section>
      <section class="middle-area">
        <div class="container">
          <div class="row">
            <aside class="sidebar col-md-4">Barra Lateral</aside>
            <div class="news col-md-8">
              <?php 
              //Se houver algum post
              if (have_posts()):
                //Enquanto houver posts, mostre
              while (have_posts()): the_post();
              ?>
              <p>teste</p>
              <?php //Sera exibido caso não encontre nenhm post
              endwhile;
            else:
              ?>
              <p>There's nothing yet to be displayed...</p>
               <?php endif; ?> <!--Encerramento do IF inicial -->
            </div>
          </div>
        </div>
      </section>
      <section class="map">
        <div class="container">
          <div class="row">Mapa</div>
        </div>
      </section>
    </main>
  </div>
  <?php get_footer() ?>