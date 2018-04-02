<?php

declare(strict_types=1);

acf_field_group([
    'title' => __('Team member'),
    'fields' => [
        acf_text([
            'name' => 'title',
            'label'=> __('Title'),
        ]),
        acf_image([
            'name' => 'image',
            'label' => __('Image')
        ]),
        acf_wysiwyg([
            'name' => 'description',
            'label' => __('Description'),
            'media_upload' => false,
            'toolbar' => 'basic',
        ]),
    ],
    'style' => 'seamless',
    'location' => [[
        acf_location('post_type', 'team_member'),
    ]],
    'hide_on_screen' => [
        'the_content'
    ]
]);
