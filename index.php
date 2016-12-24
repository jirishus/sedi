<?php get_header(); ?>

<div class="container">

<div class="row group">
 <div class="col-md-12">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <section class="single-blog">
   <aside>
    <h4 class="single-blog-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h4>
    <p><?php the_post_thumbnail(); ?></p>
    <p class="excerpt group"><?php the_excerpt(); ?></p>
   </aside>
  </section>
 
  <?php endwhile; endif; ?>
 </div>

<div class="row group pagination">
 <div class="nav-previous pager-link"><?php next_posts_link( 'Previous' ); ?></div>
 <div class="nav-next pager-link"><?php previous_posts_link( 'Next' ); ?></div>
</div>

  </div>
 </div>
</div>


<?php get_footer(); ?>