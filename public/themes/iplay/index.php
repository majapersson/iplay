<?php get_header(); ?>

<main role="main" class="content">
    <div class="container news">
        <h1>News</h1>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
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

<?php get_footer();
