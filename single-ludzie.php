<?php 
get_header();
while(have_posts()){
  the_post();?>
<section class="single-page-container">

<div class="generic-content margin-top">
<div class="single-people-box">
    <div class="single-people">

    <div class="single-people-left">
      <div class="single-people-img"><?php the_post_thumbnail('ludzie-big-thumbnail'); ?></div>
    
    </div>
    <div class="single-people-right">
      <h1 class="single-page-header single-person-header">

    <?php the_title(); ?></h1> <?php     the_content();?>
    </div>
    </div>
    <?php
        $relatedArticles = new WP_Query(array(
         'posts_per_page' => -1,
         'post_type' => 'post',
         'meta_query' => array(
           array(
             'key' => 'powiazany_autor',
             'compare' => 'LIKE',
             'value' => '"' . get_the_ID() . '"'
           )
         )
       ));
       if($relatedArticles->have_posts()){
        echo '<div class="articles-header">Artykuły:</div>';
        while($relatedArticles->have_posts()) {
          $relatedArticles->the_post(); ?>
            <li class="related-article">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </li>
        <?php }} 
        
         wp_reset_postdata(); 
          
          
      ?>

</div>
     
   </div>

</div>
</div>
</section>
  <?php
}
get_footer();
?>