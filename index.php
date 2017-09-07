<?php get_header(); ?>

<div class="container">

<div class="row group">
 <div class="col-sm-8">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <section class="single-blog">
   <aside class="row group">    
    <div class="single-blog-inner col-sm-8 col-sm-offset-2">
  
     <!-- Post Meta -->     
     <h4 class="single-blog-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h4>     
     <a class="read-more" href="<?php esc_url( the_permalink() ); ?>">Read More</a>
     
    </div>
   </aside>
  </section>
 
  <?php endwhile; endif; ?>
 </div>

 <div class="col-sm-4 main-sidebar">
  <h3>Browser Our Tutorials</h3>  
  <p><?php dynamic_sidebar('sidebar info'); ?></p>
 </div>

<div class="row group pagination">
 <div class="nav-previous pager-link"><?php next_posts_link( 'Previous' ); ?></div>
 <div class="nav-next pager-link"><?php previous_posts_link( 'Next' ); ?></div>
</div>

  </div>
 </div>
</div>


<?php get_footer(); ?>