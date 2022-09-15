<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php //echo $data['WEBSITE_TITLE']?>OOP
  </title>
    <link rel="stylesheet" href="<?= ASSETS ?>minima/css/components.css">
    <link rel="stylesheet" href="<?= ASSETS ?>minima/css/icons.css">
    <link rel="stylesheet" href="<?= ASSETS ?>minima/css/responsee.css">
    <link rel="stylesheet" href="<?= ASSETS ?>minima/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= ASSETS ?>minima/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="<?= ASSETS ?>minima/css/lightcase.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="<?= ASSETS ?>minima/css/template-style.css">
    <link href="<?= ASSETS ?>minima/https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="<?= ASSETS ?>minima/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?= ASSETS ?>minima/js/jquery-ui.min.js"></script>      
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="<?= ASSETS ?>minima/../template/minimalista-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <?php if(isset($_SESSION['user_name'])){
          ?>
              Hi <?=$_SESSION['user_name'];?>
              <?php
        }
         ?>
          <div class="s-12 l-2">
            <a href="<?= ASSETS ?>minima/index.html" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="<?= ASSETS ?>minima/img/logo-dark.png" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="<?= ASSETS ?>minima/img/logo-dark.png" alt="">
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="<?= ROOT ?>home">Home</a></li>
                <li><a href="<?= ROOT ?>about">About Us</a></li>             
                <li><a href="<?= ROOT ?>contact">Contact</a></li>
                <?php if(!isset($_SESSION['user_name'])):?>
                <li><a href="<?= ROOT ?>login">Login</a></li>
                <li><a href="<?= ROOT ?>signup">Signup</a></li>
                <?php else: ?>
                  <li><a href="<?= ROOT ?>logout">Logout</a></li>
                  <li><a href="<?= ROOT ?>upload">Upload</a></li>
                <?php endif; ?>
                
              </ul>
            </div>
          </div>  
        </nav>
      </header>
  