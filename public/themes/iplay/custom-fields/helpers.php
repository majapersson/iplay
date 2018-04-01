<?php

declare(strict_types=1);

// Add a simpler editor toolbar to acf.
add_filter('acf/fields/wysiwyg/toolbars', function ($toolbars) {
    $toolbars['Simple'] = [
        1 => ['bold', 'italic', 'underline'],
    ];

    return $toolbars;
});
