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
          'number' => [
              'std' => 0,
              'type' => 'number',
              'description' => 'Number of coworkers displayed',
              'label' => __('Coworkers'),
              ],
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

        $number = isset($instance['number']) && $instance['number'] !== 0 ? $instance['number'] : -1;

        $posts = get_posts([
            'numberposts' => $number,
            'order' => 'ASC',
            'post_type' => 'team_member',
        ]);

        echo $before_widget; ?>

<div class="content">
    <div class="container team">
        <?php foreach ($posts as $post):
            $fields = get_fields($post);
            $image = get_field('image', $post);
            $media = get_field('media', $post);
            ?>
            <div class="user">
                <div class="user__image">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $post->post_title ?>">
                </div>
                <div class="user__info">
                    <h3><?php _e($post->post_title, 'iplay') ?></h3>
                    <p class="span"><?php _e($fields['title'], 'iplay'); ?></p>
                    <?php _e($fields['description'], 'iplay'); ?>
                    <div class="social">
                        <a href="<?php echo $media['twitter'] ?>"><?php require template_path('assets/images/social-media/003-twitter-logo-silhouette.svg') ?></a>
                        <a href="<?php echo $media['linkedin'] ?>"><?php require template_path('assets/images/social-media/001-linkedin.svg') ?></a>
                        <a href="<?php echo $media['instagram'] ?>"><?php require template_path('assets/images/social-media/002-instagram-logo.svg') ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <p><a href="#" class="link"><?php esc_html_e('Our developers', 'iplay') ?></a> &darr;</p>
    </div>
</div>

  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_team', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
