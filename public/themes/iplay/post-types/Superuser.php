<?php

declare(strict_types=1);

register_post_type('superuser', [
    'enter_title_here' => 'Enter name here',
    'labels' => [
        'add_new_item' => __('Add New Superuser'),
        'edit_item' => __('Edit Superuser'),
        'name' => __('Superusers'),
        'search_items' => __('Search Superusers'),
        'singular_name' => __('Superuser'),
    ],
    'menu_icon' => 'dashicons-groups',
    'menu_position' => 25,
    'public' => true,
]);
