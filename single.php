<?php 
get_header();?>

<main class="blog-posts">
      <div class="blog-posts-container">
      <?php
while(have_posts()){
  the_post();?>
<h2><?php 
the_title();

?></h2>
<div class="metabox">
        <p>Posted by <?php the_author_posts_link();?> on <?php the_time('d.m.Y'); ?> in 
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