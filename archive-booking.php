<?php


/**
 * 
 * Name:About Archive
 * Template Name:booking-page */

//get posts
?>
<?php get_header(); ?>

<iframe
      width="100%"
      height="750px"
      src="https://nancyogboi.zohobookings.com/portal-embed#/4626322000000039016"
      frameborder="0"
      allowfullscreen="true"
        allow="geolocation; microphone; camera"
        title="Zoho Bookings"
        allowpaymentrequest="true"
    >
    </iframe>



<?php get_template_part( 'assets/template-parts/misc/content', 'newsletter' );  ?>
     <?php get_footer(); ?>