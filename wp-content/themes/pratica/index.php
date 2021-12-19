  <?php get_header() ?>
  <img class="img-fluid" src="<?php the_field ('image_banner') ?>">
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
              <article> 
                <h3><?php the_title(); ?></h3> <!-- mostra o titulo od post-->
                <img src="<?php the_field( 'thumbnail_post') ?>" >
                            <!--Mostra a data de publicação-->   <!--Mostra o nome do autor do post-->
                <p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                <!--Mostra a categoria do post--> <!--(' ') adiciona um espaço entre as categorias-->
                <p>Categories: <?php the_category(' '); ?></p>
                <!--Mostra o texto Tags antes de miostrar as tags presentes no pots-->
                <p><?php the_tags('Tags: ', ','); ?></p>
                <?php the_content(); ?>
              </article>
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