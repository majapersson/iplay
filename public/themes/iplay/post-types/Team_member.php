<?php

declare(strict_types=1);

register_post_type('team_member', [
    'enter_title_here' => 'Enter name here',
    'labels' => [
        'add_new_item' => __('Add New Team member'),
        'edit_item' => __('Edit Team member'),
        'name' => __('Team members'),
        'search_items' => __('Search Team members'),
        'singular_name' => __('Team member'),
    ],
    'menu_icon' => 'dashicons-admin-users',
    'menu_position' => 20,
    'public' => true,
]);
