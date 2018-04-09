<?php
/**
 * Home: Feature Hero Slider
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Hero_Slider extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_hero_slider widget-hero-slider';
        $this->widget_description = __('Display a responsive hero slider', 'iplay');
        $this->widget_id          = 'iplay_widget_hero_slider';
        $this->widget_name        = __('Iplay - Hero Slider', 'iplay');
        $this->settings           = array(
          'home widgetized' => array(
              'std' => __('Homepage/Widgetized', 'iplay'),
              'type' => 'widget-area',
          ),
          '#1 Slider Title' => array(
              'type'  => 'text',
              'std'   => __('FOR FANS', 'iplay'),
              'label' => __('#1 Slider Title:', 'iplay'),
          ),
          '#2 Slider Title' => array(
              'type'  => 'text',
              'std'   => __('FOR ATHLETES', 'iplay'),
              'label' => __('#2 Slider Title:', 'iplay'),
          ),
          '#3 Slider Title' => array(
              'type'  => 'text',
              'std'   => __('OTHER', 'iplay'),
              'label' => __('#3 Slider Title:', 'iplay'),
          ),
          'title' => array(
              'type'  => 'text',
              'std'   => __('Hero Slider', 'iplay'),
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

        $first_button_title = isset($instance['#1 Slider Title']) ? $instance['#1 Slider Title'] : null;
        $second_button_title = isset($instance['#2 Slider Title']) ? $instance['#2 Slider Title'] : null;
        $third_button_title = isset($instance['#3 Slider Title']) ? $instance['#3 Slider Title'] : null;
        $title = isset($instance['title']) ? $instance['title'] : null;
        $description = isset($instance['description']) ? $instance['description'] : '';

        echo $before_widget; ?>
        <style>

    		</style>


    <div class="slider-change-container">
        <div class="first-button">
            <h4><?php if ($first_button_title) {
                echo $first_button_title;
            } ?></h4>
        </div>
        <div class="second-button">
            <h4><?php if ($second_button_title) {
                echo $second_button_title;
            } ?></h4>
        </div>
        <div class="third-button">
            <h4><?php if ($third_button_title) {
                echo $third_button_title;
            } ?></h4>
        </div>
    </div>
    <div class="current-slide-container">
    <h1 class="widget-title widget-title"><?php if ($title) {
            echo $title;
        } ?></h1>
        <div class="mockup-text-container">
<div class="hero-slider-mockup-container"></div>
<div class="hero-slider-description-container">
<h4><?php echo $description; ?></h4>
</div>
</div>
<div class="hero-slider-icon-container">
    <div class="hero-slider-left-icons-container">
        <div class="hero-slider-top-icon-container">
        <div class="first-icon-contain"></div>
        <p>Connect with dieticians, mental coaches, agents and more.
</p>
        </div>
        <div class="hero-slider-bottom-icon-container">
        <div class="second-icon-contain"></div>
        <p>Shoot pictures, videos and report live from your games.</p>
        </div>
    </div>
    <div class="hero-slider-right-icons-container">
        <div class="hero-slider-top-icon-container">
        <div class="third-icon-contain"></div>
        <p>Connect your social networks to Iplay and maintain all your communication in one place.</p>
        </div>
        <div class="hero-slider-bottom-icon-container">
        <div class="fourth-icon-contain"></div>
        <p>Follow updates and flows from companies.</p>
        </div>
    </div>
</div>
</div>



  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_hero_slider', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
