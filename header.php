<!DOCTYPE HTML>

<head>
 <title><?php wp_title('|'); ?></title>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
 <?php wp_head(); ?>
</head>
<body>

<header>

<div class="container">
 <div class="row">
  <div class="col-md-6">
   <a href="http://localhost:3000/learnsteady/">LearnSteady</a>
  </div>
  <div class="col-md-6">
   <?php dynamic_sidebar('main nav'); ?>
  </div>
 </div>
</header>

<div class="container">
