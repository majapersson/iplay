<?php

declare(strict_types=1);

register_post_type('milestone', [
    'enter_title_here' => 'Enter name here',
    'labels' => [
        'add_new_item' => __('Add New Milestone'),
        'edit_item' => __('Edit Milestone'),
        'name' => __('Milestones'),
        'search_items' => __('Search Milestones'),
        'singular_name' => __('Milestone'),
    ],
    'menu_icon' => 'dashicons-awards',
    'menu_position' => 25,
    'public' => true,
]);
