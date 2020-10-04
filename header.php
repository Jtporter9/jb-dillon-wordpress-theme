<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>  
</head>
<body <?php body_class(); ?> >
    
<header>
  <div id="announcementBar" class="announcement-bar">
      <p class="announcement-bar-message">Free shipping. Free exchanges. No nonsense.</p>
      <a id="closeAnnouncement" class="announcement-bar-close-icon" href="#announementBar"><img src="<?php bloginfo('template_directory');?>/assets/x-icon.svg"></a>
  </div>
  <div class="menu-container container d-flex align-items-center justify-content-between">
      <a href="" type="submit" class="mobile-hamburger" aria-controls="MobileNav" aria-expanded="false" aria-label="Menu">
        <img src="<?php bloginfo('template_directory');?>/assets/hamburger.svg" class="icon icon-hamburger custom-hamburger">
      </a>
      <a href="<?php bloginfo('url');?>">
        <img src="<?php bloginfo('template_directory');?>/assets/logo.svg" class="img-fluid">
      </a>
      <?php
      wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-menu d-flex align-items-center justify-content-around'
          )
        );
      ?>
      <div class="site-header-icons-wrapper">
        <a href="/pages/help" class="">
          <span class="secondary-nav-link">Help</span>
        </a>

        <a href="/account/login" class="">
          <span class="secondary-nav-link">Login</span>
        </a>

        <a id="floatingCart" class="">
          <img src="<?php bloginfo('template_directory');?>/assets/cart-icon.svg">
        </a>
      </div>
  </div>
</header>

