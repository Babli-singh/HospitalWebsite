




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Hospital</title>
  <meta name="title" content="Adex">
  <meta name="description" content="This is a business agency html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="<?php  echo get_template_directory_uri()  ?>./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri() ?>./assets/images/hero-bg.jpg">
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri() ?>./assets/images/hero-slide-1.jpg">
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri() ?>./assets/images/hero-slide-2.jpg">
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri() ?>./assets/images/hero-slide-3.jpg">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

 
    <div class="container">

<?php 
  wp_nav_menu(array('
  theme_location'=>'primary-menu'
  ,'menu_class'=>'nav'))

  ?>



    </div> 
  </header>