<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">

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
            <div class="nav-menu-mobile">
                <label>
  <input type='checkbox'>
  <span class='menu'>
    <span class='hamburger'></span>
  </span>
  <ul>
    <li>
      <a href='#'>Home</a>
    </li>
    <li>
      <a href='#'>About</a>
    </li>
    <li>
      <a href='#'>Work</a>
    </li>
  </ul>
</label>
            </div>

    </header>
    <?php
    $slug = basename(get_permalink());

    dynamic_sidebar('widget-area-'. $slug .'');
