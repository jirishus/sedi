<!DOCTYPE HTML>

<head>
<title><?php wp_title('|'); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39146802-2', 'auto');
  ga('send', 'pageview');
  ga('send', 'event', 'Video', 'play', 'some random label');
</script>
<?php wp_head(); ?>
</head>
<body>

<header>
 <div class="container">
 <div class="row">
  <div class="col-md-3">
   <a href="/">LearnSteady</a>
  </div>
  <div class="col-md-9">
   <?php dynamic_sidebar('main nav'); ?>
  </div>
 </div>
</div>
</header>

<section class="hero-unit">
 <div class="container">
  <div class="row hero-inner">

   <div class="col-md-12">
    <h2>Web Development, Software, And More</h2>
    <!-- <a href="#" class="btn btn-primary">Get Started Now</a> -->

    <?php dynamic_sidebar('main search') ?>
   </div>

  </div>
 </div>
</section>

<div class="learn-nav group">
  <?php dynamic_sidebar('learn nav'); ?>
</div>
