<?php /* Template Name: Testimonials */

get_header();

$posts = get_posts([
    'numberposts' => '-1',
    'post_type' => 'superuser',
]); ?>
<div class="container">

    <?php foreach ($posts as $post):
        $fields = get_fields();
        $image = get_field('image'); ?>
        <div class="user">
            <img src="<?php echo $image['url'] ?>" alt="<?php the_title() ?>">
            <div class="user__info">
                <h2><?php the_title() ?></h2>
                <p><strong><?php the_field('team') ?></strong></p>
                <p><?php the_field('description') ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php get_footer(); ?>
