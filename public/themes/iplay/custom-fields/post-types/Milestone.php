<?php

declare(strict_types=1);

acf_field_group([
    'title' => __('Milestone'),
    'fields' => [
        acf_text([
            'name' => 'date',
            'label' => __('Date'),
            'instructions' => __('Date in text format'),
        ]),
        acf_textarea([
            'name' => 'description',
            'label' => __('Description'),
        ]),
        acf_post_object([
            'name' => 'news_link',
            'label' => __('News Post'),
            'instructions' => __('Choose a news post to relate this milestone to'),
            'post_type' => 'post',
        ]),
    ],
    'style' => 'seamless',
    'location' => [[
        acf_location('post_type', 'milestone'),
    ]],
    'hide_on_screen' => ['the_content']
]);
