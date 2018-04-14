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
          'First Superuser Picture' => array(
              'type'  => 'image',
              'std'   => '',
              'label' => __('First Superuser Picture:', 'iplay'),
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
        <style>
            .first-superuser .superuser-picture {

            }
        </style>
<canvas id="secondStars" class="stars" width="300" height="300" data-color="rgba(168, 140, 218, 0.2)"></canvas>
<h1><?php echo $title ?></h1>
<div class="superusers-container">
    <div class="first-superuser">
        <div class="superuser-picture">
            <div class="quote-icon"><h1>“</h1></div>
        </div>
        <div class="superuser-description">
            <p>Iplay is a unique tool that will really make a difference for us athletes.</p>
        </div>
        <div class="superuser-name-team">
            <h4>Victor Tomás</h4>
            <p>FC Barcelona</p>
        </div>
    </div>
    <div class="second-superuser">
        <div class="superuser-picture">
            <div class="quote-icon"><h1>“</h1></div>
        </div>
        <div class="superuser-description">
            <p>At Iplay, I have complete control over my communication and can build my brand even stronger.</p>
        </div>
        <div class="superuser-name-team">
            <h4>Niklas Ekberg</h4>
            <p>THW Kiel</p>
        </div>
    </div>
    <div class="third-superuser">
        <div class="superuser-picture">
            <div class="quote-icon"><h1>“</h1></div>
        </div>
        <div class="superuser-description">
            <p>Iplay is the platform that we previously lacked. Created for us athletes with our unique needs.</p>
        </div>
        <div class="superuser-name-team">
            <h4>Nathalie Hagman</h4>
            <p>Nykobing Falster HK</p>
        </div>
    </div>
</div>

    <a href=""><p>View all of our superusers</p></a>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_superuser', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
