<?php get_header(); ?>

<!-- write some home page specific markup -->
<?php if (is_front_page()) { ?>

<div class="container">

  <section class="row hero-unit">
    <div class="col-md-12">
      <h1>Invest In Your Knowledge</h1>
      <h2>Learn Cutting Edge Technologies</h2>
    </div>
  </section>

</div>

<?php } ?>

<!-- content from wordpress admin pages -->
<div class="container">
<div class="row">
 <div class="col-md-12">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
 </div>
</div>
</div>

<?php get_footer(); ?>