<?php


/**
 * 
 * Name:About Archive
 * Template Name: About-page
 */

//get posts
?>
<?php get_header(); ?>

<div class="container-fluid about-header">
  <div class="row justify-content-center">
    <div class="col-lg-12">
    <h2>About Me</h2>
    </div>
  </div>
</div>
 <!-- About Me section -->
 <section  class="section marginAll p-4 about">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-5 img-content">
        <img src="<?php echo get_template_directory_uri (); ?>/assets/images/about.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 text-div">
          <p class="about-text ps-3">
            Hi, I'm Nancy Ogboi, a passionate advocate for natural living and holistic health. My journey began when I
            faced my own health challenges and discovered the power of natural remedies and lifestyle changes.
          </p>
          <p class="about-text ps-3">
            I believe that good health is a fundamental human right, and my mission is to empower individuals like you to
            take control of your health naturally. Through my blog, consultations, and products, I provide practical
            advice, delicious recipes, and support to help you achieve your wellness goals.
          </p>
          <p class="about-text ps-3">
            Whether you're struggling with a chronic illness, seeking to improve your overall well-being, or simply
            curious about natural living, I'm here to guide you on your journey to optimal health.
          </p>
          <a href="" class="visit" style="padding: 10px">Read More</a>
        </div>
      </div>
  </section>
  <!-- About Me section -->


  <?php 

get_template_part( 'assets/template-parts/misc/content', 'newsletter' );  
?>
     <?php get_footer(); ?>


