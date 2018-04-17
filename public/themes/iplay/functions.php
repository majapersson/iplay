<?php

declare(strict_types=1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

// Register post types
require template_path('post-types/index.php');

// Register custom fields
require template_path('custom-fields/index.php');

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Show the admin bar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Add primary WordPress menu.
    register_nav_menu('primary-menu', __('Primary Menu', 'wordplate'));
});
add_theme_support( 'menus' );
// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('wordplate', mix('styles/app.css'));

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/scripts/jquery-3.2.1.min.js', array(), null, true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/scripts/slick.js', array(), null, true );
    wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('wordplate');
});





// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);

// Set custom excerpt more.
add_filter('excerpt_more', function () {
    return '...';
});

// Set custom excerpt length.
add_filter('excerpt_length', function () {
    return 101;
});

class Iplay
{

private static $instance;

    public $widgets;

    public static function instance()
  {
      if (! isset(self::$instance) && ! (self::$instance instanceof Iplay)) {
          self::$instance = new self;
      }

      return self::$instance;
  }


public function __construct()
    {
        $this->includes();
        $this->setup();
    }



function includes()
{
    $this->files = array(
            'class-widgets.php',
            'class-widget.php',
        );

    foreach ($this->files as $file) {
        require_once(get_template_directory() . '/widgets/' . $file);
    }
}





private function setup()
  {
      $this->widgets = new Iplay_Widgets();

  }





}
function iplay()
{
    return Iplay::instance();
}
iplay();
