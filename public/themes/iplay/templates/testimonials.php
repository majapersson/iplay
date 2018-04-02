<?php /* Template Name: Testimonials */

get_header();

$posts = get_posts([
    'numberposts' => '-1',
    'post_type' => 'superuser',
]);
require template_path('templates/hero.php'); ?>

<div class="content">
    <div class="container testimonials">
        <?php foreach ($posts as $post):
            $fields = get_fields();
            $image = get_field('image'); ?>
            <div class="user">
                <div class="user__image">
                    <img src="<?php echo $image['url'] ?>" alt="<?php the_title() ?>">
                </div>
                <div class="user__info">
                    <h2><?php the_title() ?></h2>
                    <p><strong><?php the_field('team') ?></strong></p>
                    <p><?php the_field('description') ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>
