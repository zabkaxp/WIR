<?php

get_header();
?>
<main class="blog-posts">
      <div class="blog-posts-container">
<?php 
while(have_posts()){
  the_post();?>


<div class="post-item">
    <h2 class="headline headline--medium headline--post-title">
        Wyniki wyszukiwania
    </h2>
    <div class="metabox">
        <p>Opublikowano przez: <?php the_author_posts_link();?> dnia <?php the_time('d.m.Y'); ?> w kategorii 
        <?php echo get_the_category_list(', '); ?>
    </p>
    </div>
    <div class="generic-content">
        <?php the_excerpt(); ?>
        <p>
            <a class="btn btn--blue" href="<?php the_permalink();?>">Czytaj dalej &raquo;</a>
        </p>
    </div>


</div>

<?php
}  
echo paginate_links();
?>





</div></main>

<?php
get_footer();
?>

