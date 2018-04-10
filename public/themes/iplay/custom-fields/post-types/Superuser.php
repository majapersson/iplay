<?php

declare(strict_types=1);

acf_field_group([
    'title' => __('Superuser'),
    'fields' => [
        acf_text([
            'name' => 'role',
            'label' => __('Role and sport'),
        ]),
        acf_text([
            'name' => 'team',
            'label' => __('Team'),
        ]),
        acf_image([
            'name' => 'image',
            'label' => __('Image'),
        ]),
        acf_wysiwyg([
            'name' => 'description',
            'label' => __('Testimonial'),
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
        acf_location('post_type', 'superuser'),
    ]],
    'hide_on_screen' => ['the_content']
]);
