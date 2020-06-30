<?php 
get_header();?>

<main class="blog-posts">
      <div class="blog-posts-container">
      <?php
while(have_posts()){
  wpb_set_post_views(get_the_ID());
  wpb_get_post_views(get_the_ID());
  the_post();?>
<h2><?php 
the_title();

?></h2>
<div class="metabox">
        <p>Opublikowano przez: <?php the_author_posts_link();?> dnia <?php the_time('d.m.Y'); ?> w kategorii 
        <?php echo get_the_category_list(', '); ?>
    </p>
    </div>
<div class="generic-content">
<?php the_content(); ?></div>
  <?php
}
?>
</div>
</main>  
<?php
get_footer();
?>