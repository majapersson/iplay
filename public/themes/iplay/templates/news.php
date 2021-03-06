<?php /* Template Name: News */

get_header();

$news = new WP_query([
    'post_type' => 'post',
    'numberposts' => 5,
]);

 ?>

<main role="main" class="content">
    <div class="container news">
        <?php if ($news->have_posts()): while ($news->have_posts()): $news->the_post();
        $category = get_the_category()[0];
        ?>
            <article class="news-item">
                <h3><a href="<?php the_permalink($post->ID) ?>"><?php the_title(); ?></a></h3>
                <p class="span">Posted in <a href="<?php echo get_category_link($category) ?>"><?php echo $category->name; ?></a> on <?php the_time('j F Y'); ?></p>

                <?php the_content(); ?>
            </article>
        <?php endwhile; else: ?>
            <article>
                <p>Nothing to see.</p>
            </article>
        <?php endif; ?>
        <p><a href="#" class="link">Load more posts</a> &darr;</p>
    </div>
</main>

<?php get_footer(); ?>
