<?php get_header(); ?>

<div class="container single_content">
 <div class="row">
  <div class="col-md-12">
   <h1 class="title_single"><?php the_title(); ?></h1> 
   <p class="single_category">Posted In : <?php the_category(); ?></p>
   <p><?php the_content(); ?></p>
  </div>
 </div>
</div>


<?php get_footer(); ?>