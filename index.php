<?php get_header(); ?>

<div class="container">

<div class="row">
 <div class="col-md-8">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
  <section class="single-blog">
   <h3 class="single-blog-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h3>
   <p><?php the_date(); ?></p>
  </section>


  <?php endwhile; endif; ?>
 </div>
 <div class="col-md-4">
  <?php dynamic_sidebar('sidebar info'); ?>
 </div>
</div>

</div>


<?php get_footer(); ?>