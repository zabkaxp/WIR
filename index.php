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
    <div class="card-details-bottom">
    <?php 
 
 $relatedAuthors = get_field('powiazany_autor');
 if($relatedAuthors){ foreach($relatedAuthors as $author){ ?>
   
   <a href="<?php echo get_the_permalink($author); ?>">
   <?php echo get_the_title($author); ?> </a>
<?php   }  }else{ the_author_posts_link();}



wp_reset_postdata(); 


?>
     - <?php the_time('d.m.Y'); ?>
              </div>
    </div>
  </div>
</article>


<?php
}  

?>
  <aside class="ad-image-container">


<div class="ad-image" style="background-image: url(<?php  ?>);"></div>


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

