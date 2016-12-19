<?php get_header(); ?>


 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <!-- contents of the loop -->
 <?php the_title(); ?>
 <?php endwhile; endif; ?>


<?php get_footer(); ?>