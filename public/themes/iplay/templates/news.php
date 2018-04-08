<?php /* Template Name: News */

get_header();

$news = new WP_query([
    'post_type' => 'post',
    'numberposts' => 5,
]);

dynamic_sidebar('widget_area_news');
 ?>

<main role="main" class="content">
    <div class="container news">
        <?php if ($news->have_posts()): while ($news->have_posts()): $news->the_post();
        $category = get_the_category()[0];
        ?>
            <article class="news-item">
                <h3><?php the_title(); ?></h3>
                <p class="span">Posted in <?php echo $category->name; ?> on <?php the_time('j F Y'); ?></p>

                <?php the_content(); ?>
            </article>
        <?php endwhile; else: ?>
            <article>
                <p>Nothing to see.</p>
            </article>
        <?php endif; ?>
        <button class="button"><p>Load more posts</p></button>
    </div>
</main>

<?php get_footer(); ?>
