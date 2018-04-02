<?php

declare(strict_types=1);

acf_field_group([
    'title' => __('Hero'),
    'fields' => [
        acf_image([
            'name' => 'hero_image',
            'label' => __('Hero Image')
        ]),
        acf_text([
            'name' => 'hero_title',
            'label' => __('Hero Title')
        ]),
        acf_wysiwyg([
            'name' => 'hero_paragraph',
            'label' => __('Hero Paragraph'),
            'instructions' => 'Optional paragraph to appear underneath the site title',
            'media_upload' => false,
            'toolbar' => 'basic'
        ])
    ],
    'style' => 'seamless',
    'location' => [[
        acf_location('post_type', 'page'),
    ]],
    'hide_on_screen' => [
        'the_content'
    ]
]);
