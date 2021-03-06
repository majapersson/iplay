<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#3FBF55">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="site-logo">
        <a href="home"><img src="<?php bloginfo('template_url'); ?>/assets/images/Iplay-logo-green.svg" alt=""></a>
        </div>
            <div class="nav-menu">
                    <?php wp_nav_menu(['theme_location' => 'primary-menu']);?>

                    <div class="language-container">
                        <div class="language-icon"></div>
                    </div>
            </div>
            <div class="mobile-menu">
            <button class="hamburger hamburger--spring" type="button">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
<div class="mobile-sub-menu">
    <div class="get-the-app-button">
        <p>Get the app</p>
    </div>
        <?php wp_nav_menu(['theme_location' => 'primary-menu']);?>

</div>
</div>
    </header>
    <?php
    $slug = basename(get_permalink());

    dynamic_sidebar('widget-area-'. $slug .'');
