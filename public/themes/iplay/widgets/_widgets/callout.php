<?php
/**
 * Home: Feature callout
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Callout extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_callout widget-callout';
        $this->widget_description = __('Display a responsive callout', 'iplay');
        $this->widget_id          = 'iplay_widget_callout';
        $this->widget_name        = __('Iplay - Callout', 'iplay');
        $this->settings           = array(
          'home widgetized' => array(
              'std' => __('Homepage/Widgetized', 'iplay'),
              'type' => 'widget-area',
          ),
          'title' => array(
              'type'  => 'text',
              'std'   => __('Callout', 'iplay'),
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
        <!-- <canvas id="stars" class="stars" width="300" height="300" data-color="#00FF7B"></canvas> -->
        <canvas class="particles" data-color="#3FBF55"></canvas>
<div class="container">
<div class="callout-left-section">
    <h1 class="widget-title widget-title--home"><?php if ($title) {
            echo $title;
        } ?></h1>
<div class="callout-description">
<h4><?php echo wpautop($description); ?></h4>
</div>


    <div class="download-app-container">

            <div class="google-play-box">
                        <a href="market://details?id=com.iplay">
                <p>Google Play</p>
                </a>
            </div>

    <div class="app-store-box">
        <a href="itms-apps://itunes.apple.com/se/app/iplay-sport/id1068927526?l=en&mt=8">
    <p>App Store</p>
    </a>
</div>

    </div>
    </div>
    <div class="callout-right-section">
    <div class="iphone-preview-container"></div>
    </div>
</div>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_callout', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
