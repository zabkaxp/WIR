<?php 
get_header(); ?>

<main class="blog-posts">
      <div class="blog-posts-container">
      <?php 
$homepagePosts = new WP_Query(array(
    'posts_per_page'=>3
));?>


        <section class="posts-new">
          <h3 class="posts-new-title posts-cat-title"><span class="posts-before-element"></span>
        <a href="<?php echo esc_url(site_url('/blog')); ?>">NOWE</a>
        </h3>
          <section class="posts-new-container">

        <?php  
while ($homepagePosts->have_posts()){
    $homepagePosts->the_post(); ?>

  
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
    } wp_reset_postdata(); ?>
           

          </section>
        </section>

        <section class="posts-popular">
        <h3 class="posts-popular-title posts-cat-title"><span class="posts-before-element"></span>
        <a href="<?php echo esc_url(site_url('/blog')); ?>">POPULARNE</a>
        
        
        </h3>
        <section class="posts-popular-container">


        <?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
 
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
endwhile;
?>

                </section>
        </section>
        <section class="posts-see-also">
        <h3 class="posts-see-also-title posts-cat-title"><span class="posts-before-element"></span>
        <a href="<?php echo esc_url(site_url('/blog')); ?>">ZOBACZ TAKŻE</a>
        
        </h3>
        <section class="posts-see-also-container">

      
        <?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 6, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
 
<article class="card-container-see-also">
  <div class="card-see-also">
    <div class="see-also-left-side">
    <div class="card-picture-see-also">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail(); ?></a>
    </div></div>

    <div class="see-also-right-side">
    <h4 class="card-heading-see-also">
    <a href="<?php the_permalink(); ?>" title="Kategoria">
              <?php echo get_the_category_list(', '); ?></a>
</h4>
    <div class="card-details-see-also">
    <div class="card-details-top-see-also">  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
              </a></div>
    <div class="card-details-bottom-see-also"><?php 
              the_author_posts_link();?> - <?php the_time('d.m.Y'); ?>
              </div>
    </div>
    </div>
  </div>
</article>
 <?php
endwhile;
?>



        </section>
        </section>
      </div>
    </main>



<?php
get_footer();
?>