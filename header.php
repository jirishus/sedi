<!DOCTYPE HTML>

<head>
<title><?php wp_title('|'); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

<script>
  console.log('no goolge analytics');
</script>

<?php wp_head(); ?>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="/learnsteady">Home</a>  
  <a href="/learnsteady/about">About</a>
  <a href="#">Lessons</a>
  <a href="/learnsteady/resources">Resources</a>
    
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<!-- Don't show on single views -->
<?php if (!is_single()) { ?>

<section class="hero-unit">
 <div class="container">
  <div class="row hero-inner">

   <div class="col-md-8 col-md-offset-2">

    <h1>Invest In Your Knowledge</h1>
    <h2>Learn Cutting Edge Technologies</h2>
    
    <img src="http://placehold.it/80x80" alt ="" />
    <img src="http://placehold.it/80x80" alt ="" />
    <img src="http://placehold.it/80x80" alt ="" />
    <img src="http://placehold.it/80x80" alt ="" />
      
   </div>
  </div>
 </div>
</section>

<?php } ?>
