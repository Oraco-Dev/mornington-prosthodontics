<?php

$procedureMenu = array(
  'menu' => 'Procedures - Menu',
  'menu_class' => 'procedures__inner-menu-item',
  'menu_id' => 'procedures__inner-menu',
);

$procedureMenuItems = wp_get_nav_menu_items('Procedures - Menu');

?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="author" content="Oraco Agency">
  <!-- ADD CONTENT -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mornington Prosthodontics</title>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y0LMZ6N7SR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-Y0LMZ6N7SR');
  </script>
  <?php wp_head(); ?>
</head>

<div class="menu">
  <div class="container">
    <div class="menu__inner">
      <div class="menu__inner-links">
        <a href="/" class="menu-item-mobile fade-content delay-200">HOME</a>
        <div class="menu-accordion">
          <div class="menu-accordion-item fade-content delay-400">
            <div class="menu-accordion-item__head">
              <a class="menu-item-mobile">PROCEDURES</a>
              <img src="http://morningtonpros.local/wp-content/uploads/2023/11/icons8-chevron-down-52.png"
                class="menu-accordion-item__head-img" />
            </div>
            <div class="menu-accordion-item__content">
              <?php

              $child_menu_items = array();

              // Loop through the menu items
              foreach ($procedureMenuItems as $menu_item) {
                if ($menu_item->menu_item_parent != 0) {
                  // This menu item has a parent, so it's a child menu item
                  $child_menu_items[] = $menu_item;
                }
              }

              // Check if there are child menu items
              if (!empty($child_menu_items)) {
                // Loop through the child menu items
                foreach ($child_menu_items as $child_menu_item) {
                  // Display the child menu item's title and URL
                  echo '<a class="menu-item-mobile menu-accordion-item__content-child-link" href="' . esc_url($child_menu_item->url) . '">' . esc_html($child_menu_item->title) . '</a><br>';
                }
              } else {
                // No child menu items found
                echo 'No child menu items found.';
              }


              ?>
            </div>
          </div>
        </div>
        <a href="/referral" class="menu-item-mobile fade-content delay-600">REFERRALS</a>
        <a href="/contact" class="menu-item-mobile fade-content delay-800">CONTACT</a>
      </div>
      <a href="tel:0399238255"><button class="button-primary button-text-primary fade-content delay-1000">CALL US: 03
          9923
          8255</button></a>
      <img src="http://morningtonpros.local/wp-content/uploads/2023/11/MOP_Icon-White.svg"
        alt="Mornington Prosthodontics Logo" class="menu-img fade-content delay-1200" />
    </div>
  </div>
</div>

<div class="bt__button">
  <img src="http://morningtonpros.local/wp-content/uploads/2023/11/arrow-right.svg" alt="Arrow Icon - Scroll To Top"
    class="bt__button-img" />
</div>

<header class="header">
  <section class="container">
    <div class="container__inner">
      <div class="header__inner">
        <a href="/"><img src="http://morningtonpros.local/wp-content/uploads/2023/11/MOP_Logo-Black.svg"
            class="header__img" /></a>
        <div class="header__right">
          <div class="header__inner-links">
            <a href="/about" class="button-text-secondary">ABOUT</a>
            <?php
            wp_nav_menu($procedureMenu);
            ?>
            <a href="/referral" class="button-text-secondary">REFERRALS</a>
            <a href="/contact" class="button-text-secondary">CONTACT</a>
          </div>
          <div class="header__inner-btn"><a href="tel:0399238255"><button
                class="button-primary button-text-primary">CALL
                US: 03 9923
                8255</button></a>
          </div>
          <div class="hamburger">
            <div class="hamburger__icon">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>



<body>