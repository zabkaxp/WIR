<?php

get_header();
?>
<main class="blog-posts">
      <div class="blog-posts-container">

      <section class="posts-all">
        <h3 class="posts-all-title posts-cat-title"><span class="posts-before-element"></span>
        <a href="#">NAJNOWSZE</a>
        
        
        </h3>
        <section class="posts-all-container">
      

        <?php 
while(have_posts()){  
    the_post();?>
 
<article class="card-container">
  <div class="card">
    <div class="card-picture">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail(); ?></a>
    </div>
    <h4 class="card-heading">
    <a href="<?php the_permalink(); ?>" title="Kategoria">
              <?php echo get_the_category_list(', '); ?></a>
</h4>
    <div class="card-details">
    <div class="card-details-top">  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
              </a></div>
    <div class="card-details-bottom"><?php 
              the_author_posts_link();?> - <?php the_time('d.m.Y'); ?>
              </div>
    </div>
  </div>
</article>


<?php
}  

?>
  <aside class="ad-image-container">


<div class="ad-image" style="background-image: url(<?php echo get_theme_file_uri('/images/reklama.png') ?>);"></div>


</aside>

 </section>
        </section>

<?php
 
echo paginate_links();
?>
</div></main>




<?php
get_footer();
?>

