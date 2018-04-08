<?php
/**
 * Home: Feature callout
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Testimonials extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_testimonials';
        $this->widget_description = __('Display our superusers', 'iplay');
        $this->widget_id          = 'iplay_widget_testimonials';
        $this->widget_name        = __('Iplay - Testimonials', 'iplay');
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
            'post_type' => 'superuser',
        ]);

        // die(var_dump($posts));

        echo $before_widget; ?>

<div class="content">
    <div class="container testimonials">
        <?php foreach ($posts as $post):
            $fields = get_fields($post);
            $image = get_field('image', $post);
            ?>
            <div class="user">
                <div class="user__image">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $post->post_title ?>">
                </div>
                <div class="user__info">
                    <h3><?php echo $post->post_title ?></h3>
                    <p><strong><?php echo $fields['team'] ?></strong></p>
                    <p><?php echo $fields['description'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_testmonials', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
