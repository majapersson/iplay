<?php /* Template Name: News */

get_header();

$news = new WP_query([
    'post_type' => 'post'
]);

require template_path('templates/hero.php'); ?>

<main role="main" class="content">
    <div class="container news">
        <?php if ($news->have_posts()): while ($news->have_posts()): $news->the_post(); ?>
            <article class="news-item">
                <h2><?php the_title(); ?></h2>
                <p class="info">Posted by <?php the_author(); ?> on <?php the_time('j F Y'); ?></p>

                <?php the_content(); ?>
            </article>
        <?php endwhile; else: ?>
            <article>
                <p>Nothing to see.</p>
            </article>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
