<?php


/**
 * 
 * Name:About Archive
 * Template Name:resources-page */

//get posts
?>
<?php get_header(); ?>

 
 
 <!-- Main content -->
 <div class="container-fluid about-header">
  <div class="row justify-content-center">
    <div class="col-lg-12">
    <h2>Resources</h2>
    </div>
  </div>
</div>
 <div class="container mt-5 resource">
        <div class="row">
            <!-- Articles section -->
            <div class="col-lg-3 items shadow">
                <h4>Articles & Blog Posts</h4>
                <ul  class="p-0">
                    <li><a href="#">10 Tips for Healthy Eating</a></li>
                    <li><a href="#">The Importance of Regular Exercise</a></li>
                    <li><a href="#">Natural Remedies for Common Ailments</a></li>
                    <!-- Add more article links here -->
                </ul>
            </div>
            <!-- Guides and Tutorials section -->
            <div class="col-lg-3 items shadow">
                <h4>Guides & Tutorials</h4>
                <ul  class="p-0">
                    <li><a href="#">Healthy Recipe Guide: Breakfast Ideas</a></li>
                    <li><a href="#">Yoga Tutorial: Beginner's Guide to Sun Salutation</a></li>
                    <li><a href="#">Natural Skincare Routine: Tips and Tricks</a></li>
                    <!-- Add more guide/tutorial links here -->
                </ul>
            </div>
             <!-- Recommended resources section -->
        <div class="col-lg-3 items shadow">
            <h4>Recommended Resources</h4>
            <ul class="p-0">
                <li><a href="#">Books: "The Whole30" by Melissa Hartwig</a></li>
                <li><a href="#">Documentary: "Food, Inc."</a></li>
                <li><a href="#">Podcast: "The Wellness Mama Podcast"</a></li>
                <!-- Add more recommended resource links here -->
            </ul>
        </div>
        <!-- Printable materials section -->
        <div class="col-lg-3 items shadow">
            <h4>Printable Materials</h4>
            <ul  class="p-0">
                <li><a href="#">Weekly Meal Planner Template</a></li>
                <li><a href="#">Grocery Shopping Checklist</a></li>
                <li><a href="#">30-Day Workout Challenge</a></li>
                <!-- Add more printable material links here -->
            </ul>
        </div>

        <!-- Include the user-provided resources -->
        <div class="col-lg-3 items shadow mt-5">
            <h4>User-Provided Resources</h4>
            <!-- Include user-provided resources here -->
            <!-- For example: -->
            <ul  class="p-0">
                <li><a href="#">Resource 1</a></li>
                <li><a href="#">Resource 2</a></li>
                <li><a href="#">Resource 3</a></li>
                <!-- Add more user-provided resource links here -->
            </ul>
        </div>
        </div>
       
    </div>

  <?php get_template_part( 'assets/template-parts/misc/content', 'newsletter' );  ?>
     <?php get_footer(); ?>