<?php
/**
 * Home: Feature callout
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Background extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_background';
        $this->widget_description = __('Add an animated background', 'iplay');
        $this->widget_id          = 'iplay_widget_background';
        $this->widget_name        = __('Iplay - Background', 'iplay');
        $this->settings           = array(
          'home widgetized' => array(
              'std' => __('Homepage/Widgetized', 'iplay'),
              'type' => 'widget-area',
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

        echo $before_widget; ?>
<!-- <canvas id="stars" class="stars" data-color="#375CE2" width="300" height="300"></canvas> -->

<canvas class="particles" data-color="#384dff"></canvas>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_background', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
