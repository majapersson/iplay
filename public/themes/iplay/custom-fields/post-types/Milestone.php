<?php

declare(strict_types=1);

acf_field_group([
    'title' => __('Milestone'),
    'fields' => [
        acf_text([
            'name' => 'date',
            'label' => __('Date'),
        ]),
        acf_textarea([
            'name' => 'description',
            'label' => __('Description'),
        ]),
    ],
    'style' => 'seamless',
    'location' => [[
        acf_location('post_type', 'milestone'),
    ]],
    'hide_on_screen' => ['the_content']
]);
