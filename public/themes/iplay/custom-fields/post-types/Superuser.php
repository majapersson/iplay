<?php

declare(strict_types=1);

acf_field_group([
    'title' => __('Superuser'),
    'fields' => [
        acf_text([
            'name' => 'team',
            'label' => __('Team and sport'),
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
    ],
    'style' => 'seamless',
    'location' => [[
        acf_location('post_type', 'superuser'),
    ]],
    'hide_on_screen' => ['the_content']
]);
