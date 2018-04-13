<?php
/**
 * Home: Feature callout
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Contact extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_contact';
        $this->widget_description = __('Add a contact form', 'iplay');
        $this->widget_id          = 'iplay_widget_contact';
        $this->widget_name        = __('Iplay - Contact Form', 'iplay');
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

        $text = isset($instance['text']) ? $instance['text'] : '';

        global $post;
        // die(var_dump($post));
        echo $before_widget; ?>
<div class="content contact">
    <div class="container">
        <?php echo do_shortcode($post->post_content); ?>
    </div>
</div>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_contact', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
