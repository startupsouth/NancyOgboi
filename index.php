<?php
/* *
 * The main template file. */

get_header();
?>


    <!-- Hero Section  -->
    <div class="hero">
      <div class="container-fluid">
        <div class="row">
          <div class="text col-lg-7">
            <div>
              <h1>Live Healthy, Naturally.</h1>
              <p>
                Discover Nancy Ogboi’s natural tasty, healthy <br class="d-none d-lg-block" />
                recipes and beat life threatening diseases.
              </p>
              <div class="button">
                <button class="visit">Learn More</button>
                <button class="book">Book A Call</button>
              </div>
            </div>
          </div>
          <div class="imgContent col-lg-4">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/fruit2.png" class="img-fluid fir" alt="" />
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/fruit.png" alt="" class="img-fluid sec-img" />
          </div>
        </div>
      </div>
      <div class="imgOverlay">
      <img src="<?php echo get_template_directory_uri (); ?>/assets/images/fruit2.png" class="img-fluid" alt="" />
      </div>
    </div>
    <!-- Hero Section  -->
<?php

get_template_part( 'assets/template-parts/misc/content', 'about' );    
get_template_part( 'assets/template-parts/misc/content', 'knowledge' );    
get_template_part( 'assets/template-parts/misc/content', 'featured-products' );    
get_template_part( 'assets/template-parts/misc/content', 'newsletter' );  
get_template_part( 'assets/template-parts/misc/content', 'blog' );  
?>



<?php get_footer(); ?>