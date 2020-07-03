<footer class="site-footer-container">
  <div class="site-footer">
  <div class="about-page-col">
    <ul>
      <li> <a href="#">Informacje o stronie</a></li>
      <li><a href="<?php echo esc_url(site_url('/polityka-prywatnosci')) ?>">Polityka prywatności</a></li>
      <li><a href="#">Zgłoś błąd lub sugestię</a></li>
    </ul>
  </div>
  <div class="about-us-col">
    <ul>
      <li><a href="#">Dołącz do nas</a></li>
      <li><a href="<?php echo esc_url(site_url('/kontakt')) ?>">Kontakt</a></li>
    </ul>
  </div>
  <div class="additional-col">
    <ul>
      <li><a href="#">Pliki do pobrania</a></li>
      <li><a href="#">Napisz do nas</a></li>

    </ul>
      
  </div>
  </div>
</footer>

<!--
<div class="search-overlay">
    <div class="search-overlay__top">
      <div class="container">
        <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
        <input type="text" class="search-term" placeholder="Szukaj" id="search-term" autocomplete="off">
        <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
      </div>
    </div>
  </div>-->

<?php wp_footer();?>
</body>
</html>