<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer__copyright col-sm-7 col-4">
        <p>Copyright &copy;</p>
      </div>
      <nav class="footer__menu col-sm-5 col-8 text-end">
        <?php wp_nav_menu(array('theme_location' => 'footer_menu')) ?>
        <!-- Função php que chama o menu-->
      </nav>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<!--Permite o carregamento de todas as folhas de estilos do site e scripts-->
</body>

</html>