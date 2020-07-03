<?php 
get_header();
while(have_posts()){
  the_post();?>
<section class="single-page-container">
<h1 class="single-page-header header-organizacje">
<?php
the_title();
?>
</h1>
<div class="generic-content margin-top">
<div class="organisations-box">
    <div class="organisations">
        <div class="single-organisation">
        <a target="_blank" title="1Polska" href="<?php echo esc_url('https://1polska.pl/') ?>">
      <div class="single-organisation-img" style="background-image: url(<?php echo get_theme_file_uri('/images/organizacje/1polska.jpg') ?>);"></div></a>
        </div>
        <div class="single-organisation">
        <a target="_blank" title="Podziemna TV" href="<?php echo esc_url('https://www.youtube.com/channel/UCrFx0KTUzpDQY2mkLWoIdyg') ?>">
      <div class="single-organisation-img" style="background-image: url(<?php echo get_theme_file_uri('/images/organizacje/podziemna.png') ?>);"></div></a>
        </div>
        <div class="single-organisation">
        <a target="_blank" title="PAFERE" href="<?php echo esc_url('https://www.pafere.org/') ?>">
      <div class="single-organisation-img" style="background-image: url(<?php echo get_theme_file_uri('/images/organizacje/pafere.png') ?>);"></div></a>
        </div>
        <div class="single-organisation">
        <a target="_blank" title="Nawigatorzy jutra" href="<?php echo esc_url('https://www.youtube.com/channel/UC06cQHmOar7H-s395iVvQZw') ?>">
      <div class="single-organisation-img" style="background-image: url(<?php echo get_theme_file_uri('/images/organizacje/nawigatorzy.png') ?>);"></div></a>
        </div>
        <div class="single-organisation">
        <a target="_blank" title="NISS" href="<?php echo esc_url('https://niss.org.pl/') ?>">
      <div class="single-organisation-img" style="background-image: url(<?php echo get_theme_file_uri('/images/organizacje/niss.jpeg') ?>);"></div></a>
        </div>
        <div class="single-organisation">
        <a target="_blank" title="Obywatelski Think Tank" href="<?php echo esc_url('http://obywatelskithinktank.org/') ?>">
      <div class="single-organisation-img" style="background-image: url(<?php echo get_theme_file_uri('/images/organizacje/stanczyk.PNG') ?>);"></div></a>
        </div>
        

        </div>
    </div>

</div>

</div>
</section>
  <?php
}
get_footer();
?>