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
        <a href="<?php echo site_url('/blog'); ?>">NOWE</a>
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
        <h3 class="posts-popular-title posts-cat-title"><span class="posts-before-element"></span>POPULARNE</h3>
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
        <h3 class="posts-see-also-title posts-cat-title"><span class="posts-before-element"></span>ZOBACZ TAKŻE</h3>
        <section class="posts-see-also-container">

        <article class="post post-see-also-1">
            <span class="cat-title">
                  <a href="#" title="ŚWIAT">ŚWIAT</a>
                </span>
              <a href="#" title="Trump wykorzystuje koronawirusa aby szerzyć rasizm">
              <div class="post-image" style="image: url(<?php echo get_the_post_thumbnail('/images/bus.jpg') ?>);">
                
             </div>

            </a>
            <div class=post-details>
              <h4>TRUMP WYKORZYSTUJE KORONAWIRUSA ABY SZERZYĆ RASIZM</h4>
              <span>RENATA - 30 MAJ 2020</span>
            </div>
            </article>

            <article class="post post-see-also-2">
            <span class="cat-title">
                  <a href="#" title="ŚWIAT">ŚWIAT</a>
                </span>
              <a href="#" title="Trump wykorzystuje koronawirusa aby szerzyć rasizm">
              <div class="post-image" style="image: url(<?php echo get_the_post_thumbnail('/images/bus.jpg') ?>);">
                
             </div>

            </a>
            <div class=post-details>
              <h4>TRUMP WYKORZYSTUJE KORONAWIRUSA ABY SZERZYĆ RASIZM</h4>
              <span>RENATA - 30 MAJ 2020</span>
            </div>
            </article>

            <article class="post post-see-also-3">
            <span class="cat-title">
                  <a href="#" title="ŚWIAT">ŚWIAT</a>
                </span>
              <a href="#" title="Trump wykorzystuje koronawirusa aby szerzyć rasizm">
              <div class="post-image" style="image: url(<?php echo get_the_post_thumbnail('/images/bus.jpg') ?>);">
                
             </div>

            </a>
            <div class=post-details>
              <h4>TRUMP WYKORZYSTUJE KORONAWIRUSA ABY SZERZYĆ RASIZM</h4>
              <span>RENATA - 30 MAJ 2020</span>
            </div>
            </article>

            <article class="post post-see-also-4">
            <span class="cat-title">
                  <a href="#" title="ŚWIAT">ŚWIAT</a>
                </span>
              <a href="#" title="Trump wykorzystuje koronawirusa aby szerzyć rasizm">
              <div class="post-image" style="image: url(<?php echo get_the_post_thumbnail('/images/bus.jpg') ?>);">
                
             </div>

            </a>
            <div class=post-details>
              <h4>TRUMP WYKORZYSTUJE KORONAWIRUSA ABY SZERZYĆ RASIZM</h4>
              <span>RENATA - 30 MAJ 2020</span>
            </div>
            </article>


            <article class="post post-see-also-5">
            <span class="cat-title">
                  <a href="#" title="ŚWIAT">ŚWIAT</a>
                </span>
              <a href="#" title="Trump wykorzystuje koronawirusa aby szerzyć rasizm">
              <div class="post-image" style="image: url(<?php echo get_the_post_thumbnail('/images/bus.jpg') ?>);">
                
             </div>

            </a>
            <div class=post-details>
              <h4>TRUMP WYKORZYSTUJE KORONAWIRUSA ABY SZERZYĆ RASIZM</h4>
              <span>RENATA - 30 MAJ 2020</span>
            </div>
            </article>

            <article class="post post-see-also-6">
            <span class="cat-title">
                  <a href="#" title="ŚWIAT">ŚWIAT</a>
                </span>
              <a href="#" title="Trump wykorzystuje koronawirusa aby szerzyć rasizm">
              <div class="post-image" style="image: url(<?php echo get_the_post_thumbnail('/images/bus.jpg') ?>);">
                
             </div>

            </a>
            <div class=post-details>
              <h4>TRUMP WYKORZYSTUJE KORONAWIRUSA ABY SZERZYĆ RASIZM</h4>
              <span>RENATA - 30 MAJ 2020</span>
            </div>
            </article>


        </section>
        </section>
      </div>
    </main>



<?php
get_footer();
?>