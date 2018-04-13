<?php

declare(strict_types=1);

add_action('init', function () {
    require template_path('custom-fields/helpers.php');
    require template_path('custom-fields/post-types/Superuser.php');
    require template_path('custom-fields/post-types/Team_member.php');
    require template_path('custom-fields/post-types/Milestone.php');
});
