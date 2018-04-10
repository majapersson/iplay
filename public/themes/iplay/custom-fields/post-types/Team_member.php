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
        acf_group([
            'name' => 'media',
            'label' => __('Social Media links'),
            'sub_fields' => [
                acf_url([
                    'name' => 'twitter',
                    'label' => __('Twitter link')
                ]),
                acf_url([
                    'name' => 'linkedin',
                    'label' => __('Linked In link')
                ]),
                acf_url([
                    'name' => 'instagram',
                    'label' => __('Instagram link')
                ]),
            ],
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
