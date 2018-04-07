<?php
/**
 * Home: Feature callout
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Team extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_team';
        $this->widget_description = __('Display our coworkers', 'iplay');
        $this->widget_id          = 'iplay_widget_team';
        $this->widget_name        = __('Iplay - Team', 'iplay');
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
            'post_type' => 'team_member',
        ]);

        // die(var_dump($posts));

        echo $before_widget; ?>

<div class="content">
    <div class="container team">
        <?php foreach ($posts as $post):
            $fields = get_fields($post);
            $image = get_field('image', $post);
            ?>
            <div class="user">
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $post->post_title ?>">
                <div class="user__info">
                    <h2><?php echo $post->post_title ?></h2>
                    <p><strong><?php echo $fields['title']; ?></strong></p>
                    <p><?php echo $fields['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <a href="#" class="button">Our developers</a>
    </div>
</div>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_team', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
