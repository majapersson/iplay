<?php
/**
 * Home: Feature footer
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Footer extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_footer widget-footer';
        $this->widget_description = __('Display a responsive footer', 'iplay');
        $this->widget_id          = 'iplay_widget_footer';
        $this->widget_name        = __('Iplay - Footer', 'iplay');
        $this->settings           = array(
          'home widgetized' => array(
              'std' => __('Homepage/Widgetized', 'iplay'),
              'type' => 'widget-area',
          ),
          'title' => array(
              'type'  => 'text',
              'std'   => __('Newsletter', 'iplay'),
              'label' => __('Title:', 'iplay'),
          ),
          'description' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Description:', 'iplay'),
          ),
          'button text' => array(
              'type'  => 'text',
              'std'   => 'Subscribe',
              'label' => __('Button Text:', 'iplay'),
          ),
          'facebook' => array(
              'type'  => 'text',
              'std'   => 'https://www.facebook.com/iplay.sportofficial/',
              'label' => __('Facebook URL:', 'iplay'),
          ),
          'google' => array(
              'type'  => 'text',
              'std'   => 'https://play.google.com/store/apps/details?id=com.iplay&hl=sv',
              'label' => __('Google URL:', 'iplay'),
          ),
          'twitter' => array(
              'type'  => 'text',
              'std'   => 'https://twitter.com/IPLAY_GLOBAL',
              'label' => __('Twitter URL:', 'iplay'),
          ),
          'instagram' => array(
              'type'  => 'text',
              'std'   => 'https://www.instagram.com/iplay.sport/',
              'label' => __('Instagram URL:', 'iplay'),
          ),
          'linkedin' => array(
              'type'  => 'text',
              'std'   => 'https://www.linkedin.com/company/ipy-holding-ab/?originalSubdomain=se',
              'label' => __('Linkedin URL:', 'iplay'),
          ),
          'copyright' => array(
              'type'  => 'text',
              'std'   => '© 2018 All rights reserved. IPY Holding AB',
              'label' => __('Copyright Text:', 'iplay'),
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
        $button_text = isset($instance['button text']) ? $instance['button text'] : '';
        $facebook = isset($instance['facebook']) ? $instance['facebook'] : '';
        $google = isset($instance['google']) ? $instance['google'] : '';
        $twitter = isset($instance['twitter']) ? $instance['twitter'] : '';
        $instagram = isset($instance['instagram']) ? $instance['instagram'] : '';
        $linkedin = isset($instance['linkedin']) ? $instance['linkedin'] : '';
        $copyright = isset($instance['copyright']) ? $instance['copyright'] : '';


        echo $before_widget;
?>
<h1 class="widget-title widget-title--footer"><?php if ($title) {
        echo $title;
    } ?></h1>
    <h4 class="footer-description"><?php echo $description; ?></h4>
    <input class="footer-email" type="email" name="email" value="" placeholder="Enter e-mail address">
    <div class="footer-button">
        <p><?php echo $button_text; ?></p>
    </div>
    <div class="social-media-icons">
        <a href="<?php esc_url($facebook); ?>">
        <div class="facebook-icon"></div>
        </a>
        <a href="<?php esc_url($facebook); ?>">
        <div class="google-icon"></div>
        </a>
        <a href="<?php esc_url($facebook); ?>">
        <div class="twitter-icon"></div>
        </a>
        <a href="<?php esc_url($facebook); ?>">
        <div class="instagram-icon"></div>
        </a>
        <a href="<?php esc_url($facebook); ?>">
        <div class="linkedin-icon"></div>
        </a>
    </div>
    <div class="site-map">
        <?php wp_nav_menu(['theme_location' => 'primary-menu']);?>
    </div>
    <p class="copyright-text"><?php echo $copyright; ?></p>
  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_footer', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
