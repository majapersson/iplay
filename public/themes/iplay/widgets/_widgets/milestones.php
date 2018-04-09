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
            'post_type' => 'milestones',
        ]);

        // die(var_dump($posts));

        echo $before_widget; ?>

<div class="content">
    <div class="container">
        <?php foreach ($posts as $post):
            $fields = get_fields($post);
            $image = get_field('image', $post);
            ?>
            <div class="milestone">
                <p><?php echo $post->post_title ?></p>
                <p><?php echo $fields['description']; ?></p>
                <p><?php echo $fields['date']; ?></p>
            </div>
            <div class="timeline">
            </div>
        <?php endforeach; ?>
    </div>
</div>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_milestones', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
