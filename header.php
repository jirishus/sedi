<!DOCTYPE HTML>

<head>
 <title><?php wp_title('|'); ?></title>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
 <link href="<?php bloginfo('template_directory');?>/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">

 <?php wp_head(); // why do i need this? ?>
</head>
<body class="container">

<header class="row">
 <div class="col-md-6">
  <a href="http://localhost:8888/learnsteady/">LearnSteady</a>
 </div>
 <div class="col-md-6">
  <?php dynamic_sidebar('main nav'); ?>
 </div>
</header>