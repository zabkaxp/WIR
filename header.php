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
      <nav class="main-nav">
      
        <ul>
          <span class="col-top">
        <?php 
        wp_nav_menu(array(
            'theme_location' => "header-menu-external"
        ));
        ?>
           </span>
         <span class="col-bottom">
         <?php 
        wp_nav_menu(array(
            'theme_location' => "header-menu-categories"
        ));
        ?>
           </span>
         </ul>

        
      </nav>
  <label for="nav-toggle" class="nav-toggle-label">
  <span></span>
  </label>
    </div>
    </header>
    

