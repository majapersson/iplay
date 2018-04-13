<?php
/**
 * Home: Feature callout
 *
 * @package Iplay
 * @category Widget
 * @since 3.0.0
 */
class Iplay_Widget_Hero extends Iplay_Widget
{
    public function __construct()
    {
        $this->widget_cssclass    = 'iplay_widget_hero';
        $this->widget_description = __('Display a hero image and title', 'iplay');
        $this->widget_id          = 'iplay_widget_hero';
        $this->widget_name        = __('Iplay - Hero', 'iplay');
        $this->settings           = array(
          'home widgetized' => array(
              'std' => __('Homepage/Widgetized', 'iplay'),
              'type' => 'widget-area',
          ),
          'title' => array(
              'type'  => 'text',
              'std'   => '',
              'label' => __('Title:', 'iplay'),
          ),
          'description' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Description:', 'iplay'),
          ),
          'phone' => [
                'type' => 'text',
                'std' => '',
                'label' => __('Phone number', 'iplay'),
            ],
            'mail' => [
                'type' => 'text',
                'std' => '',
                'label' => __('Email', 'iplay'),
            ],
      );

        // if (isset($pagename) && $pagename === 'contact') {
        //     $this->settings['phone'] = [
        //                   'type' => 'text',
        //                   'std' => '',
        //                   'label' => __('Phone number', 'iplay'),
        //               ];
        //   $this->settings['mail'] = [
        //                   'type' => 'text',
        //                   'std' => '',
        //                   'label' => __('Email', 'iplay'),
        //               ];
        // }
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
        $phone = isset($instance['phone']) ? $instance['phone'] : '';
        $mail = isset($instance['mail']) ? $instance['mail'] : '';

        echo $before_widget; ?>

<canvas id="stars" class="stars" data-color="#3FBF55" width="300" height="300"></canvas>
<div class="hero">
    <div class="hero__content">
        <h1 class="hero__title"><?php _e($title); ?></h1>
        <?php if (!empty($description)): ?>
            <p class="hero__text"><?php _e($description, 'iplay'); ?></p>
        <?php endif; ?>
        <?php if (!empty($phone) || !empty($mail)): ?>
            <div class="hero__contact">
                <?php if (!empty($phone)): ?>
                    <div class="phone">
                        <?php require template_path('assets/images/001-cell-phone.svg') ?>
                        <?php _e($phone, 'iplay') ?>
                    </div>
                <?php endif;
                 if (!empty($phone)): ?>
                 <div class="mail">
                     <?php require template_path('assets/images/002-black-envelope.svg') ?>
                    <?php _e($mail, 'iplay') ?>
                </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>


  <?php
        echo $after_widget;

        $content = apply_filters('iplay_widget_hero', ob_get_clean(), $instance, $args);

        echo $content;
    }
}
