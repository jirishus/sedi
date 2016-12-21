<?php get_header(); ?>

<div class="container">

<div class="row group">
 <div class="col-md-12">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <section class="single-blog">
   <p class="single-blog-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
   <p><?php the_post_thumbnail(); ?></p>
   <p class="excerpt group"><?php the_excerpt(); ?></p>
  </section>

  <?php endwhile; endif; ?>
 </div>


<div class="row group pagination">
 <div class="nav-previous alignleft"><?php next_posts_link( 'See Older Posts' ); ?></div>
 <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
</div>

  </div>
 </div>
</div>


<?php get_footer(); ?>