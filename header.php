<!DOCTYPE html>
<html lang="en">
  <head>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navigation-bar">
      <div class="site-logo">WPFORGE</div>
      <div class="navigation">
        <ul class="nav-list">
          <li class="nav-item"><a href="#">HOME</a></li>
          <li class="nav-item"><a href="#">PORTFOLIO</a></li>
          <li class="nav-item"><a href="#">BLOG</a></li>
          <li class="nav-item"><a href="#">PRICING</a></li>
          <li class="nav-item"><a href="#">CONTACT</a></li>
        </ul>
      </div>
      <div class="search">
        <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i>SEARCH</button>
      </div>
      <div class="connect-container">
        <button class="connect-button">C</button>
      </div>
    </nav>
    <section class="hp-banner">
        <div class="title-container">
            <h2 class="banner-title-1">Wordpress Development</h2>
            <h2 class="banner-title-2">Agency</h2>
            <h3 class="banner-subtitle">Take your website to new heights by hiring WPForge for your next project.</h3>
        </div>
        <div class="banner-btn-container">
            <button class="banner-cta-btn">CONNECT</button>
        </div>
        <div class="agency-slogan">
            <p>GLOBAL WP AGENCY </p>
        </div>
    </section>
    <section class="banner2">
        <?php $bannerimg = '../../bannerimg1.jpg'; ?>
        <div class="banner-2-img">
            <img src="<?php echo $bannerimg; ?>" alt="image of a laptop and code on the screen">
        </div>
        <div class="banner-2-info">
            <h3 class="banner-2-title">Discover what we have to offer</h3>
            <p class="banner-2-subtitle">With WPForge you can count on us to design the website of your dreams.</p>
            <button class="banner-2-btn">ABOUT US</button>
        </div>
    </section>
 <section class="service-banner">
    <h3 class="service-title">Services for Our Clients</h3>
    <div class="service-box service-1">
        <div class="service-title-1">
            <p>01</p>
            <h4>Web Development</h4>
        </div>
        <p>-</p>
    </div>
    <div class="service-box service-2">
        <div class="service-title-2">
            <p>02</p>
            <h4>Website Redesign</h4>
        </div>
        <p>-</p>
    </div>
    <div class="service-box service-3">
    <div class="service-title-3">
            <p>03</p>
            <h4>SEO Audit</h4>
        </div>
        <p>-</p>
    </div>
    <div class="service-box service-4">
    <div class="service-title-4">
            <p>04</p>
            <h4>Custom Web Services</h4>
        </div>
        <p>-</p>
    </div>
 </section>