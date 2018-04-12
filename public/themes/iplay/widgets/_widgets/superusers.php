<?php
/**
 * Home: Feature superuser
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Superuser extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_superuser widget-superuser';
        $this->widget_description = __('Display a Superuser Page', 'iplay');
        $this->widget_id          = 'iplay_widget_superuser';
        $this->widget_name        = __('Iplay - Superuser', 'iplay');
        $this->settings           = array(
          'home widgetized' => array(
              'std' => __('Homepage/Widgetized', 'iplay'),
              'type' => 'widget-area',
          ),
          'title' => array(
              'type'  => 'text',
              'std'   => __('Superuser', 'iplay'),
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
<canvas id="secondStars" class="stars" width="300" height="300" data-color="#fff"></canvas>


  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_superuser', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
