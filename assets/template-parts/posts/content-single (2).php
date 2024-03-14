<?php
/**
 * Template part to display page content in single.php.
 */
?>

<div class="col-lg-12 content-text">

    <span class="text"><?php echo single_cat_title(); ?></span>

    <?php
    /**
     * Page Thumbnail.
     */
    if (has_post_thumbnail()) :
        ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); // full, large, medium, custom size ?>
        </div>
    <?php endif; ?>

        <?php the_content(); 
        ?>
</div>
