<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pratica WordPress</title>
  <?php wp_head(); ?>
  <!--Permite o carregamento de todas as folhas de estilos do site e scripts-->
</head>

<body <?php body_class() ?>>
  <header class="header">
    <section class="header__bar">
      <div class="container">
        <div class="row">
          <div class="header__social-media-icons col-xl-9 col-sm7 col-6">Ícones Sociais</div>
          <div class="header__search col-xl-3 col-sm-5 col-6 text-end">Pesquisa</div>
        </div>
      </div>
    </section>
    <section class="header__menu">
      <div class="container">
        <div class="row">
          <section class="header__menu__logo col-md-2 col-12 text-center">Logo</section>
          <nav class="header__menu__items col-md-10"><?php wp_nav_menu(array('theme_location' => 'primary_menu'))?></nav> <!-- Função php que chama o menu-->
        </div>
      </div>
    </section>
  </header>