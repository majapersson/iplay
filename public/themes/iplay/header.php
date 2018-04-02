<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="site-logo">
        <a href="home"><img src="<?php bloginfo('template_url'); ?>/assets/images/iplaylogo_white_small.svg" alt=""></a>
        </div>
            <div class="nav-menu">
                    <?php wp_nav_menu(['theme_location' => 'primary-menu', 'exclude' => '6']); ?>
                    <div class="get-app-container">
                        <p>Get the app</p>
                    </div>
                    <div class="language-container">
                        <div class="language-icon"></div>
                    </div>
            </div>

    </header>
