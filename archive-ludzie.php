<?php 
get_header();
?>

<section class="single-page-container single-page-container-ludzie">
<h1 class="single-page-header">
Ludzie
</h1>
<div class="generic-content margin-top">
    <div class="people">
<div class="people-box">
    <?php
while(have_posts()){
    the_post();?>

<div class="people-single-preview">


    <a href="<?php the_permalink(); ?>">
<div class="people-single-preview-img"><?php the_post_thumbnail('ludzie-small-thumbnail'); ?></div>

    <div class="people-single-preview-title"><span class="posts-before-element"></span>   
    <?php
the_title();
?></div>

</a>




</div>

<?php
}
?>
</div>
</div>
</div>
</section>
  <?php
get_footer();
?>