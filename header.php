<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <section class="head">
    <div class="container flex1">
      <div class="scoial">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
      </div>
      <div class="logo">
        <img src="<?php echo get_theme_file_uri('/images/logo1.png') ?>" style="height: 75px; padding: 5px; margin-bottom: 5px;" alt="">
      </div>
      <div class="address">
        <i class="fas fa-map-marker-alt"></i>
        <span>Kampala, Uganda</span>
      </div>
    </div>
  </section>


  <header class="header">
    <div class="container">
      <nav class="navbar flex1">
        <div class="sticky_logo logo">
          <img src="<?php echo get_theme_file_uri('/images/logo1.png') ?>" style="height: 75px !important;" alt="">
        </div>

        <ul class="nav-menu">
          <li> <a href="#home">Home</a> </li>
          <li> <a href="#about">about</a> </li>
          <li> <a href="#room">Services</a> </li>
          <li> <a href="#services">rides</a> </li>
          <li> <a href="#shop">shop</a> </li>
          <li> <a href="#gallary">gallary</a> </li>
          <li> <a href="#contact">contact</a> </li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>

        <div class="head_contact">
          <i class="fas fa-phone-volume"></i>
          <span>+256 788888888</span>
        </div>
      </nav>
    </div>
  </header>