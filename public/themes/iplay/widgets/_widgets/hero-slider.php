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
          'For Fans' => array(
              'std' => __('For Fans', 'iplay'),
              'type' => 'widget-section',
          ),
          'for-fans-title' => array(
              'type'  => 'text',
              'std'   => __('Never miss a moment.', 'iplay'),
              'label' => __('For Fans Title:', 'iplay'),
          ),
          'for-fans-description' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('For Fans Description:', 'iplay'),
          ),
          'fans-first-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Fans First Icon Text:', 'iplay'),
          ),
          'fans-second-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Fans Second Icon Text:', 'iplay'),
          ),
          'fans-third-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Fans Third Icon Text:', 'iplay'),
          ),
          'fans-fourth-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Fans Fourth Icon Text:', 'iplay'),
          ),
          'For Athletes' => array(
              'std' => __('For Athletes', 'iplay'),
              'type' => 'widget-section',
          ),
          'for-atheletes-title' => array(
              'type'  => 'text',
              'std'   => __('Take control of your career.', 'iplay'),
              'label' => __('For Athletes Title:', 'iplay'),
          ),
          'for-athletes-description' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('For Athletes Description:', 'iplay'),
          ),
          'athletes-first-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Athletes First Icon Text:', 'iplay'),
          ),
          'athletes-second-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Athletes Second Icon Text:', 'iplay'),
          ),
          'athletes-third-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Athletes Third Icon Text:', 'iplay'),
          ),
          'athletes-fourth-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Athletes Fourth Icon Text:', 'iplay'),
          ),
          'Other' => array(
              'std' => __('Other', 'iplay'),
              'type' => 'widget-section',
          ),
          'other-title' => array(
              'type'  => 'text',
              'std'   => __('Use Iplay in your own way.', 'iplay'),
              'label' => __('Other Title:', 'iplay'),
          ),
          'other-description' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Other Description:', 'iplay'),
          ),
          'other-first-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Other First Icon Text:', 'iplay'),
          ),
          'other-second-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Other Second Icon Text:', 'iplay'),
          ),
          'other-third-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Other Third Icon Text:', 'iplay'),
          ),
          'other-fourth-icon-text' => array(
              'type'  => 'textarea',
              'rows'  => 4,
              'std'   => null,
              'label' => __('Other Fourth Icon Text:', 'iplay'),
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
        // FOR FANS
        $for_fans_title = isset($instance['for-fans-title']) ? $instance['for-fans-title'] : null;
        $for_fans_description = isset($instance['for-fans-description']) ? $instance['for-fans-description'] : '';
        $for_fans_first_icon_text = isset($instance['fans-first-icon-text']) ? $instance['fans-first-icon-text'] : '';
        $for_fans_second_icon_text = isset($instance['fans-second-icon-text']) ? $instance['fans-second-icon-text'] : '';
        $for_fans_third_icon_text = isset($instance['fans-third-icon-text']) ? $instance['fans-third-icon-text'] : '';
        $for_fans_fourth_icon_text = isset($instance['fans-fourth-icon-text']) ? $instance['fans-fourth-icon-text'] : '';
        // FOR ATHELETES
        $for_athletes_title = isset($instance['for-atheletes-title']) ? $instance['for-atheletes-title'] : null;
        $for_athletes_description = isset($instance['for-athletes-description']) ? $instance['for-athletes-description'] : '';
        $for_athletes_first_icon_text = isset($instance['athletes-first-icon-text']) ? $instance['athletes-first-icon-text'] : '';
        $for_athletes_second_icon_text = isset($instance['athletes-second-icon-text']) ? $instance['athletes-second-icon-text'] : '';
        $for_athletes_third_icon_text = isset($instance['athletes-third-icon-text']) ? $instance['athletes-third-icon-text'] : '';
        $for_athletes_fourth_icon_text = isset($instance['athletes-fourth-icon-text']) ? $instance['athletes-fourth-icon-text'] : '';
        // OTHER
        $other_title = isset($instance['other-title']) ? $instance['other-title'] : null;
        $other_description = isset($instance['other-description']) ? $instance['other-description'] : '';
        $other_first_icon_text = isset($instance['other-first-icon-text']) ? $instance['other-first-icon-text'] : '';
        $other_second_icon_text = isset($instance['other-second-icon-text']) ? $instance['other-second-icon-text'] : '';
        $other_third_icon_text = isset($instance['other-third-icon-text']) ? $instance['other-third-icon-text'] : '';
        $other_fourth_icon_text = isset($instance['other-fourth-icon-text']) ? $instance['other-fourth-icon-text'] : '';

        echo $before_widget; ?>
        <style>

    		</style>


    <div class="slider-change-container">
        <div class="first-button fans" id="firstButton">
            <h4><?php if ($first_button_title) {
                echo $first_button_title;
            } ?></h4>
        </div>
        <div class="second-button athletes active" id="secondButton">
            <h4><?php if ($second_button_title) {
                echo $second_button_title;
            } ?></h4>
        </div>
        <div class="third-button other" id="thirdButton">
            <h4><?php if ($third_button_title) {
                echo $third_button_title;
            } ?></h4>
        </div>
    </div>
    <div class="current-slide-container">
        <h1 id="firstButtonTitle"><?php echo $for_fans_title; ?></h1>
    <h1 class="active" id="secondButtonTitle"><?php echo $for_athletes_title; ?></h1>
<h1 id="thirdButtonTitle"><?php echo $other_title?></h1>
        <div class="mockup-text-container">
            <div id="firstButtonMockup" class="hero-slider-mockup-container fans"></div>
            <div id="secondButtonMockup" class="hero-slider-mockup-container athletes active"></div>
<div id="thirdButtonMockup" class="hero-slider-mockup-container other"></div>
<div class="hero-slider-description-container">
    <h4 id="firstButtonDescription"><?php echo $for_fans_description; ?></h4>
    <h4 class="active" id="secondButtonDescription"><?php echo $for_athletes_description; ?></h4>
<h4 id="thirdButtonDescription"><?php echo $other_description; ?></h4>
</div>
</div>
<div class="hero-slider-icon-container">
    <div class="hero-slider-left-icons-container">
        <div class="hero-slider-top-icon-container">
        <div id="firstIcon" class="first-icon-contain athletes"></div>
        <p id="FirstIconTextfirstButton"><?php echo $for_fans_first_icon_text; ?></p>
        <p id="FirstIconTextsecondButton" class="active"><?php echo $for_athletes_first_icon_text; ?></p>
        <p id="FirstIconTextthirdButton"><?php echo $other_first_icon_text; ?></p>
        </div>
        <div class="hero-slider-bottom-icon-container">
        <div id="secondIcon" class="second-icon-contain athletes"></div>
        <p id="SecondIconTextfirstButton"><?php echo $for_fans_second_icon_text; ?></p>
        <p id="SecondIconTextsecondButton" class="active"><?php echo $for_athletes_second_icon_text; ?></p>
        <p id="SecondIconTextthirdButton"><?php echo $other_second_icon_text; ?></p>
        </div>
    </div>
    <div class="hero-slider-right-icons-container">
        <div class="hero-slider-top-icon-container">
        <div id="thirdIcon" class="third-icon-contain athletes"></div>
        <p id="ThirdIconTextfirstButton"><?php echo $for_fans_third_icon_text; ?></p>
        <p id="ThirdIconTextsecondButton" class="active"><?php echo $for_athletes_third_icon_text; ?></p>
        <p id="ThirdIconTextthirdButton"><?php echo $other_third_icon_text; ?></p>
        </div>
        <div class="hero-slider-bottom-icon-container">
        <div id="fourthIcon" class="fourth-icon-contain athletes"></div>
        <p id="FourthIconTextfirstButton"><?php echo $for_fans_fourth_icon_text; ?></p>
        <p id="FourthIconTextsecondButton" class="active"><?php echo $for_athletes_fourth_icon_text; ?></p>
        <p id="FourthIconTextthirdButton"><?php echo $other_fourth_icon_text; ?></p>
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
