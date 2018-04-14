<?php
/**
 * Home: Feature callout
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Milestones extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_milestones';
        $this->widget_description = __('Display your milestones', 'iplay');
        $this->widget_id          = 'iplay_widget_milestones';
        $this->widget_name        = __('Iplay - Milestones', 'iplay');
        $this->settings           = array(
          'home widgetized' => array(
              'std' => __('Homepage/Widgetized', 'iplay'),
              'type' => 'widget-area',
          ),
          'title' => [
              'std' => __('Your hero title', 'iplay'),
              'type' => 'text',
              'label' => __('Title:', 'iplay'),
              ]
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

        $posts = get_posts([
            'numberposts' => '-1',
            'order' => 'ASC',
            'post_type' => 'milestone',
        ]);

        $title = isset($instance['title']) ? $instance['title'] : '';

        echo $before_widget; ?>

    <div class="container">
        <section class="hero small">
            <h1 class="hero__title"><?php _e($title, 'iplay') ?></h1>
        </section>
        <?php foreach ($posts as $post):
            $fields = get_fields($post);
            ?>
            <div class="milestone__wrapper">
                <div class="milestone">
                    <div class="milestone__content">
                        <div class="milestone__title">
                            <p ><?php _e($post->post_title, 'iplay') ?></p>
                        </div>
                        <p><?php _e($fields['description'], 'iplay'); ?></p>
                        <a href="#" class="milestone__link">Read more &rarr;</a>
                    </div>
                    <p class="milestone__date"><?php _e($fields['date'], 'iplay'); ?></p>
                </div>
                <div class="timeline">
                    <div class="dot"></div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="milestone__wrapper--end">
            <div class="timeline"></div>
            <div class="timeline"></div>
            <div class="timeline"></div>
        </div>
    </div>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_milestones', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
