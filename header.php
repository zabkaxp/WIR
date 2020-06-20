<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
  <header class="site-header">
    <div class="banner-area">
      <a href="<?php echo site_url() ?>">
    <div class="page-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/logo.png') ?>);"></div></a>
    </div>
    <div class="wrapper">
      <input type="checkbox" id="nav-toggle" class="nav-toggle">
     
      <nav>
        
        <ul>
          <span class="col-top">
         <li><a href="www.1polska.pl">1Polska</a></li>
         <li><a href="www.pafere.org">Pafere</a></li>
         <li><a href="www.podziemnatv.pl">Podziemna TV</a></li>
         <li><a href="www.niss.org.pl">NISS</a></li>
         <li><a href="www.youtube.com/channel/UC06cQHmOar7H-s395iVvQZw">Nawigatorzy jutra</a></li>
         </span>
         <span class="col-bottom">
         <li><a href="#">Polkjhkska</a></li>
         <li><a href="#">Świat</a></li>
         <li><a href="#">Polityka</a></li>
         <li><a href="#">Religie</a></li>
         <li><a href="#">Zdrowie</a></li>
         <li><a href="#">Gospodarka</a></li>
         <li><a href="#">Historia</a></li>
         <li><a href="#">Technologia</a></li>
         <li><a href="#">Szukaj</a></li></span>
        </ul>
      </nav>
    
  <label for="nav-toggle" class="nav-toggle-label">
  <span></span>


  </label>
    </div>
    </header>
    

