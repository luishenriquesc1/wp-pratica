<?php /*Template Name: Modelo Internas*/?>

<?php get_header() ?>
<img class="img-fluid" src="<?php the_field ('image_banner') ?>">
  <div class="content-area">
    <main>
      <section class="middle-area">
        <div class="container">
            <div class="general-template">
              <?php 
              //Se houver algum post
              if (have_posts()):
                //Enquanto houver posts, mostre
              while (have_posts()): the_post();
              ?>
              <article>
                <h3><?php the_title(); ?></h3> <!-- mostra o titulo od post-->
                <?php the_content(); ?>
              </article>
              <?php //Sera exibido caso não encontre nenhm post
              endwhile;
            else:
              ?>
              <p>There's nothing yet to be displayed...</p>
               <?php endif; ?> <!--Encerramento do IF inicial -->
            </div>
      </section>
    </main>
  </div>
  <?php get_footer() ?>