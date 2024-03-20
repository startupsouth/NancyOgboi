<?php


/**
 * 
 * Name:About Archive
 * Template Name:Product-page */

//get posts
?>
<?php get_header(); ?>


<!-- <h2>Featured Products</h2> -->
<div class="container-fluid hero-header">
  <div class="row justify-content-center">
    <div class="col-lg-12">
    <h2>Featured Products</h2>
    </div>
  </div>
</div>

<div class="featured-products paddingAll">
      <div class="container-fluid">
        <div class="row gy-4">
        <?php
                $args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'featured products',
                    'posts_per_page' => 12,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
          <div class="col-lg-3 items shadow">
           <div class="m-2 pb-4">
           <div class="img-div">
              <?php if(has_post_thumbnail()) :  ?> 
                <img src="<?php the_post_thumbnail_url() ;  ?>" alt="">
              <?php endif;  ?>
            </div>
            <?php the_title('<h6>','</h6>') ?>
            <a href="#" class="visit ms-0 ps-0 border-0">Read More</a>
           </div>
          </div>
          <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found.</p>';
                endif;
                ?>
        <form
          class="d-lg-flex"
          style="justify-content: center; margin: 40px 0 40px 0"
        >
          <button class="visit ms-0">Visit Online Store</button>
        </form>
        </div>
      </div>
    </div>


<?php 
get_template_part( 'assets/template-parts/misc/content', 'newsletter' );  
?>
     <?php get_footer(); ?>