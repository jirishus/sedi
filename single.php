<?php get_header(); ?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <h1 class="title_single"><?php the_title(); ?></h1> 
   <p><?php the_content(); ?></p>
  </div>
 </div>
</div>

<div class="comment list">
 <?php comments_template(); ?>
</div>

<?php get_footer(); ?>