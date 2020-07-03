<?php 
get_header();?>

<main class="blog-posts">
      <div class="blog-posts-container">
      <?php
while(have_posts()){
  wpb_set_post_views(get_the_ID());
  wpb_get_post_views(get_the_ID());
  the_post();?>
<h1 class="posts-header"><?php 
the_title();

?></h1>


<div class="metabox">
        <p><?php 
 
        $relatedAuthors = get_field('powiazany_autor');
        if($relatedAuthors){ foreach($relatedAuthors as $author){ ?>
          
          <a href="<?php echo get_the_permalink($author); ?>">
          <?php echo get_the_title($author); ?> </a>
  <?php   }  }else{ the_author_posts_link();}
    
    
  
 wp_reset_postdata(); 
  
  
  ?>

           - <?php the_time('d.m.Y'); ?> -
        <?php echo get_the_category_list(', '); ?>
    </p>
    </div>
<div class="single-post-img">
    <?php
$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
the_post_thumbnail();
  if(!empty($get_description)){//If description is not empty show the div
  echo '<div class="featured_caption">Foto: ' . $get_description . '</div>';
  }
?>
</div>
<div class="generic-content margin-top-30">
<?php the_content(); ?></div>



  <?php
}
?>
</div>
</main>  
<?php
get_footer();
?>