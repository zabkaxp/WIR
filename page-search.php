<?php 
get_header();
while(have_posts()){
  the_post();?>
<section class="single-page-container">
<h1 class="single-page-header">

</h1>
<div class="generic-content">
<form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
<label class="headline headline--medium" for="s">Rozpocznij nowe wyszukiwanie:</label>
<div class="search-form-row">
    <input placeholder="Szukaj..." class="s" type="search" id="s" name="s">
    <input class="search-submit" type="submit" value="Szukaj">
    </div>
</form>

</div>
</section>
  <?php
}
get_footer();
?>