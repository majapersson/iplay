<?php
/**
 * Home: Feature callout
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Hero extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_hero';
        $this->widget_description = __('Display a hero image and title', 'iplay');
        $this->widget_id          = 'iplay_widget_hero';
        $this->widget_name        = __('Iplay - Hero', 'iplay');
        $this->settings           = array(
          'home widgetized' => array(
              'std' => __('Homepage/Widgetized', 'iplay'),
              'type' => 'widget-area',
          ),
          'title' => array(
              'type'  => 'text',
              'std'   => __('Hero', 'iplay'),
              'label' => __('Title:', 'iplay'),
          ),
          'description' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Description:', 'iplay'),
          ),
      );
        parent::__construct();
    }

    /**
     * widget function.
     *
     * @see WP_Widget
     * @access public
     * @param array $args
     * @param array $instance
     * @return void
     */



    public function widget($args, $instance)
    {


        ob_start();

        extract($args);

        $title = isset($instance['title']) ? $instance['title'] : null;
        $description = isset($instance['description']) ? $instance['description'] : '';

        echo $before_widget; ?>

<div class="hero">
    <canvas id="stars"></canvas>
    <div class="hero__content">
        <h1 class="hero__title"><?php echo $title; ?></h1>
        <?php if (!empty($description)): ?>
            <p class="hero__text"><?php echo $description; ?></p>
        <?php endif; ?>
    </div>
</div>


  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_hero', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
