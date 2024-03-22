  <!-- featured section  -->
  <div class="featured-products paddingAll">
      <div class="container-fluid">
        <h2>Featured Products</h2>
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
          <div class="col-lg-3 items">
            <div class="img-div">
              <?php if(has_post_thumbnail()) :  ?> 
                <img src="<?php the_post_thumbnail_url() ;  ?>" alt="">
              <?php endif;  ?>
            </div>
            <?php the_title('<h6>','</h6>') ?>
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
          <button class="visit ms-0"><a href="https://paystack.com/pay/silastest"> Visit Online Store</a></button>
        </form>
        </div>
      </div>
    </div>
    <!-- featured section ending -->