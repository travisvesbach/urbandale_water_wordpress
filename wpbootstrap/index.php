<?php get_header(); ?>

<?php
    while ( have_posts() ) : the_post(); ?>
        <div class="entry-content-page">
            <?php the_content(); ?>
        </div>

<?php
	endwhile; 
	wp_reset_query(); 
?>


<?php get_footer(); ?>