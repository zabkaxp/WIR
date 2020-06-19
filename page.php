<?php 
get_header();
while(have_posts()){
  the_post();?>
<section class="single-page-container">
<h1 class="single-page-header">
<?php
the_title();
?>
</h1>
<div class="generic-content">
<?php
the_content();
 ?>

</div>
</section>
  <?php
}
get_footer();
?>