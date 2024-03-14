    <!-- lastest blog section  -->
    <div class="blog paddingAll mt-lg-5 mt-4">
      <div class="container-fluid">
        <h2 class="text-center mb-3 mb-lg-5">Lastest Blog Posts</h2>
        <div class="row gy-5">
          <div class="col-lg-6">
            <div class="blog-img  mb-3">
              <img src="<?php echo get_template_directory_uri (); ?>/assets/images/blog-img.png" class="img-fluid" alt="" />
            </div>
            <h3>What I learned from Surviving Cancer</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat .
            </p>
            <form class="mt-4 pt-3">
              <button class="visit ms-0">Learn More</button>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="row gy-4">
              
            <?php
                $args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'featured blog',
                    'posts_per_page' => 12,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
              <div class="col-lg-6 items">
                <div class="img-div">
                
                  <?php  if(has_post_thumbnail()):  ?>
                    <img src="<?php the_post_thumbnail_url() ;   ?>"  class="img-fluid" alt="">
                <?php endif ;
                
                 ?>
                </div>
                <?php the_title('<h6> ',' </h6>') ?>
              </div>
                         <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found.</p>';
                endif;
                ?>

            </div>
          </div>
        </div>
        <form class="mt-4 pt-3 text-center">
          <button class="visit ms-0">See All Blog Posts</button>
        </form>
      </div>
    </div>
    <!-- lastest blog section ending -->