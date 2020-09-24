<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>  
</head>
<body <?php body_class(); ?> >
    
<header>
<div class="container">
  <div class="row d-flex align-items-center justify-content-between">
      <img src="<?php bloginfo('template_directory');?>/assets/logo.svg" class="img-fluid">
      <?php
      wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-menu d-flex align-items-center justify-content-around'
          )
        );
      ?>
  </div>
</div>
</header>

