<?php


class Iplay_Widgets
{
    public function __construct()
    {
        $widgets = array(
          'callout.php',
          'hero.php',
          'team.php',
          'testimonials.php',
          'hero-slider.php',
          'superusers.php',
          'milestones.php',
          'background.php',
          'contact.php',
        );

        foreach ($widgets as $widget) {
            require_once(trailingslashit(dirname(__FILE__)) . '_widgets/' . $widget);
        }


        add_action('widgets_init', array( $this, 'register_widgets' ));
        add_action('widgets_init', array( $this, 'register_sidebars' ));
    }

    public function register_widgets()
    {
        register_widget('Iplay_Widget_Callout');
        register_widget('Iplay_Widget_Hero');
        register_widget('Iplay_Widget_Team');
        register_widget('Iplay_Widget_Testimonials');
        register_widget('Iplay_Widget_Hero_Slider');
        register_widget('Iplay_Widget_Superuser');
        register_widget('Iplay_Widget_Milestones');
        register_widget('Iplay_Widget_Background');
        register_widget('Iplay_Widget_Contact');
    }

    public function register_sidebars()
    {
      $pages = get_pages();
               foreach ($pages as $page) {
                   register_sidebar(array(
                     'name'          => __(''. $page -> post_title .' Widget Area', 'iplay'),
                     'id'            => 'widget-area-'. $page -> post_name.'',
                     'description'   => __('Choose what should display on the '. $page -> post_title .' page.', 'iplay'),
                     'before_widget' => '<section id="%1$s" class="widget widget-- %2$s">',
                     'after_widget'  => '</section>',
                     'before_title'  => '<h3 class="widget-title widget-title-'. $page -> post_name.'">',
                     'after_title'   => '</h3>',
                 ));
               }
    }
}
