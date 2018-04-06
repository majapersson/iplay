<?php /* Template Name: Team */

get_header();

$posts = get_posts([
    'numberposts' => '-1',
    'order' => 'ASC',
    'post_type' => 'team_member',
]);
require template_path('templates/hero.php'); ?>

<div class="content">
    <div class="container team">
        <?php foreach ($posts as $post):
            $fields = get_fields();
            $image = get_field('image'); ?>
            <div class="user">
                <img src="<?php echo $image['url'] ?>" alt="<?php the_title() ?>">
                <div class="user__info">
                    <h2><?php the_title() ?></h2>
                    <p><strong><?php the_field('title') ?></strong></p>
                    <p><?php the_field('description') ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <a href="#" class="button">Our developers</a>
    </div>
</div>

<?php get_footer(); ?>
