<?php

declare(strict_types=1);

add_action('init', function () {
    require template_path('/post-types/Superuser.php');
    require template_path('/post-types/Team_member.php');
    require template_path('/post-types/Milestone.php');
});
