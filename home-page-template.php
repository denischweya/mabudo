<?php
/*
Template Name: Custom Home Page
*/
?>

<?php get_header(); ?>

<div class="mx-auto">

    <?php if (have_posts()) : ?>

    <?php
        while (have_posts()) :
            the_post();
            ?>

        <div class="entry-content">
		    <?php the_content(); ?>
        </div>

    <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

    <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php
get_footer();
?>